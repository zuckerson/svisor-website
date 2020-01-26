<!--Author: Ing Ulrich Blondin TABOU

-->

<?php
if(isset($_POST['mailform']))
{
  if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
  {
    $header="MIME-Version: 1.0\r\n";
  
    $header.='Content-Type:text/html; charset="uft-8"'."\n";
    $header.='Content-Transfer-Encoding: 8bit';

    $message='
    <html>
      <head>
        <meta charset="utf-8">
      </head>
      <body>
        <div align="center">
          
          <br />
          <u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
          <u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
          <br />
          '.nl2br($_POST['message']).'
          <br />
          
        </div>
      </body>
    </html>
    ';

  mail ("info@schoolvisor.net", "CONTACT - schoolvisor.net", $message, $header); // ici là où il y a blondin... tu mets l'adresse où tu veux recevoir les mails. CONTACT - st.... c'est l'objet de chaque mail pour que tu reconnaisses d'où provient les mails. 
    $msg="Votre message a bien été envoyé !";
  }
  else
  {
    $msg="Tous les champs doivent être complétés !";
  }
}
?>

<!DOCTYPE HTML>
<html lang="fr">
<head>
<title>SchoolVisor: Plateforme web de supervision scolaire</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="SchoolVisor plateforme web de supervision scolaire, TABOU Ulrich Blondin" />
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">
<!-- /fonts -->
<!-- css files -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/footer-pic.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/jQuery.lightninBox.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/staff.css" rel="stylesheet" type="text/css" media="all"/>
<link href='css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- /css files -->
</head>
<body>
<!-- navigation -->
<?php require 'menu.html' ?>
<section class="contact-wthree jarallax" id="contact">
	<div class="container">
		<h3 class="text-center">Contacts</h3>
		<div class="col-lg-2 col-md-2 col-sm-2" data-aos="zoom-in">
		
		</div>
		<div class="col-lg-10 col-md-10 col-sm-10" data-aos="zoom-in">
			<h4>N'hésitez pas à nous contacter</h4>
			<p class="contact-agile">Nous sommes toujours à l'écoute</p>
		</div>
		<div class="col-lg-12" data-aos="zoom-in">
			<ul class="contact-info">
				<li>
					<i class="fa fa-phone-square" aria-hidden="true"></i>
					<p class="contact-p1">+237 690 109 275</p>
					<p class="contact-p2"> +33 &nbsp;  758 723 942</p>
				</li>
				<li>
					<i class="fa fa-envelope" aria-hidden="true"></i>
					<p class="contact-p1"><a href="mailto:info@schoolvisor.net">info@schoolvisor.net</a></p>
					
				</li>
				<li>
					<i class="fa fa-address-book" aria-hidden="true"></i>
					<p class="contact-p1">Mbankolo,</p>
					<p class="contact-p2">Yaoundé, Cameroun.</p>
				</li>
			</ul>
		</div>	
		<div class="clearfix"></div>	
		<form action="#">
            <div class="col-lg-4 col-md-4 col-sm-4" data-aos="zoom-in">    
				<div class="control-group form-group">
                    <div class="controls">
                        <label>Nom:</label>
                        <input type="text" class="form-control" id="name" name="nom" placeholder="Votre nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>">
                        <p class="help-block"></p>
                    </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4" data-aos="zoom-in">	
                <div class="control-group form-group">
					<div class="controls">
                        <label>Numéro de téléphone:</label>
						<input type="tel" class="form-control" id="phone">
                    </div>
                </div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4" data-aos="zoom-in">			
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Addresse Email :</label>
                        <input type="email" class="form-control" id="email" name="mail" placeholder="Votre email" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>">
                    </div>
                </div>
			</div>
			<div class="clearfix"></div>
			<div class="col-lg-12" data-aos="zoom-in">	
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Message:</label>
                        <textarea rows="10" cols="100" class="form-control" name="message" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea>
					</div>
                </div>
                <div id="success"></div>
                <!-- For success/fail messages -->
			</div>
			<div class="col-lg-12" data-aos="zoom-in">	
                <button type="submit" class="btn btn-primary">Envoyez</button> <br>
                <!--<br> <input type="submit" class="btn btn-primary" value="Envoyer !" name="mailform"/>-->
            </div>
			<div class="clearfix"></div>	
		</form>	

		<center>
	<div class="mapouter"><div class="gmap_canvas"><iframe width="1080" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=yaoundé&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><a href="#"></a><style>.mapouter{overflow:hidden;height:500px;width:1080px;}.gmap_canvas {background:#fff !important;height:500px;width:1080px;}</style></div>
</center>
<?php
    if(isset($msg))
    {
      echo $msg;
    }
    ?>



	</div>
</section>
<?php require 'footer.html' ?>
</body>
</html>
