<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
    <table class="table">
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