<?php

/* LljmHomeBundle:Visualization:gasvisual.html.twig */
class __TwigTemplate_69b3c277e29e242588c66aa426f54e22b275295a2f16e3d36e2457292d7d3f70 extends Twig_Template
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
        $__internal_ca500fc007abe1551d1e6ed8bc661f388a14cd7bd6207e094ceafb024207cf73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca500fc007abe1551d1e6ed8bc661f388a14cd7bd6207e094ceafb024207cf73->enter($__internal_ca500fc007abe1551d1e6ed8bc661f388a14cd7bd6207e094ceafb024207cf73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:gasvisual.html.twig"));

        $__internal_a60c3af6687de6e90c3790d7769712ccdd424e5c6495bc2e623c1f41f29f741d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a60c3af6687de6e90c3790d7769712ccdd424e5c6495bc2e623c1f41f29f741d->enter($__internal_a60c3af6687de6e90c3790d7769712ccdd424e5c6495bc2e623c1f41f29f741d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:gasvisual.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca500fc007abe1551d1e6ed8bc661f388a14cd7bd6207e094ceafb024207cf73->leave($__internal_ca500fc007abe1551d1e6ed8bc661f388a14cd7bd6207e094ceafb024207cf73_prof);

        
        $__internal_a60c3af6687de6e90c3790d7769712ccdd424e5c6495bc2e623c1f41f29f741d->leave($__internal_a60c3af6687de6e90c3790d7769712ccdd424e5c6495bc2e623c1f41f29f741d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5faa0c2af6a236fbfe0efb59a88ccb6410cb1bdea38eb4461291e86b157e7e87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5faa0c2af6a236fbfe0efb59a88ccb6410cb1bdea38eb4461291e86b157e7e87->enter($__internal_5faa0c2af6a236fbfe0efb59a88ccb6410cb1bdea38eb4461291e86b157e7e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2f5cc88566a42f309852bb01043c60869f07e2b517d02d87d16fcf612f708d31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f5cc88566a42f309852bb01043c60869f07e2b517d02d87d16fcf612f708d31->enter($__internal_2f5cc88566a42f309852bb01043c60869f07e2b517d02d87d16fcf612f708d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Gas visualization - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2f5cc88566a42f309852bb01043c60869f07e2b517d02d87d16fcf612f708d31->leave($__internal_2f5cc88566a42f309852bb01043c60869f07e2b517d02d87d16fcf612f708d31_prof);

        
        $__internal_5faa0c2af6a236fbfe0efb59a88ccb6410cb1bdea38eb4461291e86b157e7e87->leave($__internal_5faa0c2af6a236fbfe0efb59a88ccb6410cb1bdea38eb4461291e86b157e7e87_prof);

    }

    // line 7
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_3cd71ef5204e6d19434fdd63622be55cca8c33d2426c2830ddacff71e1246e41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cd71ef5204e6d19434fdd63622be55cca8c33d2426c2830ddacff71e1246e41->enter($__internal_3cd71ef5204e6d19434fdd63622be55cca8c33d2426c2830ddacff71e1246e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_30fe6c63adaba287d8b6b3d6fd543fd007c2325711def189444f5dbcf10bc570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30fe6c63adaba287d8b6b3d6fd543fd007c2325711def189444f5dbcf10bc570->enter($__internal_30fe6c63adaba287d8b6b3d6fd543fd007c2325711def189444f5dbcf10bc570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["yearoverviewrecords"]) || array_key_exists("yearoverviewrecords", $context) ? $context["yearoverviewrecords"] : (function () { throw new Twig_Error_Runtime('Variable "yearoverviewrecords" does not exist.', 44, $this->getSourceContext()); })()));
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
            if (((isset($context["currentYear"]) || array_key_exists("currentYear", $context) ? $context["currentYear"] : (function () { throw new Twig_Error_Runtime('Variable "currentYear" does not exist.', 46, $this->getSourceContext()); })()) != twig_get_attribute($this->env, $this->getSourceContext(), $context["yearoverviewrecord"], "yearmonth", array()))) {
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
                if (((isset($context["currentYear"]) || array_key_exists("currentYear", $context) ? $context["currentYear"] : (function () { throw new Twig_Error_Runtime('Variable "currentYear" does not exist.', 60, $this->getSourceContext()); })()) != twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["yearoverviewrecords"]) || array_key_exists("yearoverviewrecords", $context) ? $context["yearoverviewrecords"] : (function () { throw new Twig_Error_Runtime('Variable "yearoverviewrecords" does not exist.', 60, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), array(), "array"), "yearmonth", array()))) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["gaslogrecords"]) || array_key_exists("gaslogrecords", $context) ? $context["gaslogrecords"] : (function () { throw new Twig_Error_Runtime('Variable "gaslogrecords" does not exist.', 125, $this->getSourceContext()); })()));
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
        
        $__internal_30fe6c63adaba287d8b6b3d6fd543fd007c2325711def189444f5dbcf10bc570->leave($__internal_30fe6c63adaba287d8b6b3d6fd543fd007c2325711def189444f5dbcf10bc570_prof);

        
        $__internal_3cd71ef5204e6d19434fdd63622be55cca8c33d2426c2830ddacff71e1246e41->leave($__internal_3cd71ef5204e6d19434fdd63622be55cca8c33d2426c2830ddacff71e1246e41_prof);

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
        return array (  306 => 136,  297 => 134,  288 => 130,  283 => 128,  279 => 127,  276 => 126,  271 => 125,  263 => 120,  259 => 119,  232 => 95,  214 => 80,  206 => 74,  191 => 72,  185 => 68,  182 => 67,  174 => 61,  171 => 60,  169 => 59,  164 => 57,  161 => 56,  157 => 54,  155 => 53,  147 => 48,  144 => 47,  142 => 46,  139 => 45,  122 => 44,  119 => 43,  117 => 42,  85 => 13,  81 => 12,  75 => 9,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"LljmHomeBundle::layout.html.twig\" %}

{% block title %}
  Gas visualization - {{ parent() }}
{% endblock %}

{% block lljm_home_body %}

  <h2>{{ 'Gas visualization' | trans }}</h2>

<div>
  <a class=\"btn btn-default btn-sm glyphicon glyphicon-plus\" href=\"{{ path('home_gaslogadd') }}\">
    {{ 'Add' | trans }}
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

    {% set currentYear = '' %}

    {% for yearoverviewrecord in yearoverviewrecords %}

    {% if currentYear != yearoverviewrecord.yearmonth %}
        {
            label: '{{ yearoverviewrecord.yearmonth }}',
            backgroundColor: ['rgba(255, 255, 255, 0.1)'],
            borderColor: getRandomColor(),
            data: [

    {% set currentYear = yearoverviewrecord.yearmonth %}

    {% endif%}

    {{ yearoverviewrecord.consumption }},

    {% if not loop.last %}
        {% if currentYear != yearoverviewrecords[loop.index].yearmonth %}

                    ],
                    fill: false,
                },

        {% endif%}
    {% else %}
                    ],
                    fill: false,
                },
    {% endif %}

  {% endfor%}
        ]
    },
    options: {
                responsive: true,
                title:{
                    display:true,
                    text:'{{ 'Monthly gastricity consumption' | trans }}'
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
                            labelString: '{{ 'Month' | trans}}'
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
            <th>{{ 'Received date' | trans }}</th>
            <th>{{ 'Meter value' | trans }}</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
  {% for gaslogrecord in gaslogrecords %}
          <tr>
            <td>{{ gaslogrecord.daterx | date(\"Y-m-d H:i:s\")}}</td>
            <td>{{ gaslogrecord.metervalue }}</td>
            <td>
              <a class=\"btn glyphicon glyphicon-trash red \" href=\"{{ path('home_gaslogdel', {'id': gaslogrecord.id}) }}\">
            </td>
          </tr>
  {% else %}
    <p>{{ 'No record in this table' | trans }}.</p>
  {% endfor %}
        </tbody>
      </table>
    </div>
</div>

{% endblock %}
", "LljmHomeBundle:Visualization:gasvisual.html.twig", "/home/lljm/web_symfony3/web/src/Lljm/HomeBundle/Resources/views/Visualization/gasvisual.html.twig");
    }
}
