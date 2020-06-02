<?php
$shortcut = $_REQUEST['shortcut'] ?: 'OAuth%202.0';
$code = $_REQUEST['code'];

header('Location: ' . 'shortcuts://run-shortcut?name=' . rawurlencode($shortcut) . '&input=text&text=' . rawurlencode($code));
die();
?>
