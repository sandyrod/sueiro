<div>
    <div class="request_titlenav">
        <div class="row request align-items-center" style="height: 39px;">
            <div class="col-md-12">
                <span class="ubication"><strong>Inicio</strong> | Configuración</span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <p style="margin-top:13%; font-size:25px; ">Precio Peso Argentino</p>
        </div>
        <div class="row row-cols-2">
            <div class="col"><input class="contact__imputname-1 form-control" placeholder="{{$data->dolar}}" id="dolar" name="dolar" wire:model.defer="dolar" required></div>          
            <div class="col"><input class="contact__imputname-1 form-control" placeholder="{{$data->euro}}" id="euro" name="empresa" wire:model.defer="euro" required></div>
        </div><br><br>
        
            <div class="row justify-content-center">  
                <button type="button" class="btn btn-success col-md-1" wire:click="save"><i class="fa fa-save"></i>Guardar</button>
                <button type="button" class="btn btn-danger col-md-1" wire:click="resetInput"> <i class="fa fa-trash"></i>Cancelar</button>
            </div>  
        
    </div>
</div>
