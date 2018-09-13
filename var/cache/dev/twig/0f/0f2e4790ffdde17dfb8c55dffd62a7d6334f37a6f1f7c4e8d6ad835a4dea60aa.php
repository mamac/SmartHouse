<?php

/* LljmHomeBundle:Visualization:tempvisual.html.twig */
class __TwigTemplate_98374e1badc0ac9c5f4d87debb8364b55b1a0c1495387695b9d0d29e00405c1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Visualization:tempvisual.html.twig", 1);
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
        $__internal_6b2a3d2796328d1014f5725eb0d8f7af2fabec0b9bc71b25fc26fb59d275cb71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b2a3d2796328d1014f5725eb0d8f7af2fabec0b9bc71b25fc26fb59d275cb71->enter($__internal_6b2a3d2796328d1014f5725eb0d8f7af2fabec0b9bc71b25fc26fb59d275cb71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:tempvisual.html.twig"));

        $__internal_386a9c3b9134826f37d62fae289eb9565b8b33a03ae1ef6c4864334aac3649de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_386a9c3b9134826f37d62fae289eb9565b8b33a03ae1ef6c4864334aac3649de->enter($__internal_386a9c3b9134826f37d62fae289eb9565b8b33a03ae1ef6c4864334aac3649de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:tempvisual.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b2a3d2796328d1014f5725eb0d8f7af2fabec0b9bc71b25fc26fb59d275cb71->leave($__internal_6b2a3d2796328d1014f5725eb0d8f7af2fabec0b9bc71b25fc26fb59d275cb71_prof);

        
        $__internal_386a9c3b9134826f37d62fae289eb9565b8b33a03ae1ef6c4864334aac3649de->leave($__internal_386a9c3b9134826f37d62fae289eb9565b8b33a03ae1ef6c4864334aac3649de_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f44780c7a433297989ffe8e499fce1c9f899dba37af55be15d32634a022b0f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f44780c7a433297989ffe8e499fce1c9f899dba37af55be15d32634a022b0f2->enter($__internal_9f44780c7a433297989ffe8e499fce1c9f899dba37af55be15d32634a022b0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4ca8d1a5ae25f75ee40684bbafd618fc2635e57e5c5bde35069307b6dd8c49ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca8d1a5ae25f75ee40684bbafd618fc2635e57e5c5bde35069307b6dd8c49ed->enter($__internal_4ca8d1a5ae25f75ee40684bbafd618fc2635e57e5c5bde35069307b6dd8c49ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Temperature visualization - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4ca8d1a5ae25f75ee40684bbafd618fc2635e57e5c5bde35069307b6dd8c49ed->leave($__internal_4ca8d1a5ae25f75ee40684bbafd618fc2635e57e5c5bde35069307b6dd8c49ed_prof);

        
        $__internal_9f44780c7a433297989ffe8e499fce1c9f899dba37af55be15d32634a022b0f2->leave($__internal_9f44780c7a433297989ffe8e499fce1c9f899dba37af55be15d32634a022b0f2_prof);

    }

    // line 7
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_99e955e7b7ed142682c0b18f1a1b728979298a83f3ce6bf8c4b481ef921e6667 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99e955e7b7ed142682c0b18f1a1b728979298a83f3ce6bf8c4b481ef921e6667->enter($__internal_99e955e7b7ed142682c0b18f1a1b728979298a83f3ce6bf8c4b481ef921e6667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_1febd2edfd4c2c31ed526875e35a2124f3b959f4376295348a90c095e2ca932f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1febd2edfd4c2c31ed526875e35a2124f3b959f4376295348a90c095e2ca932f->enter($__internal_1febd2edfd4c2c31ed526875e35a2124f3b959f4376295348a90c095e2ca932f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        // line 8
        echo "
  <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Temperature visualization"), "html", null, true);
        echo "</h2>

<script type=\"text/javascript\">

    function display() {

      dst = \"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"));
        echo "\" + '/';
      dst += document.getElementById(\"datefrom\").value + ',';
      dst += document.getElementById(\"dateto\").value + ',';
      dst += document.getElementById(\"nodeid\").value;
      
      location.href = dst;
  
    }

</script>

<div>

<form class=\"form-inline\" role=\"form\" onsubmit=\"return false;\">

<input type=\"text\" id=\"datefrom\" class=\"form-control datepicker\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["datefrom"]) || array_key_exists("datefrom", $context) ? $context["datefrom"] : (function () { throw new Twig_Error_Runtime('Variable "datefrom" does not exist.', 30, $this->getSourceContext()); })()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date from"), "html", null, true);
        echo "\">
<input type=\"text\" id=\"dateto\" class=\"form-control datepicker\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["dateto"]) || array_key_exists("dateto", $context) ? $context["dateto"] : (function () { throw new Twig_Error_Runtime('Variable "dateto" does not exist.', 31, $this->getSourceContext()); })()), "html", null, true);
        echo "\"  placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date to"), "html", null, true);
        echo "\">

<select multiple id=\"nodeid\" class=\"form-control\">
  ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["nodelist"]);
        foreach ($context['_seq'] as $context["_key"] => $context["nodelist"]) {
            // line 35
            echo "
  <option value=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["nodelist"], "id", array()), "html", null, true);
            echo "\" ";
            if (((isset($context["nodeid"]) || array_key_exists("nodeid", $context) ? $context["nodeid"] : (function () { throw new Twig_Error_Runtime('Variable "nodeid" does not exist.', 36, $this->getSourceContext()); })()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["nodelist"], "id", array()))) {
                echo " selected ";
            }
            echo " >";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["nodelist"], "zonename", array())), "html", null, true);
            echo "</option>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nodelist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "</select>

<button type=\"submit\" class = \"btn btn-default\" onclick=\"return display()\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search"), "html", null, true);
        echo "</button>

</form>

<br>

<div id=\"lineChart\" class=\"epoch\" style=\"height: 250px\"></div>

<script>
(function() {

var lineChartData = [
  { label: \"Series 1\",
   values: [
  ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tempcharts"]) || array_key_exists("tempcharts", $context) ? $context["tempcharts"] : (function () { throw new Twig_Error_Runtime('Variable "tempcharts" does not exist.', 55, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tempchart"]) {
            // line 56
            echo "     {x: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tempchart"], "daterx", array()), "U"), "html", null, true);
            echo ", y: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tempchart"], "tmpvalue", array()), "html", null, true);
            echo "},
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tempchart'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "   ]
  }
];

  \$('#lineChart').epoch({
     type: 'line',
     data: lineChartData,
     axes: ['left', 'bottom'],
     ticks: { left: 5, bottom: 6 },
     tickFormats: { bottom:
       function(d) {
         var date = new Date(d*1000);

         var date_month  = date.getMonth() + 1;
         var date_day    = date.getDate();
         var date_hour   = date.getHours();
         var date_minute = date.getMinutes();

         return date_month + '-' + date_day + ' ' + date_hour + ':' + date_minute;
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
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Node"), "html", null, true);
        echo "</th>
            <th>";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Zone name"), "html", null, true);
        echo "</th>
            <th>";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Received date"), "html", null, true);
        echo "</th>
            <th>";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Value"), "html", null, true);
        echo "</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
  ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tempcharts"]) || array_key_exists("tempcharts", $context) ? $context["tempcharts"] : (function () { throw new Twig_Error_Runtime('Variable "tempcharts" does not exist.', 96, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tempchart"]) {
            // line 97
            echo "          <tr>
            <td>";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tempchart"], "node", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["tempchart"], "zonename", array())), "html", null, true);
            echo "</td>
            <td>";
            // line 100
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tempchart"], "daterx", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
            <td>";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tempchart"], "tmpvalue", array()), "html", null, true);
            echo "</td>
          </tr>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 104
            echo "    <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No record in this table"), "html", null, true);
            echo ".</p>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tempchart'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "        </tbody>
      </table>
    </div>
</div>

";
        
        $__internal_1febd2edfd4c2c31ed526875e35a2124f3b959f4376295348a90c095e2ca932f->leave($__internal_1febd2edfd4c2c31ed526875e35a2124f3b959f4376295348a90c095e2ca932f_prof);

        
        $__internal_99e955e7b7ed142682c0b18f1a1b728979298a83f3ce6bf8c4b481ef921e6667->leave($__internal_99e955e7b7ed142682c0b18f1a1b728979298a83f3ce6bf8c4b481ef921e6667_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Visualization:tempvisual.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 106,  254 => 104,  246 => 101,  242 => 100,  238 => 99,  234 => 98,  231 => 97,  226 => 96,  218 => 91,  214 => 90,  210 => 89,  206 => 88,  174 => 58,  163 => 56,  159 => 55,  142 => 41,  138 => 39,  123 => 36,  120 => 35,  116 => 34,  108 => 31,  102 => 30,  84 => 15,  75 => 9,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"LljmHomeBundle::layout.html.twig\" %}

{% block title %}
  Temperature visualization - {{ parent() }}
{% endblock %}

{% block lljm_home_body %}

  <h2>{{ 'Temperature visualization' | trans }}</h2>

<script type=\"text/javascript\">

    function display() {

      dst = \"{{ path(app.request.attributes.get('_route')) }}\" + '/';
      dst += document.getElementById(\"datefrom\").value + ',';
      dst += document.getElementById(\"dateto\").value + ',';
      dst += document.getElementById(\"nodeid\").value;
      
      location.href = dst;
  
    }

</script>

<div>

<form class=\"form-inline\" role=\"form\" onsubmit=\"return false;\">

<input type=\"text\" id=\"datefrom\" class=\"form-control datepicker\" value=\"{{ datefrom }}\" placeholder=\"{{ 'date from' | trans}}\">
<input type=\"text\" id=\"dateto\" class=\"form-control datepicker\" value=\"{{ dateto }}\"  placeholder=\"{{ 'date to' | trans}}\">

<select multiple id=\"nodeid\" class=\"form-control\">
  {% for nodelist in nodelist %}

  <option value=\"{{ nodelist.id }}\" {% if nodeid == nodelist.id %} selected {% endif %} >{{ nodelist.zonename | trans }}</option>

  {% endfor %}
</select>

<button type=\"submit\" class = \"btn btn-default\" onclick=\"return display()\">{{ \"Search\" | trans }}</button>

</form>

<br>

<div id=\"lineChart\" class=\"epoch\" style=\"height: 250px\"></div>

<script>
(function() {

var lineChartData = [
  { label: \"Series 1\",
   values: [
  {% for tempchart in tempcharts %}
     {x: {{ tempchart.daterx | date(\"U\")}}, y: {{ tempchart.tmpvalue }}},
  {% endfor %}
   ]
  }
];

  \$('#lineChart').epoch({
     type: 'line',
     data: lineChartData,
     axes: ['left', 'bottom'],
     ticks: { left: 5, bottom: 6 },
     tickFormats: { bottom:
       function(d) {
         var date = new Date(d*1000);

         var date_month  = date.getMonth() + 1;
         var date_day    = date.getDate();
         var date_hour   = date.getHours();
         var date_minute = date.getMinutes();

         return date_month + '-' + date_day + ' ' + date_hour + ':' + date_minute;
       }
     }
  });
})();

</script>

    <div class=\"table-responsive\">
      <table class=\"table table-striped\">
        <thead>
          <tr>
            <th>{{ 'Node' | trans }}</th>
            <th>{{ 'Zone name' | trans }}</th>
            <th>{{ 'Received date' | trans }}</th>
            <th>{{ 'Value' | trans }}</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
  {% for tempchart in tempcharts %}
          <tr>
            <td>{{ tempchart.node }}</td>
            <td>{{ tempchart.zonename | trans }}</td>
            <td>{{ tempchart.daterx | date(\"Y-m-d H:i:s\")}}</td>
            <td>{{ tempchart.tmpvalue }}</td>
          </tr>
  {% else %}
    <p>{{ 'No record in this table' | trans }}.</p>
  {% endfor %}
        </tbody>
      </table>
    </div>
</div>

{% endblock %}
", "LljmHomeBundle:Visualization:tempvisual.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Visualization/tempvisual.html.twig");
    }
}
