<?php

/* LljmHomeBundle:Visualization:humidvisual.html.twig */
class __TwigTemplate_f3f9a49bfc781675adcb557014d2f75ee34352d66e7309b5b720b6b102d1da26 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Humidity visualization - ";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Humidity visualization"), "html", null, true);
        echo "</h2>

<script type=\"text/javascript\">

    function display() {

      dst = \"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"));
        echo "\" + '/';
      dst += document.getElementById(\"daterx\").value;
      
      location.href = dst;
  
    }

</script>

<div>

<form class=\"form-inline\" role=\"form\" onsubmit=\"return false;\">

<input type=\"text\" id=\"daterx\" class=\"form-control datepicker\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["daterx"] ?? null), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date"), "html", null, true);
        echo "\">

<button type=\"submit\" class = \"btn btn-default\" onclick=\"return display()\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search"), "html", null, true);
        echo "</button>

</form>


";
        // line 35
        if (($context["humidcharts"] ?? null)) {
            // line 36
            echo "   <div style=\"width:100%;\">
        <canvas id=\"humidChart\" height=\"150\"></canvas>
    </div>

    <script>

    var ctx = document.getElementById(\"humidChart\").getContext(\"2d\");

    function getRandomColor() {
    var letters = '0123456789ABCDEF'.split('');
    var color = '#';
    for (var i = 0; i < 6; i++ ) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
    }

    var timeFormat = 'MM/DD/YYYY HH:mm';
    ";
            // line 54
            $context["currentZoneId"] = "";
            // line 55
            echo "
        var config = {
            type: 'line',
            data: {
                datasets: [

  ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["humidcharts"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["humidchart"]) {
                // line 62
                echo "    ";
                if ((($context["currentZoneId"] ?? null) != twig_get_attribute($this->env, $this->getSourceContext(), $context["humidchart"], "id", array()))) {
                    // line 63
                    echo "                {
                    label: \"";
                    // line 64
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["humidchart"], "zonename", array())), "html", null, true);
                    echo "\",
                    backgroundColor: getRandomColor(),
                    borderColor: ['rgba(0, 0, 0, 0.1)'],
                    data: [

    ";
                    // line 69
                    $context["currentZoneId"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["humidchart"], "id", array());
                    // line 70
                    echo "
    ";
                }
                // line 71
                echo " // end if currentZoneId  

                    {
                    x: '";
                // line 74
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["humidchart"], "daterx", array()), "m/d/Y H:i"), "html", null, true);
                echo "',
                    y: ";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["humidchart"], "humvalue", array()), "html", null, true);
                echo "
                    },

    ";
                // line 78
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    // line 79
                    echo "    ";
                    if ((($context["currentZoneId"] ?? null) != twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["humidcharts"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), array(), "array"), "id", array()))) {
                        // line 80
                        echo "                    ],
                    fill: false,
                },

    ";
                    }
                    // line 85
                    echo "    ";
                } else {
                    // line 86
                    echo "                    ],
                    fill: false,
                },
    ";
                }
                // line 90
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['humidchart'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                ]
            },
            options: {
                responsive: true,
                title:{
                    display:true,
                    text:'Humidity ";
            // line 98
            echo twig_escape_filter($this->env, ($context["daterx"] ?? null), "html", null, true);
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
                        type: \"time\",
                        time: {
                            format: timeFormat,
                            // round: 'day'
                            tooltipFormat: 'll HH:mm'
                        },
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Time'
                        }
                    },],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Percentage'
                        }
                    }]
                }
            }
        };

        window.onload = function() {
            window.myLine = new Chart(ctx, config);
            console.log(config);
        };

    </script>
";
        }
        // line 140
        echo "

</div>

";
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
        return array (  258 => 140,  213 => 98,  205 => 92,  190 => 90,  184 => 86,  181 => 85,  174 => 80,  171 => 79,  169 => 78,  163 => 75,  159 => 74,  154 => 71,  150 => 70,  148 => 69,  140 => 64,  137 => 63,  134 => 62,  117 => 61,  109 => 55,  107 => 54,  87 => 36,  85 => 35,  77 => 30,  70 => 28,  54 => 15,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "LljmHomeBundle:Visualization:humidvisual.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Visualization/humidvisual.html.twig");
    }
}
