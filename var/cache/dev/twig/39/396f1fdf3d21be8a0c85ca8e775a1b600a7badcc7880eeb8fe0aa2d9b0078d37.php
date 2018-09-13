<?php

/* LljmHomeBundle:Visualization:gasvisual_monthly.html.twig */
class __TwigTemplate_b9b9d1dc1c91bb2cacb25ff1aabecc23c13f6c0f422f8e1ebf02df2568023322 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Visualization:gasvisual_monthly.html.twig", 1);
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
        $__internal_a2f629c93e2d13d0bf91be9f1d0d52c8d4482d5ea773c0c94ef02f63683aec11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2f629c93e2d13d0bf91be9f1d0d52c8d4482d5ea773c0c94ef02f63683aec11->enter($__internal_a2f629c93e2d13d0bf91be9f1d0d52c8d4482d5ea773c0c94ef02f63683aec11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:gasvisual_monthly.html.twig"));

        $__internal_02c92139791c476f3800b4727d9c4c342ceebff6e1f6899db91c815981e21dfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c92139791c476f3800b4727d9c4c342ceebff6e1f6899db91c815981e21dfa->enter($__internal_02c92139791c476f3800b4727d9c4c342ceebff6e1f6899db91c815981e21dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:gasvisual_monthly.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2f629c93e2d13d0bf91be9f1d0d52c8d4482d5ea773c0c94ef02f63683aec11->leave($__internal_a2f629c93e2d13d0bf91be9f1d0d52c8d4482d5ea773c0c94ef02f63683aec11_prof);

        
        $__internal_02c92139791c476f3800b4727d9c4c342ceebff6e1f6899db91c815981e21dfa->leave($__internal_02c92139791c476f3800b4727d9c4c342ceebff6e1f6899db91c815981e21dfa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5896707574be5939e4e1c3acf19fd02230c9e09544e766afa8b89dbfe404f23d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5896707574be5939e4e1c3acf19fd02230c9e09544e766afa8b89dbfe404f23d->enter($__internal_5896707574be5939e4e1c3acf19fd02230c9e09544e766afa8b89dbfe404f23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cac77b444172043648b8e8ca45cfc678d1c4febf36f893945466d0f4d9e275a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac77b444172043648b8e8ca45cfc678d1c4febf36f893945466d0f4d9e275a7->enter($__internal_cac77b444172043648b8e8ca45cfc678d1c4febf36f893945466d0f4d9e275a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Gas visualization - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_cac77b444172043648b8e8ca45cfc678d1c4febf36f893945466d0f4d9e275a7->leave($__internal_cac77b444172043648b8e8ca45cfc678d1c4febf36f893945466d0f4d9e275a7_prof);

        
        $__internal_5896707574be5939e4e1c3acf19fd02230c9e09544e766afa8b89dbfe404f23d->leave($__internal_5896707574be5939e4e1c3acf19fd02230c9e09544e766afa8b89dbfe404f23d_prof);

    }

    // line 7
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_41ebf62417da37f2d2910c16a58be8359df285fe482481daeb62d434da36de76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41ebf62417da37f2d2910c16a58be8359df285fe482481daeb62d434da36de76->enter($__internal_41ebf62417da37f2d2910c16a58be8359df285fe482481daeb62d434da36de76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_64acfe5bee4ec6dbbc8e7aef241415359657c13a1c18177d6a24382c35d0ef26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64acfe5bee4ec6dbbc8e7aef241415359657c13a1c18177d6a24382c35d0ef26->enter($__internal_64acfe5bee4ec6dbbc8e7aef241415359657c13a1c18177d6a24382c35d0ef26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        // line 8
        echo "
  <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gas visualization"), "html", null, true);
        echo "</h2>

<div class=\"btn-group\" role=\"group\" aria-label=\"...\">

  <button type=\"button\" class=\"btn btn-default\" onclick=\"location.href = '";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_gasvisual_day_detail");
        echo "'\">";
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
        $context['_seq'] = twig_ensure_traversable((isset($context["gaslogmonthlys"]) || array_key_exists("gaslogmonthlys", $context) ? $context["gaslogmonthlys"] : (function () { throw new Twig_Error_Runtime('Variable "gaslogmonthlys" does not exist.', 67, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["gaslogmonthly"]) {
            // line 68
            echo "     {x: '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["gaslogmonthly"], "yearmonth", array()), "html", null, true);
            echo "', y: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["gaslogmonthly"], "consumption", array()), "html", null, true);
            echo "},
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gaslogmonthly'], $context['_parent'], $context['loop']);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["gaslogmonthlys"]) || array_key_exists("gaslogmonthlys", $context) ? $context["gaslogmonthlys"] : (function () { throw new Twig_Error_Runtime('Variable "gaslogmonthlys" does not exist.', 94, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["gaslogmonthly"]) {
            // line 95
            echo "          <tr>
            <td>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["gaslogmonthly"], "yearmonth", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["gaslogmonthly"], "consumption", array()), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gaslogmonthly'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "        </tbody>
      </table>
    </div>
</div>
  
";
        
        $__internal_64acfe5bee4ec6dbbc8e7aef241415359657c13a1c18177d6a24382c35d0ef26->leave($__internal_64acfe5bee4ec6dbbc8e7aef241415359657c13a1c18177d6a24382c35d0ef26_prof);

        
        $__internal_41ebf62417da37f2d2910c16a58be8359df285fe482481daeb62d434da36de76->leave($__internal_41ebf62417da37f2d2910c16a58be8359df285fe482481daeb62d434da36de76_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Visualization:gasvisual_monthly.html.twig";
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
  Gas visualization - {{ parent() }}
{% endblock %}

{% block lljm_home_body %}

  <h2>{{ 'Gas visualization' | trans }}</h2>

<div class=\"btn-group\" role=\"group\" aria-label=\"...\">

  <button type=\"button\" class=\"btn btn-default\" onclick=\"location.href = '{{ path('home_gasvisual_day_detail') }}'\">{{ 'Day detail' | trans }}</button>
  <button type=\"button\" class=\"btn btn-default\" onclick=\"location.href = '{{ path('home_gasvisual_daily') }}'\">{{ 'Day' | trans }}</button>
  <button type=\"button\" class=\"btn btn-default\" onclick=\"location.href = '{{ path('home_gasvisual_weekly') }}'\">{{ 'Week' | trans }}</button>
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
  {% for gaslogmonthly in gaslogmonthlys %}
     {x: '{{ gaslogmonthly.yearmonth }}', y: {{ gaslogmonthly.consumption }}},
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
  {% for gaslogmonthly in gaslogmonthlys %}
          <tr>
            <td>{{ gaslogmonthly.yearmonth }}</td>
            <td>{{ gaslogmonthly.consumption }}</td>
          </tr>
  {% else %}
    <p>{{ 'No record in this table' | trans }}.</p>
  {% endfor %}
        </tbody>
      </table>
    </div>
</div>
  
{% endblock %}
", "LljmHomeBundle:Visualization:gasvisual_monthly.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Visualization/gasvisual_monthly.html.twig");
    }
}
