<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    
                    <h1 class="card-header">
                        Crear de Archivo
                    </h1>
                    
                    <div class="card-body">
                        <form wire:submit.prevent='save'>
                            <div class="form-group">
                                <label for="file">Archivo(s)</label>
                                <input type="file" wire:model="file" id="file "class="form-control">
                                @error('file') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            @if($file)
                                @if($file->extension() != 'pdf')
                                    <h4 class="mt-4 mb-2 text-center">Visualización de Imagen</h4>
                                    <img src="{{ $file->temporaryURL() }}" with="150" height="150" class="img-fluid border border-3 rounded">
                                @endif
                            @endif
                            
                            <div class="d-grid gap-2 mt-4">
                                <button type="submit" class="btn btn-primary btn-primary btn-lg">Guardar</button>
                                <button type="reset" class="btn btn-secondary btn-sm">Limpiar</button>
                            </div>
                        </form>
                    </div><!--.body-->
                </div><!--.card-->
            </div><!--.col-->
        </div><!--.row-->
    </div><!--.container-->
</div>
