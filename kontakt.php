
<article class="kontakt">
<h2 id="nadpis">Jak nás můžete kontaktovat?</h2>
<hr class="wide">
<div class="info">
	<div class="fb-page"
			  data-href="https://www.facebook.com/pcsluzbyuh" 
			  data-width="400"
			  data-hide-cover="false"
			  data-show-facepile="true">
			</div>
	<div class="odkazy">
	<ul>
		<p>Najdete nás na adrese: 
		<li>V Grni 393</li>
		<li>Kunovice 686 04</li></p>
	</ul>
	<p><a href="tel:+420775645224"><i class="fa fa-phone-square fa-2x"></i> +420 775 645 224</a></p>
	<p><a href="mailto:info@pc-sluzby-uh.cz"><i class="fa fa-envelope fa-2x"></i> info@pc-sluzby-uh.cz</a></p>
	<p><a href="https://www.facebook.com/pcsluzbyuh"><i class="fa fa-facebook-square fa-2x"></i> #pcsluzbyuh</a></p>
	<p><a href="https://plus.google.com/111680801333774647349"><i class="fa fa-google-plus-square fa-2x"></i> +pcsluzbyuh</a></p>
	</div>
</div>
	<div class="google-map"><!---49.0418242N, 17.4711942E-->
    <div class="marker" data-lat="49.0418242" data-lng="17.4711942"></div>
	</div>
	<div class="mailsent <?php if($odeslano==1) {echo 'mailsent-a';} ?>"><p>Váš e-mail byl v pořádku odeslán.</p></div>
	
<div class="form">
	<form id="kontaktni_f" method="post" action="">  
		<legend><h3>Kontaktujte nás...</h3></legend>
        <fieldset id="user-details">			
 
	    <label for="name">Vaše jméno:<span style="color:red;font-size:0.8em;">*</span><br></label>
	    <input type="text" name="name" placeholder="Jan Novák"  minlength="2" required />  <!--required - validace formuláře pluginem -->

	    <label for="object">Předmět:<span style="color:red;font-size:0.8em;">*</span><br></label>
	    <input type="text" name="object" placeholder="Předmět e-mailu"  minlength="4" required/> 
  
	    <label for="email">Email:<span style="color:red;font-size:0.8em;">*</span></label> 
	    <input type="email" name="email" placeholder="jnovak@example.com"  required="email"/> 
  

	    </fieldset> <!--end user-details-->
 
	    <fieldset id="user-message">
 
	    <label for="message">Vaše zpráva:<span style="color:red;font-size:0.8em;">*</span><br></label> 
	    <textarea placeholder="Prostor pro Vaši zprávu..." name="message" rows="0" cols="0"  required></textarea>
 
  		<div class="g-recaptcha" style="float: left; transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;" data-sitekey="6Lebag0UAAAAACdtPma2YBQzoQyWAtGNhEZ7g7Tu"></div>
  		
	    <input type="submit" value="Odeslat zprávu" name="odeslano" class="submit" formtarget="#" />	
	    
	    </fieldset> <!-- end user-message -->
 
	</form>
</div>
<hr class="cistic">

</article>
<?php 
 if (isset($_POST['odeslano'])) {
	$odesilatel=$_POST['name'];
    $predmet="PC-Služby-UH: ".$_POST['object'];
    $odesEmail=$_POST['email'];
    $zprava=$_POST['message'];
    $komuEmail='jan.vlachynsky@seznam.cz';
    $headers=
        "From: ".$odesEmail . "\r\n" .
        "Reply-To: ". $odesEmail. "\r\n".
        "MIME-Version: 1.0\nContent-Type: text/plain; charset=utf-8\nContent-Transfer-Encoding: 8bit\n";
    $text="Zprava od zákazníka: ".$odesilatel."\n E-mail: ".$odesEmail.". \n\nGenerováno z formuláře na naší stránce \n\n" .$zprava."\n";
           function mime_header_encode($zprava, $encoding = "utf-8") {
               return "=?$encoding?Q?" . imap_8bit($zprava) . "?=";
           }
           $odeslani=mail(
               mime_header_encode("PC-Služby-UH")."<".$komuEmail.">",
               mime_header_encode($predmet),
               $text,
               $headers
           );
           if($odeslani){
           		header('Location: www.pc-sluzby-uh.cz/?p=kontakt&email=ok');
           		exit;
           }
}
?> 
