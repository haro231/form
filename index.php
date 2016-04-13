<?php
/**
 * Created by PhpStorm.
 * User: Haro231
 * Date: 13/04/2016
 * Time: 00:29
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personal Details Form</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>
</head>
<body>
<form method = "post" action ="index.php">

    <h1><span style ="color:silver">Enter Details</span></h1>
    <div id="name">
        First Name: <input type="text" name="firstname"/>
        <br  />
        Last Name: <input type="text" name="lastname"/>
    </div>
    <br />
    <div id="gender">
        Gender:
        <br />
        <input type="radio" name="gender" value="Male"/> Male
        <br  />
        <input type="radio" name="gender" value="Female"/>Female
    </div>


    <br  />
    <div id="origin">
        Country: <select name="dropdown">
            <option value="United States" selected>United States</option>
            <option value="Nigeria" selected>Nigeria</option>
            <br  />
        </select>
    </div>

    <br/>
    <div id="interest">
        Interests:
        <br />
        <input type="checkbox" name="interest" value="on"> Movies
        <br/>
        <input type="checkbox" name="interest" value="on"> Music
        <br/>
        <input type="checkbox" name="interest" value="on"> Football
        <br/>
        <input type="checkbox" name="interest" value="on"> Games
    </div>

    <br />
    <div id="description">
        Describe Your Self: <br />
        <textarea rows = 10 cols="50" name="description">Enter description here....</textarea>
        <br />
        Upload picture: <input type="file" name="fileupload" accept="image/*" />
    </div>
    <br/>
    <div id="submit">
        <!--<input <a href="index.html">Home Page</a> type="submit" name="submit" value="Submit" />-->
        <a href= index.php class="button">Submit</a>

    </div>
</form>

 <?php
 $name = $_POST['firstname'];
 $last = $_POST['lastname'];
 $gender = $_POST['gender'];
 //$origin = $_POST['dropdown'];
 $interest = $_POST['interest'];
 $description = $_POST['description'];
 //$pic = $_POST['fileupload'];




 echo "<h2>Your Input: </h2>";
 echo "FirstName:  " .$name;
 echo "<br>";
 echo "LastName:  " .$last;
 echo "<br>";
 echo "Gender:   " .$gender;
 echo "<br>";
 echo "Interest:   " .$interest;
 echo "<br>";
 echo "Description:   " .$description;


?>
</body>
</html>
