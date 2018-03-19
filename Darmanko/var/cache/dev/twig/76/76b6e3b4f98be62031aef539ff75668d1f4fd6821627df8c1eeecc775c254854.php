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
        $__internal_0c8cd12683260985d76dfb26335b1b937ad4e9258ae51098fd9c1c061c61819d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c8cd12683260985d76dfb26335b1b937ad4e9258ae51098fd9c1c061c61819d->enter($__internal_0c8cd12683260985d76dfb26335b1b937ad4e9258ae51098fd9c1c061c61819d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_4d199f0a28ab3c4a29a253f179571e07ba3e5823ab4387c1835afe7d0f4fb5b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d199f0a28ab3c4a29a253f179571e07ba3e5823ab4387c1835afe7d0f4fb5b6->enter($__internal_4d199f0a28ab3c4a29a253f179571e07ba3e5823ab4387c1835afe7d0f4fb5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_0c8cd12683260985d76dfb26335b1b937ad4e9258ae51098fd9c1c061c61819d->leave($__internal_0c8cd12683260985d76dfb26335b1b937ad4e9258ae51098fd9c1c061c61819d_prof);

        
        $__internal_4d199f0a28ab3c4a29a253f179571e07ba3e5823ab4387c1835afe7d0f4fb5b6->leave($__internal_4d199f0a28ab3c4a29a253f179571e07ba3e5823ab4387c1835afe7d0f4fb5b6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e79e03f7e1ae15cb8aba9afc1dc24bc180307482d539ed373244137bd414c6f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e79e03f7e1ae15cb8aba9afc1dc24bc180307482d539ed373244137bd414c6f4->enter($__internal_e79e03f7e1ae15cb8aba9afc1dc24bc180307482d539ed373244137bd414c6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f8ed474fa5485531dcdd9bcd13468eb8b9bb5998a87f14e50484fe813162940 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f8ed474fa5485531dcdd9bcd13468eb8b9bb5998a87f14e50484fe813162940->enter($__internal_6f8ed474fa5485531dcdd9bcd13468eb8b9bb5998a87f14e50484fe813162940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f8ed474fa5485531dcdd9bcd13468eb8b9bb5998a87f14e50484fe813162940->leave($__internal_6f8ed474fa5485531dcdd9bcd13468eb8b9bb5998a87f14e50484fe813162940_prof);

        
        $__internal_e79e03f7e1ae15cb8aba9afc1dc24bc180307482d539ed373244137bd414c6f4->leave($__internal_e79e03f7e1ae15cb8aba9afc1dc24bc180307482d539ed373244137bd414c6f4_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_4344855a5ca7ca63a517451082f3ca951e2e5d52cc12f4be77ea6a16027304f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4344855a5ca7ca63a517451082f3ca951e2e5d52cc12f4be77ea6a16027304f8->enter($__internal_4344855a5ca7ca63a517451082f3ca951e2e5d52cc12f4be77ea6a16027304f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4e221cd12aabc6493a66d5ca54a5b5e57137d693be81c5324f84eebb535121e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e221cd12aabc6493a66d5ca54a5b5e57137d693be81c5324f84eebb535121e6->enter($__internal_4e221cd12aabc6493a66d5ca54a5b5e57137d693be81c5324f84eebb535121e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_4e221cd12aabc6493a66d5ca54a5b5e57137d693be81c5324f84eebb535121e6->leave($__internal_4e221cd12aabc6493a66d5ca54a5b5e57137d693be81c5324f84eebb535121e6_prof);

        
        $__internal_4344855a5ca7ca63a517451082f3ca951e2e5d52cc12f4be77ea6a16027304f8->leave($__internal_4344855a5ca7ca63a517451082f3ca951e2e5d52cc12f4be77ea6a16027304f8_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_eeb8dca991cf90ded19b3aafddc2d2879d6f251e9f4ed12424f3a4a65fd28154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeb8dca991cf90ded19b3aafddc2d2879d6f251e9f4ed12424f3a4a65fd28154->enter($__internal_eeb8dca991cf90ded19b3aafddc2d2879d6f251e9f4ed12424f3a4a65fd28154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2c6eeffadc0f27d72c214cfde3af79b9c0be7f640e9e10a6f8c9c4761d7e8542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c6eeffadc0f27d72c214cfde3af79b9c0be7f640e9e10a6f8c9c4761d7e8542->enter($__internal_2c6eeffadc0f27d72c214cfde3af79b9c0be7f640e9e10a6f8c9c4761d7e8542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2c6eeffadc0f27d72c214cfde3af79b9c0be7f640e9e10a6f8c9c4761d7e8542->leave($__internal_2c6eeffadc0f27d72c214cfde3af79b9c0be7f640e9e10a6f8c9c4761d7e8542_prof);

        
        $__internal_eeb8dca991cf90ded19b3aafddc2d2879d6f251e9f4ed12424f3a4a65fd28154->leave($__internal_eeb8dca991cf90ded19b3aafddc2d2879d6f251e9f4ed12424f3a4a65fd28154_prof);

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
