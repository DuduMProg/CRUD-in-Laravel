<h1>Lista todos livros</h1>
<a href="/book/create">Criar novo livro</a>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Autor</th>
        <th>Preço</th>
    </tr>
    @foreach($books as $b)
    <tr>
        <td>{{$b->id}}</td>
        <td>{{$b->name}}</td>
        <td>{{$b->author}}</td>
        <td>{{$b->price}}</td>
    </tr>
    @endforeach
</table>
