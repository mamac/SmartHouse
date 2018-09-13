<?php

/* LljmHomeBundle:Heating:index.html.twig */
class __TwigTemplate_3bc4f1011e037e88fc7e04d0d0dbad76b25aba485e6b2233c4e70eef7a66965c extends Twig_Template
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
        $__internal_69e25f6b6e78bafe227c73d835eb106e526caf450c3edf6f338c7a11aa323a3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69e25f6b6e78bafe227c73d835eb106e526caf450c3edf6f338c7a11aa323a3e->enter($__internal_69e25f6b6e78bafe227c73d835eb106e526caf450c3edf6f338c7a11aa323a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Heating:index.html.twig"));

        $__internal_f804441006aa7df4d9ae858563ce559b738ba999b4d4396c3ea0ffbc94fbc662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f804441006aa7df4d9ae858563ce559b738ba999b4d4396c3ea0ffbc94fbc662->enter($__internal_f804441006aa7df4d9ae858563ce559b738ba999b4d4396c3ea0ffbc94fbc662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Heating:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69e25f6b6e78bafe227c73d835eb106e526caf450c3edf6f338c7a11aa323a3e->leave($__internal_69e25f6b6e78bafe227c73d835eb106e526caf450c3edf6f338c7a11aa323a3e_prof);

        
        $__internal_f804441006aa7df4d9ae858563ce559b738ba999b4d4396c3ea0ffbc94fbc662->leave($__internal_f804441006aa7df4d9ae858563ce559b738ba999b4d4396c3ea0ffbc94fbc662_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cecf4b619ee53b1dc2d2b3a5fb2b5636bb27fba7e942831fb7465ab799e38f13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cecf4b619ee53b1dc2d2b3a5fb2b5636bb27fba7e942831fb7465ab799e38f13->enter($__internal_cecf4b619ee53b1dc2d2b3a5fb2b5636bb27fba7e942831fb7465ab799e38f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_37a629120f2d6b0cb7cead1b6f598c66026e71383f3526f3ad887ddb23a67f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37a629120f2d6b0cb7cead1b6f598c66026e71383f3526f3ad887ddb23a67f9f->enter($__internal_37a629120f2d6b0cb7cead1b6f598c66026e71383f3526f3ad887ddb23a67f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Heating - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_37a629120f2d6b0cb7cead1b6f598c66026e71383f3526f3ad887ddb23a67f9f->leave($__internal_37a629120f2d6b0cb7cead1b6f598c66026e71383f3526f3ad887ddb23a67f9f_prof);

        
        $__internal_cecf4b619ee53b1dc2d2b3a5fb2b5636bb27fba7e942831fb7465ab799e38f13->leave($__internal_cecf4b619ee53b1dc2d2b3a5fb2b5636bb27fba7e942831fb7465ab799e38f13_prof);

    }

    // line 7
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_dc9964c2989eba7c32f61735532a1fcc13c25f9e2225f3db6eea4bdb880a6fbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc9964c2989eba7c32f61735532a1fcc13c25f9e2225f3db6eea4bdb880a6fbd->enter($__internal_dc9964c2989eba7c32f61735532a1fcc13c25f9e2225f3db6eea4bdb880a6fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_8ddff2ac849e56f1372a15f74ab5c8b23fca75a8e7e38e25d3a65d185b93edcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ddff2ac849e56f1372a15f74ab5c8b23fca75a8e7e38e25d3a65d185b93edcd->enter($__internal_8ddff2ac849e56f1372a15f74ab5c8b23fca75a8e7e38e25d3a65d185b93edcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

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
            if ( !twig_test_empty((isset($context["heatinglog"]) || array_key_exists("heatinglog", $context) ? $context["heatinglog"] : (function () { throw new Twig_Error_Runtime('Variable "heatinglog" does not exist.', 17, $this->getSourceContext()); })()))) {
                // line 18
                echo "            ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["heatinglog"]) || array_key_exists("heatinglog", $context) ? $context["heatinglog"] : (function () { throw new Twig_Error_Runtime('Variable "heatinglog" does not exist.', 18, $this->getSourceContext()); })()), 0, array()), "boilerstatus", array()) == 1)) {
                    // line 19
                    echo "              <img src=\"/bundles/lljmhome/images/widgets/button/on-button.png\" style=\"width:25px;height:25px;\">
            ";
                } else {
                    // line 21
                    echo "              <img src=\"/bundles/lljmhome/images/widgets/button/off-button.png\" style=\"width:25px;height:25px;\">
            ";
                }
                // line 22
                echo "</h3>
          ";
            } else {
                // line 24
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Boiler status not available"), "html", null, true);
                echo "
          ";
            }
            // line 26
            echo "          ";
        }
        // line 27
        echo "          <button type=\"submit\" class=\"btn glyphicon glyphicon-asterisk\" onclick=\"location.href = '";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_zoneheatingmodeupdate");
        echo "/3'\"></button>
          <button type=\"submit\" class=\"btn glyphicon glyphicon-leaf\" onclick=\"location.href = '";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_zoneheatingmodeupdate");
        echo "/2'\"></button>
          <button type=\"submit\" class=\"btn glyphicon glyphicon-fire\" onclick=\"location.href = '";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_zoneheatingmodeupdate");
        echo "/1'\"></button>
          <button type=\"submit\" class=\"btn glyphicon glyphicon-time\" onclick=\"location.href = '";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_zoneheatingmodeupdate");
        echo "/4'\"></button>
        </div>
        <div>
          <div class=\"table-responsive\">
            <table class=\"table table-striped\">
              <thead>
                <tr>
                  <th>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Zone name"), "html", null, true);
        echo "</th>
                  <th>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Eco"), "html", null, true);
        echo "</th>
                  <th>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Comfort"), "html", null, true);
        echo "</th>
                  <th>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Current"), "html", null, true);
        echo "</th>
                  <th>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mode"), "html", null, true);
        echo "</th>
                  <th>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Heating status"), "html", null, true);
        echo "</th>
                  <th>&nbsp;</th>
                </tr>
              </thead>
              <tbody>
\t\t\t  ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["zoneheatings"]) || array_key_exists("zoneheatings", $context) ? $context["zoneheatings"] : (function () { throw new Twig_Error_Runtime('Variable "zoneheatings" does not exist.', 47, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["zoneheating"]) {
            // line 48
            echo "                <tr>
                  <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["zoneheating"], "zonename", array())), "html", null, true);
            echo "</td>
                  <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["zoneheating"], "tempeco", array())), "html", null, true);
            echo "&deg;C</td>
                  <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["zoneheating"], "tempcomfort", array())), "html", null, true);
            echo "&deg;C</td>
                  <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["zoneheating"], "currenttemp", array())), "html", null, true);
            echo "&deg;C</td>
                  <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["zoneheating"], "modedesc", array())), "html", null, true);
            echo "</td>
                  <td>";
            // line 54
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["zoneheating"], "heatingstatus", array()) == 1)) {
                // line 55
                echo "                      <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lljmhome/images/widgets/button/on-button.png"), "html", null, true);
                echo "\" style=\"width:25px;height:25px;\">
                      ";
            } else {
                // line 57
                echo "                      <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lljmhome/images/widgets/button/off-button.png"), "html", null, true);
                echo "\" style=\"width:25px;height:25px;\">
                      ";
            }
            // line 58
            echo "</td>
                  <td>
                    <button type=\"submit\" class=\"btn glyphicon glyphicon-asterisk\" onclick=\"location.href = '";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_onezoneheatingmodeupdate", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["zoneheating"], "id", array()), "heatingmode" => "3")), "html", null, true);
            echo "'\"></button>
                    <button type=\"submit\" class=\"btn glyphicon glyphicon-leaf\" onclick=\"location.href = '";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_onezoneheatingmodeupdate", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["zoneheating"], "id", array()), "heatingmode" => "2")), "html", null, true);
            echo "'\"></button>
                    <button type=\"submit\" class=\"btn glyphicon glyphicon-fire\" onclick=\"location.href = '";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_onezoneheatingmodeupdate", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["zoneheating"], "id", array()), "heatingmode" => "1")), "html", null, true);
            echo "'\"></button>
                    <button type=\"submit\" class=\"btn glyphicon glyphicon-time\" onclick=\"location.href = '";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_onezoneheatingmodeupdate", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["zoneheating"], "id", array()), "heatingmode" => "4")), "html", null, true);
            echo "'\"></button>
                    <button type=\"submit\" class=\"btn glyphicon glyphicon-pencil\" onclick=\"location.href = '";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_action_heatingedit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["zoneheating"], "id", array()))), "html", null, true);
            echo "'\"></button>
                  </td>
                </tr>
\t\t\t  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 68
            echo "\t\t\t    <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No record in this table"), "html", null, true);
            echo ".</p>
\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zoneheating'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
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
        // line 86
        if ( !twig_test_empty((isset($context["heatinglog"]) || array_key_exists("heatinglog", $context) ? $context["heatinglog"] : (function () { throw new Twig_Error_Runtime('Variable "heatinglog" does not exist.', 86, $this->getSourceContext()); })()))) {
            // line 87
            echo "              ";
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["heatinglog"]) || array_key_exists("heatinglog", $context) ? $context["heatinglog"] : (function () { throw new Twig_Error_Runtime('Variable "heatinglog" does not exist.', 87, $this->getSourceContext()); })()), 0, array()), "textlog", array()), "html", null, true));
            echo "
          ";
        } else {
            // line 89
            echo "              ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Heating log is empty"), "html", null, true);
            echo "
          ";
        }
        // line 90
        echo "          
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_8ddff2ac849e56f1372a15f74ab5c8b23fca75a8e7e38e25d3a65d185b93edcd->leave($__internal_8ddff2ac849e56f1372a15f74ab5c8b23fca75a8e7e38e25d3a65d185b93edcd_prof);

        
        $__internal_dc9964c2989eba7c32f61735532a1fcc13c25f9e2225f3db6eea4bdb880a6fbd->leave($__internal_dc9964c2989eba7c32f61735532a1fcc13c25f9e2225f3db6eea4bdb880a6fbd_prof);

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
        return array (  285 => 90,  279 => 89,  273 => 87,  271 => 86,  253 => 70,  244 => 68,  235 => 64,  231 => 63,  227 => 62,  223 => 61,  219 => 60,  215 => 58,  209 => 57,  203 => 55,  201 => 54,  197 => 53,  193 => 52,  189 => 51,  185 => 50,  181 => 49,  178 => 48,  173 => 47,  165 => 42,  161 => 41,  157 => 40,  153 => 39,  149 => 38,  145 => 37,  135 => 30,  131 => 29,  127 => 28,  122 => 27,  119 => 26,  113 => 24,  109 => 22,  105 => 21,  101 => 19,  98 => 18,  96 => 17,  91 => 16,  89 => 15,  81 => 12,  75 => 9,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
          {% if heatinglog is not empty %}
            {% if heatinglog.0.boilerstatus == 1 %}
              <img src=\"/bundles/lljmhome/images/widgets/button/on-button.png\" style=\"width:25px;height:25px;\">
            {% else %}
              <img src=\"/bundles/lljmhome/images/widgets/button/off-button.png\" style=\"width:25px;height:25px;\">
            {% endif %}</h3>
          {% else %}
            {{ 'Boiler status not available' | trans}}
          {% endif %}
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
                      <img src=\"{{ asset('bundles/lljmhome/images/widgets/button/on-button.png') }}\" style=\"width:25px;height:25px;\">
                      {% else %}
                      <img src=\"{{ asset('bundles/lljmhome/images/widgets/button/off-button.png') }}\" style=\"width:25px;height:25px;\">
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
          {% if heatinglog is not empty %}
              {{ heatinglog.0.textlog | nl2br }}
          {% else %}
              {{ 'Heating log is empty' | trans}}
          {% endif %}          
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "LljmHomeBundle:Heating:index.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Heating/index.html.twig");
    }
}
