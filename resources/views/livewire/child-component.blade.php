<div>
    <li>
        <h3>{{ $user->name }}</h3>
        <p>
            {{ $user->email }} 
            {{ now() }}
            <button class="btn btn-sm btn-info" wire:click="$refresh">Date Refresh()</button>
        </p>
    </li>
</div>
