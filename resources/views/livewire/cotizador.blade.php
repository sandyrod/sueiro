<div>
    <div class="request_titlenav">
        <div class="row request align-items-center" style="height: 39px;">
            <div class="col-md-12">
                <span class="ubication"><strong>INICIO</strong> | COTIZADOR</span>
            </div>
        </div>
    </div>
    <div>
        <br>
        <div class="row justify-content-center">
            <div class="form-group col-md-3">
                <input type="text" placeholder="Buscar" class="form-control" wire:model="search"">
            </div>
            {{-- @if (auth()->user()->rol_user=='admin') --}}
                <button class="btn btn-outline-primary col-md-1" id="botonocultamuestra" value="Mostrar div" ><i class="fa fa-plus"></i>Agregar</button>
            {{-- @endif --}}
        </div>
        <br><br>
        <div id="divocultamuestra" style="display:none;">
            <div class="container-fluid">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <select name="select" id="inputSelect" class="form-control" required="required">
                                <option value="1">Seleccionar</option>
                                <option value="2">Discos</option>
                                <option value="3">Tejido Artistico</option>
                            </select>
                        </div>          
                    </div>
                </div>
            </div>
            <div class="container divOculto" id="div2" style="background: #F2F2F2; height:400px">
                <div class="row">
                    <h3><p class="text-center title_cotizador">Discos.</p></h3>
                    <div class="col">
                        <input class="input_cotizador" placeholder="Cantidad solicitada *" wire:model.defer="cant_solicitada">
                        <input class="input_cotizador" placeholder="Material *"  wire:model.defer="material">
                        <input class="input_cotizador" placeholder="Redondeo por Tiras *"  wire:model.defer="redondeo_por_tiras">
                    </div>
                    <div class="col">
                        <input class="input_cotizador" placeholder="Malla Metalica *"  wire:model.defer="malla_metalica">
                        <input class="input_cotizador" placeholder="Cantidad por pack *"  wire:model.defer="cant_pack">
                        <input class="input_cotizador" placeholder="Redondeo de tiras *"  wire:model.defer="redondeo_de_tiras">
                    </div>
                    <div class="col">                      
                        @if (auth()->user()->rol_user=='admin')
                            <input class="input_cotizador" placeholder="Ancho de Malla *"  wire:model.defer="ancho_malla">
                            <input class="input_cotizador" placeholder="Valor por metro cuadrado *"  wire:model.defer="valor_m2">
                        @endif
                        <br><br>
                        <button class="btn btn-outline-success col-md-4" ><i class="fa fa-save"></i>Agregar</button>
                        <button class="btn btn-outline-danger col-md-4"  ><i class="fa fa-trash"></i>Cancelar</button>
                    </div>
                </div>
            </div>
            <div class="container divOculto" id="div3" style="background: #F2F2F2; height:400px">
                <div class="row">
                    <h3><p class="text-center title_cotizador" >Tejido Artistico.</p></h3>            
                    <div class="col">
                        <input class="input_cotizador" placeholder="DE *" wire:model.defer="de">
                        <input class="input_cotizador" placeholder="Modulos *"  wire:model.defer="modulos">
                        <input class="input_cotizador" placeholder="AA" disabled wire:model.defer="aa">
                    </div>
                    <div class="col">
                        <input class="input_cotizador" placeholder="Nd *"  wire:model.defer="nd">
                        <input class="input_cotizador" placeholder="Abertura" disabled  wire:model.defer="abertura">
                    </div>
                    <div class="col">
                        <input class="input_cotizador" placeholder="Alambre *"  wire:model.defer="alambre">
                        <input class="input_cotizador" placeholder="Peso por M2" disabled  wire:model.defer="peso_m2">
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <table class="table table-striped">
                    <thead style="background:#C1282D;color:#FFFFFF;text-align:center;">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Producto</th>
                            <th scope="col">Descripcion </th>
                            <th scope="col">Precio </th>
                            <th scope="col">Cantidad </th>
                            <th scope="col">opciones</th>
                        </tr>
                    </thead>
                    <tbody style="text-align:center;">
                    {{-- @foreach($data as $producto) --}}
                        <tr>
                            <td></td>
                            <td>
                                {{-- <span class="td__title">{{ $producto->name }}</span> --}}
                            </td>
                            <td class="align-middle">
                                {{-- <span class="align-middle">{{ $producto->description }}</span> --}}
                            </td>
                            <td class="align-middle">
                                {{-- <span class="align-middle">{{ $producto->price }}</span> --}}
                            </td>
                            <td class="align-middle">
                                {{-- <input type="number" class="form-control" placeholder="0" min="1"  name='order_quantity' oninput="validity.valid||(value='');" wire:model.defer="order_quantity" id='order_quantity'> --}}
                            </td>
                            <td>
                                {{-- @if (auth()->user()->rol_user=='')
                                    <div><br>
                                        <a wire:click="addToCart({{ $producto->id }})" class="fas fa-shopping-cart"></a>
                                    </div>
                                @endif --}}
                                @if (auth()->user()->rol_user=='admin')
                                    <div><br>
                                        <a {{-- wire:click="edit({{ $producto->id }})" --}}><i class="fa fa-pen" style="color:#006400"></i></a>
                                        <a {{-- wire:click="destroy({{ $producto->id }})" --}}><i class="fa fa-trash" style="color:#C11D1D"></i></a>
                                    </div>
                                @endif
                            </td>
                        </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    

<script>
    $(document).ready(function () {
  $("#botonocultamuestra").click(function () {
    $("#divocultamuestra").each(function () {
      displaying = $(this).css("display");
      if (displaying == "block") {
        $(this).fadeOut("slow", function () {
          $(this).css("display", "none");
        });
      } else {
        $(this).fadeIn("slow", function () {
          $(this).css("display", "block");
        });
      }
    });
  });
});

    </script>

<script>
    $(function() {

$("#inputSelect").on('change', function() {

  var selectValue = $(this).val();
  switch (selectValue) {

    case "1":
      $("#div1").show();
      $("#div2").hide();
      $("#div3").hide();
      break;

    case "2":
      $("#div1").hide();
      $("#div2").show();
      $("#div3").hide();
      break;

    case "3":
      $("#div1").hide();
      $("#div2").hide();
      $("#div3").show();
      break;

  }

}).change();

});


</script>