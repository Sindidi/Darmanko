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
        $__internal_0df43853a20e46c8facd2551ebd9c06aacedb5631975fa1b5fd262b237acc3b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0df43853a20e46c8facd2551ebd9c06aacedb5631975fa1b5fd262b237acc3b5->enter($__internal_0df43853a20e46c8facd2551ebd9c06aacedb5631975fa1b5fd262b237acc3b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:bien.html.twig"));

        $__internal_8617d022078231209d1456fad5e2add699d5b8a6dedbc7e4cf9ac9b7b8dd21fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8617d022078231209d1456fad5e2add699d5b8a6dedbc7e4cf9ac9b7b8dd21fd->enter($__internal_8617d022078231209d1456fad5e2add699d5b8a6dedbc7e4cf9ac9b7b8dd21fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:bien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0df43853a20e46c8facd2551ebd9c06aacedb5631975fa1b5fd262b237acc3b5->leave($__internal_0df43853a20e46c8facd2551ebd9c06aacedb5631975fa1b5fd262b237acc3b5_prof);

        
        $__internal_8617d022078231209d1456fad5e2add699d5b8a6dedbc7e4cf9ac9b7b8dd21fd->leave($__internal_8617d022078231209d1456fad5e2add699d5b8a6dedbc7e4cf9ac9b7b8dd21fd_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f3a591ec91e9981f885d5189078bcf6a9f485ec0c8eecaa982bc14b3eac4addb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3a591ec91e9981f885d5189078bcf6a9f485ec0c8eecaa982bc14b3eac4addb->enter($__internal_f3a591ec91e9981f885d5189078bcf6a9f485ec0c8eecaa982bc14b3eac4addb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_696e3d571bb87f679a42184650a552380c48676b0614bbb558c555622c551354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_696e3d571bb87f679a42184650a552380c48676b0614bbb558c555622c551354->enter($__internal_696e3d571bb87f679a42184650a552380c48676b0614bbb558c555622c551354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                                    <form method=\"POST\" class=\"form-inline formAdd\" role=\"form\">
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
                                <form class=\"cmxform form-horizontal tasi-form\" id=\"commentForm\" method=\"POST\" action=\"#\" novalidate=\"novalidate\">
                                    <div class=\"form-group\">
                                        <label for=\"cname\" class=\"control-label col-lg-2\">Nom du bien</label>
                                        <div class=\"col-lg-9\">
                                            <input class=\"form-control\" id=\"cname\" name=\"name\" type=\"text\" required=\"\" aria-required=\"true\">
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"cemail\" class=\"control-label col-lg-2\">Type de bien</label>
                                        <div class=\"col-lg-9\">
                                            <select name=\"localite\" id=\"seltype\" class=\"select2 form-control\" data-placeholder=\"Choisir une localité\">
                                                
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
                                            <input class=\"form-control\" id=\"cname\" name=\"name\" type=\"number\" required=\"\" aria-required=\"true\">
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"ccomment\" class=\"control-label col-lg-2\">Description</label>
                                        <div class=\"col-lg-9\">
                                            <textarea class=\"form-control\" id=\"ccomment\" name=\"comment\" required=\"\" aria-required=\"true\"></textarea>
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
                                                        <input name=\"file\" type=\"file\" multiple=\"multiple\">
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
                        <td><img src=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
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
                            <a href=\"#\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                            <a href=\"#\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
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
        
        $__internal_696e3d571bb87f679a42184650a552380c48676b0614bbb558c555622c551354->leave($__internal_696e3d571bb87f679a42184650a552380c48676b0614bbb558c555622c551354_prof);

        
        $__internal_f3a591ec91e9981f885d5189078bcf6a9f485ec0c8eecaa982bc14b3eac4addb->leave($__internal_f3a591ec91e9981f885d5189078bcf6a9f485ec0c8eecaa982bc14b3eac4addb_prof);

    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        $__internal_eaa5b126beb7e54510b1d1b9df407f06ab7401b8987fd78e9b77123f96150574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaa5b126beb7e54510b1d1b9df407f06ab7401b8987fd78e9b77123f96150574->enter($__internal_eaa5b126beb7e54510b1d1b9df407f06ab7401b8987fd78e9b77123f96150574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_07b22d609b2bf21ffef0625bb48f7bf209c671544d2b1544429df256b194599c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b22d609b2bf21ffef0625bb48f7bf209c671544d2b1544429df256b194599c->enter($__internal_07b22d609b2bf21ffef0625bb48f7bf209c671544d2b1544429df256b194599c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

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
        
        $__internal_07b22d609b2bf21ffef0625bb48f7bf209c671544d2b1544429df256b194599c->leave($__internal_07b22d609b2bf21ffef0625bb48f7bf209c671544d2b1544429df256b194599c_prof);

        
        $__internal_eaa5b126beb7e54510b1d1b9df407f06ab7401b8987fd78e9b77123f96150574->leave($__internal_eaa5b126beb7e54510b1d1b9df407f06ab7401b8987fd78e9b77123f96150574_prof);

    }

    // line 202
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_8a1e969d57c094c1f5760d596e11627c04d7d4ab65bb54466d314a4cbbefaf05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a1e969d57c094c1f5760d596e11627c04d7d4ab65bb54466d314a4cbbefaf05->enter($__internal_8a1e969d57c094c1f5760d596e11627c04d7d4ab65bb54466d314a4cbbefaf05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_534200132d9766fed4975add994ceb090e7a13a2b4dc1d419bed74d8dfc34dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_534200132d9766fed4975add994ceb090e7a13a2b4dc1d419bed74d8dfc34dfd->enter($__internal_534200132d9766fed4975add994ceb090e7a13a2b4dc1d419bed74d8dfc34dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_534200132d9766fed4975add994ceb090e7a13a2b4dc1d419bed74d8dfc34dfd->leave($__internal_534200132d9766fed4975add994ceb090e7a13a2b4dc1d419bed74d8dfc34dfd_prof);

        
        $__internal_8a1e969d57c094c1f5760d596e11627c04d7d4ab65bb54466d314a4cbbefaf05->leave($__internal_8a1e969d57c094c1f5760d596e11627c04d7d4ab65bb54466d314a4cbbefaf05_prof);

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
        return array (  456 => 295,  417 => 259,  393 => 238,  380 => 228,  375 => 226,  371 => 224,  366 => 217,  362 => 216,  358 => 215,  349 => 209,  343 => 206,  339 => 205,  335 => 203,  326 => 202,  308 => 15,  304 => 14,  298 => 11,  294 => 10,  288 => 7,  285 => 6,  276 => 5,  255 => 189,  242 => 181,  238 => 179,  234 => 177,  232 => 176,  227 => 175,  223 => 174,  219 => 173,  215 => 172,  211 => 171,  208 => 170,  204 => 169,  56 => 23,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
                                    <form method=\"POST\" class=\"form-inline formAdd\" role=\"form\">
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
                                <form class=\"cmxform form-horizontal tasi-form\" id=\"commentForm\" method=\"POST\" action=\"#\" novalidate=\"novalidate\">
                                    <div class=\"form-group\">
                                        <label for=\"cname\" class=\"control-label col-lg-2\">Nom du bien</label>
                                        <div class=\"col-lg-9\">
                                            <input class=\"form-control\" id=\"cname\" name=\"name\" type=\"text\" required=\"\" aria-required=\"true\">
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"cemail\" class=\"control-label col-lg-2\">Type de bien</label>
                                        <div class=\"col-lg-9\">
                                            <select name=\"localite\" id=\"seltype\" class=\"select2 form-control\" data-placeholder=\"Choisir une localité\">
                                                
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
                                            <input class=\"form-control\" id=\"cname\" name=\"name\" type=\"number\" required=\"\" aria-required=\"true\">
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"ccomment\" class=\"control-label col-lg-2\">Description</label>
                                        <div class=\"col-lg-9\">
                                            <textarea class=\"form-control\" id=\"ccomment\" name=\"comment\" required=\"\" aria-required=\"true\"></textarea>
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
                                                        <input name=\"file\" type=\"file\" multiple=\"multiple\">
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
                        <td><img src=\"{{asset('image/')}}{{ bien.images[0].image }}\"></td>
                        {% if bien.etat == 1 %}
                        <td>Disponible</td>
                        {% else %}
                        <td>Dèja occupé</td>
                        {% endif %}
                        <td class=\"actions\">
                            <a href=\"#\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                            <a href=\"#\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                            <a href=\"#\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                            <a href=\"#\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
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
