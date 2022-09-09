<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <h1 class="card-header"> Crear Producto</h1>
    
                    <div class="card-body">

                      @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                      @endif
    
                      <form wire:submit.prevent="save">
                        <div class="form-group mb-2">
                            <label for="name">Nombre</label>
                            <input wire:model="name" type="text" class="form-control" id="name" placeholder="Ingrese el nombre del producto">
                            @error('name') <span class="error text-danger"> {{ $message }} </span>@enderror
                        </div>

                        <div class="form-group mb-2">
                            <label for="price">Precio</label>
                            <input wire:model="price" type="text" class="form-control" id="price" placeholder="Ingrese el precio del producto">
                            @error('price') <span class="error text-danger"> {{ $message }} </span>@enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="quantity">Cantidad</label>
                            <input wire:model="quantity" type="text" class="form-control" id="quantity" placeholder="Ingrese la candidad del producto">
                            @error('quantity') <span class="error text-danger"> {{ $message }} </span>@enderror
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
                            <button type="reset" class="btn btn-secondary btn-sm">Limpiar</button>
                        </div>
                        
                      </form>
                    
                    </div><!--.body-->
                </div><!--.card-->
            </div><!--.col-->
        </div><!--.row-->
    </div><!--.container-->
</div>
