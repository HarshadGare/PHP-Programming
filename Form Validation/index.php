<?php

  mysql_connect('localhost','root','') or die('Connection Error');
    mysql_select_db('job') or die('database selection Error');

$message = '';
if(isset($_POST["email"]))
{
  extract($_POST);  
  $file_name = $_FILES['resume']['name'];
 $query = "
 INSERT INTO details (name,email,mobile_no,age,position,city,experience,resume,salary,message) VALUES ('$name','$email','$mobile_no','$age','$position','$city','$experience','$file_name','$salary','$message')";

 $result = mysql_query($query);


 if($result)
 {
                  
                     $tmp_name = $_FILES['resume']['tmp_name'];
                     move_uploaded_file($tmp_name,"resume/".$file_name);

                    echo "<script> alert('Correct')</script>";
 }
 else
 {
  echo "<script> alert('Wrong')</script>";

 }
}
?>

<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration| Umang2k19 TechnoCultural Event</title>
  <script src="js/jquery-3.4.1.slim.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <style>
  .box
  {
   width:100%;
   margin:0 auto;
  }
   .active_tab1
  {
   background-color:#fff;
   color:#333;
   font-weight: 600;
  }
  .inactive_tab1
  {
   background-color: #f5f5f5;
   color: #333;
   cursor: not-allowed;
  }
  .has-error
  {
   border-color:#cc0000;
   background-color:#ffff99;
  }
  </style>
 </head>
 

 <body>
 <br />
  <div class="container box ">
   <br />
   <h2 align="center"> Job Request Form</h2><br />
   <?php $message ?>
   <form method="post" id="register_form"  enctype="multipart/form-data">
    
    <div class="tab-content" style="margin-top:16px;">
     <div class="tab-pane active" id="login_details">
      <div class="panel panel-default">
       <div class="panel-body">
        
       <div class="d-flex"> 
        <div class="form-group col-4">
         <label>Your Name*</label>
         <input type="text" name="name" id="name" class="form-control " />
         <span id="error_name" class="text-danger"></span>
        </div>
        <div class="form-group col-4">
         <label>*Email ID</label>
         <input type="text" name="email" id="email" class="form-control" />
         <span id="error_email" class="text-danger"></span>
        </div>
        
        <div class="form-group col-4">
         <label>*Your Mobile No.</label>
         <input type="text" name="mobile_no" id="mobile_no" class="form-control" />
         <span id="error_mobile_no" class="text-danger"></span>
        </div>
        </div>

        <div class="d-flex">
        <div class="form-group col-4">
         <label>*Your Age</label>
         <input type="text" name="age" id="age" class="form-control" />
         <span id="error_age" class="text-danger"></span>
        </div>

        <div class="form-group col-4">
         <label>*Position</label>
         <select name="position" id="position" class="form-control">
           <option value="">--Select Position--</option>
           <option value="Web Developer">Web Developer</option>
         </select>
         <span id="error_position" class="text-danger"></span>
        </div>
        
        <div class="form-group col-4">
         <label>*Your City</label>
         <input type="text" name="city" id="city" class="form-control" />
         <span id="error_city" class="text-danger"></span>
        </div>
      </div>

      <div class="d-flex">  
        <div class="form-group col-4">
         <label>*Experience</label>
         <input type="text" name="experience" id="experience" class="form-control" />
         <span id="error_experience" class="text-danger"></span>
        </div>

        <div class="form-group col-4">
            <label for="resume">*Upload Your Resume</label>
            <input type="file" name="resume" id="resume" class="form-control">
            <span id="error_resume" class="text-danger"></span>
        </div>

        <div class="form-group col-4">
         <label>*Expected Salary (Per month in INR)</label>
         <input type="text" name="salary" id="salary" class="form-control" />
         <span id="error_salary" class="text-danger"></span>
        </div>
       </div> 

        <div class="form-group">
         <label>Your Message</label>
         <textarea name="message" id="message" class="form-control" /></textarea>
         <span id="error_message" class="text-danger"></span>
        </div>

        <br />
          <div align="center">
         <button type="button" name="btn_contact_details" id="btn_contact_details" class="btn btn-primary btn-lg">Register</button>
        </div>
        <br />
       </div>
      </div>
     </div>


     </div>
     
    </div>
   


   </form>
   </div>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
 $('#btn_contact_details').click(function(){
  
  var error_email = '';
 // var error_password = '';
   var error_name = '';
  var error_age = '';
  var error_city = '';
  
  var error_mobile_no = '';
  var mobile_validation = /^\d{10}$/;
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  
  if($.trim($('#name').val()).length == 0)
  {
   error_name = 'Name is required';
   $('#error_name').text(error_name);
   $('#name').addClass('has-error');
  }
  else
  {
   error_name = '';
   $('#error_name').text(error_name);
   $('#name').removeClass('has-error');
  }


  if($.trim($('#email').val()).length == 0)
  {
   error_email = 'Email is required';
   $('#error_email').text(error_email);
   $('#email').addClass('has-error');
  }
  else
  {
   if (!filter.test($('#email').val()))
   {
    error_email = 'Invalid Email';
    $('#error_email').text(error_email);
    $('#email').addClass('has-error');
   }
   else
   {
    error_email = '';
    $('#error_email').text(error_email);
    $('#email').removeClass('has-error');
   }
  }


   if($.trim($('#mobile_no').val()).length == 0)
  {
   error_mobile_no = 'Mobile Number is required';
   $('#error_mobile_no').text(error_mobile_no);
   $('#mobile_no').addClass('has-error');
  }
  else
  {
   if (!mobile_validation.test($('#mobile_no').val()))
   {
    error_mobile_no = 'Invalid Mobile Number';
    $('#error_mobile_no').text(error_mobile_no);
    $('#mobile_no').addClass('has-error');
   }
   else
   {
    error_mobile_no = '';
    $('#error_mobile_no').text(error_mobile_no);
    $('#mobile_no').removeClass('has-error');
   }
  }


  if($.trim($('#age').val()).length == 0)
  {
   error_age = 'age is required';
   $('#error_age').text(error_age);
   $('#age').addClass('has-error');
  }
  else
  {
   error_age = '';
   $('#error_age').text(error_age);
   $('#age').removeClass('has-error');
  }



  
  if($.trim($('#position').val()).length == 0)
  {
   error_position = 'Position is required';
   $('#error_position').text(error_position);
   $('#position').addClass('has-error');
  }
  else
  {
   error_position = '';
   $('#error_position').text(error_position);
   $('#position').removeClass('has-error');
  }

  if($.trim($('#city').val()).length == 0)
  {
   error_city = 'City is required';
   $('#error_city').text(error_city);
   $('#city').addClass('has-error');
  }
  else
  {
   error_City = '';
   $('#error_City').text(error_City);
   $('#City').removeClass('has-error');
  }



  if($.trim($('#experience').val()).length == 0)
  {
   error_experience = 'experience is required';
   $('#error_experience').text(error_experience);
   $('#experience').addClass('has-error');
  }
  else
  {
   error_experience = '';
   $('#error_experience').text(error_experience);
   $('#experience').removeClass('has-error');
  }

  if($.trim($('#resume').val()).length == 0)
  {
   error_resume = 'Resume is required';
   $('#error_resume').text(error_resume);
   $('#resume').addClass('has-error');
  }
  else
  {
   error_resume = '';
   $('#error_resume').text(error_resume);
   $('#resume').removeClass('has-error');
  }

  if($.trim($('#salary').val()).length == 0)
  {
   error_salary = 'Salary is required';
   $('#error_salary').text(error_salary);
   $('#salary').addClass('has-error');
  }
  else
  {
   error_salary = '';
   $('#error_salary').text(error_salary);
   $('#salary').removeClass('has-error');
  }

/*
   if($.trim($('#message').val()).length == 0)
  {
   error_message = 'Message is required';
   $('#error_message').text(error_message);
   $('#message').addClass('has-error');
  }
  else
  {
   error_message = '';
   $('#error_message').text(error_message);
   $('#message').removeClass('has-error');
  }

*/
  
   if(error_email != '' || error_name != '' || error_mobile_no != '' || error_city != '' || error_salary != '' || error_experience != '' || error_age != '' || error_resume != '' || error_position != '')
  {
   return false;
  }
  else
  {
    $("#register_form").submit();
  }
 });
 

 
 

 
});
</script>
