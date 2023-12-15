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
	//if(isset($_POST['Update'])){
        $classID = $_POST['classID'];
        $classname = $_POST['classname'];
        $capacity = $_POST['capacity'];
        $sql = "UPDATE classes SET classname= '$classname', capacity= '$capacity'
        WHERE classID= '$classID'";
    if($link->query($sql)=== TRUE){
        echo"Record Updated Successfully";
    } else {
         echo "Error updating record ";
       }
    //}
?></h1>
<a href="index.html">Go back to home page→→→→→→</a>
</body>
</html>