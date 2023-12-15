<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
        body {
          font-family: Arial, Helvetica, sans-serif;
        }

        .navbar {
          overflow: hidden;
          background-color: #333;
        }

        .navbar a {
          float: left;
          font-size: 16px;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }

        .dropdown {
          float: left;
          overflow: hidden;
        }

        .dropdown .dropbtn {
          font-size: 16px;
          border: none;
          outline: none;
          color: white;
          padding: 14px 16px;
          background-color: inherit;
          font-family: inherit;
          margin: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn {
          background-color: red;
        }

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }

        .dropdown-content a {
          float: none;
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
        }

        .dropdown-content a:hover {
          background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
          display: block;
        }
        </style>
    </head>
<body> 
<div class="navbar">
            <a href="index.html">Home</a>
            <div class="dropdown">
                <button class="dropbtn">View
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="http://localhost/Ahsan/Pupil.php">Student</a>
                    <a href="http://localhost/Ahsan/ParentGuardian.php">Parent</a>
                    <a href="http://localhost/Ahsan/Teacher.php">Teacher</a>
                    <a href="http://localhost/Ahsan/Class.php">Class</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Add
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="AddPupil.html">Student</a>
                    <a href="AddPG.html">Parent</a>
                    <a href="AddTeacher.html">Teacher</a>
                    <a href="AddClass.html">Class</a>
                </div>
            </div>
            <div class="dropdown">
              <button class="dropbtn">Delete
                  <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                  <a href="DelPupil.html">Student</a>
                  <a href="DelPG.html">Parent</a>
                  <a href="DelTeacher.html">Teacher</a>
                  <a href="DelClass.html">Class</a>
              </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn">Update
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="UpPupil.html">Student</a>
                <a href="UpPG.html">Parent</a>
                <a href="UpTeacher.html">Teacher</a>
                <a href="UpClass.html">Class</a>
            </div>
        </div>
            <a href="Contact.html">Contact Us</a>
        </div>
<?php
$link = mysqli_connect("localhost", "root", "", "st-alphonsus");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>
<h3>List of all students</h3>
		<table>
			<tr>
				<th width="250px">Student ID<br><hr></th>
				<th width="250px">Student Name<br><hr></th>
                <th width="250px">Age<br><hr></th>
				<th width="250px">Address<br><hr></th>
				<th width="250px">Medical Information<br><hr></th>
				<th width="250px">Email<br><hr></th>
				<th width="250px">Phone<br><hr></th>
				<th width="250px">Class ID<br><hr></th>
			</tr>
			<?php
			 $sql = mysqli_query($link, "SELECT studentid,studentname,studentage,studentaddress,studentmedinfo,studentemail,studentphone,classID FROM students ");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['studentid']}</th>
				<th>{$row['studentname']}</th>
        <th>{$row['studentage']}</th>
				<th>{$row['studentaddress']}</th>
				<th>{$row['studentmedinfo']}</th>
				<th>{$row['studentemail']}</th>
				<th>{$row['studentphone']}</th>
				<th>{$row['classID']}</th>
			</tr>";
			}
			?>
        </table>
</body>
</html>