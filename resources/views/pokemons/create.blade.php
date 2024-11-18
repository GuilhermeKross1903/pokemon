<form action="{{ url('pokemons') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="nome" required>
    <input name="tipo" placeholder="tipo" required></input>
    <input name="pontos_de_poder" placeholder="pontos_de_poder" required></input>
    <button type="submit">Capturar Pokemon</button>
</form>