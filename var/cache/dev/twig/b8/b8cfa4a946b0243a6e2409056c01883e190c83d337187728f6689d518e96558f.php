<?php

/* LljmHomeBundle:Visualization:tempvisual.html.twig */
class __TwigTemplate_4e34f9be4430f9045fd7aa3bc417c6d0b29d0b6641b83d6d9f6916eccc2bcf04 extends Twig_Template
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
        $__internal_bc786232d66b5359627c387c4208f63f76d7bf6e6ee14c280a62bec023ef9f80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc786232d66b5359627c387c4208f63f76d7bf6e6ee14c280a62bec023ef9f80->enter($__internal_bc786232d66b5359627c387c4208f63f76d7bf6e6ee14c280a62bec023ef9f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:tempvisual.html.twig"));

        $__internal_a34d98d3c7320ebfd69b6a9811e32fc8e91d2320f3a99611b267ddcf57da45c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a34d98d3c7320ebfd69b6a9811e32fc8e91d2320f3a99611b267ddcf57da45c2->enter($__internal_a34d98d3c7320ebfd69b6a9811e32fc8e91d2320f3a99611b267ddcf57da45c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:tempvisual.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc786232d66b5359627c387c4208f63f76d7bf6e6ee14c280a62bec023ef9f80->leave($__internal_bc786232d66b5359627c387c4208f63f76d7bf6e6ee14c280a62bec023ef9f80_prof);

        
        $__internal_a34d98d3c7320ebfd69b6a9811e32fc8e91d2320f3a99611b267ddcf57da45c2->leave($__internal_a34d98d3c7320ebfd69b6a9811e32fc8e91d2320f3a99611b267ddcf57da45c2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d45ee3f514ffe3c2bad052a0bcb1f4591482596cc74a85779f51aa259dc909c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d45ee3f514ffe3c2bad052a0bcb1f4591482596cc74a85779f51aa259dc909c3->enter($__internal_d45ee3f514ffe3c2bad052a0bcb1f4591482596cc74a85779f51aa259dc909c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_21d9306668e04c48fb4e53c0c18800780a322d88c989b62ed59a83d3e0882bb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d9306668e04c48fb4e53c0c18800780a322d88c989b62ed59a83d3e0882bb3->enter($__internal_21d9306668e04c48fb4e53c0c18800780a322d88c989b62ed59a83d3e0882bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Temperature visualization - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_21d9306668e04c48fb4e53c0c18800780a322d88c989b62ed59a83d3e0882bb3->leave($__internal_21d9306668e04c48fb4e53c0c18800780a322d88c989b62ed59a83d3e0882bb3_prof);

        
        $__internal_d45ee3f514ffe3c2bad052a0bcb1f4591482596cc74a85779f51aa259dc909c3->leave($__internal_d45ee3f514ffe3c2bad052a0bcb1f4591482596cc74a85779f51aa259dc909c3_prof);

    }

    // line 7
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_80628c2bb03d044383a516cd0e810c9c35073f9ef94e1d3272036caa4eb4e48b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80628c2bb03d044383a516cd0e810c9c35073f9ef94e1d3272036caa4eb4e48b->enter($__internal_80628c2bb03d044383a516cd0e810c9c35073f9ef94e1d3272036caa4eb4e48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_26e2dd4cd148faee27fda48298cef006ae37904a4cd6bbbdf0e17373ad661c9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e2dd4cd148faee27fda48298cef006ae37904a4cd6bbbdf0e17373ad661c9d->enter($__internal_26e2dd4cd148faee27fda48298cef006ae37904a4cd6bbbdf0e17373ad661c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

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
        if ((isset($context["tempcharts"]) || array_key_exists("tempcharts", $context) ? $context["tempcharts"] : (function () { throw new Twig_Error_Runtime('Variable "tempcharts" does not exist.', 35, $this->getSourceContext()); })())) {
            // line 36
            echo "   <div style=\"width:100%;\">
        <canvas id=\"tempChart\" height=\"150\"></canvas>
    </div>

    <script>

    var ctx = document.getElementById(\"tempChart\").getContext(\"2d\");

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
            $context['_seq'] = twig_ensure_traversable((isset($context["tempcharts"]) || array_key_exists("tempcharts", $context) ? $context["tempcharts"] : (function () { throw new Twig_Error_Runtime('Variable "tempcharts" does not exist.', 61, $this->getSourceContext()); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tempchart"]) {
                // line 62
                echo "    ";
                if (((isset($context["currentZoneId"]) || array_key_exists("currentZoneId", $context) ? $context["currentZoneId"] : (function () { throw new Twig_Error_Runtime('Variable "currentZoneId" does not exist.', 62, $this->getSourceContext()); })()) != twig_get_attribute($this->env, $this->getSourceContext(), $context["tempchart"], "id", array()))) {
                    // line 63
                    echo "                {
                    label: \"";
                    // line 64
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["tempchart"], "zonename", array())), "html", null, true);
                    echo "\",
                    backgroundColor: getRandomColor(),
                    borderColor: ['rgba(0, 0, 0, 0.1)'],
                    data: [

    ";
                    // line 69
                    $context["currentZoneId"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["tempchart"], "id", array());
                    // line 70
                    echo "
    ";
                }
                // line 71
                echo " // end if currentZoneId  

                    {
                    x: '";
                // line 74
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tempchart"], "daterx", array()), "m/d/Y H:i"), "html", null, true);
                echo "',
                    y: ";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tempchart"], "tmpvalue", array()), "html", null, true);
                echo "
                    },

    ";
                // line 78
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    // line 79
                    echo "    ";
                    if (((isset($context["currentZoneId"]) || array_key_exists("currentZoneId", $context) ? $context["currentZoneId"] : (function () { throw new Twig_Error_Runtime('Variable "currentZoneId" does not exist.', 79, $this->getSourceContext()); })()) != twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["tempcharts"]) || array_key_exists("tempcharts", $context) ? $context["tempcharts"] : (function () { throw new Twig_Error_Runtime('Variable "tempcharts" does not exist.', 79, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), array(), "array"), "id", array()))) {
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tempchart'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                ]
            },
            options: {
                responsive: true,
                title:{
                    display:true,
                    text:'Temperature ";
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
                            displayFormats: {
                            quarter: 'MMM YYYY'
                            }
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
                            labelString: 'Deg. Celsius'
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
        
        $__internal_26e2dd4cd148faee27fda48298cef006ae37904a4cd6bbbdf0e17373ad661c9d->leave($__internal_26e2dd4cd148faee27fda48298cef006ae37904a4cd6bbbdf0e17373ad661c9d_prof);

        
        $__internal_80628c2bb03d044383a516cd0e810c9c35073f9ef94e1d3272036caa4eb4e48b->leave($__internal_80628c2bb03d044383a516cd0e810c9c35073f9ef94e1d3272036caa4eb4e48b_prof);

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
        return array (  288 => 140,  243 => 98,  235 => 92,  220 => 90,  214 => 86,  211 => 85,  204 => 80,  201 => 79,  199 => 78,  193 => 75,  189 => 74,  184 => 71,  180 => 70,  178 => 69,  170 => 64,  167 => 63,  164 => 62,  147 => 61,  139 => 55,  137 => 54,  117 => 36,  115 => 35,  107 => 30,  100 => 28,  84 => 15,  75 => 9,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
      dst += document.getElementById(\"daterx\").value;
      
      location.href = dst;
  
    }

</script>

<div>

<form class=\"form-inline\" role=\"form\" onsubmit=\"return false;\">

<input type=\"text\" id=\"daterx\" class=\"form-control datepicker\" value=\"{{ daterx }}\" placeholder=\"{{ 'date' | trans}}\">

<button type=\"submit\" class = \"btn btn-default\" onclick=\"return display()\">{{ \"Search\" | trans }}</button>

</form>


{% if tempcharts %}
   <div style=\"width:100%;\">
        <canvas id=\"tempChart\" height=\"150\"></canvas>
    </div>

    <script>

    var ctx = document.getElementById(\"tempChart\").getContext(\"2d\");

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

  {% for tempchart in tempcharts %}
    {% if currentZoneId != tempchart.id %}
                {
                    label: \"{{ tempchart.zonename |trans }}\",
                    backgroundColor: getRandomColor(),
                    borderColor: ['rgba(0, 0, 0, 0.1)'],
                    data: [

    {% set currentZoneId = tempchart.id %}

    {% endif %} // end if currentZoneId  

                    {
                    x: '{{ tempchart.daterx | date('m/d/Y H:i') }}',
                    y: {{ tempchart.tmpvalue }}
                    },

    {% if not loop.last %}
    {% if currentZoneId != tempcharts[loop.index].id %}
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
                    text:'Temperature {{ daterx }}'
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
                            displayFormats: {
                            quarter: 'MMM YYYY'
                            }
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
                            labelString: 'Deg. Celsius'
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
", "LljmHomeBundle:Visualization:tempvisual.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Visualization/tempvisual.html.twig");
    }
}
