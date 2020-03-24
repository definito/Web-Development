<?php
/*
 *This is Share Button Page
 */
$titan=TitanFramework::getInstance("tf");
?>
						<section class="uofs-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-push-2">
                <h6 class="mbsm mtlg">Share this story</h6>
                <ul class="list-inline">
                    <li>
                        <!-- Load Facebook SDK for JavaScript -->

                        <div id="fb-root" class=" fb_reset">
                            <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
                                <div>
                                    <iframe name="fb_xdm_frame_https" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src=""https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3&appId=190049604662830&autoLogAppEvents=1"" style="border: none;"></iframe>
                                </div>
                                <div></div>
                            </div>
                        </div>
                        <script>
                            (function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s);
                                js.id = id;
                                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));
                        </script>

                        <!-- Your share button code -->
                       
                        <iframe src="https://www.facebook.com/plugins/share_button.php?href=<?php the_permalink();?>&layout=button_count&size=small&appId=190049604662830&width=75&height=20" width="75" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                      
                    </li>
                    <li>
                        <script>
                            window.twttr = (function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0],
                                    t = window.twttr || {};
                                if (d.getElementById(id)) return t;
                                js = d.createElement(s);
                                js.id = id;
                                js.src = "https://platform.twitter.com/widgets.js";
                                fjs.parentNode.insertBefore(js, fjs);

                                t._e = [];
                                t.ready = function(f) {
                                    t._e.push(f);
                                };

                                return t;
                            }(document, "script", "twitter-wjs"));
                        </script>
                        <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-share-button twitter-share-button-rendered twitter-tweet-button" style="position: static; visibility: visible; width: 60px; height: 20px;" title="Twitter Tweet Button" src="https://platform.twitter.com/widgets/tweet_button.d753e00c3e838c1b2558149bd3f6ecb8.en.html#dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=<?php the_permalink(); ?>;text=<?php the_title(); ?>;url=<?php the_permalink(); ?> "></iframe>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>