<?php
	require("../include/layout.php");

	render_html("add student");
	render_header("RGSC LIBRARY");
?>
<html>
<body>
<form method="post" action="../func/addstu.php" name="addstu">
	<table id="addstu">
		<tr>
			<td colspan="2">
				<H3>Add Student</H3>
			</td>
		</tr>
		<tr>
			<td>Name</td>
			<td>
				<input type="text" class="txtfield" name="name" placeholder="name" pattern="[a-zA-z]{3,25}" title="Only Characters Allowed" required autofocus />
			</td>
		</tr>
		<tr>
			<td>enrollment no</td>
			<td>
				<input type="text" name="enroll" class="txtfield" placeholder="enrollment no" pattern="[0-9]{5,10}" required>
			</td>
		</tr>
		<tr>
			<td>course</td>
			<td>
				<select name="course" required title="course">
  			   			<option value="mca">mca</option>
  						<option value="bcom">bcom</option>
   						<option value="bvoc">bvoc</option>
  						<option value="msc">msc</option>
						<option value="bsc">bsc</option>
				</select> 
			</td>
		</tr>
		<tr>
			<td>year</td>
			<td>
				<input type="text" class="txtfield" name="year" placeholder="year" pattern="[0-9]{4}" required>
			</td>
		</tr>
			<td>Temporary Address</td>
			<td>
				<input type="text" class="txtfield" name="taddress" placeholder="address">
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