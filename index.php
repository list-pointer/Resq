<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
	session_start();
	include('dbh.php');
if(isset($_POST['onsubmit-form']))
{
 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$phoneno = $_POST['phoneno'];
	$message = $_POST['message'];



if( $name !='' and $email !='' and $phoneno !='' and $subject !='' and $message != '' )
{
	
	$sql="INSERT INTO user_query(name,phoneno,email,subject,message,date) VALUES('$name','$phoneno','$email','$subject','$message',NOW())";
	$query=mysqli_query($db,$sql);
	if($query)
	{
		            require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'bharatkumavat234@gmail.com';                     // SMTP username
    $mail->Password   = 'kumavatttt';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('bharatkumavat234@gmail.com',$email);
    $mail->addAddress('bharatkumavat234@gmail.com', $name);     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    
    $Message =$message;
    $mail->Body    =$Message; 
    
    $mail->send();
    echo "<script>window.alert('Thank You for your Response.');</script>";
     header("Location:index.php"); 
      
} catch (Exception $e) {
   echo "<script>window.alert('Something went Wrong .please Try again.');</script>"; 
}
        
    }
    else
    {
    	 echo "<script>window.alert('Something went Wrong .please Try again.');</script>"; 	
    }
}

mysqli_close($db);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<!-- important meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title -->
	<title>RESQ HOME</title>


	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

	<!-- Fontawesome -->
	<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

	<!-- Bootstrap CSS 3 -->
	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">

	    <!-- FONT  -->
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/ionicons.min.css">

	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl-carousel/owl.theme.default.min.css">

	<!-- Responsive Tabs CSS -->
	<link rel="stylesheet" href="css/responsive-tabs/responsive-tabs.min.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Responsive CSS -->
	<link rel="stylesheet" href="css/responsive.css">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="65">

	<?php 	include('header.php');?>
	<!-- Home -->
	<section id="home" style="margin-top: 50px;">
		<div id="home-overlay">
		</div>
	</section>

	<!-- About -->
	<section id="about">

		<!-- About 01 -->
		<div id="about-01">

			<div class="content-box-lg">

				<div class="container">

					<div class="row">

						<!-- About Left Side -->
						<div class="col-md-6 col-sm-6">

							<div id="about-left">
								<div class="vertical-heading">
									<br><br><br>
									<h5 style="font-size:20px">Who Are We</h5>
									<h2 style="font-size:50px">&nbsp&nbspA <strong>Story</strong><br>&nbsp&nbspAbout Us</h2>
								</div>
							</div>

						</div>

						<!-- About Right Side -->
						<div class="col-md-6 col-sm-6">

						<div id="about-right">

							<p align="justify">Ever wandered off in the horizon and got your vehicle damaged in an unknown place? And wished for a mode which would enable you to locate a service centre or a garage so that you can continue your journey? </p>

							<p><b>ResQ is that mode! </b></p>

							<p align="justify"> ResQ stands for Resource Quiver, which literally means a container where all the services available are gathered. ResQ is an initiate which is evolved from a user's need, where the Road-side assistance services currently available aren’t centralized and are flooded with a lot of marketing and ad placement.  </p>
							
							<p align="justify"> To use ResQ, all you need to do is Register yourself, Log-in to your registered account and go to the Service section of the website. We will automatically take your current location and show you the list of available garages or service centres. You can then choose the vendor you prefer and get your vehicle services! Simple, isn’t it? </p> 
							
							<p align="justify">We at ResQ care about your needs and services. We know that any mishap could occur on your journey we’ve got you all covered. 
    						We believe in services beyond business. That’s why we have designed our system which could be user-friendly where they can get the best available services just at their fingertip. </p>

							<p align="justify">At ResQ, profit isn’t our only motive but we also strive to provide good and reliable services. So, we have provided transparent system of rating the vendors. The user can provide his feedback about the services which he has availed from any vendor and we can sort out what’s best for you. </p>

							<p align="justify">We at ResQ are always looking for feedback from user where we can improve upon so hop into the Contact Us section and <i>Ping Us</i> along with any comment, suggestions or complains that you may have. </p>                    
						</div>


						</div>

					</div>

				</div>

			</div>

		</div>
		<!-- About 01 Ends -->

		<!-- About 02 -->
		<div id="about-02">

			<div class="content-box-md">

				<div class="container">

					<div class="row">

						<div class="col-md-4 col-sm-4">
							<!-- About item 01 -->
							<div class="about-item text-center">
								<i class="fa fa-rocket"></i>
								<h3>Mission</h3>
								<hr>
								<p>"Centralize essential road-side services at one place where people can choose what's best for them."</p>
							</div>

						</div>
						<div class="col-md-4 col-sm-4">
							<!-- About item 02 -->
							<div class="about-item text-center">
								<i class="fa fa-eye"></i>
								<h3>Vision</h3>
								<hr>
								<p>"To develop an ecosystem of services which could serve the needs of any user at any place, any time"</p>
							</div>

						</div>
						<div class="col-md-4 col-sm-4">
							<!-- About item 03 -->
							<div class="about-item text-center">
								<i class="fa fa-pencil"></i>
								<h3>Passion</h3>
								<hr>
								<p>"To help people avail the required services whichever they may be and whenever they require them."</p>
							</div>

						</div>

					</div>

				</div>

			</div>

		</div>
		<!-- About 02 Ends -->

	</section>
	<!-- About Ends -->

	
<!-- Features  -->
<section id="Features">
	<div class="features-box">
		<div class="container">
            <div class="intro">
                <h2 class="text-center">Features </h2>
                <p class="text-center">Some of our noticable features which enable us to be the best in our class of service providers</p>
            </div>
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-map-marker icon" style="color: #000;"></i>
                        <h3 class="name">Works everywhere</h3>
                        <p class="description">ResQ doesn't have any geographical restrictions. We are where you are</p></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-clock-o icon" style="color: #000;"></i>
                        <h3 class="name">Always available</h3>
                        <p class="description">You can use ResQ<br>24 x 7 x 365</p></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-list-alt icon" style="color: #000;"></i>
                        <h3 class="name">User Derived </h3>
                        <p class="description">We understand user's needs. So we have designed our system accordingly.</p></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-leaf icon" style="color: #000;"></i><i class="fas fa-coins"></i>
                        <h3 class="name">Free </h3>
                        <p class="description">Don't worry! We don't charge a penny from users</p></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-plane icon" style="color: #000;"></i>
                        <h3 class="name">Fast </h3>
                        <p class="description">We know you are in need. So we try to make it as fast as possible.</p></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-phone icon" style="color: #000;"></i>
                        <h3 class="name">Contacts Enabled</h3>
                        <p class="description">To make services faster and reliable we provide you contacts of service.</p></div>
                </div>                
            </div>
        </div>
	</div>
	 
</section>
<!-- Features Ends -->

<!-- Team -->
<section id="Team">
	    <div class="team-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Team </h2>
                <p class="text-center" style="font-size:15px;">Take a glimpse at our development team who has worked hard to make this product for you to use.</p>
            </div>
            <div class="row people">
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="img/team/Shivam_Chaubey.jpg">
                        <h3 class="name">Shivam Chaubey</h3>
                        <p class="title">CTO</p>
                        <p class="description">Having 2 years of industry experience in Web Designing at his own start-up by the name <i>TechVision</i>, Shivam is a very positive, knowledgeable but at the same time, very humble. </p>
                        
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="img/team/Abhishek_Gupta.jpeg">
                        <h3 class="name">Abhishek Gupta</h3>
                        <p class="title">CEO</p>
                        <p class="description">A very eliglible fresher who is ready to just go out in the industry and grab every oppurtunity available. He is an Anime &TV series <i>connoisseur.</i></p>
                        
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="img/team/Manish_Jha.jpg">
                        <h3 class="name">Manish Jha</h3>
                        <p class="title">CFO</p>
                        <p class="description">If your're looking for someone who thinks out of the box, Manish is the person you should go to. He has a knack for Hip-Hop and enjoys video games.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team Ends -->



	<!-- Testimonials -->
	<section id="testimonials">

		<div class="container">

			<div class="row">

				<div class="col-md-4 col-sm-4 ">

					<div class="vertical-heading">
						<h5>Who Are We</h5>
						<h2>What Our <br><strong>Customers</strong> Say</h2>
					</div>

				</div>

				<div class="col-md-8 col-sm-8 ">

					<div id="testimonial-slider" class="owl-carousel owl-theme">

						<!-- Testimonial 01 -->
						<div class="testimonial">

							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-6">
									<h3>Quality Support</h3>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6">
									<div class="stars text-right">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem quas totam, delectus sit
								corporis quos error qui. Minus cupiditate explicabo minima ea neque perferendis corporis
								sint earum quas impedit.</p>

							<div class="author">

								<div class="row">
									<div class="col-md-2 col-sm-3 col-xs-6">
										<img src="img/testimonial/Client-1.png" alt="client" class="img-responsive img-circle">
									</div>
									<div class="col-md-10 col-sm-3 col-xs-6">
										<div class="author-name-des">
											<p>Bhavika </p>
											<p>Professor </p>
										</div>
									</div>

								</div>

							</div>

						</div>

						<!-- Testimonial 02 -->
						<div class="testimonial">

							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-6">
									<h3>Quality Support</h3>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6">
									<div class="stars text-right">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem quas totam, delectus sit
								corporis quos error qui. Minus cupiditate explicabo minima ea neque perferendis corporis
								sint earum quas impedit.</p>

							<div class="author">

								<div class="row">
									<div class="col-md-2 col-sm-3 col-xs-6">
										<img src="img/testimonial/Client-2.jpg" alt="client" class="img-responsive img-circle">
									</div>
									<div class="col-md-10 col-sm-3 col-xs-6">
										<div class="author-name-des">
											<p>Kaushik </p>
											<p>BCA Graduate</p>
										</div>
									</div>

								</div>

							</div>

						</div>

						<!-- Testimonial 03 -->
						<div class="testimonial">

							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-6">
									<h3>Quality Support</h3>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6">
									<div class="stars text-right">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem quas totam, delectus sit
								corporis quos error qui. Minus cupiditate explicabo minima ea neque perferendis corporis
								sint earum quas impedit.</p>

							<div class="author">

								<div class="row">
									<div class="col-md-2 col-sm-3 col-xs-6">
										<img src="img/testimonial/Client-3.jpeg" alt="client" class="img-responsive img-circle">
									</div>
									<div class="col-md-10 col-sm-3 col-xs-6">
										<div class="author-name-des">
											<p>Maulik </p>
											<p>BCA Graduate</p>
										</div>
									</div>

								</div>

							</div>

						</div>


						<!-- Testimonial 04 -->
						<div class="testimonial">

							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-6">
									<h3>Quality Support</h3>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6">
									<div class="stars text-right">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem quas totam, delectus sit
								corporis quos error qui. Minus cupiditate explicabo minima ea neque perferendis corporis
								sint earum quas impedit.</p>

							<div class="author">

								<div class="row">
									<div class="col-md-2 col-sm-3 col-xs-6">
										<img src="img/testimonial/Client-2.jpg" alt="client" class="img-responsive img-circle">
									</div>
									<div class="col-md-10 col-sm-3 col-xs-6">
										<div class="author-name-des">
											<p>Kaushik Gawad</p>
											<p>BCA Graduate</p>
										</div>
									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</section>
	<!-- Testimonials Ends -->

	

	<!-- Contact -->
    <section id="contact">

        <div class="contact-clean">
        <form method="post">
            <h2 class="text-center">Ping us!</h2>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name" required="required"></div>
            <div class="form-group"><input class="form-control is-invalid" type="email" name="email" placeholder="Email" required="required"></div>
            <div class="form-group"><input class="form-control" type="text" name="subject" placeholder="Subject" required="required" ></div>
            <div class="form-group"><input class="form-control" type="text" name="phoneno" placeholder="Phone Number" required="required" minlength="10" maxlength="10"></div>
            <div class="form-group"><textarea class="form-control" name="message" placeholder="Message" rows="14" required="required"></textarea></div>
            <div class="form-group"><button class="btn btn-primary" type="submit" name="onsubmit-form">send </button></div>
        </form>
    </div>
    
	<!--contact end-->

    

    <!-- Footer  -->
    <section id="Footer" style="margin-top: -50px;">
    	<div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                	<div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="index.php#about">Company</a></li>
                            <li><a href="index.php#Team">Team</a></li>
                            <li><a href="index.php#Features">Features</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="service.php">Locate Garages</a></li>
                            <li><a href="index.php#contact">Contact Us</a></li>
                        </ul>
                    </div>                    
                    <div class="col-md-6 item text">
                        <h3>ResQ</h3>
                        <p>We at ResQ care about your needs and services on your way and any mishap could happen on your journey dont worry we got you all covered. We belive in services beyond business thats why we have designed our system which could be friendly for the user and he/she can get best in its class services just at his/her fingertip.</p>
                    </div>
                    
                </div>
            </div>
        </footer>
    </div>
    </section>
    
    <!-- Footer Ends -->

	<!-- JQuery -->
	<script src="js/jquery.min.js"></script>

	<!-- Bootstrap JS -->
	<script src="js/bootstrap/bootstrap.min.js"></script>

	<!-- Owl Carousel JS -->
	<script src="js/owl-carousel/owl.carousel.min.js"></script>

	<!-- Responsive Tabs JS -->
	<script src="js/responsive-tabs/jquery.responsiveTabs.min.js"></script>

	<!-- Isotope -->
	<script src="js/isotope/isotope.pkgd.min.js"></script>

	<!-- Custom JS -->
	<script src="js/script.js"></script>
</body>

</html>
