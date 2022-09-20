<div>
<div class="container">
<div class="row">
<div class="col-sm-12">
    <div class="card">
        <h1 class="card-header">
            Listado de Empleados
            <a href="{{ route('employees.create') }}" class="btn btn-primary float-end">Crear Empleado</a>
        </h1>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            
            <div class="table-responsible">
            <table class="table table-sm table-hover">
                <caption>Lista de Empleados</caption>
                <thead class="table-light">
                    <tr>
                        <th class="col-2">Empleado</th>
                        <th class="col-1">Foto</th>
                        <th class="col-1">Código</th>
                        <th class="col-1">Salario</th>
                        <th class="col-2">Dirección</th>
                        <th class="col-2">Telefono</th>
                        <th class="col-1">Status</th>
                        <th class="col-2">Opciones</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach($employees as $employee)
                    <tr class="align-middle">
                        <td>{{ $employee->name }}</td>
                        <td>
                            <img src="{{ $employee->photo }}" width="50" height="50" alt="foto" class="border border-1 border-secondary rounded">
                        </td>
                        <td>{{ $employee->code }}</</td>
                        <td>{{ $employee->salary }}</</td>
                        <td>{{ $employee->address }}</</td>
                        <td>{{ $employee->phone_number }}</</td>
                        <td> 
                            <span class="badge 
                                @switch($employee->employee_status->id)
                                    @case(1) text-bg-success @break
                                    @case(2) text-bg-danger @break
                                    @case(3) text-bg-warning @break
                                    @case(4) text-bg-info @break
                                    @case(5) text-bg-secondary @break
                                    @default text-bg-primary
                                @endswitch
                            ">
                                {{ $employee->employee_status->name }}
                            </span>
                        </</td>
                        <td>
                            <button class="btn btn-sm btn-success">Editar</button>
                            <button type="button" wire:click="deleteConfirm({{ $employee->id }})" class="btn btn-sm btn-danger">Eliminar</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $employees->links() }}
            </div><!--.table-responsible-->
        </div><!--.card-body-->
    </div><!--.card-->
</div><!--.col-->
</div><!--.row-->
</div><!--.container--->
</div>

@section('scripts')
<script>
    window.addEventListener('swal-confirm-delete', event => {
        Swal.fire({
            title: event.detail.title,
            text: event.detail.text,
            icon: event.detail.icon,
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Si, Eliminalo!',
            cancelButtonText: 'Calcelar'
        }).then((result) => {
            if(result.isConfirmed){

                livewire.emit('delete', event.detail.id);

                Swal.fire({
                    title:'¡Eliminado!',
                    text:'Tu registro fue eliminado exitosamente',
                    icon:'success',
                    showConfirmButton: false,
                    timer: 2000
                });
            }
        })
    })
</script>
@endsection

{{--
                
--}}