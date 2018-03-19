<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_20fe1457ec991852a11ca352f7a18f65e4d06711fdd12c3294183043003ee167 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd108e16d28b70c25c793c004456f5baea7208f2374bcb64f47d6c70961187d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd108e16d28b70c25c793c004456f5baea7208f2374bcb64f47d6c70961187d8->enter($__internal_bd108e16d28b70c25c793c004456f5baea7208f2374bcb64f47d6c70961187d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d8acc69105910f5d3432bd13aca798a0952c3d8b40d9b69b7eccb2d7ee8e3e26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8acc69105910f5d3432bd13aca798a0952c3d8b40d9b69b7eccb2d7ee8e3e26->enter($__internal_d8acc69105910f5d3432bd13aca798a0952c3d8b40d9b69b7eccb2d7ee8e3e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd108e16d28b70c25c793c004456f5baea7208f2374bcb64f47d6c70961187d8->leave($__internal_bd108e16d28b70c25c793c004456f5baea7208f2374bcb64f47d6c70961187d8_prof);

        
        $__internal_d8acc69105910f5d3432bd13aca798a0952c3d8b40d9b69b7eccb2d7ee8e3e26->leave($__internal_d8acc69105910f5d3432bd13aca798a0952c3d8b40d9b69b7eccb2d7ee8e3e26_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a0b5a7f8dacafde6bdbb6d19995d5120508da77a924e83871cd5738fd23aa5ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0b5a7f8dacafde6bdbb6d19995d5120508da77a924e83871cd5738fd23aa5ec->enter($__internal_a0b5a7f8dacafde6bdbb6d19995d5120508da77a924e83871cd5738fd23aa5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dc3e034052d981c23be58df11200fe28585499a635f76c63c4ad28c4791e7904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc3e034052d981c23be58df11200fe28585499a635f76c63c4ad28c4791e7904->enter($__internal_dc3e034052d981c23be58df11200fe28585499a635f76c63c4ad28c4791e7904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_dc3e034052d981c23be58df11200fe28585499a635f76c63c4ad28c4791e7904->leave($__internal_dc3e034052d981c23be58df11200fe28585499a635f76c63c4ad28c4791e7904_prof);

        
        $__internal_a0b5a7f8dacafde6bdbb6d19995d5120508da77a924e83871cd5738fd23aa5ec->leave($__internal_a0b5a7f8dacafde6bdbb6d19995d5120508da77a924e83871cd5738fd23aa5ec_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/perso/Darmanko/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
