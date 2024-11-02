<?php
    echo "Você só pode entrar se tiver a partir de 18 anos ou ";
    echo "a partir de 16 anos acompanhado. <br>";
$idade = $_POST["idade"];

if ($idade >= 18) {
    echo "Você poderá entrar...";
}else {
    echo " Voce ainda não tem a idade desejada, idade desejada: 18, sua idade: $idade <br>";

}