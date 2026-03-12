<h1>Criar Livro</h1>
<form action="/book/store" method="POST">
    @csrf
    <div>
    Nome do livro: <input type="text" name="name"> 
    </div>
    <div>
    Nome do autor: <input type="text" name="author">
    </div>
    <div>
    Preço: <input type="decimal" name="price" value="0.00">
    </div>
    <button type="submit">Criar Livro</button>
</form>