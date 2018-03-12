<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_83fb393ef15d18f63f88d841c13c382b8bcccb70da998eb81f9fe12aeb7da949 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b33c2c64e74c8499b6db97b69fc823ed49b027837853c2c9c2004d4fb90e651e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b33c2c64e74c8499b6db97b69fc823ed49b027837853c2c9c2004d4fb90e651e->enter($__internal_b33c2c64e74c8499b6db97b69fc823ed49b027837853c2c9c2004d4fb90e651e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_eaed1c03621d9bb0205a0f7ea4216b4bed7e2c379138f34025f2a56e6bc38e17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaed1c03621d9bb0205a0f7ea4216b4bed7e2c379138f34025f2a56e6bc38e17->enter($__internal_eaed1c03621d9bb0205a0f7ea4216b4bed7e2c379138f34025f2a56e6bc38e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('radio_label', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 220
        echo "
";
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('form_row', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('button_row', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('choice_row', $context, $blocks);
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('date_row', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('time_row', $context, $blocks);
        // line 251
        echo "
";
        // line 252
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('radio_row', $context, $blocks);
        // line 270
        echo "
";
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_b33c2c64e74c8499b6db97b69fc823ed49b027837853c2c9c2004d4fb90e651e->leave($__internal_b33c2c64e74c8499b6db97b69fc823ed49b027837853c2c9c2004d4fb90e651e_prof);

        
        $__internal_eaed1c03621d9bb0205a0f7ea4216b4bed7e2c379138f34025f2a56e6bc38e17->leave($__internal_eaed1c03621d9bb0205a0f7ea4216b4bed7e2c379138f34025f2a56e6bc38e17_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_54d7291a02155a94a8987578aed22862a8354e71936d2cb1094d3d5336bcd4bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54d7291a02155a94a8987578aed22862a8354e71936d2cb1094d3d5336bcd4bf->enter($__internal_54d7291a02155a94a8987578aed22862a8354e71936d2cb1094d3d5336bcd4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_5bddf45e77d26b96a5fe9bb0343ab4ac204d22d0b4e9610a50a4642e59247296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bddf45e77d26b96a5fe9bb0343ab4ac204d22d0b4e9610a50a4642e59247296->enter($__internal_5bddf45e77d26b96a5fe9bb0343ab4ac204d22d0b4e9610a50a4642e59247296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_5bddf45e77d26b96a5fe9bb0343ab4ac204d22d0b4e9610a50a4642e59247296->leave($__internal_5bddf45e77d26b96a5fe9bb0343ab4ac204d22d0b4e9610a50a4642e59247296_prof);

        
        $__internal_54d7291a02155a94a8987578aed22862a8354e71936d2cb1094d3d5336bcd4bf->leave($__internal_54d7291a02155a94a8987578aed22862a8354e71936d2cb1094d3d5336bcd4bf_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_174805564a935dd8ac19b7f027d15cc2625e8aa6171b837cfbed09c45a680075 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_174805564a935dd8ac19b7f027d15cc2625e8aa6171b837cfbed09c45a680075->enter($__internal_174805564a935dd8ac19b7f027d15cc2625e8aa6171b837cfbed09c45a680075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_dfb7f4c9ae3ad4bd3ade2221c6d656e9b0e6133c36d5384f12afde85bdabd885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfb7f4c9ae3ad4bd3ade2221c6d656e9b0e6133c36d5384f12afde85bdabd885->enter($__internal_dfb7f4c9ae3ad4bd3ade2221c6d656e9b0e6133c36d5384f12afde85bdabd885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_dfb7f4c9ae3ad4bd3ade2221c6d656e9b0e6133c36d5384f12afde85bdabd885->leave($__internal_dfb7f4c9ae3ad4bd3ade2221c6d656e9b0e6133c36d5384f12afde85bdabd885_prof);

        
        $__internal_174805564a935dd8ac19b7f027d15cc2625e8aa6171b837cfbed09c45a680075->leave($__internal_174805564a935dd8ac19b7f027d15cc2625e8aa6171b837cfbed09c45a680075_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_a8a9eceeb42b4759564c4260547eb33661955957b2d5993b3b84ae026cdc73d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8a9eceeb42b4759564c4260547eb33661955957b2d5993b3b84ae026cdc73d4->enter($__internal_a8a9eceeb42b4759564c4260547eb33661955957b2d5993b3b84ae026cdc73d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_7f64c2c897855dd29a1670bde6444343cc27c642e1ecd708c82e993bc64fa621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f64c2c897855dd29a1670bde6444343cc27c642e1ecd708c82e993bc64fa621->enter($__internal_7f64c2c897855dd29a1670bde6444343cc27c642e1ecd708c82e993bc64fa621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_7f64c2c897855dd29a1670bde6444343cc27c642e1ecd708c82e993bc64fa621->leave($__internal_7f64c2c897855dd29a1670bde6444343cc27c642e1ecd708c82e993bc64fa621_prof);

        
        $__internal_a8a9eceeb42b4759564c4260547eb33661955957b2d5993b3b84ae026cdc73d4->leave($__internal_a8a9eceeb42b4759564c4260547eb33661955957b2d5993b3b84ae026cdc73d4_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_813bff5b8b118a386fc0894e244a368f7c8d1455fe7e09ea1fb57dbb41b92018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_813bff5b8b118a386fc0894e244a368f7c8d1455fe7e09ea1fb57dbb41b92018->enter($__internal_813bff5b8b118a386fc0894e244a368f7c8d1455fe7e09ea1fb57dbb41b92018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_71b54cceb58209805f329862cb1aff372560e68413527c9f72402f529eb0c8c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71b54cceb58209805f329862cb1aff372560e68413527c9f72402f529eb0c8c0->enter($__internal_71b54cceb58209805f329862cb1aff372560e68413527c9f72402f529eb0c8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_4603996e2aad7ae1b4972f77e5bb85f2bc42e876e59d04706b056135a309b42f = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_1ee5db87fb57b63d81d4e66f07bbedb1bf51e5e12534233b9fe1a7aeb95f3496 = "{{") && ('' === $__internal_1ee5db87fb57b63d81d4e66f07bbedb1bf51e5e12534233b9fe1a7aeb95f3496 || 0 === strpos($__internal_4603996e2aad7ae1b4972f77e5bb85f2bc42e876e59d04706b056135a309b42f, $__internal_1ee5db87fb57b63d81d4e66f07bbedb1bf51e5e12534233b9fe1a7aeb95f3496)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_71b54cceb58209805f329862cb1aff372560e68413527c9f72402f529eb0c8c0->leave($__internal_71b54cceb58209805f329862cb1aff372560e68413527c9f72402f529eb0c8c0_prof);

        
        $__internal_813bff5b8b118a386fc0894e244a368f7c8d1455fe7e09ea1fb57dbb41b92018->leave($__internal_813bff5b8b118a386fc0894e244a368f7c8d1455fe7e09ea1fb57dbb41b92018_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_3bea351bf35fa84741f07c2429666556fd2c904386b356a2d00745e5b7953413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bea351bf35fa84741f07c2429666556fd2c904386b356a2d00745e5b7953413->enter($__internal_3bea351bf35fa84741f07c2429666556fd2c904386b356a2d00745e5b7953413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_4f3911aacb970900d77cff2fe1e0d4797b5ba256041f08eced5752dbbd08f61c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f3911aacb970900d77cff2fe1e0d4797b5ba256041f08eced5752dbbd08f61c->enter($__internal_4f3911aacb970900d77cff2fe1e0d4797b5ba256041f08eced5752dbbd08f61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_4f3911aacb970900d77cff2fe1e0d4797b5ba256041f08eced5752dbbd08f61c->leave($__internal_4f3911aacb970900d77cff2fe1e0d4797b5ba256041f08eced5752dbbd08f61c_prof);

        
        $__internal_3bea351bf35fa84741f07c2429666556fd2c904386b356a2d00745e5b7953413->leave($__internal_3bea351bf35fa84741f07c2429666556fd2c904386b356a2d00745e5b7953413_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_04127e12017485fe943e3918b0013c77740f3fa694f0f9a0abce098910da277d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04127e12017485fe943e3918b0013c77740f3fa694f0f9a0abce098910da277d->enter($__internal_04127e12017485fe943e3918b0013c77740f3fa694f0f9a0abce098910da277d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_fa3b03e9bfc597340269334df6191d76c59cd7708e3358ddd2f26455eb4d564f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa3b03e9bfc597340269334df6191d76c59cd7708e3358ddd2f26455eb4d564f->enter($__internal_fa3b03e9bfc597340269334df6191d76c59cd7708e3358ddd2f26455eb4d564f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_fa3b03e9bfc597340269334df6191d76c59cd7708e3358ddd2f26455eb4d564f->leave($__internal_fa3b03e9bfc597340269334df6191d76c59cd7708e3358ddd2f26455eb4d564f_prof);

        
        $__internal_04127e12017485fe943e3918b0013c77740f3fa694f0f9a0abce098910da277d->leave($__internal_04127e12017485fe943e3918b0013c77740f3fa694f0f9a0abce098910da277d_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_9024c1585a07f3163073ef5d00f7adc161e4fc73fc0b2c36d578c9a9e6147745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9024c1585a07f3163073ef5d00f7adc161e4fc73fc0b2c36d578c9a9e6147745->enter($__internal_9024c1585a07f3163073ef5d00f7adc161e4fc73fc0b2c36d578c9a9e6147745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_dacbeb1e06e10f68d1d8f0e58fe31be664422d0ae0a025f8e831ad7d167ab7c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dacbeb1e06e10f68d1d8f0e58fe31be664422d0ae0a025f8e831ad7d167ab7c5->enter($__internal_dacbeb1e06e10f68d1d8f0e58fe31be664422d0ae0a025f8e831ad7d167ab7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_dacbeb1e06e10f68d1d8f0e58fe31be664422d0ae0a025f8e831ad7d167ab7c5->leave($__internal_dacbeb1e06e10f68d1d8f0e58fe31be664422d0ae0a025f8e831ad7d167ab7c5_prof);

        
        $__internal_9024c1585a07f3163073ef5d00f7adc161e4fc73fc0b2c36d578c9a9e6147745->leave($__internal_9024c1585a07f3163073ef5d00f7adc161e4fc73fc0b2c36d578c9a9e6147745_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_dd871faa95aa447c1e4f41e9143e01f4c474fed59e06284b594ff0c0f13b0a88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd871faa95aa447c1e4f41e9143e01f4c474fed59e06284b594ff0c0f13b0a88->enter($__internal_dd871faa95aa447c1e4f41e9143e01f4c474fed59e06284b594ff0c0f13b0a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_e1f180b807dfb9c381d0d15b0198cb3357f11d5bd044062ebd30465cca8c22f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1f180b807dfb9c381d0d15b0198cb3357f11d5bd044062ebd30465cca8c22f3->enter($__internal_e1f180b807dfb9c381d0d15b0198cb3357f11d5bd044062ebd30465cca8c22f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_e1f180b807dfb9c381d0d15b0198cb3357f11d5bd044062ebd30465cca8c22f3->leave($__internal_e1f180b807dfb9c381d0d15b0198cb3357f11d5bd044062ebd30465cca8c22f3_prof);

        
        $__internal_dd871faa95aa447c1e4f41e9143e01f4c474fed59e06284b594ff0c0f13b0a88->leave($__internal_dd871faa95aa447c1e4f41e9143e01f4c474fed59e06284b594ff0c0f13b0a88_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_2ee362d58d6afd36671adfbc841fd66fd97a33f253d0e016f15f045c208eeb04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ee362d58d6afd36671adfbc841fd66fd97a33f253d0e016f15f045c208eeb04->enter($__internal_2ee362d58d6afd36671adfbc841fd66fd97a33f253d0e016f15f045c208eeb04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_b78590a471e396c031ec5fb56b9a00d6d8d5bd417bb9faea15a3c6e7e36cbca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b78590a471e396c031ec5fb56b9a00d6d8d5bd417bb9faea15a3c6e7e36cbca2->enter($__internal_b78590a471e396c031ec5fb56b9a00d6d8d5bd417bb9faea15a3c6e7e36cbca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_b78590a471e396c031ec5fb56b9a00d6d8d5bd417bb9faea15a3c6e7e36cbca2->leave($__internal_b78590a471e396c031ec5fb56b9a00d6d8d5bd417bb9faea15a3c6e7e36cbca2_prof);

        
        $__internal_2ee362d58d6afd36671adfbc841fd66fd97a33f253d0e016f15f045c208eeb04->leave($__internal_2ee362d58d6afd36671adfbc841fd66fd97a33f253d0e016f15f045c208eeb04_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_c3ad6087039cc40e18e41ba4d3bfaa25b6c3dbdf9744f4e354f79ac06550b7e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3ad6087039cc40e18e41ba4d3bfaa25b6c3dbdf9744f4e354f79ac06550b7e5->enter($__internal_c3ad6087039cc40e18e41ba4d3bfaa25b6c3dbdf9744f4e354f79ac06550b7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_38ca5b596e9f5868b2f5386de812e72bdfbcc68ec89f283f43f006da2f9c319c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38ca5b596e9f5868b2f5386de812e72bdfbcc68ec89f283f43f006da2f9c319c->enter($__internal_38ca5b596e9f5868b2f5386de812e72bdfbcc68ec89f283f43f006da2f9c319c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_38ca5b596e9f5868b2f5386de812e72bdfbcc68ec89f283f43f006da2f9c319c->leave($__internal_38ca5b596e9f5868b2f5386de812e72bdfbcc68ec89f283f43f006da2f9c319c_prof);

        
        $__internal_c3ad6087039cc40e18e41ba4d3bfaa25b6c3dbdf9744f4e354f79ac06550b7e5->leave($__internal_c3ad6087039cc40e18e41ba4d3bfaa25b6c3dbdf9744f4e354f79ac06550b7e5_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_ad264fb54a20d8777574854ba77d33ddc8d2fa3a3bda404f7f6d7c4c00c2abda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad264fb54a20d8777574854ba77d33ddc8d2fa3a3bda404f7f6d7c4c00c2abda->enter($__internal_ad264fb54a20d8777574854ba77d33ddc8d2fa3a3bda404f7f6d7c4c00c2abda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_5ef108ac7742ce0cac3371ce95b1700ba69b651fb82c42290e8b49ed801594a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ef108ac7742ce0cac3371ce95b1700ba69b651fb82c42290e8b49ed801594a6->enter($__internal_5ef108ac7742ce0cac3371ce95b1700ba69b651fb82c42290e8b49ed801594a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_5ef108ac7742ce0cac3371ce95b1700ba69b651fb82c42290e8b49ed801594a6->leave($__internal_5ef108ac7742ce0cac3371ce95b1700ba69b651fb82c42290e8b49ed801594a6_prof);

        
        $__internal_ad264fb54a20d8777574854ba77d33ddc8d2fa3a3bda404f7f6d7c4c00c2abda->leave($__internal_ad264fb54a20d8777574854ba77d33ddc8d2fa3a3bda404f7f6d7c4c00c2abda_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_dea095f1932210c4924d692590b7e3b27a0b371faa8ba78e8cb64b5442fe2efe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dea095f1932210c4924d692590b7e3b27a0b371faa8ba78e8cb64b5442fe2efe->enter($__internal_dea095f1932210c4924d692590b7e3b27a0b371faa8ba78e8cb64b5442fe2efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_625c662f8e7d3b7af366e7fae74a4c45203ecf5f41818245a64a32bcc5844cf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_625c662f8e7d3b7af366e7fae74a4c45203ecf5f41818245a64a32bcc5844cf4->enter($__internal_625c662f8e7d3b7af366e7fae74a4c45203ecf5f41818245a64a32bcc5844cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_625c662f8e7d3b7af366e7fae74a4c45203ecf5f41818245a64a32bcc5844cf4->leave($__internal_625c662f8e7d3b7af366e7fae74a4c45203ecf5f41818245a64a32bcc5844cf4_prof);

        
        $__internal_dea095f1932210c4924d692590b7e3b27a0b371faa8ba78e8cb64b5442fe2efe->leave($__internal_dea095f1932210c4924d692590b7e3b27a0b371faa8ba78e8cb64b5442fe2efe_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_adc50186e3f4e0b1efe997e27d824726e15a8a7b56e55af417fdcd5c1916ce6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adc50186e3f4e0b1efe997e27d824726e15a8a7b56e55af417fdcd5c1916ce6d->enter($__internal_adc50186e3f4e0b1efe997e27d824726e15a8a7b56e55af417fdcd5c1916ce6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_9511f9faf72fc262c0202cc0a9cee4b3bf38bb360635170a09e479d19e5d97d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9511f9faf72fc262c0202cc0a9cee4b3bf38bb360635170a09e479d19e5d97d9->enter($__internal_9511f9faf72fc262c0202cc0a9cee4b3bf38bb360635170a09e479d19e5d97d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_9511f9faf72fc262c0202cc0a9cee4b3bf38bb360635170a09e479d19e5d97d9->leave($__internal_9511f9faf72fc262c0202cc0a9cee4b3bf38bb360635170a09e479d19e5d97d9_prof);

        
        $__internal_adc50186e3f4e0b1efe997e27d824726e15a8a7b56e55af417fdcd5c1916ce6d->leave($__internal_adc50186e3f4e0b1efe997e27d824726e15a8a7b56e55af417fdcd5c1916ce6d_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_330c8bf98d506e1b34e7720a33ac079c15e13953aaa895d746358f94633d3b8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_330c8bf98d506e1b34e7720a33ac079c15e13953aaa895d746358f94633d3b8e->enter($__internal_330c8bf98d506e1b34e7720a33ac079c15e13953aaa895d746358f94633d3b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_341f529a6ba96610e9e0d651baeb7373857823f7be2274456678e6d8e5b7220b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_341f529a6ba96610e9e0d651baeb7373857823f7be2274456678e6d8e5b7220b->enter($__internal_341f529a6ba96610e9e0d651baeb7373857823f7be2274456678e6d8e5b7220b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_341f529a6ba96610e9e0d651baeb7373857823f7be2274456678e6d8e5b7220b->leave($__internal_341f529a6ba96610e9e0d651baeb7373857823f7be2274456678e6d8e5b7220b_prof);

        
        $__internal_330c8bf98d506e1b34e7720a33ac079c15e13953aaa895d746358f94633d3b8e->leave($__internal_330c8bf98d506e1b34e7720a33ac079c15e13953aaa895d746358f94633d3b8e_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_a42cb43a99c1713d5ee1d08b0bedc18178a49b8591408ef8301989e045214b57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a42cb43a99c1713d5ee1d08b0bedc18178a49b8591408ef8301989e045214b57->enter($__internal_a42cb43a99c1713d5ee1d08b0bedc18178a49b8591408ef8301989e045214b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_cab46c9ad35a445e4d367aa6ff4d8414c988c92f9bd477907a9beb4164a1c249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab46c9ad35a445e4d367aa6ff4d8414c988c92f9bd477907a9beb4164a1c249->enter($__internal_cab46c9ad35a445e4d367aa6ff4d8414c988c92f9bd477907a9beb4164a1c249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_cab46c9ad35a445e4d367aa6ff4d8414c988c92f9bd477907a9beb4164a1c249->leave($__internal_cab46c9ad35a445e4d367aa6ff4d8414c988c92f9bd477907a9beb4164a1c249_prof);

        
        $__internal_a42cb43a99c1713d5ee1d08b0bedc18178a49b8591408ef8301989e045214b57->leave($__internal_a42cb43a99c1713d5ee1d08b0bedc18178a49b8591408ef8301989e045214b57_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_992508fe00c8695c890d39c3a19b6d5f93383aa8f6721bb5e0f6949814f2e9c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_992508fe00c8695c890d39c3a19b6d5f93383aa8f6721bb5e0f6949814f2e9c6->enter($__internal_992508fe00c8695c890d39c3a19b6d5f93383aa8f6721bb5e0f6949814f2e9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_7b845a474018b39f2fa9eb68f3cfdebd1b7a7965cd875e055929a2bb5d34d5b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b845a474018b39f2fa9eb68f3cfdebd1b7a7965cd875e055929a2bb5d34d5b3->enter($__internal_7b845a474018b39f2fa9eb68f3cfdebd1b7a7965cd875e055929a2bb5d34d5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_7b845a474018b39f2fa9eb68f3cfdebd1b7a7965cd875e055929a2bb5d34d5b3->leave($__internal_7b845a474018b39f2fa9eb68f3cfdebd1b7a7965cd875e055929a2bb5d34d5b3_prof);

        
        $__internal_992508fe00c8695c890d39c3a19b6d5f93383aa8f6721bb5e0f6949814f2e9c6->leave($__internal_992508fe00c8695c890d39c3a19b6d5f93383aa8f6721bb5e0f6949814f2e9c6_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_6a10bd7e2ade8f40e21464292ac304f821481cee89a600b5da79bbd026d05bc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a10bd7e2ade8f40e21464292ac304f821481cee89a600b5da79bbd026d05bc7->enter($__internal_6a10bd7e2ade8f40e21464292ac304f821481cee89a600b5da79bbd026d05bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_b38a43c82ae79127e6aab6d5ffaf2a87a998256415b0aa3787d392f03cde098e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b38a43c82ae79127e6aab6d5ffaf2a87a998256415b0aa3787d392f03cde098e->enter($__internal_b38a43c82ae79127e6aab6d5ffaf2a87a998256415b0aa3787d392f03cde098e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_b38a43c82ae79127e6aab6d5ffaf2a87a998256415b0aa3787d392f03cde098e->leave($__internal_b38a43c82ae79127e6aab6d5ffaf2a87a998256415b0aa3787d392f03cde098e_prof);

        
        $__internal_6a10bd7e2ade8f40e21464292ac304f821481cee89a600b5da79bbd026d05bc7->leave($__internal_6a10bd7e2ade8f40e21464292ac304f821481cee89a600b5da79bbd026d05bc7_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_95eee0e8e50f7a5dc7a802e352983ee4b3f93e7d8e5268d474cd981f18c66639 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95eee0e8e50f7a5dc7a802e352983ee4b3f93e7d8e5268d474cd981f18c66639->enter($__internal_95eee0e8e50f7a5dc7a802e352983ee4b3f93e7d8e5268d474cd981f18c66639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_ead67a6fee9d3f54d1b3a0402d307144d0dfd6e3fd9b350fc2f60b77c908da4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ead67a6fee9d3f54d1b3a0402d307144d0dfd6e3fd9b350fc2f60b77c908da4b->enter($__internal_ead67a6fee9d3f54d1b3a0402d307144d0dfd6e3fd9b350fc2f60b77c908da4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 197
        echo "    ";
        // line 198
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 199
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 200
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 201
                echo "        ";
            }
            // line 202
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 206
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 207
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 208
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 209
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 212
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 215
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 216
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 217
            echo "</label>
    ";
        }
        
        $__internal_ead67a6fee9d3f54d1b3a0402d307144d0dfd6e3fd9b350fc2f60b77c908da4b->leave($__internal_ead67a6fee9d3f54d1b3a0402d307144d0dfd6e3fd9b350fc2f60b77c908da4b_prof);

        
        $__internal_95eee0e8e50f7a5dc7a802e352983ee4b3f93e7d8e5268d474cd981f18c66639->leave($__internal_95eee0e8e50f7a5dc7a802e352983ee4b3f93e7d8e5268d474cd981f18c66639_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_3470d3f2a83399e90af6c9b14a66e4f5c6c3c80fba9ffca9ae0cdf45673af40d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3470d3f2a83399e90af6c9b14a66e4f5c6c3c80fba9ffca9ae0cdf45673af40d->enter($__internal_3470d3f2a83399e90af6c9b14a66e4f5c6c3c80fba9ffca9ae0cdf45673af40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a05e4dd4d6a2ef00f733e9a64e261e468988e8abaa57c02237920d5d6f4e44d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05e4dd4d6a2ef00f733e9a64e261e468988e8abaa57c02237920d5d6f4e44d4->enter($__internal_a05e4dd4d6a2ef00f733e9a64e261e468988e8abaa57c02237920d5d6f4e44d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 224
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 228
        echo "</div>";
        
        $__internal_a05e4dd4d6a2ef00f733e9a64e261e468988e8abaa57c02237920d5d6f4e44d4->leave($__internal_a05e4dd4d6a2ef00f733e9a64e261e468988e8abaa57c02237920d5d6f4e44d4_prof);

        
        $__internal_3470d3f2a83399e90af6c9b14a66e4f5c6c3c80fba9ffca9ae0cdf45673af40d->leave($__internal_3470d3f2a83399e90af6c9b14a66e4f5c6c3c80fba9ffca9ae0cdf45673af40d_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_fc27b8ef6072ac03bc25d72e4a67e6f89d4408669af6d096b876a94af9369008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc27b8ef6072ac03bc25d72e4a67e6f89d4408669af6d096b876a94af9369008->enter($__internal_fc27b8ef6072ac03bc25d72e4a67e6f89d4408669af6d096b876a94af9369008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_6f3f2f964ecdeba7fbffa2ba7a90350af945380a7f3d533ecc84b0ae0f1cf8d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f3f2f964ecdeba7fbffa2ba7a90350af945380a7f3d533ecc84b0ae0f1cf8d4->enter($__internal_6f3f2f964ecdeba7fbffa2ba7a90350af945380a7f3d533ecc84b0ae0f1cf8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_6f3f2f964ecdeba7fbffa2ba7a90350af945380a7f3d533ecc84b0ae0f1cf8d4->leave($__internal_6f3f2f964ecdeba7fbffa2ba7a90350af945380a7f3d533ecc84b0ae0f1cf8d4_prof);

        
        $__internal_fc27b8ef6072ac03bc25d72e4a67e6f89d4408669af6d096b876a94af9369008->leave($__internal_fc27b8ef6072ac03bc25d72e4a67e6f89d4408669af6d096b876a94af9369008_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_9c7528f75478ccbdb8c3c5b6633f8d04bf9b92cbcbc4ba7cfc8245d3db99ecac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c7528f75478ccbdb8c3c5b6633f8d04bf9b92cbcbc4ba7cfc8245d3db99ecac->enter($__internal_9c7528f75478ccbdb8c3c5b6633f8d04bf9b92cbcbc4ba7cfc8245d3db99ecac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_f722db9715aaf7861101fb1e5f24c1f9d02896fb00b1f6e7c6dd49c8daf5c691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f722db9715aaf7861101fb1e5f24c1f9d02896fb00b1f6e7c6dd49c8daf5c691->enter($__internal_f722db9715aaf7861101fb1e5f24c1f9d02896fb00b1f6e7c6dd49c8daf5c691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f722db9715aaf7861101fb1e5f24c1f9d02896fb00b1f6e7c6dd49c8daf5c691->leave($__internal_f722db9715aaf7861101fb1e5f24c1f9d02896fb00b1f6e7c6dd49c8daf5c691_prof);

        
        $__internal_9c7528f75478ccbdb8c3c5b6633f8d04bf9b92cbcbc4ba7cfc8245d3db99ecac->leave($__internal_9c7528f75478ccbdb8c3c5b6633f8d04bf9b92cbcbc4ba7cfc8245d3db99ecac_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_40735d83a7969af8c9d81b591c6d1e99d26601ca88c3ffc7e72cc26f193e3242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40735d83a7969af8c9d81b591c6d1e99d26601ca88c3ffc7e72cc26f193e3242->enter($__internal_40735d83a7969af8c9d81b591c6d1e99d26601ca88c3ffc7e72cc26f193e3242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_e850151955e74076e26c39e9c935179450b57b8b6ea0f557c16c07449d47e049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e850151955e74076e26c39e9c935179450b57b8b6ea0f557c16c07449d47e049->enter($__internal_e850151955e74076e26c39e9c935179450b57b8b6ea0f557c16c07449d47e049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e850151955e74076e26c39e9c935179450b57b8b6ea0f557c16c07449d47e049->leave($__internal_e850151955e74076e26c39e9c935179450b57b8b6ea0f557c16c07449d47e049_prof);

        
        $__internal_40735d83a7969af8c9d81b591c6d1e99d26601ca88c3ffc7e72cc26f193e3242->leave($__internal_40735d83a7969af8c9d81b591c6d1e99d26601ca88c3ffc7e72cc26f193e3242_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_795ac3c2a86cc6f803462506e907a630305121a29f7c603cb4aa1961da934b9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_795ac3c2a86cc6f803462506e907a630305121a29f7c603cb4aa1961da934b9e->enter($__internal_795ac3c2a86cc6f803462506e907a630305121a29f7c603cb4aa1961da934b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_7ad89ce8434ad854f15ccfde8f3fac24f5fe005fcbadbc5c8c9fb627361ab281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ad89ce8434ad854f15ccfde8f3fac24f5fe005fcbadbc5c8c9fb627361ab281->enter($__internal_7ad89ce8434ad854f15ccfde8f3fac24f5fe005fcbadbc5c8c9fb627361ab281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7ad89ce8434ad854f15ccfde8f3fac24f5fe005fcbadbc5c8c9fb627361ab281->leave($__internal_7ad89ce8434ad854f15ccfde8f3fac24f5fe005fcbadbc5c8c9fb627361ab281_prof);

        
        $__internal_795ac3c2a86cc6f803462506e907a630305121a29f7c603cb4aa1961da934b9e->leave($__internal_795ac3c2a86cc6f803462506e907a630305121a29f7c603cb4aa1961da934b9e_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_42657f6c4c1f4551c5fa1232afc955b68fe31f126d37e57cf06d030995e4c45b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42657f6c4c1f4551c5fa1232afc955b68fe31f126d37e57cf06d030995e4c45b->enter($__internal_42657f6c4c1f4551c5fa1232afc955b68fe31f126d37e57cf06d030995e4c45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_7bc960b1add7136a75923222e5fbfa5c7e2adda0a293a81bee6b24818c31be64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bc960b1add7136a75923222e5fbfa5c7e2adda0a293a81bee6b24818c31be64->enter($__internal_7bc960b1add7136a75923222e5fbfa5c7e2adda0a293a81bee6b24818c31be64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7bc960b1add7136a75923222e5fbfa5c7e2adda0a293a81bee6b24818c31be64->leave($__internal_7bc960b1add7136a75923222e5fbfa5c7e2adda0a293a81bee6b24818c31be64_prof);

        
        $__internal_42657f6c4c1f4551c5fa1232afc955b68fe31f126d37e57cf06d030995e4c45b->leave($__internal_42657f6c4c1f4551c5fa1232afc955b68fe31f126d37e57cf06d030995e4c45b_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_b6f950801c95de20dde7d331ccad30aaf9e9b35e7b86fd572e9aa1427e54a3bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6f950801c95de20dde7d331ccad30aaf9e9b35e7b86fd572e9aa1427e54a3bb->enter($__internal_b6f950801c95de20dde7d331ccad30aaf9e9b35e7b86fd572e9aa1427e54a3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_3005a4590ea70c89bf7f6280156556cb1898166d0d305be8c4116106f5c3cc23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3005a4590ea70c89bf7f6280156556cb1898166d0d305be8c4116106f5c3cc23->enter($__internal_3005a4590ea70c89bf7f6280156556cb1898166d0d305be8c4116106f5c3cc23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 258
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 261
        echo "</div>";
        
        $__internal_3005a4590ea70c89bf7f6280156556cb1898166d0d305be8c4116106f5c3cc23->leave($__internal_3005a4590ea70c89bf7f6280156556cb1898166d0d305be8c4116106f5c3cc23_prof);

        
        $__internal_b6f950801c95de20dde7d331ccad30aaf9e9b35e7b86fd572e9aa1427e54a3bb->leave($__internal_b6f950801c95de20dde7d331ccad30aaf9e9b35e7b86fd572e9aa1427e54a3bb_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_a89c64cdf16a0d40fe21de3e0742acd50f2e4f4222e2aea64eed9dd1bc46f2e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a89c64cdf16a0d40fe21de3e0742acd50f2e4f4222e2aea64eed9dd1bc46f2e0->enter($__internal_a89c64cdf16a0d40fe21de3e0742acd50f2e4f4222e2aea64eed9dd1bc46f2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_13c579c7a632da85931b9246ba7c0de8f1baf914ff70cdc5c6782bd88fe6ca31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13c579c7a632da85931b9246ba7c0de8f1baf914ff70cdc5c6782bd88fe6ca31->enter($__internal_13c579c7a632da85931b9246ba7c0de8f1baf914ff70cdc5c6782bd88fe6ca31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 265
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 266
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 268
        echo "</div>";
        
        $__internal_13c579c7a632da85931b9246ba7c0de8f1baf914ff70cdc5c6782bd88fe6ca31->leave($__internal_13c579c7a632da85931b9246ba7c0de8f1baf914ff70cdc5c6782bd88fe6ca31_prof);

        
        $__internal_a89c64cdf16a0d40fe21de3e0742acd50f2e4f4222e2aea64eed9dd1bc46f2e0->leave($__internal_a89c64cdf16a0d40fe21de3e0742acd50f2e4f4222e2aea64eed9dd1bc46f2e0_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_552004e8b6f8e704702f90ca58641b9097207000fc7fb1bbeaf85e5bfd99ac59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_552004e8b6f8e704702f90ca58641b9097207000fc7fb1bbeaf85e5bfd99ac59->enter($__internal_552004e8b6f8e704702f90ca58641b9097207000fc7fb1bbeaf85e5bfd99ac59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_d7d60fe6c65f3a1dca9e6ce60b685c379b2eb9cb173bea86042b76cbdeb62923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7d60fe6c65f3a1dca9e6ce60b685c379b2eb9cb173bea86042b76cbdeb62923->enter($__internal_d7d60fe6c65f3a1dca9e6ce60b685c379b2eb9cb173bea86042b76cbdeb62923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 274
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 275
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 276
            echo "    <ul class=\"list-unstyled\">";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 278
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "</ul>
    ";
            // line 281
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_d7d60fe6c65f3a1dca9e6ce60b685c379b2eb9cb173bea86042b76cbdeb62923->leave($__internal_d7d60fe6c65f3a1dca9e6ce60b685c379b2eb9cb173bea86042b76cbdeb62923_prof);

        
        $__internal_552004e8b6f8e704702f90ca58641b9097207000fc7fb1bbeaf85e5bfd99ac59->leave($__internal_552004e8b6f8e704702f90ca58641b9097207000fc7fb1bbeaf85e5bfd99ac59_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1135 => 281,  1132 => 280,  1124 => 278,  1120 => 277,  1118 => 276,  1112 => 275,  1110 => 274,  1101 => 273,  1091 => 268,  1089 => 267,  1087 => 266,  1081 => 265,  1072 => 264,  1062 => 261,  1060 => 260,  1058 => 259,  1052 => 258,  1043 => 257,  1033 => 254,  1031 => 253,  1022 => 252,  1012 => 249,  1010 => 248,  1001 => 247,  991 => 244,  989 => 243,  980 => 242,  970 => 239,  968 => 238,  959 => 237,  949 => 234,  947 => 233,  945 => 232,  936 => 231,  926 => 228,  924 => 227,  922 => 226,  920 => 225,  914 => 224,  905 => 223,  893 => 217,  889 => 216,  874 => 215,  870 => 212,  867 => 209,  866 => 208,  865 => 207,  863 => 206,  860 => 205,  857 => 204,  854 => 203,  851 => 202,  848 => 201,  845 => 200,  842 => 199,  839 => 198,  837 => 197,  828 => 196,  818 => 193,  809 => 192,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 273,  200 => 272,  197 => 270,  195 => 264,  192 => 263,  190 => 257,  187 => 256,  185 => 252,  182 => 251,  180 => 247,  177 => 246,  175 => 242,  172 => 241,  170 => 237,  167 => 236,  165 => 231,  162 => 230,  160 => 223,  157 => 222,  154 => 220,  152 => 196,  149 => 195,  147 => 192,  144 => 191,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/var/www/html/perso/Darmanko/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
