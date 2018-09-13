<?php

/* LljmHomeBundle:Visualization:elecvisual_monthly.html.twig */
class __TwigTemplate_73564d912f970ce4515b8c84355c035128d00a0e6d93df711984b7c89a202c2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Visualization:elecvisual_monthly.html.twig", 1);
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
        $__internal_97f8d6e88807aa49fb1856139b2138664976b4056bcec763b652485fa1d886a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97f8d6e88807aa49fb1856139b2138664976b4056bcec763b652485fa1d886a4->enter($__internal_97f8d6e88807aa49fb1856139b2138664976b4056bcec763b652485fa1d886a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:elecvisual_monthly.html.twig"));

        $__internal_22eca1669ef64500286980d36f97e7a04095e91134348f2af5625043dbb78ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22eca1669ef64500286980d36f97e7a04095e91134348f2af5625043dbb78ada->enter($__internal_22eca1669ef64500286980d36f97e7a04095e91134348f2af5625043dbb78ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:elecvisual_monthly.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97f8d6e88807aa49fb1856139b2138664976b4056bcec763b652485fa1d886a4->leave($__internal_97f8d6e88807aa49fb1856139b2138664976b4056bcec763b652485fa1d886a4_prof);

        
        $__internal_22eca1669ef64500286980d36f97e7a04095e91134348f2af5625043dbb78ada->leave($__internal_22eca1669ef64500286980d36f97e7a04095e91134348f2af5625043dbb78ada_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_514eafc2c6383e6dcb2090ac6a49220f9cb2fda9353cc79a4b55e5bba28f2d30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_514eafc2c6383e6dcb2090ac6a49220f9cb2fda9353cc79a4b55e5bba28f2d30->enter($__internal_514eafc2c6383e6dcb2090ac6a49220f9cb2fda9353cc79a4b55e5bba28f2d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c47eb04c275481572e6f70643f44510b75685864dccbb1442665f2284f98f492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c47eb04c275481572e6f70643f44510b75685864dccbb1442665f2284f98f492->enter($__internal_c47eb04c275481572e6f70643f44510b75685864dccbb1442665f2284f98f492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Electricity visualization - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c47eb04c275481572e6f70643f44510b75685864dccbb1442665f2284f98f492->leave($__internal_c47eb04c275481572e6f70643f44510b75685864dccbb1442665f2284f98f492_prof);

        
        $__internal_514eafc2c6383e6dcb2090ac6a49220f9cb2fda9353cc79a4b55e5bba28f2d30->leave($__internal_514eafc2c6383e6dcb2090ac6a49220f9cb2fda9353cc79a4b55e5bba28f2d30_prof);

    }

    // line 7
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_2de5d7c4c1257e2ec7d6a807629a6a68b67cb17d7e74018108b49c79bc2fc123 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2de5d7c4c1257e2ec7d6a807629a6a68b67cb17d7e74018108b49c79bc2fc123->enter($__internal_2de5d7c4c1257e2ec7d6a807629a6a68b67cb17d7e74018108b49c79bc2fc123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_42b52ce938ff16d7d50d3c2fd2aa6ef7294aa5d2696872fd306fd75d85093579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42b52ce938ff16d7d50d3c2fd2aa6ef7294aa5d2696872fd306fd75d85093579->enter($__internal_42b52ce938ff16d7d50d3c2fd2aa6ef7294aa5d2696872fd306fd75d85093579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

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
  <button type=\"button\" class=\"btn btn-default\" onclick=\"location.href = '";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_elecvisual_weekly");
        echo "'\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Week"), "html", null, true);
        echo "</button>
  <button type=\"button\" class=\"btn btn-default active\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Month"), "html", null, true);
        echo "</button>
</div>

<br>
<br>
<script type=\"text/javascript\">

    function display() {

      dst = \"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 25, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"));
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
        echo twig_escape_filter($this->env, (isset($context["datefrom"]) || array_key_exists("datefrom", $context) ? $context["datefrom"] : (function () { throw new Twig_Error_Runtime('Variable "datefrom" does not exist.', 40, $this->getSourceContext()); })()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date from"), "html", null, true);
        echo "\">
<input type=\"text\" id=\"dateto\" class=\"form-control datepicker\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["dateto"]) || array_key_exists("dateto", $context) ? $context["dateto"] : (function () { throw new Twig_Error_Runtime('Variable "dateto" does not exist.', 41, $this->getSourceContext()); })()), "html", null, true);
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
            if (((isset($context["meterid"]) || array_key_exists("meterid", $context) ? $context["meterid"] : (function () { throw new Twig_Error_Runtime('Variable "meterid" does not exist.', 46, $this->getSourceContext()); })()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["meterlist"], "id", array()))) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["eleclogmonthlys"]) || array_key_exists("eleclogmonthlys", $context) ? $context["eleclogmonthlys"] : (function () { throw new Twig_Error_Runtime('Variable "eleclogmonthlys" does not exist.', 67, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["eleclogmonthly"]) {
            // line 68
            echo "     {x: '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["eleclogmonthly"], "yearmonth", array()), "html", null, true);
            echo "', y: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["eleclogmonthly"], "consumption", array()), "html", null, true);
            echo "},
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleclogmonthly'], $context['_parent'], $context['loop']);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Year-month"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["eleclogmonthlys"]) || array_key_exists("eleclogmonthlys", $context) ? $context["eleclogmonthlys"] : (function () { throw new Twig_Error_Runtime('Variable "eleclogmonthlys" does not exist.', 94, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["eleclogmonthly"]) {
            // line 95
            echo "          <tr>
            <td>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["eleclogmonthly"], "yearmonth", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["eleclogmonthly"], "consumption", array()), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleclogmonthly'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "        </tbody>
      </table>
    </div>
</div>
  
";
        
        $__internal_42b52ce938ff16d7d50d3c2fd2aa6ef7294aa5d2696872fd306fd75d85093579->leave($__internal_42b52ce938ff16d7d50d3c2fd2aa6ef7294aa5d2696872fd306fd75d85093579_prof);

        
        $__internal_2de5d7c4c1257e2ec7d6a807629a6a68b67cb17d7e74018108b49c79bc2fc123->leave($__internal_2de5d7c4c1257e2ec7d6a807629a6a68b67cb17d7e74018108b49c79bc2fc123_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Visualization:elecvisual_monthly.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 102,  256 => 100,  248 => 97,  244 => 96,  241 => 95,  236 => 94,  228 => 89,  224 => 88,  204 => 70,  193 => 68,  189 => 67,  170 => 51,  166 => 49,  151 => 46,  148 => 45,  144 => 44,  136 => 41,  130 => 40,  112 => 25,  100 => 16,  94 => 15,  88 => 14,  82 => 13,  75 => 9,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"LljmHomeBundle::layout.html.twig\" %}

{% block title %}
  Electricity visualization - {{ parent() }}
{% endblock %}

{% block lljm_home_body %}

  <h2>{{ 'Electricity visualization' | trans }}</h2>

<div class=\"btn-group\" role=\"group\" aria-label=\"...\">

  <button type=\"button\" class=\"btn btn-default\" onclick=\"location.href = '{{ path('home_elecvisual_day_detail') }}'\">{{ 'Day detail' | trans }}</button>
  <button type=\"button\" class=\"btn btn-default\" onclick=\"location.href = '{{ path('home_elecvisual_daily') }}'\">{{ 'Day' | trans }}</button>
  <button type=\"button\" class=\"btn btn-default\" onclick=\"location.href = '{{ path('home_elecvisual_weekly') }}'\">{{ 'Week' | trans }}</button>
  <button type=\"button\" class=\"btn btn-default active\">{{ 'Month' | trans }}</button>
</div>

<br>
<br>
<script type=\"text/javascript\">

    function display() {

      dst = \"{{ path(app.request.attributes.get('_route')) }}\" + '/';
      dst += document.getElementById(\"datefrom\").value + ',';
      dst += document.getElementById(\"dateto\").value + ',';
      dst += document.getElementById(\"meterid\").value;
      
      location.href = dst;
  
    }

</script>

<div>

<form class=\"form-inline\" role=\"form\" onsubmit=\"return false;\">

<input type=\"text\" id=\"datefrom\" class=\"form-control datepicker\" value=\"{{ datefrom }}\" placeholder=\"{{ 'date from' | trans}}\">
<input type=\"text\" id=\"dateto\" class=\"form-control datepicker\" value=\"{{ dateto }}\"  placeholder=\"{{ 'date to' | trans}}\">

<select id=\"meterid\" class=\"form-control\">
  {% for meterlist in meterlist %}

  <option value=\"{{ meterlist.id }}\" {% if meterid == meterlist.id %} selected {% endif %} >{{ meterlist.metername | trans }}</option>

  {% endfor %}
</select>

<button type=\"submit\" class = \"btn btn-default\" onclick=\"return display()\">{{ \"Search\" | trans }}</button>

</form>

<br>

<br>

<div id=\"barChart\" class=\"epoch\" style=\"height: 250px\"></div>

<script>
(function() {

var barChartData = [
  { label: \"Series 1\",
   values: [
  {% for eleclogmonthly in eleclogmonthlys %}
     {x: '{{ eleclogmonthly.yearmonth }}', y: {{ eleclogmonthly.consumption }}},
  {% endfor %}
   ]
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
            <th>{{ 'Year-month' | trans }}</th>
            <th>{{ 'Consumption' | trans }}</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
  {% for eleclogmonthly in eleclogmonthlys %}
          <tr>
            <td>{{ eleclogmonthly.yearmonth }}</td>
            <td>{{ eleclogmonthly.consumption }}</td>
          </tr>
  {% else %}
    <p>{{ 'No record in this table' | trans }}.</p>
  {% endfor %}
        </tbody>
      </table>
    </div>
</div>
  
{% endblock %}
", "LljmHomeBundle:Visualization:elecvisual_monthly.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Visualization/elecvisual_monthly.html.twig");
    }
}
