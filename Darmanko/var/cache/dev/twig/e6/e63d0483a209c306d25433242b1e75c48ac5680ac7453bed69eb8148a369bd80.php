<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_114710ea39245b32943dbf584c451df7001c5b8648bd96f2856f5c12c9705420 extends Twig_Template
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
        $__internal_6b5d55c53c25d2a1e5fcde202be8c7be70ec0ea1d4f3157a280c3354bc04fb6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b5d55c53c25d2a1e5fcde202be8c7be70ec0ea1d4f3157a280c3354bc04fb6e->enter($__internal_6b5d55c53c25d2a1e5fcde202be8c7be70ec0ea1d4f3157a280c3354bc04fb6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b154991b78dfe25ad4d0844a2be579e2f25eb3a816fd26fd308d417bd4b82618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b154991b78dfe25ad4d0844a2be579e2f25eb3a816fd26fd308d417bd4b82618->enter($__internal_b154991b78dfe25ad4d0844a2be579e2f25eb3a816fd26fd308d417bd4b82618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b5d55c53c25d2a1e5fcde202be8c7be70ec0ea1d4f3157a280c3354bc04fb6e->leave($__internal_6b5d55c53c25d2a1e5fcde202be8c7be70ec0ea1d4f3157a280c3354bc04fb6e_prof);

        
        $__internal_b154991b78dfe25ad4d0844a2be579e2f25eb3a816fd26fd308d417bd4b82618->leave($__internal_b154991b78dfe25ad4d0844a2be579e2f25eb3a816fd26fd308d417bd4b82618_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a56a7f7887643724d7339ff561a9f4a4f0b30e336699fe86940428ef3cbeb9ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a56a7f7887643724d7339ff561a9f4a4f0b30e336699fe86940428ef3cbeb9ae->enter($__internal_a56a7f7887643724d7339ff561a9f4a4f0b30e336699fe86940428ef3cbeb9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_479864f20a8a3a5d2b7dde002ae81ec7a89dbc5884b702a85c02ad0e5ecb48f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_479864f20a8a3a5d2b7dde002ae81ec7a89dbc5884b702a85c02ad0e5ecb48f3->enter($__internal_479864f20a8a3a5d2b7dde002ae81ec7a89dbc5884b702a85c02ad0e5ecb48f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_479864f20a8a3a5d2b7dde002ae81ec7a89dbc5884b702a85c02ad0e5ecb48f3->leave($__internal_479864f20a8a3a5d2b7dde002ae81ec7a89dbc5884b702a85c02ad0e5ecb48f3_prof);

        
        $__internal_a56a7f7887643724d7339ff561a9f4a4f0b30e336699fe86940428ef3cbeb9ae->leave($__internal_a56a7f7887643724d7339ff561a9f4a4f0b30e336699fe86940428ef3cbeb9ae_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_12bfe599324d67365a5ad4eed87d1046c8d32841efba53e9439d40f8fc0542ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12bfe599324d67365a5ad4eed87d1046c8d32841efba53e9439d40f8fc0542ec->enter($__internal_12bfe599324d67365a5ad4eed87d1046c8d32841efba53e9439d40f8fc0542ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e539ee66622aa1901f09778988c09d58e1ed85c34295e2dfca4b20b90968d2fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e539ee66622aa1901f09778988c09d58e1ed85c34295e2dfca4b20b90968d2fb->enter($__internal_e539ee66622aa1901f09778988c09d58e1ed85c34295e2dfca4b20b90968d2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e539ee66622aa1901f09778988c09d58e1ed85c34295e2dfca4b20b90968d2fb->leave($__internal_e539ee66622aa1901f09778988c09d58e1ed85c34295e2dfca4b20b90968d2fb_prof);

        
        $__internal_12bfe599324d67365a5ad4eed87d1046c8d32841efba53e9439d40f8fc0542ec->leave($__internal_12bfe599324d67365a5ad4eed87d1046c8d32841efba53e9439d40f8fc0542ec_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_edede4a302a76accf889f32a99cfa601a4ab0d22e903dc50488abc95c385ca15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edede4a302a76accf889f32a99cfa601a4ab0d22e903dc50488abc95c385ca15->enter($__internal_edede4a302a76accf889f32a99cfa601a4ab0d22e903dc50488abc95c385ca15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f3ba0209a69c06c2f7045f68f4f732b8122c4de8db2184590427b9992c89dbbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3ba0209a69c06c2f7045f68f4f732b8122c4de8db2184590427b9992c89dbbb->enter($__internal_f3ba0209a69c06c2f7045f68f4f732b8122c4de8db2184590427b9992c89dbbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f3ba0209a69c06c2f7045f68f4f732b8122c4de8db2184590427b9992c89dbbb->leave($__internal_f3ba0209a69c06c2f7045f68f4f732b8122c4de8db2184590427b9992c89dbbb_prof);

        
        $__internal_edede4a302a76accf889f32a99cfa601a4ab0d22e903dc50488abc95c385ca15->leave($__internal_edede4a302a76accf889f32a99cfa601a4ab0d22e903dc50488abc95c385ca15_prof);

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
