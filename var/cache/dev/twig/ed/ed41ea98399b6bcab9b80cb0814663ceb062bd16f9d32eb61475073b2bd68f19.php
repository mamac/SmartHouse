<?php

/* LljmHomeBundle:Meter:meter.html.twig */
class __TwigTemplate_f8788e6ecffd993a9dd2a6cec25ec801f56e6f9507514ece11c17311e9547fe6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Meter:meter.html.twig", 1);
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
        $__internal_5d4d3ad2d7c71bea914f019ecd7b7c91e4d87bdbd46fdd92dcc865394929b6d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d4d3ad2d7c71bea914f019ecd7b7c91e4d87bdbd46fdd92dcc865394929b6d5->enter($__internal_5d4d3ad2d7c71bea914f019ecd7b7c91e4d87bdbd46fdd92dcc865394929b6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Meter:meter.html.twig"));

        $__internal_e667486f9ff9072263f10205ddc13e8c9bd1420c82502981ff439d7a9f4b1ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e667486f9ff9072263f10205ddc13e8c9bd1420c82502981ff439d7a9f4b1ee8->enter($__internal_e667486f9ff9072263f10205ddc13e8c9bd1420c82502981ff439d7a9f4b1ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Meter:meter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d4d3ad2d7c71bea914f019ecd7b7c91e4d87bdbd46fdd92dcc865394929b6d5->leave($__internal_5d4d3ad2d7c71bea914f019ecd7b7c91e4d87bdbd46fdd92dcc865394929b6d5_prof);

        
        $__internal_e667486f9ff9072263f10205ddc13e8c9bd1420c82502981ff439d7a9f4b1ee8->leave($__internal_e667486f9ff9072263f10205ddc13e8c9bd1420c82502981ff439d7a9f4b1ee8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_97c41b0616b45a2e869226aa7106e9a087a136dd1f52b58a26e4c3224775113e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97c41b0616b45a2e869226aa7106e9a087a136dd1f52b58a26e4c3224775113e->enter($__internal_97c41b0616b45a2e869226aa7106e9a087a136dd1f52b58a26e4c3224775113e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_265070c29d2e42fde4113db7d88d70441523f71686c9d1bca7d85e886e1c7d1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_265070c29d2e42fde4113db7d88d70441523f71686c9d1bca7d85e886e1c7d1f->enter($__internal_265070c29d2e42fde4113db7d88d70441523f71686c9d1bca7d85e886e1c7d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Meters - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_265070c29d2e42fde4113db7d88d70441523f71686c9d1bca7d85e886e1c7d1f->leave($__internal_265070c29d2e42fde4113db7d88d70441523f71686c9d1bca7d85e886e1c7d1f_prof);

        
        $__internal_97c41b0616b45a2e869226aa7106e9a087a136dd1f52b58a26e4c3224775113e->leave($__internal_97c41b0616b45a2e869226aa7106e9a087a136dd1f52b58a26e4c3224775113e_prof);

    }

    // line 7
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_27e9381f1440cb86aac130dd2b93340dea4adfa77ab953d32eda616c72d57225 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27e9381f1440cb86aac130dd2b93340dea4adfa77ab953d32eda616c72d57225->enter($__internal_27e9381f1440cb86aac130dd2b93340dea4adfa77ab953d32eda616c72d57225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_efaa4e7134e97ac635bbc431bf056fc8a9b362545da9bf109e9610f5d7f57239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efaa4e7134e97ac635bbc431bf056fc8a9b362545da9bf109e9610f5d7f57239->enter($__internal_efaa4e7134e97ac635bbc431bf056fc8a9b362545da9bf109e9610f5d7f57239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        // line 8
        echo "
  <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Meters"), "html", null, true);
        echo "</h2>

        <div>
          <a class=\"btn btn-default btn-sm glyphicon glyphicon-plus\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_meteradd");
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
        echo "</th>
                  <th>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Resource"), "html", null, true);
        echo "</th>
                  <th>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unit"), "html", null, true);
        echo "</th>
                  <th colspan = 2>&nbsp;</th>
                </tr>
              </thead>
              <tbody>
\t\t\t  ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["meters"]) || array_key_exists("meters", $context) ? $context["meters"] : (function () { throw new Twig_Error_Runtime('Variable "meters" does not exist.', 30, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["meter"]) {
            // line 31
            echo "                <tr>
                  <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["meter"], "id", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["meter"], "metername", array())), "html", null, true);
            echo "</td>
                  <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["meter"], "resourcename", array())), "html", null, true);
            echo "</td>
                  <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["meter"], "unitname", array())), "html", null, true);
            echo "</td>
                  <td>
                    <a class=\"btn glyphicon glyphicon-pencil red\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_meteredit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["meter"], "id", array()))), "html", null, true);
            echo "\">
                    <a class=\"btn glyphicon glyphicon-trash red \" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_meterdel", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["meter"], "id", array()))), "html", null, true);
            echo "\">
                   </td>
                </tr>
\t\t\t  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "\t\t\t    <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No record in this table"), "html", null, true);
            echo ".</p>
\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "              </tbody>
            </table>
          </div>
      </div>

";
        
        $__internal_efaa4e7134e97ac635bbc431bf056fc8a9b362545da9bf109e9610f5d7f57239->leave($__internal_efaa4e7134e97ac635bbc431bf056fc8a9b362545da9bf109e9610f5d7f57239_prof);

        
        $__internal_27e9381f1440cb86aac130dd2b93340dea4adfa77ab953d32eda616c72d57225->leave($__internal_27e9381f1440cb86aac130dd2b93340dea4adfa77ab953d32eda616c72d57225_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Meter:meter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 44,  155 => 42,  146 => 38,  142 => 37,  137 => 35,  133 => 34,  129 => 33,  125 => 32,  122 => 31,  117 => 30,  109 => 25,  105 => 24,  101 => 23,  97 => 22,  85 => 13,  81 => 12,  75 => 9,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"LljmHomeBundle::layout.html.twig\" %}

{% block title %}
  Meters - {{ parent() }}
{% endblock %}

{% block lljm_home_body %}

  <h2>{{ 'Meters' | trans }}</h2>

        <div>
          <a class=\"btn btn-default btn-sm glyphicon glyphicon-plus\" href=\"{{ path('home_meteradd') }}\">
            {{ 'Add' | trans }}
          </a>
        </div>

        <div>
          <div class=\"table-responsive\">
            <table class=\"table table-striped\">
              <thead>
                <tr>
                  <th>{{ 'ID' | trans }}</th>
                  <th>{{ 'Description' | trans }}</th>
                  <th>{{ 'Resource' | trans }}</th>
                  <th>{{ 'Unit' | trans }}</th>
                  <th colspan = 2>&nbsp;</th>
                </tr>
              </thead>
              <tbody>
\t\t\t  {% for meter in meters %}
                <tr>
                  <td>{{ meter.id }}</td>
                  <td>{{ meter.metername | trans }}</td>
                  <td>{{ meter.resourcename | trans }}</td>
                  <td>{{ meter.unitname | trans }}</td>
                  <td>
                    <a class=\"btn glyphicon glyphicon-pencil red\" href=\"{{ path('home_meteredit', {'id': meter.id}) }}\">
                    <a class=\"btn glyphicon glyphicon-trash red \" href=\"{{ path('home_meterdel', {'id': meter.id}) }}\">
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
", "LljmHomeBundle:Meter:meter.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Meter/meter.html.twig");
    }
}
