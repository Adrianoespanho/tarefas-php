<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio02</title>
</head>
<body>
<h1> verificar  maior idade</h1>
    <form>
        idade da pessoa:
        <input  idade="idade">
        finalizada?
        <input idade="finalizada">
        <button type="submit">SALVAR</button>
    </form>
    <?PHP
    $idade = get["idade"];
    $finalizada = $_get["finalizada"];
    echo $idade . " - " . $finalizada;
    ?>


</body>
</html>