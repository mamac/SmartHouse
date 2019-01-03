<?php

/* LljmHealthBundle:Weight:weightform.html.twig */
class __TwigTemplate_8a415f95851109095b2bb319038ef549a7bbd3547e52067db8e854b2390d1506 extends Twig_Template
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
        $__internal_dba85ce9cc193d94f2d04ca26f73971089a3abf78b542933bab250949ace66b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dba85ce9cc193d94f2d04ca26f73971089a3abf78b542933bab250949ace66b3->enter($__internal_dba85ce9cc193d94f2d04ca26f73971089a3abf78b542933bab250949ace66b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHealthBundle:Weight:weightform.html.twig"));

        $__internal_2a120cce5bd515a08b606e614c2caa4a82457f6cf7b7dab14d99dc8112e0f754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a120cce5bd515a08b606e614c2caa4a82457f6cf7b7dab14d99dc8112e0f754->enter($__internal_2a120cce5bd515a08b606e614c2caa4a82457f6cf7b7dab14d99dc8112e0f754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHealthBundle:Weight:weightform.html.twig"));

        // line 1
        echo "<div>
<form action=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("health_weightadd");
        echo "\" method=\"post\">

";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'errors');
        echo "

<div class=\"input-group\">
\t<div class=\"form-group\">
\t  ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), "user", array()), 'label', array("label" => "User"));
        echo "
\t  ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "user", array()), 'errors');
        echo "
\t  ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "user", array()), 'widget');
        echo "
\t</div>
\t<div class=\"form-group\">
\t  ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), "weightValue", array()), 'label', array("label" => "Weight"));
        echo "
\t  ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "weightValue", array()), 'errors');
        echo "
\t  ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "weightValue", array()), 'widget');
        echo "
\t</div>
\t<div class=\"form-group\">
\t  ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "dateRead", array()), 'label', array("label" => "Date"));
        echo "
\t  ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), "dateRead", array()), 'errors');
        echo "
\t  ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), "dateRead", array()), 'widget');
        echo "
\t</div>
\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'rest');
        echo "

\t<div>
\t  <input type=\"submit\" class=\"btn btn-primary\" />
\t</div>
</div>

</form>
</div>
";
        
        $__internal_dba85ce9cc193d94f2d04ca26f73971089a3abf78b542933bab250949ace66b3->leave($__internal_dba85ce9cc193d94f2d04ca26f73971089a3abf78b542933bab250949ace66b3_prof);

        
        $__internal_2a120cce5bd515a08b606e614c2caa4a82457f6cf7b7dab14d99dc8112e0f754->leave($__internal_2a120cce5bd515a08b606e614c2caa4a82457f6cf7b7dab14d99dc8112e0f754_prof);

    }

    public function getTemplateName()
    {
        return "LljmHealthBundle:Weight:weightform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 22,  76 => 20,  72 => 19,  68 => 18,  62 => 15,  58 => 14,  54 => 13,  48 => 10,  44 => 9,  40 => 8,  33 => 4,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
<form action=\"{{ path('health_weightadd') }}\" method=\"post\">

{{ form_errors(form) }}

<div class=\"input-group\">
\t<div class=\"form-group\">
\t  {{ form_label(form.user, \"User\") }}
\t  {{ form_errors(form.user) }}
\t  {{ form_widget(form.user) }}
\t</div>
\t<div class=\"form-group\">
\t  {{ form_label(form.weightValue, \"Weight\") }}
\t  {{ form_errors(form.weightValue) }}
\t  {{ form_widget(form.weightValue) }}
\t</div>
\t<div class=\"form-group\">
\t  {{ form_label(form.dateRead, \"Date\") }}
\t  {{ form_errors(form.dateRead) }}
\t  {{ form_widget(form.dateRead) }}
\t</div>
\t{{ form_rest(form) }}

\t<div>
\t  <input type=\"submit\" class=\"btn btn-primary\" />
\t</div>
</div>

</form>
</div>
", "LljmHealthBundle:Weight:weightform.html.twig", "/home/lljm/web/src/Lljm/HealthBundle/Resources/views/Weight/weightform.html.twig");
    }
}
