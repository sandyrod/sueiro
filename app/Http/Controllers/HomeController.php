<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetails;
use OrderDetail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function category()
    {
        return view('category');
    }

    public function product()
    {
        return view('product');
    }

    public function products()
    {
        return view('products');
    }

    public function remittances()
    {
        return view('remittances');
    }

    public function order_history()
    {
        return view('order-history');
    }

    public function quality()
    {
        return view('quality');
    }

    public function shopping()
    {
        return view('shopping');
    }
    public function setting()
    {
        return view('setting');
    }
    public function purchase_history()
    {
        return view('purchase-history');
    }
    public function favorites()
    {
        return view('favorites');
    }
    public function cotizador()
    {
        return view('cotizador');
    }

    public function api(){
        $response = Http::withHeaders([
            'accesstoken' => '03844717-5220-40e7-adba-e1c830091425_13003'
        ])->get('https://tiendas.axoft.com/api/Aperture/Product?&pageSize=500&pageNumber=1');

        $data = $response->json();
        //print_r($data['Data']);
        foreach($data['Data'] as $producto){
            $product = Product::where('skufield',$producto['SKUCode'])->first();
            if ($product !== null ){
                $product->update(['name' => $producto['Description'],
                        'description' => $producto['AdditionalDescription']]);
            }else{
                $sku = $producto['SKUCode'];
                echo $sku."<br>";
                $product = Product::create(
                        [
                        'name' => $producto['Description'],
                        'description' => $producto['AdditionalDescription'],
                        'skufield' => $sku
                    ]);
            }
        }
    }
    public function price(){
        $response = Http::withHeaders([
            'accesstoken' => '03844717-5220-40e7-adba-e1c830091425_13003'
        ])->get('https://tiendas.axoft.com/api/Aperture/Price?&pageSize=500&pageNumber=1');
        $data = $response->json();
        //print_r($data['Data']);
        foreach($data['Data'] as $producto){
            $product = Product::where('skufield',$producto['SKUCode'])->first();
            if ($product !== null ){
                $product->update(['price' => $producto['Price']]);
            }
        }
    }

    public function pedido($id = 2){
        $order = Order::find($id);
        $order->status= 'Iniciado';
        $orderID = 'WEB-' . Str::padLeft($order->id, 5, '0');
        $itemObject = [];
        $total = 0;
        $orderitems = OrderDetails::where('order_id', $id);
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
                'Comment' => 'PEDIDO WEB COD: ' . $orderID . ' - ' . $order->notes,
                'Customer' => [
                    "CustomerID" => $order->user->id,  
                    'DocumentType' => '80',
                    'DocumentNumber' => $order->customer->document_number,
                    'IVACategoryCode' => 'RI',
                    'User' => 'web-seller',
                    'Email' => 'test@test.com',
                    'FirstName' => $order->customer->business_name,
                    'LastName' => '',
                    'ProvinceCode' => $order->customer->province_code,
                    'MobilePhoneNumber' => '',
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
        //$order->synced_at = now();

        // $response = Http::withHeaders([
        //     'accesstoken' => '03844717-5220-40e7-adba-e1c830091425_13003'
        // ])->post('https://tiendas.axoft.com/api/Aperture/order',
        //     ["{
        //         'OrderID': 'web02',
        //         'OrderNumber': 'web02',
        //         'Date': '2022-08-09T09:31:00',
        //         'Total': 253.0,
        //         'TotalDiscount': 0.0,
        //         'Comment': 'Compra de pruebas',
        //         'Customer': {
        //           'CustomerID': 0011,
        //           'DocumentType': '80',
        //           'DocumentNumber': '',
        //           'IVACategoryCode': 'RI',
        //           'User': 'web',
        //           'Email': 'test@test.com',
        //           'FirstName': '',
        //           'LastName': '',
        //           'ProvinceCode': '6',
        //           'MobilePhoneNumber': '',
        //           'WebPage': null,
        //           'BusinessAddress': '',
        //           'Comments': 'Cliente Web'
        //         },
        //         'OrderItems': [
        //           {
        //             'ProductCode': 75,
        //             'SKUCode': null,
        //             'Description': 'MALLA AI 002 ALAMBRE 1.65MM',
        //             'Quantity': 1,
        //             'UnitPrice': 253.0000000,
        //           }
        //         ],
        //         'Payments': [
        //         ],
        //       }"]);
        // $data = $response->json();
        // print_r($data);
        
        
    }
    public function state($id, $state) {
        $order = Order::find($id);
        if ($state == 'approve') {
            $order->status = 'approved';
            $orderID = 'WEB-' . Str::padLeft($order->id, 5, '0');
            $itemObject = [];
            $total = 0;
            foreach ($order->combos as $key => $combo) {
                $p = TangoProducts::where('s_k_u_code', $combo->product_code)->first();
                $itemObject[] = [
                    'ProductCode' => $p->id,
                    'SKUCode'     => $p->s_k_u_code,
                    'Description' => $p->description,
                    'Quantity'    => $combo->quantity,
                    'UnitPrice'   => $combo->price,
                ];
                $total += $combo->price * $combo->quantity;
            }
            foreach ($order->accessories as $key => $item) {
                $p = TangoProducts::where('id', $item->product_code)->first();
                $itemObject[] = [
                    'ProductCode' => $p->id,
                    'SKUCode'     => $p->s_k_u_code,
                    'Description' => $p->description,
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
                'Comment' => 'PEDIDO WEB COD: ' . $orderID . ' - ' . $order->notes,
                'Customer' => [
                    "CustomerID" => 1,
                    "Code" => $order->customer->code,                      
                    'DocumentType' => '80',
                    'DocumentNumber' => $order->customer->document_number,
                    'IVACategoryCode' => 'RI',
                    'User' => 'web-seller',
                    'Email' => 'test@test.com',
                    'FirstName' => $order->customer->business_name,
                    'LastName' => '',
                    'ProvinceCode' => $order->customer->province_code,
                    'MobilePhoneNumber' => '',
                    'WebPage' => null,
                    'BusinessAddress' => '',
                    'Comments' => 'Cliente Web'
                ],
                'OrderItems' => $itemObject,
                'Payments' => [],
            ];
            // dd($orderObject);
            //$json = json_encode($json,JSON_PRETTY_PRINT);
            $response = Http::withHeaders([
                'accesstoken' => '9b00281d-7a11-454e-b6b0-98c6d99452e8_13197'
            ])->post('https://tiendas.axoft.com/api/Aperture/order',
            $orderObject);
            $data = $response->json();
            $order->synced_at = now();
            // dd($data);        
        }
        if ($state == 'reject') {
            $order->status = 'rejected';
        }
        $order->save();
        return redirect()->back();
    }

}
