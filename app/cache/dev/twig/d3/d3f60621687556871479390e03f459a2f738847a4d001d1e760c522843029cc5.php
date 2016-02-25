<?php

/* MyAppUserBundle::layout.html.twig.twig */
class __TwigTemplate_554e85992b6adaef4462eeec2294c75688e9e28fef8d11e26e929d4bc69207a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'login' => array($this, 'block_login'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en-US\">


<!-- Mirrored from education-html.themerex.net/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Feb 2016 14:17:57 GMT -->
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\" />
    <title>Homepage | Education Center</title>

\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&amp;subset=latin%2Clatin-ext&amp;ver=4.3.1\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,700,700italic&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister:400&amp;subset=latin\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fontello/css/fontello.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/rs-plugin/settings.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/woocommerce/woocommerce-layout.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/woocommerce/woocommerce-smallscreen.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"only screen and (max-width: 768px)\" />
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/woocommerce/woocommerce.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/shortcodes.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/core.animation.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/tribe-style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/skins/skin.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

\t<link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/core.portfolio.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mediaelement/mediaelementplayer.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mediaelement/wp-mediaelement.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/prettyPhoto/css/prettyPhoto.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />\t
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/core.customizer/front.customizer.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/core.messages/core.messages.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/swiper/idangerous.swiper.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/skins/skin-responsive.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/slider-style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/custom-style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
</head>

<body class=\"home page body_style_fullscreen body_filled article_style_stretch layout_single-standard top_panel_style_dark top_panel_opacity_transparent top_panel_show top_panel_over menu_right user_menu_show sidebar_hide\">
    <a id=\"toc_top\" class=\"sc_anchor\" title=\"To Top\" data-description=\"&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page\" data-icon=\"icon-angle-double-up\" data-url=\"\" data-separator=\"yes\"></a>
\t<!-- Body -->
    <div class=\"body_wrap\">
        <div class=\"page_wrap\">
            <div class=\"top_panel_fixed_wrap\"></div>
            <header class=\"top_panel_wrap bg_tint_dark\">
\t\t\t\t<!-- User menu -->
                <div class=\"menu_user_wrap\">
                    <div class=\"content_wrap clearfix\">
                        <div class=\"menu_user_area menu_user_right menu_user_nav_area\">
                            <ul id=\"menu_user\" class=\"menu_user_nav\">
                                
\t\t\t\t\t\t\t\t<li class=\"menu_user_login\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"icon icon-logout\">Se connecter</a>
\t\t\t\t\t\t\t\t</li>
                                <li class=\"menu_user_register\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("pidevmooc_inscription");
        echo "\" class=\"icon icon-logout\">S'enregistrer</a>
\t\t\t\t\t\t\t\t</li>
                                
                            </ul>
                        </div>
                        <div class=\"menu_user_area menu_user_left menu_user_contact_area\">Contact us on 0 800 123-4567 or <a href=\"#\"><span class=\"__cf_email__\" data-cfemail=\"394a4c4949564b4d794d515c545c4b5c4117575c4d\">[email&#160;protected]</span><script data-cfhash='f9e31' type=\"text/javascript\">
/* <![CDATA[ */!function(){try{var t=\"currentScript\"in document?document.currentScript:function(){for(var t=document.getElementsByTagName(\"script\"),e=t.length;e--;)if(t[e].getAttribute(\"data-cfhash\"))return t[e]}();if(t&&t.previousSibling){var e,r,n,i,c=t.previousSibling,a=c.getAttribute(\"data-cfemail\");if(a){for(e=\"\",r=parseInt(a.substr(0,2),16),n=2;a.length-n;n+=2)i=parseInt(a.substr(n,2),16)^r,e+=String.fromCharCode(i);e=document.createTextNode(e),c.parentNode.replaceChild(e,c)}t.parentNode.removeChild(t);}}catch(u){}}()/* ]]> */</script></a></div>
                    </div>
                </div>
\t\t\t\t<!-- /User menu -->
\t\t\t\t<!-- Main menu -->
                <div class=\"menu_main_wrap logo_left\">\t\t\t\t\t
                    <div class=\"content_wrap clearfix\">
\t\t\t\t\t\t<!-- Logo -->
                        <div class=\"logo\">
                        <a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("pidevmooc_homepage");
        echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo_dark.png"), "html", null, true);
        echo "\" class=\"logo_main\" alt=\"\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo_dark.png"), "html", null, true);
        echo "\" class=\"logo_fixed\" alt=\"\">
\t\t\t\t\t\t\t</a>
                        </div>
\t\t\t\t\t\t<!-- Logo -->
\t\t\t\t\t\t<!-- Search -->
                        <div class=\"search_wrap search_style_regular search_ajax\" title=\"Open/close search form\">
                            <a href=\"#\" class=\"search_icon icon-search-2\"></a>
                            <div class=\"search_form_wrap\">
                                <form method=\"get\" class=\"search_form\" action=\"#\">
                                    <button type=\"submit\" class=\"search_submit icon-zoom-1\" title=\"Start search\"></button>
                                    <input type=\"text\" class=\"search_field\" placeholder=\"\" value=\"\" name=\"s\" title=\"\" />
                                </form>
                            </div>
                            <div class=\"search_results widget_area bg_tint_light\">
                                <a class=\"search_results_close icon-delete-2\"></a>
                                <div class=\"search_results_content\">
\t\t\t\t\t\t\t</div>
                            </div>
                        </div>
\t\t\t\t\t\t<!-- /Search -->
\t\t\t\t\t\t<!-- Navigation -->
                        <a href=\"#\" class=\"menu_main_responsive_button icon-menu-1\"></a>
\t\t\t\t\t\t<nav class=\"menu_main_nav_area\">
\t\t\t\t\t\t\t<ul id=\"menu_main\" class=\"menu_main_nav\">
\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-has-children  \"><a href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("pidevmooc_homepage");
        echo "\">Accueil</a>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
                                                                <li class=\"menu-item menu-item-has-children\" ><a href=\"courses-streampage.html\">Formation</a>
                                                                    <ul>
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-has-children\"><a href=\"#\">Cours Android</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\"><a href=\"free-lesson.html\">Free lesson (started)</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\"><a href=\"free-lesson-coming-soon.html\">Free lesson (coming soon)</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\"><a href=\"lesson-from-paid-course.html\">Lesson from paid course</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>\t
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-has-children\"><a href=\"#\">Cours IOS</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\"><a href=\"free-lesson.html\">Free lesson (started)</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\"><a href=\"free-lesson-coming-soon.html\">Free lesson (coming soon)</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\"><a href=\"lesson-from-paid-course.html\">Lesson from paid course</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-has-children\"><a href=\"#\">Cours Windows Phone</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\"><a href=\"free-lesson.html\">Free lesson (started)</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\"><a href=\"free-lesson-coming-soon.html\">Free lesson (coming soon)</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\"><a href=\"lesson-from-paid-course.html\">Lesson from paid course</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
                                                                                </ul>
                                                                </li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-has-children\"><a href=\"\">Formateurs</a>
\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\"><a href=\"\">Organismes</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\"><a href=\"\">Formateurs</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
                                                                </li>
\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-has-children \"><a href=\"";
        // line 137
        echo $this->env->getExtension('routing')->getPath("pidevmooc_aboutus");
        echo "\">A propos</a>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</li>
                                                                <li class=\"menu-item menu-item-has-children\"><a href=\"";
        // line 140
        echo $this->env->getExtension('routing')->getPath("pidevmooc_contactus");
        echo "\">Contacter nous</a>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>
\t\t\t\t\t\t<!-- /Navigation -->
                    </div>
                </div>
\t\t\t\t<!-- /Main menu -->
            </header>
\t\t\t<!-- Revolution slider -->
\t\t\t<section class=\"slider_wrap slider_fullwide slider_engine_revo slider_alias_education_home_slider\">
                <div id=\"rev_slider_1_1_wrapper\" class=\"rev_slider_wrapper fullwidthbanner-container\">                    
                    <div id=\"rev_slider_1_1\" class=\"rev_slider fullwidthabanner disp_none height_630 max-height_630\">
                        <ul>
                            <!-- Slide 1 -->
                            <li data-transition=\"random\" data-slotamount=\"7\" data-masterspeed=\"300\" data-saveperformance=\"off\">
                                <img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/green.jpg"), "html", null, true);
        echo "\" alt=\"green\" data-bgposition=\"center top\" data-bgfit=\"normal\" data-bgrepeat=\"repeat\">
                                <div class=\"tp-caption customin stl cust-z-index-5 rs-cust-style8\" data-x=\"20\" data-y=\"230\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:20;transformOrigin:50% 100%;\" data-speed=\"1300\" data-start=\"500\" data-easing=\"Power3.easeInOut\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-end=\"8250\" data-endspeed=\"300\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slide-1-1.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                 <div class=\"tp-caption title sfr stl tp-resizeme cust-z-index-6 rs-cust-style1\" data-x=\"570\" data-y=\"190\" data-speed=\"500\" data-start=\"1350\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-end=\"8400\" data-endspeed=\"300\">Take great courses from the world's best universities
                                </div>
                                <div class=\"tp-caption slide_text sfr stl tp-resizeme cust-z-index-7 rs-cust-style2\" data-x=\"570\" data-y=\"380\" data-speed=\"500\" data-start=\"1750\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-end=\"8500\" data-endspeed=\"300\">
\t\t\t\t\t\t\t\t\t<span class=\"font-w_400\">Our courses are built in partnership with technology leaders and are relevant to industry needs.</span>
                                </div>
                                <div class=\"tp-caption slide_button customin stl tp-resizeme cust-z-index-8 rs-cust-style3\" data-x=\"570\" data-y=\"460\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:-20;transformOrigin:50% 0%;\" data-speed=\"500\" data-start=\"2200\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-end=\"8600\" data-endspeed=\"300\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"slide_button_white\">Start Learning Now</a>
                                </div>
                            </li>
                            <!-- Slide 2 -->
                            <li data-transition=\"random\" data-slotamount=\"7\" data-masterspeed=\"300\" data-saveperformance=\"off\">
                                <img src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/blue.jpg"), "html", null, true);
        echo "\" alt=\"blue\" data-bgposition=\"center top\" data-bgfit=\"normal\" data-bgrepeat=\"repeat\">
                                <div class=\"tp-caption customin stl cust-z-index-5 rs-cust-style8\" data-x=\"40\" data-y=\"200\" data-customin=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:360;scaleX:0.1;scaleY:0.1;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;\" data-speed=\"1300\" data-start=\"500\" data-easing=\"Power3.easeInOut\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-end=\"8250\" data-endspeed=\"300\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slide-2-1.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"tp-caption title sfb stb tp-resizeme cust-z-index-6 rs-cust-style1\" data-x=\"570\" data-y=\"200\" data-speed=\"500\" data-start=\"1350\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-end=\"8400\" data-endspeed=\"300\">Education Center
                                    <br> and distance education
                                </div>
                                <div class=\"tp-caption slide_text sfb stb tp-resizeme cust-z-index-7 rs-cust-style2\" data-x=\"570\" data-y=\"355\" data-speed=\"500\" data-start=\"1750\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-end=\"8500\" data-endspeed=\"300\">
\t\t\t\t\t\t\t\t\t<span class=\"font-w_400\">Online Education leads the world in distance education with high quality online degrees and online courses.</span>
                                </div>
                                <div class=\"tp-caption slide_button customin stb tp-resizeme cust-z-index-8 rs-cust-style3\" data-x=\"570\" data-y=\"460\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:20;transformOrigin:50% 100%;\" data-speed=\"500\" data-start=\"2200\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-end=\"8600\" data-endspeed=\"300\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"slide_button_white\">Start Learning Now</a>
                                </div>
                            </li>
                            <!-- Slide 3 -->
                            <li data-transition=\"random\" data-slotamount=\"7\" data-masterspeed=\"300\" data-saveperformance=\"off\">
                                <img src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/yellow.jpg"), "html", null, true);
        echo "\" alt=\"yellow\" data-bgposition=\"center top\" data-bgfit=\"normal\" data-bgrepeat=\"repeat\">
                                <div class=\"tp-caption roundedimage sfl stl cust-z-index-5 rs-cust-style8\" data-x=\"50\" data-y=\"200\" data-speed=\"1300\" data-start=\"500\" data-easing=\"Power3.easeInOut\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-end=\"8250\" data-endspeed=\"300\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slide-3-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"tp-caption title customin stb tp-resizeme cust-z-index-6 rs-cust-style1\" data-x=\"570\" data-y=\"200\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:20;transformOrigin:50% 100%;\" data-speed=\"500\" data-start=\"1350\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-end=\"8400\" data-endspeed=\"300\">Receive personalized
                                    <br> coaching
                                </div>
                                <div class=\"tp-caption slide_text customin stb tp-resizeme cust-z-index-7 rs-cust-style2\" data-x=\"570\" data-y=\"355\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:20;transformOrigin:50% 100%;\" data-speed=\"500\" data-start=\"1750\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-end=\"8500\" data-endspeed=\"300\" >
\t\t\t\t\t\t\t\t\t<span class=\"font-w_400\">Learning is a collaborative process, and we're here to provide you with guidance every step of the way.</span>
                                </div>
                                <div class=\"tp-caption slide_button customin stb tp-resizeme cust-z-index-8 rs-cust-style3\" data-x=\"570\" data-y=\"460\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:20;transformOrigin:50% 100%;\" data-speed=\"500\" data-start=\"2200\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-end=\"8600\" data-endspeed=\"300\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"slide_button_white\">Start Learning Now</a>
                                </div>
                            </li>
                        </ul>
                        <div class=\"tp-bannertimer\"></div>
                    </div>
\t\t\t\t</div>
            </section>
\t\t\t<!-- Revolution slider -->
\t\t\t<!-- Content -->
            <div class=\"page_content_wrap\">
                <div class=\"content\">
                    <article class=\"post_item post_item_single page\">
\t\t\t\t\t\t<section class=\"post_content\">
\t\t\t\t\t\t\t<!-- Features section -->
\t\t\t\t\t\t\t<div class=\"sc_section\" data-animation=\"animated zoomIn normal\">
\t\t\t\t\t\t\t\t<div class=\"sc_content content_wrap margin_top_3em_imp margin_bottom_3em_imp sc_features_st1\">
\t\t\t\t\t\t\t\t\t<div class=\"columns_wrap sc_columns columns_fluid sc_columns_count_3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"column-1_3 sc_column_item sc_column_item_1 odd first text_center\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"sc_icon icon-woman-2 sc_icon_bg_menu menu_dark_color font_5em lh_1em\"></a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"sc_section font-w_400 margin_top_1em_imp\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"menu_color\" href=\"#\">Take computer science courses<br />
\t\t\t\t\t\t\t\t\t\t\t\t\twith personalized support</a>
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"column-1_3 sc_column_item sc_column_item_2 even text_center\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"sc_icon icon-rocket-2 sc_icon_bg_menu menu_dark_color font_5em lh_1em\"></a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"sc_section font-w_400 margin_top_1em_imp\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"menu_color\" href=\"#\">Build cool projects<br />
\t\t\t\t\t\t\t\t\t\t\t\t\tto showcase your skills</a>
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"column-1_3 sc_column_item sc_column_item_3 odd text_center\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"sc_icon icon-world-2 sc_icon_bg_menu menu_dark_color font_5em lh_1em\"></a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"sc_section font-w_400 margin_top_1em_imp\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"menu_color\" href=\"#\">Earn certificates<br />
\t\t\t\t\t\t\t\t\t\t\t\t\trecognized by Industry</a>
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /Features section -->\t\t\t
\t\t\t\t\t\t\t<!-- Courses section -->
\t\t\t\t\t\t\t<div class=\"sc_section accent_top bg_tint_light sc_bg1\" data-animation=\"animated fadeInUp normal\">
\t\t\t\t\t\t\t\t<div class=\"sc_section_overlay\">
\t\t\t\t\t\t\t\t\t<div class=\"sc_section_content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"sc_content content_wrap margin_top_2_5em_imp margin_bottom_2_5em_imp\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"sc_title sc_title_regular sc_align_center margin_top_0 margin_bottom_085em text_center\">Courses Starting Soon</h2>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"sc_blogger layout_courses_3 template_portfolio sc_blogger_horizontal no_description\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"isotope_wrap\" data-columns=\"3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Courses item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"isotope_item isotope_item_courses isotope_column_3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_item post_item_courses odd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_content isotope_item_content ih-item colored square effect_dir left_to_right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_featured img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"Principles of Written English, Part 2\" src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/masonry_15-400x400.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"post_title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Principles of Written English, Part 2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_descr\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"post_price_value\">\$85</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"post_price_period\">monthly</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_category\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Language</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_info_wrap info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-back\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"post_title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Principles of Written English, Part 2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_descr\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Nam id leo massa. Cras at condimentum nisi, vulputate ultrices turpis.</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small\">LEARN MORE</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small\">BUY NOW</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /Courses item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Courses item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"isotope_item isotope_item_courses isotope_column_3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_item post_item_courses even\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_content isotope_item_content ih-item colored square effect_dir left_to_right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_featured img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"Entrepreneurship 101: Who is your customer?\" src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/masonry_06-400x400.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"post_title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Entrepreneurship 101: Who is your customer?</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_descr\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"post_price_value\">\$195</span><span class=\"post_price_period\">monthly</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_category\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Marketing</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_info_wrap info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-back\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"post_title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Entrepreneurship 101:  Who is your customer?</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_descr\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Quisque a nulla eget ante vestibulum lacinia eu quis massa.</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small\">LEARN MORE</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small\">BUY NOW</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /Courses item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Courses item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"isotope_item isotope_item_courses isotope_column_3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_item post_item_courses odd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_content isotope_item_content ih-item colored square effect_dir left_to_right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_featured img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"Evaluating Social  Programs\" src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/masonry_04-400x400.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"post_title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Evaluating Social Programs</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_descr\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"post_price_value\">Free!</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_category\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Social</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_info_wrap info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-back\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"post_title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Evaluating Social  Programs</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_descr\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Nunc finibus vestibulum dui a fringilla. Maecenas maximus in massa sit amet maximus.</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small\">LEARN MORE</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /Courses item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Courses item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"isotope_item isotope_item_courses isotope_column_3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_item post_item_courses even\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_content isotope_item_content ih-item colored square effect_dir left_to_right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_featured img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"Principles of Written English, Part 1\" src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/masonry_05-400x400.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"post_title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Principles of Written English, Part 1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_descr\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"post_price_value\">\$85</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_category\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Language</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_info_wrap info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-back\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"post_title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Principles of Written English, Part 1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_descr\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small\">LEARN MORE</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small\">BUY NOW</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /Courses item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Courses item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"isotope_item isotope_item_courses isotope_column_3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_item post_item_courses odd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_content isotope_item_content ih-item colored square effect_dir left_to_right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_featured img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"Introduction to Biomedical Imaging\" src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/masonry_03-400x400.jpg"), "html", null, true);
        echo "\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"post_title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Introduction to Biomedical Imaging</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_descr\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"post_price_value\">\$400</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_category\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Medicine</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_info_wrap info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-back\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"post_title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Introduction to Biomedical Imaging</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_descr\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p><a href=\"\">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small\">LEARN MORE</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small\">BUY NOW</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /Courses item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Courses item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"isotope_item isotope_item_courses isotope_column_3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_item post_item_courses even last\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_content isotope_item_content ih-item colored square effect_dir left_to_right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_featured img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"Introduction to Computer  Science\" src=\"";
        // line 479
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/masonry_02-400x400.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"post_title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Introduction to Computer  Science</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_descr\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"post_price_value\">\$120</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"post_price_period\">monthly</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_category\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Computers</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_info_wrap info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-back\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"post_title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Introduction to Computer  Science</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_descr\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p><a href=\"\">Sed interdum felis diam, vitae rutrum urna laoreet vehicula.</a></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small\">LEARN MORE</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small\">BUY NOW</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /Courses item -->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"sc_button sc_button_square sc_button_style_filled sc_button_bg_menu sc_button_size_small aligncenter sc_button_iconed icon-graduation margin_top_1em margin_bottom_4 widht_12em\">VIEW ALL COURSES</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /Courses section -->
\t\t\t\t\t\t\t<!-- Partners section -->
\t\t\t\t\t\t\t<div class=\"sc_section\" data-animation=\"animated fadeInUp normal\">
\t\t\t\t\t\t\t\t<div class=\"sc_content content_wrap margin_top_2_5em_imp margin_bottom_2_5em_imp\">
\t\t\t\t\t\t\t\t\t<div class=\"sc_section aligncenter width_70per\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"sc_title sc_title_regular margin_top_0\">Learn From the Best</h2>
\t\t\t\t\t\t\t\t\t\t<p>Our online courses are built in partnership with technology leaders and are relevant to industry needs.
\t\t\t\t\t\t\t\t\t\t\t<br /> Upon completing a Online course, you&#8217;ll receive a verified completion certificate recognized by industry leaders.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"sc_section_4\" class=\"sc_section margin_top_1_5em_imp margin_bottom_0_imp height_75\">
\t\t\t\t\t\t\t\t\t\t<div id=\"sc_section_4_scroll\" class=\"sc_scroll sc_scroll_horizontal swiper-slider-container scroll-container height_75\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"sc_scroll_wrapper swiper-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sc_scroll_slide swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<figure class=\"sc_image  alignleft sc_image_shape_square margin_right_0_imp\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 538
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/partners_01_bw.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t<figure class=\"sc_image  alignleft sc_image_shape_square margin_right_0_imp margin_left_4em_imp\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 541
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/partners_02_bw.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t<figure class=\"sc_image  alignleft sc_image_shape_square margin_right_0_imp margin_left_4em_imp\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 544
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/partners_03_bw.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t<figure class=\"sc_image  alignleft sc_image_shape_square margin_right_0_imp margin_left_4em_imp\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 547
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/partners_04_bw.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t<figure class=\"sc_image  alignleft sc_image_shape_square margin_right_0_imp margin_left_4em_imp\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 550
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/partners_05_bw.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t<figure class=\"sc_image  alignleft sc_image_shape_square margin_right_0_imp margin_left_4em_imp\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 553
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/partners_06_bw.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"sc_section_4_scroll_bar\" class=\"sc_scroll_bar sc_scroll_bar_horizontal sc_section_471175375_scroll_bar\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /Partners section -->
\t\t\t\t\t\t\t<!-- Video training section -->\t\t\t
\t\t\t\t\t\t\t<div class=\"sc_line sc_line_style_solid margin_top_0 margin_bottom_0\"></div>
\t\t\t\t\t\t\t<div class=\"sc_section\" data-animation=\"animated fadeInUp normal\">
\t\t\t\t\t\t\t\t<div class=\"sc_content content_wrap margin_top_2_5em_imp margin_bottom_2_5em_imp \">
\t\t\t\t\t\t\t\t\t<div class=\"columns_wrap sc_columns columns_nofluid sc_columns_count_2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"column-1_2 sc_column_item sc_column_item_1 odd first res_width_100per_imp\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"sc_title sc_title_iconed sc_align_left text_left\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sc_title_icon sc_title_icon_top sc_title_icon_medium icon-video-2\"></span>
\t\t\t\t\t\t\t\t\t\t\t\tOur Video Training for Microsoft products and technologies
\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t<p>Mauris vitae quam ligula. In tincidunt sapien sed nibh scelerisque congue. Maecenas ut libero eu metus tincidunt lobortis. Duis accumsan at mauris vel lacinia.</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_mini sc_button_iconed inherit margin_top_1em margin_bottom_4 margin_left_4\">BROWSE COURSES</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"column-1_2 sc_column_item sc_column_item_2 even res_width_100per_imp\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"sc_video_player sc_video_bordered sc_video_st1\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sc_video_frame sc_video_play_button hover_icon hover_icon_play width_100per\" data-width=\"100%\" data-height=\"647\" data-video=\"&lt;iframe class=&quot;video_frame&quot; src=_http_/youtube.com/embed/636Dp8eHWnM5782.html?autoplay=1%22 width=&quot;100%&quot; height=&quot;647&quot; frameborder=&quot;0&quot; webkitAllowFullScreen=&quot;webkitAllowFullScreen&quot; mozallowfullscreen=&quot;mozallowfullscreen&quot; allowFullScreen=&quot;allowFullScreen&quot;&gt;&lt;/iframe&gt;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"";
        // line 579
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/douglas_adams_full-400x225.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /Video training section -->\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Pricing section -->
\t\t\t\t\t\t\t<div class=\"sc_section accent_top bg_tint_light sc_bg1\" data-animation=\"animated fadeInUp normal\">
\t\t\t\t\t\t\t\t<div class=\"sc_section_overlay\">
\t\t\t\t\t\t\t\t\t<div class=\"sc_section_content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"sc_content content_wrap margin_top_2_5em_imp margin_bottom_2_5em_imp\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"sc_title sc_title_regular sc_align_center text_center margin_top_0 margin_bottom_085em\">Plans &amp; Pricing</h2>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"columns_wrap sc_columns columns_nofluid sc_columns_count_3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"column-1_3 sc_column_item sc_column_item_1 odd first text_center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sc_price_block sc_price_block_style_1 width_100per\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sc_price_block_title\">Trial</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sc_price_block_money\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sc_price_block_icon icon-clock-2\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sc_price_block_description\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sc_highlight font_2_57em lh_1em\"><b>Free!</b> 30 Days</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sc_price_block_link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small\">I WANT THIS PLAN</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"column-1_3 sc_column_item sc_column_item_2 even text_center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sc_price_block sc_price_block_style_2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sc_price_block_title\">Monthly</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sc_price_block_money\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sc_price\"><span class=\"sc_price_currency\">\$</span><span class=\"sc_price_money\">89</span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sc_price_block_description\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p><b>Save \$98</b> every year compared to the monthly
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br /> plan by paying yearly.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sc_price_block_link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small\">I WANT THIS PLAN</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"column-1_3 sc_column_item sc_column_item_3 odd text_center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sc_price_block sc_price_block_style_3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sc_price_block_title\">Yearly</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sc_price_block_money\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sc_price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sc_price_currency\">\$</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sc_price_money\">129</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sc_price_block_description\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p><b>Save \$120</b> every year compared to the monthly
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br /> plan by paying biannually.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sc_price_block_link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small\">I WANT THIS PLAN</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /Pricing section -->
                        </section>
                    </article>
                </div>
            </div>
            <!-- /Content without sidebar -->
\t\t\t<!-- Widgets Footer -->
\t\t\t<footer class=\"footer_wrap bg_tint_light footer_style_white widget_area\">
                <div class=\"content_wrap\">
                    <div class=\"columns_wrap\">
\t\t\t\t\t\t<!-- Calendar widget -->
                        <aside class=\"column-1_3 widget widget_calendar\">
                            <h5 class=\"widget_title\">Calendar</h5>
                            <table>
                                <thead>
                                      <tr>
                                            <th class=\"month_prev\">
                                                <a href=\"#\" data-type=\"post,courses,tribe_events\" data-year=\"2015\" data-month=\"01\" title=\"View posts for January 2015\"></a>
                                            </th>
                                            <th class=\"month_cur\" colspan=\"5\">September <span>2015</span></th>
                                            <th class=\"month_next\"> 
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-month=\"10\" data-year=\"2015\" data-type=\"post,courses,tribe_events\" title=\"View posts for October 2015\"></a>
\t\t\t\t\t\t\t\t\t\t\t</th>
                                        </tr>
                                    <tr>
                                        <th class=\"weekday\" scope=\"col\" title=\"Monday\">Mon</th>
                                        <th class=\"weekday\" scope=\"col\" title=\"Tuesday\">Tue</th>
                                        <th class=\"weekday\" scope=\"col\" title=\"Wednesday\">Wed</th>
                                        <th class=\"weekday\" scope=\"col\" title=\"Thursday\">Thu</th>
                                        <th class=\"weekday\" scope=\"col\" title=\"Friday\">Fri</th>
                                        <th class=\"weekday\" scope=\"col\" title=\"Saturday\">Sat</th>
                                        <th class=\"weekday\" scope=\"col\" title=\"Sunday\">Sun</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan=\"1\" class=\"pad\"><span class=\"day_wrap\">&nbsp;</span></td>
                                        <td class=\"day\"><span class=\"day_wrap\">1</span></td>
                                        <td class=\"day\"><span class=\"day_wrap\">2</span></td>
                                        <td class=\"day\"><span class=\"day_wrap\">3</span></td>
                                        <td class=\"day\"><span class=\"day_wrap\">4</span></td>
                                        <td class=\"day\"><span class=\"day_wrap\">5</span></td>
                                        <td class=\"day\"><span class=\"day_wrap\">6</span></td>
                                    </tr>
                                    <tr>
                                        <td class=\"day\"><span class=\"day_wrap\">7</span></td>
                                        <td class=\"day\"><span class=\"day_wrap\">8</span></td>
                                        <td class=\"day\"><span class=\"day_wrap\">9</span></td>
                                        <td class=\"day\"><a class=\"day_wrap\" title=\"Post\" href=\"#\">10</a></td>
                                        <td class=\"day\"><span class=\"day_wrap\">11</span></td>
                                        <td class=\"day\"><span class=\"day_wrap\">12</span></td>
                                        <td class=\"day\"><span class=\"day_wrap\">13</span></td>
                                    </tr>
                                    <tr>
                                        <td class=\"day\"><span class=\"day_wrap\">14</span></td>
                                        <td class=\"day\"><span class=\"day_wrap\">15</span></td>
                                        <td class=\"day\"><span class=\"day_wrap\">16</span></td>
                                        <td class=\"day\"><span class=\"day_wrap\">17</span></td>
                                        <td class=\"day\"><a class=\"day_wrap\" title=\"Post\" href=\"#\">18</a></td>
                                        <td class=\"day\"><span class=\"day_wrap\">19</span></td>
                                        <td class=\"day\"><span class=\"day_wrap\">20</span></td>
                                    </tr>
                                    <tr>
                                        <td class=\"today\"><span class=\"day_wrap\">21</span></td>
                                        <td class=\"day\"><span class=\"day_wrap\">22</span></td>
                                        <td class=\"day\"><span class=\"day_wrap\">23</span></td>
                                        <td class=\"day\"><span class=\"day_wrap\">24</span></td>
                                        <td class=\"day\"><span class=\"day_wrap\">25</span></td>
                                        <td class=\"day\"><span class=\"day_wrap\">26</span></td>
                                        <td class=\"day\"><span class=\"day_wrap\">27</span></td>
                                    </tr>
                                    <tr>
                                        <td class=\"day\"><span class=\"day_wrap\">28</span></td>
                                        <td class=\"day\"><span class=\"day_wrap\">29</span></td>
                                        <td class=\"day\"><span class=\"day_wrap\">30</span></td>
                                        <td class=\"pad\" colspan=\"4\"><span class=\"day_wrap\">&nbsp;</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </aside>
                                                ";
        // line 726
        $this->displayBlock('login', $context, $blocks);
        // line 728
        echo "\t\t\t\t\t\t<!-- /Calendar widget -->
\t\t\t\t\t\t<!-- Popular courses widget -->
\t\t\t\t\t\t<aside class=\"column-1_3 widget\">
                            <h5 class=\"widget_title\">Popular Courses</h5>
                            <article class=\"post_item with_thumb first\">
                                <div class=\"post_thumb\">
\t\t\t\t\t\t\t\t\t<img alt=\"Principles of Written English, Part 1\" src=\"";
        // line 734
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/masonry_05-75x75.jpg"), "html", null, true);
        echo "\"></div>
                                <div class=\"post_content\">
                                    <h6 class=\"post_title\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\">Principles of Written English, Part 1</a>
\t\t\t\t\t\t\t\t\t</h6>
                                    <div class=\"post_info\"><span class=\"post_info_item post_info_posted\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"post_info_date\">December 24, 2014</a></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"post_info_item post_info_posted_by\">by 
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"post_info_author\">John Doe</a>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"post_info_item post_info_counters\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"post_counters_item post_counters_rating icon-star-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"post_counters_number\">86.8</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
                                        </span>
                                    </div>
                                </div>
                            </article>
                            <article class=\"post_item with_thumb\">
                                <div class=\"post_thumb\">
\t\t\t\t\t\t\t\t\t<img alt=\"Medical Chemistry: The  Molecular Basis&#8230;\" src=\"";
        // line 754
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/masonry_01-75x75.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t</div>
                                <div class=\"post_content\">
                                    <h6 class=\"post_title\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\">Medical Chemistry: The  Molecular Basis...</a>
\t\t\t\t\t\t\t\t\t</h6>
                                    <div class=\"post_info\">
\t\t\t\t\t\t\t\t\t\t<span class=\"post_info_item post_info_posted\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"post_info_date\">March 8, 2015</a>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"post_info_item post_info_posted_by\">by 
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"post_info_author\">John Doe</a>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"post_info_item post_info_counters\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"post_counters_item post_counters_rating icon-star-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"post_counters_number\">83.8</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
                                        </span>
                                    </div>
                                </div>
                            </article>
                            <article class=\"post_item with_thumb\">
                                <div class=\"post_thumb\">
\t\t\t\t\t\t\t\t\t<img alt=\"Entrepreneurship 101:  Who is your customer?\" src=\"";
        // line 777
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/masonry_06-75x75.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t</div>
                                <div class=\"post_content\">
                                    <h6 class=\"post_title\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\">Entrepreneurship 101:  Who is your customer?</a>
\t\t\t\t\t\t\t\t\t</h6>
                                    <div class=\"post_info\">
\t\t\t\t\t\t\t\t\t\t<span class=\"post_info_item post_info_posted\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"post_info_date\">February 27, 2015</a>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"post_info_item post_info_posted_by\">by 
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"post_info_author\">John Doe</a>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"post_info_item post_info_counters\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"post_counters_item post_counters_rating icon-star-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"post_counters_number\">76.3</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
                                        </span>
                                    </div>
                                </div>
                            </article>
                            <article class=\"post_item with_thumb\">
                                <div class=\"post_thumb\">
\t\t\t\t\t\t\t\t\t<img alt=\"Introduction to Biomedical Imaging\" src=\"";
        // line 800
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/masonry_03-75x75.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t</div>
                                <div class=\"post_content\">
                                    <h6 class=\"post_title\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\">Introduction to Biomedical Imaging</a>
\t\t\t\t\t\t\t\t\t</h6>
                                    <div class=\"post_info\">
\t\t\t\t\t\t\t\t\t\t<span class=\"post_info_item post_info_posted\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"post_info_date\">January 1, 2016</a>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"post_info_item post_info_posted_by\">by 
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"post_info_author\">John Doe</a>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"post_info_item post_info_counters\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"paid-course.html\" class=\"post_counters_item post_counters_rating icon-star-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"post_counters_number\">74.8</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
                                        </span>
                                    </div>
                                </div>
                            </article>
                        </aside>
\t\t\t\t\t\t<!-- /Popular courses widget -->
\t\t\t\t\t\t<!-- Recent courses widget -->
                        <aside class=\"column-1_3 widget\">
                            <h5 class=\"widget_title\">Recent Courses</h5>
                            <article class=\"post_item with_thumb first\">
                                <div class=\"post_thumb\">
\t\t\t\t\t\t\t\t\t<img alt=\"Principles of Written English, Part 2\" src=\"";
        // line 828
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/masonry_15-75x75.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t</div>
                                <div class=\"post_content\">
                                    <h6 class=\"post_title\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\">Principles of Written English, Part 2</a>
\t\t\t\t\t\t\t\t\t</h6>
                                    <div class=\"post_info\">
\t\t\t\t\t\t\t\t\t\t<span class=\"post_info_item post_info_posted\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"post_info_date\">February 10, 2015</a>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"post_info_item post_info_posted_by\">by 
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"post_info_author\">John Doe</a>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"post_info_item post_info_counters\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"post_counters_item post_counters_views icon-eye\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"post_counters_number\">749</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
                                        </span>
                                    </div>
                                </div>
                            </article>
                            <article class=\"post_item with_thumb\">
                                <div class=\"post_thumb\">
\t\t\t\t\t\t\t\t\t<img alt=\"Entrepreneurship 101:  Who is your customer?\" src=\"";
        // line 851
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/masonry_06-75x75.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t</div>
                                <div class=\"post_content\">
                                    <h6 class=\"post_title\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\">Entrepreneurship 101:  Who is your customer?</a>
\t\t\t\t\t\t\t\t\t</h6>
                                    <div class=\"post_info\">
\t\t\t\t\t\t\t\t\t\t<span class=\"post_info_item post_info_posted\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"post_info_date\">February 27, 2015</a>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"post_info_item post_info_posted_by\">by 
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"post_info_author\">John Doe</a>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"post_info_item post_info_counters\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"post_counters_item post_counters_views icon-eye\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"post_counters_number\">729</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
                                        </span>
                                    </div>
                                </div>
                            </article>
                            <article class=\"post_item with_thumb\">
                                <div class=\"post_thumb\">
\t\t\t\t\t\t\t\t\t<img alt=\"Evaluating Social  Programs\" src=\"";
        // line 874
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/masonry_04-75x75.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t</div>
                                <div class=\"post_content\">
                                    <h6 class=\"post_title\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\">Evaluating Social  Programs</a>
\t\t\t\t\t\t\t\t\t</h6>
                                    <div class=\"post_info\">
\t\t\t\t\t\t\t\t\t\t<span class=\"post_info_item post_info_posted\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"post_info_date\">January 1, 2015</a>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"post_info_item post_info_posted_by\">by 
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"post_info_author\">John Doe</a>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"post_info_item post_info_counters\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"post_counters_item post_counters_views icon-eye\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"post_counters_number\">1154</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
                                        </span>
                                    </div>
                                </div>
                            </article>
                            <article class=\"post_item with_thumb\">
                                <div class=\"post_thumb\">
\t\t\t\t\t\t\t\t\t<img alt=\"Principles of Written English, Part 1\" src=\"";
        // line 897
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/masonry_05-75x75.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t</div>
                                <div class=\"post_content\">
                                    <h6 class=\"post_title\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\">Principles of Written English, Part 1</a>
\t\t\t\t\t\t\t\t\t</h6>
                                    <div class=\"post_info\">
\t\t\t\t\t\t\t\t\t\t<span class=\"post_info_item post_info_posted\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"post_info_date\">December 24, 2014</a>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"post_info_item post_info_posted_by\">by 
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"post_info_author\">John Doe</a>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"post_info_item post_info_counters\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"post_counters_item post_counters_views icon-eye\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"post_counters_number\">253</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
                                        </span>
                                    </div>
                                </div>
                            </article>
                        </aside>
\t\t\t\t\t\t<!-- /Recent courses widget -->
                    </div>
                </div>
            </footer>
\t\t\t<!-- /Widgets Footer -->
\t\t\t<!-- Testimonials footer -->
\t\t\t<footer class=\"testimonials_wrap sc_section bg_tint_dark post_ts_bg3\">
                <div class=\"sc_section_overlay\" data-bg_color=\"#1eaace\" data-overlay=\"0\">
                    <div class=\"content_wrap\">
\t\t\t\t\t\t<!-- Testimonials section -->
\t\t\t\t\t\t<div class=\"sc_testimonials sc_slider_swiper swiper-slider-container sc_slider_nopagination sc_slider_controls sc_slider_height_fixed aligncenter height_12em width_100per\" data-old-height=\"12em\" data-interval=\"7000\">
\t\t\t\t\t\t\t<div class=\"slides swiper-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"swiper-slide height_12em width_100per\" data-style=\"width:100%;height:12em;\">
\t\t\t\t\t\t\t\t\t<div class=\"sc_testimonial_item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"sc_testimonial_avatar\">
\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"";
        // line 934
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/masonry_07-70x70.jpg"), "html", null, true);
        echo "\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"sc_testimonial_content\">
\t\t\t\t\t\t\t\t\t\t\t<p>Best purchase i made in envato. Great Theme!</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"sc_testimonial_author\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Sarah Jefferson</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"swiper-slide height_12em width_100per\" data-style=\"width:100%;height:12em;\">
\t\t\t\t\t\t\t\t\t<div class=\"sc_testimonial_item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"sc_testimonial_avatar\">
\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"";
        // line 946
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/avatar-4-70x70.jpg"), "html", null, true);
        echo "\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"sc_testimonial_content\">
\t\t\t\t\t\t\t\t\t\t\t<p>Thank you for all your help and assistance over the years with our products.
\t\t\t\t\t\t\t\t\t\t\t\t<br /> I would have no hesitation in recommending you to my clients.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"sc_testimonial_author\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">David Anderson</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"swiper-slide height_12em width_100per\" data-style=\"width:100%;height:12em;\">
\t\t\t\t\t\t\t\t\t<div class=\"sc_testimonial_item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"sc_testimonial_content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"sc_number aligncenter margin_bottom_1_5em\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sc_number_item\">4</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sc_number_item\">0</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sc_number_item\">0</span>
\t\t\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t\t\tfaculty and staff teaching courses and discussing topics online
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"sc_testimonial_author\">online Education</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"sc_slider_controls_wrap\">
\t\t\t\t\t\t\t\t<a class=\"sc_slider_prev\" href=\"#\"></a>
\t\t\t\t\t\t\t\t<a class=\"sc_slider_next\" href=\"#\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /Testimonials section -->
\t\t\t        </div>
                </div>
            </footer>
\t\t\t<!-- /Testimonials footer -->
\t\t\t<!-- Contacts Footer -->
            <footer class=\"contacts_wrap bg_tint_dark contacts_style_dark\">
                <div class=\"content_wrap\">
                    <div class=\"logo\">
                        <a href=\"\">
\t\t\t\t\t\t\t<img src=\"";
        // line 985
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo_footer.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t</a>
                    </div>
                    <div class=\"contacts_address\">
                        <address class=\"address_right\">
\t\t\t\t\t\t\tPhone: 1.800.123.4567<br>
\t\t\t\t\t\t\tFax: 1.800.123.4566
\t\t\t\t\t\t</address>
                        <address class=\"address_left\">
\t\t\t\t\t\t\tSan Francisco, CA 94102, US<br>\t
\t\t\t\t\t\t\t1234 Some St
\t\t\t\t\t\t</address>
                    </div>
                    <div class=\"sc_socials sc_socials_size_big\">
                        <div class=\"sc_socials_item\">
\t\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" class=\"social_icons social_facebook\">
\t\t\t\t\t\t\t\t<span class=\"sc_socials_hover social_facebook\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
                        <div class=\"sc_socials_item\">
\t\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" class=\"social_icons social_pinterest\">
\t\t\t\t\t\t\t\t<span class=\"sc_socials_hover social_pinterest\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
                        <div class=\"sc_socials_item\">
\t\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" class=\"social_icons social_twitter\">
\t\t\t\t\t\t\t\t<span class=\"sc_socials_hover social_twitter\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
                        <div class=\"sc_socials_item\">
\t\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" class=\"social_icons social_gplus\">
\t\t\t\t\t\t\t\t<span class=\"sc_socials_hover social_gplus\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
                        <div class=\"sc_socials_item\">
\t\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" class=\"social_icons social_rss\">
\t\t\t\t\t\t\t\t<span class=\"sc_socials_hover social_rss\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
                        <div class=\"sc_socials_item\">
\t\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" class=\"social_icons social_dribbble\">
\t\t\t\t\t\t\t\t<span class=\"sc_socials_hover social_dribbble\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
                    </div>
                </div>
            </footer>
            <!-- /Contacts Footer -->
\t\t\t<!-- Copyright -->
            <div class=\"copyright_wrap\">
                <div class=\"content_wrap\">
                    <p>© 2015 All Rights Reserved. <a href=\"#\">Terms of use</a> and <a href=\"#\">Privacy Policy</a></p>
                </div>
            </div>
\t\t\t<!-- /Copyright -->
        </div>
    </div>
    <!-- /Body -->
    <a href=\"#\" class=\"scroll_to_top icon-up-2\" title=\"Scroll to top\"></a>
    <div class=\"custom_html_section\"></div>
\t\t
\t<script type=\"text/javascript\" src=\"";
        // line 1046
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1047
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery/jquery-migrate.min.js"), "html", null, true);
        echo "\"></script>\t
\t<script type=\"text/javascript\" src=\"";
        // line 1048
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery/ui/core.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1049
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery/ui/widget.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1050
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery/ui/tabs.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 1051
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery/ui/accordion.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1052
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery/ui/effect.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1053
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery/ui/effect-fade.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 1054
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery/jquery.blockUI.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1055
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery/jquery.cookie.min.js"), "html", null, true);
        echo "\"></script>
\t
\t<script type=\"text/javascript\" src=\"";
        // line 1057
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/global.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1058
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/core.utils.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1059
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/core.init.min.js"), "html", null, true);
        echo "\"></script>\t
    <script type=\"text/javascript\" src=\"";
        // line 1060
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/shortcodes/shortcodes.min.js"), "html", null, true);
        echo "\"></script>\t
\t
    <script type=\"text/javascript\" src=\"";
        // line 1062
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/rs-plugin/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1063
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/rs-plugin/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script> 
\t<script type=\"text/javascript\" src=\"";
        // line 1064
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/slider_init.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 1066
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/superfish.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1067
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.slidemenu.min.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 1069
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mediaelement/mediaelement-and-player.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1070
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mediaelement/wp-mediaelement.min.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 1072
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/core.messages/core.messages.min.js"), "html", null, true);
        echo "\"></script>
    
\t<script type=\"text/javascript\" src=\"";
        // line 1074
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 1075
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/hover/jquery.hoverdir.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 1076
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/prettyPhoto/jquery.prettyPhoto.min.js"), "html", null, true);
        echo "\"></script>\t\t
    <script type=\"text/javascript\" src=\"";
        // line 1077
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/swiper/idangerous.swiper-2.7.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1078
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/swiper/idangerous.swiper.scrollbar-2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1079
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/diagram/chart.min.js"), "html", null, true);
        echo "\"></script>
\t
\t<script type=\"text/javascript\" src=\"";
        // line 1081
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/core.customizer/front.customizer.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 1082
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/skin.customizer.min.js"), "html", null, true);
        echo "\"></script>

   

</body>


<!-- Mirrored from education-html.themerex.net/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Feb 2016 14:18:52 GMT -->
</html>

";
    }

    // line 726
    public function block_login($context, array $blocks = array())
    {
        // line 727
        echo "                                                    ";
    }

    public function getTemplateName()
    {
        return "MyAppUserBundle::layout.html.twig.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1387 => 727,  1384 => 726,  1369 => 1082,  1365 => 1081,  1360 => 1079,  1356 => 1078,  1352 => 1077,  1348 => 1076,  1344 => 1075,  1340 => 1074,  1335 => 1072,  1330 => 1070,  1326 => 1069,  1321 => 1067,  1317 => 1066,  1312 => 1064,  1308 => 1063,  1304 => 1062,  1299 => 1060,  1295 => 1059,  1291 => 1058,  1287 => 1057,  1282 => 1055,  1278 => 1054,  1274 => 1053,  1270 => 1052,  1266 => 1051,  1262 => 1050,  1258 => 1049,  1254 => 1048,  1250 => 1047,  1246 => 1046,  1182 => 985,  1140 => 946,  1125 => 934,  1085 => 897,  1059 => 874,  1033 => 851,  1007 => 828,  976 => 800,  950 => 777,  924 => 754,  901 => 734,  893 => 728,  891 => 726,  741 => 579,  712 => 553,  706 => 550,  700 => 547,  694 => 544,  688 => 541,  682 => 538,  620 => 479,  576 => 438,  529 => 394,  485 => 353,  438 => 309,  390 => 264,  315 => 192,  310 => 190,  293 => 176,  288 => 174,  272 => 161,  267 => 159,  245 => 140,  239 => 137,  199 => 100,  172 => 76,  168 => 75,  164 => 74,  146 => 59,  123 => 39,  119 => 38,  115 => 37,  111 => 36,  107 => 35,  103 => 34,  99 => 33,  95 => 32,  91 => 31,  87 => 30,  83 => 29,  78 => 27,  74 => 26,  70 => 25,  66 => 24,  62 => 23,  57 => 21,  53 => 20,  49 => 19,  44 => 17,  39 => 15,  30 => 9,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en-US">*/
/* */
/* */
/* <!-- Mirrored from education-html.themerex.net/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Feb 2016 14:17:57 GMT -->*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}" />*/
/*     <title>Homepage | Education Center</title>*/
/* */
/* 	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&amp;subset=latin%2Clatin-ext&amp;ver=4.3.1" type="text/css" media="all" />*/
/* 	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,700,700italic&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" type="text/css" media="all" />*/
/* 	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister:400&amp;subset=latin" type="text/css" media="all" />*/
/* 	<link rel="stylesheet" href="{{ asset('css/fontello/css/fontello.css') }}" type="text/css" media="all" />*/
/* 	*/
/*     <link rel="stylesheet" href="{{ asset('js/rs-plugin/settings.css') }}" type="text/css" media="all" />*/
/* */
/*     <link rel="stylesheet" href="{{ asset('css/woocommerce/woocommerce-layout.css') }}" type="text/css" media="all" />*/
/*     <link rel="stylesheet" href="{{ asset('css/woocommerce/woocommerce-smallscreen.css') }}" type="text/css" media="only screen and (max-width: 768px)" />*/
/*     <link rel="stylesheet" href="{{ asset('css/woocommerce/woocommerce.css') }}" type="text/css" media="all" />*/
/* */
/*     <link rel="stylesheet" href="{{ asset ('css/style.css') }}" type="text/css" media="all" />*/
/*     <link rel="stylesheet" href="{{ asset ('css/shortcodes.css') }}" type="text/css" media="all" />*/
/*     <link rel="stylesheet" href="{{ asset ('css/core.animation.css') }}" type="text/css" media="all" />*/
/*     <link rel="stylesheet" href="{{ asset ('css/tribe-style.css') }}" type="text/css" media="all" />*/
/*     <link rel="stylesheet" href="{{ asset ('css/skins/skin.css') }}" type="text/css" media="all" />*/
/* */
/* 	<link rel="stylesheet" href="{{ asset ('css/core.portfolio.css') }}" type="text/css" media="all" />*/
/*     <link rel="stylesheet" href="{{ asset ('js/mediaelement/mediaelementplayer.min.css') }}" type="text/css" media="all" />*/
/*     <link rel="stylesheet" href="{{ asset ('js/mediaelement/wp-mediaelement.css') }}" type="text/css" media="all" />*/
/*     <link rel="stylesheet" href="{{ asset ('js/prettyPhoto/css/prettyPhoto.css') }}" type="text/css" media="all" />	*/
/*     <link rel="stylesheet" href="{{ asset ('js/core.customizer/front.customizer.css') }}" type="text/css" media="all" />*/
/* 	<link rel="stylesheet" href="{{ asset ('js/core.messages/core.messages.css') }}" type="text/css" media="all" />*/
/*     <link rel="stylesheet" href="{{ asset ('js/swiper/idangerous.swiper.min.css') }}" type="text/css" media="all" />*/
/* 	<link rel="stylesheet" href="{{ asset ('css/responsive.css') }}" type="text/css" media="all" />*/
/*     <link rel="stylesheet" href="{{ asset ('css/skins/skin-responsive.css') }}" type="text/css" media="all" />*/
/*     <link rel="stylesheet" href="{{ asset ('css/slider-style.css') }}" type="text/css" media="all" />*/
/* 	<link rel="stylesheet" href="{{ asset ('css/custom-style.css') }}" type="text/css" media="all" />*/
/* </head>*/
/* */
/* <body class="home page body_style_fullscreen body_filled article_style_stretch layout_single-standard top_panel_style_dark top_panel_opacity_transparent top_panel_show top_panel_over menu_right user_menu_show sidebar_hide">*/
/*     <a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-angle-double-up" data-url="" data-separator="yes"></a>*/
/* 	<!-- Body -->*/
/*     <div class="body_wrap">*/
/*         <div class="page_wrap">*/
/*             <div class="top_panel_fixed_wrap"></div>*/
/*             <header class="top_panel_wrap bg_tint_dark">*/
/* 				<!-- User menu -->*/
/*                 <div class="menu_user_wrap">*/
/*                     <div class="content_wrap clearfix">*/
/*                         <div class="menu_user_area menu_user_right menu_user_nav_area">*/
/*                             <ul id="menu_user" class="menu_user_nav">*/
/*                                 */
/* 								<li class="menu_user_login">*/
/* 									<a href="#" class="icon icon-logout">Se connecter</a>*/
/* 								</li>*/
/*                                 <li class="menu_user_register">*/
/* 									<a href="{{ path('pidevmooc_inscription') }}" class="icon icon-logout">S'enregistrer</a>*/
/* 								</li>*/
/*                                 */
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="menu_user_area menu_user_left menu_user_contact_area">Contact us on 0 800 123-4567 or <a href="#"><span class="__cf_email__" data-cfemail="394a4c4949564b4d794d515c545c4b5c4117575c4d">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">*/
/* /* <![CDATA[ *//* !function(){try{var t="currentScript"in document?document.currentScript:function(){for(var t=document.getElementsByTagName("script"),e=t.length;e--;)if(t[e].getAttribute("data-cfhash"))return t[e]}();if(t&&t.previousSibling){var e,r,n,i,c=t.previousSibling,a=c.getAttribute("data-cfemail");if(a){for(e="",r=parseInt(a.substr(0,2),16),n=2;a.length-n;n+=2)i=parseInt(a.substr(n,2),16)^r,e+=String.fromCharCode(i);e=document.createTextNode(e),c.parentNode.replaceChild(e,c)}t.parentNode.removeChild(t);}}catch(u){}}()/* ]]> *//* </script></a></div>*/
/*                     </div>*/
/*                 </div>*/
/* 				<!-- /User menu -->*/
/* 				<!-- Main menu -->*/
/*                 <div class="menu_main_wrap logo_left">					*/
/*                     <div class="content_wrap clearfix">*/
/* 						<!-- Logo -->*/
/*                         <div class="logo">*/
/*                         <a href="{{ path('pidevmooc_homepage') }}">*/
/* 								<img src="{{ asset('images/logo_dark.png') }}" class="logo_main" alt="">*/
/* 								<img src="{{ asset('images/logo_dark.png') }}" class="logo_fixed" alt="">*/
/* 							</a>*/
/*                         </div>*/
/* 						<!-- Logo -->*/
/* 						<!-- Search -->*/
/*                         <div class="search_wrap search_style_regular search_ajax" title="Open/close search form">*/
/*                             <a href="#" class="search_icon icon-search-2"></a>*/
/*                             <div class="search_form_wrap">*/
/*                                 <form method="get" class="search_form" action="#">*/
/*                                     <button type="submit" class="search_submit icon-zoom-1" title="Start search"></button>*/
/*                                     <input type="text" class="search_field" placeholder="" value="" name="s" title="" />*/
/*                                 </form>*/
/*                             </div>*/
/*                             <div class="search_results widget_area bg_tint_light">*/
/*                                 <a class="search_results_close icon-delete-2"></a>*/
/*                                 <div class="search_results_content">*/
/* 							</div>*/
/*                             </div>*/
/*                         </div>*/
/* 						<!-- /Search -->*/
/* 						<!-- Navigation -->*/
/*                         <a href="#" class="menu_main_responsive_button icon-menu-1"></a>*/
/* 						<nav class="menu_main_nav_area">*/
/* 							<ul id="menu_main" class="menu_main_nav">*/
/* 								<li class="menu-item menu-item-has-children  "><a href="{{ path('pidevmooc_homepage') }}">Accueil</a>*/
/* 									*/
/* 								*/
/*                                                                 <li class="menu-item menu-item-has-children" ><a href="courses-streampage.html">Formation</a>*/
/*                                                                     <ul>*/
/* 										<li class="menu-item menu-item-has-children"><a href="#">Cours Android</a>*/
/* 											<ul class="sub-menu">*/
/* 												<li class="menu-item"><a href="free-lesson.html">Free lesson (started)</a></li>*/
/* 												<li class="menu-item"><a href="free-lesson-coming-soon.html">Free lesson (coming soon)</a></li>*/
/* 												<li class="menu-item"><a href="lesson-from-paid-course.html">Lesson from paid course</a></li>*/
/* 											</ul>*/
/* 										</li>	*/
/* 										<li class="menu-item menu-item-has-children"><a href="#">Cours IOS</a>*/
/* 											<ul class="sub-menu">*/
/* 												<li class="menu-item"><a href="free-lesson.html">Free lesson (started)</a></li>*/
/* 												<li class="menu-item"><a href="free-lesson-coming-soon.html">Free lesson (coming soon)</a></li>*/
/* 												<li class="menu-item"><a href="lesson-from-paid-course.html">Lesson from paid course</a></li>*/
/* 											</ul>*/
/* 										</li>*/
/* 										<li class="menu-item menu-item-has-children"><a href="#">Cours Windows Phone</a>*/
/* 											<ul class="sub-menu">*/
/* 												<li class="menu-item"><a href="free-lesson.html">Free lesson (started)</a></li>*/
/* 												<li class="menu-item"><a href="free-lesson-coming-soon.html">Free lesson (coming soon)</a></li>*/
/* 												<li class="menu-item"><a href="lesson-from-paid-course.html">Lesson from paid course</a></li>*/
/* 											</ul>*/
/* 										</li>*/
/*                                                                                 </ul>*/
/*                                                                 </li>*/
/* 								*/
/* 									*/
/* 								<li class="menu-item menu-item-has-children"><a href="">Formateurs</a>*/
/* 									<ul class="sub-menu">*/
/* 										<li class="menu-item"><a href="">Organismes</a></li>*/
/* 										<li class="menu-item"><a href="">Formateurs</a></li>*/
/* 									</ul>*/
/* 								</li>*/
/*                                                                 </li>*/
/* 								<li class="menu-item menu-item-has-children "><a href="{{ path('pidevmooc_aboutus') }}">A propos</a>*/
/* 									*/
/* 								</li>*/
/*                                                                 <li class="menu-item menu-item-has-children"><a href="{{ path('pidevmooc_contactus') }}">Contacter nous</a>*/
/* 									*/
/* 								</li>*/
/* 								*/
/* 										*/
/* 							</ul>*/
/* 						</nav>*/
/* 						<!-- /Navigation -->*/
/*                     </div>*/
/*                 </div>*/
/* 				<!-- /Main menu -->*/
/*             </header>*/
/* 			<!-- Revolution slider -->*/
/* 			<section class="slider_wrap slider_fullwide slider_engine_revo slider_alias_education_home_slider">*/
/*                 <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container">                    */
/*                     <div id="rev_slider_1_1" class="rev_slider fullwidthabanner disp_none height_630 max-height_630">*/
/*                         <ul>*/
/*                             <!-- Slide 1 -->*/
/*                             <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">*/
/*                                 <img src="{{ asset('images/green.jpg') }}" alt="green" data-bgposition="center top" data-bgfit="normal" data-bgrepeat="repeat">*/
/*                                 <div class="tp-caption customin stl cust-z-index-5 rs-cust-style8" data-x="20" data-y="230" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:20;transformOrigin:50% 100%;" data-speed="1300" data-start="500" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8250" data-endspeed="300">*/
/* 									<img src="{{ asset('images/slide-1-1.png') }}" alt="">*/
/*                                 </div>*/
/*                                  <div class="tp-caption title sfr stl tp-resizeme cust-z-index-6 rs-cust-style1" data-x="570" data-y="190" data-speed="500" data-start="1350" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8400" data-endspeed="300">Take great courses from the world's best universities*/
/*                                 </div>*/
/*                                 <div class="tp-caption slide_text sfr stl tp-resizeme cust-z-index-7 rs-cust-style2" data-x="570" data-y="380" data-speed="500" data-start="1750" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8500" data-endspeed="300">*/
/* 									<span class="font-w_400">Our courses are built in partnership with technology leaders and are relevant to industry needs.</span>*/
/*                                 </div>*/
/*                                 <div class="tp-caption slide_button customin stl tp-resizeme cust-z-index-8 rs-cust-style3" data-x="570" data-y="460" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:-20;transformOrigin:50% 0%;" data-speed="500" data-start="2200" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8600" data-endspeed="300">*/
/* 									<a href="#" class="slide_button_white">Start Learning Now</a>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <!-- Slide 2 -->*/
/*                             <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">*/
/*                                 <img src="{{ asset('images/blue.jpg') }}" alt="blue" data-bgposition="center top" data-bgfit="normal" data-bgrepeat="repeat">*/
/*                                 <div class="tp-caption customin stl cust-z-index-5 rs-cust-style8" data-x="40" data-y="200" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:360;scaleX:0.1;scaleY:0.1;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;" data-speed="1300" data-start="500" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8250" data-endspeed="300">*/
/* 									<img src="{{ asset('images/slide-2-1.png') }}" alt="">*/
/*                                 </div>*/
/*                                 <div class="tp-caption title sfb stb tp-resizeme cust-z-index-6 rs-cust-style1" data-x="570" data-y="200" data-speed="500" data-start="1350" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8400" data-endspeed="300">Education Center*/
/*                                     <br> and distance education*/
/*                                 </div>*/
/*                                 <div class="tp-caption slide_text sfb stb tp-resizeme cust-z-index-7 rs-cust-style2" data-x="570" data-y="355" data-speed="500" data-start="1750" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8500" data-endspeed="300">*/
/* 									<span class="font-w_400">Online Education leads the world in distance education with high quality online degrees and online courses.</span>*/
/*                                 </div>*/
/*                                 <div class="tp-caption slide_button customin stb tp-resizeme cust-z-index-8 rs-cust-style3" data-x="570" data-y="460" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:20;transformOrigin:50% 100%;" data-speed="500" data-start="2200" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8600" data-endspeed="300">*/
/* 									<a href="#" class="slide_button_white">Start Learning Now</a>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <!-- Slide 3 -->*/
/*                             <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">*/
/*                                 <img src="{{ asset('images/yellow.jpg') }}" alt="yellow" data-bgposition="center top" data-bgfit="normal" data-bgrepeat="repeat">*/
/*                                 <div class="tp-caption roundedimage sfl stl cust-z-index-5 rs-cust-style8" data-x="50" data-y="200" data-speed="1300" data-start="500" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8250" data-endspeed="300">*/
/* 									<img src="{{ asset('images/slide-3-1.jpg') }}" alt="">*/
/*                                 </div>*/
/*                                 <div class="tp-caption title customin stb tp-resizeme cust-z-index-6 rs-cust-style1" data-x="570" data-y="200" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:20;transformOrigin:50% 100%;" data-speed="500" data-start="1350" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8400" data-endspeed="300">Receive personalized*/
/*                                     <br> coaching*/
/*                                 </div>*/
/*                                 <div class="tp-caption slide_text customin stb tp-resizeme cust-z-index-7 rs-cust-style2" data-x="570" data-y="355" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:20;transformOrigin:50% 100%;" data-speed="500" data-start="1750" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8500" data-endspeed="300" >*/
/* 									<span class="font-w_400">Learning is a collaborative process, and we're here to provide you with guidance every step of the way.</span>*/
/*                                 </div>*/
/*                                 <div class="tp-caption slide_button customin stb tp-resizeme cust-z-index-8 rs-cust-style3" data-x="570" data-y="460" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:20;transformOrigin:50% 100%;" data-speed="500" data-start="2200" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8600" data-endspeed="300">*/
/* 									<a href="#" class="slide_button_white">Start Learning Now</a>*/
/*                                 </div>*/
/*                             </li>*/
/*                         </ul>*/
/*                         <div class="tp-bannertimer"></div>*/
/*                     </div>*/
/* 				</div>*/
/*             </section>*/
/* 			<!-- Revolution slider -->*/
/* 			<!-- Content -->*/
/*             <div class="page_content_wrap">*/
/*                 <div class="content">*/
/*                     <article class="post_item post_item_single page">*/
/* 						<section class="post_content">*/
/* 							<!-- Features section -->*/
/* 							<div class="sc_section" data-animation="animated zoomIn normal">*/
/* 								<div class="sc_content content_wrap margin_top_3em_imp margin_bottom_3em_imp sc_features_st1">*/
/* 									<div class="columns_wrap sc_columns columns_fluid sc_columns_count_3">*/
/* 										<div class="column-1_3 sc_column_item sc_column_item_1 odd first text_center">*/
/* 											<a href="#" class="sc_icon icon-woman-2 sc_icon_bg_menu menu_dark_color font_5em lh_1em"></a>*/
/* 											<div class="sc_section font-w_400 margin_top_1em_imp">*/
/* 												<p>*/
/* 													<a class="menu_color" href="#">Take computer science courses<br />*/
/* 													with personalized support</a>*/
/* 												</p>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="column-1_3 sc_column_item sc_column_item_2 even text_center">*/
/* 											<a href="#" class="sc_icon icon-rocket-2 sc_icon_bg_menu menu_dark_color font_5em lh_1em"></a>*/
/* 											<div class="sc_section font-w_400 margin_top_1em_imp">*/
/* 												<p>*/
/* 													<a class="menu_color" href="#">Build cool projects<br />*/
/* 													to showcase your skills</a>*/
/* 												</p>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="column-1_3 sc_column_item sc_column_item_3 odd text_center">*/
/* 											<a href="#" class="sc_icon icon-world-2 sc_icon_bg_menu menu_dark_color font_5em lh_1em"></a>*/
/* 											<div class="sc_section font-w_400 margin_top_1em_imp">*/
/* 												<p>*/
/* 													<a class="menu_color" href="#">Earn certificates<br />*/
/* 													recognized by Industry</a>*/
/* 												</p>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<!-- /Features section -->			*/
/* 							<!-- Courses section -->*/
/* 							<div class="sc_section accent_top bg_tint_light sc_bg1" data-animation="animated fadeInUp normal">*/
/* 								<div class="sc_section_overlay">*/
/* 									<div class="sc_section_content">*/
/* 										<div class="sc_content content_wrap margin_top_2_5em_imp margin_bottom_2_5em_imp">*/
/* 											<h2 class="sc_title sc_title_regular sc_align_center margin_top_0 margin_bottom_085em text_center">Courses Starting Soon</h2>*/
/* 											<div class="sc_blogger layout_courses_3 template_portfolio sc_blogger_horizontal no_description">*/
/* 												<div class="isotope_wrap" data-columns="3">*/
/* 													<!-- Courses item -->*/
/* 													<div class="isotope_item isotope_item_courses isotope_column_3">*/
/* 														<div class="post_item post_item_courses odd">*/
/* 															<div class="post_content isotope_item_content ih-item colored square effect_dir left_to_right">*/
/* 																<div class="post_featured img">*/
/* 																	<a href="">*/
/* 																		<img alt="Principles of Written English, Part 2" src="{{ asset('images/masonry_15-400x400.jpg') }}">*/
/* 																	</a>*/
/* 																	<h4 class="post_title">*/
/* 																		<a href="">Principles of Written English, Part 2</a>*/
/* 																	</h4>*/
/* 																	<div class="post_descr">*/
/* 																		<div class="post_price">*/
/* 																			<span class="post_price_value">$85</span>*/
/* 																			<span class="post_price_period">monthly</span>*/
/* 																		</div>*/
/* 																		<div class="post_category">*/
/* 																			<a href="">Language</a>*/
/* 																		</div>*/
/* 																	</div>*/
/* 																</div>*/
/* 																<div class="post_info_wrap info">*/
/* 																	<div class="info-back">*/
/* 																		<h4 class="post_title">*/
/* 																			<a href="">Principles of Written English, Part 2</a>*/
/* 																		</h4>*/
/* 																		<div class="post_descr">*/
/* 																			<p>*/
/* 																				<a href="">Nam id leo massa. Cras at condimentum nisi, vulputate ultrices turpis.</a>*/
/* 																			</p>*/
/* 																			<div class="post_buttons">*/
/* 																				<div class="post_button">*/
/* 																					<a href="" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">LEARN MORE</a>*/
/* 																				</div>*/
/* 																				<div class="post_button">*/
/* 																					<a href="" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">BUY NOW</a>*/
/* 																				</div>*/
/* 																			</div>*/
/* 																		</div>*/
/* 																	</div>*/
/* 																</div>*/
/* 															</div>*/
/* 														</div>*/
/* 													</div>*/
/* 													<!-- /Courses item -->*/
/* 													<!-- Courses item -->*/
/* 													<div class="isotope_item isotope_item_courses isotope_column_3">*/
/* 														<div class="post_item post_item_courses even">*/
/* 															<div class="post_content isotope_item_content ih-item colored square effect_dir left_to_right">*/
/* 																<div class="post_featured img">*/
/* 																	<a href="">*/
/* 																		<img alt="Entrepreneurship 101: Who is your customer?" src="{{ asset('images/masonry_06-400x400.jpg') }}">*/
/* 																	</a>*/
/* 																	<h4 class="post_title">*/
/* 																		<a href="">Entrepreneurship 101: Who is your customer?</a>*/
/* 																	</h4>*/
/* 																	<div class="post_descr">*/
/* 																		<div class="post_price">*/
/* 																			<span class="post_price_value">$195</span><span class="post_price_period">monthly</span>*/
/* 																		</div>*/
/* 																		<div class="post_category">*/
/* 																			<a href="">Marketing</a>*/
/* 																		</div>*/
/* 																	</div>*/
/* 																</div>*/
/* 																<div class="post_info_wrap info">*/
/* 																	<div class="info-back">*/
/* 																		<h4 class="post_title">*/
/* 																			<a href="">Entrepreneurship 101:  Who is your customer?</a>*/
/* 																		</h4>*/
/* 																		<div class="post_descr">*/
/* 																			<p>*/
/* 																				<a href="">Quisque a nulla eget ante vestibulum lacinia eu quis massa.</a>*/
/* 																			</p>*/
/* 																			<div class="post_buttons">*/
/* 																				<div class="post_button">*/
/* 																					<a href="" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">LEARN MORE</a>*/
/* 																				</div>*/
/* 																				<div class="post_button">*/
/* 																					<a href="" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">BUY NOW</a>*/
/* 																				</div>*/
/* 																			</div>*/
/* 																		</div>*/
/* 																	</div>*/
/* 																</div>*/
/* 															</div>*/
/* 														</div>*/
/* 													</div>*/
/* 													<!-- /Courses item -->*/
/* 													<!-- Courses item -->*/
/* 													<div class="isotope_item isotope_item_courses isotope_column_3">*/
/* 														<div class="post_item post_item_courses odd">*/
/* 															<div class="post_content isotope_item_content ih-item colored square effect_dir left_to_right">*/
/* 																<div class="post_featured img">*/
/* 																	<a href="">*/
/* 																		<img alt="Evaluating Social  Programs" src="{{ asset('images/masonry_04-400x400.jpg') }}">*/
/* 																	</a>*/
/* 																	<h4 class="post_title">*/
/* 																		<a href="#">Evaluating Social Programs</a>*/
/* 																	</h4>*/
/* 																	<div class="post_descr">*/
/* 																		<div class="post_price">*/
/* 																			<span class="post_price_value">Free!</span>*/
/* 																		</div>*/
/* 																		<div class="post_category">*/
/* 																			<a href="">Social</a>*/
/* 																		</div>*/
/* 																	</div>*/
/* 																</div>*/
/* 																<div class="post_info_wrap info">*/
/* 																	<div class="info-back">*/
/* 																		<h4 class="post_title">*/
/* 																			<a href="">Evaluating Social  Programs</a>*/
/* 																		</h4>*/
/* 																		<div class="post_descr">*/
/* 																			<p>*/
/* 																				<a href="#">Nunc finibus vestibulum dui a fringilla. Maecenas maximus in massa sit amet maximus.</a>*/
/* 																			</p>*/
/* 																			<div class="post_buttons">*/
/* 																				<div class="post_button">*/
/* 																					<a href="" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">LEARN MORE</a>*/
/* 																				</div>*/
/* 																			</div>*/
/* 																		</div>*/
/* 																	</div>*/
/* 																</div>*/
/* 															</div>*/
/* 														</div>*/
/* 													</div>*/
/* 													<!-- /Courses item -->*/
/* 													<!-- Courses item -->*/
/* 													<div class="isotope_item isotope_item_courses isotope_column_3">*/
/* 														<div class="post_item post_item_courses even">*/
/* 															<div class="post_content isotope_item_content ih-item colored square effect_dir left_to_right">*/
/* 																<div class="post_featured img">*/
/* 																	<a href="">*/
/* 																		<img alt="Principles of Written English, Part 1" src="{{ asset('images/masonry_05-400x400.jpg') }}">*/
/* 																	</a>*/
/* 																	<h4 class="post_title">*/
/* 																		<a href="#">Principles of Written English, Part 1</a>*/
/* 																	</h4>*/
/* 																	<div class="post_descr">*/
/* 																		<div class="post_price">*/
/* 																			<span class="post_price_value">$85</span>*/
/* 																		</div>*/
/* 																		<div class="post_category">*/
/* 																			<a href="">Language</a>*/
/* 																		</div>*/
/* 																	</div>*/
/* 																</div>*/
/* 																<div class="post_info_wrap info">*/
/* 																	<div class="info-back">*/
/* 																		<h4 class="post_title">*/
/* 																			<a href="">Principles of Written English, Part 1</a>*/
/* 																		</h4>*/
/* 																		<div class="post_descr">*/
/* 																			<p>*/
/* 																				<a href="">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</a>*/
/* 																			</p>*/
/* 																			<div class="post_buttons">*/
/* 																				<div class="post_button">*/
/* 																					<a href="" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">LEARN MORE</a>*/
/* 																				</div>*/
/* 																				<div class="post_button">*/
/* 																					<a href="" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">BUY NOW</a>*/
/* 																				</div>*/
/* 																			</div>*/
/* 																		</div>*/
/* 																	</div>*/
/* 																</div>*/
/* 															</div>*/
/* 														</div>*/
/* 													</div>*/
/* 													<!-- /Courses item -->*/
/* 													<!-- Courses item -->*/
/* 													<div class="isotope_item isotope_item_courses isotope_column_3">*/
/* 														<div class="post_item post_item_courses odd">*/
/* 															<div class="post_content isotope_item_content ih-item colored square effect_dir left_to_right">*/
/* 																<div class="post_featured img">*/
/* 																	<a href="">*/
/* 																		<img alt="Introduction to Biomedical Imaging" src="{{ asset('images/masonry_03-400x400.jpg') }}"></a>*/
/* 																	<h4 class="post_title">*/
/* 																		<a href="">Introduction to Biomedical Imaging</a>*/
/* 																	</h4>*/
/* 																	<div class="post_descr">*/
/* 																		<div class="post_price">*/
/* 																			<span class="post_price_value">$400</span>*/
/* 																		</div>*/
/* 																		<div class="post_category">*/
/* 																			<a href="">Medicine</a>*/
/* 																		</div>*/
/* 																	</div>*/
/* 																</div>*/
/* 																<div class="post_info_wrap info">*/
/* 																	<div class="info-back">*/
/* 																		<h4 class="post_title">*/
/* 																			<a href="">Introduction to Biomedical Imaging</a>*/
/* 																		</h4>*/
/* 																		<div class="post_descr">*/
/* 																			<p><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></p>*/
/* 																			<div class="post_buttons">*/
/* 																				<div class="post_button">*/
/* 																					<a href="" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">LEARN MORE</a>*/
/* 																				</div>*/
/* 																				<div class="post_button">*/
/* 																					<a href="" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">BUY NOW</a>*/
/* 																				</div>*/
/* 																			</div>*/
/* 																		</div>*/
/* 																	</div>*/
/* 																</div>*/
/* 															</div>*/
/* 														</div>*/
/* 													</div>*/
/* 													<!-- /Courses item -->*/
/* 													<!-- Courses item -->*/
/* 													<div class="isotope_item isotope_item_courses isotope_column_3">*/
/* 														<div class="post_item post_item_courses even last">*/
/* 															<div class="post_content isotope_item_content ih-item colored square effect_dir left_to_right">*/
/* 																<div class="post_featured img">*/
/* 																	<a href="">*/
/* 																		<img alt="Introduction to Computer  Science" src="{{ asset('images/masonry_02-400x400.jpg') }}">*/
/* 																	</a>*/
/* 																	<h4 class="post_title">*/
/* 																		<a href="">Introduction to Computer  Science</a>*/
/* 																	</h4>*/
/* 																	<div class="post_descr">*/
/* 																		<div class="post_price">*/
/* 																			<span class="post_price_value">$120</span>*/
/* 																			<span class="post_price_period">monthly</span>*/
/* 																		</div>*/
/* 																		<div class="post_category">*/
/* 																			<a href="">Computers</a>*/
/* 																		</div>*/
/* 																	</div>*/
/* 																</div>*/
/* 																<div class="post_info_wrap info">*/
/* 																	<div class="info-back">*/
/* 																		<h4 class="post_title">*/
/* 																			<a href="">Introduction to Computer  Science</a>*/
/* 																		</h4>*/
/* 																		<div class="post_descr">*/
/* 																			<p><a href="">Sed interdum felis diam, vitae rutrum urna laoreet vehicula.</a></p>*/
/* 																			<div class="post_buttons">*/
/* 																				<div class="post_button">*/
/* 																					<a href="" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">LEARN MORE</a>*/
/* 																				</div>*/
/* 																				<div class="post_button">*/
/* 																					<a href="" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">BUY NOW</a>*/
/* 																				</div>*/
/* 																			</div>*/
/* 																		</div>*/
/* 																	</div>*/
/* 																</div>*/
/* 															</div>*/
/* 														</div>*/
/* 													</div>*/
/* 													<!-- /Courses item -->*/
/* 												</div>*/
/* 											</div>*/
/* 											<a href="" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_menu sc_button_size_small aligncenter sc_button_iconed icon-graduation margin_top_1em margin_bottom_4 widht_12em">VIEW ALL COURSES</a>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<!-- /Courses section -->*/
/* 							<!-- Partners section -->*/
/* 							<div class="sc_section" data-animation="animated fadeInUp normal">*/
/* 								<div class="sc_content content_wrap margin_top_2_5em_imp margin_bottom_2_5em_imp">*/
/* 									<div class="sc_section aligncenter width_70per">*/
/* 										<h2 class="sc_title sc_title_regular margin_top_0">Learn From the Best</h2>*/
/* 										<p>Our online courses are built in partnership with technology leaders and are relevant to industry needs.*/
/* 											<br /> Upon completing a Online course, you&#8217;ll receive a verified completion certificate recognized by industry leaders.*/
/* 										</p>*/
/* 									</div>*/
/* 									<div id="sc_section_4" class="sc_section margin_top_1_5em_imp margin_bottom_0_imp height_75">*/
/* 										<div id="sc_section_4_scroll" class="sc_scroll sc_scroll_horizontal swiper-slider-container scroll-container height_75">*/
/* 											<div class="sc_scroll_wrapper swiper-wrapper">*/
/* 												<div class="sc_scroll_slide swiper-slide">*/
/* 													<figure class="sc_image  alignleft sc_image_shape_square margin_right_0_imp">*/
/* 														<img src="{{ asset('images/partners_01_bw.jpg') }}" alt="" />*/
/* 													</figure>*/
/* 													<figure class="sc_image  alignleft sc_image_shape_square margin_right_0_imp margin_left_4em_imp">*/
/* 														<img src="{{ asset('images/partners_02_bw.jpg') }}" alt="" />*/
/* 													</figure>*/
/* 													<figure class="sc_image  alignleft sc_image_shape_square margin_right_0_imp margin_left_4em_imp">*/
/* 														<img src="{{ asset('images/partners_03_bw.jpg') }}" alt="" />*/
/* 													</figure>*/
/* 													<figure class="sc_image  alignleft sc_image_shape_square margin_right_0_imp margin_left_4em_imp">*/
/* 														<img src="{{ asset('images/partners_04_bw.jpg')}}" alt="" />*/
/* 													</figure>*/
/* 													<figure class="sc_image  alignleft sc_image_shape_square margin_right_0_imp margin_left_4em_imp">*/
/* 														<img src="{{ asset('images/partners_05_bw.jpg') }}" alt="" />*/
/* 													</figure>*/
/* 													<figure class="sc_image  alignleft sc_image_shape_square margin_right_0_imp margin_left_4em_imp">*/
/* 														<img src="{{ asset('images/partners_06_bw.jpg') }}" alt="" />*/
/* 													</figure>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div id="sc_section_4_scroll_bar" class="sc_scroll_bar sc_scroll_bar_horizontal sc_section_471175375_scroll_bar"></div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<!-- /Partners section -->*/
/* 							<!-- Video training section -->			*/
/* 							<div class="sc_line sc_line_style_solid margin_top_0 margin_bottom_0"></div>*/
/* 							<div class="sc_section" data-animation="animated fadeInUp normal">*/
/* 								<div class="sc_content content_wrap margin_top_2_5em_imp margin_bottom_2_5em_imp ">*/
/* 									<div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2">*/
/* 										<div class="column-1_2 sc_column_item sc_column_item_1 odd first res_width_100per_imp">*/
/* 											<h3 class="sc_title sc_title_iconed sc_align_left text_left">*/
/* 												<span class="sc_title_icon sc_title_icon_top sc_title_icon_medium icon-video-2"></span>*/
/* 												Our Video Training for Microsoft products and technologies*/
/* 											</h3>*/
/* 											<p>Mauris vitae quam ligula. In tincidunt sapien sed nibh scelerisque congue. Maecenas ut libero eu metus tincidunt lobortis. Duis accumsan at mauris vel lacinia.</p>*/
/* 											<a href="" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_mini sc_button_iconed inherit margin_top_1em margin_bottom_4 margin_left_4">BROWSE COURSES</a>*/
/* 										</div>*/
/* 										<div class="column-1_2 sc_column_item sc_column_item_2 even res_width_100per_imp">*/
/* 											<div class="sc_video_player sc_video_bordered sc_video_st1">*/
/* 												<div class="sc_video_frame sc_video_play_button hover_icon hover_icon_play width_100per" data-width="100%" data-height="647" data-video="&lt;iframe class=&quot;video_frame&quot; src=_http_/youtube.com/embed/636Dp8eHWnM5782.html?autoplay=1%22 width=&quot;100%&quot; height=&quot;647&quot; frameborder=&quot;0&quot; webkitAllowFullScreen=&quot;webkitAllowFullScreen&quot; mozallowfullscreen=&quot;mozallowfullscreen&quot; allowFullScreen=&quot;allowFullScreen&quot;&gt;&lt;/iframe&gt;">*/
/* 													<img alt="" src="{{ asset('images/douglas_adams_full-400x225.jpg') }}">*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<!-- /Video training section -->						*/
/* 							<!-- Pricing section -->*/
/* 							<div class="sc_section accent_top bg_tint_light sc_bg1" data-animation="animated fadeInUp normal">*/
/* 								<div class="sc_section_overlay">*/
/* 									<div class="sc_section_content">*/
/* 										<div class="sc_content content_wrap margin_top_2_5em_imp margin_bottom_2_5em_imp">*/
/* 											<h2 class="sc_title sc_title_regular sc_align_center text_center margin_top_0 margin_bottom_085em">Plans &amp; Pricing</h2>*/
/* 											<div class="columns_wrap sc_columns columns_nofluid sc_columns_count_3">*/
/* 												<div class="column-1_3 sc_column_item sc_column_item_1 odd first text_center">*/
/* 													<div class="sc_price_block sc_price_block_style_1 width_100per">*/
/* 														<div class="sc_price_block_title">Trial</div>*/
/* 														<div class="sc_price_block_money">*/
/* 															<div class="sc_price_block_icon icon-clock-2"></div>*/
/* 														</div>*/
/* 														<div class="sc_price_block_description">*/
/* 															<span class="sc_highlight font_2_57em lh_1em"><b>Free!</b> 30 Days</span>*/
/* 														</div>*/
/* 														<div class="sc_price_block_link">*/
/* 															<a href="" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">I WANT THIS PLAN</a>*/
/* 														</div>*/
/* 													</div>*/
/* 												</div>*/
/* 												<div class="column-1_3 sc_column_item sc_column_item_2 even text_center">*/
/* 													<div class="sc_price_block sc_price_block_style_2">*/
/* 														<div class="sc_price_block_title">Monthly</div>*/
/* 														<div class="sc_price_block_money">*/
/* 															<div class="sc_price"><span class="sc_price_currency">$</span><span class="sc_price_money">89</span></div>*/
/* 														</div>*/
/* 														<div class="sc_price_block_description">*/
/* 															<p><b>Save $98</b> every year compared to the monthly*/
/* 																<br /> plan by paying yearly.</p>*/
/* 														</div>*/
/* 														<div class="sc_price_block_link">*/
/* 															<a href="" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">I WANT THIS PLAN</a>*/
/* 														</div>*/
/* 													</div>*/
/* 												</div>*/
/* 												<div class="column-1_3 sc_column_item sc_column_item_3 odd text_center">*/
/* 													<div class="sc_price_block sc_price_block_style_3">*/
/* 														<div class="sc_price_block_title">Yearly</div>*/
/* 														<div class="sc_price_block_money">*/
/* 															<div class="sc_price">*/
/* 																<span class="sc_price_currency">$</span>*/
/* 																<span class="sc_price_money">129</span>*/
/* 															</div>*/
/* 														</div>*/
/* 														<div class="sc_price_block_description">*/
/* 															<p><b>Save $120</b> every year compared to the monthly*/
/* 																<br /> plan by paying biannually.</p>*/
/* 														</div>*/
/* 														<div class="sc_price_block_link">*/
/* 															<a href="" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">I WANT THIS PLAN</a>*/
/* 														</div>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<!-- /Pricing section -->*/
/*                         </section>*/
/*                     </article>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- /Content without sidebar -->*/
/* 			<!-- Widgets Footer -->*/
/* 			<footer class="footer_wrap bg_tint_light footer_style_white widget_area">*/
/*                 <div class="content_wrap">*/
/*                     <div class="columns_wrap">*/
/* 						<!-- Calendar widget -->*/
/*                         <aside class="column-1_3 widget widget_calendar">*/
/*                             <h5 class="widget_title">Calendar</h5>*/
/*                             <table>*/
/*                                 <thead>*/
/*                                       <tr>*/
/*                                             <th class="month_prev">*/
/*                                                 <a href="#" data-type="post,courses,tribe_events" data-year="2015" data-month="01" title="View posts for January 2015"></a>*/
/*                                             </th>*/
/*                                             <th class="month_cur" colspan="5">September <span>2015</span></th>*/
/*                                             <th class="month_next"> */
/* 												<a href="#" data-month="10" data-year="2015" data-type="post,courses,tribe_events" title="View posts for October 2015"></a>*/
/* 											</th>*/
/*                                         </tr>*/
/*                                     <tr>*/
/*                                         <th class="weekday" scope="col" title="Monday">Mon</th>*/
/*                                         <th class="weekday" scope="col" title="Tuesday">Tue</th>*/
/*                                         <th class="weekday" scope="col" title="Wednesday">Wed</th>*/
/*                                         <th class="weekday" scope="col" title="Thursday">Thu</th>*/
/*                                         <th class="weekday" scope="col" title="Friday">Fri</th>*/
/*                                         <th class="weekday" scope="col" title="Saturday">Sat</th>*/
/*                                         <th class="weekday" scope="col" title="Sunday">Sun</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                     <tr>*/
/*                                         <td colspan="1" class="pad"><span class="day_wrap">&nbsp;</span></td>*/
/*                                         <td class="day"><span class="day_wrap">1</span></td>*/
/*                                         <td class="day"><span class="day_wrap">2</span></td>*/
/*                                         <td class="day"><span class="day_wrap">3</span></td>*/
/*                                         <td class="day"><span class="day_wrap">4</span></td>*/
/*                                         <td class="day"><span class="day_wrap">5</span></td>*/
/*                                         <td class="day"><span class="day_wrap">6</span></td>*/
/*                                     </tr>*/
/*                                     <tr>*/
/*                                         <td class="day"><span class="day_wrap">7</span></td>*/
/*                                         <td class="day"><span class="day_wrap">8</span></td>*/
/*                                         <td class="day"><span class="day_wrap">9</span></td>*/
/*                                         <td class="day"><a class="day_wrap" title="Post" href="#">10</a></td>*/
/*                                         <td class="day"><span class="day_wrap">11</span></td>*/
/*                                         <td class="day"><span class="day_wrap">12</span></td>*/
/*                                         <td class="day"><span class="day_wrap">13</span></td>*/
/*                                     </tr>*/
/*                                     <tr>*/
/*                                         <td class="day"><span class="day_wrap">14</span></td>*/
/*                                         <td class="day"><span class="day_wrap">15</span></td>*/
/*                                         <td class="day"><span class="day_wrap">16</span></td>*/
/*                                         <td class="day"><span class="day_wrap">17</span></td>*/
/*                                         <td class="day"><a class="day_wrap" title="Post" href="#">18</a></td>*/
/*                                         <td class="day"><span class="day_wrap">19</span></td>*/
/*                                         <td class="day"><span class="day_wrap">20</span></td>*/
/*                                     </tr>*/
/*                                     <tr>*/
/*                                         <td class="today"><span class="day_wrap">21</span></td>*/
/*                                         <td class="day"><span class="day_wrap">22</span></td>*/
/*                                         <td class="day"><span class="day_wrap">23</span></td>*/
/*                                         <td class="day"><span class="day_wrap">24</span></td>*/
/*                                         <td class="day"><span class="day_wrap">25</span></td>*/
/*                                         <td class="day"><span class="day_wrap">26</span></td>*/
/*                                         <td class="day"><span class="day_wrap">27</span></td>*/
/*                                     </tr>*/
/*                                     <tr>*/
/*                                         <td class="day"><span class="day_wrap">28</span></td>*/
/*                                         <td class="day"><span class="day_wrap">29</span></td>*/
/*                                         <td class="day"><span class="day_wrap">30</span></td>*/
/*                                         <td class="pad" colspan="4"><span class="day_wrap">&nbsp;</span></td>*/
/*                                     </tr>*/
/*                                 </tbody>*/
/*                             </table>*/
/*                         </aside>*/
/*                                                 {% block login %}*/
/*                                                     {% endblock %}*/
/* 						<!-- /Calendar widget -->*/
/* 						<!-- Popular courses widget -->*/
/* 						<aside class="column-1_3 widget">*/
/*                             <h5 class="widget_title">Popular Courses</h5>*/
/*                             <article class="post_item with_thumb first">*/
/*                                 <div class="post_thumb">*/
/* 									<img alt="Principles of Written English, Part 1" src="{{ asset('images/masonry_05-75x75.jpg') }}"></div>*/
/*                                 <div class="post_content">*/
/*                                     <h6 class="post_title">*/
/* 										<a href="">Principles of Written English, Part 1</a>*/
/* 									</h6>*/
/*                                     <div class="post_info"><span class="post_info_item post_info_posted">*/
/* 										<a href="" class="post_info_date">December 24, 2014</a></span>*/
/* 										<span class="post_info_item post_info_posted_by">by */
/* 											<a href="#" class="post_info_author">John Doe</a>*/
/* 										</span>*/
/* 										<span class="post_info_item post_info_counters">*/
/* 											<a href="" class="post_counters_item post_counters_rating icon-star-1">*/
/* 												<span class="post_counters_number">86.8</span>*/
/* 											</a>*/
/*                                         </span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </article>*/
/*                             <article class="post_item with_thumb">*/
/*                                 <div class="post_thumb">*/
/* 									<img alt="Medical Chemistry: The  Molecular Basis&#8230;" src="{{ asset('images/masonry_01-75x75.jpg') }}">*/
/* 								</div>*/
/*                                 <div class="post_content">*/
/*                                     <h6 class="post_title">*/
/* 										<a href="">Medical Chemistry: The  Molecular Basis...</a>*/
/* 									</h6>*/
/*                                     <div class="post_info">*/
/* 										<span class="post_info_item post_info_posted">*/
/* 											<a href="" class="post_info_date">March 8, 2015</a>*/
/* 										</span>*/
/* 										<span class="post_info_item post_info_posted_by">by */
/* 											<a href="#" class="post_info_author">John Doe</a>*/
/* 										</span>*/
/* 										<span class="post_info_item post_info_counters">*/
/* 											<a href="" class="post_counters_item post_counters_rating icon-star-1">*/
/* 												<span class="post_counters_number">83.8</span>*/
/* 											</a>*/
/*                                         </span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </article>*/
/*                             <article class="post_item with_thumb">*/
/*                                 <div class="post_thumb">*/
/* 									<img alt="Entrepreneurship 101:  Who is your customer?" src="{{ asset('images/masonry_06-75x75.jpg') }}">*/
/* 								</div>*/
/*                                 <div class="post_content">*/
/*                                     <h6 class="post_title">*/
/* 										<a href="">Entrepreneurship 101:  Who is your customer?</a>*/
/* 									</h6>*/
/*                                     <div class="post_info">*/
/* 										<span class="post_info_item post_info_posted">*/
/* 											<a href="" class="post_info_date">February 27, 2015</a>*/
/* 										</span>*/
/* 										<span class="post_info_item post_info_posted_by">by */
/* 											<a href="#" class="post_info_author">John Doe</a>*/
/* 										</span>*/
/* 										<span class="post_info_item post_info_counters">*/
/* 											<a href="" class="post_counters_item post_counters_rating icon-star-1">*/
/* 												<span class="post_counters_number">76.3</span>*/
/* 											</a>*/
/*                                         </span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </article>*/
/*                             <article class="post_item with_thumb">*/
/*                                 <div class="post_thumb">*/
/* 									<img alt="Introduction to Biomedical Imaging" src="{{ asset('images/masonry_03-75x75.jpg') }}">*/
/* 								</div>*/
/*                                 <div class="post_content">*/
/*                                     <h6 class="post_title">*/
/* 										<a href="">Introduction to Biomedical Imaging</a>*/
/* 									</h6>*/
/*                                     <div class="post_info">*/
/* 										<span class="post_info_item post_info_posted">*/
/* 											<a href="" class="post_info_date">January 1, 2016</a>*/
/* 										</span>*/
/* 										<span class="post_info_item post_info_posted_by">by */
/* 											<a href="#" class="post_info_author">John Doe</a>*/
/* 										</span>*/
/* 										<span class="post_info_item post_info_counters">*/
/* 											<a href="paid-course.html" class="post_counters_item post_counters_rating icon-star-1">*/
/* 												<span class="post_counters_number">74.8</span>*/
/* 											</a>*/
/*                                         </span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </article>*/
/*                         </aside>*/
/* 						<!-- /Popular courses widget -->*/
/* 						<!-- Recent courses widget -->*/
/*                         <aside class="column-1_3 widget">*/
/*                             <h5 class="widget_title">Recent Courses</h5>*/
/*                             <article class="post_item with_thumb first">*/
/*                                 <div class="post_thumb">*/
/* 									<img alt="Principles of Written English, Part 2" src="{{ asset('images/masonry_15-75x75.jpg') }}">*/
/* 								</div>*/
/*                                 <div class="post_content">*/
/*                                     <h6 class="post_title">*/
/* 										<a href="">Principles of Written English, Part 2</a>*/
/* 									</h6>*/
/*                                     <div class="post_info">*/
/* 										<span class="post_info_item post_info_posted">*/
/* 											<a href="" class="post_info_date">February 10, 2015</a>*/
/* 										</span>*/
/* 										<span class="post_info_item post_info_posted_by">by */
/* 											<a href="#" class="post_info_author">John Doe</a>*/
/* 										</span>*/
/* 										<span class="post_info_item post_info_counters">*/
/* 											<a href="" class="post_counters_item post_counters_views icon-eye">*/
/* 												<span class="post_counters_number">749</span>*/
/* 											</a>*/
/*                                         </span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </article>*/
/*                             <article class="post_item with_thumb">*/
/*                                 <div class="post_thumb">*/
/* 									<img alt="Entrepreneurship 101:  Who is your customer?" src="{{ asset('images/masonry_06-75x75.jpg') }}">*/
/* 								</div>*/
/*                                 <div class="post_content">*/
/*                                     <h6 class="post_title">*/
/* 										<a href="">Entrepreneurship 101:  Who is your customer?</a>*/
/* 									</h6>*/
/*                                     <div class="post_info">*/
/* 										<span class="post_info_item post_info_posted">*/
/* 											<a href="" class="post_info_date">February 27, 2015</a>*/
/* 										</span>*/
/* 										<span class="post_info_item post_info_posted_by">by */
/* 											<a href="#" class="post_info_author">John Doe</a>*/
/* 										</span>*/
/* 										<span class="post_info_item post_info_counters">*/
/* 											<a href="" class="post_counters_item post_counters_views icon-eye">*/
/* 												<span class="post_counters_number">729</span>*/
/* 											</a>*/
/*                                         </span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </article>*/
/*                             <article class="post_item with_thumb">*/
/*                                 <div class="post_thumb">*/
/* 									<img alt="Evaluating Social  Programs" src="{{ asset('images/masonry_04-75x75.jpg') }}">*/
/* 								</div>*/
/*                                 <div class="post_content">*/
/*                                     <h6 class="post_title">*/
/* 										<a href="">Evaluating Social  Programs</a>*/
/* 									</h6>*/
/*                                     <div class="post_info">*/
/* 										<span class="post_info_item post_info_posted">*/
/* 											<a href="" class="post_info_date">January 1, 2015</a>*/
/* 										</span>*/
/* 										<span class="post_info_item post_info_posted_by">by */
/* 											<a href="#" class="post_info_author">John Doe</a>*/
/* 										</span>*/
/* 										<span class="post_info_item post_info_counters">*/
/* 											<a href="" class="post_counters_item post_counters_views icon-eye">*/
/* 												<span class="post_counters_number">1154</span>*/
/* 											</a>*/
/*                                         </span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </article>*/
/*                             <article class="post_item with_thumb">*/
/*                                 <div class="post_thumb">*/
/* 									<img alt="Principles of Written English, Part 1" src="{{ asset('images/masonry_05-75x75.jpg') }}">*/
/* 								</div>*/
/*                                 <div class="post_content">*/
/*                                     <h6 class="post_title">*/
/* 										<a href="">Principles of Written English, Part 1</a>*/
/* 									</h6>*/
/*                                     <div class="post_info">*/
/* 										<span class="post_info_item post_info_posted">*/
/* 											<a href="" class="post_info_date">December 24, 2014</a>*/
/* 										</span>*/
/* 										<span class="post_info_item post_info_posted_by">by */
/* 											<a href="#" class="post_info_author">John Doe</a>*/
/* 										</span>*/
/* 										<span class="post_info_item post_info_counters">*/
/* 											<a href="" class="post_counters_item post_counters_views icon-eye">*/
/* 												<span class="post_counters_number">253</span>*/
/* 											</a>*/
/*                                         </span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </article>*/
/*                         </aside>*/
/* 						<!-- /Recent courses widget -->*/
/*                     </div>*/
/*                 </div>*/
/*             </footer>*/
/* 			<!-- /Widgets Footer -->*/
/* 			<!-- Testimonials footer -->*/
/* 			<footer class="testimonials_wrap sc_section bg_tint_dark post_ts_bg3">*/
/*                 <div class="sc_section_overlay" data-bg_color="#1eaace" data-overlay="0">*/
/*                     <div class="content_wrap">*/
/* 						<!-- Testimonials section -->*/
/* 						<div class="sc_testimonials sc_slider_swiper swiper-slider-container sc_slider_nopagination sc_slider_controls sc_slider_height_fixed aligncenter height_12em width_100per" data-old-height="12em" data-interval="7000">*/
/* 							<div class="slides swiper-wrapper">*/
/* 								<div class="swiper-slide height_12em width_100per" data-style="width:100%;height:12em;">*/
/* 									<div class="sc_testimonial_item">*/
/* 										<div class="sc_testimonial_avatar">*/
/* 											<img alt="" src="{{ asset('images/masonry_07-70x70.jpg') }}"></div>*/
/* 										<div class="sc_testimonial_content">*/
/* 											<p>Best purchase i made in envato. Great Theme!</p>*/
/* 										</div>*/
/* 										<div class="sc_testimonial_author">*/
/* 											<a href="#">Sarah Jefferson</a>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="swiper-slide height_12em width_100per" data-style="width:100%;height:12em;">*/
/* 									<div class="sc_testimonial_item">*/
/* 										<div class="sc_testimonial_avatar">*/
/* 											<img alt="" src="{{ asset('images/avatar-4-70x70.jpg') }}"></div>*/
/* 										<div class="sc_testimonial_content">*/
/* 											<p>Thank you for all your help and assistance over the years with our products.*/
/* 												<br /> I would have no hesitation in recommending you to my clients.</p>*/
/* 										</div>*/
/* 										<div class="sc_testimonial_author">*/
/* 											<a href="#">David Anderson</a>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="swiper-slide height_12em width_100per" data-style="width:100%;height:12em;">*/
/* 									<div class="sc_testimonial_item">*/
/* 										<div class="sc_testimonial_content">*/
/* 											<div class="sc_number aligncenter margin_bottom_1_5em">*/
/* 												<span class="sc_number_item">4</span>*/
/* 												<span class="sc_number_item">0</span>*/
/* 												<span class="sc_number_item">0</span>*/
/* 											</div> */
/* 											faculty and staff teaching courses and discussing topics online*/
/* 										</div>*/
/* 										<div class="sc_testimonial_author">online Education</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="sc_slider_controls_wrap">*/
/* 								<a class="sc_slider_prev" href="#"></a>*/
/* 								<a class="sc_slider_next" href="#"></a>*/
/* 							</div>*/
/* 						</div>*/
/* 						<!-- /Testimonials section -->*/
/* 			        </div>*/
/*                 </div>*/
/*             </footer>*/
/* 			<!-- /Testimonials footer -->*/
/* 			<!-- Contacts Footer -->*/
/*             <footer class="contacts_wrap bg_tint_dark contacts_style_dark">*/
/*                 <div class="content_wrap">*/
/*                     <div class="logo">*/
/*                         <a href="">*/
/* 							<img src="{{ asset('images/logo_footer.png') }}" alt="">*/
/* 						</a>*/
/*                     </div>*/
/*                     <div class="contacts_address">*/
/*                         <address class="address_right">*/
/* 							Phone: 1.800.123.4567<br>*/
/* 							Fax: 1.800.123.4566*/
/* 						</address>*/
/*                         <address class="address_left">*/
/* 							San Francisco, CA 94102, US<br>	*/
/* 							1234 Some St*/
/* 						</address>*/
/*                     </div>*/
/*                     <div class="sc_socials sc_socials_size_big">*/
/*                         <div class="sc_socials_item">*/
/* 							<a href="#" target="_blank" class="social_icons social_facebook">*/
/* 								<span class="sc_socials_hover social_facebook"></span>*/
/* 							</a>*/
/* 						</div>*/
/*                         <div class="sc_socials_item">*/
/* 							<a href="#" target="_blank" class="social_icons social_pinterest">*/
/* 								<span class="sc_socials_hover social_pinterest"></span>*/
/* 							</a>*/
/* 						</div>*/
/*                         <div class="sc_socials_item">*/
/* 							<a href="#" target="_blank" class="social_icons social_twitter">*/
/* 								<span class="sc_socials_hover social_twitter"></span>*/
/* 							</a>*/
/* 						</div>*/
/*                         <div class="sc_socials_item">*/
/* 							<a href="#" target="_blank" class="social_icons social_gplus">*/
/* 								<span class="sc_socials_hover social_gplus"></span>*/
/* 							</a>*/
/* 						</div>*/
/*                         <div class="sc_socials_item">*/
/* 							<a href="#" target="_blank" class="social_icons social_rss">*/
/* 								<span class="sc_socials_hover social_rss"></span>*/
/* 							</a>*/
/* 						</div>*/
/*                         <div class="sc_socials_item">*/
/* 							<a href="#" target="_blank" class="social_icons social_dribbble">*/
/* 								<span class="sc_socials_hover social_dribbble"></span>*/
/* 							</a>*/
/* 						</div>*/
/*                     </div>*/
/*                 </div>*/
/*             </footer>*/
/*             <!-- /Contacts Footer -->*/
/* 			<!-- Copyright -->*/
/*             <div class="copyright_wrap">*/
/*                 <div class="content_wrap">*/
/*                     <p>© 2015 All Rights Reserved. <a href="#">Terms of use</a> and <a href="#">Privacy Policy</a></p>*/
/*                 </div>*/
/*             </div>*/
/* 			<!-- /Copyright -->*/
/*         </div>*/
/*     </div>*/
/*     <!-- /Body -->*/
/*     <a href="#" class="scroll_to_top icon-up-2" title="Scroll to top"></a>*/
/*     <div class="custom_html_section"></div>*/
/* 		*/
/* 	<script type="text/javascript" src="{{ asset('js/jquery/jquery.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/jquery/jquery-migrate.min.js') }}"></script>	*/
/* 	<script type="text/javascript" src="{{ asset('js/jquery/ui/core.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/jquery/ui/widget.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/jquery/ui/tabs.min.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('js/jquery/ui/accordion.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/jquery/ui/effect.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/jquery/ui/effect-fade.min.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('js/jquery/jquery.blockUI.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/jquery/jquery.cookie.min.js') }}"></script>*/
/* 	*/
/* 	<script type="text/javascript" src="{{ asset('js/global.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/core.utils.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/core.init.min.js') }}"></script>	*/
/*     <script type="text/javascript" src="{{ asset('js/shortcodes/shortcodes.min.js') }}"></script>	*/
/* 	*/
/*     <script type="text/javascript" src="{{ asset('js/rs-plugin/jquery.themepunch.tools.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/rs-plugin/jquery.themepunch.revolution.min.js') }}"></script> */
/* 	<script type="text/javascript" src="{{ asset('js/slider_init.js') }}"></script>*/
/* */
/*     <script type="text/javascript" src="{{ asset('js/superfish.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/jquery.slidemenu.min.js') }}"></script>*/
/* */
/*     <script type="text/javascript" src="{{ asset('js/mediaelement/mediaelement-and-player.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/mediaelement/wp-mediaelement.min.js') }}"></script>*/
/* */
/*     <script type="text/javascript" src="{{ asset('js/core.messages/core.messages.min.js') }}"></script>*/
/*     */
/* 	<script type="text/javascript" src="{{ asset('js/jquery.isotope.min.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('js/hover/jquery.hoverdir.min.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('js/prettyPhoto/jquery.prettyPhoto.min.js') }}"></script>		*/
/*     <script type="text/javascript" src="{{ asset('js/swiper/idangerous.swiper-2.7.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/swiper/idangerous.swiper.scrollbar-2.4.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/diagram/chart.min.js') }}"></script>*/
/* 	*/
/* 	<script type="text/javascript" src="{{ asset('js/core.customizer/front.customizer.min.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('js/skin.customizer.min.js') }}"></script>*/
/* */
/*    */
/* */
/* </body>*/
/* */
/* */
/* <!-- Mirrored from education-html.themerex.net/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Feb 2016 14:18:52 GMT -->*/
/* </html>*/
/* */
/* */
