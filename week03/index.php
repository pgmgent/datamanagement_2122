<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1>Sharetevelde</h1>
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="my_file">
    <button type="submit">Opladen...</button>
</form>
<pre>
    <?php
        if(isset($_FILES['my_file']) && $_FILES['my_file']['size'] > 0) {
            $tmp_file = $_FILES['my_file']['tmp_name'];
            $file_name = $_FILES['my_file']['name'];

            move_uploaded_file($tmp_file, './uploads/' . $file_name);
            print_r(mime_content_type('./uploads/' . $file_name));
        }

        $items = scandir('./uploads');
        var_dump($items);
       
    ?>
    </pre>
</body>
</html>