<form action="/author" method="POST">
  @csrf
  <span>Nome</span>
  <input type="text" name="name">  
  <button type="submit">Criar</button>
</form>