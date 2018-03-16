<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_9da162e9234ca2b68608ca9b6e7be863175704f1667ada8c08e980ba6252e26d extends Twig_Template
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
        $__internal_3860f46caef269e70b7f5c354b64840b8f67d5be6c2760393c30fa4ef45ff709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3860f46caef269e70b7f5c354b64840b8f67d5be6c2760393c30fa4ef45ff709->enter($__internal_3860f46caef269e70b7f5c354b64840b8f67d5be6c2760393c30fa4ef45ff709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_dd74f78efcf1f8a8b1053a76ce84d8e4ac09e641072423af13a83c3562889e47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd74f78efcf1f8a8b1053a76ce84d8e4ac09e641072423af13a83c3562889e47->enter($__internal_dd74f78efcf1f8a8b1053a76ce84d8e4ac09e641072423af13a83c3562889e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3860f46caef269e70b7f5c354b64840b8f67d5be6c2760393c30fa4ef45ff709->leave($__internal_3860f46caef269e70b7f5c354b64840b8f67d5be6c2760393c30fa4ef45ff709_prof);

        
        $__internal_dd74f78efcf1f8a8b1053a76ce84d8e4ac09e641072423af13a83c3562889e47->leave($__internal_dd74f78efcf1f8a8b1053a76ce84d8e4ac09e641072423af13a83c3562889e47_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7ccb618ea8e1445e4bcf48c5ebd130d9ef4222a29b6e55bc183a047d6ecde790 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ccb618ea8e1445e4bcf48c5ebd130d9ef4222a29b6e55bc183a047d6ecde790->enter($__internal_7ccb618ea8e1445e4bcf48c5ebd130d9ef4222a29b6e55bc183a047d6ecde790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2da49f82b2085d022cc4a3e0a8709e70131e7a1f044caa7944400e788632a147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2da49f82b2085d022cc4a3e0a8709e70131e7a1f044caa7944400e788632a147->enter($__internal_2da49f82b2085d022cc4a3e0a8709e70131e7a1f044caa7944400e788632a147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2da49f82b2085d022cc4a3e0a8709e70131e7a1f044caa7944400e788632a147->leave($__internal_2da49f82b2085d022cc4a3e0a8709e70131e7a1f044caa7944400e788632a147_prof);

        
        $__internal_7ccb618ea8e1445e4bcf48c5ebd130d9ef4222a29b6e55bc183a047d6ecde790->leave($__internal_7ccb618ea8e1445e4bcf48c5ebd130d9ef4222a29b6e55bc183a047d6ecde790_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f8b3fb4dae29bcf3484af4c706d6a103e94f700f508903a255d3c9b1d801ff12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8b3fb4dae29bcf3484af4c706d6a103e94f700f508903a255d3c9b1d801ff12->enter($__internal_f8b3fb4dae29bcf3484af4c706d6a103e94f700f508903a255d3c9b1d801ff12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9d3672d21cf0953e0f1f70d693031d32a0b5bf261a86d0c5ebd9103fce31d529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d3672d21cf0953e0f1f70d693031d32a0b5bf261a86d0c5ebd9103fce31d529->enter($__internal_9d3672d21cf0953e0f1f70d693031d32a0b5bf261a86d0c5ebd9103fce31d529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_9d3672d21cf0953e0f1f70d693031d32a0b5bf261a86d0c5ebd9103fce31d529->leave($__internal_9d3672d21cf0953e0f1f70d693031d32a0b5bf261a86d0c5ebd9103fce31d529_prof);

        
        $__internal_f8b3fb4dae29bcf3484af4c706d6a103e94f700f508903a255d3c9b1d801ff12->leave($__internal_f8b3fb4dae29bcf3484af4c706d6a103e94f700f508903a255d3c9b1d801ff12_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ebf58e953e0c5532a9a64a2c2bfd1654c91fcec8db15cdc1f10c1f5bef0452ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebf58e953e0c5532a9a64a2c2bfd1654c91fcec8db15cdc1f10c1f5bef0452ca->enter($__internal_ebf58e953e0c5532a9a64a2c2bfd1654c91fcec8db15cdc1f10c1f5bef0452ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_eae556c60496d8df17e00909b71b33a6f87224f4e9c9bfd0cb61e90ce6c4b171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eae556c60496d8df17e00909b71b33a6f87224f4e9c9bfd0cb61e90ce6c4b171->enter($__internal_eae556c60496d8df17e00909b71b33a6f87224f4e9c9bfd0cb61e90ce6c4b171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_eae556c60496d8df17e00909b71b33a6f87224f4e9c9bfd0cb61e90ce6c4b171->leave($__internal_eae556c60496d8df17e00909b71b33a6f87224f4e9c9bfd0cb61e90ce6c4b171_prof);

        
        $__internal_ebf58e953e0c5532a9a64a2c2bfd1654c91fcec8db15cdc1f10c1f5bef0452ca->leave($__internal_ebf58e953e0c5532a9a64a2c2bfd1654c91fcec8db15cdc1f10c1f5bef0452ca_prof);

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
