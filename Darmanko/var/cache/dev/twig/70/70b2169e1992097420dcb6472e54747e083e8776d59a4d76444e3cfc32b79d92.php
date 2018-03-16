<?php

/* SNTDarmankoBundle:reservation:darmanko.html.twig */
class __TwigTemplate_c8a3e50e89aec614e027a6f7a402cb6fce8dc2ed92702a05620c990b44e46468 extends Twig_Template
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
        $__internal_c2a26d8e759a812624b8fac69948d64d98d7f5bbdbd97c2ce6b607247f39145e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2a26d8e759a812624b8fac69948d64d98d7f5bbdbd97c2ce6b607247f39145e->enter($__internal_c2a26d8e759a812624b8fac69948d64d98d7f5bbdbd97c2ce6b607247f39145e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:reservation:darmanko.html.twig"));

        $__internal_2b6a80806faa7a5c416afc93f039957ac3a4fa1a6e79f234c33ab10fb7653984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b6a80806faa7a5c416afc93f039957ac3a4fa1a6e79f234c33ab10fb7653984->enter($__internal_2b6a80806faa7a5c416afc93f039957ac3a4fa1a6e79f234c33ab10fb7653984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:reservation:darmanko.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2a26d8e759a812624b8fac69948d64d98d7f5bbdbd97c2ce6b607247f39145e->leave($__internal_c2a26d8e759a812624b8fac69948d64d98d7f5bbdbd97c2ce6b607247f39145e_prof);

        
        $__internal_2b6a80806faa7a5c416afc93f039957ac3a4fa1a6e79f234c33ab10fb7653984->leave($__internal_2b6a80806faa7a5c416afc93f039957ac3a4fa1a6e79f234c33ab10fb7653984_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5fb1211d81d6ae1eadea870410367193b9d61d8a5c9074a2c053e7451ac9253d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fb1211d81d6ae1eadea870410367193b9d61d8a5c9074a2c053e7451ac9253d->enter($__internal_5fb1211d81d6ae1eadea870410367193b9d61d8a5c9074a2c053e7451ac9253d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_071b444ebf85cc28772ea0f50047f0a9f8065d8fbff7b3e029b05d1783eb6a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_071b444ebf85cc28772ea0f50047f0a9f8065d8fbff7b3e029b05d1783eb6a36->enter($__internal_071b444ebf85cc28772ea0f50047f0a9f8065d8fbff7b3e029b05d1783eb6a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Détail-produit";
        
        $__internal_071b444ebf85cc28772ea0f50047f0a9f8065d8fbff7b3e029b05d1783eb6a36->leave($__internal_071b444ebf85cc28772ea0f50047f0a9f8065d8fbff7b3e029b05d1783eb6a36_prof);

        
        $__internal_5fb1211d81d6ae1eadea870410367193b9d61d8a5c9074a2c053e7451ac9253d->leave($__internal_5fb1211d81d6ae1eadea870410367193b9d61d8a5c9074a2c053e7451ac9253d_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_bc4958c25025216a28c22796af2c53f6e4e156ef3f69b6952e57c1942070f7d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc4958c25025216a28c22796af2c53f6e4e156ef3f69b6952e57c1942070f7d5->enter($__internal_bc4958c25025216a28c22796af2c53f6e4e156ef3f69b6952e57c1942070f7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8c2b67a6a3ea450cab8e3e907322a0a1cdfe02861a62bae80173b55d01267dfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c2b67a6a3ea450cab8e3e907322a0a1cdfe02861a62bae80173b55d01267dfa->enter($__internal_8c2b67a6a3ea450cab8e3e907322a0a1cdfe02861a62bae80173b55d01267dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_8c2b67a6a3ea450cab8e3e907322a0a1cdfe02861a62bae80173b55d01267dfa->leave($__internal_8c2b67a6a3ea450cab8e3e907322a0a1cdfe02861a62bae80173b55d01267dfa_prof);

        
        $__internal_bc4958c25025216a28c22796af2c53f6e4e156ef3f69b6952e57c1942070f7d5->leave($__internal_bc4958c25025216a28c22796af2c53f6e4e156ef3f69b6952e57c1942070f7d5_prof);

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
