<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Mobile viewport optimisation -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Registration</title>
<link rel="stylesheet" type="text/css" href="css/grid.css" />
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/style01.css" />
<link rel="stylesheet" type="text/css" href="css/jquery.jscrollpane.css"/>
<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.8.22.custom.css"/>
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css"/>
<link rel="stylesheet" type="text/css" href="css/smart_wizard.css" />
<!--[if IE]>
 <link rel="stylesheet" type="text/css" href="css/ie-style.css"/>
<![endif]-->
</head>
<body class="bgNone">
<div id="container" class="container bgNone">
  <div id="header">
    <div class="container_12">
      <h1 class="grid_4 alpha"><a href="index.html"><img src="images/crowdbass.png" alt="crowdbass" title="crowdbass" /></a></h1>
      <div class="headerRight">
        <div class="signIn"><a href="#">Sign in</a> <span>or</span></div>
        <a href="javascript:;" id="fancybox-manual-b" class="arrowButton26" ><span><span>Create my label now</span></span></a>
        <div class="artistLooking">Are you an artist looking to raise funding? <a href="#">Click here</a></div>
      </div>
    </div>
    <div id="mainNav">
      <div class="container_12">
        <ul>
          <li><a href="#">Find Arttists</a></li>
          <li><a href="#">Our Managers</a></li>
          <li><a href="#">Charts</a></li>
          <li><a href="#">News</a></li>
          <li><a href="#">Get in Touch</a></li>
        </ul>
        <span id="socialNetwork"> <a href="#"><img src="images/facebook-icon.gif" alt="Facebook" /></a> <a href="#"><img src="images/twitter-icon.gif" alt="Twitter" /></a> </span> </div>
    </div>
  </div>
  <!-- Start Registration -->
  <div id="registration" class="container_12">
    <div class="validationMsg">
      <p class="thankYou">Thank you! You are just a few steps away from launching your own Record Label. Once we've got the following information, you'll be able to start discovering, supporting and promoting artists and become part of the journey!</p>
      <span class="cancel"></span> </div>
    <?php
   if(isset($_REQUEST['issubmit'])){
      echo "<strong>form is sumbitted</strong>";
   }

?>
    <form action="addsomefund.html" method="POST">
      <input type='hidden' name="issubmit" value="1">
      <!-- Tabs -->
      <div id="wizard" class="personalInfoForm swMain">
        <ul>
          <li><a href="#step-1">
            <label class="stepNumber">1</label>
            <span class="stepDesc">About You </span> </a></li>
          <li><a href="#step-2">
            <label class="stepNumber">2</label>
            <span class="stepDesc">Create your Label </span> </a></li>
          <li><a href="#step-3">
            <label class="stepNumber">3</label>
            <span class="stepDesc">Social Accounts </span> </a></li>
          <li><a href="#step-4">
            <label class="stepNumber">4</label>
            <span class="stepDesc"> Legal </span> </a></li>
        </ul>
        <div id="step-1">
          <div class="formWrap">
            <div class="infoPad">
              <div class="row">
                <div class="col">
                  <label for="fname" class="lblCaption">First Name: <span>*</span></label>
                  <input type="text" name="fname" id="fname" />
                  <span id="msg_fname" class="error"></span> </div>
                <div class="col">
                  <label for="lname" class="lblCaption">Surname: <span>*</span></label>
                  <input type="text" name="lname" id="lname" />
                  <span id="msg_lname" class="error"></span> </div>
              </div>
              <div class="row">
                <div class="col zIndex3">
                  <label for="datepicker" class="lblCaption">DoB: <span>*</span></label>
                  <input type="text" name="datepicker" id="datepicker"  value="mm / dd / yyyy" onblur="this.value==''?this.value='mm / dd / yyyy':this.value=this.value" onfocus="this.value=='mm / dd / yyyy'?this.value='':this.value=this.value">
                  <span id="msg_datepicker" class="error"></span> </div>
                <div class="col">
                  <label for="gender" class="lblCaption">Gender: <span>*</span></label>
                  <div class="selectBox zIndex3"> <span class="selected" id="gender"></span>
                    <!--<span class="selectArrow"></span>-->
                    <div class="selectOptions"> <span class="selectOption">-- Please Choose --</span> <span class="selectOption">Male</span> <span class="selectOption">Female</span> </div>
                  </div>
                  <span id="msg_gender" class="error"></span> </div>
              </div>
              <div class="row last">
                <div class="col">
                  <label for="nationality" class="lblCaption">Nationality: <span>*</span></label>
                  <div class="selectBox zIndex2"> <span class="selected" id="nationality"></span>
                    <!--<span class="selectArrow"></span>-->
                    <div class="selectOptions"> <span class="selectOption">-- Please Choose --</span> <span class="selectOption">Option 1</span> <span class="selectOption">Option 2</span> </div>
                  </div>
                  <span id="msg_nationality" class="error"></span> </div>
                <div class="col">
                  <label class="marginLeft3px lblCaption">Music taste:</label>
                  <div class="selectBox zIndex1"> <span class="selected"></span>
                    <!--<span class="selectArrow"></span>-->
                    <div class="selectOptions"> <span class="selectOption">-- Please Choose --</span> <span class="selectOption">
                      <input type="checkbox" checked="checked" />
                      <label>Indie</label>
                      </span> <span class="selectOption">
                      <input type="checkbox" />
                      <label>Rock</label>
                      </span> <span class="selectOption">
                      <input type="checkbox" />
                      <label>Electronic</label>
                      </span> <span class="selectOption">
                      <input type="checkbox" />
                      <label>Hiphop</label>
                      </span> <span class="selectOption">
                      <input type="checkbox" checked="checked" />
                      <label>Pop</label>
                      </span> <span class="selectOption">
                      <input type="checkbox" />
                      <label>R&amp;B</label>
                      </span> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="step-2">
          <div class="formWrap">
            <div class="infoPad infoPad1">
              <div class="padBot14">
                <label for="labelname" class="lblCaption">Label Name</label>
                <input type="text" name="labelname" id="labelname" class="labelname" />
              </div>
              <div class="padBot14">
                <label for="file"  class="lblCaption">Upload Image</label>
                <input type="file" name="file" id="file" size="48" />
              </div>
              <div>
                <label for="profile"  class="lblCaption">Label Profile <span class="help"></span></label>
                <textarea cols="10" rows="10" id="profile" name="profile"></textarea>
              </div>
            </div>
            <div class="whatisthis">
              <h4>What is this?</h4>
              <p>At Crowdbass, your record label is your identity and your reputation. You will be able to sign bands through your label and promote bands through your label.<br />
                <br />
                You can change this information at any time, but in order to set you up, we need at least a record label.</p>
                </div>
          </div>
        </div>
        <div id="step-3">
          <div class="formWrap">
            <div class="socialAccounts">
              <div class="intro">
                <h3>Link your Crowdbass account to your social media profiles so you can easily promote your artists!</h3>
              </div>
              <div class="linkToFbTwt"> <span class="linkTo">Link to:</span> <a href="#" class="socialButtonTwitter">Twitter</a> <a href="#" class="socialButtonFacebook">Facebook</a> </div>
            </div>
          </div>
        </div>
        <div id="step-4">
          <div class="formWrap">
            <div class="lastStep"> <span class="legal">Last Step. The legal bits…</span>
              <div class="customScrollBg">
                <div class="scroll-pane">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
                  <ol>
                    <li>nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</li>
                    <li>nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
                    <li>nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</li>
                    <li>nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
                    <li>nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</li>
                    <li>nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
                    <li>nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</li>
                    <li>nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
                    <li>nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</li>
                    <li>nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
                    <li>nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</li>
                    <li>nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
                    <li>nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</li>
                    <li>nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
                  </ol>
                </div>
              </div>
            </div>
            <div class="linkToFbTwt launchDynamo">
              <div class="checkBoxContent">
                <input type="checkbox" name="checkbox" id="checkbox1" />
                <p>I agree to the Crowdbass Terms and Conditions as above.</p>
              </div>
              <div class="checkBoxContent">
                <input type="checkbox" name="checkbox" id="checkbox2" />
                <p>I want to hear about new music and products from Crowdbass and our partners</p>
              </div>
              <div class="checkBoxContent">
                <input type="checkbox" name="checkbox" id="checkbox3" />
                <p>I understand the <a href="#">Privacy Policy</a> and I'm fine with how you handle cookies</p>
              </div>
              <div class="checkBoxContent">
                <input id="registerButton" type="submit" value="Launch Dynamo Records!" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End SmartWizard Content -->
    </form>
  </div>
  <!-- End Registration -->
  <div id="footer" class="clearfix">
    <div class="footerWrap container_12"> <a href="#" ><img src="images/back-to-top.png" alt="Back to Top" class="backToTop" title="Back to Top"  /></a>
      <div class="footerLinks container_12">
        <div class="whyItWork">
          <ul>
            <li><a href="#" title="Why It Works">Why It Works</a></li>
            <li><a href="#" title="How It Works">How It Works</a>
              <ul>
                <li><a href="#">Discover</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">Promote</a></li>
                <li><a href="#">Become a Success</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="aboutCrow">
          <ul>
            <li><a href="#" title="About Crowdbass">About Crowdbass</a>
              <ul>
                <li><a href="#">How we pick our artists</a></li>
                <li><a href="#">Our Managers</a></li>
                <li><a href="#">Our Partners</a></li>
                <li><a href="#">Team: Crowdbass</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="faq">
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Terms &amp; Condition</a></li>
            <li><a href="#">Privacy Statement</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
        <div class="twitterWrap"> <img src="images/crowdbass-logo.png" alt="" /> <span>Follow us on Twitter</span>
          <div class="twitter"><img src="images/twiiter-icon.png" alt="" class="twitterIco" />
            <p>&quot;Have you got what it takes to become a music mogul?&quot;<br />
              <a href="#" class="link">#crowdbass</a></p>
            <p><a href="3">More Tweets</a></p>
          </div>
        </div>
      </div>
      <div class="copyRight clearfix">
        <p>Copyright &copy; 2012 Crowdbass. All rights reserved.</p>
        <p class="cookie">Cookie Use: Thiis site uses cookies yo make your browsing experience more enjoyable and help us develop a better site. Rest assured, we are very safe with your personal data.<br />
          You can change your cookie settings any time. You are in control.</p>
      </div>
    </div>
  </div>
</div>
<!-- Start Jquery -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#header").hover(function() {
             $("#mainNav").slideDown(400);
             //alert("call");
        }, function() {
             $("#mainNav").slideUp(400);
        });
    });
    </script>
<script type="text/javascript" src="js/jquery.smartWizard-2.0.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
    	// Smart Wizard     	
  		$('#wizard').smartWizard({transitionEffect:'slideleft',onLeaveStep:leaveAStepCallback,onFinish:onFinishCallback,enableFinishButton:false});

      function leaveAStepCallback(obj){
        var step_num= obj.attr('rel');
        return validateSteps(step_num);
      }
      
      function onFinishCallback(){
       if(validateAllSteps()){
        
		
		$('form').submit();
       }
      }
		});
	   
    function validateAllSteps(){
       var isStepValid = true;
       
       if(validateStep1() == false){
         isStepValid = false;
         $('#wizard').smartWizard('setError',{stepnum:1,iserror:true});         
       }else{
         $('#wizard').smartWizard('setError',{stepnum:1,iserror:false});
       }
       
       if(validateStep3() == false){
         isStepValid = false;
         $('#wizard').smartWizard('setError',{stepnum:3,iserror:true});         
       }else{
         $('#wizard').smartWizard('setError',{stepnum:3,iserror:false});
       }
       
       if(!isStepValid){
          $('#wizard').smartWizard('showMessage','Please correct the errors in the steps and continue');
       }
              
       return isStepValid;
    } 	
		
		
		function validateSteps(step){
		  var isStepValid = true;
      // validate step 1
      if(step == 1){
        if(validateStep1() == false ){
          isStepValid = false; 
          $('#wizard').smartWizard('showMessage','Please correct the errors in step'+step+ ' and click next.');
          $('#wizard').smartWizard('setError',{stepnum:step,iserror:true});         
        }else{
          $('#wizard').smartWizard('setError',{stepnum:step,iserror:false});
        }
      }
      
      // validate step3
      if(step == 3){ 
	  	
        if(validateStep3() == false ){
          isStepValid = false; 
          $('#wizard').smartWizard('showMessage','Please correct the errors in step'+step+ ' and click next.');
          $('#wizard').smartWizard('setError',{stepnum:step,iserror:true});         
        }else{
		
		 	$('#registerButton').val('Launch '+$('#labelname').val()+'');
	   //	$('.buttonFinish').show();
          $('#wizard').smartWizard('setError',{stepnum:step,iserror:false});
        }
      
	  }
      
      return isStepValid;
    }
		
		function validateStep1(){
       var isValid = true; 
	   
       // Validate Username
       var un = $('#fname').val();
       if(!un && un.length <= 0){
         isValid = false;
         $('#msg_fname').html('Please Enter First Name').show();
       }else{
         $('#msg_fname').html('').hide();
       }
      
	      // Validate Last name
       var un = $('#lname').val();
       if(!un && un.length <= 0){
         isValid = false;
         $('#msg_lname').html('Please Enter Last Name').show();
       }else{
         $('#msg_lname').html('').hide();
       }
     
	 
	   
	         // Validate Last name
       var un = $('#datepicker').val();
	  
       if(!un && un.length <= 0){
         isValid = false;
         $('#msg_datepicker').html('Please Enter Date of Birthday').show();
       }else{
	   		if(un=="mm / dd / yyyy"){
				  isValid = false;
       			  $('#msg_datepicker').html('Please Select your Date of Birthday').show();
			}else{
			
       		  $('#msg_datepicker').html('').hide();
			 }
		 
       }
	   
	   var gender = $("#gender").html();
    
    if((gender == '') || (gender == '-- Please Choose --'))
    {
         isValid = false;
         $('#msg_gender').html('Please Select Gender').show();
    }
    else
    {
       $('#msg_gender').html('').hide();
    }
    
     var nationality = $("#nationality").html();
    
    if((nationality == '') || (nationality == '-- Please Choose --'))
    {
         isValid = false;
         $('#msg_nationality').html('Please Select Nationality').show();
    }
    else
    {
       $('#msg_nationality').html('').hide();
    }
	   
	   
	            // Validate Gender
 
 /*      var un = $('#gender').val();
	   alert(un);
	  
       if(!un && un.length <= 0){
         isValid = false;
         $('#msg_gender').html('Please Select Gender').show();
       }else{
	   		if(un=="-- Please Choose --"){
				  isValid = false;
       			  $('#msg_gender').html('Please Select Gender').show();
			}else{
			
       		  $('#msg_gender').html('').hide();
			 }
		 
       }*/
	   
	            // Validate Nationality
   /*    var un = $('#nationality').val();
	  
       if(!un && un.length <= 0){
         isValid = false;
         $('#msg_nationality').html('Please Select Nationality').show();
       }else{
	   		if(un=="-- Please Choose --"){
				  isValid = false;
       			  $('#msg_nationality').html('Please Select Nationality').show();
			}else{
			
       		  $('#msg_nationality').html('').hide();
			 }
		 
       }*/
      
       // validate password
    //   var pw = $('#password').val();
//       if(!pw && pw.length <= 0){
//         isValid = false;
//         $('#msg_password').html('Please fill password').show();         
//       }else{
//         $('#msg_password').html('').hide();
//       }
       
       // validate confirm password
   //    var cpw = $('#cpassword').val();
//       if(!cpw && cpw.length <= 0){
//         isValid = false;
//         $('#msg_cpassword').html('Please fill confirm password').show();         
//       }else{
//         $('#msg_cpassword').html('').hide();
//       }  
//       
       // validate password match
    //   if(pw && pw.length > 0 && cpw && cpw.length > 0){
//         if(pw != cpw){
//           isValid = false;
//           $('#msg_cpassword').html('Password mismatch').show();            
//         }else{
//           $('#msg_cpassword').html('').hide();
//         }
//       }
       return isValid;
    }
    
    function validateStep3(){
      var isValid = true;    
      //validate email  email
    
/*	  var email = $('#email').val();
       if(email && email.length > 0){
         if(!isValidEmailAddress(email)){
           isValid = false;
           $('#msg_email').html('Email is invalid').show();           
         }else{
          $('#msg_email').html('').hide();
         }
       }else{
         isValid = false;
         $('#msg_email').html('Please enter email').show();
       }     */  
      return isValid;

    }
    
    // Email Validation
    function isValidEmailAddress(emailAddress) {
      var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
      return pattern.test(emailAddress);
    } 
		
		
</script>
<!-- Start Custom Input File Jquery -->
<script type="text/javascript" src="js/input-file.js"></script>
<script type="text/javascript">
        // Run capabilities test
        enhance({
            loadScripts: [
                'js/jQuery.fileinput.js',
                'js/file.js'
            ]
        });
    </script>
<!-- Start Custom Select Jquery -->
<script type='text/javascript'><!--
		$(document).ready(function() {
			enableSelectBoxes();
		});
		
		function enableSelectBoxes(){
			$('div.selectBox').each(function(){
				$(this).children('span.selected').html($(this).children('div.selectOptions').children('span.selectOption:first').html());
				$(this).attr('value',$(this).children('div.selectOptions').children('span.selectOption:first').attr('value'));
				
				$(this).children('span.selected,span.selectArrow').click(function(){
					if($(this).parent().children('div.selectOptions').css('display') == 'none'){
						$(this).parent().children('div.selectOptions').css('display','block');
					}
					else
					{
						$(this).parent().children('div.selectOptions').css('display','none');
					}
				});
				
				$(this).find('span.selectOption').click(function(){
					$(this).parent().css('display','none');
					$(this).closest('div.selectBox').attr('value',$(this).attr('value'));
					$(this).parent().siblings('span.selected').html($(this).html());
				});
			});				
		}//-->
    </script>
<!-- Start Custom Checkbox Jquery -->
<script type="text/javascript" src="js/jquery.screwdefaultbuttons.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(checkboxCustom){
		$('input:checkbox').screwDefaultButtons({
			checked:"url(images/checkbox-checked.png)",
			unchecked:"url(images/checkbox-unchecked.png)",
			width:18,
			height:16
		});
	});
	</script>
<!-- Start Date Picker -->
<script type="text/javascript" src="js/jquery.ui.core.js"></script>
<script type="text/javascript" src="js/jquery.ui.widget.js"></script>
<script type="text/javascript" src="js/jquery.ui.datepicker.js"></script>
<script type="text/javascript">
 	$( "#datepicker" ).datepicker({
			 minDate: new Date(1900,1-1,1), maxDate: '-18Y',
      dateFormat: 'dd/mm/yy',
      defaultDate: new Date(1970,1-1,1),
      changeMonth: true,
      changeYear: true,
      yearRange: '-110:-18'
		});
				$("span.cancel").click(function() {
				  $('.validationMsg').fadeOut('slow', function() {
  					//  alert('Animation complete.');
 					 });
		});
    </script>
<!-- the mousewheel plugin -->
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<!-- the jScrollPane script -->
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
<!-- End jScrollPanel plugin -->
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
<script type="text/javascript">
	 	$('.scroll-pane').jScrollPane();
	 	$('.fancybox').fancybox();
			
	$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'registration-popup.php',
					type : 'iframe',
					padding : 0,
					width: 935
				});
			});
			
			
	//$('#foo').toggleClass(className, addOrRemove);
	$("a.socialButtonTwitter").click(function(){
  		  //$("li.x").removeClass("xshown").addClass("xhidden");
   		 $('a.socialButtonTwitter').toggleClass("socialBtnActive");
	});
			 
	$("a.socialButtonFacebook").click(function(){
  		  //$("li.x").removeClass("xshown").addClass("xhidden");
		  $('a.socialButtonFacebook').toggleClass("socialfaceBtnActive");
   		// $(this).addClass("socialfaceBtnActive");
	});
	</script>
<!-- Start CSS Browser -->
<script type="text/javascript" src="js/css_browser_selector.js"></script>
<!-- End Jquery -->
</body>
</html>
