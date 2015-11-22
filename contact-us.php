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
	<body class="static-page" itemscope="" itemtype="http://schema.org/Place">
		<?php require_once 'inc_body.php'; ?>
		<section class="other-page-header">
			<?php require_once 'inc_header.php'; ?>
			<article class="slider">
				<div class="blrBg" style="background-image:url('/img/static/<?php echo $pageName;  ?>');"></div>
				<div class="welComeNote">
					<h2></h2>
				</div>
			</article>
		</section>
		<div class="content-div">
			<section class="fl_100">
				<?php require_once 'inc_breadcrumb.php'; ?>
			</section>
			<div class="fl_100 aboutUsCnt">
				<h2>We love to meet new people. Join us for a drink at any local downtown pub.</h2>
				<form class="form-horizontal" id="contactForm" role="form" method="post" action="/contact-us-form.php">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="First &amp; Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>" required>
							<?php echo "<p class='text-danger'>$errName</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>" required>
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="mobile" class="col-sm-2 control-label">Mobile</label>
						<div class="col-sm-10">
							<input type="tell" maxlength="10" class="form-control" id="mobile" name="mobile" placeholder="Your mobile" required>
							<?php echo "<p class='text-danger'>$errMobile</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="mobile" class="col-sm-2 control-label">Mobile</label>
						<div class="col-sm-10">
							<select name="whoyour" class="form-control" id="whoyour" required>
								<option>Who you are?</option>
								<option>Property owner</option>
								<option>Home seeker</option>
								<option>Corporate</option>
							</select>
							<?php echo "<p class='text-danger'>$errHuman</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea id="msg" class="form-control" style="height:auto;" rows="4" placeholder="Message" name="message"  required><?php echo htmlspecialchars($_POST['message']);?></textarea>
							<?php echo "<p class='text-danger'>$errMessage</p>";?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input onclick="fnContact();" type="button" value="Send" class="btn blue">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<?php echo $result; ?>
						</div>
					</div>
				</form>
			</div>
		</div>
		<?php require_once 'inc_footer.php'; ?>
		<script>
			function fnContact(){
				var name 		= $("#name").val();
				var email  		= $("#email").val();
				var mobile 		= $("#mobile").val();
				var whoyour 	= $("#whoyour").val();
				var msg 		= $("#msg").val();

				var rNAme		= /^[a-zA-Z ]{2,30}$/;
				var rEmail 		= /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
				var rMobile		= /^(\+91-|\+91|0)?\d{10}$/;


				if (!rNAme.test(name) || name == "") {
					alert("Please enter valid name");
					$("#name").focus();
					return false;
				}

				if (!rEmail.test(email) || email == "") {
					alert("Please enter valid Email Id");
					$("#email").focus();
					return false;
				}

				if (!rMobile.test(mobile) || mobile == "") {
					alert("Please enter valid Mobile #");
					$("#mobile").focus();
					return false;
				}

				if (whoyour == "" || whoyour == "Who you are?") {
					alert("Please Select who you are?");
					$("#whoyour").focus();
					return false;
				}

				if (msg == "") {
					alert("Please enter message");
					$("#msg").focus();
					return false;
				}
				document.getElementById("contactForm").submit();
			}
		</script>
	</body>
</html>