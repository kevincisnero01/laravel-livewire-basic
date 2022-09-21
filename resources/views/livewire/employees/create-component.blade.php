<div>
<div class="container">
<div class="row">
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

        <div class="row align-items-center">
            <div class="col-7">

                <div class="form-group my-2">
                    <label for="name" class="fw-bold">
                        <i class="bi bi-asterisk text-danger fs-8"></i> 
                        Nombre
                    </label>
                    <input wire:model.defer="name" type="text" id="name" class="form-control" placeholder="Ingrese el nombre del empleado." autofocus required>
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror

                </div>

                <div class="form-group my-2">
                    <label for="code" class="fw-bold">
                        <i class="bi bi-asterisk text-danger fs-8"></i>
                        Código
                    </label>
                    <input wire:model.defer="code" type="text" id="code" class="form-control" placeholder="Ingrese el código del empleado." required>
                    @error('code') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group my-2">
                    <label for="salary class="fw-bold"">
                        <i class="bi bi-asterisk text-danger fs-8"></i>
                        Salario
                    </label>
                    <input wire:model.defer="salary" type="number" min="100" id="salary" class="form-control" placeholder="Ingrese el salario del empleado." required>
                    @error('salary') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group my-2">
                    <label for="phone_number" class="fw-bold">
                        <i class="bi bi-asterisk text-danger fs-8"></i>
                        Telefono
                    </label>
                    <input wire:model.defer="phone_number"  type="tel" id="phone_number" class="form-control" placeholder="Ingrese su telefono. Ej: 0412 1234567." required>
                    @error('phone_number') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

            </div><!--.col--> 

            <div class="col-5" >
                <div class="form-group mb-2">
                    <label for="photo" class="fw-bold">Foto</label>
                    <input wire:model.defer="photo" type="file" id="photo" class="form-control" >
                    @error('photo') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="d-inline-block border border-5 pt-1 border-secondary rounded text-center mx-3 width-200 height-200">
                    @if($photo)
                        <img src="{{ $photo->temporaryURL() }}" width="150" height="180" class="" alt="Foto">
                    @else  
                        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="180" fill="currentColor" class="bi bi-person-bounding- " viewBox="0 0 16 16">
                            <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        </svg>
                    @endif
                </div>
            </div><!--.col-->
        </div><!--.row-->

            <div class="form-group my-2">
                <label for="address" class="fw-bold">
                    <i class="bi bi-asterisk text-danger fs-8"></i>
                    Dirección
                </label>
                <textarea wire:model.defer="address" id="address" rows="2" class="form-control" placeholder="Ingrese la dirección del empleado.">
                </textarea>
                @error('address') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group my-2">
                <label for="employee_status_id" class="fw-bold">Estado</label>
                <div wire:ignore>
                <select wire:model.defer="employee_status_id" id="employee_status_id" class="form-control select2">
                    <option value="">Seleccione un estado</option>
                    @foreach($statuses as $status)
                        <option value="{{$status->id}}">{{ $status->name }}</option>
                    @endforeach
                </select>
                </div>
                @error('employee_status_id') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group my-4 d-grid gap-2">
                <button type="submit" class="btn btn-lg btn-primary fw-semibold">
                    Guardar &nbsp;
                    <i class="bi bi-save"></i>
                </button>
                <button type="reset" class="btn btn-sm btn-secondary">Limpiar</button>
                <p class="text-center">
                    <i class="bi bi-asterisk text-danger fs-8"></i>
                    Estos campos son obligatorios
                </p>
            </div>    
        </form>
    </div><!--.card-body-->
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
            @this.set('employee_status_id', $(this).val())
        });
    });
</script>
@endsection