<?php

/* ::template.html.twig */
class __TwigTemplate_9ccad49d46cd7e78090f46632b905e2d0c7e66b1c56b44342bdb849c86edb464 extends Twig_Template
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
        $__internal_fca5121342281228330137e057d9d732fa33b0a54a8782734ccc941489550da1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fca5121342281228330137e057d9d732fa33b0a54a8782734ccc941489550da1->enter($__internal_fca5121342281228330137e057d9d732fa33b0a54a8782734ccc941489550da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::template.html.twig"));

        $__internal_45a40cfd24e768d321d26c3cbcf35dd085a8424f89f98638e949b3ef5f4ddc9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a40cfd24e768d321d26c3cbcf35dd085a8424f89f98638e949b3ef5f4ddc9e->enter($__internal_45a40cfd24e768d321d26c3cbcf35dd085a8424f89f98638e949b3ef5f4ddc9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::template.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/jquery-ui.css"), "html", null, true);
        echo "\" /> 
\t<link rel=\"Stylesheet\" type=\"text/css\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/superTabs.css"), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/isotope.css"), "html", null, true);
        echo "\">

\t";
        // line 45
        $this->displayBlock('css', $context, $blocks);
        // line 46
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
        // line 56
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
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list");
        echo "'><span>Accueil</span></a>
                  </li>
                  
                  <li class='has-sub'> <a href='";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("catalogue");
        echo "'><span>Biens</span></a>
                  </li>
\t\t\t\t  
                  <li class=\"has-sub\" class=\"dropdown-content\">
                     <a href='#'><span>Mon compte</span></a>
                  </li>
\t\t\t\t  <li class=\"has-sub\" class=\"dropdown-content\">
                     <a href='";
        // line 74
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
        // line 85
        $this->displayBlock('content', $context, $blocks);
        // line 86
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
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/rs-plugin/js/jquery.themepunch.plugins.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/rs-plugin/js/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/rs-plugin/rs.home.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/superTabs.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jsapi.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">google.load(\"jqueryui\", \"1.7.2\");</script> 
<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/flexslider/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/owl-carousel/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.akordeon.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jflickrfeed.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/tab.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.mobilemenu.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/magnific-popup/jquery.magnific-popup.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/main.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/select2.min.js"), "html", null, true);
        echo "\"></script>


";
        // line 129
        $this->displayBlock('javascript', $context, $blocks);
        // line 130
        echo "
</body>
</html>

";
        
        $__internal_fca5121342281228330137e057d9d732fa33b0a54a8782734ccc941489550da1->leave($__internal_fca5121342281228330137e057d9d732fa33b0a54a8782734ccc941489550da1_prof);

        
        $__internal_45a40cfd24e768d321d26c3cbcf35dd085a8424f89f98638e949b3ef5f4ddc9e->leave($__internal_45a40cfd24e768d321d26c3cbcf35dd085a8424f89f98638e949b3ef5f4ddc9e_prof);

    }

    // line 45
    public function block_css($context, array $blocks = array())
    {
        $__internal_dbb997cdf1fc47b2bb0edbce28fa27856ee0a23292a78d10f1f93504c5fc10e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbb997cdf1fc47b2bb0edbce28fa27856ee0a23292a78d10f1f93504c5fc10e5->enter($__internal_dbb997cdf1fc47b2bb0edbce28fa27856ee0a23292a78d10f1f93504c5fc10e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_e770757dbfd258c05d22926030ca19540d5d7e2e8088c20a80b8df1c2d9a6888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e770757dbfd258c05d22926030ca19540d5d7e2e8088c20a80b8df1c2d9a6888->enter($__internal_e770757dbfd258c05d22926030ca19540d5d7e2e8088c20a80b8df1c2d9a6888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_e770757dbfd258c05d22926030ca19540d5d7e2e8088c20a80b8df1c2d9a6888->leave($__internal_e770757dbfd258c05d22926030ca19540d5d7e2e8088c20a80b8df1c2d9a6888_prof);

        
        $__internal_dbb997cdf1fc47b2bb0edbce28fa27856ee0a23292a78d10f1f93504c5fc10e5->leave($__internal_dbb997cdf1fc47b2bb0edbce28fa27856ee0a23292a78d10f1f93504c5fc10e5_prof);

    }

    // line 85
    public function block_content($context, array $blocks = array())
    {
        $__internal_a8fe534c0393894c23aafa3dc9c458ce7f1e2d5e05f03b90e8d0cb3c995af67c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8fe534c0393894c23aafa3dc9c458ce7f1e2d5e05f03b90e8d0cb3c995af67c->enter($__internal_a8fe534c0393894c23aafa3dc9c458ce7f1e2d5e05f03b90e8d0cb3c995af67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e5ad2b70d88e536426c374506f4de71182a81a06da222109925e10d5705fa9f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5ad2b70d88e536426c374506f4de71182a81a06da222109925e10d5705fa9f5->enter($__internal_e5ad2b70d88e536426c374506f4de71182a81a06da222109925e10d5705fa9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_e5ad2b70d88e536426c374506f4de71182a81a06da222109925e10d5705fa9f5->leave($__internal_e5ad2b70d88e536426c374506f4de71182a81a06da222109925e10d5705fa9f5_prof);

        
        $__internal_a8fe534c0393894c23aafa3dc9c458ce7f1e2d5e05f03b90e8d0cb3c995af67c->leave($__internal_a8fe534c0393894c23aafa3dc9c458ce7f1e2d5e05f03b90e8d0cb3c995af67c_prof);

    }

    // line 129
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_ba7fb3b6e213e1ec9ad12880ba2bcb703c6d2d719683f01d7ab8edbb0b3921d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba7fb3b6e213e1ec9ad12880ba2bcb703c6d2d719683f01d7ab8edbb0b3921d9->enter($__internal_ba7fb3b6e213e1ec9ad12880ba2bcb703c6d2d719683f01d7ab8edbb0b3921d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_f6c9268d25b5826f19feba1a845d92e1b0b8f3202d1bb1b79eb16351c47c3cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6c9268d25b5826f19feba1a845d92e1b0b8f3202d1bb1b79eb16351c47c3cfa->enter($__internal_f6c9268d25b5826f19feba1a845d92e1b0b8f3202d1bb1b79eb16351c47c3cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_f6c9268d25b5826f19feba1a845d92e1b0b8f3202d1bb1b79eb16351c47c3cfa->leave($__internal_f6c9268d25b5826f19feba1a845d92e1b0b8f3202d1bb1b79eb16351c47c3cfa_prof);

        
        $__internal_ba7fb3b6e213e1ec9ad12880ba2bcb703c6d2d719683f01d7ab8edbb0b3921d9->leave($__internal_ba7fb3b6e213e1ec9ad12880ba2bcb703c6d2d719683f01d7ab8edbb0b3921d9_prof);

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
        return array (  331 => 129,  314 => 85,  297 => 45,  283 => 130,  281 => 129,  275 => 126,  271 => 125,  267 => 124,  263 => 123,  259 => 122,  255 => 121,  251 => 120,  247 => 119,  243 => 118,  239 => 117,  235 => 116,  231 => 115,  226 => 113,  222 => 112,  218 => 111,  214 => 110,  210 => 109,  206 => 108,  182 => 86,  180 => 85,  164 => 74,  154 => 67,  148 => 64,  136 => 56,  124 => 46,  122 => 45,  117 => 43,  113 => 42,  109 => 41,  105 => 40,  101 => 39,  97 => 38,  93 => 37,  89 => 36,  85 => 35,  81 => 34,  75 => 31,  69 => 28,  64 => 26,  58 => 23,  54 => 22,  50 => 21,  28 => 1,);
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
\t<link rel=\"Stylesheet\" type=\"text/css\" href=\"{{asset('template/css/jquery-ui.css')}}\" /> 
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
