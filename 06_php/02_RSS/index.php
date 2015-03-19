<?php

	$data = '<?xml version="1.0" encoding="UTF-8"?><rss><item><title>I&amp;#8217;m retiring after serving as 4chan&amp;#8217;s founder and administrator for more than 11 years,...</title><description>&lt;p&gt;I&amp;#8217;m retiring after serving as 4chan&amp;#8217;s founder and administrator for more than 11 years, from the age of 15. You can read the full announcement on the &lt;a href="https://www.4chan.org/news" title="4chan - News - THE NEXT CHAPTER" target="_blank"&gt;4chan News page&lt;/a&gt;.&lt;/p&gt; &lt;p&gt;—moot&lt;/p&gt;</description><link>http://blog.4chan.org/post/108740766397</link><guid>http://blog.4chan.org/post/108740766397</guid><pubDate>Wed, 21 Jan 2015 11:05:37 -0500</pubDate><category>4chan</category><category>moot</category><category>retirement</category><category>mootxico</category><category>goodnight sweet prince</category></item></rss>';	
	
	$xml = simplexml_load_string($data);
	var_dump($xml);

	$array = array();

	//var_dump($array);

	$item = array(
		"title" => 'WebM support on 4chan',
		"description" => '<p>Today we added support for <a href="https://en.wikipedia.org/wiki/WebM" title="WebM - Wikipedia" target="_blank">WebM</a> files on 4chan&#8217;s image boards.</p> <p>While WebM is technically a video file format, it offers many advantages over animated GIFs—namely superior image quality, support for more than 256 colors, and reduced file size. Its main disadvantage is <a href="http://caniuse.com/webm" title="Can I use the WebM/VP8 video format?" target="_blank">browser compatibility</a>, however<span> 86% of 4chan&#8217;s visits come from browsers that include full or partial support for WebM, and plug-ins are available for those that don&#8217;t (like </span><a href="https://tools.google.com/dlpage/webmmf/" title="WebM for Internet Explorer" target="_blank">Internet Explorer</a><span> and </span><a href="http://www.perian.org/" title="Perian for Mac OS X" target="_blank">Safari</a>)<span>.</span></p> <p><span>We decided to disallow WebM files with sound for a few reasons, but mainly because it&#8217;s our intention to provide the site with better animated images, and not true video support. To that end, we only accept WebM files with one video stream and no audio streams, that are shorter than 120 seconds long, no larger than 2048x2048 pixels, and less than 3&#160;MB in size.</span></p> <p>We&#8217;re eager to see how 4chan&#8217;s users will adopt WebM, and have posted <strike>this short guide</strike> on encoding them to ease adoption. Many thanks to desuwa for both championing and implementing this feature.</p> <p>—moot</p>',
		"link" => 'http://blog.4chan.org/post/81896300203',
		"pubdate" => 'Sun, 06 Apr 2014 12:51:00 -0400',
		"guid" => 'http://blog.4chan.org/post/81896300203',
		"site" => '4chan',
		"author" => 'moot',
		"subject" => 'webm',
		);

	//var_dump($rss);

	$item1 = array();
	$item1["title"] = 'I&#8217;m retiring after serving as 4chan&#8217;s founder and administrator for more than 11 years,...';
	$item1["description"] = '<p>I&#8217;m retiring after serving as 4chan&#8217;s founder and administrator for more than 11 years, from the age of 15. You can read the full announcement on the <a href="https://www.4chan.org/news" title="4chan - News - THE NEXT CHAPTER" target="_blank">4chan News page</a>.</p> <p>—moot</p>';
	$item1["link"] = 'http://blog.4chan.org/post/108740766397';
	$item1["pubdate"] = 'Wed, 21 Jan 2015 11:05:37 -0500';
	$item1["guid"] = 'http://blog.4chan.org/post/108740766397';
	$item1["site"] = '4chan';
	$item1["author"] = 'moot';
	$item1["subject"] = 'retirement';
	$item1["categories"] = 'mootxico, goodnight sweet prince';

	//var_dump($rss1);

	$rss = array($item, $item1);

	$wantedProperties = array("title", "pubDate", "description");

	function buildHtmlRowFor($actualite, $wantedProperties) {
		$html = "<tr>";
		foreach ($wantedProperties as $key => $val) {
			$html .= "<td>" . $actualite->$val . "</td>";
		}
		$html .= "</tr>";
		return $html;
	}

	function buildHtmlTableFor($array, $wantedProperties) {
		$html = "<table>";
		foreach ($array as $key => $value) {
			$html .= buildHtmlRowFor($value, $wantedProperties);
		}
		$html .= "</table>";
		return $html;
	}

	// function displayArray($flux) {
	// 	echo "<table>";
	// 	foreach ($flux as $key => $array) {
	// 		echo "<tr>";
	// 		foreach ($array as $key => $value) {
	// 			echo "<td>" . $value . "</td>";
	// 		}
	// 		echo "</tr>";
	// 	}
	// 	echo "</table>";
	// }

	echo buildHtmlTableFor($xml, $wantedProperties);