<?php

/* LljmHomeBundle:Visualization:watervisual_day_detail.html.twig */
class __TwigTemplate_c28e5b732b88ceb741e152b61d2df858c90cccb7ffbd2570f4e8bfcd09fe47c4 extends Twig_Template
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
        $__internal_e7c8ac056f18fcb77dab9d6ea6aabdddbfb8a6b43dd4e9335818f9fafe2ac43a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7c8ac056f18fcb77dab9d6ea6aabdddbfb8a6b43dd4e9335818f9fafe2ac43a->enter($__internal_e7c8ac056f18fcb77dab9d6ea6aabdddbfb8a6b43dd4e9335818f9fafe2ac43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:watervisual_day_detail.html.twig"));

        $__internal_b75be9f34609d2c3868f1532aa88a8488245a14277615a59e25d47a721b6de6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b75be9f34609d2c3868f1532aa88a8488245a14277615a59e25d47a721b6de6d->enter($__internal_b75be9f34609d2c3868f1532aa88a8488245a14277615a59e25d47a721b6de6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:watervisual_day_detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7c8ac056f18fcb77dab9d6ea6aabdddbfb8a6b43dd4e9335818f9fafe2ac43a->leave($__internal_e7c8ac056f18fcb77dab9d6ea6aabdddbfb8a6b43dd4e9335818f9fafe2ac43a_prof);

        
        $__internal_b75be9f34609d2c3868f1532aa88a8488245a14277615a59e25d47a721b6de6d->leave($__internal_b75be9f34609d2c3868f1532aa88a8488245a14277615a59e25d47a721b6de6d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f87fcdff9692e06c72e76dc982b88b729debac35d3e22c11b30b8059e9dee897 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f87fcdff9692e06c72e76dc982b88b729debac35d3e22c11b30b8059e9dee897->enter($__internal_f87fcdff9692e06c72e76dc982b88b729debac35d3e22c11b30b8059e9dee897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d7b143ee8e971d2fd1d61cd146ee416da9eb105064d9d26ad90ce35fed7655d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b143ee8e971d2fd1d61cd146ee416da9eb105064d9d26ad90ce35fed7655d6->enter($__internal_d7b143ee8e971d2fd1d61cd146ee416da9eb105064d9d26ad90ce35fed7655d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Water visualization - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d7b143ee8e971d2fd1d61cd146ee416da9eb105064d9d26ad90ce35fed7655d6->leave($__internal_d7b143ee8e971d2fd1d61cd146ee416da9eb105064d9d26ad90ce35fed7655d6_prof);

        
        $__internal_f87fcdff9692e06c72e76dc982b88b729debac35d3e22c11b30b8059e9dee897->leave($__internal_f87fcdff9692e06c72e76dc982b88b729debac35d3e22c11b30b8059e9dee897_prof);

    }

    // line 7
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_d9865bb430e8ffb22a9aec79455ea390d1626acaf5bda2cef6b58c0f4d787348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9865bb430e8ffb22a9aec79455ea390d1626acaf5bda2cef6b58c0f4d787348->enter($__internal_d9865bb430e8ffb22a9aec79455ea390d1626acaf5bda2cef6b58c0f4d787348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_56e7fd5a7f9affb0ca04694ca9f53a348c8738ec1a9f4fbed8ee8044bd611e5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e7fd5a7f9affb0ca04694ca9f53a348c8738ec1a9f4fbed8ee8044bd611e5c->enter($__internal_56e7fd5a7f9affb0ca04694ca9f53a348c8738ec1a9f4fbed8ee8044bd611e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

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
        
        $__internal_56e7fd5a7f9affb0ca04694ca9f53a348c8738ec1a9f4fbed8ee8044bd611e5c->leave($__internal_56e7fd5a7f9affb0ca04694ca9f53a348c8738ec1a9f4fbed8ee8044bd611e5c_prof);

        
        $__internal_d9865bb430e8ffb22a9aec79455ea390d1626acaf5bda2cef6b58c0f4d787348->leave($__internal_d9865bb430e8ffb22a9aec79455ea390d1626acaf5bda2cef6b58c0f4d787348_prof);

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
", "LljmHomeBundle:Visualization:watervisual_day_detail.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Visualization/watervisual_day_detail.html.twig");
    }
}
