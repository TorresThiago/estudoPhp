<?php 
echo "<select>";
echo"<option value=''></option>";
for ($i=date("Y"); $i > date("Y")-100; $i--) { 
	echo"<option value=". $i ." >".$i."</option>";
}
echo "</select>";

 ?>