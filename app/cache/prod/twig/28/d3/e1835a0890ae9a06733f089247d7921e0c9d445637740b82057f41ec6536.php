<?php

/* AppBundleTimeBundle:time:edit.html.twig */
class __TwigTemplate_28d3e1835a0890ae9a06733f089247d7921e0c9d445637740b82057f41ec6536 extends Twig_Template
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
        echo "<h1>Arbeitszeit bearbeiten</h1>
    ";
        // line 5
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_edit_form_, 'form');
        echo "
    ";
        // line 6
        if (isset($context["delete_form"])) { $_delete_form_ = $context["delete_form"]; } else { $_delete_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_delete_form_, 'form');
        echo "
    <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("time");
        echo "\">Alle anzeigen</a>
";
    }

    public function getTemplateName()
    {
        return "AppBundleTimeBundle:time:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  47 => 6,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
