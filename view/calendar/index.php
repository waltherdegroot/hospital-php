<h1>Alle Verjaardagen</h1>
<div id="form_container">
<form action="handeler" method="POST">
	<div id="birthdays_container">
<?php
	$date = date("Y");
	$months = ['Januari','Februari','Maart','April','Mei','Juni','Juli','August','September','Oktober','November','December'];
	$done = false;	
	$prev_id = '';
	$prev_day = '';
	$prev_month = ''; 

	foreach ($birthdays as $birthday => $value) {
		$naam = $value['person'];
		$month = $months[($value['month']-1)];
		$day = $value['day'];
		$year = $date-$value['year'];
		$id = $value['id'];
		
		
		if($done != true){
			if ($month != $prev_month) {
				echo "<h2 class='months'>" .$month. "</h2>";
				$prev_month = $month;
				$prev_day = '';
			}

			if($prev_month == $month && $id != $prev_id && $prev_day != $day){

				echo "<h3 class='days'>" .$day. "</h3><p class='birthday'><label for='".$id."'><input type='radio' class='radioButton' id='".$id."' name='id' value=".$id." required>" .$naam. "</label></p>";

				
			}

			else{
				echo "<p class='birthday'><label for='".$id."'><input type='radio' class='radioButton' id='".$id."' name='id' value=".$id." required>" .$naam. "</label></p>";
			}

			$prev_id = $id;
			$prev_day = $day;
		}
	}

	$done = true;
?>
	</div>
	<input class="buttons" id="greenButton" type="submit" name="update" value="update">
	<input class="buttons" id="redButton" type="submit" name="delete" value="delete">
</form>
	<a class="buttons" id="blueButton" href="create">create</a>
</div>