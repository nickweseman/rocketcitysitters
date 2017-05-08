<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
<?php 
  require_once('meta.php');
?>
    <link rel="stylesheet" type="text/css" href="default.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="apply.css" media="screen" />

    <title>Find babysitters in Huntsville, AL - Rocket City Sitters</title>
  </head>

  <body>
<?php
  require_once('header.php');
?>
    <div class="main">
      <div class="content">
      <!-- ********** Content Starts Here ********************************************* -->
      <h1>Submit Your Family Information Form</h1>
      <form method="post" action="applyfamily.php">
        <h2>Parent Information</h2>
        <label for="name">Name(s)</label>
		    <input type="text" id="name" name="name" /><br />        
        <label for="address">Home Address</label>
        <input type="text" id="address" name="address" /><br />        
        <label for="homephone">Home Phone</label>
        <input type="text" id="homephone" name="homephone" /><br />        
        <label for="cellphone">Cell Phone</label>
        <input type="text" id="cellphone" name="cellphone" /><br />        
        <label for="workphone">Work Phone</label>
        <input type="text" id="workphone" name="workphone" /><br />        
        <label for="email">Email Address</label>
        <input type="text" id="email" name="email" /><br />        
        <label for="directions"><strong>Provide any relevant information for locating your home,</strong> including geographical
area, landmarks, or directions from nearest intersection.</label>
        <textarea id="directions" name="directions"></textarea><br /><br />
        
        <hr />
        <h2>Child Information</h2><br />
        <h3>Child 1</h3><br />
        <label for="child1name">Full Name</label>
        <input type="text" id="child1name" name="child1name" /><br />        
        <input type="radio" name="child1sex" value="m" /> M 
        <input type="radio" name="child1sex" value="f" /> F <br />         
        <label for="child1dob">Date of Birth</label>
        <input type="text" id="child1dob" name="child1dob" /><br />        
        <label for="child1age">Age</label>
        <input type="text" id="child1age" name="child1age" /><br />        
        <label for="child1medical">Medical Info*</label>
        <input type="text" id="child1medical" name="child1medical" /><br />
        
        <h3>Child 2</h3><br />
        <label for="child2name">Full Name</label>
        <input type="text" id="child2name" name="child2name" /><br />
        <input type="radio" name="child2sex" value="m" /> M 
        <input type="radio" name="child2sex" value="f" /> F <br /> 
        <label for="child2dob">Date of Birth</label>
        <input type="text" id="child2dob" name="child2dob" /><br />
        <label for="child2age">Age</label>
        <input type="text" id="child2age" name="child2age" /><br />
        <label for="child2medical">Medical Info*</label>
        <input type="text" id="child2medical" name="child2medical" /><br />
        
        <h3>Child 3</h3><br />
        <label for="child3name">Full Name</label>
        <input type="text" id="child3name" name="child3name" /><br />        
        <input type="radio" name="child3sex" value="m" /> M 
        <input type="radio" name="child3sex" value="f" /> F <br />         
        <label for="child3dob">Date of Birth</label>
        <input type="text" id="child3dob" name="child3dob" /><br />        
        <label for="child3age">Age</label>
        <input type="text" id="child3age" name="child3age" /><br />        
        <label for="child3medical">Medical Info*</label>
        <input type="text" id="child3medical" name="child3medical" /><br />
        
        <h3>Child 4</h3><br />
        <label for="child4name">Full Name</label>
        <input type="text" id="child4name" name="child4name" /><br />        
        <input type="radio" name="child4sex" value="m" /> M 
        <input type="radio" name="child4sex" value="f" /> F <br />         
        <label for="child4dob">Date of Birth</label>
        <input type="text" id="child4dob" name="child4dob" /><br />        
        <label for="child4age">Age</label>
        <input type="text" id="child4age" name="child4age" /><br />        
        <label for="child4medical">Medical Info*</label>
        <input type="text" id="child4medical" name="child4medical" /><br />
        
        <h3>Child 5</h3><br />
        <label for="child5name">Full Name</label>
        <input type="text" id="child5name" name="child5name" /><br />        
        <input type="radio" name="child5sex" value="m" /> M 
        <input type="radio" name="child5sex" value="f" /> F <br />         
        <label for="child5dob">Date of Birth</label>
        <input type="text" id="child5dob" name="child5dob" /><br />        
        <label for="child5age">Age</label>
        <input type="text" id="child5age" name="child5age" /><br />        
        <label for="child5medical">Medical Info*</label>
        <input type="text" id="child5medical" name="child5medical" /><br />
        
        <p>*Include food/drug allerlgies, current medications, medical concerns, and pediatrician's information</p>
        <hr />
        
        <label for="aboutchildren"><strong>Tell us about your children</strong> (developmental level (diapers, solid food, etc.), likes and
dislikes, special needs, etc.)</label>
        <textarea id="aboutchildren" name="aboutchildren"></textarea><br />
        
        <label for="expectations"><strong>Tell us about your expectations for a babysitter</strong> (housework, cooking, pet care,
transportation, general guidelines…)</label>
        <textarea id="expectations" name="expectations"></textarea><br />
        
        <label for="pets">Do you have pets in the home?</label>
        <input type="radio" name="pets" value="y" /> Y 
        <input type="radio" name="pets" value="n" /> N <br />
        <label for="petstype">If yes, what type?</label>
        <textarea id="petstype" name="petstype"></textarea><br />
        
        <label for="genderpref">Do you have gender or age preferences for sitters?</label>
        <input type="radio" name="genderpref" value="m" /> M 
        <input type="radio" name="genderpref" value="f" /> F 
        <input type="radio" name="genderpref" value="either" /> Doesn't Matter
        <label for="agepref">Age</label>
        <input type="text" id="agepref" name="agepref" /><br />
        
        <label for="bestcontact">What is the best time and preferred method for contact?</label>
        <textarea id="bestcontact" name="bestcontact"></textarea><br />
        
        In case of emergency, if you cannot be reached, who else can we contact?
        <label for="emergencyname">Name</label>
        <input type="text" id="emergencyname" name="emergencyname" /><br />
        <label for="emergencyrelation">Relation to Child</label>
        <input type="text" id="emergencyrelation" name="emergencyrelation" /><br />
        <label for="emergencyphone">Phone Number</label>
        <input type="text" id="emergencyphone" name="emergencyphone" /><br />
        
        <label for="referral">How did you hear about Rocket City Sitters?</label>
        <input type="text" id="referral" name="referral" /><br />
        
        <input type="submit" value="Submit" name="submit" />
		  </form>
      
<?php
  		$to = 'trumpernickel@yahoo.com';
  		$subject = 'Family Info Form - ' . $_POST['name'];
  		$msg = $_POST['name'] . 'submitted a family information form\n' .
    				"Test\n";
  		mail($to, $subject, $msg, 'From:info@rocketcitysitters.com');
?>     
      <!-- ****** Content Ends Here ****************************************************** -->
      </div>
<?php
  require_once('sidebar.php');
?>      
    </div>
<?php
  require_once('footer.php');
?>
  </body>
</html>
