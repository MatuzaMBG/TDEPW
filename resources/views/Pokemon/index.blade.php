@foreach($pokemons as $pokemon)
    <div>
        <h3>{{ $pokemon->name }}</h3>
        <p>{{ $pokemon->description }}</p>
        <a href="{{ url('pokemon/'.$pokemon->id.'/edit') }}">Edit</a>
        <form action="{{ url('pokemon/'.$pokemon->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach