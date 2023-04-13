<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mvc 87276 Kavish Soman d2c</title>
</head>
<body>
<style>
    body{
        font-family: impact;
        margin: 2px;
        padding: 2px;
        background-color: beige;
    }

</style>
<form method="post" action="">
    Vul beide velden in!<br>
   Kiest hier uw onderwerp: <input type="text" name="subject">(Je kunt maar maximaal 32 woorden typen!)<br>
   Type hier uw bericht in: <input type="text" name="text"><br>
    <input type="submit" name="send" value="verstuur"><br>
</form>
</body>
</html>
<?php
//VARIABLE
$sub = $_POST['subject'];
$text = $_POST['text'];

//IF ELSE STATEMENT
if ($sub == NULL || $text == NULL){

}
else{
$message = new Message("", $text);
echo "Onderwerp: " . $message->subjectext($sub). "<br/>";
echo "Bericht: " . $message->text;
}



