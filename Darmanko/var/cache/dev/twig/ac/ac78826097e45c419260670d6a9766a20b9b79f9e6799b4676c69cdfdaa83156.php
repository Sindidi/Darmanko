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
        $__internal_d66055985ea0112526bbe7ebad3fc8965dcf393886001e80b83616d11386d9bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d66055985ea0112526bbe7ebad3fc8965dcf393886001e80b83616d11386d9bb->enter($__internal_d66055985ea0112526bbe7ebad3fc8965dcf393886001e80b83616d11386d9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:bienAttente.html.twig"));

        $__internal_412d7ed795542feeacfbf86a91e2d54bf4f0b70c5b0c6d813e6dd36c9b15c835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_412d7ed795542feeacfbf86a91e2d54bf4f0b70c5b0c6d813e6dd36c9b15c835->enter($__internal_412d7ed795542feeacfbf86a91e2d54bf4f0b70c5b0c6d813e6dd36c9b15c835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:bienAttente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d66055985ea0112526bbe7ebad3fc8965dcf393886001e80b83616d11386d9bb->leave($__internal_d66055985ea0112526bbe7ebad3fc8965dcf393886001e80b83616d11386d9bb_prof);

        
        $__internal_412d7ed795542feeacfbf86a91e2d54bf4f0b70c5b0c6d813e6dd36c9b15c835->leave($__internal_412d7ed795542feeacfbf86a91e2d54bf4f0b70c5b0c6d813e6dd36c9b15c835_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_fd18a2f7ca173d57d410352844f4934c649bb2b2d7ce3c755750c9b236b35f62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd18a2f7ca173d57d410352844f4934c649bb2b2d7ce3c755750c9b236b35f62->enter($__internal_fd18a2f7ca173d57d410352844f4934c649bb2b2d7ce3c755750c9b236b35f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f4477e0e03e64fba5f8d995f4d43ec2ea670bb5619a4b687ed0aa4ba8ea78ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4477e0e03e64fba5f8d995f4d43ec2ea670bb5619a4b687ed0aa4ba8ea78ef0->enter($__internal_f4477e0e03e64fba5f8d995f4d43ec2ea670bb5619a4b687ed0aa4ba8ea78ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                            <a href=\"#\"><button type=\"button\" class=\"btn btn-success waves-effect waves-light\">Valider <i class=\"fa fa-save\"></i></button></a>  |  
                            <a href=\"#\"><button type=\"button\" class=\"btn btn-danger waves-effect waves-light\">Archiver <i class=\"fa fa-trash-o\"></i></button></a>
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
        
        $__internal_f4477e0e03e64fba5f8d995f4d43ec2ea670bb5619a4b687ed0aa4ba8ea78ef0->leave($__internal_f4477e0e03e64fba5f8d995f4d43ec2ea670bb5619a4b687ed0aa4ba8ea78ef0_prof);

        
        $__internal_fd18a2f7ca173d57d410352844f4934c649bb2b2d7ce3c755750c9b236b35f62->leave($__internal_fd18a2f7ca173d57d410352844f4934c649bb2b2d7ce3c755750c9b236b35f62_prof);

    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        $__internal_e559026d6249bf09a62fde48220b6cfcaf748f118225260c0436700496aa8b4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e559026d6249bf09a62fde48220b6cfcaf748f118225260c0436700496aa8b4c->enter($__internal_e559026d6249bf09a62fde48220b6cfcaf748f118225260c0436700496aa8b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_a7a57caf01d290c19c72c66f5d1a5ac7a401cf987e7be4d3a19c6f1c98df7f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7a57caf01d290c19c72c66f5d1a5ac7a401cf987e7be4d3a19c6f1c98df7f5d->enter($__internal_a7a57caf01d290c19c72c66f5d1a5ac7a401cf987e7be4d3a19c6f1c98df7f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

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
        
        $__internal_a7a57caf01d290c19c72c66f5d1a5ac7a401cf987e7be4d3a19c6f1c98df7f5d->leave($__internal_a7a57caf01d290c19c72c66f5d1a5ac7a401cf987e7be4d3a19c6f1c98df7f5d_prof);

        
        $__internal_e559026d6249bf09a62fde48220b6cfcaf748f118225260c0436700496aa8b4c->leave($__internal_e559026d6249bf09a62fde48220b6cfcaf748f118225260c0436700496aa8b4c_prof);

    }

    // line 87
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_76d5843b8ed2d3b772dcd97034c82e29fd476c37c52885345622e0a6ea98df00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76d5843b8ed2d3b772dcd97034c82e29fd476c37c52885345622e0a6ea98df00->enter($__internal_76d5843b8ed2d3b772dcd97034c82e29fd476c37c52885345622e0a6ea98df00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6ef3e573a7851a2ec8c2de3bbc3f79a41798f162d1afe781c96d408f3e4595e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ef3e573a7851a2ec8c2de3bbc3f79a41798f162d1afe781c96d408f3e4595e5->enter($__internal_6ef3e573a7851a2ec8c2de3bbc3f79a41798f162d1afe781c96d408f3e4595e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_6ef3e573a7851a2ec8c2de3bbc3f79a41798f162d1afe781c96d408f3e4595e5->leave($__internal_6ef3e573a7851a2ec8c2de3bbc3f79a41798f162d1afe781c96d408f3e4595e5_prof);

        
        $__internal_76d5843b8ed2d3b772dcd97034c82e29fd476c37c52885345622e0a6ea98df00->leave($__internal_76d5843b8ed2d3b772dcd97034c82e29fd476c37c52885345622e0a6ea98df00_prof);

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
        return array (  226 => 94,  220 => 91,  216 => 90,  212 => 88,  203 => 87,  185 => 15,  181 => 14,  175 => 11,  171 => 10,  165 => 7,  162 => 6,  153 => 5,  132 => 74,  119 => 67,  115 => 66,  111 => 65,  107 => 64,  103 => 63,  100 => 62,  96 => 61,  56 => 23,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
                            <a href=\"#\"><button type=\"button\" class=\"btn btn-success waves-effect waves-light\">Valider <i class=\"fa fa-save\"></i></button></a>  |  
                            <a href=\"#\"><button type=\"button\" class=\"btn btn-danger waves-effect waves-light\">Archiver <i class=\"fa fa-trash-o\"></i></button></a>
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
