<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
<form method="POST" action="verifica2.php">
    <label>Nome Completo: </label>
        <input type="text" name="nome" title="txtNome" id="txtNome">
        <br>
        <br>
        <label>CPF: </label>
        <input type="number" name="cpf" title="numCpf" id="numCpf">
        <br>
        <br>
        <label>Data de Nascimento: </label>
        <input type="date" name="data" title="txtCpf" id="txtCpf">
        <br>
        <br>
        <label>RG: </label>
        <input type="number" name="rg" title="numRg" id="numRg">
        <br>
        <br>
        <label>Turma: </label>
        <input type="text" name="turma" title="txtTurma" id="txtTurma">
        <br>
        <br>
        <button type="submit">Continuar</button>
    </form>
    <br>
    <a id="volta" href="index.php">Voltar</a>
</body>
</html>