<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d2d12ce08586495968f9078a823b9f7c5345d49c5eb1657c99b11bc73bb4a5a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_bc666d75b4b521a5f8ba9b080f3c2dc6770dbe682d458a939ffa7b5278b3aa3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc666d75b4b521a5f8ba9b080f3c2dc6770dbe682d458a939ffa7b5278b3aa3f->enter($__internal_bc666d75b4b521a5f8ba9b080f3c2dc6770dbe682d458a939ffa7b5278b3aa3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b706e495c7c4339890857ca7d5ccb5f3d20d93527e007c250e7bea2379afc822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b706e495c7c4339890857ca7d5ccb5f3d20d93527e007c250e7bea2379afc822->enter($__internal_b706e495c7c4339890857ca7d5ccb5f3d20d93527e007c250e7bea2379afc822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc666d75b4b521a5f8ba9b080f3c2dc6770dbe682d458a939ffa7b5278b3aa3f->leave($__internal_bc666d75b4b521a5f8ba9b080f3c2dc6770dbe682d458a939ffa7b5278b3aa3f_prof);

        
        $__internal_b706e495c7c4339890857ca7d5ccb5f3d20d93527e007c250e7bea2379afc822->leave($__internal_b706e495c7c4339890857ca7d5ccb5f3d20d93527e007c250e7bea2379afc822_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ce3953886c696cf93d2021046ab03d392190bff1200eaa108b39c425ce59bcde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce3953886c696cf93d2021046ab03d392190bff1200eaa108b39c425ce59bcde->enter($__internal_ce3953886c696cf93d2021046ab03d392190bff1200eaa108b39c425ce59bcde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b471eb3a37991a5a4fd2af0cfd345c84046bbf9d596170b4596ac74f86176f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b471eb3a37991a5a4fd2af0cfd345c84046bbf9d596170b4596ac74f86176f10->enter($__internal_b471eb3a37991a5a4fd2af0cfd345c84046bbf9d596170b4596ac74f86176f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b471eb3a37991a5a4fd2af0cfd345c84046bbf9d596170b4596ac74f86176f10->leave($__internal_b471eb3a37991a5a4fd2af0cfd345c84046bbf9d596170b4596ac74f86176f10_prof);

        
        $__internal_ce3953886c696cf93d2021046ab03d392190bff1200eaa108b39c425ce59bcde->leave($__internal_ce3953886c696cf93d2021046ab03d392190bff1200eaa108b39c425ce59bcde_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0f60114e40f5a9e46aa4f2600e0989fe918a52ead6031770e176b2d4aaffa556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f60114e40f5a9e46aa4f2600e0989fe918a52ead6031770e176b2d4aaffa556->enter($__internal_0f60114e40f5a9e46aa4f2600e0989fe918a52ead6031770e176b2d4aaffa556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0e8a520ddf5141e4215d572fc420d87e5637905a86434e7211d3999ec6370708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e8a520ddf5141e4215d572fc420d87e5637905a86434e7211d3999ec6370708->enter($__internal_0e8a520ddf5141e4215d572fc420d87e5637905a86434e7211d3999ec6370708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0e8a520ddf5141e4215d572fc420d87e5637905a86434e7211d3999ec6370708->leave($__internal_0e8a520ddf5141e4215d572fc420d87e5637905a86434e7211d3999ec6370708_prof);

        
        $__internal_0f60114e40f5a9e46aa4f2600e0989fe918a52ead6031770e176b2d4aaffa556->leave($__internal_0f60114e40f5a9e46aa4f2600e0989fe918a52ead6031770e176b2d4aaffa556_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed8303848b59d86c4258c2799a3c461a0c1152e10862f27fd0f873219eb27c73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed8303848b59d86c4258c2799a3c461a0c1152e10862f27fd0f873219eb27c73->enter($__internal_ed8303848b59d86c4258c2799a3c461a0c1152e10862f27fd0f873219eb27c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4ffd250173a25c89f2f31a7903720de2b32d0fbe01a51d492b0b64551e4a5b52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ffd250173a25c89f2f31a7903720de2b32d0fbe01a51d492b0b64551e4a5b52->enter($__internal_4ffd250173a25c89f2f31a7903720de2b32d0fbe01a51d492b0b64551e4a5b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4ffd250173a25c89f2f31a7903720de2b32d0fbe01a51d492b0b64551e4a5b52->leave($__internal_4ffd250173a25c89f2f31a7903720de2b32d0fbe01a51d492b0b64551e4a5b52_prof);

        
        $__internal_ed8303848b59d86c4258c2799a3c461a0c1152e10862f27fd0f873219eb27c73->leave($__internal_ed8303848b59d86c4258c2799a3c461a0c1152e10862f27fd0f873219eb27c73_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/perso/Darmanko/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
