<?php

/* LljmHomeBundle:Node:nodedel.html.twig */
class __TwigTemplate_555489727ee8a63fb635c5396705472cca841018aad30be1f27f6420416fd725 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Node:nodedel.html.twig", 2);
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
        $__internal_6e2510ee718b406cbfac0fbd345393e61dfec77a2be0000b34198f79aa4ce375 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e2510ee718b406cbfac0fbd345393e61dfec77a2be0000b34198f79aa4ce375->enter($__internal_6e2510ee718b406cbfac0fbd345393e61dfec77a2be0000b34198f79aa4ce375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Node:nodedel.html.twig"));

        $__internal_b1a47f02a12a5ff5b5e4064355df13c1dfd3cdc477dce53d2116018fbe648f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1a47f02a12a5ff5b5e4064355df13c1dfd3cdc477dce53d2116018fbe648f5d->enter($__internal_b1a47f02a12a5ff5b5e4064355df13c1dfd3cdc477dce53d2116018fbe648f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Node:nodedel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e2510ee718b406cbfac0fbd345393e61dfec77a2be0000b34198f79aa4ce375->leave($__internal_6e2510ee718b406cbfac0fbd345393e61dfec77a2be0000b34198f79aa4ce375_prof);

        
        $__internal_b1a47f02a12a5ff5b5e4064355df13c1dfd3cdc477dce53d2116018fbe648f5d->leave($__internal_b1a47f02a12a5ff5b5e4064355df13c1dfd3cdc477dce53d2116018fbe648f5d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_078821b70f0d2adab2fa2fd6ca396e64b4e86596dfb1bedbcacc263ea33085eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_078821b70f0d2adab2fa2fd6ca396e64b4e86596dfb1bedbcacc263ea33085eb->enter($__internal_078821b70f0d2adab2fa2fd6ca396e64b4e86596dfb1bedbcacc263ea33085eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_10f5dd27f8b10a259fabda53a94fb91b3b88349b72194dab873c578742f3dbf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10f5dd27f8b10a259fabda53a94fb91b3b88349b72194dab873c578742f3dbf9->enter($__internal_10f5dd27f8b10a259fabda53a94fb91b3b88349b72194dab873c578742f3dbf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Delete node - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_10f5dd27f8b10a259fabda53a94fb91b3b88349b72194dab873c578742f3dbf9->leave($__internal_10f5dd27f8b10a259fabda53a94fb91b3b88349b72194dab873c578742f3dbf9_prof);

        
        $__internal_078821b70f0d2adab2fa2fd6ca396e64b4e86596dfb1bedbcacc263ea33085eb->leave($__internal_078821b70f0d2adab2fa2fd6ca396e64b4e86596dfb1bedbcacc263ea33085eb_prof);

    }

    // line 8
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_dcc9d51f2b9e95186df4ed889b16d0b877679413cadde86b505d8184dc0d3b65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcc9d51f2b9e95186df4ed889b16d0b877679413cadde86b505d8184dc0d3b65->enter($__internal_dcc9d51f2b9e95186df4ed889b16d0b877679413cadde86b505d8184dc0d3b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_cdae581311be2c9f7996457fd356ffa21019be5ebc55ea8f7851432e4de92ec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdae581311be2c9f7996457fd356ffa21019be5ebc55ea8f7851432e4de92ec8->enter($__internal_cdae581311be2c9f7996457fd356ffa21019be5ebc55ea8f7851432e4de92ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        // line 9
        echo "
  <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete a node"), "html", null, true);
        echo "</h2>

  <p>
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Confirm you want to delete the node below"), "html", null, true);
        echo ":
    <br>
    - ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new Twig_Error_Runtime('Variable "node" does not exist.', 15, $this->getSourceContext()); })()), "nodeguid", array()), "html", null, true);
        echo "<br>
    - ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new Twig_Error_Runtime('Variable "node" does not exist.', 16, $this->getSourceContext()); })()), "nodetype", array()), "nodetype", array()), "html", null, true);
        echo "<br>
    - ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new Twig_Error_Runtime('Variable "node" does not exist.', 17, $this->getSourceContext()); })()), "nodezone", array()), "zonename", array()), "html", null, true);
        echo "<br>
  </p>

  <form action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_nodedel", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new Twig_Error_Runtime('Variable "node" does not exist.', 20, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_node");
        echo "\" class=\"btn btn-default glyphicon glyphicon-chevron-left\">
      Back
    </a>
    <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger\" />
    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), 'rest');
        echo "
  </form>

";
        
        $__internal_cdae581311be2c9f7996457fd356ffa21019be5ebc55ea8f7851432e4de92ec8->leave($__internal_cdae581311be2c9f7996457fd356ffa21019be5ebc55ea8f7851432e4de92ec8_prof);

        
        $__internal_dcc9d51f2b9e95186df4ed889b16d0b877679413cadde86b505d8184dc0d3b65->leave($__internal_dcc9d51f2b9e95186df4ed889b16d0b877679413cadde86b505d8184dc0d3b65_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Node:nodedel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 25,  104 => 21,  100 => 20,  94 => 17,  90 => 16,  86 => 15,  81 => 13,  75 => 10,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"LljmHomeBundle::layout.html.twig\" %}

{% block title %}
  Delete node - {{ parent() }}
{% endblock %}

{% block lljm_home_body %}

  <h2>{{ 'Delete a node' | trans }}</h2>

  <p>
    {{ 'Confirm you want to delete the node below' | trans }}:
    <br>
    - {{ node.nodeguid }}<br>
    - {{ node.nodetype.nodetype }}<br>
    - {{ node.nodezone.zonename }}<br>
  </p>

  <form action=\"{{ path('home_nodedel', {'id': node.id}) }}\" method=\"post\">
    <a href=\"{{ path('home_node')}}\" class=\"btn btn-default glyphicon glyphicon-chevron-left\">
      Back
    </a>
    <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger\" />
    {{ form_rest(form) }}
  </form>

{% endblock %}", "LljmHomeBundle:Node:nodedel.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Node/nodedel.html.twig");
    }
}
