<html lang="en">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>  
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
    <div class="card card-fluid">
        <div class="jumbotron jumbotron-fluid"><h1>Applying BootStraps to PHP Forms</h1></div>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        
     <div class="form-row">
    <div class="col-md-6 mb-3">
    Name:- <input type="text" class="form-control" name="" placeholder="Enter Name" required>
    </div>
    </div>
    
    <div class="form-row">
    <div class="col-md-6 mb-3">
    E-mail: <input type="email" class="form-control" name="email" placeholder="Enter your Email" required>
    </div>
    </div>

    <div class="form-row">
    <div class="col-md-6 mb-3">
    Website: <input type="text" class="form-control" name="website" placeholder="Enter the Website" required>
    </div>
    </div>

    <div class="form-row">
    <div class="col-md-6 mb-3">
    <input type="date" name="date" class="form-control" placeholder="Enter Birthdate" required>
    </div>
    </div>

    <div class="form-row">
    <div class="col-md-6 mb-4">
        Comment: <textarea name="comment" class="form-control" rows="5" cols="40"></textarea>
    </div>
    </div>

        Gender:
    <input type="radio" class="radio ml-2" name="gender" value="female"required>Female
    <input type="radio" class="radio ml-2" name="gender" value="male"required>Male
    <input type="radio" class="radio ml-2" name="gender" value="other"required>Other

    <div class="div">
    <input type="submit"  class="btn btn-primary btn mt-5" name="submit" value="Submit"> 
    </div>

    </div>
    </div>
</div>
</div>
</body>

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = $date= " ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
  $data = test_input($_POST["date"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
echo "<h1>Your Input:</h1>";
echo $name;
echo "<br>";

echo $email;
echo "<br>";

echo $website;
echo "<br>";

echo $date;
echo "<br>";

echo $comment;
echo "<br>";

echo $gender;
echo  "<br>";
?>
</html>