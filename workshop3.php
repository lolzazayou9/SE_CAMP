<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <p>
        <?php 
        $var_x = 2;
        echo "<h1>ตารางแม่สตรคูณ $var_x </h1>";?>
        <div>
            <?php
            for($i = 1; $i <= 24 ;$i++){
                ?>
                <?php echo "$var_x X $i =";?>
                <?php echo $i*$var_x;?>
                <?php echo "<br>";
            }?>
            </div>
        </p>
        <style>
            h1{
                margin-top: 0px;
                margin-bottom: 10px;
                text-align: center;
            }
            div{
                background: linear-gradient(to right,#ef5350);
                background-color: light;
                width: 200px;
                height: 430px;
                border: 1px solid black;
                overflow-y: auto;
                text-align: center;
                margin: 0 auto;
                margin-top: 50px;
            }
            </style>
</body>

</html>