<?php

/* SNTDarmankoBundle:admin:bienAttente.html.twig */
class __TwigTemplate_9a07d491bd2af25ddab8a4b9b65dc41f285266da04e27fee711ccbeec3aa0d21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "SNTDarmankoBundle:admin:bienAttente.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'css' => array($this, 'block_css'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_451f5c1bc4378da9a4345ecb203d8bf0f3cc230f185faff2b715ffd84a843663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_451f5c1bc4378da9a4345ecb203d8bf0f3cc230f185faff2b715ffd84a843663->enter($__internal_451f5c1bc4378da9a4345ecb203d8bf0f3cc230f185faff2b715ffd84a843663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:bienAttente.html.twig"));

        $__internal_1dab88b049c4c6231010adc0cf1e3abd7234c83fcf50965bb80065c31ebcd122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dab88b049c4c6231010adc0cf1e3abd7234c83fcf50965bb80065c31ebcd122->enter($__internal_1dab88b049c4c6231010adc0cf1e3abd7234c83fcf50965bb80065c31ebcd122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:bienAttente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_451f5c1bc4378da9a4345ecb203d8bf0f3cc230f185faff2b715ffd84a843663->leave($__internal_451f5c1bc4378da9a4345ecb203d8bf0f3cc230f185faff2b715ffd84a843663_prof);

        
        $__internal_1dab88b049c4c6231010adc0cf1e3abd7234c83fcf50965bb80065c31ebcd122->leave($__internal_1dab88b049c4c6231010adc0cf1e3abd7234c83fcf50965bb80065c31ebcd122_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_bda94d921e1c4215439585dbc1076c8cd3bf32fe04744254b7b7fb826e56512a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bda94d921e1c4215439585dbc1076c8cd3bf32fe04744254b7b7fb826e56512a->enter($__internal_bda94d921e1c4215439585dbc1076c8cd3bf32fe04744254b7b7fb826e56512a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f5f51df695ae2a0731e009552d61e4b625a22d46b8f0034947b486c8c2327caf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5f51df695ae2a0731e009552d61e4b625a22d46b8f0034947b486c8c2327caf->enter($__internal_f5f51df695ae2a0731e009552d61e4b625a22d46b8f0034947b486c8c2327caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        // line 5
        $this->displayBlock('css', $context, $blocks);
        // line 23
        echo "
<div class=\"content\">
    <div class=\"container\">

        <!-- Page-Title -->
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <h4 class=\"pull-left page-title\">Les biens</h4>
                <ol class=\"breadcrumb pull-right\">
                    <li><a href=\"#\">Tous les biens</a></li>
                    <li class=\"active\">Biens en attente</li>
                </ol>
            </div>
        </div>
        
        
        <div class=\"panel\" id=\"list\">
                            
            <div class=\"panel-body\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"m-b-30\">
                        Les biens non validés
                    </div>
                </div>
            </div>
            <table class=\"table table-bordered table-striped\" id=\"datatable-fixed-header\">
                <thead>
                    <tr>
                        <th>Nom du bien</th>
                        <th>Type du bien</th>
                        <th>Localité</th>
                        <th>Prix location</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 62
            echo "                    <tr class=\"gradeA\">
                        <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nomBien", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "type", array()), "libelle", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "localite", array()), "libelle", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixlocation", array()), "html", null, true);
            echo "</td>
                        <td><img src=\"data:image/png;base64,";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["bien"], "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\"></td>
                        <td class=\"actions\">
                            <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pdfBien", array("id" => $this->getAttribute($context["bien"], "id", array()), "etat" => 0)), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-success waves-effect waves-light\">Valider <i class=\"fa fa-save\"></i></button></a>  |  
                            <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pdfBien", array("id" => $this->getAttribute($context["bien"], "id", array()), "etat" =>  -1)), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-danger waves-effect waves-light\">Archiver <i class=\"fa fa-trash-o\"></i></button></a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                </tbody>
            </table>
        </div>
            <!-- end: page -->

    </div> <!-- end Panel -->

    </div> <!-- container -->
                               
</div>

";
        
        $__internal_f5f51df695ae2a0731e009552d61e4b625a22d46b8f0034947b486c8c2327caf->leave($__internal_f5f51df695ae2a0731e009552d61e4b625a22d46b8f0034947b486c8c2327caf_prof);

        
        $__internal_bda94d921e1c4215439585dbc1076c8cd3bf32fe04744254b7b7fb826e56512a->leave($__internal_bda94d921e1c4215439585dbc1076c8cd3bf32fe04744254b7b7fb826e56512a_prof);

    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        $__internal_c3ce46e59bc1beac5ba0a2f745715515f51100819a6aade1c40a0f83133a9411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3ce46e59bc1beac5ba0a2f745715515f51100819a6aade1c40a0f83133a9411->enter($__internal_c3ce46e59bc1beac5ba0a2f745715515f51100819a6aade1c40a0f83133a9411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_f2f3c93f1dc9007751d35c942b80483acb21ceec728bbc2314260521aeac4231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2f3c93f1dc9007751d35c942b80483acb21ceec728bbc2314260521aeac4231->enter($__internal_f2f3c93f1dc9007751d35c942b80483acb21ceec728bbc2314260521aeac4231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 6
        echo "<!-- Dropzone css -->
<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/dropzone/dist/dropzone.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

<!-- DataTables -->
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/magnific-popup/dist/magnific-popup.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatables-editable/datatables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

<!-- Multiselect -->
<link rel=\"Stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/select2.css"), "html", null, true);
        echo "\" />
<link rel=\"Stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/select2-bootstrap.css"), "html", null, true);
        echo "\" />
<style>
    img{
        width: 50px;
    }
</style>

";
        
        $__internal_f2f3c93f1dc9007751d35c942b80483acb21ceec728bbc2314260521aeac4231->leave($__internal_f2f3c93f1dc9007751d35c942b80483acb21ceec728bbc2314260521aeac4231_prof);

        
        $__internal_c3ce46e59bc1beac5ba0a2f745715515f51100819a6aade1c40a0f83133a9411->leave($__internal_c3ce46e59bc1beac5ba0a2f745715515f51100819a6aade1c40a0f83133a9411_prof);

    }

    // line 87
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_cca479033042d7b8d0df354fa8551c52d8937e17abffac5045bdecc8c52ff8cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cca479033042d7b8d0df354fa8551c52d8937e17abffac5045bdecc8c52ff8cb->enter($__internal_cca479033042d7b8d0df354fa8551c52d8937e17abffac5045bdecc8c52ff8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_c2656890bbbab6b79f817dba10dac9f1d778d08faa6333c51c9b6382e10a77f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2656890bbbab6b79f817dba10dac9f1d778d08faa6333c51c9b6382e10a77f7->enter($__internal_c2656890bbbab6b79f817dba10dac9f1d778d08faa6333c51c9b6382e10a77f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 88
        echo "
    <!-- Datatables-->
        <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>

        <!-- Datatable init js -->
        <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/datatables.init.js"), "html", null, true);
        echo "\"></script>  

        <script type=\"text/javascript\">
        
";
        
        $__internal_c2656890bbbab6b79f817dba10dac9f1d778d08faa6333c51c9b6382e10a77f7->leave($__internal_c2656890bbbab6b79f817dba10dac9f1d778d08faa6333c51c9b6382e10a77f7_prof);

        
        $__internal_cca479033042d7b8d0df354fa8551c52d8937e17abffac5045bdecc8c52ff8cb->leave($__internal_cca479033042d7b8d0df354fa8551c52d8937e17abffac5045bdecc8c52ff8cb_prof);

    }

    public function getTemplateName()
    {
        return "SNTDarmankoBundle:admin:bienAttente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 94,  226 => 91,  222 => 90,  218 => 88,  209 => 87,  191 => 15,  187 => 14,  181 => 11,  177 => 10,  171 => 7,  168 => 6,  159 => 5,  138 => 74,  128 => 70,  124 => 69,  119 => 67,  115 => 66,  111 => 65,  107 => 64,  103 => 63,  100 => 62,  96 => 61,  56 => 23,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::admin.html.twig\" %}

{% block content %}

{% block css %}
<!-- Dropzone css -->
<link href=\"{{ asset('assets/plugins/dropzone/dist/dropzone.css')}}\" rel=\"stylesheet\" type=\"text/css\">

<!-- DataTables -->
<link href=\"{{asset('assets/plugins/magnific-popup/dist/magnific-popup.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"{{asset('assets/plugins/jquery-datatables-editable/datatables.css')}}\" rel=\"stylesheet\" type=\"text/css\" />

<!-- Multiselect -->
<link rel=\"Stylesheet\" type=\"text/css\" href=\"{{asset('template/css/select2.css')}}\" />
<link rel=\"Stylesheet\" type=\"text/css\" href=\"{{asset('template/css/select2-bootstrap.css')}}\" />
<style>
    img{
        width: 50px;
    }
</style>

{% endblock %}

<div class=\"content\">
    <div class=\"container\">

        <!-- Page-Title -->
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <h4 class=\"pull-left page-title\">Les biens</h4>
                <ol class=\"breadcrumb pull-right\">
                    <li><a href=\"#\">Tous les biens</a></li>
                    <li class=\"active\">Biens en attente</li>
                </ol>
            </div>
        </div>
        
        
        <div class=\"panel\" id=\"list\">
                            
            <div class=\"panel-body\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"m-b-30\">
                        Les biens non validés
                    </div>
                </div>
            </div>
            <table class=\"table table-bordered table-striped\" id=\"datatable-fixed-header\">
                <thead>
                    <tr>
                        <th>Nom du bien</th>
                        <th>Type du bien</th>
                        <th>Localité</th>
                        <th>Prix location</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                {% for bien in biens %}
                    <tr class=\"gradeA\">
                        <td>{{ bien.nomBien }}</td>
                        <td>{{ bien.type.libelle }}</td>
                        <td>{{ bien.localite.libelle }}</td>
                        <td>{{ bien.prixlocation }}</td>
                        <td><img src=\"data:image/png;base64,{{ bien.images[0].image }}\"></td>
                        <td class=\"actions\">
                            <a href=\"{{ path(\"pdfBien\", {\"id\": bien.id, \"etat\": 0}) }}\"><button type=\"button\" class=\"btn btn-success waves-effect waves-light\">Valider <i class=\"fa fa-save\"></i></button></a>  |  
                            <a href=\"{{ path(\"pdfBien\", {\"id\": bien.id, \"etat\": -1}) }}\"><button type=\"button\" class=\"btn btn-danger waves-effect waves-light\">Archiver <i class=\"fa fa-trash-o\"></i></button></a>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
            <!-- end: page -->

    </div> <!-- end Panel -->

    </div> <!-- container -->
                               
</div>

{% endblock %}

{% block javascript %}

    <!-- Datatables-->
        <script src=\"{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}\"></script>
        <script src=\"{{asset('assets/plugins/datatables/dataTables.bootstrap.js')}}\"></script>

        <!-- Datatable init js -->
        <script src=\"{{asset('assets/pages/datatables.init.js')}}\"></script>  

        <script type=\"text/javascript\">
        
{% endblock %}", "SNTDarmankoBundle:admin:bienAttente.html.twig", "/var/www/html/perso/Darmanko/src/SNT/DarmankoBundle/Resources/views/admin/bienAttente.html.twig");
    }
}
