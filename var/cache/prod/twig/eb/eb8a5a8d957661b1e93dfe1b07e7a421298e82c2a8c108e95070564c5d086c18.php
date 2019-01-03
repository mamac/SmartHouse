<?php

/* LljmHealthBundle:Weight:index.html.twig */
class __TwigTemplate_d61f2d4f26de3f0aad6f83b5619aabc7fa2609f11fae309056e5901bf7da369c extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "  <h2>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Weight follow up"), "html", null, true);
        echo "</h2>

<script type=\"text/javascript\">

    function display() {

      dst = \"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"));
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
        echo twig_escape_filter($this->env, ($context["datefrom"] ?? null), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date from"), "html", null, true);
        echo "\">
\t<input type=\"text\" id=\"dateto\" class=\"form-control datepicker\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["dateto"] ?? null), "html", null, true);
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
            if ((($context["user"] ?? null) == twig_get_attribute($this->env, $this->getSourceContext(), $context["userlist"], "id", array()))) {
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
        $context['_seq'] = twig_ensure_traversable(($context["weights"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["weights"] ?? null));
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
        return array (  224 => 105,  215 => 103,  207 => 100,  203 => 99,  199 => 98,  196 => 97,  191 => 96,  184 => 92,  180 => 91,  176 => 90,  143 => 59,  132 => 57,  128 => 56,  111 => 42,  107 => 41,  98 => 35,  94 => 33,  79 => 30,  76 => 29,  72 => 28,  64 => 25,  58 => 24,  41 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "LljmHealthBundle:Weight:index.html.twig", "/home/lljm/web/src/Lljm/HealthBundle/Resources/views/Weight/index.html.twig");
    }
}
