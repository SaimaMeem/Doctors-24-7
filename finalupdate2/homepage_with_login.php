<?php //include('db.php');

session_start();
$flag="";


if(isset($_GET['logout']))
{
	session_destroy();

	//header('location:login_doctor.php');

}
//include('db.php');


$flag="";

/*if(isset($_GET['logout']))
{
	session_destroy();

	//header('location:login_doctor.php');
}*/
if(!isset($_SESSION['signInUserName'])){
	header('location: homepage.php');
}
$host = 'localhost';
$user = 'root';
$password = '';
$errors=array();
$db = 'project';

$link = mysqli_connect($host, $user, $password, $db);


$slider1 = "select* from image_upload where id='3'";
$result1=mysqli_query($link, $slider1);


$image1=mysqli_fetch_row($result1);




$slider2 = "select* from image_upload where id='4'";
$result2=mysqli_query($link, $slider2);


$image2=mysqli_fetch_row($result2);



$slider3 = "select* from image_upload where id='5'";
$result3=mysqli_query($link, $slider3);

$image3=mysqli_fetch_row($result3);




$slider4 = "select* from image_upload where id='7'";
$result4=mysqli_query($link, $slider4);

$image4=mysqli_fetch_row($result4);





?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Doctors 24/7</title>
  <link rel = "icon" type="image/png" href="images/icon.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="stylesheet" href="css/homepage.css" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
       <div class="img-logo">
          <img  id = "logo" src="images/logo.png" class="img-responsive">
          </div>
          </div>
  <div class="col-md-4"></div>
          <div class="col-md-2"></div>
  <div class="col-md-1">
      <div class="login">
         <div class="container">

			<!--  <a href="login1.php" class="btn btn-info btn-md" role="button">login</a> -->

			 <!-- <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#login">login</button>-->

         </div>
     </div>
     </div>
    </div>
    </div>





		<nav class="navbar navbar-inverse">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
	</div>

			<div class="collapse navbar-collapse" id="myNavbar">
<div class="container">
<div class="row">
	<div class="col-lg-12">
<ul class=" nav navbar-nav ">
<li class="nav-item"><a class="nav-link active" href="homepage_with_login.php">Home</a></li>
<li class="nav-item"> <a href="doctors.php" > Doctors </a></li>
<li class="dropdown">
	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Donors
	<span class="caret"></span></a>
	<ul class="dropdown-menu">
		<li><a href="donor.php">A+</a></li>
		<li><a href="#">B+</a></li>
		<li><a href="#">AB+</a></li>
		<li><a href="#">O+</a></li>
		<li><a href="#">A-</a></li>
		<li><a href="#">B-</a></li>
		<li><a href="#">AB-</a></li>
		<li><a href="#">O-</a></li>
	</ul>
</li>

	<li class="nav-item"> <a href="hospital.php"> Hospitals </a></li>
	<li class="nav-item"> <a href="healthcard.php"> Health Cards </a></li>
	<li class="nav-item"> <a href="#"> Health Blogs </a></li>
		<li class="nav-item"> <a href="contact.php"> Contact Us </a></li>
		<li class="nav-item"> <a href="aboutus.php"> About Us </a></li>
		<!-- <li class="nav-item"> <a href="#"> Listed Data </a></li> -->
		 <li class="nav-item"> <a href="#"> Admin Panel </a></li>
	 </ul>

	 <ul class="nav navbar-nav navbar-right">
		<li class="dropdown">
	 <?php if(isset($_SESSION['success'])): ?>
	 <p>
		<?php
			echo $_SESSION['success'];
			unset($_SESSION['success']);
		?>
	 </p>
	 <?php endif; ?>
	 <a  class="dropdown-toggle" data-toggle="dropdown">

		<!-- <?php if(isset($_SESSION["signUpUserName"])):
		?>
		<p><?php echo $_SESSION['signUpUserName']; ?><span class="caret"></span></p>
	 <?php endif; ?> -->
		<?php if(isset($_SESSION["signInUserName"])) :
		?>
		<p><?php echo $_SESSION['signInUserName']; ?> <span class="caret"></span></p>


		<?php endif; ?>
				</a>
		<ul class="dropdown-menu">
			<?php if(isset($_SESSION["signUpUserName"])):
 ?>
 <li> <a href="doctor_private.php"> Profile </a></li>

 <?php endif ;?>
 <?php if(isset($_SESSION["signInUserName"])):
?>
<li> <a href="doctor_private.php"> Profile </a></li>

<?php endif ;?>

				 <?php if(isset($_SESSION["signUpUserName"])):
		?>
		<li> <a href="logout.php"> Logout </a></li>

		<?php endif ;?>

				 <?php if(isset($_SESSION["signInUserName"])):
		?>
		<li> <a href="logout.php"> Logout </a></li>

		<?php endif ;?>
	 </ul>
	 </li>
	 </ul>

				</div>
				</div>
</div>
</div>
		</nav>
    <div id="myCarousel" class="carousel slide"  data-ride="carousel" data-interval="1500">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active" id ="slider">
          <!-- Indicators  <img src="images/1.jpg" class="img-responsive">-->
		  		  <img src="images/<?php echo $image4[1]; ?>" class="img-responsive">

          <div class="carousel-caption">

          </div>
        </div>

        <div class="item"id="slider">
          <!-- Indicators   <img src="images/22.jpg" class="img-responsive">-->
		  		  <img src="images/<?php echo $image3[1]; ?>" class="img-responsive">

          <div class="carousel-caption">

          </div>
        </div>

        <div class="item" id="slider">
              <!-- Indicators <img src="images/4.jpg"class="img-responsive">-->
			  <img src="images/<?php echo $image2[1]; ?>" class="img-responsive">

          <div class="carousel-caption">

          </div>
        </div>

        <div class="item" id="slider">


	 <img src="images/<?php echo $image1[1]; ?>" class="img-responsive">
          <div class="carousel-caption">
          </div>
        </div>


      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
     </div>

     <div>
      <section class="online-color-back" id="app-store">
       <div class="container">
      	<div class="row">
      		<div class="col-md-12">
      		 <div class="online-text">
             <div class="background">

      		  <h1>Who We Are?</h1>
            <p> <p> Doctors 24/7 is an online portal dedicated to delivering quality services in the health care sector, including doctor online appointment booking <br>
               and facilities for patients and medical tourists with an e-commerce section consisting of online medicine sale.</p>
              <p>All in all, bringing medical help under one umbrella Doctors 24/7 offers an array of services to enhance well-being and wellness.
                <br>Here’s a concise about our services :</p>

            <ul>
              <li>Online booking facility for taking OPD appointment from doctor</li>
              <li>User health card service containing basic and medical information of user</li>
              <li>facility of getting blood donors</li>
              <li> 24/7 patient service</li>


              </ul>
              <span id="dots"> </span><span id="more">
              <p>Further, curious about how we can transform your health? Just give us a call! We will be more than happy to assist you.</p>
              <p>Doctors 24/7 aims to drive two very important behavioral changes that can make approaching	treatment faster and better. <br>
                In general, a common person in our country is quite unwilling	to see a proper physician for his or her illness, until it gets too bad.
                People try out	different suggestions from friends around them or conduct a self treatment based on other's	experiences.
                This is mainly due to serious lack of awareness about the signs, symptoms,	consequences of diseases and lack of proper guidance. </p>

            <p>Secondly, when people want to approach treatment, they commonly get into the trouble	of finding a right doctor. <br>
              In most cases, they head to Dhaka or other big cities and ask	their relatives or friends for help.
              Unfortunately, those relatives or friends typically know	only a few doctor names.
              Those are generally the busiest doctors who are well known at the	national level. Certainly, taking an appointment of those doctors are quite a hassle.
              One may	need to wait even two-three months to consult the doctor. </p>

            <p>This is again mainly because, there is not enough awareness about the availability of many	qualified doctors across the country <br> who could give attention and
              treat the patient earlier than	the time he/she will wait for. These result in unnecessary delays aggravating the condition of the	disease.
              Doctors 24/7 through its social network platform and many other means is continuously	engaging to <br>
               build the awareness among people to help these improve.</p>
              <p>&nbsp;</p></span></p>

        <button onclick="myFunction()" id="myBtn" class="btn btn-info btn-medium" >Read more</button>




             </div>
          </div>
      	   </div>
      	<div>
      </div>

      </div>
      </div>

      </section>
</div>



 <div class=parallax>
	 <br>
      <div class="how_it_works_div">
        <div class="container">
          <div class="row">
            <div class="col-md-4"></div>
              <div class="col-md-4 text-center">
                  <h1 class="how_it_works_text">How it Works</h1>
              </div>
                <div class="col-md-4"></div>
          </div>
        </div>


    <div class="container">
      <div class="col-lg-1 col-sm-1"></div>
    <div class="col-lg-10 col-sm-10">
        <div class="row">

          <div class="col-md-4 text-center">
            <span><img style="height: 150px; width: 150px; padding : 20px;" src="https://doctorola.com//frontend_assets/images/final.svg#svgView(viewBox(39,337,139,141))" ></span>
            <div class="how_it_works_inside_text">

              <h3 class="how_it_works_inside_text_header">SEARCH</h3>
              <p class="how_it_works_inside_text_content_p">Find your doctor, hospital or blood donor easily with a minimum of effort.
                 We've kept everything organised for you.</p>

            </div>
          </div>
            <div class="col-md-4 text-center">
            <span><img style="height: 150px; width: 150px;  padding : 20px;" src="https://doctorola.com//frontend_assets/images/final.svg#svgView(viewBox(255,337,139,141))"></span>
            <div class="how_it_works_inside_text">

              <h3 class="how_it_works_inside_text_header">BOOK</h3>
              <p class="how_it_works_inside_text_content_p">Ask for an appointment of the doctor or
                contact the blood donor quickly with almost a single click.	We take care of the rest.</p>

            </div>
          </div>
            <div class="col-md-4 text-center">
            <span><img style="height: 150px; width: 150px;  padding : 20px;" src="https://doctorola.com//frontend_assets/images/final.svg#svgView(viewBox(460,337,139,141))"></span>
            <div class="how_it_works_inside_text">

              <h3 class="how_it_works_inside_text_header">GET WELL SOON</h3>
              <p class="how_it_works_inside_text_content_p">Visit the doctor, take the service from hospital or
                meet the blood donor based on your appointment.	Get back to good health and happiness.</p>

              </div>
            </div>
            </div>
          </div>
          <div class="col-lg-1 col-sm-1"></div>

      </div>

      </div>
	  </div>


<div class = "map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29212.329279691334!2d90.3706905900297!3d23.7637363904897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c75f68e3e199%3A0x1091c4aa2634b568!2sTejgaon%2C+Dhaka!5e0!3m2!1sen!2sbd!4v1534371723694"
  width="1350" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>

<div class="last_part">
<div class="container">
<div class="row">
<div class="col-md-3"></div>
  <div class="col-md-6">
    <h1 class="text-center book_phone_text">Like to book on phone? Call</h1>
  </div>
  <div class="col-md-3"></div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
     <p class="text-center book_phone_no">
      <i class="fa fa-phone fa-5x" aria-hidden="true"></i>
      <span class="phone_no">724889</span></p>
    </div>

    <div class="col-md-4"></div>
</div>
<div class="row">
  <div class="col-md-4">
       <img  id = "logo-footer" src="images/logo.png" class="img-responsive">
  </div>
    <div class="col-md-4"></div>
      <div class="col-md-4"></div>
</div>
<div class="row">
 <div class="col-md-4"></div>
  <div class="col-md-4">
      <h4> <i class="fa fa-copyright" aria-hidden="true"></i> 2018 Doctorola Ltd. All rights reserved.<br></h4>
  </div>
  <div class="col-md-4"></div>
</div>
 </div>
 </div>


 <script>
 function myFunction() {
   var dots = document.getElementById("dots");
   var moreText = document.getElementById("more");
   var btnText = document.getElementById("myBtn");

   if (dots.style.display === "none") {
     dots.style.display = "inline";
     btnText.innerHTML = "Read more";
     moreText.style.display = "none";
   } else {
     dots.style.display = "none";
     btnText.innerHTML = "Read less";
     moreText.style.display = "inline";
   }
 }
 </script>



</body>
</html>
