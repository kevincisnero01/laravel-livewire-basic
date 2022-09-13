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
                            <input wire:model="name" type="text" id="name" class="form-control" placeholder="Ingrese el nombre del producto">
                            @error('name') <span class="error text-danger"> {{ $message }} </span>@enderror
                        </div>

                        <div class="form-group mb-2">
                            <label for="price">Precio</label>
                            <input wire:model="price" type="text" id="price" class="form-control" placeholder="Ingrese el precio del producto">
                            @error('price') <span class="error text-danger"> {{ $message }} </span>@enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="quantity">Cantidad</label>
                            <input wire:model="quantity" type="text" id="quantity" class="form-control" placeholder="Ingrese la candidad del producto">
                            @error('quantity') <span class="error text-danger"> {{ $message }} </span>@enderror
                        </div>
                        
                        <div class="form-group mb-4">
                            <div  wire:ignore>
                                <label for="category">Categoría</label>
                                <select wire:model="category" id="category" class="form-control select2" >
                                    <option value="" >Seleccione una opción</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div><!--ignore-->
                            @error('category') <span class="error text-danger">{{ $message }}</span> @enderror
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

@section('scripts')
<script>
    $(document).ready(function() {
        $('.select2').select2({
            selectionCssClass: 'select-custom',
        });

        $('.select2').on('change', function() {
            @this.set('category', $(this).val())
        });
    });
</script>
@endsection