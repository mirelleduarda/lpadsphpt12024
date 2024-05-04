<?php
  namespace VIEW\Software;
  include_once 'C:\xampp\htdocs\lpadsphpt12024\DAL\conexao.php';
  $sql = "select * from software;";
  $con = \DAL\Conexao::conectar();
  $registros = $con->query($sql);
  $con = \DAL\Conexao::desconectar();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Software</title>
</head>

<body>
    <h1>Listar Software</h1>
    <table class="striped">
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Fabricante</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Quantidade Copias</th>
        </tr>

        <?php foreach ($registros as $linha) { ?>
            <tr>
                <td> <?php echo $linha['id']; ?> </td>
                <td> <?php echo $linha['descricao'] ?> </td>
                <td> <?php echo $linha['fabricante'] ?> </td>
                <td> <?php echo $linha['tipo'] ?> </td>
                <td> <?php echo $linha['valor'] ?> </td>
                <td> <?php echo $linha['qtdCopias'] ?> </td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>