<?php

/* SNTDarmankoBundle:reservation:confirm.html.twig */
class __TwigTemplate_c451cde38417c3fcdf33362fcdc0453ff8dc14652fbcc4165fe49b94c3462e2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::template.html.twig", "SNTDarmankoBundle:reservation:confirm.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5228f77949174aae0ff5e9ec91bef2d2f73f8bc7cf6fa3a5ff09ab88d8cb66e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5228f77949174aae0ff5e9ec91bef2d2f73f8bc7cf6fa3a5ff09ab88d8cb66e->enter($__internal_d5228f77949174aae0ff5e9ec91bef2d2f73f8bc7cf6fa3a5ff09ab88d8cb66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:reservation:confirm.html.twig"));

        $__internal_0e0557dbd5b9e895a1adc91ebaa514989042c00ddd00e00ee6050c7f4fc7019a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e0557dbd5b9e895a1adc91ebaa514989042c00ddd00e00ee6050c7f4fc7019a->enter($__internal_0e0557dbd5b9e895a1adc91ebaa514989042c00ddd00e00ee6050c7f4fc7019a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:reservation:confirm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5228f77949174aae0ff5e9ec91bef2d2f73f8bc7cf6fa3a5ff09ab88d8cb66e->leave($__internal_d5228f77949174aae0ff5e9ec91bef2d2f73f8bc7cf6fa3a5ff09ab88d8cb66e_prof);

        
        $__internal_0e0557dbd5b9e895a1adc91ebaa514989042c00ddd00e00ee6050c7f4fc7019a->leave($__internal_0e0557dbd5b9e895a1adc91ebaa514989042c00ddd00e00ee6050c7f4fc7019a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1082304da6ee6302ecb474bcdeb5baff7e01c002b19ebed306b8a1a77e084df7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1082304da6ee6302ecb474bcdeb5baff7e01c002b19ebed306b8a1a77e084df7->enter($__internal_1082304da6ee6302ecb474bcdeb5baff7e01c002b19ebed306b8a1a77e084df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6461f675bc955d5d3444333254ef1b55a3c6c09f0f6d564b0155c3fe912dab47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6461f675bc955d5d3444333254ef1b55a3c6c09f0f6d564b0155c3fe912dab47->enter($__internal_6461f675bc955d5d3444333254ef1b55a3c6c09f0f6d564b0155c3fe912dab47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
<!-- Page-head -->
<div class=\"page-head\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h3>Confirmation réservation</h3>
            </div>
        </div>
    </div>
</div>
<!-- Page-head -->

<div class=\"container\">
    <h1 style=\"font-family:Goudy; color:grey\"> Votre réservation a été prise en charge</h1>
    <h3>Veuillez vous rapprocher de l'agence le plus proche pour payer afin d'obtenir le bien</h3>
</div>
<div class=\"space80\"></div>
";
        
        $__internal_6461f675bc955d5d3444333254ef1b55a3c6c09f0f6d564b0155c3fe912dab47->leave($__internal_6461f675bc955d5d3444333254ef1b55a3c6c09f0f6d564b0155c3fe912dab47_prof);

        
        $__internal_1082304da6ee6302ecb474bcdeb5baff7e01c002b19ebed306b8a1a77e084df7->leave($__internal_1082304da6ee6302ecb474bcdeb5baff7e01c002b19ebed306b8a1a77e084df7_prof);

    }

    public function getTemplateName()
    {
        return "SNTDarmankoBundle:reservation:confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block content %}

<!-- Page-head -->
<div class=\"page-head\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h3>Confirmation réservation</h3>
            </div>
        </div>
    </div>
</div>
<!-- Page-head -->

<div class=\"container\">
    <h1 style=\"font-family:Goudy; color:grey\"> Votre réservation a été prise en charge</h1>
    <h3>Veuillez vous rapprocher de l'agence le plus proche pour payer afin d'obtenir le bien</h3>
</div>
<div class=\"space80\"></div>
{% endblock %}", "SNTDarmankoBundle:reservation:confirm.html.twig", "/var/www/html/perso/Darmanko/src/SNT/DarmankoBundle/Resources/views/reservation/confirm.html.twig");
    }
}
