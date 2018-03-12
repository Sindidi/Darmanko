<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2076cc87a963813ab5487257820f3c7f2b5f8057c18b8f93b4cf48c9dc3c70f7 extends Twig_Template
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
        $__internal_61e6b7207b4b0639ccbce01022026a02382c4ba9228bc8af1f0aa5c4f19cd7e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61e6b7207b4b0639ccbce01022026a02382c4ba9228bc8af1f0aa5c4f19cd7e0->enter($__internal_61e6b7207b4b0639ccbce01022026a02382c4ba9228bc8af1f0aa5c4f19cd7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_2d2a8b8853d366ea21f569cd23389d019b0e7897002c45b684e05db03a0709fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d2a8b8853d366ea21f569cd23389d019b0e7897002c45b684e05db03a0709fd->enter($__internal_2d2a8b8853d366ea21f569cd23389d019b0e7897002c45b684e05db03a0709fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61e6b7207b4b0639ccbce01022026a02382c4ba9228bc8af1f0aa5c4f19cd7e0->leave($__internal_61e6b7207b4b0639ccbce01022026a02382c4ba9228bc8af1f0aa5c4f19cd7e0_prof);

        
        $__internal_2d2a8b8853d366ea21f569cd23389d019b0e7897002c45b684e05db03a0709fd->leave($__internal_2d2a8b8853d366ea21f569cd23389d019b0e7897002c45b684e05db03a0709fd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ed674e01aea80da70a4a17e22a37f6e55c309435420c3dc338ab98d75a1689be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed674e01aea80da70a4a17e22a37f6e55c309435420c3dc338ab98d75a1689be->enter($__internal_ed674e01aea80da70a4a17e22a37f6e55c309435420c3dc338ab98d75a1689be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b0d8eec46d6650abceb55aefcc9877811805acd6954e0ff9ce690b4d06743e61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d8eec46d6650abceb55aefcc9877811805acd6954e0ff9ce690b4d06743e61->enter($__internal_b0d8eec46d6650abceb55aefcc9877811805acd6954e0ff9ce690b4d06743e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b0d8eec46d6650abceb55aefcc9877811805acd6954e0ff9ce690b4d06743e61->leave($__internal_b0d8eec46d6650abceb55aefcc9877811805acd6954e0ff9ce690b4d06743e61_prof);

        
        $__internal_ed674e01aea80da70a4a17e22a37f6e55c309435420c3dc338ab98d75a1689be->leave($__internal_ed674e01aea80da70a4a17e22a37f6e55c309435420c3dc338ab98d75a1689be_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_494a401879b857bb223a7878f061873c387118c06ab6d0ed978bccdd2e4cde21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_494a401879b857bb223a7878f061873c387118c06ab6d0ed978bccdd2e4cde21->enter($__internal_494a401879b857bb223a7878f061873c387118c06ab6d0ed978bccdd2e4cde21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e021798897a512992c9c6c8969c01a1e993752dfa78372afb6de44ea54d5d1da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e021798897a512992c9c6c8969c01a1e993752dfa78372afb6de44ea54d5d1da->enter($__internal_e021798897a512992c9c6c8969c01a1e993752dfa78372afb6de44ea54d5d1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e021798897a512992c9c6c8969c01a1e993752dfa78372afb6de44ea54d5d1da->leave($__internal_e021798897a512992c9c6c8969c01a1e993752dfa78372afb6de44ea54d5d1da_prof);

        
        $__internal_494a401879b857bb223a7878f061873c387118c06ab6d0ed978bccdd2e4cde21->leave($__internal_494a401879b857bb223a7878f061873c387118c06ab6d0ed978bccdd2e4cde21_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_73f2192b3f5a154b7dbd860f34283c1af293c24f48869ad935727f6ee25ca392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73f2192b3f5a154b7dbd860f34283c1af293c24f48869ad935727f6ee25ca392->enter($__internal_73f2192b3f5a154b7dbd860f34283c1af293c24f48869ad935727f6ee25ca392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_412328d5998a7c82ce4d4b2bb872465436ceb00ccc0e67b1d3247a583ba46f46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_412328d5998a7c82ce4d4b2bb872465436ceb00ccc0e67b1d3247a583ba46f46->enter($__internal_412328d5998a7c82ce4d4b2bb872465436ceb00ccc0e67b1d3247a583ba46f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_412328d5998a7c82ce4d4b2bb872465436ceb00ccc0e67b1d3247a583ba46f46->leave($__internal_412328d5998a7c82ce4d4b2bb872465436ceb00ccc0e67b1d3247a583ba46f46_prof);

        
        $__internal_73f2192b3f5a154b7dbd860f34283c1af293c24f48869ad935727f6ee25ca392->leave($__internal_73f2192b3f5a154b7dbd860f34283c1af293c24f48869ad935727f6ee25ca392_prof);

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
