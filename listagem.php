<?php 
    $host='localhost';
    $user='root';
    $senha='';
    $bd_name='agenda_php';
    $con=mysqli_connect($host,$user,$senha,$bd_name);
    //checar se a conexão foi estabelecida
    if ($con->connect_errno) {
        //echo "Erro na conexão";
        mysqli_connect_error();
    }else{
        $query="SELECT id, nome,email,telefone FROM tb_cliente ";
            $resultado=mysqli_query($con,$query);
            if ($resultado){
             while ($aluno=mysqli_fetch_array($resultado)) {
                $id=$aluno['id'];
                $nome=$aluno['nome'];
                $email=$aluno['email'];
                $telefone=$aluno['telefone'];
            
             }
            }else{
                echo " Erro na consulta";
            }
            mysqli_close($con);
        }
    

?>

<!DOCTYPE html>
<html lang="pt_br">
  <head>
    <title>Cadastro de Clientes</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
     <div class="container">
     <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row"> <?php echo $id ?> </td>
                <td><?php echo $nome ?></td>
                <td><?php echo $email?></td>
                <td><?php echo $telefone ?></td>
                <td>
                    <form action="cadastro.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input type="Submit" value="Excluir"> 
                    </form>
                </td>
                
            </tr>
        </tbody>
        <tr>
            <form action="cadastro.php" method="POST">
                <td></td>
                <td><input type="text" name="nome"></td>
                <td><input type="text" name="email"></td>
                <td><input type="text" name="telefone"></td>
                <td ><input type="Submit" value="Cadastro"> </td>
            
            </form>
        </tr>
    </table>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>