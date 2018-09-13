<?php
    include 'DATABASE/DB_CONNECTION_ENABLE.php';
    session_start();

    //function to check the data of the login form
    function checkFormData() {
      if( empty($_POST['user-email']) || empty($_POST['user-aadhar']) ) {
        echo "<script> alert('Please Fill all the fields'); </script>";
        return false;
      }
      if ( !filter_var($_POST['user-email'] , FILTER_VALIDATE_EMAIL) ) {
            echo "<script>alert('Email is not valid.');</script>";
            return false;
      }
      return true;
    }

    //after submitting the form...
    if( isset($_POST['login']) ) {

      if( $_POST['user-email'] == "collector" && $_POST['user-aadhar'] == 11112222 ) {
        sleep(1);
        header('Location: admin.php');
      }

      if( checkFormData() ) {  //if validation is done preperly
          $user_email = $_POST['user-email'];
          $user_aadhar = intval($_POST['user-aadhar']);

          $user_details_query = "SELECT * FROM user_table WHERE EMAIL='$user_email'";
          $user_details_result = mysqli_query( $connect , $user_details_query );

          if( mysqli_num_rows($user_details_result) == 0 ) {
              echo "<script>alert('Invalid User');</script>";
              header('Location: sign-in.php');
          }
          else {
            $user_details = mysqli_fetch_assoc( $user_details_result );

            if( ($user_email != $user_details['EMAIL']) || ($user_aadhar != $user_details['AADHAR_ID']) ) {
              echo "<script> alert('Invalid Email or Aadhar Id'); </script>";
              header('Location: sign-in.php');
            }

            if( ($user_email == $user_details['EMAIL']) && ($user_aadhar == $user_details['AADHAR_ID']) ) {

                $_SESSION['user_name'] = $user_details['NAME'];
                $_SESSION['user_district'] = $user_details['DISTRICT'];
                $_SESSION['user_city'] = $user_details['CITY'];
                $_SESSION['user_phone'] = $user_details['PHONE'];
                $_SESSION['user_email'] = $user_details['EMAIL'];
                $_SESSION['user_aadhar'] = $user_details['AADHAR_ID'];

                header('Location: user-profile.php');
            }
            else {
              header('Location: user-profile.php');
            }
          }
      }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SCS | Login</title>
  <link rel="stylesheet" href="main.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lalezar" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Paytone+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Volkhov" rel="stylesheet">
</head>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

      <div id="sign-up-form" style="width:35%">
        <div class="sign-up-header">
          User LogIn Form
        </div>

        <div class="form-group">
          <label for="login-email">Email: </label>
          <input id="login-email" name="user-email" type="text" class="form-control" />
        </div>

        <div class="form-group">
          <label for="aadhar">Aadhar ID: </label>
          <input type="number" name="user-aadhar" class="form-control" />
        </div>

        <input type="submit" class="btn btn-success" name="login" value="LOG IN" />

        <button type="reset" id="reset-btn" class="btn btn-primary">RESET</button>

        <div class="home-link">
          Want to go home page? <a href="index.php">click here</a>
        </div>
      </form>


    </div>

</body>
</html>

<?php
    include_once 'DATABASE/DB_CONNECTION_DISABLE.php';
?>
