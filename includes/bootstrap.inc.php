<?
//you have to include config file before itself
//include blaubarry for all the sliders, scrollers and stuff
$bootstrap=$config['base_url']."/bootstrap/";
echo '<link href="'.$bootstrap.'css/bootstrap.min.css" rel="stylesheet">';
echo '<link href="'.$bootstrap.'css/bootstrap-responsive.css" rel="stylesheet">';
echo "<script type='text/javascript' src='".$bootstrap."js/jquery.js'></script>";
echo "<script type='text/javascript' src='".$bootstrap."js/bootstrap.js'></script>";
echo "<script type='text/javascript' src='".$bootstrap."js/bootstrap-popover.js'></script>";
echo "<script type='text/javascript' src='".$bootstrap."js/bootstrap-modal.js'></script>";
echo "<script type='text/javascript' src='".$bootstrap."js/bootstrap-typeahead.js'></script>";
echo "<script type='text/javascript' src='".$config['base_url']."/highcharts/js/highcharts.js'></script>";
echo "<script type='text/javascript' src='".$config['base_url']."/highcharts/js/modules/exporting.js'></script>";
echo "<script type='text/javascript' src='".$config['base_url']."/scripts/js/system.js'></script>";
echo '<link href="'.$config['base_url'].'/css/style.css" rel="stylesheet">';
?>
<link rel="shortcut icon" href="" />
