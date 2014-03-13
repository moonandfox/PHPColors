<?php
function generateForm(){
$r=0;
$i=0;
//generate color codes and fill array with them
//first loop (R value)
while ($r <= 15)
{  
 //Our second loop (G value) occurs 3 times for ever R value, 9 times
 $g=0;
 
	 while ($g <= 15)
	 { 
	 //Our third loop (B value) occurs 3 times for ever G value, or 27 times
	 $b=0;
	 while ($b <= 15) 
		 { 

		 //Here we actually generate the color blocks
		 $background = dechex($r) . dechex($r) . dechex($g) .dechex($g) . dechex($b) . dechex ($b);
		 $colors[$i] = $background;
		$i++;
		 //At the end of each loop we add 6
		 $b = $b+6;
	 } 
	 $g = $g+6;
 }
 $r = $r+6;
}
echo '<form name="input" action="" method="get">';
echo "background color:";
echo '<select name = "bgColor">';
foreach($colors as $bg)
{
	$selected = '';
	if ($_GET['bgColor'] == $bg)
		$selected = ' selected';
	$optionBg = "background: #".$bg;
	echo'<option style = "'.$optionBg.'" value = "'.$bg.'" '.$selected.'>'.$bg.'</option>';
}
echo'</select>';
echo "foreground color";
echo '<select name = "fgColor">';
foreach($colors as $fg){
	$selected = '';
	if ($_GET['fgColor'] == $fg)
		$selected = ' selected';
	$optionFg = "background: #".$fg;
	echo'<option style = "'.$optionFg.'" value = "'.$fg.'" '.$selected.'>'.$fg.'</option>';
}
echo'</select>';
echo'First name: <input type="text" name="firstname"><br>';
echo'<input type="submit" value="Submit">';
echo '</form>';
}
?>