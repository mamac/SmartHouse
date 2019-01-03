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
        $__internal_a6226de70d259f639f27e636a76815a62bd43fc87a468457b4cdf96f7ad2186c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6226de70d259f639f27e636a76815a62bd43fc87a468457b4cdf96f7ad2186c->enter($__internal_a6226de70d259f639f27e636a76815a62bd43fc87a468457b4cdf96f7ad2186c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Default:index.html.twig"));

        $__internal_f739ac0fd913f4e10e288563ba707331f1406f7f59dd2d8be91f76b50629aa36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f739ac0fd913f4e10e288563ba707331f1406f7f59dd2d8be91f76b50629aa36->enter($__internal_f739ac0fd913f4e10e288563ba707331f1406f7f59dd2d8be91f76b50629aa36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6226de70d259f639f27e636a76815a62bd43fc87a468457b4cdf96f7ad2186c->leave($__internal_a6226de70d259f639f27e636a76815a62bd43fc87a468457b4cdf96f7ad2186c_prof);

        
        $__internal_f739ac0fd913f4e10e288563ba707331f1406f7f59dd2d8be91f76b50629aa36->leave($__internal_f739ac0fd913f4e10e288563ba707331f1406f7f59dd2d8be91f76b50629aa36_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_476817eb33f13e00d0520bd726b4fa4d0a206adbfb9593c825767a11fd127577 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_476817eb33f13e00d0520bd726b4fa4d0a206adbfb9593c825767a11fd127577->enter($__internal_476817eb33f13e00d0520bd726b4fa4d0a206adbfb9593c825767a11fd127577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_deaa33f61af2286581ea7590a0dfa2a6f965420c6e0398b80b520ac15dabcecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deaa33f61af2286581ea7590a0dfa2a6f965420c6e0398b80b520ac15dabcecd->enter($__internal_deaa33f61af2286581ea7590a0dfa2a6f965420c6e0398b80b520ac15dabcecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_deaa33f61af2286581ea7590a0dfa2a6f965420c6e0398b80b520ac15dabcecd->leave($__internal_deaa33f61af2286581ea7590a0dfa2a6f965420c6e0398b80b520ac15dabcecd_prof);

        
        $__internal_476817eb33f13e00d0520bd726b4fa4d0a206adbfb9593c825767a11fd127577->leave($__internal_476817eb33f13e00d0520bd726b4fa4d0a206adbfb9593c825767a11fd127577_prof);

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
