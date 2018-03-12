<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_2e01d25e6df0ef0974e156e11981a38c407833bc584615e5b04d84e8a19e0f3c extends Twig_Template
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
        $__internal_50fdc8ad8a7026c9d616a31b9dece4ce7dbee70ea142d7010f53d5eb411f0e0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50fdc8ad8a7026c9d616a31b9dece4ce7dbee70ea142d7010f53d5eb411f0e0b->enter($__internal_50fdc8ad8a7026c9d616a31b9dece4ce7dbee70ea142d7010f53d5eb411f0e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_a57df52884fa47bda0dcc884c40235c8d09470155aff8c5903168f976ece2bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a57df52884fa47bda0dcc884c40235c8d09470155aff8c5903168f976ece2bb6->enter($__internal_a57df52884fa47bda0dcc884c40235c8d09470155aff8c5903168f976ece2bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50fdc8ad8a7026c9d616a31b9dece4ce7dbee70ea142d7010f53d5eb411f0e0b->leave($__internal_50fdc8ad8a7026c9d616a31b9dece4ce7dbee70ea142d7010f53d5eb411f0e0b_prof);

        
        $__internal_a57df52884fa47bda0dcc884c40235c8d09470155aff8c5903168f976ece2bb6->leave($__internal_a57df52884fa47bda0dcc884c40235c8d09470155aff8c5903168f976ece2bb6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_326c0dd858695321658b02119519418bb54255313061804f78834e4a808df67e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_326c0dd858695321658b02119519418bb54255313061804f78834e4a808df67e->enter($__internal_326c0dd858695321658b02119519418bb54255313061804f78834e4a808df67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_498f426614919355a7749486b2746d1fe56b7070d2b2ca6d9f5b4f2c4965b7d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_498f426614919355a7749486b2746d1fe56b7070d2b2ca6d9f5b4f2c4965b7d7->enter($__internal_498f426614919355a7749486b2746d1fe56b7070d2b2ca6d9f5b4f2c4965b7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_498f426614919355a7749486b2746d1fe56b7070d2b2ca6d9f5b4f2c4965b7d7->leave($__internal_498f426614919355a7749486b2746d1fe56b7070d2b2ca6d9f5b4f2c4965b7d7_prof);

        
        $__internal_326c0dd858695321658b02119519418bb54255313061804f78834e4a808df67e->leave($__internal_326c0dd858695321658b02119519418bb54255313061804f78834e4a808df67e_prof);

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
