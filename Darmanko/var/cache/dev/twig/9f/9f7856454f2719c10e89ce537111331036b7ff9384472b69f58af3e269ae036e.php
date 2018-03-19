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
        $__internal_c8220c4c3234dd8f160e5fa96118210b567f16879009ce793ca2cd22f1440534 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8220c4c3234dd8f160e5fa96118210b567f16879009ce793ca2cd22f1440534->enter($__internal_c8220c4c3234dd8f160e5fa96118210b567f16879009ce793ca2cd22f1440534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::template.html.twig"));

        $__internal_5b722f83153f451fa102447c036dc88f86e16a1d21251c78c5f0cfec5281589a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b722f83153f451fa102447c036dc88f86e16a1d21251c78c5f0cfec5281589a->enter($__internal_5b722f83153f451fa102447c036dc88f86e16a1d21251c78c5f0cfec5281589a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::template.html.twig"));

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
        
        $__internal_c8220c4c3234dd8f160e5fa96118210b567f16879009ce793ca2cd22f1440534->leave($__internal_c8220c4c3234dd8f160e5fa96118210b567f16879009ce793ca2cd22f1440534_prof);

        
        $__internal_5b722f83153f451fa102447c036dc88f86e16a1d21251c78c5f0cfec5281589a->leave($__internal_5b722f83153f451fa102447c036dc88f86e16a1d21251c78c5f0cfec5281589a_prof);

    }

    // line 45
    public function block_css($context, array $blocks = array())
    {
        $__internal_7cd86ba9c9e8002f180b5b62018ea261ef714aa70945beaf41a18e8183230d0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cd86ba9c9e8002f180b5b62018ea261ef714aa70945beaf41a18e8183230d0b->enter($__internal_7cd86ba9c9e8002f180b5b62018ea261ef714aa70945beaf41a18e8183230d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_86c16bd253a89a107b7506f59f88a50d8f6e96a6499f39a9957187bf1f2470dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86c16bd253a89a107b7506f59f88a50d8f6e96a6499f39a9957187bf1f2470dd->enter($__internal_86c16bd253a89a107b7506f59f88a50d8f6e96a6499f39a9957187bf1f2470dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_86c16bd253a89a107b7506f59f88a50d8f6e96a6499f39a9957187bf1f2470dd->leave($__internal_86c16bd253a89a107b7506f59f88a50d8f6e96a6499f39a9957187bf1f2470dd_prof);

        
        $__internal_7cd86ba9c9e8002f180b5b62018ea261ef714aa70945beaf41a18e8183230d0b->leave($__internal_7cd86ba9c9e8002f180b5b62018ea261ef714aa70945beaf41a18e8183230d0b_prof);

    }

    // line 85
    public function block_content($context, array $blocks = array())
    {
        $__internal_b00adaea4937abef978d5e8baa63f742eca92f2b507ebda65e4cb1176e991eb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b00adaea4937abef978d5e8baa63f742eca92f2b507ebda65e4cb1176e991eb2->enter($__internal_b00adaea4937abef978d5e8baa63f742eca92f2b507ebda65e4cb1176e991eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_37a2af3d94476489f3bd532529a95855a2b267ad7b89a721ed3b250ed48e0ccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37a2af3d94476489f3bd532529a95855a2b267ad7b89a721ed3b250ed48e0ccb->enter($__internal_37a2af3d94476489f3bd532529a95855a2b267ad7b89a721ed3b250ed48e0ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_37a2af3d94476489f3bd532529a95855a2b267ad7b89a721ed3b250ed48e0ccb->leave($__internal_37a2af3d94476489f3bd532529a95855a2b267ad7b89a721ed3b250ed48e0ccb_prof);

        
        $__internal_b00adaea4937abef978d5e8baa63f742eca92f2b507ebda65e4cb1176e991eb2->leave($__internal_b00adaea4937abef978d5e8baa63f742eca92f2b507ebda65e4cb1176e991eb2_prof);

    }

    // line 129
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_26cac6975d1c9bf0f7a4589f7ebae1d0563badd0fe41404e6b324b0ccb3a271f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26cac6975d1c9bf0f7a4589f7ebae1d0563badd0fe41404e6b324b0ccb3a271f->enter($__internal_26cac6975d1c9bf0f7a4589f7ebae1d0563badd0fe41404e6b324b0ccb3a271f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_4b3b0593af9c5e78c205f7edbe3295ce18b8700d7350187f98ea83f58ac7c8ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b3b0593af9c5e78c205f7edbe3295ce18b8700d7350187f98ea83f58ac7c8ea->enter($__internal_4b3b0593af9c5e78c205f7edbe3295ce18b8700d7350187f98ea83f58ac7c8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_4b3b0593af9c5e78c205f7edbe3295ce18b8700d7350187f98ea83f58ac7c8ea->leave($__internal_4b3b0593af9c5e78c205f7edbe3295ce18b8700d7350187f98ea83f58ac7c8ea_prof);

        
        $__internal_26cac6975d1c9bf0f7a4589f7ebae1d0563badd0fe41404e6b324b0ccb3a271f->leave($__internal_26cac6975d1c9bf0f7a4589f7ebae1d0563badd0fe41404e6b324b0ccb3a271f_prof);

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
