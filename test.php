<html>
<body>
<?php
				$test = 'empty';
				if(!empty($_POST['from']))
				{
					echo 'you are here';
					$test = $_POST['from'];
				}
				echo $test;
			?>
</body>
</html>