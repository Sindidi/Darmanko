<?php

/* SNTDarmankoBundle:reservation:upload.html.twig */
class __TwigTemplate_07634c4f1661484c1df53388578942b2f1528b61c0a10fbb6135977172c89df3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::template.html.twig", "SNTDarmankoBundle:reservation:upload.html.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53e7a04fee18c5e517b5912553d9eaf761504ed585f189f03b4e5d6343b91e09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53e7a04fee18c5e517b5912553d9eaf761504ed585f189f03b4e5d6343b91e09->enter($__internal_53e7a04fee18c5e517b5912553d9eaf761504ed585f189f03b4e5d6343b91e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:reservation:upload.html.twig"));

        $__internal_79c743b53c5745059821cec37c515c848e72e62ffca29254154bf7908539d0b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79c743b53c5745059821cec37c515c848e72e62ffca29254154bf7908539d0b5->enter($__internal_79c743b53c5745059821cec37c515c848e72e62ffca29254154bf7908539d0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:reservation:upload.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53e7a04fee18c5e517b5912553d9eaf761504ed585f189f03b4e5d6343b91e09->leave($__internal_53e7a04fee18c5e517b5912553d9eaf761504ed585f189f03b4e5d6343b91e09_prof);

        
        $__internal_79c743b53c5745059821cec37c515c848e72e62ffca29254154bf7908539d0b5->leave($__internal_79c743b53c5745059821cec37c515c848e72e62ffca29254154bf7908539d0b5_prof);

    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        $__internal_880bd1e6b58bd72e18540b54f9aae2e763f8305361c694f2320bc82ebcaed268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_880bd1e6b58bd72e18540b54f9aae2e763f8305361c694f2320bc82ebcaed268->enter($__internal_880bd1e6b58bd72e18540b54f9aae2e763f8305361c694f2320bc82ebcaed268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_27401c27f46ffd9e2f77f9356a6f6d638755a598046e628a1d326928be38db6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27401c27f46ffd9e2f77f9356a6f6d638755a598046e628a1d326928be38db6e->enter($__internal_27401c27f46ffd9e2f77f9356a6f6d638755a598046e628a1d326928be38db6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 4
        echo "
    <!-- Dropzone css -->
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/dropzone/dist/dropzone.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    

";
        
        $__internal_27401c27f46ffd9e2f77f9356a6f6d638755a598046e628a1d326928be38db6e->leave($__internal_27401c27f46ffd9e2f77f9356a6f6d638755a598046e628a1d326928be38db6e_prof);

        
        $__internal_880bd1e6b58bd72e18540b54f9aae2e763f8305361c694f2320bc82ebcaed268->leave($__internal_880bd1e6b58bd72e18540b54f9aae2e763f8305361c694f2320bc82ebcaed268_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_17502e393df6eae10a9d262848748f401d45a944c3e1104367c6251d89e02737 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17502e393df6eae10a9d262848748f401d45a944c3e1104367c6251d89e02737->enter($__internal_17502e393df6eae10a9d262848748f401d45a944c3e1104367c6251d89e02737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2ce7ce9194010ca6609b735dbf2aed5eb98af47032b587cca4fca3280bf7806f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce7ce9194010ca6609b735dbf2aed5eb98af47032b587cca4fca3280bf7806f->enter($__internal_2ce7ce9194010ca6609b735dbf2aed5eb98af47032b587cca4fca3280bf7806f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "
<!-- Page-head -->
<div class=\"page-head\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h3>Vous êtes sur la plate forme d'enregistrement de bien</h3>
            </div>
            
        </div>
    </div>
</div>
<!-- Page-head -->

<div class=\"container\">
    <form method=\"POST\" enctype=\"multipart/form-data\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <h3 class=\"text-primary\">Information du client</h3>
                <div class=\"space20\"></div>
                <div class\"form-group\">
                    <label for=\"email\">Nom du bien</label>
                    <input type=\"text\" name=\"nom\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer le nom du bien\"><br>
                </div>

                <div class\"form-group\">
                    <label for=\"email\">Type du bien</label>
                    <input type=\"text\" id=\"autoType\" name=\"type\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer le type du bien\"><br>
                </div>

                <div class\"form-group\">
                    <label for=\"email\">Localité du bien</label>
                    <input type=\"text\" id=\"autoLocalite\" name=\"localite\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer la localité du bien\"><br>
                </div>

                <div class\"form-group\">
                    <label for=\"email\">Description du bien</label>
                <textarea name=\"description\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer la description\"></textarea><br>
                </div>

                <div class\"form-group\">
                    <label for=\"email\">Proposez votre prix</label>
                    <input type=\"text\" name=\"prix\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer le prix de location\"><br>
                </div>

                <div class\"form-group\">
                    <label for=\"email\">Images du bien</label>
                    <div class=\"col-md-12 portlets\">
                        <!-- Your awesome content goes here -->
                        <div class=\"m-b-30\">
                            <div action=\"#\" class=\"dropzone\" id=\"dropzone\">
                            <div class=\"fallback\">
                                <input type=\"file\" multiple=\"multiple\" name=\"image\"><br>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-1\"></div>
            <div class=\"col-lg-5\">
                <h3 class=\"text-primary\">Information du propriétaire</h3>
                <div class=\"space20\"></div>
                <div id=\"connex\">
                    <div class\"form-group\">
                        <label for=\"email\">Votre email</label>
                        <input type=\"text\" name=\"email\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer email\"><br>
                    </div>

                    <div class\"form-group\">
                        <label for=\"email\">Votre mot de passe</label>
                        <input type=\"text\" name=\"password\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer votre mot de passe\"><br>
                    </div>

                    <a id=\"connProp\" class=\"btn btn-danger col-lg-12\">Créer un compte</a>
                </div>
                <div id=\"compte\">
                    <div class\"form-group\">
                        <label for=\"email\">Votre nom complet</label>
                        <input type=\"text\" name=\"nom\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer nom\"><br>
                    </div>
                    <div class\"form-group\">
                        <label for=\"email\">Votre numero de piéce</label>
                        <input type=\"text\" name=\"numpiece\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer numéro de piéce\"><br>
                    </div>
                    <div class\"form-group\">
                        <label for=\"email\">Votre adresse</label>
                        <input type=\"text\" name=\"adresse\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer adresse\"><br>
                    </div>
                    <div class\"form-group\">
                        <label for=\"email\">Telephone</label>
                        <input type=\"text\" name=\"telephone\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer numero de telephone\"><br>
                    </div>
                    <div class\"form-group\">
                        <label for=\"email\">Votre code banque</label>
                        <input type=\"text\" name=\"banque\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer votre code banque\"><br>
                    </div>
                    <div class\"form-group\">
                        <label for=\"email\">Votre email</label>
                        <input type=\"text\" name=\"emailCompte\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer email\"><br>
                    </div>
                    <div class\"form-group\">
                        <label for=\"email\">Votre mot de passe</label>
                        <input type=\"text\" name=\"password\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer votre mot de passe\"><br>
                    </div>
                    <a id=\"cmpProp\" class=\"btn btn-danger col-lg-12\">Se connecter</a>
                </div>
            </div>
        </div>
        <div class=\"space20\"></div> 
        <button type=\"submit\" class=\"btn btn-primary col-lg-12\">Enregistrer</button>
    </form>
</div>
<div class=\"space80\"></div>
";
        
        $__internal_2ce7ce9194010ca6609b735dbf2aed5eb98af47032b587cca4fca3280bf7806f->leave($__internal_2ce7ce9194010ca6609b735dbf2aed5eb98af47032b587cca4fca3280bf7806f_prof);

        
        $__internal_17502e393df6eae10a9d262848748f401d45a944c3e1104367c6251d89e02737->leave($__internal_17502e393df6eae10a9d262848748f401d45a944c3e1104367c6251d89e02737_prof);

    }

    // line 129
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_7bd66eebe16224a2eb1cf650e62c5c4d7baf635d166c21b6b9b4c0b56eab56e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bd66eebe16224a2eb1cf650e62c5c4d7baf635d166c21b6b9b4c0b56eab56e5->enter($__internal_7bd66eebe16224a2eb1cf650e62c5c4d7baf635d166c21b6b9b4c0b56eab56e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_e0c17f8c2704b0bb4d87ef77b64be968273dcce40d8584811568497ea540417f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c17f8c2704b0bb4d87ef77b64be968273dcce40d8584811568497ea540417f->enter($__internal_e0c17f8c2704b0bb4d87ef77b64be968273dcce40d8584811568497ea540417f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 130
        echo "
        <!-- Page Specific JS Libraries -->
        <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/dropzone/dist/dropzone.js"), "html", null, true);
        echo "\"></script>

        <script>
            \$(\"#compte\").hide();
            \$(\"#connProp\").on(\"click\", function(){
                \$(\"#connex\").hide();
                \$(\"#compte\").show();
            })

            \$(\"#cmpProp\").on(\"click\", function(){
                \$(\"#compte\").hide();
                \$(\"#connex\").show();
            })

        //Auto complétion Localité
            \$.ajax({

                url: \"";
        // line 149
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajaxLocalite");
        echo "\",
                type: \"POST\",
                dataType: \"json\",

                success: function(data) {
                    
                    var tab = []
                    \$.each(data, function(key, value){
                        tab.push(value.nom)
                    })

                    \$( \"#autoLocalite\" ).autocomplete({
                        source: tab
                    });
                },

                error: function(res, stat, error) {
                    console.log(error);
                }
            })

        //Auto complétion type
            \$.ajax({

                url: \"";
        // line 173
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajaxType");
        echo "\",
                type: \"POST\",
                dataType: \"json\",

                success: function(data) {
                    
                    var tab = []
                    \$.each(data, function(key, value){
                        tab.push(value.nom)
                    })

                    \$( \"#autoType\" ).autocomplete({
                        source: tab
                    });
                },

                error: function(res, stat, error) {
                    console.log(error);
                }
            })
        </script>
        
";
        
        $__internal_e0c17f8c2704b0bb4d87ef77b64be968273dcce40d8584811568497ea540417f->leave($__internal_e0c17f8c2704b0bb4d87ef77b64be968273dcce40d8584811568497ea540417f_prof);

        
        $__internal_7bd66eebe16224a2eb1cf650e62c5c4d7baf635d166c21b6b9b4c0b56eab56e5->leave($__internal_7bd66eebe16224a2eb1cf650e62c5c4d7baf635d166c21b6b9b4c0b56eab56e5_prof);

    }

    public function getTemplateName()
    {
        return "SNTDarmankoBundle:reservation:upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 173,  236 => 149,  216 => 132,  212 => 130,  203 => 129,  78 => 12,  69 => 11,  55 => 6,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::template.html.twig\" %}

{% block css %}

    <!-- Dropzone css -->
    <link href=\"{{ asset('assets/plugins/dropzone/dist/dropzone.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    

{% endblock %}

{% block content %}

<!-- Page-head -->
<div class=\"page-head\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h3>Vous êtes sur la plate forme d'enregistrement de bien</h3>
            </div>
            
        </div>
    </div>
</div>
<!-- Page-head -->

<div class=\"container\">
    <form method=\"POST\" enctype=\"multipart/form-data\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <h3 class=\"text-primary\">Information du client</h3>
                <div class=\"space20\"></div>
                <div class\"form-group\">
                    <label for=\"email\">Nom du bien</label>
                    <input type=\"text\" name=\"nom\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer le nom du bien\"><br>
                </div>

                <div class\"form-group\">
                    <label for=\"email\">Type du bien</label>
                    <input type=\"text\" id=\"autoType\" name=\"type\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer le type du bien\"><br>
                </div>

                <div class\"form-group\">
                    <label for=\"email\">Localité du bien</label>
                    <input type=\"text\" id=\"autoLocalite\" name=\"localite\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer la localité du bien\"><br>
                </div>

                <div class\"form-group\">
                    <label for=\"email\">Description du bien</label>
                <textarea name=\"description\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer la description\"></textarea><br>
                </div>

                <div class\"form-group\">
                    <label for=\"email\">Proposez votre prix</label>
                    <input type=\"text\" name=\"prix\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer le prix de location\"><br>
                </div>

                <div class\"form-group\">
                    <label for=\"email\">Images du bien</label>
                    <div class=\"col-md-12 portlets\">
                        <!-- Your awesome content goes here -->
                        <div class=\"m-b-30\">
                            <div action=\"#\" class=\"dropzone\" id=\"dropzone\">
                            <div class=\"fallback\">
                                <input type=\"file\" multiple=\"multiple\" name=\"image\"><br>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-1\"></div>
            <div class=\"col-lg-5\">
                <h3 class=\"text-primary\">Information du propriétaire</h3>
                <div class=\"space20\"></div>
                <div id=\"connex\">
                    <div class\"form-group\">
                        <label for=\"email\">Votre email</label>
                        <input type=\"text\" name=\"email\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer email\"><br>
                    </div>

                    <div class\"form-group\">
                        <label for=\"email\">Votre mot de passe</label>
                        <input type=\"text\" name=\"password\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer votre mot de passe\"><br>
                    </div>

                    <a id=\"connProp\" class=\"btn btn-danger col-lg-12\">Créer un compte</a>
                </div>
                <div id=\"compte\">
                    <div class\"form-group\">
                        <label for=\"email\">Votre nom complet</label>
                        <input type=\"text\" name=\"nom\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer nom\"><br>
                    </div>
                    <div class\"form-group\">
                        <label for=\"email\">Votre numero de piéce</label>
                        <input type=\"text\" name=\"numpiece\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer numéro de piéce\"><br>
                    </div>
                    <div class\"form-group\">
                        <label for=\"email\">Votre adresse</label>
                        <input type=\"text\" name=\"adresse\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer adresse\"><br>
                    </div>
                    <div class\"form-group\">
                        <label for=\"email\">Telephone</label>
                        <input type=\"text\" name=\"telephone\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer numero de telephone\"><br>
                    </div>
                    <div class\"form-group\">
                        <label for=\"email\">Votre code banque</label>
                        <input type=\"text\" name=\"banque\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer votre code banque\"><br>
                    </div>
                    <div class\"form-group\">
                        <label for=\"email\">Votre email</label>
                        <input type=\"text\" name=\"emailCompte\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer email\"><br>
                    </div>
                    <div class\"form-group\">
                        <label for=\"email\">Votre mot de passe</label>
                        <input type=\"text\" name=\"password\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer votre mot de passe\"><br>
                    </div>
                    <a id=\"cmpProp\" class=\"btn btn-danger col-lg-12\">Se connecter</a>
                </div>
            </div>
        </div>
        <div class=\"space20\"></div> 
        <button type=\"submit\" class=\"btn btn-primary col-lg-12\">Enregistrer</button>
    </form>
</div>
<div class=\"space80\"></div>
{% endblock %}

{% block javascript %}

        <!-- Page Specific JS Libraries -->
        <script src=\"{{ asset('assets/plugins/dropzone/dist/dropzone.js')}}\"></script>

        <script>
            \$(\"#compte\").hide();
            \$(\"#connProp\").on(\"click\", function(){
                \$(\"#connex\").hide();
                \$(\"#compte\").show();
            })

            \$(\"#cmpProp\").on(\"click\", function(){
                \$(\"#compte\").hide();
                \$(\"#connex\").show();
            })

        //Auto complétion Localité
            \$.ajax({

                url: \"{{path(\"ajaxLocalite\")}}\",
                type: \"POST\",
                dataType: \"json\",

                success: function(data) {
                    
                    var tab = []
                    \$.each(data, function(key, value){
                        tab.push(value.nom)
                    })

                    \$( \"#autoLocalite\" ).autocomplete({
                        source: tab
                    });
                },

                error: function(res, stat, error) {
                    console.log(error);
                }
            })

        //Auto complétion type
            \$.ajax({

                url: \"{{path(\"ajaxType\")}}\",
                type: \"POST\",
                dataType: \"json\",

                success: function(data) {
                    
                    var tab = []
                    \$.each(data, function(key, value){
                        tab.push(value.nom)
                    })

                    \$( \"#autoType\" ).autocomplete({
                        source: tab
                    });
                },

                error: function(res, stat, error) {
                    console.log(error);
                }
            })
        </script>
        
{% endblock %}", "SNTDarmankoBundle:reservation:upload.html.twig", "/var/www/html/perso/Darmanko/src/SNT/DarmankoBundle/Resources/views/reservation/upload.html.twig");
    }
}
