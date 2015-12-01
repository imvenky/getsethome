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
	<body class="static-page _how-it-works" itemscope="" itemtype="http://schema.org/Place">
		<?php require_once 'inc_body.php'; ?>
		<section class="other-page-header">
			<?php require_once 'inc_header.php'; ?>
		</section>

		<!-- Our promise -->
		<section class="hm-article _our-promise">
			<div class="hiw-user-types">
				<a href="/how-it-works-owner">owner</a>
				<a href="/how-it-works-individual" class="_active">individual</a>
				<a href="/how-it-works-corporate">corporate</a>
			</div>
			<div class="hw-topsection">
				<h1>LEASING, REIMAGINED</h1>
				<a href="javascript:;" class="btn blue">LIST YOUR SPACE</a>
				<!-- List your space form starts here -->
				<div class="list-space-callout">
					<form class="form-horizontal" id="ListForm" role="form" method="post" action="/list-your-space.php">
						<div class="form-group">
							<label for="name" class="col-sm-2 control-label">Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="name" name="name" placeholder="First &amp; Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>" required>
								<?php echo "<p class='text-danger'>$errName</p>";?><i>
								<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
								<g>
									<path fill="#CCCCCC" d="M82.8,88H17.2c-4,0-7.2-3.2-7.2-7.2l0.2-5.8c6-12.6,15.3-15.3,15.7-15.4l0.7-0.1h4.7c3.8,0,6.9-3.1,6.9-6.9
										v-2.2c-1.9-2.4-3.2-5-4.1-7.7l-0.2-0.6c-2.9-2.6-3.6-6.8-1.8-10.1c0-0.1,0.2-0.3,0.3-0.5l0-2.7c0-1.8,0-3.6,0-5.4
										c0.1-3.4,1.1-6.4,2.7-8.8c1.9-2.8,5.1-5,8.7-5.9c3.6-0.9,7.5-1,11.3-0.3c3.4,0.7,6.3,2.2,8.5,4.4c2.5,2.6,3.9,6.5,4,10.9
										c0,2,0,3.9,0,5.8l0,2c0.1,0.1,0.1,0.2,0.2,0.3c1.9,3,1.4,7.3-1.2,10l-0.4,0.4c-1,3.2-2.4,6-4.3,8.3v2.1c0,3.8,3.1,6.9,6.9,6.9
										l5.4,0.1c0.4,0.1,9.7,2.8,15.7,15.4l0.2,1.1v4.7C90,84.8,86.8,88,82.8,88z M15,76.7v4.1c0,1.2,1,2.2,2.2,2.2h65.6
										c1.2,0,2.2-1,2.2-2.2v-4.1c-4.5-9-10.6-11.6-12-12.1h-4.3c-6.5,0-11.9-5.3-11.9-11.9v-3.9l0.6-0.7c1.8-2.1,3.1-4.7,4-7.6
										c0.2-1,1-1.7,1.4-2c1.2-1.1,1.4-2.9,0.6-4c-0.3-0.5-0.9-1.3-0.9-2.5v-2.4c0-1.9,0-3.8,0-5.8c-0.1-3.1-1-5.8-2.7-7.5
										c-1.8-1.9-4.1-2.6-5.8-2.9c-3.1-0.6-6.3-0.5-9.1,0.2c-2.5,0.6-4.6,2-5.8,3.9c-1.1,1.6-1.7,3.7-1.8,6.1c0,1.7,0,3.5,0,5.3v3.1
										c0.1,1-0.5,1.9-0.8,2.4c-0.8,1.5-0.5,3.3,0.6,4.2c1,0.7,1.3,1.8,1.5,2.5c0.8,2.7,2.1,4.9,3.8,7l0.6,0.7v4c0,6.5-5.3,11.9-11.9,11.9
										H27C25.6,65.1,19.5,67.7,15,76.7z"/>
								</g>
								</svg>
							</i>
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>" required>
								<?php echo "<p class='text-danger'>$errEmail</p>";?>
								<i>
									<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
									<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
									<g>
										<path fill="#CCCCCC" d="M83.5,26.6H16.4c-1.3,0-2.4,1.1-2.4,2.4v42.1c0,1.3,1.1,2.4,2.4,2.4h67.1c1.3,0,2.4-1.1,2.4-2.4V29
											C85.9,27.7,84.8,26.6,83.5,26.6z M18.8,33.4l21.5,15.9L18.8,66.8V33.4z M50,51.3L23.2,31.4h53.6L50,51.3z M43.3,51.6l5.4,4
											c0.4,0.3,0.8,0.4,1.3,0.4c0.4,0,0.9-0.1,1.3-0.4l5.6-4.2c0,0,0,0,0,0l20.9,17.3H22.2L43.3,51.6z M59.8,49.2l21.3-15.8v33.4
											L59.8,49.2z"/>
									</g>
									</svg>
								</i>
							</div>
						</div>
						<div class="form-group">
							<label for="mobile" class="col-sm-2 control-label">Mobile</label>
							<div class="col-sm-10">
								<input type="tell" class="form-control" maxlength="10" id="mobile" name="mobile" placeholder="Your mobile" required>
								<?php echo "<p class='text-danger'>$errMobile</p>";?>
								<i>
									<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
									<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
									<g>
										<path fill="#CCCCCC" d="M50,82.8c1.8,0,2.6-0.8,2.6-2.6c0-1.8-0.8-2.6-2.6-2.6c-1.8,0-2.6,0.8-2.6,2.6C47.4,81.9,48.2,82.8,50,82.8
											z"/>
										<path fill="#CCCCCC" d="M63.4,14.8H36.6c-2.7,0-4.9,2.2-4.9,4.9v62.7c0,2.7,2.2,4.9,4.9,4.9h26.9c2.7,0,4.9-2.2,4.9-4.9V19.6
											C68.3,16.9,66.1,14.8,63.4,14.8z M34.7,76h30.6v6.3c0,1-0.8,1.8-1.8,1.8H36.6c-1,0-1.8-0.8-1.8-1.8V76z M65.3,26.8V73H34.7V26.8
											H65.3z M36.6,17.8h26.9c1,0,1.8,0.8,1.8,1.8v4.1H34.7v-4.1C34.7,18.6,35.5,17.8,36.6,17.8z"/>
										<path fill="#CCCCCC" d="M46.6,22.3h6.7c0.9,0,1.5-0.6,1.5-1.5c0-0.9-0.6-1.5-1.5-1.5h-6.7c-0.9,0-1.5,0.6-1.5,1.5
											C45.1,21.7,45.7,22.3,46.6,22.3z"/>
									</g>
									</svg>
								</i>
							</div>
						</div>
						<div class="form-group">
							<label for="city" class="col-sm-2 control-label">City</label>
							<div class="col-sm-10">
								<select name="city" id="city" class="form-control" required>
									<option>City</option>
									<option>Mumbai</option>
									<option>Pune</option>
									<option>Bangalore</option>
									<option>Delhi</option>
									<option>Hyderabad</option>
								</select>
								<?php echo "<p class='text-danger'>$errHuman</p>";?>
							</div>
						</div>
						<div class="form-group">
							<label for="Type of property" class="col-sm-2 control-label">Type of property</label>
							<div class="col-sm-10">
								<select name="property_type" id="propertytype" class="form-control" required>
									<option>Type of property</option>
									<option>Apartment</option>
									<option>Bungalow</option>
									<option>Corporate</option>
								</select>
								<?php echo "<p class='text-danger'>$errHuman</p>";?>
							</div>
						</div>
						<div class="form-group">
							<label for="address" class="col-sm-2 control-label">Address</label>
							<div class="col-sm-10">
								<textarea class="form-control" id="address" style="height:auto;" rows="4" placeholder="Address" name="address" required><?php echo htmlspecialchars($_POST['message']);?></textarea>
								<?php echo "<p class='text-danger'>$errMessage</p>";?>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-10 col-sm-offset-2">
								<input type="button" onclick="fnListForm();" value="CONTACT ME" class="btn blue">
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
		</section>
		<section class="hiw-details">
			<div class="container">
				<div class="full-width">
					<h2>Why Get Set Home?</h2>
					<p><strong>High Quality affordable accommodations</strong> Get all amenities and benefits of a fully furnished accommodation at 1/5th the price by sharing it with like-minded individuals. Plus no brokerage.</p>
				</div>
			</div>
		</section>
		<section class="hiw-details _affordable">
			<div class="container">
				<div class="__text">
					<h2>Affordable ready to move in <br> homes for individuals</h2>
					<p>
						<i>
							<svg version="1.0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
								<g>
									<polygon fill="#69c6bc" points="38.3,47.8 44.1,52.5 58.9,39.6 66,40.9 44,60.4 34,52.1 	"></polygon>
								</g>
							</svg>
						</i>We do not base our preferences based on caste, gender or social status.
					</p>
					<p>
						<i>
							<svg version="1.0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
								<g>
									<polygon fill="#69c6bc" points="38.3,47.8 44.1,52.5 58.9,39.6 66,40.9 44,60.4 34,52.1 	"></polygon>
								</g>
							</svg>
						</i>
						Not just homes we build relationships.
					</p>
				</div>
				<div class="__image">
					

				</div>
			</div>
		</section>
		<section class="hiw-details">
			<div class="container">
				<div class="full-width">
					<h2>Why Get Set Home?</h2>
					<p><strong>A Ready Set Home</strong><br> Our Homes are fully furnished with LED TV, Fridge, Microwave, Washing Machine, Maid services, Internet, Bed, Wardrobe, Sofa, fully operational kitchen and other house essentials. Only thing required is you and your luggage.</p>
				</div>
			</div>
		</section>
		<section class="hiw-details _inclusive">
			<div class="container">
				<div class="__image">
					
				</div>
				<div class="__text">
					<h2>We are all inclusive</h2>
					<p>
						<i>
							<svg version="1.0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
								<g>
									<polygon fill="#69c6bc" points="38.3,47.8 44.1,52.5 58.9,39.6 66,40.9 44,60.4 34,52.1 	"></polygon>
								</g>
							</svg>
						</i>
						A Fully Furnished House with all services included.
					</p>
					<p>
						<i>
							<svg version="1.0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
								<g>
									<polygon fill="#69c6bc" points="38.3,47.8 44.1,52.5 58.9,39.6 66,40.9 44,60.4 34,52.1 	"></polygon>
								</g>
							</svg>
						</i>
						We ease your burden now as you don’t have to pay for Electricity, Water, Maid, Gas, Cable and Wi-fi Bills.
					</p>
					<p>
						<i>
							<svg version="1.0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
								<g>
									<polygon fill="#69c6bc" points="38.3,47.8 44.1,52.5 58.9,39.6 66,40.9 44,60.4 34,52.1 	"></polygon>
								</g>
							</svg>
						</i>
						We also manage all your paperwork from Agreement to Police Verification
					</p>
				</div>
			</div>
		</section>
		<section class="hiw-details">
			<div class="container">
				<div class="full-width">
					<h2>Feel at Home</h2>
					<p><strong>A Ready Set Home</strong><br> Our services include full time care-takers/maid services, regular maintenance and repairs, timely documentation, agreement registration, police verification, payment &amp; return of deposit. We take care of it all so you can enjoy and feel at home.</p>
				</div>
			</div>
		</section>
		<section class="hiw-details _access">
			<div class="container">
				<div class="__text">
					<h2>Your Access to hassle free stay</h2>
					<p>
						<i>
							<svg version="1.0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
								<g>
									<polygon fill="#69c6bc" points="38.3,47.8 44.1,52.5 58.9,39.6 66,40.9 44,60.4 34,52.1 	"></polygon>
								</g>
							</svg>
						</i>
						Shared accommodation starting at Rs.5,000 per month.
					</p>
					<p>
						<i>
							<svg version="1.0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
								<g>
									<polygon fill="#69c6bc" points="38.3,47.8 44.1,52.5 58.9,39.6 66,40.9 44,60.4 34,52.1 	"></polygon>
								</g>
							</svg>
						</i>
						Variety of options from Triple Sharing to Single Rooms.
					</p>
					<p>
						<i>
							<svg version="1.0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
								<g>
									<polygon fill="#69c6bc" points="38.3,47.8 44.1,52.5 58.9,39.6 66,40.9 44,60.4 34,52.1 	"></polygon>
								</g>
							</svg>
						</i>
						No Brokerages, no registration fees, no hidden costs. You get a Premium apartment spending 1/5th the price.
					</p>
				</div>
				<div class="__image">
					
				</div>
			</div>
		</section>
		<?php require_once 'inc_testimonials.php'; ?>
		<?php require_once 'inc_numbers.php'; ?>
		

		<section class="fl_100" style="display:none;">
			<?php require_once 'inc_breadcrumb.php'; ?>
		</section>
		<?php require_once 'inc_footer.php'; ?>
		<script>
			$(document).ready(function (){
				$(".lys>a").on("click", function(){
					if($(".list-space-callout").css("display") == "block"){
						$(".list-space-callout").slideUp();
						$(this).text("LIST YOUR SPACE");
					} else {
						$(".list-space-callout").slideDown();
						$(this).text("Close");
					}
				});
			});


			function fnListForm(){
				var name 			= $("#name").val();
				var email  			= $("#email").val();
				var mobile 			= $("#mobile").val();
				var city 			= $("#city").val();
				var propertytype 	= $("#propertytype").val();
				var address 		= $("#address").val();

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

				if (city == "" || city == "City") {
					alert("Please Select the property type");
					$("#propertytype").focus();
					return false;
				}

				if (propertytype == "" || propertytype == "Type of property") {
					alert("Please Select the property type");
					$("#propertytype").focus();
					return false;
				}

				if (address == "") {
					alert("Please enter your address");
					$("#address").focus();
					return false;
				}
				document.getElementById("ListForm").submit();
			}
		</script>
	</body>
</html>