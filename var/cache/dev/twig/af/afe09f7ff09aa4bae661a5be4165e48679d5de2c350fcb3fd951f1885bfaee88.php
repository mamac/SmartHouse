<?php

/* LljmHealthBundle:Height:heightform.html.twig */
class __TwigTemplate_64df1d54021ffb77d06f4aa1adf16d48655a3aec02a3a4f6a5b93e2f1ea4cffb extends Twig_Template
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
        $__internal_1629225d137e56c4e3ca396075fcf4c9e7969697fa042868deb70b1bae32f8c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1629225d137e56c4e3ca396075fcf4c9e7969697fa042868deb70b1bae32f8c7->enter($__internal_1629225d137e56c4e3ca396075fcf4c9e7969697fa042868deb70b1bae32f8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHealthBundle:Height:heightform.html.twig"));

        $__internal_8f966c70c617f659593b23836d79134116d917bef3739719e45393ba14e44b87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f966c70c617f659593b23836d79134116d917bef3739719e45393ba14e44b87->enter($__internal_8f966c70c617f659593b23836d79134116d917bef3739719e45393ba14e44b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHealthBundle:Height:heightform.html.twig"));

        // line 1
        echo "<div>
<form action=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("health_heightadd");
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), "heightValue", array()), 'label', array("label" => "Height"));
        echo "
\t  ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "heightValue", array()), 'errors');
        echo "
\t  ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "heightValue", array()), 'widget');
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
        
        $__internal_1629225d137e56c4e3ca396075fcf4c9e7969697fa042868deb70b1bae32f8c7->leave($__internal_1629225d137e56c4e3ca396075fcf4c9e7969697fa042868deb70b1bae32f8c7_prof);

        
        $__internal_8f966c70c617f659593b23836d79134116d917bef3739719e45393ba14e44b87->leave($__internal_8f966c70c617f659593b23836d79134116d917bef3739719e45393ba14e44b87_prof);

    }

    public function getTemplateName()
    {
        return "LljmHealthBundle:Height:heightform.html.twig";
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
<form action=\"{{ path('health_heightadd') }}\" method=\"post\">

{{ form_errors(form) }}

<div class=\"input-group\">
\t<div class=\"form-group\">
\t  {{ form_label(form.user, \"User\") }}
\t  {{ form_errors(form.user) }}
\t  {{ form_widget(form.user) }}
\t</div>
\t<div class=\"form-group\">
\t  {{ form_label(form.heightValue, \"Height\") }}
\t  {{ form_errors(form.heightValue) }}
\t  {{ form_widget(form.heightValue) }}
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
", "LljmHealthBundle:Height:heightform.html.twig", "/home/lljm/web/src/Lljm/HealthBundle/Resources/views/Height/heightform.html.twig");
    }
}
