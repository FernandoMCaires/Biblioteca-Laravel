<form action="/book" method="POST">
  @csrf
  <div>
    <span>Nome do livro:</span>
    <input type="text" name="name">
  </div>
  <div>
    <span>Numero de páginas:</span>
    <input type="number" name="numOfPages">
  </div>
  <div>
    <span>Autor:</span>
    <select name="author_id">
      @foreach($authors as $author)
        <option value="{{$author->id}}">{{$author->name}}</option>
      @endforeach
    </select>
  </div>
  <div>
    <span>Tags</span>
    <select name="tags[]" multiple>
      @foreach(\App\Models\Tag::all() as $tag)
        <option value="{{$tag->id}}">{{$tag->name}}</option>
      @endforeach
    </select>
  </div>
  
  <button type="submit">Criar</button>
</form>