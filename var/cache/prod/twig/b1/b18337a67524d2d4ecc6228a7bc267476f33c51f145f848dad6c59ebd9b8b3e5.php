<?php

/* LljmHomeBundle:Light:index.html.old.twig */
class __TwigTemplate_ae1732b59e9a4ed74a663a01f4f9810d3a3fd3bc3b88923b14242da6ab2a5fc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Light:index.html.old.twig", 1);
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
        $context['_seq'] = twig_ensure_traversable(($context["lightswitches"] ?? null));
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
            echo twig_escape_filter($this->env, ($context["buttonTop"] ?? null), "html", null, true);
            echo "\"
    style=\"z-index: 3;
    position:relative;
    left:250px;
    top:";
            // line 75
            echo twig_escape_filter($this->env, (($context["buttonTop"] ?? null) - 40), "html", null, true);
            echo "px;\" height=\"30px\" width=\"22px\">
    Your browser does not support HTML5 Canvas.
</canvas>

<script>
    var btn1 = new vscpws_stateButton( vscp_setting_user,
    vscp_setting_passwordhash,
    vscp_setting_url, // url
    'buttonKitchen";
            // line 83
            echo twig_escape_filter($this->env, ($context["buttonTop"] ?? null), "html", null, true);
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
            $context["buttonTop"] = (($context["buttonTop"] ?? null) + 1);
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
    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Light:index.html.old.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 96,  170 => 94,  164 => 92,  162 => 91,  153 => 87,  146 => 83,  135 => 75,  128 => 71,  119 => 67,  112 => 65,  107 => 63,  102 => 61,  98 => 59,  93 => 58,  90 => 57,  88 => 56,  81 => 52,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "LljmHomeBundle:Light:index.html.old.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Light/index.html.old.twig");
    }
}
