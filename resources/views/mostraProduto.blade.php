<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <table border=5>
        <tr>
            <th>
                Código
            </th>
            <th>
                Categoria
            </th>
            <th>
                Nome
            </th>
            <th>
                Quantidade
            </th>
            <th>
                Descrição
            </th>
           
        </tr>

        @for($i = 0; $i < count($produtos); $i++)
            <tr>
                <td>{{$produtos[$i]->codigo}}</td>
                <td>{{$produtos[$i]->categoria}}</td>
                <td>{{$produtos[$i]->nome}}</td>
                <td>{{$produtos[$i]->quantidade}}</td>
                <td>{{$produtos[$i]->descricao}}</td>
            </tr>
        @endfor    

      
    </table>
    
</body>
</html>