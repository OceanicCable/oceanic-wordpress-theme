<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
		<div class="cb"></div>
		</div><!-- #main .wrapper -->
	</div><!-- #main-container .container -->
	<div class="cb"></div>
	<div id="oceanic-updates-container" class="container">
		<div id="oceanic-updates" class="row">
			<div id="around-hawaii" class="col_4 column">
				<h3><a href="/community/" title="">Community</a></h3>
				<?php from_around_hawaii(); ?>
			</div>
			<?php get_sidebar( 'special-offer' ); ?>
		</div>
	</div>
	<div class="cb"></div>
	<div id="footer-container" class="container">
		<footer id="colophon" class="row" role="contentinfo">
			<div id="footer-widgets" class="col_7 column">
				<?php get_sidebar( 'footer' ); ?>
			</div>
			<div class="col_5 column">
				<div id="connect-with-us" class="col_12 column">
					<h3 class="widget-title">Connect With Us</h3>
					<div id="footer-social">
						<a href="https://www.facebook.com/OceanicCable" title="Like Us on Facebook" id="social-facebook" target="_blank"></a>
						<a href="http://instagram.com/oceaniccable" title="Follow Us on Instagram" id="social-instagram" target="_blank"></a>
						<a href="http://www.youtube.com/OceanicCable" title="Subscribe to Our Channel" id="social-youtube" target="_blank"></a>
						<a href="https://twitter.com/OceanicCable" title="Follow Us on Twitter" id="social-twitter" target="_blank"></a>
					</div>
					<?php wp_nav_menu( array( 'menu' => 'footer', 'sort_column' => 'menu_order', 'container_class' => 'nav-footer' ) ); ?>
					<div id="site-info"><span>&copy; 1997 - <?php echo date('Y'); ?> Oceanic Time Warner Cable. </span><span>All rights reserved.</span></div>
				</div>

			</div>
		</footer><!-- #colophon -->
		<div class="cb"></div>
	</div><!-- #footer-container .container -->
</div><!-- #page -->

<!-- Pop up -->
<div class="modal fade" role="dialog" aria-labelledby="shoppingLabel" aria-hidden="true" id="start-shopping">
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-body">
				<h4 id='shoppingLabel'>Start Shopping</h4>
				<div class='shopping-cta'>
					<div class="col_6 column">
						<h5>New Customer</h5>
						<a href="http://order.timewarnercable.com/" title="Get Started" class="rm" target="_blank">Get Started<span class="icon"></span></a>
					</div>
					<div class="col_6 column">
						<h5>Already A Customer?</h5>
						<a href="https://www.timewarnercable.com/residential/order?type=ebf" title="Add Services" class="rm" target="_blank">Add Services<span class="icon"></span></a>
					</div>
					<button class="md-close" data-dismiss="modal">Close me!</button>
				</div>
			</div><!--/.shopping-cta-->

		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php
$channels = get_settings('tv_channels');
echo htmlspecialchars_decode($channels);
// echo htmlentities($channels,ENT_QUOTES);
?>


<!-- 200+ Chanels -->
	<!-- <div id="channels-200" class="white-popup mfp-hide channels-pop">
		<h1>Preferred TV</h1>
		<p>These channels show a sample of programming by TV plan. All channels may not be available in all locations. <a href="http://www.timewarnercable.com/en/tv/channels-lineup.html">See channels by package in your area.</a></p>
		<div class="channels"><p>A &amp; E*<br>ABC*<br>ABC Family*<br>Al Jazeera America<br>AMC*<br>American Heroes Channel<br>Animal Planet*<br>Aspire<br>
		Azteca*<br>BBC America*<br>BBC World News<br>BET*<br>Big Ten Network*<br>Bloomberg*<br>Bravo*<br>Cartoon Network*<br>CBS*<br>
		CCTV News<br>Centric<br>Chiller<br>CLOO<br>CMT*<br>CNBC*<br>CNBC World<br>CNN*<br>Comedy Central*<br>Cooking Channel*<br>C-SPAN*<br>
		C-SPAN 2*<br>C-SPAN 3*<br>CW*<br>Daystar<br>Destination America*<br>Discovery*<br>Discovery - Fit &amp; Health*<br>Disney*<br>Disney Junior*<br>
		Disney XD*<br>DIY*<br>E!*<br>Educational Access<br>ESPN*<br>ESPN Deportes*<br>ESPN 2*<br>ESPN News*<br>ESPN University*<br>EVINE Live<br>
		EWTN*<br>Food Network*<br>Fox*<br>Fox Business Network*<br>Fox Deportes*<br>Fox Movie Channel*<br>Fox News Channel*<br>Fox Sports*<br>Fox Sports 2*<br>
		FUSE*<br>FX*<br>FXX*<br>FYI*<br>Golf*<br>Government Access<br>GSN*<br>Hallmark*<br>Hallmark Movies &amp; Mysteries*<br>HGTV*<br>History*<br>HLN*<br>
		HSN*<br>ID*<br>IFC<br>Independent Film Channel*<br>INSP<br>Investigation Discovery*<br>ION<br>Jewelry Television*<br>Leased Access<br>Lifetime*<br>
		Lifetime Movie Network*<br>Lifetime Real Women*<br>LMN*<br>Logo<br>MLB*<br>MSNBC*<br>MTV*<br>MTV 2*<br>MTV Hits<br>MTV Jams<br>Music Choice^<br>National Geographic*<br>
		National Geographic Wild*<br>NBA*<br>NBC*<br>NBC Sports Network*<br>NFL NETWORK*<br>Nick JR*<br>Nick Toons*<br>Nickelodeon*<br>On Demand Channels*†<br>Outdoor Channel*<br>
		Ovation<br>OWN*<br>Oxygen*<br>Palladia*<br>Public Access<br>PBS*<br>QVC*<br>REELZ*<br>SCIENCE*<br>Shop Zeal<br>Smithsonian<br>SoapNet*<br>Speed*<br>
		Spike TV*<br>Sprout<br>Style*<br>Sundance*<br>SyFy*<br>TBN<br>TBS*<br>TCM*<br>Teen Nick<br>Telemundo*<br>Telemundo 2<br>The Weather Channel*<br>TLC*<br>
		TNT*<br>Travel Channel*<br>truTV*<br>TV Guide Network*<br>TV Land*<br>TV One*<br>TWC Deportes*<br>TWC News*<br>TWC SportsNet*<br>TWC SportsNet LA*<br>
		Univision*<br>UP*<br>USA*<br>Velocity*<br>VH 1*<br>VH 1 Classic*<br>WGN America*</p><div>
		<p>*Also available in HD.</p>
		<p>†On Demand may require purchase or subscription.</p>
		<p>^Lease of a Set-Top Box is required.<br></p>
	</div> -->

	<!-- 70+ Chanels -->
	<!-- <div id="channels-70" class="white-popup mfp-hide channels-pop">
		<h1>Standard TV</h1>
		<p>These channels show a sample of programming by TV plan. All channels may not be available in all locations. <a href="http://www.timewarnercable.com/en/tv/channels-lineup.html">See channels by package in your area.</a></p>
		<div class="channels"><p>A &amp; E*<br>ABC*<br>ABC Family*<br>AMC*<br>Animal Planet*<br>Azteca*<br>BET*<br>Bravo*<br>Cartoon Network*<br>CBS*<br>CNBC*<br>CNN*<br>Comedy Central*<br>C-SPAN*<br>
		C-SPAN 2*<br>C-SPAN 3*<br>CW*<br>Discovery*<br>Disney*<br>E!*<br>Educational Access<br>ESPN*<br>ESPN 2*<br>EVINE Live<br>Food Network*<br>Fox*<br>
		Fox Business Network*<br>Fox News Channel*<br>Fox Sports*<br>Fox Sports 1*<br>FX*<br>Galavision*<br>Golf*<br>Government Access<br>HGTV*<br>History*<br>HLN*<br>
		HSN*<br>Investigation Discovery*<br>Lifetime*<br>LMN*<br>MSNBC*<br>MTV*<br>Music Choice^<br>National Geographic*<br>NBC*<br>Nickelodeon*<br>
		Oxygen*<br>PAC 12*<br>Palladia*<br>PBS*<br>Public Access<br>QVC*<br>Spike TV*<br>SyFy*<br>TBS*<br>Telemundo*<br>The Weather Channel*<br>TLC*<br>
		TNT*<br>truTV*<br>TV Guide Network*<br>TV Land*<br>TWC Deportes*<br>TWC News*<br>TWC SportsNet*<br>TWC SportsNet LA*<br>Univision*<br>USA*<br>
		Velocity<br>VH 1*<br>WGN America*<br></p></div>
		<p>*Also available in HD.</p>
		<p>†On Demand may require purchase or subscription.</p>
		<p>^Lease of a Set-Top Box is required.<br></p>
	</div> -->


<?php if (is_page(388)) { ?>

	<div id="nbc-ports-live-extra" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/nbc-sports-live-extra/id542511686?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/nbc-sports-live-extra/id542511686?mt=8', '']);" title="Watch NBC Live Extra on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="https://play.google.com/store/apps/details?id=air.com.nbcuni.com.nbcsports.liveextra" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=air.com.nbcuni.com.nbcsports.liveextra', '']);" title="Watch NBC Live Extra on Android" target="_blank"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a>
		<a title="Get it Here" href="http://stream.nbcsports.com/liveextra/" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="fyi" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/fyi-tv/id887597381?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/fyi-tv/id887597381?mt=8', '']);" title="Watch FYI on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="http://fyi.tv/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://fyi.tv/', '']);" title="Watch FYI online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="phone-2-go" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/phone-2-go/id876009911?ls=1&amp;mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/phone-2-go/id876009911?ls=1&amp;mt=8', '']);" title="Phone 2 Go on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="http://play.google.com/store/apps/details?id=com.timewarnercable.phone2go" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://play.google.com/store/apps/details?id=com.timewarnercable.phone2go', '']);" title="My TWC on Android" target="_blank"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a>
	</div>

	<div id="twc-tv" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/twcable-tv/id420455839?mt=8&amp;ls=1" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/twcable-tv/id420455839?mt=8&amp;ls=1', '']);" title="TWC TV on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="https://play.google.com/store/apps/details?id=com.TWCableTV" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=com.TWCableTV', '']);" title="TWC TV on Android" target="_blank"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a>
		<a href="https://video.timewarnercable.com" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://video.timewarnercable.com', '']);" title="Watch TWC TV online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
		<a href="http://www.roku.com/channels/#!details/23048/time-warner-cable" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.roku.com/channels/#!details/23048/time-warner-cable', '']);" title="Watch TWC TV on Roku" target="_blank"><img src="/wp-content/uploads/2014/01/roku-btn.png" alt=""></a>
		<a href="http://www.twcableuntangled.com/2013/07/now-launching-twc-tv-for-samsung-smart-tvs/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.twcableuntangled.com/2013/07/now-launching-twc-tv-for-samsung-smart-tvs/', '']);" title="Watch TWC TV on your Samsung TV" target="_blank"><img src="/wp-content/uploads/2014/01/samsung-smart-tv-btn.png" alt=""></a>
		<a href="http://www.amazon.com/Time-Warner-Cable-TWC-TV%C2%AE/dp/B00GY1DWUO" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.amazon.com/Time-Warner-Cable-TWC-TV%C2%AE/dp/B00GY1DWUO', '']);" title="TWC TV on your Kindle" target="_blank"><img src="/wp-content/uploads/2014/01/kindle-btn.png" alt=""></a>
		<a href="http://www.timewarnercable.com/en/residential-home/support/faqs/faqs-tv/twctvapp.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.timewarnercable.com/en/residential-home/support/faqs/faqs-tv/twctvapp.html', '']);" title="Frequently Asked Questions" target="_blank"><img src="/wp-content/uploads/2014/01/faq-btn.png" alt=""></a>
	</div>

	<div id="my-twc" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/my-twc/id498008691?ls=1&amp;mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/my-twc/id498008691?ls=1&amp;mt=8', '']);" title="Use My TWC on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="https://play.google.com/store/apps/details?id=com.mytwc.common.resource&amp;feature=search_result#]" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=com.mytwc.common.resource&amp;feature=search_result#]', '']);" title="My TWC on Android" target="_blank"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a>
	</div>

	<div id="oceanic-tv" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/oceanic-tv/id601624623?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/oceanic-tv/id601624623?mt=8', '']);" title="Oceanic TV  on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="https://play.google.com/store/apps/details?id=com.oceanic.octv" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=com.oceanic.octv', '']);" title="Oceanic TV on Android" target="_blank"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a>
		<a href="http://oc16.tv/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://oc16.tv/', '']);" title="Watch Oceanic TV online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="intelligent-home" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/oceanic-tv/id601624623?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/oceanic-tv/id601624623?mt=8', '']);" title="Oceanic TV  on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="https://play.google.com/store/apps/details?id=com.oceanic.octv" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=com.oceanic.octv', '']);" title="Oceanic TV on Android" target="_blank"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a><br>
	</div>

	<div id="twc-wifi-finder" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/wifi-finder/id492768487?ls=1&amp;mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/wifi-finder/id492768487?ls=1&amp;mt=8', '']);" title="TWC WiFi on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="https://play.google.com/store/apps/details?id=com.timewarnercable.wififinder&amp;feature=search_result#" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=com.timewarnercable.wififinder&amp;feature=search_result#', '']);" title="TWC WiFi on Android" target="_blank"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a>
	</div>

	<div id="social-one" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="http://www.twcc.com/socialone" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.twcc.com/socialone', '']);" title="More information on Social One" target="_blank"><img src="/wp-content/uploads/2014/01/learn-more-btn.png" alt=""></a>
	</div>

	<div id="phone-2-go" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/phone-2-go/id876009911?ls=1&amp;mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/phone-2-go/id876009911?ls=1&amp;mt=8', '']);" title="Phone 2 Go on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="https://play.google.com/store/apps/details?id=com.timewarnercable.phone2go" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=com.timewarnercable.phone2go', '']);" title="Phone 2 Go on Android" target="_blank"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a>
	</div>

	<div id="hbo-go" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/hbo-go/id429775439?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/hbo-go/id429775439?mt=8', '']);" title="HBO GO on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="https://play.google.com/store/apps/details?id=com.HBO&amp;hl=en" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=com.HBO&amp;hl=en', '']);" title="HBO GO on Android" target="_blank"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a>
		<a href="http://www.hbogo.com/geo.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.hbogo.com/geo.html', '']);" title="Watch HBO Go online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="max-go" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/max-go/id453560335?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/max-go/id453560335?mt=8', '']);" title="Cinemax on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="https://play.google.com/store/apps/details?id=com.MAXGo&amp;hl=en" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=com.MAXGo&amp;hl=en', '']);" title="Cinemax on Android" target="_blank"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a>
		<a href="http://www.maxgo.com/geo.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.maxgo.com/geo.html', '']);" title="Watch MAX GO online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="starz-play" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/starz-play/id550221096" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/starz-play/id550221096', '']);" title="STARZ on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="https://play.google.com/store/apps/details?id=com.bydeluxe.d3.android.program.starz" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=com.bydeluxe.d3.android.program.starz', '']);" title="STARZ on Android" target="_blank"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a>
		<a href="http://www.amazon.com/Starz-Entertainment-LLC-STARZ-Play/dp/B00CJJKO2E/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.amazon.com/Starz-Entertainment-LLC-STARZ-Play/dp/B00CJJKO2E/', '']);" title="Watch STARZ on Kindle" target="_blank"><img src="/wp-content/uploads/2014/01/kindle-btn.png" alt=""></a>
		<a href="http://www.barnesandnoble.com/w/starz-play-starz-entertainment-llc/1115251406?ean=2940043949554&amp;isbn=2940043949554" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.barnesandnoble.com/w/starz-play-starz-entertainment-llc/1115251406?ean=2940043949554&amp;isbn=2940043949554', '']);" title="Watch STARZ on Nook" target="_blank"><img src="/wp-content/uploads/2014/01/nook-btn.png" alt=""></a>
		<a href="http://www.starzplay.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.starzplay.com/', '']);" title="Watch STARZ online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="showtime-anytime" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/app/id484232467" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/app/id484232467', '']);" title="Showtime on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="https://play.google.com/store/apps/details?id=com.showtime.showtimeanytime" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=com.showtime.showtimeanytime', '']);" title="Showtime on Android" target="_blank"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a>
		<a href="http://www.showtimeanytime.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.showtimeanytime.com/', '']);" title="Watch Showitme online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="encore-play" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/encore-play/id556968605" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/encore-play/id556968605', '']);" title="Encore on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="https://play.google.com/store/apps/details?id=com.bydeluxe.d3.android.program.encore" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=com.bydeluxe.d3.android.program.encore', '']);" title="Encore on Android" target="_blank"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a>
		<a href="http://www.amazon.com/Starz-Entertainment-LLC-ENCORE-Play/dp/B00CJJLX4W/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.amazon.com/Starz-Entertainment-LLC-ENCORE-Play/dp/B00CJJLX4W/', '']);" title="Watch Encore on Kindle Fire" target="_blank"><img src="/wp-content/uploads/2014/01/kindle-btn.png" alt=""></a>
		<a href="http://www.barnesandnoble.com/w/encore-play-starz-entertainment-llc/1115251404?ean=2940043949523&amp;isbn=2940043949523" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.barnesandnoble.com/w/encore-play-starz-entertainment-llc/1115251404?ean=2940043949523&amp;isbn=2940043949523', '']);" title="Watch Encore on Nook" target="_blank"><img src="/wp-content/uploads/2014/01/nook-btn.png" alt=""></a>
		<a href="http://www.encoreplay.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.encoreplay.com/', '']);" title="Watch Encore online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="mtv" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="http://www.mtv.com/tve/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.mtv.com/tve/', '']);" title="Watch MTV online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="vh1" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="http://www.vh1.com/tve" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.vh1.com/tve', '']);" title="Watch VH-1 online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="spike" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="http://www.spike.com/tve" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.spike.com/tve', '']);" title="Watch Spike online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="comedy-central" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="http://www.comedycentral.com/tve/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.comedycentral.com/tve/', '']);" title="Watch Comedy Central online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="bet" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="http://www.bet.com/tve/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.bet.com/tve/', '']);" title="Watch BET online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="hallmark-channel" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="http://www.hallmarkchanneleverywhere.com/Home?NodeID=27" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.hallmarkchanneleverywhere.com/Home?NodeID=27', '']);" title="Watch the Hallmark Channel online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="amc" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="http://www.amctv.com/full-episodes/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.amctv.com/full-episodes/', '']);" title="Watch AMC online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="we-tv" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="http://www.wetv.com/full-episodes/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.wetv.com/full-episodes/', '']);" title="Watch We TV online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="ifc" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="http://www.ifc.com/full-episodes/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.ifc.com/full-episodes/', '']);" title="Watch IFC online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="sundance-channel" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="http://www.sundancechannel.com/full-episodes/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.sundancechannel.com/full-episodes/', '']);" title="Watch Sundance online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="revolt-tv" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="http://revolt.tv/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://revolt.tv/', '']);" title="Watch Revolt online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="e-now" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/e!-now/id876520365?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/e!-now/id876520365?mt=8', '']);" title="E! Now on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="http://www.eonline.com/now" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.eonline.com/now', '']);" title="Watch E! Now online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="cmt" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/cmt-app/id730993656?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/cmt-app/id730993656?mt=8', '']);" title="Get CMT on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
	</div>

	<div id="history" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/history/id576009463" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/history/id576009463', '']);" title="History Channel on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="https://play.google.com/store/apps/details?id=com.aetn.history.watch" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=com.aetn.history.watch', '']);" title="History Channel on Android" target="_blank"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a>
		<a href="http://www.history.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.history.com/', '']);" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
		<a href="http://www.roku.com/channels/#!details/35059/history" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.roku.com/channels/#!details/35059/history', '']);" target="_blank"><img src="/wp-content/uploads/2014/01/roku-btn.png" alt=""></a>
		<a href="http://www.xbox.com/en-US/Live/Partners" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.xbox.com/en-US/Live/Partners', '']);" target="_blank"><img src="/wp-content/uploads/2014/01/xbox360-btn.png" alt=""></a>
		<a href="http://www.apple.com/appletv/whats-on/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.apple.com/appletv/whats-on/', '']);" target="_blank"><img src="/wp-content/uploads/2014/01/apple-tv-btn.png" alt=""></a>
	</div>

	<div id="a-e" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/a-e/id571711580" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/a-e/id571711580', '']);" title="A&amp;E on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="https://play.google.com/store/apps/details?id=com.aetn.aetv.watch" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=com.aetn.aetv.watch', '']);" title="A&amp;E on Android" target="_blank"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a>
		<a href="http://www.aetv.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.aetv.com/', '']);" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
		<a href="http://www.roku.com/channels/#!details/35442/aande" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.roku.com/channels/#!details/35442/aande', '']);" target="_blank"><img src="/wp-content/uploads/2014/01/roku-btn.png" alt=""></a>
		<a href="http://www.xbox.com/en-US/Live/Partners" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.xbox.com/en-US/Live/Partners', '']);" target="_blank"><img src="/wp-content/uploads/2014/01/xbox360-btn.png" alt=""></a>
		<a href="http://www.apple.com/appletv/whats-on/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.apple.com/appletv/whats-on/', '']);" target="_blank"><img src="/wp-content/uploads/2014/01/apple-tv-btn.png" alt=""></a>
	</div>

	<div id="lifetime" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/lifetime/id579966222" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/lifetime/id579966222', '']);" title="Lifetime on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="https://play.google.com/store/apps/details?id=com.aetn.lifetime.watch" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=com.aetn.lifetime.watch', '']);" title="Lifetime on Android" target="_blank"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a>
		<a href="http://www.mylifetime.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.mylifetime.com/', '']);" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
		<a href="http://www.roku.com/channels/#!details/35058/lifetime" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.roku.com/channels/#!details/35058/lifetime', '']);" target="_blank"><img src="/wp-content/uploads/2014/01/roku-btn.png" alt=""></a>
		<a href="http://www.xbox.com/en-US/Live/Partners" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.xbox.com/en-US/Live/Partners', '']);" target="_blank"><img src="/wp-content/uploads/2014/01/xbox360-btn.png" alt=""></a>
		<a href="http://www.apple.com/appletv/whats-on/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.apple.com/appletv/whats-on/', '']);" target="_blank"><img src="/wp-content/uploads/2014/01/apple-tv-btn.png" alt=""></a>
	</div>

	<div id="uvideos" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/uvideos/id545293541?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/uvideos/id545293541?mt=8', '']);" title="UVideos on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="https://play.google.com/store/apps/details?id=com.univision&amp;hl=en" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=com.univision&amp;hl=en', '']);" title="UVideos" target="_blank"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a>
		<a href="http://www.uvideos.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.uvideos.com/', '']);" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="logo-tv" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/logotv/id795019155?ls=1&amp;mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/logotv/id795019155?ls=1&amp;mt=8', '']);" title="Logo TV on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
	</div>

	<div id="epix" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/epix/id430018488?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/epix/id430018488?mt=8', '']);" title="EPIX on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="https://play.google.com/store/apps/details?id=com.epix.epix" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=com.epix.epix', '']);" title="EPIX on Android" target="_blank"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a>
		<a href="http://www.amazon.com/EPIX/dp/B0094MNNQ8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.amazon.com/EPIX/dp/B0094MNNQ8', '']);" target="_blank"><img src="/wp-content/uploads/2014/01/amazon-btn.png" alt=""></a>
		<a href="http://www.epixhd.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.epixhd.com/', '']);" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
		<a href="http://apps.microsoft.com/windows/en-us/app/epix/db9d539b-a642-4704-ba70-361433e9513c" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://apps.microsoft.com/windows/en-us/app/epix/db9d539b-a642-4704-ba70-361433e9513c', '']);" target="_blank"><img src="/wp-content/uploads/2014/01/microsoft-btn.png" alt=""></a>
		<a href="http://www.roku.com/channels/#!details/7767/epix" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.roku.com/channels/#!details/7767/epix', '']);" target="_blank"><img src="/wp-content/uploads/2014/01/roku-btn.png" alt=""></a>
		<a href="http://www.xbox.com/en-US/live/partners/epix" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.xbox.com/en-US/live/partners/epix', '']);" target="_blank"><img src="/wp-content/uploads/2014/01/xbox360-btn.png" alt=""></a>
	</div>

	<div id="fox-now" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/fox-now/id571096102?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/fox-now/id571096102?mt=8', '']);" title="FOX Network on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="https://play.google.com/store/apps/details?id=com.fox.now&amp;hl=en" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=com.fox.now&amp;hl=en', '']);" title="FOX Network on Android" target="_blank"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a>
		<a href="http://apps.microsoft.com/windows/en-us/app/ae8b012f-7354-4d75-bb31-80cd181c2923" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://apps.microsoft.com/windows/en-us/app/ae8b012f-7354-4d75-bb31-80cd181c2923', '']);" target="_blank"><img src="/wp-content/uploads/2014/01/windows-8-btn.png" alt=""></a>
		<a href="http://www.xbox.com/en-US/live/apps/xbox-one/fox-now#fbid=1Ce9kYZE2ng" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.xbox.com/en-US/live/apps/xbox-one/fox-now#fbid=1Ce9kYZE2ng', '']);" target="_blank"><img src="/wp-content/uploads/2014/01/xbox1-btn.png" alt=""></a>
		<a href="http://www.roku.com/channels/#!details/20454/fox-now" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.roku.com/channels/#!details/20454/fox-now', '']);" target="_blank"><img src="/wp-content/uploads/2014/01/roku-btn.png" alt=""></a>
		<a href="http://www.xbox.com/en-US/Live/Partners" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.xbox.com/en-US/Live/Partners', '']);" target="_blank"><img src="/wp-content/uploads/2014/01/xbox360-btn.png" alt=""></a>
		<a href="http://www.samsung.com/us/appstore/app.do?appId=G00009197740" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.samsung.com/us/appstore/app.do?appId=G00009197740', '']);" target="_blank"><img src="/wp-content/uploads/2014/01/samsung-smart-tv-btn.png" alt=""></a>
		<a href="http://www.fox.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.fox.com/', '']);" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="fxnow" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/fxnow/id767268733?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/fxnow/id767268733?mt=8', '']);" title="FX Now on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="http://vod.fxnetworks.com/watch" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://vod.fxnetworks.com/watch', '']);" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="nat-geo-wild" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="http://channel.nationalgeographic.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://channel.nationalgeographic.com/', '']);" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="music-choice" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/artist/music-choice/id455363505" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/artist/music-choice/id455363505', '']);" title="Music Choice on ITunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="https://play.google.com/store/apps/details?id=com.music.choice&amp;hl=en" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=com.music.choice&amp;hl=en', '']);" title="Music Choice on Android" target="_blank"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a>
		<a href="http://www.amazon.com/Music-Choice/dp/B00EW37XOC" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.amazon.com/Music-Choice/dp/B00EW37XOC', '']);" title="Music Choice on Kindle" target="_blank"><img src="/wp-content/uploads/2014/01/kindle-btn.png" alt=""></a>
		<a href="http://www.musicchoice.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.musicchoice.com/', '']);" title="Music Choice online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="fyi" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/fyi-tv/id887597381?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/fyi-tv/id887597381?mt=8', '']);" title="FYI on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="http://fyi.tv/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://fyi.tv/', '']);" title="Watch FYI online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="usa-now" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/usa-now/id661695783?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/usa-now/id661695783?mt=8', '']);" title="TWC WiFi on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="https://play.google.com/store/apps/details?id=com.usanetwork.watcher" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=com.usanetwork.watcher', '']);" title="USA NOW on Android" target="_blank"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a>
		<a href="http://www.xbox.com/en-US/entertainment/xbox-one/live-apps" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.xbox.com/en-US/entertainment/xbox-one/live-apps', '']);" title="X Box One information" target="_blank"><img src="/wp-content/uploads/2014/01/xbox1-btn.png" alt=""></a>
		<a href="http://www.usanetwork.com/videos" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.usanetwork.com/videos', '']);" title="Watch USA NOW online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="bravo-now" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/bravo-now/id383925190?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/bravo-now/id383925190?mt=8', '']);" title="Bravo Now on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="http://www.bravotv.com/now/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.bravotv.com/now/', '']);" title="Watch Bravo Now online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="syfy-now" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/syfy-now/id378092432?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/syfy-now/id378092432?mt=8', '']);" title="SyFy Now on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="http://www.xbox.com/en-US/live/apps/xbox-one" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.xbox.com/en-US/live/apps/xbox-one', '']);" title="X Box One information" target="_blank"><img src="/wp-content/uploads/2014/01/xbox1-btn.png" alt=""></a>
		<a href="http://www.syfy.com/now/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.syfy.com/now/', '']);" title="Watch SyFy Now online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="oxygen-now" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/oxygen-now/id700797306?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/oxygen-now/id700797306?mt=8', '']);" title="Oxygen Now on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="http://now.oxygen.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://now.oxygen.com/', '']);" title="Watch Oxygen Now online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="telemundo-now" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a title="# on iTunes" href="#" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a title="# on Android" href="#" target="_blank"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a>
		<a title="Watch # online" href="#" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="mun2-now" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/mun2-now/id869444353?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/mun2-now/id869444353?mt=8', '']);" title="mun2 Now on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="http://www.mun2.tv/now/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.mun2.tv/now/', '']);" title="Watch mun2 Now online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="hgtv-watch" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/hgtv-watch/id376038666?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/hgtv-watch/id376038666?mt=8', '']);" title="Watch HGTV on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="https://play.google.com/store/apps/details?id=com.hgtv.watcher&amp;hl=en" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=com.hgtv.watcher&amp;hl=en', '']);" title="Watch HGTV on Android" target="_blank"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a>
		<a href="http://watch.hgtv.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://watch.hgtv.com/', '']);" title="Watch HGTV online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="watch-food-network" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/watch-food-network/id642410271?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/watch-food-network/id642410271?mt=8', '']);" title="Watch The Food Network on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="https://play.google.com/store/apps/details?id=com.foodnetwork.watcher&amp;hl=en" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=com.foodnetwork.watcher&amp;hl=en', '']);" title="Watch The Food Newtwork on Android" target="_blank"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a>
		<a href="http://watch.foodnetwork.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://watch.foodnetwork.com/', '']);" title="Watch The Food Network online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="travel-channel" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/watch-travel-channel/id596546023?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/watch-travel-channel/id596546023?mt=8', '']);" title="Watch The Travel Channel on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="https://play.google.com/store/apps/details?id=com.travelchannel.watcher&amp;hl=en" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=com.travelchannel.watcher&amp;hl=en', '']);" title="Watch The Travel Channel on Android" target="_blank"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a>
		<a href="http://watch.travelchannel.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://watch.travelchannel.com/', '']);" title="Watch The Travel Channel online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="esquire-tv-now" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="http://tv.esquire.com/now" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://tv.esquire.com/now', '']);" title="Watch Esquite TV online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="watch-cooking-channel" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/watch-cooking-channel/id675276583?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/watch-cooking-channel/id675276583?mt=8', '']);" title="Watch The Cooking Channel on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="https://play.google.com/store/apps/details?id=com.cookingchannel.watcher&amp;hl=en" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=com.cookingchannel.watcher&amp;hl=en', '']);" title="Watch The Cooking Channel on Android" target="_blank"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a>
		<a href="http://watch.cookingchanneltv.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://watch.cookingchanneltv.com/', '']);" title="Watch The Cooking Channel online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="diy-watch" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/diy-watch/id485756277?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/diy-watch/id485756277?mt=8', '']);" title="Watch DIY on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="https://play.google.com/store/apps/details?id=com.diy.watcher&amp;hl=en" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=com.diy.watcher&amp;hl=en', '']);" title="Watch DIY on Android" target="_blank"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a>
		<a href="http://watch.diynetwork.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://watch.diynetwork.com/', '']);" title="Watch DIY online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="espn" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/watchespn/id429009175?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/watchespn/id429009175?mt=8', '']);" title="Watch ESPN on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="https://play.google.com/store/apps/details?id=air.WatchESPN&amp;feature=search_result#" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=air.WatchESPN&amp;feature=search_result#', '']);" title="Watch ESPN on Android" target="_blank"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a>
		<a href="http://espn.go.com/watchespn/index" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://espn.go.com/watchespn/index', '']);" title="Watch ESPN online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
		<a href="https://apple.com/appletv/whats-on/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://apple.com/appletv/whats-on/', '']);" title="Apple TV information" target="_blank"><img src="/wp-content/uploads/2014/01/apple-tv-btn.png" alt=""></a>
		<a href="http://www.amazon.com/ESPN-Inc-WatchESPN/dp/B008DYK0I2" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.amazon.com/ESPN-Inc-WatchESPN/dp/B008DYK0I2', '']);" title="Kindle Fire information" target="_blank"><img src="/wp-content/uploads/2014/01/kindle-btn.png" alt=""></a>
		<a href="http://www.xbox.com/en-US/Live/Partners/ESPN" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.xbox.com/en-US/Live/Partners/ESPN', '']);" title="XBox 360 information" target="_blank"><img src="/wp-content/uploads/2014/01/xbox360-btn.png" alt=""></a>
		<a href="http://www.xbox.com/en-US/live/apps/xbox-one/espn#fbid=WNj6e1TUZKZ" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.xbox.com/en-US/live/apps/xbox-one/espn#fbid=WNj6e1TUZKZ', '']);" title="X Box One information" target="_blank"><img src="/wp-content/uploads/2014/01/xbox1-btn.png" alt=""></a>
		<a href="http://apps.microsoft.com/windows/en-us/app/watchespn/f5b84ed0-3681-4b75-8d62-164d3898763a?ocid=Apps_O_WOL_FavTile_App_FA_WatchESPN_Pos4" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://apps.microsoft.com/windows/en-us/app/watchespn/f5b84ed0-3681-4b75-8d62-164d3898763a?ocid=Apps_O_WOL_FavTile_App_FA_WatchESPN_Pos4', '']);" title="Windows 8 information" target="_blank"><img src="/wp-content/uploads/2014/01/windows-8-btn.png" alt=""></a>
	</div>

	<div id="universal-sports-live" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/universal-sports-live/id441549434?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/universal-sports-live/id441549434?mt=8', '']);" title="Watch Universal Sports on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="http://universalsports.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://universalsports.com/', '']);" title="Watch Universal Sports online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="pac-12" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/pac-12-now/id550252401?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/pac-12-now/id550252401?mt=8', '']);" title="Watch the Pac-12 Network on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="http://pac-12.com/live" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://pac-12.com/live', '']);" title="Watch the Pac-12 Network online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="bein-sport-play" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="http://www.beinsportplay.tv/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.beinsportplay.tv/', '']);" title="Watch beIN Sport online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="btn2go" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/btn2go/id474679690?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/btn2go/id474679690?mt=8', '']);" title="Watch BTN on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="https://play.google.com/store/apps/details?id=com.neulion.smartphone.btn2go.android&amp;hl;=en" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=com.neulion.smartphone.btn2go.android&amp;hl;=en', '']);" title="Watch BTN on Android" target="_blank"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a>
		<a href="http://www.btn2go.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.btn2go.com/', '']);" title="Watch BTN online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="mlb-extra-innings" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://secure.mlb.com/tv/activate/?&amp;partnerId=TWCEI" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://secure.mlb.com/tv/activate/?&amp;partnerId=TWCEI', '']);" target="_blank"><img src="/wp-content/uploads/2014/01/mlb-tv-btn.png" alt=""></a>
	</div>

	<div id="twc-sportsnet" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="http://www.twcsportsnet.com/videos/livetv/login" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.twcsportsnet.com/videos/livetv/login', '']);" title="Watch TWC SportsNet online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="willow" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://auth.willow.tv/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://auth.willow.tv/', '']);" title="Watch Willow online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
		<a href="http://cricket.willow.tv./" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://cricket.willow.tv./', '']);" target="_blank"><img src="/wp-content/uploads/2014/01/programming-schedule-btn.png" alt=""></a>
	</div>

	<div id="fox-sports-go" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/app/id711074743" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/fox-sports-go/id711074743?mt=8', '']);" title="FOX Sports on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="https://play.google.com/store/apps/details?id=com.foxsports.videogo&amp;hl=en" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=com.foxsports.videogo&amp;hl=en', '']);" title="FOX Sports on Android" target="_blank"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a>
		<a href="http://apps.microsoft.com/windows/en-us/app/fox-sports-go/62b12e13-b298-4679-9639-bbef442710a6" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=com.foxsports.videogo&amp;hl=en', '']);" title="FOX Sports on Android" target="_blank"><img src="/wp-content/uploads/2014/01/microsoft-btn.png" alt=""></a>
		<a href="http://www.amazon.com/FOX-Sports-Media-Group-GO/dp/B00I5VT8KY/ref=sr_1_1?s=mobile-apps&ie=UTF8&qid=1404936403&sr=1-1&keywords=fox+sports+go" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.amazon.com/FOX-Sports-Media-Group-GO/dp/B00I5VT8KY/ref=sr_1_1?s=mobile-apps&ie=UTF8&qid=1404936403&sr=1-1&keywords=fox+sports+go', '']);" title="FOX Sports on Amazon" target="_blank"><img src="/wp-content/uploads/2014/01/amazon-btn.png" alt=""></a>


		<a href="http://msn.foxsports.com/foxsportsgo/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://msn.foxsports.com/foxsportsgo/', '']);" title="FOX Sports on your computer" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="nbc-sports-live-extra" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/nbc-sports-live-extra/id542511686?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/nbc-sports-live-extra/id542511686?mt=8', '']);" title="NBC Sports on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="https://play.google.com/store/apps/details?id=air.com.nbcuni.com.nbcsports.liveextra" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=air.com.nbcuni.com.nbcsports.liveextra', '']);" title="NBC Sports on Android" target="_blank"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a>
		<a href="http://stream.nbcsports.com/liveextra/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://stream.nbcsports.com/liveextra/', '']);" title="NBC Sports on your computer" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="golf-live-extra" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/golf-live-extra/id586379597?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/golf-live-extra/id586379597?mt=8', '']);" title="Golf Live Extra on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="https://play.google.com/store/apps/details?id=air.com.golfchannel.gcliveextra&amp;hl=en" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=air.com.golfchannel.gcliveextra&amp;hl=en', '']);" title="Golf Live Extra on Android" target="_blank"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a>
		<a title="Golf Live Extra online" href="Your favorite Golf Channel content on the go, anytime and anywhere. TWC ID required." target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="ncaa-march-madness-live" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/ncaa-march-madness-live/id423246594" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/ncaa-march-madness-live/id423246594', 'iTunes']);"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="https://play.google.com/store/apps/details?id=com.ncaa.mmlive.app" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=com.ncaa.mmlive.app', 'Google Play']);"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a>
		<a href="http://www.amazon.com/gp/product/B00IRN4K2Q" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.amazon.com/gp/product/B00IRN4K2Q', 'Kindle Fire']);"><img src="/wp-content/uploads/2014/01/kindle-btn.png" alt=""></a>
		<a href="http://www.windowsphone.com/en-us/store/app/ncaa-march-madness-live/9c582d19-6189-48dc-8125-05cc5c856c8b" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.windowsphone.com/en-us/store/app/ncaa-march-madness-live/9c582d19-6189-48dc-8125-05cc5c856c8b', 'Windows Phone']);"><img src="/wp-content/uploads/2015/04/win-phone-btn.png" alt=""></a>
		<a href="http://apps.microsoft.com/windows/en-us/app/ncaa-march-madness-live/1701c6d9-fc79-4fe5-abc5-ff439efeffd9" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://apps.microsoft.com/windows/en-us/app/ncaa-march-madness-live/1701c6d9-fc79-4fe5-abc5-ff439efeffd9', 'Windows Tablet']);"><img src="/wp-content/uploads/2015/04/win-tablet-btn.png" alt=""></a>
		<a href="http://www.ncaa.com/march-madness-live" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.ncaa.com/march-madness-live', 'Watch Online']);"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>	
	</div>

	<div id="fox-business" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/fox-business/id333177961?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/fox-business/id333177961?mt=8', '']);" title="Watch Fox Business on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
	</div>

	<div id="fox-news" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/fox-news/id367623543?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/fox-news/id367623543?mt=8', '']);" title="Watch FoxNews on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
	</div>

	<div id="c-span" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="http://www.c-span.org/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.c-span.org/', '']);" title="Visit C-SPAN" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="time-warner-cable-news" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/twc-news/id740948885?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/twc-news/id740948885?mt=8', '']);" title="TWC WiFi on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="https://play.google.com/store/apps/details?id=com.twcable.twcnews" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=com.twcable.twcnews', '']);" title="TWC WiFi on Android" target="_blank"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a>
		<a href="http://twcnews.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://twcnews.com/', '']);" title="Watch Time Warner Cable News online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="wnyw-fox-5" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/fox-5-ny/id784596930?mt=8&amp;ign-mpt=uo%3D4%2522%2520target%253D%2522itunes_store" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/fox-5-ny/id784596930?mt=8&amp;ign-mpt=uo%3D4%2522%2520target%253D%2522itunes_store', '']);" title="WNYW Fox 5 on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="https://play.google.com/store/apps/details?id=com.syncbak.wnyw&amp;hl=en" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=com.syncbak.wnyw&amp;hl=en', '']);" title="WNYW Fox 5 on Android" target="_blank"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a>
	</div>

	<div id="cnbc" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/cnbc-business-news-finance/id398018310?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/cnbc-business-news-finance/id398018310?mt=8', '']);" title="CNBC on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="https://www.apple.com/appletv/whats-on/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://www.apple.com/appletv/whats-on/', '']);" title="Apple TV information" target="_blank"><img src="/wp-content/uploads/2014/01/apple-tv-btn.png" alt=""></a>
		<a href="http://www.cnbc.com/live-tv/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.cnbc.com/live-tv/', '']);" title="Watch CNBC online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="msnbc" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/msnbc/id396885309?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/msnbc/id396885309?mt=8', '']);" title="MSNBC on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="http://now.msnbc.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://now.msnbc.com/', '']);" title="Watch MSNBC online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="nbcnews" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="http://tve-nbcnews.nbcuni.com/tve/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://tve-nbcnews.nbcuni.com/tve/', '']);" title="Watch NBC News online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="nick" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/id596133590?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/id596133590?mt=8', '']);" title="Watch Nick on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="http://www.nick.com/tve" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.nick.com/tve', '']);" title="Watch Nick Online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="kids-media" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/kids-media/id504932051?ls=1&amp;mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/kids-media/id504932051?ls=1&amp;mt=8', '']);" title="View Kids Media on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
	</div>

	<div id="sprout-now" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="http://www.sproutonline.com/now/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.sproutonline.com/now/', '']);" title="Watch Sprout online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="vutopia" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="http://www.vutopia.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.vutopia.com/', '']);" title="Watch Vutopia online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
	</div>

	<div id="epix" class="white-popup mfp-hide">
		<h1>Download Now</h1>
		<a href="https://itunes.apple.com/us/app/epix/id430018488?mt=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://itunes.apple.com/us/app/epix/id430018488?mt=8', '']);" title="Watch EPIX on iTunes" target="_blank"><img src="/wp-content/uploads/2014/01/itunes-btn.png" alt=""></a>
		<a href="https://play.google.com/store/apps/details?id=com.epix.epix" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://play.google.com/store/apps/details?id=com.epix.epix', '']);" title="Watch EPIX on Android" target="_blank"><img src="/wp-content/uploads/2014/01/google-play-btn.png" alt=""></a>
		<a href="http://www.amazon.com/EPIX/dp/B0094MNNQ8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.amazon.com/EPIX/dp/B0094MNNQ8', '']);" title="Watch EPIX on your Kindle" target="_blank"><img src="/wp-content/uploads/2014/01/amazon-btn.png" alt=""></a>
		<a href="http://www.epixhd.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.epixhd.com/', '']);" title="Watch EPIX online" target="_blank"><img src="/wp-content/uploads/2014/01/watch-online-btn.png" alt=""></a>
		<a href="http://apps.microsoft.com/windows/en-us/app/epix/db9d539b-a642-4704-ba70-361433e9513c" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://apps.microsoft.com/windows/en-us/app/epix/db9d539b-a642-4704-ba70-361433e9513c', '']);" title="Watch EPIX on Windows 8" target="_blank"><img src="/wp-content/uploads/2014/01/microsoft-btn.png" alt=""></a>
		<a href="http://www.roku.com/channels/#!details/7767/epix" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.roku.com/channels/#!details/7767/epix', '']);" title="Watch EPIX on Roku" target="_blank"><img src="/wp-content/uploads/2014/01/roku-btn.png" alt=""></a>
		<a href="http://www.xbox.com/en-US/live/partners/epix" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.xbox.com/en-US/live/partners/epix', '']);" title="Watch EPIX on your XBox 360" target="_blank"><img src="/wp-content/uploads/2014/01/xbox360-btn.png" alt=""></a>
	</div>

	<!-- Tooltips -->
	<div class="ttip-epix twc-tooltip">EPIX</div>

<?php } ?>




<!-- begin: Adwords Call Tracking -->
<script type="text/javascript">
(function(a,e,c,f,g,b,d){var h={ak:"994297305",cl:"GPbfCP2c9l8Q2YuP2gM"};a[c]=a[c]||function(){(a[c].q=a[c].q||[]).push(arguments)};a[f]||(a[f]=h.ak);b=e.createElement(g);b.async=1;b.src="//www.gstatic.com/wcm/loader.js";d=e.getElementsByTagName(g)[0];d.parentNode.insertBefore(b,d);a._googWcmGet=function(b,d,e){a[c](2,b,h,d,null,new Date,e)}})(window,document,"_googWcmImpl","_googWcmAk","script");
</script>

<script type="text/javascript">
  var callback = function(formatted_number, mobile_number) {                 
  var c = "strong,p,h2";
  var c1= c.split(",");
  for(v=0;v<c1.length;v++)
  {
    var m = document.getElementsByTagName(c1[v]);
var len = m.length;
for(i=0;i<len;i++)
{
var c = m[i].innerHTML.replace("643-2337",formatted_number);
m[i].innerHTML = c;
}
}
//jQuery('a[]').attr("href","tel:"+mobile_number);
    };
    </script>
<script>
    window.onload = function()
    {
        _googWcmGet(callback,"808-643-2337");
    }
</script>
<!-- end: Adwords Call Tracking -->





<?php wp_footer(); ?>

<?php // if (is_page(388)) { ?>
	<script>
		(function(e){var t,n,i,o,r,a,s,l="Close",c="BeforeClose",d="AfterClose",u="BeforeAppend",p="MarkupParse",f="Open",m="Change",g="mfp",v="."+g,h="mfp-ready",C="mfp-removing",y="mfp-prevent-close",w=function(){},b=!!window.jQuery,I=e(window),x=function(e,n){t.ev.on(g+e+v,n)},k=function(t,n,i,o){var r=document.createElement("div");return r.className="mfp-"+t,i&&(r.innerHTML=i),o?n&&n.appendChild(r):(r=e(r),n&&r.appendTo(n)),r},T=function(n,i){t.ev.triggerHandler(g+n,i),t.st.callbacks&&(n=n.charAt(0).toLowerCase()+n.slice(1),t.st.callbacks[n]&&t.st.callbacks[n].apply(t,e.isArray(i)?i:[i]))},E=function(){(t.st.focus?t.content.find(t.st.focus).eq(0):t.wrap).focus()},S=function(n){return n===s&&t.currTemplate.closeBtn||(t.currTemplate.closeBtn=e(t.st.closeMarkup.replace("%title%",t.st.tClose)),s=n),t.currTemplate.closeBtn},P=function(){e.magnificPopup.instance||(t=new w,t.init(),e.magnificPopup.instance=t)},_=function(n){if(!e(n).hasClass(y)){var i=t.st.closeOnContentClick,o=t.st.closeOnBgClick;if(i&&o)return!0;if(!t.content||e(n).hasClass("mfp-close")||t.preloader&&n===t.preloader[0])return!0;if(n===t.content[0]||e.contains(t.content[0],n)){if(i)return!0}else if(o&&e.contains(document,n))return!0;return!1}},O=function(){var e=document.createElement("p").style,t=["ms","O","Moz","Webkit"];if(void 0!==e.transition)return!0;for(;t.length;)if(t.pop()+"Transition"in e)return!0;return!1};w.prototype={constructor:w,init:function(){var n=navigator.appVersion;t.isIE7=-1!==n.indexOf("MSIE 7."),t.isIE8=-1!==n.indexOf("MSIE 8."),t.isLowIE=t.isIE7||t.isIE8,t.isAndroid=/android/gi.test(n),t.isIOS=/iphone|ipad|ipod/gi.test(n),t.supportsTransition=O(),t.probablyMobile=t.isAndroid||t.isIOS||/(Opera Mini)|Kindle|webOS|BlackBerry|(Opera Mobi)|(Windows Phone)|IEMobile/i.test(navigator.userAgent),i=e(document.body),o=e(document),t.popupsCache={}},open:function(n){var i;if(n.isObj===!1){t.items=n.items.toArray(),t.index=0;var r,s=n.items;for(i=0;s.length>i;i++)if(r=s[i],r.parsed&&(r=r.el[0]),r===n.el[0]){t.index=i;break}}else t.items=e.isArray(n.items)?n.items:[n.items],t.index=n.index||0;if(t.isOpen)return t.updateItemHTML(),void 0;t.types=[],a="",t.ev=n.mainEl&&n.mainEl.length?n.mainEl.eq(0):o,n.key?(t.popupsCache[n.key]||(t.popupsCache[n.key]={}),t.currTemplate=t.popupsCache[n.key]):t.currTemplate={},t.st=e.extend(!0,{},e.magnificPopup.defaults,n),t.fixedContentPos="auto"===t.st.fixedContentPos?!t.probablyMobile:t.st.fixedContentPos,t.st.modal&&(t.st.closeOnContentClick=!1,t.st.closeOnBgClick=!1,t.st.showCloseBtn=!1,t.st.enableEscapeKey=!1),t.bgOverlay||(t.bgOverlay=k("bg").on("click"+v,function(){t.close()}),t.wrap=k("wrap").attr("tabindex",-1).on("click"+v,function(e){_(e.target)&&t.close()}),t.container=k("container",t.wrap)),t.contentContainer=k("content"),t.st.preloader&&(t.preloader=k("preloader",t.container,t.st.tLoading));var l=e.magnificPopup.modules;for(i=0;l.length>i;i++){var c=l[i];c=c.charAt(0).toUpperCase()+c.slice(1),t["init"+c].call(t)}T("BeforeOpen"),t.st.showCloseBtn&&(t.st.closeBtnInside?(x(p,function(e,t,n,i){n.close_replaceWith=S(i.type)}),a+=" mfp-close-btn-in"):t.wrap.append(S())),t.st.alignTop&&(a+=" mfp-align-top"),t.fixedContentPos?t.wrap.css({overflow:t.st.overflowY,overflowX:"hidden",overflowY:t.st.overflowY}):t.wrap.css({top:I.scrollTop(),position:"absolute"}),(t.st.fixedBgPos===!1||"auto"===t.st.fixedBgPos&&!t.fixedContentPos)&&t.bgOverlay.css({height:o.height(),position:"absolute"}),t.st.enableEscapeKey&&o.on("keyup"+v,function(e){27===e.keyCode&&t.close()}),I.on("resize"+v,function(){t.updateSize()}),t.st.closeOnContentClick||(a+=" mfp-auto-cursor"),a&&t.wrap.addClass(a);var d=t.wH=I.height(),u={};if(t.fixedContentPos&&t._hasScrollBar(d)){var m=t._getScrollbarSize();m&&(u.paddingRight=m)}t.fixedContentPos&&(t.isIE7?e("body, html").css("overflow","hidden"):u.overflow="hidden");var g=t.st.mainClass;return t.isIE7&&(g+=" mfp-ie7"),g&&t._addClassToMFP(g),t.updateItemHTML(),T("BuildControls"),e("html").css(u),t.bgOverlay.add(t.wrap).prependTo(document.body),t._lastFocusedEl=document.activeElement,setTimeout(function(){t.content?(t._addClassToMFP(h),E()):t.bgOverlay.addClass(h),o.on("focusin"+v,function(n){return n.target===t.wrap[0]||e.contains(t.wrap[0],n.target)?void 0:(E(),!1)})},16),t.isOpen=!0,t.updateSize(d),T(f),n},close:function(){t.isOpen&&(T(c),t.isOpen=!1,t.st.removalDelay&&!t.isLowIE&&t.supportsTransition?(t._addClassToMFP(C),setTimeout(function(){t._close()},t.st.removalDelay)):t._close())},_close:function(){T(l);var n=C+" "+h+" ";if(t.bgOverlay.detach(),t.wrap.detach(),t.container.empty(),t.st.mainClass&&(n+=t.st.mainClass+" "),t._removeClassFromMFP(n),t.fixedContentPos){var i={paddingRight:""};t.isIE7?e("body, html").css("overflow",""):i.overflow="",e("html").css(i)}o.off("keyup"+v+" focusin"+v),t.ev.off(v),t.wrap.attr("class","mfp-wrap").removeAttr("style"),t.bgOverlay.attr("class","mfp-bg"),t.container.attr("class","mfp-container"),!t.st.showCloseBtn||t.st.closeBtnInside&&t.currTemplate[t.currItem.type]!==!0||t.currTemplate.closeBtn&&t.currTemplate.closeBtn.detach(),t._lastFocusedEl&&e(t._lastFocusedEl).focus(),t.currItem=null,t.content=null,t.currTemplate=null,t.prevHeight=0,T(d)},updateSize:function(e){if(t.isIOS){var n=document.documentElement.clientWidth/window.innerWidth,i=window.innerHeight*n;t.wrap.css("height",i),t.wH=i}else t.wH=e||I.height();t.fixedContentPos||t.wrap.css("height",t.wH),T("Resize")},updateItemHTML:function(){var n=t.items[t.index];t.contentContainer.detach(),t.content&&t.content.detach(),n.parsed||(n=t.parseEl(t.index));var i=n.type;if(T("BeforeChange",[t.currItem?t.currItem.type:"",i]),t.currItem=n,!t.currTemplate[i]){var o=t.st[i]?t.st[i].markup:!1;T("FirstMarkupParse",o),t.currTemplate[i]=o?e(o):!0}r&&r!==n.type&&t.container.removeClass("mfp-"+r+"-holder");var a=t["get"+i.charAt(0).toUpperCase()+i.slice(1)](n,t.currTemplate[i]);t.appendContent(a,i),n.preloaded=!0,T(m,n),r=n.type,t.container.prepend(t.contentContainer),T("AfterChange")},appendContent:function(e,n){t.content=e,e?t.st.showCloseBtn&&t.st.closeBtnInside&&t.currTemplate[n]===!0?t.content.find(".mfp-close").length||t.content.append(S()):t.content=e:t.content="",T(u),t.container.addClass("mfp-"+n+"-holder"),t.contentContainer.append(t.content)},parseEl:function(n){var i=t.items[n],o=i.type;if(i=i.tagName?{el:e(i)}:{data:i,src:i.src},i.el){for(var r=t.types,a=0;r.length>a;a++)if(i.el.hasClass("mfp-"+r[a])){o=r[a];break}i.src=i.el.attr("data-mfp-src"),i.src||(i.src=i.el.attr("href"))}return i.type=o||t.st.type||"inline",i.index=n,i.parsed=!0,t.items[n]=i,T("ElementParse",i),t.items[n]},addGroup:function(e,n){var i=function(i){i.mfpEl=this,t._openClick(i,e,n)};n||(n={});var o="click.magnificPopup";n.mainEl=e,n.items?(n.isObj=!0,e.off(o).on(o,i)):(n.isObj=!1,n.delegate?e.off(o).on(o,n.delegate,i):(n.items=e,e.off(o).on(o,i)))},_openClick:function(n,i,o){var r=void 0!==o.midClick?o.midClick:e.magnificPopup.defaults.midClick;if(r||2!==n.which&&!n.ctrlKey&&!n.metaKey){var a=void 0!==o.disableOn?o.disableOn:e.magnificPopup.defaults.disableOn;if(a)if(e.isFunction(a)){if(!a.call(t))return!0}else if(a>I.width())return!0;n.type&&(n.preventDefault(),t.isOpen&&n.stopPropagation()),o.el=e(n.mfpEl),o.delegate&&(o.items=i.find(o.delegate)),t.open(o)}},updateStatus:function(e,i){if(t.preloader){n!==e&&t.container.removeClass("mfp-s-"+n),i||"loading"!==e||(i=t.st.tLoading);var o={status:e,text:i};T("UpdateStatus",o),e=o.status,i=o.text,t.preloader.html(i),t.preloader.find("a").on("click",function(e){e.stopImmediatePropagation()}),t.container.addClass("mfp-s-"+e),n=e}},_addClassToMFP:function(e){t.bgOverlay.addClass(e),t.wrap.addClass(e)},_removeClassFromMFP:function(e){this.bgOverlay.removeClass(e),t.wrap.removeClass(e)},_hasScrollBar:function(e){return(t.isIE7?o.height():document.body.scrollHeight)>(e||I.height())},_parseMarkup:function(t,n,i){var o;i.data&&(n=e.extend(i.data,n)),T(p,[t,n,i]),e.each(n,function(e,n){if(void 0===n||n===!1)return!0;if(o=e.split("_"),o.length>1){var i=t.find(v+"-"+o[0]);if(i.length>0){var r=o[1];"replaceWith"===r?i[0]!==n[0]&&i.replaceWith(n):"img"===r?i.is("img")?i.attr("src",n):i.replaceWith('<img src="'+n+'" class="'+i.attr("class")+'" />'):i.attr(o[1],n)}}else t.find(v+"-"+e).html(n)})},_getScrollbarSize:function(){if(void 0===t.scrollbarSize){var e=document.createElement("div");e.id="mfp-sbm",e.style.cssText="width: 99px; height: 99px; overflow: scroll; position: absolute; top: -9999px;",document.body.appendChild(e),t.scrollbarSize=e.offsetWidth-e.clientWidth,document.body.removeChild(e)}return t.scrollbarSize}},e.magnificPopup={instance:null,proto:w.prototype,modules:[],open:function(t,n){return P(),t=t?e.extend(!0,{},t):{},t.isObj=!0,t.index=n||0,this.instance.open(t)},close:function(){return e.magnificPopup.instance&&e.magnificPopup.instance.close()},registerModule:function(t,n){n.options&&(e.magnificPopup.defaults[t]=n.options),e.extend(this.proto,n.proto),this.modules.push(t)},defaults:{disableOn:0,key:null,midClick:!1,mainClass:"",preloader:!0,focus:"",closeOnContentClick:!1,closeOnBgClick:!0,closeBtnInside:!0,showCloseBtn:!0,enableEscapeKey:!0,modal:!1,alignTop:!1,removalDelay:0,fixedContentPos:"auto",fixedBgPos:"auto",overflowY:"auto",closeMarkup:'<button title="%title%" type="button" class="mfp-close">&times;</button>',tClose:"Close (Esc)",tLoading:"Loading..."}},e.fn.magnificPopup=function(n){P();var i=e(this);if("string"==typeof n)if("open"===n){var o,r=b?i.data("magnificPopup"):i[0].magnificPopup,a=parseInt(arguments[1],10)||0;r.items?o=r.items[a]:(o=i,r.delegate&&(o=o.find(r.delegate)),o=o.eq(a)),t._openClick({mfpEl:o},i,r)}else t.isOpen&&t[n].apply(t,Array.prototype.slice.call(arguments,1));else n=e.extend(!0,{},n),b?i.data("magnificPopup",n):i[0].magnificPopup=n,t.addGroup(i,n);return i};var z,M,B,H="inline",L=function(){B&&(M.after(B.addClass(z)).detach(),B=null)};e.magnificPopup.registerModule(H,{options:{hiddenClass:"hide",markup:"",tNotFound:"Content not found"},proto:{initInline:function(){t.types.push(H),x(l+"."+H,function(){L()})},getInline:function(n,i){if(L(),n.src){var o=t.st.inline,r=e(n.src);if(r.length){var a=r[0].parentNode;a&&a.tagName&&(M||(z=o.hiddenClass,M=k(z),z="mfp-"+z),B=r.after(M).detach().removeClass(z)),t.updateStatus("ready")}else t.updateStatus("error",o.tNotFound),r=e("<div>");return n.inlineElement=r,r}return t.updateStatus("ready"),t._parseMarkup(i,{},n),i}}});var A,F="ajax",j=function(){A&&i.removeClass(A)},N=function(){j(),t.req&&t.req.abort()};e.magnificPopup.registerModule(F,{options:{settings:null,cursor:"mfp-ajax-cur",tError:'<a href="%url%">The content</a> could not be loaded.'},proto:{initAjax:function(){t.types.push(F),A=t.st.ajax.cursor,x(l+"."+F,N),x("BeforeChange."+F,N)},getAjax:function(n){A&&i.addClass(A),t.updateStatus("loading");var o=e.extend({url:n.src,success:function(i,o,r){var a={data:i,xhr:r};T("ParseAjax",a),t.appendContent(e(a.data),F),n.finished=!0,j(),E(),setTimeout(function(){t.wrap.addClass(h)},16),t.updateStatus("ready"),T("AjaxContentAdded")},error:function(){j(),n.finished=n.loadError=!0,t.updateStatus("error",t.st.ajax.tError.replace("%url%",n.src))}},t.st.ajax.settings);return t.req=e.ajax(o),""}}});var W,R=function(n){if(n.data&&void 0!==n.data.title)return n.data.title;var i=t.st.image.titleSrc;if(i){if(e.isFunction(i))return i.call(t,n);if(n.el)return n.el.attr(i)||""}return""};e.magnificPopup.registerModule("image",{options:{markup:'<div class="mfp-figure"><div class="mfp-close"></div><div class="mfp-img"></div><div class="mfp-bottom-bar"><div class="mfp-title"></div><div class="mfp-counter"></div></div></div>',cursor:"mfp-zoom-out-cur",titleSrc:"title",verticalFit:!0,tError:'<a href="%url%">The image</a> could not be loaded.'},proto:{initImage:function(){var e=t.st.image,n=".image";t.types.push("image"),x(f+n,function(){"image"===t.currItem.type&&e.cursor&&i.addClass(e.cursor)}),x(l+n,function(){e.cursor&&i.removeClass(e.cursor),I.off("resize"+v)}),x("Resize"+n,t.resizeImage),t.isLowIE&&x("AfterChange",t.resizeImage)},resizeImage:function(){var e=t.currItem;if(e&&e.img&&t.st.image.verticalFit){var n=0;t.isLowIE&&(n=parseInt(e.img.css("padding-top"),10)+parseInt(e.img.css("padding-bottom"),10)),e.img.css("max-height",t.wH-n)}},_onImageHasSize:function(e){e.img&&(e.hasSize=!0,W&&clearInterval(W),e.isCheckingImgSize=!1,T("ImageHasSize",e),e.imgHidden&&(t.content&&t.content.removeClass("mfp-loading"),e.imgHidden=!1))},findImageSize:function(e){var n=0,i=e.img[0],o=function(r){W&&clearInterval(W),W=setInterval(function(){return i.naturalWidth>0?(t._onImageHasSize(e),void 0):(n>200&&clearInterval(W),n++,3===n?o(10):40===n?o(50):100===n&&o(500),void 0)},r)};o(1)},getImage:function(n,i){var o=0,r=function(){n&&(n.img[0].complete?(n.img.off(".mfploader"),n===t.currItem&&(t._onImageHasSize(n),t.updateStatus("ready")),n.hasSize=!0,n.loaded=!0,T("ImageLoadComplete")):(o++,200>o?setTimeout(r,100):a()))},a=function(){n&&(n.img.off(".mfploader"),n===t.currItem&&(t._onImageHasSize(n),t.updateStatus("error",s.tError.replace("%url%",n.src))),n.hasSize=!0,n.loaded=!0,n.loadError=!0)},s=t.st.image,l=i.find(".mfp-img");if(l.length){var c=document.createElement("img");c.className="mfp-img",n.img=e(c).on("load.mfploader",r).on("error.mfploader",a),c.src=n.src,l.is("img")&&(n.img=n.img.clone()),n.img[0].naturalWidth>0&&(n.hasSize=!0)}return t._parseMarkup(i,{title:R(n),img_replaceWith:n.img},n),t.resizeImage(),n.hasSize?(W&&clearInterval(W),n.loadError?(i.addClass("mfp-loading"),t.updateStatus("error",s.tError.replace("%url%",n.src))):(i.removeClass("mfp-loading"),t.updateStatus("ready")),i):(t.updateStatus("loading"),n.loading=!0,n.hasSize||(n.imgHidden=!0,i.addClass("mfp-loading"),t.findImageSize(n)),i)}}});var Z,q=function(){return void 0===Z&&(Z=void 0!==document.createElement("p").style.MozTransform),Z};e.magnificPopup.registerModule("zoom",{options:{enabled:!1,easing:"ease-in-out",duration:300,opener:function(e){return e.is("img")?e:e.find("img")}},proto:{initZoom:function(){var e,n=t.st.zoom,i=".zoom";if(n.enabled&&t.supportsTransition){var o,r,a=n.duration,s=function(e){var t=e.clone().removeAttr("style").removeAttr("class").addClass("mfp-animated-image"),i="all "+n.duration/1e3+"s "+n.easing,o={position:"fixed",zIndex:9999,left:0,top:0,"-webkit-backface-visibility":"hidden"},r="transition";return o["-webkit-"+r]=o["-moz-"+r]=o["-o-"+r]=o[r]=i,t.css(o),t},d=function(){t.content.css("visibility","visible")};x("BuildControls"+i,function(){if(t._allowZoom()){if(clearTimeout(o),t.content.css("visibility","hidden"),e=t._getItemToZoom(),!e)return d(),void 0;r=s(e),r.css(t._getOffset()),t.wrap.append(r),o=setTimeout(function(){r.css(t._getOffset(!0)),o=setTimeout(function(){d(),setTimeout(function(){r.remove(),e=r=null,T("ZoomAnimationEnded")},16)},a)},16)}}),x(c+i,function(){if(t._allowZoom()){if(clearTimeout(o),t.st.removalDelay=a,!e){if(e=t._getItemToZoom(),!e)return;r=s(e)}r.css(t._getOffset(!0)),t.wrap.append(r),t.content.css("visibility","hidden"),setTimeout(function(){r.css(t._getOffset())},16)}}),x(l+i,function(){t._allowZoom()&&(d(),r&&r.remove(),e=null)})}},_allowZoom:function(){return"image"===t.currItem.type},_getItemToZoom:function(){return t.currItem.hasSize?t.currItem.img:!1},_getOffset:function(n){var i;i=n?t.currItem.img:t.st.zoom.opener(t.currItem.el||t.currItem);var o=i.offset(),r=parseInt(i.css("padding-top"),10),a=parseInt(i.css("padding-bottom"),10);o.top-=e(window).scrollTop()-r;var s={width:i.width(),height:(b?i.innerHeight():i[0].offsetHeight)-a-r};return q()?s["-moz-transform"]=s.transform="translate("+o.left+"px,"+o.top+"px)":(s.left=o.left,s.top=o.top),s}}});var D="iframe",K="//about:blank",Y=function(e){if(t.currTemplate[D]){var n=t.currTemplate[D].find("iframe");n.length&&(e||(n[0].src=K),t.isIE8&&n.css("display",e?"block":"none"))}};e.magnificPopup.registerModule(D,{options:{markup:'<div class="mfp-iframe-scaler"><div class="mfp-close"></div><iframe class="mfp-iframe" src="//about:blank" frameborder="0" allowfullscreen></iframe></div>',srcAction:"iframe_src",patterns:{youtube:{index:"youtube.com",id:"v=",src:"//www.youtube.com/embed/%id%?autoplay=1"},vimeo:{index:"vimeo.com/",id:"/",src:"//player.vimeo.com/video/%id%?autoplay=1"},gmaps:{index:"//maps.google.",src:"%id%&output=embed"}}},proto:{initIframe:function(){t.types.push(D),x("BeforeChange",function(e,t,n){t!==n&&(t===D?Y():n===D&&Y(!0))}),x(l+"."+D,function(){Y()})},getIframe:function(n,i){var o=n.src,r=t.st.iframe;e.each(r.patterns,function(){return o.indexOf(this.index)>-1?(this.id&&(o="string"==typeof this.id?o.substr(o.lastIndexOf(this.id)+this.id.length,o.length):this.id.call(this,o)),o=this.src.replace("%id%",o),!1):void 0});var a={};return r.srcAction&&(a[r.srcAction]=o),t._parseMarkup(i,a,n),t.updateStatus("ready"),i}}});var U=function(e){var n=t.items.length;return e>n-1?e-n:0>e?n+e:e},G=function(e,t,n){return e.replace("%curr%",t+1).replace("%total%",n)};e.magnificPopup.registerModule("gallery",{options:{enabled:!1,arrowMarkup:'<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',preload:[0,2],navigateByImgClick:!0,arrows:!0,tPrev:"Previous (Left arrow key)",tNext:"Next (Right arrow key)",tCounter:"%curr% of %total%"},proto:{initGallery:function(){var n=t.st.gallery,i=".mfp-gallery",r=Boolean(e.fn.mfpFastClick);return t.direction=!0,n&&n.enabled?(a+=" mfp-gallery",x(f+i,function(){n.navigateByImgClick&&t.wrap.on("click"+i,".mfp-img",function(){return t.items.length>1?(t.next(),!1):void 0}),o.on("keydown"+i,function(e){37===e.keyCode?t.prev():39===e.keyCode&&t.next()})}),x("UpdateStatus"+i,function(e,n){n.text&&(n.text=G(n.text,t.currItem.index,t.items.length))}),x(p+i,function(e,i,o,r){var a=t.items.length;o.counter=a>1?G(n.tCounter,r.index,a):""}),x("BuildControls"+i,function(){if(t.items.length>1&&n.arrows&&!t.arrowLeft){var i=n.arrowMarkup,o=t.arrowLeft=e(i.replace("%title%",n.tPrev).replace("%dir%","left")).addClass(y),a=t.arrowRight=e(i.replace("%title%",n.tNext).replace("%dir%","right")).addClass(y),s=r?"mfpFastClick":"click";o[s](function(){t.prev()}),a[s](function(){t.next()}),t.isIE7&&(k("b",o[0],!1,!0),k("a",o[0],!1,!0),k("b",a[0],!1,!0),k("a",a[0],!1,!0)),t.container.append(o.add(a))}}),x(m+i,function(){t._preloadTimeout&&clearTimeout(t._preloadTimeout),t._preloadTimeout=setTimeout(function(){t.preloadNearbyImages(),t._preloadTimeout=null},16)}),x(l+i,function(){o.off(i),t.wrap.off("click"+i),t.arrowLeft&&r&&t.arrowLeft.add(t.arrowRight).destroyMfpFastClick(),t.arrowRight=t.arrowLeft=null}),void 0):!1},next:function(){t.direction=!0,t.index=U(t.index+1),t.updateItemHTML()},prev:function(){t.direction=!1,t.index=U(t.index-1),t.updateItemHTML()},goTo:function(e){t.direction=e>=t.index,t.index=e,t.updateItemHTML()},preloadNearbyImages:function(){var e,n=t.st.gallery.preload,i=Math.min(n[0],t.items.length),o=Math.min(n[1],t.items.length);for(e=1;(t.direction?o:i)>=e;e++)t._preloadItem(t.index+e);for(e=1;(t.direction?i:o)>=e;e++)t._preloadItem(t.index-e)},_preloadItem:function(n){if(n=U(n),!t.items[n].preloaded){var i=t.items[n];i.parsed||(i=t.parseEl(n)),T("LazyLoad",i),"image"===i.type&&(i.img=e('<img class="mfp-img" />').on("load.mfploader",function(){i.hasSize=!0}).on("error.mfploader",function(){i.hasSize=!0,i.loadError=!0,T("LazyLoadError",i)}).attr("src",i.src)),i.preloaded=!0}}}});var X="retina";e.magnificPopup.registerModule(X,{options:{replaceSrc:function(e){return e.src.replace(/\.\w+$/,function(e){return"@2x"+e})},ratio:1},proto:{initRetina:function(){if(window.devicePixelRatio>1){var e=t.st.retina,n=e.ratio;n=isNaN(n)?n():n,n>1&&(x("ImageHasSize."+X,function(e,t){t.img.css({"max-width":t.img[0].naturalWidth/n,width:"100%"})}),x("ElementParse."+X,function(t,i){i.src=e.replaceSrc(i,n)}))}}}}),function(){var t=1e3,n="ontouchstart"in window,i=function(){I.off("touchmove"+r+" touchend"+r)},o="mfpFastClick",r="."+o;e.fn.mfpFastClick=function(o){return e(this).each(function(){var a,s=e(this);if(n){var l,c,d,u,p,f;s.on("touchstart"+r,function(e){u=!1,f=1,p=e.originalEvent?e.originalEvent.touches[0]:e.touches[0],c=p.clientX,d=p.clientY,I.on("touchmove"+r,function(e){p=e.originalEvent?e.originalEvent.touches:e.touches,f=p.length,p=p[0],(Math.abs(p.clientX-c)>10||Math.abs(p.clientY-d)>10)&&(u=!0,i())}).on("touchend"+r,function(e){i(),u||f>1||(a=!0,e.preventDefault(),clearTimeout(l),l=setTimeout(function(){a=!1},t),o())})})}s.on("click"+r,function(){a||o()})})},e.fn.destroyMfpFastClick=function(){e(this).off("touchstart"+r+" click"+r),n&&I.off("touchmove"+r+" touchend"+r)}}()})(window.jQuery||window.Zepto);
	</script>
<?php // } ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.backgroundSize.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-scrolltofixed-min.js"></script>

<script type="text/javascript">
	jQuery(document).ready(function($) {

		// Set Background Size
		jQuery('#header-container').css({backgroundSize:"cover"});
	
		// Flexnav
		jQuery("#menu-main").flexNav();

		// Add breakpoint attribute to main menu
		jQuery("#menu-main").attr('data-breakpoint','768');

		// Sticky Compare Header
		jQuery('#compare-packages thead tr').scrollToFixed();

		// Sticky Pricing Grid Sort Filter
		jQuery('#sort-filter').scrollToFixed();


		<?php if(is_front_page()) : ?>

			// Main Slider
			jQuery("#main-slider").flexslider({
				slideshow: true,
				animation: "slide",
				slideshowSpeed: 7000,
				animationSpeed: 1000,        
			});			

			// Resize, can be inside Load or Ready
			jQuery(window).trigger('resize',function(){
				alert("sdfassdfa");
			});

			//jQuery('#main-slider.flexslider .slides li').append('<span id="ls"></span><span id="rs"></span>');

			// Main Slider Control Nav
			var control = jQuery('#main-slider .flex-control-nav').outerWidth();
			var pos = control/2;
			var finalpos =  pos * -1;
			// console.log('position'+finalpos);
			jQuery('#main-slider .flex-control-nav').css('margin-left',finalpos);

		<?php endif; ?>

		// Community
		jQuery("#community").flexslider({
			slideshow: true,
			slideshowSpeed: 7000,
			animationSpeed: 1000,
			controlNav: false,
			directionNav: false,
		});
		
		// Package View Details Toggle
		//jQuery( "#pricing-grid .pricing .inner .footer .view-details" ).click(function() {
		jQuery('body').on('click','.view-details',function(){
		  jQuery(this).siblings(".includes").slideToggle(300);
		  return false;
		});
		jQuery( ".close-parent" ).click(function() {
		  jQuery(this).parent(".includes").slideToggle(300);
		  return false;
		});

		// Compare Button
		//jQuery( "#pricing-grid .pricing .inner header .compare-check" ).live("click",function() {
		jQuery('body').on('click','.compare-check',function(){
			if(jQuery(this).is(':checked')) {
				jQuery(this).siblings(".compare-label").hide();
		  		jQuery(this).siblings(".compare-button").show();
			} else {
				jQuery(this).siblings(".compare-label").show();
		  		jQuery(this).siblings(".compare-button").hide();
			}
		  	
		});
		
		function getSorted(selector, attrName, asc) {
		    return $($(selector).toArray().sort(function(a, b){
		        var aVal = parseInt(a.getAttribute(attrName)),
		            bVal = parseInt(b.getAttribute(attrName));
		            
		        if(asc == false){
		            return bVal - aVal;
		        }else{
		            return aVal - bVal;
				}
		    }));
		}
			
		jQuery("#sort-items").on("change", function(){
			var optionSelected = $("option:selected", this);
                var valueSelected = this.value;
                
                if(valueSelected == "desc"){
                    var sortedData = getSorted(".pricing","price", false);
                }else if(valueSelected == "recommended"){
                    var sortedData = getSorted(".pricing","arrange", true);
                }else{
                    var sortedData = getSorted(".pricing","price", true);
                }
                
                $("#pricing-grid").empty();
                $("#pricing-grid").append(sortedData);
                //console.log(sortedData);
		});
		
		
		jQuery(".type-filter").on("click", function(){
		
			$(".no-package").hide();
			var is_checked = $(this).is(":checked");
			
			var totalType = $("input.type-filter:checked").length;
			
			if($(this).attr("name") == "all-filter"){
				$("input.type-filter:not([name=all-filter])").prop("checked", false);
				$("input.type-filter[name=all-filter]").prop("checked", true);
			}else if($(this).attr("name") != "all-filter"){
				$("input.type-filter[name=all-filter]").prop("checked", false);
			}
			
			//debug the checkbox
			var all_check = $("input.type-filter[name=all-filter]").is(":checked");
			if(all_check == true){
				$("input.type-filter:not([name=all-filter])").prop("checked", false);
				$("input.type-filter[name=all-filter]").prop("checked", true);
			}else{
				$("input.type-filter[name=all-filter]").prop("checked", false);
			}
			
			totalType = $("input.type-filter:checked").length;
			if(totalType == 0){
				$("input.type-filter[name=all-filter]").prop("checked", true);
			}
			var all_check = $("input.type-filter[name=all-filter]").is(":checked");
			
			var all_type_by = ["TV","Internet","Phone"];
			var type_by = [];
			
			$("input.type-filter:checked").each(function(){
                    type_by.push($(this).val());
                    all_type_by.splice( $.inArray($(this).val(),all_type_by) ,1 );
			});
		
		
			var all_select_type = type_by.join(".");
			$(".pricing").hide();
			//$(".pricing."+all_select_type).show();
			
			//if all package selected, clear the array packages
			if(all_check == true){
				var all_type_by = [];
				//console.log("all daw");
			}
			
			if(all_type_by.length >= 1){
				var all_type_by_join = all_type_by.join(",.");
				//console.log(all_type_by_join);
				$(".pricing."+all_select_type+":not(."+all_type_by_join+")").show();
			}else{
				$(".pricing."+all_select_type).show();
			}
			
			//
			if($(".pricing:visible").length == 0){
				$(".no-package").show();
			}
			
			
			$("input.compare-check:checked").prop("checked", false); // will uncheck the checkbox with id check1
			$(".pricing a.compare-button").css({"display": "none"});
			$(".pricing label.compare-label").css({"display": "inline"});
		});
		
		
			
		//sometimes checked will cache - fix it
		$("input.compare-check:checked").each(function () {
			var packID = $(this).val();
			$(".pricing[pack_id="+packID+"]").addClass("selected");
			
			$(".pricing[pack_id="+packID+"] a.compare-button").css({"display": "inline"});
			$(".pricing[pack_id="+packID+"] label.compare-label").css({"display": "none"});
		});
		
		$("input.type-filter").prop("checked", false);
		$("input.type-filter[name=all-filter]").prop("checked", true);
	
		jQuery(".compare-button").live("click", function(e){
			var compareIDs = [];
			var totalCheck = $("input.compare-check:checked").length;

			if(totalCheck < 2){
				var mousex = e.pageX - 30;
				var mousey = e.pageY + 20;
            	$('<div class="twc-tooltip tooltip-compare"><div class="ttip-content"><span class="arrow"></span><p>You must select atleast 1 more offer to compare plans</p><span class="close-btn"></span></div></div>')
		        .appendTo('body').fadeIn('slow');
		        $('.twc-tooltip').css({ top: mousey, left: mousex })
            	return false;
            } else {
            	$(" input.compare-check:checked").each(function(){
                    compareIDs.push($(this).attr("pack_id"));
				});
			
				//console.log(compareIDs);
				var comIDLink = compareIDs.join(",");
				//var comIDLink = "";
				window.location.href="/compare-packages/?id="+comIDLink;
				return false;	
            }		    
		});

		$(".twc-tooltip .close-btn").live("click",function(){
			$(this).parent('div').parent('.twc-tooltip').fadeOut();
		});
		
		
		$("input.compare-check").live("click",function(e){
            var totalCheck = $("input.compare-check:checked").length;
                
            // parent enable disable
            console.log("checked");
                
            var is_checked = $(this).is(":checked");
            var packID = $(this).val();
                
            if(is_checked == true){
                $(".pricing[pack_id="+packID+"]").addClass("selected");
            }else{
                $(".pricing[pack_id="+packID+"]").removeClass("selected");
            }
            
            if(totalCheck == 2 || totalCheck == 3){
            	var mousex = e.pageX - 30;
				var mousey = e.pageY + 20;
				var compareIDs = [];

				$("input.compare-check:checked").each(function(){
                    compareIDs.push($(this).attr("pack_id"));
				});
			
				//console.log(compareIDs);
				var comIDLink = compareIDs.join(",");
				var compareLink = "/compare-packages/?id="+comIDLink;

            	$('<div class="twc-tooltip tooltip-compare"><div class="ttip-content"><span class="arrow"></span><p>You can select a maximum of 3 offers to compare at a time. Select Compare Now or make another selection.<a href="'+compareLink+'" title="Compare Now">Compare now</a></p><span class="close-btn"></span></div></div>')
		        .appendTo('body').fadeIn('slow');
		        $('.twc-tooltip').css({ top: mousey, left: mousex });
            }
            if(totalCheck == 3){
                $(".pricing:not(.selected)").addClass("unable-this");
            }else if(totalCheck > 3){
                $(this).prop("checked", false); // will uncheck the checkbox with id check1
                $(".pricing[pack_id="+packID+"]").removeClass("selected");
                $(".pricing:not(.selected)").addClass("unable-this");
                return false;
            }else{
                $(".pricing:not(.selected)").removeClass("unable-this");
            }
		});
		

		// Sort Filter Toggle
		var nav = jQuery('#sort-filter'),
		animateTime = 500,
		navLink = jQuery('#sort-filter .toggle');
		navLink.click(function(){
			jQuery(this).toggleClass('close');
			jQuery(this).toggleClass('open');
			if(nav.height() === 24){
				autoHeightAnimate(nav, animateTime);
			} else {
				nav.stop().animate({ height: '24px' }, animateTime);
			}			
		});

		// Tooltip
		jQuery('.tooltipme').hover(function(){
			// Hover over code
            var title = jQuery(this).attr('title');
            var title_arr = title.split('~');
            var theading = title_arr[0];            
            var output ="";
            if(title_arr[1] == null) {
            	output = '<span>'+title_arr[0]+'</span>';
            } else {
            	output = '<strong>'+title_arr[0]+'</strong><span>'+title_arr[1]+'</span>';
            }
            jQuery(this).data('tipText', title).removeAttr('title');
            jQuery('<div class="twc-tooltip"><div class="ttip-content"><span class="arrow"></span><p>'+output+'</p></div></div>')
            .appendTo('body')
            .fadeIn('slow');
        }, function() {
        	// Hover out code
            jQuery(this).attr('title', jQuery(this).data('tipText'));
            jQuery('.twc-tooltip').remove();
        }).mousemove(function(e) {
        	var mousex = e.pageX - 120; //Get X coordinates
            var mousey = e.pageY + 20; //Get Y coordinates
            jQuery('.twc-tooltip')
            .css({ top: mousey, left: mousex })
        });


		function autoHeightAnimate(element, time){
		var curHeight = element.height(), // Get Default Height
			autoHeight = element.css('height', 'auto').height(); // Get Auto Height
			element.height(curHeight); // Reset to Default Height
			element.stop().animate({ height: autoHeight }, parseInt(time)); // Animate to Auto Height
		}
		

		<?php if(is_page_template('main.php')) : ?>
			jQuery('#top-questions ul li p').click(function(){
				// Set the effect type
				var effect = 'slide';
			 
				// Set the options for the effect type chosen
				var options = { direction: 'right' };
			 
				// Set the duration (default: 400 milliseconds)
				var duration = 750;
				jQuery(this).parent('li').siblings().find('.flyout').hide(500);
				jQuery(this).next('.flyout').toggle(effect, options, duration);
			});

			jQuery('#top-questions ul li a.close').click(function(){
				jQuery(this).parent('.flyout').hide(500);
			});
		<?php endif; ?>

		// Special Offers Carousel
		jQuery("#offers").flexslider({
			slideshow: false,
			animation: "slide",
			controlNav: true,
			itemWidth: 200,
			maxItems: 3,
			minItems: 1,
			move: 3
		});    

		// Search Field
		jQuery('.search-text').click(function() {
			if (this.value == this.defaultValue) {
				this.value = '';
			}
		});
		jQuery('.search-text').blur(function() {
			if (this.value == '') {
				this.value = this.defaultValue;
			}
		});

		equalheight = function(container){

			var currentTallest = 0,
			currentRowStart = 0,
			rowDivs = new Array(),
			jQueryel,
			topPosition = 0;

			jQuery(container).each(function() {
				jQueryel = jQuery(this);
				jQuery(jQueryel).height('auto')
				topPostion = jQueryel.position().top;

				if (currentRowStart != topPostion) {
					for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
						rowDivs[currentDiv].height(currentTallest);
					}
					rowDivs.length = 0; // empty the array
					currentRowStart = topPostion;
					currentTallest = jQueryel.height();
					rowDivs.push(jQueryel);
				} else {
					rowDivs.push(jQueryel);
					currentTallest = (currentTallest < jQueryel.height()) ? (jQueryel.height()) : (currentTallest);
				}
				for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
					rowDivs[currentDiv].height(currentTallest);
				}
			});
		}

		equalheight('#now-playing .now-playing');

		<?php if(!is_front_page()) : ?>

			jQuery(window).scroll(function() {
				if (jQuery(this).scrollTop()) {
					jQuery('#toTop').fadeIn();
				} else {
					jQuery('#toTop').fadeOut();
				}
			});

			jQuery("#toTop").click(function() {
				jQuery("body").animate({scrollTop: 0}, 1000);
			});

			jQuery(".oceanic-accordion .menu li").hover(function() {
				jQuery(this).children('ul.sub-menu').stop(true,true).slideDown(500);
				if (jQuery(this).children('ul').length > 0) {
					jQuery(this).addClass("hasChildren");
				}
			},
			function() {
				jQuery(this).children('ul.sub-menu').stop(true,true).slideUp(500);
				jQuery(this).removeClass("active");									
			});

		<?php endif; ?>
		
		// Channels Pop Trigger
		// jQuery('a#channels-300plus').magnificPopup({
		// 	type:'inline'
		// });
		// jQuery('a#channels-200plus').magnificPopup({
		// 	type:'inline'
		// });
		// jQuery('a#channels-70plus').magnificPopup({
		// 	type:'inline'
		// });
		// jQuery('a#channels-20plus').magnificPopup({
		// 	type:'inline'
		// });

		<?php
		$popup_script = get_settings('popup_script');
		// echo $popup_script;
		echo htmlspecialchars_decode($popup_script);

		
		// $lines = explode("\n", $popup_script);
		// $lines = str_replace(" ", "", $lines);
		// $line_before = 'jQuery("a#';
		// $line_after = '").magnificPopup({ type:"inline" });';
		// $format = 'jQuery("a#%s").magnificPopup({ type:"inline" });';
		// foreach( $lines as $line ) {
		//   echo sprintf($format, $line);
		//   // echo 'jQuery("a#'.$line.'").magnificPopup({ type:"inline" });';
		// }
		// echo htmlspecialchars_decode($popup_script);
		// echo htmlentities($channels,ENT_QUOTES);
		?>

		

		<?php if(is_page(388)) : ?>
			// package details collapsible
			jQuery('#packages a.details').click(function(){    
				if(jQuery(this).text()=='View Details'){
					jQuery(this).next('.details-panel').stop(true,true).show(500);
					jQuery(this).text('Hide Details');
				} else {
					jQuery(this).next('.details-panel').stop(true,true).hide(500);
					jQuery(this).text('View Details');
				}
				return false;
			});

			jQuery('#packages .details-panel a.close').click(function(){    
				jQuery(this).parent('.details-panel').stop(true,true).hide(500);
				jQuery('#packages .view-details a.details').text('View Details');
				return false;
			});

			jQuery('a[title="NBC Sports Live Extra"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="FYI"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="TWC TV"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="MY TWC"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="Oceanic TV"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="Intelligent Home"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="TWC WiFi Finder"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="Social One"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="Phone 2 Go"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="HBO GO"]').magnificPopup({
				type:'inline'
			});
			  
			jQuery('a[title="MAX GO"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="STARZ Play"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="Showtime Anytime"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="Encore Play"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="MTV"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="VH1"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="Spike"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="Comedy Central"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="BET"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="Hallmark Channel"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="AMC"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="We TV"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="IFC"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="Sundance Channel"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="Revolt TV"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="E! Now"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="CMT"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="History"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="A&E"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="Lifetime"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="UVideos"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="Logo TV"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="EPIX"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="FOX Now"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="FXNOW"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="Nat Geo Wild"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="Music Choice"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="FYI"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="USA NOW"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="Bravo Now"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="SyFy Now"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="Oxygen Now"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="Telemundo Now"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="mun2 Now"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="HGTV Watch"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="Watch Food Network"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="Travel Channel"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="Esquire TV Now"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="Watch Cooking Channel"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="DIY Watch"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="ESPN"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="Universal Sports Live"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="PAC-12"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="beIN SPORT Play"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="BTN2GO"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="MLB Extra Innings with MLB.TV"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="TWC SportsNet"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="Willow"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="FOX Sports Go"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="NBC Sports Live Extra"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="Golf Live Extra"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="NCAA March Madness Live"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="Fox Business"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="Fox News"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="C-SPAN"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="Time Warner Cable News"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="WNYW Fox 5"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="CNBC"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="MSNBC"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="NBC News"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="Nick"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="Kids Media"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="Sprout Now"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="VUTOPIA"]').magnificPopup({
				type:'inline'
			});

			jQuery('a[title="EPIX"]').magnificPopup({
				type:'inline'
			});
		<?php endif; ?>
	});
</script>

<?php if(!is_front_page()) : ?>
	<span id="toTop"></span>
<?php endif; ?>

<a href="http://www.oceanicsurvey.com/WEB/" target="_blank" title="" class="feedback-callout"></a>
<script type="text/javascript">_satellite.pageBottom();</script>

<!-- begin: Adwords Call Tracking -->
<script type="text/javascript">
(function(a,e,c,f,g,b,d){var h={ak:"994297305",cl:"GPbfCP2c9l8Q2YuP2gM"};a[c]=a[c]||function(){(a[c].q=a[c].q||[]).push(arguments)};a[f]||(a[f]=h.ak);b=e.createElement(g);b.async=1;b.src="//www.gstatic.com/wcm/loader.js";d=e.getElementsByTagName(g)[0];d.parentNode.insertBefore(b,d);a._googWcmGet=function(b,d,e){a[c](2,b,h,d,null,new Date,e)}})(window,document,"_googWcmImpl","_googWcmAk","script");
</script>

<script type="text/javascript">
  var callback = function(formatted_number, mobile_number) {                 
  var c = "strong,p,h2";
  var c1= c.split(",");
  for(v=0;v<c1.length;v++)
  {
    var m = document.getElementsByTagName(c1[v]);
var len = m.length;
for(i=0;i<len;i++)
{
var c = m[i].innerHTML.replace("643-2337",formatted_number);
m[i].innerHTML = c;
}
}
//jQuery('a[]').attr("href","tel:"+mobile_number);
    };
    </script>
<script>
    window.onload = function()
    {
        _googWcmGet(callback,"808-643-2337");
    }
</script>
<!-- end: Adwords Call Tracking -->


<?php wp_footer();?>

</body>
</html>