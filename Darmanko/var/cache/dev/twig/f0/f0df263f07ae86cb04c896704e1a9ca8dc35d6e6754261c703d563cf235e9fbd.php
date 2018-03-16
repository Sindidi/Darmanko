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
        $__internal_6600a689c6f524bcb34f68a9bfbaef80fce7c3c6074849ab8abf96e5014db02b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6600a689c6f524bcb34f68a9bfbaef80fce7c3c6074849ab8abf96e5014db02b->enter($__internal_6600a689c6f524bcb34f68a9bfbaef80fce7c3c6074849ab8abf96e5014db02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8abd5e3e1cdb193182b9da7871042c85e811e2bc8f34b14896c1aa251ac841e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8abd5e3e1cdb193182b9da7871042c85e811e2bc8f34b14896c1aa251ac841e0->enter($__internal_8abd5e3e1cdb193182b9da7871042c85e811e2bc8f34b14896c1aa251ac841e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6600a689c6f524bcb34f68a9bfbaef80fce7c3c6074849ab8abf96e5014db02b->leave($__internal_6600a689c6f524bcb34f68a9bfbaef80fce7c3c6074849ab8abf96e5014db02b_prof);

        
        $__internal_8abd5e3e1cdb193182b9da7871042c85e811e2bc8f34b14896c1aa251ac841e0->leave($__internal_8abd5e3e1cdb193182b9da7871042c85e811e2bc8f34b14896c1aa251ac841e0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3dee554bd1df9ac50dd70fb2e8eff2a40b76086a7307fb699b7a2cc38ac467f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dee554bd1df9ac50dd70fb2e8eff2a40b76086a7307fb699b7a2cc38ac467f9->enter($__internal_3dee554bd1df9ac50dd70fb2e8eff2a40b76086a7307fb699b7a2cc38ac467f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_63f8c9aa29a79a05543e53db91853b737b6fe2f42af6a8e4c17c02c55a46bea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63f8c9aa29a79a05543e53db91853b737b6fe2f42af6a8e4c17c02c55a46bea0->enter($__internal_63f8c9aa29a79a05543e53db91853b737b6fe2f42af6a8e4c17c02c55a46bea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_63f8c9aa29a79a05543e53db91853b737b6fe2f42af6a8e4c17c02c55a46bea0->leave($__internal_63f8c9aa29a79a05543e53db91853b737b6fe2f42af6a8e4c17c02c55a46bea0_prof);

        
        $__internal_3dee554bd1df9ac50dd70fb2e8eff2a40b76086a7307fb699b7a2cc38ac467f9->leave($__internal_3dee554bd1df9ac50dd70fb2e8eff2a40b76086a7307fb699b7a2cc38ac467f9_prof);

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
