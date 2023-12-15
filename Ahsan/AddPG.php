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
        $parentID = $_POST['parentID'];
        $parentname = $_POST['parentname'];
        $parentphone = $_POST['parentphone'];
        $parentaddress = $_POST['parentaddress'];
        $parentemail = $_POST['parentemail'];
        $studentid = $_POST['studentid'];
        $sql = "INSERT INTO `parents`(`parentID`, `parentname`, `parentphone`, `parentaddress`, `parentemail`, `studentid`)
        VALUES ('$parentID','$parentname',$parentphone,'$parentaddress','$parentemail','$studentid')";
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