<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="msvalidate.01" content="07BD89B9AF0AD5663F5646EC850019CD" />
<script src="//cdn.optimizely.com/js/220146039.js"></script>
							<script type="text/javascript" src="/js/menubar.js?mtime=1372144192"></script>
								<script type="text/javascript" src="/js/other.js?mtime=1373569958"></script>
								<script type="text/javascript" src="/js/jquery-latest.js?mtime=1489530678"></script>
								<script type="text/javascript" src="/js/global.js?mtime=1389630930"></script>
								<script type="text/javascript" src="/_includes/utilities.js?mtime=1372144191"></script>
								<script type="text/javascript" src="/js/functions.socialnetwork.js?mtime=1372144192"></script>
								<script type="text/javascript" src="/js/jquery.html5-placeholder-shim.js?mtime=1379534996"></script>
								<script type="text/javascript">var _sf_startpt=(new Date()).getTime()</script>
			                            <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:300,400,700" type="text/css" />
                        						    <link rel="stylesheet" href="css/home.css" type="text/css" />
                        						    <link rel="stylesheet" href="css/home2.css" type="text/css" />
                        						    <link rel="stylesheet" href="css/home3.css" type="text/css" />
                        						    <link rel="stylesheet" href="css/home4.css" type="text/css" />
                        						    <link rel="stylesheet" href="css/home5.css" />
                        						    <link rel="stylesheet" href="/css/dcom-v4/header.css?mtime=1376510577" type="text/css" />
                        						    <link rel="stylesheet" href="/css/socialnetwork.css?mtime=1372144091" type="text/css" />
                        						    <link rel="stylesheet" href="/css/merchant_styles.css?mtime=1385578066" type="text/css" />
                        		<title>Login/Switch Account</title>
		<meta name="description" content="Login or switch your current role" />
		<script type="text/javascript" src="/js/google_analytics.js?1561569792"></script>		
			<script type="text/javascript">try {_gaq = _gaq || [];_gaq.push(['_setAccount', 'UA-7095585-1']);_gaq.push(['_setDomainName', 'delivery.com']);_gaq.push(['_trackPageview']);} catch(err) {}(function() {

			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
</script>
</head>
			<body>
			            <!-- Google Tag Manager -->
            <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-QG9G"
                              height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-QG9G');</script>
            <!-- End Google Tag Manager -->
        	<script>
		$(document).ready( function() {
			$(".cubby").hover(
				function () { $(this).find(".door").clearQueue().animate({ top: "-100%" }) },
				function () { $(this).find(".door").clearQueue().animate({ top: "0" }) }
			);
			
			$(".cubby .door").click(
				function () {
					$(this).clearQueue().animate({top: "-100%"});
				}
			);
			
			if( window.location.href.indexOf('search.php') != -1) {
		    	$("#DC_search_text").keydown(function(e) {		    	    		    
    			    if (e.keyCode == 13) {
                        $("#search_button").click();
    			    }
		    	});
		    	
		    	$("#DC_search_text").keyup( function(e) {				    	    
		    		if($("#DC_search_text").attr("value") !== "") {
		    			$("#search_button").attr("src", "/images/search_icon_hover.png");
		    		} else {
		    			$("#search_button").attr("src", "/images/lupa.jpg");
		    		}
		    	});
			}
			
			$("#search_button").click( function() { 
				// this is a total, shameless hack intended to take advantage of the scope of the DC search text field in the address bar section by setting said field to hidden and populating it with the value from search field in the sidebar
				if(window.location.href.indexOf('search.php') != -1) {
		    		$("#DC_search").val($("#DC_search_text").val());
		    	} 
				$("#search_bar_form").submit();		    		
		    });			
		    
		    AJAX_ACCOUNT.MODAL.fixModalLayout =  function() {				
				if (jQuery(".sModal").length > 0 ) {				
					jQuery(".sModal #acct_login .header").css("padding-left", "0");
					jQuery("#acct_login").removeClass("grid_6 login");
					jQuery("#acct_create").removeClass("grid_6");
				}
			}
			
			//hack to fit signup and login forms in the modal on the TAF page
			jQuery(".padlink").click( function() {		
				AJAX_ACCOUNT.MODAL.fixModalLayout();
			});
		});

		/*
        //Radico stuff for PD-455
        try{
            var _mmaq = _mmaq || [];
            _mmaq.push(['setAppId', 'delivery.com']);
            _mmaq.push(['setCookieDomain', '.delivery.com']);
            _mmaq.push(['trackPageView']);
            (function() {
                var sp = document.createElement('script');
                sp.type = 'text/javascript';
                sp.async = true;
                sp.defer = true;
                sp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://static.radi.co/client/delivery.com/a.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(sp, s);
            })();
        }
        catch(err){}
        */
	</script>

<!-- Header starts -->

<div id="header_bar">
	<!-- Constraining to 960gs -->
	<div class="container_12">
				<div class="grid_4" id="logo">
			<a href="https://admin.delivery.com/">
                <img src="/images/dcom-logo.png?cb=ijgawdkg" alt="Delivery.com - Your neighborhood. Delivered."/>
			</a>
		</div>
		<div class="grid_4 prefix_4">

			
			
			<div id="social_links">
							<div id="twitter"><a href="https://twitter.com/deliverydotcom" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @deliverydotcom</a></div>
				<div class="fb-like" data-href="http://www.facebook.com/Deliverydotcom" data-send="false" data-layout="button_count" data-show-faces="false"></div>
						</div>
			<div class="clear"></div>


			<div id="user_links">

                								<a onclick="_gaq.push(['_trackPageview', '/vpv/menu/login.php/signup-form']);AJAX_ACCOUNT.MODAL.initAccount({link:'create'}); return false;" href="https://admin.delivery.com/create_customer_account.php" class="padlink signup" is_from_url="/vpv/menu/login.php/signup-form">Sign Up</a>|
				<a onclick="_gaq.push(['_trackPageview', '/vpv/menu/login.php/signup-form']);AJAX_ACCOUNT.MODAL.initAccount({link:'login'}); return false;" href="https://admin.delivery.com/login.php" class="padlink signup" is_from_url="/vpv/menu/login.php/signup-form">Log In</a>
				
				
				

				
				
				<span id="header_cart_wrapper">
									<span id="header_amount"></span>
								</span>

			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div id="header_bar2">
	<!-- Constraining to 960gs -->
	<div class="container_12">
				<div id="logo">
			<a href="https://admin.delivery.com/">
                <img src="/images/dcom-logo.png?cb=ijgawdkg" alt="Delivery.com - Your neighborhood. Delivered."/>
			</a>
		</div>
		<div class="header-content">

            
							<div class="header-social">
					<div class="twitter">
						<a href="https://twitter.com/deliverydotcom" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @deliverydotcom</a>
					</div>
					<div class="facebook">
						<div class="fb-like" data-href="http://www.facebook.com/Deliverydotcom" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false" data-font="arial"></div>
					</div>
				</div>
						
			<div class="cubbys">
				
				
				
				<div class="cubby user_links">

					
					<div class="door">
						<div class="content-row">
							<div class="content">
																	Log in
															</div>
						</div>
					</div>

					<div class="contents">
													<div class="content-row">
								<a class="content" onclick="AJAX_ACCOUNT.MODAL.initAccount({link:'create'}); return false;" href="https://admin.delivery.com/create_customer_account.php" class="padlink">Sign Up</a>
							</div>
							<div class="content-row">
								<a class="content" onclick="AJAX_ACCOUNT.MODAL.initAccount({link:'login'}); return false;" href="https://admin.delivery.com/login.php" class="padlink">Log In</a>
							</div>
											</div>

				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>





<!-- Header ends -->
<div class="container_12" id="container_12">

		<!--/////////////////////////////// END SEARCH_BAR ///////////////////////////////-->
		<!--/////////////////////////////////// CONTENT ///////////////////////////////////-->
		<div class="content" style="width: auto;">
		<img src="http://b.collective-media.net/seg/cm/lqtb" width="1" height="1" />
<div id="tell-a-friend-form" class="account_forms ">
	<div id="acct_login" class="inputfields  grid_6 login ">
		<div class="content">
			<div class="header">Sign in to Your Account</div>
			<div style="clear:both"></div>
			<form method="post" id="acct_login_form" name="login_form" action="/login.php" onsubmit="AJAX_ACCOUNT.LOGIN.submitForm('acct_login_form'); return false;">
		<!-- <label for="email">Email Address*</label> -->
	<div class="inputfields">
		<input type="text" placeholder="Email address"  name="Xhv_le" value="" size="40" id="email" />
	</div>
	
	<!-- <label for="password">Password*</label> -->
	<div class="inputfields">
		<input type="password" placeholder="Password" name="Xhv_lpw" id="password" />
	</div>
	
	<div class="inputfields">
	<div>
		<input type="checkbox" name="keep_me_logged_in" value="1" />
		Keep me logged in
	</div>
	
	<input type="hidden" name="action" value="login"/>
	<input type="submit" style="background-color: #FFFFFF; border: 0 none; color: #FFFFFF; height: 1px; margin: 0; width: 1px;"/>
		
	<noscript>
		<input type="submit" value="Sign In"/>
	</noscript>

	<div class="button_submit nojs">
    	<a href="#" onclick="AJAX_ACCOUNT.LOGIN.submitForm('acct_login_form'); return false;" class="button primary">Sign in</a>
	</div>
	
	<a href="https://admin.delivery.com/login.php?cq=04Hgmk6Vr1RkSJ6mZyOr9Y28EIo_b7FcUzcn96uAfMAU-wbnEMespGvuJga1vJMw&cq_key=69969&action=reset_password" class="forgot" onclick="AJAX_ACCOUNT.MODAL.initForgotPass(); return false;">Forgot your Password?</a>
	</div>
</form>

		</div>
	</div>
	<div id="acct_create" class="inputfields  grid_6 ">
		<div class="content">
			<div class="header">Create Account</div>
			<div style="clear:both"></div>
				
	<form method="post" id="create_form" action="/create_customer_account.php" onsubmit="AJAX_ACCOUNT.CREATE.submitForm('create_form'); return false;">
	<div class="inputfields">
				<!-- <label for="first_name">First Name</label> -->
		<input type="text" placeholder="First name" name="first_name" id="first_name" value=""/>
					</div>
	<div class="inputfields">
				<!-- <label for="last_name">Last Name</label> -->
		<input type="text" name="last_name" placeholder="Last name" id="last_name" value=""/>
					</div>
	<div class="inputfields">
				<!-- <label for="email_address">Email Address</label> -->
		<input type="text" name="email_address" placeholder="Email address" id="email_address" value=""/>
					</div>
	<div class="inputfields">
				<!-- <label for="password">Password</label> -->
		<input type="password" placeholder="Password" name="password" id="password"/>
			</div>
	<div class="inputfields">
				<!-- <label for="confirm_password">Confirm Password</label> -->
		<input type="password" name="confirm_password" placeholder="Confirm Password" id="confirm_password"/>
			</div>
	<div class="inputfields">
		        <div id="light-message">Sorry, we are no longer honoring sign-up codes</div>
		<p class="fine_print">By clicking "Create Account" you agree to the <a href="https://admin.delivery.com/about_us.php?cq=LbSdQfgNsdwq1KV8UZNEGRLqoSKL_JRGKkdCrxowYPkMfgK9dVWITw..&cq_key=65abc">terms of delivery.com*</a></p>
		<input type="hidden" name="from_page_url" value="" />
		<input type="hidden" name="is_submitted" value="1" />
		<input type="hidden" name="action" value="create_account"/>
		<input type="submit" style="background-color: #FFFFFF; border: 0 none; color: #FFFFFF; height: 1px; margin: 0; width: 1px;"/>
		<noscript>
			<input type="submit" value="Create Account" style="" />
		</noscript>
		<div class="button_submit nojs">
    		<a href="#" onclick="AJAX_ACCOUNT.CREATE.submitForm('create_form'); return false;" class="button primary">Create account</a>
		</div>
	</div>
</form>
		</div>
	</div>
		<div class="clear"></div>
</div></div></div></div></div><div class='clear'></div><div id='logged_in_footer'><!-- MentAd Code for Visit Pixel -->
<script type="text/javascript">
    /*
    var mentad_website_id = "A0jUgbNBY0_7z";

    (function(){
        var js = document.createElement('script'); js.type = "text/javascript"; js.async = true;
        js.src = document.location.protocol + "//pixels.mentad.com/mentad-visit-notification.js";
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(js, s);
    })();
	*/
</script>
<div class="first_row_wrapper">
    <div class="container_12">
    	
    	<div class="links_section_wrapper">
    		<div class="grid_2">
    			<div class="links_header">Quick links</div>
    			<div class="links_section_columns">
    				<div><a href="/merchant/index.php">Merchants</a></div>
    				<div><a href="/tell_a_friend.php">Tell a friend</a></div>
    				<div><a href="/create_api_account.php">Developers</a></div>
    				<div><a href="/delivery_points.php">Delivery Points</a></div>
    			</div>
    		</div>
    		<div class="grid_2 links_section_headerless_columns">
    			<div><a href="/about_us.php">About us</a></div>
    			<div><a href="/billing/gift/promo.php">Gift cards</a></div>
    			<div><a href="http://blog.delivery.com">Blog</a></div>
                <div><a href="/index.php?site_version=mobile">View mobile site</a></div>
    		</div>
    		<div class="grid_2 links_section_headerless_columns">
    			<div><a href="/press/press.php">Press</a></div>
    			<div><a href="/jobs/jobs.php">Jobs</a></div>
    		</div>
    		<div class="grid_2">
    			<div class="links_header">Support</div>
    			<div class="links_section_columns">
    				<div><a href="/contact_us.php">Contact</a></div>
    				<div><a href="/help.php">FAQ</a></div>
    			</div>
    		</div>
    		<div class="grid_2">
    			<div class="links_header">On the go</div>
    			<div class="links_section_columns">  				
    				<span><a href="/mobile" class="iphone"></a></span>
    				<span style="float:left"><a href="/mobile" class="android"></a></span>
    			</div>
    		</div>
    		<div class="grid_2">
    			<div class="links_header">Stay in touch</div>
    			<div class="links_section_columns">
    				<span>
    					<a href="https://www.facebook.com/Deliverydotcom" class="facebook"></a>
    				</span>
    				<span style="float:left">
    					<a href="https://twitter.com/deliverydotcom" class="twitter"></a>
    				</span>
    				<span style="float:left">
    					<a href="https://plus.google.com/114013232865313191615" rel="publisher" class="googleplus"></a>
    				</span>
    			</div>
    		</div>
    	</div>
    </div>
</div>
<div class="clear"></div>
<div class="second_row_wrapper">
    <div class="container_12">
        <div class="grid_4 disclaimer">
            <div>Locally made in NYC</div>
        </div>
        <div class="grid_8">
            	By using our site you agree to our <span><a href="/terms_of_use.php">Terms of Use</a></span>. Read our <span><a href="/privacy_policy.php">Privacy Policy</a></span>. &copy;2019 Delivery.com, LLC. All rights reserved.
        </div>
     </div>
</div></div><div class='clear'></div>
				</div><!--End container_12 for display-->
				<script type="text/javascript">
					var _sf_async_config={uid:39146,domain:"delivery.com"};
					(function(){
					  function loadChartbeat() {
						window._sf_endpt=(new Date()).getTime();
						var e = document.createElement('script');
						e.setAttribute('language', 'javascript');
						e.setAttribute('type', 'text/javascript');
						e.setAttribute('src',
						   (("https:" == document.location.protocol) ? "https://a248.e.akamai.net/chartbeat.download.akamai.com/102508/" : "http://static.chartbeat.com/") +
						   "js/chartbeat.js");
						document.body.appendChild(e);
					  }
					  var oldonload = window.onload;
					  window.onload = (typeof window.onload != 'function') ?
						 loadChartbeat : function() { oldonload(); loadChartbeat(); };
					})();
				</script>
                    <script type="text/javascript">
                        /* <![CDATA[ */
                        var google_conversion_id = 1043439493;
                        var google_conversion_label = "ATt3CMuMlgQQhb_G8QM";
                        var google_custom_params = window.google_tag_params;
                        var google_remarketing_only = true;
                        /* ]]> */
                    </script>
                    <div style="height:0px; overflow:hidden !important">
                    	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
                    	</script>
                    </div>
                    <noscript>
                        <div style="display:inline;">
                            <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1043439493/?value=0&label=ATt3CMuMlgQQhb_G8QM&guid=ON&script=0"/>
                        </div>
                    </noscript>
                			<div id="fb-root"></div>
			<script>
				window.fbAsyncInit = function() {
					FB.Event.subscribe('edge.create',
						function(response) {
							_gaq.push(['_trackSocial', 'facebook', 'like', response]);
						}
					);
				};

				(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=509165865831313";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
			</script>
			<script>
				window.twttr = (function (d,s,id) {
					var t, js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return; js=d.createElement(s); js.id=id;
					js.src="https://platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs);
					return window.twttr || (t = { _e: [], ready: function(f){ t._e.push(f) } });
				}(document, "script", "twitter-wjs"));

				function tweetIntentToAnalytics (intentEvent) {
					if (!intentEvent) return;
					var target='';
					if ($(intentEvent.target).closest(".merchant").length !== 0) {
						target = 'merchant';
					}
					_gaq.push(['_trackSocial', 'twitter', 'tweet', target])
				}
				function followIntentToAnalytics (intentEvent) {
					if (!intentEvent) return;
					var target='';
					if ($(intentEvent.target).closest("#header_bar").length !== 0) {
						target = 'header';
					}
					_gaq.push(['_trackSocial', 'twitter', 'follow', target])
				}

				// Wait for the asynchronous resources to load
				twttr.ready(function (twttr) {
					// Now bind our custom intent events
					twttr.events.bind('tweet', tweetIntentToAnalytics);
					twttr.events.bind('follow', followIntentToAnalytics);
				});
			</script>


				  </body>
			</html>
				
<?php
	get_footer();
?>		

	
<!-- 	<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<ul class="list-inline item-details">
				<li><a href="http://themifycloud.com">Admin templates</a></li>
				<li><a href="http://themescloud.org">Bootstrap themes</a></li>
			</ul>
		</div>
	</div> -->