<?php

/* LljmHomeBundle:House:house.html.twig */
class __TwigTemplate_4a3688b0fc7c4fc951922987c234ec791941e57c0b647170991c1e0b26d14ec3 extends Twig_Template
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
        $__internal_6fd30235005ee769e6f0c2f2b12e3fba5c7499e3bfc0b02d176d874d668aba37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fd30235005ee769e6f0c2f2b12e3fba5c7499e3bfc0b02d176d874d668aba37->enter($__internal_6fd30235005ee769e6f0c2f2b12e3fba5c7499e3bfc0b02d176d874d668aba37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:House:house.html.twig"));

        $__internal_70b3a32401041788ec2f74067349e8bb132fd043123eeab6be8680fb6379e821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70b3a32401041788ec2f74067349e8bb132fd043123eeab6be8680fb6379e821->enter($__internal_70b3a32401041788ec2f74067349e8bb132fd043123eeab6be8680fb6379e821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:House:house.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fd30235005ee769e6f0c2f2b12e3fba5c7499e3bfc0b02d176d874d668aba37->leave($__internal_6fd30235005ee769e6f0c2f2b12e3fba5c7499e3bfc0b02d176d874d668aba37_prof);

        
        $__internal_70b3a32401041788ec2f74067349e8bb132fd043123eeab6be8680fb6379e821->leave($__internal_70b3a32401041788ec2f74067349e8bb132fd043123eeab6be8680fb6379e821_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f612381dfa7970c166a01b69b74876f4e63812618cff650285254a7c89b36fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f612381dfa7970c166a01b69b74876f4e63812618cff650285254a7c89b36fe->enter($__internal_9f612381dfa7970c166a01b69b74876f4e63812618cff650285254a7c89b36fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d2bff6e625d8b5734b2b573e88443ee953bdbba285bfd40e01f528028fb4f929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2bff6e625d8b5734b2b573e88443ee953bdbba285bfd40e01f528028fb4f929->enter($__internal_d2bff6e625d8b5734b2b573e88443ee953bdbba285bfd40e01f528028fb4f929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  House - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d2bff6e625d8b5734b2b573e88443ee953bdbba285bfd40e01f528028fb4f929->leave($__internal_d2bff6e625d8b5734b2b573e88443ee953bdbba285bfd40e01f528028fb4f929_prof);

        
        $__internal_9f612381dfa7970c166a01b69b74876f4e63812618cff650285254a7c89b36fe->leave($__internal_9f612381dfa7970c166a01b69b74876f4e63812618cff650285254a7c89b36fe_prof);

    }

    // line 7
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_b2741ef84c423a5e797b59a39b887e3ee159a5fca806efefa2021e284aaa3c05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2741ef84c423a5e797b59a39b887e3ee159a5fca806efefa2021e284aaa3c05->enter($__internal_b2741ef84c423a5e797b59a39b887e3ee159a5fca806efefa2021e284aaa3c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_5895b5f5740bcd6b7df14b05dc5c4b49c0a05fac16957144f8c05402e7489ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5895b5f5740bcd6b7df14b05dc5c4b49c0a05fac16957144f8c05402e7489ae5->enter($__internal_5895b5f5740bcd6b7df14b05dc5c4b49c0a05fac16957144f8c05402e7489ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

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
        
        $__internal_5895b5f5740bcd6b7df14b05dc5c4b49c0a05fac16957144f8c05402e7489ae5->leave($__internal_5895b5f5740bcd6b7df14b05dc5c4b49c0a05fac16957144f8c05402e7489ae5_prof);

        
        $__internal_b2741ef84c423a5e797b59a39b887e3ee159a5fca806efefa2021e284aaa3c05->leave($__internal_b2741ef84c423a5e797b59a39b887e3ee159a5fca806efefa2021e284aaa3c05_prof);

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
