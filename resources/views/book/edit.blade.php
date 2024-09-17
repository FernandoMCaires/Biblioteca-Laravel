<form action="/book/{{$book->id}}" method="POST">
  @method('PUT')
  @csrf
  <div>
    <span>Nome:</span>
    <input type="text" name="name" value="{{ $book->name }}">
  </div>
  <div>
    <span>Numero de páginas</span>
    <input type="number" name="numOfPages" value="{{ $book->numOfPages }}">
  </div>
  <div>
    <span>Nome do Autor</span>
    <select name="author_id">
      @foreach(\App\Models\Author::all() as $author)
        <option value="{{$author->id}}"
          {{ $author->id == $book->Author->id ? 'selected' : '' }}
          >{{$author->name}}</option>
      @endforeach
    </select>
    <div>
      <button type="submit">Salvar</button>
    </div>
  </div>
  
</form>