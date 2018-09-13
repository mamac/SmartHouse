<?php

/* LljmHomeBundle:Default:index.html.twig */
class __TwigTemplate_30bcb22978468fab2e7cd609638a9c666dac19faa8b6e8266c811b7315e5ffa9 extends Twig_Template
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
        $__internal_702a40b55cd7b31490443e7fd508a40480530e0d2ba802ccbf498a67151595e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_702a40b55cd7b31490443e7fd508a40480530e0d2ba802ccbf498a67151595e7->enter($__internal_702a40b55cd7b31490443e7fd508a40480530e0d2ba802ccbf498a67151595e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Default:index.html.twig"));

        $__internal_1ad88fc4595ac38c43de736ee7803702e0f0dcd945c0e9e563d1569c53634237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ad88fc4595ac38c43de736ee7803702e0f0dcd945c0e9e563d1569c53634237->enter($__internal_1ad88fc4595ac38c43de736ee7803702e0f0dcd945c0e9e563d1569c53634237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_702a40b55cd7b31490443e7fd508a40480530e0d2ba802ccbf498a67151595e7->leave($__internal_702a40b55cd7b31490443e7fd508a40480530e0d2ba802ccbf498a67151595e7_prof);

        
        $__internal_1ad88fc4595ac38c43de736ee7803702e0f0dcd945c0e9e563d1569c53634237->leave($__internal_1ad88fc4595ac38c43de736ee7803702e0f0dcd945c0e9e563d1569c53634237_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e346c97936c7ba88e6d2fb656164b8fd1f9f9e392288bc27d8e2308abe9444a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e346c97936c7ba88e6d2fb656164b8fd1f9f9e392288bc27d8e2308abe9444a->enter($__internal_1e346c97936c7ba88e6d2fb656164b8fd1f9f9e392288bc27d8e2308abe9444a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b73837225066236a914d2f7c18829793d570bf932c03e6ccd7e7154f6fd738d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b73837225066236a914d2f7c18829793d570bf932c03e6ccd7e7154f6fd738d7->enter($__internal_b73837225066236a914d2f7c18829793d570bf932c03e6ccd7e7154f6fd738d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b73837225066236a914d2f7c18829793d570bf932c03e6ccd7e7154f6fd738d7->leave($__internal_b73837225066236a914d2f7c18829793d570bf932c03e6ccd7e7154f6fd738d7_prof);

        
        $__internal_1e346c97936c7ba88e6d2fb656164b8fd1f9f9e392288bc27d8e2308abe9444a->leave($__internal_1e346c97936c7ba88e6d2fb656164b8fd1f9f9e392288bc27d8e2308abe9444a_prof);

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
