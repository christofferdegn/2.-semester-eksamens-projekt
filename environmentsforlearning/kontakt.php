<?php
    include("head.php");
?>

    <title>Environments for Learning</title>
	<meta name="description" content="Environments for Learning A/S -
	Adresse: Linåvej 15 Silkeborg 8600 Danmark - Telefon: +45 42401112 - CVR: 14321343">

</head>

<body id="kontakt">


<?php
    include("header.php");
?>

<?php
    include("navbar.php");
?>

<div id="kontaktcontainer" class="container">
    <div class="row">
        <div class="col-xs-6 col-md-6"> 
			
<h1 id="kontaktoverskrift">Ring til os!<h1>
	<p id="kontaktinfo"> <b>Telefon:</b> +45 42401112 <br><br> <b>Mobil:</b> +45 31668607 </p>
<section class="kontaktformularsection">
	<h2 id="kontaktformulartext"> Vi sidder klar til at hjælpe dig med alt fra levering, bestilling eller generelle spørgsmål.</h2>

		<?php
		$action=$_REQUEST['action'];
		if ($action=="") 
		    {
		?>
			<form action="" method="POST" enctype="multipart/form-data">
				<input id="kontaktsubmnit" class="kontaktform" type="hidden" name="action" value="submit">
				<input id="kontaktnavn" class="kontaktform" required type="text" name="name" placeholder="Navn"></input>
				
				<input id="kontaktemail" class="kontaktform" required name="email" type="text" placeholder="Email" ></input>
				
				<textarea id="kontaktbesked" class="kontaktform" required name="message" rows="7" cols="30" placeholder="Din besked"></textarea>
				
				<button id="sendbutton" type="submit" value="Send email">Send</button>
			</form>
	    <?php
			    } 
			else   
			    {
			    $name=$_REQUEST['name'];
			    $email=$_REQUEST['email'];
			    $message=$_REQUEST['message'];
		
				    $from="From: $name<$email>\r\nReturn-path: $email";
			        $subject="Besked sent via. kontaktformularen";
					mail("christoffer@christofferdegn.dk", $subject, $message, $from);
					//echo "Email sendt!";//
					?>
					<summary>
						<p>Tak for din besked</p>
					</summary>
					<?php    
			    }  
		?>

	</section>
        </div>
		
<div id="kontaktcontainer1" class="container">
        <div id="googlemap" class="col-xs-12 col-md-6">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d284229.3077568917!2d9.285597295048028!3d56.182318901266406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464b8b31851a884f%3A0x301ff15a89742d9!2s8600+Silkeborg!5e0!3m2!1sda!2sdk!4v1495400108348" width="100%" height="570" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>

<div id="kontaktformcontainer" class="col-md-4 col-md-offset-"> 
<section  class="col-md-8 col-md-offset-2">

	</section>
	</div>
</div>


<?php
    include("footer.php");
?>

<script src="./js/jquery.js"></script>
<script src="./js/bootstrap.js"></script> 
<script src="./js/javascript.js"></script> 

</body>

