<?php

/* LljmHomeBundle:Visualization:humidvisual.html.twig */
class __TwigTemplate_b35d984da350e59b345a1c1d0d9bd37997bf11d79b3a8b6d54c222b34bf8d470 extends Twig_Template
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
        $__internal_bbf15b36011119e747b98ed89aeddf6dd330a36b850a32f1abb0a0ebf7c271de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbf15b36011119e747b98ed89aeddf6dd330a36b850a32f1abb0a0ebf7c271de->enter($__internal_bbf15b36011119e747b98ed89aeddf6dd330a36b850a32f1abb0a0ebf7c271de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:humidvisual.html.twig"));

        $__internal_d7d28cb4cd2953966ba05058047f598d55ac86cf9b90b90a2f0195cf4f5bf61a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7d28cb4cd2953966ba05058047f598d55ac86cf9b90b90a2f0195cf4f5bf61a->enter($__internal_d7d28cb4cd2953966ba05058047f598d55ac86cf9b90b90a2f0195cf4f5bf61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:humidvisual.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbf15b36011119e747b98ed89aeddf6dd330a36b850a32f1abb0a0ebf7c271de->leave($__internal_bbf15b36011119e747b98ed89aeddf6dd330a36b850a32f1abb0a0ebf7c271de_prof);

        
        $__internal_d7d28cb4cd2953966ba05058047f598d55ac86cf9b90b90a2f0195cf4f5bf61a->leave($__internal_d7d28cb4cd2953966ba05058047f598d55ac86cf9b90b90a2f0195cf4f5bf61a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7be295b443d6f4abde52fbfe7cdc78b9330ecd74ece2d733172808e5f9631777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7be295b443d6f4abde52fbfe7cdc78b9330ecd74ece2d733172808e5f9631777->enter($__internal_7be295b443d6f4abde52fbfe7cdc78b9330ecd74ece2d733172808e5f9631777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8f840fc6dae3c934beb6597a7f16fe5764bffe84f8861a74ade095fc545dde14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f840fc6dae3c934beb6597a7f16fe5764bffe84f8861a74ade095fc545dde14->enter($__internal_8f840fc6dae3c934beb6597a7f16fe5764bffe84f8861a74ade095fc545dde14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Humidity visualization - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8f840fc6dae3c934beb6597a7f16fe5764bffe84f8861a74ade095fc545dde14->leave($__internal_8f840fc6dae3c934beb6597a7f16fe5764bffe84f8861a74ade095fc545dde14_prof);

        
        $__internal_7be295b443d6f4abde52fbfe7cdc78b9330ecd74ece2d733172808e5f9631777->leave($__internal_7be295b443d6f4abde52fbfe7cdc78b9330ecd74ece2d733172808e5f9631777_prof);

    }

    // line 7
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_ab54ca0591ae6814f3dd9d8476c5f0ca5fab99a0b708ebce83d8170853510d34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab54ca0591ae6814f3dd9d8476c5f0ca5fab99a0b708ebce83d8170853510d34->enter($__internal_ab54ca0591ae6814f3dd9d8476c5f0ca5fab99a0b708ebce83d8170853510d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_c1efabc8f4f7ff8535573fe1466b822950fea3b281ab49229eadc752c1b225be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1efabc8f4f7ff8535573fe1466b822950fea3b281ab49229eadc752c1b225be->enter($__internal_c1efabc8f4f7ff8535573fe1466b822950fea3b281ab49229eadc752c1b225be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

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
      dst += document.getElementById(\"daterx\").value;
      
      location.href = dst;
  
    }

</script>

<div>

<form class=\"form-inline\" role=\"form\" onsubmit=\"return false;\">

<input type=\"text\" id=\"daterx\" class=\"form-control datepicker\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["daterx"]) || array_key_exists("daterx", $context) ? $context["daterx"] : (function () { throw new Twig_Error_Runtime('Variable "daterx" does not exist.', 28, $this->getSourceContext()); })()), "html", null, true);
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
        if ((isset($context["humidcharts"]) || array_key_exists("humidcharts", $context) ? $context["humidcharts"] : (function () { throw new Twig_Error_Runtime('Variable "humidcharts" does not exist.', 35, $this->getSourceContext()); })())) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["humidcharts"]) || array_key_exists("humidcharts", $context) ? $context["humidcharts"] : (function () { throw new Twig_Error_Runtime('Variable "humidcharts" does not exist.', 61, $this->getSourceContext()); })()));
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
                if (((isset($context["currentZoneId"]) || array_key_exists("currentZoneId", $context) ? $context["currentZoneId"] : (function () { throw new Twig_Error_Runtime('Variable "currentZoneId" does not exist.', 62, $this->getSourceContext()); })()) != twig_get_attribute($this->env, $this->getSourceContext(), $context["humidchart"], "id", array()))) {
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
                    if (((isset($context["currentZoneId"]) || array_key_exists("currentZoneId", $context) ? $context["currentZoneId"] : (function () { throw new Twig_Error_Runtime('Variable "currentZoneId" does not exist.', 79, $this->getSourceContext()); })()) != twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["humidcharts"]) || array_key_exists("humidcharts", $context) ? $context["humidcharts"] : (function () { throw new Twig_Error_Runtime('Variable "humidcharts" does not exist.', 79, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), array(), "array"), "id", array()))) {
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
            echo twig_escape_filter($this->env, (isset($context["daterx"]) || array_key_exists("daterx", $context) ? $context["daterx"] : (function () { throw new Twig_Error_Runtime('Variable "daterx" does not exist.', 98, $this->getSourceContext()); })()), "html", null, true);
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
        
        $__internal_c1efabc8f4f7ff8535573fe1466b822950fea3b281ab49229eadc752c1b225be->leave($__internal_c1efabc8f4f7ff8535573fe1466b822950fea3b281ab49229eadc752c1b225be_prof);

        
        $__internal_ab54ca0591ae6814f3dd9d8476c5f0ca5fab99a0b708ebce83d8170853510d34->leave($__internal_ab54ca0591ae6814f3dd9d8476c5f0ca5fab99a0b708ebce83d8170853510d34_prof);

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
        return array (  288 => 140,  243 => 98,  235 => 92,  220 => 90,  214 => 86,  211 => 85,  204 => 80,  201 => 79,  199 => 78,  193 => 75,  189 => 74,  184 => 71,  180 => 70,  178 => 69,  170 => 64,  167 => 63,  164 => 62,  147 => 61,  139 => 55,  137 => 54,  117 => 36,  115 => 35,  107 => 30,  100 => 28,  84 => 15,  75 => 9,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
      dst += document.getElementById(\"daterx\").value;
      
      location.href = dst;
  
    }

</script>

<div>

<form class=\"form-inline\" role=\"form\" onsubmit=\"return false;\">

<input type=\"text\" id=\"daterx\" class=\"form-control datepicker\" value=\"{{ daterx }}\" placeholder=\"{{ 'date' | trans}}\">

<button type=\"submit\" class = \"btn btn-default\" onclick=\"return display()\">{{ \"Search\" | trans }}</button>

</form>


{% if humidcharts %}
   <div style=\"width:100%;\">
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
    {% set currentZoneId = '' %}

        var config = {
            type: 'line',
            data: {
                datasets: [

  {% for humidchart in humidcharts %}
    {% if currentZoneId != humidchart.id %}
                {
                    label: \"{{ humidchart.zonename |trans }}\",
                    backgroundColor: getRandomColor(),
                    borderColor: ['rgba(0, 0, 0, 0.1)'],
                    data: [

    {% set currentZoneId = humidchart.id %}

    {% endif %} // end if currentZoneId  

                    {
                    x: '{{ humidchart.daterx | date('m/d/Y H:i') }}',
                    y: {{ humidchart.humvalue }}
                    },

    {% if not loop.last %}
    {% if currentZoneId != humidcharts[loop.index].id %}
                    ],
                    fill: false,
                },

    {% endif %}
    {% else %}
                    ],
                    fill: false,
                },
    {% endif %}

  {% endfor %}
                ]
            },
            options: {
                responsive: true,
                title:{
                    display:true,
                    text:'Humidity {{ daterx }}'
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
{% endif %}


</div>

{% endblock %}
", "LljmHomeBundle:Visualization:humidvisual.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Visualization/humidvisual.html.twig");
    }
}
