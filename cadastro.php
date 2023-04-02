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
            $nome=$_POST['nome'];
            $email=$_POST['email'];
            $telefone=$_POST['telefone'];

            $query="INSERT INTO tb_cliente(nome,email,telefone)value('$nome','$email','$telefone')";
            if (mysqli_query($con,$query)){
             header('Location:listagem.php');
            }else{
                echo " Erro ao inserir na Tabela";
            }
            mysqli_close($con);
        }
            
    ?>
   