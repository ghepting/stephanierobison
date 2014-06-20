<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Stephanie Robison</title>
<link href="jflickrfeed/colorbox/colorbox.css" rel="stylesheet" type="text/css" media="screen" /> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="jflickrfeed/colorbox/jquery.colorbox-min.js"></script>
<script src="jflickrfeed/cycle/jquery.cycle.all.min.js"></script>
<script src="jflickrfeed/jflickrfeed.min.js"></script>
<?php
switch($_REQUEST['set']) {
	case 'sculptures':
		$set = '72157628874159401';
		$first = 'http://farm8.staticflickr.com/7159/6732752243_d1abee0bb2.jpg';
		$caption = 'Offering';
		$desc = nl2br('2007
31"x 20"x 20"
wood, white marble, orange alabaster');
		break;
	case 'drawings':
		$set = '72157628956831599';
		$first = 'http://farm8.staticflickr.com/7004/6743248521_a2eee58b2e.jpg';
		$caption = 'EGO';
		$desc =  nl2br('2009
9" x 12"
ink, watercolor & foil tape on paper');
		break;
	case 'site-specific':
		$set = '72157628874149751';
		$first = 'http://farm8.staticflickr.com/7141/6732752505_b591deac3c.jpg';
		$caption = 'Water Landing';
		$desc = nl2br('2007
12\' x 9\' x 13\'
wood, fabric, linoleum, foam, cotton batting, pocket change');
		break;
}
?>
<script type="text/javascript">
	$(function() {
		$('#worksamples').jflickrfeed({
			feedapi: 'photoset.gne',
			limit: 18,
			qstrings: {
			set: '<?php echo $set; ?>',
			nsid: '74360641@N07' 
			},
			itemTemplate:
			'<li>' +
				'<a rel="{{image}}" href="{{image}}" title="{{title}}">' +
					'<img src="{{image_s}}" alt="{{title}}" />' +
					'<span class="desc" style="display:none;">{{description}}</span>' +
				'</a>' +
			'</li>'
		}, function(data) {
			$('#worksamples a').click(function() {
				$('#largeImage img').hide().attr('src', $(this).attr('rel')).fadeIn(500);
				$('div#caption').hide().text($(this).attr('title')).fadeIn(500);
				$('div#desc').hide().html($(this).children('span').html()).fadeIn(500);
				return false;
			});
		});
		$('a[rel=colorbox]').colorbox();
	});
</script>
<link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="<?php if(basename($_SERVER['PHP_SELF']) == 'index.php') { echo 'home '; } ?>page">
<div id="header">
	<ul id="nav">
		<li><a href="./" title="Stephanie Robison">Home</a></li>
		<li><a href="./sculptures.html" title="Sculptures">Sculptures</a></li>
		<li><a href="./drawings.html" title="Drawings">Drawings</a></li>
		<li><a href="./site-specific.html" title="Site-Specific Work">Site-Specific Work</a></li>
		<li><a href="./bio.php" title="Bio">Bio</a></li>
		<li><a href="./curriculum-vita.php" title="Cirriculum Vita">CV</a></li>
		<li><a href="http://www.facebook.com/pages/Stephanie-Robison/139869204583" target="_blank" title="Find on Facebook">Facebook</a></li>
		<li><a href="./contact.php" title="Contact Stephanie Robison">Contact</a></li>
	</ul>
	<h1><a href="./">Stephanie Robison</a></h1>
</div>
