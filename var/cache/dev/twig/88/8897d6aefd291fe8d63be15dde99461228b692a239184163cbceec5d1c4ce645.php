<?php

/* LljmHomeBundle:Subzone:subzone.html.twig */
class __TwigTemplate_6ca26896f2c73c8093aab1161d31024fba81269dacd68e9fb506014b2e8c9429 extends Twig_Template
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
        $__internal_ee8b84f1080432dec5522655d607430a9d17db044aac8c60ecd503f804adf60a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee8b84f1080432dec5522655d607430a9d17db044aac8c60ecd503f804adf60a->enter($__internal_ee8b84f1080432dec5522655d607430a9d17db044aac8c60ecd503f804adf60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Subzone:subzone.html.twig"));

        $__internal_fce79a68e8e5b9d7af4a273f64a2d1f9f09675f95cd7c0e666206196af34dbe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce79a68e8e5b9d7af4a273f64a2d1f9f09675f95cd7c0e666206196af34dbe4->enter($__internal_fce79a68e8e5b9d7af4a273f64a2d1f9f09675f95cd7c0e666206196af34dbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Subzone:subzone.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee8b84f1080432dec5522655d607430a9d17db044aac8c60ecd503f804adf60a->leave($__internal_ee8b84f1080432dec5522655d607430a9d17db044aac8c60ecd503f804adf60a_prof);

        
        $__internal_fce79a68e8e5b9d7af4a273f64a2d1f9f09675f95cd7c0e666206196af34dbe4->leave($__internal_fce79a68e8e5b9d7af4a273f64a2d1f9f09675f95cd7c0e666206196af34dbe4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_477fa5794525d8451987c2aebaedd0d1585692cd881e9994047822aaae7ee834 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_477fa5794525d8451987c2aebaedd0d1585692cd881e9994047822aaae7ee834->enter($__internal_477fa5794525d8451987c2aebaedd0d1585692cd881e9994047822aaae7ee834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3f5764971fa7862b2e7d0e07d0a30498e8c0775c5a3a2f5ccc0eea3cfdc88948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f5764971fa7862b2e7d0e07d0a30498e8c0775c5a3a2f5ccc0eea3cfdc88948->enter($__internal_3f5764971fa7862b2e7d0e07d0a30498e8c0775c5a3a2f5ccc0eea3cfdc88948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Sub zones - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3f5764971fa7862b2e7d0e07d0a30498e8c0775c5a3a2f5ccc0eea3cfdc88948->leave($__internal_3f5764971fa7862b2e7d0e07d0a30498e8c0775c5a3a2f5ccc0eea3cfdc88948_prof);

        
        $__internal_477fa5794525d8451987c2aebaedd0d1585692cd881e9994047822aaae7ee834->leave($__internal_477fa5794525d8451987c2aebaedd0d1585692cd881e9994047822aaae7ee834_prof);

    }

    // line 7
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_57a75f8de1dfca78cb84dc714cc86ccc8e6148f30d6836e655f04ec2217dda2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57a75f8de1dfca78cb84dc714cc86ccc8e6148f30d6836e655f04ec2217dda2a->enter($__internal_57a75f8de1dfca78cb84dc714cc86ccc8e6148f30d6836e655f04ec2217dda2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_69822cc015b957bc94547fae8125247ce5160543ebaf941c7bd1b929bf41d621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69822cc015b957bc94547fae8125247ce5160543ebaf941c7bd1b929bf41d621->enter($__internal_69822cc015b957bc94547fae8125247ce5160543ebaf941c7bd1b929bf41d621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

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
        
        $__internal_69822cc015b957bc94547fae8125247ce5160543ebaf941c7bd1b929bf41d621->leave($__internal_69822cc015b957bc94547fae8125247ce5160543ebaf941c7bd1b929bf41d621_prof);

        
        $__internal_57a75f8de1dfca78cb84dc714cc86ccc8e6148f30d6836e655f04ec2217dda2a->leave($__internal_57a75f8de1dfca78cb84dc714cc86ccc8e6148f30d6836e655f04ec2217dda2a_prof);

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
