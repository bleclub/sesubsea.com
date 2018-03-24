<?php

$yearthai = date('Y')+543;
$db = new database();


// Get office id
$sql_office = "select * from bt_office limit 1";
$query_office = $db->query($sql_office);
$rs_office = $db->get($query_office);
$offID = $rs_office['officeID'];

$sql_log = "select * from bt_statview where officeID='".$offID."' and stat_year='".$yearthai."' and stat_month='".date('m')."'";
$querylogview = $db->query($sql_log);
$row_log = $db->rows($querylogview);

if($row_log > 0 ){	
			while($rs_log = $db->get($querylogview) ) { 
				$statview = $rs_log['stat_view'];
				$statyear = $rs_log['stat_year'];
				$statmonth = $rs_log['stat_month'];
				$value_log = array(
					"stat_view" => $statview+1
				);
				$query_log = $db->update("bt_statview", $value_log, "stat_year='{$statyear}' and stat_month='{$statmonth}' and officeID='{$offID}'");
			}
				
} else {
	$value_log = array(
		"stat_year" => date('Y')+543,
		"stat_month" => date('m'),
		"stat_view" => '1',
		"officeID" => $offID
	);
	$query_log = $db->insert("bt_statview", $value_log);
}

?>


<!DOCTYPE HTML>
<html>
<head>
	<title>Se Subsea</title>
	<meta charset="utf-8"/>
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"/>-->
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<!-- <meta name="viewport" content="width=1366"> -->

	<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/ionicons-2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/magnific-popup.css">
	
	<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/assets/css/responsive.css">

    <link rel="mask-icon" href="<?php echo $baseUrl;?>/assets/favicon/favicon_sesubsea.svg" color="#000000">
	<link rel="icon" type="image/x-icon" class="js-site-favicon" href="<?php echo $baseUrl;?>/assets/favicon/favicon_sesubsea.png">
