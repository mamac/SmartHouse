<?php

/* LljmHomeBundle:Heating:zoneheatingeditform.html.twig */
class __TwigTemplate_6d455225b1e4ae19ee1fe0cc3f21aaaafb80fcb954a285c8950ea22c2e120248 extends Twig_Template
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
        echo "<script>
        function printValue(sliderID, textbox) {
            var x = document.getElementById(textbox);
            var y = document.getElementById(sliderID);
            x.value = y.value;
        }

        window.onload = function() { printValue('slider1', 'rangeValue1'); printValue('slider2', 'rangeValue2'); printValue('slider3', 'rangeValue3'); printValue('slider4', 'rangeValue4'); }
    </script>

<div>
<form action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_action_heatingedit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["zone"] ?? null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">

<h3>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), ($context["zone"] ?? null), "zonename", array())), "html", null, true);
        echo "</h3>


<div class=\"input-group\">
\t<div class=\"form-group\">
\t\t\t";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Eco"), "html", null, true);
        echo ":
\t\t\t<input id=\"rangeValue1\" type=\"text\" size=\"4\" readonly>&deg;C
\t\t\t<input id=\"slider1\" type=\"range\" name=\"tempeco\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["zone"] ?? null), "tempeco", array()), "html", null, true);
        echo "\" min=\"12\" max=\"17\" step=\"0.5\" onchange=\"printValue('slider1','rangeValue1')\" style=\"width: 200px;\">

\t</div>
\t<div class=\"form-group\">
\t  ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Comfort"), "html", null, true);
        echo ":
\t  \t\t<input id=\"rangeValue2\" type=\"text\" size=\"4\" readonly>&deg;C
\t\t\t<input id=\"slider2\" type=\"range\" name=\"tempcomfort\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["zone"] ?? null), "tempcomfort", array()), "html", null, true);
        echo "\" min=\"17\" max=\"25\" step=\"0.5\" onchange=\"printValue('slider2','rangeValue2')\" style=\"width: 200px;\">

\t</div>
\t<div class=\"dropdown\">
\t  ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mode"), "html", null, true);
        echo ":<br>
\t\t<select name=\"heatingmode\" class=\"form-control\" style=\"width: 200px;\">
\t\t\t<option value=\"1\" ";
        // line 33
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["zone"] ?? null), "heatingmode", array()) == 1)) {
            echo " selected ";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Comfort"), "html", null, true);
        echo "</option>
\t\t\t<option value=\"2\" ";
        // line 34
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["zone"] ?? null), "heatingmode", array()) == 2)) {
            echo " selected ";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Eco"), "html", null, true);
        echo "</option>
\t  \t\t<option value=\"3\" ";
        // line 35
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["zone"] ?? null), "heatingmode", array()) == 3)) {
            echo " selected ";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No frost"), "html", null, true);
        echo "</option>
\t  \t\t<option value=\"4\" ";
        // line 36
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["zone"] ?? null), "heatingmode", array()) == 4)) {
            echo " selected ";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Auto"), "html", null, true);
        echo "</option>

\t\t</select>
\t</div>
\t<br>
\t<br>
\t<div>
\t\t";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Schedule"), "html", null, true);
        echo ":
\t</div>
<table class=\"table\">
\t<tr>
\t\t<td>&nbsp;</td>
\t\t";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 49
            echo "\t\t    <th>";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $context["i"], 0), "html", null, true);
            echo "</th>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t</tr>

\t";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 54
            echo "\t\t<tr>
\t\t";
            // line 55
            if (($context["i"] == 0)) {
                // line 56
                echo "\t\t\t<th>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Monday"), "html", null, true);
                echo " </th>
\t\t";
            }
            // line 58
            echo "\t\t";
            if (($context["i"] == 1)) {
                // line 59
                echo "\t\t\t<th>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tuesday"), "html", null, true);
                echo " </th>
\t\t";
            }
            // line 61
            echo "\t\t";
            if (($context["i"] == 2)) {
                // line 62
                echo "\t\t\t<th>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Wednesday"), "html", null, true);
                echo " </th>
\t\t";
            }
            // line 64
            echo "\t\t";
            if (($context["i"] == 3)) {
                // line 65
                echo "\t\t\t<th>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Thursday"), "html", null, true);
                echo " </th>
\t\t";
            }
            // line 67
            echo "\t\t";
            if (($context["i"] == 4)) {
                // line 68
                echo "\t\t\t<th>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Friday"), "html", null, true);
                echo " </th>
\t\t";
            }
            // line 70
            echo "\t\t";
            if (($context["i"] == 5)) {
                // line 71
                echo "\t\t\t<th>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Saturday"), "html", null, true);
                echo " </th>
\t\t";
            }
            // line 73
            echo "\t\t";
            if (($context["i"] == 6)) {
                // line 74
                echo "\t\t\t<th>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sunday"), "html", null, true);
                echo " </th>
\t\t";
            }
            // line 76
            echo "
\t\t\t\t";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 23));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 78
                echo "\t\t\t\t";
                $context["slotnumber"] = ((24 * $context["i"]) + $context["j"]);
                // line 79
                echo "\t\t    \t<td>
\t\t    \t\t<input type=\"checkbox\" name=\"heatslot";
                // line 80
                echo twig_escape_filter($this->env, ($context["slotnumber"] ?? null), "html", null, true);
                echo "\" ";
                if ((twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["zone"] ?? null), "heatschedule", array()), ((24 * $context["i"]) + $context["j"]), 1) == 1)) {
                    echo " checked ";
                }
                echo ">
\t\t    \t</td>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "\t\t</tr>\t    
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "
</table>

<div>
\t  <input type=\"submit\" class=\"btn btn-primary\" />
\t</div>
</div>

</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Heating:zoneheatingeditform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 85,  232 => 83,  219 => 80,  216 => 79,  213 => 78,  209 => 77,  206 => 76,  200 => 74,  197 => 73,  191 => 71,  188 => 70,  182 => 68,  179 => 67,  173 => 65,  170 => 64,  164 => 62,  161 => 61,  155 => 59,  152 => 58,  146 => 56,  144 => 55,  141 => 54,  137 => 53,  133 => 51,  124 => 49,  120 => 48,  112 => 43,  98 => 36,  90 => 35,  82 => 34,  74 => 33,  69 => 31,  62 => 27,  57 => 25,  50 => 21,  45 => 19,  37 => 14,  32 => 12,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "LljmHomeBundle:Heating:zoneheatingeditform.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Heating/zoneheatingeditform.html.twig");
    }
}
