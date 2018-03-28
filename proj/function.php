<?php
function input($type,$name,$value,$placeholder,$required,$autofoc,$class,$multiple)
{
	echo"<input type=\"".$type."\" name=\"".$name."\" value=\"".$value."\" placeholder=\"".$placeholder."\" class=\"".$class."\"";
	if($required)
	echo" required " ;
	if(($autofoc)&&(!$value))
	echo " autofocus ";
	if($multiple)
	echo "multiple";
	echo "/>"; 
	}
function select($name,$multi,$option,$default,$req)
{
	if($multi)
	{
		echo "<select name=\"".$name."\"multiple=\"".$multi."\"";
		if($req)
		echo " required ";
		
		}
		else {
				echo "<select name=\"".$name."\"";
			if($req)
		echo " required ";
		
		echo">";
			}
	
echo"<option value=\"\"disabled selected>".$default."</option>";

	foreach($option as $k=>$V)
	{
		echo"<option value=\"".$V."\"\">".$V."</option>";
	}
	echo"</select>";
	}
?>