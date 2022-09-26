<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Latihan 1 PHP Dasar</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="GET">
        <div>
            <label for="string_input">Masukkan String: </label>
            <input type="text" name="string_input">
        </div>
        <div>
            <label for="loop_input">Masukkan Pengulangan: </label>
            <input type="number" name="loop_input" value="0">
        </div>
        <div class="btn-con">
            <input class="btn" type="submit" value="Submit" name="submit">
            <input class="btn" type="reset" value="Reset">
            <a href="index.php" class="btn">Clear</a>
        </div>
    </form>

    <div>
        <?php
            $input_arr = [];
            
            if(isset($_GET['submit'])) {
                $string_input = filter_input(INPUT_GET, 'string_input', FILTER_SANITIZE_SPECIAL_CHARS) ;
                $loop_input = $_GET['loop_input'];            
                if(strlen($string_input) > 0 && $loop_input > 0){
                    $i = 0;

                    while($i < $loop_input) {
                        $i++;
                        echo "
                        <div class='output'>    
                        {$string_input} {$i}
                        </div>
                        ";
                    }
                    
                    echo $loop_input % 2 == 0 ? 
                    "<div class='output last'>  $loop_input merupakan Bilangan Genap</div>"
                    : "<div class='output last'> $loop_input merupakan Bilangan Ganjil</div>";
                }
            }        
        ?>
    </div>
</body>
</html>