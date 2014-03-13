<html>
<head>
	  <link rel = "stylesheet" type = "text/css" href = "css/colorStyles.css">
	  <title> About Me </title>
</head>
<body>
 <?php 
	include 'generateForm.php';
	if(array_key_exists('firstname',$_GET))
	{
		//check that the user has entered a name of at least 1 character
		$firstLength = strlen($_GET['firstname']);
		//if name ok, carry out tasks
		if($firstLength > 0)
		{
			$selectedBg = "background: #".$_GET['bgColor'].";";
			$selectedFg = "color: #".$_GET['fgColor'];
			echo '<body style = "'.$selectedBg.''.$selectedFg.'">';
			echo '<div style = "width:100%;">';
			echo '<div style = "width:50%;margin: 0 auto;padding-top:200px;text-align:center;font-size:100px;">';
			echo "Hello ".$_GET['firstname'];
			echo '</div></div>';
		}
		//display an error & form if no name entered
		else
		{
			echo'<span style = "color:red">*Please Enter a Name.</span>';
			generateForm();
		}
	}
	else
		generateForm();
?> 
</body>
</html>