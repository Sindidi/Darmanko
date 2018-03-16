<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_0fa2c23c02926da93dadc485ea581923ea6677ae2766516ecd34fe638d786125 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2458c974ed7412a1793a6be4b0bb1bb789eca9a7151a213bb6a83cb4dff11145 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2458c974ed7412a1793a6be4b0bb1bb789eca9a7151a213bb6a83cb4dff11145->enter($__internal_2458c974ed7412a1793a6be4b0bb1bb789eca9a7151a213bb6a83cb4dff11145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a4979b1d013a3781a098086f51d2ca39d9cce5b0a5ed14f9178c2dbc2ed0d8da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4979b1d013a3781a098086f51d2ca39d9cce5b0a5ed14f9178c2dbc2ed0d8da->enter($__internal_a4979b1d013a3781a098086f51d2ca39d9cce5b0a5ed14f9178c2dbc2ed0d8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_2458c974ed7412a1793a6be4b0bb1bb789eca9a7151a213bb6a83cb4dff11145->leave($__internal_2458c974ed7412a1793a6be4b0bb1bb789eca9a7151a213bb6a83cb4dff11145_prof);

        
        $__internal_a4979b1d013a3781a098086f51d2ca39d9cce5b0a5ed14f9178c2dbc2ed0d8da->leave($__internal_a4979b1d013a3781a098086f51d2ca39d9cce5b0a5ed14f9178c2dbc2ed0d8da_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_84224b804b48471b7c80a7b9ad6a34452c659992832d0acee2e452208fa6a49b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84224b804b48471b7c80a7b9ad6a34452c659992832d0acee2e452208fa6a49b->enter($__internal_84224b804b48471b7c80a7b9ad6a34452c659992832d0acee2e452208fa6a49b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d210feef8c115541326c1201a0b0d3f1c30b85961a2faa898fb439dde1d1442d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d210feef8c115541326c1201a0b0d3f1c30b85961a2faa898fb439dde1d1442d->enter($__internal_d210feef8c115541326c1201a0b0d3f1c30b85961a2faa898fb439dde1d1442d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d210feef8c115541326c1201a0b0d3f1c30b85961a2faa898fb439dde1d1442d->leave($__internal_d210feef8c115541326c1201a0b0d3f1c30b85961a2faa898fb439dde1d1442d_prof);

        
        $__internal_84224b804b48471b7c80a7b9ad6a34452c659992832d0acee2e452208fa6a49b->leave($__internal_84224b804b48471b7c80a7b9ad6a34452c659992832d0acee2e452208fa6a49b_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_aeb2338c76ccb0fa2a9b94809c590a53b538508b5f705fa2ad24b1a5bd3fa6e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeb2338c76ccb0fa2a9b94809c590a53b538508b5f705fa2ad24b1a5bd3fa6e5->enter($__internal_aeb2338c76ccb0fa2a9b94809c590a53b538508b5f705fa2ad24b1a5bd3fa6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_740169e0c158119d086a74dea9d43e8e5edb101f2dba5293e9dbd44f26d02b98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_740169e0c158119d086a74dea9d43e8e5edb101f2dba5293e9dbd44f26d02b98->enter($__internal_740169e0c158119d086a74dea9d43e8e5edb101f2dba5293e9dbd44f26d02b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_740169e0c158119d086a74dea9d43e8e5edb101f2dba5293e9dbd44f26d02b98->leave($__internal_740169e0c158119d086a74dea9d43e8e5edb101f2dba5293e9dbd44f26d02b98_prof);

        
        $__internal_aeb2338c76ccb0fa2a9b94809c590a53b538508b5f705fa2ad24b1a5bd3fa6e5->leave($__internal_aeb2338c76ccb0fa2a9b94809c590a53b538508b5f705fa2ad24b1a5bd3fa6e5_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_dec3be069b471628632d20f1b9387cc7b81ae8e13844ae9d18f3d4e444e53623 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dec3be069b471628632d20f1b9387cc7b81ae8e13844ae9d18f3d4e444e53623->enter($__internal_dec3be069b471628632d20f1b9387cc7b81ae8e13844ae9d18f3d4e444e53623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_28766c475aa13a3141ebafe0e67f32761aaf773e42a417fdb2c17151c07b0d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28766c475aa13a3141ebafe0e67f32761aaf773e42a417fdb2c17151c07b0d21->enter($__internal_28766c475aa13a3141ebafe0e67f32761aaf773e42a417fdb2c17151c07b0d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_28766c475aa13a3141ebafe0e67f32761aaf773e42a417fdb2c17151c07b0d21->leave($__internal_28766c475aa13a3141ebafe0e67f32761aaf773e42a417fdb2c17151c07b0d21_prof);

        
        $__internal_dec3be069b471628632d20f1b9387cc7b81ae8e13844ae9d18f3d4e444e53623->leave($__internal_dec3be069b471628632d20f1b9387cc7b81ae8e13844ae9d18f3d4e444e53623_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/perso/Darmanko/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
