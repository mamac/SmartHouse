<?php

/* LljmHomeBundle:Node:node.html.twig */
class __TwigTemplate_02e4add36a5d7c8da17e769edef7021cdc2fb41b462d6c01626cde523b2b6f7f extends Twig_Template
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
        $__internal_2071fe2146033a8dabfdbaa7d34fb4ce3444c6031f6e0bfb07733bee3489eeb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2071fe2146033a8dabfdbaa7d34fb4ce3444c6031f6e0bfb07733bee3489eeb2->enter($__internal_2071fe2146033a8dabfdbaa7d34fb4ce3444c6031f6e0bfb07733bee3489eeb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Node:node.html.twig"));

        $__internal_c836472dae54b13172e79f1359553d27edc76562c6393f5eafab42bc571650c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c836472dae54b13172e79f1359553d27edc76562c6393f5eafab42bc571650c3->enter($__internal_c836472dae54b13172e79f1359553d27edc76562c6393f5eafab42bc571650c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Node:node.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2071fe2146033a8dabfdbaa7d34fb4ce3444c6031f6e0bfb07733bee3489eeb2->leave($__internal_2071fe2146033a8dabfdbaa7d34fb4ce3444c6031f6e0bfb07733bee3489eeb2_prof);

        
        $__internal_c836472dae54b13172e79f1359553d27edc76562c6393f5eafab42bc571650c3->leave($__internal_c836472dae54b13172e79f1359553d27edc76562c6393f5eafab42bc571650c3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0151870e440d8f21351565d02cde0be012f8e10d9f4728cd9243d85e3d44a402 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0151870e440d8f21351565d02cde0be012f8e10d9f4728cd9243d85e3d44a402->enter($__internal_0151870e440d8f21351565d02cde0be012f8e10d9f4728cd9243d85e3d44a402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6c58392a6e6173c5110166aa172059c877033b6401f49365faf989abbe8b7f1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c58392a6e6173c5110166aa172059c877033b6401f49365faf989abbe8b7f1f->enter($__internal_6c58392a6e6173c5110166aa172059c877033b6401f49365faf989abbe8b7f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Nodes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6c58392a6e6173c5110166aa172059c877033b6401f49365faf989abbe8b7f1f->leave($__internal_6c58392a6e6173c5110166aa172059c877033b6401f49365faf989abbe8b7f1f_prof);

        
        $__internal_0151870e440d8f21351565d02cde0be012f8e10d9f4728cd9243d85e3d44a402->leave($__internal_0151870e440d8f21351565d02cde0be012f8e10d9f4728cd9243d85e3d44a402_prof);

    }

    // line 7
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_f54986e8c4b86cb33d70bf3b18f58f6b9c5f1c87290562d5fd1ae4f658d522f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f54986e8c4b86cb33d70bf3b18f58f6b9c5f1c87290562d5fd1ae4f658d522f3->enter($__internal_f54986e8c4b86cb33d70bf3b18f58f6b9c5f1c87290562d5fd1ae4f658d522f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_1ac5fd1d194d9e9da863239f8bc5c708d01e93cffb24d87cfbd3c5c9b687fdb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac5fd1d194d9e9da863239f8bc5c708d01e93cffb24d87cfbd3c5c9b687fdb3->enter($__internal_1ac5fd1d194d9e9da863239f8bc5c708d01e93cffb24d87cfbd3c5c9b687fdb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

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
                  <th colspan = 2>&nbsp;</th>
                </tr>
              </thead>
              <tbody>
\t\t\t  ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nodes"]) || array_key_exists("nodes", $context) ? $context["nodes"] : (function () { throw new Twig_Error_Runtime('Variable "nodes" does not exist.', 30, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["node"]) {
            // line 31
            echo "                <tr>
                  <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["node"], "nodeguid", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["node"], "zonename", array())), "html", null, true);
            echo "</td>
                  <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["node"], "subzonename", array())), "html", null, true);
            echo "</td>
                  <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["node"], "nodetype", array())), "html", null, true);
            echo "</td>
                  <td>
                    <a class=\"btn glyphicon glyphicon-pencil red\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_nodeedit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["node"], "id", array()))), "html", null, true);
            echo "\">
                    <a class=\"btn glyphicon glyphicon-trash red \" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_nodedel", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["node"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['node'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "              </tbody>
            </table>
          </div>
      </div>

";
        
        $__internal_1ac5fd1d194d9e9da863239f8bc5c708d01e93cffb24d87cfbd3c5c9b687fdb3->leave($__internal_1ac5fd1d194d9e9da863239f8bc5c708d01e93cffb24d87cfbd3c5c9b687fdb3_prof);

        
        $__internal_f54986e8c4b86cb33d70bf3b18f58f6b9c5f1c87290562d5fd1ae4f658d522f3->leave($__internal_f54986e8c4b86cb33d70bf3b18f58f6b9c5f1c87290562d5fd1ae4f658d522f3_prof);

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
        return array (  164 => 44,  155 => 42,  146 => 38,  142 => 37,  137 => 35,  133 => 34,  129 => 33,  125 => 32,  122 => 31,  117 => 30,  109 => 25,  105 => 24,  101 => 23,  97 => 22,  85 => 13,  81 => 12,  75 => 9,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
