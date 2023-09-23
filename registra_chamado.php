<?php
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    $titulo=str_replace('#','-',$_POST['titulo']);
    $titulo=str_replace('#','-',$_POST['categoria']);
    $titulo=str_replace('#','-',$_POST['descricao']);

    $arquivo=fopen('arquivo.txt','a');

  

    $text=$_POST['titulo'].' # '.$_POST['categoria'].' # '.$_POST['descricao'];
    //echo $text;
    fwrite($arquivo, $text);

    fclose($arquivo);
?>
