<?php
    session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<link href="style.css" rel="stylesheet">
<title>Bruhe</title>
</head>
    <body>

        <h1 class="rainbow">EPIC CALCULATOR</h1>

    
        <form method="post">
            <div class="firstNumber">
                <label> first number </label> <br>
                <input type="num" name="firstNumber" id="num" required> <br> <br>
            </div>
            <div class="secondNumber">
                <label> second number </label> <br>
                <input type="num" name="secondNumber" id="num" required> <br> <br>
            </div>
            
            <input type="submit" name="button" value="Minus">
            <input type="submit" name="button" value="Plus">
            <input type="submit" name="button" value="Devide">
            <input type="submit" name="button" value="Multiply">
        </form>

        <?php
            if(isset($_POST["button"])){
                switch($_POST["button"]){
                    case "Minus":
                        $answer = $_POST["firstNumber"] - $_POST["secondNumber"];
                        break;
                    case "Plus":
                        $answer = $_POST["firstNumber"] + $_POST["secondNumber"];
                        break;
                    case "Devide":
                        $answer = $_POST["firstNumber"] / $_POST["secondNumber"];
                        break;
                    case "Multiply":
                        $answer = $_POST["firstNumber"] * $_POST["secondNumber"];
                        break;
                }
            }
            if(isset($answer)){
                echo "your answer is $answer";
            }
        ?>


    </body>
</html>