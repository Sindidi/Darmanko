<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d2d12ce08586495968f9078a823b9f7c5345d49c5eb1657c99b11bc73bb4a5a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a91d9f85e8ccef6d914ec3434ccda89c8c446e9021b849c3d716bcc754f39b12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a91d9f85e8ccef6d914ec3434ccda89c8c446e9021b849c3d716bcc754f39b12->enter($__internal_a91d9f85e8ccef6d914ec3434ccda89c8c446e9021b849c3d716bcc754f39b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b43da5e0bf70c351c3e1ddbc40f86d94256bab197064ea112aceb7db1516ac46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b43da5e0bf70c351c3e1ddbc40f86d94256bab197064ea112aceb7db1516ac46->enter($__internal_b43da5e0bf70c351c3e1ddbc40f86d94256bab197064ea112aceb7db1516ac46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a91d9f85e8ccef6d914ec3434ccda89c8c446e9021b849c3d716bcc754f39b12->leave($__internal_a91d9f85e8ccef6d914ec3434ccda89c8c446e9021b849c3d716bcc754f39b12_prof);

        
        $__internal_b43da5e0bf70c351c3e1ddbc40f86d94256bab197064ea112aceb7db1516ac46->leave($__internal_b43da5e0bf70c351c3e1ddbc40f86d94256bab197064ea112aceb7db1516ac46_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e49e5602a72955e899da8af94bdfe14c38b64f9c3a809d04651363ecad9659c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e49e5602a72955e899da8af94bdfe14c38b64f9c3a809d04651363ecad9659c4->enter($__internal_e49e5602a72955e899da8af94bdfe14c38b64f9c3a809d04651363ecad9659c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_58276e227cf98b550296e0ebc8e521138ea488331cbe0edb806b87216228eb8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58276e227cf98b550296e0ebc8e521138ea488331cbe0edb806b87216228eb8d->enter($__internal_58276e227cf98b550296e0ebc8e521138ea488331cbe0edb806b87216228eb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_58276e227cf98b550296e0ebc8e521138ea488331cbe0edb806b87216228eb8d->leave($__internal_58276e227cf98b550296e0ebc8e521138ea488331cbe0edb806b87216228eb8d_prof);

        
        $__internal_e49e5602a72955e899da8af94bdfe14c38b64f9c3a809d04651363ecad9659c4->leave($__internal_e49e5602a72955e899da8af94bdfe14c38b64f9c3a809d04651363ecad9659c4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aa3d3ff94160e540cb375f2e4ef02c07c6cf70c67a4fa6dfc7d21322365c562a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa3d3ff94160e540cb375f2e4ef02c07c6cf70c67a4fa6dfc7d21322365c562a->enter($__internal_aa3d3ff94160e540cb375f2e4ef02c07c6cf70c67a4fa6dfc7d21322365c562a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ab84e7ba76e5049916cc6ecb5de46421e2a42dd961efea021b622e25391ff9d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab84e7ba76e5049916cc6ecb5de46421e2a42dd961efea021b622e25391ff9d4->enter($__internal_ab84e7ba76e5049916cc6ecb5de46421e2a42dd961efea021b622e25391ff9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ab84e7ba76e5049916cc6ecb5de46421e2a42dd961efea021b622e25391ff9d4->leave($__internal_ab84e7ba76e5049916cc6ecb5de46421e2a42dd961efea021b622e25391ff9d4_prof);

        
        $__internal_aa3d3ff94160e540cb375f2e4ef02c07c6cf70c67a4fa6dfc7d21322365c562a->leave($__internal_aa3d3ff94160e540cb375f2e4ef02c07c6cf70c67a4fa6dfc7d21322365c562a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_37628f471128abb5db5fcdadce0ff4eda49e809a3a92596c322ae6452551b1f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37628f471128abb5db5fcdadce0ff4eda49e809a3a92596c322ae6452551b1f4->enter($__internal_37628f471128abb5db5fcdadce0ff4eda49e809a3a92596c322ae6452551b1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_75c0b574d86fda888843860691b487940c14af3ad03920c2ddc2edf22c6cf353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c0b574d86fda888843860691b487940c14af3ad03920c2ddc2edf22c6cf353->enter($__internal_75c0b574d86fda888843860691b487940c14af3ad03920c2ddc2edf22c6cf353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_75c0b574d86fda888843860691b487940c14af3ad03920c2ddc2edf22c6cf353->leave($__internal_75c0b574d86fda888843860691b487940c14af3ad03920c2ddc2edf22c6cf353_prof);

        
        $__internal_37628f471128abb5db5fcdadce0ff4eda49e809a3a92596c322ae6452551b1f4->leave($__internal_37628f471128abb5db5fcdadce0ff4eda49e809a3a92596c322ae6452551b1f4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/perso/Darmanko/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
