<?php 
	require_once("inc_global.php");
	$pageName = $p1;
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>GetSetHome - Fully furnished rental apartments, flats, houses, shared accomodation for bachelors in India on PG priced rent</title>
	<meta name="keywords" content="Shared room, Shared accomodation, Hostels, PG &amp; Hostels, Room for rent, Rented House, Flatmate, Roommate, Male PG, Female PG, Single Room, Flats for rent, Furnished flats for rent, No brokerage flats, PG for Ladies, PG for Men, Twin sharing, Premium single room, Flat sharing, House for rent, single room for rent, single occupancy PG, low budget flats, property for rent, affordable house on rent, sharing basis apartment, room sharing">
	<meta name="description" content="Fully furnished rental apartments, flats, houses, shared accomodation for bachelors in India on PG priced rent">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />
	<?php require_once 'inc_common.php'; ?>
</head>
<body itemscope="" itemtype="http://schema.org/Place">
	<?php require_once 'inc_body.php'; ?>
	<section class="other-page-header">
		<?php require_once 'inc_header.php'; ?>
	</section>
	<section class="fl_100">
		<?php require_once 'inc_breadcrumb.php'; ?>
	</section>
	<aside class="fl_100 thanks">
		<?php if($_GET['id'] == 1){ ?>
		<h1>Hey, Thank you for subscribing!</h1>
		<p>We will keep you posted with our new listings. Do check your email for best rooms.</p>
		<?php } ?>
		<?php if($_GET['id'] == 2){ ?>
		<h1>Hey, Thank you for writing to us!</h1>
		<p>GetSetHome team will soon touch base to take this relation forward.</p>
		<?php } ?>
		<a href="/" class="btn blue">GO back to home</a>
	</aside>
	<?php require_once 'inc_footer.php'; ?>
</body>
</html>