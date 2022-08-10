<div>
  <div class="request_titlenav">
    <div class="row request align-items-center" style="height: 39px;">
        <div class="col-md-12">
          <span class="ubication"><strong>Inicio</strong> | Pedidos</span>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <p style="margin-top:3%; font-size:25px; ">ESTADO DE PEDIDOS</p>
        <table class="table">
          <thead style="background:#C1282D;color:#FFFFFF;text-align:center;">
            <tr>
              <th scope="col">Número de pedido</th>
              <th scope="col">Fecha de pedido</th>
              <th scope="col">Estado del pedido</th>
              <th scope="col">Total</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody style="text-align:center;">
          <!--status= Inicio, fabricacion, entrega -->
          @foreach($data as $order)
            <tr>
              <th scope="row">#{{ Str::padLeft($order->id, 5, '0') }}</th>
              <td>{{ date('d/m/Y', strtotime($order->created_at)) }}</td>
              <td class="orders__stadpedido">{{ $order->status }}</td>
              <td>${{ $order->total }}</td>
              <td>
                <button wire:click="details({{ $order->id }})" class="orders__btn" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">VER DETALLE <i class="far fa-eye"></i></button></td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade bd-example-modal-lg" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header"style="background: #C1282D; color:#FFFFFF ">
          <h5 class="modal-title" id="staticBackdropLabel">Pedido Nº</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table class="table">
            <thead>
              <tr class="orders__stadpedido">
                <th scope="col-6 col-md-4">Producto</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
                <th scope="col">Total</th>
                <!--<th scope="col">Pendiente</th>-->
              </tr>
            </thead>
            <tbody>
              @foreach($orderDetails as $detail)
              <tr>
                <th scope="row">{{ $detail->producto_id }}</th>
                <td>{{ $detail->quantity }}</td>
                <td>${{ $detail->price }}</td>
                <td>${{ $detail->quantity * $detail->price }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="modal-footer" style="border: none">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
@push('js')

<script>

</script>

@endpush
  