<?php 
if (!isset($layout_context)) {
$layout_context = "public";
}
?>

<!DOCTYPE html PUBLIC "-//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
<title>Sports Online <?php if ($layout_context == "admin") { echo "Admin"; } ?></title>
<link rel="stylesheet" type="text/css" href="stylesheets/public.css" media="all" />
</head>
<body>
<div id="header">
<h1>Sports Online <?php if ($layout_context == "admin") { echo "Admin"; } ?></h1>
</div>