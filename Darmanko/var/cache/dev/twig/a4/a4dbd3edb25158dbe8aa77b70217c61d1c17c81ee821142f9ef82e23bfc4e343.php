<?php

/* SNTDarmankoBundle:admin:accueil.html.twig */
class __TwigTemplate_c79151337e9589359db917ab4534c091d4fde905e0f48f39e8afc09cfd97dfd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "SNTDarmankoBundle:admin:accueil.html.twig", 1);
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
        $__internal_ce61df0514a022f3ce223447f7803868d1e44324c4ded0a4aab2a6157dcefd31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce61df0514a022f3ce223447f7803868d1e44324c4ded0a4aab2a6157dcefd31->enter($__internal_ce61df0514a022f3ce223447f7803868d1e44324c4ded0a4aab2a6157dcefd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:accueil.html.twig"));

        $__internal_fc0333e951452a54164d526c9f7d23a3ad3508b42daa89437c0d079515a65b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc0333e951452a54164d526c9f7d23a3ad3508b42daa89437c0d079515a65b37->enter($__internal_fc0333e951452a54164d526c9f7d23a3ad3508b42daa89437c0d079515a65b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce61df0514a022f3ce223447f7803868d1e44324c4ded0a4aab2a6157dcefd31->leave($__internal_ce61df0514a022f3ce223447f7803868d1e44324c4ded0a4aab2a6157dcefd31_prof);

        
        $__internal_fc0333e951452a54164d526c9f7d23a3ad3508b42daa89437c0d079515a65b37->leave($__internal_fc0333e951452a54164d526c9f7d23a3ad3508b42daa89437c0d079515a65b37_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_dfb9a20cf396636b314d97aa3639a7ce0a4a3c99fe4734c1284f9dee48772a65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfb9a20cf396636b314d97aa3639a7ce0a4a3c99fe4734c1284f9dee48772a65->enter($__internal_dfb9a20cf396636b314d97aa3639a7ce0a4a3c99fe4734c1284f9dee48772a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f5decd01dfa72022d4139f31a30487cea090010eafaed96ce6c4e3ba508400e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5decd01dfa72022d4139f31a30487cea090010eafaed96ce6c4e3ba508400e8->enter($__internal_f5decd01dfa72022d4139f31a30487cea090010eafaed96ce6c4e3ba508400e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        // line 5
        $this->displayBlock('css', $context, $blocks);
        // line 20
        echo "
<div class=\"row\">
    <div class=\"col-sm-12\">
        <h4 class=\"pull-left page-title\">Réservations</h4>
        <ol class=\"breadcrumb pull-right\">
            <li class=\"active\">Tous les réservations</a></li>
            <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enCours");
        echo "\">En cours</a></li>
            <li><a href=\"\">Validées</a></li>
        </ol>
    </div>
</div>


<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">Liste des réservations enregistrées</h3>
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
                                </tr>
                            </thead>

                        
                            <tbody>
                                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 57
            echo "                                <tr>
                                    <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "client", array()), "nomComplet", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "client", array()), "adress", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "nomBien", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "prixLocation", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "localite", array()), "libelle", array()), "html", null, true);
            echo "</td>
                                    <td><img src=\"data:image/png;base64,";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\"></td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
                            
</div>
";
        
        $__internal_f5decd01dfa72022d4139f31a30487cea090010eafaed96ce6c4e3ba508400e8->leave($__internal_f5decd01dfa72022d4139f31a30487cea090010eafaed96ce6c4e3ba508400e8_prof);

        
        $__internal_dfb9a20cf396636b314d97aa3639a7ce0a4a3c99fe4734c1284f9dee48772a65->leave($__internal_dfb9a20cf396636b314d97aa3639a7ce0a4a3c99fe4734c1284f9dee48772a65_prof);

    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        $__internal_5ff9fd9ed87e6ac1a49319052cd714d33daee04fc11ac38fd137e3650fef8ff5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ff9fd9ed87e6ac1a49319052cd714d33daee04fc11ac38fd137e3650fef8ff5->enter($__internal_5ff9fd9ed87e6ac1a49319052cd714d33daee04fc11ac38fd137e3650fef8ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_6d7141452a5b096ecd0be1447fe0d1e98f8efd57b58cd64dd4fc7b70d150e520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d7141452a5b096ecd0be1447fe0d1e98f8efd57b58cd64dd4fc7b70d150e520->enter($__internal_6d7141452a5b096ecd0be1447fe0d1e98f8efd57b58cd64dd4fc7b70d150e520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

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
        width: 50px;
    }
</style>

";
        
        $__internal_6d7141452a5b096ecd0be1447fe0d1e98f8efd57b58cd64dd4fc7b70d150e520->leave($__internal_6d7141452a5b096ecd0be1447fe0d1e98f8efd57b58cd64dd4fc7b70d150e520_prof);

        
        $__internal_5ff9fd9ed87e6ac1a49319052cd714d33daee04fc11ac38fd137e3650fef8ff5->leave($__internal_5ff9fd9ed87e6ac1a49319052cd714d33daee04fc11ac38fd137e3650fef8ff5_prof);

    }

    // line 78
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_03c48b9a50baf67ca3aa29ad0652c39d7b18776b01069ce789454568d1383d76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03c48b9a50baf67ca3aa29ad0652c39d7b18776b01069ce789454568d1383d76->enter($__internal_03c48b9a50baf67ca3aa29ad0652c39d7b18776b01069ce789454568d1383d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_1156f392d0446d7a232c69f251345833b98754ea3a84fae5bd194363f47a714b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1156f392d0446d7a232c69f251345833b98754ea3a84fae5bd194363f47a714b->enter($__internal_1156f392d0446d7a232c69f251345833b98754ea3a84fae5bd194363f47a714b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 79
        echo "
    <!-- Datatables-->
        <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jszip.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.fixedHeader.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.keyTable.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/responsive.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.scroller.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Datatable init js -->
        <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/datatables.init.js"), "html", null, true);
        echo "\"></script>

        <script type=\"text/javascript\">
            \$(document).ready(function() {
                \$('#datatable').dataTable();
                \$('#datatable-keytable').DataTable( { keys: true } );
                \$('#datatable-responsive').DataTable();
                \$('#datatable-scroller').DataTable( { ajax: \"";
        // line 104
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
        
        $__internal_1156f392d0446d7a232c69f251345833b98754ea3a84fae5bd194363f47a714b->leave($__internal_1156f392d0446d7a232c69f251345833b98754ea3a84fae5bd194363f47a714b_prof);

        
        $__internal_03c48b9a50baf67ca3aa29ad0652c39d7b18776b01069ce789454568d1383d76->leave($__internal_03c48b9a50baf67ca3aa29ad0652c39d7b18776b01069ce789454568d1383d76_prof);

    }

    public function getTemplateName()
    {
        return "SNTDarmankoBundle:admin:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 104,  271 => 97,  265 => 94,  261 => 93,  257 => 92,  253 => 91,  249 => 90,  245 => 89,  241 => 88,  237 => 87,  233 => 86,  229 => 85,  225 => 84,  221 => 83,  217 => 82,  213 => 81,  209 => 79,  200 => 78,  182 => 12,  178 => 11,  174 => 10,  170 => 9,  166 => 8,  162 => 6,  153 => 5,  133 => 66,  124 => 63,  120 => 62,  116 => 61,  112 => 60,  108 => 59,  104 => 58,  101 => 57,  97 => 56,  64 => 26,  56 => 20,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
        width: 50px;
    }
</style>

{% endblock %}

<div class=\"row\">
    <div class=\"col-sm-12\">
        <h4 class=\"pull-left page-title\">Réservations</h4>
        <ol class=\"breadcrumb pull-right\">
            <li class=\"active\">Tous les réservations</a></li>
            <li><a href=\"{{ path('enCours') }}\">En cours</a></li>
            <li><a href=\"\">Validées</a></li>
        </ol>
    </div>
</div>


<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">Liste des réservations enregistrées</h3>
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
                                    <td><img src=\"data:image/png;base64,{{ reservation.bien.images[0].image  }}\"></td>
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

{% endblock %}", "SNTDarmankoBundle:admin:accueil.html.twig", "/var/www/html/perso/Darmanko/src/SNT/DarmankoBundle/Resources/views/admin/accueil.html.twig");
    }
}
