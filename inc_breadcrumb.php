<div class="bc">
	<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
		<a href="/" itemprop="url">
			<span itemprop="title">Get Home Online</span>
		</a>
	</span>
	<?php if($pageName == "about-us") { ?>
	<span class="">&gt;</span>
	<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
		<span itemprop="title">About GetSetHome</span>
	</span>
	<?php } else if($pageName == "contact-us") { ?>
	<span class="">&gt;</span>
	<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
		<span itemprop="title">Contact GetSetHome</span>
	</span>
	<?php } else if($pageName == "thank-you") { ?>
	<span class="">&gt;</span>
	<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
		<span itemprop="title">Thank you/span>
	</span>
	<?php } else if($pageName == "property-listing") { ?>
	<span class="">&gt;</span>
	<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
		<span itemprop="title"><?php echo (($p1 != "property-listing") ? ucfirst($p1)." property" : "All region property"); ?> list</span>
	</span>
	<?php } else if($pageName == "property") { ?>
	<span class="">&gt;</span>
	<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
		<a href="<?php echo (($p1 != "property") ? "/".$p1 : ""); ?>/property-listing" itemprop="url">
			<span itemprop="title"><?php echo (($p1 != "property") ? ucfirst($p1)." property list" : "All region property list"); ?> </span>
		</a>
	</span>
	<span class="">&gt;</span>
	<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
		<span itemprop="title"><?php echo $arrayApartment[0]["Property_BldgName"]; ?></span>
	</span>
	<?php } else { ?>
	<span class="">&gt;</span>
	<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
		<span itemprop="title"><?php echo ucfirst($p1); ?></span>
	</span>
	<?php } ?>
</div>