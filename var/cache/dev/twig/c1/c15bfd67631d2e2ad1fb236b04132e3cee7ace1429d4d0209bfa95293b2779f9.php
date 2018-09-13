<?php

/* LljmHomeBundle:Node:node.html.twig */
class __TwigTemplate_4dbb89eb77152685d264611dcff49099229b09d3b64638589414a47b64c9ae82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Node:node.html.twig", 1);
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
        $__internal_e1ad521a1e61622a65d657fb6aa1fc243dcfe82a9a031fe2153eaeb73e758512 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1ad521a1e61622a65d657fb6aa1fc243dcfe82a9a031fe2153eaeb73e758512->enter($__internal_e1ad521a1e61622a65d657fb6aa1fc243dcfe82a9a031fe2153eaeb73e758512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Node:node.html.twig"));

        $__internal_cd55c23be9b94cf1c3d7551529ce792c8c268ae55a915d00a39ace0d4dc3bf00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd55c23be9b94cf1c3d7551529ce792c8c268ae55a915d00a39ace0d4dc3bf00->enter($__internal_cd55c23be9b94cf1c3d7551529ce792c8c268ae55a915d00a39ace0d4dc3bf00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Node:node.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1ad521a1e61622a65d657fb6aa1fc243dcfe82a9a031fe2153eaeb73e758512->leave($__internal_e1ad521a1e61622a65d657fb6aa1fc243dcfe82a9a031fe2153eaeb73e758512_prof);

        
        $__internal_cd55c23be9b94cf1c3d7551529ce792c8c268ae55a915d00a39ace0d4dc3bf00->leave($__internal_cd55c23be9b94cf1c3d7551529ce792c8c268ae55a915d00a39ace0d4dc3bf00_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b2c64e02f1fba4da010d2e644bf664f849496f2dceba653430ca1967970f77b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b2c64e02f1fba4da010d2e644bf664f849496f2dceba653430ca1967970f77b->enter($__internal_3b2c64e02f1fba4da010d2e644bf664f849496f2dceba653430ca1967970f77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a87c494cc25db8d4af010f9a7dbebc808376083e6899b00732b701d4395a2b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a87c494cc25db8d4af010f9a7dbebc808376083e6899b00732b701d4395a2b6e->enter($__internal_a87c494cc25db8d4af010f9a7dbebc808376083e6899b00732b701d4395a2b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Nodes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a87c494cc25db8d4af010f9a7dbebc808376083e6899b00732b701d4395a2b6e->leave($__internal_a87c494cc25db8d4af010f9a7dbebc808376083e6899b00732b701d4395a2b6e_prof);

        
        $__internal_3b2c64e02f1fba4da010d2e644bf664f849496f2dceba653430ca1967970f77b->leave($__internal_3b2c64e02f1fba4da010d2e644bf664f849496f2dceba653430ca1967970f77b_prof);

    }

    // line 7
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_e187a002ba483818509a909d9d18edba4052310d9ad368ecaaf7dd004d2a73cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e187a002ba483818509a909d9d18edba4052310d9ad368ecaaf7dd004d2a73cf->enter($__internal_e187a002ba483818509a909d9d18edba4052310d9ad368ecaaf7dd004d2a73cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_c2fff623e3ea8c2513109bb0f845f08b0ec46dd605c6e7bb2ad90b371226cfcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2fff623e3ea8c2513109bb0f845f08b0ec46dd605c6e7bb2ad90b371226cfcb->enter($__internal_c2fff623e3ea8c2513109bb0f845f08b0ec46dd605c6e7bb2ad90b371226cfcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        // line 8
        echo "
  <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nodes"), "html", null, true);
        echo "</h2>

        <div>
          <a class=\"btn btn-default btn-sm glyphicon glyphicon-plus\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_nodeadd");
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("GUID"), "html", null, true);
        echo "</th>
                  <th>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Zone"), "html", null, true);
        echo "</th>
                  <th>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sub zone"), "html", null, true);
        echo "</th>
                  <th>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type"), "html", null, true);
        echo "</th>
                  <th>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last heartbeat"), "html", null, true);
        echo "</th>
                  <th colspan = 2>&nbsp;</th>
                </tr>
              </thead>
              <tbody>
\t\t\t  ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nodes"]) || array_key_exists("nodes", $context) ? $context["nodes"] : (function () { throw new Twig_Error_Runtime('Variable "nodes" does not exist.', 31, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["node"]) {
            // line 32
            echo "                <tr>
                  <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["node"], "nodeguid", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["node"], "zonename", array())), "html", null, true);
            echo "</td>
                  <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["node"], "subzonename", array())), "html", null, true);
            echo "</td>
                  <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["node"], "nodetype", array())), "html", null, true);
            echo "</td>
                  <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["node"], "lastheartbeat", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                  <td>
                    <a class=\"btn glyphicon glyphicon-pencil red\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_nodeedit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["node"], "id", array()))), "html", null, true);
            echo "\">
                    <a class=\"btn glyphicon glyphicon-trash red \" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_nodedel", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["node"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['node'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "              </tbody>
            </table>
          </div>
      </div>

";
        
        $__internal_c2fff623e3ea8c2513109bb0f845f08b0ec46dd605c6e7bb2ad90b371226cfcb->leave($__internal_c2fff623e3ea8c2513109bb0f845f08b0ec46dd605c6e7bb2ad90b371226cfcb_prof);

        
        $__internal_e187a002ba483818509a909d9d18edba4052310d9ad368ecaaf7dd004d2a73cf->leave($__internal_e187a002ba483818509a909d9d18edba4052310d9ad368ecaaf7dd004d2a73cf_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Node:node.html.twig";
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
  Nodes - {{ parent() }}
{% endblock %}

{% block lljm_home_body %}

  <h2>{{ 'Nodes' | trans }}</h2>

        <div>
          <a class=\"btn btn-default btn-sm glyphicon glyphicon-plus\" href=\"{{ path('home_nodeadd') }}\">
            {{ 'Add' | trans }}
          </a>
        </div>

        <div>
          <div class=\"table-responsive\">
            <table class=\"table table-striped\">
              <thead>
                <tr>
                  <th>{{ 'GUID' | trans }}</th>
                  <th>{{ 'Zone' | trans }}</th>
                  <th>{{ 'Sub zone' | trans }}</th>
                  <th>{{ 'Type' | trans }}</th>
                  <th>{{ 'Last heartbeat' | trans }}</th>
                  <th colspan = 2>&nbsp;</th>
                </tr>
              </thead>
              <tbody>
\t\t\t  {% for node in nodes %}
                <tr>
                  <td>{{ node.nodeguid }}</td>
                  <td>{{ node.zonename | trans }}</td>
                  <td>{{ node.subzonename | trans }}</td>
                  <td>{{ node.nodetype | trans }}</td>
                  <td>{{ node.lastheartbeat | date(\"Y-m-d H:i:s\") }}</td>
                  <td>
                    <a class=\"btn glyphicon glyphicon-pencil red\" href=\"{{ path('home_nodeedit', {'id': node.id}) }}\">
                    <a class=\"btn glyphicon glyphicon-trash red \" href=\"{{ path('home_nodedel', {'id': node.id}) }}\">
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
", "LljmHomeBundle:Node:node.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Node/node.html.twig");
    }
}
