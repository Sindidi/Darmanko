<?php

/* SNTDarmankoBundle:admin:reservation.html.twig */
class __TwigTemplate_a7b1524f2d658f5758993a55a47e40169b5f6f54515c4b938f8f366ad4cbb486 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "SNTDarmankoBundle:admin:reservation.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b85e3d4ec12507621025048f9d7da7eccbcda0d504195af72c1b13496b08c5a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b85e3d4ec12507621025048f9d7da7eccbcda0d504195af72c1b13496b08c5a6->enter($__internal_b85e3d4ec12507621025048f9d7da7eccbcda0d504195af72c1b13496b08c5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:reservation.html.twig"));

        $__internal_38aae9eab0e27aeb4fbeb6ee27ab8bec3abbaeadc0ca7cdd6f156df85170298c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38aae9eab0e27aeb4fbeb6ee27ab8bec3abbaeadc0ca7cdd6f156df85170298c->enter($__internal_38aae9eab0e27aeb4fbeb6ee27ab8bec3abbaeadc0ca7cdd6f156df85170298c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:reservation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b85e3d4ec12507621025048f9d7da7eccbcda0d504195af72c1b13496b08c5a6->leave($__internal_b85e3d4ec12507621025048f9d7da7eccbcda0d504195af72c1b13496b08c5a6_prof);

        
        $__internal_38aae9eab0e27aeb4fbeb6ee27ab8bec3abbaeadc0ca7cdd6f156df85170298c->leave($__internal_38aae9eab0e27aeb4fbeb6ee27ab8bec3abbaeadc0ca7cdd6f156df85170298c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ac290fbfaaa3b02c7fb926f2fad3e2fb93f380c74c9bf1e26b0c95164625ebca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac290fbfaaa3b02c7fb926f2fad3e2fb93f380c74c9bf1e26b0c95164625ebca->enter($__internal_ac290fbfaaa3b02c7fb926f2fad3e2fb93f380c74c9bf1e26b0c95164625ebca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b6890f2f31b2114b2259dd7ad9bcce4d38193b6b9cf4035ffebb0f4d7d9293e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6890f2f31b2114b2259dd7ad9bcce4d38193b6b9cf4035ffebb0f4d7d9293e7->enter($__internal_b6890f2f31b2114b2259dd7ad9bcce4d38193b6b9cf4035ffebb0f4d7d9293e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
<!-- Page-Title -->
<div class=\"row\">
    <div class=\"col-sm-12\">
        <h4 class=\"pull-left page-title\">Détails de la réservation</h4>
        <ol class=\"breadcrumb pull-right\">
            <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
        echo "\">Reservations</a></li>
            <li class=\"active\">Détail</li>
            <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contrat", array("id" => $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "id", array()))), "html", null, true);
        echo "\">Contrat</a></li>
        </ol>
    </div>
</div>

<div class=\"col-lg-6\">
    <div class=\"panel panel-border panel-primary\" style=\"height: 360px;\">
        <div class=\"panel-heading\"> 
            <h3 class=\"panel-title\">Informations du client</h3> 
        </div> 
        <div class=\"panel-body\"> 
            <p><i><B>Nom du client: </B></i>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "client", array()), "nomComplet", array()), "html", null, true);
        echo "</p>
            <p><i><B>Numero de pièce: </B></i>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "client", array()), "numpiece", array()), "html", null, true);
        echo "</p> 
            <p><i><B>Adresse: </B></i>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "client", array()), "adress", array()), "html", null, true);
        echo "</p>
            <p><i><B>Téléphone: </B></i>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "client", array()), "tel", array()), "html", null, true);
        echo "</p>
            <p><i><B>Email: </B></i>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "client", array()), "email", array()), "html", null, true);
        echo "</p>
        </div> 
    </div>
</div>
<div class=\"col-lg-6\">
    <div class=\"panel panel-border panel-primary\" style=\"height: 360px;\">
        <div class=\"panel-heading\"> 
            <h3 class=\"panel-title\">Informations du Bien</h3> 
        </div> 
        <div class=\"panel-body\"> 
            <p><i><B>Nom du bien: </B></i>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "bien", array()), "nomBien", array()), "html", null, true);
        echo "</p>
            <p><i><B>Type du bien: </B></i>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "bien", array()), "type", array()), "libelle", array()), "html", null, true);
        echo "</p> 
            <p><i><B>Localité: </B></i>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "bien", array()), "localite", array()), "libelle", array()), "html", null, true);
        echo "</p>
            <p><i><B>Description: </B></i>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "bien", array()), "description", array()), "html", null, true);
        echo "</p>
            <p><i><B>Prix Location: </B></i>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "bien", array()), "prixLocation", array()), "html", null, true);
        echo "FCFA</p>
        </div> 
    </div>
</div>
<div class=\"col-lg-2\"></div>
<div class=\"col-lg-8\">
    <div class=\"panel panel-color panel-primary\">
        <div class=\"panel-heading\"> 
            <h3 class=\"panel-title\">Images du biens</h3> 
        </div> 
        <div class=\"panel-body\"> 
            <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
                <!-- Indicators -->
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
                    <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class=\"carousel-inner\">
                    <div class=\"item active\">
                        <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "bien", array()), "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
        echo "\" alt=\"Los Angeles\" style=\"width: 100%; height: 250px\">
                    </div>
                    ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "bien", array()), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["images"]) {
            // line 65
            echo "                    <div class=\"item\">
                        <img src=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["images"], "image", array()), "html", null, true);
            echo "\" alt=\"Los Angeles\" style=\"width: 100%; height: 250px;\">
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['images'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                </div> 
                <!-- Left and right controls -->
                <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
</div>

<center>
    <a href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enCours");
        echo "\"><button type=\"button\" class=\"btn btn-danger waves-effect waves-light m-b-5\">Retour</button></a>
    <a href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contrat", array("id" => $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "id", array()))), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-primary waves-effect waves-light m-b-5\">Valider</button></a>
</center>


";
        
        $__internal_b6890f2f31b2114b2259dd7ad9bcce4d38193b6b9cf4035ffebb0f4d7d9293e7->leave($__internal_b6890f2f31b2114b2259dd7ad9bcce4d38193b6b9cf4035ffebb0f4d7d9293e7_prof);

        
        $__internal_ac290fbfaaa3b02c7fb926f2fad3e2fb93f380c74c9bf1e26b0c95164625ebca->leave($__internal_ac290fbfaaa3b02c7fb926f2fad3e2fb93f380c74c9bf1e26b0c95164625ebca_prof);

    }

    public function getTemplateName()
    {
        return "SNTDarmankoBundle:admin:reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 87,  187 => 86,  168 => 69,  158 => 66,  155 => 65,  151 => 64,  145 => 62,  121 => 41,  117 => 40,  113 => 39,  109 => 38,  105 => 37,  92 => 27,  88 => 26,  84 => 25,  80 => 24,  76 => 23,  62 => 12,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::admin.html.twig\" %}

{% block content %}

<!-- Page-Title -->
<div class=\"row\">
    <div class=\"col-sm-12\">
        <h4 class=\"pull-left page-title\">Détails de la réservation</h4>
        <ol class=\"breadcrumb pull-right\">
            <li><a href=\"{{ path('admin') }}\">Reservations</a></li>
            <li class=\"active\">Détail</li>
            <li><a href=\"{{ path('contrat', {\"id\": reservation.id}) }}\">Contrat</a></li>
        </ol>
    </div>
</div>

<div class=\"col-lg-6\">
    <div class=\"panel panel-border panel-primary\" style=\"height: 360px;\">
        <div class=\"panel-heading\"> 
            <h3 class=\"panel-title\">Informations du client</h3> 
        </div> 
        <div class=\"panel-body\"> 
            <p><i><B>Nom du client: </B></i>{{ reservation.client.nomComplet }}</p>
            <p><i><B>Numero de pièce: </B></i>{{ reservation.client.numpiece }}</p> 
            <p><i><B>Adresse: </B></i>{{ reservation.client.adress}}</p>
            <p><i><B>Téléphone: </B></i>{{ reservation.client.tel}}</p>
            <p><i><B>Email: </B></i>{{ reservation.client.email}}</p>
        </div> 
    </div>
</div>
<div class=\"col-lg-6\">
    <div class=\"panel panel-border panel-primary\" style=\"height: 360px;\">
        <div class=\"panel-heading\"> 
            <h3 class=\"panel-title\">Informations du Bien</h3> 
        </div> 
        <div class=\"panel-body\"> 
            <p><i><B>Nom du bien: </B></i>{{ reservation.bien.nomBien }}</p>
            <p><i><B>Type du bien: </B></i>{{ reservation.bien.type.libelle }}</p> 
            <p><i><B>Localité: </B></i>{{ reservation.bien.localite.libelle }}</p>
            <p><i><B>Description: </B></i>{{ reservation.bien.description}}</p>
            <p><i><B>Prix Location: </B></i>{{ reservation.bien.prixLocation}}FCFA</p>
        </div> 
    </div>
</div>
<div class=\"col-lg-2\"></div>
<div class=\"col-lg-8\">
    <div class=\"panel panel-color panel-primary\">
        <div class=\"panel-heading\"> 
            <h3 class=\"panel-title\">Images du biens</h3> 
        </div> 
        <div class=\"panel-body\"> 
            <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
                <!-- Indicators -->
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
                    <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class=\"carousel-inner\">
                    <div class=\"item active\">
                        <img src=\"{{ asset('image/') }}{{ reservation.bien.images[0].image }}\" alt=\"Los Angeles\" style=\"width: 100%; height: 250px\">
                    </div>
                    {% for images in reservation.bien.images %}
                    <div class=\"item\">
                        <img src=\"{{ asset('image/') }}{{ images.image }}\" alt=\"Los Angeles\" style=\"width: 100%; height: 250px;\">
                    </div>
                    {% endfor %}
                </div> 
                <!-- Left and right controls -->
                <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
</div>

<center>
    <a href=\"{{ path('enCours') }}\"><button type=\"button\" class=\"btn btn-danger waves-effect waves-light m-b-5\">Retour</button></a>
    <a href=\"{{ path('contrat', {\"id\": reservation.id}) }}\"><button type=\"button\" class=\"btn btn-primary waves-effect waves-light m-b-5\">Valider</button></a>
</center>


{% endblock %}", "SNTDarmankoBundle:admin:reservation.html.twig", "/var/www/html/perso/Darmanko/src/SNT/DarmankoBundle/Resources/views/admin/reservation.html.twig");
    }
}
