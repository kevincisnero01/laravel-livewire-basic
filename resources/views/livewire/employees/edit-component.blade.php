<div>
<div class="container">
<div class="row">
<div class="col-md-8 mx-auto">

<div class="card">
    <h1 class="card-header text-uppercase fw-bold"> Editar Empleado</h1>
    <div class="card-body">

        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif

        <form wire:submit.prevent="submit({{$employee_id}})">

        <div class="row align-items-center">
            <div class="col-7">

                <div class="form-group my-2">
                    <label for="name" class="fw-bold">
                        <i class="bi bi-asterisk text-danger fs-8"></i> 
                        Nombre 
                    </label>
                    <input type="text" wire:model="name" name="name" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}">                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror

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
                    <label for="photo" class="fw-bold">Foto </label>
                    <input wire:model.defer="photo" type="file" id="photo" class="form-control" value="{{$photo}}">
                    @error('photo') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="d-inline-block border border-5 pt-1 border-secondary rounded text-center mx-3 width-200 height-200">
                    @if($photo)
                        <img src="{{ $photo->temporaryURL() }}" width="150" height="180" alt="Foto">
                    @else
                        <img src="{{ asset($photo_prev) }}" width="150" height="180" alt="Foto">
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
                    @foreach($statuses as $key => $status)
                        <option value="{{$key}}" >{{ $status}}</option>
                    @endforeach
                </select>
                </div>
                @error('employee_status_id') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            
            <div class="form-group my-4 d-grid gap-2">
                <button type="submit" class="btn btn-lg btn-primary fw-semibold">
                    Editar &nbsp;
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

        var employee_status_id = {!! json_encode($employee_status_id) !!};
        $('.select2').val(employee_status_id);
        $('.select2').trigger('change');

        $('.select2').on('change', function() {
            @this.set('employee_status_id', $(this).val())
        });
    });
</script>
@endsection