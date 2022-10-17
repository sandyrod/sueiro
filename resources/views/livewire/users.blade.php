<div>
    <div class="row justify-content-center" style="margin-top: 20px; margin-bottom: 30px;">
        <h1 style="text-align: center;">Usuarios</h1>
    </div>
    <div class="row justify-content-center" style="margin-top: 20px; margin-bottom: 30px;">
        <div class="col-md-10">
            <table class="table table-striped">
                <thead class="table__header">
                    <tr>
                        <th></th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                    <tr>
                        <td></td>
                        <td>
                            <span class="td__title">{{ $user->name }}</span>
                        </td>
                        <td class="align-middle">
                            <span class="align-middle">{{ $user->last_name }}</span>
                        </td>
                        <td class="align-middle">
                            <span class="alig-middle">{{ $user->email }}</span>
                        </td>
                        <td>
                            <div >
                                <a wire:click="destroy({{ $user->id }})"><i class="fa fa-trash" style="color:#C11D1D"></i></a>
                            </div>
                        </td>
                    </tr>
                    @empty
                    Sin Usuarios
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
