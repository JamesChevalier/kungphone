<div id="container">
	<div id="left">
		<img src="/res/iPhone.png" alt="Kung Phone Screenshot" height="527" width="297" border="0" />
	</div>
	<div id="right">
		<h1><img src="/res/icon.png" border="0" /> Kung Phone</h1>

		<?php
			if($didcontact == "Thanks!"){
				echo $didcontact."<br>I'll be in touch as soon as I can.";
			}
			else{
				echo form_open('/contact/message');
				$ndata = array('name' => 'name', 'id' => 'id', 'size' => '25');
				echo form_input($ndata);
				echo form_label('Name ','name')."\n<br>";
				
				$edata = array('name' => 'email', 'id' => 'email', 'size' => '25');
				echo form_input($edata);
				echo form_label('Email ','email')."\n<br>";
				
				echo form_label('','message');
				$cdata = array('name' => 'message', 'id' => 'notes', 'cols' => '60', 'rows' => '20');
				echo form_textarea($cdata)."\n<br>";
				
				echo "<p class=\"submit\">\n";
				echo form_submit('submit','Send Message');
				echo "\n</p>";
				echo form_close();
			}
		?>

	</div>
		<!-- <p><a href="http://itunes.apple.com/us/app/kung-phone/id436022889?mt=8"><img src="/res/AppStore.png" alt="Available on the App Store" border="0" /></a></p> -->
</div> <!-- end #container -->
