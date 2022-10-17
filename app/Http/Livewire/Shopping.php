<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Shopping as Shoppings;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class Shopping extends Component
{
    public $orden, $order_product, $total_price_order, $total_money, $money, $data ,$search, $count_item, $sud_total,$direccion,$telefono,$retiro_sucursal,$envio_domicilio, $tipo_envio, $metodo_pago,$contado,$monto,$transferencia_bnc,$ref,$fecha_pago, $total; 
    
    public $updateMode  = false;
    public $imputActive = false;
 
    
    public function render()

    
    {
        $id = Auth::user()->id;       
        $this->Title = "Shopping";
        $this->data =  Product::select('shopping.id','shopping.product_id','products.price','products.name','shopping.order_quantity')
            ->join('shopping', 'products.id', '=', 'shopping.product_id')
            ->where('shopping.user_id', '=', $id)
            ->get();

        $this->count_item = Shoppings::select(DB::raw('SUM(shopping.order_quantity) As cantidad'))
            ->where('shopping.user_id','=', $id)
            ->get();
            
        $this->sud_total = Product::select(DB::raw('SUM(shopping.order_quantity * products.price) As total'))
            ->join('shopping', 'products.id', '=', 'shopping.product_id')
            ->where('shopping.user_id', '=', $id)
            ->get();

            return view('livewire.shopping');
    }
    public function resetInput()
    {
        $this->emitUpdates();
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Shoppings::find($id);
            $record->delete();

            $this->emit('notify:toast', ['type'  => 'success', 'name' => 'Registro eliminado...']);
            $this->resetInput();
        }
    }
    public function reset_cart()
    {
        $id = Auth::user()->id;
        if ($id) {
            $record = Shoppings::where('shopping.user_id', '=', $id);
            $record->delete();

            $this->emit('notify:toast', ['type'  => 'success', 'name' => 'Registro eliminado...']);
            $this->resetInput();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {

        if ($this->updateMode)
            return $this->update();

        return $this->store();
    }




    public function store()
    {
        $id = Auth::user()->id;

        $money = Product::select(DB::raw('SUM(shopping.order_quantity * products.price) As total'))
            ->join('shopping', 'products.id', '=', 'shopping.product_id')
            ->where('shopping.user_id', '=', $id)
            ->get();

        $total_money=$money{0}{'total'}*0.21+$money{0}{'total'};
        /* dd($total_money); */
        

        $order_product =  Shoppings::select('shopping.product_id','shopping.price','shopping.order_quantity')
            ->where('shopping.user_id', '=', $id)
            ->get();        

        // $this->validate([
        //      'direccion'      => 'required'
            
        // ]);
        $orden=Order::create([
            'direccion'          => $this->direccion,
            'telefono'         => $this->telefono,
            'tipo_envio'         => $this->tipo_envio,
            'metodo_pago'       => $this->metodo_pago,
            'monto' => $this->monto,
            'ref' => $this->ref,
            'fecha_pago' => $this->fecha_pago,
            'user_id'=> $id,
            'total'=>$total_money,
            'status'=>'Iniciado'
        ]);

        foreach($order_product as $key => $ord_prod)
        {
	 //       dd($ord_prod);
            $total_price_order= $ord_prod->price*$ord_prod->order_quantity;
        
            OrderDetails::create([

                'order_id'=>$orden->id,
                'product_id'=>$ord_prod->product_id,
                'price'=>$ord_prod->price,
                'quantity'=>$ord_prod->order_quantity,
                'total'=>$total_price_order,

            ]);
        }
        //$this->emit('notify:toast', ['type'  => 'success', 'name' => 'Registro creado...']);
        $this->orden = $orden->id;
        $this->pedido();
        $this->resetInput();
        $this->reset_cart();
        return redirect()->back()->with('message', 'Orden Realizada Con Exito...');
    }
    private function emitUpdates()
    {
        return redirect()->to('/shopping'); 

    }
    
    public function pedido(){
        $id = $this->orden;
        $order = Order::find($id);
        $order->status= 'Iniciado';
        $orderID = 'WEB-' . Str::padLeft($order->id, 5, '0');
        $itemObject = [];
        $total = 0;
        $orderitems = OrderDetails::where('order_id', $id)->get();
        foreach ($orderitems as $item) {
            $p = Product::where('id', $item->product_id)->first();
            $itemObject[] = [
                'ProductCode' => $p->id,
                'SKUCode'     => $p->skufield,
                'Description' => $p->name,
                'Quantity'    => $item->quantity,
                'UnitPrice'   => $item->price,
            ];
            $total += $item->price * $item->quantity;
        }
        $orderObject = [
            'OrderID' => $orderID,
                'OrderNumber' => $orderID,
                'Date' => /* '2022-08-09T09:31:00' */$order->created_at->format('Y-m-d\TH:i:s'),
                'Total' => $total,
                'TotalDiscount' => 0.0,
                'Comment' => 'PEDIDO WEB COD: ' . $orderID . ' - ' . $order->user->name,
                'Customer' => [
                    "CustomerID" => $order->user->id,  
                    'DocumentType' => $order->user->document_tyoe ?? '86',
                    'DocumentNumber' => $order->user->document_number,
                    'IVACategoryCode' => $order->user->condition ?? 'RI',
                    'User' => $order->user->name,
                    'Email' => $order->user->email ?? 'ventas@sueiroehijos.com.ar',
                    'FirstName' => $order->user->name,
                    'LastName' => $order->user->last_name,
                    'ProvinceCode' => $order->user->province_code,
                    'MobilePhoneNumber' => null,
                    'WebPage' => null,
                    'BusinessAddress' => '',
                    'Comments' => 'Cliente Web'
                ],
                'OrderItems' => $itemObject,
                'Payments' => [],
        ];
        $response = Http::withHeaders([
            'accesstoken' => '03844717-5220-40e7-adba-e1c830091425_13003'
        ])->post('https://tiendas.axoft.com/api/Aperture/order',
        $orderObject);
        $data = $response->json();
        if (is_array($data)){
            if($data['isOk']){
                return redirect('orders');
            }
        }
        
        
    }
    
}

