<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form-v4 by Colorlib</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/line-awesome/css/line-awesome.min.css">
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/sign.css"/>
</head>
<body class="form-v4">

	<div class="page-content">
		<div class="form-v4-content">

			<div class="form-left">
			<h2>Welcome Back!</h2>
<p class="text-1">
    Access your account to continue planning your dream vacations, managing bookings, and exploring personalized recommendations.
</p>
<p class="text-2">
    <span>Stay Connected:</span> Log in to stay updated on exclusive deals, offers, and your travel itinerary. Your next adventure awaits!
</p>
<div class="form-left-last">
				<form action="<?= base_url('sign') ?>" method="get">
        <input type="submit" name="account" class="account" value="Sign in">
    </form>
</div>
			</div>
			<form class="form-detail" action="<?= base_url('sign/register') ?>" method="post" id="myform">
                	<h2>Sign in </h2>
				
				<div class="form-row">
					<label for="your_email"> Email</label>
					<input type="text" name="your_email" id="your_email" class="input-text" required ">
				</div>
				<div class="form-row">
					<label for="your_email">Password</label>
					<input type="password" name="password" id="password" class="input-text" required ">
				</div>

				<div class="form-checkbox">
					<label class="container"><a href="<?= base_url('/forgot_password') ?>" class="text">Forgot password</a>
					  	<input type="checkbox" name="checkbox">
					</label>
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Sign in">
				</div>
				
			</form>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script>
		// just for the demos, avoids form submit
		jQuery.validator.setDefaults({
		  	debug: true,
		  	success:  function(label){
        		label.attr('id', 'valid');
   		 	},
		});
		$( "#myform" ).validate({
		  	rules: {
			    password: "required",
		    	comfirm_password: {
		      		equalTo: "#password"
		    	}
		  	},
		  	messages: {
		  		first_name: {
		  			required: "Please enter a firstname"
		  		},
		  		last_name: {
		  			required: "Please enter a lastname"
		  		},
		  		your_email: {
		  			required: "Please provide an email"
		  		},
		  		password: {
	  				required: "Please enter a password"
		  		},
		  		comfirm_password: {
		  			required: "Please enter a password",
		      		equalTo: "Wrong Password"
		    	}
		  	}
		});
	</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>