

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


<style >
	


body{
	background: url(pic.jpg);
	background-position: center;
	background-size: cover;
}
.btn{
	color: red;
	background-color: aquamarine;
	position: relative;
	left: 35%!important;
	padding: 10px 30px;;
}


.form-group{
	width: 75%;
}


</style>
</head>
<body>

<br>

<section>
	
		
	
			
			<!-- <form action="code.php" onsubmit="return validation()" class="bg-light m-4">
				
				<div  class="form-group">
					<label for="user" class="font-weight-bold"> Username: </label>
					<input type="text" name="user" class="form-control" id="user" autocomplete="off">
					<span id="username" class="text-danger font-weight-bold"> </span>
				</div>

				<div class="form-group">
					<label class="font-weight-bold"> Password: </label>
					<input type="text" name="pass" class="form-control" id="pass" autocomplete="off">
					<span id="passwords" class="text-danger font-weight-bold"> </span>
				</div>

				<div class="form-group">
					<label class="font-weight-bold"> Confirm Password: </label>
					<input type="text" name="conpass" class="form-control" id="conpass" autocomplete="off">
					<span id="confrmpass" class="text-danger font-weight-bold"> </span>
				</div>

				<div class="form-group">
					<label class="font-weight-bold"> Mobile Number: </label>
					<input type="text" name="mobile" class="form-control" id="mobileNumber" autocomplete="off">
					<span id="mobileno" class="text-danger font-weight-bold"> </span>
				</div>

				<div class="form-group">
					<label class="font-weight-bold"> Email: </label>
					<input type="text" name="email" class="form-control" id="emails" autocomplete="off">
					<span id="emailids" class="text-danger font-weight-bold"> </span>
				</div>

				<input type="submit" name="registerstudent" value="submit" class="btn btn-success mb-5" 	autocomplete="off">


			</form><br><br>
 -->


 <div  class="d-flex justify-content-center mt-4  ">
    <div style="width:500px; height:650px; " class="card ">
        <div class="card-header">
            <h3 class="text-info font-weight-bold text-center  " > Student Registration Form</h3>
        </div>

      <form action="regcode.php" class="forms" id="login" onsubmit="return validation()" method="POST" enctype="multipart/form-data">

        
<div class="card-body bg-success">
            <div class="form-group">
                <label class="pl-5 text-dark font-weight-bold"> Username </label>
                <input  type="text" name="username" id="username" class="form-control ml-5" placeholder="Enter Username" required>
              	<span id="message1" class="text-danger font-weight-bold"> </span>

            </div>
            <div class="form-group">
                <label class="pl-5 text-dark font-weight-bold">Email</label>
                <input   type="email" name="email" id="email" class="form-control ml-5" placeholder="Enter Email" required>
                	<span id="message2" class="text-danger font-weight-bold"> </span>
            </div>
            <div class="form-group">
                <label class="pl-5 text-dark font-weight-bold">Password</label>
                <input  type="password" name="password" id="password" class="form-control ml-5" placeholder="Enter Password" required>
               	<span id="message3" class="text-danger font-weight-bold"> </span>

            </div>
            <div class="form-group">
                <label class="pl-5 text-dark font-weight-bold">Confirm Password</label>
                <input  type="password" name="compass" id="compass" class="form-control ml-5" placeholder="Confirm Password" required>
              <span id="message4" class="text-danger font-weight-bold w-100"> </span>
            </div>
      
        <input type="hidden" name="usertype" value="student">
         

        <div class="form-group">
                <label class="pl-5 text-dark font-weight-bold">upload Image</label>
                <input   type="file" name="st_image" id="st_image"  required>
			</div>
			<p class="text-white ">Already User <a href="login.html">login</a></p>
 
            <button type="submit"  name="submit" onClick="confSubmit(this.form);" class="btn btn-info text-dark ">Submit</button>
		<br><br>
</div>
      </form>
	</div>
</div> 
</div> 

</section>


<script type="text/javascript">

		


    function validation() {
      var letter = /^[A-Za-z ]+$/;

      var EmailValid = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      var uname = document.forms["login"]["username"].value;
      var p1 = document.forms["login"]["password"].value;
      var Email = document.forms["login"]["email"].value;
      var p2 = document.forms["login"]["compass"].value;
 
      var m=0;

 if (!(Email.match(EmailValid))){
        document.getElementById('message2').innerHTML=" **sorry invalid email";
        m=1;
      }
      if ((uname.length >= 30) || (uname.length <= 4)) {
        if ((uname.length) >= 30) {
          document.getElementById('message1').innerHTML=" **Sorry username is to large";
          m=1;
        } else {
          document.getElementById('message1').innerHTML=" **Sorry username is very samll";
          m=1;
        }
      }
      if (!(uname.match(letter))) {
    
        document.getElementById('message1').innerHTML=" **username must have alphabet only";
        m=1;
      }

      if (p1.length >= 12) {
    
        document.getElementById('message3').innerHTML=" **Password Length is to large";
        m=1;
      }
  
      if (p2.length >= 12) {
       
        document.getElementById('message4').innerHTML=" **Password Length is to large";
        m=1;
      }
      if (p2.length <= 5) {
        
        document.getElementById('message4').innerHTML=" **Password  is weak";
        m=1;
      }
      if (p1 != p2) {
  
        document.getElementById('message4').innerHTML=" **Password does not match with confirm password";
        m=1;
      }
      if(true)
      {
        if(m==1)
        {
          return false;
        }
        else{
          return true;
        }
      }
    }




	</script>

      <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>





	<script type="text/javascript">

function confSubmit(form) {
if (confirm("Are you sure you want to submit the form?")) {
form.submit();
}

else {
alert("You decided to not submit the form!");
}
}
</script>

<script type="text/javascript">

$('form').on('submit',function(){
           alert('Student data inserted successfully');
});


</script> 


	

</body>
</html>








