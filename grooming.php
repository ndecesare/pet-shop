<?php

require 'html_head.php';
include 'header.php';

?>
<style>

#breed {
	display: none;
}

</style>
		<div id="main">
			<h2>Grooming</h2>

			<p>We are committed to making your pet look their best.  Our in-house groomer has over ten years of experience working with pets of all types.</p>

			<p>Our grooming services include but are not limited to: bathing and blow dry, ear cleaning, nail clipping, haircuts and even more.</p>

			<p>Please fill out the form to schedule a grooming.  Fields in red are required.</p>

			<form accept-charset="UTF-8" action="groomprocess.php" class="groom" id="groom" method="post" onsubmit="return groomValidate(this);">
<fieldset>
<ol>
<li><label class="required" for="firstName">First Name</label><input class="text" name="firstName" size="30" type="text"></li>
<li><label class="required" for="lastName">Last Name</label><input class="text" name="lastName" size="30" type="text"></li>
<li><label class="required" for="address">Address</label><input class="text" name="address" size="30" type="text"></li>
<li><label class="required" for="city">City</label><input class="text" name="city" size="30" type="text"></li>
<li><label class="required" for="state">State</label><select name="state">
	<option value="">--Choose One--</option>
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select>	</li>		
<li><label class="required" for="zip">Zip Code</label><input class="text" name="zip" size="30" type="text"></li>
<li><label class="required" for="phone">Phone Number</label><input class="text" name="phone" size="30" type="text"></li>
<li><label for="email">Email</label><input class="text" name="email" size="30" type="text"></li>
<li><label class="required" for="petType">Type of Pet: </label>Cat<input class="radio" name="petType" type="radio" id="petType" value="cat">Dog<input class="radio" name="petType" id="petType" type="radio" value="dog">Other<input class="radio" name="petType" id="petType" type="radio" value="other">
        <label for="breed">Breed:</label>
        <select id="breed" name="breed">
        	<option name="breed">None</option>
          <option name="breed">Shiba Inus</option>
          <option name="breed">Pembroke Welsh Corgi</option>
          <option name="breed">Boxer</option>
          <option name="breed">English Bulldog</option>

        </select></li>
	<li><label for="petName" class="required">Pet Name</label><input class="text" name="petName" size="30" type="text"></li>

<li><label for="spayNeuter">My pet is spayed or neutered</label><input type="checkbox" name="spayNeuter"></li>
<li><label for="petBirthday">Pet's Birthday (YYYY-MM-DD) </label><input class="text" name="petBirthday" size="30" type="text"></li>
</ol>
<input class="button" name="commit" type="submit" value="submit">
</fieldset>
</form>
		</div>

		

	
		<?php

		include 'footer.php';

		?>
