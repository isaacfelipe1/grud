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
            $id=$_POST['id'];
            $query="DELETE FROM tb_cliente WHERE id='$id'";
            if(mysqli_query($con,$query)){
                header("location:listagem.php");
            }else{
                echo " Erro ao Remover";
                mysqli_close($con);
            }
        }
            
    ?>
   