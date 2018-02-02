<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("inc/meta.php"); ?>
	<title>Adoption Form</title>
</head>
<body>
	<header>
		<?php include("inc/nav.php"); ?>  
	</header>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="introHead">Adoption Form</h1>
				<section class="adoptInfo">
					<p>Thanks for visiting Houndhaven’s web site. We are located in central Florida near Orlando but will place dogs anywhere in Florida that an excellent home is waiting. If you have questions about Houndhaven or want to inquire about one of our dogs or puppies, feel free to contact us using the form below. We will reply as soon as possible.</p>

					<p>In order for us to successfully process your request, please <a href="#">read and accept our Adoption Policies</a>, then complete the following form accurately and in its entirety. Thank you.</p>
				</section>
				<section id="contactInfo">
					<form method="post" action="http://cscie12.dce.harvard.edu/echo" class="adoptForm" id="adoptForm">
						<div class="form-row justify-content-center">
							<div class="col-12 col-md-10">
								<fieldset>
									<legend>Contact Information</legend>
									<div class="form-row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="name">Name</label>							
												<input type="text" class="form-control" name="name" placeholder="Enter Name" id="name">
											</div>
											<div class="form-group">							
												<label for="streetAddress">Street Address</label>
												<input type="text" class="form-control" name="streetAddress" placeholder="Street Address" id="streetAddress">
											</div>								
											<div class="form-group">							
												<label for="streetAddress2">Address Line 2</label>
												<input type="text" class="form-control" name="streetAddress2" placeholder="Address Line 2" id="streetAddress2">
											</div>
											<div class="form-group">							
												<label for="city">City</label>
												<input type="text" class="form-control" name="city" placeholder="City" id="city">
											</div>
											<div class="form-group">
												<label for="inputState">State</label>
												<select id="inputState" class="form-control" name="state">
													<option selected>Choose...</option>
													<option value="AK">Alaska</option>
													<option value="AL">Alabama</option>
													<option value="AR">Arkansas</option>
													<option value="AZ">Arizona</option>
													<option value="CA">California</option>
													<option value="CO">Colorado</option>
													<option value="CT">Connecticut</option>
													<option value="DC">District of Columbia</option>
													<option value="DE">Delaware</option>
													<option value="FL">Florida</option>
													<option value="GA">Georgia</option>
													<option value="HI">Hawaii</option>
													<option value="IA">Iowa</option>
													<option value="ID">Idaho</option>
													<option value="IL">Illinois</option>
													<option value="IN">Indiana</option>
													<option value="KS">Kansas</option>
													<option value="KY">Kentucky</option>
													<option value="LA">Louisiana</option>
													<option value="MA">Massachusetts</option>
													<option value="MD">Maryland</option>
													<option value="ME">Maine</option>
													<option value="MI">Michigan</option>
													<option value="MN">Minnesota</option>
													<option value="MO">Missouri</option>
													<option value="MS">Mississippi</option>
													<option value="MT">Montana</option>
													<option value="NC">North Carolina</option>
													<option value="ND">North Dakota</option>
													<option value="NE">Nebraska</option>
													<option value="NH">New Hampshire</option>
													<option value="NJ">New Jersey</option>
													<option value="NM">New Mexico</option>
													<option value="NV">Nevada</option>
													<option value="NY">New York</option>
													<option value="OH">Ohio</option>
													<option value="OK">Oklahoma</option>
													<option value="OR">Oregon</option>
													<option value="PA">Pennsylvania</option>
													<option value="PR">Puerto Rico</option>
													<option value="RI">Rhode Island</option>
													<option value="SC">South Carolina</option>
													<option value="SD">South Dakota</option>
													<option value="TN">Tennessee</option>
													<option value="TX">Texas</option>
													<option value="UT">Utah</option>
													<option value="VA">Virginia</option>
													<option value="VT">Vermont</option>
													<option value="WA">Washington</option>
													<option value="WI">Wisconsin</option>
													<option value="WV">West Virginia</option>
													<option value="WY">Wyoming</option>
												</select>
											</div>
											<div class="form-group">							
												<label for="phone">Phone Number</label>
												<input class="form-control" type="tel" placeholder="(555)-555-5555" id="phone" name="phone">
												
											</div>
											<div class="form-group">							
												<label for="emailAddress">Email address</label>
												<input type="email" class="form-control" name="emailAddress" aria-describedby="emailHelp" placeholder="Enter Email" id="emailAddress">
												<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
											</div>
										</div>
									</div>
								</fieldset>

								<fieldset>
									<legend>Dog You Wish To Adopt</legend>
									<div class="form-row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="dogName">Name of dog you wish to adopt</label>						
												<input type="text" class="form-control" name="dogName" id="dogName" placeholder="Enter Dog's Name">
											</div>
											<div class="form-group">
												<label for="whyThisDog">What made you choose this specific dog?</label>		
												<textarea class="form-control" name="whyThisDog" id="whyThisDog" rows="6"></textarea>
											</div>
											<div class="form-group">
												<label for="peopleInHome">Age and gender of all persons in the home</label>		
												<textarea class="form-control" name="peopleInHome" id="peopleInHome" rows="4"></textarea>
											</div>
											<div class="form-group">
												<p>Is anyone in the house allergic to dogs?</p>
												<label class="control-label">
													<input class="radio" type="radio" name="allergies" id="allergyYes" value="allergyYes"> Yes
												</label>
												<label class="control-label">
													<input class="radio" type="radio" name="allergies" id="allergyNo" value="allergyNo" checked> No
												</label>
											</div>
											<button type="submit" class="btn btn-primary" id="adoptSubmit">Submit</button>
										</div>
									</div>
								</fieldset>
																
								
							</div>
						</div>
					</form>
				</section>	
			</div>
		</div>						
	</div>
	<footer class="footer">
		<?php include("inc/footer.php"); ?>
	</footer>
	<?php include("inc/foot-scripts.php"); ?>
</body>
</html>