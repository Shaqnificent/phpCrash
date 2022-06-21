
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- Echo - Output strings, numbers, html, etc -->
    <h1><?php echo 'Posts'; ?></h1>
    <?php // This is a php tag. If there is no html or other content below the php, we don't need to close the php tag.
        echo '<h2>subPost</h2>'; 

        // print_r - Gives a bit more info. Can be used to print array
        print_r([1, 2, 3]);
        // var_dump - Even more info like data type and length
        var_dump('Hello');
    ?>

</body>
</html>