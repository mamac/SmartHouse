<?php

/* LljmHomeBundle:Visualization:elecvisual.html.twig */
class __TwigTemplate_be1325b6fe8cb82067a242bf2aee1b91a4e0060abe7546a8c718e61884537aae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Visualization:elecvisual.html.twig", 1);
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
        $__internal_9ebc69adba691092ca80d7c02933c5b197681c796533435bc77c79da149ea082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ebc69adba691092ca80d7c02933c5b197681c796533435bc77c79da149ea082->enter($__internal_9ebc69adba691092ca80d7c02933c5b197681c796533435bc77c79da149ea082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:elecvisual.html.twig"));

        $__internal_a5e3e26f0ec4bb3acb5a43ca3d5c41f68741d709084f78a1687b72e2856b8492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e3e26f0ec4bb3acb5a43ca3d5c41f68741d709084f78a1687b72e2856b8492->enter($__internal_a5e3e26f0ec4bb3acb5a43ca3d5c41f68741d709084f78a1687b72e2856b8492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:elecvisual.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ebc69adba691092ca80d7c02933c5b197681c796533435bc77c79da149ea082->leave($__internal_9ebc69adba691092ca80d7c02933c5b197681c796533435bc77c79da149ea082_prof);

        
        $__internal_a5e3e26f0ec4bb3acb5a43ca3d5c41f68741d709084f78a1687b72e2856b8492->leave($__internal_a5e3e26f0ec4bb3acb5a43ca3d5c41f68741d709084f78a1687b72e2856b8492_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0383c162b3797444f4b0d20943f4178bddd671c07c5b5bf852059cf4fbdad20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0383c162b3797444f4b0d20943f4178bddd671c07c5b5bf852059cf4fbdad20->enter($__internal_a0383c162b3797444f4b0d20943f4178bddd671c07c5b5bf852059cf4fbdad20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8c26eadeb775a33ad4977dd084fb92837399a7a3761f80f2683014fcdd71ad48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c26eadeb775a33ad4977dd084fb92837399a7a3761f80f2683014fcdd71ad48->enter($__internal_8c26eadeb775a33ad4977dd084fb92837399a7a3761f80f2683014fcdd71ad48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Electricity visualization - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8c26eadeb775a33ad4977dd084fb92837399a7a3761f80f2683014fcdd71ad48->leave($__internal_8c26eadeb775a33ad4977dd084fb92837399a7a3761f80f2683014fcdd71ad48_prof);

        
        $__internal_a0383c162b3797444f4b0d20943f4178bddd671c07c5b5bf852059cf4fbdad20->leave($__internal_a0383c162b3797444f4b0d20943f4178bddd671c07c5b5bf852059cf4fbdad20_prof);

    }

    // line 7
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_61d3a40e5f4a318ea4c018b5ecd7f4323e42b64fa5e0d4784e360a8a680dfa5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61d3a40e5f4a318ea4c018b5ecd7f4323e42b64fa5e0d4784e360a8a680dfa5a->enter($__internal_61d3a40e5f4a318ea4c018b5ecd7f4323e42b64fa5e0d4784e360a8a680dfa5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_4604ef46afc59778f592cba9619ec18b692ef4d4f5bcb823bc08c7ed480e90e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4604ef46afc59778f592cba9619ec18b692ef4d4f5bcb823bc08c7ed480e90e5->enter($__internal_4604ef46afc59778f592cba9619ec18b692ef4d4f5bcb823bc08c7ed480e90e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        // line 8
        echo "
  <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Electricity visualization"), "html", null, true);
        echo "</h2>

<div>
  <a class=\"btn btn-default btn-sm glyphicon glyphicon-plus\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_eleclogadd");
        echo "\">
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
        echo "
  </a>


</div>

   <div style=\"width:100%;\">
        <canvas id=\"ElecChart\" height=\"150\"></canvas>
    </div>


<script>
var ctx = document.getElementById(\"ElecChart\").getContext('2d');

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Monthly electricity consumption"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["eleclogrecords"]) || array_key_exists("eleclogrecords", $context) ? $context["eleclogrecords"] : (function () { throw new Twig_Error_Runtime('Variable "eleclogrecords" does not exist.', 125, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["eleclogrecord"]) {
            // line 126
            echo "          <tr>
            <td>";
            // line 127
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["eleclogrecord"], "daterx", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
            <td>";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["eleclogrecord"], "metervalue", array()), "html", null, true);
            echo "</td>
            <td>
              <a class=\"btn glyphicon glyphicon-trash red \" href=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_eleclogdel", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["eleclogrecord"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleclogrecord'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "        </tbody>
      </table>
    </div>
</div>

";
        
        $__internal_4604ef46afc59778f592cba9619ec18b692ef4d4f5bcb823bc08c7ed480e90e5->leave($__internal_4604ef46afc59778f592cba9619ec18b692ef4d4f5bcb823bc08c7ed480e90e5_prof);

        
        $__internal_61d3a40e5f4a318ea4c018b5ecd7f4323e42b64fa5e0d4784e360a8a680dfa5a->leave($__internal_61d3a40e5f4a318ea4c018b5ecd7f4323e42b64fa5e0d4784e360a8a680dfa5a_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Visualization:elecvisual.html.twig";
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
  Electricity visualization - {{ parent() }}
{% endblock %}

{% block lljm_home_body %}

  <h2>{{ 'Electricity visualization' | trans }}</h2>

<div>
  <a class=\"btn btn-default btn-sm glyphicon glyphicon-plus\" href=\"{{ path('home_eleclogadd') }}\">
    {{ 'Add' | trans }}
  </a>


</div>

   <div style=\"width:100%;\">
        <canvas id=\"ElecChart\" height=\"150\"></canvas>
    </div>


<script>
var ctx = document.getElementById(\"ElecChart\").getContext('2d');

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
                    text:'{{ 'Monthly electricity consumption' | trans }}'
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
  {% for eleclogrecord in eleclogrecords %}
          <tr>
            <td>{{ eleclogrecord.daterx | date(\"Y-m-d H:i:s\")}}</td>
            <td>{{ eleclogrecord.metervalue }}</td>
            <td>
              <a class=\"btn glyphicon glyphicon-trash red \" href=\"{{ path('home_eleclogdel', {'id': eleclogrecord.id}) }}\">
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
", "LljmHomeBundle:Visualization:elecvisual.html.twig", "/home/lljm/web_symfony3/web/src/Lljm/HomeBundle/Resources/views/Visualization/elecvisual.html.twig");
    }
}
