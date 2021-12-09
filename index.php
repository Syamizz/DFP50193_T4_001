<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>001</title>
</head>
<body>
<?php
$myfile = fopen("contoh.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("contoh.txt"));
fclose($myfile);
?>
</body>
</html>