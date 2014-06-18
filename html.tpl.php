<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>" <?php print $rdf_namespaces; ?>>
<head profile="<?php print $grddl_profile; ?>">
<?php print $head; ?>
<title><?php print $head_title; ?></title>
<?php print $styles; ?>
<?php print $scripts; ?>
<!-- Web Fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<!--[if IE 7]><link type='text/css' rel="stylesheet" href="css/font-awesome-ie7.min.css"><![endif]-->
<!--[if lte IE 8]>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400" />
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300" />
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:700" />
	<![endif]-->
<!--[if lte IE 8]><script src="js/lte-ie9.js"></script><![endif]-->
<!-- Scripts -->
<!-- Internet Explorer condition - HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->   
</head>
<body class="<?php print $classes; ?>" <?php print $attributes; ?> data-smooth-scrolling="1">
<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>
</body>
</html>
