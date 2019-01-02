<?php

/* LljmHomeBundle:Default:index.html.twig */
class __TwigTemplate_4032edd55c07d5027a0fed2dc77c2430c118a7aa4026e447de7e236be00c50ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LljmHomeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_017c5a8c56f0e8d868a45cd26e6e99cb257986995a30b062c998272dd922d918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_017c5a8c56f0e8d868a45cd26e6e99cb257986995a30b062c998272dd922d918->enter($__internal_017c5a8c56f0e8d868a45cd26e6e99cb257986995a30b062c998272dd922d918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Default:index.html.twig"));

        $__internal_ab176f1ee93d9d4823322b04fe455223a335cf5814ed0a5791667f97a2fa6e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab176f1ee93d9d4823322b04fe455223a335cf5814ed0a5791667f97a2fa6e0b->enter($__internal_ab176f1ee93d9d4823322b04fe455223a335cf5814ed0a5791667f97a2fa6e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_017c5a8c56f0e8d868a45cd26e6e99cb257986995a30b062c998272dd922d918->leave($__internal_017c5a8c56f0e8d868a45cd26e6e99cb257986995a30b062c998272dd922d918_prof);

        
        $__internal_ab176f1ee93d9d4823322b04fe455223a335cf5814ed0a5791667f97a2fa6e0b->leave($__internal_ab176f1ee93d9d4823322b04fe455223a335cf5814ed0a5791667f97a2fa6e0b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1409909cb88a7f357ecfd4b43b5e1a55763062752995d7a6d6f0c796b26b8ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1409909cb88a7f357ecfd4b43b5e1a55763062752995d7a6d6f0c796b26b8ed->enter($__internal_e1409909cb88a7f357ecfd4b43b5e1a55763062752995d7a6d6f0c796b26b8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b54ce56af11421abb7346f1a83e9ffa9eb3054f7e9cd54f3595a2594738ea3ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b54ce56af11421abb7346f1a83e9ffa9eb3054f7e9cd54f3595a2594738ea3ea->enter($__internal_b54ce56af11421abb7346f1a83e9ffa9eb3054f7e9cd54f3595a2594738ea3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "      <div id=\"header\" class=\"hero-unit\">
        <h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Welcome"), "html", null, true);
        echo "</h1>

";
        // line 7
        if (twig_test_empty((isset($context["houses"]) || array_key_exists("houses", $context) ? $context["houses"] : (function () { throw new Twig_Error_Runtime('Variable "houses" does not exist.', 7, $this->getSourceContext()); })()))) {
            // line 8
            echo "
";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You should create a house in Housing/House."), "html", null, true);
            echo "

";
        } else {
            // line 12
            echo "
";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["houses"]) || array_key_exists("houses", $context) ? $context["houses"] : (function () { throw new Twig_Error_Runtime('Variable "houses" does not exist.', 13, $this->getSourceContext()); })()), 0, array()), "address1", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["houses"]) || array_key_exists("houses", $context) ? $context["houses"] : (function () { throw new Twig_Error_Runtime('Variable "houses" does not exist.', 13, $this->getSourceContext()); })()), 0, array()), "city", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["houses"]) || array_key_exists("houses", $context) ? $context["houses"] : (function () { throw new Twig_Error_Runtime('Variable "houses" does not exist.', 13, $this->getSourceContext()); })()), 0, array()), "country", array()), "html", null, true);
            echo "

";
        }
        // line 16
        echo "
      </div>
          ";
        
        $__internal_b54ce56af11421abb7346f1a83e9ffa9eb3054f7e9cd54f3595a2594738ea3ea->leave($__internal_b54ce56af11421abb7346f1a83e9ffa9eb3054f7e9cd54f3595a2594738ea3ea_prof);

        
        $__internal_e1409909cb88a7f357ecfd4b43b5e1a55763062752995d7a6d6f0c796b26b8ed->leave($__internal_e1409909cb88a7f357ecfd4b43b5e1a55763062752995d7a6d6f0c796b26b8ed_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 16,  71 => 13,  68 => 12,  62 => 9,  59 => 8,  57 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"LljmHomeBundle::layout.html.twig\" %}

         {% block body %}
      <div id=\"header\" class=\"hero-unit\">
        <h1>{{'Welcome' | trans }}</h1>

{% if houses is empty %}

{{ 'You should create a house in Housing/House.' | trans }}

{% else %}

{{ houses.0.address1 }} - {{ houses.0.city }} - {{ houses.0.country }}

{% endif %}

      </div>
          {% endblock %}", "LljmHomeBundle:Default:index.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Default/index.html.twig");
    }
}
