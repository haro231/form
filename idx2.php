<?php
/**
 * Created by PhpStorm.
 * User: Haro231
 * Date: 13/04/2016
 * Time: 01:19
 */
?>

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
