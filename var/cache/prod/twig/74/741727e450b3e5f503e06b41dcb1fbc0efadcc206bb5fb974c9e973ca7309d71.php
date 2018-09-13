<?php

/* LljmHomeBundle:Light:index.html.twig */
class __TwigTemplate_eed901fcaa155a952c7d6ada7757ef8c63158258731684798208e232dd66a2ea extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["lightswitches"] ?? null));
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
            echo twig_escape_filter($this->env, ($context["buttonTop"] ?? null), "html", null, true);
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
            echo twig_escape_filter($this->env, ($context["buttonTop"] ?? null), "html", null, true);
            echo " = new vscp.widget.Button({
                    connection: vscpConn,       // VSCP connection object
                    canvasName: \"#buttonVentilation";
            // line 161
            echo twig_escape_filter($this->env, ($context["buttonTop"] ?? null), "html", null, true);
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
            echo twig_escape_filter($this->env, ($context["buttonTop"] ?? null), "html", null, true);
            echo ".setEnabled( true );

            };
                                    initCanvas();

</script>
    </td>
  </tr>

";
            // line 185
            $context["buttonTop"] = (($context["buttonTop"] ?? null) + 1);
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
        return array (  286 => 190,  277 => 188,  271 => 186,  269 => 185,  257 => 176,  247 => 169,  243 => 168,  239 => 167,  235 => 166,  227 => 161,  222 => 159,  215 => 155,  200 => 143,  192 => 140,  186 => 139,  182 => 138,  178 => 137,  173 => 134,  168 => 133,  152 => 119,  150 => 118,  143 => 114,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "LljmHomeBundle:Light:index.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Light/index.html.twig");
    }
}
