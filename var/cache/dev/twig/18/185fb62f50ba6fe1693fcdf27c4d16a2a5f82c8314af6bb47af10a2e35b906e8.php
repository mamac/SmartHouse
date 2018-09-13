<?php

/* LljmHomeBundle:House:house.html.twig */
class __TwigTemplate_4b5fcba154592b7d3a48bf19d0b65b02843638b33bfc03cb45b218f1cb2a39f2 extends Twig_Template
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
        $__internal_02c7014def58a5416322d96d6153db7ef4e7aaed932a39782c878a9dfdfe6e93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02c7014def58a5416322d96d6153db7ef4e7aaed932a39782c878a9dfdfe6e93->enter($__internal_02c7014def58a5416322d96d6153db7ef4e7aaed932a39782c878a9dfdfe6e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:House:house.html.twig"));

        $__internal_95e67843ab5d1dc3fcd1c141fc730d4e7ffb5d8204658d4676e16319ba414d22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95e67843ab5d1dc3fcd1c141fc730d4e7ffb5d8204658d4676e16319ba414d22->enter($__internal_95e67843ab5d1dc3fcd1c141fc730d4e7ffb5d8204658d4676e16319ba414d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:House:house.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02c7014def58a5416322d96d6153db7ef4e7aaed932a39782c878a9dfdfe6e93->leave($__internal_02c7014def58a5416322d96d6153db7ef4e7aaed932a39782c878a9dfdfe6e93_prof);

        
        $__internal_95e67843ab5d1dc3fcd1c141fc730d4e7ffb5d8204658d4676e16319ba414d22->leave($__internal_95e67843ab5d1dc3fcd1c141fc730d4e7ffb5d8204658d4676e16319ba414d22_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_90def6228c0f622069dbfd75df25cc10845437fdb192c3e065ff0a8cd4d300ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90def6228c0f622069dbfd75df25cc10845437fdb192c3e065ff0a8cd4d300ba->enter($__internal_90def6228c0f622069dbfd75df25cc10845437fdb192c3e065ff0a8cd4d300ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6b8d4479dce97857afb5928a18e2dfc484a12bab47ef5365a6a7d683dbe94193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b8d4479dce97857afb5928a18e2dfc484a12bab47ef5365a6a7d683dbe94193->enter($__internal_6b8d4479dce97857afb5928a18e2dfc484a12bab47ef5365a6a7d683dbe94193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  House - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6b8d4479dce97857afb5928a18e2dfc484a12bab47ef5365a6a7d683dbe94193->leave($__internal_6b8d4479dce97857afb5928a18e2dfc484a12bab47ef5365a6a7d683dbe94193_prof);

        
        $__internal_90def6228c0f622069dbfd75df25cc10845437fdb192c3e065ff0a8cd4d300ba->leave($__internal_90def6228c0f622069dbfd75df25cc10845437fdb192c3e065ff0a8cd4d300ba_prof);

    }

    // line 7
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_4e7d1642ccb0508f46515e4460b1837d108de483c62a65668749bee5d74de11e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e7d1642ccb0508f46515e4460b1837d108de483c62a65668749bee5d74de11e->enter($__internal_4e7d1642ccb0508f46515e4460b1837d108de483c62a65668749bee5d74de11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_73646819bca5a319fe3e7fbee6cc3a6abe638deb5c50744a6aa1525487012a29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73646819bca5a319fe3e7fbee6cc3a6abe638deb5c50744a6aa1525487012a29->enter($__internal_73646819bca5a319fe3e7fbee6cc3a6abe638deb5c50744a6aa1525487012a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

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
        
        $__internal_73646819bca5a319fe3e7fbee6cc3a6abe638deb5c50744a6aa1525487012a29->leave($__internal_73646819bca5a319fe3e7fbee6cc3a6abe638deb5c50744a6aa1525487012a29_prof);

        
        $__internal_4e7d1642ccb0508f46515e4460b1837d108de483c62a65668749bee5d74de11e->leave($__internal_4e7d1642ccb0508f46515e4460b1837d108de483c62a65668749bee5d74de11e_prof);

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
