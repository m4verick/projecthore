<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>JOG Project Weekly Report</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

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
	$getGameTitle=mysqli_query($connect,"SELECT prod_id, name FROM producers") or die("Problemas en el select:".mysqli_error($conexion));	
	

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
			
					<li id="li_13" >
		<label class="description" for="element_13">Game Title
 </label>
		<div>
			<select class="element select medium" id="element_6" name="local_producer"> 
			<option value="" selected="selected"></option>
			<?php 	while ($reg=mysqli_fetch_array($getGameTitle)){ ?>
			<option value="<?php echo $reg['prod_id'] ?>"><?php echo $reg['name'] ?></option>
					<?php	 } ?>
			</select>
		</div> 
		</li>		<li id="li_11" >
		<label class="description" for="element_11">Status </label>
		<div>
		<select class="element select medium" id="element_11" name="element_11"> 
			<option value="" selected="selected"></option>
<option value="1" >On Track</option>
<option value="2" >Off Track</option>
<option value="3" >On Track with Risk</option>
<option value="4" >Off Track due to iOS Status</option>

		</select>
		</div> 
		</li>		<li id="li_14" >
		<label class="description" for="element_14">Deadline </label>
		<div>
			<input id="element_14" name="element_14" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_15" >
		<label class="description" for="element_15">iOS Deadline </label>
		<div>
			<input id="element_15" name="element_15" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li class="section_break">
			<h3></h3>
			<p></p>
		</li>		<li id="li_8" >
		<label class="description" for="element_8">Situation & Next Goals </label>
		<div>
			<textarea id="element_8" name="element_8" class="element textarea medium"></textarea> 
		</div> 
		</li>		<li id="li_9" >
		<label class="description" for="element_9">Need Your attention </label>
		<div>
			<textarea id="element_9" name="element_9" class="element textarea medium"></textarea> 
		</div> 
		</li>		<li class="section_break">
			<h3></h3>
			<p></p>
		</li>		<li id="li_12" >
		<label class="description" for="element_12">List of Possible Risks </label>
		<div>
			<textarea id="element_12" name="element_12" class="element textarea medium"></textarea> 
		</div> 
		</li>		<li id="li_19" >
		<label class="description" for="element_19">Likelihood </label>
		<div>
		<select class="element select medium" id="element_19" name="element_19"> 
			<option value="" selected="selected"></option>
<option value="1" >Low</option>
<option value="2" >Medium</option>
<option value="3" >High</option>

		</select>
		</div> 
		</li>		<li id="li_20" >
		<label class="description" for="element_20">Impact </label>
		<div>
		<select class="element select medium" id="element_20" name="element_20"> 
			<option value="" selected="selected"></option>
<option value="1" >Low</option>
<option value="2" >Medium</option>
<option value="3" >High</option>

		</select>
		</div> 
		</li>		<li id="li_16" >
		<label class="description" for="element_16">What are the consequences </label>
		<div>
			<textarea id="element_16" name="element_16" class="element textarea medium"></textarea> 
		</div> 
		</li>		<li id="li_17" >
		<label class="description" for="element_17">What can we do to minimize / eliminate it </label>
		<div>
			<textarea id="element_17" name="element_17" class="element textarea medium"></textarea> 
		</div> 
		</li>		<li id="li_18" >
		<label class="description" for="element_18">ETA for Solution </label>
		<div>
			<input id="element_18" name="element_18" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="1096037" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
		<div id="footer">
			Generated by <a href="http://www.phpform.org">pForm</a>
		</div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>