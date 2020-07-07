<script type="text/javascript">
	function submission(){
		document.getElementById("submitHiddenVar").submit();// Form submission
	}
</script>

<?php  require_once('init.php'); 

if (isset($_POST['VehVar'])) 
{
	$check = $_POST['VehVar'];		
	if (!empty($check)) //to check if user have not submitted empty field
	{
		foreach ($vehNums as $vehNum) {
			// $vehNums from object.php 
			foreach ($vehNum as $key => $value) {	
				if (strpos($value, $name) !== false) {
				 $Id = $vehNum['id'];
				 $Vno = $vehNum['vehicle_no'];	
				 $Owner = $vehNum['owner'];
				 $Po = $vehNum['postal_code'];
					echo "<hr>";
					echo "<strong>Id </strong>:". $Id;
					echo "<hr>";
					echo "<strong>Vehicle Number</strong> :".$Vno;
					echo "<hr>";
					echo "<strong>Owner</strong> :".$Owner;
					echo "<hr>";			
					echo "<strong>Area Code</strong> :".$Po;
					echo "<hr>";		
					// sending the information to pdf.php through hidden fields
					print("<form action='pdf.php' id='submitHiddenVar' method='post'> 
					        <input type='hidden' name='HId' value='".$Id."'> 
					        <input type='hidden' name='HVno' value='".$Vno."'> 
					        <input type='hidden' name='HOwner' value='".$Owner."'> 
					        <input type='hidden' name='HPo' value='".$Po."'> 
					      
					    </form>");
					echo "<button onclick='submission()'>Generate PDF</button>";		
				}
			}
		}
	}
	else
	{
		echo "no records found.";
	}
	echo "";
}
?>
