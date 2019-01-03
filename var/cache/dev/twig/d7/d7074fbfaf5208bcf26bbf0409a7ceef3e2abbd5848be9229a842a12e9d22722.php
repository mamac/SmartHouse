<?php

/* LljmHealthBundle:Weight:index.html.twig */
class __TwigTemplate_f4fe49ee8e862a706f5c2a1ec38868b6b21a336e92dedecb2ae9621bfff1c313 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LljmHealthBundle::layout.html.twig", "LljmHealthBundle:Weight:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LljmHealthBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9866c1bf98ab052ee7d173ad5cb879bd1557467dc76bbf15f03ba3dadf6bcb06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9866c1bf98ab052ee7d173ad5cb879bd1557467dc76bbf15f03ba3dadf6bcb06->enter($__internal_9866c1bf98ab052ee7d173ad5cb879bd1557467dc76bbf15f03ba3dadf6bcb06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHealthBundle:Weight:index.html.twig"));

        $__internal_de7861ce352227c1522785e17d09883821954bd85f0fe1eb137c88bdb97077b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de7861ce352227c1522785e17d09883821954bd85f0fe1eb137c88bdb97077b6->enter($__internal_de7861ce352227c1522785e17d09883821954bd85f0fe1eb137c88bdb97077b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHealthBundle:Weight:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9866c1bf98ab052ee7d173ad5cb879bd1557467dc76bbf15f03ba3dadf6bcb06->leave($__internal_9866c1bf98ab052ee7d173ad5cb879bd1557467dc76bbf15f03ba3dadf6bcb06_prof);

        
        $__internal_de7861ce352227c1522785e17d09883821954bd85f0fe1eb137c88bdb97077b6->leave($__internal_de7861ce352227c1522785e17d09883821954bd85f0fe1eb137c88bdb97077b6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0721305b5feac9c482df267307d9ea5ecbc4cc8d2029c95ce33ddfda1d6cc802 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0721305b5feac9c482df267307d9ea5ecbc4cc8d2029c95ce33ddfda1d6cc802->enter($__internal_0721305b5feac9c482df267307d9ea5ecbc4cc8d2029c95ce33ddfda1d6cc802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e31966dc17eaa23c6ce84fbefce3d5855b5834721524350cfc065dad9efa8ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e31966dc17eaa23c6ce84fbefce3d5855b5834721524350cfc065dad9efa8ace->enter($__internal_e31966dc17eaa23c6ce84fbefce3d5855b5834721524350cfc065dad9efa8ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <h2>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Weight follow up"), "html", null, true);
        echo "</h2>

<script type=\"text/javascript\">

    function display() {

      dst = \"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"));
        echo "\" + '/';
      dst += document.getElementById(\"datefrom\").value + ',';
      dst += document.getElementById(\"dateto\").value + ',';
      dst += document.getElementById(\"userlist\").value;
      
      location.href = dst;
  
    }

</script>

<div>
\t<form class=\"form-inline\" role=\"form\" onsubmit=\"return false;\">

\t<input type=\"text\" id=\"datefrom\" class=\"form-control datepicker\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["datefrom"]) || array_key_exists("datefrom", $context) ? $context["datefrom"] : (function () { throw new Twig_Error_Runtime('Variable "datefrom" does not exist.', 24, $this->getSourceContext()); })()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date from"), "html", null, true);
        echo "\">
\t<input type=\"text\" id=\"dateto\" class=\"form-control datepicker\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["dateto"]) || array_key_exists("dateto", $context) ? $context["dateto"] : (function () { throw new Twig_Error_Runtime('Variable "dateto" does not exist.', 25, $this->getSourceContext()); })()), "html", null, true);
        echo "\"  placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date to"), "html", null, true);
        echo "\">

\t<select id=\"userlist\" class=\"form-control\">
\t  ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["userlist"]);
        foreach ($context['_seq'] as $context["_key"] => $context["userlist"]) {
            // line 29
            echo "
\t  <option value=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["userlist"], "id", array()), "html", null, true);
            echo "\" ";
            if (((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 30, $this->getSourceContext()); })()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["userlist"], "id", array()))) {
                echo " selected ";
            }
            echo " >";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["userlist"], "firstname", array())), "html", null, true);
            echo "</option>

\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userlist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t</select>

\t<button type=\"submit\" class = \"btn btn-default\" onclick=\"return display()\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search"), "html", null, true);
        echo "</button>

\t</form>
</div>
<br>
        <div>
          <a class=\"btn btn-default btn-sm glyphicon glyphicon-plus\" href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("health_weightadd");
        echo "\">
            ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
        echo "
          </a>
        </div>

<br>

<div id=\"lineChart\" class=\"epoch\" style=\"height: 250px\"></div>

<script>
(function() {

var lineChartData = [
  { label: \"Series 1\",
   values: [
  ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["weights"]) || array_key_exists("weights", $context) ? $context["weights"] : (function () { throw new Twig_Error_Runtime('Variable "weights" does not exist.', 56, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["weight"]) {
            // line 57
            echo "     {x: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["weight"], "dateRead", array()), "U"), "html", null, true);
            echo ", y: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["weight"], "weightValue", array()), "html", null, true);
            echo "},
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "   ]
  }
];

  \$('#lineChart').epoch({
     type: 'line',
     data: lineChartData,
     axes: ['left', 'bottom'],
     ticks: { left: 5, bottom: 10 },
     tickFormats: { bottom:
       function(d) {
         var date = new Date(d*1000);

         var date_year   = date.getFullYear();
         var date_month  = date.getMonth() + 1;
         var date_day    = date.getDate();

         return date_year + '-' + date_month + '-' + date_day;
       }
     }
  });
})();

</script>
</div>
<br>

    <div class=\"table-responsive\">
      <table class=\"table table-striped\">
        <thead>
          <tr>
            <th>";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("User"), "html", null, true);
        echo "</th>
            <th>";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date read"), "html", null, true);
        echo "</th>
            <th>";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Weight"), "html", null, true);
        echo "</th>
          </tr>
        </thead>
        <tbody>
  ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["weights"]) || array_key_exists("weights", $context) ? $context["weights"] : (function () { throw new Twig_Error_Runtime('Variable "weights" does not exist.', 96, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["weight"]) {
            // line 97
            echo "          <tr>
            <td>";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["weight"], "firstname", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 99
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["weight"], "dateRead", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
            <td>";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["weight"], "weightValue", array()), "html", null, true);
            echo "</td>
          </tr>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 103
            echo "    <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No record in this table"), "html", null, true);
            echo ".</p>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "        </tbody>
      </table>
    </div>

          ";
        
        $__internal_e31966dc17eaa23c6ce84fbefce3d5855b5834721524350cfc065dad9efa8ace->leave($__internal_e31966dc17eaa23c6ce84fbefce3d5855b5834721524350cfc065dad9efa8ace_prof);

        
        $__internal_0721305b5feac9c482df267307d9ea5ecbc4cc8d2029c95ce33ddfda1d6cc802->leave($__internal_0721305b5feac9c482df267307d9ea5ecbc4cc8d2029c95ce33ddfda1d6cc802_prof);

    }

    public function getTemplateName()
    {
        return "LljmHealthBundle:Weight:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 105,  233 => 103,  225 => 100,  221 => 99,  217 => 98,  214 => 97,  209 => 96,  202 => 92,  198 => 91,  194 => 90,  161 => 59,  150 => 57,  146 => 56,  129 => 42,  125 => 41,  116 => 35,  112 => 33,  97 => 30,  94 => 29,  90 => 28,  82 => 25,  76 => 24,  59 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"LljmHealthBundle::layout.html.twig\" %}

         {% block body %}
  <h2>{{ 'Weight follow up' | trans }}</h2>

<script type=\"text/javascript\">

    function display() {

      dst = \"{{ path(app.request.attributes.get('_route')) }}\" + '/';
      dst += document.getElementById(\"datefrom\").value + ',';
      dst += document.getElementById(\"dateto\").value + ',';
      dst += document.getElementById(\"userlist\").value;
      
      location.href = dst;
  
    }

</script>

<div>
\t<form class=\"form-inline\" role=\"form\" onsubmit=\"return false;\">

\t<input type=\"text\" id=\"datefrom\" class=\"form-control datepicker\" value=\"{{ datefrom }}\" placeholder=\"{{ 'date from' | trans}}\">
\t<input type=\"text\" id=\"dateto\" class=\"form-control datepicker\" value=\"{{ dateto }}\"  placeholder=\"{{ 'date to' | trans}}\">

\t<select id=\"userlist\" class=\"form-control\">
\t  {% for userlist in userlist %}

\t  <option value=\"{{ userlist.id }}\" {% if user == userlist.id %} selected {% endif %} >{{ userlist.firstname | trans }}</option>

\t  {% endfor %}
\t</select>

\t<button type=\"submit\" class = \"btn btn-default\" onclick=\"return display()\">{{ \"Search\" | trans }}</button>

\t</form>
</div>
<br>
        <div>
          <a class=\"btn btn-default btn-sm glyphicon glyphicon-plus\" href=\"{{ path('health_weightadd') }}\">
            {{ 'Add' | trans }}
          </a>
        </div>

<br>

<div id=\"lineChart\" class=\"epoch\" style=\"height: 250px\"></div>

<script>
(function() {

var lineChartData = [
  { label: \"Series 1\",
   values: [
  {% for weight in weights %}
     {x: {{ weight.dateRead | date(\"U\")}}, y: {{ weight.weightValue }}},
  {% endfor %}
   ]
  }
];

  \$('#lineChart').epoch({
     type: 'line',
     data: lineChartData,
     axes: ['left', 'bottom'],
     ticks: { left: 5, bottom: 10 },
     tickFormats: { bottom:
       function(d) {
         var date = new Date(d*1000);

         var date_year   = date.getFullYear();
         var date_month  = date.getMonth() + 1;
         var date_day    = date.getDate();

         return date_year + '-' + date_month + '-' + date_day;
       }
     }
  });
})();

</script>
</div>
<br>

    <div class=\"table-responsive\">
      <table class=\"table table-striped\">
        <thead>
          <tr>
            <th>{{ 'User' | trans }}</th>
            <th>{{ 'Date read' | trans }}</th>
            <th>{{ 'Weight' | trans }}</th>
          </tr>
        </thead>
        <tbody>
  {% for weight in weights %}
          <tr>
            <td>{{ weight.firstname }}</td>
            <td>{{ weight.dateRead | date(\"Y-m-d H:i:s\") }}</td>
            <td>{{ weight.weightValue }}</td>
          </tr>
  {% else %}
    <p>{{ 'No record in this table' | trans }}.</p>
  {% endfor %}
        </tbody>
      </table>
    </div>

          {% endblock %}", "LljmHealthBundle:Weight:index.html.twig", "/home/lljm/web/src/Lljm/HealthBundle/Resources/views/Weight/index.html.twig");
    }
}
