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
        $__internal_5cb5aa156642bef214d8c89fecbfed068f92e3e9871fc457d5b7b0a1c8372bd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cb5aa156642bef214d8c89fecbfed068f92e3e9871fc457d5b7b0a1c8372bd7->enter($__internal_5cb5aa156642bef214d8c89fecbfed068f92e3e9871fc457d5b7b0a1c8372bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_d973c125f30da65c56b87d0ad604a4260ec0579ed724d84f922395b3f0b64285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d973c125f30da65c56b87d0ad604a4260ec0579ed724d84f922395b3f0b64285->enter($__internal_d973c125f30da65c56b87d0ad604a4260ec0579ed724d84f922395b3f0b64285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_5cb5aa156642bef214d8c89fecbfed068f92e3e9871fc457d5b7b0a1c8372bd7->leave($__internal_5cb5aa156642bef214d8c89fecbfed068f92e3e9871fc457d5b7b0a1c8372bd7_prof);

        
        $__internal_d973c125f30da65c56b87d0ad604a4260ec0579ed724d84f922395b3f0b64285->leave($__internal_d973c125f30da65c56b87d0ad604a4260ec0579ed724d84f922395b3f0b64285_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_4462a8f293cd9a2a1f0e7b28e37dd9552b1c1264f53ec4280839d040633e89b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4462a8f293cd9a2a1f0e7b28e37dd9552b1c1264f53ec4280839d040633e89b2->enter($__internal_4462a8f293cd9a2a1f0e7b28e37dd9552b1c1264f53ec4280839d040633e89b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_128ddfa6009ff42959b3a6246514c41bb94f8b844ad6c9d378b1abe993a027db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_128ddfa6009ff42959b3a6246514c41bb94f8b844ad6c9d378b1abe993a027db->enter($__internal_128ddfa6009ff42959b3a6246514c41bb94f8b844ad6c9d378b1abe993a027db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_128ddfa6009ff42959b3a6246514c41bb94f8b844ad6c9d378b1abe993a027db->leave($__internal_128ddfa6009ff42959b3a6246514c41bb94f8b844ad6c9d378b1abe993a027db_prof);

        
        $__internal_4462a8f293cd9a2a1f0e7b28e37dd9552b1c1264f53ec4280839d040633e89b2->leave($__internal_4462a8f293cd9a2a1f0e7b28e37dd9552b1c1264f53ec4280839d040633e89b2_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_64f7467c4c545a950db4f693b6b910cab4c7211813d21d4a6585cb925784ca86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64f7467c4c545a950db4f693b6b910cab4c7211813d21d4a6585cb925784ca86->enter($__internal_64f7467c4c545a950db4f693b6b910cab4c7211813d21d4a6585cb925784ca86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_d0df016014b9d90baebe36dfcb69895939b2e9438efebd1be2a64ad278ee0156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0df016014b9d90baebe36dfcb69895939b2e9438efebd1be2a64ad278ee0156->enter($__internal_d0df016014b9d90baebe36dfcb69895939b2e9438efebd1be2a64ad278ee0156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_d0df016014b9d90baebe36dfcb69895939b2e9438efebd1be2a64ad278ee0156->leave($__internal_d0df016014b9d90baebe36dfcb69895939b2e9438efebd1be2a64ad278ee0156_prof);

        
        $__internal_64f7467c4c545a950db4f693b6b910cab4c7211813d21d4a6585cb925784ca86->leave($__internal_64f7467c4c545a950db4f693b6b910cab4c7211813d21d4a6585cb925784ca86_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_2895c1c78ba6658bc18471d7d51d3f06f9221aed48d6dba44e436ab61a0c7fcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2895c1c78ba6658bc18471d7d51d3f06f9221aed48d6dba44e436ab61a0c7fcb->enter($__internal_2895c1c78ba6658bc18471d7d51d3f06f9221aed48d6dba44e436ab61a0c7fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_835f675458c3757558dba890183114e7a298b7b248647db456c590848db190d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_835f675458c3757558dba890183114e7a298b7b248647db456c590848db190d0->enter($__internal_835f675458c3757558dba890183114e7a298b7b248647db456c590848db190d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_835f675458c3757558dba890183114e7a298b7b248647db456c590848db190d0->leave($__internal_835f675458c3757558dba890183114e7a298b7b248647db456c590848db190d0_prof);

        
        $__internal_2895c1c78ba6658bc18471d7d51d3f06f9221aed48d6dba44e436ab61a0c7fcb->leave($__internal_2895c1c78ba6658bc18471d7d51d3f06f9221aed48d6dba44e436ab61a0c7fcb_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_f92ffc10c006fd8d6dae3bcb6143aafde52345f791d511f87c0bb6dda7f29f1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f92ffc10c006fd8d6dae3bcb6143aafde52345f791d511f87c0bb6dda7f29f1e->enter($__internal_f92ffc10c006fd8d6dae3bcb6143aafde52345f791d511f87c0bb6dda7f29f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_4ab50872bca98e53845e675c5295f57a637eaee6bc5d719c7418150411577ef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ab50872bca98e53845e675c5295f57a637eaee6bc5d719c7418150411577ef2->enter($__internal_4ab50872bca98e53845e675c5295f57a637eaee6bc5d719c7418150411577ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_5320853450e4def1ac00ee439e58aa77b1203ac1f1cde7f30196384001df070f = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_5e5458115be29333e00203d147e7f1b1859cc328c665f3caf77ddc6927caa49b = "{{") && ('' === $__internal_5e5458115be29333e00203d147e7f1b1859cc328c665f3caf77ddc6927caa49b || 0 === strpos($__internal_5320853450e4def1ac00ee439e58aa77b1203ac1f1cde7f30196384001df070f, $__internal_5e5458115be29333e00203d147e7f1b1859cc328c665f3caf77ddc6927caa49b)));
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
        
        $__internal_4ab50872bca98e53845e675c5295f57a637eaee6bc5d719c7418150411577ef2->leave($__internal_4ab50872bca98e53845e675c5295f57a637eaee6bc5d719c7418150411577ef2_prof);

        
        $__internal_f92ffc10c006fd8d6dae3bcb6143aafde52345f791d511f87c0bb6dda7f29f1e->leave($__internal_f92ffc10c006fd8d6dae3bcb6143aafde52345f791d511f87c0bb6dda7f29f1e_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_adc6eb0bbd200132e2ec6b9d54bc3fe5fad73d25282551c01c71ce5bccbc2b1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adc6eb0bbd200132e2ec6b9d54bc3fe5fad73d25282551c01c71ce5bccbc2b1a->enter($__internal_adc6eb0bbd200132e2ec6b9d54bc3fe5fad73d25282551c01c71ce5bccbc2b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_6856e96c5f859ff034850c4cfa19e1cd3c4a205ef170df8e672be63995584523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6856e96c5f859ff034850c4cfa19e1cd3c4a205ef170df8e672be63995584523->enter($__internal_6856e96c5f859ff034850c4cfa19e1cd3c4a205ef170df8e672be63995584523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_6856e96c5f859ff034850c4cfa19e1cd3c4a205ef170df8e672be63995584523->leave($__internal_6856e96c5f859ff034850c4cfa19e1cd3c4a205ef170df8e672be63995584523_prof);

        
        $__internal_adc6eb0bbd200132e2ec6b9d54bc3fe5fad73d25282551c01c71ce5bccbc2b1a->leave($__internal_adc6eb0bbd200132e2ec6b9d54bc3fe5fad73d25282551c01c71ce5bccbc2b1a_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_009acfc78ea3aec923cda101a2e3aacda6fc4cff9e52342ba3e8bf349b993c50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_009acfc78ea3aec923cda101a2e3aacda6fc4cff9e52342ba3e8bf349b993c50->enter($__internal_009acfc78ea3aec923cda101a2e3aacda6fc4cff9e52342ba3e8bf349b993c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_5c0d62aea69363f98697a5852b45d3ce4c6fce3467fbada69d5c0f04856becd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c0d62aea69363f98697a5852b45d3ce4c6fce3467fbada69d5c0f04856becd2->enter($__internal_5c0d62aea69363f98697a5852b45d3ce4c6fce3467fbada69d5c0f04856becd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_5c0d62aea69363f98697a5852b45d3ce4c6fce3467fbada69d5c0f04856becd2->leave($__internal_5c0d62aea69363f98697a5852b45d3ce4c6fce3467fbada69d5c0f04856becd2_prof);

        
        $__internal_009acfc78ea3aec923cda101a2e3aacda6fc4cff9e52342ba3e8bf349b993c50->leave($__internal_009acfc78ea3aec923cda101a2e3aacda6fc4cff9e52342ba3e8bf349b993c50_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_cf2e4924f55deeb28178da92e5dc22a42300772a92cf5c3fa294c08a50c9aebb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf2e4924f55deeb28178da92e5dc22a42300772a92cf5c3fa294c08a50c9aebb->enter($__internal_cf2e4924f55deeb28178da92e5dc22a42300772a92cf5c3fa294c08a50c9aebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_a5cbf04123482e0d2148e7603906ec0f7509d436d16304658353d427dec9d7b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5cbf04123482e0d2148e7603906ec0f7509d436d16304658353d427dec9d7b7->enter($__internal_a5cbf04123482e0d2148e7603906ec0f7509d436d16304658353d427dec9d7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_a5cbf04123482e0d2148e7603906ec0f7509d436d16304658353d427dec9d7b7->leave($__internal_a5cbf04123482e0d2148e7603906ec0f7509d436d16304658353d427dec9d7b7_prof);

        
        $__internal_cf2e4924f55deeb28178da92e5dc22a42300772a92cf5c3fa294c08a50c9aebb->leave($__internal_cf2e4924f55deeb28178da92e5dc22a42300772a92cf5c3fa294c08a50c9aebb_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_33958679ba6da5f1d55c414e8d2ce06ff544abf4f0a2aa16fb9fee5f6eaa84ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33958679ba6da5f1d55c414e8d2ce06ff544abf4f0a2aa16fb9fee5f6eaa84ba->enter($__internal_33958679ba6da5f1d55c414e8d2ce06ff544abf4f0a2aa16fb9fee5f6eaa84ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_b90e96d9e489fceca166702d8a6fe2d094cd757439bcdf4a87823e6c44cf5e14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b90e96d9e489fceca166702d8a6fe2d094cd757439bcdf4a87823e6c44cf5e14->enter($__internal_b90e96d9e489fceca166702d8a6fe2d094cd757439bcdf4a87823e6c44cf5e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_b90e96d9e489fceca166702d8a6fe2d094cd757439bcdf4a87823e6c44cf5e14->leave($__internal_b90e96d9e489fceca166702d8a6fe2d094cd757439bcdf4a87823e6c44cf5e14_prof);

        
        $__internal_33958679ba6da5f1d55c414e8d2ce06ff544abf4f0a2aa16fb9fee5f6eaa84ba->leave($__internal_33958679ba6da5f1d55c414e8d2ce06ff544abf4f0a2aa16fb9fee5f6eaa84ba_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_a07cf91542a7cf5800eed8611cb70a2d69124dc5d52dbfa124d5ad477eb95912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a07cf91542a7cf5800eed8611cb70a2d69124dc5d52dbfa124d5ad477eb95912->enter($__internal_a07cf91542a7cf5800eed8611cb70a2d69124dc5d52dbfa124d5ad477eb95912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_efac2d53bc590e29cc8c4ceb9c8aca86ef156ac36d6c78580fa6fc7828bc36e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efac2d53bc590e29cc8c4ceb9c8aca86ef156ac36d6c78580fa6fc7828bc36e5->enter($__internal_efac2d53bc590e29cc8c4ceb9c8aca86ef156ac36d6c78580fa6fc7828bc36e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_efac2d53bc590e29cc8c4ceb9c8aca86ef156ac36d6c78580fa6fc7828bc36e5->leave($__internal_efac2d53bc590e29cc8c4ceb9c8aca86ef156ac36d6c78580fa6fc7828bc36e5_prof);

        
        $__internal_a07cf91542a7cf5800eed8611cb70a2d69124dc5d52dbfa124d5ad477eb95912->leave($__internal_a07cf91542a7cf5800eed8611cb70a2d69124dc5d52dbfa124d5ad477eb95912_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_f373a12d9a4c4fdf261ef8747f0ae1dfe8cde382bdc2fc096d37fa56b10e890a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f373a12d9a4c4fdf261ef8747f0ae1dfe8cde382bdc2fc096d37fa56b10e890a->enter($__internal_f373a12d9a4c4fdf261ef8747f0ae1dfe8cde382bdc2fc096d37fa56b10e890a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_ccecbf09f115e98ab49909b283a76b3e95b3dc5fe62c215c3e44ad15f6572529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccecbf09f115e98ab49909b283a76b3e95b3dc5fe62c215c3e44ad15f6572529->enter($__internal_ccecbf09f115e98ab49909b283a76b3e95b3dc5fe62c215c3e44ad15f6572529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_ccecbf09f115e98ab49909b283a76b3e95b3dc5fe62c215c3e44ad15f6572529->leave($__internal_ccecbf09f115e98ab49909b283a76b3e95b3dc5fe62c215c3e44ad15f6572529_prof);

        
        $__internal_f373a12d9a4c4fdf261ef8747f0ae1dfe8cde382bdc2fc096d37fa56b10e890a->leave($__internal_f373a12d9a4c4fdf261ef8747f0ae1dfe8cde382bdc2fc096d37fa56b10e890a_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_ae85956a8ed01d8f1d13cf5b8c4808c7c131b7f771ff6da7603a68a9bdd3fe85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae85956a8ed01d8f1d13cf5b8c4808c7c131b7f771ff6da7603a68a9bdd3fe85->enter($__internal_ae85956a8ed01d8f1d13cf5b8c4808c7c131b7f771ff6da7603a68a9bdd3fe85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_626eb30b38e530532ea1bab62ca00d87ce32fe26d3d075cc21c40dda6a6e9646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_626eb30b38e530532ea1bab62ca00d87ce32fe26d3d075cc21c40dda6a6e9646->enter($__internal_626eb30b38e530532ea1bab62ca00d87ce32fe26d3d075cc21c40dda6a6e9646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_626eb30b38e530532ea1bab62ca00d87ce32fe26d3d075cc21c40dda6a6e9646->leave($__internal_626eb30b38e530532ea1bab62ca00d87ce32fe26d3d075cc21c40dda6a6e9646_prof);

        
        $__internal_ae85956a8ed01d8f1d13cf5b8c4808c7c131b7f771ff6da7603a68a9bdd3fe85->leave($__internal_ae85956a8ed01d8f1d13cf5b8c4808c7c131b7f771ff6da7603a68a9bdd3fe85_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_8b75971af7716cc055ca6100aff558ce27159aa108d3e6ce5da47cad4106df96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b75971af7716cc055ca6100aff558ce27159aa108d3e6ce5da47cad4106df96->enter($__internal_8b75971af7716cc055ca6100aff558ce27159aa108d3e6ce5da47cad4106df96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_1c63373fc0afcfe8ef41ef67be0159c5874491bf80a983f7d8e004dae47b4fec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c63373fc0afcfe8ef41ef67be0159c5874491bf80a983f7d8e004dae47b4fec->enter($__internal_1c63373fc0afcfe8ef41ef67be0159c5874491bf80a983f7d8e004dae47b4fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_1c63373fc0afcfe8ef41ef67be0159c5874491bf80a983f7d8e004dae47b4fec->leave($__internal_1c63373fc0afcfe8ef41ef67be0159c5874491bf80a983f7d8e004dae47b4fec_prof);

        
        $__internal_8b75971af7716cc055ca6100aff558ce27159aa108d3e6ce5da47cad4106df96->leave($__internal_8b75971af7716cc055ca6100aff558ce27159aa108d3e6ce5da47cad4106df96_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_ca2896844dcdb92e91dc915efd0636fa2b8aeaf898931b592148c957e86ca988 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca2896844dcdb92e91dc915efd0636fa2b8aeaf898931b592148c957e86ca988->enter($__internal_ca2896844dcdb92e91dc915efd0636fa2b8aeaf898931b592148c957e86ca988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_6d568df1e635f808fb09992e21cba5eb034f4d4e60d3ba45c148621b17486f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d568df1e635f808fb09992e21cba5eb034f4d4e60d3ba45c148621b17486f8d->enter($__internal_6d568df1e635f808fb09992e21cba5eb034f4d4e60d3ba45c148621b17486f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_6d568df1e635f808fb09992e21cba5eb034f4d4e60d3ba45c148621b17486f8d->leave($__internal_6d568df1e635f808fb09992e21cba5eb034f4d4e60d3ba45c148621b17486f8d_prof);

        
        $__internal_ca2896844dcdb92e91dc915efd0636fa2b8aeaf898931b592148c957e86ca988->leave($__internal_ca2896844dcdb92e91dc915efd0636fa2b8aeaf898931b592148c957e86ca988_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_1221dbf09c88b85ebcb5627b946de300f83ee020b35cc2a1270c86818cbda1f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1221dbf09c88b85ebcb5627b946de300f83ee020b35cc2a1270c86818cbda1f0->enter($__internal_1221dbf09c88b85ebcb5627b946de300f83ee020b35cc2a1270c86818cbda1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_f0709fbe3d74f60bdab13fdcdec88715db018dec3013274877eb255f9c5a4de0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0709fbe3d74f60bdab13fdcdec88715db018dec3013274877eb255f9c5a4de0->enter($__internal_f0709fbe3d74f60bdab13fdcdec88715db018dec3013274877eb255f9c5a4de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_f0709fbe3d74f60bdab13fdcdec88715db018dec3013274877eb255f9c5a4de0->leave($__internal_f0709fbe3d74f60bdab13fdcdec88715db018dec3013274877eb255f9c5a4de0_prof);

        
        $__internal_1221dbf09c88b85ebcb5627b946de300f83ee020b35cc2a1270c86818cbda1f0->leave($__internal_1221dbf09c88b85ebcb5627b946de300f83ee020b35cc2a1270c86818cbda1f0_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_88c3f29fd40a582b2e3934377d6d7b88fb1728d4f990a2a57b87240745808b0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88c3f29fd40a582b2e3934377d6d7b88fb1728d4f990a2a57b87240745808b0a->enter($__internal_88c3f29fd40a582b2e3934377d6d7b88fb1728d4f990a2a57b87240745808b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_443b7a36d48dab790fe78da0b7099752cec63543c46f631a24adbfe294f64fa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_443b7a36d48dab790fe78da0b7099752cec63543c46f631a24adbfe294f64fa3->enter($__internal_443b7a36d48dab790fe78da0b7099752cec63543c46f631a24adbfe294f64fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_443b7a36d48dab790fe78da0b7099752cec63543c46f631a24adbfe294f64fa3->leave($__internal_443b7a36d48dab790fe78da0b7099752cec63543c46f631a24adbfe294f64fa3_prof);

        
        $__internal_88c3f29fd40a582b2e3934377d6d7b88fb1728d4f990a2a57b87240745808b0a->leave($__internal_88c3f29fd40a582b2e3934377d6d7b88fb1728d4f990a2a57b87240745808b0a_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_a02d3117fe87f363c93dba783a90dc34f134c8174ee6b38a9356646bae2e5a93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a02d3117fe87f363c93dba783a90dc34f134c8174ee6b38a9356646bae2e5a93->enter($__internal_a02d3117fe87f363c93dba783a90dc34f134c8174ee6b38a9356646bae2e5a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_4e18f7de4acad6638b7421428951950315033db39c0171664a88e5bd25fe6726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e18f7de4acad6638b7421428951950315033db39c0171664a88e5bd25fe6726->enter($__internal_4e18f7de4acad6638b7421428951950315033db39c0171664a88e5bd25fe6726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_4e18f7de4acad6638b7421428951950315033db39c0171664a88e5bd25fe6726->leave($__internal_4e18f7de4acad6638b7421428951950315033db39c0171664a88e5bd25fe6726_prof);

        
        $__internal_a02d3117fe87f363c93dba783a90dc34f134c8174ee6b38a9356646bae2e5a93->leave($__internal_a02d3117fe87f363c93dba783a90dc34f134c8174ee6b38a9356646bae2e5a93_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_86d36f9237d59aa509abc0ccf3e2224a399a66704160cc30d412be0ffed6735e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86d36f9237d59aa509abc0ccf3e2224a399a66704160cc30d412be0ffed6735e->enter($__internal_86d36f9237d59aa509abc0ccf3e2224a399a66704160cc30d412be0ffed6735e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_2417140e54c2571457b6e2dc387844142ee65a824feb4d7deb4fa88165cd3c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2417140e54c2571457b6e2dc387844142ee65a824feb4d7deb4fa88165cd3c6e->enter($__internal_2417140e54c2571457b6e2dc387844142ee65a824feb4d7deb4fa88165cd3c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_2417140e54c2571457b6e2dc387844142ee65a824feb4d7deb4fa88165cd3c6e->leave($__internal_2417140e54c2571457b6e2dc387844142ee65a824feb4d7deb4fa88165cd3c6e_prof);

        
        $__internal_86d36f9237d59aa509abc0ccf3e2224a399a66704160cc30d412be0ffed6735e->leave($__internal_86d36f9237d59aa509abc0ccf3e2224a399a66704160cc30d412be0ffed6735e_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_d327c3a664c03b2059c4ce809df3d8903ddc1367d154e0db9afc8698caed06f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d327c3a664c03b2059c4ce809df3d8903ddc1367d154e0db9afc8698caed06f3->enter($__internal_d327c3a664c03b2059c4ce809df3d8903ddc1367d154e0db9afc8698caed06f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_014c0f9e3f087097281149fdbdcf6e63026099f889fabe228c580220d8ff05fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_014c0f9e3f087097281149fdbdcf6e63026099f889fabe228c580220d8ff05fe->enter($__internal_014c0f9e3f087097281149fdbdcf6e63026099f889fabe228c580220d8ff05fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_014c0f9e3f087097281149fdbdcf6e63026099f889fabe228c580220d8ff05fe->leave($__internal_014c0f9e3f087097281149fdbdcf6e63026099f889fabe228c580220d8ff05fe_prof);

        
        $__internal_d327c3a664c03b2059c4ce809df3d8903ddc1367d154e0db9afc8698caed06f3->leave($__internal_d327c3a664c03b2059c4ce809df3d8903ddc1367d154e0db9afc8698caed06f3_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_405c25cdee55056723eff09b4f5f5e85c2ff1bd0d163580f08a4ad2d04149ed7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_405c25cdee55056723eff09b4f5f5e85c2ff1bd0d163580f08a4ad2d04149ed7->enter($__internal_405c25cdee55056723eff09b4f5f5e85c2ff1bd0d163580f08a4ad2d04149ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_dcc9e3b38bdecfe3fef07b73f062578b88f4de67b360d769f8e6f3270a41757e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcc9e3b38bdecfe3fef07b73f062578b88f4de67b360d769f8e6f3270a41757e->enter($__internal_dcc9e3b38bdecfe3fef07b73f062578b88f4de67b360d769f8e6f3270a41757e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_dcc9e3b38bdecfe3fef07b73f062578b88f4de67b360d769f8e6f3270a41757e->leave($__internal_dcc9e3b38bdecfe3fef07b73f062578b88f4de67b360d769f8e6f3270a41757e_prof);

        
        $__internal_405c25cdee55056723eff09b4f5f5e85c2ff1bd0d163580f08a4ad2d04149ed7->leave($__internal_405c25cdee55056723eff09b4f5f5e85c2ff1bd0d163580f08a4ad2d04149ed7_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_106135b2106104b8c2f1087a7cb08f1c5ddb3f512adfe6415aa71cc079e688f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_106135b2106104b8c2f1087a7cb08f1c5ddb3f512adfe6415aa71cc079e688f5->enter($__internal_106135b2106104b8c2f1087a7cb08f1c5ddb3f512adfe6415aa71cc079e688f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_c5b0d2aa3ebb8be481f1dd8a5585119c2a928d706c7fd8033ba0cf9ec69d0238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5b0d2aa3ebb8be481f1dd8a5585119c2a928d706c7fd8033ba0cf9ec69d0238->enter($__internal_c5b0d2aa3ebb8be481f1dd8a5585119c2a928d706c7fd8033ba0cf9ec69d0238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_c5b0d2aa3ebb8be481f1dd8a5585119c2a928d706c7fd8033ba0cf9ec69d0238->leave($__internal_c5b0d2aa3ebb8be481f1dd8a5585119c2a928d706c7fd8033ba0cf9ec69d0238_prof);

        
        $__internal_106135b2106104b8c2f1087a7cb08f1c5ddb3f512adfe6415aa71cc079e688f5->leave($__internal_106135b2106104b8c2f1087a7cb08f1c5ddb3f512adfe6415aa71cc079e688f5_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_76b86be68822030694fe2c8493233913e0448a1ee04789a6ee731d4cd4b26172 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76b86be68822030694fe2c8493233913e0448a1ee04789a6ee731d4cd4b26172->enter($__internal_76b86be68822030694fe2c8493233913e0448a1ee04789a6ee731d4cd4b26172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_f2de08104858b6f89a63d8ac7097601acaaa8a65831df92f28f98449760ec427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2de08104858b6f89a63d8ac7097601acaaa8a65831df92f28f98449760ec427->enter($__internal_f2de08104858b6f89a63d8ac7097601acaaa8a65831df92f28f98449760ec427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f2de08104858b6f89a63d8ac7097601acaaa8a65831df92f28f98449760ec427->leave($__internal_f2de08104858b6f89a63d8ac7097601acaaa8a65831df92f28f98449760ec427_prof);

        
        $__internal_76b86be68822030694fe2c8493233913e0448a1ee04789a6ee731d4cd4b26172->leave($__internal_76b86be68822030694fe2c8493233913e0448a1ee04789a6ee731d4cd4b26172_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_8a68211845ee89e7a61c0cc3ee385417c890213b74e833ba6ee1f00e5efe917b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a68211845ee89e7a61c0cc3ee385417c890213b74e833ba6ee1f00e5efe917b->enter($__internal_8a68211845ee89e7a61c0cc3ee385417c890213b74e833ba6ee1f00e5efe917b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_a0eb835181857fc0fcdb60942e1f9ac84c9f3eb1a662a4a88e42b80010365a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0eb835181857fc0fcdb60942e1f9ac84c9f3eb1a662a4a88e42b80010365a91->enter($__internal_a0eb835181857fc0fcdb60942e1f9ac84c9f3eb1a662a4a88e42b80010365a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a0eb835181857fc0fcdb60942e1f9ac84c9f3eb1a662a4a88e42b80010365a91->leave($__internal_a0eb835181857fc0fcdb60942e1f9ac84c9f3eb1a662a4a88e42b80010365a91_prof);

        
        $__internal_8a68211845ee89e7a61c0cc3ee385417c890213b74e833ba6ee1f00e5efe917b->leave($__internal_8a68211845ee89e7a61c0cc3ee385417c890213b74e833ba6ee1f00e5efe917b_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_6d7c0b9fc610d3e8e700853f5fc480624a39e3443fa75de785bf6bfa4c98f6f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d7c0b9fc610d3e8e700853f5fc480624a39e3443fa75de785bf6bfa4c98f6f7->enter($__internal_6d7c0b9fc610d3e8e700853f5fc480624a39e3443fa75de785bf6bfa4c98f6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_78bdde628eee6479728d78daa51a4ca9e21993cb86848773963ec66d66e514af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78bdde628eee6479728d78daa51a4ca9e21993cb86848773963ec66d66e514af->enter($__internal_78bdde628eee6479728d78daa51a4ca9e21993cb86848773963ec66d66e514af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_78bdde628eee6479728d78daa51a4ca9e21993cb86848773963ec66d66e514af->leave($__internal_78bdde628eee6479728d78daa51a4ca9e21993cb86848773963ec66d66e514af_prof);

        
        $__internal_6d7c0b9fc610d3e8e700853f5fc480624a39e3443fa75de785bf6bfa4c98f6f7->leave($__internal_6d7c0b9fc610d3e8e700853f5fc480624a39e3443fa75de785bf6bfa4c98f6f7_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_d42e02899792c7aab650546a75cce43a2adf824f1917f87fcd2b49d19e4518de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d42e02899792c7aab650546a75cce43a2adf824f1917f87fcd2b49d19e4518de->enter($__internal_d42e02899792c7aab650546a75cce43a2adf824f1917f87fcd2b49d19e4518de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_25f0eb43e06646ede4680db6c74a6028a3402adfdb44bf947a2c2a576cdf6455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25f0eb43e06646ede4680db6c74a6028a3402adfdb44bf947a2c2a576cdf6455->enter($__internal_25f0eb43e06646ede4680db6c74a6028a3402adfdb44bf947a2c2a576cdf6455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_25f0eb43e06646ede4680db6c74a6028a3402adfdb44bf947a2c2a576cdf6455->leave($__internal_25f0eb43e06646ede4680db6c74a6028a3402adfdb44bf947a2c2a576cdf6455_prof);

        
        $__internal_d42e02899792c7aab650546a75cce43a2adf824f1917f87fcd2b49d19e4518de->leave($__internal_d42e02899792c7aab650546a75cce43a2adf824f1917f87fcd2b49d19e4518de_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_ed37f76b1e31ea79071f597ee6124461d23df42ab66b1e6787eb4e2cfa03458f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed37f76b1e31ea79071f597ee6124461d23df42ab66b1e6787eb4e2cfa03458f->enter($__internal_ed37f76b1e31ea79071f597ee6124461d23df42ab66b1e6787eb4e2cfa03458f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_c140169714abeaf3870a1c42e17f7712ef4c760db989a2e36c28fefbe935038e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c140169714abeaf3870a1c42e17f7712ef4c760db989a2e36c28fefbe935038e->enter($__internal_c140169714abeaf3870a1c42e17f7712ef4c760db989a2e36c28fefbe935038e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_c140169714abeaf3870a1c42e17f7712ef4c760db989a2e36c28fefbe935038e->leave($__internal_c140169714abeaf3870a1c42e17f7712ef4c760db989a2e36c28fefbe935038e_prof);

        
        $__internal_ed37f76b1e31ea79071f597ee6124461d23df42ab66b1e6787eb4e2cfa03458f->leave($__internal_ed37f76b1e31ea79071f597ee6124461d23df42ab66b1e6787eb4e2cfa03458f_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_ab5921be0134e7386f2f1af7ee00af13c048cc2382b6cee11ac78098e6718ee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab5921be0134e7386f2f1af7ee00af13c048cc2382b6cee11ac78098e6718ee8->enter($__internal_ab5921be0134e7386f2f1af7ee00af13c048cc2382b6cee11ac78098e6718ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_40db4aa40944ba760b51f05fbc8b4f64dadb0ced4e9d4820ff339d9d428891ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40db4aa40944ba760b51f05fbc8b4f64dadb0ced4e9d4820ff339d9d428891ce->enter($__internal_40db4aa40944ba760b51f05fbc8b4f64dadb0ced4e9d4820ff339d9d428891ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_40db4aa40944ba760b51f05fbc8b4f64dadb0ced4e9d4820ff339d9d428891ce->leave($__internal_40db4aa40944ba760b51f05fbc8b4f64dadb0ced4e9d4820ff339d9d428891ce_prof);

        
        $__internal_ab5921be0134e7386f2f1af7ee00af13c048cc2382b6cee11ac78098e6718ee8->leave($__internal_ab5921be0134e7386f2f1af7ee00af13c048cc2382b6cee11ac78098e6718ee8_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_c85e29707418950b95efb93061708fadbd47c5a19bfe06861e825cc3188e853f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c85e29707418950b95efb93061708fadbd47c5a19bfe06861e825cc3188e853f->enter($__internal_c85e29707418950b95efb93061708fadbd47c5a19bfe06861e825cc3188e853f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_321c4b3ff0fb2193f2ae28a5f91605329418872a11b905215201a4c6c79bc9cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_321c4b3ff0fb2193f2ae28a5f91605329418872a11b905215201a4c6c79bc9cb->enter($__internal_321c4b3ff0fb2193f2ae28a5f91605329418872a11b905215201a4c6c79bc9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_321c4b3ff0fb2193f2ae28a5f91605329418872a11b905215201a4c6c79bc9cb->leave($__internal_321c4b3ff0fb2193f2ae28a5f91605329418872a11b905215201a4c6c79bc9cb_prof);

        
        $__internal_c85e29707418950b95efb93061708fadbd47c5a19bfe06861e825cc3188e853f->leave($__internal_c85e29707418950b95efb93061708fadbd47c5a19bfe06861e825cc3188e853f_prof);

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
