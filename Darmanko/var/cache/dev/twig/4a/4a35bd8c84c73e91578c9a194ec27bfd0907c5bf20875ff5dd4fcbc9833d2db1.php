<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_822341ac1d414711bfd0ef45eeff946c0cec9300c4f5d084eb590fde9ea6ae74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a6b007cdaaf909289fbf63616139e543788142a7520aca555967ed5dae045893 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6b007cdaaf909289fbf63616139e543788142a7520aca555967ed5dae045893->enter($__internal_a6b007cdaaf909289fbf63616139e543788142a7520aca555967ed5dae045893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_38d459bae1abe930eabadbd04847a8905ab3b2dec677d5f88bbc800c1127b95c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38d459bae1abe930eabadbd04847a8905ab3b2dec677d5f88bbc800c1127b95c->enter($__internal_38d459bae1abe930eabadbd04847a8905ab3b2dec677d5f88bbc800c1127b95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6b007cdaaf909289fbf63616139e543788142a7520aca555967ed5dae045893->leave($__internal_a6b007cdaaf909289fbf63616139e543788142a7520aca555967ed5dae045893_prof);

        
        $__internal_38d459bae1abe930eabadbd04847a8905ab3b2dec677d5f88bbc800c1127b95c->leave($__internal_38d459bae1abe930eabadbd04847a8905ab3b2dec677d5f88bbc800c1127b95c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f12eabd93b70c7f600e53d506d7445880afa4b74e166290c67c8cba19e951e09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f12eabd93b70c7f600e53d506d7445880afa4b74e166290c67c8cba19e951e09->enter($__internal_f12eabd93b70c7f600e53d506d7445880afa4b74e166290c67c8cba19e951e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3c688892f386b3e4d954de0d29fc3039fbb32be030300b2f8dc2a12997ed7985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c688892f386b3e4d954de0d29fc3039fbb32be030300b2f8dc2a12997ed7985->enter($__internal_3c688892f386b3e4d954de0d29fc3039fbb32be030300b2f8dc2a12997ed7985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_3c688892f386b3e4d954de0d29fc3039fbb32be030300b2f8dc2a12997ed7985->leave($__internal_3c688892f386b3e4d954de0d29fc3039fbb32be030300b2f8dc2a12997ed7985_prof);

        
        $__internal_f12eabd93b70c7f600e53d506d7445880afa4b74e166290c67c8cba19e951e09->leave($__internal_f12eabd93b70c7f600e53d506d7445880afa4b74e166290c67c8cba19e951e09_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fb12f9f1678c25048e83890842d729b46d9c45618aae46e51e940b9406f62a37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb12f9f1678c25048e83890842d729b46d9c45618aae46e51e940b9406f62a37->enter($__internal_fb12f9f1678c25048e83890842d729b46d9c45618aae46e51e940b9406f62a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_13626d887e97a1fc0925e380cf9dd92ddee619a64dfcc6cefc80d7fe65eb7bb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13626d887e97a1fc0925e380cf9dd92ddee619a64dfcc6cefc80d7fe65eb7bb0->enter($__internal_13626d887e97a1fc0925e380cf9dd92ddee619a64dfcc6cefc80d7fe65eb7bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_13626d887e97a1fc0925e380cf9dd92ddee619a64dfcc6cefc80d7fe65eb7bb0->leave($__internal_13626d887e97a1fc0925e380cf9dd92ddee619a64dfcc6cefc80d7fe65eb7bb0_prof);

        
        $__internal_fb12f9f1678c25048e83890842d729b46d9c45618aae46e51e940b9406f62a37->leave($__internal_fb12f9f1678c25048e83890842d729b46d9c45618aae46e51e940b9406f62a37_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4b573c6e387c9a8bc432096b4bc4e36fe144df5f9f70b938f63d9fbc9055d4ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b573c6e387c9a8bc432096b4bc4e36fe144df5f9f70b938f63d9fbc9055d4ac->enter($__internal_4b573c6e387c9a8bc432096b4bc4e36fe144df5f9f70b938f63d9fbc9055d4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6605d76fbf782461ff4b95ceaa736a6d6f91014c4eec9c793140e2a1c8f16b75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6605d76fbf782461ff4b95ceaa736a6d6f91014c4eec9c793140e2a1c8f16b75->enter($__internal_6605d76fbf782461ff4b95ceaa736a6d6f91014c4eec9c793140e2a1c8f16b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6605d76fbf782461ff4b95ceaa736a6d6f91014c4eec9c793140e2a1c8f16b75->leave($__internal_6605d76fbf782461ff4b95ceaa736a6d6f91014c4eec9c793140e2a1c8f16b75_prof);

        
        $__internal_4b573c6e387c9a8bc432096b4bc4e36fe144df5f9f70b938f63d9fbc9055d4ac->leave($__internal_4b573c6e387c9a8bc432096b4bc4e36fe144df5f9f70b938f63d9fbc9055d4ac_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/perso/Darmanko/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
