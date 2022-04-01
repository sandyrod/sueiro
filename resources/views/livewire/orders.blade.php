<div class="request_titlenav">
  <div class="row request align-items-center" style="height: 39px;">
      <div class="col-md-12">
          <span class="ubication"><strong>Inicio</strong> | Nosotros</span>
      </div>
  </div>
</div>
<div class="orders__cuerpo">
  <span class="orders__title">ESTADO DE PEDIDOS</span>
  <div class="orders__table">
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
        <tr>
          <th scope="row">#1006</th>
          <td>20/02/2020</td>
          <td class="orders__stadpedido">EN INICIO</td>
          <td>$4.765</td>
          <td><button class="orders__btn" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">VER DETALLE <i class="far fa-eye"></i></button></td>
        </tr>
        <tr>
          <th scope="row">#1002</th>
          <td>15/07/2019</td>
          <td class="orders__stadpedido">EN FABRICACIÓN</td>
          <td>$8.569</td>
          <td><button class="orders__btn" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">VER DETALLE <i class="far fa-eye"></i></button></td>
        </tr>
        <tr>
          <th scope="row">#9998</th>
          <td>15/04/2019</td>
          <td class="orders__stadpedido">EN ENTREGA</td>
          <td>$8.569</td>
          <td><button class="orders__btn" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">VER DETALLE <i class="far fa-eye"></i></button></td>
        </tr>
      </tbody>
    </table>
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
                  <th scope="col">Bonificación</th>
                  <th scope="col">Pendiente</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">FILTROS CTFP</th>
                  <td>10</td>
                  <td>$3.420 CHL</td>
                  <td>$14.50</td>
                  <td>$100</td>
                  
                </tr>
                <tr>
                  <th scope="row">CARCASAS CPP</th>
                  <td>1</td>
                  <td>$245</td>
                  <td>$14.50</td>
                  <td>$60</td>
                </tr>
                <tr>
                  <th scope="row">CARTUCHO CHL</th>
                  <td>4</td>
                  <td>$14.100</td>
                  <td>$14.50</td>
                  <td>$145</td>
                </tr>
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
</div>
