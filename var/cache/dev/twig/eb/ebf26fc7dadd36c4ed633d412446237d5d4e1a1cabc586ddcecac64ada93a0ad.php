<?php

/* LljmHomeBundle:Visualization:humidvisual.html.twig */
class __TwigTemplate_b23791b049b207d318e7785e3ec6e78fbee4d0873972ff7da4f18abb15b3750b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Visualization:humidvisual.html.twig", 1);
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
        $__internal_90162248f66572b50fe47ab62fcb8302164ba5f675ea986c89364b81b8386f74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90162248f66572b50fe47ab62fcb8302164ba5f675ea986c89364b81b8386f74->enter($__internal_90162248f66572b50fe47ab62fcb8302164ba5f675ea986c89364b81b8386f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:humidvisual.html.twig"));

        $__internal_282474cbb3471a998ca020739a0b7aa9e3d00c8ca8abd0304456fdc5b1407cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_282474cbb3471a998ca020739a0b7aa9e3d00c8ca8abd0304456fdc5b1407cf3->enter($__internal_282474cbb3471a998ca020739a0b7aa9e3d00c8ca8abd0304456fdc5b1407cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:humidvisual.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90162248f66572b50fe47ab62fcb8302164ba5f675ea986c89364b81b8386f74->leave($__internal_90162248f66572b50fe47ab62fcb8302164ba5f675ea986c89364b81b8386f74_prof);

        
        $__internal_282474cbb3471a998ca020739a0b7aa9e3d00c8ca8abd0304456fdc5b1407cf3->leave($__internal_282474cbb3471a998ca020739a0b7aa9e3d00c8ca8abd0304456fdc5b1407cf3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2cc3fdefe7da5de19cbe2e720d92c93f3c77160976e70e65dc14926670bbcd96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cc3fdefe7da5de19cbe2e720d92c93f3c77160976e70e65dc14926670bbcd96->enter($__internal_2cc3fdefe7da5de19cbe2e720d92c93f3c77160976e70e65dc14926670bbcd96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_806db12525ce49057af9d78c807c9fc51fc6504efa2e2b53deb1a83e1a6a3aa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_806db12525ce49057af9d78c807c9fc51fc6504efa2e2b53deb1a83e1a6a3aa3->enter($__internal_806db12525ce49057af9d78c807c9fc51fc6504efa2e2b53deb1a83e1a6a3aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Humidity visualization - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_806db12525ce49057af9d78c807c9fc51fc6504efa2e2b53deb1a83e1a6a3aa3->leave($__internal_806db12525ce49057af9d78c807c9fc51fc6504efa2e2b53deb1a83e1a6a3aa3_prof);

        
        $__internal_2cc3fdefe7da5de19cbe2e720d92c93f3c77160976e70e65dc14926670bbcd96->leave($__internal_2cc3fdefe7da5de19cbe2e720d92c93f3c77160976e70e65dc14926670bbcd96_prof);

    }

    // line 7
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_a2af934f6879131841402228d65d2f61b8fa34baf7fca207eb82fd1cda075063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2af934f6879131841402228d65d2f61b8fa34baf7fca207eb82fd1cda075063->enter($__internal_a2af934f6879131841402228d65d2f61b8fa34baf7fca207eb82fd1cda075063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_52fbe230fb290d29c64f9f46e2921c7d9a21272d5438459972b7f4532def9e3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52fbe230fb290d29c64f9f46e2921c7d9a21272d5438459972b7f4532def9e3a->enter($__internal_52fbe230fb290d29c64f9f46e2921c7d9a21272d5438459972b7f4532def9e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        // line 8
        echo "
  <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Humidity visualization"), "html", null, true);
        echo "</h2>

<script type=\"text/javascript\">

    function display() {

      dst = \"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"));
        echo "\" + '/';
      dst += document.getElementById(\"datefrom\").value + ',';
      dst += document.getElementById(\"dateto\").value + ',';
      dst += document.getElementById(\"nodeguid\").value;
      
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

<select id=\"nodeguid\" class=\"form-control\">
  ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["nodelist"]);
        foreach ($context['_seq'] as $context["_key"] => $context["nodelist"]) {
            // line 35
            echo "
  <option value=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["nodelist"], "nodeguid", array()), "html", null, true);
            echo "\" ";
            if (((isset($context["nodeguid"]) || array_key_exists("nodeguid", $context) ? $context["nodeguid"] : (function () { throw new Twig_Error_Runtime('Variable "nodeguid" does not exist.', 36, $this->getSourceContext()); })()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["nodelist"], "nodeguid", array()))) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["humidcharts"]) || array_key_exists("humidcharts", $context) ? $context["humidcharts"] : (function () { throw new Twig_Error_Runtime('Variable "humidcharts" does not exist.', 55, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["humidchart"]) {
            // line 56
            echo "     {x: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["humidchart"], "daterx", array()), "U"), "html", null, true);
            echo ", y: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["humidchart"], "humvalue", array()), "html", null, true);
            echo "},
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['humidchart'], $context['_parent'], $context['loop']);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["humidcharts"]) || array_key_exists("humidcharts", $context) ? $context["humidcharts"] : (function () { throw new Twig_Error_Runtime('Variable "humidcharts" does not exist.', 96, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["humidchart"]) {
            // line 97
            echo "          <tr>
            <td>";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["humidchart"], "node", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["humidchart"], "zonename", array())), "html", null, true);
            echo "</td>
            <td>";
            // line 100
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["humidchart"], "daterx", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
            <td>";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["humidchart"], "humvalue", array()), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['humidchart'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "        </tbody>
      </table>
    </div>
</div>

";
        
        $__internal_52fbe230fb290d29c64f9f46e2921c7d9a21272d5438459972b7f4532def9e3a->leave($__internal_52fbe230fb290d29c64f9f46e2921c7d9a21272d5438459972b7f4532def9e3a_prof);

        
        $__internal_a2af934f6879131841402228d65d2f61b8fa34baf7fca207eb82fd1cda075063->leave($__internal_a2af934f6879131841402228d65d2f61b8fa34baf7fca207eb82fd1cda075063_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Visualization:humidvisual.html.twig";
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
  Humidity visualization - {{ parent() }}
{% endblock %}

{% block lljm_home_body %}

  <h2>{{ 'Humidity visualization' | trans }}</h2>

<script type=\"text/javascript\">

    function display() {

      dst = \"{{ path(app.request.attributes.get('_route')) }}\" + '/';
      dst += document.getElementById(\"datefrom\").value + ',';
      dst += document.getElementById(\"dateto\").value + ',';
      dst += document.getElementById(\"nodeguid\").value;
      
      location.href = dst;
  
    }

</script>

<div>

<form class=\"form-inline\" role=\"form\" onsubmit=\"return false;\">

<input type=\"text\" id=\"datefrom\" class=\"form-control datepicker\" value=\"{{ datefrom }}\" placeholder=\"{{ 'date from' | trans}}\">
<input type=\"text\" id=\"dateto\" class=\"form-control datepicker\" value=\"{{ dateto }}\"  placeholder=\"{{ 'date to' | trans}}\">

<select id=\"nodeguid\" class=\"form-control\">
  {% for nodelist in nodelist %}

  <option value=\"{{ nodelist.nodeguid }}\" {% if nodeguid == nodelist.nodeguid %} selected {% endif %} >{{ nodelist.zonename | trans }}</option>

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
  {% for humidchart in humidcharts %}
     {x: {{ humidchart.daterx | date(\"U\")}}, y: {{ humidchart.humvalue }}},
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
  {% for humidchart in humidcharts %}
          <tr>
            <td>{{ humidchart.node }}</td>
            <td>{{ humidchart.zonename | trans }}</td>
            <td>{{ humidchart.daterx | date(\"Y-m-d H:i:s\")}}</td>
            <td>{{ humidchart.humvalue }}</td>
          </tr>
  {% else %}
    <p>{{ 'No record in this table' | trans }}.</p>
  {% endfor %}
        </tbody>
      </table>
    </div>
</div>

{% endblock %}
", "LljmHomeBundle:Visualization:humidvisual.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Visualization/humidvisual.html.twig");
    }
}
