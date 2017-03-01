<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Questions And Answers</title>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet"> 
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Material Design -->
  <link href="css/bootstrap-material-design.min.css" rel="stylesheet">
  <link href="css/ripples.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <!-- jQuery -->
  <script src="js/jquery-1.10.2.min.js"></script>
</head>

<body>
    <div class="header">
    	<div class="container">
    		<a href="#"><img src="img/logo.png" /></a>
        </div>
    </div>
    <div class="aq_top">
    	<div class="container">
        <h1>
          We are organizing a survey to understand people's view about healthcare system in Bangalore. Your valuable feedback will improve healthcare facilities in your city. We will love to send you a free gift for your participation in this Nobel purpose.
        </h1>
    </div>
    </div>
    
    

<form name="serveyData" method="post" action="submitservey.php">
<div class="clr20"></div> 
  <div class="container qa_page">
    
     <h1>According to study, most of the doctor visits can be done safely through  online video call (telemedicince) with doctor specially for first doctor visit or follow up visits which is not an emergency. We want to know your views on this.</h1>

      <h2>1. Are you comfortable consulting a doctor online through a video call for your first visit or a follow up visit ?</h2>
      <div class="checkbox">
        <div class="togglebutton">
           <label class="left_15">
            No &nbsp; <input type="checkbox" name="answer1"> &nbsp; Yes
          </label>
          <div class="clr20"></div>
          <input type="text" class="custom_box" placeholder="give a comment" name="answer11">
        </div>
      </div>
          
      <h2>2. Would you use online video call facility to connect a specialist in order to get a second opinion for any critical disease ?</h2>
      <div class="radio radio-primary">
        <label>
          <input name="answer2" id="optionsRadios1" value="Yes" type="radio">
          Yes
        </label>
      </div>
      <div class="radio radio-primary">
        <label>
          <input name="answer2" id="optionsRadios2" value="No" checked type="radio">
          No
        </label>
      </div>
      <div class="radio radio-primary">
        <label>
          <input name="answer2" id="optionsRadios3" value="May be" type="radio">
          May be
        </label>
      </div>
          
      <h2>3. Have you ever consulted a doctor online through video call/chat/telephone ?</h2>
      <div class="checkbox">
        <div class="togglebutton">
           <label class="left_15">
            No &nbsp; <input type="checkbox" name="answer3"> &nbsp; Yes
          </label>
        </div>
      </div>

      <h2>4. Normally how frequently do you visit a doctor for you or your family ?</h2>
     
        <input type="text" class="custom_box" placeholder="10 times in a year" name="answer4">
      
      
      <h2>5. For what medical reasons do you mostly need to consult a doctor ?</h2>
      <div class="radio radio-primary">
        <label class="otherans52">
          <input name="answer5" value="Common medical problems such as fever, flu, common cold, digestive problems etc" checked="" type="radio">
          Common medical problems such as fever, flu, common cold, digestive problems etc
        </label>
      </div>
      <div class="radio radio-primary">
        <label class="otherans52">
          <input name="answer5" value="Diabetes" type="radio">
          Diabetes
        </label>
      </div>
      <div class="radio radio-primary">
        <label class="otherans52">
          <input name="answer5" value="cholesterol" type="radio">
          cholesterol
        </label>
      </div>
      <div class="radio radio-primary">
        <label class="otherans52">
          <input name="answer5" value="Chronic diseases such as arthritis, cardiovascular disease, obesity, cancer etc" type="radio">
          Chronic diseases such as arthritis, cardiovascular disease, obesity, cancer etc
        </label>
      </div>
      <div class="radio radio-primary">
        <label class="otherans5">
          <input name="answer5" value="other" type="radio">
          other (please specify box)
        </label>
        <div class="clr20"></div>
        <input type="text" class="otherans51" name="answer51" placeholder="Please specify here">
      </div>
      
      <h2>6. How much do you normally pay to a doctor for one time consultation ?</h2>
      <div class="radio radio-primary">
        <input id="answer6" class="custom_box" name="answer6" type="text" placeholder="upto INR 1000">
      </div>

      <h2>7. If you Could Consult a doctor online from the Convenience of your home/office/your preferred location, what amount would you be comfortable to spend ?</h2>
      <div class="radio radio-primary">
        <input id="answer7" class="custom_box" name="answer7" type="text" placeholder="INR 500 to INR 1000">
      </div>
  </div>
 <div class="clr20"></div> <div class="clr20"></div> <div class="clr20"></div> 
  <div class="footer">
  
   <div class="container">
   <h2>To send a free gift to you, we need your contact details.</h2>
       <div class="row">
           <div class="col-lg-4">
                  <div class="form-group">
                  <label class="control-label" for="inputLarge">Name :</label>
                  <input class="form-control input-lg" id="name" name="name" type="text" required="true">
                  </div>
                  <span class="nameerrormsg error_msg" style="display:none;"></span>
              </div>
              
              <div class="col-lg-4">
                  <div class="form-group">
                    <label class="control-label" for="inputLarge">Email:</label>
                    <input class="form-control input-lg" id="email" name="email" type="email" required="true">
                  </div>
                  <span class="emlerrormsg error_msg" style="display:none;"></span>
              </div>
              
              <div class="col-lg-4">
                  <div class="form-group">
                    <label class="control-label" for="inputLarge">Phone:</label>
                    <input class="form-control input-lg" id="phone" name="phone" type="tel" pattern="[789][0-9]{9}" required="true">
                  </div>
                  <span class="phnerrormsg error_msg" style="display:none;"></span>
              </div>
              
              <div class="col-lg-12">
                  <div class="form-group">
                  <label class="control-label" for="inputLarge">Address :</label>
                  <input class="form-control input-lg" id="address" name="address" type="text">
                  </div>
                  <span class="adderrormsg error_msg" style="display:none;"></span>
                  

                  <button type="button" class="btn btn-raised btn_1 pull-right" id="submbtn" onClick="checkValidForm();">Submit</button>

                  <div class="g-recaptcha pull-right" data-sitekey="6LcLUBcUAAAAAGcgiI78eFOvbT7iuJbLR7vgWi6j"></div>

                  <div class="clr20"></div>
              </div>
          </div>
      </div>
  </div>

</form>
<!-- google capcha -->
<script src='https://www.google.com/recaptcha/api.js'></script>
<!-- Custom js -->
<script src="js/custom.js"></script>
<!-- Material Design for Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<script src="js/material.min.js"></script>
<script src="js/ripples.min.js"></script>        
<script>
 	$.material.init();
 	$('.otherans5').click(function(){
		$('.otherans51').show();
	});
 	$('.otherans52').click(function(){
		$('.otherans51').hide();
	});
</script>
</body>
</html>