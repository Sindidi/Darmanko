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
        $__internal_6c73fbccdacc0944084d48084857ec2057746f0b97ea260581085afe9cc9b97d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c73fbccdacc0944084d48084857ec2057746f0b97ea260581085afe9cc9b97d->enter($__internal_6c73fbccdacc0944084d48084857ec2057746f0b97ea260581085afe9cc9b97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::template.html.twig"));

        $__internal_929edccecee3d7218f7894df8fd7d33583be23a9b3e7c3788206c3ea4c8e3898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_929edccecee3d7218f7894df8fd7d33583be23a9b3e7c3788206c3ea4c8e3898->enter($__internal_929edccecee3d7218f7894df8fd7d33583be23a9b3e7c3788206c3ea4c8e3898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::template.html.twig"));

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

\t<title>DARMANKO-immobilier</title>

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
        echo "\">Darmanko";
        echo "</a></h1>
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
\t\t\t\t  
                  <li class=\"has-sub\" class=\"dropdown-content\">
                     <a href='#'><span>Mon compte</span></a>
                  </li>
\t\t\t\t  <li class=\"has-sub\" class=\"dropdown-content\">
                     <a href='";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("upload");
        echo "'><span><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/uplaodr.png"), "html", null, true);
        echo "\" style=\"width: 20px;\"></span></a>
                  </li>
               </ul>
            </div>
         </div>
        
      </div>
   </div>
</header>
<!-- Header -->

";
        // line 84
        $this->displayBlock('content', $context, $blocks);
        // line 85
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
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/rs-plugin/js/jquery.themepunch.plugins.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/rs-plugin/js/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/rs-plugin/rs.home.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/superTabs.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jsapi.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">google.load(\"jqueryui\", \"1.7.2\");</script> 
<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/flexslider/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/owl-carousel/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.akordeon.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jflickrfeed.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/tab.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.mobilemenu.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/magnific-popup/jquery.magnific-popup.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/main.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/select2.min.js"), "html", null, true);
        echo "\"></script>


";
        // line 128
        $this->displayBlock('javascript', $context, $blocks);
        // line 129
        echo "
</body>
</html>

";
        
        $__internal_6c73fbccdacc0944084d48084857ec2057746f0b97ea260581085afe9cc9b97d->leave($__internal_6c73fbccdacc0944084d48084857ec2057746f0b97ea260581085afe9cc9b97d_prof);

        
        $__internal_929edccecee3d7218f7894df8fd7d33583be23a9b3e7c3788206c3ea4c8e3898->leave($__internal_929edccecee3d7218f7894df8fd7d33583be23a9b3e7c3788206c3ea4c8e3898_prof);

    }

    // line 44
    public function block_css($context, array $blocks = array())
    {
        $__internal_7cd5593572a8aea563a4099aed6401920caa1eac74ef481c3ce52180c9768bed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cd5593572a8aea563a4099aed6401920caa1eac74ef481c3ce52180c9768bed->enter($__internal_7cd5593572a8aea563a4099aed6401920caa1eac74ef481c3ce52180c9768bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_eb853c5e0f2a9557c36bd9aff1e50d72e7a9bbb599f1a4d6c3fa202c881300c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb853c5e0f2a9557c36bd9aff1e50d72e7a9bbb599f1a4d6c3fa202c881300c8->enter($__internal_eb853c5e0f2a9557c36bd9aff1e50d72e7a9bbb599f1a4d6c3fa202c881300c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_eb853c5e0f2a9557c36bd9aff1e50d72e7a9bbb599f1a4d6c3fa202c881300c8->leave($__internal_eb853c5e0f2a9557c36bd9aff1e50d72e7a9bbb599f1a4d6c3fa202c881300c8_prof);

        
        $__internal_7cd5593572a8aea563a4099aed6401920caa1eac74ef481c3ce52180c9768bed->leave($__internal_7cd5593572a8aea563a4099aed6401920caa1eac74ef481c3ce52180c9768bed_prof);

    }

    // line 84
    public function block_content($context, array $blocks = array())
    {
        $__internal_9f495cebc952102aeaa43e5fd727f28c52540330edb45678f067c8e6414645da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f495cebc952102aeaa43e5fd727f28c52540330edb45678f067c8e6414645da->enter($__internal_9f495cebc952102aeaa43e5fd727f28c52540330edb45678f067c8e6414645da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0e061eb069d4d29ab1aeabfe8145f11d179f0753b2fa7780944364df8a4fbfbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e061eb069d4d29ab1aeabfe8145f11d179f0753b2fa7780944364df8a4fbfbe->enter($__internal_0e061eb069d4d29ab1aeabfe8145f11d179f0753b2fa7780944364df8a4fbfbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_0e061eb069d4d29ab1aeabfe8145f11d179f0753b2fa7780944364df8a4fbfbe->leave($__internal_0e061eb069d4d29ab1aeabfe8145f11d179f0753b2fa7780944364df8a4fbfbe_prof);

        
        $__internal_9f495cebc952102aeaa43e5fd727f28c52540330edb45678f067c8e6414645da->leave($__internal_9f495cebc952102aeaa43e5fd727f28c52540330edb45678f067c8e6414645da_prof);

    }

    // line 128
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_c70603d95ed298bebf0981e0ef35a2d144315147e7c434d3193605d22a0deccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c70603d95ed298bebf0981e0ef35a2d144315147e7c434d3193605d22a0deccd->enter($__internal_c70603d95ed298bebf0981e0ef35a2d144315147e7c434d3193605d22a0deccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_43896fec1cf1c862e0fb369bfe3c6076b18dc54e981145d1d160d5a886068c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43896fec1cf1c862e0fb369bfe3c6076b18dc54e981145d1d160d5a886068c43->enter($__internal_43896fec1cf1c862e0fb369bfe3c6076b18dc54e981145d1d160d5a886068c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_43896fec1cf1c862e0fb369bfe3c6076b18dc54e981145d1d160d5a886068c43->leave($__internal_43896fec1cf1c862e0fb369bfe3c6076b18dc54e981145d1d160d5a886068c43_prof);

        
        $__internal_c70603d95ed298bebf0981e0ef35a2d144315147e7c434d3193605d22a0deccd->leave($__internal_c70603d95ed298bebf0981e0ef35a2d144315147e7c434d3193605d22a0deccd_prof);

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
        return array (  327 => 128,  310 => 84,  293 => 44,  279 => 129,  277 => 128,  271 => 125,  267 => 124,  263 => 123,  259 => 122,  255 => 121,  251 => 120,  247 => 119,  243 => 118,  239 => 117,  235 => 116,  231 => 115,  227 => 114,  222 => 112,  218 => 111,  214 => 110,  210 => 109,  206 => 108,  202 => 107,  178 => 85,  176 => 84,  160 => 73,  150 => 66,  144 => 63,  132 => 55,  120 => 45,  118 => 44,  113 => 42,  109 => 41,  105 => 40,  101 => 39,  97 => 38,  93 => 37,  89 => 36,  85 => 35,  81 => 34,  75 => 31,  69 => 28,  64 => 26,  58 => 23,  54 => 22,  50 => 21,  28 => 1,);
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

\t<title>DARMANKO-immobilier</title>

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
            <h1 class=\"logo\"><a href=\"{{path('list')}}\">Darmanko{#<img src=\"{{asset('image/logo.png')}}\" style=\"width: 100px;\">#}</a></h1>
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
\t\t\t\t  
                  <li class=\"has-sub\" class=\"dropdown-content\">
                     <a href='#'><span>Mon compte</span></a>
                  </li>
\t\t\t\t  <li class=\"has-sub\" class=\"dropdown-content\">
                     <a href='{{path('upload')}}'><span><img src=\"{{asset('image/uplaodr.png')}}\" style=\"width: 20px;\"></span></a>
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
