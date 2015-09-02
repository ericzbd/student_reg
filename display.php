<?php
include('Student.php');
session_start();
?>

<?php
echo '<html>';
echo '<head>';
echo '<LINK REL="stylesheet" HREF="registration.css" TYPE="text/css" MEDIA="screen" />';

echo '<title>Student Registration</title>';
echo '</head>';
echo '<body><div id="wrapper">';
echo '<h1>Student Registration</h1>';

echo '<form action="" method="get"><fieldset><Legend>Course Registration</Legend>';
$student = $_SESSION['student'];
echo "<h3>Course registration successful.</h3><br>";
echo "Username: " . $student->get_sid() . "<br>";
echo "Student Name: " . $student->get_fName(). " " . $student->get_lName() . "<br>";
echo "Major: " . $student->get_major() . "<br><br>";
echo "Courses currently registered for: <br>";
echo $student->get_class1() . "<br>";
echo $student->get_class2() . "<br>";
echo $student->get_class3() . "<br>";
echo '</fieldset></form></div>';
echo '  <div class="clearfooter"></div><div id="footer">';

echo '<div id="footer">';
echo "<br>Copyright&copy; ~~";

echo '2015 Zach McAlexander, Eric Horne, Robert Barwick';
echo '</div></body></html>';

session_destroy();

?>