<?php
    //The link to the database is moved to the top of the PHP code.
    require ('../model/mysqli_connect.php'); // Connect to the db.
    // This query INSERTs a record in the users table.
    // Has the  the form been submitted?
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $errors = array(); // Initialize an error array.
      // Check for a username:
      if (empty($_POST['fname'])) {
        $errors[] = 'You forgot to enter your first name.';
      } else {
      $fname = mysqli_real_escape_string($dbcon, trim($_POST['fname']));
      }
      // Check for a username:
      if (empty($_POST['lname'])) {
        $errors[] = 'You forgot to enter your last name.';
      } else {
      $lname = mysqli_real_escape_string($dbcon, trim($_POST['lname']));
      }
      // Check for a Company name:
        if (empty($_POST['cname'])) {
            $errors[] = 'You forgot to enter your company name.';
          } else {
          $cname = mysqli_real_escape_string($dbcon, trim($_POST['cname']));
          }
        // Check for a registration type:
        if (empty($_POST['regtype'])) {
            $errors[] = 'You forgot to enter your registration type.';
          } else {
          $regtype = mysqli_real_escape_string($dbcon, trim($_POST['regtype']));
          }
      // Check for an email address:;
      if (empty($_POST['email'])) {
        $errors[] = 'You forgot to enter your email address.';
      } else {
      $e = mysqli_real_escape_string($dbcon, trim($_POST['email']));
      }
      // Check for a password and match against the confirmed password:
      if (!empty($_POST['psword'])) {
        if ($_POST['psword'] != $_POST['psword2']) {
        $errors[] = 'Your two passwords did not match.';
        } else {
      $p = mysqli_real_escape_string($dbcon, trim($_POST['psword']));
        }
      } else {
        $errors[] = 'You forgot to enter your password.';
      }
      $level = "1"; //ordinary
      $subtype = "1"; //free subscription
      if (empty($errors)) { // If it runs
    // Register the user in the database...
    // Check to see if email exist
      $q = mysqli_query($dbcon, "SELECT * FROM users WHERE email='".$e."'");
      if(mysqli_num_rows($q) > 0){

  echo  '<script language="javascript">alert("Email already in use. Please try again.")</script>;';
      }else{
    $q = "INSERT INTO users (user_id, fname, lname, email, psword, user_level)
    VALUES (' ', '$fname', '$lname', '$e', SHA1('$p'), '$level')";
        $result = @mysqli_query ($dbcon, $q); // Run the query.

        if ($result) { // If it runs
        header ("refresh:1;../register_thanks2.php");
        exit();

        } else { // If it did not run
        // Message:
          echo '<h2>System Error</h2>
    <p class="error">You could not be registered due to a system error. We apologize for any inconvenience.</p>';
        // Debugging message:
        echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $q . '</p>';
        } // End of if ($result)
        mysqli_close($dbcon);
      // Close the database connection.
      // include('footer/footer.php');
        exit(); }
      } else { // Report the errors.
        //header ("location: register-page.php");
        echo '<h2>Error!</h2>
        <p class="error">The following error(s) occurred:<br>';
        foreach ($errors as $msg) { // Print each error.
          echo " - $msg<br>\n";
        }
        echo '</p><h3>Please try again.</h3><p><br></p>';
        }// End of if (empty($errors))
     // End of the main Submit conditional.
}

?>
