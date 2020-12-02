<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitar entregas</title>
</head>
<body>
    <center>
        <form method="POST">
            @csrf
            Código do Produto:<input type="text" name="codigo"><br><br>
            Cidade:<input type="text" name="cidade"><br><br>
            Bairro:<input type="text" name="bairro"><br><br>
            Rua:<input type="text" name="rua"><br><br>
            Número<input type="text" name="numero"><br><br>
            <input type="submit" value="Solicitar" name="Solicitar">
        </form>
    </center>
    
</body>
</html>