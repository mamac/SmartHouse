<?php

/* LljmHomeBundle:Light:index.html.twig */
class __TwigTemplate_d46144eb016e0a94dca86e46f52f179eabdf05bda8e76257bee8586bde9c628b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Light:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LljmHomeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be5c4001345fe057669cdd731a9dfff304dfc580b09d4fcbf5d1119cf3f41e8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be5c4001345fe057669cdd731a9dfff304dfc580b09d4fcbf5d1119cf3f41e8d->enter($__internal_be5c4001345fe057669cdd731a9dfff304dfc580b09d4fcbf5d1119cf3f41e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Light:index.html.twig"));

        $__internal_2116847080ecd9390c983ce44ef3a0906fd44612abf1ca3dc1b7b9bad642a4cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2116847080ecd9390c983ce44ef3a0906fd44612abf1ca3dc1b7b9bad642a4cf->enter($__internal_2116847080ecd9390c983ce44ef3a0906fd44612abf1ca3dc1b7b9bad642a4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Light:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be5c4001345fe057669cdd731a9dfff304dfc580b09d4fcbf5d1119cf3f41e8d->leave($__internal_be5c4001345fe057669cdd731a9dfff304dfc580b09d4fcbf5d1119cf3f41e8d_prof);

        
        $__internal_2116847080ecd9390c983ce44ef3a0906fd44612abf1ca3dc1b7b9bad642a4cf->leave($__internal_2116847080ecd9390c983ce44ef3a0906fd44612abf1ca3dc1b7b9bad642a4cf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e12596af3bd4458cf2bf94e732fb848cd4095a6b88c4789e3071fc9bef42621 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e12596af3bd4458cf2bf94e732fb848cd4095a6b88c4789e3071fc9bef42621->enter($__internal_0e12596af3bd4458cf2bf94e732fb848cd4095a6b88c4789e3071fc9bef42621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_379543e8de30f05472952cb6252360942731a37971886dc27b4ba8acbe819eef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_379543e8de30f05472952cb6252360942731a37971886dc27b4ba8acbe819eef->enter($__internal_379543e8de30f05472952cb6252360942731a37971886dc27b4ba8acbe819eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<script type=\"text/javascript\" >

            var vscpConn = null;

            // Create a VSCP websocket
            vscpConn = new vscp.Connection();

            // Connect to VSCP server
            vscpConn.connect({

                url: settings.url,
                userName: settings.user,
                password: settings.password,
                vscpkey: settings.vscpkey,
                authdomain: settings.authdomain,

                onSuccess: function( conn ) {

                    // Start receiving VSCP events
                        // Initialize canvas
                        // Don't do this without a established connection, because
                        // the button needs the connection object!

                        initCanvas();
                    vscpConn.start({


                        onError: function( conn ) {
                            alert(\"Couldn't start receiving events.\");
                        }

                    });

                },

                onError: function( conn ) {
                    alert(\"Couldn't establish a connection.\");
                },

            });


        // User interface data
        var ui = {

            enable: function() {
                \$( \"#ui :input\" ).attr( \"disabled\", false );
            },

            disable: function() {
                \$( \"#ui :input\" ).attr( \"disabled\", true );
            }
        };

        function vscpTurnOnEvent(data1, data2, data3) {

            ui.disable();

            vscpConn.sendEvent({
                event: new vscp.Event({
                    vscpClass:      vscp.constants.classes.VSCP_CLASS1_CONTROL,
                    vscpType:       vscp.constants.types.VSCP_TYPE_CONTROL_TURNON,
                    vscpPriority:   vscp.constants.priorities.PRIORITY_3_NORMAL,
                    vscpData:       [ data1, data2, data3 ]
                }),

                onSuccess: function( conn ) {
                    console.info( \"TURNON event sent.\" );
                    ui.enable();
                },

                onError: function( conn ) {
                    alert( \"Failed to send TURNON event.\" );
                    ui.enable();
                }

            });

        }

        function vscpTurnOffEvent(data1, data2, data3) {

            ui.disable();

            vscpConn.sendEvent({
                event: new vscp.Event({
                    vscpClass:      vscp.constants.classes.VSCP_CLASS1_CONTROL,
                    vscpType:       vscp.constants.types.VSCP_TYPE_CONTROL_TURNOFF,
                    vscpPriority:   vscp.constants.priorities.PRIORITY_3_NORMAL,
                    vscpData:       [ data1, data2, data3 ]
                }),

                onSuccess: function( conn ) {
                    console.info( \"TURNOFF event sent.\" );
                    ui.enable();
                },

                onError: function( conn ) {
                    alert( \"Failed to send TURNOFF event.\" );
                    ui.enable();
                }

            });

        }

</script>

<div id=\"header\" class=\"hero-unit\">
  <h1>";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Light management"), "html", null, true);
        echo "</h1>

</div>

";
        // line 118
        $context["buttonTop"] = 0;
        // line 119
        echo "
<style type=\"text/css\">
table{
    width: 20%;
    border: 1px solid black;
}
th, td{
    padding: 10px;
    text-align: left;
    border: 1px solid black;
}
</style>

<table>
";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lightswitches"]) || array_key_exists("lightswitches", $context) ? $context["lightswitches"] : (function () { throw new Twig_Error_Runtime('Variable "lightswitches" does not exist.', 133, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["lightswitch"]) {
            // line 134
            echo "

  <tr>
    <td>";
            // line 137
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["lightswitch"], "zonename", array())), "html", null, true);
            echo "</td>
    <td>";
            // line 138
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["lightswitch"], "subzonename", array())), "html", null, true);
            echo "</td>
    <td><button onclick=\"vscpTurnOnEvent(0, ";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["lightswitch"], "zoneid", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["lightswitch"], "subzoneid", array()), "html", null, true);
            echo ")\">ON </button></td>
    <td><button onclick=\"vscpTurnOffEvent(0, ";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["lightswitch"], "zoneid", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["lightswitch"], "subzoneid", array()), "html", null, true);
            echo ")\">OFF</button></td>
    <td>

        <canvas id=\"buttonVentilation";
            // line 143
            echo twig_escape_filter($this->env, (isset($context["buttonTop"]) || array_key_exists("buttonTop", $context) ? $context["buttonTop"] : (function () { throw new Twig_Error_Runtime('Variable "buttonTop" does not exist.', 143, $this->getSourceContext()); })()), "html", null, true);
            echo "\" width=\"50px\" height=\"50px\">
            Your browser does not support HTML5 Canvas.
        </canvas>

        <script>

            function initCanvas() {


                // Show background image
//                var backgroundImage = new vscp.widget.Image({
//                    canvasName: \"#myCanvas\",
//                    url: \"";
            // line 155
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lljmhome/images/kvarnvillan_plan1_800.jpg"), "html", null, true);
            echo "\"
//                });

                // Create ventilation buttonn
                button";
            // line 159
            echo twig_escape_filter($this->env, (isset($context["buttonTop"]) || array_key_exists("buttonTop", $context) ? $context["buttonTop"] : (function () { throw new Twig_Error_Runtime('Variable "buttonTop" does not exist.', 159, $this->getSourceContext()); })()), "html", null, true);
            echo " = new vscp.widget.Button({
                    connection: vscpConn,       // VSCP connection object
                    canvasName: \"#buttonVentilation";
            // line 161
            echo twig_escape_filter($this->env, (isset($context["buttonTop"]) || array_key_exists("buttonTop", $context) ? $context["buttonTop"] : (function () { throw new Twig_Error_Runtime('Variable "buttonTop" does not exist.', 161, $this->getSourceContext()); })()), "html", null, true);
            echo "\",    // Canvas id
                    type: 85,                    // Button type
                    scale: 0.3,                 // Scale factor
                    x: 25,                     // x position in the canvas
                    y: 25,                     // y position in the canvas
                    transmitZone: ";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["lightswitch"], "zoneid", array()), "html", null, true);
            echo ",            // Zone where button event will be sent to
                    transmitSubZone: ";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["lightswitch"], "subzoneid", array()), "html", null, true);
            echo ",        // Sub-zone where button event will be sent to
                    receiveZone: ";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["lightswitch"], "zoneid", array()), "html", null, true);
            echo ",             // Zone where state events will come from
                    receiveSubZone: ";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["lightswitch"], "subzoneid", array()), "html", null, true);
            echo ",         // Sub-zone where state events will come from
                    bindToRemoteState: true,    // Button state depends on remote state
                    enable: false               // Disable button by default
                });

                // The user interface (buttons) make only sense
                // in case that the event communication is ready
                button";
            // line 176
            echo twig_escape_filter($this->env, (isset($context["buttonTop"]) || array_key_exists("buttonTop", $context) ? $context["buttonTop"] : (function () { throw new Twig_Error_Runtime('Variable "buttonTop" does not exist.', 176, $this->getSourceContext()); })()), "html", null, true);
            echo ".setEnabled( true );

            };
                                    initCanvas();

</script>
    </td>
  </tr>

";
            // line 185
            $context["buttonTop"] = ((isset($context["buttonTop"]) || array_key_exists("buttonTop", $context) ? $context["buttonTop"] : (function () { throw new Twig_Error_Runtime('Variable "buttonTop" does not exist.', 185, $this->getSourceContext()); })()) + 1);
            // line 186
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 188
            echo "    <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No record in this table"), "html", null, true);
            echo ".</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lightswitch'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "</table>

          ";
        
        $__internal_379543e8de30f05472952cb6252360942731a37971886dc27b4ba8acbe819eef->leave($__internal_379543e8de30f05472952cb6252360942731a37971886dc27b4ba8acbe819eef_prof);

        
        $__internal_0e12596af3bd4458cf2bf94e732fb848cd4095a6b88c4789e3071fc9bef42621->leave($__internal_0e12596af3bd4458cf2bf94e732fb848cd4095a6b88c4789e3071fc9bef42621_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Light:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 190,  295 => 188,  289 => 186,  287 => 185,  275 => 176,  265 => 169,  261 => 168,  257 => 167,  253 => 166,  245 => 161,  240 => 159,  233 => 155,  218 => 143,  210 => 140,  204 => 139,  200 => 138,  196 => 137,  191 => 134,  186 => 133,  170 => 119,  168 => 118,  161 => 114,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"LljmHomeBundle::layout.html.twig\" %}

   {% block body %}

<script type=\"text/javascript\" >

            var vscpConn = null;

            // Create a VSCP websocket
            vscpConn = new vscp.Connection();

            // Connect to VSCP server
            vscpConn.connect({

                url: settings.url,
                userName: settings.user,
                password: settings.password,
                vscpkey: settings.vscpkey,
                authdomain: settings.authdomain,

                onSuccess: function( conn ) {

                    // Start receiving VSCP events
                        // Initialize canvas
                        // Don't do this without a established connection, because
                        // the button needs the connection object!

                        initCanvas();
                    vscpConn.start({


                        onError: function( conn ) {
                            alert(\"Couldn't start receiving events.\");
                        }

                    });

                },

                onError: function( conn ) {
                    alert(\"Couldn't establish a connection.\");
                },

            });


        // User interface data
        var ui = {

            enable: function() {
                \$( \"#ui :input\" ).attr( \"disabled\", false );
            },

            disable: function() {
                \$( \"#ui :input\" ).attr( \"disabled\", true );
            }
        };

        function vscpTurnOnEvent(data1, data2, data3) {

            ui.disable();

            vscpConn.sendEvent({
                event: new vscp.Event({
                    vscpClass:      vscp.constants.classes.VSCP_CLASS1_CONTROL,
                    vscpType:       vscp.constants.types.VSCP_TYPE_CONTROL_TURNON,
                    vscpPriority:   vscp.constants.priorities.PRIORITY_3_NORMAL,
                    vscpData:       [ data1, data2, data3 ]
                }),

                onSuccess: function( conn ) {
                    console.info( \"TURNON event sent.\" );
                    ui.enable();
                },

                onError: function( conn ) {
                    alert( \"Failed to send TURNON event.\" );
                    ui.enable();
                }

            });

        }

        function vscpTurnOffEvent(data1, data2, data3) {

            ui.disable();

            vscpConn.sendEvent({
                event: new vscp.Event({
                    vscpClass:      vscp.constants.classes.VSCP_CLASS1_CONTROL,
                    vscpType:       vscp.constants.types.VSCP_TYPE_CONTROL_TURNOFF,
                    vscpPriority:   vscp.constants.priorities.PRIORITY_3_NORMAL,
                    vscpData:       [ data1, data2, data3 ]
                }),

                onSuccess: function( conn ) {
                    console.info( \"TURNOFF event sent.\" );
                    ui.enable();
                },

                onError: function( conn ) {
                    alert( \"Failed to send TURNOFF event.\" );
                    ui.enable();
                }

            });

        }

</script>

<div id=\"header\" class=\"hero-unit\">
  <h1>{{'Light management' | trans }}</h1>

</div>

{% set buttonTop = 0 %}

<style type=\"text/css\">
table{
    width: 20%;
    border: 1px solid black;
}
th, td{
    padding: 10px;
    text-align: left;
    border: 1px solid black;
}
</style>

<table>
{% for lightswitch in lightswitches %}


  <tr>
    <td>{{ lightswitch.zonename | trans }}</td>
    <td>{{ lightswitch.subzonename | trans }}</td>
    <td><button onclick=\"vscpTurnOnEvent(0, {{ lightswitch.zoneid }}, {{ lightswitch.subzoneid }})\">ON </button></td>
    <td><button onclick=\"vscpTurnOffEvent(0, {{ lightswitch.zoneid }}, {{ lightswitch.subzoneid }})\">OFF</button></td>
    <td>

        <canvas id=\"buttonVentilation{{ buttonTop }}\" width=\"50px\" height=\"50px\">
            Your browser does not support HTML5 Canvas.
        </canvas>

        <script>

            function initCanvas() {


                // Show background image
//                var backgroundImage = new vscp.widget.Image({
//                    canvasName: \"#myCanvas\",
//                    url: \"{{ asset('bundles/lljmhome/images/kvarnvillan_plan1_800.jpg') }}\"
//                });

                // Create ventilation buttonn
                button{{ buttonTop }} = new vscp.widget.Button({
                    connection: vscpConn,       // VSCP connection object
                    canvasName: \"#buttonVentilation{{ buttonTop }}\",    // Canvas id
                    type: 85,                    // Button type
                    scale: 0.3,                 // Scale factor
                    x: 25,                     // x position in the canvas
                    y: 25,                     // y position in the canvas
                    transmitZone: {{ lightswitch.zoneid }},            // Zone where button event will be sent to
                    transmitSubZone: {{ lightswitch.subzoneid }},        // Sub-zone where button event will be sent to
                    receiveZone: {{ lightswitch.zoneid }},             // Zone where state events will come from
                    receiveSubZone: {{ lightswitch.subzoneid }},         // Sub-zone where state events will come from
                    bindToRemoteState: true,    // Button state depends on remote state
                    enable: false               // Disable button by default
                });

                // The user interface (buttons) make only sense
                // in case that the event communication is ready
                button{{ buttonTop }}.setEnabled( true );

            };
                                    initCanvas();

</script>
    </td>
  </tr>

{% set buttonTop = buttonTop + 1 %}

{% else %}
    <p>{{ 'No record in this table' | trans }}.</p>
{% endfor %}
</table>

          {% endblock %}", "LljmHomeBundle:Light:index.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Light/index.html.twig");
    }
}
