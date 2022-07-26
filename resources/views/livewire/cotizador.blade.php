<div>
    <div class="request_titlenav">
        <div class="row request align-items-center" style="height: 39px;">
            <div class="col-md-12">
                <span class="ubication"><strong>INICIO</strong> | COTIZADOR</span>
            </div>
        </div>
    </div>
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
                <input class="input_cotizador" placeholder="Ancho de Malla *"  wire:model.defer="ancho_malla">
                <input class="input_cotizador" placeholder="Redondeo por Tiras *"  wire:model.defer="redondeo_por_tiras">
            </div>
            <div class="col">
                <input class="input_cotizador" placeholder="Malla Metalica *"  wire:model.defer="malla_metalica">
                <input class="input_cotizador" placeholder="Valor por metro cuadrado *"  wire:model.defer="valor_m2">
                <input class="input_cotizador" placeholder="Redondeo de tiras *"  wire:model.defer="redondeo_de_tiras">
            </div>
            <div class="col">
                <input class="input_cotizador" placeholder="Material *"  wire:model.defer="material">
                <input class="input_cotizador" placeholder="Cantidad por pack *"  wire:model.defer="cant_pack">
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