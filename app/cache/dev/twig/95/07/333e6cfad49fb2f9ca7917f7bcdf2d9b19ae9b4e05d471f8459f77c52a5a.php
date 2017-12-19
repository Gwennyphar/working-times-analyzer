<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_9507333e6cfad49fb2f9ca7917f7bcdf2d9b19ae9b4e05d471f8459f77c52a5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getAttribute($this->getContext($context, "trace"), "function", array())) {
            // line 2
            echo "    at ";
            echo (($this->getAttribute($this->getContext($context, "trace"), "class", array()) . $this->getAttribute($this->getContext($context, "trace"), "type", array())) . $this->getAttribute($this->getContext($context, "trace"), "function", array()));
            echo "(";
            echo $this->env->getExtension('code')->formatArgsAsText($this->getAttribute($this->getContext($context, "trace"), "args", array()));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute($this->getContext($context, "trace", true), "file", array(), "any", true, true) && $this->getAttribute($this->getContext($context, "trace", true), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo $this->getAttribute($this->getContext($context, "trace"), "file", array());
            echo " line ";
            echo $this->getAttribute($this->getContext($context, "trace"), "line", array());
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  33 => 6,  29 => 4,  21 => 2,  19 => 1,);
    }
}
