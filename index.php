<?php require_once('init.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">

	<script>
	$(document).ready(function(){
		$(".chosen").chosen();
		$("#btnGet").click(function () {
            var vehNo = $("#selectVn").find("option:selected").text();
            //$("#get").text(vehNo);

            $.post("form.php", {
            	nihao: vehNo
            }, function(data, status){
            	$("#test").html(data);	
            });
        });
	});
	</script>

</head>
<body>
	<div style="width: 150px;margin: 50px;">
		<select id="selectVn" class="chosen" style="width: 150px;margin: 50px;">
			<?php foreach ($datas as $data) {  // $datas from form .php ?> 
				<option><?php echo $data['vehicle_no']; ?></option>
			<?php } ?> 
		</select>
		<br><br>
		<input type="submit" id="btnGet" name="search" value="Search Vehicle"><br>
	</div>

	<div id="test" style="margin: 50px">
	
		<?php if (!empty($name)): ?>
			
		<?php endif ?>
	</div>	
</body>
</html>


	<!-- <script>
		$(document).ready(function(){
			$("input").keyup(function(){
				var name = $("input").val();
				console.log(name);
				$.post("form.php", {
					suggestion: name
				}, function(data, status){
					$("#test").html(data);
					console.log(data);
				});
			});
		});
	</script> -->
	<!-- <script>
		$(document).ready(function(){
			$("input").click(function(event){
				var vn = $("$selectVn");
				console.log(vn);
			});
		});
	</script> -->
	<!-- <input type="text" name="name">
	<p id="test"></p> -->