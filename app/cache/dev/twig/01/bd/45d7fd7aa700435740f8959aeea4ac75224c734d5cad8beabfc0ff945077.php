<?php

/* AppBundleTimeBundle:time:show.html.twig */
class __TwigTemplate_01bd45d7fd7aa700435740f8959aeea4ac75224c734d5cad8beabfc0ff945077 extends Twig_Template
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
        echo "<h1>Arbeitszeiten</h1>

    <table class=\"tabelle\">
        <tbody>
            <tr>
                <th>User</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "userId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Vorname</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "vname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datum</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "datum", array()), "d.m.Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Kommen</th>
                <td>";
        // line 26
        if ($this->getAttribute($this->getContext($context, "entity"), "kommen", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "kommen", array()), "H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Gehen</th>
                <td>";
        // line 30
        if ($this->getAttribute($this->getContext($context, "entity"), "gehen", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "gehen", array()), "H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Pause</th>
                <td>";
        // line 34
        if ($this->getAttribute($this->getContext($context, "entity"), "pause", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "pause", array()), "H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Arbeitsstunden</th>
                <td>";
        // line 38
        if ($this->getAttribute($this->getContext($context, "entity"), "total", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "total", array()), "H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "statusId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Bemerkung</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "bemerkung", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    <br />
\t<tr>
    <td>
        <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("time");
        echo "\">
            Alle anzeigen
        </a>
    </td>
    &nbsp;
    <td>
        <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("time_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array()))), "html", null, true);
        echo "\">
            Bearbeiten
        </a>
    </td>
    <td>";
        // line 63
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form');
        echo "</td>
    </tr>
";
    }

    public function getTemplateName()
    {
        return "AppBundleTimeBundle:time:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 63,  137 => 59,  128 => 53,  118 => 46,  111 => 42,  102 => 38,  93 => 34,  84 => 30,  75 => 26,  68 => 22,  61 => 18,  54 => 14,  47 => 10,  39 => 4,  36 => 3,  11 => 1,);
    }
}
