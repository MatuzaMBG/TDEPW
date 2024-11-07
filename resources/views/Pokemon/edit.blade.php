<form action="{{url('pokemon/'.$pokemons->id)}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="text" name="tipo" placeholder="Tipo" required>
    <input type="numeric" name="pontos_de_poder" placeholder="Pontos de Poder" required>
    <button type="submit">Create Pokemon</button>
</form>