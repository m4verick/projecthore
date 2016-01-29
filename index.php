<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>JOG Project Weekly Report</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<script type="text/javascript" src="calendar.js"></script>
</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
	<?php
	//Prevent annoying reports to appear.
	error_reporting(E_ERROR);
	
	//Hardcoded link, please change with the right host later.
	$connect=mysqli_connect("127.0.0.1","root", "","weeklyreport") or die("Problemas con la conexión");
	
	//Get producer names to display on the select
	$getProducers=mysqli_query($connect,"SELECT prod_id, name FROM producers") or die("Problemas en el select:".mysqli_error($conexion));	
	

	//Only post if SUBMIT was pressed on the form.
	if(isset($_POST['submit'])){
		mysqli_query($connect,"INSERT into game(game_title, slot_type, upd_n, hq_prod, platform, local_producer, local_deadline, ios_deadline) values 
						   ('$_REQUEST[game_title]', '$_REQUEST[slot_type]', '$_REQUEST[upd_n]', '$_REQUEST[hq_prod]', '$_REQUEST[platform]', '$_REQUEST[local_producer]', concat($_REQUEST[element_4_3],'-',$_REQUEST[element_4_2],'-',$_REQUEST[element_4_1]), concat($_REQUEST[element_5_3],'-',$_REQUEST[element_5_2],'-',$_REQUEST[element_5_1]))")
		or die("Problemas en el select".mysqli_error($connect));

		
		//TODO: Add a redirection to another page later when we have another page.
		echo "Updated on the database.";
	}

	mysqli_close($connect);
?>
	
		<h1><a>JOG Project Weekly Report</a></h1>
		<form id="form_1096037" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>JOG Project Weekly Report</h2>
			<p>A simple unified reporting tool for </p>
		</div>						
			<ul >
			
		<li id="li_6" >
			<label class="description" for="element_6">Game Title </label>
			<div>
				<div>
					<input id="element_1" name="game_title" class="element text medium" type="text" maxlength="255" value="" required/> 
				</div> 
			</div> 
		</li>		<li id="li_7" >
		<label class="description" for="element_7">Project Type </label>
		<span>
			<input id="element_7_1" name="slot_type" class="element radio" type="radio" value="1" />
				<label class="choice" for="element_7_1">Publishing</label>
			<input id="element_7_2" name="slot_type" class="element radio" type="radio" value="2" />
				<label class="choice" for="element_7_2">Game Evolution</label>
		</span> 
		</li>		<li id="li_1" >
		<label class="description" for="element_7">Platform Type </label>
		<span>
			<input id="element_7_1" name="platform" class="element radio" type="radio" value="1" />
				<label class="choice" for="element_7_1">Windows</label>
			<input id="element_7_2" name="platform" class="element radio" type="radio" value="2" />
				<label class="choice" for="element_7_2">Android</label>
		</span> 
		</li>		<li id="li_1" >
		<label class="description" for="element_1">Evolution Update Version </label>
		<div>
			<input id="element_1" name="upd_n" class="element text medium" type="text" maxlength="255" value=""required/> 
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Local Producer </label>
		<div>
			<select class="element select medium" id="element_6" name="local_producer"> 
			<option value="" selected="selected"></option>
			<?php 	while ($reg=mysqli_fetch_array($getProducers)){ ?>
			<option value="<?php echo $reg['prod_id'] ?>"><?php echo $reg['name'] ?></option>
					<?php	 } ?>
			</select>
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">HQ Producer </label>
		<div>
			<input id="element_3" name="hq_prod" class="element text medium" type="text" maxlength="255" value="" required/> 
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">iOS Deadline </label>
		<span>
			<input id="element_4_1" name="element_4_1" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_4_1">DD</label>
		</span>
		<span>
			<input id="element_4_2" name="element_4_2" class="element text" size="2" maxlength="2" value="" type="text">
			<label for="element_4_2">MM</label>
		</span>
		<span>
	 		<input id="element_4_3" name="element_4_3" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_4_3">YYYY</label>
		</span>
	
		<span id="calendar_4">
			<img id="cal_img_4" class="datepicker" src="images/calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_4_3",
			baseField    : "element_4",
			displayArea  : "calendar_4",
			button		 : "cal_img_4",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectEuropeDate
			});
		</script>
		 
		</li>		<li id="li_5" >
		<label class="description" for="element_5">Deadline </label>
		<span>
			<input id="element_5_1" name="element_5_1" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_5_1">DD</label>
		</span>
		<span>
			<input id="element_5_2" name="element_5_2" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_5_2">MM</label>
		</span>
		<span>
	 		<input id="element_5_3" name="element_5_3" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_5_3">YYYY</label>
		</span>
	
		<span id="calendar_5">
			<img id="cal_img_5" class="datepicker" src="images/calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_5_3",
			baseField    : "element_5",
			displayArea  : "calendar_5",
			button		 : "cal_img_5",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectEuropeDate
			});
		</script>
		 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="1096037" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>