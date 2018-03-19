<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_651d3c7d5833087ed670ac0f5dd98a69c590d5788a1ab626adb0be3d3cc4237c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_352b58ed36fd27644b86a8ad5289ed20dd0a91826218493ab58e0dad8f998a6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_352b58ed36fd27644b86a8ad5289ed20dd0a91826218493ab58e0dad8f998a6f->enter($__internal_352b58ed36fd27644b86a8ad5289ed20dd0a91826218493ab58e0dad8f998a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_5cb9a14dc460da22ec80b71e6bdbe1023e96e0df0df436924fbc8e5718baf635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cb9a14dc460da22ec80b71e6bdbe1023e96e0df0df436924fbc8e5718baf635->enter($__internal_5cb9a14dc460da22ec80b71e6bdbe1023e96e0df0df436924fbc8e5718baf635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_352b58ed36fd27644b86a8ad5289ed20dd0a91826218493ab58e0dad8f998a6f->leave($__internal_352b58ed36fd27644b86a8ad5289ed20dd0a91826218493ab58e0dad8f998a6f_prof);

        
        $__internal_5cb9a14dc460da22ec80b71e6bdbe1023e96e0df0df436924fbc8e5718baf635->leave($__internal_5cb9a14dc460da22ec80b71e6bdbe1023e96e0df0df436924fbc8e5718baf635_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ac12396fe292a77489210e165ae1e87807c7143aac9efd5097285868674c24ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac12396fe292a77489210e165ae1e87807c7143aac9efd5097285868674c24ea->enter($__internal_ac12396fe292a77489210e165ae1e87807c7143aac9efd5097285868674c24ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_88a8e2634239ddea5a4410be3c25a6cc6f3e10e2c291c3929f3317dc25939f5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88a8e2634239ddea5a4410be3c25a6cc6f3e10e2c291c3929f3317dc25939f5e->enter($__internal_88a8e2634239ddea5a4410be3c25a6cc6f3e10e2c291c3929f3317dc25939f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_88a8e2634239ddea5a4410be3c25a6cc6f3e10e2c291c3929f3317dc25939f5e->leave($__internal_88a8e2634239ddea5a4410be3c25a6cc6f3e10e2c291c3929f3317dc25939f5e_prof);

        
        $__internal_ac12396fe292a77489210e165ae1e87807c7143aac9efd5097285868674c24ea->leave($__internal_ac12396fe292a77489210e165ae1e87807c7143aac9efd5097285868674c24ea_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7e17f5a0cdfda07c0dcfdc71ccd20fe15361c1f14bc6c71650a545cc1d64cb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7e17f5a0cdfda07c0dcfdc71ccd20fe15361c1f14bc6c71650a545cc1d64cb0->enter($__internal_a7e17f5a0cdfda07c0dcfdc71ccd20fe15361c1f14bc6c71650a545cc1d64cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4036c2de7db6722dc8b2d5062d4b06c5224a4464bb8dc7bdaf69ace91603ba11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4036c2de7db6722dc8b2d5062d4b06c5224a4464bb8dc7bdaf69ace91603ba11->enter($__internal_4036c2de7db6722dc8b2d5062d4b06c5224a4464bb8dc7bdaf69ace91603ba11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4036c2de7db6722dc8b2d5062d4b06c5224a4464bb8dc7bdaf69ace91603ba11->leave($__internal_4036c2de7db6722dc8b2d5062d4b06c5224a4464bb8dc7bdaf69ace91603ba11_prof);

        
        $__internal_a7e17f5a0cdfda07c0dcfdc71ccd20fe15361c1f14bc6c71650a545cc1d64cb0->leave($__internal_a7e17f5a0cdfda07c0dcfdc71ccd20fe15361c1f14bc6c71650a545cc1d64cb0_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_834cb40f37383919993d9d9dcbfca7ed617395c825236dbd2e316cc278ad3499 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_834cb40f37383919993d9d9dcbfca7ed617395c825236dbd2e316cc278ad3499->enter($__internal_834cb40f37383919993d9d9dcbfca7ed617395c825236dbd2e316cc278ad3499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5494afb070fe77029ed8fd747f9202b55217c94b53b30f41ab3ab5d9db963a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5494afb070fe77029ed8fd747f9202b55217c94b53b30f41ab3ab5d9db963a71->enter($__internal_5494afb070fe77029ed8fd747f9202b55217c94b53b30f41ab3ab5d9db963a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_5494afb070fe77029ed8fd747f9202b55217c94b53b30f41ab3ab5d9db963a71->leave($__internal_5494afb070fe77029ed8fd747f9202b55217c94b53b30f41ab3ab5d9db963a71_prof);

        
        $__internal_834cb40f37383919993d9d9dcbfca7ed617395c825236dbd2e316cc278ad3499->leave($__internal_834cb40f37383919993d9d9dcbfca7ed617395c825236dbd2e316cc278ad3499_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/perso/Darmanko/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
