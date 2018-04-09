<?php

/* SNTDarmankoBundle:reservation:detail.html.twig */
class __TwigTemplate_0c2d257abe1171066910d0989ddd167017f26807d17cd5f248447125ada0fafe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::template.html.twig", "SNTDarmankoBundle:reservation:detail.html.twig", 1);
        $this->blocks = array(
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
        $__internal_a8a7f07226cb13dfbf1e0f25b3395b7a6164d006c6fce74e4478b74941d7a32b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8a7f07226cb13dfbf1e0f25b3395b7a6164d006c6fce74e4478b74941d7a32b->enter($__internal_a8a7f07226cb13dfbf1e0f25b3395b7a6164d006c6fce74e4478b74941d7a32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:reservation:detail.html.twig"));

        $__internal_316d0731bd70c95746e161d46e63b03c86d480bf962f991dda933426490d616b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_316d0731bd70c95746e161d46e63b03c86d480bf962f991dda933426490d616b->enter($__internal_316d0731bd70c95746e161d46e63b03c86d480bf962f991dda933426490d616b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:reservation:detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8a7f07226cb13dfbf1e0f25b3395b7a6164d006c6fce74e4478b74941d7a32b->leave($__internal_a8a7f07226cb13dfbf1e0f25b3395b7a6164d006c6fce74e4478b74941d7a32b_prof);

        
        $__internal_316d0731bd70c95746e161d46e63b03c86d480bf962f991dda933426490d616b->leave($__internal_316d0731bd70c95746e161d46e63b03c86d480bf962f991dda933426490d616b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_8cd7d25e89ce71eb0501e8601c0655d9056789e571d3745b6a04ea359633c4ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cd7d25e89ce71eb0501e8601c0655d9056789e571d3745b6a04ea359633c4ef->enter($__internal_8cd7d25e89ce71eb0501e8601c0655d9056789e571d3745b6a04ea359633c4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_520797d5bf7201c8f4f8114f9513bdab6e9d52840fb172fe13786eab55612d6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_520797d5bf7201c8f4f8114f9513bdab6e9d52840fb172fe13786eab55612d6f->enter($__internal_520797d5bf7201c8f4f8114f9513bdab6e9d52840fb172fe13786eab55612d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<!-- Page-head -->
<div class=\"page-head\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h3>Détails du produit</h3>
            </div>
            
        </div>
    </div>
</div>
<!-- Page-head -->

<div class=\"space60\"></div>

<!-- Portfolio-single Content -->
<div class=\"container\">
    <div class=\"row\">
        <div class=\"item works-content\">
            <div class=\"row\">
                <div class=\"col-md-9\">
                    <div class=\"works-overlay\">
                        <div id=\"psingle-slider\" class=\"flexslider\">
                            <ul class=\"slides\">
                            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["bien"] ?? $this->getContext($context, "bien")), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["images"]) {
            // line 29
            echo "                                <li>
                                    <img style=\"height: 500px;\" src=\"data:image/png;base64,";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["images"], "image", array()), "html", null, true);
            echo "\" alt=\"\"/>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['images'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                            </ul>
                            <div class=\"shadow-left-big\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 project-content\">
                    <div class=\"description\">
                        <h4>Description du bien</h4>
                        <p>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["bien"] ?? $this->getContext($context, "bien")), "description", array()), "html", null, true);
        echo "</p>
                        <p>A prendre pour ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["bien"] ?? $this->getContext($context, "bien")), "prixLocation", array()), "html", null, true);
        echo "FCFA</p>
                        <button id=\"btnReserver\" class=\"btn btn-primary\">Réserver</button>
                    </div>
                    <div class=\"connexion\" style=\"display: none;\">
                        <h4>Réservation du bien</h4>
                        <form  method=\"POST\" class=\"form\">
                            <input type=\"text\" name=\"login\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer votre email\"><div class=\"space20\"></div>
                            <input type=\"password\" name=\"password\" class=\"form-control mx-sm-1\" required placeholder=\"mot de passe\"><div class=\"space20\"></div>
                            <button type=\"submit\" name=\"submit\" class=\"btn btn-primary col-lg-12\">Réserver</button>.
                            <a id=\"btnCompte\" class=\"btn btn-danger col-lg-12\">Créer un compte</a>
                        </form><br>
                    </div>
                    <div class=\"inscription\" style=\"display: none;\">
                        <h4>Création de compte</h4>
                        ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                            <div class=\"form-group col-12\">
                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numpiece", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Votre numero de pièce")));
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomComplet", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Votre nom")));
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Votre numero de tel")));
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adress", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Votre adresse")));
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Adresse email")));
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "motdepasse", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Mot de passe")));
        echo "
                            </div>
                            <input type=\"submit\" value=\"Reserver\" class=\"btn btn-primary col-lg-12\">
                        ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "<br>
                        <a id=\"btnReserv\" class=\"btn btn-danger col-lg-12\">S'identifier</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"space60\"></div>

    <h3>Biens similaires </h3>

    <div class=\"space20\"></div>
</div>

<section id=\"portfolio\" class=\"container no-padding\">
    <div class=\"portfolio-inner nport\">
        <div id=\"folio\" class=\"isotope col-md-12 no-padding\">
        ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["similaire"]);
        foreach ($context['_seq'] as $context["_key"] => $context["similaire"]) {
            // line 95
            echo "            <div class=\"folio-item col-md-3 no-padding isotope-item ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["similaire"], "type", array()), "libelle", array()), "html", null, true);
            echo "\">
                <div class=\"item works-content\">
                    <div class=\"works-overlay\">
                        <img style=\"height: 200px;\" class=\"img-responsive\" src=\"data:image/png;base64,";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["similaire"], "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" alt=\"\"/>
                        <span>
                            <div class=\"zoom\">
                                <div class=\"zoom-info\">
                                    <a class=\"lightbox-popup\" href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["similaire"], "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\">Aggrandir</a>
                                    <a href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail", array("id" => $this->getAttribute($context["similaire"], "id", array()))), "html", null, true);
            echo "\">Voir détail</a>
                                </div>
                            </div>
                        </span>
                    </div>
                    <h4>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["similaire"], "nomBien", array()), "html", null, true);
            echo "<span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["similaire"], "prixLocation", array()), "html", null, true);
            echo "</span></h4>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['similaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "        </div>
        <div class=\"space20\"></div>
    </div>
</section>
<!-- Portfolio-single Content -->

<!-- Related Projects -->
<div class=\"space60\"></div>

";
        
        $__internal_520797d5bf7201c8f4f8114f9513bdab6e9d52840fb172fe13786eab55612d6f->leave($__internal_520797d5bf7201c8f4f8114f9513bdab6e9d52840fb172fe13786eab55612d6f_prof);

        
        $__internal_8cd7d25e89ce71eb0501e8601c0655d9056789e571d3745b6a04ea359633c4ef->leave($__internal_8cd7d25e89ce71eb0501e8601c0655d9056789e571d3745b6a04ea359633c4ef_prof);

    }

    // line 123
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_fff25ff684ef8403e48ead33ffeb6c3b0ff84025090c097c10ee5063b8410080 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fff25ff684ef8403e48ead33ffeb6c3b0ff84025090c097c10ee5063b8410080->enter($__internal_fff25ff684ef8403e48ead33ffeb6c3b0ff84025090c097c10ee5063b8410080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_27328c652e064323fee07afc42a1b51d565faf2a9dc5b4a0ddce3865d4dcc33b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27328c652e064323fee07afc42a1b51d565faf2a9dc5b4a0ddce3865d4dcc33b->enter($__internal_27328c652e064323fee07afc42a1b51d565faf2a9dc5b4a0ddce3865d4dcc33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 124
        echo "

";
        
        $__internal_27328c652e064323fee07afc42a1b51d565faf2a9dc5b4a0ddce3865d4dcc33b->leave($__internal_27328c652e064323fee07afc42a1b51d565faf2a9dc5b4a0ddce3865d4dcc33b_prof);

        
        $__internal_fff25ff684ef8403e48ead33ffeb6c3b0ff84025090c097c10ee5063b8410080->leave($__internal_fff25ff684ef8403e48ead33ffeb6c3b0ff84025090c097c10ee5063b8410080_prof);

    }

    public function getTemplateName()
    {
        return "SNTDarmankoBundle:reservation:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 124,  247 => 123,  228 => 112,  216 => 108,  208 => 103,  203 => 102,  196 => 98,  189 => 95,  185 => 94,  164 => 76,  158 => 73,  152 => 70,  146 => 67,  140 => 64,  134 => 61,  128 => 58,  123 => 56,  106 => 42,  102 => 41,  92 => 33,  83 => 30,  80 => 29,  76 => 28,  50 => 4,  41 => 3,  11 => 1,);
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

{% block content %}
<!-- Page-head -->
<div class=\"page-head\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h3>Détails du produit</h3>
            </div>
            
        </div>
    </div>
</div>
<!-- Page-head -->

<div class=\"space60\"></div>

<!-- Portfolio-single Content -->
<div class=\"container\">
    <div class=\"row\">
        <div class=\"item works-content\">
            <div class=\"row\">
                <div class=\"col-md-9\">
                    <div class=\"works-overlay\">
                        <div id=\"psingle-slider\" class=\"flexslider\">
                            <ul class=\"slides\">
                            {% for images in bien.images %}
                                <li>
                                    <img style=\"height: 500px;\" src=\"data:image/png;base64,{{ images.image }}\" alt=\"\"/>
                                </li>
                            {% endfor %}
                            </ul>
                            <div class=\"shadow-left-big\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 project-content\">
                    <div class=\"description\">
                        <h4>Description du bien</h4>
                        <p>{{ bien.description }}</p>
                        <p>A prendre pour {{bien.prixLocation}}FCFA</p>
                        <button id=\"btnReserver\" class=\"btn btn-primary\">Réserver</button>
                    </div>
                    <div class=\"connexion\" style=\"display: none;\">
                        <h4>Réservation du bien</h4>
                        <form  method=\"POST\" class=\"form\">
                            <input type=\"text\" name=\"login\" class=\"form-control mx-sm-1\" required placeholder=\"Entrer votre email\"><div class=\"space20\"></div>
                            <input type=\"password\" name=\"password\" class=\"form-control mx-sm-1\" required placeholder=\"mot de passe\"><div class=\"space20\"></div>
                            <button type=\"submit\" name=\"submit\" class=\"btn btn-primary col-lg-12\">Réserver</button>.
                            <a id=\"btnCompte\" class=\"btn btn-danger col-lg-12\">Créer un compte</a>
                        </form><br>
                    </div>
                    <div class=\"inscription\" style=\"display: none;\">
                        <h4>Création de compte</h4>
                        {{ form_start(form) }}
                            <div class=\"form-group col-12\">
                                {{form_widget(form.numpiece, {\"attr\": {\"class\": \"form-control\", \"placeholder\": \"Votre numero de pièce\"}})}}
                            </div>
                            <div class=\"form-group\">
                                {{form_widget(form.nomComplet, {\"attr\": {\"class\": \"form-control\", \"placeholder\": \"Votre nom\"}})}}
                            </div>
                            <div class=\"form-group\">
                                {{form_widget(form.tel, {\"attr\": {\"class\": \"form-control\", \"placeholder\": \"Votre numero de tel\"}})}}
                            </div>
                            <div class=\"form-group\">
                                {{form_widget(form.adress, {\"attr\": {\"class\": \"form-control\", \"placeholder\": \"Votre adresse\"}})}}
                            </div>
                            <div class=\"form-group\">
                                {{form_widget(form.email, {\"attr\": {\"class\": \"form-control\",\"placeholder\": \"Adresse email\"}})}}
                            </div>
                            <div class=\"form-group\">
                                {{form_widget(form.motdepasse, {\"attr\": {\"class\": \"form-control\", \"placeholder\": \"Mot de passe\"}})}}
                            </div>
                            <input type=\"submit\" value=\"Reserver\" class=\"btn btn-primary col-lg-12\">
                        {{form_end(form)}}<br>
                        <a id=\"btnReserv\" class=\"btn btn-danger col-lg-12\">S'identifier</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"space60\"></div>

    <h3>Biens similaires </h3>

    <div class=\"space20\"></div>
</div>

<section id=\"portfolio\" class=\"container no-padding\">
    <div class=\"portfolio-inner nport\">
        <div id=\"folio\" class=\"isotope col-md-12 no-padding\">
        {% for similaire in similaire %}
            <div class=\"folio-item col-md-3 no-padding isotope-item {{ similaire.type.libelle }}\">
                <div class=\"item works-content\">
                    <div class=\"works-overlay\">
                        <img style=\"height: 200px;\" class=\"img-responsive\" src=\"data:image/png;base64,{{ similaire.images[0].image }}\" alt=\"\"/>
                        <span>
                            <div class=\"zoom\">
                                <div class=\"zoom-info\">
                                    <a class=\"lightbox-popup\" href=\"{{asset('image/')}}{{similaire.images[0].image}}\">Aggrandir</a>
                                    <a href=\"{{path('detail', {'id':similaire.id} )}}\">Voir détail</a>
                                </div>
                            </div>
                        </span>
                    </div>
                    <h4>{{ similaire.nomBien }}<span>{{ similaire.prixLocation }}</span></h4>
                </div>
            </div>
        {% endfor %}
        </div>
        <div class=\"space20\"></div>
    </div>
</section>
<!-- Portfolio-single Content -->

<!-- Related Projects -->
<div class=\"space60\"></div>

{% endblock %}

{% block javascript %}


{% endblock %}", "SNTDarmankoBundle:reservation:detail.html.twig", "/var/www/html/perso/Darmanko/src/SNT/DarmankoBundle/Resources/views/reservation/detail.html.twig");
    }
}
