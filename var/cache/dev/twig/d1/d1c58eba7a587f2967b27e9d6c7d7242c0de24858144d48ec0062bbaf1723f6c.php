<?php

/* LljmHomeBundle:Visualization:watervisual_day_detail.html.twig */
class __TwigTemplate_51855d44ad1251926d356ab97342fcc6b83b0e0ddcdeef00260ba9c23989b50c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Visualization:watervisual_day_detail.html.twig", 1);
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
        $__internal_e72e7c5d01eebc7813eea54c81cc92b1ff9d1e39c0499d7a1071804ac906815f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e72e7c5d01eebc7813eea54c81cc92b1ff9d1e39c0499d7a1071804ac906815f->enter($__internal_e72e7c5d01eebc7813eea54c81cc92b1ff9d1e39c0499d7a1071804ac906815f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:watervisual_day_detail.html.twig"));

        $__internal_1cc3ed34c0aabf5fd836ad49eeb9f233ca0ccb0fe275f5457cf90c17fa32b063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cc3ed34c0aabf5fd836ad49eeb9f233ca0ccb0fe275f5457cf90c17fa32b063->enter($__internal_1cc3ed34c0aabf5fd836ad49eeb9f233ca0ccb0fe275f5457cf90c17fa32b063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:watervisual_day_detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e72e7c5d01eebc7813eea54c81cc92b1ff9d1e39c0499d7a1071804ac906815f->leave($__internal_e72e7c5d01eebc7813eea54c81cc92b1ff9d1e39c0499d7a1071804ac906815f_prof);

        
        $__internal_1cc3ed34c0aabf5fd836ad49eeb9f233ca0ccb0fe275f5457cf90c17fa32b063->leave($__internal_1cc3ed34c0aabf5fd836ad49eeb9f233ca0ccb0fe275f5457cf90c17fa32b063_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5260c10c5c4b33692db0387240de0fdebd37535a1c5251b24566e17e9b55300 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5260c10c5c4b33692db0387240de0fdebd37535a1c5251b24566e17e9b55300->enter($__internal_a5260c10c5c4b33692db0387240de0fdebd37535a1c5251b24566e17e9b55300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_87a188a0d457cce726f28ec90eb01f33b390d9ebcf9344125cf8f8261091928d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a188a0d457cce726f28ec90eb01f33b390d9ebcf9344125cf8f8261091928d->enter($__internal_87a188a0d457cce726f28ec90eb01f33b390d9ebcf9344125cf8f8261091928d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Water visualization - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_87a188a0d457cce726f28ec90eb01f33b390d9ebcf9344125cf8f8261091928d->leave($__internal_87a188a0d457cce726f28ec90eb01f33b390d9ebcf9344125cf8f8261091928d_prof);

        
        $__internal_a5260c10c5c4b33692db0387240de0fdebd37535a1c5251b24566e17e9b55300->leave($__internal_a5260c10c5c4b33692db0387240de0fdebd37535a1c5251b24566e17e9b55300_prof);

    }

    // line 7
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_9d11d3086f3040bec4eab4e854d958c3072c9351946ab594bbd81faafe301361 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d11d3086f3040bec4eab4e854d958c3072c9351946ab594bbd81faafe301361->enter($__internal_9d11d3086f3040bec4eab4e854d958c3072c9351946ab594bbd81faafe301361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_e69c078659aafbd86bdb77c3c5a1beb21d3ebe80251ca312d2f7b0766a12e41a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e69c078659aafbd86bdb77c3c5a1beb21d3ebe80251ca312d2f7b0766a12e41a->enter($__internal_e69c078659aafbd86bdb77c3c5a1beb21d3ebe80251ca312d2f7b0766a12e41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        // line 8
        echo "
  <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Water visualization"), "html", null, true);
        echo "</h2>

<div class=\"btn-group\" role=\"group\" aria-label=\"...\">

  <button type=\"button\" class=\"btn btn-default active\">";
        // line 13
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
  <button type=\"button\" class=\"btn btn-default\" onclick=\"location.href = '";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_watervisual_monthly");
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_waterlogadd");
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
        $context['_seq'] = twig_ensure_traversable((isset($context["waterlogdaydetails"]) || array_key_exists("waterlogdaydetails", $context) ? $context["waterlogdaydetails"] : (function () { throw new Twig_Error_Runtime('Variable "waterlogdaydetails" does not exist.', 74, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["waterlogdaydetail"]) {
            // line 75
            echo "     {x: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["waterlogdaydetail"], "daterx", array()), "U"), "html", null, true);
            echo ", y: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["waterlogdaydetail"], "consumption", array()), "html", null, true);
            echo "},
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['waterlogdaydetail'], $context['_parent'], $context['loop']);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["waterlogdaydetails"]) || array_key_exists("waterlogdaydetails", $context) ? $context["waterlogdaydetails"] : (function () { throw new Twig_Error_Runtime('Variable "waterlogdaydetails" does not exist.', 112, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["waterlogdaydetail"]) {
            // line 113
            echo "          <tr>
            <td>";
            // line 114
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["waterlogdaydetail"], "daterx", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
            <td>";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["waterlogdaydetail"], "metervalue", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["waterlogdaydetail"], "consumption", array()), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['waterlogdaydetail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "        </tbody>
      </table>
    </div>
</div>

";
        
        $__internal_e69c078659aafbd86bdb77c3c5a1beb21d3ebe80251ca312d2f7b0766a12e41a->leave($__internal_e69c078659aafbd86bdb77c3c5a1beb21d3ebe80251ca312d2f7b0766a12e41a_prof);

        
        $__internal_9d11d3086f3040bec4eab4e854d958c3072c9351946ab594bbd81faafe301361->leave($__internal_9d11d3086f3040bec4eab4e854d958c3072c9351946ab594bbd81faafe301361_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Visualization:watervisual_day_detail.html.twig";
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
  Water visualization - {{ parent() }}
{% endblock %}

{% block lljm_home_body %}

  <h2>{{ 'Water visualization' | trans }}</h2>

<div class=\"btn-group\" role=\"group\" aria-label=\"...\">

  <button type=\"button\" class=\"btn btn-default active\">{{ 'Day detail' | trans }}</button>
  <button type=\"button\" class=\"btn btn-default\" onclick=\"location.href = '{{ path('home_watervisual_daily') }}'\">{{ 'Day' | trans }}</button>
  <button type=\"button\" class=\"btn btn-default\" onclick=\"location.href = '{{ path('home_watervisual_weekly') }}'\">{{ 'Week' | trans }}</button>
  <button type=\"button\" class=\"btn btn-default\" onclick=\"location.href = '{{ path('home_watervisual_monthly') }}'\">{{ 'Month' | trans }}</button>
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
  <a class=\"btn btn-default btn-sm glyphicon glyphicon-plus\" href=\"{{ path('home_waterlogadd') }}\">
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
  {% for waterlogdaydetail in waterlogdaydetails %}
     {x: {{ waterlogdaydetail.daterx | date(\"U\")}}, y: {{ waterlogdaydetail.consumption }}},
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
  {% for waterlogdaydetail in waterlogdaydetails %}
          <tr>
            <td>{{ waterlogdaydetail.daterx | date(\"Y-m-d H:i:s\")}}</td>
            <td>{{ waterlogdaydetail.metervalue }}</td>
            <td>{{ waterlogdaydetail.consumption }}</td>
          </tr>
  {% else %}
    <p>{{ 'No record in this table' | trans }}.</p>
  {% endfor %}
        </tbody>
      </table>
    </div>
</div>

{% endblock %}
", "LljmHomeBundle:Visualization:watervisual_day_detail.html.twig", "/home/lljm/web_symfony3/web/src/Lljm/HomeBundle/Resources/views/Visualization/watervisual_day_detail.html.twig");
    }
}
