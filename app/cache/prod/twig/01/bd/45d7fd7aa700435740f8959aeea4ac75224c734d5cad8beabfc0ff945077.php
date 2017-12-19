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
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "userId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Vorname</th>
                <td>";
        // line 14
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "vname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 18
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datum</th>
                <td>";
        // line 22
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "datum", array()), "d.m.Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Kommen</th>
                <td>";
        // line 26
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        if ($this->getAttribute($_entity_, "kommen", array())) {
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "kommen", array()), "H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Gehen</th>
                <td>";
        // line 30
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        if ($this->getAttribute($_entity_, "gehen", array())) {
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "gehen", array()), "H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Pause</th>
                <td>";
        // line 34
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        if ($this->getAttribute($_entity_, "pause", array())) {
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "pause", array()), "H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Arbeitsstunden</th>
                <td>";
        // line 38
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        if ($this->getAttribute($_entity_, "total", array())) {
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "total", array()), "H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 42
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "statusId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Bemerkung</th>
                <td>";
        // line 46
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "bemerkung", array()), "html", null, true);
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
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("time_edit", array("id" => $this->getAttribute($_entity_, "id", array()))), "html", null, true);
        echo "\">
            Bearbeiten
        </a>
    </td>
    <td>";
        // line 63
        if (isset($context["delete_form"])) { $_delete_form_ = $context["delete_form"]; } else { $_delete_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_delete_form_, 'form');
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
        return array (  159 => 63,  151 => 59,  142 => 53,  131 => 46,  123 => 42,  112 => 38,  101 => 34,  90 => 30,  79 => 26,  71 => 22,  63 => 18,  55 => 14,  47 => 10,  39 => 4,  36 => 3,  11 => 1,);
    }
}
