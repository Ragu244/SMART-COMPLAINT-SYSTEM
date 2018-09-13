<?php
    include 'DATABASE/DB_CONNECTION_ENABLE.php';

    session_start();

    $user_name = $_SESSION['user_name'];
    $user_city = $_SESSION['user_city'];
    $user_district = $_SESSION['user_district'];
    $user_email = $_SESSION['user_email'];
    $user_phone = $_SESSION['user_phone'];
    $user_aadhar = $_SESSION['user_aadhar'];

    // for log out
    if( isset($_POST['logout'])  ) {
      session_unset();
      session_destroy();
      sleep(1);
      header('Location: index.php');
    }

    //function for validating the complaint is entered or not...
    function validate() {
      if( empty($_POST['category']) || empty($_POST['complaint']) || empty($_POST['subject']) ) {
        echo "<script>alert('Fill the Required fields')</script>";
        return false;
      }
      return true;
    }


    //for avaluating and storing the COMPLAINTS
    if( isset($_POST['submit']) ) {

        if( validate() ) {
            $user_category = $_POST['category'];
            $user_subject = $_POST['subject'];
            $user_complaint = $_POST['complaint'];

            $user_complaint_query = "INSERT INTO complaints_table(NAME , SUBJECT , CATEGORY , COMPLAINT , DISTRICT , CITY , PHONE) VALUES('$user_name' , '$user_subject' , '$user_category' , '$user_complaint' , '$user_district' , '$user_city' , '$user_phone')";

            if( mysqli_query( $connect , $user_complaint_query ) ) {
              echo "<script>alert('Complaint Successfully added')</script>";
            }
        }

    }

?>

<!--
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Peru Veikala</title>
  </head>
  <body>

    <p>
      Your Details are...
    </p>

    <?php
    // echo "Your Name is..." . $user_name . "<br />";
    // echo "Your City is..." . $user_city."<br />";
    // echo "Your District is..." . $user_district."<br />";
    // echo "Your Email is..." . $user_email."<br />";
    // echo "Your Phone is..." . $user_phone."<br />";
    // echo "Your Aadhar is..." . $user_aadhar."<br />";

    ?>

  </body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>SCS | complaint forum</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lalezar" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Volkhov" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Volkhov" rel="stylesheet">

<style>

body {
  margin: 0;
  padding: 0;
  border: 0;
  width: 100% 100% !important;
  background-color: #1f1e6e !important;
}

:root {
  --header-font:  'Lalezar', cursive;
  --black: black;
  --hover-blue: #4d79ff;
}

* {
  font-family: var(--header-font);
  font-size: 25px;
}

.coupon {
    border: 2px solid black;
    width: 80%;
    border-radius: 15px;
    margin: 0 auto;
    max-width: 600px;
}

.dot {
  height: 40px;
  width: 250px;
  background-color: #bbb;
  border-radius: 20px;
  display: inline-block;
  text-align:center;
  padding:6px 0 0 0 ;
  color:white;
}

.t {
  background-color:red;
}

.tt{
  background-color:green;
}

.ttt{
  background-color:blue;
}

.tttt{
  background-color:Orange;
}

.ttttt{
  margin-top:8px;
  background-color:black;
}

.tttttt{
  background-color:brown;
}

body
{
	margin: 0;
	padding: 0;
  background-color: #110f86;
}

.container
{
	position: absolute;
	top:50%;
	left:50%;
	transform: translate(-50%,-50%);
	width: 1000px ;
	height: 500px;
  display: flex;
  margin: 20px auto;
  font-family: 'Acme' , sans-serif;
}

.container .box
{
	position: relative;
	width: 250px;
	height: 500px;
	background: #d90d0d;
  transition: 0.5s;
  font-family: 'Acme' , sans-serif;
  font-size:30px;
}

.container .box .thumb
{
	position: absolute;
	width: 100%;
	height: 250px;
  overflow: hidden;
}

a {
  font-size:16px;
}

h3 {
  font-size: 28px;
}

.container .box .thumb:hover
{
	position: absolute;
	width: 100%;
	height: 250px;
	overflow: hidden;
	
}

.container .box:nth-child(odd) .thumb
{
	bottom: 0;
	left: 0;
}

.container .box .thumb img
{
	width: 100%;
	height: 100%;

} 
.container .box .details
{
	position: absolute;
	width: 100%;
	height: 250px;
	overflow: hidden;
	background: #262626;
}

.container .box:nth-child(even) .details
{
	bottom: 0;
	left: 0;
}
.container .box:nth-child(1) .details
{
	background: #8553cb;
}
.container .box:nth-child(2) .details
{
	background: #59ba42;
}
.container .box:nth-child(3) .details
{
	background: #ee6c0c;
}
.container .box:nth-child(4) .details
{
	background: #4d51ee;
}
.container .box:nth-child(1) .thumb
{
	background: #f63;
}
.container .box:nth-child(2) .thumb
{
	background: #2d3ebf;
}
.container .box:nth-child(3) .thumb
{
	background:#e341ec ;
}
}
.container .box:nth-child(4) .thumb
{
	background:#4d51ee;

}
.container .box .details .content
{
	position: absolute;
	top:calc(50% - 16px);
	top:50%;
	transform:translate(0,-50%);
	width: 100%;
	padding: 20px;
	box-sizing: border-box;
	text-align: center;
	transition: 0.5s;
}

.container .box .thumb .content
{
	position: absolute;
	top:calc(50% - 16px);
	top:50%;
	transform:translate(0,-50%);
	width: 100%;
	padding: 20px;
	box-sizing: border-box;
	text-align: center;
	transition: 0.5s;
	
}
.container .box .thumb:hover .content
{
	position: absolute;
	top:calc(50% - 16px);
	top:50%;
	transform:translate(0,-50%);
	width: 100%;
	padding: 20px;
	box-sizing: border-box;
	text-align: center;
	transition: 0.5s;
	
}


.container .box .details:hover .content
{
	top:calc(50%);
}
.container .box .thumb:hover .content
{
	top:calc(50%);
}
.container .box .details .content .fa 
{
	font-size: 80px;
	color: #fff;

}
.container .box .details .content .fas
{
	font-size: 80px;
	color: #fff;
}
.container .box .details .content h3
{
	margin: 0;
	padding: 0;
	padding: 10px 0;
	color: #fff;
}
.container .box .details .content a
{
	display: inline-block;
	padding: 5px 20px;
	color: #fff;
	border: 2px solid #fff;
	text-decoration: none;
	transition: 0.5s;
	border-radius: 20px;
	transform: scale(0);

}
.container .box .details:hover .content a
{
	display: inline-block;
	padding: 5px 20px;
	color: #fff;
	border: 2px solid #fff;
	text-decoration: none;
	transition: 0.5s;
	border-radius: 20px;
	transform: scale(0);
	transform: scale(1.1);
	z-index: 1;
	box-shadow: 0 5px 20px rbga(0,0,0,1);

}

.container .box .details:hover .content a
{
	background: #fff;
	color: #262626;
	transform: scale(1);
	z-index: 1;
	box-shadow: 0 5px 20px rbga(0,0,0,1);
	transform: scale(1.1);
}
.container .box .thumb .content .fa 
{
	z-index: 1;
	font-size: 80px;
	color: #fff;

}
.container .box .thumb .content .fas
{
	font-size: 80px;
	color: #fff;
}
.container .box .thumb .content h3
{
	margin: 0;
	padding: 0;
	padding: 10px 0;
	color: #fff;
}
.container .box .thumb .content a
{
	display: inline-block;
	padding: 5px 20px;
	color: #fff;
	border: 2px solid #fff;
	text-decoration: none;
	transition: 0.5s;
	border-radius: 20px;
	transform: scale(0);

}
.container .box .thumb:hover .content a
{
	display: inline-block;
	padding: 5px 20px;
	color: #fff;
	border: 2px solid #fff;
	text-decoration: none;
	transition: 0.5s;
	border-radius: 20px;
	transform: scale(0);
	z-index: 1;
	box-shadow: 0 5px 20px rgba(0,0,0,1);

}

.container .box:hover .thumb .content a
{
	background: #fff;
	color: #262626;
	transform: scale(1.1);
	z-index: 10 ;
	box-shadow: 0 5px 20px rbga(0,0,0,1);

}
#on,#on1,#on2,#on3,#on4,#on5,#on5,#on6,#on7
{
	position: absolute;
	top:50%;
	left:50%;
	transform: translate(-50%,-50%);
	width: 1000px;
	height: 500px;
	
	display: flex;
	
	box-shadow: 0 5px 20px rbga(0,0,0,1);
	background-color: #f63;
	display: none;
	color: #fff;
	
}
#on1
{
	background-color: #8553cb;
}

#on2
{
	background-color: #2d3ebf;
}

#on3
{
	background-color:#59ba42;
}

#on4
{
	background-color: #e341ec;
}

#on5
{
	background-color:  #ee6c0c;
}

#on6
{
	background-color: #4d51ee;
}

#on7
{
	background-color: #4d51ee;
}


#complaintsss {
  position: absolute;
  top: 570px;
}

span { 
	color: #711; 
} 
::-webkit-input-placeholder { 
	color: #711 
}
#main { 
	display:none;
	position: fixed; top: 40%; right: 50px; width: 300px; 
	border: 4px solid #421; padding: 20px; 
}
#main div { 
	margin: 10px; 
} 
#input { 
	border: 0; background: #EBE547; padding: 7px; border: 1px solid #421;width:100%; 
}
i
{
	
	position: fixed; top: 80%; right: 20px; 
}
#chatbot
{
	border-bottom:red;
	background-color:lightgrey;
	width:100%;
}
	

</style>
  </head>
  <body>

    <div id="header" style="background-color:#ccc;height:80px;">
         <span class="header-heading" style="float:left;font-size:32px;margin:20px auto auto 20px;">
          <span style="font-size:39px;">SMART</span> COMPLAINT SYSTEM
         </span>

        <span class="sign-in" style="float:right;margin:20px 30px auto auto;">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
              <span style="margin:10px 10px auto auto;">Hi <?php echo $user_name ?></span>
              <button type="submit" name="logout" class="btn btn-primary" style="font-size:20px;">Log Out</button>
          </form>
        </span>

    </div>

  <!-- <div class="container mt-3">
	<span class="dot t">Public</span>
	<span class="dot tt">Transport</span>
	<span class="dot ttt">Electricity</span>
	<span class="dot tttt">Medical</span>
	<span class="dot ttttt">Safety</span>
	<span class="dot tttttt">Others</span>
  </div> -->

  <div class="container">
		<div class="box">
			<div class="thumb">
				<div class="content">
					<i class="fa fa-bell" aria-hidden="true"></i>
					<h3>Safety</h3>
					<a  onclick="on()" href="#">Read More></a>
				</div>
			</div>
			<div class="details">
				<div class="content">
					<i class="fa fa-bell" aria-hidden="true"></i>
					<h3>Electricity</h3>
					<a  onclick="on1()" href="#">Read More></a>

				</div>
			</div>
		</div>
		<div class="box">
			<div class="thumb">
				<div class="content">
					<i class="fas fa-bus-alt" aria-hidden="true"></i>
					<h3>Transport</h3>
					<a onclick="on2()" href="#">Read More></a>

				</div>
			</div>
			<div class="details">
				<div class="content">
					<i class="fa fa-users" aria-hidden="true"></i>
					<h3>public</h3>
					<a onclick="on3()" href="#">Read more</a>
				</div>
			</div>
		</div>
		<div class="box">
			<div class="thumb">
				<div class="content">
					<i class="fa fa-medkit" aria-hidden="true"></i>
					<h3>Medical</h3>
					<a onclick="on4()" href="#">Read more</a>

				</div>
			</div>
			<div class="details">
				<div class="content">
					<i class="fa fa-tint" aria-hidden="true"></i>
					<h3>Water</h3>
					<a onclick="on5()" href="#">Read more</a>
				</div>
			</div>
		</div>

		<div class="box">
			<div class="thumb">
				<div class="content">
					<i class="fas fa-road" aria-hidden="true"></i>
					<h3>Road</h3>
					<a onclick="on6()" href="#">Read more</a>
				</div>
			</div>
			<div class="details">
				<div class="content">
					<i class="fas fa-bars" aria-hidden="true"></i>
					<h3>Others</h3>
					<a onclick="on7()" href="#">Read more</a>

				</div>
			</div>
		</div>
		
	</div>
	<div id="on" class="w3-container w3-center w3-animate-zoom" onclick="off()">
		<h1 style="font-size:40px;text-align:center;" id="type"></h1>
		<blockquote>
		<p style="width:650px;margin:0 auto;font-size:25px;text-align:justify;" >Government agencies are responsible for setting food safety standards, conducting inspections, ensuring that standards are met, and maintaining a strong enforcement program to deal with those who do not comply with standards.<br>We want to make sure that all of our employees and partners return home in good health after a day's work. We believe that all accidents can be prevented, and the only way to go is towards our goal of zero accidents.</p></blockquote>
	</div>

	<div id="on1" class="w3-container w3-center w3-animate-zoom" onclick="off1()">
		<h1 style="font-size:40px;text-align:center;" id="type1"></h1>
		<p style="width:650px;margin:0 auto;font-size:25px;text-align:justify;">1. FREQUENT ELECTRICAL SURGES<br>
2. SAGS AND DIPS IN POWER<br>
3. LIGHT SWITCHES NOT WORKING PROPERLY<br>
4. CIRCUIT BREAKER TRIPPING FREQUENTLY <br>	
5. CIRCUIT OVERLOAD</p>
	</div>

	<div id="on2"  class="w3-container w3-center w3-animate-zoom"onclick="off2()">
		<h1 style="font-size:40px;text-align:center;" id="type2"></h1>
		<p style="width:650px;margin:0 auto;font-size:25px;text-align:justify;">Buses are the main form of public transportation in the city. They transport about five and a half million passengers on a daily basis, on the hundreds of routes around Chennai. This is how most locals get around. The Chennai Mofussil Bus Terminus (CMBT) is located on the inner ring road in the Koyambedu area and is one of the largest bus stations in all of Asia.<br>

		</p>
	</div>

	<div id="on3" class="w3-container w3-center w3-animate-zoom" onclick="off3()">
		<h1  style="font-size:40px;text-align:center;" id="type3"></h1>
		<p style="width:650px;margin:0 auto;font-size:25px;text-align:justify;">1. Unskilled labor.<br>
2. Oil dependency on other countries.<br>
3. Lack of political understanding.</p>
	</div>

	<div id="on4" class="w3-container w3-center w3-animate-zoom" onclick="off4()">
		<h1  style="font-size:40px;text-align:center;" id="type4"></h1>
		<p style="width:650px;margin:0 auto;font-size:25px;text-align:justify;">The following are the major problems of health services:<br>
Neglect of Rural Population: A serious drawback of India's health service is the neglect of rural masses. ... <br>
Emphasis on Culture Method: ... <br>
Inadequate Outlay for Health: ... <br>
Social Inequality: ... <br>
Shortage of Medical Personnel: ... <br>
Medical Research: ... <br>
Expensive Health Service</p>
	</div>

	<div id="on5" class="w3-container w3-center w3-animate-zoom" onclick="off5()">
		<h1  style="font-size:40px;text-align:center;" id="type5"></h1>
		<p style="width:650px;margin:0 auto;font-size:25px;text-align:justify;"><b>Water scarcity</b> is the lack of sufficient available water resources to meet the demands of water usage within a region.<br> More than 1.2 billion people lack access to clean drinking water. Water scarcity involves water stress, water shortage or deficits, and water crisis</p>
	</div>

	<div id="on6" class="w3-container w3-center w3-animate-zoom" onclick="off6()">
		<h1 style="font-size:40px;text-align:center;" id="type6"></h1>
		<p style="width:650px;margin:0 auto;font-size:25px;text-align:justify;">The <b>road transportation</b> system of our country is facing real challenges. The transport companies are facing various problems while transporting goods from one place to another. Be it transferring heavyweight cargo or sensitive materials, the well-maintained road condition is required to ensure the safest transportation of goods to their desired destination.</p>
	</div>

	<div id="on7" class="w3-container w3-center w3-animate-zoom" onclick="off7()">
		<h1 style="font-size:40px;text-align:center;" id="type7"></h1>
		<p style="width:650px;margin:0 auto;font-size:25px;text-align:justify;"></p>
	</div>




  <div id="complaintsss" style="width:600px;float:left;margin-top:25px;margin-left:220px;">

  <br>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="form-group">
      <strong><label for="sel1" style="color:white;font-family: 'Volkhov', serif;">Category Of Complaint <span style="color:red;">*</span></label></strong>
      <select class="form-control" id="sel1" name="category" style="background-color:rgba(255,255,255,0.9123);font-family: 'Volkhov', serif;height:45px;font-size:20px;" class="form-control" >
        <option>-select-</option>
		    <option value="public">Public </option>
		    <option value="transport">Transport</option>
        <option value="electricity">Electricity</option>
        <option value="medical">Medical</option>
        <option value="safety">Safety </option>
		    <option value="others">Others</option>
      </select>
	  <br>

    <div style="width:100%;color:white;font-family: 'Volkhov', serif;text-align:justify;font-size:26px;font-weight:bolder;">
      Subject of the Complaint <span style="color:red;">*</span>
      <input type="text" name="subject" class="form-control" style="background-color:rgba(255,255,255,0.9123);width:100%;height:50px;margin-bottom:30px;font-size:20px;font-weight:100;" placeholder="Enter subject here. . . . "/>
    </div>

	  <strong><label style="font-family: 'Volkhov', serif;color:white;width:100%;text-align:justify;font-size:26px;"  for="complaint">Short summary of your complaint in not more than 1000 characters <span style="color:red;">*</span></label></strong>
	   <br />
    <textarea id="ra" class="form-control instruction-texts" rows="6" id="complaint"  style="font-family: 'Volkhov', serif;font-size:22px;background-color:rgba(255,255,255,0.9123);" name="complaint" placeholder="Enter complaint here. . . . "></textarea>
	<br>
<!--
	<strong><label style="width:100%;text-align:justify;font-size:28px;" for="comment">Is the matter complained of the subject of any proceedings in a court of law or other Tribunal or Statutory Authority? (Yes/No) *</label></strong>
	 <br />
  <textarea class="form-control" rows="5" id="comment" style="font-size:22px"></textarea> -->
	 </div>

   <div id="btns" style="margin-top:-28px;">
     <button type="submit" style="font-size:32px;width:280px;margin-left:120px;text-align:center;" class="btn btn-primary" name="submit">SUBMIT</button>
     <br />
     <button type="reset" class="btn btn-danger" style="margin-top:10px;margin-left:120px;font-size:32px;width:280px;text-align:center;" >RESET</button>
   </div>
  <div class="" style="margin:100px;">

  </div>


	</form>

	</div>

  <i class="fa fa-comments" style="font-size:100px;color:#f1f1f1;;" onclick="f1()" aria-hidden="true"></i>
<div id="main" style="background-color:#fff;"><br><br><br>

	<div style="float:right;margin-top:-80px;border:5px white solid;width=100%;"><span id="user"></span></div>
	<div style="border-background-color:#c6e2ff;width:100%;color:#0066cc;margin-top:-20px;text-align:justify;"><span id="chatbot"></span></div>
	
	<br><br><br>
	
	<div><input id="input" type="text" placeholder="say anything..." autocomplete="off"/></div>
</div>
<div class="chatbot">
<script type="text/javascript">
	function f1()
	{
		document.getElementById("main").style.display="block";
	}
	function f1()
	{
		document.getElementById("main").style.display="block";
	}
var trigger = [
	["hi"],
	["file complaint","register complaint"],
	["electricity"],
    ["transport"],
    ["road"],
    ["safety"],
    ["water"],
    ["public"],
    ["medical"],
    ["are you bot", "are you human"],
	["who created you", "who made you"],
	["thanks"],
	["bye", "good bye","see you later"],
    ["gg"],
];
var reply = [
	["hello"], 
	["Tell your category : Electricity,Transport,Road,Water,Safety,Public,Hospitality"],
	["unwired Turnouts,Excess Billing,Metre Reading,Low Voltage,Frequent Power Cut,Go to Complain Section and File Your Complaint"],
	["Add Few More Buses,Proper Timing,Proper Fixed Stops,Rude Behaviour,Go To Complain Section and File Your Complaint"],
    ["Stagnant of Water,Poor Safety,Go To Complain Section and File Your Complaint"],
    ["Robbery,Women Harassment,Local Bars,Go To Complain Section and File Your Complaint"],
    ["unclean Water,Less Water Pipes,Stagnant of Water,Go To Complain Section and File Your Complaint"],
    ["Economic,Education,Social Inequality,Go To Complain Section and File Your Complaint"],
    ["Environmental Quality,Unhealthy Community,Poor Communication between Providers,Physician and NurseShortages,Go To Complain Section and File Your Complaint"],
	["I am a bot.What are you?"],
	["Digital Destroyers"],
	["You are welcome"],
	["Bye", "Goodbye", "See you later"],
    ["Thadigina thakhajanu,Tharikita thadharina, Thadhemdhemtha aanandam, Thalavani thalapuga, Yedhalanu kalupaga, Modhalika modhalika, Malli geetha govindam, Inkem inkem inkem kaavaale… Chaaley idi chaaley… Neekai nuvve vachi vaalaavey, Ikapai thiranaalley, Gundellonaa vegam penchaavey… Gummamloki holi techhavey, Nu pakkanuntey inthenemo ney, Nak okko ganta okko janmai, Malli putti chasthunnane, Inkem inkem inkem kaavaale… Chaaley idi chaaley… Neekai nuvve vachi vaalaavey, Ikapai thiranaalle"],
];
var alternative = ["Invalid..."];
document.querySelector("#input").addEventListener("keypress", function(e){
	var key = e.which || e.keyCode;
	if(key === 13){ //Enter button
		var input = document.getElementById("input").value;
		document.getElementById("user").innerHTML = input;
		output(input);
	}
});
function output(input){
	try{
		var product = input + "=" + eval(input);
	} catch(e){
		var text = (input.toLowerCase()).replace(/[^\w\s\d]/gi, ""); //remove all chars except words, space and 
		text = text.replace(/ a /g, " ").replace(/i feel /g, "").replace(/whats/g, "what is").replace(/please /g, "").replace(/ please/g, "");
		if(compare(trigger, reply, text)){
			var product = compare(trigger, reply, text);
		} else {
			var product = alternative[Math.floor(Math.random()*alternative.length)];
		}
	}
	document.getElementById("chatbot").innerHTML = product;
	speak(product);
	document.getElementById("input").value = ""; //clear input value
}
function compare(arr, array, string){
	var item;
	for(var x=0; x<arr.length; x++){
		for(var y=0; y<array.length; y++){
			if(arr[x][y] == string){
				items = array[x];
				item =  items[Math.floor(Math.random()*items.length)];
			}
		}
	}
	return item;
}
function speak(string){
	var utterance = new SpeechSynthesisUtterance();
	utterance.voice = speechSynthesis.getVoices().filter(function(voice){return voice.name == "Agnes";})[0];
	utterance.text = string;
	utterance.lang = "en-US";
	utterance.volume = 1; //0-1 interval
	utterance.rate = 1;
	utterance.pitch = 2; //0-2 interval
	speechSynthesis.speak(utterance);
}
</script>
</div>
<!--
	<div style="width:300px;float:left;margin-top:80px;margin-left:30px;" class="card coupon">
    <div class="card-header bg-dark" style="color:white">Recent Activities</div>
    <div class="card-body">
	Lorem ipsum dolor sit amet, et nam pertinax gloriatur. Sea te minim soleat senserit, ex quo luptatum tacimates voluptatum, salutandi delicatissimi eam ea. In sed nullam laboramus appellantur, mei ei omnis dolorem mnesarchum.
	</div>

  </div> -->


	<!--
	<<pre style="margin-left:45px;">
			 <small>Declaration to be given by the Complainant</small>

			The facts stated in the complaint are true and correct to the best of my/our knowledge and belief.
			I/we have placed all relevant facts before the Council and have not concealed any material facts.
			I/we confirm that no proceedings are pending in any Court of law or other Tribunal or Statutory Authority in
			respect of the subject matter complained of before the Authority.

	</pre>
	 -->
  </body>

  <script>
		var txt ="Safety";
		var txt1 ="Electricity";
		var txt3="Public";
		var txt2 ="Transport";
		var txt4 ="Medical";
		var txt5 ="Water";
		var txt6 ="Road";
		var txt7 ="Others";

			var i=0;
			var speed=50;
		function on()
		{
			document.getElementById("on").style.display ="block";
			
			if(i<txt.length)
			{
				document.getElementById('type').innerHTML += txt.charAt(i);
				i++;
				setTimeout(on,speed);
			}
		}
		function on1()
		{
			document.getElementById("on1").style.display ="block";
			
			if(i<txt1.length)
			{
				document.getElementById('type1').innerHTML += txt1.charAt(i);
				i++;
				setTimeout(on1,speed);
			}
		}
		function on2()
		{
			document.getElementById("on2").style.display ="block";
			
			if(i<txt2.length)
			{
				document.getElementById('type2').innerHTML += txt2.charAt(i);
				i++;
				setTimeout(on2,speed);
			}
		}
		function on3()
		{
			document.getElementById("on3").style.display ="block";
			
			if(i<txt3.length)
			{
				document.getElementById('type3').innerHTML += txt3.charAt(i);
				i++;
				setTimeout(on3,speed);
			}
		}
		function on4()
		{
			document.getElementById("on4").style.display ="block";
			
			if(i<txt4.length)
			{
				document.getElementById('type4').innerHTML += txt4.charAt(i);
				i++;
				setTimeout(on4,speed);
			}
		}
		function on5()
		{
			document.getElementById("on5").style.display ="block";
			
			if(i<txt5.length)
			{
				document.getElementById('type5').innerHTML += txt5.charAt(i);
				i++;
				setTimeout(on5,speed);
			}
		}
		function on6()
		{
			document.getElementById("on6").style.display ="block";
			
			if(i<txt6.length)
			{
				document.getElementById('type6').innerHTML += txt6.charAt(i);
				i++;
				setTimeout(on6,speed);
			}
		}
		function on7()
		{
			document.getElementById("on7").style.display ="block";
			
			if(i<txt7.length)
			{
				document.getElementById('type7').innerHTML += txt7.charAt(i);
				i++;
				setTimeout(on7,speed);
			}
		}

		function off()
		{
			document.getElementById("on").style.display ="none";
			document.getElementById("type").innerHTML = " ";
			i=0;
		}
		function off1()
		{
			document.getElementById("on1").style.display ="none";
			document.getElementById("type1").innerHTML = " ";
			i=0;
		}
		function off2()
		{
			document.getElementById("on2").style.display ="none";
			document.getElementById("type2").innerHTML = " ";
			i=0;
		}
		function off3()
		{
			document.getElementById("on3").style.display ="none";
			document.getElementById("type3").innerHTML = " ";
			i=0;
		}
		function off4()
		{
			document.getElementById("on4").style.display ="none";
			document.getElementById("type4").innerHTML = " ";
			i=0;
		}
		function off5()
		{
			document.getElementById("on5").style.display ="none";
			document.getElementById("type5").innerHTML = " ";
			i=0;
		}
		function off6()
		{
			document.getElementById("on6").style.display ="none";
			document.getElementById("type6").innerHTML = " ";
			i=0;
		}
		function off7()
		{
			document.getElementById("on7").style.display ="none";
			document.getElementById("type7").innerHTML = " ";
			i=0;
		}

	</script>


</html>
