<?php
echo '<html>';
echo '<head>';
echo '<LINK REL="stylesheet" HREF="registration.css" TYPE="text/css" MEDIA="screen" />';

echo '<title>Student Registration</title>';
echo '</head>';
echo '<body><div id="wrapper">';
echo '<h1>Student Registration</h1>';

echo '<form action="registration.php" method="get"><fieldset><Legend>New Student Registration</Legend>';
echo 'Username: '  . '<input type="text" name="username"><br><br>';
echo 'Password: ' . '<input type="password" name="password"><br><br>';
echo 'First Name: ' . '<input type="text" name="firstName"><br><br>';
echo 'Last Name: ' . '<input type="text" name="lastName"><br><br>';
echo 'Major: ' . '<input type="text" name="major"><br><br>';
echo '</fieldset><input type="submit" value="Submit"></form></div>';
echo '  <div class="clearfooter"></div></div><div id="footer">';

echo "<br>Copyright&copy; ~~";

echo '2015 Zach McAlexander, Eric Horne, Robert Barwick';
echo '</div></body></html>';


if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['major'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$major = $_POST['major'];
$openedFile = fopen("students.txt", "a");
$newStudentInformation = $username . '.' . $firstName . '.' . $lastName . '.' . $major . PHP_EOL;
fputs($openedFile, $newStudentInformation);
fclose($openedFile);
$openedLoginFile = fopen("login.txt", "a");
$studentLoginInformation = $username . '.' . $password . PHP_EOL;
fputs($openedLoginFile, $studentLoginInformation);
fclose($openedLoginFile);
header('Location: login.php');
}
?>