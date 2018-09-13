<?php

/* LljmHomeBundle:Visualization:gasvisual_day_detail.html.twig */
class __TwigTemplate_cf54822522bf51f21630247e4b69a01e735155293a92136a090ca27472356f37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Visualization:gasvisual_day_detail.html.twig", 1);
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
        $__internal_433faca8e1543c155276f83a6b0b3b88c88f5d8dfb0ea33ee8dd2819e2bd659c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_433faca8e1543c155276f83a6b0b3b88c88f5d8dfb0ea33ee8dd2819e2bd659c->enter($__internal_433faca8e1543c155276f83a6b0b3b88c88f5d8dfb0ea33ee8dd2819e2bd659c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:gasvisual_day_detail.html.twig"));

        $__internal_7e882d8538d87aa32613e5b5518aecf04a778afb7bfceef613aba2ad1a3f6586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e882d8538d87aa32613e5b5518aecf04a778afb7bfceef613aba2ad1a3f6586->enter($__internal_7e882d8538d87aa32613e5b5518aecf04a778afb7bfceef613aba2ad1a3f6586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:gasvisual_day_detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_433faca8e1543c155276f83a6b0b3b88c88f5d8dfb0ea33ee8dd2819e2bd659c->leave($__internal_433faca8e1543c155276f83a6b0b3b88c88f5d8dfb0ea33ee8dd2819e2bd659c_prof);

        
        $__internal_7e882d8538d87aa32613e5b5518aecf04a778afb7bfceef613aba2ad1a3f6586->leave($__internal_7e882d8538d87aa32613e5b5518aecf04a778afb7bfceef613aba2ad1a3f6586_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_31a354565acf8d214c50335eaee4b59e285d2d88801eb1203f29c2bd1c3114d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31a354565acf8d214c50335eaee4b59e285d2d88801eb1203f29c2bd1c3114d2->enter($__internal_31a354565acf8d214c50335eaee4b59e285d2d88801eb1203f29c2bd1c3114d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9252877fb288887695ea363b3f4b2d99b3ab1ae2a2c5a28576938980d8e1a0f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9252877fb288887695ea363b3f4b2d99b3ab1ae2a2c5a28576938980d8e1a0f6->enter($__internal_9252877fb288887695ea363b3f4b2d99b3ab1ae2a2c5a28576938980d8e1a0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Gas visualization - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9252877fb288887695ea363b3f4b2d99b3ab1ae2a2c5a28576938980d8e1a0f6->leave($__internal_9252877fb288887695ea363b3f4b2d99b3ab1ae2a2c5a28576938980d8e1a0f6_prof);

        
        $__internal_31a354565acf8d214c50335eaee4b59e285d2d88801eb1203f29c2bd1c3114d2->leave($__internal_31a354565acf8d214c50335eaee4b59e285d2d88801eb1203f29c2bd1c3114d2_prof);

    }

    // line 7
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_b55c11d247c901ecd42808cf302ed39f9966d438f38482d05713dfbd8562050b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b55c11d247c901ecd42808cf302ed39f9966d438f38482d05713dfbd8562050b->enter($__internal_b55c11d247c901ecd42808cf302ed39f9966d438f38482d05713dfbd8562050b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_8b8e389e5fed79f5d85d63627aeb16d00cdf2f1c5d9dbc096a2920633fb9b93c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b8e389e5fed79f5d85d63627aeb16d00cdf2f1c5d9dbc096a2920633fb9b93c->enter($__internal_8b8e389e5fed79f5d85d63627aeb16d00cdf2f1c5d9dbc096a2920633fb9b93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        // line 8
        echo "
  <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gas visualization"), "html", null, true);
        echo "</h2>

<div class=\"btn-group\" role=\"group\" aria-label=\"...\">

  <button type=\"button\" class=\"btn btn-default active\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Day detail"), "html", null, true);
        echo "</button>
  <button type=\"button\" class=\"btn btn-default\" onclick=\"location.href = '";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_gasvisual_daily");
        echo "'\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Day"), "html", null, true);
        echo "</button>
  <button type=\"button\" class=\"btn btn-default\" onclick=\"location.href = '";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_gasvisual_weekly");
        echo "'\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Week"), "html", null, true);
        echo "</button>
  <button type=\"button\" class=\"btn btn-default\" onclick=\"location.href = '";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_gasvisual_monthly");
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_gaslogadd");
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
        $context['_seq'] = twig_ensure_traversable((isset($context["gaslogdaydetails"]) || array_key_exists("gaslogdaydetails", $context) ? $context["gaslogdaydetails"] : (function () { throw new Twig_Error_Runtime('Variable "gaslogdaydetails" does not exist.', 74, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["gaslogdaydetail"]) {
            // line 75
            echo "     {x: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["gaslogdaydetail"], "daterx", array()), "U"), "html", null, true);
            echo ", y: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["gaslogdaydetail"], "consumption", array()), "html", null, true);
            echo "},
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gaslogdaydetail'], $context['_parent'], $context['loop']);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["gaslogdaydetails"]) || array_key_exists("gaslogdaydetails", $context) ? $context["gaslogdaydetails"] : (function () { throw new Twig_Error_Runtime('Variable "gaslogdaydetails" does not exist.', 112, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["gaslogdaydetail"]) {
            // line 113
            echo "          <tr>
            <td>";
            // line 114
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["gaslogdaydetail"], "daterx", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
            <td>";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["gaslogdaydetail"], "metervalue", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["gaslogdaydetail"], "consumption", array()), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gaslogdaydetail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "        </tbody>
      </table>
    </div>
</div>

";
        
        $__internal_8b8e389e5fed79f5d85d63627aeb16d00cdf2f1c5d9dbc096a2920633fb9b93c->leave($__internal_8b8e389e5fed79f5d85d63627aeb16d00cdf2f1c5d9dbc096a2920633fb9b93c_prof);

        
        $__internal_b55c11d247c901ecd42808cf302ed39f9966d438f38482d05713dfbd8562050b->leave($__internal_b55c11d247c901ecd42808cf302ed39f9966d438f38482d05713dfbd8562050b_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Visualization:gasvisual_day_detail.html.twig";
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
  Gas visualization - {{ parent() }}
{% endblock %}

{% block lljm_home_body %}

  <h2>{{ 'Gas visualization' | trans }}</h2>

<div class=\"btn-group\" role=\"group\" aria-label=\"...\">

  <button type=\"button\" class=\"btn btn-default active\">{{ 'Day detail' | trans }}</button>
  <button type=\"button\" class=\"btn btn-default\" onclick=\"location.href = '{{ path('home_gasvisual_daily') }}'\">{{ 'Day' | trans }}</button>
  <button type=\"button\" class=\"btn btn-default\" onclick=\"location.href = '{{ path('home_gasvisual_weekly') }}'\">{{ 'Week' | trans }}</button>
  <button type=\"button\" class=\"btn btn-default\" onclick=\"location.href = '{{ path('home_gasvisual_monthly') }}'\">{{ 'Month' | trans }}</button>
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
  <a class=\"btn btn-default btn-sm glyphicon glyphicon-plus\" href=\"{{ path('home_gaslogadd') }}\">
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
  {% for gaslogdaydetail in gaslogdaydetails %}
     {x: {{ gaslogdaydetail.daterx | date(\"U\")}}, y: {{ gaslogdaydetail.consumption }}},
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
  {% for gaslogdaydetail in gaslogdaydetails %}
          <tr>
            <td>{{ gaslogdaydetail.daterx | date(\"Y-m-d H:i:s\")}}</td>
            <td>{{ gaslogdaydetail.metervalue }}</td>
            <td>{{ gaslogdaydetail.consumption }}</td>
          </tr>
  {% else %}
    <p>{{ 'No record in this table' | trans }}.</p>
  {% endfor %}
        </tbody>
      </table>
    </div>
</div>

{% endblock %}
", "LljmHomeBundle:Visualization:gasvisual_day_detail.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Visualization/gasvisual_day_detail.html.twig");
    }
}
