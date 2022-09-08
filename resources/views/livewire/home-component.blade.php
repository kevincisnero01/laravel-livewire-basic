<div>
    <p>Contador {{$count}}</p>

    <button  class="btn btn-primary my-2"
    wire:click="add"> Click (Sumar)</button>
    
    <button  class="btn btn-info my-2"
    wire:mouseover="substract"> Mourse Over (Restar)</button>

    <form wire:submit.prevent="store">
        <button type="submit" class="btn btn-secondary">Set 20</button>
    </form>

</div>
