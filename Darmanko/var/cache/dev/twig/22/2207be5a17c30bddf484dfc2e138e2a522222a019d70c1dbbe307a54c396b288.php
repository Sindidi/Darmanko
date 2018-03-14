<?php

/* SNTDarmankoBundle:admin:bien.html.twig */
class __TwigTemplate_43dde4592534f367240e0e1a0da06f72a2eebd5e07ebda30ada74fad8032f529 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin.html.twig", "SNTDarmankoBundle:admin:bien.html.twig", 1);
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
        $__internal_544fe632d0b8741be9af2d125d778c68a91951f0204d5d2db71542c47ab58498 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_544fe632d0b8741be9af2d125d778c68a91951f0204d5d2db71542c47ab58498->enter($__internal_544fe632d0b8741be9af2d125d778c68a91951f0204d5d2db71542c47ab58498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:bien.html.twig"));

        $__internal_5765bce58ae1bb17b13e9abe59e1e04d54aa6f11dc96a331ff3e6cc4ddfe92f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5765bce58ae1bb17b13e9abe59e1e04d54aa6f11dc96a331ff3e6cc4ddfe92f3->enter($__internal_5765bce58ae1bb17b13e9abe59e1e04d54aa6f11dc96a331ff3e6cc4ddfe92f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:bien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_544fe632d0b8741be9af2d125d778c68a91951f0204d5d2db71542c47ab58498->leave($__internal_544fe632d0b8741be9af2d125d778c68a91951f0204d5d2db71542c47ab58498_prof);

        
        $__internal_5765bce58ae1bb17b13e9abe59e1e04d54aa6f11dc96a331ff3e6cc4ddfe92f3->leave($__internal_5765bce58ae1bb17b13e9abe59e1e04d54aa6f11dc96a331ff3e6cc4ddfe92f3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ea62f31bf5e96ada984a9a35c17eeccd4901dc7347ef1ff07d27c0da4889e1df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea62f31bf5e96ada984a9a35c17eeccd4901dc7347ef1ff07d27c0da4889e1df->enter($__internal_ea62f31bf5e96ada984a9a35c17eeccd4901dc7347ef1ff07d27c0da4889e1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f06a4d1fe25c076ffaf2f44ecbddf7a90b4859086f9ae61ceaf4765371fa6b02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f06a4d1fe25c076ffaf2f44ecbddf7a90b4859086f9ae61ceaf4765371fa6b02->enter($__internal_f06a4d1fe25c076ffaf2f44ecbddf7a90b4859086f9ae61ceaf4765371fa6b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                    <li><a href=\"#\">Liste des bien</a></li>
                    <li class=\"active\">Ajouter un bien</li>
                </ol>
            </div>
        </div>

        <div class=\"panel\" id=\"ajout\" style=\"display: none;\">
            
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body\">
                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <div class=\"m-b-30\">
                                        <button type=\"button\" id=\"lister\" class=\"btn btn-primary waves-effect waves-light\">Lister <i class=\"fa fa-remove\"></i></button>
                                    </div>
                                </div>
                                <div class=\"form ajout\" id=\"formLocalite\">
                                    <form method=\"POST\" class=\"form-inline formAdd\" role=\"form\">
                                        <div class=\"form-group\">
                                            <label class=\"control-label\"><i>Localité: </i></label>
                                            <input name=\"libelle\" type=\"text\" class=\"form-control libelle\" placeholder=\"Entrer la localité\">
                                            <input name=\"Classe\" value=\"Localite\" type=\"hidden\" class=\"form-control\" id=\"libelle\" placeholder=\"Entrer le type de bien\">
                                        </div>
                                        <button name=\"submit\" value=\"Localite\" type=\"submit\" class=\"btn btn-primary waves-effect waves-light\">Ajouter</button>
                                    </form>
                                </div>
                                <div class=\"form ajout\" id=\"formType\">
                                    <form method=\"POST\" class=\"form-inline formAdd\" enctype=\"multipart/form-data\" role=\"form\">
                                        <div class=\"form-group\">
                                            <label class=\"control-label\"><i>Type de bien: </i></label>
                                            <input name=\"libelle\" type=\"text\" class=\"form-control libelle\"  placeholder=\"Entrer le type de bien\">
                                            <input name=\"Classe\" value=\"TypeBien\" type=\"hidden\" class=\"form-control\" id=\"libelle\" placeholder=\"Entrer le type de bien\">
                                        </div>
                                        <button name=\"submit\" type=\"submit\" class=\"btn btn-primary waves-effect waves-light\">Ajouter</button>
                                    </form>
                                </div>
                            </div>
                            <div class=\"form\">
                                <form class=\"cmxform form-horizontal tasi-form\" id=\"commentForm\" method=\"POST\" action=\"\" novalidate=\"novalidate\">
                                    <div class=\"form-group\">
                                        <label for=\"cname\" class=\"control-label col-lg-2\">Nom du bien</label>
                                        <div class=\"col-lg-9\">
                                            <input class=\"form-control\" id=\"cname\" name=\"nom\" type=\"text\" required=\"\" aria-required=\"true\">
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"cemail\" class=\"control-label col-lg-2\">Type de bien</label>
                                        <div class=\"col-lg-9\">
                                            <select name=\"type\" id=\"seltype\" class=\"select2 form-control\" data-placeholder=\"Choisir une localité\">
                                                
                                            </select>
                                        </div>
                                        <div class=\"col-lg-1\">
                                            <button id=\"addType\" type=\"button\" class=\"btn btn-custom btn-primary waves-effect waves-light\"><i class=\"fa fa-plus\"></i></button>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"cemail\" class=\"control-label col-lg-2\">Localité</label>
                                        <div class=\"col-lg-9\">
                                            <select name=\"localite\" id=\"sellocalite\" class=\"select2 form-control\" data-placeholder=\"Choisir une localité\">
                                                
                                            </select>
                                        </div>
                                        <div class=\"col-lg-1\">
                                            <button id=\"addLocalite\" type=\"button\" class=\"btn btn-custom btn-primary waves-effect waves-light\"><i class=\"fa fa-plus\"></i></button>
                                        </div>
                                    </div>
                                    
                                    <div class=\"form-group\">
                                        <label for=\"cname\" class=\"control-label col-lg-2\">Prix location</label>
                                        <div class=\"col-lg-9\">
                                            <input class=\"form-control\" id=\"cname\" name=\"prix\" type=\"number\" required=\"\" aria-required=\"true\">
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"ccomment\" class=\"control-label col-lg-2\">Description</label>
                                        <div class=\"col-lg-9\">
                                            <textarea class=\"form-control\" id=\"ccomment\" name=\"description\" required=\"\" aria-required=\"true\"></textarea>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"ccomment\" class=\"control-label col-lg-2\">Images du bien</label>
                                        <div class=\"col-lg-9\">
                                            <div class=\"col-md-12 portlets\">
                                                <!-- Your awesome content goes here -->
                                                <div class=\"m-b-30\">
                                                    <div action=\"#\" class=\"dropzone\" id=\"dropzone\">
                                                    <div class=\"fallback\">
                                                        <input type=\"file\" multiple=\"multiple\" name=\"image\">
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class=\"form-group\">
                                        <div class=\"col-lg-offset-6 col-lg-6\">
                                            <button class=\"btn btn-success waves-effect waves-light\" type=\"submit\">Ajouter</button>
                                        </div>
                                    </div>
                                </form>
                            </div> <!-- .form -->
                        </div> <!-- panel-body -->
                    </div> <!-- panel -->
                </div> <!-- col -->

            </div> <!-- End row -->
        </div>              

        
        
        <div class=\"panel\" id=\"list\">
                            
            <div class=\"panel-body\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"m-b-30\">
                        <button type=\"button\" id=\"add\" class=\"btn btn-primary waves-effect waves-light\">Ajouter <i class=\"fa fa-plus\"></i></button>
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
                        <th>Etat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 170
            echo "                    <tr class=\"gradeA\">
                        <td>";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nomBien", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 172
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "type", array()), "libelle", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "localite", array()), "libelle", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixlocation", array()), "html", null, true);
            echo "</td>
                        <td><img src=\"data:image/png;base64,";
            // line 175
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["bien"], "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\"></td>
                        ";
            // line 176
            if (($this->getAttribute($context["bien"], "etat", array()) == 1)) {
                // line 177
                echo "                        <td>Disponible</td>
                        ";
            } else {
                // line 179
                echo "                        <td>Dèja occupé</td>
                        ";
            }
            // line 181
            echo "                        <td class=\"actions\">
                            <a href=\"#\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                            <a href=\"#\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                            <a href=\"#\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>  |  
                            <a href=\"#\" class=\"on-default text-danger remove-row\"><i class=\"fa fa-trash-o\"></i></a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "                </tbody>
            </table>
        </div>
            <!-- end: page -->

    </div> <!-- end Panel -->

    </div> <!-- container -->
                               
</div>

";
        
        $__internal_f06a4d1fe25c076ffaf2f44ecbddf7a90b4859086f9ae61ceaf4765371fa6b02->leave($__internal_f06a4d1fe25c076ffaf2f44ecbddf7a90b4859086f9ae61ceaf4765371fa6b02_prof);

        
        $__internal_ea62f31bf5e96ada984a9a35c17eeccd4901dc7347ef1ff07d27c0da4889e1df->leave($__internal_ea62f31bf5e96ada984a9a35c17eeccd4901dc7347ef1ff07d27c0da4889e1df_prof);

    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        $__internal_5da5e542d2a5e5b059385c242dbc78751798996738f06ab76d90185f4bd55460 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5da5e542d2a5e5b059385c242dbc78751798996738f06ab76d90185f4bd55460->enter($__internal_5da5e542d2a5e5b059385c242dbc78751798996738f06ab76d90185f4bd55460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_ffefa1b7fac7ac9e87386f06185168502792c8fb442f9a21142f9d3c5caeea83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffefa1b7fac7ac9e87386f06185168502792c8fb442f9a21142f9d3c5caeea83->enter($__internal_ffefa1b7fac7ac9e87386f06185168502792c8fb442f9a21142f9d3c5caeea83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

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
        
        $__internal_ffefa1b7fac7ac9e87386f06185168502792c8fb442f9a21142f9d3c5caeea83->leave($__internal_ffefa1b7fac7ac9e87386f06185168502792c8fb442f9a21142f9d3c5caeea83_prof);

        
        $__internal_5da5e542d2a5e5b059385c242dbc78751798996738f06ab76d90185f4bd55460->leave($__internal_5da5e542d2a5e5b059385c242dbc78751798996738f06ab76d90185f4bd55460_prof);

    }

    // line 202
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_7ba4f44b3ba0562f8f711d0679ad8b007e67cbae74215cc744fb292461681dcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ba4f44b3ba0562f8f711d0679ad8b007e67cbae74215cc744fb292461681dcb->enter($__internal_7ba4f44b3ba0562f8f711d0679ad8b007e67cbae74215cc744fb292461681dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_3d23fccf8f68c56fffcb0ee32fade75e0f64ccfc1e0954bdf4ef0877f3ecb9c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d23fccf8f68c56fffcb0ee32fade75e0f64ccfc1e0954bdf4ef0877f3ecb9c7->enter($__internal_3d23fccf8f68c56fffcb0ee32fade75e0f64ccfc1e0954bdf4ef0877f3ecb9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 203
        echo "
    <!-- Datatables-->
        <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>

        <!-- Datatable init js -->
        <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/datatables.init.js"), "html", null, true);
        echo "\"></script>  

        <script type=\"text/javascript\">
            
        </script>
        <!--multiselect-->
        <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/select2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.quicksearch.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 224
        echo "
        <!-- Page Specific JS Libraries -->
        <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/dropzone/dist/dropzone.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/test.js"), "html", null, true);
        echo "\"></script>

        <script>
        \$(function(){

        })

        function loadLocalite(){
            \$.ajax({

                url: \"";
        // line 238
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajaxLocalite");
        echo "\",
                type: \"POST\",
                dataType: \"json\",

                success: function(data) {
                    \$(\"#sellocalite\").html('<option value=\"\">Choisir localité</option>');
                    \$.each(data, function(key, value){
                        var op = \$(\"<option value='\"+value.id+\"'></option>\").text(value.nom);
                        \$(\"#sellocalite\").append(op);
                    })
                },

                error: function(res, stat, error) {
                    console.log(error);
                }
            })
        }

        function loadType(){
            \$.ajax({

                url: \"";
        // line 259
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajaxType");
        echo "\",
                type: \"POST\",
                dataType: \"json\",

                success: function(data) {
                    \$(\"#seltype\").html('<option value=\"\">Choisir le type</option>');
                    \$.each(data, function(key, value){
                        var op = \$(\"<option value='\"+value.id+\"'></option>\").text(value.nom);
                        \$(\"#seltype\").append(op);
                    })
                },

                error: function(res, stat, error) {
                    console.log(error);
                }
            })
        }
        loadLocalite();
        loadType();

        \$(\".ajout\").hide();

        \$(\"#addLocalite\").on(\"click\", function(){
            \$(\".ajout\").hide();
            \$(\"#formLocalite\").show();
        })
        \$(\"#addType\").on(\"click\", function(){
            \$(\".ajout\").hide();
            \$(\"#formType\").show();
        })

        \$(\".formAdd\").on(\"submit\", function(e){
            e.preventDefault();

            \$.ajax({

                url: \"";
        // line 295
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajaxAddSelect");
        echo "\",
                type: \"POST\",
                data: \$(this).serialize(),
                dataType: \"text\",

                success: function(data) {
                    \$(\".libelle\").val('')
                    \$(\".ajout\").hide();
                    console.log(data)
                    loadLocalite();
                    loadType();
                },

                error: function(res, stat, error) {
                    console.log(error);
                }
            })
            
        })
        </script>
";
        
        $__internal_3d23fccf8f68c56fffcb0ee32fade75e0f64ccfc1e0954bdf4ef0877f3ecb9c7->leave($__internal_3d23fccf8f68c56fffcb0ee32fade75e0f64ccfc1e0954bdf4ef0877f3ecb9c7_prof);

        
        $__internal_7ba4f44b3ba0562f8f711d0679ad8b007e67cbae74215cc744fb292461681dcb->leave($__internal_7ba4f44b3ba0562f8f711d0679ad8b007e67cbae74215cc744fb292461681dcb_prof);

    }

    public function getTemplateName()
    {
        return "SNTDarmankoBundle:admin:bien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 295,  416 => 259,  392 => 238,  379 => 228,  374 => 226,  370 => 224,  365 => 217,  361 => 216,  357 => 215,  348 => 209,  342 => 206,  338 => 205,  334 => 203,  325 => 202,  307 => 15,  303 => 14,  297 => 11,  293 => 10,  287 => 7,  284 => 6,  275 => 5,  254 => 189,  241 => 181,  237 => 179,  233 => 177,  231 => 176,  227 => 175,  223 => 174,  219 => 173,  215 => 172,  211 => 171,  208 => 170,  204 => 169,  56 => 23,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
                    <li><a href=\"#\">Liste des bien</a></li>
                    <li class=\"active\">Ajouter un bien</li>
                </ol>
            </div>
        </div>

        <div class=\"panel\" id=\"ajout\" style=\"display: none;\">
            
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body\">
                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <div class=\"m-b-30\">
                                        <button type=\"button\" id=\"lister\" class=\"btn btn-primary waves-effect waves-light\">Lister <i class=\"fa fa-remove\"></i></button>
                                    </div>
                                </div>
                                <div class=\"form ajout\" id=\"formLocalite\">
                                    <form method=\"POST\" class=\"form-inline formAdd\" role=\"form\">
                                        <div class=\"form-group\">
                                            <label class=\"control-label\"><i>Localité: </i></label>
                                            <input name=\"libelle\" type=\"text\" class=\"form-control libelle\" placeholder=\"Entrer la localité\">
                                            <input name=\"Classe\" value=\"Localite\" type=\"hidden\" class=\"form-control\" id=\"libelle\" placeholder=\"Entrer le type de bien\">
                                        </div>
                                        <button name=\"submit\" value=\"Localite\" type=\"submit\" class=\"btn btn-primary waves-effect waves-light\">Ajouter</button>
                                    </form>
                                </div>
                                <div class=\"form ajout\" id=\"formType\">
                                    <form method=\"POST\" class=\"form-inline formAdd\" enctype=\"multipart/form-data\" role=\"form\">
                                        <div class=\"form-group\">
                                            <label class=\"control-label\"><i>Type de bien: </i></label>
                                            <input name=\"libelle\" type=\"text\" class=\"form-control libelle\"  placeholder=\"Entrer le type de bien\">
                                            <input name=\"Classe\" value=\"TypeBien\" type=\"hidden\" class=\"form-control\" id=\"libelle\" placeholder=\"Entrer le type de bien\">
                                        </div>
                                        <button name=\"submit\" type=\"submit\" class=\"btn btn-primary waves-effect waves-light\">Ajouter</button>
                                    </form>
                                </div>
                            </div>
                            <div class=\"form\">
                                <form class=\"cmxform form-horizontal tasi-form\" id=\"commentForm\" method=\"POST\" action=\"\" novalidate=\"novalidate\">
                                    <div class=\"form-group\">
                                        <label for=\"cname\" class=\"control-label col-lg-2\">Nom du bien</label>
                                        <div class=\"col-lg-9\">
                                            <input class=\"form-control\" id=\"cname\" name=\"nom\" type=\"text\" required=\"\" aria-required=\"true\">
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"cemail\" class=\"control-label col-lg-2\">Type de bien</label>
                                        <div class=\"col-lg-9\">
                                            <select name=\"type\" id=\"seltype\" class=\"select2 form-control\" data-placeholder=\"Choisir une localité\">
                                                
                                            </select>
                                        </div>
                                        <div class=\"col-lg-1\">
                                            <button id=\"addType\" type=\"button\" class=\"btn btn-custom btn-primary waves-effect waves-light\"><i class=\"fa fa-plus\"></i></button>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"cemail\" class=\"control-label col-lg-2\">Localité</label>
                                        <div class=\"col-lg-9\">
                                            <select name=\"localite\" id=\"sellocalite\" class=\"select2 form-control\" data-placeholder=\"Choisir une localité\">
                                                
                                            </select>
                                        </div>
                                        <div class=\"col-lg-1\">
                                            <button id=\"addLocalite\" type=\"button\" class=\"btn btn-custom btn-primary waves-effect waves-light\"><i class=\"fa fa-plus\"></i></button>
                                        </div>
                                    </div>
                                    
                                    <div class=\"form-group\">
                                        <label for=\"cname\" class=\"control-label col-lg-2\">Prix location</label>
                                        <div class=\"col-lg-9\">
                                            <input class=\"form-control\" id=\"cname\" name=\"prix\" type=\"number\" required=\"\" aria-required=\"true\">
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"ccomment\" class=\"control-label col-lg-2\">Description</label>
                                        <div class=\"col-lg-9\">
                                            <textarea class=\"form-control\" id=\"ccomment\" name=\"description\" required=\"\" aria-required=\"true\"></textarea>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"ccomment\" class=\"control-label col-lg-2\">Images du bien</label>
                                        <div class=\"col-lg-9\">
                                            <div class=\"col-md-12 portlets\">
                                                <!-- Your awesome content goes here -->
                                                <div class=\"m-b-30\">
                                                    <div action=\"#\" class=\"dropzone\" id=\"dropzone\">
                                                    <div class=\"fallback\">
                                                        <input type=\"file\" multiple=\"multiple\" name=\"image\">
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class=\"form-group\">
                                        <div class=\"col-lg-offset-6 col-lg-6\">
                                            <button class=\"btn btn-success waves-effect waves-light\" type=\"submit\">Ajouter</button>
                                        </div>
                                    </div>
                                </form>
                            </div> <!-- .form -->
                        </div> <!-- panel-body -->
                    </div> <!-- panel -->
                </div> <!-- col -->

            </div> <!-- End row -->
        </div>              

        
        
        <div class=\"panel\" id=\"list\">
                            
            <div class=\"panel-body\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"m-b-30\">
                        <button type=\"button\" id=\"add\" class=\"btn btn-primary waves-effect waves-light\">Ajouter <i class=\"fa fa-plus\"></i></button>
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
                        <th>Etat</th>
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
                        {% if bien.etat == 1 %}
                        <td>Disponible</td>
                        {% else %}
                        <td>Dèja occupé</td>
                        {% endif %}
                        <td class=\"actions\">
                            <a href=\"#\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                            <a href=\"#\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                            <a href=\"#\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>  |  
                            <a href=\"#\" class=\"on-default text-danger remove-row\"><i class=\"fa fa-trash-o\"></i></a>
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
            
        </script>
        <!--multiselect-->
        <script src=\"{{asset('template/js/select2.min.js')}}\"></script>
        <script src=\"{{asset('template/js/jquery.multi-select.js')}}\"></script>
        <script src=\"{{asset('template/js/jquery.quicksearch.js')}}\"></script>

        {# <!--form validation-->
        <script type=\"text/javascript\" src=\"{{asset('assets/plugins/jquery-validation/dist/jquery.validate.min.js')}}\"></script>

        <!--form validation init-->
        <script src=\"{{asset('assets/pages/form-validation-init.js')}}\"></script> #}

        <!-- Page Specific JS Libraries -->
        <script src=\"{{ asset('assets/plugins/dropzone/dist/dropzone.js')}}\"></script>

        <script src=\"{{ asset('js/test.js') }}\"></script>

        <script>
        \$(function(){

        })

        function loadLocalite(){
            \$.ajax({

                url: \"{{path(\"ajaxLocalite\")}}\",
                type: \"POST\",
                dataType: \"json\",

                success: function(data) {
                    \$(\"#sellocalite\").html('<option value=\"\">Choisir localité</option>');
                    \$.each(data, function(key, value){
                        var op = \$(\"<option value='\"+value.id+\"'></option>\").text(value.nom);
                        \$(\"#sellocalite\").append(op);
                    })
                },

                error: function(res, stat, error) {
                    console.log(error);
                }
            })
        }

        function loadType(){
            \$.ajax({

                url: \"{{path(\"ajaxType\")}}\",
                type: \"POST\",
                dataType: \"json\",

                success: function(data) {
                    \$(\"#seltype\").html('<option value=\"\">Choisir le type</option>');
                    \$.each(data, function(key, value){
                        var op = \$(\"<option value='\"+value.id+\"'></option>\").text(value.nom);
                        \$(\"#seltype\").append(op);
                    })
                },

                error: function(res, stat, error) {
                    console.log(error);
                }
            })
        }
        loadLocalite();
        loadType();

        \$(\".ajout\").hide();

        \$(\"#addLocalite\").on(\"click\", function(){
            \$(\".ajout\").hide();
            \$(\"#formLocalite\").show();
        })
        \$(\"#addType\").on(\"click\", function(){
            \$(\".ajout\").hide();
            \$(\"#formType\").show();
        })

        \$(\".formAdd\").on(\"submit\", function(e){
            e.preventDefault();

            \$.ajax({

                url: \"{{path(\"ajaxAddSelect\")}}\",
                type: \"POST\",
                data: \$(this).serialize(),
                dataType: \"text\",

                success: function(data) {
                    \$(\".libelle\").val('')
                    \$(\".ajout\").hide();
                    console.log(data)
                    loadLocalite();
                    loadType();
                },

                error: function(res, stat, error) {
                    console.log(error);
                }
            })
            
        })
        </script>
{% endblock %}", "SNTDarmankoBundle:admin:bien.html.twig", "/var/www/html/perso/Darmanko/src/SNT/DarmankoBundle/Resources/views/admin/bien.html.twig");
    }
}
