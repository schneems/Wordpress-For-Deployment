	
		</div><!-- inner-whitespace -->
		</div><!-- span-24 last -->
		
    </div><!-- whitespace -->

<br />
<br />


<div class = "span-25 clearfix center">
<a href = "https://addons.mozilla.org/en-US/firefox/addon/14411/" class = "bottom_buttons inline-block center ui-state-default ui-corner-all  " id = "spamfire">

	<h2>Use Firefox?</h2><br />
	<img alt="Spamfire" src="<?php bloginfo('stylesheet_directory'); ?>/images/spamfire.png" />
	<h3>Get SpamFire!</h3>
</a>

<a href =  "https://chrome.google.com/extensions/detail/bocfjjmdfnoogaflbdbeigbihlalcbdk"  style = "display:none" class = "bottom_buttons inline-block center ui-state-default ui-corner-all" id = "chrome-spamfire">
	<h2>Use Chrome?</h2><br />
		<img alt="Chrome-spamfire" src="<?php bloginfo('stylesheet_directory'); ?>/images/chrome-spamfire.png" />
	<h3>Get SpamfireCR!</h3>
</a>



<a href = "/grade_widget/new"  class = "bottom_buttons inline-block center ui-state-default ui-corner-all  " id = "widget">
	<h2>Got A Website?</h2><br />
	<img alt="Demovalid" src="<?php bloginfo('stylesheet_directory'); ?>/images/widgets/demovalid.png" />
	<h3>Get Validated!</h3>
</a>


<a href =  "/static/contribute"  class = "bottom_buttons inline-block center ui-state-default ui-corner-all" id = "cc">
	<h2>Want To Help?</h2><br />
		<img alt="Creativecommons" src="<?php bloginfo('stylesheet_directory'); ?>/images/creativecommons.png" />
	<h3>Get Started!</h3>
</a>



</div>

<script type="text/javascript">
var BrowserDetect = {
init: function () {
	this.browser = this.searchString(this.dataBrowser) || "An unknown browser";
	this.version = this.searchVersion(navigator.userAgent)
		|| this.searchVersion(navigator.appVersion)
		|| "an unknown version";
	this.OS = this.searchString(this.dataOS) || "an unknown OS";
},
searchString: function (data) {
	for (var i=0;i<data.length;i++)	{
		var dataString = data[i].string;
		var dataProp = data[i].prop;
		this.versionSearchString = data[i].versionSearch || data[i].identity;
		if (dataString) {
			if (dataString.indexOf(data[i].subString) != -1)
				return data[i].identity;
		}
		else if (dataProp)
			return data[i].identity;
	}
},
searchVersion: function (dataString) {
	var index = dataString.indexOf(this.versionSearchString);
	if (index == -1) return;
	return parseFloat(dataString.substring(index+this.versionSearchString.length+1));
},
dataBrowser: [
	{
		string: navigator.userAgent,
		subString: "Chrome",
		identity: "Chrome"
	},
	{ 	string: navigator.userAgent,
		subString: "OmniWeb",
		versionSearch: "OmniWeb/",
		identity: "OmniWeb"
	},
	{
		string: navigator.vendor,
		subString: "Apple",
		identity: "Safari",
		versionSearch: "Version"
	},
	{
		prop: window.opera,
		identity: "Opera"
	},
	{
		string: navigator.vendor,
		subString: "iCab",
		identity: "iCab"
	},
	{
		string: navigator.vendor,
		subString: "KDE",
		identity: "Konqueror"
	},
	{
		string: navigator.userAgent,
		subString: "Firefox",
		identity: "Firefox"
	},
	{
		string: navigator.vendor,
		subString: "Camino",
		identity: "Camino"
	},
	{		// for newer Netscapes (6+)
		string: navigator.userAgent,
		subString: "Netscape",
		identity: "Netscape"
	},
	{
		string: navigator.userAgent,
		subString: "MSIE",
		identity: "Explorer",
		versionSearch: "MSIE"
	},
	{
		string: navigator.userAgent,
		subString: "Gecko",
		identity: "Mozilla",
		versionSearch: "rv"
	},
	{ 		// for older Netscapes (4-)
		string: navigator.userAgent,
		subString: "Mozilla",
		identity: "Netscape",
		versionSearch: "Mozilla"
	}
],
dataOS : [
	{
		string: navigator.platform,
		subString: "Win",
		identity: "Windows"
	},
	{
		string: navigator.platform,
		subString: "Mac",
		identity: "Mac"
	},
	{
		   string: navigator.userAgent,
		   subString: "iPhone",
		   identity: "iPhone/iPod"
    },
	{
		string: navigator.platform,
		subString: "Linux",
		identity: "Linux"
	}
]

};
BrowserDetect.init();

if (BrowserDetect.browser == "Chrome") {
var element = document.getElementById('chrome-spamfire');
element.style.display = "";
element = document.getElementById('spamfire')
element.style.display = "none";
}

else {
var element = document.getElementById('chrome-spamfire');
element.style.display = "none";
element = document.getElementById('spamfire')
element.style.display = "";
}
</script>

</div><!-- content_wrapper -->

<br />
<div id='footer'>

	<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/us/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/3.0/us/88x31.png" /></a>
	

	
	<a href="http://digg.com/submit?phase=2&amp;url=http%3A%2F%2Fwww%2Ewhyspam%2Eme%2F" rel="nofollow"><img alt="Digg_32" src="<?php bloginfo('stylesheet_directory'); ?>/images/digg_32.png" /></a>
	<a href="http://www.reddit.com/submit?url=http%3A%2F%2Fwww%2Ewhyspam%2Eme%2F" rel="nofollow"><img alt="Reddit_32" src="<?php bloginfo('stylesheet_directory'); ?>/images/reddit_32.png" /></a> 
	<a href="http://twitter.com/home?status=http%3A%2F%2Fwww%2Ewhyspam%2Eme%2F" rel="nofollow"><img alt="Twitter_32" src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter_32.png" /></a>
	<a href="http://www.stumbleupon.com/submit?url=http%3A%2F%2Fwww%2Ewhyspam%2Eme%2F" rel="nofollow"><img alt="Stumbleupon_32" src="<?php bloginfo('stylesheet_directory'); ?>/images/stumbleupon_32.png" /></a> 
	<a href="http://buzz.yahoo.com/buzz?targetUrl=http%3A%2F%2Fwww%2Ewhyspam%2Eme%2F" rel="nofollow"><img alt="Yahoobuzz_32" src="<?php bloginfo('stylesheet_directory'); ?>/images/yahoobuzz_32.png" /></a> 
	<a href="	http://del.icio.us/post?url=http%3A%2F%2Fwww%2Ewhyspam%2Eme%2F" rel="nofollow"><img alt="Delicious_32" src="<?php bloginfo('stylesheet_directory'); ?>/images/delicious_32.png" /></a> 			
	<a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fwww%2Ewhyspam%2Eme%2F" rel="nofollow"><img alt="Facebook_32" src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook_32.png" /></a> 
	
	
	<br />

	<a href = "http://www.thinkbohemian.com">©2010 Think Bohemian</a>
	 |<a href="/static/privacy"> Privacy</a>
	 |<a href="/static/about"> About</a>
	 |<a href="/static/contact"> Contact </a>

	 |<a href="/static/faq"> FAQ </a>
	
</div>





<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" type="text/javascript"></script>


<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js" type="text/javascript"></script>


		<script type="text/javascript">
			var Header = {
				// Let's write in JSON to make it more modular
				addFade : function(selector){
					$("<span class=\"fake-hover\"></span>").css("display", "none").prependTo($(selector)); 
					// Safari dislikes hide() for some reason
					$(selector+" a").bind("mouseenter",function(){
						$(selector+" .fake-hover").fadeIn("slow");
					});
					$(selector+" a").bind("mouseleave",function(){
						$(selector+" .fake-hover").hide();
					});
				}
			};

			$(function(){
				Header.addFade("#header");
			});
			$(function() {
					$('.ui-state-default').hover(
						function() { $(this).addClass('ui-state-hover'); }, 
						function() { $(this).removeClass('ui-state-hover'); }						
					);
					$('.nav-button').hover(
						function() { $(this).addClass('on'); }, 
						function() { $(this).removeClass('on'); }						
					);
					$('#dialog').dialog({
						autoOpen: false,
						modal: true ,
						resizable: false,
						show: 'scale' ,
						bgiframe: true,
						width: 600
					});
					$('#dialog_link').click(function(){
						$('#dialog').dialog('open');
						return false;
					});				
				});	
		</script>
	


	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	try {
	var pageTracker = _gat._getTracker("UA-5070471-4");
	pageTracker._setDomainName(".whyspam.me");
	pageTracker._trackPageview();
	} catch(err) {}</script>
	<script type="text/javascript" charset="utf-8">
	  var is_ssl = ("https:" == document.location.protocol);
	  var asset_host = is_ssl ? "https://s3.amazonaws.com/getsatisfaction.com/" : "http://s3.amazonaws.com/getsatisfaction.com/";
	  document.write(unescape("%3Cscript src='" + asset_host + "javascripts/feedback-v2.js' type='text/javascript'%3E%3C/script%3E"));
	</script>

	<script type="text/javascript" charset="utf-8">
	  var feedback_widget_options = {};

	  feedback_widget_options.display = "overlay";  
	  feedback_widget_options.company = "why_spam_me";
	  feedback_widget_options.placement = "left";
	  feedback_widget_options.color = "#030303";
	  feedback_widget_options.style = "idea";







	  var feedback_widget = new GSFN.feedback_widget(feedback_widget_options);
	</script>
	

	





<script type="text/javascript">
	$(function() {
		$("#tabs").tabs();
		
		$('#user_submit').hover(
			function() { $(this).addClass('ui-state-hover'); }, 
			function() { $(this).removeClass('ui-state-hover'); }
		);
		
		
		$('#youtube-video object').css("display", "block");
		$('#you-tube-how object').css("display", "block");


	});	

</script>




</body>
</html>
