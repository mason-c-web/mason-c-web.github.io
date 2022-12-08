<?php include "includes/header.php"?>






<div align="middle" class="infocontainer">
  <br>
<div class='container'>
    <button  onclick="localform()" id="btn1">Local Ministry Form</button>
    <button  onclick="globalform()"id="btn2">Global Minstry Form</button>
    <button  onclick="eventreg()" id="btn3">Event Registration Form</button>
</div>
<br>
</div>



<iframe  id="globalform" src="https://docs.google.com/forms/d/e/1FAIpQLScDaDX4cfOA03uLJdWFCC89Oz_2CrHQUFNILnq5025JCTpaaw/viewform?embedded=true" width="100%" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>

<iframe  id="localform" src="https://docs.google.com/forms/d/1H282w-nNKmTIisT9MBIWEzMSF8G1iVci28mIBSMQFi8/viewform?embedded=true" width="100%" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>

<iframe  id="eventreg" src="https://docs.google.com/forms/d/1RYphCZkNLIGX1I1Kk-2pIPeSAPc8vuXnz2ehc1QMD74/viewform?embedded=true" width="100%" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>

<br>



<script>

function globalform(){
document.getElementById("globalform").style.display = "block";
document.getElementById("localform").style.display = "none";
document.getElementById("eventreg").style.display = "none";

}

function localform(){
document.getElementById("globalform").style.display = "none";
document.getElementById("localform").style.display = "block";
document.getElementById("eventreg").style.display = "none";

}

function eventreg(){
document.getElementById("globalform").style.display = "none";
document.getElementById("localform").style.display = "none";
document.getElementById("eventreg").style.display = "block";

}

</script>



<?php include "includes/footer.php"?>
