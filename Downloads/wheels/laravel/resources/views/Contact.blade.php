<!DOCTYPE html>
<html>
<head>
<title>Perfect Wheels</title>
<link rel="stylesheet" type="text/css" href="./Contact.css">

</head>
<body>
<header>
<div class="main">
<div class="logo"></div>
<img src="logo4.png">
<ul>
<li><a href="Home.html">Home</a></li>
<li><a href="Brands.html">Brands</a></li>
<li><a href="About.html">About</a></li>
<li><a href="Contact.html">Contact</a></li>
</ul>
</div>

<?php

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<div class="title">

<element id="content"></element>
</div>
<div class="wrap-contact100" style="display: block;">
			<button class="contact100-btn-hide">
				<i class="fa fa-close" aria-hidden="true"></i>
			</button>

			
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="contact100-form validate-form">  
				<span class="contact100-form-title">
					Contact Us
				</span>

				<div class="wrap-input100 rs1-wrap-input100 validate-input">
				
				<label for="fname">First Name</label>
    <input class="label-input100" type="text" id="fname" name="firstname" placeholder="Your name.." value="<?php echo $name;?>">
  <span class="error"> <?php echo $nameErr;?></span>
	
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" placeholder="Enter your Email Adress" value="<?php echo $email;?>">
  <span class="error"> <?php echo $emailErr;?></span>
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 rs1-wrap-input100">
				 <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Sweden</option>
      <option value="canada">Norway</option>
      <option value="usa">Denmark</option>
    </select>
	</div>

				<div class="wrap-input100" data-validate="Message is required">
					<span class="label-input100">Message</span>
					<textarea class="input100" name="message" placeholder="Your message here..."><?php echo $comment;?></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<input type="submit" name="submit" value="Submit" class="contact100-form-btn">
					</button>
				</div>
			</form>

			<span class="contact100-more">
				For any question contact our 24/7 call center: <span class="contact100-more-highlight">+905373308817</span>
			</span>
		</div>
</header>
</ul>
</html>
