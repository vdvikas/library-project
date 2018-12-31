<?php

	require("../include/layout.php");

	render_html("issue book");
	render_header("RGSC LIBRARY");
?>
<html>
<head></head>
<body>
<form method="post" action="../func/issuebook.php" name="issuebook">
	<table id="issue book">
		<tr>
			<td colspan="2">
				<H3>ISSUE BOOK</H3>
			</td>
		</tr>
		<tr>
			<td>Book Number</td>
			<td>
				<input type="text" class="txtfield" name="bookno" placeholder="Book No" pattern="[0-9]{1,10}" title="Only numbers Allowed" required autofocus />
			</td>
		</tr>
		<tr>
			<td>Enrollment no</td>
			<td>
				<input type="text" class="txtfield" name="enroll" placeholder="Enrollment Number" pattern="[0-9]{5,10}" required>
			</td>
		</tr>
		<tr>
		<td>
				<input type="reset"  class="btn">
				<input type="submit" value="Submit" class="btn"></td>
			</td>
		</tr>
	</table>
</form>
</body>
</html>
<?php
render_footer();
	get_css("../style/frm.css");
	get_css("../style/layout.css");
?>