<?php

/* SNTDarmankoBundle:admin:pdfBien.html.twig */
class __TwigTemplate_4b78030c3f504748a672f0f57c6994da1168f2d634b0b37550d79baeaf8368a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SNTDarmankoBundle:admin:pdfBien.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2970dd92a2f8d437b6eaefc9d40a05aa2d4ef128f9be478c2ddca9cc2dba3ec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2970dd92a2f8d437b6eaefc9d40a05aa2d4ef128f9be478c2ddca9cc2dba3ec6->enter($__internal_2970dd92a2f8d437b6eaefc9d40a05aa2d4ef128f9be478c2ddca9cc2dba3ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:pdfBien.html.twig"));

        $__internal_0ddaa05d038ecf75c5ebce5985fc7125a9ff6745723070b83fbe681749f088ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ddaa05d038ecf75c5ebce5985fc7125a9ff6745723070b83fbe681749f088ca->enter($__internal_0ddaa05d038ecf75c5ebce5985fc7125a9ff6745723070b83fbe681749f088ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:pdfBien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2970dd92a2f8d437b6eaefc9d40a05aa2d4ef128f9be478c2ddca9cc2dba3ec6->leave($__internal_2970dd92a2f8d437b6eaefc9d40a05aa2d4ef128f9be478c2ddca9cc2dba3ec6_prof);

        
        $__internal_0ddaa05d038ecf75c5ebce5985fc7125a9ff6745723070b83fbe681749f088ca->leave($__internal_0ddaa05d038ecf75c5ebce5985fc7125a9ff6745723070b83fbe681749f088ca_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5af957d99ac5dd59513b0970efdc7025ccbf6e98f490c85f04464d48d7342bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5af957d99ac5dd59513b0970efdc7025ccbf6e98f490c85f04464d48d7342bd->enter($__internal_d5af957d99ac5dd59513b0970efdc7025ccbf6e98f490c85f04464d48d7342bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_83d43b15db49689b735fc0f1c823bba5b05b9d9b9eb46e215346e7b8a06ed68a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83d43b15db49689b735fc0f1c823bba5b05b9d9b9eb46e215346e7b8a06ed68a->enter($__internal_83d43b15db49689b735fc0f1c823bba5b05b9d9b9eb46e215346e7b8a06ed68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_83d43b15db49689b735fc0f1c823bba5b05b9d9b9eb46e215346e7b8a06ed68a->leave($__internal_83d43b15db49689b735fc0f1c823bba5b05b9d9b9eb46e215346e7b8a06ed68a_prof);

        
        $__internal_d5af957d99ac5dd59513b0970efdc7025ccbf6e98f490c85f04464d48d7342bd->leave($__internal_d5af957d99ac5dd59513b0970efdc7025ccbf6e98f490c85f04464d48d7342bd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a7952176624ec64e9edc40fb0dbc14badd2a0b8db9e1a25feda5dc26059006a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a7952176624ec64e9edc40fb0dbc14badd2a0b8db9e1a25feda5dc26059006a->enter($__internal_1a7952176624ec64e9edc40fb0dbc14badd2a0b8db9e1a25feda5dc26059006a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fbb258d102930c6d7db65a29cbbf24970d5e2fa28e3742843ac61017b8d8989c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbb258d102930c6d7db65a29cbbf24970d5e2fa28e3742843ac61017b8d8989c->enter($__internal_fbb258d102930c6d7db65a29cbbf24970d5e2fa28e3742843ac61017b8d8989c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\" style=\"font-family:Goudy Old style; color:grey; \">
    <center>
        <h2 class=\"text-info\"><i>Darmanko Immobilier contrat de mise en location</i></h2>
        <hr style=\"border:solid 2px;\">
        
    </center>
    <br>
     <center><i><h4 class=\" bg-info text-dark\" >Information sur le proprietaire</h4></i></center>
    <i><div class=\"card\">
        <div class=\"card-body\">
            <p><B>Nom complet </B>: ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), "proprietaire", array()), "nomComplet", array()), "html", null, true);
        echo " </p>
            <p><B>Numéro de de pièce</B>: ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), "proprietaire", array()), "numpiece", array()), "html", null, true);
        echo " </p>
            <p><B>Adresse</B>:  ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), "proprietaire", array()), "adresse", array()), "html", null, true);
        echo "</p>
            <p><B> Tel</B>:  ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), "proprietaire", array()), "tel", array()), "html", null, true);
        echo " </p>
            <p><B> Email</B>:  ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), "proprietaire", array()), "email", array()), "html", null, true);
        echo " </p>
            <p><B> Code Banque</B>:  ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), "proprietaire", array()), "codebanque", array()), "html", null, true);
        echo " </p>
        </div>
    </div></i>
    
    <br>
     <center><i><h4 class=\" bg-info text-dark\" >Information sur le bien</h4></i></center>
 
     <i><div class=\"card\">
        <div class=\"card-body\">
        
            <p><B>Nom du bien</B>   :";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), "nomBien", array()), "html", null, true);
        echo "</p>
            <p><B>Type du bien</B>  : ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), "type", array()), "libelle", array()), "html", null, true);
        echo "</p>
            <p><B>Localité du bien</B>  : ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), "localite", array()), "libelle", array()), "html", null, true);
        echo "</p>
            <p><B>Prix location</B>  : ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), "prixLocation", array()), "html", null, true);
        echo "</p>
            <p><B>Description du bien</B>  :";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), "description", array()), "html", null, true);
        echo " </p>
            
        </div>
    </div> </i>
    <br>
      <center><i><h4 class=\" bg-info text-dark\" >Voici les termes du contrat</h4></i></center>
      <i><div class=\"card\">
        <div class=\"card-body\">
            
            <p><B>Texte du contrat</B>: Le propriétaire qui loue un logement non conforme aux normes de sécurité, de salubrité et d'habitabilité risque de se voir contraindre d’effectuer des travaux, voire de payer des dommages et intérêts au locataire.
            La loi définit, tant au niveau fédéral que régional, des normes minimales de sécurité, de salubrité et d'habitabilité que tout logement en location doit respecter lorsqu'il doit servir de résidence principale au locataire.
            En cas de logement non conforme, le locataire peut poursuivre le propriétaire.
Si le locataire qui s’installe dans un logement constate un manquement aux exigences minimales de décence définies par la loi, il doit effectuer une demande écrite de mise en conformité du logement loué.     </div></div> </i>
<br>

<br><br>
</div>
";
        
        $__internal_fbb258d102930c6d7db65a29cbbf24970d5e2fa28e3742843ac61017b8d8989c->leave($__internal_fbb258d102930c6d7db65a29cbbf24970d5e2fa28e3742843ac61017b8d8989c_prof);

        
        $__internal_1a7952176624ec64e9edc40fb0dbc14badd2a0b8db9e1a25feda5dc26059006a->leave($__internal_1a7952176624ec64e9edc40fb0dbc14badd2a0b8db9e1a25feda5dc26059006a_prof);

    }

    public function getTemplateName()
    {
        return "SNTDarmankoBundle:admin:pdfBien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 35,  124 => 34,  120 => 33,  116 => 32,  112 => 31,  99 => 21,  95 => 20,  91 => 19,  87 => 18,  83 => 17,  79 => 16,  67 => 6,  58 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}{% endblock %}

{% block body %}
<div class=\"container\" style=\"font-family:Goudy Old style; color:grey; \">
    <center>
        <h2 class=\"text-info\"><i>Darmanko Immobilier contrat de mise en location</i></h2>
        <hr style=\"border:solid 2px;\">
        
    </center>
    <br>
     <center><i><h4 class=\" bg-info text-dark\" >Information sur le proprietaire</h4></i></center>
    <i><div class=\"card\">
        <div class=\"card-body\">
            <p><B>Nom complet </B>: {{biens.proprietaire.nomComplet}} </p>
            <p><B>Numéro de de pièce</B>: {{biens.proprietaire.numpiece}} </p>
            <p><B>Adresse</B>:  {{biens.proprietaire.adresse}}</p>
            <p><B> Tel</B>:  {{biens.proprietaire.tel}} </p>
            <p><B> Email</B>:  {{biens.proprietaire.email}} </p>
            <p><B> Code Banque</B>:  {{biens.proprietaire.codebanque}} </p>
        </div>
    </div></i>
    
    <br>
     <center><i><h4 class=\" bg-info text-dark\" >Information sur le bien</h4></i></center>
 
     <i><div class=\"card\">
        <div class=\"card-body\">
        
            <p><B>Nom du bien</B>   :{{biens.nomBien}}</p>
            <p><B>Type du bien</B>  : {{biens.type.libelle}}</p>
            <p><B>Localité du bien</B>  : {{biens.localite.libelle}}</p>
            <p><B>Prix location</B>  : {{biens.prixLocation}}</p>
            <p><B>Description du bien</B>  :{{biens.description}} </p>
            
        </div>
    </div> </i>
    <br>
      <center><i><h4 class=\" bg-info text-dark\" >Voici les termes du contrat</h4></i></center>
      <i><div class=\"card\">
        <div class=\"card-body\">
            
            <p><B>Texte du contrat</B>: Le propriétaire qui loue un logement non conforme aux normes de sécurité, de salubrité et d'habitabilité risque de se voir contraindre d’effectuer des travaux, voire de payer des dommages et intérêts au locataire.
            La loi définit, tant au niveau fédéral que régional, des normes minimales de sécurité, de salubrité et d'habitabilité que tout logement en location doit respecter lorsqu'il doit servir de résidence principale au locataire.
            En cas de logement non conforme, le locataire peut poursuivre le propriétaire.
Si le locataire qui s’installe dans un logement constate un manquement aux exigences minimales de décence définies par la loi, il doit effectuer une demande écrite de mise en conformité du logement loué.     </div></div> </i>
<br>

<br><br>
</div>
{% endblock %}", "SNTDarmankoBundle:admin:pdfBien.html.twig", "/var/www/html/perso/Darmanko/src/SNT/DarmankoBundle/Resources/views/admin/pdfBien.html.twig");
    }
}
