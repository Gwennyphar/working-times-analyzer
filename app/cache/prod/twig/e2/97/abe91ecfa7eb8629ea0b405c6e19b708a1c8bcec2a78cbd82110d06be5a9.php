<?php

/* AppBundleTimeBundle:time:import.html.twig */
class __TwigTemplate_e297abe91ecfa7eb8629ea0b405c6e19b708a1c8bcec2a78cbd82110d06be5a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        if (isset($context["import"])) { $_import_ = $context["import"]; } else { $_import_ = null; }
        echo twig_escape_filter($this->env, $_import_, "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "AppBundleTimeBundle:time:import.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  36 => 3,  11 => 1,);
    }
}
