<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Application Form</title>
    <meta name="author" content="Nicholas Lagoa">
    <meta name="viewport" content="width-device-width, initial-scale=1">
</head>
<body>
<p>COMPETITOR REGISTRATION FORM</p>
<form action="script.php" method="post"><!--script.php será responsável por processar os dados que forem enviados dentro desse formulário atráves do method=POST-->
    <p>Your name: <input type="text" name="nome"/></p><!--atenção nos names para recuperação no script-->
    <p>Your age: <input type="text" name="idade"/></p>
    <p><input type="submit" value="Send competitor data"/></p>
</form>
</body>
</html>