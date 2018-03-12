<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_c9d70a145bcd744b733352c66beaa623adceed9f9e0faa6bf17c69f69a1ba003 extends Twig_Template
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
        $__internal_0ad013173092b5d8d83f9e0704f6f05475dfc5a194d01e07f75e2541c66560c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ad013173092b5d8d83f9e0704f6f05475dfc5a194d01e07f75e2541c66560c4->enter($__internal_0ad013173092b5d8d83f9e0704f6f05475dfc5a194d01e07f75e2541c66560c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_967a05a16a3d3c8b8d1f54f052e38b0aeb16c94f3aefe190a74b6363d39b4395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_967a05a16a3d3c8b8d1f54f052e38b0aeb16c94f3aefe190a74b6363d39b4395->enter($__internal_967a05a16a3d3c8b8d1f54f052e38b0aeb16c94f3aefe190a74b6363d39b4395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_0ad013173092b5d8d83f9e0704f6f05475dfc5a194d01e07f75e2541c66560c4->leave($__internal_0ad013173092b5d8d83f9e0704f6f05475dfc5a194d01e07f75e2541c66560c4_prof);

        
        $__internal_967a05a16a3d3c8b8d1f54f052e38b0aeb16c94f3aefe190a74b6363d39b4395->leave($__internal_967a05a16a3d3c8b8d1f54f052e38b0aeb16c94f3aefe190a74b6363d39b4395_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_70a333409be6c68785f21ad3b85e517a1e8af55d0d91dcd8907b010f86ff9cf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70a333409be6c68785f21ad3b85e517a1e8af55d0d91dcd8907b010f86ff9cf8->enter($__internal_70a333409be6c68785f21ad3b85e517a1e8af55d0d91dcd8907b010f86ff9cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6084fa1e94768317f286465ed301c0804428fe88af1820937e4d5be51cda85b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6084fa1e94768317f286465ed301c0804428fe88af1820937e4d5be51cda85b9->enter($__internal_6084fa1e94768317f286465ed301c0804428fe88af1820937e4d5be51cda85b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6084fa1e94768317f286465ed301c0804428fe88af1820937e4d5be51cda85b9->leave($__internal_6084fa1e94768317f286465ed301c0804428fe88af1820937e4d5be51cda85b9_prof);

        
        $__internal_70a333409be6c68785f21ad3b85e517a1e8af55d0d91dcd8907b010f86ff9cf8->leave($__internal_70a333409be6c68785f21ad3b85e517a1e8af55d0d91dcd8907b010f86ff9cf8_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b7f6b7db30129658bed8bf5cf453e2dc902adada64746b6f326b525ff680b2a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7f6b7db30129658bed8bf5cf453e2dc902adada64746b6f326b525ff680b2a3->enter($__internal_b7f6b7db30129658bed8bf5cf453e2dc902adada64746b6f326b525ff680b2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_97682c3ac0e507a649ec31c1fc9b9ebe09230172cb9d31c6b485797938513a12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97682c3ac0e507a649ec31c1fc9b9ebe09230172cb9d31c6b485797938513a12->enter($__internal_97682c3ac0e507a649ec31c1fc9b9ebe09230172cb9d31c6b485797938513a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_97682c3ac0e507a649ec31c1fc9b9ebe09230172cb9d31c6b485797938513a12->leave($__internal_97682c3ac0e507a649ec31c1fc9b9ebe09230172cb9d31c6b485797938513a12_prof);

        
        $__internal_b7f6b7db30129658bed8bf5cf453e2dc902adada64746b6f326b525ff680b2a3->leave($__internal_b7f6b7db30129658bed8bf5cf453e2dc902adada64746b6f326b525ff680b2a3_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_723a65dfaae43e1d6e472557846469554f2a4f8679bd0638a89d3739e19b8596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_723a65dfaae43e1d6e472557846469554f2a4f8679bd0638a89d3739e19b8596->enter($__internal_723a65dfaae43e1d6e472557846469554f2a4f8679bd0638a89d3739e19b8596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5c03773f7a64cc5ea6cc9c8b0c63187a663168b6ca06e6c25863f482e02f3fc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c03773f7a64cc5ea6cc9c8b0c63187a663168b6ca06e6c25863f482e02f3fc8->enter($__internal_5c03773f7a64cc5ea6cc9c8b0c63187a663168b6ca06e6c25863f482e02f3fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5c03773f7a64cc5ea6cc9c8b0c63187a663168b6ca06e6c25863f482e02f3fc8->leave($__internal_5c03773f7a64cc5ea6cc9c8b0c63187a663168b6ca06e6c25863f482e02f3fc8_prof);

        
        $__internal_723a65dfaae43e1d6e472557846469554f2a4f8679bd0638a89d3739e19b8596->leave($__internal_723a65dfaae43e1d6e472557846469554f2a4f8679bd0638a89d3739e19b8596_prof);

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
