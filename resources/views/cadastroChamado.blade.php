<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abrir chamado</title>
</head>
<body>
    <center>
        <form method="POST">
            @csrf
            Código do Produto:<input type="text" name="codigo"><br><br>
            Título:<input type="text" name="titulo"><br><br>
            Urgencia:<input type="text" name="urgencia" placeholder="grave, médio, passivo"><br><br>
            Descrição<input type="text" name="descricao"><br><br>
            <input type="submit" value="Abrir" name="abrir">
        </form>
    </center>
    
</body>
</html>