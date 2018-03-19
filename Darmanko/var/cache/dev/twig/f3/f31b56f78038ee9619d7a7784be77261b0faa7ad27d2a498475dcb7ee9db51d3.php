<?php

/* SNTDarmankoBundle:admin:bien.html.twig */
class __TwigTemplate_d8dae9a2ad020d8c83c9b078b6ec9b9538904597ce08b5472f15db53324120b2 extends Twig_Template
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
        $__internal_91ccea0e7e9bf8c74d043957a5f375edfcb5bba71b31dd9e34e51d40bd75fdf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91ccea0e7e9bf8c74d043957a5f375edfcb5bba71b31dd9e34e51d40bd75fdf1->enter($__internal_91ccea0e7e9bf8c74d043957a5f375edfcb5bba71b31dd9e34e51d40bd75fdf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:bien.html.twig"));

        $__internal_1fc63c2887019a9fe2d46c544b819ed0ad72d547d2566c4ef0d18ea3b7a083cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc63c2887019a9fe2d46c544b819ed0ad72d547d2566c4ef0d18ea3b7a083cb->enter($__internal_1fc63c2887019a9fe2d46c544b819ed0ad72d547d2566c4ef0d18ea3b7a083cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:bien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91ccea0e7e9bf8c74d043957a5f375edfcb5bba71b31dd9e34e51d40bd75fdf1->leave($__internal_91ccea0e7e9bf8c74d043957a5f375edfcb5bba71b31dd9e34e51d40bd75fdf1_prof);

        
        $__internal_1fc63c2887019a9fe2d46c544b819ed0ad72d547d2566c4ef0d18ea3b7a083cb->leave($__internal_1fc63c2887019a9fe2d46c544b819ed0ad72d547d2566c4ef0d18ea3b7a083cb_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_0bea5e2c89ff8b3506bb5e176f784b185f091ff054f363f75b85a403279ce905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bea5e2c89ff8b3506bb5e176f784b185f091ff054f363f75b85a403279ce905->enter($__internal_0bea5e2c89ff8b3506bb5e176f784b185f091ff054f363f75b85a403279ce905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_060d9e3d54aae6df35dd6c52c3814f745600587db11e12fe7f3ed02331aabd89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_060d9e3d54aae6df35dd6c52c3814f745600587db11e12fe7f3ed02331aabd89->enter($__internal_060d9e3d54aae6df35dd6c52c3814f745600587db11e12fe7f3ed02331aabd89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                                <form  enctype=\"multipart/form-data\" class=\"cmxform form-horizontal tasi-form\" id=\"commentForm\" method=\"POST\" action=\"\" novalidate=\"novalidate\">
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
                                                    <div class=\"dropzone\" id=\"dropzone\">
                                                    <div class=\"fallback\">
                                                        <input id=\"image-input\" type=\"file\" multiple=\"multiple\" name=\"image\">
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Propriétaire -->

                                    <h4>Informations du propriétaire</h4>

                                    <div class=\"form-group\">
                                        <label for=\"cname\" class=\"control-label col-lg-2\">Adresse email</label>
                                        <div class=\"col-lg-9\">
                                            <input class=\"form-control\" id=\"cname\" name=\"mailprop\" type=\"text\" required=\"\" aria-required=\"true\">
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label for=\"cname\" class=\"control-label col-lg-2\">Mot de passe</label>
                                        <div class=\"col-lg-9\">
                                            <input class=\"form-control\" id=\"cname\" name=\"passwordprop\" type=\"text\" required=\"\" aria-required=\"true\">
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
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 187
            echo "                    <tr class=\"gradeA\">
                        <td>";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nomBien", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "type", array()), "libelle", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 190
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "localite", array()), "libelle", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixlocation", array()), "html", null, true);
            echo "</td>
                        <td><img src=\"data:image/png;base64,";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["bien"], "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\"></td>
                        ";
            // line 193
            if (($this->getAttribute($context["bien"], "etat", array()) == 1)) {
                // line 194
                echo "                        <td>Disponible</td>
                        ";
            } else {
                // line 196
                echo "                        <td>Dèja occupé</td>
                        ";
            }
            // line 198
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
        // line 206
        echo "                </tbody>
            </table>
        </div>
            <!-- end: page -->

    </div> <!-- end Panel -->

    </div> <!-- container -->
                               
</div>

";
        
        $__internal_060d9e3d54aae6df35dd6c52c3814f745600587db11e12fe7f3ed02331aabd89->leave($__internal_060d9e3d54aae6df35dd6c52c3814f745600587db11e12fe7f3ed02331aabd89_prof);

        
        $__internal_0bea5e2c89ff8b3506bb5e176f784b185f091ff054f363f75b85a403279ce905->leave($__internal_0bea5e2c89ff8b3506bb5e176f784b185f091ff054f363f75b85a403279ce905_prof);

    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        $__internal_5cfffaff72cf228e6548a86af22a7c9c57509f14dea274663d6858e4183d566b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cfffaff72cf228e6548a86af22a7c9c57509f14dea274663d6858e4183d566b->enter($__internal_5cfffaff72cf228e6548a86af22a7c9c57509f14dea274663d6858e4183d566b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_6e2c924fc0f8a4645635c8b8f1ab2f779e3f15b017581eb33fdb8d0ce6a614e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e2c924fc0f8a4645635c8b8f1ab2f779e3f15b017581eb33fdb8d0ce6a614e8->enter($__internal_6e2c924fc0f8a4645635c8b8f1ab2f779e3f15b017581eb33fdb8d0ce6a614e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

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
        
        $__internal_6e2c924fc0f8a4645635c8b8f1ab2f779e3f15b017581eb33fdb8d0ce6a614e8->leave($__internal_6e2c924fc0f8a4645635c8b8f1ab2f779e3f15b017581eb33fdb8d0ce6a614e8_prof);

        
        $__internal_5cfffaff72cf228e6548a86af22a7c9c57509f14dea274663d6858e4183d566b->leave($__internal_5cfffaff72cf228e6548a86af22a7c9c57509f14dea274663d6858e4183d566b_prof);

    }

    // line 219
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_482bdcb60b2a99ecc7fb6e61f162a5464bc8996a1a9b49a2dfd3479fdb98aaa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_482bdcb60b2a99ecc7fb6e61f162a5464bc8996a1a9b49a2dfd3479fdb98aaa3->enter($__internal_482bdcb60b2a99ecc7fb6e61f162a5464bc8996a1a9b49a2dfd3479fdb98aaa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_ec398f7f1c6925cdda35bacf1ae67f279a120420b7f8e730cc3e4b3ead3d9574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec398f7f1c6925cdda35bacf1ae67f279a120420b7f8e730cc3e4b3ead3d9574->enter($__internal_ec398f7f1c6925cdda35bacf1ae67f279a120420b7f8e730cc3e4b3ead3d9574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 220
        echo "
    <!-- Datatables-->
        <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>

        <!-- Datatable init js -->
        <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/datatables.init.js"), "html", null, true);
        echo "\"></script>  

        <script type=\"text/javascript\">
            
        </script>
        <!--multiselect-->
        <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/select2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.quicksearch.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 241
        echo "
        <!-- Page Specific JS Libraries -->
        <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/dropzone/dist/dropzone.js"), "html", null, true);
        echo "\"></script> 
        <script type=\"text/javascript\">

            Dropzone.autoDiscover = false;
            var dz = new Dropzone('#dropzone', {
                url: '/',
                autoProcessQueue: false
            });
            var files = [];
            dz.on('addedfile', function(file) {
                files.push(file);
            });
            var \$form = \$('#commentForm');
            \$form.on('submit', function(event) {
                var data = new FormData();
                files.forEach(function(file) {
                    data.append('image', file);
                });
                event.preventDefault();
                var serialized = \$form.serializeArray();
                serialized.forEach(function(input) {
                    data.append(input.name, input.value);
                });
                \$.ajax({
                    url: \$form.attr('action'),
                    method: 'POST',
                    data: data,
                    contentType: false,
                    processData: false,
                    success: function(){
                        window.location.href = \"";
        // line 273
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bien");
        echo "\"
                    },
                    error: function(res, stat, error) {
                        console.log(error);
                    }
                });
            });
        </script>

        <script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/test.js"), "html", null, true);
        echo "\"></script>

        <script>
        \$(function(){

        })

        function loadLocalite(){
            \$.ajax({

                url: \"";
        // line 292
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
        // line 313
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
        // line 349
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
        
        $__internal_ec398f7f1c6925cdda35bacf1ae67f279a120420b7f8e730cc3e4b3ead3d9574->leave($__internal_ec398f7f1c6925cdda35bacf1ae67f279a120420b7f8e730cc3e4b3ead3d9574_prof);

        
        $__internal_482bdcb60b2a99ecc7fb6e61f162a5464bc8996a1a9b49a2dfd3479fdb98aaa3->leave($__internal_482bdcb60b2a99ecc7fb6e61f162a5464bc8996a1a9b49a2dfd3479fdb98aaa3_prof);

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
        return array (  512 => 349,  473 => 313,  449 => 292,  436 => 282,  424 => 273,  391 => 243,  387 => 241,  382 => 234,  378 => 233,  374 => 232,  365 => 226,  359 => 223,  355 => 222,  351 => 220,  342 => 219,  324 => 15,  320 => 14,  314 => 11,  310 => 10,  304 => 7,  301 => 6,  292 => 5,  271 => 206,  258 => 198,  254 => 196,  250 => 194,  248 => 193,  244 => 192,  240 => 191,  236 => 190,  232 => 189,  228 => 188,  225 => 187,  221 => 186,  56 => 23,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
                                <form  enctype=\"multipart/form-data\" class=\"cmxform form-horizontal tasi-form\" id=\"commentForm\" method=\"POST\" action=\"\" novalidate=\"novalidate\">
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
                                                    <div class=\"dropzone\" id=\"dropzone\">
                                                    <div class=\"fallback\">
                                                        <input id=\"image-input\" type=\"file\" multiple=\"multiple\" name=\"image\">
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Propriétaire -->

                                    <h4>Informations du propriétaire</h4>

                                    <div class=\"form-group\">
                                        <label for=\"cname\" class=\"control-label col-lg-2\">Adresse email</label>
                                        <div class=\"col-lg-9\">
                                            <input class=\"form-control\" id=\"cname\" name=\"mailprop\" type=\"text\" required=\"\" aria-required=\"true\">
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label for=\"cname\" class=\"control-label col-lg-2\">Mot de passe</label>
                                        <div class=\"col-lg-9\">
                                            <input class=\"form-control\" id=\"cname\" name=\"passwordprop\" type=\"text\" required=\"\" aria-required=\"true\">
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
        <script type=\"text/javascript\">

            Dropzone.autoDiscover = false;
            var dz = new Dropzone('#dropzone', {
                url: '/',
                autoProcessQueue: false
            });
            var files = [];
            dz.on('addedfile', function(file) {
                files.push(file);
            });
            var \$form = \$('#commentForm');
            \$form.on('submit', function(event) {
                var data = new FormData();
                files.forEach(function(file) {
                    data.append('image', file);
                });
                event.preventDefault();
                var serialized = \$form.serializeArray();
                serialized.forEach(function(input) {
                    data.append(input.name, input.value);
                });
                \$.ajax({
                    url: \$form.attr('action'),
                    method: 'POST',
                    data: data,
                    contentType: false,
                    processData: false,
                    success: function(){
                        window.location.href = \"{{path('bien')}}\"
                    },
                    error: function(res, stat, error) {
                        console.log(error);
                    }
                });
            });
        </script>

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
