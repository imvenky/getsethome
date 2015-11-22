<?php 
	require_once("inc_global.php");
	$pageName = $p1;
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Your website title</title>
	<meta name="keywords" content="Your website keywords">
	<meta name="description" content="Your website description">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />
	<?php require_once 'inc_common.php'; ?>
</head>
<body class="static-page" itemscope="" itemtype="http://schema.org/Place">
	<?php require_once 'inc_body.php'; ?>
	<section class="other-page-header">
		<?php require_once 'inc_header.php'; ?>
		<article class="slider">
			<div class="blrBg" style="background-image:url('/img/static/<?php echo $pageName;  ?>.jpg');"></div>
			<div class="welComeNote">
					<h2></h2>
				</div>
		</article>
	</section>
	<div class="content-div">
		<section class="fl_100">
			<?php require_once 'inc_breadcrumb.php'; ?>
		</section>
		<div class="fl_100 aboutUsCnt" id="join">
			<h2 class="coming">Have got queries, write to us at <a href="mailto:getsethome@flipside.co.in">getsethome@flipside.co.in</a>... #ComingSoon </h2>
		</div>
	</div>
	<?php require_once 'inc_footer.php'; ?>
</body>
</html>