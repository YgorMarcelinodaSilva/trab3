<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entregas</title>
</head>
<body>
    <table border=5>
        <tr>
            <th>
                Código do Produto
            </th>
            <th>
                Título
            </th>
            <th>
                Urgência
            </th>
            <th>
                Descrição
            </th>
            
           
        </tr>

        @for($i = 0; $i < count($chamado); $i++)
            <tr>
                <td>{{$chamado[$i]->codigo}}</td>
                <td>{{$chamado[$i]->titulo}}</td>
                <td>{{$chamado[$i]->urgencia}}</td>
                <td>{{$chamado[$i]->descricao}}</td>
            </tr>
        @endfor    

      
    </table>
    
</body>
</html>