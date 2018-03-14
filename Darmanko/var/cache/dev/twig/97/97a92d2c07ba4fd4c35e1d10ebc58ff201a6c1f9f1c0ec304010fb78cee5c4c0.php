<?php

/* ::admin.html.twig */
class __TwigTemplate_3555a2c1a7242d526399aacb3e0de4172c3810b7ad66cc734d7f9dabda3d302d extends Twig_Template
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
        $__internal_83b2d7b101e61fd102b76ed60cd8fca05035a533b7b650065444d37a85ae5c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83b2d7b101e61fd102b76ed60cd8fca05035a533b7b650065444d37a85ae5c34->enter($__internal_83b2d7b101e61fd102b76ed60cd8fca05035a533b7b650065444d37a85ae5c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::admin.html.twig"));

        $__internal_431e32466cf5a2f9e738eff6e0d0973810c96e123e458572e6f401a86fe1513b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_431e32466cf5a2f9e738eff6e0d0973810c96e123e458572e6f401a86fe1513b->enter($__internal_431e32466cf5a2f9e738eff6e0d0973810c96e123e458572e6f401a86fe1513b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::admin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <title>DARMANKO-admin</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
        <meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\" />
        <meta content=\"Coderthemes\" name=\"author\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta charset=\"utf-8\">

        <link rel=\"shortcut icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/logo.png"), "html", null, true);
        echo "\">

        ";
        // line 14
        $this->displayBlock('css', $context, $blocks);
        // line 15
        echo "
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/core.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/components.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/pages.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/modernizr.min.js"), "html", null, true);
        echo "\"></script>

        

        
    </head>


    <body class=\"fixed-left\">
        
        <!-- Begin page -->
        <div id=\"wrapper\">
        
            <!-- Top Bar Start -->
            <div class=\"topbar\">
                <!-- LOGO -->
                <div class=\"topbar-left\">
                    <div class=\"text-center\">
                        <a href=\"index.html\" class=\"logo\"><i class=\"md md-terrain\"></i> <span>Darmanko </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class=\"navbar navbar-default\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"\">
                            <div class=\"pull-left\">
                                <button type=\"button\" class=\"button-menu-mobile open-left\">
                                    <i class=\"fa fa-bars\"></i>
                                </button>
                                <span class=\"clearfix\"></span>
                            </div>
                            <form class=\"navbar-form pull-left\" role=\"search\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control search-bar\" placeholder=\"Type here for search...\">
                                </div>
                                <button type=\"submit\" class=\"btn btn-search\"><i class=\"fa fa-search\"></i></button>
                            </form>

                            <ul class=\"nav navbar-nav navbar-right pull-right\">
                                <li class=\"dropdown hidden-xs\">
                                    <a href=\"#\" data-target=\"#\" class=\"dropdown-toggle waves-effect\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                                        <i class=\"md md-notifications\"></i> <span class=\"badge badge-xs badge-danger\">3</span>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-menu-lg\">
                                        <li class=\"text-center notifi-title\">Notification</li>
                                        <li class=\"list-group\">
                                           <!-- list item-->
                                           <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-user-plus fa-2x text-info\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New user registered</div>
                                                    <p class=\"m-0\">
                                                       <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                           <!-- list item-->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-diamond fa-2x text-primary\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New settings</div>
                                                    <p class=\"m-0\">
                                                       <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                            <!-- list item-->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-bell-o fa-2x text-danger\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">Updates</div>
                                                    <p class=\"m-0\">
                                                       <small>There are
                                                          <span class=\"text-primary\">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                           <!-- last list item -->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <small>See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"hidden-xs\">
                                    <a href=\"#\" id=\"btn-fullscreen\" class=\"waves-effect\"><i class=\"md md-crop-free\"></i></a>
                                </li>
                                <li class=\"hidden-xs\">
                                    <a href=\"#\" class=\"right-bar-toggle waves-effect\"><i class=\"md md-chat\"></i></a>
                                </li>
                                <li class=\"dropdown\">
                                    <a href=\"\" class=\"dropdown-toggle profile\" data-toggle=\"dropdown\" aria-expanded=\"true\"><img src=\"assets/images/users/avatar-1.jpg\" alt=\"user-img\" class=\"img-circle\"> </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class=\"left side-menu\">
                <div class=\"sidebar-inner slimscrollleft\">
                    <div class=\"user-details\">
                        <div class=\"pull-left\">
                            <img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/logo.png"), "html", null, true);
        echo "\" alt=\"\" class=\"thumb-md img-circle\">
                        </div>
                        <div class=\"user-info\">
                            <div class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">Saliou GNING <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile<div class=\"ripple-wrapper\"></div></a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                </ul>
                            </div>
                            
                            <p class=\"text-muted m-0\">Administrateur</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id=\"sidebar-menu\">
                        <ul>
                            <li>
                                <a href=\"";
        // line 170
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
        echo "\" class=\"waves-effect\"><i class=\"md md-home\"></i><span> Dashboard </span></a>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-mail\"></i><span> Biens </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"";
        // line 176
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bien");
        echo "\">Biens</a></li>
                                    <li><a href=\"";
        // line 177
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("localite");
        echo "\" id=\"localite\">Localités</a></li>
                                    <li><a href=\"";
        // line 178
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type");
        echo "\">Types de bien</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-palette\"></i> <span> Reservations </span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"";
        // line 185
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
        echo "\">Tout</a></li>
                                    <li><a href=\"";
        // line 186
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enCours");
        echo "\">En cours</a></li>
                                    <li><a href=\"#\">Validées</a></li>
                                    <li><a href=\"#\">Refusées</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-event\"></i><span> Paiement </span></a>
                            </li>

                            <li>
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-event\"></i><span> Contrat </span></a>
                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class=\"content-page\">
                <!-- Start content -->
                <div class=\"content\">
                    <div class=\"container\">

                        ";
        // line 217
        $this->displayBlock('content', $context, $blocks);
        // line 218
        echo "                        <div id=\"content\"></div>
                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class=\"footer text-right\">
                    2016 © Moltran.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            
            


        </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>

        <!-- Main  -->
        <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/detect.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/fastclick.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/waves.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/wow.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.app.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 258
        $this->displayBlock('javascript', $context, $blocks);
        // line 259
        echo "
        <script>
            \$(function(){
                \$(\"#localite\").on(\"click\", function(){
                    \$(\"#content\").load(";
        // line 263
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("localite");
        echo ");
                })
                
            })
        </script>
\t
\t</body>
</html>";
        
        $__internal_83b2d7b101e61fd102b76ed60cd8fca05035a533b7b650065444d37a85ae5c34->leave($__internal_83b2d7b101e61fd102b76ed60cd8fca05035a533b7b650065444d37a85ae5c34_prof);

        
        $__internal_431e32466cf5a2f9e738eff6e0d0973810c96e123e458572e6f401a86fe1513b->leave($__internal_431e32466cf5a2f9e738eff6e0d0973810c96e123e458572e6f401a86fe1513b_prof);

    }

    // line 14
    public function block_css($context, array $blocks = array())
    {
        $__internal_33c2031bbaa8b9f20c3bf7dcbab2aa87e6154e64bf7c085bbac8a8bc84a5bd29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33c2031bbaa8b9f20c3bf7dcbab2aa87e6154e64bf7c085bbac8a8bc84a5bd29->enter($__internal_33c2031bbaa8b9f20c3bf7dcbab2aa87e6154e64bf7c085bbac8a8bc84a5bd29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_33b95a04ffd05372c9523fd87f171b7057c371dc5d3f79b63ae0db961f22c9bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33b95a04ffd05372c9523fd87f171b7057c371dc5d3f79b63ae0db961f22c9bc->enter($__internal_33b95a04ffd05372c9523fd87f171b7057c371dc5d3f79b63ae0db961f22c9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_33b95a04ffd05372c9523fd87f171b7057c371dc5d3f79b63ae0db961f22c9bc->leave($__internal_33b95a04ffd05372c9523fd87f171b7057c371dc5d3f79b63ae0db961f22c9bc_prof);

        
        $__internal_33c2031bbaa8b9f20c3bf7dcbab2aa87e6154e64bf7c085bbac8a8bc84a5bd29->leave($__internal_33c2031bbaa8b9f20c3bf7dcbab2aa87e6154e64bf7c085bbac8a8bc84a5bd29_prof);

    }

    // line 217
    public function block_content($context, array $blocks = array())
    {
        $__internal_523ca114537910323d13c567f8ea0f9961e43a72b79f32777b7a7d79d444a8b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_523ca114537910323d13c567f8ea0f9961e43a72b79f32777b7a7d79d444a8b9->enter($__internal_523ca114537910323d13c567f8ea0f9961e43a72b79f32777b7a7d79d444a8b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_dee1e38b7585a606475c445aa9d91f9eebd37dad76741c815c71e265d657a451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dee1e38b7585a606475c445aa9d91f9eebd37dad76741c815c71e265d657a451->enter($__internal_dee1e38b7585a606475c445aa9d91f9eebd37dad76741c815c71e265d657a451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_dee1e38b7585a606475c445aa9d91f9eebd37dad76741c815c71e265d657a451->leave($__internal_dee1e38b7585a606475c445aa9d91f9eebd37dad76741c815c71e265d657a451_prof);

        
        $__internal_523ca114537910323d13c567f8ea0f9961e43a72b79f32777b7a7d79d444a8b9->leave($__internal_523ca114537910323d13c567f8ea0f9961e43a72b79f32777b7a7d79d444a8b9_prof);

    }

    // line 258
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_7dd5fa60b9ce123a791d8d0e0d374d90560709829fa4449939a2f840cddd4bbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dd5fa60b9ce123a791d8d0e0d374d90560709829fa4449939a2f840cddd4bbf->enter($__internal_7dd5fa60b9ce123a791d8d0e0d374d90560709829fa4449939a2f840cddd4bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_1473ceb7f93211df527e7ed28e337eb8e0a167dfe405ffddc56be9fbcb1b153e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1473ceb7f93211df527e7ed28e337eb8e0a167dfe405ffddc56be9fbcb1b153e->enter($__internal_1473ceb7f93211df527e7ed28e337eb8e0a167dfe405ffddc56be9fbcb1b153e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_1473ceb7f93211df527e7ed28e337eb8e0a167dfe405ffddc56be9fbcb1b153e->leave($__internal_1473ceb7f93211df527e7ed28e337eb8e0a167dfe405ffddc56be9fbcb1b153e_prof);

        
        $__internal_7dd5fa60b9ce123a791d8d0e0d374d90560709829fa4449939a2f840cddd4bbf->leave($__internal_7dd5fa60b9ce123a791d8d0e0d374d90560709829fa4449939a2f840cddd4bbf_prof);

    }

    public function getTemplateName()
    {
        return "::admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 258,  417 => 217,  400 => 14,  382 => 263,  376 => 259,  374 => 258,  369 => 256,  364 => 254,  360 => 253,  356 => 252,  352 => 251,  348 => 250,  344 => 249,  340 => 248,  336 => 247,  332 => 246,  328 => 245,  299 => 218,  297 => 217,  263 => 186,  259 => 185,  249 => 178,  245 => 177,  241 => 176,  232 => 170,  209 => 150,  80 => 24,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  55 => 17,  51 => 16,  48 => 15,  46 => 14,  41 => 12,  28 => 1,);
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
<html>
    <head>
        <meta charset=\"utf-8\" />
        <title>DARMANKO-admin</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
        <meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\" />
        <meta content=\"Coderthemes\" name=\"author\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta charset=\"utf-8\">

        <link rel=\"shortcut icon\" href=\"{{asset('image/logo.png')}}\">

        {% block css %}{% endblock %}

        <link href=\"{{asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/core.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/icons.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/components.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/pages.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/menu.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/responsive.css')}}\" rel=\"stylesheet\" type=\"text/css\">

        <script src=\"{{asset('assets/js/modernizr.min.js')}}\"></script>

        

        
    </head>


    <body class=\"fixed-left\">
        
        <!-- Begin page -->
        <div id=\"wrapper\">
        
            <!-- Top Bar Start -->
            <div class=\"topbar\">
                <!-- LOGO -->
                <div class=\"topbar-left\">
                    <div class=\"text-center\">
                        <a href=\"index.html\" class=\"logo\"><i class=\"md md-terrain\"></i> <span>Darmanko </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class=\"navbar navbar-default\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"\">
                            <div class=\"pull-left\">
                                <button type=\"button\" class=\"button-menu-mobile open-left\">
                                    <i class=\"fa fa-bars\"></i>
                                </button>
                                <span class=\"clearfix\"></span>
                            </div>
                            <form class=\"navbar-form pull-left\" role=\"search\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control search-bar\" placeholder=\"Type here for search...\">
                                </div>
                                <button type=\"submit\" class=\"btn btn-search\"><i class=\"fa fa-search\"></i></button>
                            </form>

                            <ul class=\"nav navbar-nav navbar-right pull-right\">
                                <li class=\"dropdown hidden-xs\">
                                    <a href=\"#\" data-target=\"#\" class=\"dropdown-toggle waves-effect\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                                        <i class=\"md md-notifications\"></i> <span class=\"badge badge-xs badge-danger\">3</span>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-menu-lg\">
                                        <li class=\"text-center notifi-title\">Notification</li>
                                        <li class=\"list-group\">
                                           <!-- list item-->
                                           <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-user-plus fa-2x text-info\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New user registered</div>
                                                    <p class=\"m-0\">
                                                       <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                           <!-- list item-->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-diamond fa-2x text-primary\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New settings</div>
                                                    <p class=\"m-0\">
                                                       <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                            <!-- list item-->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-bell-o fa-2x text-danger\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">Updates</div>
                                                    <p class=\"m-0\">
                                                       <small>There are
                                                          <span class=\"text-primary\">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                           <!-- last list item -->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <small>See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"hidden-xs\">
                                    <a href=\"#\" id=\"btn-fullscreen\" class=\"waves-effect\"><i class=\"md md-crop-free\"></i></a>
                                </li>
                                <li class=\"hidden-xs\">
                                    <a href=\"#\" class=\"right-bar-toggle waves-effect\"><i class=\"md md-chat\"></i></a>
                                </li>
                                <li class=\"dropdown\">
                                    <a href=\"\" class=\"dropdown-toggle profile\" data-toggle=\"dropdown\" aria-expanded=\"true\"><img src=\"assets/images/users/avatar-1.jpg\" alt=\"user-img\" class=\"img-circle\"> </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class=\"left side-menu\">
                <div class=\"sidebar-inner slimscrollleft\">
                    <div class=\"user-details\">
                        <div class=\"pull-left\">
                            <img src=\"{{asset('image/logo.png')}}\" alt=\"\" class=\"thumb-md img-circle\">
                        </div>
                        <div class=\"user-info\">
                            <div class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">Saliou GNING <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile<div class=\"ripple-wrapper\"></div></a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                </ul>
                            </div>
                            
                            <p class=\"text-muted m-0\">Administrateur</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id=\"sidebar-menu\">
                        <ul>
                            <li>
                                <a href=\"{{path('admin')}}\" class=\"waves-effect\"><i class=\"md md-home\"></i><span> Dashboard </span></a>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-mail\"></i><span> Biens </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"{{path('bien')}}\">Biens</a></li>
                                    <li><a href=\"{{path('localite')}}\" id=\"localite\">Localités</a></li>
                                    <li><a href=\"{{path('type')}}\">Types de bien</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-palette\"></i> <span> Reservations </span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"{{path('admin')}}\">Tout</a></li>
                                    <li><a href=\"{{path('enCours')}}\">En cours</a></li>
                                    <li><a href=\"#\">Validées</a></li>
                                    <li><a href=\"#\">Refusées</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-event\"></i><span> Paiement </span></a>
                            </li>

                            <li>
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-event\"></i><span> Contrat </span></a>
                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class=\"content-page\">
                <!-- Start content -->
                <div class=\"content\">
                    <div class=\"container\">

                        {% block content %}{% endblock %}
                        <div id=\"content\"></div>
                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class=\"footer text-right\">
                    2016 © Moltran.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            
            


        </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>

        <!-- Main  -->
        <script src=\"{{asset('assets/js/jquery.min.js')}}\"></script>
        <script src=\"{{asset('assets/js/bootstrap.min.js')}}\"></script>
        <script src=\"{{asset('assets/js/detect.js')}}\"></script>
        <script src=\"{{asset('assets/js/fastclick.js')}}\"></script>
        <script src=\"{{asset('assets/js/jquery.slimscroll.js')}}\"></script>
        <script src=\"{{asset('assets/js/jquery.blockUI.js')}}\"></script>
        <script src=\"{{asset('assets/js/waves.js')}}\"></script>
        <script src=\"{{asset('assets/js/wow.min.js')}}\"></script>
        <script src=\"{{asset('assets/js/jquery.nicescroll.js')}}\"></script>
        <script src=\"{{asset('assets/js/jquery.scrollTo.min.js')}}\"></script>

        <script src=\"{{asset('assets/js/jquery.app.js')}}\"></script>

        {% block javascript %}{% endblock %}

        <script>
            \$(function(){
                \$(\"#localite\").on(\"click\", function(){
                    \$(\"#content\").load({{path(\"localite\")}});
                })
                
            })
        </script>
\t
\t</body>
</html>", "::admin.html.twig", "/var/www/html/perso/Darmanko/app/Resources/views/admin.html.twig");
    }
}
