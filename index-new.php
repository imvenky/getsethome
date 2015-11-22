<?php 
	require_once 'inc_global.php';
	$json_apartment		= file_get_contents('./data/json/'.($p1 == "" ? 'all' : $p1).'_ap_list.json');
	$array_apartment 	= json_decode($json_apartment, true);
	$array_apartment 	= $array_apartment["arrProperty"];


	$json_region		= file_get_contents('./data/json/region.json');
	$array_region 		= json_decode($json_region, true);
	$array_region 		= $array_region["arrRegions"];

	$pageName = "home";
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
	<section class="home-page">
		<?php // require_once 'inc_header.php'; ?>
		<div class='pageblock' id='fullscreen'>
			<div class='slider'>
				<div class='slide' id="first">
					<article class="slider-l">
						<div class="blrBg" style="background-image:url('/img/promotions/1.jpg');"></div>
					</article>
				</div>
				<div class='slide' id="sec">
					<article class="slider-l">
						<div class="blrBg" style="background-image:url('/img/promotions/2.jpg');"></div>
					</article>
				</div>
				<div class='slide' id="third">
					<article class="slider-l">
						<div class="blrBg" style="background-image:url('/img/promotions/3.jpg');"></div>
					</article>
				</div>
				<div class='slide' id="fourth">
					<article class="slider-l">
						<div class="blrBg" style="background-image:url('/img/promotions/4.jpg');"></div>
					</article>
				</div>
			</div>
		</div>
		<div class="welComeNote">
			<h2>Welcome home</h2>
			<p>Welcome to the world of uncompromised shared living<br> <a href="/how-it-works/" class="btn blur">How it works?</a></p>
		</div>
	</section>
	<section class="search-bar">
		<div class="hs-wrapper">
			<div class="hs-container">
				<div class="hs-block">
					<div class="hs-city">
						<div class="dropdown">
							<div class="dd-label"><input type="text" placeholder="Which city are you moving in?" disabled></div>
							<div class="dd-menu" data-filter="city">
								<ul>
									<li>Mumbai</li>
									<li>Pune</li>
									<li>Bangalore</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="hs-occupancy">
						<div class="dropdown">
							<div class="dd-label">
								<input type="text" placeholder="Occupancy" disabled>
								<span class="icon-ar-down"></span>
							</div>
							<div class="dd-menu" data-filter="Occupancy">
								<ul>
									<li>Single</li>
									<li>Double</li>
									<li>Triple</li>
									<li>Premium</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="hs-gender">
						<div class="dropdown">
							<div class="dd-label">
								<input type="text" placeholder="Gender" disabled>
								<span class="icon-ar-down"></span>
							</div>
							<div class="dd-menu" data-filter="Gender">
								<ul>
									<li>Male</li>
									<li>Female</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="hs-search-btn">
						<a href="/property-listing/?&amp;city=&amp;occupancy=&amp;gender=" class="btn blue">Search</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- City list -->
	<section class="hm-article">
		<div class="hma-head">
			<h1>GetSetHome Cities</h1>
		</div>
		<div class="hm-city-list">
			<?php for ($i=0; $i <count($array_region); $i++) {  ?>
				<aside class="columnBox">
					<?php if($array_region[$i]['RegionStatus'] == "N") { ?>
					<a>
					<?php } else { ?>
					<a href="/<?php echo strtolower($array_region[$i]['RegionName']); ?>/property-listing/">
					<?php } ?>
						<div class="boxCnt">
							<img src="/img/city/<?php echo strtolower($array_region[$i]['RegionName']); ?>.jpg" alt="GetSetHome - PG in <?php echo $array_region[$i]['RegionName']; ?>">
							<div class="details">
								<img src="/img/city/icons/<?php echo strtolower($array_region[$i]['RegionName']); ?>.png" alt="">
								<p class="__name"><?php echo $array_region[$i]['RegionName']; ?></p>
								<?php if($array_region[$i]['RegionStatus'] == "N") { ?>
									<span class="btn blur">Coming Soon</span>
								<?php } else { ?>
									<span class="btn blur" >Know more</span>
								<?php } ?>
							</div>
						</div>
					</a>
				</aside>
			<?php } ?>
		</div>
	</section>
	<!-- Our promise -->
	<section class="hm-article _our-promise">
		<div class="hma-head">
			<h1>Our Promise</h1>
		</div>
		<div class="container">
			<aside class="columnBox _plus">
				<div class="boxCnt">
					<span class="__img"><i><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.0//EN" "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
<svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
<g>
	<path fill="#FFFFFF" d="M64.8,62l1.8-1.8l2.8-2.9c0,0,3.5-4,5.5-8c0,0,4-7.8-0.8-14.3c0,0-6-7.7-15.7-1.5c0,0-2.9,1.9-5.8,5.3
		c0,0-1.1,1.4-2.3,1.5c0,0-1.5,0.2-3.2-1.7c0,0-3.6-5.3-10.6-7.4c0,0-7.8-2.3-12,6.1c0,0-3.5,8.1,2.2,14.8c0,0,4.1,5.5,11,12.1
		l5.9,5.5l-3.8,3.7c0,0-13.4-12.5-16.9-16.8c-3.8-4.9-5.9-11.2-4.7-18.3c1.1-8.5,9.4-14.4,19.2-12.4c0,0,5.2,0.2,11.6,6.5
		c0,0,1,1.1,2.2-0.1c0,0,8.3-9.1,19.2-6c0,0,10.6,2.2,11.4,13.7c0,0,1.6,7-3.9,15.1c0,0-3.4,5.3-7,8L64.8,62z"/>
</g>
</svg></i></span><br>
					<p>A fully furnished quality home<br> that fulfills all your needs<br> at an affordable price.</p>
				</div>
			</aside>
			<aside class="columnBox _plus">
				<div class="boxCnt">
					<span class="__img"><i><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.0//EN" "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
<svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
<g>
	<path fill="#FFFFFF" d="M46.7,35.2l-3.3-2.9v57.9c0,0.4,0.3,0.6,0.6,0.6h4.9c0.3,0,0.6-0.3,0.6-0.6V32.6L46.7,35.2z"/>
	<path fill="#FFFFFF" d="M52.8,85.4h-3.1c-0.5,0-0.8-0.4-0.8-0.8v-0.5c0-0.5,0.4-0.8,0.8-0.8h3.1c0.5,0,0.8,0.4,0.8,0.8v0.5
		C53.6,85.1,53.3,85.4,52.8,85.4z"/>
	<path fill="#FFFFFF" d="M54,88.7h0.5c0.5,0,0.9-0.4,0.9-0.9v-6.9c0-0.5-0.4-0.9-0.9-0.9H54c-0.5,0-0.9,0.4-0.9,0.9v6.9
		C53.1,88.3,53.5,88.7,54,88.7z"/>
	<path fill="#FFFFFF" d="M47.2,93.5h-1.4c-1.3,0-2.3-1.1-2.3-2.3V79.8c0-1.3,1.1-2.3,2.3-2.3h1.4c1.3,0,2.3,1.1,2.3,2.3v11.4
		C49.5,92.4,48.5,93.5,47.2,93.5z"/>
	<circle fill="none" stroke="#FFFFFF" stroke-width="4" stroke-miterlimit="10" cx="46.4" cy="22" r="13.2"/>
</g>
</svg></i></span><br>
					<p>Access to hassle free stay,<br> no maintenance issues. <br>Just move in with your suitcase.</p>
				</div>
			</aside>
			<aside class="columnBox _equal">
				<div class="boxCnt">
					<span class="__img"><i><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.0//EN" "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
<svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
<g>
	<polygon fill="#FFFFFF" points="38.3,47.8 44.1,52.5 58.9,39.6 66,40.9 44,60.4 34,52.1 	"/>
</g></i></span><br>
					<p>No brokerage, no hidden costs. <br>All services &amp; house bills inclusive.</p>
				</div>
			</aside>
			<aside class="columnBox">
				<div class="boxCnt">
					<span class="__img"><i><svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
<g>
	<path fill="#FFFFFF" d="M59.7,33.7l1.4-1.4l2.1-2.1c0,0,2.6-3,4.1-6c0,0,3-5.8-0.6-10.7c0,0-4.5-5.8-11.8-1.2c0,0-2.2,1.4-4.3,3.9
		c0,0-0.8,1-1.7,1.1c0,0-1.1,0.2-2.4-1.3c0,0-2.7-4-7.9-5.6c0,0-5.8-1.7-9,4.6c0,0-2.6,6.1,1.6,11.1c0,0,3,4.1,8.2,9l4.4,4.1
		L41,42.2c0,0-10-9.4-12.7-12.6c-2.8-3.7-4.4-8.4-3.5-13.7c0.8-6.4,7.1-10.8,14.4-9.3c0,0,3.9,0.2,8.7,4.9c0,0,0.8,0.8,1.7-0.1
		c0,0,6.3-6.8,14.4-4.5c0,0,7.9,1.7,8.6,10.3c0,0,1.2,5.2-3,11.3c0,0-2.5,3.9-5.2,6L59.7,33.7z"/>
	<polygon fill="#53BFB7" points="45,40.6 48.8,43.7 58.5,35.2 63.1,36.1 48.7,48.9 42.2,43.4 	"/>
	<path fill="#FFFFFF" d="M48.7,51.4l-2.5-2.3v44.3c0,0.3,0.2,0.5,0.5,0.5h3.7c0.3,0,0.5-0.2,0.5-0.5V49.3L48.7,51.4z"/>
	<path fill="#FFFFFF" d="M53.3,89.8h-2c-0.5,0-0.8-0.4-0.8-0.8v0c0-0.5,0.4-0.8,0.8-0.8h2c0.5,0,0.8,0.4,0.8,0.8v0
		C54.1,89.4,53.7,89.8,53.3,89.8z"/>
	<path fill="#FFFFFF" d="M54.6,92.3L54.6,92.3c0.5,0,0.9-0.4,0.9-0.9v-4.9c0-0.5-0.4-0.9-0.9-0.9h0c-0.5,0-0.9,0.4-0.9,0.9v4.9
		C53.7,91.9,54.1,92.3,54.6,92.3z"/>
	<path fill="#FFFFFF" d="M48.6,95.9L48.6,95.9c-1.3,0-2.3-1.1-2.3-2.3V86c0-1.3,1.1-2.3,2.3-2.3h0c1.3,0,2.3,1.1,2.3,2.3v7.6
		C50.9,94.9,49.9,95.9,48.6,95.9z"/>
</g>
</svg></i></span><br>
					<!-- <p>Get a set home.</p> -->
					<p class="livelife">Get a Set Home</p>
				</div>
			</aside>
		</div>
	</section>
	<!-- Our Offerings -->
	<section class="hm-article _our-offerings">
		<div class="hma-head">
			<h1>Our Offerings</h1>
		</div>
		<div class="container">
			<aside class="columnBox">
				<div class="boxCnt">
					<span class="__img"><img alt="Shared room | Living Room" src="/img/misc/living.png"></span><br>
					<strong>Living Room</strong>
				</div>
			</aside>
			<aside class="columnBox">
				<div class="boxCnt">
					<span class="__img"><img alt="Shared accomodation" src="/img/misc/bedroom.png"></span><br>
					<strong>Bedroom</strong>
				</div>
			</aside>
			<aside class="columnBox">
				<div class="boxCnt">
					<span class="__img"><img alt="Kitchen" src="/img/misc/kitchen.png"></span><br>
					<strong>Kitchen</strong>
				</div>
			</aside>
			<aside class="columnBox">
				<div class="boxCnt">
					<span class="__img"><img alt="Services | Roommate" src="/img/misc/service.png"></span><br>
					<strong>Services</strong>
				</div>
			</aside>
		</div>
	</section>

	<!-- Our Testimonials -->
	<section class="hm-article _testimonials">
		<div class="hma-head">
			<h1>Hear what people are saying about GetSetHome</h1>
		</div>
		<div class="container">
			<aside class="columnBox">
				<div class="boxCnt">
					<span class="__img"><img alt="If someone asks for a Guest House / PG accomodation I will always recommend Get Set Home. I really liked the services provided by Get Set Home team." src="/img/testimonial/2.jpg"></span><br>
					<strong>Manuj</strong><br><span>Mumbai</span><br><span class="ex-text"></span>
					<div class="__overlay-details">
						<p>If someone asks for a Guest House / PG accomodation I will always recommend Get Set Home. I really liked the services provided by Get Set Home team.</p>
						<strong class="_name">Manuj<br><span>Mumbai</span></strong>
					</div>
				</div>
			</aside>
			<aside class="columnBox">
				<div class="boxCnt">
					<span class="__img"><img alt="After coming to Pune the struggle was to find a nice and decent accommodation but all I could find was messy PG’s. So while searching I came across Get Set Home. The experience was very good right from the 1st day when I spoke Get Set Home team till the time I stayed and left Pune. The facility is good and there is a quick turnaround for services." src="/img/testimonial/4.jpg"></span><br>
					<strong>Rahul Jain</strong><br><span class="ex-text">Zensar Technologies</span><br><span class="ex-text">Senior Software Engineer</span>
					<div class="__overlay-details">
						<p>After coming to Pune the struggle was to find a nice and decent accommodation but all I could find was messy PG’s. So while searching I came across Get Set Home. The experience was very good right from the 1st day when I spoke Get Set Home team till the time I stayed and left Pune. The facility is good and there is a quick turnaround for services.</p>
						<strong class="_name">Rahul Jain<br><span>Zensar Technologies</span></strong>
					</div>
				</div>
			</aside>
			<aside class="columnBox">
				<div class="boxCnt">
					<span class="__img"><img alt="After coming to Pune the struggle was to find a nice and decent accommodation but all I could find was messy PG’s. So while searching I came across Get Set Home. The experience was very good right from the 1st day when I spoke Get Set Home team till the time I stayed and left Pune. The facility is good and there is a quick turnaround for services." src="/img/testimonial/5.jpg"></span><br>
					<strong>Vinayak Kapoor</strong><br><span class="ex-text">Spectra Management</span><br><span class="ex-text">Senior Executive</span>
					<div class="__overlay-details">
						<p>I landed in Pune just a few months back and was struggling to get a home away from

home. But I had to suffer for around 4 months when I got to know about Get Set

Home through one of the classified ads website. The place I stayed for almost 7-8

months was the most comfortable stay I had in Pune. Getting a fully furnished flat

with all most all the amenities at nominal price is just unbelievable.

Keep up the good work Muddassar. Kudos!</p>
						<strong class="_name">Vinayak Kapoor<br><span>Spectra Management</span></strong>
					</div>
				</div>
			</aside>
			<aside class="columnBox">
				<div class="boxCnt">
					<span class="__img"><img alt="It's been a great experience living at Forest County. Good Facilities, Problems are well attended. Felt like home. Get Set Home team are very genuine." src="/img/testimonial/2.jpg"></span><br>
					<strong>Sangeeta Dubey</strong><br><span class="ex-text">Persistent Systems</span><br><span class="ex-text">Module Lead</span>
					<div class="__overlay-details">
						<p>It's been a great experience living at Forest County. Good Facilities, Problems are well attended. Felt like home. Get Set Home team are very genuine.</p>
						<strong class="_name">Sangeeta Dubey<br><span>Persistent Systems</span></strong>
					</div>
				</div>
			</aside>
			<aside class="columnBox">
				<div class="boxCnt">
					<span class="__img"><img alt="It's been a great experience living at Forest County. Good Facilities, Problems are well attended. Felt like home. Get Set Home team are very genuine." src="/img/testimonial/1.jpg"></span><br>
					<strong>Renuka Krishnappa</strong><br><span class="ex-text">Deputy Manager Sales</span><br><span class="ex-text">Mantri Developers Pvt Ltd</span>
					<div class="__overlay-details">
						<p>I stayed at Beryl apartment in Kharadi Pune which was provided by Get Set Home. It

was one of the best PG services I have experienced so far. The apartment was

spacious, clean and with all the necessary facilities like fridge, TV, Wifi, maid, closet,

furniture,etc. Also in case there was some problem with any of the things mentioned

above, Muddasar and his team would fix it immediately. I would personally

recommend Get Set Home for any one looking for comfortable and best PG services.

I never faced any problem infact I felt like home. Keep up the good work</p>
						<strong class="_name">Renuka Krishnappa<br><span>Deputy Manager Sales</span></strong>
					</div>
				</div>
			</aside>
        </div>
	</section>
	<!-- Our Numbers -->
	<section class="hm-article _numbers">
		<div class="container">
			<aside class="columnBox">
				<div class="boxCnt">
					<div><h6>326</h6><p>Happy Home Seekers</p></div>
				</div>
			</aside>
			<aside class="columnBox">
				<div class="boxCnt">
					<div><h6>18, 00, 000</h6><p>Brokerage Saved</p></div>
				</div>
			</aside>
			<aside class="columnBox">
				<div class="boxCnt">
					<div><h6>{cups of coffee}<sup>late nights</sup></h6><p>&amp; .... Lots of love</p></div>
				</div>
			</aside>
		</div>
	</section>
	<section class="fl_100 needPad" style="display:none">
		<div class="seCLbl fl_100">
			<h3 class="secTxt">Partners</h3>
		</div>
		<div class="container">
			<div class="clientCnt column1">
				<div>
					<img src="img/clients/client_1.jpg" alt="">
				</div>
				<div>
					<img src="img/clients/client_2.png" alt="">
				</div>
				<div>
					<img src="img/clients/client_3.jpg" alt="">
				</div>
				<div>
					<img src="img/clients/client_4.jpg" alt="">
				</div>
				<div>
					<img src="img/clients/client_5.png" alt="">
				</div>
				<div>
					<img src="img/clients/client_6.jpg" alt="">
				</div>
			</div>
		</div>
	</section>
	<?php require_once 'inc_footer.php'; ?>
	<script type="text/javascript" src="/js/slider.js"></script>
	<script>
		var mainslider;
		var sliding = false;

        var testCount = 1;
        $(document).on('keypress',function(e){
			var p = e.which;
			if(p==13){
				if($(".hs-block .dd-menu li").is(":visible")){
					$(".hs-block .dd-menu li:visible").click();
				}
			}else if(p==27){
				if($(".hs-block .dd-menu").is(":visible")){
					$(".hs-block .dd-menu").hide();
				}
			}
	 	});
		$(document).ready(function(){
			$(document).click(function(e) {
		        if (!$(e.target).is('.hs-block, .hs-block *')) {
		            $(".dd-menu").hide();
		        }
		    });
			$(".hs-block .dd-label input").keypress(function() {
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
			$(".hs-block .dd-menu li").on("click", function(){
				var selected 	= $(this).text();
				var parents  	= $(this).parents(".dd-menu"); 
				var type 		= parents.attr("data-filter");
				tempType 		= type;
				parents.prev("div").find("input").val(selected);
				parents.hide();
				searchStr += "&"+ type +"="+ selected;
				$(".hs-search-btn a").attr("href", "/property-listing/?"+searchStr);
				$(".dd-label").find(".icon-ar-down").removeClass("_rotate");
			});

			$(".hs-block  .dd-label").on("click", function(){
				$(".dd-menu").slideUp();
				$(".dd-label").find(".icon-ar-down").removeClass("_rotate");
				$(this).find(".icon-ar-down").addClass("_rotate");
				$(this).next('div').slideDown();
			});

            

		    var options = {
		        slides: '.slide', // The name of a slide in the slidesContainer
		        swipe: false,    // Add possibility to Swipe > note that you have to include touchSwipe for this
		        transition: "fade", // Accepts "slide" and "fade" for a slide or fade transition
		        slideTracker: true, // Add a UL with list items to track the current slide
		        slideTrackerID: 'slideposition', // The name of the UL that tracks the slides
		        slideOnInterval: true, // Slide on interval
		        interval: 3000, // Interval to slide on if slideOnInterval is enabled
		        animateDuration: 1000, // Duration of an animation
		        animationEasing: 'ease', // Accepts: linear ease in out in-out snap easeOutCubic easeInOutCubic easeInCirc easeOutCirc easeInOutCirc easeInExpo easeOutExpo easeInOutExpo easeInQuad easeOutQuad easeInOutQuad easeInQuart easeOutQuart easeInOutQuart easeInQuint easeOutQuint easeInOutQuint easeInSine easeOutSine easeInOutSine easeInBack easeOutBack easeInOutBack
		        pauseOnHover: true, // Pause when user hovers the slide container
		        magneticSwipe: false, // This will attach the slides to the mouse's position when swiping/dragging
		        neverEnding: true // Enable this to create a 'neverending' effect.
		    };

		    $(".slider").simpleSlider(options);
		    mainslider = $(".slider").data("simpleslider");
		    /* yes, that's all! */

		    $(".slider").on("beforeSliding", function(event){
		        var prevSlide = event.prevSlide;
		        var newSlide = event.newSlide;
		        $(".slider .slide[data-index='" + prevSlide + "'] .slidecontent").fadeOut();
		        $(".slider .slide[data-index='" + newSlide + "'] .slidecontent").hide();

		        sliding = true;
		    });

		    $(".slider").on("afterSliding", function(event){
		        var prevSlide = event.prevSlide;
		        var newSlide = event.newSlide;
		        $(".slider .slide[data-index='"+newSlide+"'] .slidecontent").fadeIn();
		        sliding = false;
		    });

		    /**
		     * Control the slider by scrolling
		     */
		    // $(window).bind('mousewheel', function(event) {
		    //     if(!sliding){
		    //         if(event.originalEvent.deltaY > 0){
		    //             mainslider.nextSlide();
		    //         }
		    //         else{
		    //             mainslider.prevSlide();
		    //         }
		    //     }
		    // });


		    $('.slide .backstretch img').on('dragstart', function(event) { event.preventDefault(); });

		    $(".slidecontent").each(function(){
		        $(this).css('margin-top', -$(this).height()/2);
		    });
		   // $(".testiIn").simpleSlider();

			// $(".testiIn").css({width: $(".testiIn >div").length * $(document).width(), position:"relative"})
			// $(".testi").css({width: $(document).width()});
			// $(".testi-slider span").on("click", function(){
			// 	var ind = $(".testi-slider span").index(this);
			// 	$(".testiIn").css({left:-$(".testiIn>div").eq(ind).width() * ind});
			// 	$(".testi-slider span").removeClass("_active");
			// 	$(this).addClass("_active");
			// })
		});
	</script>
</body>
</html>