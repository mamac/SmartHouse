<?php

/* LljmHomeBundle:Meter:meterform.html.twig */
class __TwigTemplate_1e7b54eef3453184728782420b8ae5191cd0e24a06dd2c5bc89f9934666cc565 extends Twig_Template
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
        $__internal_ae81beeff0404a84b16ad7e2cc7183950e6f4ab94b129a1f5da8c561c1958964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae81beeff0404a84b16ad7e2cc7183950e6f4ab94b129a1f5da8c561c1958964->enter($__internal_ae81beeff0404a84b16ad7e2cc7183950e6f4ab94b129a1f5da8c561c1958964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Meter:meterform.html.twig"));

        $__internal_4873ac472c0bc675daa650ad3e41382b59bc7be7d87d12e3195e7e6ca2cc52ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4873ac472c0bc675daa650ad3e41382b59bc7be7d87d12e3195e7e6ca2cc52ef->enter($__internal_4873ac472c0bc675daa650ad3e41382b59bc7be7d87d12e3195e7e6ca2cc52ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Meter:meterform.html.twig"));

        // line 1
        echo "<div>
<form action=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_meteradd");
        echo "\" method=\"post\">

";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'errors');
        echo "

<div class=\"input-group\">
\t<div class=\"form-group\">
\t  ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), "metername", array()), 'label', array("label" => "Description"));
        echo "
\t  ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "metername", array()), 'errors');
        echo "
\t  ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "metername", array()), 'widget');
        echo "
\t</div>
\t<div class=\"form-group\">
\t  ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), "resource", array()), 'label', array("label" => "Resource"));
        echo "
\t  ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "resource", array()), 'errors');
        echo "
\t  ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "resource", array()), 'widget');
        echo "
\t</div>
\t<div class=\"form-group\">
\t  ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "unit", array()), 'label', array("label" => "Unit"));
        echo "
\t  ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), "unit", array()), 'errors');
        echo "
\t  ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), "unit", array()), 'widget');
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
        
        $__internal_ae81beeff0404a84b16ad7e2cc7183950e6f4ab94b129a1f5da8c561c1958964->leave($__internal_ae81beeff0404a84b16ad7e2cc7183950e6f4ab94b129a1f5da8c561c1958964_prof);

        
        $__internal_4873ac472c0bc675daa650ad3e41382b59bc7be7d87d12e3195e7e6ca2cc52ef->leave($__internal_4873ac472c0bc675daa650ad3e41382b59bc7be7d87d12e3195e7e6ca2cc52ef_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Meter:meterform.html.twig";
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
<form action=\"{{ path('home_meteradd') }}\" method=\"post\">

{{ form_errors(form) }}

<div class=\"input-group\">
\t<div class=\"form-group\">
\t  {{ form_label(form.metername, \"Description\") }}
\t  {{ form_errors(form.metername) }}
\t  {{ form_widget(form.metername) }}
\t</div>
\t<div class=\"form-group\">
\t  {{ form_label(form.resource, \"Resource\") }}
\t  {{ form_errors(form.resource) }}
\t  {{ form_widget(form.resource) }}
\t</div>
\t<div class=\"form-group\">
\t  {{ form_label(form.unit, \"Unit\") }}
\t  {{ form_errors(form.unit) }}
\t  {{ form_widget(form.unit) }}
\t</div>
\t{{ form_rest(form) }}

\t<div>
\t  <input type=\"submit\" class=\"btn btn-primary\" />
\t</div>
</div>

</form>
</div>
", "LljmHomeBundle:Meter:meterform.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Meter/meterform.html.twig");
    }
}
