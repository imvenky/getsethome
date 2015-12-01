<?php 
	require_once("inc_global.php");
	$json_region		= file_get_contents('data/json/region.json');
	$json_apartment		= file_get_contents('data/json/'.($p1 == "property-listing" ? 'all' : $p1).'_ap_list.json');
	$array_apartment 	= json_decode($json_apartment, true);
	$array_region	 	= json_decode($json_region, true);
	$array_region	 	= $array_region["arrRegions"];
	$array_apartment	= $array_apartment["arrProperty"];

	$pageName			= $p1;

	if($p1 !== "property-listing") {
		$region = $p1;
	}
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
<body class="listing-page" itemscope="" itemtype="http://schema.org/Place">
	<?php require_once 'inc_body.php'; ?>
	<section class="other-page-header">
		<?php require_once 'inc_header.php'; ?>
	</section>
	<section class="property-lst">
		<h1>Property listing</h1>
		<div class="flt-container">
			<div class="flt-city">
				<div class="dropdown">
					<div class="dd-label">
						<input type="text" value="<?php echo ucfirst($region); ?>" placeholder="City" disabled>
						<span class="icon-ar-down"></span>
					</div>
					<div class="dd-menu _city-dd">
						<ul>
							<?php for($i=0; $i<count($array_filters['City']); $i++) { ?>
								<li><a href="/<?php echo strtolower($array_filters['City'][$i]); ?>/property-listing/"><?php echo $array_filters['City'][$i] ?></a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="flt-location">
				<div class="dropdown">
					<div class="dd-label">
						<input type="text" value="<?php echo $_GET['Accommodation']; ?>" placeholder="Accommodation type" disabled>
						<span class="icon-ar-down"></span>
					</div>
					<div class="dd-menu" data-filter="Accommodation">
						<ul>
							<?php for($i=0; $i<count($array_filters['Category']); $i++) { ?>
								<li onclick="fnChangeFilter('Accommodation','<?php echo $array_filters['Category'][$i] ?>')"><?php echo $array_filters['Category'][$i] ?></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="flt-occupancy">
				<div class="dropdown">
					<div class="dd-label">
						<input type="text" value="<?php echo $_GET['Occupancy']; ?>" placeholder="Occupancy" disabled>
						<span class="icon-ar-down"></span>
					</div>
					<div class="dd-menu" data-filter="Occupancy">
						<ul>
							<?php for($i=0; $i<count($array_filters['Occupancy']); $i++) { ?>
								<li onclick="fnChangeFilter('Occupancy','<?php echo $array_filters['Occupancy'][$i] ?>')"><?php echo $array_filters['Occupancy'][$i] ?></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="flt-gender">
				<div class="dropdown">
					<div class="dd-label">
						<input type="text" value="<?php echo $_GET['Gender']; ?>" placeholder="Gender" disabled>
						<span class="icon-ar-down"></span>
					</div>
					<div class="dd-menu" data-filter="Gender">
						<ul>
							<?php for($i=0; $i<count($array_filters['Gender']); $i++) { ?>
								<li onclick="fnChangeFilter('Gender','<?php echo $array_filters['Gender'][$i] ?>')"><?php echo $array_filters['Gender'][$i] ?></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="flt-price">
				<div class="dropdown">
					<div class="dd-label">
						<input type="text" placeholder="Price" disabled>
						<span class="icon-ar-down"></span>
					</div>
					<div class="dd-menu" data-filter="Price">
						<ul>
							<?php for($i=0; $i<count($array_filters['Price']); $i++) { ?>
								<li onclick="fnChangeFilter('Price','<?php echo $array_filters['Price'][$i] ?>')"><?php echo $array_filters['Price'][$i] ?></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="flt-preferences">
				<div class="dropdown">
					<div class="dd-label">
						<input type="text" placeholder="Preferences" disabled>
						<span class="icon-ar-down"></span>
					</div>
					<div class="dd-menu" data-filter="Preferences">
						<ul>
							<?php for($i=0; $i<count($array_filters['Preferences']); $i++) { ?>
								<li onclick="fnChangeFilter('Preferences','<?php echo $array_filters['Preferences'][$i] ?>')"><?php echo $array_filters['Preferences'][$i] ?></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="flt-search-text">
				<input placeholder="Search">
			</div>
			<div class="flt-search-btn">
				<a class=""><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 50 50" height="50px" id="Layer_1" version="1.1" viewBox="0 0 50 50" width="50px" xml:space="preserve"><rect fill="none" height="50" width="50"/><circle cx="21" cy="20" fill="none" r="16" stroke="#000000" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/><line fill="none" stroke="#000000" stroke-miterlimit="10" stroke-width="4" x1="32.229" x2="45.5" y1="32.229" y2="45.5"/></svg></a>
			</div>
		</div>
		<div class="pl-container">
			<div class="no-property">No Property Available</div>
			<?php for($i=0; $i<count($array_apartment); $i++){ ?>
			<div class="columnBox" data-filter="<?php echo $array_apartment[$i]['Property_CityID']; ?>|<?php echo $array_apartment[$i]['Property_PriceRange']; ?>|<?php echo ($array_apartment[$i]["Property_GenderAllowed"] == "M" ?  "Male" : "Female") ?>|<?php echo $array_apartment[$i]['Property_occupancy']; ?>|<?php echo $array_apartment[$i]['Property_Category']; ?>|<?php echo $array_apartment[$i]['Property_preferences']; ?>" data-fav="<?php echo $array_apartment[$i]['Property_Id']; ?>-<?php echo $array_apartment[$i]['Property_CityID']; ?>">
				<div class="p-card">
					<div class="__img">
						<?php if($p1 == "" || $p1 == "property-listing"){ ?>
							<a href="/property/<?php echo $array_apartment[$i]['Property_Id']; ?>/">
						<?php } else { ?>
							<a href="/<?php echo $p1; ?>/property/<?php echo $array_apartment[$i]['Property_Id']; ?>/">
						<?php } ?>
							<img class="__lazyload" alt="<?php echo $array_apartment[$i]['Property_Area']; ?>, <?php echo $array_apartment[$i]['Property_CityID']; ?>" src="/img/properties/list/list-load.jpg" data-src="/img/properties/list/<?php echo $array_apartment[$i]['Property_Id']; ?>.jpg" onError="this.onerror=null;this.src='/img/properties/list/list-cs.jpg';">
						</a>
					</div>
					<a class="__like" href="javascript:;" onclick="fnSetFav('myFav','<?php echo $array_apartment[$i]['Property_Id']; ?>-<?php echo $array_apartment[$i]['Property_CityID']; ?>',1);" class="__like">
						<i class="yet-add _active">
							<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
								<path fill="#FFFFFF" d="M72.7,63.3l2.8-2.8l4.3-4.4c0,0,5.3-6,8.4-12.1c0,0,6.1-11.8-1.2-21.7c0,0-9.2-11.8-23.9-2.4
							c0,0-4.5,2.9-8.8,8c0,0-1.6,2.1-3.5,2.2c0,0-2.2,0.4-4.8-2.6c0,0-5.5-8.1-16.1-11.3c0,0-11.9-3.5-18.2,9.3c0,0-5.3,12.4,3.3,22.6
							c0,0,6.2,8.4,16.7,18.4l8.9,8.4l-5.8,5.6c0,0-20.4-19.1-25.7-25.5c-5.8-7.5-8.9-17.1-7.2-27.9C3.5,14.2,16.2,5.1,31,8.2
							c0,0,7.9,0.4,17.6,9.9c0,0,1.5,1.6,3.4-0.1c0,0,12.7-13.9,29.2-9.2c0,0,16.1,3.4,17.4,20.9c0,0,2.5,10.6-6,23.1c0,0-5.2,8-10.6,12.1
							L72.7,63.3z"/>
							</svg>
						</i>
						<i class="added">
							<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
							<path fill="#FFFFFF" d="M72.7,63.3l2.8-2.8l4.3-4.4c0,0,5.3-6,8.4-12.1c0,0,6.1-11.8-1.2-21.7c0,0-9.2-11.8-23.9-2.4
								c0,0-4.5,2.9-8.8,8c0,0-1.6,2.1-3.5,2.2c0,0-2.2,0.4-4.8-2.6c0,0-5.5-8.1-16.1-11.3c0,0-11.9-3.5-18.2,9.3c0,0-5.3,12.4,3.3,22.6
								c0,0,6.2,8.4,16.7,18.4l8.9,8.4l-5.8,5.6c0,0-20.4-19.1-25.7-25.5c-5.8-7.5-8.9-17.1-7.2-27.9C3.5,14.2,16.2,5.1,31,8.2
								c0,0,7.9,0.4,17.6,9.9c0,0,1.5,1.6,3.4-0.1c0,0,12.7-13.9,29.2-9.2c0,0,16.1,3.4,17.4,20.9c0,0,2.5,10.6-6,23.1c0,0-5.2,8-10.6,12.1
								L72.7,63.3z"/>
							<polygon fill="#53BFB7" points="43,77.3 50.6,83.6 70.3,66.4 79.7,68.3 50.5,94.1 37.3,83.1 "/>
							</svg>
						</i>
					</a>
					<div class="details">
						<div class="inn-details">
							<span class="__price"><?php echo $commonRupees; ?> <?php echo $array_apartment[$i]['Property_Price']; ?></span><br>
							<span class="__location"><?php echo $array_apartment[$i]['Property_Area']; ?></span><br>
							<span class="__area"><?php echo $array_apartment[$i]['Property_CityID']; ?></span><br>
						</div>

						<a class="gender-icon">
							<?php if($array_apartment[$i]["Property_GenderAllowed"] == "M"){ ?>
							<i class="__boy">
								<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
									<path d="M89.8,40.6c2.3,4.8,0.1,9-4.3,9.7c-5.2,0.7-8.2-3.1-13.1-6.3c-6.8-4.4-11.9-6.3-18.6-2.6c-1.5,0.8-2.8,2-3.8,3.5  c-1-1.4-2.3-2.6-3.8-3.5c-6.7-3.7-11.7-1.8-18.6,2.6c-4.9,3.2-7.9,7-13.1,6.3c-4.4-0.6-6.7-4.9-4.3-9.7C3.7,41-0.1,48.7,2.5,56.1  c2.3,6.6,6.9,10.1,13.2,12c6.6,2,16.5,2.9,25.1-0.5c4.4-1.8,7.4-4.2,9.3-7c1.9,2.7,4.9,5.2,9.3,7c8.5,3.4,18.4,2.5,25.1,0.5  c6.2-1.9,10.9-5.5,13.2-12C100.1,48.7,96.3,40.9,89.8,40.6z"/>
								</svg>
							</i>
							<?php } else { ?>
							<i class="__girl">
								<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Isolation_Mode" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
									<path d="M98.3,44.4c-0.3-0.7-0.9-1.2-1.7-1.2c-10.3,0-16.4-4-21.4-7.3c-1.4-0.9-2.7-1.7-3.9-2.5c-4-2.2-7.9-3.4-11.3-3.4  c-3.8,0-6.3,1.4-7.4,2.3l-2.4,1.5l-2.5-1.5c-1.2-0.9-3.6-2.2-7.4-2.2c-3.5,0-7.3,1.1-11.3,3.4c-1.3,0.7-2.6,1.6-3.9,2.5  c-5,3.3-11.2,7.3-21.4,7.3c-0.7,0-1.4,0.5-1.7,1.2c-0.3,0.7-0.1,1.5,0.5,2c0.1,0.1,12,10.7,16.6,17.5c6.7,10.1,18.3,16.2,31,16.3  h0.1h0.2l0,0h0.1c12.7-0.1,24.3-6.2,31-16.3c4.6-6.9,16.5-17.4,16.6-17.5C98.4,45.9,98.6,45.1,98.3,44.4z M22,48.4  c0.1-0.3,0.4-0.5,0.7-0.4c0.8,0.1,1.7,0.2,2.7,0.2c3,0,5.9-0.6,8.8-1.2c2.6-0.5,5-1,7.2-1c1.6,0,3,0.3,4.2,0.9l4.5,2.3l4.5-2.3  c1.1-0.6,2.5-0.9,4.2-0.9c2.2,0,4.6,0.5,7.2,1c2.9,0.6,5.8,1.2,8.8,1.2c0.9,0,1.8-0.1,2.7-0.2c0.3,0,0.6,0.1,0.7,0.4  c0.1,0.3-0.1,0.6-0.3,0.7c-0.1,0.1-13.8,6.5-17.8,9.5c-4.9,3.7-9.7,3.7-9.9,3.7c-0.2,0-5,0-9.9-3.7c-4-3-17.6-9.4-17.8-9.5  C22,49,21.9,48.7,22,48.4z M50,78.3L50,78.3c0.1,0,0.2,0,0.2,0H50z"/>
								</svg>
							</i>
							<?php } ?>
						</a>
					</div>
					<div class="overlay-details">
						<a class="gender-icon">
							<?php if($array_apartment[$i]["Property_GenderAllowed"] == "M"){ ?>
							<i class="__boy">
								<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 viewBox="0 35.8 100 36.8" enable-background="new 0 35.8 100 36.8" xml:space="preserve">
								<path d="M89.8,40c2.3,4.8,0.1,9-4.3,9.7c-5.2,0.7-8.2-3.1-13.1-6.3c-6.8-4.4-11.9-6.3-18.6-2.6c-1.5,0.8-2.8,2-3.8,3.5
									c-1-1.4-2.3-2.6-3.8-3.5c-6.7-3.7-11.7-1.8-18.6,2.6c-4.9,3.2-7.9,7-13.1,6.3c-4.4-0.6-6.7-4.9-4.3-9.7c-6.5,0.4-10.3,8.1-7.7,15.5
									c2.3,6.6,6.9,10.1,13.2,12c6.6,2,16.5,2.9,25.1-0.5c4.4-1.8,7.4-4.2,9.3-7c1.9,2.7,4.9,5.2,9.3,7c8.5,3.4,18.4,2.5,25.1,0.5
									c6.2-1.9,10.9-5.5,13.2-12C100.1,48.1,96.3,40.3,89.8,40z"/>
								</svg>
							</i>
							<?php } else { ?>
							<i class="__girl">
								<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
								<svg version="1.1" id="Isolation_Mode" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
									 y="0px" viewBox="0 25.3 100 58.7" enable-background="new 0 25.3 100 58.7" xml:space="preserve">
								<path d="M98.3,43.7c-0.3-0.7-0.9-1.2-1.7-1.2c-10.3,0-16.4-4-21.4-7.3c-1.4-0.9-2.7-1.7-3.9-2.5c-4-2.2-7.9-3.4-11.3-3.4
									c-3.8,0-6.3,1.4-7.4,2.3l-2.4,1.5l-2.5-1.5c-1.2-0.9-3.6-2.2-7.4-2.2c-3.5,0-7.3,1.1-11.3,3.4c-1.3,0.7-2.6,1.6-3.9,2.5
									c-5,3.3-11.2,7.3-21.4,7.3c-0.7,0-1.4,0.5-1.7,1.2s-0.1,1.5,0.5,2c0.1,0.1,12,10.7,16.6,17.5c6.7,10.1,18.3,16.2,31,16.3
									c0,0,0.1,0,0.1,0h0.2c0,0,0,0,0,0c0,0,0.1,0,0.1,0c12.7-0.1,24.3-6.2,31-16.3c4.6-6.9,16.5-17.4,16.6-17.5
									C98.4,45.2,98.6,44.4,98.3,43.7z M22,47.7c0.1-0.3,0.4-0.5,0.7-0.4c0.8,0.1,1.7,0.2,2.7,0.2c3,0,5.9-0.6,8.8-1.2c2.6-0.5,5-1,7.2-1
									c1.6,0,3,0.3,4.2,0.9l4.5,2.3l4.5-2.3c1.1-0.6,2.5-0.9,4.2-0.9c2.2,0,4.6,0.5,7.2,1c2.9,0.6,5.8,1.2,8.8,1.2c0.9,0,1.8-0.1,2.7-0.2
									c0.3,0,0.6,0.1,0.7,0.4c0.1,0.3-0.1,0.6-0.3,0.7c-0.1,0.1-13.8,6.5-17.8,9.5c-4.9,3.7-9.7,3.7-9.9,3.7c-0.2,0-5,0-9.9-3.7
									c-4-3-17.6-9.4-17.8-9.5C22,48.3,21.9,48,22,47.7z M50,77.7C50,77.7,50,77.7,50,77.7c0.1,0,0.2,0,0.2,0H50z"/>
								</svg>
							</i>
							<?php } ?>
						</a>
						<span class="__price"><?php echo $commonRupees; ?> <?php echo $array_apartment[$i]['Property_Price']; ?></span><br>
						<span class="__location"><?php echo $array_apartment[$i]['Property_FlatNo']; ?> <?php echo $array_apartment[$i]['Property_BldgName']; ?></span><br>
						<div class="other-details">
							<span class="__area"><?php echo $array_apartment[$i]['Property_TypeID']; ?></span> <span>|</span> <span class="__no-bh"><?php echo $array_apartment[$i]['Property_NoOfBedsAvailable']; ?> Left</span><br>
							<?php if($p1 == "" || $p1 == "property-listing"){ ?>
								<a class="btn blur" href="/property/<?php echo $array_apartment[$i]['Property_Id']; ?>/">
							<?php } else { ?>
								<a class="btn blur" href="/<?php echo $p1; ?>/property/<?php echo $array_apartment[$i]['Property_Id']; ?>/">
							<?php } ?>Belong Here</a>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
			<section class="bc-conatiner">
				<?php require_once 'inc_breadcrumb.php'; ?>
			</section>
		</div>
	</section>
	<?php require_once 'inc_footer.php'; ?>
	<script type="text/javascript" src="/js/lazy.js"></script>
	<script type="text/javascript">
		var filteredJson 	= new Object();
		var cityFlt			= "<?php echo $_GET['City']; ?>";
		var catFlt			= "<?php echo $_GET['Accommodation']; ?>";
		var genFlt			= "<?php echo $_GET['Gender']; ?>";

        $(document).on('keypress',function(e){
			var p = e.which;
			if(p==13){
				if($(".dd-menu li").is(":visible")){
					$(".dd-menu li:visible").click();
				}
			}else if(p==27){
				if($(".dd-menu").is(":visible")){
					$(".dd-menu").slideUp();
					$(".dd-label").find(".icon-ar-down").removeClass("_rotate");
				}

			}
	 	});

		$(document).ready(function(){
			$('.__lazyload').lazyImage();
			if(cityFlt !== ""){
				filteredJson['City'] = cityFlt;
			}
			if(catFlt !== ""){
				filteredJson['Accommodation'] = catFlt;
			}
			if(genFlt !== ""){
				filteredJson['Gender'] = genFlt;
			}

			fnCheckFav();
			if(JSON.stringify(filteredJson) === '{}'){
				fnShowAll();
			} else {
				fnFiltered();
			}

		    $(".dropdown select").on("change", function(){
		    	var selected 	= $(this).val();
		    	var type 		= $(this).attr("data-type");
		    	searchStr = "&"+ type +"="+ selected;
		    	$(".__buttons .blue").attr("href", "/property-listing/?"+searchStr);
		    })

			$(".flt-search-btn").on("click", function(){
				if($(".flt-search-text").css("display")=="block"){
					$(".flt-search-text").fadeOut();
				} else {
					$(".flt-search-text").fadeIn();
				}
			});

			$(document).click(function(e) {
		        if (!$(e.target).is('.flt-container, .flt-container *')) {
		            $(".dd-menu").slideUp();
		            $(".dd-label").find(".icon-ar-down").removeClass("_rotate");
		            $(".flt-search-text").fadeOut();
		        }
		    });


			$(".dd-label input").keypress(function() {
				var value  = $(this).val();
				var action = $(this).attr("placeholder");

				$(".dd-menu").slideUp();
				$(".dd-label").find(".icon-ar-down").removeClass("_rotate");
				if($(this).val() == ""){
					$("[data-filter='"+action+"']").slideUp();
				} else {
					$("[data-filter='"+action+"']").slideDown();
					$("[data-filter='"+action+"']").find(".icon-ar-down").addClass("_rotate");
					$("[data-filter='"+action+"'] ul li").hide();
					$("[data-filter='"+action+"'] ul li:contains('"+value+"')").show();
				}

			});
			var searchStr = "";
			var tempType;
			$(".dd-menu li").on("click", function(){
				var selected 	= $(this).text();
				var parents  	= $(this).parents(".dd-menu"); 
				var type 		= parents.attr("data-filter");
				tempType 		= type;
				
				$(".dd-label").find(".icon-ar-down").removeClass("_rotate");
				parents.prev("div").find("input").val(selected);
				parents.hide();
			});

			$(".dd-label").on("click", function(){
				$(".dd-menu").slideUp();
				$(".dd-label").find(".icon-ar-down").removeClass("_rotate");
				$(this).find(".icon-ar-down").addClass("_rotate");
				if($(this).next('div').css("display") == "block") {
					$(this).next('div').slideUp();
				} else {
					$(this).next('div').slideDown();
				}
			});
		});
		function fnShowAll(){
			$(".pl-container .columnBox").show();
			setTimeout(function(){
	    		$(".pl-container .columnBox:visible").addClass("itemloaded");
			}, 500);
		}
		function fnFiltered(){
			$.each(filteredJson, function(i, item) {
				$(".pl-container .columnBox[data-filter*='"+item+"']").show();
			});
			setTimeout(function(){
	    		$(".pl-container .columnBox:visible").addClass("itemloaded");
			}, 500);
		}
		function fnChangeFilter(fltrType, value){
			var box = $(".pl-container .columnBox");
			box.hide();
			box.removeClass("itemloaded");

			filteredJson[fltrType] = value;
			$.each(filteredJson, function(i, item) {
				$(".pl-container .columnBox[data-filter*='"+item+"']").show();
			});
			setTimeout(function(){
	    		$(".pl-container .columnBox:visible").addClass("itemloaded");

				if(!$(".columnBox").hasClass("itemloaded")){
					$(".no-property").show();
				} else {
					$(".no-property").hide();
				}
			}, 500);

		}
	</script>
</body>
</html>