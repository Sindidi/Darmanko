<?php

/* SNTDarmankoBundle:admin:login.html.twig */
class __TwigTemplate_ff91d3f461b1f7d5bf8ff7e4604325c7f57a71f4494e2b7291226c01ab6b0171 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6ebe91260a5ef09266efcdc5dd5c4de1d1c468c086fb002e6cbe410a9be8eda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6ebe91260a5ef09266efcdc5dd5c4de1d1c468c086fb002e6cbe410a9be8eda->enter($__internal_c6ebe91260a5ef09266efcdc5dd5c4de1d1c468c086fb002e6cbe410a9be8eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:login.html.twig"));

        $__internal_1898a9578ff8a27d985e3d3f3b30fcab533f90e28837f0e09be728a311ba4ef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1898a9578ff8a27d985e3d3f3b30fcab533f90e28837f0e09be728a311ba4ef7->enter($__internal_1898a9578ff8a27d985e3d3f3b30fcab533f90e28837f0e09be728a311ba4ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\" />
    <title>Mon compte</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\" />
    <meta content=\"Coderthemes\" name=\"author\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

    <link rel=\"shortcut icon\" href=\"assets/images/favicon_1.ico\">

    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/core.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/components.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/pages.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

    <script src=\"assets/js/modernizr.min.js\"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->


</head>

<body>


<div id='conexion'>
    <div class=\"wrapper-page\">
        <div class=\"panel panel-color panel-primary panel-pages\">
            <div class=\"panel-heading bg-img\">
                <div class=\"bg-overlay\"></div>
                <h3 class=\"text-center m-t-10 text-white\"> Se connecter </h3>
            </div>


            <div class=\"panel-body\">
                <form method=\"POST\" class=\"form-horizontal m-t-20\" id=\"connexion\">

                    <div class=\"form-group\">
                        <div class=\"col-xs-12\">
                            <input name=\"email\" class=\"form-control input-lg\" type=\"text\" required=\"\" placeholder=\"Votre adresse email\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-xs-12\">
                            <input class=\"form-control input-lg\" type=\"password\" name=\"password\" required=\"\" placeholder=\"Mot de passe\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-xs-12\">
                            <div class=\"checkbox checkbox-primary\">
                                <input id=\"checkbox-signup\" type=\"checkbox\">
                                <label for=\"checkbox-signup\">
                                    se souvenir de moi
                                </label>
                            </div>

                        </div>
                    </div>

                    <div class=\"form-group text-center m-t-40\">
                        <div class=\"col-xs-12\">
                            <button class=\"btn btn-primary btn-lg w-lg waves-effect waves-light\" type=\"submit\">Se connecter</button>
                        </div>
                    </div>

                    <div class=\"form-group m-t-30\">
                        <div class=\"col-sm-7\">
                            <a href=\"#\"><i class=\"fa fa-lock m-r-5\"></i> mot de passe oublier?</a>
                        </div>
                           <div id='creation' class=\"col-sm-5 text-right\">
                            <a href=\"#\">Créer un compte</a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<div id='compte'>
<div class=\"wrapper-page\">
    <div class=\"panel panel-color panel-primary panel-pages\">
        <div class=\"panel-heading bg-img\">
            <div class=\"bg-overlay\"></div>
            <h3 class=\"text-center m-t-10 text-white\">
                Création de compte
            </h3>
        </div>

        <div class=\"panel-body\">
            <form class=\"form-horizontal m-t-20\" method=\"post\" action=\"\">

                <div class=\"form-group\">
                    <div class=\"col-xs-12\">
                        <input class=\"form-control input-lg\" type=\"text\" name=\"nomcomplet\" required=\"\" placeholder=\"nomcomplet \">
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"col-xs-12\">
                        <input class=\"form-control input-lg\" type=\"email\" name=\"email\" required=\"\" placeholder=\"Email\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"col-xs-12\">
                        <input class=\"form-control input-lg\" type=\"text\" name=\"adresse\"  required=\"\" placeholder=\"adresse \">
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"col-xs-12\">
                        <input class=\"form-control input-lg\" type=\"number\" name=\"numpiece\" required=\"\" placeholder=\"numpiece \">
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"col-xs-12\">
                        <input class=\"form-control input-lg\" type=\"number\" name=\"tel\" required=\"\" placeholder=\"tel\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"col-xs-12\">
                        <input class=\"form-control input-lg\" type=\"number\" name=\"codebanque\" required=\"\" placeholder=\"codebanque \">
                    </div>
                </div>              

                <div class=\"form-group\">
                    <div class=\"col-xs-12\">
                        <input class=\"form-control input-lg\" type=\"password\" name=\"motdepasse\" required=\"\" placeholder=\"mot de passe\">
                    </div>
                </div>

                <div class=\"form-group text-center m-t-40\">
                    <div class=\"col-xs-12\">
                        <button class=\"btn btn-primary waves-effect waves-light btn-lg w-lg\" type=\"submit\">Enrigister</button>
                    </div>
                </div>

                <div class=\"form-group m-t-30\">
                    <div id='retour' class=\"col-sm-12 text-center\">
                        <a href=\"#\">J'ai dejà un compte?</a>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
</div>


    <script>
        var resizefunc = [];
    </script>

    <!-- Main  -->
    <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/detect.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/fastclick.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/waves.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/wow.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.app.js"), "html", null, true);
        echo "\"></script>

    <script>
        \$(document).ready(function () {
        \$(\"#compte\").hide();
        \$(\"#creation\").click(function () {
                \$(\"#conexion\").hide();
                \$(\"#compte\").show();
            });
        \$(\"#retour\").click(function () {
                \$(\"#compte\").hide();
                \$(\"#conexion\").show();
            });
        });

        //Formulaire de connexion

        \$(\"#connexion\").on(\"submit\", function(e){
            e.preventDefault();
            \$.ajax({

                url: \"";
        // line 200
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajaxConnexion");
        echo "\",
                type: \"POST\",
                data: \$(this).serialize(),
                dataType: \"text\",

                success: function(data){
                    if(data==\"ok\")
                        window.location.href = \"";
        // line 207
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
        echo "\"
                },

                error: function(res, stat, error) {
                    alert(error);
                }
            })
        })
</script>

</body>

</html>";
        
        $__internal_c6ebe91260a5ef09266efcdc5dd5c4de1d1c468c086fb002e6cbe410a9be8eda->leave($__internal_c6ebe91260a5ef09266efcdc5dd5c4de1d1c468c086fb002e6cbe410a9be8eda_prof);

        
        $__internal_1898a9578ff8a27d985e3d3f3b30fcab533f90e28837f0e09be728a311ba4ef7->leave($__internal_1898a9578ff8a27d985e3d3f3b30fcab533f90e28837f0e09be728a311ba4ef7_prof);

    }

    public function getTemplateName()
    {
        return "SNTDarmankoBundle:admin:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 207,  280 => 200,  256 => 179,  251 => 177,  247 => 176,  243 => 175,  239 => 174,  235 => 173,  231 => 172,  227 => 171,  223 => 170,  219 => 169,  215 => 168,  64 => 20,  60 => 19,  56 => 18,  52 => 17,  48 => 16,  44 => 15,  40 => 14,  25 => 1,);
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
    <title>Mon compte</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\" />
    <meta content=\"Coderthemes\" name=\"author\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

    <link rel=\"shortcut icon\" href=\"assets/images/favicon_1.ico\">

    <link href=\"{{asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{asset('assets/css/core.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{asset('assets/css/icons.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{asset('assets/css/components.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{asset('assets/css/pages.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{asset('assets/css/menu.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{asset('assets/css/responsive.css')}}\" rel=\"stylesheet\" type=\"text/css\">

    <script src=\"assets/js/modernizr.min.js\"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->


</head>

<body>


<div id='conexion'>
    <div class=\"wrapper-page\">
        <div class=\"panel panel-color panel-primary panel-pages\">
            <div class=\"panel-heading bg-img\">
                <div class=\"bg-overlay\"></div>
                <h3 class=\"text-center m-t-10 text-white\"> Se connecter </h3>
            </div>


            <div class=\"panel-body\">
                <form method=\"POST\" class=\"form-horizontal m-t-20\" id=\"connexion\">

                    <div class=\"form-group\">
                        <div class=\"col-xs-12\">
                            <input name=\"email\" class=\"form-control input-lg\" type=\"text\" required=\"\" placeholder=\"Votre adresse email\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-xs-12\">
                            <input class=\"form-control input-lg\" type=\"password\" name=\"password\" required=\"\" placeholder=\"Mot de passe\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-xs-12\">
                            <div class=\"checkbox checkbox-primary\">
                                <input id=\"checkbox-signup\" type=\"checkbox\">
                                <label for=\"checkbox-signup\">
                                    se souvenir de moi
                                </label>
                            </div>

                        </div>
                    </div>

                    <div class=\"form-group text-center m-t-40\">
                        <div class=\"col-xs-12\">
                            <button class=\"btn btn-primary btn-lg w-lg waves-effect waves-light\" type=\"submit\">Se connecter</button>
                        </div>
                    </div>

                    <div class=\"form-group m-t-30\">
                        <div class=\"col-sm-7\">
                            <a href=\"#\"><i class=\"fa fa-lock m-r-5\"></i> mot de passe oublier?</a>
                        </div>
                           <div id='creation' class=\"col-sm-5 text-right\">
                            <a href=\"#\">Créer un compte</a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<div id='compte'>
<div class=\"wrapper-page\">
    <div class=\"panel panel-color panel-primary panel-pages\">
        <div class=\"panel-heading bg-img\">
            <div class=\"bg-overlay\"></div>
            <h3 class=\"text-center m-t-10 text-white\">
                Création de compte
            </h3>
        </div>

        <div class=\"panel-body\">
            <form class=\"form-horizontal m-t-20\" method=\"post\" action=\"\">

                <div class=\"form-group\">
                    <div class=\"col-xs-12\">
                        <input class=\"form-control input-lg\" type=\"text\" name=\"nomcomplet\" required=\"\" placeholder=\"nomcomplet \">
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"col-xs-12\">
                        <input class=\"form-control input-lg\" type=\"email\" name=\"email\" required=\"\" placeholder=\"Email\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"col-xs-12\">
                        <input class=\"form-control input-lg\" type=\"text\" name=\"adresse\"  required=\"\" placeholder=\"adresse \">
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"col-xs-12\">
                        <input class=\"form-control input-lg\" type=\"number\" name=\"numpiece\" required=\"\" placeholder=\"numpiece \">
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"col-xs-12\">
                        <input class=\"form-control input-lg\" type=\"number\" name=\"tel\" required=\"\" placeholder=\"tel\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"col-xs-12\">
                        <input class=\"form-control input-lg\" type=\"number\" name=\"codebanque\" required=\"\" placeholder=\"codebanque \">
                    </div>
                </div>              

                <div class=\"form-group\">
                    <div class=\"col-xs-12\">
                        <input class=\"form-control input-lg\" type=\"password\" name=\"motdepasse\" required=\"\" placeholder=\"mot de passe\">
                    </div>
                </div>

                <div class=\"form-group text-center m-t-40\">
                    <div class=\"col-xs-12\">
                        <button class=\"btn btn-primary waves-effect waves-light btn-lg w-lg\" type=\"submit\">Enrigister</button>
                    </div>
                </div>

                <div class=\"form-group m-t-30\">
                    <div id='retour' class=\"col-sm-12 text-center\">
                        <a href=\"#\">J'ai dejà un compte?</a>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
</div>


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

    <script>
        \$(document).ready(function () {
        \$(\"#compte\").hide();
        \$(\"#creation\").click(function () {
                \$(\"#conexion\").hide();
                \$(\"#compte\").show();
            });
        \$(\"#retour\").click(function () {
                \$(\"#compte\").hide();
                \$(\"#conexion\").show();
            });
        });

        //Formulaire de connexion

        \$(\"#connexion\").on(\"submit\", function(e){
            e.preventDefault();
            \$.ajax({

                url: \"{{path(\"ajaxConnexion\")}}\",
                type: \"POST\",
                data: \$(this).serialize(),
                dataType: \"text\",

                success: function(data){
                    if(data==\"ok\")
                        window.location.href = \"{{path(\"admin\")}}\"
                },

                error: function(res, stat, error) {
                    alert(error);
                }
            })
        })
</script>

</body>

</html>", "SNTDarmankoBundle:admin:login.html.twig", "/var/www/html/perso/Darmanko/src/SNT/DarmankoBundle/Resources/views/admin/login.html.twig");
    }
}
