<?php

/* LljmHomeBundle:Zone:zone.html.twig */
class __TwigTemplate_5a5567d4057625c500d301842306d68e68a6ab2d6a33c5e9db813c5746795b23 extends Twig_Template
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
        $__internal_a2f516292914ec87452a81688a48280f6b1282b4c4af74073d5db09b03e9298f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2f516292914ec87452a81688a48280f6b1282b4c4af74073d5db09b03e9298f->enter($__internal_a2f516292914ec87452a81688a48280f6b1282b4c4af74073d5db09b03e9298f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Zone:zone.html.twig"));

        $__internal_bdcef0b1c8da4cad5a0bd2f30b07e43328fedc0ad7843d90b9d70f6b15b726c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdcef0b1c8da4cad5a0bd2f30b07e43328fedc0ad7843d90b9d70f6b15b726c9->enter($__internal_bdcef0b1c8da4cad5a0bd2f30b07e43328fedc0ad7843d90b9d70f6b15b726c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Zone:zone.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2f516292914ec87452a81688a48280f6b1282b4c4af74073d5db09b03e9298f->leave($__internal_a2f516292914ec87452a81688a48280f6b1282b4c4af74073d5db09b03e9298f_prof);

        
        $__internal_bdcef0b1c8da4cad5a0bd2f30b07e43328fedc0ad7843d90b9d70f6b15b726c9->leave($__internal_bdcef0b1c8da4cad5a0bd2f30b07e43328fedc0ad7843d90b9d70f6b15b726c9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bce7aa5e5a9d919405a44b12743d06d0cc2311b244dcf8ab31a35ad50de8a757 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bce7aa5e5a9d919405a44b12743d06d0cc2311b244dcf8ab31a35ad50de8a757->enter($__internal_bce7aa5e5a9d919405a44b12743d06d0cc2311b244dcf8ab31a35ad50de8a757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b23c1e871e11b63b3cd90e17642279564fdfa9c0241d3a24ce05db774709f7d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b23c1e871e11b63b3cd90e17642279564fdfa9c0241d3a24ce05db774709f7d8->enter($__internal_b23c1e871e11b63b3cd90e17642279564fdfa9c0241d3a24ce05db774709f7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Zones - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b23c1e871e11b63b3cd90e17642279564fdfa9c0241d3a24ce05db774709f7d8->leave($__internal_b23c1e871e11b63b3cd90e17642279564fdfa9c0241d3a24ce05db774709f7d8_prof);

        
        $__internal_bce7aa5e5a9d919405a44b12743d06d0cc2311b244dcf8ab31a35ad50de8a757->leave($__internal_bce7aa5e5a9d919405a44b12743d06d0cc2311b244dcf8ab31a35ad50de8a757_prof);

    }

    // line 7
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_18540454097a882a45b3c1403438f89f8ce6153af54866cfeba6be0e4c1e3da5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18540454097a882a45b3c1403438f89f8ce6153af54866cfeba6be0e4c1e3da5->enter($__internal_18540454097a882a45b3c1403438f89f8ce6153af54866cfeba6be0e4c1e3da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_4604f855200019fd80ab0737e4c7d2c496929a7358f5ed694fbac070cf2cb9dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4604f855200019fd80ab0737e4c7d2c496929a7358f5ed694fbac070cf2cb9dc->enter($__internal_4604f855200019fd80ab0737e4c7d2c496929a7358f5ed694fbac070cf2cb9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

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
        
        $__internal_4604f855200019fd80ab0737e4c7d2c496929a7358f5ed694fbac070cf2cb9dc->leave($__internal_4604f855200019fd80ab0737e4c7d2c496929a7358f5ed694fbac070cf2cb9dc_prof);

        
        $__internal_18540454097a882a45b3c1403438f89f8ce6153af54866cfeba6be0e4c1e3da5->leave($__internal_18540454097a882a45b3c1403438f89f8ce6153af54866cfeba6be0e4c1e3da5_prof);

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
