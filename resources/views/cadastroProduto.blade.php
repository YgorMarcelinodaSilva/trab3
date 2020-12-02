<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <center>
        <form method="POST">
            @csrf
            Código do Produto:<input type="text" name="codigo"><br><br>
            Categoria do Produto:<input type="text" name="categoria"><br><br>
            Nome do Produto:<input type="text" name="nome"><br><br>
            Quantidade de Peças:<input type="text" name="quantidade"><br><br>
            Descrição do Produto:<textarea name="descricao"></textarea><br><br>
            <input type="submit" value="Salvar" name="salvar">
        </form>
    </center>
    
</body>
</html>