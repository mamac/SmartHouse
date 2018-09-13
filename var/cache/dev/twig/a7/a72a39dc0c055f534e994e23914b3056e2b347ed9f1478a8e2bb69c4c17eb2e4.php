<?php

/* LljmHomeBundle:Visualization:watervisual_monthly.html.twig */
class __TwigTemplate_896f1ef5ad48e2c4f1e0f4f4829ef29bd340783deefb8f93cb4765e1a45f9a59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Visualization:watervisual_monthly.html.twig", 1);
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
        $__internal_3a9dd2fc0b6ecdd9f932e16b5aceb59f5d3abd68e6a2afe5740be65640005138 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a9dd2fc0b6ecdd9f932e16b5aceb59f5d3abd68e6a2afe5740be65640005138->enter($__internal_3a9dd2fc0b6ecdd9f932e16b5aceb59f5d3abd68e6a2afe5740be65640005138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:watervisual_monthly.html.twig"));

        $__internal_b866ec04d2a6bdc612887b12363cfac2b66c1cc04c070d284323c454bad18ff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b866ec04d2a6bdc612887b12363cfac2b66c1cc04c070d284323c454bad18ff4->enter($__internal_b866ec04d2a6bdc612887b12363cfac2b66c1cc04c070d284323c454bad18ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:watervisual_monthly.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a9dd2fc0b6ecdd9f932e16b5aceb59f5d3abd68e6a2afe5740be65640005138->leave($__internal_3a9dd2fc0b6ecdd9f932e16b5aceb59f5d3abd68e6a2afe5740be65640005138_prof);

        
        $__internal_b866ec04d2a6bdc612887b12363cfac2b66c1cc04c070d284323c454bad18ff4->leave($__internal_b866ec04d2a6bdc612887b12363cfac2b66c1cc04c070d284323c454bad18ff4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_38bfeaa4804cb72a4f06e90348d94368227f531cc8f5463edf6c012e170fe4d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38bfeaa4804cb72a4f06e90348d94368227f531cc8f5463edf6c012e170fe4d3->enter($__internal_38bfeaa4804cb72a4f06e90348d94368227f531cc8f5463edf6c012e170fe4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b41ae9e1b382b4084efda8f520b43cdbf040d038b79bbc1469eb804470e42f3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b41ae9e1b382b4084efda8f520b43cdbf040d038b79bbc1469eb804470e42f3a->enter($__internal_b41ae9e1b382b4084efda8f520b43cdbf040d038b79bbc1469eb804470e42f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Water visualization - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b41ae9e1b382b4084efda8f520b43cdbf040d038b79bbc1469eb804470e42f3a->leave($__internal_b41ae9e1b382b4084efda8f520b43cdbf040d038b79bbc1469eb804470e42f3a_prof);

        
        $__internal_38bfeaa4804cb72a4f06e90348d94368227f531cc8f5463edf6c012e170fe4d3->leave($__internal_38bfeaa4804cb72a4f06e90348d94368227f531cc8f5463edf6c012e170fe4d3_prof);

    }

    // line 7
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_b1acff65838eb86d82cdf987f87b63aa098d827964a27f86b8d3fcd77d3d6e59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1acff65838eb86d82cdf987f87b63aa098d827964a27f86b8d3fcd77d3d6e59->enter($__internal_b1acff65838eb86d82cdf987f87b63aa098d827964a27f86b8d3fcd77d3d6e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_ee03ece97301a64950bf2cba56438c6b3ae685885da76622ef8c481268ff7968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee03ece97301a64950bf2cba56438c6b3ae685885da76622ef8c481268ff7968->enter($__internal_ee03ece97301a64950bf2cba56438c6b3ae685885da76622ef8c481268ff7968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        // line 8
        echo "
  <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Water visualization"), "html", null, true);
        echo "</h2>

<div class=\"btn-group\" role=\"group\" aria-label=\"...\">

  <button type=\"button\" class=\"btn btn-default\" onclick=\"location.href = '";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_watervisual_day_detail");
        echo "'\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Day detail"), "html", null, true);
        echo "</button>
  <button type=\"button\" class=\"btn btn-default\" onclick=\"location.href = '";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_watervisual_daily");
        echo "'\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Day"), "html", null, true);
        echo "</button>
  <button type=\"button\" class=\"btn btn-default\" onclick=\"location.href = '";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_watervisual_weekly");
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
        $context['_seq'] = twig_ensure_traversable((isset($context["waterlogmonthlys"]) || array_key_exists("waterlogmonthlys", $context) ? $context["waterlogmonthlys"] : (function () { throw new Twig_Error_Runtime('Variable "waterlogmonthlys" does not exist.', 67, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["waterlogmonthly"]) {
            // line 68
            echo "     {x: '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["waterlogmonthly"], "yearmonth", array()), "html", null, true);
            echo "', y: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["waterlogmonthly"], "consumption", array()), "html", null, true);
            echo "},
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['waterlogmonthly'], $context['_parent'], $context['loop']);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["waterlogmonthlys"]) || array_key_exists("waterlogmonthlys", $context) ? $context["waterlogmonthlys"] : (function () { throw new Twig_Error_Runtime('Variable "waterlogmonthlys" does not exist.', 94, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["waterlogmonthly"]) {
            // line 95
            echo "          <tr>
            <td>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["waterlogmonthly"], "yearmonth", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["waterlogmonthly"], "consumption", array()), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['waterlogmonthly'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "        </tbody>
      </table>
    </div>
</div>
  
";
        
        $__internal_ee03ece97301a64950bf2cba56438c6b3ae685885da76622ef8c481268ff7968->leave($__internal_ee03ece97301a64950bf2cba56438c6b3ae685885da76622ef8c481268ff7968_prof);

        
        $__internal_b1acff65838eb86d82cdf987f87b63aa098d827964a27f86b8d3fcd77d3d6e59->leave($__internal_b1acff65838eb86d82cdf987f87b63aa098d827964a27f86b8d3fcd77d3d6e59_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Visualization:watervisual_monthly.html.twig";
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
  Water visualization - {{ parent() }}
{% endblock %}

{% block lljm_home_body %}

  <h2>{{ 'Water visualization' | trans }}</h2>

<div class=\"btn-group\" role=\"group\" aria-label=\"...\">

  <button type=\"button\" class=\"btn btn-default\" onclick=\"location.href = '{{ path('home_watervisual_day_detail') }}'\">{{ 'Day detail' | trans }}</button>
  <button type=\"button\" class=\"btn btn-default\" onclick=\"location.href = '{{ path('home_watervisual_daily') }}'\">{{ 'Day' | trans }}</button>
  <button type=\"button\" class=\"btn btn-default\" onclick=\"location.href = '{{ path('home_watervisual_weekly') }}'\">{{ 'Week' | trans }}</button>
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
  {% for waterlogmonthly in waterlogmonthlys %}
     {x: '{{ waterlogmonthly.yearmonth }}', y: {{ waterlogmonthly.consumption }}},
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
  {% for waterlogmonthly in waterlogmonthlys %}
          <tr>
            <td>{{ waterlogmonthly.yearmonth }}</td>
            <td>{{ waterlogmonthly.consumption }}</td>
          </tr>
  {% else %}
    <p>{{ 'No record in this table' | trans }}.</p>
  {% endfor %}
        </tbody>
      </table>
    </div>
</div>
  
{% endblock %}
", "LljmHomeBundle:Visualization:watervisual_monthly.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Visualization/watervisual_monthly.html.twig");
    }
}
