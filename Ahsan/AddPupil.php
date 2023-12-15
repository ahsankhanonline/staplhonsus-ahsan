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
        $studentid = $_POST['studentid'];
        $studentname = $_POST['studentname'];
        $studentage = $_POST['studentage'];
        $studentaddress = $_POST['studentaddress'];
        $studentmedinfo = $_POST['studentmedinfo'];
        $studentemail = $_POST['studentemail'];
        $studentphone = $_POST['studentphone'];
        $ClassID = $_POST['ClassID'];
        $sql = "INSERT INTO `students`(`studentid`, `studentname`, `studentage`, `studentaddress`, `studentmedinfo`, `studentemail`, `studentphone`, `ClassID`)
        VALUES ('$studentid','$studentname',$studentage,'$studentaddress','$studentmedinfo','$studentemail','$studentphone','$ClassID')";
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