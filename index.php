<?php

	require("site/include/layout.php");

	render_html("Login");
	render_header("RGSC LIBRARY");
?>
	<form method="post" action="site/redirect.php" name="log_frm">
		<h3>LOG IN</h3><p/>
			<input type="text" name="usr" value="" placeholder="Username" tabindex="1" class="txtfield" autofocus required/><p/>
			<input type="password" name="passwd" value="" tabindex="2" placeholder="Password" class="txtfield"  required/><p/>
			
			<input type="submit" name="sub_btn" value="LOG IN" tabindex="3" class="btn" /><p/>
	</form>
<?php
render_footer();
	get_css("site/style/frm.css");
	get_css("site/style/layout.css");
?>
<style type="text/css">
	form
	{
		padding: 9em ;
		background-image: url("/site/pic/ayurved.png");
		background-repeat: no-repeat; 
	}

</style>