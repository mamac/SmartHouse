<?php

/* LljmHomeBundle:Heating:index.html.twig */
class __TwigTemplate_8a6d84d4cfbb5e9f80e8001c87d703cce223e6d7c75ff5da55c39103c1e9cf1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Heating:index.html.twig", 1);
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
        $__internal_11ab9b83cff078c24df7df56ee6827d561bb9f4bba63cb26255740d19bf0d61a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11ab9b83cff078c24df7df56ee6827d561bb9f4bba63cb26255740d19bf0d61a->enter($__internal_11ab9b83cff078c24df7df56ee6827d561bb9f4bba63cb26255740d19bf0d61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Heating:index.html.twig"));

        $__internal_c306601a3c877d870e81e5394a87b9110ba90a0cc2e50a6d7667409644f9d0e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c306601a3c877d870e81e5394a87b9110ba90a0cc2e50a6d7667409644f9d0e8->enter($__internal_c306601a3c877d870e81e5394a87b9110ba90a0cc2e50a6d7667409644f9d0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Heating:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11ab9b83cff078c24df7df56ee6827d561bb9f4bba63cb26255740d19bf0d61a->leave($__internal_11ab9b83cff078c24df7df56ee6827d561bb9f4bba63cb26255740d19bf0d61a_prof);

        
        $__internal_c306601a3c877d870e81e5394a87b9110ba90a0cc2e50a6d7667409644f9d0e8->leave($__internal_c306601a3c877d870e81e5394a87b9110ba90a0cc2e50a6d7667409644f9d0e8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_041e5b2041cf72492b1228c07b50e4d7f030c4137b809b2cef140665c7ca0453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_041e5b2041cf72492b1228c07b50e4d7f030c4137b809b2cef140665c7ca0453->enter($__internal_041e5b2041cf72492b1228c07b50e4d7f030c4137b809b2cef140665c7ca0453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c5cbf55555112ce537f5d760edffca3290243951f4995ed942fe0b56a420dbb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5cbf55555112ce537f5d760edffca3290243951f4995ed942fe0b56a420dbb3->enter($__internal_c5cbf55555112ce537f5d760edffca3290243951f4995ed942fe0b56a420dbb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Heating - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c5cbf55555112ce537f5d760edffca3290243951f4995ed942fe0b56a420dbb3->leave($__internal_c5cbf55555112ce537f5d760edffca3290243951f4995ed942fe0b56a420dbb3_prof);

        
        $__internal_041e5b2041cf72492b1228c07b50e4d7f030c4137b809b2cef140665c7ca0453->leave($__internal_041e5b2041cf72492b1228c07b50e4d7f030c4137b809b2cef140665c7ca0453_prof);

    }

    // line 7
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_e79831b3421e02d42dbffddb89bb0a94347311b67731e06c2da49438886f7da9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e79831b3421e02d42dbffddb89bb0a94347311b67731e06c2da49438886f7da9->enter($__internal_e79831b3421e02d42dbffddb89bb0a94347311b67731e06c2da49438886f7da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_d40f8867b43771b34f7dd125d10f2a72b23dee7f5cdcbd30eb7e32a5b049e7b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d40f8867b43771b34f7dd125d10f2a72b23dee7f5cdcbd30eb7e32a5b049e7b2->enter($__internal_d40f8867b43771b34f7dd125d10f2a72b23dee7f5cdcbd30eb7e32a5b049e7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        // line 8
        echo "
  <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Heating"), "html", null, true);
        echo "</h2>

        <div>
          <p><h3>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Outside temperature"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["outsidetemp"]) || array_key_exists("outsidetemp", $context) ? $context["outsidetemp"] : (function () { throw new Twig_Error_Runtime('Variable "outsidetemp" does not exist.', 12, $this->getSourceContext()); })()), 0, array()), "currenttemp", array()), "html", null, true);
        echo "&deg;C</h3></p>
        </div>
        <div>
          ";
        // line 15
        if ( !twig_test_empty((isset($context["boilerzone"]) || array_key_exists("boilerzone", $context) ? $context["boilerzone"] : (function () { throw new Twig_Error_Runtime('Variable "boilerzone" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "          <h3>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Boiler status"), "html", null, true);
            echo " :
            ";
            // line 17
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["heatinglog"]) || array_key_exists("heatinglog", $context) ? $context["heatinglog"] : (function () { throw new Twig_Error_Runtime('Variable "heatinglog" does not exist.', 17, $this->getSourceContext()); })()), 0, array()), "boilerstatus", array()) == 1)) {
                // line 18
                echo "              <img src=\"/bundles/lljmhome/images/widgets/button/on-button.png\" style=\"width:25px;height:25px;\">
            ";
            } else {
                // line 20
                echo "              <img src=\"/bundles/lljmhome/images/widgets/button/off-button.png\" style=\"width:25px;height:25px;\">
            ";
            }
            // line 21
            echo "</h3>
          ";
        }
        // line 23
        echo "          <button type=\"submit\" class=\"btn glyphicon glyphicon-asterisk\" onclick=\"location.href = '";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_zoneheatingmodeupdate");
        echo "/3'\"></button>
          <button type=\"submit\" class=\"btn glyphicon glyphicon-leaf\" onclick=\"location.href = '";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_zoneheatingmodeupdate");
        echo "/2'\"></button>
          <button type=\"submit\" class=\"btn glyphicon glyphicon-fire\" onclick=\"location.href = '";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_zoneheatingmodeupdate");
        echo "/1'\"></button>
          <button type=\"submit\" class=\"btn glyphicon glyphicon-time\" onclick=\"location.href = '";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_zoneheatingmodeupdate");
        echo "/4'\"></button>
        </div>
        <div>
          <div class=\"table-responsive\">
            <table class=\"table table-striped\">
              <thead>
                <tr>
                  <th>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Zone name"), "html", null, true);
        echo "</th>
                  <th>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Eco"), "html", null, true);
        echo "</th>
                  <th>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Comfort"), "html", null, true);
        echo "</th>
                  <th>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Current"), "html", null, true);
        echo "</th>
                  <th>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mode"), "html", null, true);
        echo "</th>
                  <th>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Heating status"), "html", null, true);
        echo "</th>
                  <th>&nbsp;</th>
                </tr>
              </thead>
              <tbody>
\t\t\t  ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["zoneheatings"]) || array_key_exists("zoneheatings", $context) ? $context["zoneheatings"] : (function () { throw new Twig_Error_Runtime('Variable "zoneheatings" does not exist.', 43, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["zoneheating"]) {
            // line 44
            echo "                <tr>
                  <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["zoneheating"], "zonename", array())), "html", null, true);
            echo "</td>
                  <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["zoneheating"], "tempeco", array())), "html", null, true);
            echo "&deg;C</td>
                  <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["zoneheating"], "tempcomfort", array())), "html", null, true);
            echo "&deg;C</td>
                  <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["zoneheating"], "currenttemp", array())), "html", null, true);
            echo "&deg;C</td>
                  <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["zoneheating"], "modedesc", array())), "html", null, true);
            echo "</td>
                  <td>";
            // line 50
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["zoneheating"], "heatingstatus", array()) == 1)) {
                // line 51
                echo "                      <img src=\"/bundles/lljmhome/images/widgets/button/on-button.png\" style=\"width:25px;height:25px;\">
                      ";
            } else {
                // line 53
                echo "                      <img src=\"/bundles/lljmhome/images/widgets/button/off-button.png\" style=\"width:25px;height:25px;\">
                      ";
            }
            // line 54
            echo "</td>
                  <td>
                    <button type=\"submit\" class=\"btn glyphicon glyphicon-asterisk\" onclick=\"location.href = '";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_onezoneheatingmodeupdate", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["zoneheating"], "id", array()), "heatingmode" => "3")), "html", null, true);
            echo "'\"></button>
                    <button type=\"submit\" class=\"btn glyphicon glyphicon-leaf\" onclick=\"location.href = '";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_onezoneheatingmodeupdate", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["zoneheating"], "id", array()), "heatingmode" => "2")), "html", null, true);
            echo "'\"></button>
                    <button type=\"submit\" class=\"btn glyphicon glyphicon-fire\" onclick=\"location.href = '";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_onezoneheatingmodeupdate", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["zoneheating"], "id", array()), "heatingmode" => "1")), "html", null, true);
            echo "'\"></button>
                    <button type=\"submit\" class=\"btn glyphicon glyphicon-time\" onclick=\"location.href = '";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_onezoneheatingmodeupdate", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["zoneheating"], "id", array()), "heatingmode" => "4")), "html", null, true);
            echo "'\"></button>
                    <button type=\"submit\" class=\"btn glyphicon glyphicon-pencil\" onclick=\"location.href = '";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_action_heatingedit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["zoneheating"], "id", array()))), "html", null, true);
            echo "'\"></button>
                  </td>
                </tr>
\t\t\t  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 64
            echo "\t\t\t    <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No record in this table"), "html", null, true);
            echo ".</p>
\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zoneheating'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "              </tbody>
            </table>
          </div>
      </div>
<div class=\"panel-group\" id=\"accordion\" role=\"tablist\">
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\" role=\"tab\" id=\"headingHelp\">
            <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#help\" aria-expanded=\"true\"
               aria-controls=\"help\">
                <span class=\"glyphicon glyphicon-question-sign\"></span>
                Log
            </a>
        </div>
        <div id=\"help\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingHelp\"
             aria-expanded=\"false\">
            <div class=\"panel-body\">
              ";
        // line 82
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["heatinglog"]) || array_key_exists("heatinglog", $context) ? $context["heatinglog"] : (function () { throw new Twig_Error_Runtime('Variable "heatinglog" does not exist.', 82, $this->getSourceContext()); })()), 0, array()), "textlog", array()), "html", null, true));
        echo "
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_d40f8867b43771b34f7dd125d10f2a72b23dee7f5cdcbd30eb7e32a5b049e7b2->leave($__internal_d40f8867b43771b34f7dd125d10f2a72b23dee7f5cdcbd30eb7e32a5b049e7b2_prof);

        
        $__internal_e79831b3421e02d42dbffddb89bb0a94347311b67731e06c2da49438886f7da9->leave($__internal_e79831b3421e02d42dbffddb89bb0a94347311b67731e06c2da49438886f7da9_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Heating:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 82,  237 => 66,  228 => 64,  219 => 60,  215 => 59,  211 => 58,  207 => 57,  203 => 56,  199 => 54,  195 => 53,  191 => 51,  189 => 50,  185 => 49,  181 => 48,  177 => 47,  173 => 46,  169 => 45,  166 => 44,  161 => 43,  153 => 38,  149 => 37,  145 => 36,  141 => 35,  137 => 34,  133 => 33,  123 => 26,  119 => 25,  115 => 24,  110 => 23,  106 => 21,  102 => 20,  98 => 18,  96 => 17,  91 => 16,  89 => 15,  81 => 12,  75 => 9,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"LljmHomeBundle::layout.html.twig\" %}

{% block title %}
  Heating - {{ parent() }}
{% endblock %}

{% block lljm_home_body %}

  <h2>{{ 'Heating' | trans }}</h2>

        <div>
          <p><h3>{{ 'Outside temperature' | trans }} : {{ outsidetemp.0.currenttemp }}&deg;C</h3></p>
        </div>
        <div>
          {% if boilerzone is not empty %}
          <h3>{{ 'Boiler status' | trans }} :
            {% if heatinglog.0.boilerstatus == 1 %}
              <img src=\"/bundles/lljmhome/images/widgets/button/on-button.png\" style=\"width:25px;height:25px;\">
            {% else %}
              <img src=\"/bundles/lljmhome/images/widgets/button/off-button.png\" style=\"width:25px;height:25px;\">
            {% endif %}</h3>
          {% endif %}
          <button type=\"submit\" class=\"btn glyphicon glyphicon-asterisk\" onclick=\"location.href = '{{ path('home_zoneheatingmodeupdate') }}/3'\"></button>
          <button type=\"submit\" class=\"btn glyphicon glyphicon-leaf\" onclick=\"location.href = '{{ path('home_zoneheatingmodeupdate') }}/2'\"></button>
          <button type=\"submit\" class=\"btn glyphicon glyphicon-fire\" onclick=\"location.href = '{{ path('home_zoneheatingmodeupdate') }}/1'\"></button>
          <button type=\"submit\" class=\"btn glyphicon glyphicon-time\" onclick=\"location.href = '{{ path('home_zoneheatingmodeupdate') }}/4'\"></button>
        </div>
        <div>
          <div class=\"table-responsive\">
            <table class=\"table table-striped\">
              <thead>
                <tr>
                  <th>{{ 'Zone name' | trans }}</th>
                  <th>{{ 'Eco' | trans }}</th>
                  <th>{{ 'Comfort' | trans }}</th>
                  <th>{{ 'Current' | trans }}</th>
                  <th>{{ 'Mode' | trans }}</th>
                  <th>{{ 'Heating status' | trans }}</th>
                  <th>&nbsp;</th>
                </tr>
              </thead>
              <tbody>
\t\t\t  {% for zoneheating in zoneheatings %}
                <tr>
                  <td>{{ zoneheating.zonename | trans }}</td>
                  <td>{{ zoneheating.tempeco | trans }}&deg;C</td>
                  <td>{{ zoneheating.tempcomfort | trans }}&deg;C</td>
                  <td>{{ zoneheating.currenttemp | trans }}&deg;C</td>
                  <td>{{ zoneheating.modedesc | trans }}</td>
                  <td>{% if zoneheating.heatingstatus == 1 %}
                      <img src=\"/bundles/lljmhome/images/widgets/button/on-button.png\" style=\"width:25px;height:25px;\">
                      {% else %}
                      <img src=\"/bundles/lljmhome/images/widgets/button/off-button.png\" style=\"width:25px;height:25px;\">
                      {% endif %}</td>
                  <td>
                    <button type=\"submit\" class=\"btn glyphicon glyphicon-asterisk\" onclick=\"location.href = '{{ path('home_onezoneheatingmodeupdate', {'id': zoneheating.id, 'heatingmode': '3'}) }}'\"></button>
                    <button type=\"submit\" class=\"btn glyphicon glyphicon-leaf\" onclick=\"location.href = '{{ path('home_onezoneheatingmodeupdate', {'id': zoneheating.id, 'heatingmode': '2'}) }}'\"></button>
                    <button type=\"submit\" class=\"btn glyphicon glyphicon-fire\" onclick=\"location.href = '{{ path('home_onezoneheatingmodeupdate', {'id': zoneheating.id, 'heatingmode': '1'}) }}'\"></button>
                    <button type=\"submit\" class=\"btn glyphicon glyphicon-time\" onclick=\"location.href = '{{ path('home_onezoneheatingmodeupdate', {'id': zoneheating.id, 'heatingmode': '4'}) }}'\"></button>
                    <button type=\"submit\" class=\"btn glyphicon glyphicon-pencil\" onclick=\"location.href = '{{ path('home_action_heatingedit', {'id': zoneheating.id}) }}'\"></button>
                  </td>
                </tr>
\t\t\t  {% else %}
\t\t\t    <p>{{ 'No record in this table' | trans }}.</p>
\t\t\t  {% endfor %}
              </tbody>
            </table>
          </div>
      </div>
<div class=\"panel-group\" id=\"accordion\" role=\"tablist\">
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\" role=\"tab\" id=\"headingHelp\">
            <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#help\" aria-expanded=\"true\"
               aria-controls=\"help\">
                <span class=\"glyphicon glyphicon-question-sign\"></span>
                Log
            </a>
        </div>
        <div id=\"help\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingHelp\"
             aria-expanded=\"false\">
            <div class=\"panel-body\">
              {{ heatinglog.0.textlog | nl2br }}
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "LljmHomeBundle:Heating:index.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Heating/index.html.twig");
    }
}
