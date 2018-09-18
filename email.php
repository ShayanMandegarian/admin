<?php

$email = shell_exec('/tmp/monitoring-plugins-2.2/plugins/check_smtp -H outlook.office365.com');
echo json_encode($email);

?>

