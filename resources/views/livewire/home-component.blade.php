<div>

    <form wire:submit.prevent="save">
        <label for="name">Nombre</label>
        <input type="text" wire:model="name"  class="form-control mb-3">

        <label for="email">Email</label>
        <input type="text" wire:model="email" class="form-control mb-3"">

        <button type="submit" class="btn btn-success">Guardar</button>
        <button type="button" wire:click="$emit('resetForm',{{ auth()->user()->id }})" class="btn btn-danger" >Limpiar</button>
   </form>

</div>
