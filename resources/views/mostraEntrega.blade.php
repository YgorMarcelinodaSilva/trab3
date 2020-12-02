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
                Cidade
            </th>
            <th>
                Bairro
            </th>
            <th>
                Rua
            </th>
            <th>
                Numero
            </th>
           
        </tr>

        @for($i = 0; $i < count($entrega); $i++)
            <tr>
                <td>{{$entrega[$i]->codigo}}</td>
                <td>{{$entrega[$i]->cidade}}</td>
                <td>{{$entrega[$i]->bairro}}</td>
                <td>{{$entrega[$i]->rua}}</td>
                <td>{{$entrega[$i]->numero}}</td>
            </tr>
        @endfor    

      
    </table>
    
</body>
</html>