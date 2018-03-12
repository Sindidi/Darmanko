<?php

/* SNTDarmankoBundle:admin:localite.html.twig */
class __TwigTemplate_f7f2e3de86d8c64e91784b9fc39f618d6859916b953beefec9864ab0701c3b91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "SNTDarmankoBundle:admin:localite.html.twig", 1);
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
        $__internal_7fbea5eac6776729efc9918a499136cbf1f971093fc99e086937e7414eaeabd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fbea5eac6776729efc9918a499136cbf1f971093fc99e086937e7414eaeabd1->enter($__internal_7fbea5eac6776729efc9918a499136cbf1f971093fc99e086937e7414eaeabd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:localite.html.twig"));

        $__internal_9396db25cc05565f80c2c1ee3783de42efa98288b058ee34d09ab87731aad640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9396db25cc05565f80c2c1ee3783de42efa98288b058ee34d09ab87731aad640->enter($__internal_9396db25cc05565f80c2c1ee3783de42efa98288b058ee34d09ab87731aad640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:localite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fbea5eac6776729efc9918a499136cbf1f971093fc99e086937e7414eaeabd1->leave($__internal_7fbea5eac6776729efc9918a499136cbf1f971093fc99e086937e7414eaeabd1_prof);

        
        $__internal_9396db25cc05565f80c2c1ee3783de42efa98288b058ee34d09ab87731aad640->leave($__internal_9396db25cc05565f80c2c1ee3783de42efa98288b058ee34d09ab87731aad640_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_629413e30e463f5c82236d0e2c522c7210aa8822c35de12ee3f8f6a6d06ba628 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_629413e30e463f5c82236d0e2c522c7210aa8822c35de12ee3f8f6a6d06ba628->enter($__internal_629413e30e463f5c82236d0e2c522c7210aa8822c35de12ee3f8f6a6d06ba628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_15d7030c7f794d9955a9189e03d6c16dc914c3b821e5d8092031651b65682926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d7030c7f794d9955a9189e03d6c16dc914c3b821e5d8092031651b65682926->enter($__internal_15d7030c7f794d9955a9189e03d6c16dc914c3b821e5d8092031651b65682926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                            <input name=\"localite\" type=\"text\" class=\"form-control\" id=\"exampleInputEmail2\" placeholder=\"Entrer la localité\">
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
        $context['_seq'] = twig_ensure_traversable(($context["localites"] ?? $this->getContext($context, "localites")));
        foreach ($context['_seq'] as $context["_key"] => $context["localite"]) {
            // line 58
            echo "                    <tr class=\"gradeA\">
                        <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "libelle", array()), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localite'], $context['_parent'], $context['loop']);
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
        
        $__internal_15d7030c7f794d9955a9189e03d6c16dc914c3b821e5d8092031651b65682926->leave($__internal_15d7030c7f794d9955a9189e03d6c16dc914c3b821e5d8092031651b65682926_prof);

        
        $__internal_629413e30e463f5c82236d0e2c522c7210aa8822c35de12ee3f8f6a6d06ba628->leave($__internal_629413e30e463f5c82236d0e2c522c7210aa8822c35de12ee3f8f6a6d06ba628_prof);

    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        $__internal_88e09c5bf9695d0b05aa8d4ffadaee4fd4e6e4f13abfcf54e69135ec0616243d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88e09c5bf9695d0b05aa8d4ffadaee4fd4e6e4f13abfcf54e69135ec0616243d->enter($__internal_88e09c5bf9695d0b05aa8d4ffadaee4fd4e6e4f13abfcf54e69135ec0616243d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_ecf00eaaa3a1777e2567c0889ede2ffc4b953a5a65f55d6692a99cee22aca5bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf00eaaa3a1777e2567c0889ede2ffc4b953a5a65f55d6692a99cee22aca5bb->enter($__internal_ecf00eaaa3a1777e2567c0889ede2ffc4b953a5a65f55d6692a99cee22aca5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

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
        
        $__internal_ecf00eaaa3a1777e2567c0889ede2ffc4b953a5a65f55d6692a99cee22aca5bb->leave($__internal_ecf00eaaa3a1777e2567c0889ede2ffc4b953a5a65f55d6692a99cee22aca5bb_prof);

        
        $__internal_88e09c5bf9695d0b05aa8d4ffadaee4fd4e6e4f13abfcf54e69135ec0616243d->leave($__internal_88e09c5bf9695d0b05aa8d4ffadaee4fd4e6e4f13abfcf54e69135ec0616243d_prof);

    }

    // line 76
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_8d0dc8e63546e4c14769c35e967e69863f724cd21a72954d280de226b53f0df6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d0dc8e63546e4c14769c35e967e69863f724cd21a72954d280de226b53f0df6->enter($__internal_8d0dc8e63546e4c14769c35e967e69863f724cd21a72954d280de226b53f0df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_aacb4864b597a8e14ac0b39b9b7171157ed66cffb3d56f200db03370d0f75152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aacb4864b597a8e14ac0b39b9b7171157ed66cffb3d56f200db03370d0f75152->enter($__internal_aacb4864b597a8e14ac0b39b9b7171157ed66cffb3d56f200db03370d0f75152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_aacb4864b597a8e14ac0b39b9b7171157ed66cffb3d56f200db03370d0f75152->leave($__internal_aacb4864b597a8e14ac0b39b9b7171157ed66cffb3d56f200db03370d0f75152_prof);

        
        $__internal_8d0dc8e63546e4c14769c35e967e69863f724cd21a72954d280de226b53f0df6->leave($__internal_8d0dc8e63546e4c14769c35e967e69863f724cd21a72954d280de226b53f0df6_prof);

    }

    public function getTemplateName()
    {
        return "SNTDarmankoBundle:admin:localite.html.twig";
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
                            <input name=\"localite\" type=\"text\" class=\"form-control\" id=\"exampleInputEmail2\" placeholder=\"Entrer la localité\">
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
                {% for localite in localites %}
                    <tr class=\"gradeA\">
                        <td>{{ localite.id }}</td>
                        <td>{{ localite.libelle }}</td>
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
{% endblock %}", "SNTDarmankoBundle:admin:localite.html.twig", "/var/www/html/perso/Darmanko/src/SNT/DarmankoBundle/Resources/views/admin/localite.html.twig");
    }
}
