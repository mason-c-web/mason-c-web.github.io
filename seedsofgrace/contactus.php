<?php include "includes/header.php"?>

<h1>Contact Us</h1>

<!-- START HTML FORM -->

<div id="infocontainer">
<div class="personinfo" id="contactinfo">
  <div class="persontext">
  <h3 align="center">Executive Director: Karole Lee Johnson </h3>
      <p>You can mail your inquires to:

<br>
Seeds of Grace
<br>
P.O. Box 5071
<br>
Bremerton, WA 98312
<br>
<br>
or you can call or text:
<br>
(360) 797-5605
      </p>

  </div>
    </div>

<div id="contact" >
<form name="contactform" method="post" action="send_form_email.php" width="100%">
<table width="450px">
<tr>
<td valign="top">
<label for="first_name">First Name *</label>
<br>
<input  type="text" name="first_name" maxlength="50" size="30">
</td>
</tr>


<tr>
<td valign="top"">
<label for="last_name">Last Name *</label>
<br>

<input  type="text" name="last_name" maxlength="50" size="30">
</td>

</tr>
<tr>
<td valign="top">
<label for="email">Email Address *</label>
<br>

<input  type="text" name="email" maxlength="80" size="30">
</td>
</tr>


<tr>
<td valign="top">
<label for="telephone">Telephone Number</label>
<br>

<input  type="text" name="telephone" maxlength="30" size="30">
</td>
</tr>


<tr>
<td valign="top">
<label for="comments">Comments *</label>
<br>

<textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
</td>
</tr>
<tr>


<td colspan="2" style="text-align:center">
</td>
</tr>
</table>
<div></div>
<div class="g-recaptcha" data-sitekey="6LcLZxEUAAAAACLnJe4_IIyfboFqbxRPMxny0qY4"></div>
<div>
<input align="middle" type="submit" value="Submit"> 	</div>
</form>
</div>

</div>

<!-- END HTML FORM -->
<script type="text/javascript"
    src="https://www.google.com/recaptcha/api.js?hl=en">
</script>
<!-- END Main Contents -->




<?php include "includes/footer.php"?>
