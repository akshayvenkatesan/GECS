<!DOCTYPE html>
<html lang="en">
<head>
	<title>User Details</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url() ?>images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/bootstrap/css/bootstrap.min.css">
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
<!--===============================================================================================-->
</head>
<body>

 
	<div class="container-contact100">

		<div class="wrap-contact100">

			<form class="contact100-form validate-form" method="POST" action="" onsubmit="return myfunction(this)">
                             
                        </span>
		<span class="input100">
                    <a href="<?php echo base_url(); ?>">Back to home page</a>
				</span>
                        <br><br>
				<span class="contact100-form-title">
					Details for Certificate Issuance
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
<label class="radio-inline"><input type="radio" name="gender" vallue="Other">Other</label>
					<span class="focus-input100"></span>
				</div>

<label class="label-input100" for="Date">Enter your date of birth *</label>
				<div class="wrap-input100 validate-input" data-validate = "Select a date!">
					<input id="date" class="input100" type="date" name="date" onclick="datefunction()" >
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
					<select class="form-control" name="state" id="state" onclick="cityselection()">
						<option>Please Select Your State</option>
    <option>Andaman and Nicobar</option>
    <option>Andhra Pradesh</option>
    <option>Arunachal Pradesh</option>
    <option>Assam</option>
    <option>Bihar</option>
    <option>Chandigarh</option>
    <option>Chattisgarhh</option>
    <option>Dadra and Nagar Haveli</option>
    <option>Daman and Diu</option>
    <option>Delhi</option>
    <option>Goa</option>
    <option>Gujarat</option>
    <option>Haryana</option>
    <option>Jammu And Kashmir</option>
    <option>Jharkhand</option>
    <option>Karnataka</option>
    <option>Kerala</option>
    <option>Lakshadweep</option>
    <option>Madhya Pradesh</option>
    <option>Maharashtra</option>
    <option>Manipur</option>
    <option>Meghalaya</option>
    <option>Mizoram</option>
    <option>Nagaland</option>
    <option>Odisha</option>
    <option>Puducherry</option>
    <option>Punjab</option>
    <option>Rajasthan</option>
    <option>Sikkim</option>
    <option>Tamil Nadu</option>
    <option>Telangana</option>
    <option>Tripura</option>
    <option>Uttarakhand</option>
    <option>Uttar Pradesh</option>
    <option>West Bengal</option>
    
    </select>
				 <select class="form-control" id="city" name="city">
    <option>Please Select your city</option>
    
    </select>


			<div class="wrap-input100 validate-input" data-validate = "Please Select a Profession">
					<label class="label-input100" for="email">Select your profession*</label>
   <select class="form-control" id="sel1" onclick="clicked()" name="sel1">
    <option>Student</option>
    <option>Government Service</option>
    <option>Self-Employed</option>
    <option>Others*</option>
  </select>
</div>
				<div class="wrap-input100">
					<input id="prof" class="input100" type="text" name="prof" placeholder="Enter Proffession" style="display:none">
				<span class="focus-input100"></span>
				</div>

					<div class="wrap-input100 validate-input" data-validate = "Please Select your Income">
					<label class="label-input100" >Annual Income(INR)*</label>
   <select class="form-control" id="sel2"">
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
							Udyog Bhavan, New Delhi
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
							011-1236879
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-envelope"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							General Support
						</span>

						<span class="txt3">
							contact@example.com
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
	function cityselection()
	{
		 var select = document.getElementById("city"),
                     arr = [];
             var x= document.getElementById("state");
            
             	select.options.length = 1;
             	
             		switch(document.getElementById("state").value)
             		{
             		case "Andaman and Nicobar":
             		{ arr = ["Nicobars","North and Middle Andaman","South Andamans"];
             break;
                    }

                    case "Andhra Pradesh":
                    {
                    	arr = ["Anantapur","Chittoor","East Godavari","Guntur","Krishna","Kurnool","Prakasam","SPSR Nellore","Srikakulam","Visakhapatanam","Vizianagaram","West Godavari","Y.S.R"];
                    	break;
                    }
                     case "Arunachal Pradesh":
                    {
                    	arr = ["Anjaw","Changlang","Dibang Valley","East Kameng","East Siang","Kra Daadi","Kurung Valley","Lohit","Longding","Lower Dibang Valley","Lower Subansiri","Namsai","Papum Pare","Siang","Tawang","Tirap","Upper Siang","Upper Subansiri","West Kameng","West Siang"];
                    	break;
                    }
                      case "Assam":
                    {
                    	arr = ["Baksa","Barpeta","Biswanath","Bongaigaon","Cachar","Charaideo","Chirang","Darrang","Dhemaji","Dhubri","Dima Hasao","Goalpara","Golaghat","Hailakandi","Hojai","Jorhat","Kamrup","Kamrup Metro","Karbi Anglong","Karmiganj","Kokrajhar","Lakhimpur","Majuli","Mairgaon","Nagaon","Nalbari","Sivasagar","Sonitpur","South Salmara Mancachar","Tinsukia","Udalguri","West Karbi Anglong"];
                    	break;
                    }
                    case "Bihar":
                    {
                    	arr=["Araria","Arwal","Aurangabad","Banka","Begusarai","Bhagalpur","Bhojpur","Buxar","Darbhanga","Gaya","Gopal Ganj","Jamui","Jehanabad","Kaimur(Bhabua)","Katihar","Khagaria","Kishanganj","Lakhisarai","Madhepura","Madhubani","Munger","Muzaffarpur","Nalanda","Nawada","Pashchim Champaran","Patna","Purbi Champaran","Purnia","Rohtas","Saharsa","Samastipur","Saran","Sheikhpura","Sheohar","Siramarhi","Siwan","Supaul","Vaishali"];
                    	break;
                    }
                    case "Chandigarh":
                    {
                    	arr=["Chandigarh"];
                    	break;
                    }
                    case "Chattisgarhh":
                    {
                    	arr=["Balod","Baloda Bazar","Balrampur","Bastar","Bemetara","Bijapur","Bilaspur","Dantewada","Dhamtari","Durg","Gariyaband","Janjgir-Champa","Jashpur","Kabirdham","Kanker","Kondagaon","Korba","Korea","Mahasamund","Mungeli","Narayanpur","Raigarh","Raipur","Rajnandgaon","Sukma","Surajpur","Surguja"];
                    	break;
                    }
                    case "Dadra and Nagar Haveli":
                    {
                    	arr=["Dadra and Nagar Haveli"];
                    	break;
                    }
                    case "Daman and Diu":
                    {
                    	arr=["Daman","Diu"];
                    	break;
                    }
                    case "Delhi":
                    {
                    	arr=["Cental","East","New Delhi","North","North East","North West","Shahdara","South","South East","South West","West"];
                    	break;
                    }
                    case "Gujarat":
                    {
                    	arr=["Ahmadabad","Amreli","Anand","Arvalli","Banas Kantha","Bharuch","Bhavnagar","Botad","Chhotaudepur","Dang","Devbhumi Dwarka","Dohad","Gandhinagar","Gir Somnath","Jamnagar","Junagadh","Kachchh","Kheda","Mahesana","Mahisagar","Morbi","Narmada","Navsari","Panch Mahals","Patan","Porbandar","Rajkot","Sabar Kantha","Surat","Surendranagar","Tapi","Vadodra","Valsad"];
                    	break;
                    }
                    case "Haryana":
                    {
                    	arr=["Ambala","Bhiwani","Charki Dadri","Faridabad","Fatehabad","Gurugram","Hisar","Jhajjar","Jind","Kaithal","Karnal","Kurukshetra","Mahendragarh","Mewat","Palwal","Panchkula","Panipat","Rewari","Rohtak","Sirsa","Sonipat","Yamunanagar"];
                    	break;
                    }
                    case "Himachal Pradesh":
                    {
                    	arr=["Bilaspur","Chamba","Hamirpur","Kangra","Kinnaur","Kullu","Lahul and Spiti","Mandi","Shimla","Sirmaur","Solan","Una"];
                    	break;
                    }
                    case "Jammu and Kashmir":
                    {
                    	arr=["Anantnag","Badgam","Bandipora","Baramulla","Doda","Ganderbal","Jammu","Kargil","Kathua","Kishtwar","Kulgam","Leh Ladakh","Poonch","Pulwama","Rajauri","Ramban","Reasi","Samba","Shopian","Srinagar","Udhampur"];
                       	break;
                    }
                    case "Jharkhand":
                    {
                    	arr=["Bokaro","Chatra","Deogarh","Dhanbad","Dumka","East Singhbum","Garhwa","Giridih","Godda","Gumla","Hazaribagh","Jamtara","Khunti","Koderma","Latehar","Lohardaga","Pakur","Palamu","Ramgarh","Ranchi","Sahebganj","Saraikela Kharsawan","Simdega","West Singhbhum"];
                    	break;
                    }
                    case "Karnataka":
                    {
                    	arr=["Bagalkot","Ballari","Belagavi","Bengaluru Rural","Bengaluru Urban","Bidar","Chamarajanagar","Chikballapur","Chitradurga","Dakshin Kannad","Davangere","Dharwad","Gadag","Hassan","Haveri","Kalaburagi","Kodagu","Kolar","Koppal","Mandya","Mysuru","Raichur","Ramanagara","Shivamogga","Tumakuru","Udupi","Uttar Kannad","Vijayapura"];
                    	break;
                    }
                    case "Kerala":
                    {
                    	arr=["Alappuzha","Ernakulam","Idukki","Kannur","Kasaragod","Kollam","Kottayam","Kozhikode","Malappuram","Palakkad","Pathanamthitta","Thiruvananthapuram","Thrissur","Wayanad"];
                    	break;
                    }
                    case "Lakshadweep":
                    {
                    	arr=["Lakshadweep District"];
                    	break;
                    }
                    case "Madhya Pradesh":
                    {
                    	arr=["Agar Malwa","Alirajpur","Anuppur","Ashoknagar","Balaghat","Barwani","Betul","Bhind","Bhopal","Burhanpur","Chhatarpur","Chhindwara","Damoh","Datia","Dewas","Dhar","Dindori","East Minar","Guna","Gwalior","Harda","Hoshangabad","Indore","Jabalpur","Jhabua","Katni","Khargone","Mandla","Mandsaur","Morena","Narsinghpur","Neemuch","Panna","Raisen","Rajgarh","Ratlam","Rewa","Sagar","Satna","Sehore","Seoni","Shahdol","Shajapur","Sheopur","Shivpuri","Sidhi","Singrauli","Tikamgarh","Ujjain","Umaria","Vidisha"];
                    	break;
                    }
                    case "Maharashtra":
                    {
                    	arr=["Ahmednagar","Akola","Amravati","Aurangabad","Beed","Bhandara","Buldhana","Chandrapur","Dhule","Gadchiroli","Gondia","Hingoli","Jalgaon","Jalna","Kolhapur","Latur","Mumbai","Mumbai Suburban","Nagpur","Nanded","Nandurbar","Nashik","Osmanabad","Palghar","Parbhani","Pune","Raigad","Ratnagiri","Sangli","Satara","Sindhudurg","Solapur","Thane","Wardha","Washim","Yavatmal"];
                    	break;
                    }
                    case "Manipur":
                    {
                    	arr=["Bishupur","Chandel","Churachandpur","Imphal East","Imphal West","Jiribam","Kakching","Kamjong","Kangpokpi","Noney","Pherzawl","Senapati","Tamenglong","Tengnoupal","Thoubal","Ukhrul"];
                    	break;
                    }
                    case "Meghalaya":
                    {
                    	arr=["East Garo Hills","East Jaintia Hills","East Khasi Hills","North Garo Hills","RI Bhoi","South Garo Hills","South West Garo Hills","South West Khasi Hills","West Garo Hills","West Jaintia Hills","West Khasi Hills"];
                    	break;
                    }
                    case "Mizoram":
                    {
                    	arr=["Aizawl","Champhai","Kolasaib","Lawngtlai","Lunglei","Mamit","Saiha","Serchhip","Dimapur","Kiphire","Kohima","Longleng","Mokokchung","Mon","Peren","Phek","Tuensang","Wokha","Zunheboto"];
                    	break;
                    }
                    case "Nagaland":
                    {
                    	arr=[];
                    	break;
                    }
                    case "Odhisha":
                    {
                    	arr=["Anugul","Balangir"];
                    	break;
                    }
         default: break;
         }
          for(var i = 0; i < arr.length; i++)
             {


                 var option = document.createElement("OPTION"),
                     txt = document.createTextNode(arr[i]);
                 option.appendChild(txt);
                 option.setAttribute("value",arr[i]);
                 select.insertBefore(option,select.lastChild);
             }
         }
             

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
