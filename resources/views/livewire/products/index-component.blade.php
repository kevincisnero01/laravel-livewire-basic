<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    
                    <h1 class="card-header">
                        Listado de Productos
                        <a class="btn btn-primary float-end" href="{{ route('products.create') }}">Crear Producto</a>
                    </h1>
                
                    <div class="card-body">
                      @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                      @endif
    
                      <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->quantity }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                      
                      {{ $products->links() }}
                    </div><!--.body-->
                </div><!--.card-->
            </div><!--.col-->
        </div><!--.row-->
    </div><!--.container-->
</div>
