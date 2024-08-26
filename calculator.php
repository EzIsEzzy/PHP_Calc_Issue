<?php
static $result = 0;
function calc($num, $operator)
{
    global $result;
    switch ($operator) {
        case '+':
            $result+= $num; break;
        case '-':
            $result-= $num; break;
        case '*':
            $result*= $num; break;
        case '/':
            if ($num != 0)
            $result/= $num;
            else
            $result= "Error! Division by zero is not allowed.";
        break;
        case '%':
            if ($num != 0)
            $result %= $num;
            else
            $result= "Error! Division by zero is not allowed.";
        break;
        default:
        $result= "Error! Invalid operator.";
        break;
    }
}
if (isset($_GET['equal']))
{
    $num = $_GET['num'];
    $op = $_GET['op'];
    calc($result, $num, $op);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="calc_border">
            <div class="screen">
                <input type="text" id="screen" class="content" value="<?php echo $result;
                
                echo $num = (isset($_GET['num'])) ? $_GET['num'] :"";

                echo $op = (isset($_GET['op'])) ? $_GET['op'] :"";
                
                ?>" >
            </div>
            <form class="buttons" method="get" action="calculator.php?result= <?= $result ?>&num=<?= $num ?>&op=<?= $op ?>">
                <input type="reset" class="opbutton" name="delete" value="CE">
                <input type="submit" class="opbutton" name="power_of_2" value="x²">
                <input type="submit" class="opbutton" name="sqrt" value="√²">
                <input type="submit" class="opbutton" name="op" value="%">
                <input type="submit" class="button" name="num" value="1">
                <input type="submit" class="button" name="num" value="2">
                <input type="submit" class="button" name="num" value="3">
                <input type="submit" class="opbutton" name="op" value="+">
                <input type="submit" class="button" name="num" value="4">
                <input type="submit" class="button" name="num" value="5">
                <input type="submit" class="button" name="num" value="6">
                <input type="submit" class="opbutton" name="op" value="-">
                <input type="submit" class="button" name="num" value="7">
                <input type="submit" class="button" name="num" value="8">
                <input type="submit" class="button" name="num" value="9">
                <input type="submit" class="opbutton" name="op" value="*">
                <input type="submit" class="button" name="num" value="00">
                <input type="submit" class="button" name="num" value="0">
                <input type="submit" class="button" name="num" value="000">
                <input type="submit" class="button" name="equal" value="=">
            </form>
            
        </div>
    </div>
</body>

</html>