<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Anthony And Rae Janelle Save The Date</title>
  <link href="https://fonts.googleapis.com/css?family=Baloo" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>
<div class="heart"></div>
<!-- partial:index.partial.html -->
<div class="invitation">
  <div class="envelope">
    <div class="mask">
      <div class="card">
        <div class="face front">
          <!-- <h1><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/39132/poke-logo.svg"/><span class="extrude">Invitation Card</span></h1> -->
          <!-- <center><h1>YOU ARE INVITED</h1></center>
          <center><h1>TO OUR WEDDING</h1></center> -->
          <h1></h1>
        </div>
        <div class="face back"></div>
      </div>
    </div>
  </div>
  <div class="flap"></div>
  <?php 
        $button_text = "You are invited!";
        if(isset($_REQUEST['name'])){
           $button_text = "to: ninong ".$_REQUEST['name'];
        }
  ?>
  <button style="top: 6em;font-family: cursive;letter-spacing: -1px;position: absolute;font-size: 2.5em;"><?= $button_text; ?></button>
  <!-- <button>You're Invited!</button> -->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>





<!-- <div class="invitation">
 <button>You're Invited! 1</button>
</div> -->
<!-- partial -->
  <!-- <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script> -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/35984/ScrubGSAPTimeline.js'></script><script  src="./script.js"></script>

<!-- <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script> -->




</body>
</html>
