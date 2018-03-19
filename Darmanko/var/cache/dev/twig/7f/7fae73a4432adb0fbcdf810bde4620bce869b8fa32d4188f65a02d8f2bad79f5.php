<?php

/* ::base.html.twig */
class __TwigTemplate_ca4c28c455751297fecda4dcbbea910fae8be22f2b25e3e70e0a3b092dab5e06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4440c3bc6ce43a2a4d584d9c11c8d13d7c8d0ca75b9ed23034846b9c7a06101d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4440c3bc6ce43a2a4d584d9c11c8d13d7c8d0ca75b9ed23034846b9c7a06101d->enter($__internal_4440c3bc6ce43a2a4d584d9c11c8d13d7c8d0ca75b9ed23034846b9c7a06101d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_5b32747cf586fb7757e7c4984f6afb95d19cfcb153bc106b629a6c7d485f5a56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b32747cf586fb7757e7c4984f6afb95d19cfcb153bc106b629a6c7d485f5a56->enter($__internal_5b32747cf586fb7757e7c4984f6afb95d19cfcb153bc106b629a6c7d485f5a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    \t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\">
    \t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "    </body>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
</html>
";
        
        $__internal_4440c3bc6ce43a2a4d584d9c11c8d13d7c8d0ca75b9ed23034846b9c7a06101d->leave($__internal_4440c3bc6ce43a2a4d584d9c11c8d13d7c8d0ca75b9ed23034846b9c7a06101d_prof);

        
        $__internal_5b32747cf586fb7757e7c4984f6afb95d19cfcb153bc106b629a6c7d485f5a56->leave($__internal_5b32747cf586fb7757e7c4984f6afb95d19cfcb153bc106b629a6c7d485f5a56_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4ef14d6c88ec7f66f9cf8515a09f4d44c85d4a6fa04557c0200a7df23b5b2b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4ef14d6c88ec7f66f9cf8515a09f4d44c85d4a6fa04557c0200a7df23b5b2b3->enter($__internal_f4ef14d6c88ec7f66f9cf8515a09f4d44c85d4a6fa04557c0200a7df23b5b2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9e0ca476f7c5a043f927e513d315e0d6ac68212757148bf6ea30da1241fa214c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e0ca476f7c5a043f927e513d315e0d6ac68212757148bf6ea30da1241fa214c->enter($__internal_9e0ca476f7c5a043f927e513d315e0d6ac68212757148bf6ea30da1241fa214c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9e0ca476f7c5a043f927e513d315e0d6ac68212757148bf6ea30da1241fa214c->leave($__internal_9e0ca476f7c5a043f927e513d315e0d6ac68212757148bf6ea30da1241fa214c_prof);

        
        $__internal_f4ef14d6c88ec7f66f9cf8515a09f4d44c85d4a6fa04557c0200a7df23b5b2b3->leave($__internal_f4ef14d6c88ec7f66f9cf8515a09f4d44c85d4a6fa04557c0200a7df23b5b2b3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1d2bbc2f4771980c31ec77d650f0180a4bde55e929a69cefe2d1fccd8cb75e57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d2bbc2f4771980c31ec77d650f0180a4bde55e929a69cefe2d1fccd8cb75e57->enter($__internal_1d2bbc2f4771980c31ec77d650f0180a4bde55e929a69cefe2d1fccd8cb75e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e9bf20da02458c6716711f120e0fdf8f95650a57b55537774e14d51f11e281c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9bf20da02458c6716711f120e0fdf8f95650a57b55537774e14d51f11e281c5->enter($__internal_e9bf20da02458c6716711f120e0fdf8f95650a57b55537774e14d51f11e281c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e9bf20da02458c6716711f120e0fdf8f95650a57b55537774e14d51f11e281c5->leave($__internal_e9bf20da02458c6716711f120e0fdf8f95650a57b55537774e14d51f11e281c5_prof);

        
        $__internal_1d2bbc2f4771980c31ec77d650f0180a4bde55e929a69cefe2d1fccd8cb75e57->leave($__internal_1d2bbc2f4771980c31ec77d650f0180a4bde55e929a69cefe2d1fccd8cb75e57_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_222ecf342ba8f4708d9a0b21f7f9b9bc52a1b0f6895ce7de3a95319043a30d95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_222ecf342ba8f4708d9a0b21f7f9b9bc52a1b0f6895ce7de3a95319043a30d95->enter($__internal_222ecf342ba8f4708d9a0b21f7f9b9bc52a1b0f6895ce7de3a95319043a30d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_171dfaec57ee130220f6be2be7cc1d54932840960b21647abb8a1fd3514b363f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_171dfaec57ee130220f6be2be7cc1d54932840960b21647abb8a1fd3514b363f->enter($__internal_171dfaec57ee130220f6be2be7cc1d54932840960b21647abb8a1fd3514b363f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_171dfaec57ee130220f6be2be7cc1d54932840960b21647abb8a1fd3514b363f->leave($__internal_171dfaec57ee130220f6be2be7cc1d54932840960b21647abb8a1fd3514b363f_prof);

        
        $__internal_222ecf342ba8f4708d9a0b21f7f9b9bc52a1b0f6895ce7de3a95319043a30d95->leave($__internal_222ecf342ba8f4708d9a0b21f7f9b9bc52a1b0f6895ce7de3a95319043a30d95_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf2bdf9cdbaf651f25e73c15e3cb447d73e0c6e372df1e81c6053f7f104e546d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf2bdf9cdbaf651f25e73c15e3cb447d73e0c6e372df1e81c6053f7f104e546d->enter($__internal_bf2bdf9cdbaf651f25e73c15e3cb447d73e0c6e372df1e81c6053f7f104e546d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fd104ad2533d561c86fd8999d63a94eb87cd1fce7e91777ec75173f953983cdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd104ad2533d561c86fd8999d63a94eb87cd1fce7e91777ec75173f953983cdc->enter($__internal_fd104ad2533d561c86fd8999d63a94eb87cd1fce7e91777ec75173f953983cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fd104ad2533d561c86fd8999d63a94eb87cd1fce7e91777ec75173f953983cdc->leave($__internal_fd104ad2533d561c86fd8999d63a94eb87cd1fce7e91777ec75173f953983cdc_prof);

        
        $__internal_bf2bdf9cdbaf651f25e73c15e3cb447d73e0c6e372df1e81c6053f7f104e546d->leave($__internal_bf2bdf9cdbaf651f25e73c15e3cb447d73e0c6e372df1e81c6053f7f104e546d_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 13,  113 => 12,  96 => 6,  78 => 5,  65 => 19,  58 => 14,  55 => 13,  53 => 12,  47 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    \t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\">
    \t<link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\">
    </head>
    <body>
        {% block javascripts %}{% endblock %}
        {% block body %}{% endblock %}
    </body>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
<script src=\"{{asset('js/script.js')}}\"></script>
</html>
", "::base.html.twig", "/var/www/html/perso/Darmanko/app/Resources/views/base.html.twig");
    }
}
