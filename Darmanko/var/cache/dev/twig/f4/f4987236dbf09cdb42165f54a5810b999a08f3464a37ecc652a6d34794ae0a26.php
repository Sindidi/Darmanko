<?php

/* SNTDarmankoBundle:admin:contrat.html.twig */
class __TwigTemplate_047fa47ace63b2d62b0f0c6022ace15c45b942591e848e089d74b09e9e9e9287 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "SNTDarmankoBundle:admin:contrat.html.twig", 1);
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
        $__internal_e071a3f74b2ecb963a04884c2351d5221eb5b89ba255202ab4070e67b0423576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e071a3f74b2ecb963a04884c2351d5221eb5b89ba255202ab4070e67b0423576->enter($__internal_e071a3f74b2ecb963a04884c2351d5221eb5b89ba255202ab4070e67b0423576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:contrat.html.twig"));

        $__internal_139759553e00e11fd559e92c40d622cfc594d17d3bc823c0406c07939297c8d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_139759553e00e11fd559e92c40d622cfc594d17d3bc823c0406c07939297c8d6->enter($__internal_139759553e00e11fd559e92c40d622cfc594d17d3bc823c0406c07939297c8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:contrat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e071a3f74b2ecb963a04884c2351d5221eb5b89ba255202ab4070e67b0423576->leave($__internal_e071a3f74b2ecb963a04884c2351d5221eb5b89ba255202ab4070e67b0423576_prof);

        
        $__internal_139759553e00e11fd559e92c40d622cfc594d17d3bc823c0406c07939297c8d6->leave($__internal_139759553e00e11fd559e92c40d622cfc594d17d3bc823c0406c07939297c8d6_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_836f0e6abb261275bdc9741174cfa5e86c37256be35d418262e13442f9a55c0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_836f0e6abb261275bdc9741174cfa5e86c37256be35d418262e13442f9a55c0d->enter($__internal_836f0e6abb261275bdc9741174cfa5e86c37256be35d418262e13442f9a55c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5ac6132c75812d027ca3a3e5561e703f1f4b42312257ed9c387074ceff110b03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ac6132c75812d027ca3a3e5561e703f1f4b42312257ed9c387074ceff110b03->enter($__internal_5ac6132c75812d027ca3a3e5561e703f1f4b42312257ed9c387074ceff110b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
<!-- Page-Title -->
<div class=\"row\">
    <div class=\"col-sm-12\">
        <h4 class=\"pull-left page-title\">Détails du contrat</h4>
        <ol class=\"breadcrumb pull-right\">
            <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
        echo "\">Reservations</a></li>
            <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation", array("id" => $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "id", array()))), "html", null, true);
        echo "\">Détail</a></li>
            <li class=\"active\">Contrat</li>
        </ol>
    </div>
</div>

<div class=\"col-lg-6\">
    <div class=\"panel panel-color panel-primary\" style=\"height: 360px;\">
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
    <div class=\"panel panel-color panel-primary\" style=\"height: 360px;\">
        <div class=\"panel-heading\"> 
            <h3 class=\"panel-title\">Informations du Bien</h3> 
        </div> 
        <div class=\"panel-body\"> 
            <p><i><B>Nom du bien: </B></i>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "bien", array()), "nomBien", array()), "html", null, true);
        echo "</p>
            <p><i><B>Type du bien </B></i>";
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

<div class=\"row\">
    <div class=\"col-lg-3\"></div>
    <div class=\"col-lg-6\">
        <div class=\"panel panel-muted panel-border\">
            <div class=\"panel-heading\"> 
                <h3 class=\"panel-title text-primary\">Termes du contrat</h3> 
            </div> 
            <div class=\"panel-body\"> 
            <p><i><B>Caution: </B></i>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "bien", array()), "prixLocation", array()), "html", null, true);
        echo "FCFA</p>
            <p><i><B>Montant payé: </B></i>50000FCA</p>
            <p><i><B>Total: </B></i>";
        // line 56
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "bien", array()), "prixLocation", array()) + 50000), "html", null, true);
        echo "FCFA</p>
            <p class=\"text-primary\">A PRENDRE EN COMPTE</p>
            <p>
                Il est mentionné que si vous reservez un bien et qu'on le valide,une fois le contrat signé et que vous occupez les lieux vous devrez payer chaque fin du mois au plutard le 5
            </p>
            <p>
                <div class=\"col-sm-offset-4 col-sm-9\">
                    <div class=\"checkbox checkbox-primary\">
                        <input id=\"accepte\" type=\"checkbox\">
                        <label>
                            J'ai lu et j'accepte
                        </label>
                    </div>
                </div>
            </p>
            <center><br>
                <button type=\"button\" class=\"btn btn-icon waves-effect waves-light btn-success m-b-5\" disabled=\"disabled\">
                    Enregistrer <i class=\"fa fa-thumbs-o-up\"></i> 
                </button>
            </center>
            </div> 
        </div>
    </div>
</div>

<center>
    <a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation", array("id" => $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "id", array()))), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-danger waves-effect waves-light m-b-5\">Retour</button></a>
</center>   


";
        
        $__internal_5ac6132c75812d027ca3a3e5561e703f1f4b42312257ed9c387074ceff110b03->leave($__internal_5ac6132c75812d027ca3a3e5561e703f1f4b42312257ed9c387074ceff110b03_prof);

        
        $__internal_836f0e6abb261275bdc9741174cfa5e86c37256be35d418262e13442f9a55c0d->leave($__internal_836f0e6abb261275bdc9741174cfa5e86c37256be35d418262e13442f9a55c0d_prof);

    }

    public function getTemplateName()
    {
        return "SNTDarmankoBundle:admin:contrat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 82,  142 => 56,  137 => 54,  121 => 41,  117 => 40,  113 => 39,  109 => 38,  105 => 37,  92 => 27,  88 => 26,  84 => 25,  80 => 24,  76 => 23,  61 => 11,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
        <h4 class=\"pull-left page-title\">Détails du contrat</h4>
        <ol class=\"breadcrumb pull-right\">
            <li><a href=\"{{ path('admin') }}\">Reservations</a></li>
            <li><a href=\"{{ path('reservation', {\"id\": reservation.id}) }}\">Détail</a></li>
            <li class=\"active\">Contrat</li>
        </ol>
    </div>
</div>

<div class=\"col-lg-6\">
    <div class=\"panel panel-color panel-primary\" style=\"height: 360px;\">
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
    <div class=\"panel panel-color panel-primary\" style=\"height: 360px;\">
        <div class=\"panel-heading\"> 
            <h3 class=\"panel-title\">Informations du Bien</h3> 
        </div> 
        <div class=\"panel-body\"> 
            <p><i><B>Nom du bien: </B></i>{{ reservation.bien.nomBien }}</p>
            <p><i><B>Type du bien </B></i>{{ reservation.bien.type.libelle }}</p> 
            <p><i><B>Localité: </B></i>{{ reservation.bien.localite.libelle }}</p>
            <p><i><B>Description: </B></i>{{ reservation.bien.description}}</p>
            <p><i><B>Prix Location: </B></i>{{ reservation.bien.prixLocation}}FCFA</p>
        </div> 
    </div>
</div>

<div class=\"row\">
    <div class=\"col-lg-3\"></div>
    <div class=\"col-lg-6\">
        <div class=\"panel panel-muted panel-border\">
            <div class=\"panel-heading\"> 
                <h3 class=\"panel-title text-primary\">Termes du contrat</h3> 
            </div> 
            <div class=\"panel-body\"> 
            <p><i><B>Caution: </B></i>{{ reservation.bien.prixLocation}}FCFA</p>
            <p><i><B>Montant payé: </B></i>50000FCA</p>
            <p><i><B>Total: </B></i>{{ reservation.bien.prixLocation + 50000}}FCFA</p>
            <p class=\"text-primary\">A PRENDRE EN COMPTE</p>
            <p>
                Il est mentionné que si vous reservez un bien et qu'on le valide,une fois le contrat signé et que vous occupez les lieux vous devrez payer chaque fin du mois au plutard le 5
            </p>
            <p>
                <div class=\"col-sm-offset-4 col-sm-9\">
                    <div class=\"checkbox checkbox-primary\">
                        <input id=\"accepte\" type=\"checkbox\">
                        <label>
                            J'ai lu et j'accepte
                        </label>
                    </div>
                </div>
            </p>
            <center><br>
                <button type=\"button\" class=\"btn btn-icon waves-effect waves-light btn-success m-b-5\" disabled=\"disabled\">
                    Enregistrer <i class=\"fa fa-thumbs-o-up\"></i> 
                </button>
            </center>
            </div> 
        </div>
    </div>
</div>

<center>
    <a href=\"{{ path('reservation', {\"id\": reservation.id}) }}\"><button type=\"button\" class=\"btn btn-danger waves-effect waves-light m-b-5\">Retour</button></a>
</center>   


{% endblock %}", "SNTDarmankoBundle:admin:contrat.html.twig", "/var/www/html/perso/Darmanko/src/SNT/DarmankoBundle/Resources/views/admin/contrat.html.twig");
    }
}
