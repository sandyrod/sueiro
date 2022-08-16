@if (Auth::check())
    
    <div class="request_titlenav">
        <div class="row request align-items-center" style="height: 39px;">
            <div class="col-md-12">
                <span class="ubication"><strong>Inicio</strong> | Solicitud de presupuesto</span>
            </div>
        </div>
    </div>
    @if (auth()->user()->rol_user=='admin')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <table class="table table-striped">
                    <thead class="table__header">
                        <tr>
                            <th>Cliente</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Empresa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $presupuesto)
                        <tr>
                            <td>
                                <span class="td__title">{{ $presupuesto->name }}</span>
                            </td>
                            <td class="align-middle">
                                <span class="align-middle">{{ $presupuesto->email }}</span>
                            </td>
                            <td class="align-middle">
                                <span class="align-middle">{{ $presupuesto->phone }}</span>
                            </td>
                            <td class="align-middle">
                                <span class="align-middle">{{ $presupuesto->company }}</span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @else
    <div class="container">
            <div class="request" style="margin-left: -12px; margin-top: 10px;">
                <div class="row align-items-center">
                    <div class="col-md-1">
                        <i class="fa fa-edit request_icon"></i>
                    </div>
                    <div class="col-md-11">
                        <span class="request_title">DATOS PERSONALES</span>
                    </div>
                </div>
                <div class="row mt10">
                    <div class="col-md-6">
                        <input class="request_input" placeholder="Ingresar nombre *" wire:model.defer="name">
                    </div>
                    <div class="col-md-6">
                        <input class="request_input" placeholder="Ingrese su correo electrónico *"  wire:model.defer="email" type="email">
                    </div>
                </div>
                <div class="row  mt10">
                    <div class="col-md-6">
                        <input class="request_input" placeholder="Ingrese tu teléfono *"  wire:model.defer="phone">
                    </div>
                    <div class="col-md-6">
                        <input class="request_input" placeholder="Empresa"  wire:model.defer="company">
                    </div>
                </div>
            </div>
            <div class="request" style="margin-left: -12px; margin-top: 10px;">
                <div class="row align-items-center">
                    <div class="col-md-1">
                        <i class="fa fa-comments request_icon"></i>
                    </div>
                    <div class="col-md-11">
                        <span class="request_title">CONSULTA</span>
                    </div>
                </div>
                <div class="row mt10">
                    <div class="col-md-6">
                        <select class="request__selectproduct">
                            @forelse($productos as $producto)
                            <option value="{{ $producto->id }}">{{ $producto->skufield }}-{{ $producto->name }}</option>
                            @empty
                            <option>No hay productos disponibles</option>
                            @endforelse
                        </select>

                    </div>
                    <div class="col-md-6">
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div>
                <div class="row mt10 align-items-end" style="text-align:right;">
                    <div class="col-md-6">
                        <textarea class="request__datos"  placeholder="Datos adicionales" wire:model.defer="extradata">
                        </textarea>
                    </div>
                    <div class="col-md-6">
                        <button class="request__btnsend" wire:click="save">
                            <span class="request__textbtn">ENVIAR CONSULTA</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endif
@guest
    <div class="">
        <div class="request_titlenav">
            <div class="row request align-items-center" style="height: 39px;">
                <div class="col-md-12">
                    <span class="ubication"><strong>Inicio</strong> | Solicitud de presupuesto</span>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="request" style="margin-left: -12px; margin-top: 10px;">
                <div class="row align-items-center">
                    <div class="col-md-1">
                        <i class="fa fa-edit request_icon"></i>
                    </div>
                    <div class="col-md-11">
                        <span class="request_title">DATOS PERSONALES</span>
                    </div>
                </div>
                <div class="row mt10">
                    <div class="col-md-6">
                        <input class="request_input" placeholder="Ingresar nombre *" wire:model.defer="name">
                    </div>
                    <div class="col-md-6">
                        <input class="request_input" placeholder="Ingrese su correo electrónico *"  wire:model.defer="email" type="email">
                    </div>
                </div>
                <div class="row  mt10">
                    <div class="col-md-6">
                        <input class="request_input" placeholder="Ingrese tu teléfono *"  wire:model.defer="phone">
                    </div>
                    <div class="col-md-6">
                        <input class="request_input" placeholder="Empresa"  wire:model.defer="company">
                    </div>
                </div>
            </div>
            <div class="request" style="margin-left: -12px; margin-top: 10px;">
                <div class="row align-items-center">
                    <div class="col-md-1">
                        <i class="fa fa-comments request_icon"></i>
                    </div>
                    <div class="col-md-11">
                        <span class="request_title">CONSULTA</span>
                    </div>
                </div>
                <div class="row mt10">
                    <div class="col-md-6">
                        <select class="request__selectproduct">
                            @forelse($productos as $producto)
                            <option value="{{ $producto->id }}">{{ $producto->skufield }}-{{ $producto->name }}</option>
                            @empty
                            <option>No hay productos disponibles</option>
                            @endforelse
                        </select>

                    </div>
                    <div class="col-md-6">
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div>
                <div class="row mt10 align-items-end" style="text-align:right;">
                    <div class="col-md-6">
                        <textarea class="request__datos"  placeholder="Datos adicionales" wire:model.defer="extradata">
                        </textarea>
                    </div>
                    <div class="col-md-6">
                        <button class="request__btnsend" wire:click="save">
                            <span class="request__textbtn">ENVIAR CONSULTA</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
@endguest
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example-getting-started').multiselect();
        });
    </script>
    