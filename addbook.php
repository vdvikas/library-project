<?php

	require("../include/layout.php");

	render_html("add book");
	render_header("RGSC LIBRARY");
?>
<html>
<body>
<form method="post" action="../func/addbook.php" name="addbook">
	<table id="addbook">
		<tr>
			<td colspan="2">
				<H3>Add book</H3>
			</td>
		</tr>
		<tr>
			<td>Book Name</td>
			<td>
				<input type="text" class="txtfield" name="name" placeholder="name" pattern="[a-z A-z]{3,25}" title="Only Characters Allowed" required autofocus />
			</td>
		</tr>
		<tr>
			<td>bookno</td>
			<td>
				<input type="text" name="bookno" class="txtfield" placeholder="book no" pattern="[0-9]{5,10}" required>
			</td>
		</tr>
		<tr>
			<td>author</td>
			<td>
				<input type="text" class="txtfield" name="author" placeholder="author" pattern="[a-z A-Z]{1,25}" required>
			</td>
		</tr>
			<td>related subject</td>
			<td>
				<input type="text" class="txtfield" name="subject" placeholder="subject">
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