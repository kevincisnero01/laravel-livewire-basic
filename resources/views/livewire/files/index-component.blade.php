<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    
                    <h1 class="card-header">
                        Listado de Archivos
                        <a class="btn btn-primary float-end" href="{{ route('files.create') }}">Crear Archivo</a>
                    </h1>

                    <div class="card-body">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Archivo</th>
                                    <th>Extension</th>
                                    <th>Ruta</th>
                                    <th class="text-center">Previsualización</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($files as $file)
                                    <tr class="align-middle">
                                        <td class="text-center ">{{ $file->id }}</td>
                                        <td>{{ $file->file_name }}</td>
                                        <td class="text-center">{{ $file->file_extension }}</td>
                                        <td>{{ $file->file_patch }}</td>
                                        @if($file->file_extension == 'pdf')
                                            <td class="text-center"> 
                                                <a href="{{ asset($file->file_patch) }}" target="_blank">Enlace</a>
                                            </td>
                                        @else
                                            <td> 
                                                <img src="{{ asset($file->file_patch) }}" with="150" height="150" class="img-fluid border border-3 rounded" alt="Imagen">
                                            </td>
                                        @endif
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4"> No hay registros </td>
                                    </tr> 
                                @endforelse
                            </tbody>
                          </table>
                          
                          {{ $files->links() }}
                    </div><!--.body-->
                </div><!--.card-->
            </div><!--.col-->
        </div><!--.row-->
    </div><!--.container-->
</div>
