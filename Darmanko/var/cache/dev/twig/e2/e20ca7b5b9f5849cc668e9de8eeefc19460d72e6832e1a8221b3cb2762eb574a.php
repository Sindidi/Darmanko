<?php

/* SNTDarmankoBundle:reservation:confirm.html.twig */
class __TwigTemplate_158e07da86d617068d485e958d09a24bdb194ccfefa0be988a6e458c456fb9da extends Twig_Template
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
        $__internal_e4d42bcc43f9d0e3dd9e45da18c5919aec1fedbab3d7ea08ff9b4f7e176fd70d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4d42bcc43f9d0e3dd9e45da18c5919aec1fedbab3d7ea08ff9b4f7e176fd70d->enter($__internal_e4d42bcc43f9d0e3dd9e45da18c5919aec1fedbab3d7ea08ff9b4f7e176fd70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:reservation:confirm.html.twig"));

        $__internal_04e333ab427e3e2b5d02f76de1ccd214f84754db0aeb452faa119192b6883bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e333ab427e3e2b5d02f76de1ccd214f84754db0aeb452faa119192b6883bfb->enter($__internal_04e333ab427e3e2b5d02f76de1ccd214f84754db0aeb452faa119192b6883bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:reservation:confirm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4d42bcc43f9d0e3dd9e45da18c5919aec1fedbab3d7ea08ff9b4f7e176fd70d->leave($__internal_e4d42bcc43f9d0e3dd9e45da18c5919aec1fedbab3d7ea08ff9b4f7e176fd70d_prof);

        
        $__internal_04e333ab427e3e2b5d02f76de1ccd214f84754db0aeb452faa119192b6883bfb->leave($__internal_04e333ab427e3e2b5d02f76de1ccd214f84754db0aeb452faa119192b6883bfb_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_dc6cb04995548acb8cdacafd0b5b01eefd366471c5c872da3e4bd5b87f103b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc6cb04995548acb8cdacafd0b5b01eefd366471c5c872da3e4bd5b87f103b9d->enter($__internal_dc6cb04995548acb8cdacafd0b5b01eefd366471c5c872da3e4bd5b87f103b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6fc5112dbfacc2a5113921b3b58398c46333254fc12062b594d98745eba7c9e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fc5112dbfacc2a5113921b3b58398c46333254fc12062b594d98745eba7c9e0->enter($__internal_6fc5112dbfacc2a5113921b3b58398c46333254fc12062b594d98745eba7c9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_6fc5112dbfacc2a5113921b3b58398c46333254fc12062b594d98745eba7c9e0->leave($__internal_6fc5112dbfacc2a5113921b3b58398c46333254fc12062b594d98745eba7c9e0_prof);

        
        $__internal_dc6cb04995548acb8cdacafd0b5b01eefd366471c5c872da3e4bd5b87f103b9d->leave($__internal_dc6cb04995548acb8cdacafd0b5b01eefd366471c5c872da3e4bd5b87f103b9d_prof);

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
