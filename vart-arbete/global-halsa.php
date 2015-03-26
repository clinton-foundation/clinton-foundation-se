<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <title>Clinton Foundation Sweden &mdash; Home</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="en" />
    <meta name="author" content="" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta property="og:type" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <!--
  <script type="text/javascript" src="/web/20141005013248js_/https://use.typekit.com/fqq1sfj.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  -->

    <!--[if lt IE 8]>
  <link rel="stylesheet" href="/assets/css/ie_lt8_fixes.css" type="text/css" media="all" charset="utf-8" />
  <![endif]-->

    <!-- need values -->
    <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-855260-1']);
    _gaq.push(['_setDomainName', 'clintonfoundation.se']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
    </script>
    <link href="/css/meyer-reset.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/css/style.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/css/utility.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/css/splash-slide.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/css/home-topic.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/css/mega-dropdown-sv.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/css/secondary-nav.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/css/print.css" rel="stylesheet" type="text/css" media="print" />
    <script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="/js/jquery.imgpreload.min.js"></script>
    <script type="text/javascript" src="/js/jquery.cycle.all.js"></script>
    <script type="text/javascript" src="/js/modernizr.custom.19943.js"></script>
    <script type="text/javascript" src="/js/global.js"></script>

    <link rel="stylesheet" href="/components/nivo-slider.css" type="text/css" media="screen" />

    <style type="text/css">
    #slider-wrapper {
        width: 970px;
        height: 332px;
    }
    #slider {
        position: relative;
        width: 970px;
        height: 332px;
        background: url(/components/loading.gif) no-repeat 50% 50%;
    }
    #slider img {
        position: absolute;
        top: 0px;
        left: 0px;
        display: none;
    }
    #slider a {
        border: 0;
        display: block;
    }
    .nivo-controlNav {
        position: absolute;
        left: 64px;
        bottom: 12px;
        z-index: 11;
    }
    .nivo-controlNav a {
        display: block;
        width: 19px;
        height: 18px;
        background: url(/images/slide-nav.png) center no-repeat;
        border: 0;
        margin-right: 13px;
        float: left;
    }
    .nivo-caption p {
        /*display:none!important*/
    }
    .nivo-directionNav a {
        display: none;
        /*width:24px;
  height:24px;
    line-height: 24px;*/
        
        width: 0;
        height: 0;
        text-align: center;
        /*background:url(/components/arrows.png) no-repeat;
    background: #001D42;*/
        
        border: 0;
    }
    a.nivo-nextNav {
        background-position: -30px 0;
        right: 5px;
    }
    a.nivo-prevNav {
        left: 5px;
    }
    a.nivo-nextNav,
    a.nivo-prevNav {
        display: none;
    }
    .nivo-controlNav li.li-pager {
        width: 24px;
        z-index: 10;
        float: left;
    }
    .nivo-controlNav li.li-pager a {
        text-indent: -10000px;
    }
    .nivo-controlNav li.li-pager {
        border: none!important;
    }
    .nivo-controlNav li.li-pager a:hover,
    .nivo-controlNav li.li-pager a.active {
        background: url(/images/slide-active.png) no-repeat;
    }
    </style>
    <script type="text/javascript" src="/components/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="/components/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
            effect: 'fade', // Specify sets like: 'fold,fade,sliceDown'
            slices: 1, // For slice animations
            boxCols: 1, // For box animations
            boxRows: 1, // For box animations
            animSpeed: 500, // Slide transition speed
            pauseTime: 5000, // How long each slide will show
            startSlide: 0, // Set starting Slide (0 index)
            directionNav: true, // Next & Prev navigation
            directionNavHide: true, // Only show on hover
            controlNav: true, // 1,2,3... navigation
            controlNavThumbs: false, // Use thumbnails for Control Nav
            controlNavThumbsFromRel: false, // Use image rel for thumbs
            controlNavThumbsSearch: '.jpg', // Replace this with...
            controlNavThumbsReplace: '_thumb.jpg', // ...this in thumb Image src
            keyboardNav: true, // Use left & right arrows
            pauseOnHover: true, // Stop animation while hovering
            manualAdvance: false, // Force manual transitions
            captionOpacity: 1, // Universal caption opacity
            prevText: '&nbsp;', // Prev directionNav text
            nextText: '&nbsp;', // Next directionNav text

            beforeChange: function() {}, // Triggers before a slide transition
            afterChange: function() {}, // Triggers after a slide transition
            slideshowEnd: function() {}, // Triggers after all slides have been shown
            lastSlide: function() {}, // Triggers when last slide is shown
            afterLoad: function() {} // Triggers when slider has loaded
        });
    });
    </script>
</head>

<body id="home">

    <div id="world-splash"></div>
    
    <?php include('/top-nav.php') ?>
    
    
    <!-- TOOLS -->
    <div id="wrapper-tools" class="full-width clearfix">
        <div id="top-bar" class="full-width pattern-bg blue0 clearfix">

            <div id="wrapper-utils" class="wrapper-970 clearfix">
                <a id="button-give" class="left" href="https://re.clintonfoundation.org/Donate">donera</a>

                <!--
          <div id="mod-search" class="bar-util left">
            <form action="search.html" id="cse-search-box" >
              <input type="hidden" name="cx" value="003365878143107222603:wrc2wqcthho">
              <input type="hidden" name="cof" value="FORID:10">
              <input type="hidden" name="ie" value="UTF-8">
              <input type="text" class="input-text" id="search" name="mdxq" value="Search" />
            <button type="submit" id="search-submit" class="input-button" name="sa" value="">&#9654</button>
          
              </form>
          </div>

-->
                <!-- /#mod-search -->

                <div id="mod-connect" class="bar-util right clearfix">

                    <!-- email updates -->
                    <!--
              <div id="email-updates" class="left clearfix">  
                <form action="get-involved/email-signup.html" method="post"><label class="label-topbar">
                Få e-mailuppdateringar från President Clinton
                </label>
                <div id="wrapper-email" class="wrapper-inline clearfix">
                <input type="text" class="input-text" value="Your Email"  name='topbaremail' id="topbaremail" />
                <button type="submit" id="email-submit" class="input-button" name="submit-email"  value="">&#9654</button>
                </div>  
                </form>
              </div>
              -->
                    <!-- email updates -->


                    <div id="wrapper-social" class="right clearfix">
                        <ul class="clearfix connect">
                            <li id="nav-56" class="tile-facebook">
                                <a class="tile-facebook first" id="nav-link-56" href="https://www.facebook.com/ClintonFoundation" title="Facebook">Facebook</a>

                            </li>
                            <li id="nav-57" class="tile-twitter">
                                <a class="tile-twitter" id="nav-link-57" href="http://twitter.com/ClintonFdn" title="Twitter" target="_blank">Twitter</a>

                            </li>
                            <li id="nav-58" class="tile-youtube">
                                <a class="tile-youtube" id="nav-link-58" href="http://www.youtube.com/user/clintonfoundationorg" title="YouTube">YouTube</a>

                            </li>
                            <li id="nav-59" class="tile-flickr">
                                <a class="tile-flickr last" id="nav-link-59" href="http://www.flickr.com/photos/49152339@N05/collections/" title="Flickr">Flickr</a>

                            </li>
                        </ul>


                    </div>
                </div>
                <!-- /mod-connect -->
            </div>
            <!-- /wrapper-utils -->
        </div>
        <!-- /#top-bar -->

        <div id="wrapper-lang" class="wrapper-970 clearfix">
            <!-- LANG OPTIONS -->
            <div id="lang-select" class="pattern-bg blue0 right clearfix">
                <h6 class="label-util">Language</h6>
                <div class="wrapper-switch">
                    <ul id="lang-switch">
                        <!--
              <li><a href="http://en.clintonfoundation.se/" class="en active">

              -->
                        <li>
                            <a href="http://en.clintonfoundation.se/" class="en">
                                <span class="switch"></span>en</a>
                        </li>
                        <li><a href="http://www.clintonfoundation.se/" class="sv" style="text-decoration: underline;"><span class="switch"></span><strong>sv</strong></a>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </div>


    <div id="wrapper-main" class="full-width">

        <div id="wrapper-content">

            <!-- HEADER -->
            <div id="mod-header">
                <div id="header">
                    <a href="/" id="link-logo"><img src="/images/logo-cf-white.png" alt="Clinton Foundation Sweden" title="Clinton Foundation Sweden" />
                    </a>
                </div>

                <!-- global nav -->
                <div class="center mega clearfix">
                    <ul class="clearfix nav-global" id="nav-global">
                        <li class="first level1 global-parent" id="nav-141">
                            <a id="nav-link-141" href="/" title="William J. Clinton Foundation Insamlingsstiftelse"><span class="deco">Clinton Foundation</span></a>
                            <div class="wrapper-dropdown drop-william-j.-clinton-foundation-insamlingsstiftelse">
                                <ul class="clearfix" id="">
                                    <li class="first level2" id="nav-142">
                                        <a id="nav-link-142" href="/main/william-j.-clintons-biografi.html" title="William J. Clintons biografi"><span class="deco">William J. Clintons biografi</span></a>
                                    </li>
                                    <li class="last level2" id="nav-143">
                                        <a id="nav-link-143" href="/main/clinton-foundations-historia.html" title="Clinton Foundations historia"><span class="deco">Clinton Foundations historia</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="level1 global-parent" id="nav-368">
                            <a id="nav-link-368" href="#" title="Vårt arbete" style="text-decoration: none; cursor: default;"><span class="deco">Vårt arbete</span></a>
                            <div class="wrapper-dropdown drop-vårt-arbete">
                                <ul class="clearfix" id="">
                                    <li class="first level2 global-parent" id="nav-369">
                                        <a id="nav-link-369" href="http://www.clintonfoundation.se/#" title="Enligt ämne"><span class="deco">Enligt ämne</span></a>
                                        <div class="wrapper-dropdown drop-enligt-ämne">
                                            <ul class="clearfix" id="">
                                                <li class="first level3" id="nav-400">
                                                    <a id="nav-link-400" href="/vart-arbete/global-halsa.html" title="Global Hälsa"><span class="deco">Global Hälsa</span></a>
                                                </li>
                                                <li class="level3" id="nav-416">
                                                    <a id="nav-link-416" href="/vart-arbete/clinton-foundation-i-haiti.html" title="Clinton Foundation i Haiti"><span class="deco">Clinton Foundation i Haiti</span></a>
                                                </li>
                                                <li class="level3" id="nav-415">
                                                    <a id="nav-link-415" href="/vart-arbete/klimatforandring.html" title="Klimatförändring"><span class="deco">Klimatförändring</span></a>
                                                </li>
                                                <li class="last level3" id="nav-446">
                                                    <a id="nav-link-446" href="/vart-arbete/ekonomisk-ojamlikhet.html" title="Ekonomisk ojämlikhet"><span class="deco">Ekonomisk ojämlikhet</span></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="level1 global-parent" id="nav-181">
                            <a id="nav-link-181" href="/main/kontakt.html" title="Kontakta Clinton Foundation Insamlingsstiftelse"><span class="deco">kontakt</span></a>

                        </li>
                        <li class="last level1 global-parent" id="nav-136">
                            <a id="nav-link-136"  href="/main/donera.html" title="Donera" style="text-decoration: underline;"><span class="deco">Donera</span></a>
                            <div class="wrapper-dropdown drop-donera">
                                <ul class="clearfix" id="">
                                    <li class="first level2" id="nav-435">
                                        <a id="nav-link-435" href="/main/gor-ett-bidrag-online.html" title="Gör ett bidrag online"><span class="deco">Gör ett bidrag online</span></a>

                                    </li>
                                    <li class="level2" id="nav-432">
                                        <a id="nav-link-432" href="/main/manatligt-givande.html" title="Månatligt givande"><span class="deco">Månatligt givande</span></a>

                                    </li>
                                    <li class="last level2" id="nav-427">
                                        <a id="nav-link-427" href="/main/testamenteringar.html" title="Testamenteringar"><span class="deco">Testamenteringar</span></a>

                                    </li>

                                </ul>
                            </div>
                        </li>

                    </ul>

                </div>
                <!-- global nav -->


            </div>
            <!-- /#mod-header -->

            <!-- MAIN CONTENT -->

            <!-- content main -->

            <div id="content-main" class="">
                <!-- slideshow / media -->
                <div id="slider-wrapper">
                    <div id="slider" class="nivoSlider">
                        <img src="/images/album_9_slide_1343148807.jpg" alt="Global Health 1" title="#htmlCaption_23">
                        <img src="/images/album_2_slide_1343747184.jpg" alt="CHAI" title="#htmlCaption_24">
                    </div>
                    <div id="htmlCaption_23" class="nivo-html-caption">
                        <div class="wrapper-message">
                            <div class="message">
                                <h2>Minskar<br>HIV-överföring<br>mellan mödrar<br>och barn</h2>
                            </div>
                        </div>
                    </div>
                    <div id="htmlCaption_24" class="nivo-html-caption">
                        <div class="wrapper-message">
                            <div class="message">
                                <h2>4 miljoner människor<span class="subheader">får tillgång till <br />livräddande HIV/AIDS behandling</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /#slider-wrapper -->
                <!-- MODX :: MAIN CONTENT -->

                <div id="" class="box-content padded-2px">

                    <div class="padded-lightgrey clearfix">

                        <h1 class="pagetitle clearfix">Global Hälsa</h1>
                        <div class="page-section clearfix">
                            <p>Även om det finns behandling för infektionssjukdomar såsom HIV/AIDS, malaria och tuberkulos har utvecklingsländer begränsad åtkomst till dessa behandlingar på grund av deras höga kostnad. För ett årtionde sedan fick endast 200 000 personer i u-länder behandling med mediciner som kunde kosta över 10 000 USD per person och år. I dess enklaste form var detta ett ekonomiskt problem då marknaden för dessa mediciner var oorganiserad och fungerade enligt en modell med låg volym och hög kostnad. De framväxande hälsovårdssystemen saknade den infrastruktur som behövdes för att diagnosticera och behandla patienter ordentligt.</p>

                            <p>Genom att samarbeta med tillverkare på tillgångssidan och regeringar på efterfrågesidan — och omvandla marknaden till en modell med hög volym och låg kostnad — har vi minskat kostnaden för de viktigaste läkemedlen och gjort det möjligt för miljontals människor att få livräddande behandling. Vi har också tillämpat samma modell på behandling av malaria och tuberkulos för att förbättra åtkomsten till diagnostik och öka leveransen av livräddande vacciner. Vi fortsätter att arbeta med att göra vården billigare och bättre i u-länder, med ett slutmål att från grunden förändra ekonomin för global hälsa och skapa hälsovårdssystem som är självförsörjande.</p>

                            <p class="list-intro">Läs mer om vårt arbete inom global hälsa:</p>
                            <ul class="bullet-list">
                                <li><a href="http://www.clintonfoundation.org/main/our-work/by-initiative/clinton-health-access-initiative/about.html">The Clinton Health Access Initiative</a>
                                </li>
                            </ul>
                        </div>

                        <ul class="bottom-init garamond-small box-last">
                            <li class="first active"><a href="/vart-arbete/global-halsa.html" title="Global Hälsa">Global Hälsa</a>
                            </li>
                            <li><a href="/vart-arbete/clinton-foundation-i-haiti.html" title="Clinton Foundation i Haiti">Clinton Foundation i Haiti</a>
                            </li>
                            <li><a href="/vart-arbete/klimatforandring.html" title="Klimatförändring">Klimatförändring</a>
                            </li>
                            <li class="last"><a href="/vart-arbete/ekonomisk-ojamlikhet.html" title="Ekonomisk ojämlikhet">Ekonomisk ojämlikhet</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /padded-lightgrey -->
                </div>
                <!-- /box-content -->
            </div>


            <!-- content main -->





        </div>
        <!-- /#wrapper-content -->
        <!-- FOOTER -->
        <div id="anchor-footer" class="full-width pattern-bg blue1">
            <div class="wrapper-centered">
                <ul class="linklist-inline">
                    <li id="nav-421" class="tile-clintonfoundation.org">
                        <a class="garamond-small first" id="nav-link-421" href="http://clintonfoundation.org/" title="clintonfoundation.org" target="_blank">clintonfoundation.org</a>

                    </li>
                </ul>
            </div>
        </div>
        <div id="footer" class="full-width">
            <div id="" class="wrapper-inner clearfix">
                <span class="footer-note">BankGiro 900-2601</span>
                <div class="wrapper-sitemap">



                    <!-- sitemap ul -->

                    <ul class="menu-sitemap sv clearfix">
                        <li class="first level1 parent" id="nav-141">
                            <a id="nav-link-141" href="/" title="William J. Clinton Foundation Insamlingsstiftelse">Clinton Foundation</a>
                            <ul>
                                <li class="first level2" id="nav-142">
                                    <a id="nav-link-142" href="/main/william-j.-clintons-biografi.html" title="William J. Clintons biografi">William J. Clintons biografi</a>
                                </li>
                                <li class="last level2" id="nav-143">
                                    <a id="nav-link-143" href="/main/clinton-foundations-historia.html" title="Clinton Foundations historia">Clinton Foundations historia</a>
                                </li>
                            </ul>
                        </li>
                        <li class="level1 parent" id="nav-368">
                            <a id="nav-link-368" href="#" title="Vårt arbete" style="text-decoration: none; cursor: default;">Vårt arbete</a>
                            <ul>
                                <li class="first level2 parent" id="nav-369">
                                    <a id="nav-link-369" href="#" title="Enligt ämne">Enligt ämne</a>
                                    <ul>
                                        <li class="first level3" id="nav-400">
                                            <a id="nav-link-400" href="/vart-arbete/global-halsa.html" title="Global Hälsa">Global Hälsa</a>
                                        </li>
                                        <li class="level3" id="nav-416">
                                            <a id="nav-link-416" href="/vart-arbete/clinton-foundation-i-haiti.html" title="Clinton Foundation i Haiti">Clinton Foundation i Haiti</a>
                                        </li>
                                        <li class="level3" id="nav-415">
                                            <a id="nav-link-415" href="/vart-arbete/klimatforandring.html" title="Klimatförändring">Klimatförändring</a>
                                        </li>
                                        <li class="last level3" id="nav-446">
                                            <a id="nav-link-446" href="/vart-arbete/ekonomisk-ojamlikhet.html" title="Ekonomisk ojämlikhet">Ekonomisk ojämlikhet</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="level1 parent active" id="nav-181">
                            <a id="nav-link-181" href="/main/kontakt.html" title="Kontakta Clinton Foundation Insamlingsstiftelse">kontakt</a>

                        </li>
                        <li class="last level1 parent" id="nav-136">
                            <a id="nav-link-136"  href="/main/donera.html" title="Donera" style="text-decoration: underline;">Donera</a>
                            <ul>
                                <li class="first level2" id="nav-435">
                                    <a id="nav-link-435" href="/main/gor-ett-bidrag-online.html" title="Gör ett bidrag online">Gör ett bidrag online</a>

                                </li>
                                <li class="level2" id="nav-432">
                                    <a id="nav-link-432" href="/main/manatligt-givande.html" title="Månatligt givande">Månatligt givande</a>

                                </li>
                                <li class="last level2" id="nav-427">
                                    <a id="nav-link-427" href="/main/testamenteringar.html" title="Testamenteringar">Testamenteringar</a>

                                </li>
                            </ul>
                        </li>
                    </ul>

                    <!-- sitemap ul -->

                </div>
                <!-- /wrapper-sitemap -->
                


<!-- secondary footer -->

<div class="base-line clearfix">

    <ul class="misc-nav">
        <li id="nav-465" class="first">
            <a class="first" id="nav-link-465" href="https://www.clintonfoundation.org/get-involved"
            >Anmal intresse for nyhetsbrev</a>
        </li>
        <li id="nav-184">
            <a id="nav-link-184" href="/main/donera.html" title="Ge ett bidrag">Ge ett bidrag</a>
        </li>
        <li id="nav-186">
            <a id="nav-link-186" href="http://twitter.com/ClintonFdn" title="Twitter">Twitter</a>

        </li>
        <li id="nav-185">
            <a id="nav-link-185" href="http://www.facebook.com/ClintonFoundation" title="Facebook">Facebook</a>

        </li>
        <li id="nav-187">
            <a id="nav-link-187" href="http://www.youtube.com/user/clintonfoundationorg" title="YouTube">YouTube</a>

        </li>
        <li id="nav-188">
            <a id="nav-link-188" href="http://www.flickr.com/photos/49152339@N05/collections/" title="Flickr">Flickr</a>

        </li>
        <li id="nav-466" class="last">
            <a class="last" id="nav-link-466" href="http://vimeo.com/clintonfoundation" title="Vimeo">Vimeo</a>

        </li>

    </ul>
    <span class="v-spacer"></span>

    <ul class="misc-nav">
        <li id="nav-192" class="first">
            <a class="first" id="nav-link-192" href="/main/kontakt.html" title="Kontakt">Kontakt</a>

        </li>
        <li id="nav-194">
            <a id="nav-link-194" href="/main/information-om-integritetsskydd.html" title="Information om Integritetsskydd">Information om Integritetsskydd</a>

        </li>
        <li id="nav-471" class="last">
            <a class="last" id="nav-link-471" href="https://www.clintonfoundation.org/about/annual-financial-reports" 
            title="Finansiella Rapporter" target="_blank">Finansiella Rapporter</a>
        </li>
    </ul>
    <span class="v-spacer"></span>

    <ul class="misc-nav">
        <li class="first">
            <a class="first" href="/dokument/Stiftelseforordnande.pdf" title="Stiftelsef&ouml;rordnande">Stiftelsef&ouml;rordnande</a>

        </li>
        <li>
            <a href="/dokument/Redogorelse%20for%20styrelseledamoternas%20kvalifikationer.pdf" title="Redog&ouml;relse f&ouml;r styrelseledam&ouml;ternas kvalifikationer">Redog&ouml;relse f&ouml;r styrelseledam&ouml;ternas kvalifikationer</a>

        </li>
        <li>
            <a href="/dokument/Insamlingspolicy.pdf" title="Insamlingspolicy">Insamlingspolicy</a>

        </li>
        <li>
            <a href="/dokument/Effektrapport%20FRIIs%20Kvalitetskod.pdf" title="Effektrapport FRIIs Kvalitetskod">Effektrapport FRIIs Kvalitetskod</a>

        </li>
        <li>
            <a href="/dokument/Arsredovisning%202013.pdf" title="&Acirc;rsredovisning 2013">&Acirc;rsredovisning 2013</a>

        </li>
        <li class="last">
            <a class="last" href="/dokument/Revisionspromemoria%202013.pdf" 
            title="Revisionspromemoria till Svensk Insamlingskontroll 2013">Revisionspromemoria till Svensk Insamlingskontroll 2013</a>
        </li>
    </ul>
</div>

<!-- secondary footer -->




            </div>
        </div>
    </div>
    <!-- /#wrapper-main -->

</body>

</html>
