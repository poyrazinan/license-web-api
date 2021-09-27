<?php
  header('Content-Type: application/json; charset=utf-8');
  
  define("__ROOT__", $_SERVER["DOCUMENT_ROOT"]);

  require_once("connect.php");

  if (isset($_GET["plugin"]) && isset($_GET["ip"])) {
		$check_license = $db->prepare("SELECT id FROM plugin_licenses WHERE plugin = ? AND license_ip = ?");
		$check_license->execute(array($_GET["plugin"], $_GET["ip"]));
		if ($check_license->rowCount() > 0) {
			die(json_encode(array(
				"status" => true
			)));
		}
		else {
			die(json_encode(array(
				"status" => false
			)));
		}
  }
  else {
    die(json_encode(array(
      "status" => false
    )));
  }
?>
