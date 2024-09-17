<h1>Lista de livros cadastradas</h1>
<a href="/book/create">Criar um novo livro</a>

<ul>
@foreach($books as $book)
  <li>
      <a href="/book/{{$book->id}}">{{$book->name}}</a> 
      <a href="/author/{{$book->Author->id}}">{{ $book->Author->name }}</a>
      <span>
      @foreach($book->Tags as $tag)  
        {{ $tag->name }},
      @endforeach
      </span>
      <a href="/book/{{$book->id}}/edit">Editar</a>
      <form action="/book/{{$book->id}}" method="POST" style="display:inline-block">
        @method('delete')
        @csrf
        <button type="submit">Deletar</button>
      </form>
  </li>
@endforeach
</ul>