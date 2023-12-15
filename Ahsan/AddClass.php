<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body> 
<h1><?php
    $link = mysqli_connect("localhost", "root", "", "st-alphonsus");
// Check connection
    if ($link === false) {
        die("Connection failed: ");
    }
	//if (isset($_POST['submit'])) {
        $classID = $_POST['classID'];
        $classname = $_POST['classname'];
        $capacity = $_POST['capacity'];
        $profID = $_POST['profID'];
        $sql = "INSERT INTO `classes`(`classID`, `classname`, `capacity`, `profID`)
        VALUES ('$classID','$classname',$capacity,'$profID')";
       if (mysqli_query($link, $sql)) {
         echo "New record has been created successfully";
       } else {
         echo "An Error occured while adding record ";
       }
    //}
?></h1>
<a href="index.html">Click here to go back to the home page!</a>
</body>
</html>