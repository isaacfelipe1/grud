<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conectando ao banco de Dados</title>
</head>
<body>
    <h1>Conexão ao Banco de Dados</h1>
    <?php 
        //Abrir uma conexão
        //Função : mysqli_connect(host,login,senha,nome do banco de dados)
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
            //echo "Conectado com sucesso";
            mysqli_close($con);
        }
    ?>
   

</body>
</html>