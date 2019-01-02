<?php

/* LljmHomeBundle:House:house.html.twig */
class __TwigTemplate_d17c222364d8bb9394a18069f3ca4870da5368ce01782c019922640262c12649 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:House:house.html.twig", 1);
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
        $__internal_e216df216bee314c9198fe3220f78f6a3ee2585ef16a8430c96d86e2d19271cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e216df216bee314c9198fe3220f78f6a3ee2585ef16a8430c96d86e2d19271cd->enter($__internal_e216df216bee314c9198fe3220f78f6a3ee2585ef16a8430c96d86e2d19271cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:House:house.html.twig"));

        $__internal_85d04d8a645ba3e461f9d983ecf38969ff21bdb33a0610482fe0236e32c9d10a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85d04d8a645ba3e461f9d983ecf38969ff21bdb33a0610482fe0236e32c9d10a->enter($__internal_85d04d8a645ba3e461f9d983ecf38969ff21bdb33a0610482fe0236e32c9d10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:House:house.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e216df216bee314c9198fe3220f78f6a3ee2585ef16a8430c96d86e2d19271cd->leave($__internal_e216df216bee314c9198fe3220f78f6a3ee2585ef16a8430c96d86e2d19271cd_prof);

        
        $__internal_85d04d8a645ba3e461f9d983ecf38969ff21bdb33a0610482fe0236e32c9d10a->leave($__internal_85d04d8a645ba3e461f9d983ecf38969ff21bdb33a0610482fe0236e32c9d10a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd8d415d851cf96a1eae983d3e0729c62818b35110ef8307225e439e4dae332e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd8d415d851cf96a1eae983d3e0729c62818b35110ef8307225e439e4dae332e->enter($__internal_dd8d415d851cf96a1eae983d3e0729c62818b35110ef8307225e439e4dae332e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a3122b846cd9a072094180d5b236957d890bb1cf9ddae83085eeece9de35bf8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3122b846cd9a072094180d5b236957d890bb1cf9ddae83085eeece9de35bf8a->enter($__internal_a3122b846cd9a072094180d5b236957d890bb1cf9ddae83085eeece9de35bf8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  House - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a3122b846cd9a072094180d5b236957d890bb1cf9ddae83085eeece9de35bf8a->leave($__internal_a3122b846cd9a072094180d5b236957d890bb1cf9ddae83085eeece9de35bf8a_prof);

        
        $__internal_dd8d415d851cf96a1eae983d3e0729c62818b35110ef8307225e439e4dae332e->leave($__internal_dd8d415d851cf96a1eae983d3e0729c62818b35110ef8307225e439e4dae332e_prof);

    }

    // line 7
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_fdbcd47616612bfbd8e9c0409336bc77341db21abf762a43656e08a98ce23129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdbcd47616612bfbd8e9c0409336bc77341db21abf762a43656e08a98ce23129->enter($__internal_fdbcd47616612bfbd8e9c0409336bc77341db21abf762a43656e08a98ce23129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_1471034c95333204113704e6ef1a4739ce245c48f161b2351652d7377f7a3f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1471034c95333204113704e6ef1a4739ce245c48f161b2351652d7377f7a3f80->enter($__internal_1471034c95333204113704e6ef1a4739ce245c48f161b2351652d7377f7a3f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        // line 8
        echo "
  <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("House"), "html", null, true);
        echo "</h2>

        <div>
          <a class=\"btn btn-default btn-sm glyphicon glyphicon-plus\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_houseadd");
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Address 1"), "html", null, true);
        echo "</th>
                  <th>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Address 2"), "html", null, true);
        echo "</th>
                  <th>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Postal code"), "html", null, true);
        echo "</th>
                  <th>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("City"), "html", null, true);
        echo "</th>
                  <th>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Country"), "html", null, true);
        echo "</th>
                  <th colspan = 2>&nbsp;</th>
                </tr>
              </thead>
              <tbody>
\t\t\t  ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["houses"]) || array_key_exists("houses", $context) ? $context["houses"] : (function () { throw new Twig_Error_Runtime('Variable "houses" does not exist.', 31, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["house"]) {
            // line 32
            echo "                <tr>
                  <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["house"], "address1", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["house"], "address2", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["house"], "postcode", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["house"], "city", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["house"], "country", array()), "html", null, true);
            echo "</td>
                  <td>
                    <a class=\"btn glyphicon glyphicon-pencil red\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_houseedit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["house"], "id", array()))), "html", null, true);
            echo "\">
                    <a class=\"btn glyphicon glyphicon-trash red \" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_housedel", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["house"], "id", array()))), "html", null, true);
            echo "\">
                   </td>
                </tr>
\t\t\t  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            echo "\t\t\t    <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No record in this table"), "html", null, true);
            echo ".</p>
\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['house'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "              </tbody>
            </table>
          </div>
      </div>

";
        
        $__internal_1471034c95333204113704e6ef1a4739ce245c48f161b2351652d7377f7a3f80->leave($__internal_1471034c95333204113704e6ef1a4739ce245c48f161b2351652d7377f7a3f80_prof);

        
        $__internal_fdbcd47616612bfbd8e9c0409336bc77341db21abf762a43656e08a98ce23129->leave($__internal_fdbcd47616612bfbd8e9c0409336bc77341db21abf762a43656e08a98ce23129_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:House:house.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 46,  163 => 44,  154 => 40,  150 => 39,  145 => 37,  141 => 36,  137 => 35,  133 => 34,  129 => 33,  126 => 32,  121 => 31,  113 => 26,  109 => 25,  105 => 24,  101 => 23,  97 => 22,  85 => 13,  81 => 12,  75 => 9,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"LljmHomeBundle::layout.html.twig\" %}

{% block title %}
  House - {{ parent() }}
{% endblock %}

{% block lljm_home_body %}

  <h2>{{ 'House' | trans }}</h2>

        <div>
          <a class=\"btn btn-default btn-sm glyphicon glyphicon-plus\" href=\"{{ path('home_houseadd') }}\">
            {{ 'Add' | trans }}
          </a>
        </div>

        <div>
          <div class=\"table-responsive\">
            <table class=\"table table-striped\">
              <thead>
                <tr>
                  <th>{{ 'Address 1' | trans }}</th>
                  <th>{{ 'Address 2' | trans }}</th>
                  <th>{{ 'Postal code' | trans }}</th>
                  <th>{{ 'City' | trans }}</th>
                  <th>{{ 'Country' | trans }}</th>
                  <th colspan = 2>&nbsp;</th>
                </tr>
              </thead>
              <tbody>
\t\t\t  {% for house in houses %}
                <tr>
                  <td>{{ house.address1 }}</td>
                  <td>{{ house.address2 }}</td>
                  <td>{{ house.postcode }}</td>
                  <td>{{ house.city }}</td>
                  <td>{{ house.country }}</td>
                  <td>
                    <a class=\"btn glyphicon glyphicon-pencil red\" href=\"{{ path('home_houseedit', {'id': house.id}) }}\">
                    <a class=\"btn glyphicon glyphicon-trash red \" href=\"{{ path('home_housedel', {'id': house.id}) }}\">
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
", "LljmHomeBundle:House:house.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/House/house.html.twig");
    }
}
