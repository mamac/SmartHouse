<?php

/* LljmHomeBundle:Visualization:elecvisual_day_detail.html.twig */
class __TwigTemplate_231527725295f86883fd41fa47f98106ce0f1a9cf7b308356e3ec3d0866ae2d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Visualization:elecvisual_day_detail.html.twig", 1);
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
        $__internal_d8ab4f1d74ee5809fdd7b3081ee2bbf4c7f3adfbdc861f74e6b9ae5b61e2dcc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8ab4f1d74ee5809fdd7b3081ee2bbf4c7f3adfbdc861f74e6b9ae5b61e2dcc1->enter($__internal_d8ab4f1d74ee5809fdd7b3081ee2bbf4c7f3adfbdc861f74e6b9ae5b61e2dcc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:elecvisual_day_detail.html.twig"));

        $__internal_6f1cde191cfcb1aae514990d7d83cac40892a2845492e9b44937f3a5e8fa4750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f1cde191cfcb1aae514990d7d83cac40892a2845492e9b44937f3a5e8fa4750->enter($__internal_6f1cde191cfcb1aae514990d7d83cac40892a2845492e9b44937f3a5e8fa4750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:elecvisual_day_detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8ab4f1d74ee5809fdd7b3081ee2bbf4c7f3adfbdc861f74e6b9ae5b61e2dcc1->leave($__internal_d8ab4f1d74ee5809fdd7b3081ee2bbf4c7f3adfbdc861f74e6b9ae5b61e2dcc1_prof);

        
        $__internal_6f1cde191cfcb1aae514990d7d83cac40892a2845492e9b44937f3a5e8fa4750->leave($__internal_6f1cde191cfcb1aae514990d7d83cac40892a2845492e9b44937f3a5e8fa4750_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4461d2c909c2dfc12b5df929d275a38bd35017558416941998b6a7eba630ea8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4461d2c909c2dfc12b5df929d275a38bd35017558416941998b6a7eba630ea8->enter($__internal_d4461d2c909c2dfc12b5df929d275a38bd35017558416941998b6a7eba630ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_100ad570e1a076a461c455c36909b32c87befd440617c1d15b2b71a1668b8fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_100ad570e1a076a461c455c36909b32c87befd440617c1d15b2b71a1668b8fd2->enter($__internal_100ad570e1a076a461c455c36909b32c87befd440617c1d15b2b71a1668b8fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Electricity visualization - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_100ad570e1a076a461c455c36909b32c87befd440617c1d15b2b71a1668b8fd2->leave($__internal_100ad570e1a076a461c455c36909b32c87befd440617c1d15b2b71a1668b8fd2_prof);

        
        $__internal_d4461d2c909c2dfc12b5df929d275a38bd35017558416941998b6a7eba630ea8->leave($__internal_d4461d2c909c2dfc12b5df929d275a38bd35017558416941998b6a7eba630ea8_prof);

    }

    // line 7
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_990286387adf6137c1e87fcde3f5138cc322fc5319a519157b560c7b45f4caf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_990286387adf6137c1e87fcde3f5138cc322fc5319a519157b560c7b45f4caf8->enter($__internal_990286387adf6137c1e87fcde3f5138cc322fc5319a519157b560c7b45f4caf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_09d9ba87505efb47618695119a708b686036bbe11bd09f281a3b6a5d389490b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09d9ba87505efb47618695119a708b686036bbe11bd09f281a3b6a5d389490b4->enter($__internal_09d9ba87505efb47618695119a708b686036bbe11bd09f281a3b6a5d389490b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        // line 8
        echo "
  <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Electricity visualization"), "html", null, true);
        echo "</h2>

<div class=\"btn-group\" role=\"group\" aria-label=\"...\">

  <button type=\"button\" class=\"btn btn-default active\">";
        // line 13
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
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 26, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"));
        echo "\" + '/';
      dst += document.getElementById(\"day\").value + ',';
      dst += document.getElementById(\"meterid\").value;
      
      location.href = dst;
  
    }

</script>

<div>

<form class=\"form-inline\" role=\"form\" onsubmit=\"return false;\">

<input type=\"text\" id=\"day\" class=\"form-control datepicker\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["day"]) || array_key_exists("day", $context) ? $context["day"] : (function () { throw new Twig_Error_Runtime('Variable "day" does not exist.', 40, $this->getSourceContext()); })()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("day"), "html", null, true);
        echo "\">

<select id=\"meterid\" class=\"form-control\">
  ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["meterlist"]);
        foreach ($context['_seq'] as $context["_key"] => $context["meterlist"]) {
            // line 44
            echo "
  <option value=\"";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meterlist"], "id", array()), "html", null, true);
            echo "\" ";
            if (((isset($context["meterid"]) || array_key_exists("meterid", $context) ? $context["meterid"] : (function () { throw new Twig_Error_Runtime('Variable "meterid" does not exist.', 45, $this->getSourceContext()); })()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["meterlist"], "id", array()))) {
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
        // line 48
        echo "</select>

<button type=\"submit\" class = \"btn btn-default\" onclick=\"return display()\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search"), "html", null, true);
        echo "</button>

</form>

<br>

<div>
  <a class=\"btn btn-default btn-sm glyphicon glyphicon-plus\" href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_eleclogadd");
        echo "\">
    ";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
        echo "
  </a>


</div>

<br>

<div id=\"barChart\" class=\"epoch\" style=\"height: 250px\"></div>

<script>
(function() {

var barChartData = [
  { label: \"Series 1\",
   values: [
  ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eleclogdaydetails"]) || array_key_exists("eleclogdaydetails", $context) ? $context["eleclogdaydetails"] : (function () { throw new Twig_Error_Runtime('Variable "eleclogdaydetails" does not exist.', 74, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["eleclogdaydetail"]) {
            // line 75
            echo "     {x: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["eleclogdaydetail"], "daterx", array()), "U"), "html", null, true);
            echo ", y: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["eleclogdaydetail"], "consumption", array()), "html", null, true);
            echo "},
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleclogdaydetail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "   ]
  }
];

  \$('#barChart').epoch({
     type: 'bar',
     data: barChartData,
     axes: ['left', 'bottom'],
     ticks: { left: 5, bottom: 6 },
     tickFormats: { bottom:
       function(d) {
         var date = new Date(d*1000);

         var date_hour   = date.getHours();
         var date_minute = date.getMinutes();

         return date_hour + ':' + date_minute;
       }
     }
  });
})();

</script>
    <div class=\"table-responsive\">

      <table class=\"table table-striped\">
        <thead>
          <tr>
            <th>";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Received date"), "html", null, true);
        echo "</th>
            <th>";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Meter value"), "html", null, true);
        echo "</th>
            <th>";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Consumption"), "html", null, true);
        echo "</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
  ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eleclogdaydetails"]) || array_key_exists("eleclogdaydetails", $context) ? $context["eleclogdaydetails"] : (function () { throw new Twig_Error_Runtime('Variable "eleclogdaydetails" does not exist.', 112, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["eleclogdaydetail"]) {
            // line 113
            echo "          <tr>
            <td>";
            // line 114
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["eleclogdaydetail"], "daterx", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
            <td>";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["eleclogdaydetail"], "metervalue", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["eleclogdaydetail"], "consumption", array()), "html", null, true);
            echo "</td>
          </tr>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 119
            echo "    <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No record in this table"), "html", null, true);
            echo ".</p>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleclogdaydetail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "        </tbody>
      </table>
    </div>
</div>

";
        
        $__internal_09d9ba87505efb47618695119a708b686036bbe11bd09f281a3b6a5d389490b4->leave($__internal_09d9ba87505efb47618695119a708b686036bbe11bd09f281a3b6a5d389490b4_prof);

        
        $__internal_990286387adf6137c1e87fcde3f5138cc322fc5319a519157b560c7b45f4caf8->leave($__internal_990286387adf6137c1e87fcde3f5138cc322fc5319a519157b560c7b45f4caf8_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Visualization:elecvisual_day_detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 121,  282 => 119,  274 => 116,  270 => 115,  266 => 114,  263 => 113,  258 => 112,  250 => 107,  246 => 106,  242 => 105,  212 => 77,  201 => 75,  197 => 74,  178 => 58,  174 => 57,  164 => 50,  160 => 48,  145 => 45,  142 => 44,  138 => 43,  130 => 40,  113 => 26,  98 => 16,  92 => 15,  86 => 14,  82 => 13,  75 => 9,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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

  <button type=\"button\" class=\"btn btn-default active\">{{ 'Day detail' | trans }}</button>
  <button type=\"button\" class=\"btn btn-default\" onclick=\"location.href = '{{ path('home_elecvisual_daily') }}'\">{{ 'Day' | trans }}</button>
  <button type=\"button\" class=\"btn btn-default\" onclick=\"location.href = '{{ path('home_elecvisual_weekly') }}'\">{{ 'Week' | trans }}</button>
  <button type=\"button\" class=\"btn btn-default\" onclick=\"location.href = '{{ path('home_elecvisual_monthly') }}'\">{{ 'Month' | trans }}</button>
</div>

<br>
<br>

<script type=\"text/javascript\">

    function display() {

      dst = \"{{ path(app.request.attributes.get('_route')) }}\" + '/';
      dst += document.getElementById(\"day\").value + ',';
      dst += document.getElementById(\"meterid\").value;
      
      location.href = dst;
  
    }

</script>

<div>

<form class=\"form-inline\" role=\"form\" onsubmit=\"return false;\">

<input type=\"text\" id=\"day\" class=\"form-control datepicker\" value=\"{{ day }}\" placeholder=\"{{ 'day' | trans}}\">

<select id=\"meterid\" class=\"form-control\">
  {% for meterlist in meterlist %}

  <option value=\"{{ meterlist.id }}\" {% if meterid == meterlist.id %} selected {% endif %} >{{ meterlist.metername | trans }}</option>

  {% endfor %}
</select>

<button type=\"submit\" class = \"btn btn-default\" onclick=\"return display()\">{{ \"Search\" | trans }}</button>

</form>

<br>

<div>
  <a class=\"btn btn-default btn-sm glyphicon glyphicon-plus\" href=\"{{ path('home_eleclogadd') }}\">
    {{ 'Add' | trans }}
  </a>


</div>

<br>

<div id=\"barChart\" class=\"epoch\" style=\"height: 250px\"></div>

<script>
(function() {

var barChartData = [
  { label: \"Series 1\",
   values: [
  {% for eleclogdaydetail in eleclogdaydetails %}
     {x: {{ eleclogdaydetail.daterx | date(\"U\")}}, y: {{ eleclogdaydetail.consumption }}},
  {% endfor %}
   ]
  }
];

  \$('#barChart').epoch({
     type: 'bar',
     data: barChartData,
     axes: ['left', 'bottom'],
     ticks: { left: 5, bottom: 6 },
     tickFormats: { bottom:
       function(d) {
         var date = new Date(d*1000);

         var date_hour   = date.getHours();
         var date_minute = date.getMinutes();

         return date_hour + ':' + date_minute;
       }
     }
  });
})();

</script>
    <div class=\"table-responsive\">

      <table class=\"table table-striped\">
        <thead>
          <tr>
            <th>{{ 'Received date' | trans }}</th>
            <th>{{ 'Meter value' | trans }}</th>
            <th>{{ 'Consumption' | trans }}</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
  {% for eleclogdaydetail in eleclogdaydetails %}
          <tr>
            <td>{{ eleclogdaydetail.daterx | date(\"Y-m-d H:i:s\")}}</td>
            <td>{{ eleclogdaydetail.metervalue }}</td>
            <td>{{ eleclogdaydetail.consumption }}</td>
          </tr>
  {% else %}
    <p>{{ 'No record in this table' | trans }}.</p>
  {% endfor %}
        </tbody>
      </table>
    </div>
</div>

{% endblock %}
", "LljmHomeBundle:Visualization:elecvisual_day_detail.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Visualization/elecvisual_day_detail.html.twig");
    }
}
