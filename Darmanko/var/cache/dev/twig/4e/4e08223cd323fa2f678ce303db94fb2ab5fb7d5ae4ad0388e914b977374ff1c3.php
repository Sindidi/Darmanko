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
        $__internal_499ea3e400892dcdbd9a7cecd0d8f0ea8c25333f42e3062c168fe8df0586783c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_499ea3e400892dcdbd9a7cecd0d8f0ea8c25333f42e3062c168fe8df0586783c->enter($__internal_499ea3e400892dcdbd9a7cecd0d8f0ea8c25333f42e3062c168fe8df0586783c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_41320791f637ad9096e183e1980c94197c6227ec0bd87f3e5eb4975e6da0c293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41320791f637ad9096e183e1980c94197c6227ec0bd87f3e5eb4975e6da0c293->enter($__internal_41320791f637ad9096e183e1980c94197c6227ec0bd87f3e5eb4975e6da0c293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_499ea3e400892dcdbd9a7cecd0d8f0ea8c25333f42e3062c168fe8df0586783c->leave($__internal_499ea3e400892dcdbd9a7cecd0d8f0ea8c25333f42e3062c168fe8df0586783c_prof);

        
        $__internal_41320791f637ad9096e183e1980c94197c6227ec0bd87f3e5eb4975e6da0c293->leave($__internal_41320791f637ad9096e183e1980c94197c6227ec0bd87f3e5eb4975e6da0c293_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5d1596052a0c76c3135313a4f9ca3a93a1b1ca0520a3e0e03140686c3dfb196f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d1596052a0c76c3135313a4f9ca3a93a1b1ca0520a3e0e03140686c3dfb196f->enter($__internal_5d1596052a0c76c3135313a4f9ca3a93a1b1ca0520a3e0e03140686c3dfb196f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0e0de3c9b53706288111837847fa4f828c9ff0d228f9a736ffcdd3a78f1856ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e0de3c9b53706288111837847fa4f828c9ff0d228f9a736ffcdd3a78f1856ea->enter($__internal_0e0de3c9b53706288111837847fa4f828c9ff0d228f9a736ffcdd3a78f1856ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0e0de3c9b53706288111837847fa4f828c9ff0d228f9a736ffcdd3a78f1856ea->leave($__internal_0e0de3c9b53706288111837847fa4f828c9ff0d228f9a736ffcdd3a78f1856ea_prof);

        
        $__internal_5d1596052a0c76c3135313a4f9ca3a93a1b1ca0520a3e0e03140686c3dfb196f->leave($__internal_5d1596052a0c76c3135313a4f9ca3a93a1b1ca0520a3e0e03140686c3dfb196f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6bcc851afae1ac1345d7dea647fb2a799661e745499af76c1c0f2720ac553b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6bcc851afae1ac1345d7dea647fb2a799661e745499af76c1c0f2720ac553b1->enter($__internal_f6bcc851afae1ac1345d7dea647fb2a799661e745499af76c1c0f2720ac553b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c3ee6f1a6bec8ee0e220ecae777cb587ad677d8eed2a2dab8e5a4907bc679f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ee6f1a6bec8ee0e220ecae777cb587ad677d8eed2a2dab8e5a4907bc679f83->enter($__internal_c3ee6f1a6bec8ee0e220ecae777cb587ad677d8eed2a2dab8e5a4907bc679f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c3ee6f1a6bec8ee0e220ecae777cb587ad677d8eed2a2dab8e5a4907bc679f83->leave($__internal_c3ee6f1a6bec8ee0e220ecae777cb587ad677d8eed2a2dab8e5a4907bc679f83_prof);

        
        $__internal_f6bcc851afae1ac1345d7dea647fb2a799661e745499af76c1c0f2720ac553b1->leave($__internal_f6bcc851afae1ac1345d7dea647fb2a799661e745499af76c1c0f2720ac553b1_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ada003f86e67806984d657784e5ba39617552e1e4c88a6103a3be88940da173f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ada003f86e67806984d657784e5ba39617552e1e4c88a6103a3be88940da173f->enter($__internal_ada003f86e67806984d657784e5ba39617552e1e4c88a6103a3be88940da173f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eba559a2169464ba00b25ed99f9ff70e836793c9578160ee9817c34969f829bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eba559a2169464ba00b25ed99f9ff70e836793c9578160ee9817c34969f829bb->enter($__internal_eba559a2169464ba00b25ed99f9ff70e836793c9578160ee9817c34969f829bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_eba559a2169464ba00b25ed99f9ff70e836793c9578160ee9817c34969f829bb->leave($__internal_eba559a2169464ba00b25ed99f9ff70e836793c9578160ee9817c34969f829bb_prof);

        
        $__internal_ada003f86e67806984d657784e5ba39617552e1e4c88a6103a3be88940da173f->leave($__internal_ada003f86e67806984d657784e5ba39617552e1e4c88a6103a3be88940da173f_prof);

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
