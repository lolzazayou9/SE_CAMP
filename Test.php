<html>
    
<head>
    <meta charset="utf-8">
</head>

<body>
    <h1><?php echo "Hello PHP<br><br>"?></h1>
    <?php echo "<h1>Hello PHP<br></h1>"?>
    <?php $var_a = "SECAMP" ?>
    <?php echo $var_b = 'Hello var_a' ?>
    <br>
    <?php echo $var_c = "hello $var_a" ?>
    <br>
    <?php 
    $var_c = $var_a = 1;

    if($var_b === $var_c){
        //true
        echo '$var_b === $var_c';
    }else if($var_b <> $var_c){
        //true
        echo '$var_b <> $var_c';
    }else{
        //false
        echo 'else';
    } ?>
    <br>
    <?php echo $var_C = 2; ?>
    <br>
    <?php echo $var_c;
    switch($var_c){
        case 1:
            echo "1";
            break;
        default:
            echo "test";
    }
    $arry = array(1,2,3);
    $arry1 = [1,2,3]; //{}
    $arry2[] = 1;
    $arry2[] = 2;
    $arry2[] = 3;
    ?>
    <?php print_r($arry);?>
    <pre><?php print_r($arry);?></pre>
    <pre><?php print_r($arry1);?></pre>
    <pre><?php print_r($arry2);?></pre>
    <?php for($i =0; $i < count($arry2); $i++){
    ?>
         <h3><?php echo $arry2[$i]; ?></h3>
    <?php
    }?>
    <?php foreach($arry2 as $key => $value){
    ?>
         <h3><?php echo $arry2[$key]; ?> : <?php echo $value; ?></h3>
    <?php
    }?>
</body>

</html>