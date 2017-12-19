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
        if (isset($context["entities"])) { $_entities_ = $context["entities"]; } else { $_entities_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($_entities_));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 24
            echo "            <tr>
                <td>";
            // line 25
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "userId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "vname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "name", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 28
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if (((twig_date_format_filter($this->env, $this->getAttribute($_entity_, "datum", array()), "w") == 0) || (twig_date_format_filter($this->env, $this->getAttribute($_entity_, "datum", array()), "w") == 6))) {
                // line 29
                echo "                style=\"background-color: ";
                if (isset($context["backgroundColor"])) { $_backgroundColor_ = $context["backgroundColor"]; } else { $_backgroundColor_ = null; }
                echo twig_escape_filter($this->env, ((array_key_exists("backgroundColor", $context)) ? ($_backgroundColor_) : ("yellow")), "html", null, true);
                // line 30
                echo ";\"
                ";
            } elseif ((($this->getAttribute($_entity_, "statusId", array()) == 1) || ($this->getAttribute($_entity_, "statusId", array()) == 2))) {
                // line 32
                echo "                style=\"background-color: ";
                if (isset($context["backgroundColor"])) { $_backgroundColor_ = $context["backgroundColor"]; } else { $_backgroundColor_ = null; }
                echo twig_escape_filter($this->env, ((array_key_exists("backgroundColor", $context)) ? ($_backgroundColor_) : ("red")), "html", null, true);
                // line 33
                echo ";\"
                ";
            } else {
                // line 35
                echo "                style=\"background-color: ";
                if (isset($context["backgroundColor"])) { $_backgroundColor_ = $context["backgroundColor"]; } else { $_backgroundColor_ = null; }
                echo twig_escape_filter($this->env, ((array_key_exists("backgroundColor", $context)) ? ($_backgroundColor_) : ("lightgreen")), "html", null, true);
                // line 36
                echo ";\"
                ";
            }
            // line 37
            echo ">
\t\t\t\t\t";
            // line 38
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if ((twig_date_format_filter($this->env, $this->getAttribute($_entity_, "datum", array()), "w") == 0)) {
                echo "Son";
                echo "
\t\t\t\t\t";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute($_entity_, "datum", array()), "w") == 1)) {
                // line 39
                echo "Mo";
                echo "
\t\t\t\t\t";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute($_entity_, "datum", array()), "w") == 2)) {
                // line 40
                echo "Di";
                echo "
\t\t\t\t\t";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute($_entity_, "datum", array()), "w") == 3)) {
                // line 41
                echo "Mi";
                echo "
\t\t\t\t\t";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute($_entity_, "datum", array()), "w") == 4)) {
                // line 42
                echo "Do";
                echo "
\t\t\t\t\t";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute($_entity_, "datum", array()), "w") == 5)) {
                // line 43
                echo "Fr";
                echo "
\t\t\t\t\t";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute($_entity_, "datum", array()), "w") == 6)) {
                // line 44
                echo "Sa";
                echo "
\t\t\t\t\t";
            }
            // line 46
            echo "                </td>
                <td>";
            // line 47
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if ($this->getAttribute($_entity_, "datum", array())) {
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "datum", array()), "d.m.Y"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 48
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if ($this->getAttribute($_entity_, "kommen", array())) {
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "kommen", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 49
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if ($this->getAttribute($_entity_, "gehen", array())) {
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "gehen", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 50
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if ($this->getAttribute($_entity_, "pause", array())) {
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "pause", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 51
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if ($this->getAttribute($_entity_, "total", array())) {
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "total", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td> 
\t\t\t\t\t";
            // line 53
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if (($this->getAttribute($_entity_, "statusId", array()) == 1)) {
                echo " ";
                echo "Urlaub";
                echo " 
\t\t\t\t\t";
            } elseif (($this->getAttribute($_entity_, "statusId", array()) == 2)) {
                // line 54
                echo " ";
                echo "Krankheit";
                echo " 
\t\t\t\t\t";
            } elseif (((twig_date_format_filter($this->env, $this->getAttribute($_entity_, "datum", array()), "w") == 0) || (twig_date_format_filter($this->env, $this->getAttribute($_entity_, "datum", array()), "w") == 6))) {
                // line 56
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
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "bemerkung", array()), "html", null, true);
            echo "</td>
                <td>
                <!--<a href=\"";
            // line 62
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("time_show", array("id" => $this->getAttribute($_entity_, "id", array()))), "html", null, true);
            echo "\">Details</a>-->
                ";
            // line 63
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if (((twig_test_empty($this->getAttribute($_entity_, "total", array())) || (twig_date_format_filter($this->env, $this->getAttribute($_entity_, "datum", array()), "w") == 0)) || (twig_date_format_filter($this->env, $this->getAttribute($_entity_, "datum", array()), "w") == 6))) {
                // line 65
                echo "                <a href=\"";
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("time_edit", array("id" => $this->getAttribute($_entity_, "id", array()))), "html", null, true);
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
        return array (  256 => 72,  252 => 70,  244 => 67,  237 => 65,  234 => 63,  229 => 62,  223 => 60,  220 => 59,  214 => 57,  209 => 56,  203 => 54,  195 => 53,  186 => 51,  178 => 50,  170 => 49,  162 => 48,  154 => 47,  151 => 46,  146 => 44,  141 => 43,  136 => 42,  131 => 41,  126 => 40,  121 => 39,  114 => 38,  111 => 37,  107 => 36,  103 => 35,  99 => 33,  95 => 32,  91 => 30,  87 => 29,  84 => 28,  79 => 27,  74 => 26,  69 => 25,  66 => 24,  61 => 23,  39 => 3,  36 => 2,  11 => 1,);
    }
}
