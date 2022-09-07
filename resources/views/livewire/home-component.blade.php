<div>
    <p>Hola {{$message}}</p>

    <input type="text" class="form-control" placeholder="Ingrese un texto"
    wire:model.defer="query">

    <button type="submit" class="btn btn-primary my-2"
    wire:click="search">Enviar</button>

</div>
