<html>
<head>	<title>User Details</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/main.css">
     
<!--===============================================================================================-->
</head>
<body>
	
	<div align="center">
            
		
                    <form class="contact100-form validate-form" action="" method="POST" onsubmit="return myfunction(this)">
				<span class="contact100-form-title">
					Format of Medical Certificate
				</span>

				<span class="input100">
			*Required
				</span>
                        
					<label class="label-input100" for="name">Name of Applicant*</label>
                                        <div>
                                        <?php echo form_input(['class'=>'form-control',
                                  'placeholder'=>'Enter Name Title','name'=>'name',
                                  'value'=>set_value('name',$name->Name)]);  ?>
				</div>
			
                	<label class="label-input100" for="photo">Photograph*</label>
                				<div class="wrap-input100 rs1-wrap-input100">
                                                    <input id="image" name="image" type="image" width="100" height="30" alt="Applicant">
                					<span class="focus-input100"></span>
				                </div>
				                	<label class="label-input100" for="optradio">General Medical Condition*</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Select medical condition">
                                    <label class="radio-inline Container-input"><input type="radio" id="optradio" name="optradio" value="Good" checked="checked">Good</label>
<label class="radio-inline Container-input"><input type="radio" id="optradio" name="optradio" value="Bad">Bad</label>
					<span class="focus-input100"></span>
				</div>
				<label class="label-input100" for="optradio1">General State of Health*</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Select state of health">
                                    <label class="radio-inline Container-input"><input type="radio" id="optradio1" name="optradio1" value="Good" checked="checked">Good</label>
                        <label class="radio-inline Container-input"><input type="radio" id="optradio1"  name="optradio1" value="Bad">Bad</label>
					<span class="focus-input100"></span>
				</div>
				<label class="label-input100" for="optradio2">Vision including colour vision *</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Vision">
                                    <label class="radio-inline Container-input"><input type="radio" id="optradio2"  name="optradio2"  value="Good" checked="checked">Good</label>
<label class="radio-inline Container-input"><input type="radio" id="optradio2"  name="optradio2" value="Bad">Bad</label>
					<span class="focus-input100"></span>
				</div>
				<label class="label-input100" for="optradio3">Hearing *</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Hearing">
                                    <label class="radio-inline Container-input"><input type="radio" id="optradio3"  name="optradio3"  value="Good" checked="checked">Good</label>
<label class="radio-inline Container-input"><input type="radio" id="optradio3"  name="optradio3" value="Bad">Bad</label>
					<span class="focus-input100"></span>
				</div>
				<label class="label-input100" for="optradio4">State of Mental Health *</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Mental Health">
                                    <label class="radio-inline Container-input"><input type="radio" id="optradio4"  name="optradio4"  value="Good" checked="checked">Good</label>
<label class="radio-inline Container-input"><input type="radio" id="optradio4"  name="optradio4" value="Bad">Bad</label>
					<span class="focus-input100"></span>
				</div>
		
                <label class="label-input100" for="sel1">Nature of Orthopedic Impairment & duration *</label>
			
			<div class="wrap-input100">
   <select class="form-control" id="sel1" name="sel1" onclick="clicked()">
    <option>Paralysis</option>
    <option>Deformity</option>
    <option>/Loss of Limb</option>
    <option>Others*</option>
  </select>
                            <div class="wrap-input100">
					<input id="deformity" class="input100" type="text" name="deformity" placeholder="Enter Deformity" style="display:none">
				
				</div>

</div>
                
		<label class="label-input100" for="Figures">Percentage of Orthopedic impairment *</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Enter disability percentage">
					<input id="Figures" class="input100" type="number"  name="Figures" placeholder="In Figures" onkeypress="if(this.value.length==3) return false;" min="0" max="100">
					<span class="focus-input100"></span>
				</div>
				
				<label class="label-input100" for="use_app">Use of appliance, if any </label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Use">
					<input id="use_app" class="input100" type="text" name="use_app" placeholder="Type use">
					<span class="focus-input100"></span>
				</div>
	<label class="label-input100" for="optradio5">Whether permanent in nature *</label>
	<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Permanent">
            <label class="radio-inline Container-input"><input type="radio" id="optradio5"  name="optradio5" value="Yes" checked="checked">Yes</label>
<label class="radio-inline Container-input"><input type="radio" id="optradio5"  name="optradio5" value="No">No</label>
					<span class="focus-input100"></span>
				</div>
     <div class="form-group">
                <div class="col-md-5 col-md-offset-2 image">
                    
                </div>
    
<!--                <div class="col-md-5">
                    <a class="refresh" href="javascript:;"><img src="<?php echo base_url(); ?>images/refresh.png"> </a>
                </div>-->
 </div>
         <div class="form-group">
                <label for="captcha" class="col-md-2 control-label">Captcha</label>
                <div class="col-md-10">
                    <input class="form-control" name="captcha">
                </div>
            </div>
				

				<div class="container-contact100-form-btn">
                                    <button class="contact100-form-btn" name="certi" id="certi">
						Submit Form
					</button>
				</div>
            
         
       </form>
                                
         
    
			
		
<!--<script> 
    $(function(){
        $('.refresh').click(function(){
             $.ajax({
                type: 'POST',
                url: '<?php echo base_url() ?>index.php/blog/refresh_captcha',
                success: function(res){
                    if(res){
                        $('.image').html(res);
                    }
                }
            })
        });
    });
</script>-->

 <script>
   function clicked() {
   	if(document.getElementById("sel1").value=="Others*")
   	{
    var x = document.getElementById("deformity");
       x.style.display = "block";
    
    
}
else
{
	 var x = document.getElementById("deformity");
      x.style.display = "none";

    
}
}
  </script>

  


<script>
	function myfunction(form)
	{
		
		

		else if(document.getElementById("optradio").checked==false)
		{
			alert("Please Select Any One");
			return false;
		}
                	else if(document.getElementById("optradio1").checked==false)
		{
			alert("Please Select Any One");
			return false;
		}
                	else if(document.getElementById("optradio2").checked==false)
		{
			alert("Please Select Any One");
			return false;
		}
                	else if(document.getElementById("optradio3").checked==false)
		{
			alert("Please Select Any One");
			return false;
		}

	else if(document.getElementById("optradio4").checked==false)
		{
			alert("Please Select Any One");
			return false;
		}
	else if(document.getElementById("optradio5").checked==false)
		{
			alert("Please Select Any One");
			return false;
		}



		else
			return true;
	}
</script>



<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url(); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>js/main.js"></script>
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





