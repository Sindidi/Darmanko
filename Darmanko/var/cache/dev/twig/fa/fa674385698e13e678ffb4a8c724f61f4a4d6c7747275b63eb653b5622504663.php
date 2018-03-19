<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_9da162e9234ca2b68608ca9b6e7be863175704f1667ada8c08e980ba6252e26d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad41d233fd32ac8e0ac2501628085c42330a61c2d48b420c841f3607f6456aff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad41d233fd32ac8e0ac2501628085c42330a61c2d48b420c841f3607f6456aff->enter($__internal_ad41d233fd32ac8e0ac2501628085c42330a61c2d48b420c841f3607f6456aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_037a497861bdf139b7affb0231801a142240db0e878b8ae246c8a63414f3781e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_037a497861bdf139b7affb0231801a142240db0e878b8ae246c8a63414f3781e->enter($__internal_037a497861bdf139b7affb0231801a142240db0e878b8ae246c8a63414f3781e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad41d233fd32ac8e0ac2501628085c42330a61c2d48b420c841f3607f6456aff->leave($__internal_ad41d233fd32ac8e0ac2501628085c42330a61c2d48b420c841f3607f6456aff_prof);

        
        $__internal_037a497861bdf139b7affb0231801a142240db0e878b8ae246c8a63414f3781e->leave($__internal_037a497861bdf139b7affb0231801a142240db0e878b8ae246c8a63414f3781e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4b15402346039cfad536e02604738edc62b40c01840f08c83874285726f0adaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b15402346039cfad536e02604738edc62b40c01840f08c83874285726f0adaf->enter($__internal_4b15402346039cfad536e02604738edc62b40c01840f08c83874285726f0adaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_997ec99b9d7bb6d57b2a182419275cc63b9692320d37e02830ec22e3ae94bf7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_997ec99b9d7bb6d57b2a182419275cc63b9692320d37e02830ec22e3ae94bf7e->enter($__internal_997ec99b9d7bb6d57b2a182419275cc63b9692320d37e02830ec22e3ae94bf7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_997ec99b9d7bb6d57b2a182419275cc63b9692320d37e02830ec22e3ae94bf7e->leave($__internal_997ec99b9d7bb6d57b2a182419275cc63b9692320d37e02830ec22e3ae94bf7e_prof);

        
        $__internal_4b15402346039cfad536e02604738edc62b40c01840f08c83874285726f0adaf->leave($__internal_4b15402346039cfad536e02604738edc62b40c01840f08c83874285726f0adaf_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fc28ae635ec5217fe2766c372d7b3c83c1afb3e4d7324aeb3d237bef57d0876c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc28ae635ec5217fe2766c372d7b3c83c1afb3e4d7324aeb3d237bef57d0876c->enter($__internal_fc28ae635ec5217fe2766c372d7b3c83c1afb3e4d7324aeb3d237bef57d0876c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_008feb31513cc0e3437252884a2e6d82f042dc0d52e141b688ef3a30b588e8fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_008feb31513cc0e3437252884a2e6d82f042dc0d52e141b688ef3a30b588e8fe->enter($__internal_008feb31513cc0e3437252884a2e6d82f042dc0d52e141b688ef3a30b588e8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_008feb31513cc0e3437252884a2e6d82f042dc0d52e141b688ef3a30b588e8fe->leave($__internal_008feb31513cc0e3437252884a2e6d82f042dc0d52e141b688ef3a30b588e8fe_prof);

        
        $__internal_fc28ae635ec5217fe2766c372d7b3c83c1afb3e4d7324aeb3d237bef57d0876c->leave($__internal_fc28ae635ec5217fe2766c372d7b3c83c1afb3e4d7324aeb3d237bef57d0876c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b4dd7309f6fe39342112cd2c8c4d10ca14202124f8212daf6e88e85f4604aa54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4dd7309f6fe39342112cd2c8c4d10ca14202124f8212daf6e88e85f4604aa54->enter($__internal_b4dd7309f6fe39342112cd2c8c4d10ca14202124f8212daf6e88e85f4604aa54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fed87c56ac669f402e141dd9ea2bdc31ecc2954b3eed138934fa140b7c1ed472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed87c56ac669f402e141dd9ea2bdc31ecc2954b3eed138934fa140b7c1ed472->enter($__internal_fed87c56ac669f402e141dd9ea2bdc31ecc2954b3eed138934fa140b7c1ed472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_fed87c56ac669f402e141dd9ea2bdc31ecc2954b3eed138934fa140b7c1ed472->leave($__internal_fed87c56ac669f402e141dd9ea2bdc31ecc2954b3eed138934fa140b7c1ed472_prof);

        
        $__internal_b4dd7309f6fe39342112cd2c8c4d10ca14202124f8212daf6e88e85f4604aa54->leave($__internal_b4dd7309f6fe39342112cd2c8c4d10ca14202124f8212daf6e88e85f4604aa54_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/perso/Darmanko/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
