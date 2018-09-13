<?php

/* LljmHomeBundle:Zone:zoneform.html.twig */
class __TwigTemplate_17d15d05cf0f17947d52c887ddeab2f5690009f04411e4425a53f85ebbc0679a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b09075f807166a80256c7c1c72937bf450a3579db6f0f3214604508f8313a35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b09075f807166a80256c7c1c72937bf450a3579db6f0f3214604508f8313a35->enter($__internal_7b09075f807166a80256c7c1c72937bf450a3579db6f0f3214604508f8313a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Zone:zoneform.html.twig"));

        $__internal_54d69193f64f27709b8bc719e8a83354ded557d5d6017b35bfb79e6bedf9b88e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d69193f64f27709b8bc719e8a83354ded557d5d6017b35bfb79e6bedf9b88e->enter($__internal_54d69193f64f27709b8bc719e8a83354ded557d5d6017b35bfb79e6bedf9b88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Zone:zoneform.html.twig"));

        // line 1
        echo "<div>
<form action=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_zoneadd");
        echo "\" method=\"post\">

";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'errors');
        echo "

<div class=\"input-group\">
\t<div class=\"form-group\">
\t  ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), "zonename", array()), 'label', array("label" => "Zone name"));
        echo "
\t  ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "zonename", array()), 'errors');
        echo "
\t  ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "zonename", array()), 'widget');
        echo "
\t</div>
\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), 'rest');
        echo "

\t<div>
\t  <input type=\"submit\" class=\"btn btn-primary\" />
\t</div>
</div>

</form>
</div>
";
        
        $__internal_7b09075f807166a80256c7c1c72937bf450a3579db6f0f3214604508f8313a35->leave($__internal_7b09075f807166a80256c7c1c72937bf450a3579db6f0f3214604508f8313a35_prof);

        
        $__internal_54d69193f64f27709b8bc719e8a83354ded557d5d6017b35bfb79e6bedf9b88e->leave($__internal_54d69193f64f27709b8bc719e8a83354ded557d5d6017b35bfb79e6bedf9b88e_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Zone:zoneform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  48 => 10,  44 => 9,  40 => 8,  33 => 4,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
<form action=\"{{ path('home_zoneadd') }}\" method=\"post\">

{{ form_errors(form) }}

<div class=\"input-group\">
\t<div class=\"form-group\">
\t  {{ form_label(form.zonename, \"Zone name\") }}
\t  {{ form_errors(form.zonename) }}
\t  {{ form_widget(form.zonename) }}
\t</div>
\t{{ form_rest(form) }}

\t<div>
\t  <input type=\"submit\" class=\"btn btn-primary\" />
\t</div>
</div>

</form>
</div>
", "LljmHomeBundle:Zone:zoneform.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Zone/zoneform.html.twig");
    }
}
