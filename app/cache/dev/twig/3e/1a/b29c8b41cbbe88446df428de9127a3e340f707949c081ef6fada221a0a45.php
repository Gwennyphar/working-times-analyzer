<?php

/* AppBundleTimeBundle:time:index.html.twig */
class __TwigTemplate_3e1ab29c8b41cbbe88446df428de9127a3e340f707949c081ef6fada221a0a45 extends Twig_Template
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<h1>Arbeitszeiten</h1>

    <table class=\"tabelle\">
        <thead>
            <tr>
                <th>User</th>
                <th>Vorname</th>
                <th>Name</th>
                <th>Wochentag</th>
                <th>Datum</th>
                <th>Kommen</th>
                <th>Gehen</th>
                <th>Pause</th>
                <th>Arbeitsstunden</th>
                <th>Status</th>
                <th>Bemerkung</th>
                <th>Aktionen</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 24
            echo "            <tr>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "userId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "vname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 28
            if (((twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datum", array()), "w") == 0) || (twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datum", array()), "w") == 6))) {
                // line 29
                echo "                style=\"background-color: ";
                echo twig_escape_filter($this->env, ((array_key_exists("backgroundColor", $context)) ? (                // line 30
$this->getContext($context, "backgroundColor")) : ("yellow")), "html", null, true);
                echo ";\"
                ";
            } elseif ((($this->getAttribute(            // line 31
$context["entity"], "statusId", array()) == 1) || ($this->getAttribute($context["entity"], "statusId", array()) == 2))) {
                // line 32
                echo "                style=\"background-color: ";
                echo twig_escape_filter($this->env, ((array_key_exists("backgroundColor", $context)) ? (                // line 33
$this->getContext($context, "backgroundColor")) : ("red")), "html", null, true);
                echo ";\"
                ";
            } else {
                // line 35
                echo "                style=\"background-color: ";
                echo twig_escape_filter($this->env, ((array_key_exists("backgroundColor", $context)) ? (                // line 36
$this->getContext($context, "backgroundColor")) : ("lightgreen")), "html", null, true);
                echo ";\"
                ";
            }
            // line 37
            echo ">
\t\t\t\t\t";
            // line 38
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datum", array()), "w") == 0)) {
                echo "Son";
                echo "
\t\t\t\t\t";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 39
$context["entity"], "datum", array()), "w") == 1)) {
                echo "Mo";
                echo "
\t\t\t\t\t";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 40
$context["entity"], "datum", array()), "w") == 2)) {
                echo "Di";
                echo "
\t\t\t\t\t";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 41
$context["entity"], "datum", array()), "w") == 3)) {
                echo "Mi";
                echo "
\t\t\t\t\t";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 42
$context["entity"], "datum", array()), "w") == 4)) {
                echo "Do";
                echo "
\t\t\t\t\t";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 43
$context["entity"], "datum", array()), "w") == 5)) {
                echo "Fr";
                echo "
\t\t\t\t\t";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 44
$context["entity"], "datum", array()), "w") == 6)) {
                echo "Sa";
                echo "
\t\t\t\t\t";
            }
            // line 46
            echo "                </td>
                <td>";
            // line 47
            if ($this->getAttribute($context["entity"], "datum", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datum", array()), "d.m.Y"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 48
            if ($this->getAttribute($context["entity"], "kommen", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "kommen", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 49
            if ($this->getAttribute($context["entity"], "gehen", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "gehen", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 50
            if ($this->getAttribute($context["entity"], "pause", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "pause", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 51
            if ($this->getAttribute($context["entity"], "total", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "total", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td> 
\t\t\t\t\t";
            // line 53
            if (($this->getAttribute($context["entity"], "statusId", array()) == 1)) {
                echo " ";
                echo "Urlaub";
                echo " 
\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 54
$context["entity"], "statusId", array()) == 2)) {
                echo " ";
                echo "Krankheit";
                echo " 
\t\t\t\t\t";
            } elseif (((twig_date_format_filter($this->env, $this->getAttribute(            // line 55
$context["entity"], "datum", array()), "w") == 0) || (twig_date_format_filter($this->env, $this->getAttribute(            // line 56
$context["entity"], "datum", array()), "w") == 6))) {
                echo "Wochende";
                echo "
\t\t\t\t\t";
            } else {
                // line 57
                echo " ";
                echo "Arbeitstag";
                echo "
\t\t\t\t\t";
            }
            // line 59
            echo "                </td>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "bemerkung", array()), "html", null, true);
            echo "</td>
                <td>
                <!--<a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("time_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Details</a>-->
                ";
            // line 63
            if (((twig_test_empty($this->getAttribute($context["entity"], "total", array())) || (twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datum", array()), "w") == 0)) || (twig_date_format_filter($this->env, $this->getAttribute(            // line 64
$context["entity"], "datum", array()), "w") == 6))) {
                // line 65
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("time_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">Bearbeiten</a>
                ";
            }
            // line 67
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        </tbody>
    </table>
    <a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("time_new");
        echo "\">Neuer Eintrag</a>
    ";
    }

    public function getTemplateName()
    {
        return "AppBundleTimeBundle:time:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 72,  231 => 70,  223 => 67,  217 => 65,  215 => 64,  214 => 63,  210 => 62,  205 => 60,  202 => 59,  196 => 57,  190 => 56,  189 => 55,  183 => 54,  177 => 53,  170 => 51,  164 => 50,  158 => 49,  152 => 48,  146 => 47,  143 => 46,  137 => 44,  132 => 43,  127 => 42,  122 => 41,  117 => 40,  112 => 39,  107 => 38,  104 => 37,  99 => 36,  97 => 35,  92 => 33,  90 => 32,  88 => 31,  84 => 30,  82 => 29,  80 => 28,  76 => 27,  72 => 26,  68 => 25,  65 => 24,  61 => 23,  39 => 3,  36 => 2,  11 => 1,);
    }
}
