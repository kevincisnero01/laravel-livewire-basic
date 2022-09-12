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
                                <label for="myFiles">Archivo(s)</label>
                                <input type="file" wire:model="myFiles" id="myFiles" class="form-control"  multiple accept=".pdf,.png,.jpg,.jpeg" required>
                                @error('myFiles') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            
                            @if($myFiles)
                                @php
                                $titlePreview = false;
                                foreach ($myFiles as $file) { 
                                    if($file->extension() == 'png' || $file->extension() == 'jpg') $titlePreview = true;
                                }
                                if($titlePreview) echo "<h3 class='my-4 text-center'>Visualizacion de Imagenes</h3>";
                                @endphp 

                                <div id="carouselPreviewImageControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">

                                        @foreach($myFiles as $file)
                                            @if($file->extension() =='png' || $file->extension() =='jpg')
                                                <div class="carousel-item @if($loop->last) active @endif">
                                                    <img src="{{ $file->temporaryURL() }}" class="d-block w-100 border border-3 rounded">
                                                </div>
                                            @endif
                                        @endforeach 

                                    </div><!--.carousel-inner-->
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselPreviewImageControls" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselPreviewImageControls" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div><!--.carousel-->
                                     
                            @endif
                             {{----}}
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
