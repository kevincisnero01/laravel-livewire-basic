<div>
<div class="container">
<div class="row">
<div class="col-sm-12">
    <div class="card">
        <h1 class="card-header">Listado de Empleados</h1>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    {{ session('seccess') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            
            <div class="table-responsible">
            <table class="table table-sm table-hover">
                <caption>Lista de Empleados</caption>
                <thead class="table-light">
                    <tr>
                        <th class="col-2">Empleado</th>
                        <th class="col-2">Foto</th>
                        <th class="col-1">Código</th>
                        <th class="col-1">Salario</th>
                        <th class="col-2">Dirección</th>
                        <th class="col-1">Telefono</th>
                        <th class="col-1">Status</th>
                        <th class="col-2">Opciones</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach($employees as $employee)
                    <tr>
                        <td>{{ $employee->name }}</td>
                        <td></td>
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
                            <button class="btn btn-sm btn-danger">Eliminar</button>
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
