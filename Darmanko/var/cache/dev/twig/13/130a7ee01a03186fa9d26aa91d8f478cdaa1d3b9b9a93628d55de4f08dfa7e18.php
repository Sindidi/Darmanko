<?php

/* SNTDarmankoBundle:admin:enCours.html.twig */
class __TwigTemplate_d9a5728e10de2334d2d8809c0dc063421b78c57f84d49ebda9ca9073c59bb0e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "SNTDarmankoBundle:admin:enCours.html.twig", 1);
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
        $__internal_6107ff696c962669c9bd882632030bdd635be8a8147a333bf6bc54b2b814bcee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6107ff696c962669c9bd882632030bdd635be8a8147a333bf6bc54b2b814bcee->enter($__internal_6107ff696c962669c9bd882632030bdd635be8a8147a333bf6bc54b2b814bcee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:enCours.html.twig"));

        $__internal_81c2995959bc0626a080a174091e5e9266726cb14b5950dd8605493e4b52759f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c2995959bc0626a080a174091e5e9266726cb14b5950dd8605493e4b52759f->enter($__internal_81c2995959bc0626a080a174091e5e9266726cb14b5950dd8605493e4b52759f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:enCours.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6107ff696c962669c9bd882632030bdd635be8a8147a333bf6bc54b2b814bcee->leave($__internal_6107ff696c962669c9bd882632030bdd635be8a8147a333bf6bc54b2b814bcee_prof);

        
        $__internal_81c2995959bc0626a080a174091e5e9266726cb14b5950dd8605493e4b52759f->leave($__internal_81c2995959bc0626a080a174091e5e9266726cb14b5950dd8605493e4b52759f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1c2bf56cccbba3997d6b226283e44184d2fb82ad0130506ea795e2cf210430ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c2bf56cccbba3997d6b226283e44184d2fb82ad0130506ea795e2cf210430ec->enter($__internal_1c2bf56cccbba3997d6b226283e44184d2fb82ad0130506ea795e2cf210430ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8ad77a852a46693c7fe06236b74dbde66e0b26f9b99ba46d60cbb4a7e6632c9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ad77a852a46693c7fe06236b74dbde66e0b26f9b99ba46d60cbb4a7e6632c9c->enter($__internal_8ad77a852a46693c7fe06236b74dbde66e0b26f9b99ba46d60cbb4a7e6632c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        // line 5
        $this->displayBlock('css', $context, $blocks);
        // line 20
        echo "
<!-- Page-Title -->
<div class=\"row\">
    <div class=\"col-sm-12\">
        <h4 class=\"pull-left page-title\">Réservations</h4>
        <ol class=\"breadcrumb pull-right\">
            <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
        echo "\">Tous les réservations</a></li>
            <li class=\"active\">En cours</li>
            <li><a href=\"\">Validées</a></li>
        </ol>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">Liste des réservations en cours</h3>
            </div>
            <div class=\"panel-body\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <table id=\"datatable-fixed-header\" class=\"table table-striped table-bordered\">
                            <thead>
                                <tr>
                                    <th>Nom du client</th>
                                    <th>Adresse</th>
                                    <th>Bien</th>
                                    <th>Prix location</th>
                                    <th>Localité du bien</th>
                                    <th>Photo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                        
                            <tbody>
                                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 58
            echo "                                <tr>
                                    <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "client", array()), "nomComplet", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "client", array()), "adress", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "nomBien", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "prixLocation", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "localite", array()), "libelle", array()), "html", null, true);
            echo "</td>
                                    <td><img src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\"></td>
                                    <td><a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-primary waves-effect waves-light m-b-5\">Détail</button></a></td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
                            
</div>
";
        
        $__internal_8ad77a852a46693c7fe06236b74dbde66e0b26f9b99ba46d60cbb4a7e6632c9c->leave($__internal_8ad77a852a46693c7fe06236b74dbde66e0b26f9b99ba46d60cbb4a7e6632c9c_prof);

        
        $__internal_1c2bf56cccbba3997d6b226283e44184d2fb82ad0130506ea795e2cf210430ec->leave($__internal_1c2bf56cccbba3997d6b226283e44184d2fb82ad0130506ea795e2cf210430ec_prof);

    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        $__internal_97c94266d2ae3f85be647361ebee40f657fe92c5855cf94c54cc9dfc7ecd5e2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97c94266d2ae3f85be647361ebee40f657fe92c5855cf94c54cc9dfc7ecd5e2a->enter($__internal_97c94266d2ae3f85be647361ebee40f657fe92c5855cf94c54cc9dfc7ecd5e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_b5f1121892233dc5507320a6e94d728de8e97775f214a582efd2512f4b966344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f1121892233dc5507320a6e94d728de8e97775f214a582efd2512f4b966344->enter($__internal_b5f1121892233dc5507320a6e94d728de8e97775f214a582efd2512f4b966344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 6
        echo "
<!-- DataTables -->
<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/fixedHeader.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/responsive.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/scroller.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<style>
    img{
        width: 60px;
    }
</style>

";
        
        $__internal_b5f1121892233dc5507320a6e94d728de8e97775f214a582efd2512f4b966344->leave($__internal_b5f1121892233dc5507320a6e94d728de8e97775f214a582efd2512f4b966344_prof);

        
        $__internal_97c94266d2ae3f85be647361ebee40f657fe92c5855cf94c54cc9dfc7ecd5e2a->leave($__internal_97c94266d2ae3f85be647361ebee40f657fe92c5855cf94c54cc9dfc7ecd5e2a_prof);

    }

    // line 80
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_df4ed8557addd0b5ca5fe0a905feaea2760147e3b6eef887ecdbca8054cda05f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df4ed8557addd0b5ca5fe0a905feaea2760147e3b6eef887ecdbca8054cda05f->enter($__internal_df4ed8557addd0b5ca5fe0a905feaea2760147e3b6eef887ecdbca8054cda05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_0a73d31722ba44f600b013fc1e81c3fa742645831544670c5e2ef3d9703e1343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a73d31722ba44f600b013fc1e81c3fa742645831544670c5e2ef3d9703e1343->enter($__internal_0a73d31722ba44f600b013fc1e81c3fa742645831544670c5e2ef3d9703e1343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 81
        echo "
    <!-- Datatables-->
        <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jszip.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.fixedHeader.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.keyTable.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/responsive.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.scroller.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Datatable init js -->
        <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/datatables.init.js"), "html", null, true);
        echo "\"></script>

        <script type=\"text/javascript\">
            \$(document).ready(function() {
                \$('#datatable').dataTable();
                \$('#datatable-keytable').DataTable( { keys: true } );
                \$('#datatable-responsive').DataTable();
                \$('#datatable-scroller').DataTable( { ajax: \"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/json/scroller-demo.json"), "html", null, true);
        echo "\", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
                var table = \$('#datatable-fixed-header').DataTable( { 
                    fixedHeader: true,
                    \"iDisplayLength\": 6, 
                    \"language\": {
                        \"sProcessing\": \"Traitement en cours...\",
                        \"sSearch\": \"Rechercher&nbsp;:\",
                        \"sLengthMenu\": \"Afficher _MENU_ &eacute;l&eacute;ments\",
                        \"sInfo\": \"Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
                        \"sInfoEmpty\": \"Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment\",
                        \"sInfoFiltered\": \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
                        \"sInfoPostFix\": \"\",
                        \"sLoadingRecords\": \"Chargement en cours...\",
                        \"sZeroRecords\": \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
                        \"sEmptyTable\": \"Aucune donn&eacute;e disponible dans le tableau\",
                        \"oPaginate\": {
                            \"sFirst\": \"Premier\",
                            \"sPrevious\": \"Pr&eacute;c&eacute;dent\",
                            \"sNext\": \"Suivant\",
                            \"sLast\": \"Dernier\"
                        },
                        \"oAria\": {
                            \"sSortAscending\": \": activer pour trier la colonne par ordre croissant\",
                            \"sSortDescending\": \": activer pour trier la colonne par ordre d&eacute;croissant\"
                        }
                    }
                } );
            } );
            TableManageButtons.init();
        </script>

";
        
        $__internal_0a73d31722ba44f600b013fc1e81c3fa742645831544670c5e2ef3d9703e1343->leave($__internal_0a73d31722ba44f600b013fc1e81c3fa742645831544670c5e2ef3d9703e1343_prof);

        
        $__internal_df4ed8557addd0b5ca5fe0a905feaea2760147e3b6eef887ecdbca8054cda05f->leave($__internal_df4ed8557addd0b5ca5fe0a905feaea2760147e3b6eef887ecdbca8054cda05f_prof);

    }

    public function getTemplateName()
    {
        return "SNTDarmankoBundle:admin:enCours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 106,  277 => 99,  271 => 96,  267 => 95,  263 => 94,  259 => 93,  255 => 92,  251 => 91,  247 => 90,  243 => 89,  239 => 88,  235 => 87,  231 => 86,  227 => 85,  223 => 84,  219 => 83,  215 => 81,  206 => 80,  188 => 12,  184 => 11,  180 => 10,  176 => 9,  172 => 8,  168 => 6,  159 => 5,  139 => 68,  130 => 65,  125 => 64,  121 => 63,  117 => 62,  113 => 61,  109 => 60,  105 => 59,  102 => 58,  98 => 57,  64 => 26,  56 => 20,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

<!-- DataTables -->
<link href=\"{{asset('assets/plugins/datatables/jquery.dataTables.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"{{asset('assets/plugins/datatables/buttons.bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"{{asset('assets/plugins/datatables/fixedHeader.bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"{{asset('assets/plugins/datatables/responsive.bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"{{asset('assets/plugins/datatables/scroller.bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
<style>
    img{
        width: 60px;
    }
</style>

{% endblock %}

<!-- Page-Title -->
<div class=\"row\">
    <div class=\"col-sm-12\">
        <h4 class=\"pull-left page-title\">Réservations</h4>
        <ol class=\"breadcrumb pull-right\">
            <li><a href=\"{{ path('admin') }}\">Tous les réservations</a></li>
            <li class=\"active\">En cours</li>
            <li><a href=\"\">Validées</a></li>
        </ol>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">Liste des réservations en cours</h3>
            </div>
            <div class=\"panel-body\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <table id=\"datatable-fixed-header\" class=\"table table-striped table-bordered\">
                            <thead>
                                <tr>
                                    <th>Nom du client</th>
                                    <th>Adresse</th>
                                    <th>Bien</th>
                                    <th>Prix location</th>
                                    <th>Localité du bien</th>
                                    <th>Photo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                        
                            <tbody>
                                {% for reservation in reservations %}
                                <tr>
                                    <td>{{ reservation.client.nomComplet }}</td>
                                    <td>{{ reservation.client.adress }}</td>
                                    <td>{{ reservation.bien.nomBien }}</td>
                                    <td>{{ reservation.bien.prixLocation }}</td>
                                    <td>{{ reservation.bien.localite.libelle }}</td>
                                    <td><img src=\"{{ asset('image/')}}{{ reservation.bien.images[0].image }}\"></td>
                                    <td><a href=\"{{path('reservation', {'id': reservation.id})}}\"><button type=\"button\" class=\"btn btn-primary waves-effect waves-light m-b-5\">Détail</button></a></td>
                                </tr>
                                {% endfor %}
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
                            
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
            \$(document).ready(function() {
                \$('#datatable').dataTable();
                \$('#datatable-keytable').DataTable( { keys: true } );
                \$('#datatable-responsive').DataTable();
                \$('#datatable-scroller').DataTable( { ajax: \"{{asset('assets/plugins/datatables/json/scroller-demo.json')}}\", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
                var table = \$('#datatable-fixed-header').DataTable( { 
                    fixedHeader: true,
                    \"iDisplayLength\": 6, 
                    \"language\": {
                        \"sProcessing\": \"Traitement en cours...\",
                        \"sSearch\": \"Rechercher&nbsp;:\",
                        \"sLengthMenu\": \"Afficher _MENU_ &eacute;l&eacute;ments\",
                        \"sInfo\": \"Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
                        \"sInfoEmpty\": \"Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment\",
                        \"sInfoFiltered\": \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
                        \"sInfoPostFix\": \"\",
                        \"sLoadingRecords\": \"Chargement en cours...\",
                        \"sZeroRecords\": \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
                        \"sEmptyTable\": \"Aucune donn&eacute;e disponible dans le tableau\",
                        \"oPaginate\": {
                            \"sFirst\": \"Premier\",
                            \"sPrevious\": \"Pr&eacute;c&eacute;dent\",
                            \"sNext\": \"Suivant\",
                            \"sLast\": \"Dernier\"
                        },
                        \"oAria\": {
                            \"sSortAscending\": \": activer pour trier la colonne par ordre croissant\",
                            \"sSortDescending\": \": activer pour trier la colonne par ordre d&eacute;croissant\"
                        }
                    }
                } );
            } );
            TableManageButtons.init();
        </script>

{% endblock %}", "SNTDarmankoBundle:admin:enCours.html.twig", "/var/www/html/perso/Darmanko/src/SNT/DarmankoBundle/Resources/views/admin/enCours.html.twig");
    }
}
