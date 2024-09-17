<table>
  <tr>
    <th>Id</th>
    <th>Nome</th>
  </tr>
@foreach ($authors as $author)
<tr>
  <td>{{ $author->id }}</td>
  <td>{{ $author->name }}</td>
</tr>
@endforeach
</table>
