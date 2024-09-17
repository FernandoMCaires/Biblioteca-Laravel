<form action="/author/{{$author->id}}" method="POST">
  @method("PUT")
  @csrf
  <input type="text" value="{{$author->name}}" name="name">
  <button type="submit">Salvar</button>
</form>