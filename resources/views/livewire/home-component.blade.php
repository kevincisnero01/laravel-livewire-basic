<div>

    <form wire:submit.prevent="save">
        <label for="name">Nombre</label>
        <input type="text" wire:model="name"  class="form-control mb-3">

        <label for="email">Email</label>
        <input type="text" wire:model="email" class="form-control mb-3"">

        <button type="submit" class="btn btn-success">Guardar</button>
        <button type="button" wire:click="$emit('resetForm') }})" class="btn btn-danger" >Limpiar</button>
   </form>

</div>

@section('scripts')
    <script>
        window.addEventListener('swal-success', event => {

            Swal.fire({
            icon: event.detail.icon,
            title: event.detail.title,
            text: event.detail.text,
            })

        })
    </script>
@endsection