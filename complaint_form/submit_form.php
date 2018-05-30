<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="process_submit.php" method="post" enctype="multipart/form-data">
        <input type="file" name="images[]" id="images" multiple>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>