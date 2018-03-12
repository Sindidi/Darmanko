<?php

/* SNTDarmankoBundle:admin:type.html.twig */
class __TwigTemplate_688d9c637714840e75eb160b25255563c667723677917651343b2b81b3d6c86f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "SNTDarmankoBundle:admin:type.html.twig", 1);
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
        $__internal_6b0141aea5bd504fc4261ec61df7a2b0619e736811eafed8bcf714213e66e1e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b0141aea5bd504fc4261ec61df7a2b0619e736811eafed8bcf714213e66e1e7->enter($__internal_6b0141aea5bd504fc4261ec61df7a2b0619e736811eafed8bcf714213e66e1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:type.html.twig"));

        $__internal_8c1f0c3d975971c38f8df5c20cd0664c03872a21f57daa61d90727decf65b092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c1f0c3d975971c38f8df5c20cd0664c03872a21f57daa61d90727decf65b092->enter($__internal_8c1f0c3d975971c38f8df5c20cd0664c03872a21f57daa61d90727decf65b092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:type.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b0141aea5bd504fc4261ec61df7a2b0619e736811eafed8bcf714213e66e1e7->leave($__internal_6b0141aea5bd504fc4261ec61df7a2b0619e736811eafed8bcf714213e66e1e7_prof);

        
        $__internal_8c1f0c3d975971c38f8df5c20cd0664c03872a21f57daa61d90727decf65b092->leave($__internal_8c1f0c3d975971c38f8df5c20cd0664c03872a21f57daa61d90727decf65b092_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_be9e9b2a4cb4cd83b5580396540c9298c0804ec962d9102c1d96f2bcca7c1d86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be9e9b2a4cb4cd83b5580396540c9298c0804ec962d9102c1d96f2bcca7c1d86->enter($__internal_be9e9b2a4cb4cd83b5580396540c9298c0804ec962d9102c1d96f2bcca7c1d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1f717a6ae4ce36bf849e900d58ef06f7f01b9beadfff2a334c2fb5e1b588433b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f717a6ae4ce36bf849e900d58ef06f7f01b9beadfff2a334c2fb5e1b588433b->enter($__internal_1f717a6ae4ce36bf849e900d58ef06f7f01b9beadfff2a334c2fb5e1b588433b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        // line 5
        $this->displayBlock('css', $context, $blocks);
        // line 20
        echo "
<div class=\"content\">
    <div class=\"container\">             

        <!-- Page-Title -->
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <h4 class=\"pull-left page-title\">Nos localités</h4>
            </div>
        </div>
        
        <div class=\"panel\">
                            
            <div class=\"panel-body\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <div class=\"m-b-30\">
                        <button id=\"add\" class=\"btn btn-primary waves-effect waves-light\">Ajouter <i class=\"fa fa-plus\"></i></button>
                    </div>
                </div>
                <div class=\"form\" id=\"formAdd\" style=\"display: none;\">
                    <form method=\"POST\" class=\"form-inline localite\" role=\"form\">
                        <div class=\"form-group\">
                            <input name=\"type\" type=\"text\" class=\"form-control\" id=\"exampleInputEmail2\" placeholder=\"Entrer le type de bien\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary btn-custom waves-effect waves-light\">Ajouter</button>
                    </form>
                </div><br>
            </div>
            <table class=\"table table-bordered table-striped\" id=\"datatable-fixed-header\">
                <thead>
                    <tr>
                        <th>id de la localité</th>
                        <th>Nom de la localité</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? $this->getContext($context, "types")));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 58
            echo "                    <tr class=\"gradeA\">
                        <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "libelle", array()), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                </tbody>
            </table>
        </div>
            <!-- end: page -->

    </div> <!-- end Panel -->

    </div> <!-- container -->
                               
</div>

";
        
        $__internal_1f717a6ae4ce36bf849e900d58ef06f7f01b9beadfff2a334c2fb5e1b588433b->leave($__internal_1f717a6ae4ce36bf849e900d58ef06f7f01b9beadfff2a334c2fb5e1b588433b_prof);

        
        $__internal_be9e9b2a4cb4cd83b5580396540c9298c0804ec962d9102c1d96f2bcca7c1d86->leave($__internal_be9e9b2a4cb4cd83b5580396540c9298c0804ec962d9102c1d96f2bcca7c1d86_prof);

    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        $__internal_040926d115d6e76056bc302e3e18a32ac6eec0b34a447fc03eae39913e1eb992 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_040926d115d6e76056bc302e3e18a32ac6eec0b34a447fc03eae39913e1eb992->enter($__internal_040926d115d6e76056bc302e3e18a32ac6eec0b34a447fc03eae39913e1eb992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_82c3f347e3f145923394dce22df732e329d5022ac9b100d27d3d6594e2f95abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82c3f347e3f145923394dce22df732e329d5022ac9b100d27d3d6594e2f95abd->enter($__internal_82c3f347e3f145923394dce22df732e329d5022ac9b100d27d3d6594e2f95abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

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

<style>
    img{
        width: 50px;
    }
</style>

";
        
        $__internal_82c3f347e3f145923394dce22df732e329d5022ac9b100d27d3d6594e2f95abd->leave($__internal_82c3f347e3f145923394dce22df732e329d5022ac9b100d27d3d6594e2f95abd_prof);

        
        $__internal_040926d115d6e76056bc302e3e18a32ac6eec0b34a447fc03eae39913e1eb992->leave($__internal_040926d115d6e76056bc302e3e18a32ac6eec0b34a447fc03eae39913e1eb992_prof);

    }

    // line 76
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_5b5a548c8e00de8f79af3d7033c31caf5129306f27a743f84463f20df9558db8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b5a548c8e00de8f79af3d7033c31caf5129306f27a743f84463f20df9558db8->enter($__internal_5b5a548c8e00de8f79af3d7033c31caf5129306f27a743f84463f20df9558db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_efcd195955b981c15545ee30b98019ed1da4ef92306c0c8b9fcab230ae341c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efcd195955b981c15545ee30b98019ed1da4ef92306c0c8b9fcab230ae341c4e->enter($__internal_efcd195955b981c15545ee30b98019ed1da4ef92306c0c8b9fcab230ae341c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 77
        echo "
    <!-- Datatables-->
        <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jszip.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.fixedHeader.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.keyTable.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/responsive.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.scroller.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Datatable init js -->
        <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/datatables.init.js"), "html", null, true);
        echo "\"></script>

        <script type=\"text/javascript\">
            
        </script>

        <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/test.js"), "html", null, true);
        echo "\"></script>

        <script>
            \$(\"#add\").on(\"click\", function(){
                \$(this).hide();
                \$(\"#formAdd\").show();
            })
        </script>

";
        
        $__internal_efcd195955b981c15545ee30b98019ed1da4ef92306c0c8b9fcab230ae341c4e->leave($__internal_efcd195955b981c15545ee30b98019ed1da4ef92306c0c8b9fcab230ae341c4e_prof);

        
        $__internal_5b5a548c8e00de8f79af3d7033c31caf5129306f27a743f84463f20df9558db8->leave($__internal_5b5a548c8e00de8f79af3d7033c31caf5129306f27a743f84463f20df9558db8_prof);

    }

    public function getTemplateName()
    {
        return "SNTDarmankoBundle:admin:type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 101,  248 => 95,  242 => 92,  238 => 91,  234 => 90,  230 => 89,  226 => 88,  222 => 87,  218 => 86,  214 => 85,  210 => 84,  206 => 83,  202 => 82,  198 => 81,  194 => 80,  190 => 79,  186 => 77,  177 => 76,  158 => 11,  154 => 10,  148 => 7,  145 => 6,  136 => 5,  115 => 63,  106 => 60,  102 => 59,  99 => 58,  95 => 57,  56 => 20,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
                <h4 class=\"pull-left page-title\">Nos localités</h4>
            </div>
        </div>
        
        <div class=\"panel\">
                            
            <div class=\"panel-body\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <div class=\"m-b-30\">
                        <button id=\"add\" class=\"btn btn-primary waves-effect waves-light\">Ajouter <i class=\"fa fa-plus\"></i></button>
                    </div>
                </div>
                <div class=\"form\" id=\"formAdd\" style=\"display: none;\">
                    <form method=\"POST\" class=\"form-inline localite\" role=\"form\">
                        <div class=\"form-group\">
                            <input name=\"type\" type=\"text\" class=\"form-control\" id=\"exampleInputEmail2\" placeholder=\"Entrer le type de bien\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary btn-custom waves-effect waves-light\">Ajouter</button>
                    </form>
                </div><br>
            </div>
            <table class=\"table table-bordered table-striped\" id=\"datatable-fixed-header\">
                <thead>
                    <tr>
                        <th>id de la localité</th>
                        <th>Nom de la localité</th>
                    </tr>
                </thead>
                <tbody>
                {% for type in types %}
                    <tr class=\"gradeA\">
                        <td>{{ type.id }}</td>
                        <td>{{ type.libelle }}</td>
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
        <script src=\"{{asset('assets/plugins/datatables/dataTables.buttons.min.js')}}\"></script>
        <script src=\"{{asset('assets/plugins/datatables/buttons.bootstrap.min.js')}}\"></script>
        <script src=\"{{asset('assets/plugins/datatables/jszip.min.js')}}\"></script>
        <script src=\"{{asset('assets/plugins/datatables/pdfmake.min.js')}}\"></script>
        <script src=\"{{asset('assets/plugins/datatables/vfs_fonts.js')}}\"></script>
        <script src=\"{{asset('assets/plugins/datatables/buttons.html5.min.js')}}\"></script>
        <script src=\"{{asset('assets/plugins/datatables/buttons.print.min.js')}}\"></script>
        <script src=\"{{asset('assets/plugins/datatables/dataTables.fixedHeader.min.js')}}\"></script>
        <script src=\"{{asset('assets/plugins/datatables/dataTables.keyTable.min.js')}}\"></script>
        <script src=\"{{asset('assets/plugins/datatables/dataTables.responsive.min.js')}}\"></script>
        <script src=\"{{asset('assets/plugins/datatables/responsive.bootstrap.min.js')}}\"></script>
        <script src=\"{{asset('assets/plugins/datatables/dataTables.scroller.min.js')}}\"></script>

        <!-- Datatable init js -->
        <script src=\"{{asset('assets/pages/datatables.init.js')}}\"></script>

        <script type=\"text/javascript\">
            
        </script>

        <script src=\"{{ asset('js/test.js') }}\"></script>

        <script>
            \$(\"#add\").on(\"click\", function(){
                \$(this).hide();
                \$(\"#formAdd\").show();
            })
        </script>

{% endblock %}", "SNTDarmankoBundle:admin:type.html.twig", "/var/www/html/perso/Darmanko/src/SNT/DarmankoBundle/Resources/views/admin/type.html.twig");
    }
}
