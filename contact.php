<?php

require 'html_head.php';
include 'header.php';

?>
		<div id="main">
			<h2>Contact Us</h2>

			<form id="contactForm" name="contactForm" method="post" onsubmit="return validate(this); event.preventDefault;">
<fieldset>
<ol>
<li><label for="email">Email Address</label><input class="text" id="email" name="email" size="30" type="text"></li>
<li><label for="firstName">First Name</label><input class="text" id="firstName" name="firstName" size="30" type="text"></li>
<li><label for="lastName">Last Name</label><input class="text" id="lastName" name="lastName" size="30" type="text"></li>
<li><label for="message">Message</label><textarea cols="40"  id="message" name="message" rows="20"></textarea></li>
</ol>
<input class="button" id="contactSubmit" name="submit" type="submit" value="submit">
</fieldset>
</form>

<div id="success" style="color:red;"></div>

		</div>


<script src="ajaxcontact.js"></script>

		<?php

		include 'footer.php';

		?>