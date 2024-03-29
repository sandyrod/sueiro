<div>
    @if ($errors->any())
        <div style="width: 20%; margin-left:80%" class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
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
        <div class="row row-cols-4">
            <div class="col"><label>Dolar</label> <input class="contact__imputname-1 form-control" placeholder="{{$data->dolar}}" id="dolar" name="dolar" wire:model.defer="dolar"" required></div>
            <div class="col"><label>Euro</label><input class="contact__imputname-1 form-control" placeholder="{{$data->euro}}" id="euro" name="empresa" wire:model.defer="euro" required></div>
            <div class="col"><label>Costo Referencia</label><input class="contact__imputname-1 form-control" placeholder="{{$data->costo_referencia}}" id="costo_referencia" name="costo_referencia" wire:model.defer="costo_referencia" required></div>
            <div class="col">
                <br>
                <label class="form-check-label" for="defaultCheck1">
                    Activar compras
                </label>
                <input class="form-check-input" wire:model.defer="activacion" name="activacion" type="radio" value="1">No
                <input class="form-check-input" wire:model.defer="activacion" name="activacion" type="radio" value="0">Si
                
            </div>
        </div><br><br>
        <div class="row justify-content-center">  
            <button type="button" class="btn btn-success col-md-1" wire:click="update"><i class="fa fa-save"></i>Guardar</button>
            <button type="button" class="btn btn-danger col-md-1" wire:click="resetInput"> <i class="fa fa-trash"></i>Cancelar</button>
        </div>        
    </div>
    <div class="row justify-content-center" style="margin-top: 50px; margin-bottom: 100px;">
        <a href="{{ route('dashboard') }}" class="botonera" style="margin: 20px;">Dashboard</a>
    </div>
</div>
