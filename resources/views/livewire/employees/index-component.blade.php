<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    
                    <h1 class="card-header">
                        Listado de Empleados
                        <a class="btn btn-primary float-end" href="{{ route('employees.create') }}">Crear Empleado</a>
                    </h1>
                
                    <div class="card-body">
                      @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                      @endif

                    </div><!--.body-->
                </div><!--.card-->
            </div><!--.col-->
        </div><!--.row-->
    </div><!--.container-->

</div>
