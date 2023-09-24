<?php
   

    $titulo=str_replace('#','-',$_POST['titulo']);
    $titulo=str_replace('#','-',$_POST['categoria']);
    $titulo=str_replace('#','-',$_POST['descricao']);

    $arquivo=fopen('arquivo.txt','a');

  

    $text=$_POST['titulo'].' # '.$_POST['categoria'].' # '.$_POST['descricao'].  PHP_EOL;
    //echo $text;
    fwrite($arquivo, $text);

    fclose($arquivo);

    header('location: abrir_chamado.php');
?>
