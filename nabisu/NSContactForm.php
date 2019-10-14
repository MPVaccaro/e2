<!DOCTYPE html>
<html>


<title>Nabi Su Contact Form</title>

<meta name="viewport" content="width=device-width" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content= "Nabi Su Contact Form." />  
<meta name="keywords" content= "Nabi Su Tai Chi, Kung Fu and Wellness Contact Form"/> 
<meta name="Author" content="Carolyn Campora - www.nabisu.com"> 
<meta name="google-site-verification" content="  " />
<meta name="Robots" content="index,follow"> 
<meta name="Distribution" content="Global"> 
<meta name="verify-v1"  content="unique-string"> 
<meta name="Revisit-After" content="1 week" /> 
<link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet" href="NSTemplate.css" type="text/css" />

<div class="container">

<?php include("NScontainer.php"); ?>
    

<div class="header">
    
<?php include("NSheader.php"); ?>
    

</div>

  
<!-- end .header --></header>
  
<div class="sidebar1">  
<br>
<br>    
 
<?php include("NSmenu.php"); ?>
<br />
            			
       
<!-- end .sidebar1 --></div>  

<div class="content">

<br>
<h2><font color=#996633>NABI SU CONTACT FORM</font color=#996633></h2>
<p><font color=#996633>Call: 212 925 5536
<br>
Email: nabisu@nabisu.com</font color=#996633>
<br>
<br>
<img src="Images/MonarchButterfly.jpg" alt="Monarch Butterfly" width="117" height="108" />
<br>
</p>

<?php
if ($_POST["email"]<>'') {
    $ToEmail = 'nabisu@nabisu.com';
    $EmailSubject = 'Nabi Su Contact Form';
    $mailheader = "From: ".$_POST["email"]."\r\n";
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n";
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";


    $MESSAGE_BODY .= " First Name: ".$_POST["firstname"]."";
    $MESSAGE_BODY .= " Last Name: ".$_POST["lastname"]."";
    $MESSAGE_BODY .= " Email: ".$_POST["email"]."";
    $MESSAGE_BODY .= " Phone Number: ".$_POST["phonenumber"]."";
    $MESSAGE_BODY .= " Preferred Contact Method: ".$_POST['radio_contact_method']."";
    
    

    $MESSAGE_BODY .= " What Type of Session: ".$_POST['dropdownSession']."";
    $MESSAGE_BODY .= " When: ".$_POST['dropdownTime']."";
    $MESSAGE_BODY .= " Date: ".$_POST["date"]."";
    $MESSAGE_BODY .= " Benefits: ".nl2br($_POST["benefits"])."";
    $MESSAGE_BODY .= " Comments: ".nl2br($_POST["comments"])."";

    
  
  
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");
    
    
    
?>
Your message was sent.<br>
Thank you for contacting Nabi Su.<br>
We will be in touch with you very soon.
<?php
} else {
?>
<form action="NSContactForm.php" method="post">
<table width="800" border="0" cellspacing="2" cellpadding="0">



<p><b>Contact Us!</b><br>
Fill out the Contact Form below to request your free Tai Chi and/or Kung Fu class, a Private Session or more information.
<br>
<small>NB: For Astrology Sessions, go to the <a href="NSAstrologyContactForm.php" alt="Astrology Contact Form" title="Astrology Contact Form">Astrology Contact Information</a>.</small></p>

<tr>
<br>
<td width="30%" class="bodytext"><b>First Name:*</b></td>
<td><input name="firstname" required="true" type="text" id="firstname" size="30"></td>
</tr>

<tr>
<td width="30%" class="bodytext">Last Name:</td>
<td width="70%"><input name="lastname" type="text" id="lastname" size="30"></td>
</tr>

<tr>
<td class="bodytext"><b>Email address:*</b></td>
<td><input name="email" required="true" type="text" id="email" size="30"></td>
</tr>

<tr>
<td class="bodytext">Phone Number:</td>
<td><input name="phonenumber" type="text" id="phonenumber" size="30"></td>
</tr>

<tr>
 <td valign="top">
  <label for="Contact Method Preferred">How May We Contact You?</label>
 </td>
 <td valign="top">
<input id="radio_1" type="radio" name="radio_contact_method" value="email">
<label for="radio_1">Email Preferred</label><br>
 
<input id="radio_2" type="radio" name="radio_contact_method" value="telephone">
<label for="radio_2">Telephone Preferred</label><br>
 
<input id="radio_3" type="radio" name="radio_contact_method" value="email and telephone OK">
<label for="radio_3">Either Email or Telephone OK</label><br>
 </td>
</tr> 

<tr>
<td valign="top">
  <label for="What Type of Session">What Type of Session?</label>
 </td>
 <td valign="top">
    <select name="dropdownSession">
    <option value="Please_Select">Please Select</option>
    <option value="Tai_Chi">Tai Chi</option>
    <option value="Kung_Fu">Kung Fu</option>
    <option value="Kung_Fu_and_Tai_Chi">Kung Fu and Tai Chi</option>
    <option value="Childrens_KF">Children's Kung Fu</option>
    <option value="Zazen">ZaZen</option>
    <option value="Reiki">Reiki</option>
    <option value="RR">Resonance Repatterning</option>
    <option value="Astrology">Astrology</option>
    <option value="Free_Consultation">Free Consultation</option>
</select>
 </td>
</tr> 

<tr>
 <td valign="top">
  <label for="When">When?</label>
 </td>
 <td valign="top">
  <select name="dropdownTime">
    <option value="Please_Select">Please Select</option>
    <option value="MondayKF">Monday 7:30 pm - Kung Fu</option>
 <option value="TuesdayTC">Tuesday 6:00 pm - Tai Chi</option>
    <option value="TuesdayKF">Tuesday 7:00 pm - Kung Fu</option>
    <option value="WedZaZen">Wednesday 5:00 pm - ZaZen</option>
    <option value="WedTC">Wednesday 5:30 pm - Tai Chi</option>
    <option value="WedKF">Wednesday 6:30 pm - Kung Fu</option>
    <option value="ThursdayNoonTC">Thursday 12 noon - Tai Chi</option>
    <option value="Thursday1KF">Thursday 1 pm - Beginners Kung Fu</option>
    <option value="SatZaZen">Saturday 10:00 am - ZaZen</option>
    <option value="SatTC">Saturday 10:30 am - Tai Chi</option>
    <option value="SatKF">Saturday 11:30 am - Kung Fu</option>
    <option value="ChildrensKF">Other - Children's Kung Fu</option>
    <option value="PrivateTC">Other - Private Tai Chi or Kung Fu Class</option>
    <option value="PrivateSession">Other - Private Reiki, RR or Astrology Session</option>
    <option value="ReikiClass">Other - Reiki Class</option>
    <option value="FreeConsultation">Other - Free Consultation</option>
</select>
 </td>
</tr>

<tr>
<td class="bodytext">Date Requested?</td>
<td><input name="date" type="text" id="date" size="30"></td>
</tr>



<tr>
<td class="bodytext">What Benefits Would You Like from Your Sessions?</td>
<td><textarea name="benefits" cols="45" rows="6" id="benefits" class="bodytext"></textarea></td>
</tr>
<tr>

<tr>
<td class="bodytext">Any Other Comments?</td>
<td><textarea name="comments" cols="45" rows="6" id="comments" class="bodytext"></textarea></td>
</tr>
<tr>



<tr>
<td valign="top">
 <label for="Check Here"><b>Please Check Box*</b></label>
 </td>
 <td valign="top">
<input id="check_1" type="checkbox" name="checkbox_no_share[]" required="true" value="noshare">
<label for="check_1"><b>Nabi Su Does Not Share Your Information</b></label><br><br>
</td>
</tr>


<td class="bodytext"> </td>
<td align="left" valign="top"><input type="submit" name="Submit" value="Send Contact Form Now"></td>
</tr>
</table>
</form>
<?php
};
?>    

<div class="footer">
    
<?php include("NSfooter.php"); ?>


<!-- end .footer --></div>
<!-- end .container --></div>
</body>
</html>
