<?php

/* ::layout.html.twig */
class __TwigTemplate_72b958d1920906feadf61115cf0a2177f8d7b79ea3b15302cd53a2680a6f335b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Arbeitszeiterfassung";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f315b8c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f315b8c_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/f315b8c_part_1_bootstrap-theme_1.css");
            // line 5
            echo "    <link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"/>
  ";
            // asset "f315b8c_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f315b8c_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/f315b8c_part_1_bootstrap-theme.css_2.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"/>
  ";
            // asset "f315b8c_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f315b8c_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/f315b8c_part_1_bootstrap-theme.min_3.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"/>
  ";
            // asset "f315b8c_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f315b8c_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/f315b8c_part_1_bootstrap_4.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"/>
  ";
            // asset "f315b8c_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f315b8c_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/f315b8c_part_1_bootstrap.css_5.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"/>
  ";
            // asset "f315b8c_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f315b8c_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/f315b8c_part_1_bootstrap.min_6.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"/>
  ";
            // asset "f315b8c_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f315b8c_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/f315b8c_part_1_main_7.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"/>
  ";
        } else {
            // asset "f315b8c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f315b8c") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/f315b8c.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"/>
  ";
        }
        unset($context["asset_url"]);
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
        } else {
            // asset "46414bd"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_46414bd") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/46414bd.js");
            // line 8
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 8,  101 => 7,  51 => 5,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
