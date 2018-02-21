<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alevtin creative solutions</title>
	<meta name="description" content="Cмелые рабочие дизайн решения для вашего бизнеса">
	<meta name="keywords" content="заказать сайт, купить сайт, ux, ui, проектирование сайтов">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <link rel="shortcut icon" href="img/favicon.png" type="image/png">
 	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/template.css">
	<link rel="stylesheet" href="css/media.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
 <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
<script>
  $(document).ready(function(){
    $("a[href*=#]").on("click", function(e){
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top
        }, 777);
        e.preventDefault();
        return false;
    });
});
</script>
<script>
$(document).ready(function() {

	//E-mail Ajax Send
	$("form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Thank you!");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

});
</script>
<SCRIPT src="js/popup_img.js"></SCRIPT>
</head>
<body>
	<div id="header">
		<div id="first">
			<div class="overlay1 wow fadeInDown"></div>
			<div class="overlay2 wow fadeInUp"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-1 col-sm-1 col-xs-12">
						<img src="img/4484848484884484482.png" alt="Alevtin" class="logo wow fadeInDown">
						</div>
						<div class="col-md-11">
						<nav>
							<ul class="menu wow fadeInDown">
								<li class="menu__item">
									<a href="#top" name="home">Home</a>
								</li>
								<li class="menu__item">
									<a href="#about">About me</a>
								</li>
								<li class="menu__item">
									<a href="#services">Services</a>
								</li>
								<li class="menu__item">
									<a href="#skills">Skills</a>
								</li>
								<li class="menu__item">
									<a href="#folio">Portfolio</a>
								</li>
								<li class="menu__item">
									<a href="#contact">Contact me</a>
								</li>
							</ul>
						</nav>
						</div>
					</div>
				</div>
			<div id="second">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="offer">
								<h1 class="offer__h1 wow fadeInRight">
								UX
								</h1>
								<h1 class="offer__h2 wow fadeInLeft">
								UI
								</h1>
									<div class="success wow fadeInRight">
										if you need a success
									</div>
									<div class="line">
									<a href="#about" class="offer__cta" data-toggle="modal" data-target="#myModal">
								Learn more
							</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>

<section>
<div class="second">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section__first">
						<a id="about"><h2>About me...</h2></a>
						
						<div class="line">
							<div class="marker__1 wow flipInX"><p>Hello! I`m <span class="a1">Alevtin</span> and I put my soul into <span class="a1">the</span> <span class="a2">design.</span></p>
							</div>
						</div>
						<div class="line">
							<div class="slide wow fadeInUp">	In my portfolio there are several layouts that can confirm my competence<br class="hidden__xs"> in the field of UX / UI design. I believe that my strengths are my creativity, <br class="hidden__xs">confidence in my field and punctuality.<br class="hidden__xs"><br class="hidden__xs">
 
							My goal #1: always meet your needs and timing. When I'm working on a new<br class="hidden__xs"> project, I like talking to the client so that I can clearly understand his need <br class="hidden__xs">and vision of the project. After all, the main thing in my work and <br class="hidden__xs"> in your success is the result.
							</div>
					</div>
						<div class="line">
							<a class="offer__cta2" href="#services">
								My Services
							</a>
						</div>
				</div>
			</div>
		</div>	
</div>
</section>
<section>
<div class="backgound3">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section__two">
						<a  id="services"><h2>My services...</h2></a>
							<div class="line">
								<div class="marker__2 wow flipInX">
						<span class="a1">I research, I design, I code</span> - it`s as <span class="a2"> simple </span> as that!
								</div>
							</div>
							<div class="flex-container fl__tab">
							<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="flex-block wow fadeInLeft"><img src="img/11.png" class="f1"><p class="b1"> Reserching</p>
							<p class="b3">Understanding the need a of each
individual project is what in crafting 
the perfect UX</p></div>
							</div>
							<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="flex-block wow fadeInUp"><img src="img/12.png" class="img1"><p class="b2"> Web/UI Adaptive design</p> 
							 <p class="b4">I design beautiful web/mobile
interfaces that are visiually engaging and simpl to use</p></div>
							</div>
							<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="flex-block wow fadeInRight"><img src="img/14.png" class="f3"c><p class="b2 b8">HTML/CSS</p><p class="b4 b7">Using HTML5, CSS3, JQuery and
CMS I build each project to meet the
needs of the client</p>
							</div>
						   </div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</section>
<section class="bgr4">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<div class="section__three">
					<a id="skills"><h2>My skills...</h2></a>
							<div class="line">
								<div class="marker__2 wow flipInX">
						Let me draw <span class="a1">your attantion </span>to my <span class="a2">skills</span>
								</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div class="background4">
	<div class="flex__t ab">
		<div class="container">
			<div class="row flex__tab">
				<div class="col-md-6 col-sm-12 col-xs-12">
				<div class="skills__info skinf__tabl">
					<img src="img/Слой8.png">
					</div>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="skinf__tabl">
					<div class="skills_sq"></div>
					</div>
					<div class="skinf__tabl">					
					<div class="skills3__info">
						<div class="skills_sq3">
							<div class="skills4__info">
								<div class="skill__1">Photoshop</div>
								<div class="skill__rate1">
								<div class="wow skill__rate1_1" data-wow-offset="300">
								</div>
								</div>
								
							</div>
							<div class="wow circle" data-wow-offset="300">
								<div class="wow b5" data-wow-offset="300">Ps</div>
							</div>
							<div class="skills5__info">
								<div class="skill__1">Copywriting</div>
								<div class="skill__rate1">
								<div class="wow skill__rate2_1" data-wow-offset="300">
								</div>
								</div>
								
							</div>
							<div class="wow circle" data-wow-offset="300">
								<div class="wow b5" data-wow-offset="300"><i class="fa fa-copyright" aria-hidden="true"></i></div>
							</div>
							<div class="skills6__info">
								<div class="skill__3">Html5/Css3/jQuery</div>
								<div class="skill__rate1">
								<div class="wow skill__rate3_1" data-wow-offset="300">
								</div>
								</div>
								
							</div>
							<div class="wow circle" data-wow-offset="300">
								<div class="wow b5" data-wow-offset="300"><i class="fa fa-code" aria-hidden="true"></i></div>
							</div>
							<div class="skills7__info">
								<div class="skill__4">Wordpess</div>
								<div class="skill__rate1">
								<div class="wow skill__rate4_1" data-wow-offset="300">
								</div>
								</div>
								
							</div>
							<div class="wow circle" data-wow-offset="300">
								<div class="wow b5" data-wow-offset="300"><i class="fa fa-wordpress" aria-hidden="true"></i></div>
							</div>
							<div class="skills__horizon wow fadeIn" data-wow-offset="200">Now I'm 20 years old and I have experience:</div>
						</div>
					</div>
					<div class="skills2__info">
						<div class="skills_sq2">
							<div class="skills8__info">
								<div class="skills__date wow fadeIn" data-wow-offset="100">june 2016 - june 2017</div>
									<div class="skills__name wow fadeIn" data-wow-offset="100"><span class="black">+ Sales manager </span><span class="grey">(Bayadera Logistick)</span>
								</div>
							</div>
							<div class="skills9__info">
								<div class="skills__date wow fadeIn" data-wow-offset="80">march 2014-september 2016</div>
									<div class="skills__name1 wow fadeIn" data-wow-offset="80"><span class="black">+ Copywriter </span><span class="grey">(freelance)</span>
								</div>
							</div>
							<div class="skills9__info">
								<div class="skills__date wow fadeIn" data-wow-offset="60">september 2016-december 2016</div>
									<div class="skills__name2 wow fadeIn" data-wow-offset="60"><span class="black">+ Content-manager </span><span class="grey">(Dropsiping company)</span>
								</div>
							</div>
							<div class="skills9__info">
								<div class="skills__date wow fadeIn" data-wow-offset="40">Web UX/UI Designer</div>
									<div class="skills__name3 wow fadeIn" data-wow-offset="40"><span class="black">january 2017-∞ </span><span class="grey">Because I'm in love with design.</span>
								</div>
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
<section class="bgr5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section__four">
						<a id="folio"><h2>My folio...</h2></a>
							<div class="line">
								<div class="marker__2 wow flipInX">
						The <span class="a1">recent projects </span>I've been <span class="a2">working on:</span>   
								</div>
							</div>	
				</div>
			</div>
		</div>
	</div>
	<div class="background5 wow fadeInRight">
	<div class="back__3 wow fadeInUp"></div>
	<div class="back__1 wow fadeInDown"></div>
	<div class="back__2 wow fadeInLeft"></div>
		<div class="container">
			<div class="row">
			<div class="col-md-1">
			</div>
				<div class="col-md-3 col-sm-5">
				<div class="flex__folio">
					<div class="project__name">Vape-Grid</div>
					<div class="project__descript">It is a lending template <br> for sale a liquid for vaping. <br>Simple and convenient UI <br> focuses attention of a lead <br> on desire of purchase of <br>goods.<br></div>
					<div id="modal_form"><!-- Сaмo oкнo --> 
      				<div class="modal_close"><i class="fa fa-times" aria-hidden="true"></i>
</div> <!-- Кнoпкa зaкрыть --> 
      <!-- Тут любoе сoдержимoе -->
<img src="img/work.png" class="modal_img">
</div>
<div class="overlay"></div><!-- Пoдлoжкa -->
      <a class="project__cta go" href="#modal_form">Look more</a>
				</div>
				</div>
				<div class="col-md-1">
				</div>
				<div class="col-md-7 col-sm-7">
				<a href="#modal_form" class="go"><img class="project__screen" src="img/firstscr.png"></a></div>
			</div>
		</div>
	</div>
	<div class="background5 wow fadeInRight">
	<div class="back__3 wow fadeInUp"></div>
	<div class="back__1 wow fadeInDown"></div>
	<div class="back__2 wow fadeInLeft"></div>
		<div class="container">
			<div class="row">
			<div class="col-md-1">
			</div>
				<div class="col-md-3 col-sm-5">
				<div class="flex__folio">
					<div class="project__name1">Elite spices</div>
					<div class="project__descript">Lending template for sale <br> of elite spices. Light and<br>elegant design with the <br> withstood style. Competent<br> accentuation locates to <br>purchases. <br> </div>
					<div id="modal_form1"><!-- Сaмo oкнo --> 
      				<div class="modal_close"><i class="fa fa-times" aria-hidden="true"></i>
</div> <!-- Кнoпкa зaкрыть --> 
      <!-- Тут любoе сoдержимoе -->
<img src="img/spices.jpg" class="modal_img">
</div>
<div class="overlay"></div><!-- Пoдлoжкa -->
					<a class="project__cta go1" href="#modal_form1">Look more</a>
				</div>
				</div>
				<div class="col-md-1">
				</div>
				<div class="col-md-7 col-sm-7"><a href="#modal_form1" class="go1"><img src="img/Learn more.png" class="project__screen"></a></div>
			</div>
		</div>
	</div>
	<div class="background5 wow fadeInRight">
	<div class="back__3 wow fadeInUp"></div>
	<div class="back__1 wow fadeInDown"></div>
	<div class="back__2 wow fadeInLeft"></div>
		<div class="container">
			<div class="row">
			<div class="col-md-1">
				<div class="he lper"></div>
			</div>
				<div class="col-md-3 col-sm-5">
				<div class="flex__folio">
					<div class="project__name2">Smart-job</div>
					<div class="project__descript">It is a template designed<br> for registration users, <br>who wish to find a job.<br> It`s contains buttons of<br> cta for downloading the <br> application from markets.</div>
					<div id="modal_form2"><!-- Сaмo oкнo --> 
      				<div class="modal_close"><i class="fa fa-times" aria-hidden="true"></i>
</div> <!-- Кнoпкa зaкрыть --> 
      <!-- Тут любoе сoдержимoе -->
<img src="img/smart.jpg" class="modal_img">
</div>
<div class="overlay"></div><!-- Пoдлoжкa -->
					<a class="project__cta go2" href="#modal_form2">Look more</a>
				</div>
				</div>
				<div class="col-md-1">
				</div>
				<div class="col-md-7 col-sm-7"><a href="#modal_form2" class="go2" ><img src="img/start.png" class="project__screen"></a></div>
			</div>
		</div>
	</div>
</section>
<section class="bgr6">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section__four">
						<a id="contact"><h2>Contact me...</h2></a>
							<div class="line">
								<div class="marker__2 wow flipInX">
						<span class="a2">Okey.</span> And now,<span class="a1"> lets talk</span> about your project!
								</div>
							</div>	
				</div>
			</div>
		</div>
	</div>

<div class="container">
	<div class="row">
		<div class="col-md-12 col-xs-12">
		<div class="flex__contact">

		<!-- Hidden Required Fields -->
		<input type="hidden" name="project_name" value="My site">
		<input type="hidden" name="admin_email" value="alevtpankov@gmail.com">
		<input type="hidden" name="form_subject" value="landing">
		<!-- END Hidden Required Fields -->
<?php
$method = $_SERVER['REQUEST_METHOD'];
//Script Foreach
$c = true;
if ( $method === 'POST' ) {
	$project_name = trim($_POST["project_name"]);
	$admin_email  = trim($_POST["admin_email"]);
	$form_subject = trim($_POST["form_subject"]);
	foreach ( $_POST as $key => $value ) {
		if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" ) {
			$message .= "
			" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
			</tr>
			";
		}
	}
} else if ( $method === 'GET' ) {
	$project_name = trim($_GET["project_name"]);
	$admin_email  = trim($_GET["admin_email"]);
	$form_subject = trim($_GET["form_subject"]);
	foreach ( $_GET as $key => $value ) {
		if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" ) {
			$message .= "
			" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
			</tr>
			";
		}
	}
}
$message = "<table style='width: 100%;'>$message</table>";
function adopt($text) {
	return '=?UTF-8?B?'.Base64_encode($text).'?=';
}
$headers = "MIME-Version: 1.0" . PHP_EOL .
"Content-Type: text/html; charset=utf-8" . PHP_EOL .
'From: '.adopt($project_name).' <'.$admin_email.'>' . PHP_EOL .
'Reply-To: '.$admin_email.'' . PHP_EOL;
mail($admin_email, adopt($form_subject), $message, $headers );
				<form class="contact__form wow fadeInUp">
				<div class="flex__contact1">
					<input type="text" name="name" class="cell" required placeholder="Enter your name">
						<input type="email" name="email" class="cell" required placeholder="Enter your e-mail">
							<input type="tel" name="tel" class="cell" required placeholder="Enter your phone"></div>
							<div class="flex__contact 2">
							<textarea spellcheck="true" wrap="hard" name="comment" class="cell__big" required placeholder="Your message"></textarea> 
							<div class="flex__contact1"><<button role="button" type="submit" class="contact__cta" >Send Message</button></div>	
					
				</form>
				</div>
			</div>

		</div>
		</div>
	</div>
</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="flex__conatct">
			<a class="facebook wow fadeInLeft" href="https://www.facebook.com/profile.php?id=100015456645793" data-toggle="modal" data-target="#myModal" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
			<a class="vk wow fadeInUp" href="ht tps://vk.com/id351836398" data-toggle="modal" data-target="#myModal" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>
			<a class="telegram wow fadeInRight" href="https://web.telegram.org/#/im?p=@Alevt_Marsall" data-toggle="modal" data-target="#myModal" target="_blank"><i class="fa fa-paper-plane" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</div>
</section>
<footer>
	<div class="background6 wow fadeInUp"></div>
	<div class="background7 wow fadeInDown">	
	<div class="container">
		<div class="row">
			<div class="col-md-1 col-sm-2">
			<div class="flex__footer">
			<img src="img/4484848484884484482.png" alt="Alevtin" class="footer__logo wow fadeIn">
			</div>
			</div>
			<div class="col-md-3 col-sm-3">
				<div class="flex__footer"> <p class="text__footer1"> 2017 All Rights are Reserved</p></div>
			</div>
			<div class="col-md-6 col-sm-3">
				<div class="flex__footer">
					<a href="#header"><div class="arrow"><i class="fa fa-angle-double-up" aria-hidden="true"></i></div></a>
				</div>
			</div>
			<div class="col-md-2 col-sm-4">
				<div class="flex__footer">
					<p class="text__footer1 text__media1">Created by Alevtin Pankov</p>
				</div>
			</div>
		</div>
	</div></div>
</footer>
</body>
</html>