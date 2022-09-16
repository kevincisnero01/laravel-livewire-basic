<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <h1 class="card-header text-uppercase fw-bold"> Crear Empleado</h1>
    
                    <div class="card-body">

                      @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                      @endif

                      <form wire:submit.prevent="save" method="post">

                            <div class="form-group my-2">
                                <label for="name">Nombre</label>
                                <input wire:model="name" type="text" id="name" class="form-control" placeholder="Ingrese el nombre del empleado.">
                            </div>

                            <div class="form-group my-2">
                                <label for="code">Código</label>
                                <input wire:model="code" type="text" id="code" class="form-control" placeholder="Ingrese el código del empleado.">
                            </div>

                            <div class="form-group my-2">
                                <label for="salaty">Salario</label>
                                <input wire:model="salary" type="number" min="1" max="1000" step="100" id="salary" class="form-control" placeholder="Ingrese el salario del empleado.">
                            </div>

                            <div class="form-group my-2">
                                <label for="address">Direccion</label>
                                <input wire:model="address" type="text" id="address" class="form-control" placeholder="Ingrese la dirección del empleado.">
                            </div>

                            <div class="form-group my-2">
                                <label for="phone_number">Telefono</label>
                                <input wire:model="phone_number"  type="tel" id="phone_number" class="form-control" placeholder="Ingrese el numero de telefono del empleado. Ej. 0412 1234567.">
                            </div>

                            <div class="form-group my-2">
                                <label for="employee_status_id">Estado</label>
                                <select wire:model="employee_status_id" id="employee_status_id" class="form-control">
                                    <option value="">Seleccione un estado</option>
                                </select>
                            </div>

                            <div class="form-group my-2">
                                <label for="photo">Foto</label>
                                <input wire:model="photo" type="file" id="photo" class="form-control" >
                            </div>
                            
                            <div class="form-group my-4 d-grid gap-2">
                                <button type="submit" class="btn btn-lg btn-primary fw-semibold">Guardar</button>
                                <button type="reset" class="btn btn-sm btn-secondary">Limpiar</button>
                            </div>    
                      </form>

                    </div><!--.body-->
                </div><!--.card-->
            </div><!--.col-->
        </div><!--.row-->
    </div><!--.container-->
</div>
