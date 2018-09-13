<?php

/* LljmHomeBundle:Zone:zone.html.twig */
class __TwigTemplate_639e20cd6f92d0bf299ddcb8d7d2dc6679eb60c880d5ea728fa323745220d96f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Zone:zone.html.twig", 1);
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
        $__internal_7374b7460adb3c7e33d87c99fc5cc6fa370265be64e380cc823ff508b42f4f1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7374b7460adb3c7e33d87c99fc5cc6fa370265be64e380cc823ff508b42f4f1c->enter($__internal_7374b7460adb3c7e33d87c99fc5cc6fa370265be64e380cc823ff508b42f4f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Zone:zone.html.twig"));

        $__internal_aaf961a883e114a33d4b81da4cb1e66580d48d1cf1763fffa82d17be2d9280b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf961a883e114a33d4b81da4cb1e66580d48d1cf1763fffa82d17be2d9280b5->enter($__internal_aaf961a883e114a33d4b81da4cb1e66580d48d1cf1763fffa82d17be2d9280b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Zone:zone.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7374b7460adb3c7e33d87c99fc5cc6fa370265be64e380cc823ff508b42f4f1c->leave($__internal_7374b7460adb3c7e33d87c99fc5cc6fa370265be64e380cc823ff508b42f4f1c_prof);

        
        $__internal_aaf961a883e114a33d4b81da4cb1e66580d48d1cf1763fffa82d17be2d9280b5->leave($__internal_aaf961a883e114a33d4b81da4cb1e66580d48d1cf1763fffa82d17be2d9280b5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d975492fdb1a1b1389087cfd85f358fc38cad6d55c369df9635e8fbf2fc0e76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d975492fdb1a1b1389087cfd85f358fc38cad6d55c369df9635e8fbf2fc0e76->enter($__internal_7d975492fdb1a1b1389087cfd85f358fc38cad6d55c369df9635e8fbf2fc0e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5c0fcf78008eee69de2c7bb42767b6d899ae362405e12da1365c31b83af06cb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c0fcf78008eee69de2c7bb42767b6d899ae362405e12da1365c31b83af06cb4->enter($__internal_5c0fcf78008eee69de2c7bb42767b6d899ae362405e12da1365c31b83af06cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Zones - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5c0fcf78008eee69de2c7bb42767b6d899ae362405e12da1365c31b83af06cb4->leave($__internal_5c0fcf78008eee69de2c7bb42767b6d899ae362405e12da1365c31b83af06cb4_prof);

        
        $__internal_7d975492fdb1a1b1389087cfd85f358fc38cad6d55c369df9635e8fbf2fc0e76->leave($__internal_7d975492fdb1a1b1389087cfd85f358fc38cad6d55c369df9635e8fbf2fc0e76_prof);

    }

    // line 7
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_ba9717fcd4b70d7ee95ddd551f0da77ab682df8309280ed67e3619a3acd64ef2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba9717fcd4b70d7ee95ddd551f0da77ab682df8309280ed67e3619a3acd64ef2->enter($__internal_ba9717fcd4b70d7ee95ddd551f0da77ab682df8309280ed67e3619a3acd64ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_2165f8f7cd496d86452ff3ade31d4ab5a64d9caa047ce19aa5bb8cb0f0a30785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2165f8f7cd496d86452ff3ade31d4ab5a64d9caa047ce19aa5bb8cb0f0a30785->enter($__internal_2165f8f7cd496d86452ff3ade31d4ab5a64d9caa047ce19aa5bb8cb0f0a30785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        // line 8
        echo "
  <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Zones"), "html", null, true);
        echo "</h2>

        <div>
          <a class=\"btn btn-default btn-sm glyphicon glyphicon-plus\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_zoneadd");
        echo "\">
            ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
        echo "
          </a>
        </div>

        <div>
          <div class=\"table-responsive\">
            <table class=\"table table-striped\">
              <thead>
                <tr>
                  <th>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID"), "html", null, true);
        echo "</th>
                  <th>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Zone name"), "html", null, true);
        echo "</th>
                  <th>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Heated zone"), "html", null, true);
        echo "</th>
                  <th>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Current temperature"), "html", null, true);
        echo "</th>
                  <th>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Heating status"), "html", null, true);
        echo "</th>
                  <th colspan = 2>&nbsp;</th>
                </tr>
              </thead>
              <tbody>
\t\t\t  ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["zones"]) || array_key_exists("zones", $context) ? $context["zones"] : (function () { throw new Twig_Error_Runtime('Variable "zones" does not exist.', 31, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["zone"]) {
            // line 32
            echo "                <tr>
                  <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["zone"], "id", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["zone"], "zonename", array())), "html", null, true);
            echo "</td>
                  <td>";
            // line 35
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["zone"], "heatingenabled", array()) == 1)) {
                // line 36
                echo "                      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes"), "html", null, true);
                echo "
                      ";
            }
            // line 37
            echo "</td>
                  <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["zone"], "currenttemp", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 39
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["zone"], "heatingstatus", array()) == 1)) {
                // line 40
                echo "                      ";
                echo "On";
                echo "
                      ";
            } else {
                // line 42
                echo "                      ";
                echo "Off";
                echo "
                      ";
            }
            // line 43
            echo "</td>
                  <td>
                    <a class=\"btn glyphicon glyphicon-pencil red\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_zoneedit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["zone"], "id", array()))), "html", null, true);
            echo "\">
                    <a class=\"btn glyphicon glyphicon-trash red \" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_zonedel", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["zone"], "id", array()))), "html", null, true);
            echo "\">
                   </td>
                </tr>
\t\t\t  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 50
            echo "\t\t\t    <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No record in this table"), "html", null, true);
            echo ".</p>
\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "              </tbody>
            </table>
          </div>
      </div>

";
        
        $__internal_2165f8f7cd496d86452ff3ade31d4ab5a64d9caa047ce19aa5bb8cb0f0a30785->leave($__internal_2165f8f7cd496d86452ff3ade31d4ab5a64d9caa047ce19aa5bb8cb0f0a30785_prof);

        
        $__internal_ba9717fcd4b70d7ee95ddd551f0da77ab682df8309280ed67e3619a3acd64ef2->leave($__internal_ba9717fcd4b70d7ee95ddd551f0da77ab682df8309280ed67e3619a3acd64ef2_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Zone:zone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 52,  183 => 50,  174 => 46,  170 => 45,  166 => 43,  160 => 42,  154 => 40,  152 => 39,  148 => 38,  145 => 37,  139 => 36,  137 => 35,  133 => 34,  129 => 33,  126 => 32,  121 => 31,  113 => 26,  109 => 25,  105 => 24,  101 => 23,  97 => 22,  85 => 13,  81 => 12,  75 => 9,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"LljmHomeBundle::layout.html.twig\" %}

{% block title %}
  Zones - {{ parent() }}
{% endblock %}

{% block lljm_home_body %}

  <h2>{{ 'Zones' | trans }}</h2>

        <div>
          <a class=\"btn btn-default btn-sm glyphicon glyphicon-plus\" href=\"{{ path('home_zoneadd') }}\">
            {{ 'Add' | trans }}
          </a>
        </div>

        <div>
          <div class=\"table-responsive\">
            <table class=\"table table-striped\">
              <thead>
                <tr>
                  <th>{{ 'ID' | trans }}</th>
                  <th>{{ 'Zone name' | trans }}</th>
                  <th>{{ 'Heated zone' | trans }}</th>
                  <th>{{ 'Current temperature' | trans }}</th>
                  <th>{{ 'Heating status' | trans }}</th>
                  <th colspan = 2>&nbsp;</th>
                </tr>
              </thead>
              <tbody>
\t\t\t  {% for zone in zones %}
                <tr>
                  <td>{{ zone.id}}</td>
                  <td>{{ zone.zonename | trans }}</td>
                  <td>{% if zone.heatingenabled == 1 %}
                      {{ 'Yes' | trans }}
                      {% endif %}</td>
                  <td>{{ zone.currenttemp }}</td>
                  <td>{% if zone.heatingstatus == 1 %}
                      {{ 'On' }}
                      {% else %}
                      {{ 'Off' }}
                      {% endif %}</td>
                  <td>
                    <a class=\"btn glyphicon glyphicon-pencil red\" href=\"{{ path('home_zoneedit', {'id': zone.id}) }}\">
                    <a class=\"btn glyphicon glyphicon-trash red \" href=\"{{ path('home_zonedel', {'id': zone.id}) }}\">
                   </td>
                </tr>
\t\t\t  {% else %}
\t\t\t    <p>{{ 'No record in this table' | trans }}.</p>
\t\t\t  {% endfor %}
              </tbody>
            </table>
          </div>
      </div>

{% endblock %}
", "LljmHomeBundle:Zone:zone.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Zone/zone.html.twig");
    }
}
