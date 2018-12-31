<?php

	require("../include/layout.php");

	render_html("delete student");
	render_header("RGSC LIBRARY");
?>
<html>
<head></head>
<body>
<form method="post" action="../func/deletestu.php" name="stufrm">
	<table id="deletestu">
		<tr>
			<td colspan="2">
				<H3>DELETE STUDENT</H3>
			</td>
		</tr>
		<tr>
			<td>Enrollment Number</td>
			<td>
				<input type="text" class="txtfield" name="enroll" placeholder="Enrollment" pattern="[0-9]{5,10}" title="Only numbers Allowed" required autofocus />
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