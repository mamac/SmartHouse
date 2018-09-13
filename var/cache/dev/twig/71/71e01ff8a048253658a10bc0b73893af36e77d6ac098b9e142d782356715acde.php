<?php

/* LljmHomeBundle:Subzone:subzone.html.twig */
class __TwigTemplate_1882cf3872fa7c8802e3d78ae953ac1d9781b87774fcf03132864a699c3c24c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Subzone:subzone.html.twig", 1);
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
        $__internal_b29f29f05f8d0ef2ddf7142fcfaed0ad2f05ff447eb22cd00817ad2eecaf6325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b29f29f05f8d0ef2ddf7142fcfaed0ad2f05ff447eb22cd00817ad2eecaf6325->enter($__internal_b29f29f05f8d0ef2ddf7142fcfaed0ad2f05ff447eb22cd00817ad2eecaf6325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Subzone:subzone.html.twig"));

        $__internal_94a13aafa81c95280f62568871e08d9c6a6567b1675df63690e2a2002d65adce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94a13aafa81c95280f62568871e08d9c6a6567b1675df63690e2a2002d65adce->enter($__internal_94a13aafa81c95280f62568871e08d9c6a6567b1675df63690e2a2002d65adce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Subzone:subzone.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b29f29f05f8d0ef2ddf7142fcfaed0ad2f05ff447eb22cd00817ad2eecaf6325->leave($__internal_b29f29f05f8d0ef2ddf7142fcfaed0ad2f05ff447eb22cd00817ad2eecaf6325_prof);

        
        $__internal_94a13aafa81c95280f62568871e08d9c6a6567b1675df63690e2a2002d65adce->leave($__internal_94a13aafa81c95280f62568871e08d9c6a6567b1675df63690e2a2002d65adce_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_30a117c80f4c71bba3b48fc4049ee6b286cee84b3f2ea56d2621b701ccd15d77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30a117c80f4c71bba3b48fc4049ee6b286cee84b3f2ea56d2621b701ccd15d77->enter($__internal_30a117c80f4c71bba3b48fc4049ee6b286cee84b3f2ea56d2621b701ccd15d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_29adf16919d1c1e7eb63b68ee0a2dec2762bfe81a47a96f97eb647af6d018549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29adf16919d1c1e7eb63b68ee0a2dec2762bfe81a47a96f97eb647af6d018549->enter($__internal_29adf16919d1c1e7eb63b68ee0a2dec2762bfe81a47a96f97eb647af6d018549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Sub zones - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_29adf16919d1c1e7eb63b68ee0a2dec2762bfe81a47a96f97eb647af6d018549->leave($__internal_29adf16919d1c1e7eb63b68ee0a2dec2762bfe81a47a96f97eb647af6d018549_prof);

        
        $__internal_30a117c80f4c71bba3b48fc4049ee6b286cee84b3f2ea56d2621b701ccd15d77->leave($__internal_30a117c80f4c71bba3b48fc4049ee6b286cee84b3f2ea56d2621b701ccd15d77_prof);

    }

    // line 7
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_89796871ddf033a109a7f546fd8f63827eab2c907c69ee15e5b511185f3d285e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89796871ddf033a109a7f546fd8f63827eab2c907c69ee15e5b511185f3d285e->enter($__internal_89796871ddf033a109a7f546fd8f63827eab2c907c69ee15e5b511185f3d285e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_f961b79114e90addb5327af82bffd38188de665cdf55e66fc8d8319c91b9bc4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f961b79114e90addb5327af82bffd38188de665cdf55e66fc8d8319c91b9bc4d->enter($__internal_f961b79114e90addb5327af82bffd38188de665cdf55e66fc8d8319c91b9bc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        // line 8
        echo "
  <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sub zones"), "html", null, true);
        echo "</h2>

        <div>
          <a class=\"btn btn-default btn-sm glyphicon glyphicon-plus\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_subzoneadd");
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sub zone name"), "html", null, true);
        echo "</th>
                  <th colspan = 2>&nbsp;</th>
                </tr>
              </thead>
              <tbody>
\t\t\t  ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subzones"]) || array_key_exists("subzones", $context) ? $context["subzones"] : (function () { throw new Twig_Error_Runtime('Variable "subzones" does not exist.', 28, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subzone"]) {
            // line 29
            echo "                <tr>
                  <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["subzone"], "id", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["subzone"], "subzonename", array())), "html", null, true);
            echo "</td>
                  <td>
                    <a class=\"btn glyphicon glyphicon-pencil red\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_subzoneedit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["subzone"], "id", array()))), "html", null, true);
            echo "\">
                    <a class=\"btn glyphicon glyphicon-trash red \" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_subzonedel", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["subzone"], "id", array()))), "html", null, true);
            echo "\">
                   </td>
                </tr>
\t\t\t  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "\t\t\t    <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No record in this table"), "html", null, true);
            echo ".</p>
\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subzone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "              </tbody>
            </table>
          </div>
      </div>

";
        
        $__internal_f961b79114e90addb5327af82bffd38188de665cdf55e66fc8d8319c91b9bc4d->leave($__internal_f961b79114e90addb5327af82bffd38188de665cdf55e66fc8d8319c91b9bc4d_prof);

        
        $__internal_89796871ddf033a109a7f546fd8f63827eab2c907c69ee15e5b511185f3d285e->leave($__internal_89796871ddf033a109a7f546fd8f63827eab2c907c69ee15e5b511185f3d285e_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Subzone:subzone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 40,  139 => 38,  130 => 34,  126 => 33,  121 => 31,  117 => 30,  114 => 29,  109 => 28,  101 => 23,  97 => 22,  85 => 13,  81 => 12,  75 => 9,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"LljmHomeBundle::layout.html.twig\" %}

{% block title %}
  Sub zones - {{ parent() }}
{% endblock %}

{% block lljm_home_body %}

  <h2>{{ 'Sub zones' | trans }}</h2>

        <div>
          <a class=\"btn btn-default btn-sm glyphicon glyphicon-plus\" href=\"{{ path('home_subzoneadd') }}\">
            {{ 'Add' | trans }}
          </a>
        </div>

        <div>
          <div class=\"table-responsive\">
            <table class=\"table table-striped\">
              <thead>
                <tr>
                  <th>{{ 'ID' | trans }}</th>
                  <th>{{ 'Sub zone name' | trans }}</th>
                  <th colspan = 2>&nbsp;</th>
                </tr>
              </thead>
              <tbody>
\t\t\t  {% for subzone in subzones %}
                <tr>
                  <td>{{ subzone.id}}</td>
                  <td>{{ subzone.subzonename | trans }}</td>
                  <td>
                    <a class=\"btn glyphicon glyphicon-pencil red\" href=\"{{ path('home_subzoneedit', {'id': subzone.id}) }}\">
                    <a class=\"btn glyphicon glyphicon-trash red \" href=\"{{ path('home_subzonedel', {'id': subzone.id}) }}\">
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
", "LljmHomeBundle:Subzone:subzone.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Subzone/subzone.html.twig");
    }
}
