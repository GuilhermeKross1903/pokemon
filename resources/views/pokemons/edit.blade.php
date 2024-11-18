<form action="{{ url('pokemons/'. $pokemons->id) }}" method="POST"> 
    <!-- "." serve para concatenar -->
    @csrf 
    @METHOD('put')
    <input value="{{$pokemons->nome}}" type="text" name="nome" placeholder="nome" required>
    <input value="{{$pokemons->tipo}}" name="tipo" placeholder="tipo" required></input>
    <input value="{{$pokemons->pontos_de_poder}}" name="pontos_de_poder" placeholder="pontos_de_poder" required></input>
    <button type="submit">Evoluir Pokemon</button>
</form>