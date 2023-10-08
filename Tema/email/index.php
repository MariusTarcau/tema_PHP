<?php 

$email="tarcaumarius6@gmail.com";

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Adresa de email '$email' indeplineste conditiile. ";

}
else{
    echo "Adresa de email '$email' nu indeplineste conditiile. ";
}


?>