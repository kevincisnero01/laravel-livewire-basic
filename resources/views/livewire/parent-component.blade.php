<div>
    <h1>Componente Padre</h1>
    <p>{{ $message }}</p>
    
    <ol>
    @foreach ($users as $user)
        @livewire('child-component',['user' => $user], key($user->id))
    @endforeach
    </ol>
</div>
