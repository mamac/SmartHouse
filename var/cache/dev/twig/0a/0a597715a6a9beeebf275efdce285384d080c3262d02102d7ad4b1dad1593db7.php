<?php

/* LljmHomeBundle:Light:index.html.twig */
class __TwigTemplate_8e81928024e5994046c514a04c641649ec6f85e00ccee173c49d8218a785c1f5 extends Twig_Template
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
        $__internal_3e1ec3760cedac2577a8883e4b10adc065058e8a9584ba9115e749071aa2c7ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e1ec3760cedac2577a8883e4b10adc065058e8a9584ba9115e749071aa2c7ab->enter($__internal_3e1ec3760cedac2577a8883e4b10adc065058e8a9584ba9115e749071aa2c7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Light:index.html.twig"));

        $__internal_28011ed0b906747f7234a247ceb83cd1715937c38c89f95f6a6ccbdd2e52af13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28011ed0b906747f7234a247ceb83cd1715937c38c89f95f6a6ccbdd2e52af13->enter($__internal_28011ed0b906747f7234a247ceb83cd1715937c38c89f95f6a6ccbdd2e52af13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Light:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e1ec3760cedac2577a8883e4b10adc065058e8a9584ba9115e749071aa2c7ab->leave($__internal_3e1ec3760cedac2577a8883e4b10adc065058e8a9584ba9115e749071aa2c7ab_prof);

        
        $__internal_28011ed0b906747f7234a247ceb83cd1715937c38c89f95f6a6ccbdd2e52af13->leave($__internal_28011ed0b906747f7234a247ceb83cd1715937c38c89f95f6a6ccbdd2e52af13_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2949a63407813d3bacb22664929aed575b875a5de62630b75e05383fad99348c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2949a63407813d3bacb22664929aed575b875a5de62630b75e05383fad99348c->enter($__internal_2949a63407813d3bacb22664929aed575b875a5de62630b75e05383fad99348c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_166d41d3e7d2d8967cc116ca0fa308ff55912afb231e179729dee99e82adf0a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_166d41d3e7d2d8967cc116ca0fa308ff55912afb231e179729dee99e82adf0a4->enter($__internal_166d41d3e7d2d8967cc116ca0fa308ff55912afb231e179729dee99e82adf0a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<script type=\"text/javascript\" >

    var vscpeventCtrl = new vscpws_Event( vscp_setting_user,
                                            vscp_setting_passwordhash,
                                            vscp_setting_url );

    var vscpTurnOnEvent = function(var_index, var_zone, var_subzone) 
    {
        if ( vscpeventCtrl.isOpen() ) {
            console.log(\"ON Event\");
            var  data = new Array(var_index,var_zone,var_subzone); // optional=0, zone=0, subzone=0
            vscpeventCtrl.sendEvent( 0,                             // head
                                        VSCP_CLASS1_CONTROL,        // VSCP Class
                                        VSCP_TYPE_CONTROL_TURNON,   // VSCP Type
                                        0,                          // obid
                                        0,                          // timestamp
                                        \"-\",                        // Use interface GUID
                                        data                        // data (can be sent as a comma separated string also)
                                    );
        }
        else {
            alert(\"Not connected\");
        }
    }
    
    var vscpTurnOffEvent = function(var_index, var_zone, var_subzone) 
    {
        if ( vscpeventCtrl.isOpen() ) {
            console.log(\"OFF Event\");
            var  data = new Array(var_index,var_zone,var_subzone);
            vscpeventCtrl.sendEvent( 0,                             // head
                                        VSCP_CLASS1_CONTROL,        // VSCP Class
                                        VSCP_TYPE_CONTROL_TURNOFF,  // VSCP Type
                                        0,                          // obid
                                        0,                          // timestamp
                                        \"-\",                        // Use interface GUID
                                        data                        // data (can be sent as a comma separated string also)
                                    );
        }
        else {
            alert(\"Not connected\");
        }
    }    

</script>

<div id=\"header\" class=\"hero-unit\">
  <h1>";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Light management"), "html", null, true);
        echo "</h1>

</div>

";
        // line 56
        $context["buttonTop"] = 0;
        // line 57
        echo "
";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lightswitches"]) || array_key_exists("lightswitches", $context) ? $context["lightswitches"] : (function () { throw new Twig_Error_Runtime('Variable "lightswitches" does not exist.', 58, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["lightswitch"]) {
            // line 59
            echo "  <div>
  <p>
    ";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["lightswitch"], "zonename", array())), "html", null, true);
            echo "
    -
    ";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["lightswitch"], "subzonename", array())), "html", null, true);
            echo "

    <button onclick=\"vscpTurnOnEvent(0, ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["lightswitch"], "zoneid", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["lightswitch"], "subzoneid", array()), "html", null, true);
            echo ")\">ON </button>
         
    <button onclick=\"vscpTurnOffEvent(0, ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["lightswitch"], "zoneid", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["lightswitch"], "subzoneid", array()), "html", null, true);
            echo ")\">OFF</button>
  </p>
</div>

<canvas id=\"buttonKitchen";
            // line 71
            echo twig_escape_filter($this->env, (isset($context["buttonTop"]) || array_key_exists("buttonTop", $context) ? $context["buttonTop"] : (function () { throw new Twig_Error_Runtime('Variable "buttonTop" does not exist.', 71, $this->getSourceContext()); })()), "html", null, true);
            echo "\"
    style=\"z-index: 3;
    position:relative;
    left:250px;
    top:";
            // line 75
            echo twig_escape_filter($this->env, ((isset($context["buttonTop"]) || array_key_exists("buttonTop", $context) ? $context["buttonTop"] : (function () { throw new Twig_Error_Runtime('Variable "buttonTop" does not exist.', 75, $this->getSourceContext()); })()) - 40), "html", null, true);
            echo "px;\" height=\"30px\" width=\"22px\">
    Your browser does not support HTML5 Canvas.
</canvas>

<script>
    var btn1 = new vscpws_stateButton( vscp_setting_user,
    vscp_setting_passwordhash,
    vscp_setting_url, // url
    'buttonKitchen";
            // line 83
            echo twig_escape_filter($this->env, (isset($context["buttonTop"]) || array_key_exists("buttonTop", $context) ? $context["buttonTop"] : (function () { throw new Twig_Error_Runtime('Variable "buttonTop" does not exist.', 83, $this->getSourceContext()); })()), "html", null, true);
            echo "',   // canvas for button
    true,             // Local state change
    93 );             // Looks for button

    btn1.setMonitorVariable(\"SWITCH_STATUS_";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["lightswitch"], "zoneid", array()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["lightswitch"], "subzoneid", array()), "html", null, true);
            echo "\", 1000);         // Update and monitor

</script>

";
            // line 91
            $context["buttonTop"] = ((isset($context["buttonTop"]) || array_key_exists("buttonTop", $context) ? $context["buttonTop"] : (function () { throw new Twig_Error_Runtime('Variable "buttonTop" does not exist.', 91, $this->getSourceContext()); })()) + 1);
            // line 92
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 94
            echo "    <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No record in this table"), "html", null, true);
            echo ".</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lightswitch'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "
          ";
        
        $__internal_166d41d3e7d2d8967cc116ca0fa308ff55912afb231e179729dee99e82adf0a4->leave($__internal_166d41d3e7d2d8967cc116ca0fa308ff55912afb231e179729dee99e82adf0a4_prof);

        
        $__internal_2949a63407813d3bacb22664929aed575b875a5de62630b75e05383fad99348c->leave($__internal_2949a63407813d3bacb22664929aed575b875a5de62630b75e05383fad99348c_prof);

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
        return array (  197 => 96,  188 => 94,  182 => 92,  180 => 91,  171 => 87,  164 => 83,  153 => 75,  146 => 71,  137 => 67,  130 => 65,  125 => 63,  120 => 61,  116 => 59,  111 => 58,  108 => 57,  106 => 56,  99 => 52,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"LljmHomeBundle::layout.html.twig\" %}

   {% block body %}

<script type=\"text/javascript\" >

    var vscpeventCtrl = new vscpws_Event( vscp_setting_user,
                                            vscp_setting_passwordhash,
                                            vscp_setting_url );

    var vscpTurnOnEvent = function(var_index, var_zone, var_subzone) 
    {
        if ( vscpeventCtrl.isOpen() ) {
            console.log(\"ON Event\");
            var  data = new Array(var_index,var_zone,var_subzone); // optional=0, zone=0, subzone=0
            vscpeventCtrl.sendEvent( 0,                             // head
                                        VSCP_CLASS1_CONTROL,        // VSCP Class
                                        VSCP_TYPE_CONTROL_TURNON,   // VSCP Type
                                        0,                          // obid
                                        0,                          // timestamp
                                        \"-\",                        // Use interface GUID
                                        data                        // data (can be sent as a comma separated string also)
                                    );
        }
        else {
            alert(\"Not connected\");
        }
    }
    
    var vscpTurnOffEvent = function(var_index, var_zone, var_subzone) 
    {
        if ( vscpeventCtrl.isOpen() ) {
            console.log(\"OFF Event\");
            var  data = new Array(var_index,var_zone,var_subzone);
            vscpeventCtrl.sendEvent( 0,                             // head
                                        VSCP_CLASS1_CONTROL,        // VSCP Class
                                        VSCP_TYPE_CONTROL_TURNOFF,  // VSCP Type
                                        0,                          // obid
                                        0,                          // timestamp
                                        \"-\",                        // Use interface GUID
                                        data                        // data (can be sent as a comma separated string also)
                                    );
        }
        else {
            alert(\"Not connected\");
        }
    }    

</script>

<div id=\"header\" class=\"hero-unit\">
  <h1>{{'Light management' | trans }}</h1>

</div>

{% set buttonTop = 0 %}

{% for lightswitch in lightswitches %}
  <div>
  <p>
    {{ lightswitch.zonename | trans }}
    -
    {{ lightswitch.subzonename | trans }}

    <button onclick=\"vscpTurnOnEvent(0, {{ lightswitch.zoneid }}, {{ lightswitch.subzoneid }})\">ON </button>
         
    <button onclick=\"vscpTurnOffEvent(0, {{ lightswitch.zoneid }}, {{ lightswitch.subzoneid }})\">OFF</button>
  </p>
</div>

<canvas id=\"buttonKitchen{{ buttonTop }}\"
    style=\"z-index: 3;
    position:relative;
    left:250px;
    top:{{ buttonTop - 40 }}px;\" height=\"30px\" width=\"22px\">
    Your browser does not support HTML5 Canvas.
</canvas>

<script>
    var btn1 = new vscpws_stateButton( vscp_setting_user,
    vscp_setting_passwordhash,
    vscp_setting_url, // url
    'buttonKitchen{{ buttonTop }}',   // canvas for button
    true,             // Local state change
    93 );             // Looks for button

    btn1.setMonitorVariable(\"SWITCH_STATUS_{{ lightswitch.zoneid }}_{{ lightswitch.subzoneid }}\", 1000);         // Update and monitor

</script>

{% set buttonTop = buttonTop + 1 %}

{% else %}
    <p>{{ 'No record in this table' | trans }}.</p>
{% endfor %}

          {% endblock %}", "LljmHomeBundle:Light:index.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Light/index.html.twig");
    }
}
