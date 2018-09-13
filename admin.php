<?php

  include 'DATABASE/DB_CONNECTION_ENABLE.php';

  session_start();

  if( isset($_POST['logout']) ) {
    sleep(1);
    header('Location: index.php');
  }



?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SMART COMPLAINT SYSTEM | Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Volkhov" rel="stylesheet">
    <style>
    
      #complaints {
        width:90%;
        padding: 1.5%;
        margin: 0 auto;
        background-color:#eee;
        margin-top: 20px;
        font-family: 'Acme', sans-serif;
      }
    
      #userC {
        padding:10px;
        margin:5px;
        background-color: #ccc;
        text-align: justify;
        font-size: 20px;
      }

      #userC h3 {
        font-size: 30px;
        font-family:  'Volkhov', serif;
        margin-left: 10px;
        font-weight: bolder;
      }

      #userC p {
        text-align: justify;
        margin-left:40px;
      }

      #namespace {
        margin-left: 200px;
      }

    </style>

  </head>
  <body style="background-color:#1f1e6e;">

    <div id="header" style="background-color:#ccc;height:80px;font-family: 'Acme', sans-serif;">
         <span class="header-heading" style="float:left;font-size:32px;margin:20px auto auto 20px;">
          <span style="font-size:39px;">SMART</span> COMPLAINT SYSTEM
         </span>

        <span class="sign-in" style="float:right;margin:20px 30px auto auto;">
          <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
              <!-- <span style="margin:10px 10px auto auto;font-size:">Hi sir</span> -->
              <button type="submit" name="logout" class="btn btn-primary" style="font-size:20px;">Log Out</button>
          </form>
        </span>
    </div>

    <div id="complaints">

      <?php
        $complaint_query = "SELECT * FROM complaints_table";
        $complaints_result = mysqli_query( $connect , $complaint_query );

         // if($complaints) {
        //   echo "<script>alert('success display')</script>";
        // } -->

        while( $row = mysqli_fetch_assoc($complaints_result)) {
          echo "<div id='userC'>" . "<h3>" . $row["SUBJECT"] . "</h3>" . "<p>" . $row['COMPLAINT'] . "</p>" . "<span id='namespace'></span>" . "- by " . $row['NAME'] . ", " . $row['CITY'] . " , " . $row['DISTRICT'] . "</div>" ;
        }

        ?>
    
    
    </div>

  </body>
</html>
