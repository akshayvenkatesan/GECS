<!DOCTYPE html>
<html lang="en">
	<head>
		<title>DHIGECS User Registration Form</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--===============================================================================================-->
		<link rel="icon" type="image/png" href="<?php echo base_url() ?>images/icons/favicon.ico"/>
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>bootstrap-3.3.7-dist/css/bootstrap.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/animate/animate.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/css-hamburgers/hamburgers.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/animsition/css/animsition.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/select2/select2.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/daterangepicker/daterangepicker.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/util.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/main.css">
		<!--===========jQuery UI Datepicker - Default functionality========-->
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="/resources/demos/style.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script>
			$( function() {
				$( "#datepicker" ).datepicker();
			} );
		</script>
	</head>
	<body>
		
		
		<div class="container-contact100">
			
			<div class="wrap-contact100">
				
				<form class="contact100-form validate-form" method="POST" action="" onsubmit="return myfunction(this)">
					
				</span>
				<span class="input100">
                    <a href="<?php echo base_url(); ?>">Home</a>
				</span>
				<br><br>
				<span class="contact100-form-title">
					Benefiary Online Form ( Annexure I) 
				</span>
				<span class="input100">
					*Required
				</span>
				
				<label class="label-input100" for="first-name" >Benificiary Name(as in Aadhar)*</label>
				
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
					<input id="firstname" class="input100" type="text" name="firstname" placeholder="First name">
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 rs1-wrap-input100">
					<input id="middlename" class="input100" type="text" name="middlename" placeholder="Middle name">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type surname">
					<input class="input100" id="lastname" type="text" name="lastname" placeholder="Surname">
					<span class="focus-input100"></span>
				</div>
				
				<label class="label-input100" >Father's/Husband's Name(as in Aadhar)*</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
					<input id="fname" class="input100" type="text" name="fname" placeholder="First name">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs1-wrap-input100" >
					<input id="mname" class="input100" type="text" name="mname" placeholder="Middle name">
					<span class="focus-input100"></span>
					
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
					<input class="input100" id="lname" type="text" name="lname" placeholder="Surname">
					<span class="focus-input100"></span>
				</div>
				
				
				<div class="wrap-input100 validate-input" data-validate = "Please Select Your Nationality">
					<label class="label-input100" >Nationality*</label>
					<select class="form-control" id="Nationality" onclick="nationality()" name="Nationality">
						<option>Indian</option>
						<option>Others*</option>
					</select>
				</div>
				<div class="wrap-input100">
					<input id="nation" class="input100" type="text" name="nation" placeholder="Enter Nationality" style="display:none">
					<span class="focus-input100"></span>
				</div>
				
				<label class="label-input100"> Gender*</label>
				<div class="wrap-input100 validate-input" data-validate = "Select a gender"><br>
					<label class="radio-inline Container-input"><input type="radio" name="gender" value="Male">Male</label>
					<label class="radio-inline Container-input"><input type="radio" name="gender" value="Female">Female</label>
					<label class="radio-inline"><input type="radio" name="gender" value="Transgender">Transgender</label>
					<span class="focus-input100"></span>
				</div>
				
				<label class="label-input100" for="Date">Enter your date of birth *</label>
				<div class="wrap-input100 validate-input" data-validate = "Select a date!">
					<input id="date" type="date">
					<span class="focus-input100"></span>
				</div>
				
				<label class="label-input100" for="message">Residential Address *</label>
				<div class="wrap-input100 validate-input" data-validate = "Flat no. is required">
					<input id="house" class="input100" name="house" placeholder="Flat no" type="text">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Building name is required">
					<input id="building" class="input100" name="building" placeholder="Building" type="text">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Street name is required">
					<input id="street" class="input100" name="street" placeholder="Street" type="text">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "">
					
					<span class="focus-input100"></span>
	                <select name="state" id="state" class="form-control input-lg">
						<option> Select State</option>
						<?php
							$query = $this->db->query("SELECT `state code` as sc,`State Name(In English)` as sn FROM `dhigecs_state`");
							foreach ($query->result() as $row)
							{
								//echo $row->sc;
								// echo $row->sn;
								echo "<option value='",$row->sn,"'>",$row->sn,"</option>";
							}
						?>
					</select>
				</div>
                                
                                <label class="label-input100" for="city" >City*</label>
                                <div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type City Name">
					<input class="input100" id="city" type="text" name="city" placeholder="City">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Please Select a Profession">
					<label class="label-input100" for="email">Select your profession*</label>
				</div>
				<select name="prof" id="prof" class="form-control input-lg">
					<option> Select Profession</option>
					<?php
						$query = $this->db->query("SELECT `GecsProfId`,`GecsProfName` FROM `gecs_professions`");
						foreach ($query->result() as $row)
						{
							echo $row->GcesProfId;
							// echo $row->sn;
							echo "<option value='",$row->GcesProfId,"'>",$row->GecsProfName,"</option>";
						}
					?>
				</select>
				
				
				
				<div class="wrap-input100">
					<input id="prof" class="input100" type="text" name="prof" placeholder="Enter Proffession" style="display:none">
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 validate-input" data-validate = "Please Select your Income">
					<label class="label-input100" >Annual Income(INR)*</label>
					<select class="form-control" id="income">
						<option>0-1,00,000</option>
						<option>1,00,000-5,00,000</option>
						<option>5,00,000-15,00,000</option>
						<option>15,00,000+</option>
					</select>
				</div>
				
				
				<label class="label-input100">Enter your Aadhar Number*</label>
				<div class="wrap-input100 validate-input" data-validate = "Invalid Aadhar number">
					<input id="aadhar" class="input100" type="number" name="aadhar" placeholder="Enter number" onkeypress="if(this.value.length==12) return false;">
					<span class="focus-input100"></span>
				</div>
				
				<label class="label-input100">Enter mobile number(+91)*</label>
				<div class="wrap-input100 validate-input" data-validate="Mobile number is required">
					<input id="phone" class="input100" type="number" name="phone" placeholder="Eg. 99XXXXXXXX09" onkeypress="if(this.value.length==10) return false;">
					<span class="focus-input100"></span>
				</div>
				
				
				
				
				<label class="label-input100" for="email">Enter your email *</label>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com">
					<span class="focus-input100"></span>
				</div>
				
				
				
				
				
				<label class="label-input100">Driving License Number(if any)</label>
				<div class="wrap-input100">
					<input id="License" class="input100" type="text" name="license" placeholder="Enter License Number">
					<span class="focus-input100"></span>
				</div>
				
				
				
				
				
				
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" name="register" id="register">
						Submit Form
					</button>
				</div>
				
			</form>
			<div class="contact100-more flex-col-c-m" style="background-image: url('<?php echo base_url() ?>images/bg-01.jpg');">
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>
					
					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Address
						</span>
						
						<span class="txt2">
							281 D/o Heavy Industry, New Delhi
						</span>
					</div>
				</div>
				
				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>
					
					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Contact
						</span>
						
						<span class="txt3">
							011-23062740
						</span>
					</div>
				</div>
				
				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-envelope"></span>
					</div>
					
					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Queries
						</span>
						
						<span class="txt3">
							support@dhigecs.gov.in
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	<script>
		function clicked() {
			if(document.getElementById("sel1").value=="Others*")
			{
				var x = document.getElementById("prof");
				x.style.display = "block";
				
				
			}
			else
			{
				var x = document.getElementById("prof");
				x.style.display = "none";
				
				
			}
		}
	</script>
	
	<script>
		function nationality() {
			if(document.getElementById("Nationality").value=="Others*")
			{
				var x = document.getElementById("nation");
				x.style.display = "block";
				
				
			}
			else
			{
				var x = document.getElementById("nation");
				x.style.display = "none";
				
				
			}
		}
	</script>
	
	
	<script>
		function myfunction(form)
		{
			
			if(document.getElementById("Nationality").value=="Others*" && document.getElementById("nation").value=="")
			{
				alert("Enter your Nationality!");
				var x= document.getElementById("nation");
				return false;
				
			}
			
			else if(document.getElementById("gender").checked==false)
			{
				alert("Please Select A Gender!");
				return false;
			}
			
			
			else if(document.getElementById("sel1").value=="Others*" && document.getElementById("prof").value=="")
			{
				alert("Enter your Proffession please!");
				var x= document.getElementById("prof");
				return false;
				
			}
			
			else
			return true;
		}
	</script>
	
	<script>
		function datefunction()
		{
			var x=new Date();
			var dd=x.getDate();
			var mm=x.getMonth();
			var yyyy=x.getFullYear()-18;
			if(dd<10)
			{
				dd='0'+dd;
			}
			if(mm<10)
			{
				mm='0'+mm;
			}
			x=yyyy+'-'+mm+'-'+dd;
			document.getElementById("date").setAttribute("max",x);
		}
	</script>
	
	<script>
		$(document).ready(function(){
			$('#state').change(function(){
				var state_id = $('#state').val();
				if(state_id != '')
				{
					$.ajax({
						url:"<?php echo base_url(); ?>dynamic_dependent/fetch_city",
						method:"POST",
						data:{state_id:state_id},
						success:function(data)
						{
							$('#city').html(data);
							
						}
					});
				}
				else
				{
					$('#city').html('<option value="">Select city</option>');
				}
			});
		</script>
		
		
		<!--===============================================================================================-->
		<script src="<?php echo base_url() ?>vendor/jquery/jquery-3.2.1.min.js"></script>
		<!--===============================================================================================-->
		<script src="<?php echo base_url() ?>vendor/animsition/js/animsition.min.js"></script>
		<!--===============================================================================================-->
		<script src="<?php echo base_url() ?>vendor/bootstrap/js/popper.js"></script>
		<script src="<?php echo base_url() ?>vendor/bootstrap/js/bootstrap.min.js"></script>
		<!--===============================================================================================-->
		<script src="<?php echo base_url() ?>vendor/select2/select2.min.js"></script>
		<script>
			$(".selection-2").select2({
				minimumResultsForSearch: 20,
				dropdownParent: $('#dropDownSelect1')
			});
		</script>
		<!--===============================================================================================-->
		<script src="<?php echo base_url() ?>vendor/daterangepicker/moment.min.js"></script>
		<script src="<?php echo base_url() ?>vendor/daterangepicker/daterangepicker.js"></script>
		<!--===============================================================================================-->
		<script src="<?php echo base_url() ?>vendor/countdowntime/countdowntime.js"></script>
		<!--===============================================================================================-->
		<script src="<?php echo base_url() ?>js/main.js"></script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			
			gtag('config', 'UA-23581568-13');
		</script>
	</body>
</html>
