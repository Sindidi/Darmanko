<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_e3555b049685fb4f05f93f1d13ee66bbe2cc3e9cc58e91dffbd086b4b2d33f1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91cff6c059d337ae61759643d8ca745b20e0c7bb37edbbfaee5eabb69ee2cee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91cff6c059d337ae61759643d8ca745b20e0c7bb37edbbfaee5eabb69ee2cee7->enter($__internal_91cff6c059d337ae61759643d8ca745b20e0c7bb37edbbfaee5eabb69ee2cee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_de8be8e4eb746151296dd9696273a0b19f74f3961b32cb158922017d7ab0c033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de8be8e4eb746151296dd9696273a0b19f74f3961b32cb158922017d7ab0c033->enter($__internal_de8be8e4eb746151296dd9696273a0b19f74f3961b32cb158922017d7ab0c033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91cff6c059d337ae61759643d8ca745b20e0c7bb37edbbfaee5eabb69ee2cee7->leave($__internal_91cff6c059d337ae61759643d8ca745b20e0c7bb37edbbfaee5eabb69ee2cee7_prof);

        
        $__internal_de8be8e4eb746151296dd9696273a0b19f74f3961b32cb158922017d7ab0c033->leave($__internal_de8be8e4eb746151296dd9696273a0b19f74f3961b32cb158922017d7ab0c033_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_6f5a530ef4ce1789243fcae0911a52326571d4216923f06869a69ec2e74bfdbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f5a530ef4ce1789243fcae0911a52326571d4216923f06869a69ec2e74bfdbe->enter($__internal_6f5a530ef4ce1789243fcae0911a52326571d4216923f06869a69ec2e74bfdbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_d81f84f8a9dc3d85d082f45706d7d7cdf37b2571c4c089210c37d8ce24652a23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d81f84f8a9dc3d85d082f45706d7d7cdf37b2571c4c089210c37d8ce24652a23->enter($__internal_d81f84f8a9dc3d85d082f45706d7d7cdf37b2571c4c089210c37d8ce24652a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_d81f84f8a9dc3d85d082f45706d7d7cdf37b2571c4c089210c37d8ce24652a23->leave($__internal_d81f84f8a9dc3d85d082f45706d7d7cdf37b2571c4c089210c37d8ce24652a23_prof);

        
        $__internal_6f5a530ef4ce1789243fcae0911a52326571d4216923f06869a69ec2e74bfdbe->leave($__internal_6f5a530ef4ce1789243fcae0911a52326571d4216923f06869a69ec2e74bfdbe_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ca805b94906b9a5d9e3d6700c67844e3594ca36c21702e26462ac96cdcd4f80a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca805b94906b9a5d9e3d6700c67844e3594ca36c21702e26462ac96cdcd4f80a->enter($__internal_ca805b94906b9a5d9e3d6700c67844e3594ca36c21702e26462ac96cdcd4f80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0f172a0ad2d8fadfe36995ad23f203bff99f31e82dac65ddf30a620bc7169b68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f172a0ad2d8fadfe36995ad23f203bff99f31e82dac65ddf30a620bc7169b68->enter($__internal_0f172a0ad2d8fadfe36995ad23f203bff99f31e82dac65ddf30a620bc7169b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_0f172a0ad2d8fadfe36995ad23f203bff99f31e82dac65ddf30a620bc7169b68->leave($__internal_0f172a0ad2d8fadfe36995ad23f203bff99f31e82dac65ddf30a620bc7169b68_prof);

        
        $__internal_ca805b94906b9a5d9e3d6700c67844e3594ca36c21702e26462ac96cdcd4f80a->leave($__internal_ca805b94906b9a5d9e3d6700c67844e3594ca36c21702e26462ac96cdcd4f80a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/var/www/html/perso/Darmanko/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
