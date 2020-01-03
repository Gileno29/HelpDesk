<?php
$usuario_autenticado=false;
$usuarios_app= array(
    array('email'=>'adm@teste.com.br','senha'=>'123456'),
    array('email'=>'user@teste.com.br', 'senha'=>'abcd')
);



foreach($usuarios_app as $user){
    echo 'usuário app:'.$user['email'].' / ' .$user['senha'];
    echo '<br/>';
    echo 'Usuário form: ' .$_POST['email'].' / '.$_POST['senha'];

    if(($user['email']==$_POST['email']) && ($user['senha']==$_POST['senha'])){
            $usuario_autenticado=true;
    }
}

if($usuario_autenticado){
    echo "<br>"."<h1>".'usuario Autenticado Com Suceso !!'."</h1";
}else{
    echo "<br>"."<h1>".'email ou senha errados'."</h1>";
}

?>