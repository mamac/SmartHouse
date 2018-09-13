<?php

/* LljmHomeBundle:Ventilation:index.html.twig */
class __TwigTemplate_6492bf8ad9a1ea8abf711a0f02303282103122b573ef934115d8db98ea284248 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Ventilation:index.html.twig", 1);
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
        $__internal_0ea46ebb52c1f305c8d31a9f02c18a934a65ef08694840bbfa0865bc4457b399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ea46ebb52c1f305c8d31a9f02c18a934a65ef08694840bbfa0865bc4457b399->enter($__internal_0ea46ebb52c1f305c8d31a9f02c18a934a65ef08694840bbfa0865bc4457b399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Ventilation:index.html.twig"));

        $__internal_aa5f3194a53503d1c4e931fd8f797351c2d9fb968ba104d9754a56293039281d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa5f3194a53503d1c4e931fd8f797351c2d9fb968ba104d9754a56293039281d->enter($__internal_aa5f3194a53503d1c4e931fd8f797351c2d9fb968ba104d9754a56293039281d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Ventilation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ea46ebb52c1f305c8d31a9f02c18a934a65ef08694840bbfa0865bc4457b399->leave($__internal_0ea46ebb52c1f305c8d31a9f02c18a934a65ef08694840bbfa0865bc4457b399_prof);

        
        $__internal_aa5f3194a53503d1c4e931fd8f797351c2d9fb968ba104d9754a56293039281d->leave($__internal_aa5f3194a53503d1c4e931fd8f797351c2d9fb968ba104d9754a56293039281d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa2d04dd42abbc8957dc9f537c893ab2426ebc142c08003d7a4d232242cfa66b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa2d04dd42abbc8957dc9f537c893ab2426ebc142c08003d7a4d232242cfa66b->enter($__internal_aa2d04dd42abbc8957dc9f537c893ab2426ebc142c08003d7a4d232242cfa66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3e6f5f3fb7d8e0552db7213153f86556a07941d3661c1e458d940434811a99a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e6f5f3fb7d8e0552db7213153f86556a07941d3661c1e458d940434811a99a2->enter($__internal_3e6f5f3fb7d8e0552db7213153f86556a07941d3661c1e458d940434811a99a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<script type=\"text/javascript\" >


//        (function() {

            // VSCP websocket connection
            var vscpConn = null;

            // Button in the living room
//            var buttonLivingRoom = null;


        // Wait until the whole website is loaded
//        \$( document ).ready( function() {

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

                        onSuccess: function( conn ) {


                            // Enable the user interface
                            //ui.enable();
                        },

                        onError: function( conn ) {
                            alert(\"Couldn't start receiving events.\");
                        }

                    });

                },

                onError: function( conn ) {
                    alert(\"Couldn't establish a connection.\");
                },

            });
//        });         // Wait until the whole website is loaded

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





//        })();


    
</script>

<div id=\"header\" class=\"hero-unit\">
  <h1>";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ventilation management"), "html", null, true);
        echo "</h1>

</div>

";
        // line 144
        $context["buttonTop"] = 0;
        // line 145
        echo "
";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ventilationswitches"]) || array_key_exists("ventilationswitches", $context) ? $context["ventilationswitches"] : (function () { throw new Twig_Error_Runtime('Variable "ventilationswitches" does not exist.', 146, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ventilationswitch"]) {
            // line 147
            echo "
  <p>
    ";
            // line 149
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["ventilationswitch"], "zonename", array())), "html", null, true);
            echo "
    -
    ";
            // line 151
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["ventilationswitch"], "subzonename", array())), "html", null, true);
            echo "

    <button onclick=\"vscpTurnOnEvent(0, ";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ventilationswitch"], "zoneid", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ventilationswitch"], "subzoneid", array()), "html", null, true);
            echo ")\">ON </button>
         
    <button onclick=\"vscpTurnOffEvent(0, ";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ventilationswitch"], "zoneid", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ventilationswitch"], "subzoneid", array()), "html", null, true);
            echo ")\">OFF</button>
  </p>

<div style=\"position:absolute; top:";
            // line 158
            echo twig_escape_filter($this->env, ((((isset($context["buttonTop"]) || array_key_exists("buttonTop", $context) ? $context["buttonTop"] : (function () { throw new Twig_Error_Runtime('Variable "buttonTop" does not exist.', 158, $this->getSourceContext()); })()) / 4) + 1) * 140), "html", null, true);
            echo "px; left:35%; z-index:1\">

<script>

            function initCanvas() {


                // Show background image
//                var backgroundImage = new vscp.widget.Image({
//                    canvasName: \"#myCanvas\",
//                    url: \"";
            // line 168
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lljmhome/images/kvarnvillan_plan1_800.jpg"), "html", null, true);
            echo "\"
//                });

                // Create ventilation buttonn
                button";
            // line 172
            echo twig_escape_filter($this->env, (isset($context["buttonTop"]) || array_key_exists("buttonTop", $context) ? $context["buttonTop"] : (function () { throw new Twig_Error_Runtime('Variable "buttonTop" does not exist.', 172, $this->getSourceContext()); })()), "html", null, true);
            echo " = new vscp.widget.Button({
                    connection: vscpConn,       // VSCP connection object
                    canvasName: \"#buttonVentilation";
            // line 174
            echo twig_escape_filter($this->env, (isset($context["buttonTop"]) || array_key_exists("buttonTop", $context) ? $context["buttonTop"] : (function () { throw new Twig_Error_Runtime('Variable "buttonTop" does not exist.', 174, $this->getSourceContext()); })()), "html", null, true);
            echo "\",    // Canvas id
                    type: 85,                    // Button type
                    scale: 0.3,                 // Scale factor
                    x: 15,                     // x position in the canvas
                    y: 15,                     // y position in the canvas
                    transmitZone: ";
            // line 179
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ventilationswitch"], "zoneid", array()), "html", null, true);
            echo ",            // Zone where button event will be sent to
                    transmitSubZone: ";
            // line 180
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ventilationswitch"], "subzoneid", array()), "html", null, true);
            echo ",        // Sub-zone where button event will be sent to
                    receiveZone: ";
            // line 181
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ventilationswitch"], "zoneid", array()), "html", null, true);
            echo ",             // Zone where state events will come from
                    receiveSubZone: ";
            // line 182
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ventilationswitch"], "subzoneid", array()), "html", null, true);
            echo ",         // Sub-zone where state events will come from
                    bindToRemoteState: true,    // Button state depends on remote state
                    enable: true               // Disable button by default
                });

                // The user interface (buttons) make only sense
                // in case that the event communication is ready
                button";
            // line 189
            echo twig_escape_filter($this->env, (isset($context["buttonTop"]) || array_key_exists("buttonTop", $context) ? $context["buttonTop"] : (function () { throw new Twig_Error_Runtime('Variable "buttonTop" does not exist.', 189, $this->getSourceContext()); })()), "html", null, true);
            echo ".setEnabled( true );

            };

</script>
        <canvas id=\"buttonVentilation";
            // line 194
            echo twig_escape_filter($this->env, (isset($context["buttonTop"]) || array_key_exists("buttonTop", $context) ? $context["buttonTop"] : (function () { throw new Twig_Error_Runtime('Variable "buttonTop" does not exist.', 194, $this->getSourceContext()); })()), "html", null, true);
            echo "\" width=\"50px\" height=\"50px\">
            Your browser does not support HTML5 Canvas.
        </canvas>
</div>

";
            // line 199
            $context["buttonTop"] = ((isset($context["buttonTop"]) || array_key_exists("buttonTop", $context) ? $context["buttonTop"] : (function () { throw new Twig_Error_Runtime('Variable "buttonTop" does not exist.', 199, $this->getSourceContext()); })()) + 1);
            // line 200
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 202
            echo "    <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No record in this table"), "html", null, true);
            echo ".</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ventilationswitch'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "


          ";
        
        $__internal_3e6f5f3fb7d8e0552db7213153f86556a07941d3661c1e458d940434811a99a2->leave($__internal_3e6f5f3fb7d8e0552db7213153f86556a07941d3661c1e458d940434811a99a2_prof);

        
        $__internal_aa2d04dd42abbc8957dc9f537c893ab2426ebc142c08003d7a4d232242cfa66b->leave($__internal_aa2d04dd42abbc8957dc9f537c893ab2426ebc142c08003d7a4d232242cfa66b_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Ventilation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 204,  312 => 202,  306 => 200,  304 => 199,  296 => 194,  288 => 189,  278 => 182,  274 => 181,  270 => 180,  266 => 179,  258 => 174,  253 => 172,  246 => 168,  233 => 158,  225 => 155,  218 => 153,  213 => 151,  208 => 149,  204 => 147,  199 => 146,  196 => 145,  194 => 144,  187 => 140,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"LljmHomeBundle::layout.html.twig\" %}

   {% block body %}

<script type=\"text/javascript\" >


//        (function() {

            // VSCP websocket connection
            var vscpConn = null;

            // Button in the living room
//            var buttonLivingRoom = null;


        // Wait until the whole website is loaded
//        \$( document ).ready( function() {

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

                        onSuccess: function( conn ) {


                            // Enable the user interface
                            //ui.enable();
                        },

                        onError: function( conn ) {
                            alert(\"Couldn't start receiving events.\");
                        }

                    });

                },

                onError: function( conn ) {
                    alert(\"Couldn't establish a connection.\");
                },

            });
//        });         // Wait until the whole website is loaded

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





//        })();


    
</script>

<div id=\"header\" class=\"hero-unit\">
  <h1>{{'Ventilation management' | trans }}</h1>

</div>

{% set buttonTop = 0 %}

{% for ventilationswitch in ventilationswitches %}

  <p>
    {{ ventilationswitch.zonename | trans }}
    -
    {{ ventilationswitch.subzonename | trans }}

    <button onclick=\"vscpTurnOnEvent(0, {{ ventilationswitch.zoneid }}, {{ ventilationswitch.subzoneid }})\">ON </button>
         
    <button onclick=\"vscpTurnOffEvent(0, {{ ventilationswitch.zoneid }}, {{ ventilationswitch.subzoneid }})\">OFF</button>
  </p>

<div style=\"position:absolute; top:{{(buttonTop / 4 + 1) * 140}}px; left:35%; z-index:1\">

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
                    x: 15,                     // x position in the canvas
                    y: 15,                     // y position in the canvas
                    transmitZone: {{ ventilationswitch.zoneid }},            // Zone where button event will be sent to
                    transmitSubZone: {{ ventilationswitch.subzoneid }},        // Sub-zone where button event will be sent to
                    receiveZone: {{ ventilationswitch.zoneid }},             // Zone where state events will come from
                    receiveSubZone: {{ ventilationswitch.subzoneid }},         // Sub-zone where state events will come from
                    bindToRemoteState: true,    // Button state depends on remote state
                    enable: true               // Disable button by default
                });

                // The user interface (buttons) make only sense
                // in case that the event communication is ready
                button{{ buttonTop }}.setEnabled( true );

            };

</script>
        <canvas id=\"buttonVentilation{{ buttonTop }}\" width=\"50px\" height=\"50px\">
            Your browser does not support HTML5 Canvas.
        </canvas>
</div>

{% set buttonTop = buttonTop + 1 %}

{% else %}
    <p>{{ 'No record in this table' | trans }}.</p>
{% endfor %}



          {% endblock %}", "LljmHomeBundle:Ventilation:index.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Ventilation/index.html.twig");
    }
}
