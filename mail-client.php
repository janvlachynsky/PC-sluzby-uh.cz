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

    $text="Zprava od zákazníka: ".$odesilatel."\n E-mail: ".$odesEmail.". \n\nGenerováno z formuláře na naší stránce \n\n\n" .$zprava;
           function mime_header_encode($zprava, $encoding = "utf-8") {
               return "=?$encoding?Q?" . imap_8bit($zprava) . "?=";
           }
           $odeslani=mail(
               mime_header_encode("PC-Služby-UH")."<".$komuEmail.">",
               mime_header_encode($predmet),
               $text,
               $headers
           );
}
/*formFieldCleaner("#kontaktni_f");
function formFieldCleaner(formObject) { $(":input", formObject) .not(":button, :submit, :reset, :hidden") .val("") .removeAttr("checked") .removeAttr("selected"); }*/
?> 
<script language="javascript" type="text/javascript"> 
window.close(); 
</script>