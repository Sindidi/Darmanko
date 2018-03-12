<?php

/* SNTDarmankoBundle:reservation:darmanko.html.twig */
class __TwigTemplate_8a38259ced22c134f1ba180fa7c4a7bf7f720688a21acb34ae15af0cdc9c0c2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::template.html.twig", "SNTDarmankoBundle:reservation:darmanko.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e771eb69582d27d3ba0b9d5823f1225dcfceef93d4c6f077307c130611457b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e771eb69582d27d3ba0b9d5823f1225dcfceef93d4c6f077307c130611457b1->enter($__internal_0e771eb69582d27d3ba0b9d5823f1225dcfceef93d4c6f077307c130611457b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:reservation:darmanko.html.twig"));

        $__internal_c80c326518aed9283c12c694decc28c0dc724471d729c0ffc934a8eda6ae01a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c80c326518aed9283c12c694decc28c0dc724471d729c0ffc934a8eda6ae01a2->enter($__internal_c80c326518aed9283c12c694decc28c0dc724471d729c0ffc934a8eda6ae01a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:reservation:darmanko.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e771eb69582d27d3ba0b9d5823f1225dcfceef93d4c6f077307c130611457b1->leave($__internal_0e771eb69582d27d3ba0b9d5823f1225dcfceef93d4c6f077307c130611457b1_prof);

        
        $__internal_c80c326518aed9283c12c694decc28c0dc724471d729c0ffc934a8eda6ae01a2->leave($__internal_c80c326518aed9283c12c694decc28c0dc724471d729c0ffc934a8eda6ae01a2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1dbdd3a587897b97cc3d36a1f1434d2c263e8e8fa0e6fc60034ffa00c99bbcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1dbdd3a587897b97cc3d36a1f1434d2c263e8e8fa0e6fc60034ffa00c99bbcd->enter($__internal_b1dbdd3a587897b97cc3d36a1f1434d2c263e8e8fa0e6fc60034ffa00c99bbcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1819c4928176ebafe0fae003ca81f90c228998088c58edb6e5504e39a06b00df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1819c4928176ebafe0fae003ca81f90c228998088c58edb6e5504e39a06b00df->enter($__internal_1819c4928176ebafe0fae003ca81f90c228998088c58edb6e5504e39a06b00df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Détail-produit";
        
        $__internal_1819c4928176ebafe0fae003ca81f90c228998088c58edb6e5504e39a06b00df->leave($__internal_1819c4928176ebafe0fae003ca81f90c228998088c58edb6e5504e39a06b00df_prof);

        
        $__internal_b1dbdd3a587897b97cc3d36a1f1434d2c263e8e8fa0e6fc60034ffa00c99bbcd->leave($__internal_b1dbdd3a587897b97cc3d36a1f1434d2c263e8e8fa0e6fc60034ffa00c99bbcd_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_d3aa3fc708a90514a10c9ba12fa1883e8264762ef2ca25e864f57fce45c4ca92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3aa3fc708a90514a10c9ba12fa1883e8264762ef2ca25e864f57fce45c4ca92->enter($__internal_d3aa3fc708a90514a10c9ba12fa1883e8264762ef2ca25e864f57fce45c4ca92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6b5607b6cea67df7c5c318b27b9c30b4c49da386bdfd2e1ebc30fdcd94de2e50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b5607b6cea67df7c5c318b27b9c30b4c49da386bdfd2e1ebc30fdcd94de2e50->enter($__internal_6b5607b6cea67df7c5c318b27b9c30b4c49da386bdfd2e1ebc30fdcd94de2e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
<!-- Page-head -->
<div class=\"page-head\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h3>Nos biens</h3>
            </div>
            
        </div>
    </div>
</div>
<!-- Page-head -->

<div class=\"space80\"></div>

<!-- Portfolio content -->
<section id=\"portfolio\" class=\"container no-padding\">
    <div class=\"col-md-12 no-padding\">
        <!-- Start Filter -->
        <ul class=\"folio-filter xtra\" data-option-key=\"filter\">
            <li><a class=\"selected\" href=\"#filter\" data-option-value=\"*\"><span><i class=\"fa fa-th-large\"></i></span>Tous les biens</a></li>
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? $this->getContext($context, "types")));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 29
            echo "            <li><a href=\"#filter\" data-option-value=\".";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "libelle", array()), "html", null, true);
            echo "\"><span><i class=\"fa fa-pencil-square-o\"></i></span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "libelle", array()), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </ul>
        <!-- End Filter -->
    </div>
    <div class=\"portfolio-inner nport\">
        <div id=\"folio\" class=\"isotope col-md-12 no-padding\">
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 37
            echo "        ";
            // line 38
            echo "            <div class=\"folio-item col-md-3 no-padding isotope-item ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "type", array()), "libelle", array()), "html", null, true);
            echo "\">
                <div class=\"item works-content\">
                    <div class=\"works-overlay\">
                        <img style=\"height: 200px;\" class=\"img-responsive\" src=\"data:image/png;base64,";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["bien"], "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" alt=\"\"/>
                        <span>
                            <div class=\"zoom\">
                                <div class=\"zoom-info\">
                                    <a class=\"lightbox-popup\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["bien"], "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\">Aggrandir</a>
                                    <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail", array("id" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
            echo "\">Voir détail</a>
                                </div>
                            </div>
                        </span>
                    </div>
                    <h4>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nomBien", array()), "html", null, true);
            echo "<span >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixLocation", array()), "html", null, true);
            echo "</span></h4>
                </div>
            </div>
        ";
            // line 55
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        </div>

        <ul class=\"pagination\">
            ";
        // line 59
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["biens"] ?? $this->getContext($context, "biens")));
        echo "
        </ul>
        <div class=\"space20\"></div>
    </div>
</section>
<!-- Portfolio content -->

<div class=\"space60\"></div>



";
        
        $__internal_6b5607b6cea67df7c5c318b27b9c30b4c49da386bdfd2e1ebc30fdcd94de2e50->leave($__internal_6b5607b6cea67df7c5c318b27b9c30b4c49da386bdfd2e1ebc30fdcd94de2e50_prof);

        
        $__internal_d3aa3fc708a90514a10c9ba12fa1883e8264762ef2ca25e864f57fce45c4ca92->leave($__internal_d3aa3fc708a90514a10c9ba12fa1883e8264762ef2ca25e864f57fce45c4ca92_prof);

    }

    public function getTemplateName()
    {
        return "SNTDarmankoBundle:reservation:darmanko.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 59,  161 => 56,  155 => 55,  147 => 51,  139 => 46,  134 => 45,  127 => 41,  120 => 38,  118 => 37,  114 => 36,  107 => 31,  96 => 29,  92 => 28,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Détail-produit{% endblock %}

{% block content %}

<!-- Page-head -->
<div class=\"page-head\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h3>Nos biens</h3>
            </div>
            
        </div>
    </div>
</div>
<!-- Page-head -->

<div class=\"space80\"></div>

<!-- Portfolio content -->
<section id=\"portfolio\" class=\"container no-padding\">
    <div class=\"col-md-12 no-padding\">
        <!-- Start Filter -->
        <ul class=\"folio-filter xtra\" data-option-key=\"filter\">
            <li><a class=\"selected\" href=\"#filter\" data-option-value=\"*\"><span><i class=\"fa fa-th-large\"></i></span>Tous les biens</a></li>
            {% for type in types %}
            <li><a href=\"#filter\" data-option-value=\".{{type.libelle}}\"><span><i class=\"fa fa-pencil-square-o\"></i></span>{{type.libelle}}</a></li>
            {% endfor %}
        </ul>
        <!-- End Filter -->
    </div>
    <div class=\"portfolio-inner nport\">
        <div id=\"folio\" class=\"isotope col-md-12 no-padding\">
        {% for bien in biens %}
        {# {% if bien.etat == 1 %} #}
            <div class=\"folio-item col-md-3 no-padding isotope-item {{ bien.type.libelle }}\">
                <div class=\"item works-content\">
                    <div class=\"works-overlay\">
                        <img style=\"height: 200px;\" class=\"img-responsive\" src=\"data:image/png;base64,{{ bien.images[0].image }}\" alt=\"\"/>
                        <span>
                            <div class=\"zoom\">
                                <div class=\"zoom-info\">
                                    <a class=\"lightbox-popup\" href=\"{{asset('image/')}}{{bien.images[0].image}}\">Aggrandir</a>
                                    <a href=\"{{path('detail', {'id':bien.id} )}}\">Voir détail</a>
                                </div>
                            </div>
                        </span>
                    </div>
                    <h4>{{ bien.nomBien }}<span >{{ bien.prixLocation }}</span></h4>
                </div>
            </div>
        {# {% endif %} #}
        {% endfor %}
        </div>

        <ul class=\"pagination\">
            {{ knp_pagination_render(biens) }}
        </ul>
        <div class=\"space20\"></div>
    </div>
</section>
<!-- Portfolio content -->

<div class=\"space60\"></div>



{% endblock %}
", "SNTDarmankoBundle:reservation:darmanko.html.twig", "/var/www/html/perso/Darmanko/src/SNT/DarmankoBundle/Resources/views/reservation/darmanko.html.twig");
    }
}
