<?php

/* SNTDarmankoBundle:reservation:upload.html.twig */
class __TwigTemplate_cb540d9b5fb73e64c8b17970d5a4e98d8b54bb938261a14339d039c7f7c360b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::template.html.twig", "SNTDarmankoBundle:reservation:upload.html.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66bcaab992852093aba23dedc97d52a27c2ea611402851193e691a26879ae3d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66bcaab992852093aba23dedc97d52a27c2ea611402851193e691a26879ae3d7->enter($__internal_66bcaab992852093aba23dedc97d52a27c2ea611402851193e691a26879ae3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:reservation:upload.html.twig"));

        $__internal_76478741facfb778d9ea27a8ee39c29c54dd28a4b1ef9a846acb3aeeabbaa490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76478741facfb778d9ea27a8ee39c29c54dd28a4b1ef9a846acb3aeeabbaa490->enter($__internal_76478741facfb778d9ea27a8ee39c29c54dd28a4b1ef9a846acb3aeeabbaa490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:reservation:upload.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66bcaab992852093aba23dedc97d52a27c2ea611402851193e691a26879ae3d7->leave($__internal_66bcaab992852093aba23dedc97d52a27c2ea611402851193e691a26879ae3d7_prof);

        
        $__internal_76478741facfb778d9ea27a8ee39c29c54dd28a4b1ef9a846acb3aeeabbaa490->leave($__internal_76478741facfb778d9ea27a8ee39c29c54dd28a4b1ef9a846acb3aeeabbaa490_prof);

    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        $__internal_8a5dd98e7cf3481e038c3ca08db7dcc3dae63bddad0289ed70cfde3d1006254b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a5dd98e7cf3481e038c3ca08db7dcc3dae63bddad0289ed70cfde3d1006254b->enter($__internal_8a5dd98e7cf3481e038c3ca08db7dcc3dae63bddad0289ed70cfde3d1006254b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_3fe758cb6aeb35b1f7a59704c44246584c215d1ba0964bed371a90dd5bbd08ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fe758cb6aeb35b1f7a59704c44246584c215d1ba0964bed371a90dd5bbd08ec->enter($__internal_3fe758cb6aeb35b1f7a59704c44246584c215d1ba0964bed371a90dd5bbd08ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 4
        echo "
    <!-- Dropzone css -->
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/dropzone/dist/dropzone.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

";
        
        $__internal_3fe758cb6aeb35b1f7a59704c44246584c215d1ba0964bed371a90dd5bbd08ec->leave($__internal_3fe758cb6aeb35b1f7a59704c44246584c215d1ba0964bed371a90dd5bbd08ec_prof);

        
        $__internal_8a5dd98e7cf3481e038c3ca08db7dcc3dae63bddad0289ed70cfde3d1006254b->leave($__internal_8a5dd98e7cf3481e038c3ca08db7dcc3dae63bddad0289ed70cfde3d1006254b_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_72bf60d21217c89e1fe09c6ae179d325c7433d6dfb7dae0dbefaa12385ed3f1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72bf60d21217c89e1fe09c6ae179d325c7433d6dfb7dae0dbefaa12385ed3f1b->enter($__internal_72bf60d21217c89e1fe09c6ae179d325c7433d6dfb7dae0dbefaa12385ed3f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e2ba22da3f0486ae2de8dbdbedb3ba22c4b5082b6ef3a08a85b82ce689e54d22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ba22da3f0486ae2de8dbdbedb3ba22c4b5082b6ef3a08a85b82ce689e54d22->enter($__internal_e2ba22da3f0486ae2de8dbdbedb3ba22c4b5082b6ef3a08a85b82ce689e54d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "
<!-- Page-head -->
<div class=\"page-head\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h3>Vous êtes sur la plate forme d'enregistrement de bien</h3>
            </div>
            
        </div>
    </div>
</div>
<!-- Page-head -->

<div class=\"container\">
    <form method=\"POST\" enctype=\"multipart/form-data\">
        <div class=\"col-lg-6\">
            <h3 class=\"text-primary\">Information du client</h3>
            <div class=\"space20\"></div>
            <div class\"form-group\">
                <label for=\"email\">Nom du bien</label>
                <input type=\"text\" name=\"nom\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer le nom du bien\"><br>
            </div>

            <div class\"form-group\">
                <label for=\"email\">Type du bien</label>
                <input type=\"text\" name=\"type\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer le type du bien\"><br>
            </div>

            <div class\"form-group\">
                <label for=\"email\">Localité du bien</label>
                <input type=\"text\" name=\"localite\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer la localité du bien\"><br>
            </div>

            <div class\"form-group\">
                <label for=\"email\">Proposez votre prix</label>
                <input type=\"text\" name=\"prix\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer le prix de location\"><br>
            </div>

            <div class\"form-group\">
                <label for=\"email\">Images du bien</label>
                <div class=\"col-md-12 portlets\">
                    <!-- Your awesome content goes here -->
                    <div class=\"m-b-30\">
                        <div action=\"#\" class=\"dropzone\" id=\"dropzone\">
                        <div class=\"fallback\">
                            <input type=\"file\" multiple=\"multiple\" name=\"image[]\"><br>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-lg-1\"></div>
        <div class=\"col-lg-5\">
            <h3 class=\"text-primary\">Information du propriétaire</h3>
            <div class=\"space20\"></div>
            <div class\"form-group\">
                <label for=\"email\">Votre email</label>
                <input type=\"text\" name=\"email\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer email\"><br>
            </div>

            <div class\"form-group\">
                <label for=\"email\">Votre mot de passe</label>
                <input type=\"text\" name=\"password\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer votre mot de passe\"><br>
            </div>

            <a id=\"btnReserv\" class=\"btn btn-danger col-lg-12\">Créer un compte</a>
        </div>
    </form>
</div>
<div class=\"space80\"></div>
";
        
        $__internal_e2ba22da3f0486ae2de8dbdbedb3ba22c4b5082b6ef3a08a85b82ce689e54d22->leave($__internal_e2ba22da3f0486ae2de8dbdbedb3ba22c4b5082b6ef3a08a85b82ce689e54d22_prof);

        
        $__internal_72bf60d21217c89e1fe09c6ae179d325c7433d6dfb7dae0dbefaa12385ed3f1b->leave($__internal_72bf60d21217c89e1fe09c6ae179d325c7433d6dfb7dae0dbefaa12385ed3f1b_prof);

    }

    // line 86
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_8909900fd2a7ddb34eeac871b1e18ec572876b226f2adfe63cf4e7515e3ca02e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8909900fd2a7ddb34eeac871b1e18ec572876b226f2adfe63cf4e7515e3ca02e->enter($__internal_8909900fd2a7ddb34eeac871b1e18ec572876b226f2adfe63cf4e7515e3ca02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_1f5e8d06af1c24c4db34556913cd2cfabb33cb41c302511bcecbaca4efdd1a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f5e8d06af1c24c4db34556913cd2cfabb33cb41c302511bcecbaca4efdd1a59->enter($__internal_1f5e8d06af1c24c4db34556913cd2cfabb33cb41c302511bcecbaca4efdd1a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 87
        echo "
        <!-- Page Specific JS Libraries -->
        <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/dropzone/dist/dropzone.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_1f5e8d06af1c24c4db34556913cd2cfabb33cb41c302511bcecbaca4efdd1a59->leave($__internal_1f5e8d06af1c24c4db34556913cd2cfabb33cb41c302511bcecbaca4efdd1a59_prof);

        
        $__internal_8909900fd2a7ddb34eeac871b1e18ec572876b226f2adfe63cf4e7515e3ca02e->leave($__internal_8909900fd2a7ddb34eeac871b1e18ec572876b226f2adfe63cf4e7515e3ca02e_prof);

    }

    public function getTemplateName()
    {
        return "SNTDarmankoBundle:reservation:upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 89,  169 => 87,  160 => 86,  77 => 11,  68 => 10,  55 => 6,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::template.html.twig\" %}

{% block css %}

    <!-- Dropzone css -->
    <link href=\"{{ asset('assets/plugins/dropzone/dist/dropzone.css')}}\" rel=\"stylesheet\" type=\"text/css\">

{% endblock %}

{% block content %}

<!-- Page-head -->
<div class=\"page-head\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h3>Vous êtes sur la plate forme d'enregistrement de bien</h3>
            </div>
            
        </div>
    </div>
</div>
<!-- Page-head -->

<div class=\"container\">
    <form method=\"POST\" enctype=\"multipart/form-data\">
        <div class=\"col-lg-6\">
            <h3 class=\"text-primary\">Information du client</h3>
            <div class=\"space20\"></div>
            <div class\"form-group\">
                <label for=\"email\">Nom du bien</label>
                <input type=\"text\" name=\"nom\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer le nom du bien\"><br>
            </div>

            <div class\"form-group\">
                <label for=\"email\">Type du bien</label>
                <input type=\"text\" name=\"type\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer le type du bien\"><br>
            </div>

            <div class\"form-group\">
                <label for=\"email\">Localité du bien</label>
                <input type=\"text\" name=\"localite\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer la localité du bien\"><br>
            </div>

            <div class\"form-group\">
                <label for=\"email\">Proposez votre prix</label>
                <input type=\"text\" name=\"prix\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer le prix de location\"><br>
            </div>

            <div class\"form-group\">
                <label for=\"email\">Images du bien</label>
                <div class=\"col-md-12 portlets\">
                    <!-- Your awesome content goes here -->
                    <div class=\"m-b-30\">
                        <div action=\"#\" class=\"dropzone\" id=\"dropzone\">
                        <div class=\"fallback\">
                            <input type=\"file\" multiple=\"multiple\" name=\"image[]\"><br>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-lg-1\"></div>
        <div class=\"col-lg-5\">
            <h3 class=\"text-primary\">Information du propriétaire</h3>
            <div class=\"space20\"></div>
            <div class\"form-group\">
                <label for=\"email\">Votre email</label>
                <input type=\"text\" name=\"email\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer email\"><br>
            </div>

            <div class\"form-group\">
                <label for=\"email\">Votre mot de passe</label>
                <input type=\"text\" name=\"password\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer votre mot de passe\"><br>
            </div>

            <a id=\"btnReserv\" class=\"btn btn-danger col-lg-12\">Créer un compte</a>
        </div>
    </form>
</div>
<div class=\"space80\"></div>
{% endblock %}

{% block javascript %}

        <!-- Page Specific JS Libraries -->
        <script src=\"{{ asset('assets/plugins/dropzone/dist/dropzone.js')}}\"></script>

{% endblock %}", "SNTDarmankoBundle:reservation:upload.html.twig", "/var/www/html/perso/Darmanko/src/SNT/DarmankoBundle/Resources/views/reservation/upload.html.twig");
    }
}
