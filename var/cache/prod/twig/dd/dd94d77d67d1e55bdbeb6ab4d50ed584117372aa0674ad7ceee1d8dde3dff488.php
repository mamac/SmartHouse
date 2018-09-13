<?php

/* LljmHomeBundle:Visualization:elecvisual_weekly.html.twig */
class __TwigTemplate_e33a87ce69c1b0d64bde1ac540da7b5e2d236b228cd0174830287d373d55440c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Visualization:elecvisual_weekly.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'lljm_home_body' => array($this, 'block_lljm_home_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LljmHomeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Electricity visualization - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_lljm_home_body($context, array $blocks = array())
    {
        // line 8
        echo "
  <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Electricity visualization"), "html", null, true);
        echo "</h2>

<div class=\"btn-group\" role=\"group\" aria-label=\"...\">

  <button type=\"button\" class=\"btn btn-default\" onclick=\"location.href = '";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_elecvisual_day_detail");
        echo "'\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Day detail"), "html", null, true);
        echo "</button>
  <button type=\"button\" class=\"btn btn-default\" onclick=\"location.href = '";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_elecvisual_daily");
        echo "'\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Day"), "html", null, true);
        echo "</button>
  <button type=\"button\" class=\"btn btn-default active\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Week"), "html", null, true);
        echo "</button>
  <button type=\"button\" class=\"btn btn-default\" onclick=\"location.href = '";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_elecvisual_monthly");
        echo "'\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Month"), "html", null, true);
        echo "</button>
</div>

<br>
<br>
<script type=\"text/javascript\">

    function display() {

      dst = \"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"));
        echo "\" + '/';
      dst += document.getElementById(\"datefrom\").value + ',';
      dst += document.getElementById(\"dateto\").value + ',';
      dst += document.getElementById(\"meterid\").value;
      
      location.href = dst;
  
    }

</script>

<div>

<form class=\"form-inline\" role=\"form\" onsubmit=\"return false;\">

<input type=\"text\" id=\"datefrom\" class=\"form-control datepicker\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["datefrom"] ?? null), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date from"), "html", null, true);
        echo "\">
<input type=\"text\" id=\"dateto\" class=\"form-control datepicker\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["dateto"] ?? null), "html", null, true);
        echo "\"  placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date to"), "html", null, true);
        echo "\">

<select id=\"meterid\" class=\"form-control\">
  ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["meterlist"]);
        foreach ($context['_seq'] as $context["_key"] => $context["meterlist"]) {
            // line 45
            echo "
  <option value=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meterlist"], "id", array()), "html", null, true);
            echo "\" ";
            if ((($context["meterid"] ?? null) == twig_get_attribute($this->env, $this->getSourceContext(), $context["meterlist"], "id", array()))) {
                echo " selected ";
            }
            echo " >";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["meterlist"], "metername", array())), "html", null, true);
            echo "</option>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meterlist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "</select>

<button type=\"submit\" class = \"btn btn-default\" onclick=\"return display()\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search"), "html", null, true);
        echo "</button>

</form>

<br>

<br>

<div id=\"barChart\" class=\"epoch\" style=\"height: 250px\"></div>

<script>
(function() {

var barChartData = [
  { label: \"Series 1\",
   values: [
  ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["eleclogweeklys"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["eleclogweekly"]) {
            // line 68
            echo "     {x: '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["eleclogweekly"], "yearweek", array()), "html", null, true);
            echo "', y: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["eleclogweekly"], "consumption", array()), "html", null, true);
            echo "},
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleclogweekly'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "   ]
  }
];

  \$('#barChart').epoch({
     type: 'bar',
     data: barChartData,
     axes: ['left', 'bottom'],
     ticks: { left: 5 }
  });
})();

</script>

    <div class=\"table-responsive\">
      <table class=\"table table-striped\">
        <thead>
          <tr>
            <th>";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Year-week"), "html", null, true);
        echo "</th>
            <th>";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Consumption"), "html", null, true);
        echo "</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
  ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["eleclogweeklys"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["eleclogweekly"]) {
            // line 95
            echo "          <tr>
            <td>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["eleclogweekly"], "yearweek", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["eleclogweekly"], "consumption", array()), "html", null, true);
            echo "</td>
          </tr>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 100
            echo "    <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No record in this table"), "html", null, true);
            echo ".</p>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleclogweekly'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "        </tbody>
      </table>
    </div>
</div>
  
";
    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Visualization:elecvisual_weekly.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 102,  226 => 100,  218 => 97,  214 => 96,  211 => 95,  206 => 94,  198 => 89,  194 => 88,  174 => 70,  163 => 68,  159 => 67,  140 => 51,  136 => 49,  121 => 46,  118 => 45,  114 => 44,  106 => 41,  100 => 40,  82 => 25,  68 => 16,  64 => 15,  58 => 14,  52 => 13,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "LljmHomeBundle:Visualization:elecvisual_weekly.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Visualization/elecvisual_weekly.html.twig");
    }
}
