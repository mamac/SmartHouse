<?php

/* LljmHomeBundle:Visualization:gasvisual.html.twig */
class __TwigTemplate_53cea1c0c4594046d6f71709950aa61ecc352b2af4c01146c5b3e2075a28f368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Visualization:gasvisual.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Gas visualization - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_lljm_home_body($context, array $blocks = array())
    {
        // line 8
        echo "
  <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gas visualization"), "html", null, true);
        echo "</h2>

<div>
  <a class=\"btn btn-default btn-sm glyphicon glyphicon-plus\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_gaslogadd");
        echo "\">
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
        echo "
  </a>


</div>

   <div style=\"width:100%;\">
        <canvas id=\"GasChart\" height=\"150\"></canvas>
    </div>


<script>
var ctx = document.getElementById(\"GasChart\").getContext('2d');

    function getRandomColor() {
    var letters = '0123456789ABCDEF'.split('');
    var color = '#';
    for (var i = 0; i < 6; i++ ) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
    }

var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [\"01\", \"02\", \"03\", \"04\", \"05\", \"06\", \"07\", \"08\", \"09\", \"10\", \"11\", \"12\"],
        datasets: [

    ";
        // line 42
        $context["currentYear"] = "";
        // line 43
        echo "
    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yearoverviewrecords"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["yearoverviewrecord"]) {
            // line 45
            echo "
    ";
            // line 46
            if ((($context["currentYear"] ?? null) != twig_get_attribute($this->env, $this->getSourceContext(), $context["yearoverviewrecord"], "yearmonth", array()))) {
                // line 47
                echo "        {
            label: '";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["yearoverviewrecord"], "yearmonth", array()), "html", null, true);
                echo "',
            backgroundColor: ['rgba(255, 255, 255, 0.1)'],
            borderColor: getRandomColor(),
            data: [

    ";
                // line 53
                $context["currentYear"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["yearoverviewrecord"], "yearmonth", array());
                // line 54
                echo "
    ";
            }
            // line 56
            echo "
    ";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["yearoverviewrecord"], "consumption", array()), "html", null, true);
            echo ",

    ";
            // line 59
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                // line 60
                echo "        ";
                if ((($context["currentYear"] ?? null) != twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["yearoverviewrecords"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), array(), "array"), "yearmonth", array()))) {
                    // line 61
                    echo "
                    ],
                    fill: false,
                },

        ";
                }
                // line 67
                echo "    ";
            } else {
                // line 68
                echo "                    ],
                    fill: false,
                },
    ";
            }
            // line 72
            echo "
  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['yearoverviewrecord'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "        ]
    },
    options: {
                responsive: true,
                title:{
                    display:true,
                    text:'";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Monthly gastricity consumption"), "html", null, true);
        echo "'
                },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: '";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Month"), "html", null, true);
        echo "'
                        }
                    },],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Watts'
                        }
                    }]
                }
    }
});
</script>


<div>


    <div class=\"table-responsive\">

      <table class=\"table table-striped\">
        <thead>
          <tr>
            <th>";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Received date"), "html", null, true);
        echo "</th>
            <th>";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Meter value"), "html", null, true);
        echo "</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
  ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["gaslogrecords"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["gaslogrecord"]) {
            // line 126
            echo "          <tr>
            <td>";
            // line 127
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["gaslogrecord"], "daterx", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
            <td>";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["gaslogrecord"], "metervalue", array()), "html", null, true);
            echo "</td>
            <td>
              <a class=\"btn glyphicon glyphicon-trash red \" href=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_gaslogdel", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["gaslogrecord"], "id", array()))), "html", null, true);
            echo "\">
            </td>
          </tr>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 134
            echo "    <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No record in this table"), "html", null, true);
            echo ".</p>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gaslogrecord'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "        </tbody>
      </table>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Visualization:gasvisual.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 136,  267 => 134,  258 => 130,  253 => 128,  249 => 127,  246 => 126,  241 => 125,  233 => 120,  229 => 119,  202 => 95,  184 => 80,  176 => 74,  161 => 72,  155 => 68,  152 => 67,  144 => 61,  141 => 60,  139 => 59,  134 => 57,  131 => 56,  127 => 54,  125 => 53,  117 => 48,  114 => 47,  112 => 46,  109 => 45,  92 => 44,  89 => 43,  87 => 42,  55 => 13,  51 => 12,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "LljmHomeBundle:Visualization:gasvisual.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Visualization/gasvisual.html.twig");
    }
}
