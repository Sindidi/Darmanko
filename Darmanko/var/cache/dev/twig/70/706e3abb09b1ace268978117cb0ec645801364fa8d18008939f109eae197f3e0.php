<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_40fb2518524b7ee8674ab25cd1ebdee217dcc889bd109df2c4a4e3f0dcd24401 extends Twig_Template
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
        $__internal_562b041f619e4f525a5c94cd218568ab1197dd621d53b6555367aba4d1bdfa6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_562b041f619e4f525a5c94cd218568ab1197dd621d53b6555367aba4d1bdfa6d->enter($__internal_562b041f619e4f525a5c94cd218568ab1197dd621d53b6555367aba4d1bdfa6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_02fd969a81aee98b000427f9cb56e47a202c0ab74d0f92c13214e5bf5b3a8321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02fd969a81aee98b000427f9cb56e47a202c0ab74d0f92c13214e5bf5b3a8321->enter($__internal_02fd969a81aee98b000427f9cb56e47a202c0ab74d0f92c13214e5bf5b3a8321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_562b041f619e4f525a5c94cd218568ab1197dd621d53b6555367aba4d1bdfa6d->leave($__internal_562b041f619e4f525a5c94cd218568ab1197dd621d53b6555367aba4d1bdfa6d_prof);

        
        $__internal_02fd969a81aee98b000427f9cb56e47a202c0ab74d0f92c13214e5bf5b3a8321->leave($__internal_02fd969a81aee98b000427f9cb56e47a202c0ab74d0f92c13214e5bf5b3a8321_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_866bd65937018314fae1bf007c0647c682ff4cc21ef6c467be82f3f321d17f12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_866bd65937018314fae1bf007c0647c682ff4cc21ef6c467be82f3f321d17f12->enter($__internal_866bd65937018314fae1bf007c0647c682ff4cc21ef6c467be82f3f321d17f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_65ce25de6d180904ff2b219354da57e2f1b6fec870abe299a48c35eae8984a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65ce25de6d180904ff2b219354da57e2f1b6fec870abe299a48c35eae8984a48->enter($__internal_65ce25de6d180904ff2b219354da57e2f1b6fec870abe299a48c35eae8984a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_65ce25de6d180904ff2b219354da57e2f1b6fec870abe299a48c35eae8984a48->leave($__internal_65ce25de6d180904ff2b219354da57e2f1b6fec870abe299a48c35eae8984a48_prof);

        
        $__internal_866bd65937018314fae1bf007c0647c682ff4cc21ef6c467be82f3f321d17f12->leave($__internal_866bd65937018314fae1bf007c0647c682ff4cc21ef6c467be82f3f321d17f12_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_876e27058937cd63936f5a2d32711dd3dc1be354db44e55ee2ef7aa183e857de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_876e27058937cd63936f5a2d32711dd3dc1be354db44e55ee2ef7aa183e857de->enter($__internal_876e27058937cd63936f5a2d32711dd3dc1be354db44e55ee2ef7aa183e857de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_52a87c1554d177c1ee59e8d691fdafc2040a160a509246cb2ab67125ec4bf8d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52a87c1554d177c1ee59e8d691fdafc2040a160a509246cb2ab67125ec4bf8d9->enter($__internal_52a87c1554d177c1ee59e8d691fdafc2040a160a509246cb2ab67125ec4bf8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_52a87c1554d177c1ee59e8d691fdafc2040a160a509246cb2ab67125ec4bf8d9->leave($__internal_52a87c1554d177c1ee59e8d691fdafc2040a160a509246cb2ab67125ec4bf8d9_prof);

        
        $__internal_876e27058937cd63936f5a2d32711dd3dc1be354db44e55ee2ef7aa183e857de->leave($__internal_876e27058937cd63936f5a2d32711dd3dc1be354db44e55ee2ef7aa183e857de_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_d066f3544ab2643c7eeebde84906ce894a4a48e4b3b6922bc13c241b99840483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d066f3544ab2643c7eeebde84906ce894a4a48e4b3b6922bc13c241b99840483->enter($__internal_d066f3544ab2643c7eeebde84906ce894a4a48e4b3b6922bc13c241b99840483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_c2770c6c238fbe51e516520565649736619990c35663639578b571c9ab6f56ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2770c6c238fbe51e516520565649736619990c35663639578b571c9ab6f56ac->enter($__internal_c2770c6c238fbe51e516520565649736619990c35663639578b571c9ab6f56ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_c2770c6c238fbe51e516520565649736619990c35663639578b571c9ab6f56ac->leave($__internal_c2770c6c238fbe51e516520565649736619990c35663639578b571c9ab6f56ac_prof);

        
        $__internal_d066f3544ab2643c7eeebde84906ce894a4a48e4b3b6922bc13c241b99840483->leave($__internal_d066f3544ab2643c7eeebde84906ce894a4a48e4b3b6922bc13c241b99840483_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_e570b57ccbd9eeffc8967ae3a92f819d9e1c8eb0aaafe83359821a2f3efb46b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e570b57ccbd9eeffc8967ae3a92f819d9e1c8eb0aaafe83359821a2f3efb46b2->enter($__internal_e570b57ccbd9eeffc8967ae3a92f819d9e1c8eb0aaafe83359821a2f3efb46b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_19f26a7f0fd6e470221ac2c7c85452474422579dc160862c013a444f89be0490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f26a7f0fd6e470221ac2c7c85452474422579dc160862c013a444f89be0490->enter($__internal_19f26a7f0fd6e470221ac2c7c85452474422579dc160862c013a444f89be0490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_d6ebeef9cee4c0bdefc3238437e1bda70d2fac7fb0624d04fd49828ad8bbca01 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_c171649f049d31e4961a3011e99f6bf10eb16130f5c1c6d936f05cd61f14f9e9 = "{{") && ('' === $__internal_c171649f049d31e4961a3011e99f6bf10eb16130f5c1c6d936f05cd61f14f9e9 || 0 === strpos($__internal_d6ebeef9cee4c0bdefc3238437e1bda70d2fac7fb0624d04fd49828ad8bbca01, $__internal_c171649f049d31e4961a3011e99f6bf10eb16130f5c1c6d936f05cd61f14f9e9)));
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
        
        $__internal_19f26a7f0fd6e470221ac2c7c85452474422579dc160862c013a444f89be0490->leave($__internal_19f26a7f0fd6e470221ac2c7c85452474422579dc160862c013a444f89be0490_prof);

        
        $__internal_e570b57ccbd9eeffc8967ae3a92f819d9e1c8eb0aaafe83359821a2f3efb46b2->leave($__internal_e570b57ccbd9eeffc8967ae3a92f819d9e1c8eb0aaafe83359821a2f3efb46b2_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_21a330a341c300c95edece29dd5a4c9538719d97b3036791d4287a4d0babea25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21a330a341c300c95edece29dd5a4c9538719d97b3036791d4287a4d0babea25->enter($__internal_21a330a341c300c95edece29dd5a4c9538719d97b3036791d4287a4d0babea25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_1933fd53bc3cb688e143f0d9acce566b94740d7b08e4f76c855cf968f0b0a253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1933fd53bc3cb688e143f0d9acce566b94740d7b08e4f76c855cf968f0b0a253->enter($__internal_1933fd53bc3cb688e143f0d9acce566b94740d7b08e4f76c855cf968f0b0a253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_1933fd53bc3cb688e143f0d9acce566b94740d7b08e4f76c855cf968f0b0a253->leave($__internal_1933fd53bc3cb688e143f0d9acce566b94740d7b08e4f76c855cf968f0b0a253_prof);

        
        $__internal_21a330a341c300c95edece29dd5a4c9538719d97b3036791d4287a4d0babea25->leave($__internal_21a330a341c300c95edece29dd5a4c9538719d97b3036791d4287a4d0babea25_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_c6712ab4dbd8e644573bb99443e5ace40496778afe21e50df164c8600237fc61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6712ab4dbd8e644573bb99443e5ace40496778afe21e50df164c8600237fc61->enter($__internal_c6712ab4dbd8e644573bb99443e5ace40496778afe21e50df164c8600237fc61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_a8f9ed11101fd72fb9c3efeb625fc5e5a0ccb6fc7bcfc68767ec2d23cc19354a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8f9ed11101fd72fb9c3efeb625fc5e5a0ccb6fc7bcfc68767ec2d23cc19354a->enter($__internal_a8f9ed11101fd72fb9c3efeb625fc5e5a0ccb6fc7bcfc68767ec2d23cc19354a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_a8f9ed11101fd72fb9c3efeb625fc5e5a0ccb6fc7bcfc68767ec2d23cc19354a->leave($__internal_a8f9ed11101fd72fb9c3efeb625fc5e5a0ccb6fc7bcfc68767ec2d23cc19354a_prof);

        
        $__internal_c6712ab4dbd8e644573bb99443e5ace40496778afe21e50df164c8600237fc61->leave($__internal_c6712ab4dbd8e644573bb99443e5ace40496778afe21e50df164c8600237fc61_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_5ad2ca0b8deb4ecc0a8d14a3ff82dd2b2eba085f894bcd304f6a6a9c573291c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ad2ca0b8deb4ecc0a8d14a3ff82dd2b2eba085f894bcd304f6a6a9c573291c3->enter($__internal_5ad2ca0b8deb4ecc0a8d14a3ff82dd2b2eba085f894bcd304f6a6a9c573291c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_cc9c0287ae952d7188627a021843c8fe5eb4974ac88dbbd3567325e130e73b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc9c0287ae952d7188627a021843c8fe5eb4974ac88dbbd3567325e130e73b17->enter($__internal_cc9c0287ae952d7188627a021843c8fe5eb4974ac88dbbd3567325e130e73b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_cc9c0287ae952d7188627a021843c8fe5eb4974ac88dbbd3567325e130e73b17->leave($__internal_cc9c0287ae952d7188627a021843c8fe5eb4974ac88dbbd3567325e130e73b17_prof);

        
        $__internal_5ad2ca0b8deb4ecc0a8d14a3ff82dd2b2eba085f894bcd304f6a6a9c573291c3->leave($__internal_5ad2ca0b8deb4ecc0a8d14a3ff82dd2b2eba085f894bcd304f6a6a9c573291c3_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_af9359c66205b2a02ab97e29e655e972610745b658988d0eae53d77b1222529c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af9359c66205b2a02ab97e29e655e972610745b658988d0eae53d77b1222529c->enter($__internal_af9359c66205b2a02ab97e29e655e972610745b658988d0eae53d77b1222529c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_c50f0765f6d6c3f4875782db24c95963341da0fb12fd497df82188840fcecb93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c50f0765f6d6c3f4875782db24c95963341da0fb12fd497df82188840fcecb93->enter($__internal_c50f0765f6d6c3f4875782db24c95963341da0fb12fd497df82188840fcecb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_c50f0765f6d6c3f4875782db24c95963341da0fb12fd497df82188840fcecb93->leave($__internal_c50f0765f6d6c3f4875782db24c95963341da0fb12fd497df82188840fcecb93_prof);

        
        $__internal_af9359c66205b2a02ab97e29e655e972610745b658988d0eae53d77b1222529c->leave($__internal_af9359c66205b2a02ab97e29e655e972610745b658988d0eae53d77b1222529c_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_0e1e9369be982b87677279350b6cac17c96f318e4c777a799408b5b63a7dda30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e1e9369be982b87677279350b6cac17c96f318e4c777a799408b5b63a7dda30->enter($__internal_0e1e9369be982b87677279350b6cac17c96f318e4c777a799408b5b63a7dda30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_91ea691a245a4e0c05d2cbe2bb945fbd541686c516469f04105013bb3ac221c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91ea691a245a4e0c05d2cbe2bb945fbd541686c516469f04105013bb3ac221c3->enter($__internal_91ea691a245a4e0c05d2cbe2bb945fbd541686c516469f04105013bb3ac221c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_91ea691a245a4e0c05d2cbe2bb945fbd541686c516469f04105013bb3ac221c3->leave($__internal_91ea691a245a4e0c05d2cbe2bb945fbd541686c516469f04105013bb3ac221c3_prof);

        
        $__internal_0e1e9369be982b87677279350b6cac17c96f318e4c777a799408b5b63a7dda30->leave($__internal_0e1e9369be982b87677279350b6cac17c96f318e4c777a799408b5b63a7dda30_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_d8fcae245d5682a3e3a18f22d860d21a735da9f86e1106eb6c59e36430b74afe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8fcae245d5682a3e3a18f22d860d21a735da9f86e1106eb6c59e36430b74afe->enter($__internal_d8fcae245d5682a3e3a18f22d860d21a735da9f86e1106eb6c59e36430b74afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_39bbb46103d143ea02b89f6c27c4385fc888e5198a38b74ea5e9b78adc514164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39bbb46103d143ea02b89f6c27c4385fc888e5198a38b74ea5e9b78adc514164->enter($__internal_39bbb46103d143ea02b89f6c27c4385fc888e5198a38b74ea5e9b78adc514164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_39bbb46103d143ea02b89f6c27c4385fc888e5198a38b74ea5e9b78adc514164->leave($__internal_39bbb46103d143ea02b89f6c27c4385fc888e5198a38b74ea5e9b78adc514164_prof);

        
        $__internal_d8fcae245d5682a3e3a18f22d860d21a735da9f86e1106eb6c59e36430b74afe->leave($__internal_d8fcae245d5682a3e3a18f22d860d21a735da9f86e1106eb6c59e36430b74afe_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_7ae048b68c2e4993348455b8d1c4fdc237fa9e165c326173a8d9199f7ad8b949 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ae048b68c2e4993348455b8d1c4fdc237fa9e165c326173a8d9199f7ad8b949->enter($__internal_7ae048b68c2e4993348455b8d1c4fdc237fa9e165c326173a8d9199f7ad8b949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_94dd0966f9e115759f9c3a71a15ee0b788ba174a66cc06a39fa7a0015a658262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94dd0966f9e115759f9c3a71a15ee0b788ba174a66cc06a39fa7a0015a658262->enter($__internal_94dd0966f9e115759f9c3a71a15ee0b788ba174a66cc06a39fa7a0015a658262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_94dd0966f9e115759f9c3a71a15ee0b788ba174a66cc06a39fa7a0015a658262->leave($__internal_94dd0966f9e115759f9c3a71a15ee0b788ba174a66cc06a39fa7a0015a658262_prof);

        
        $__internal_7ae048b68c2e4993348455b8d1c4fdc237fa9e165c326173a8d9199f7ad8b949->leave($__internal_7ae048b68c2e4993348455b8d1c4fdc237fa9e165c326173a8d9199f7ad8b949_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_dce8073ae17d675897ce8fec8d33769e0147d2253ade94e796673a8d8528e02e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dce8073ae17d675897ce8fec8d33769e0147d2253ade94e796673a8d8528e02e->enter($__internal_dce8073ae17d675897ce8fec8d33769e0147d2253ade94e796673a8d8528e02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_5d0fa184a7eaa2af7181e509ea5c6289c28d1cb78b430b8b98c547bd37979353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d0fa184a7eaa2af7181e509ea5c6289c28d1cb78b430b8b98c547bd37979353->enter($__internal_5d0fa184a7eaa2af7181e509ea5c6289c28d1cb78b430b8b98c547bd37979353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_5d0fa184a7eaa2af7181e509ea5c6289c28d1cb78b430b8b98c547bd37979353->leave($__internal_5d0fa184a7eaa2af7181e509ea5c6289c28d1cb78b430b8b98c547bd37979353_prof);

        
        $__internal_dce8073ae17d675897ce8fec8d33769e0147d2253ade94e796673a8d8528e02e->leave($__internal_dce8073ae17d675897ce8fec8d33769e0147d2253ade94e796673a8d8528e02e_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_596ca55c72e8f06d64db7018a34b76646dcba5d064029ed57dd4a32cb3196159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_596ca55c72e8f06d64db7018a34b76646dcba5d064029ed57dd4a32cb3196159->enter($__internal_596ca55c72e8f06d64db7018a34b76646dcba5d064029ed57dd4a32cb3196159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_05610d206b95d482fd205c0ceb529503ce6dcf445a815b2a5988b44e5d548cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05610d206b95d482fd205c0ceb529503ce6dcf445a815b2a5988b44e5d548cbf->enter($__internal_05610d206b95d482fd205c0ceb529503ce6dcf445a815b2a5988b44e5d548cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_05610d206b95d482fd205c0ceb529503ce6dcf445a815b2a5988b44e5d548cbf->leave($__internal_05610d206b95d482fd205c0ceb529503ce6dcf445a815b2a5988b44e5d548cbf_prof);

        
        $__internal_596ca55c72e8f06d64db7018a34b76646dcba5d064029ed57dd4a32cb3196159->leave($__internal_596ca55c72e8f06d64db7018a34b76646dcba5d064029ed57dd4a32cb3196159_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_7ae158735f0d02145f0032aec15ec04220bd35be83fad0800eb33818104748c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ae158735f0d02145f0032aec15ec04220bd35be83fad0800eb33818104748c8->enter($__internal_7ae158735f0d02145f0032aec15ec04220bd35be83fad0800eb33818104748c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_946dff918083143b10ecccf44354fd67b154d173e43061919db1e278cd7bf67e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_946dff918083143b10ecccf44354fd67b154d173e43061919db1e278cd7bf67e->enter($__internal_946dff918083143b10ecccf44354fd67b154d173e43061919db1e278cd7bf67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_946dff918083143b10ecccf44354fd67b154d173e43061919db1e278cd7bf67e->leave($__internal_946dff918083143b10ecccf44354fd67b154d173e43061919db1e278cd7bf67e_prof);

        
        $__internal_7ae158735f0d02145f0032aec15ec04220bd35be83fad0800eb33818104748c8->leave($__internal_7ae158735f0d02145f0032aec15ec04220bd35be83fad0800eb33818104748c8_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_15a1bbfe2687e318fce928c3bb42ae42e923ad8a5633adaa4d415e041fbac940 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15a1bbfe2687e318fce928c3bb42ae42e923ad8a5633adaa4d415e041fbac940->enter($__internal_15a1bbfe2687e318fce928c3bb42ae42e923ad8a5633adaa4d415e041fbac940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_58d29722f767179b18bbed32a62413085125f9a92c725da4bb26f1988f3c108a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58d29722f767179b18bbed32a62413085125f9a92c725da4bb26f1988f3c108a->enter($__internal_58d29722f767179b18bbed32a62413085125f9a92c725da4bb26f1988f3c108a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_58d29722f767179b18bbed32a62413085125f9a92c725da4bb26f1988f3c108a->leave($__internal_58d29722f767179b18bbed32a62413085125f9a92c725da4bb26f1988f3c108a_prof);

        
        $__internal_15a1bbfe2687e318fce928c3bb42ae42e923ad8a5633adaa4d415e041fbac940->leave($__internal_15a1bbfe2687e318fce928c3bb42ae42e923ad8a5633adaa4d415e041fbac940_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_809d140f5c854fd41eb5fad3b6312e22993b3af45e64d1df6f470321d06b9f09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_809d140f5c854fd41eb5fad3b6312e22993b3af45e64d1df6f470321d06b9f09->enter($__internal_809d140f5c854fd41eb5fad3b6312e22993b3af45e64d1df6f470321d06b9f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_dc9cb48e7958d2328444dda0cb5a4f4111edc421b65a87d9f5cf1c40dc243cec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc9cb48e7958d2328444dda0cb5a4f4111edc421b65a87d9f5cf1c40dc243cec->enter($__internal_dc9cb48e7958d2328444dda0cb5a4f4111edc421b65a87d9f5cf1c40dc243cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_dc9cb48e7958d2328444dda0cb5a4f4111edc421b65a87d9f5cf1c40dc243cec->leave($__internal_dc9cb48e7958d2328444dda0cb5a4f4111edc421b65a87d9f5cf1c40dc243cec_prof);

        
        $__internal_809d140f5c854fd41eb5fad3b6312e22993b3af45e64d1df6f470321d06b9f09->leave($__internal_809d140f5c854fd41eb5fad3b6312e22993b3af45e64d1df6f470321d06b9f09_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_ba7500989b9cf195cdb492e32f1d30d5a477924713f165c25f7449d71d82c316 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba7500989b9cf195cdb492e32f1d30d5a477924713f165c25f7449d71d82c316->enter($__internal_ba7500989b9cf195cdb492e32f1d30d5a477924713f165c25f7449d71d82c316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_82186d073e5a92dff445b59d20c4dd42a09e41b428d177aa7a4966474998e6b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82186d073e5a92dff445b59d20c4dd42a09e41b428d177aa7a4966474998e6b0->enter($__internal_82186d073e5a92dff445b59d20c4dd42a09e41b428d177aa7a4966474998e6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_82186d073e5a92dff445b59d20c4dd42a09e41b428d177aa7a4966474998e6b0->leave($__internal_82186d073e5a92dff445b59d20c4dd42a09e41b428d177aa7a4966474998e6b0_prof);

        
        $__internal_ba7500989b9cf195cdb492e32f1d30d5a477924713f165c25f7449d71d82c316->leave($__internal_ba7500989b9cf195cdb492e32f1d30d5a477924713f165c25f7449d71d82c316_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_e579dfcab56979a32d86d407de221dde9ccb0ccb3a618136ee504bb6e10492e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e579dfcab56979a32d86d407de221dde9ccb0ccb3a618136ee504bb6e10492e2->enter($__internal_e579dfcab56979a32d86d407de221dde9ccb0ccb3a618136ee504bb6e10492e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_3906af0e3ec9e09e8943d8dc68c8e1909509ce834da5385601aa857f4358877c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3906af0e3ec9e09e8943d8dc68c8e1909509ce834da5385601aa857f4358877c->enter($__internal_3906af0e3ec9e09e8943d8dc68c8e1909509ce834da5385601aa857f4358877c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_3906af0e3ec9e09e8943d8dc68c8e1909509ce834da5385601aa857f4358877c->leave($__internal_3906af0e3ec9e09e8943d8dc68c8e1909509ce834da5385601aa857f4358877c_prof);

        
        $__internal_e579dfcab56979a32d86d407de221dde9ccb0ccb3a618136ee504bb6e10492e2->leave($__internal_e579dfcab56979a32d86d407de221dde9ccb0ccb3a618136ee504bb6e10492e2_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_aefa73b0697cbf944a3bce6bd1a433334eae153d1da9d40415d0931530ceb5ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aefa73b0697cbf944a3bce6bd1a433334eae153d1da9d40415d0931530ceb5ec->enter($__internal_aefa73b0697cbf944a3bce6bd1a433334eae153d1da9d40415d0931530ceb5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_332d29c8b42e58c44e7c911ec6cebbc0c9ec8efc0cf90bd52352514dea590626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_332d29c8b42e58c44e7c911ec6cebbc0c9ec8efc0cf90bd52352514dea590626->enter($__internal_332d29c8b42e58c44e7c911ec6cebbc0c9ec8efc0cf90bd52352514dea590626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_332d29c8b42e58c44e7c911ec6cebbc0c9ec8efc0cf90bd52352514dea590626->leave($__internal_332d29c8b42e58c44e7c911ec6cebbc0c9ec8efc0cf90bd52352514dea590626_prof);

        
        $__internal_aefa73b0697cbf944a3bce6bd1a433334eae153d1da9d40415d0931530ceb5ec->leave($__internal_aefa73b0697cbf944a3bce6bd1a433334eae153d1da9d40415d0931530ceb5ec_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_2e6075757eb214853c6f2900295d25c3c369780c3108d7d99177d1fe21e79929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e6075757eb214853c6f2900295d25c3c369780c3108d7d99177d1fe21e79929->enter($__internal_2e6075757eb214853c6f2900295d25c3c369780c3108d7d99177d1fe21e79929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_1c6dbe37c4792d109d184efc1c391c027fc9aeb8621b503f91c867648090e093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c6dbe37c4792d109d184efc1c391c027fc9aeb8621b503f91c867648090e093->enter($__internal_1c6dbe37c4792d109d184efc1c391c027fc9aeb8621b503f91c867648090e093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_1c6dbe37c4792d109d184efc1c391c027fc9aeb8621b503f91c867648090e093->leave($__internal_1c6dbe37c4792d109d184efc1c391c027fc9aeb8621b503f91c867648090e093_prof);

        
        $__internal_2e6075757eb214853c6f2900295d25c3c369780c3108d7d99177d1fe21e79929->leave($__internal_2e6075757eb214853c6f2900295d25c3c369780c3108d7d99177d1fe21e79929_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_cd447dafdaed083ced28ba6488b1cac4c17c83a72e8f557f7488ae5623cfa98a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd447dafdaed083ced28ba6488b1cac4c17c83a72e8f557f7488ae5623cfa98a->enter($__internal_cd447dafdaed083ced28ba6488b1cac4c17c83a72e8f557f7488ae5623cfa98a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_c8c3b950fa35e71c24c99199f2cc06c4c8bd787e1879aa5d46c3eb81534baff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8c3b950fa35e71c24c99199f2cc06c4c8bd787e1879aa5d46c3eb81534baff6->enter($__internal_c8c3b950fa35e71c24c99199f2cc06c4c8bd787e1879aa5d46c3eb81534baff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c8c3b950fa35e71c24c99199f2cc06c4c8bd787e1879aa5d46c3eb81534baff6->leave($__internal_c8c3b950fa35e71c24c99199f2cc06c4c8bd787e1879aa5d46c3eb81534baff6_prof);

        
        $__internal_cd447dafdaed083ced28ba6488b1cac4c17c83a72e8f557f7488ae5623cfa98a->leave($__internal_cd447dafdaed083ced28ba6488b1cac4c17c83a72e8f557f7488ae5623cfa98a_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_b3ade823d3317b9d36e8824b4b2a3a3a09a0e594da6f6b872a35f2b2bbe1e077 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3ade823d3317b9d36e8824b4b2a3a3a09a0e594da6f6b872a35f2b2bbe1e077->enter($__internal_b3ade823d3317b9d36e8824b4b2a3a3a09a0e594da6f6b872a35f2b2bbe1e077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_01ced6203f40f6445efce8dbf501a30e40209d6807431ae1812eb4dda0442804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01ced6203f40f6445efce8dbf501a30e40209d6807431ae1812eb4dda0442804->enter($__internal_01ced6203f40f6445efce8dbf501a30e40209d6807431ae1812eb4dda0442804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_01ced6203f40f6445efce8dbf501a30e40209d6807431ae1812eb4dda0442804->leave($__internal_01ced6203f40f6445efce8dbf501a30e40209d6807431ae1812eb4dda0442804_prof);

        
        $__internal_b3ade823d3317b9d36e8824b4b2a3a3a09a0e594da6f6b872a35f2b2bbe1e077->leave($__internal_b3ade823d3317b9d36e8824b4b2a3a3a09a0e594da6f6b872a35f2b2bbe1e077_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_d4335726d3f4ccd9d5cf568d460eae58a6498643ba4791da757c1620cbf1ee4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4335726d3f4ccd9d5cf568d460eae58a6498643ba4791da757c1620cbf1ee4a->enter($__internal_d4335726d3f4ccd9d5cf568d460eae58a6498643ba4791da757c1620cbf1ee4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_9de5b6594265b2e325df78a5a92fecafc810a004959617ea220bfe90816553ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9de5b6594265b2e325df78a5a92fecafc810a004959617ea220bfe90816553ba->enter($__internal_9de5b6594265b2e325df78a5a92fecafc810a004959617ea220bfe90816553ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9de5b6594265b2e325df78a5a92fecafc810a004959617ea220bfe90816553ba->leave($__internal_9de5b6594265b2e325df78a5a92fecafc810a004959617ea220bfe90816553ba_prof);

        
        $__internal_d4335726d3f4ccd9d5cf568d460eae58a6498643ba4791da757c1620cbf1ee4a->leave($__internal_d4335726d3f4ccd9d5cf568d460eae58a6498643ba4791da757c1620cbf1ee4a_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_3cddabaff96ec21af78ff5a025ee29c0810be50b204aef8845c23f73f0ba0521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cddabaff96ec21af78ff5a025ee29c0810be50b204aef8845c23f73f0ba0521->enter($__internal_3cddabaff96ec21af78ff5a025ee29c0810be50b204aef8845c23f73f0ba0521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_01dda717d5c584be8f7704ff36beebe56f7e3ee78fcc48c1cbe202cf0efad052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01dda717d5c584be8f7704ff36beebe56f7e3ee78fcc48c1cbe202cf0efad052->enter($__internal_01dda717d5c584be8f7704ff36beebe56f7e3ee78fcc48c1cbe202cf0efad052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_01dda717d5c584be8f7704ff36beebe56f7e3ee78fcc48c1cbe202cf0efad052->leave($__internal_01dda717d5c584be8f7704ff36beebe56f7e3ee78fcc48c1cbe202cf0efad052_prof);

        
        $__internal_3cddabaff96ec21af78ff5a025ee29c0810be50b204aef8845c23f73f0ba0521->leave($__internal_3cddabaff96ec21af78ff5a025ee29c0810be50b204aef8845c23f73f0ba0521_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_9352d60b83b1aad1116109a0dc3b0c1706490014be77bef362ff26975208d26b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9352d60b83b1aad1116109a0dc3b0c1706490014be77bef362ff26975208d26b->enter($__internal_9352d60b83b1aad1116109a0dc3b0c1706490014be77bef362ff26975208d26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_916be8a1cddc5e7d074c56b4de95fd02f731d2d67509e34b7a05ab3d0e1f4bb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_916be8a1cddc5e7d074c56b4de95fd02f731d2d67509e34b7a05ab3d0e1f4bb7->enter($__internal_916be8a1cddc5e7d074c56b4de95fd02f731d2d67509e34b7a05ab3d0e1f4bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_916be8a1cddc5e7d074c56b4de95fd02f731d2d67509e34b7a05ab3d0e1f4bb7->leave($__internal_916be8a1cddc5e7d074c56b4de95fd02f731d2d67509e34b7a05ab3d0e1f4bb7_prof);

        
        $__internal_9352d60b83b1aad1116109a0dc3b0c1706490014be77bef362ff26975208d26b->leave($__internal_9352d60b83b1aad1116109a0dc3b0c1706490014be77bef362ff26975208d26b_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_acbf38eebfe81123d9ee763f40cb7b7baddc3a5589d32edf838a585c9f7f5750 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acbf38eebfe81123d9ee763f40cb7b7baddc3a5589d32edf838a585c9f7f5750->enter($__internal_acbf38eebfe81123d9ee763f40cb7b7baddc3a5589d32edf838a585c9f7f5750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_acba5ebdf1b38272372f51d6de671d44497510cda9a048dd28ddeecffd5a336b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acba5ebdf1b38272372f51d6de671d44497510cda9a048dd28ddeecffd5a336b->enter($__internal_acba5ebdf1b38272372f51d6de671d44497510cda9a048dd28ddeecffd5a336b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_acba5ebdf1b38272372f51d6de671d44497510cda9a048dd28ddeecffd5a336b->leave($__internal_acba5ebdf1b38272372f51d6de671d44497510cda9a048dd28ddeecffd5a336b_prof);

        
        $__internal_acbf38eebfe81123d9ee763f40cb7b7baddc3a5589d32edf838a585c9f7f5750->leave($__internal_acbf38eebfe81123d9ee763f40cb7b7baddc3a5589d32edf838a585c9f7f5750_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_5922c41e7c1406a9882ac602819f485f72410adfbfe182905918abd4d405e438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5922c41e7c1406a9882ac602819f485f72410adfbfe182905918abd4d405e438->enter($__internal_5922c41e7c1406a9882ac602819f485f72410adfbfe182905918abd4d405e438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_bb85a6ca953d108ab0eea37e48c77bc1e4e9cbdb3399a64e6533c6b80e42eeba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb85a6ca953d108ab0eea37e48c77bc1e4e9cbdb3399a64e6533c6b80e42eeba->enter($__internal_bb85a6ca953d108ab0eea37e48c77bc1e4e9cbdb3399a64e6533c6b80e42eeba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_bb85a6ca953d108ab0eea37e48c77bc1e4e9cbdb3399a64e6533c6b80e42eeba->leave($__internal_bb85a6ca953d108ab0eea37e48c77bc1e4e9cbdb3399a64e6533c6b80e42eeba_prof);

        
        $__internal_5922c41e7c1406a9882ac602819f485f72410adfbfe182905918abd4d405e438->leave($__internal_5922c41e7c1406a9882ac602819f485f72410adfbfe182905918abd4d405e438_prof);

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
