<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<h1>Thanks, sucker!</h1>

 		<p>
			Your information has been recorded
		</p>
		
		<dl>
			<dt>Name</dt>
			<dd>
				Your name is: <?php echo $_POST["names"]; ?>
			</dd>
			
			<dt>Section</dt>
			<dd>
				Your section is: <?php echo $_POST["selection"]; ?>
			</dd>
			
			<dt>Credit Card</dt>
			<dd>
				Your credit card number is: <?php echo $_POST["ccard"];  print "  (".$_POST["cc"] . ")";?>
			</dd>
		</dl>
<?php 




$myfile=fopen("datafile.txt", "a+") or die("Unable to open file");

$data=$_POST["names"]."; ";
fwrite($myfile, $data);
$data=$_POST["selection"]."; ";
fwrite($myfile, $data);
$data=$_POST["ccard"]."; ";
fwrite($myfile, $data);
$data=$_POST["cc"]."; ";
fwrite($myfile, $data);
$n="\n";
fwrite($myfile, $n);
fclose($myfile);
?>
<p>
	Here are all the suckers who have submitted here:
</p>
<?php
$myfile = fopen("datafile.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);



 ?>

	</body>
</html>