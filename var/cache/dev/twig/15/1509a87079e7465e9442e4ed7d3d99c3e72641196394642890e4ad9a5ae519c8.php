<?php

/* LljmHealthBundle:Height:index.html.twig */
class __TwigTemplate_8b6396e0b42f9c5479727f4f88c8ed936d5a932509741a9799093e149f2bdd5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LljmHealthBundle::layout.html.twig", "LljmHealthBundle:Height:index.html.twig", 1);
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
        $__internal_c6127c8465cbb4270dc21dd507385f88794f104a914ddb17266a9d7426fd040a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6127c8465cbb4270dc21dd507385f88794f104a914ddb17266a9d7426fd040a->enter($__internal_c6127c8465cbb4270dc21dd507385f88794f104a914ddb17266a9d7426fd040a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHealthBundle:Height:index.html.twig"));

        $__internal_940b71929af0d2309e3ff40b34bb031e5b931fbc95a43125fb6e10183169a73d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_940b71929af0d2309e3ff40b34bb031e5b931fbc95a43125fb6e10183169a73d->enter($__internal_940b71929af0d2309e3ff40b34bb031e5b931fbc95a43125fb6e10183169a73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHealthBundle:Height:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6127c8465cbb4270dc21dd507385f88794f104a914ddb17266a9d7426fd040a->leave($__internal_c6127c8465cbb4270dc21dd507385f88794f104a914ddb17266a9d7426fd040a_prof);

        
        $__internal_940b71929af0d2309e3ff40b34bb031e5b931fbc95a43125fb6e10183169a73d->leave($__internal_940b71929af0d2309e3ff40b34bb031e5b931fbc95a43125fb6e10183169a73d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_168a3b20519bd103f8ac11ab644c39ebaab68b21716b51bbc1a20e3cf27b36b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_168a3b20519bd103f8ac11ab644c39ebaab68b21716b51bbc1a20e3cf27b36b4->enter($__internal_168a3b20519bd103f8ac11ab644c39ebaab68b21716b51bbc1a20e3cf27b36b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_009dc60c1693506a7b0b9876781ee5efb73c292b1a46e37cbafeae87834d0448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_009dc60c1693506a7b0b9876781ee5efb73c292b1a46e37cbafeae87834d0448->enter($__internal_009dc60c1693506a7b0b9876781ee5efb73c292b1a46e37cbafeae87834d0448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <h2>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Height follow up"), "html", null, true);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("health_heightadd");
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
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["heights"]) || array_key_exists("heights", $context) ? $context["heights"] : (function () { throw new Twig_Error_Runtime('Variable "heights" does not exist.', 57, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["height"]) {
            // line 58
            echo "     {x: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["height"], "dateRead", array()), "U"), "html", null, true);
            echo ", y: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["height"], "heightValue", array()), "html", null, true);
            echo "},
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['height'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
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
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("User"), "html", null, true);
        echo "</th>
            <th>";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date read"), "html", null, true);
        echo "</th>
            <th>";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Height"), "html", null, true);
        echo "</th>
          </tr>
        </thead>
        <tbody>
  ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["heights"]) || array_key_exists("heights", $context) ? $context["heights"] : (function () { throw new Twig_Error_Runtime('Variable "heights" does not exist.', 97, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["height"]) {
            // line 98
            echo "          <tr>
            <td>";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["height"], "firstname", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 100
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["height"], "dateRead", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
            <td>";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["height"], "heightValue", array()), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['height'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "        </tbody>
      </table>
    </div>

          ";
        
        $__internal_009dc60c1693506a7b0b9876781ee5efb73c292b1a46e37cbafeae87834d0448->leave($__internal_009dc60c1693506a7b0b9876781ee5efb73c292b1a46e37cbafeae87834d0448_prof);

        
        $__internal_168a3b20519bd103f8ac11ab644c39ebaab68b21716b51bbc1a20e3cf27b36b4->leave($__internal_168a3b20519bd103f8ac11ab644c39ebaab68b21716b51bbc1a20e3cf27b36b4_prof);

    }

    public function getTemplateName()
    {
        return "LljmHealthBundle:Height:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 106,  234 => 104,  226 => 101,  222 => 100,  218 => 99,  215 => 98,  210 => 97,  203 => 93,  199 => 92,  195 => 91,  162 => 60,  151 => 58,  147 => 57,  129 => 42,  125 => 41,  116 => 35,  112 => 33,  97 => 30,  94 => 29,  90 => 28,  82 => 25,  76 => 24,  59 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"LljmHealthBundle::layout.html.twig\" %}

         {% block body %}
  <h2>{{ 'Height follow up' | trans }}</h2>

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
          <a class=\"btn btn-default btn-sm glyphicon glyphicon-plus\" href=\"{{ path('health_heightadd') }}\">
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
  {% for height in heights %}
     {x: {{ height.dateRead | date(\"U\")}}, y: {{ height.heightValue }}},
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
            <th>{{ 'Height' | trans }}</th>
          </tr>
        </thead>
        <tbody>
  {% for height in heights %}
          <tr>
            <td>{{ height.firstname }}</td>
            <td>{{ height.dateRead | date(\"Y-m-d H:i:s\") }}</td>
            <td>{{ height.heightValue }}</td>
          </tr>
  {% else %}
    <p>{{ 'No record in this table' | trans }}.</p>
  {% endfor %}
        </tbody>
      </table>
    </div>

          {% endblock %}", "LljmHealthBundle:Height:index.html.twig", "/home/lljm/web/src/Lljm/HealthBundle/Resources/views/Height/index.html.twig");
    }
}
