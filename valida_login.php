<?php

session_start();


//VARIAVEL QUE VERIFICA SE A AUTENTICAÇÃO FOI REALIZADA
$usuario_autenticado = false;
$usuario_id=null;
$perfis =array(1=>'administrativo',2=>'usuario');
$usuario_perfil_id=null;

//USUARIOS DO SISTEMA
$usuarios_app = array(
    array('id'=> 1,'email' => 'adm@teste.com.br', 'senha' => '1234','perfil_id'=>1),
    array('id'=> 2,'email' => 'tech@teste.com.br', 'senha' => 'abcd','perfil_id'=>1),
    array('id'=> 3,'email' => 'arthur@teste.com.br', 'senha' => '123456','perfil_id'=>2),
    array('id'=> 4,'email' => 'john@teste.com.br', 'senha' => 'abcd','perfil_id'=>2),
    array('id'=> 5,'email' => 'abigail@teste.com.br', 'senha' => '123456','perfil_id'=>2),
    array('id'=> 6,'email' => 'sadie@teste.com.br', 'senha' => 'abcd','perfil_id'=>2)
);



foreach($usuarios_app as $user){
  
    
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
        $usuario_id= $user['id'];
        $usuario_perfil_id=$user['perfil_id'];
    }
}

    if($usuario_autenticado){
        echo 'Usuário autenticado.';
        $_SESSION['autenticado']='SIM';
        $_SESSION['id']=$usuario_id;
        $_SESSION['perfil_id']=$usuario_perfil_id;
        header('Location: home.php');
    }else{
        $_SESSION['autenticado']='NAO';
        header('Location: index.php?login=erro');
    }




?>