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
        $profID = $_POST['profID'];
        $profname = $_POST['profname'];
        $telephone = $_POST['telephone'];
        $profemail = $_POST['profemail'];
        $classname = $_POST['classname'];
        $sql = "INSERT INTO `prof`(`profID`, `profname`, `telephone`, `profemail`, `classname`)
        VALUES ('$profID','$profname',$telephone,'$profemail','$classname')";
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