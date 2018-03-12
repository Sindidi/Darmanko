<?php

/* ::template.html.twig */
class __TwigTemplate_a19d43ea5b86f14e1da689e56c8eeec8c1c1b05bea704318d62b7351c2184d96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1146a158c87fd9cb8a18adc48aff596d5ca3ebc5444fb108af7c555d94ef0f67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1146a158c87fd9cb8a18adc48aff596d5ca3ebc5444fb108af7c555d94ef0f67->enter($__internal_1146a158c87fd9cb8a18adc48aff596d5ca3ebc5444fb108af7c555d94ef0f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::template.html.twig"));

        $__internal_8128bd007df45a3f14b26318f6483a0df298922a4057766aeba84fd8cacda70b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8128bd007df45a3f14b26318f6483a0df298922a4057766aeba84fd8cacda70b->enter($__internal_8128bd007df45a3f14b26318f6483a0df298922a4057766aeba84fd8cacda70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::template.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]>\t\t\t<html class=\"ie ie8\"> <![endif]-->
<!--[if IE 9]>\t\t\t<html class=\"ie ie9\"> <![endif]-->
<!--[if gt IE 9]><!-->\t<html> <!--<![endif]-->
<head>

\t<!-- Meta -->
\t<meta charset=\"utf-8\">
\t<meta name=\"keywords\" content=\"HTML5 Template\" />
\t<meta name=\"description\" content=\"Multipress - Responsive Multipurpose HTML5 Template\">
\t<meta name=\"author\" content=\"\">

\t<title>SG-immobilier</title>

\t<!-- Mobile Meta -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

\t

\t<!-- Web Fonts  -->
\t<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/googleRobot.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'>
\t<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/googleOpen.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'>
\t<link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/googleArimo.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'>

\t<!-- Bootstrap core CSS -->
\t<link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t<link rel=\"shortcut icon\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/logo.png"), "html", null, true);
        echo "\">

\t<!-- FontAwesome icons CSS -->
\t<link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t<!-- Theme Styles CSS-->
\t<link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/accordion.css"), "html", null, true);
        echo "\">
\t<link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/owl-carousel/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/owl-carousel/owl.theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/rs-plugin/css/settings.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t<link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/flexslider/flexslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link rel=\"Stylesheet\" type=\"text/css\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/jquery_ui.css"), "html", null, true);
        echo "\" /> 
\t<link rel=\"Stylesheet\" type=\"text/css\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/superTabs.css"), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/isotope.css"), "html", null, true);
        echo "\">

\t";
        // line 44
        $this->displayBlock('css', $context, $blocks);
        // line 45
        echo "</head>
<body>
<div class=\"body\">

<!-- Header -->
<header>
   <div class=\"container\">
      <div class=\"col-md-12\">
         <!-- Logo -->
         <div class=\"col-md-2\">
            <h1 class=\"logo\"><a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/logo.png"), "html", null, true);
        echo "\" style=\"width: 100px;\"></a></h1>
         </div>
         
        <!-- Navmenu -->
         <div class=\"col-md-10\">
            <div id='topnav'>
               <ul class=\"top-menu\">
                  <li class='has-sub'>
                     <a href='";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list");
        echo "'><span>Accueil</span></a>
                  </li>
                  
                  <li class='has-sub'> <a href='";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("catalogue");
        echo "'><span>Biens</span></a>
                  </li>
                  <li class='has-sub'>
                     <a href='#'><span>Blog</span></a>
                     
                  </li>
                  <li class='has-sub-full'>
                     <a href='#'><span>A propos</span></a>
                              
                  </li>
                  <li class=\"has-sub\" class=\"dropdown-content\">
                     <a href='#'><span>Mon compte</span></a>
                  </li>
               </ul>
            </div>
         </div>
        
      </div>
   </div>
</header>
<!-- Header -->

";
        // line 88
        $this->displayBlock('content', $context, $blocks);
        // line 89
        echo "
<!-- Footer - Copyright -->
\t<div class=\"footer-bottom\">
\t\t<a class=\"back-top\" href=\"#\"><i class=\"fa fa-chevron-up\"></i></a>
\t\t<div class=\"container\">
\t\t\t<div class=\"row-fluid\">
\t\t\t\t
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<ul class=\"top-contact\">
\t\t\t\t\t\t<li><i class=\"fa fa-phone\"></i>78 1025004</li>
\t\t\t\t\t\t<li><i class=\"fa fa-envelope\"></i> gning.saliou96@gmail.com</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Footer - Copyright -->
</div>



<!-- JavaScript -->
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/rs-plugin/js/jquery.themepunch.plugins.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/rs-plugin/js/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/rs-plugin/rs.home.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/superTabs.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jsapi.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">google.load(\"jqueryui\", \"1.7.2\");</script> 
<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/flexslider/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/owl-carousel/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.akordeon.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jflickrfeed.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/tab.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.mobilemenu.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/magnific-popup/jquery.magnific-popup.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/main.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/select2.min.js"), "html", null, true);
        echo "\"></script>


";
        // line 132
        $this->displayBlock('javascript', $context, $blocks);
        // line 133
        echo "
</body>
</html>

";
        
        $__internal_1146a158c87fd9cb8a18adc48aff596d5ca3ebc5444fb108af7c555d94ef0f67->leave($__internal_1146a158c87fd9cb8a18adc48aff596d5ca3ebc5444fb108af7c555d94ef0f67_prof);

        
        $__internal_8128bd007df45a3f14b26318f6483a0df298922a4057766aeba84fd8cacda70b->leave($__internal_8128bd007df45a3f14b26318f6483a0df298922a4057766aeba84fd8cacda70b_prof);

    }

    // line 44
    public function block_css($context, array $blocks = array())
    {
        $__internal_5c79257b95057a77c1ab6368567c0b03aae7b19ba147628601b92c9cf06a1ecc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c79257b95057a77c1ab6368567c0b03aae7b19ba147628601b92c9cf06a1ecc->enter($__internal_5c79257b95057a77c1ab6368567c0b03aae7b19ba147628601b92c9cf06a1ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_dbfdeb5a0c0d13646a66d0baf8d30e77993eb113afe106ef7394b2078c87fd33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbfdeb5a0c0d13646a66d0baf8d30e77993eb113afe106ef7394b2078c87fd33->enter($__internal_dbfdeb5a0c0d13646a66d0baf8d30e77993eb113afe106ef7394b2078c87fd33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_dbfdeb5a0c0d13646a66d0baf8d30e77993eb113afe106ef7394b2078c87fd33->leave($__internal_dbfdeb5a0c0d13646a66d0baf8d30e77993eb113afe106ef7394b2078c87fd33_prof);

        
        $__internal_5c79257b95057a77c1ab6368567c0b03aae7b19ba147628601b92c9cf06a1ecc->leave($__internal_5c79257b95057a77c1ab6368567c0b03aae7b19ba147628601b92c9cf06a1ecc_prof);

    }

    // line 88
    public function block_content($context, array $blocks = array())
    {
        $__internal_362d8e7f834e86d70e66d984647903f1b1222e2dbf45783aa59340ee9270abd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_362d8e7f834e86d70e66d984647903f1b1222e2dbf45783aa59340ee9270abd0->enter($__internal_362d8e7f834e86d70e66d984647903f1b1222e2dbf45783aa59340ee9270abd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e6d1e42fe175de0e7f14b5c4efe67785c4c4447bb849a8648bff8845803c7f36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6d1e42fe175de0e7f14b5c4efe67785c4c4447bb849a8648bff8845803c7f36->enter($__internal_e6d1e42fe175de0e7f14b5c4efe67785c4c4447bb849a8648bff8845803c7f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_e6d1e42fe175de0e7f14b5c4efe67785c4c4447bb849a8648bff8845803c7f36->leave($__internal_e6d1e42fe175de0e7f14b5c4efe67785c4c4447bb849a8648bff8845803c7f36_prof);

        
        $__internal_362d8e7f834e86d70e66d984647903f1b1222e2dbf45783aa59340ee9270abd0->leave($__internal_362d8e7f834e86d70e66d984647903f1b1222e2dbf45783aa59340ee9270abd0_prof);

    }

    // line 132
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_3f3a52ad5a50027bf2965ee8c55ed9e610c8c754e6d3eb591dbcb8157cd2d32f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f3a52ad5a50027bf2965ee8c55ed9e610c8c754e6d3eb591dbcb8157cd2d32f->enter($__internal_3f3a52ad5a50027bf2965ee8c55ed9e610c8c754e6d3eb591dbcb8157cd2d32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_f17f440854d352475d77ac9afb89d20330481e4e77d92653a95484bbc9d90dc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f17f440854d352475d77ac9afb89d20330481e4e77d92653a95484bbc9d90dc7->enter($__internal_f17f440854d352475d77ac9afb89d20330481e4e77d92653a95484bbc9d90dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_f17f440854d352475d77ac9afb89d20330481e4e77d92653a95484bbc9d90dc7->leave($__internal_f17f440854d352475d77ac9afb89d20330481e4e77d92653a95484bbc9d90dc7_prof);

        
        $__internal_3f3a52ad5a50027bf2965ee8c55ed9e610c8c754e6d3eb591dbcb8157cd2d32f->leave($__internal_3f3a52ad5a50027bf2965ee8c55ed9e610c8c754e6d3eb591dbcb8157cd2d32f_prof);

    }

    public function getTemplateName()
    {
        return "::template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 132,  310 => 88,  293 => 44,  279 => 133,  277 => 132,  271 => 129,  267 => 128,  263 => 127,  259 => 126,  255 => 125,  251 => 124,  247 => 123,  243 => 122,  239 => 121,  235 => 120,  231 => 119,  227 => 118,  222 => 116,  218 => 115,  214 => 114,  210 => 113,  206 => 112,  202 => 111,  178 => 89,  176 => 88,  151 => 66,  145 => 63,  132 => 55,  120 => 45,  118 => 44,  113 => 42,  109 => 41,  105 => 40,  101 => 39,  97 => 38,  93 => 37,  89 => 36,  85 => 35,  81 => 34,  75 => 31,  69 => 28,  64 => 26,  58 => 23,  54 => 22,  50 => 21,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--[if IE 8]>\t\t\t<html class=\"ie ie8\"> <![endif]-->
<!--[if IE 9]>\t\t\t<html class=\"ie ie9\"> <![endif]-->
<!--[if gt IE 9]><!-->\t<html> <!--<![endif]-->
<head>

\t<!-- Meta -->
\t<meta charset=\"utf-8\">
\t<meta name=\"keywords\" content=\"HTML5 Template\" />
\t<meta name=\"description\" content=\"Multipress - Responsive Multipurpose HTML5 Template\">
\t<meta name=\"author\" content=\"\">

\t<title>SG-immobilier</title>

\t<!-- Mobile Meta -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

\t

\t<!-- Web Fonts  -->
\t<link href=\"{{asset('template/css/googleRobot.css')}}\" rel='stylesheet' type='text/css'>
\t<link href=\"{{asset('template/css/googleOpen.css')}}\" rel='stylesheet' type='text/css'>
\t<link href=\"{{asset('template/css/googleArimo.css')}}\" rel='stylesheet' type='text/css'>

\t<!-- Bootstrap core CSS -->
\t<link href=\"{{asset('template/css/bootstrap.css')}}\" rel=\"stylesheet\">

\t<link rel=\"shortcut icon\" href=\"{{asset('image/logo.png')}}\">

\t<!-- FontAwesome icons CSS -->
\t<link href=\"{{asset('template/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\">

\t<!-- Theme Styles CSS-->
\t<link href=\"{{asset('template/css/styles.css')}}\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('template/css/accordion.css')}}\">
\t<link href=\"{{asset('template/js/owl-carousel/owl.carousel.css')}}\" rel=\"stylesheet\">
\t<link href=\"{{asset('template/js/owl-carousel/owl.theme.css')}}\" rel=\"stylesheet\">
\t<link href=\"{{asset('template/js/rs-plugin/css/settings.css')}}\" rel=\"stylesheet\" />
\t<link href=\"{{asset('template/js/flexslider/flexslider.css')}}\" rel=\"stylesheet\">
\t<link rel=\"Stylesheet\" type=\"text/css\" href=\"{{asset('template/css/jquery_ui.css')}}\" /> 
\t<link rel=\"Stylesheet\" type=\"text/css\" href=\"{{asset('template/css/superTabs.css')}}\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('template/css/isotope.css')}}\">

\t{% block css %}{% endblock %}
</head>
<body>
<div class=\"body\">

<!-- Header -->
<header>
   <div class=\"container\">
      <div class=\"col-md-12\">
         <!-- Logo -->
         <div class=\"col-md-2\">
            <h1 class=\"logo\"><a href=\"{{path('list')}}\"><img src=\"{{asset('image/logo.png')}}\" style=\"width: 100px;\"></a></h1>
         </div>
         
        <!-- Navmenu -->
         <div class=\"col-md-10\">
            <div id='topnav'>
               <ul class=\"top-menu\">
                  <li class='has-sub'>
                     <a href='{{path('list')}}'><span>Accueil</span></a>
                  </li>
                  
                  <li class='has-sub'> <a href='{{path('catalogue')}}'><span>Biens</span></a>
                  </li>
                  <li class='has-sub'>
                     <a href='#'><span>Blog</span></a>
                     
                  </li>
                  <li class='has-sub-full'>
                     <a href='#'><span>A propos</span></a>
                              
                  </li>
                  <li class=\"has-sub\" class=\"dropdown-content\">
                     <a href='#'><span>Mon compte</span></a>
                  </li>
               </ul>
            </div>
         </div>
        
      </div>
   </div>
</header>
<!-- Header -->

{% block content %}{% endblock %}

<!-- Footer - Copyright -->
\t<div class=\"footer-bottom\">
\t\t<a class=\"back-top\" href=\"#\"><i class=\"fa fa-chevron-up\"></i></a>
\t\t<div class=\"container\">
\t\t\t<div class=\"row-fluid\">
\t\t\t\t
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<ul class=\"top-contact\">
\t\t\t\t\t\t<li><i class=\"fa fa-phone\"></i>78 1025004</li>
\t\t\t\t\t\t<li><i class=\"fa fa-envelope\"></i> gning.saliou96@gmail.com</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Footer - Copyright -->
</div>



<!-- JavaScript -->
<script src=\"{{asset('template/js/jquery-1.8.3.min.js')}}\"></script>
<script src=\"{{asset('template/js/rs-plugin/js/jquery.themepunch.plugins.min.js')}}\"></script>
<script src=\"{{asset('template/js/rs-plugin/js/jquery.themepunch.revolution.min.js')}}\"></script>
<script src=\"{{asset('template/js/rs-plugin/rs.home.js')}}\"></script>
<script src=\"{{asset('template/js/superTabs.js')}}\"></script>
<script type=\"text/javascript\" src=\"{{asset('template/js/jsapi.js')}}\"></script>
<script type=\"text/javascript\">google.load(\"jqueryui\", \"1.7.2\");</script> 
<script src=\"{{asset('template/js/bootstrap.js')}}\"></script>
<script src=\"{{asset('template/js/flexslider/jquery.flexslider.js')}}\"></script>
<script src=\"{{asset('template/js/owl-carousel/owl.carousel.js')}}\"></script>
<script src=\"{{asset('template/js/jquery.akordeon.js')}}\"></script>
<script src=\"{{asset('template/js/jflickrfeed.min.js')}}\"></script>
<script src=\"{{asset('template/js/tab.js')}}\"></script>
<script src=\"{{asset('template/js/jquery.isotope.min.js')}}\"></script>
<script src=\"{{asset('template/js/jquery.mobilemenu.js')}}\"></script>
<script src=\"{{asset('template/js/magnific-popup/jquery.magnific-popup.js')}}\"></script>
<script src=\"{{asset('template/js/main.js')}}\"></script>
<script src=\"{{asset('template/js/jquery-ui.js')}}\"></script>
<script src=\"{{asset('template/js/select2.min.js')}}\"></script>


{% block javascript %}{% endblock %}

</body>
</html>

", "::template.html.twig", "/var/www/html/perso/Darmanko/app/Resources/views/template.html.twig");
    }
}
