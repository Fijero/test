<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no maximum-scale=1">
	<title></title>
</head>
<body>



<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
	$track=$_POST['track'];
	
	require 'connect.php';
	if($conn){
		$ret="select * from courier_table where tracking_id='$track' ";
		$sql=$conn->query($ret);
		$row=$sql->fetch_assoc();
		if($row>1){
	
	?>

	<div class="track_table">
		<div class="first_part">
			<div><img src="pics/logo.jpg" width="150px" height="70px"></div>
			<div>Tracking ID: <span style="color: red; font-size:19px"><?php echo $_POST['track']; ?></span></div>
		</div>

	<div class="loader">
		<div>
			<fieldset>
			<legend><h3>Sender's Information</h3></legend>
			<p>Sender's Name:<b><?php echo $row['send_name']; ?></b></p>
			<p>Sender's Phone:<b><?php echo $row['send_phone']; ?></b></p>
			<p>Sender's Address:<b><?php echo $row['send_add']; ?></b></p>
			<p>Sender's Location:<b><?php echo $row['send_loc']; ?></b></p>
		</fieldset>
		</div>
		<div>
			<fieldset>
			<legend><h3>Receipient's Information</h3></legend>
			<p>Receiver's Name:<b><?php echo $row['rec_name']; ?></b></p>
			<p>Receiver's Phone:<b><?php echo $row['rec_phone']; ?></b></p>
			<p>Receiver's Email:<b><?php echo $row['rec_email']; ?></b></p>
			<p>Receiver's Address:<b><?php echo $row['rec_add']; ?></b></p>
			<p>Receiver's Location:<b><?php echo $row['rec_loc']; ?></b></p>
		</fieldset>
		</div>
		<div>
			<fieldset>
			<legend><h3>Shipment Information</h3></legend>
			<p>Shipment Date:<b><?php echo $row['reg_date']; ?></b></p>
			<p>Consignment Description:<b><?php echo $row['description']; ?></b></p>
			<p>No of Packages:<b><?php echo $row['no_pack']; ?></b></p>
			<p>shipment Fee:<b><?php echo $row['ship_fee']; ?></b></p>
			<p>Shipment Fee status:<b style="color:green;"><?php echo "PAID!"; ?></b></p>
			<p>Delivery Status:<b><?php echo $row['delivery_stat']; ?></b></p>
			<p>Consignment Status:<b><?php echo $row['consign_stat']; ?></b></p>
			<p>Shipment Method:<b><?php echo $row['ship_method']; ?></b></p>
			<p>Consignment From:<b><?php echo $row['consign_from']; ?></b></p>
			<p>Consignment Current Location:<b><?php echo $row['consign_curr_loc']; ?></b></p>
			<p>Consignment Final Destination:<b><?php echo $row['consign_fin_dest']; ?></b></p>
			<p>Expected Datev of Delivery<b><?php echo $row['del_date']; ?></b></p>
		</fieldset>
		</div>
	</div>

	<a href="index.php"><div id="bk_home">Back to home</div></a>
</div>

<?php
}
else{
	header("location:index.php?invalid=invalid_tracking_id");
}
}
}
?>

<style type="text/css">
	a{
		text-decoration: none;
	}

	body{
		margin: 2px;
		background: rgba(0, 0, 0, 0.08);
	}

	.track_table{
		padding: 20px 7px 20px 7px;
		background: white;
		width: 95%;
		margin: 0 auto;
	}

	.first_part{
		display: flex;
		flex-direction: row;
		justify-content: space-between;
	}

	.first_part div{
		margin: 5px;
	}

	table{
		padding: 10px;
		width: 100%;
		border: 1px solid black;
		background: rgba(0, 0, 0, 0.1);
	}

	th{
		text-align: left;
		background: #005580;
		color: white;
		padding: 10px;
	}

	table tr td:nth-of-type(2){
		color: ;
		text-align: right;
	}
	tr{
		width: 100%;
	}

	#r1{
		background: grey;
	}

	#bk_home{
		text-align: center;
		padding: 10px;
		margin: 0 auto;
		background: #ff9900;
		width: 40%;
		margin-top: 20px;
		color: white;
	}

	/*INFORMARIONS LOADING CONTAINERS*/

	.loader{
		display: flex;
		flex-direction: column;
		background:;
	}
	.loader div{
		margin-top: 30px;
		border-radius: 10px;
		padding: 5px;
		box-shadow: 1px 1px 4px 2px rgba(0, 0, 0, 0.2);
	}

	.loader div b{
		float: right;
		font-size: 18px;
		color: black;
	}

	.loader div p{
		color: rgba(0, 0, 0, 0.9);
		font-size: 17px;
	}

	fieldset{
		border: 1px solid black;
		padding: 15px;
	}
	legend{
		font-size: 19px;
	}

@media only screen and (max-width: 500px){
	.track_table{
		width: 100%;
		background: ;
		padding: 0px;
	}
}
</style>

</body>
</html>