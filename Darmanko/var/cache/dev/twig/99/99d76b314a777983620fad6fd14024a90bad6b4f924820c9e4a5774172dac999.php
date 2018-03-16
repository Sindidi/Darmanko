<?php

/* SNTDarmankoBundle:reservation:list.html.twig */
class __TwigTemplate_21b084b275425065809998c13c39a78e703b1da24bd48b533bca4b5cfb795054 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::template.html.twig", "SNTDarmankoBundle:reservation:list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_39d3b9c953714925be946c3fe9f54f020a5ac51834b03e56b345334ed1bf8c3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39d3b9c953714925be946c3fe9f54f020a5ac51834b03e56b345334ed1bf8c3f->enter($__internal_39d3b9c953714925be946c3fe9f54f020a5ac51834b03e56b345334ed1bf8c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:reservation:list.html.twig"));

        $__internal_c54674bb5ef1802a5600a3ede948b5a9c696c9ed8ce6a917ea5f2ca238c8ba5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c54674bb5ef1802a5600a3ede948b5a9c696c9ed8ce6a917ea5f2ca238c8ba5e->enter($__internal_c54674bb5ef1802a5600a3ede948b5a9c696c9ed8ce6a917ea5f2ca238c8ba5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:reservation:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39d3b9c953714925be946c3fe9f54f020a5ac51834b03e56b345334ed1bf8c3f->leave($__internal_39d3b9c953714925be946c3fe9f54f020a5ac51834b03e56b345334ed1bf8c3f_prof);

        
        $__internal_c54674bb5ef1802a5600a3ede948b5a9c696c9ed8ce6a917ea5f2ca238c8ba5e->leave($__internal_c54674bb5ef1802a5600a3ede948b5a9c696c9ed8ce6a917ea5f2ca238c8ba5e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec5bded10cd00cd2799100751d7d62e4708a1c1bbba7325a26e2d3b9d78d4177 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec5bded10cd00cd2799100751d7d62e4708a1c1bbba7325a26e2d3b9d78d4177->enter($__internal_ec5bded10cd00cd2799100751d7d62e4708a1c1bbba7325a26e2d3b9d78d4177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5ae89c5d14ad751c005b98844d8e26885bb9df8013af0329d7f3b2e8c8e36ef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ae89c5d14ad751c005b98844d8e26885bb9df8013af0329d7f3b2e8c8e36ef1->enter($__internal_5ae89c5d14ad751c005b98844d8e26885bb9df8013af0329d7f3b2e8c8e36ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Détail-produit";
        
        $__internal_5ae89c5d14ad751c005b98844d8e26885bb9df8013af0329d7f3b2e8c8e36ef1->leave($__internal_5ae89c5d14ad751c005b98844d8e26885bb9df8013af0329d7f3b2e8c8e36ef1_prof);

        
        $__internal_ec5bded10cd00cd2799100751d7d62e4708a1c1bbba7325a26e2d3b9d78d4177->leave($__internal_ec5bded10cd00cd2799100751d7d62e4708a1c1bbba7325a26e2d3b9d78d4177_prof);

    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        $__internal_a0d31b69a414825eb34fe2a6f14b19c6f35b73202929e4fdfc6ef549aacfee41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0d31b69a414825eb34fe2a6f14b19c6f35b73202929e4fdfc6ef549aacfee41->enter($__internal_a0d31b69a414825eb34fe2a6f14b19c6f35b73202929e4fdfc6ef549aacfee41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_3ebf67beb3cac177a9f7555c4417930d0bc1f5a4becf3ad253b715426acbe6f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ebf67beb3cac177a9f7555c4417930d0bc1f5a4becf3ad253b715426acbe6f2->enter($__internal_3ebf67beb3cac177a9f7555c4417930d0bc1f5a4becf3ad253b715426acbe6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 6
        echo "
<link rel=\"Stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/select2.css"), "html", null, true);
        echo "\" />
<link rel=\"Stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/select2-bootstrap.css"), "html", null, true);
        echo "\" />

";
        
        $__internal_3ebf67beb3cac177a9f7555c4417930d0bc1f5a4becf3ad253b715426acbe6f2->leave($__internal_3ebf67beb3cac177a9f7555c4417930d0bc1f5a4becf3ad253b715426acbe6f2_prof);

        
        $__internal_a0d31b69a414825eb34fe2a6f14b19c6f35b73202929e4fdfc6ef549aacfee41->leave($__internal_a0d31b69a414825eb34fe2a6f14b19c6f35b73202929e4fdfc6ef549aacfee41_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_0b60fed93bddf3051e0ecdf35a0deef7fef1a1c678c3c640db07a2bdbc739a01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b60fed93bddf3051e0ecdf35a0deef7fef1a1c678c3c640db07a2bdbc739a01->enter($__internal_0b60fed93bddf3051e0ecdf35a0deef7fef1a1c678c3c640db07a2bdbc739a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1c9c302916bbbfaca1ff76fa9a86cd269d34b0822f0af43dbdb4ca12dcb02955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9c302916bbbfaca1ff76fa9a86cd269d34b0822f0af43dbdb4ca12dcb02955->enter($__internal_1c9c302916bbbfaca1ff76fa9a86cd269d34b0822f0af43dbdb4ca12dcb02955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "
<!-- Slider -->
 <div class=\"fullwidthbanner-container\" >
\t<div class=\"fullwidthbanner\">
\t\t<ul>
\t\t\t<li data-transition=\"random\" data-slotamount=\"7\" data-masterspeed=\"1000\">
\t\t\t\t<img src=\"data:image/png;base64,";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["bienSlide"] ?? $this->getContext($context, "bienSlide")), 3, array(), "array"), "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
        echo "\" alt=\"slide\" data-fullwidthcentering=\"true\">
                <div class=\"tp-caption large_black sfr carousel-caption-inner\" data-x=\"30\" data-y=\"80\" data-speed=\"1100\" data-start=\"1100\" data-easing=\"easeInOutBack\" style=\"font-size:36px;\">
\t\t\t\t\t<h3><span>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["bienSlide"] ?? $this->getContext($context, "bienSlide")), 3, array(), "array"), "nomBien", array()), "html", null, true);
        echo "</span></h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"tp-caption large_black sfr carousel-caption-inner\" data-x=\"30\" data-y=\"196\" data-speed=\"1100\" data-start=\"1400\" data-easing=\"easeInOutBack\">
\t\t\t\t\t<p>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["bienSlide"] ?? $this->getContext($context, "bienSlide")), 3, array(), "array"), "description", array()), "html", null, true);
        echo "<br />Pour ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["bienSlide"] ?? $this->getContext($context, "bienSlide")), 3, array(), "array"), "prixLocation", array()), "html", null, true);
        echo "FCFA</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"tp-caption lfb carousel-caption-inner\" data-x=\"30\" data-y=\"310\" data-speed=\"1300\" data-start=\"1700\" data-easing=\"easeInOutBack\">
\t\t\t\t\t<a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail", array("id" => $this->getAttribute($this->getAttribute(($context["bienSlide"] ?? $this->getContext($context, "bienSlide")), 3, array(), "array"), "id", array()))), "html", null, true);
        echo "\"><button type=\"button\" class=\"button-blue\" >Reserver maintenant!</button></a>
\t\t\t\t</div>\t\t\t\t
\t\t\t</li>
\t\t\t<li data-transition=\"random\" data-slotamount=\"7\" data-masterspeed=\"1000\">
\t\t\t\t<img src=\"data:image/png;base64,";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["bienSlide"] ?? $this->getContext($context, "bienSlide")), 1, array(), "array"), "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
        echo "\" alt=\"slide\" data-fullwidthcentering=\"true\">
                <div class=\"tp-caption large_black sfr carousel-caption-inner\" data-x=\"30\" data-y=\"80\" data-speed=\"1100\" data-start=\"1100\" data-easing=\"easeInOutBack\" style=\"font-size:36px;\">
\t\t\t\t\t<h3><span>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["bienSlide"] ?? $this->getContext($context, "bienSlide")), 1, array(), "array"), "nomBien", array()), "html", null, true);
        echo "</span></h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"tp-caption large_black sfr carousel-caption-inner\" data-x=\"30\" data-y=\"196\" data-speed=\"1100\" data-start=\"1400\" data-easing=\"easeInOutBack\">
\t\t\t\t\t<p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["bienSlide"] ?? $this->getContext($context, "bienSlide")), 4, array(), "array"), "description", array()), "html", null, true);
        echo "<br />Pour ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["bienSlide"] ?? $this->getContext($context, "bienSlide")), 1, array(), "array"), "prixLocation", array()), "html", null, true);
        echo "FCFA</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"tp-caption lfb carousel-caption-inner\" data-x=\"30\" data-y=\"310\" data-speed=\"1300\" data-start=\"1700\" data-easing=\"easeInOutBack\">
\t\t\t\t\t<a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail", array("id" => $this->getAttribute($this->getAttribute(($context["bienSlide"] ?? $this->getContext($context, "bienSlide")), 1, array(), "array"), "id", array()))), "html", null, true);
        echo "\"><button type=\"button\" class=\"button-blue\" >Reserver maintenant!</button></a>
\t\t\t\t</div>\t\t\t\t
\t\t\t</li>
\t\t</ul>
\t</div>
</div>
<!-- Slider -->

<div class=\"space60\"></div>

<div style=\"text-align: center;\">
\t<h1>Rechercher un bien</h1>
\t<form class=\"form-inline row\" method=\"POST\">
\t\t<div class=\"col-lg-2\"></div>
\t\t<div class=\"form-group col-lg-4\" style=\"width: 200px;\">
\t\t\t<select name=\"type\" class=\"select2 form-control\">
\t\t\t\t<option value=\"\">Choisir le type</option>
\t\t\t\t";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? $this->getContext($context, "types")));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 57
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "libelle", array()), "html", null, true);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t\t</select>
\t\t</div>
\t\t<div class=\"form-group col-lg-2\" style=\"width: 200px;\">
\t\t\t<select name=\"localite\" class=\"select2 form-control\" data-placeholder=\"Choisir une localité\">
\t\t\t\t<option value=\"\">Choisir localité</option>
\t\t\t\t";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["localites"] ?? $this->getContext($context, "localites")));
        foreach ($context['_seq'] as $context["_key"] => $context["localite"]) {
            // line 65
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "libelle", array()), "html", null, true);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t\t\t</select>
\t\t</div>
\t\t<div class=\"form-group col-lg-2\">
\t\t\t<input name=\"max\" type=\"text\" placeholder=\"Votre budget\" class=\"select2 form-control\">
\t\t</div>
\t\t<button type=\"submit\" class=\"select2 btn btn-primary col-lg-1\">Rechercher</button>
\t</form> 
</div>

<div class=\"space60\"></div>


<!-- Liste des biens -->
";
        // line 109
        echo "
<div class=\"container home-works\">
\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t<h1 class=\"section-title\"><span>Biens à la une!!</span></h1>
\t\t</div>

\t\t<div id=\"recent-projects1\" class=\"owl-carousel\">
\t\t\t
\t\t\t";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 119
            echo "\t\t\t<div class=\"item works-content\">
\t\t\t\t<div class=\"works-overlay\">
\t\t\t      \t<img style=\"height: 200px; width:100%\" class=\"img-responsive\" src=\"data:image/png;base64,";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["bien"], "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" alt=\"tyu\"/>
                        <span>
                            <div class=\"zoom\">
                                <div class=\"zoom-info\">
                                    <a class=\"lightbox-popup\" href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["bien"], "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\">Aggrandir</a>
                                    <a href=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail", array("id" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
            echo "\">Voir détail</a>
                                </div>
                            </div>
                        </span>                        
\t\t\t\t</div>
\t\t\t\t<h4>";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nomBien", array()), "html", null, true);
            echo "<span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixLocation", array()), "html", null, true);
            echo "</span></h4>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "\t
\t\t</div>
\t</div>
</div>

<div class=\"space80\"></div>

<!-- Liste des biens -->

";
        
        $__internal_1c9c302916bbbfaca1ff76fa9a86cd269d34b0822f0af43dbdb4ca12dcb02955->leave($__internal_1c9c302916bbbfaca1ff76fa9a86cd269d34b0822f0af43dbdb4ca12dcb02955_prof);

        
        $__internal_0b60fed93bddf3051e0ecdf35a0deef7fef1a1c678c3c640db07a2bdbc739a01->leave($__internal_0b60fed93bddf3051e0ecdf35a0deef7fef1a1c678c3c640db07a2bdbc739a01_prof);

    }

    // line 145
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_b2ee2b85af6d41d881c10b4202eb7d5abcf0f15add1920846f72d36c18b3bb47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2ee2b85af6d41d881c10b4202eb7d5abcf0f15add1920846f72d36c18b3bb47->enter($__internal_b2ee2b85af6d41d881c10b4202eb7d5abcf0f15add1920846f72d36c18b3bb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_cf0286763e1f2dfb66d28d6c53dce311b3bc87a79a708faca2b35794a08724a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf0286763e1f2dfb66d28d6c53dce311b3bc87a79a708faca2b35794a08724a2->enter($__internal_cf0286763e1f2dfb66d28d6c53dce311b3bc87a79a708faca2b35794a08724a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 146
        echo "
<script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.quicksearch.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_cf0286763e1f2dfb66d28d6c53dce311b3bc87a79a708faca2b35794a08724a2->leave($__internal_cf0286763e1f2dfb66d28d6c53dce311b3bc87a79a708faca2b35794a08724a2_prof);

        
        $__internal_b2ee2b85af6d41d881c10b4202eb7d5abcf0f15add1920846f72d36c18b3bb47->leave($__internal_b2ee2b85af6d41d881c10b4202eb7d5abcf0f15add1920846f72d36c18b3bb47_prof);

    }

    public function getTemplateName()
    {
        return "SNTDarmankoBundle:reservation:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 148,  305 => 147,  302 => 146,  293 => 145,  274 => 134,  263 => 131,  255 => 126,  250 => 125,  243 => 121,  239 => 119,  235 => 118,  224 => 109,  209 => 67,  198 => 65,  194 => 64,  187 => 59,  176 => 57,  172 => 56,  152 => 39,  144 => 36,  138 => 33,  133 => 31,  126 => 27,  118 => 24,  112 => 21,  107 => 19,  99 => 13,  90 => 12,  77 => 8,  73 => 7,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
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

{% block css %}

<link rel=\"Stylesheet\" type=\"text/css\" href=\"{{asset('template/css/select2.css')}}\" />
<link rel=\"Stylesheet\" type=\"text/css\" href=\"{{asset('template/css/select2-bootstrap.css')}}\" />

{% endblock %}

{% block content %}

<!-- Slider -->
 <div class=\"fullwidthbanner-container\" >
\t<div class=\"fullwidthbanner\">
\t\t<ul>
\t\t\t<li data-transition=\"random\" data-slotamount=\"7\" data-masterspeed=\"1000\">
\t\t\t\t<img src=\"data:image/png;base64,{{ bienSlide[3].images[0].image }}\" alt=\"slide\" data-fullwidthcentering=\"true\">
                <div class=\"tp-caption large_black sfr carousel-caption-inner\" data-x=\"30\" data-y=\"80\" data-speed=\"1100\" data-start=\"1100\" data-easing=\"easeInOutBack\" style=\"font-size:36px;\">
\t\t\t\t\t<h3><span>{{ bienSlide[3].nomBien }}</span></h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"tp-caption large_black sfr carousel-caption-inner\" data-x=\"30\" data-y=\"196\" data-speed=\"1100\" data-start=\"1400\" data-easing=\"easeInOutBack\">
\t\t\t\t\t<p>{{ bienSlide[3].description }}<br />Pour {{ bienSlide[3].prixLocation }}FCFA</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"tp-caption lfb carousel-caption-inner\" data-x=\"30\" data-y=\"310\" data-speed=\"1300\" data-start=\"1700\" data-easing=\"easeInOutBack\">
\t\t\t\t\t<a href=\"{{path('detail', {'id':bienSlide[3].id} )}}\"><button type=\"button\" class=\"button-blue\" >Reserver maintenant!</button></a>
\t\t\t\t</div>\t\t\t\t
\t\t\t</li>
\t\t\t<li data-transition=\"random\" data-slotamount=\"7\" data-masterspeed=\"1000\">
\t\t\t\t<img src=\"data:image/png;base64,{{ bienSlide[1].images[0].image }}\" alt=\"slide\" data-fullwidthcentering=\"true\">
                <div class=\"tp-caption large_black sfr carousel-caption-inner\" data-x=\"30\" data-y=\"80\" data-speed=\"1100\" data-start=\"1100\" data-easing=\"easeInOutBack\" style=\"font-size:36px;\">
\t\t\t\t\t<h3><span>{{ bienSlide[1].nomBien }}</span></h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"tp-caption large_black sfr carousel-caption-inner\" data-x=\"30\" data-y=\"196\" data-speed=\"1100\" data-start=\"1400\" data-easing=\"easeInOutBack\">
\t\t\t\t\t<p>{{ bienSlide[4].description }}<br />Pour {{ bienSlide[1].prixLocation }}FCFA</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"tp-caption lfb carousel-caption-inner\" data-x=\"30\" data-y=\"310\" data-speed=\"1300\" data-start=\"1700\" data-easing=\"easeInOutBack\">
\t\t\t\t\t<a href=\"{{path('detail', {'id':bienSlide[1].id} )}}\"><button type=\"button\" class=\"button-blue\" >Reserver maintenant!</button></a>
\t\t\t\t</div>\t\t\t\t
\t\t\t</li>
\t\t</ul>
\t</div>
</div>
<!-- Slider -->

<div class=\"space60\"></div>

<div style=\"text-align: center;\">
\t<h1>Rechercher un bien</h1>
\t<form class=\"form-inline row\" method=\"POST\">
\t\t<div class=\"col-lg-2\"></div>
\t\t<div class=\"form-group col-lg-4\" style=\"width: 200px;\">
\t\t\t<select name=\"type\" class=\"select2 form-control\">
\t\t\t\t<option value=\"\">Choisir le type</option>
\t\t\t\t{% for type in types %}
\t\t\t\t<option value=\"{{ type.id }}\">{{ type.libelle }}</option>
\t\t\t\t{% endfor %}
\t\t\t</select>
\t\t</div>
\t\t<div class=\"form-group col-lg-2\" style=\"width: 200px;\">
\t\t\t<select name=\"localite\" class=\"select2 form-control\" data-placeholder=\"Choisir une localité\">
\t\t\t\t<option value=\"\">Choisir localité</option>
\t\t\t\t{% for localite in localites %}
\t\t\t\t<option value=\"{{ localite.id }}\">{{ localite.libelle }}</option>
\t\t\t\t{% endfor %}
\t\t\t</select>
\t\t</div>
\t\t<div class=\"form-group col-lg-2\">
\t\t\t<input name=\"max\" type=\"text\" placeholder=\"Votre budget\" class=\"select2 form-control\">
\t\t</div>
\t\t<button type=\"submit\" class=\"select2 btn btn-primary col-lg-1\">Rechercher</button>
\t</form> 
</div>

<div class=\"space60\"></div>


<!-- Liste des biens -->
{# <div id=\"list\">
\t<section id=\"portfolio\" class=\"container no-padding\">
\t\t<div class=\"portfolio-inner nport\">
\t\t\t<div id=\"folio\" class=\"isotope col-md-12 no-padding\">
\t\t\t{% for bien in biens %}
\t\t\t\t<div class=\"folio-item col-md-3 no-padding isotope-item {{ bien.type.libelle }}\">
\t\t\t\t\t<div class=\"item works-content\">
\t\t\t\t\t\t<div class=\"works-overlay\">
\t\t\t\t\t\t\t<img style=\"height: 200px;\" class=\"img-responsive\" src=\"data:image/png;base64,{{ bien.images[0].image }}\" alt=\"tyu\"/>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<div class=\"zoom\">
\t\t\t\t\t\t\t\t\t<div class=\"zoom-info\">
\t\t\t\t\t\t\t\t\t\t<a class=\"lightbox-popup\" href=\"{{asset('image/')}}{{bien.images[0].image}}\">Aggrandir</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('detail', {'id':bien.id} )}}\">Voir détail</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>{{ bien.nomBien }}<span >{{ bien.prixLocation }}</span></h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% else %}
\t\t\t<h3>Pas de biens ayant telles descriptions</h3>\t
\t\t\t{% endfor %}
\t\t\t</div>
\t\t\t<div class=\"space20\"></div>
\t\t</div>
\t</section>
</div> #}

<div class=\"container home-works\">
\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t<h1 class=\"section-title\"><span>Biens à la une!!</span></h1>
\t\t</div>

\t\t<div id=\"recent-projects1\" class=\"owl-carousel\">
\t\t\t
\t\t\t{% for bien in biens %}
\t\t\t<div class=\"item works-content\">
\t\t\t\t<div class=\"works-overlay\">
\t\t\t      \t<img style=\"height: 200px; width:100%\" class=\"img-responsive\" src=\"data:image/png;base64,{{ bien.images[0].image }}\" alt=\"tyu\"/>
                        <span>
                            <div class=\"zoom\">
                                <div class=\"zoom-info\">
                                    <a class=\"lightbox-popup\" href=\"{{asset('image/')}}{{bien.images[0].image}}\">Aggrandir</a>
                                    <a href=\"{{path('detail', {'id':bien.id} )}}\">Voir détail</a>
                                </div>
                            </div>
                        </span>                        
\t\t\t\t</div>
\t\t\t\t<h4>{{ bien.nomBien }}<span>{{ bien.prixLocation }}</span></h4>
\t\t\t</div>
\t\t\t{% endfor %}
\t
\t\t</div>
\t</div>
</div>

<div class=\"space80\"></div>

<!-- Liste des biens -->

{% endblock %}

{% block javascript %}

<script src=\"{{asset('template/js/jquery.multi-select.js')}}\"></script>
<script src=\"{{asset('template/js/jquery.quicksearch.js')}}\"></script>

{% endblock %}
", "SNTDarmankoBundle:reservation:list.html.twig", "/var/www/html/perso/Darmanko/src/SNT/DarmankoBundle/Resources/views/reservation/list.html.twig");
    }
}
