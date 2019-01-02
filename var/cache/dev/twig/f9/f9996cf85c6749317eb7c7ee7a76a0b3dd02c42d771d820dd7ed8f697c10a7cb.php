<?php

/* LljmHomeBundle:Visualization:watervisual.html.twig */
class __TwigTemplate_88d36a2928169411d1cc4069d62376eeb2107f5dbcd899211ec789bc8708d3cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Visualization:watervisual.html.twig", 1);
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
        $__internal_e03af3d8815adebc32c9479e498102e42c89ef247a0141a79bc99ac31a1ae0b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e03af3d8815adebc32c9479e498102e42c89ef247a0141a79bc99ac31a1ae0b5->enter($__internal_e03af3d8815adebc32c9479e498102e42c89ef247a0141a79bc99ac31a1ae0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:watervisual.html.twig"));

        $__internal_6fe364e051e8bd5d1d13cdf63e82f890c76daa0295e5988e48157dbef779f389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fe364e051e8bd5d1d13cdf63e82f890c76daa0295e5988e48157dbef779f389->enter($__internal_6fe364e051e8bd5d1d13cdf63e82f890c76daa0295e5988e48157dbef779f389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:watervisual.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e03af3d8815adebc32c9479e498102e42c89ef247a0141a79bc99ac31a1ae0b5->leave($__internal_e03af3d8815adebc32c9479e498102e42c89ef247a0141a79bc99ac31a1ae0b5_prof);

        
        $__internal_6fe364e051e8bd5d1d13cdf63e82f890c76daa0295e5988e48157dbef779f389->leave($__internal_6fe364e051e8bd5d1d13cdf63e82f890c76daa0295e5988e48157dbef779f389_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_36b479e45da8a9ab879e700decdacbaa36a8493543e0b458220b1682cc17894b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36b479e45da8a9ab879e700decdacbaa36a8493543e0b458220b1682cc17894b->enter($__internal_36b479e45da8a9ab879e700decdacbaa36a8493543e0b458220b1682cc17894b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e6aae2065e650fe38129432e76ba5e815ff1910a04f32551c7685c9ba6de5587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6aae2065e650fe38129432e76ba5e815ff1910a04f32551c7685c9ba6de5587->enter($__internal_e6aae2065e650fe38129432e76ba5e815ff1910a04f32551c7685c9ba6de5587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Water visualization - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e6aae2065e650fe38129432e76ba5e815ff1910a04f32551c7685c9ba6de5587->leave($__internal_e6aae2065e650fe38129432e76ba5e815ff1910a04f32551c7685c9ba6de5587_prof);

        
        $__internal_36b479e45da8a9ab879e700decdacbaa36a8493543e0b458220b1682cc17894b->leave($__internal_36b479e45da8a9ab879e700decdacbaa36a8493543e0b458220b1682cc17894b_prof);

    }

    // line 7
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_c6962943618b4f5b0040644a3694db67f7f9edfceb5fd473a7c3fba237e1b710 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6962943618b4f5b0040644a3694db67f7f9edfceb5fd473a7c3fba237e1b710->enter($__internal_c6962943618b4f5b0040644a3694db67f7f9edfceb5fd473a7c3fba237e1b710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_2ac7dcf430dc5c9c602dc83832c08bb06c0700f25f4d6dbb01226db0cb43ad4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ac7dcf430dc5c9c602dc83832c08bb06c0700f25f4d6dbb01226db0cb43ad4e->enter($__internal_2ac7dcf430dc5c9c602dc83832c08bb06c0700f25f4d6dbb01226db0cb43ad4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        // line 8
        echo "
  <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Water visualization"), "html", null, true);
        echo "</h2>

<div>
  <a class=\"btn btn-default btn-sm glyphicon glyphicon-plus\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_waterlogadd");
        echo "\">
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
        echo "
  </a>


</div>

   <div style=\"width:100%;\">
        <canvas id=\"WaterChart\" height=\"150\"></canvas>
    </div>


<script>
var ctx = document.getElementById(\"WaterChart\").getContext('2d');

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Monthly watertricity consumption"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["waterlogrecords"]) || array_key_exists("waterlogrecords", $context) ? $context["waterlogrecords"] : (function () { throw new Twig_Error_Runtime('Variable "waterlogrecords" does not exist.', 125, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["waterlogrecord"]) {
            // line 126
            echo "          <tr>
            <td>";
            // line 127
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["waterlogrecord"], "daterx", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
            <td>";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["waterlogrecord"], "metervalue", array()), "html", null, true);
            echo "</td>
            <td>
              <a class=\"btn glyphicon glyphicon-trash red \" href=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_waterlogdel", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["waterlogrecord"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['waterlogrecord'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "        </tbody>
      </table>
    </div>
</div>

";
        
        $__internal_2ac7dcf430dc5c9c602dc83832c08bb06c0700f25f4d6dbb01226db0cb43ad4e->leave($__internal_2ac7dcf430dc5c9c602dc83832c08bb06c0700f25f4d6dbb01226db0cb43ad4e_prof);

        
        $__internal_c6962943618b4f5b0040644a3694db67f7f9edfceb5fd473a7c3fba237e1b710->leave($__internal_c6962943618b4f5b0040644a3694db67f7f9edfceb5fd473a7c3fba237e1b710_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Visualization:watervisual.html.twig";
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
  Water visualization - {{ parent() }}
{% endblock %}

{% block lljm_home_body %}

  <h2>{{ 'Water visualization' | trans }}</h2>

<div>
  <a class=\"btn btn-default btn-sm glyphicon glyphicon-plus\" href=\"{{ path('home_waterlogadd') }}\">
    {{ 'Add' | trans }}
  </a>


</div>

   <div style=\"width:100%;\">
        <canvas id=\"WaterChart\" height=\"150\"></canvas>
    </div>


<script>
var ctx = document.getElementById(\"WaterChart\").getContext('2d');

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
                    text:'{{ 'Monthly watertricity consumption' | trans }}'
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
  {% for waterlogrecord in waterlogrecords %}
          <tr>
            <td>{{ waterlogrecord.daterx | date(\"Y-m-d H:i:s\")}}</td>
            <td>{{ waterlogrecord.metervalue }}</td>
            <td>
              <a class=\"btn glyphicon glyphicon-trash red \" href=\"{{ path('home_waterlogdel', {'id': waterlogrecord.id}) }}\">
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
", "LljmHomeBundle:Visualization:watervisual.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Visualization/watervisual.html.twig");
    }
}
