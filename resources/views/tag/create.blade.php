<form action="/tag" method="POST">
  @csrf
  <div>
    <span>Nome da Tag:</span>
    <input type="text" name="name">
  </div>
  <button type="submit">Criar</button>
</form>