<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>
<body>
<pre>

    <?php 
    
        $names = [
            'Emily Johnson',
            'Michael Smith',
            'Sarah Williams',
            'James Brown',
            "Jenifer Davis",
            "William Miller",
            "Marek Samofał",
        ];

        $num = count($names);

        $choice = rand(0, $num - 1);

        echo "The winner is: {$names[$choice]}";

        echo "<br />";

        echo $names[rand(0, count($names) - 1)];
        

    ?>

</pre>  

</body>
</html>