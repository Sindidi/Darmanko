<?php

/* SNTDarmankoBundle:admin:lister.html.twig */
class __TwigTemplate_94b9e555c5304498b414888cddfe157ef030c11b0f9e8028da0729a9346919e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::template.html.twig", "SNTDarmankoBundle:admin:lister.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b2621ed3dfea6c59deac671b9a25c5dab08c4f89dd10ff6bba155b3a1e610b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b2621ed3dfea6c59deac671b9a25c5dab08c4f89dd10ff6bba155b3a1e610b2->enter($__internal_3b2621ed3dfea6c59deac671b9a25c5dab08c4f89dd10ff6bba155b3a1e610b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:lister.html.twig"));

        $__internal_e0db8a1f20e706a5d45650fc19d886039509a491aa6ea28b703e5190180119aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0db8a1f20e706a5d45650fc19d886039509a491aa6ea28b703e5190180119aa->enter($__internal_e0db8a1f20e706a5d45650fc19d886039509a491aa6ea28b703e5190180119aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b2621ed3dfea6c59deac671b9a25c5dab08c4f89dd10ff6bba155b3a1e610b2->leave($__internal_3b2621ed3dfea6c59deac671b9a25c5dab08c4f89dd10ff6bba155b3a1e610b2_prof);

        
        $__internal_e0db8a1f20e706a5d45650fc19d886039509a491aa6ea28b703e5190180119aa->leave($__internal_e0db8a1f20e706a5d45650fc19d886039509a491aa6ea28b703e5190180119aa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e83237e32f992bf1df9ee46682c17dc2a87cf06182dc01356c24e03e95cd8c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e83237e32f992bf1df9ee46682c17dc2a87cf06182dc01356c24e03e95cd8c6->enter($__internal_1e83237e32f992bf1df9ee46682c17dc2a87cf06182dc01356c24e03e95cd8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_743d04fc222448b5ad51e74290fd343b7ae2943d3576f2889de183b7d13c7fbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743d04fc222448b5ad51e74290fd343b7ae2943d3576f2889de183b7d13c7fbf->enter($__internal_743d04fc222448b5ad51e74290fd343b7ae2943d3576f2889de183b7d13c7fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Darmanko-Admin";
        
        $__internal_743d04fc222448b5ad51e74290fd343b7ae2943d3576f2889de183b7d13c7fbf->leave($__internal_743d04fc222448b5ad51e74290fd343b7ae2943d3576f2889de183b7d13c7fbf_prof);

        
        $__internal_1e83237e32f992bf1df9ee46682c17dc2a87cf06182dc01356c24e03e95cd8c6->leave($__internal_1e83237e32f992bf1df9ee46682c17dc2a87cf06182dc01356c24e03e95cd8c6_prof);

    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        $__internal_7897a38621d1eaf243f3d6b0b866f86c1afe71b71b8b8cfdbdb5965e5fc548b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7897a38621d1eaf243f3d6b0b866f86c1afe71b71b8b8cfdbdb5965e5fc548b8->enter($__internal_7897a38621d1eaf243f3d6b0b866f86c1afe71b71b8b8cfdbdb5965e5fc548b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_96f48009f3860bad4358e7a0450bc51f0996ba0dfcf4c831acc30bdca790011c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f48009f3860bad4358e7a0450bc51f0996ba0dfcf4c831acc30bdca790011c->enter($__internal_96f48009f3860bad4358e7a0450bc51f0996ba0dfcf4c831acc30bdca790011c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 6
        echo "
<link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css\">
<script charset=\"utf8\" src=\"//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js\"></script>

";
        
        $__internal_96f48009f3860bad4358e7a0450bc51f0996ba0dfcf4c831acc30bdca790011c->leave($__internal_96f48009f3860bad4358e7a0450bc51f0996ba0dfcf4c831acc30bdca790011c_prof);

        
        $__internal_7897a38621d1eaf243f3d6b0b866f86c1afe71b71b8b8cfdbdb5965e5fc548b8->leave($__internal_7897a38621d1eaf243f3d6b0b866f86c1afe71b71b8b8cfdbdb5965e5fc548b8_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_aa8f81be61dd5e60f1c335a7b67807afd5ca13a0aa2f282e15d2fefd775fcef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa8f81be61dd5e60f1c335a7b67807afd5ca13a0aa2f282e15d2fefd775fcef7->enter($__internal_aa8f81be61dd5e60f1c335a7b67807afd5ca13a0aa2f282e15d2fefd775fcef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c99030164e5eb18515bac201f02ec042d902f53ac5085d949a0b9bb1ab7b9f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c99030164e5eb18515bac201f02ec042d902f53ac5085d949a0b9bb1ab7b9f2a->enter($__internal_c99030164e5eb18515bac201f02ec042d902f53ac5085d949a0b9bb1ab7b9f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "<style>
    img{
        width: 50px;
    }
</style>
<div class=\"container\"><br>
    <div class=\"page-head\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h3>Liste des réservation</h3>
                </div>
                
            </div>
        </div>
    </div>
<!-- Page-head -->
<div class=\"space60\"></div>

    <div class=\"row\">
        <div class=\"col-lg-12\">
        <table class=\"table table-bordered table-striped\" id=\"myTable\">
            <thead>
                <tr class=\"success\">
                    <th>Nom Client</th>
                    <th>Adresse</th>
                    <th>Bien</th>
                    <th>Prix location</th>
                    <th>Localité Bien</th>
                    <th>Photo</th>
                    <th>Admin</th>    
                </tr>
            </thead>

            <tbody>
                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 50
            echo "                <tr>
                    <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "client", array()), "nomComplet", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "client", array()), "adress", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "nomBien", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "prixLocation", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "localite", array()), "libelle", array()), "html", null, true);
            echo "</td>
                    <td><img src=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\"></td>
                    <td><a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\">Détail</a></td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "            </tbody>
        
        </table>
        </div>
    </div>
</div>
";
        
        $__internal_c99030164e5eb18515bac201f02ec042d902f53ac5085d949a0b9bb1ab7b9f2a->leave($__internal_c99030164e5eb18515bac201f02ec042d902f53ac5085d949a0b9bb1ab7b9f2a_prof);

        
        $__internal_aa8f81be61dd5e60f1c335a7b67807afd5ca13a0aa2f282e15d2fefd775fcef7->leave($__internal_aa8f81be61dd5e60f1c335a7b67807afd5ca13a0aa2f282e15d2fefd775fcef7_prof);

    }

    public function getTemplateName()
    {
        return "SNTDarmankoBundle:admin:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 60,  161 => 57,  156 => 56,  152 => 55,  148 => 54,  144 => 53,  140 => 52,  136 => 51,  133 => 50,  129 => 49,  92 => 14,  83 => 13,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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

{% block title %}Darmanko-Admin{% endblock %}

{% block css %}

<link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css\">
<script charset=\"utf8\" src=\"//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js\"></script>

{% endblock %}


{% block content %}
<style>
    img{
        width: 50px;
    }
</style>
<div class=\"container\"><br>
    <div class=\"page-head\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h3>Liste des réservation</h3>
                </div>
                
            </div>
        </div>
    </div>
<!-- Page-head -->
<div class=\"space60\"></div>

    <div class=\"row\">
        <div class=\"col-lg-12\">
        <table class=\"table table-bordered table-striped\" id=\"myTable\">
            <thead>
                <tr class=\"success\">
                    <th>Nom Client</th>
                    <th>Adresse</th>
                    <th>Bien</th>
                    <th>Prix location</th>
                    <th>Localité Bien</th>
                    <th>Photo</th>
                    <th>Admin</th>    
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
                    <td><a href=\"{{path('reservation', {'id': reservation.id})}}\">Détail</a></td>
                </tr>
                {% endfor %}
            </tbody>
        
        </table>
        </div>
    </div>
</div>
{% endblock %}
", "SNTDarmankoBundle:admin:lister.html.twig", "/var/www/html/perso/Darmanko/src/SNT/DarmankoBundle/Resources/views/admin/lister.html.twig");
    }
}
