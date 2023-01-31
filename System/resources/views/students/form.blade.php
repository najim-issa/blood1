

@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION FORM</title>
</head>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="/css/style.css" rel="stylesheet">
<body>
<div class="container">
		<div class="title">REGISTRATION</div>
		
			<form action="{{url('/form_action')}}" method="post">
			@csrf
					<div class="user-details">
							<div class="input-box" > 
								<span class="user-details">Full_Name</span>
								<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
								<input type="text" name="Full_Name" placeholder="Enter Name" required>		
							</div><br>
					<div class="input-box">
							<span class="user-details">User_Name</span>
							<input type="text" name="User_Name" placeholder="UserName" required>
				   </div><br>


				   <div class="input-box">
		                        <span class="user-details">Age</span>
		                        <input type="text" name="Age"  placeholder="Enter your Age" required>
	               </div><br>
                            
							<div class="input-box">
		                        <span class="user-details">Email</span>
		                        <input type="Email" name="Email" placeholder="Enter your Email" required>
	               </div><br>
	                        <div class="input-box">
		                        <span class="user-details">Phone_number</span>
		                        <input type="text" name="Phone_number"  placeholder="Enter your Email" required>
	               </div><br>
                            <div class="input-box">
	                             <span class="user-details">Address</span>
                                 <input type="text" name="Address" placeholder="Enter your Address" required>
                   </div><br>
		   <div class="input-box">
	                             <span class="user-details">Password</span>
                                 <input type="Password" name="Password" placeholder="Enter your Password" required>
                   </div><br>
                           <div class="input-box">
	                             <span class="user-details">Confirm_Password</span>
                                 <input type="Password" name="Confirm_Password" placeholder="Enter your Password" required>
                   </div><br>
        
                          <div class="button">
	                             <input type="submit" name="submit" value="Register">
	                             </div>
								
            </form>
        </div>
</body>
</html>
