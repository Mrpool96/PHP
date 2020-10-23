<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Finding Even and Odd:- By taking User Input</h1>
    <form action="" method="post">
    <input type="number" name="number" placeholder="Enter the number">
    <input type="button" value="Submit">
    </form>
</body>
<?
    if($_POST){  
        $number = $_POST['number'];   
        //divide entered number by 2   
        //if the reminder is 0 then the number is even otherwise the number is odd  
        if(($number % 2) == 0){  
            echo "$number is an Even number";  
        }else{  
            echo "$number is Odd number";  
        }  
    }  

?>
</html>