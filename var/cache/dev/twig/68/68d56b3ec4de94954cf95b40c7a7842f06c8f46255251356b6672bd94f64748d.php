<?php

/* LljmHomeBundle:House:houseeditform.html.twig */
class __TwigTemplate_5d71b6493ba002817f3393cf1c5ef9ad24f03c0ee4a25679dfbec93539e15a91 extends Twig_Template
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
        $__internal_4dc7240d4c9d16591e4ab17ce44da5863c409e60ef784d3b0bf5e760bd7c8098 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dc7240d4c9d16591e4ab17ce44da5863c409e60ef784d3b0bf5e760bd7c8098->enter($__internal_4dc7240d4c9d16591e4ab17ce44da5863c409e60ef784d3b0bf5e760bd7c8098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:House:houseeditform.html.twig"));

        $__internal_e1ae1946d3a2ff9932bb5ed8b736bbea018a8c5e67d30d667cd148d6c6a415a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1ae1946d3a2ff9932bb5ed8b736bbea018a8c5e67d30d667cd148d6c6a415a7->enter($__internal_e1ae1946d3a2ff9932bb5ed8b736bbea018a8c5e67d30d667cd148d6c6a415a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:House:houseeditform.html.twig"));

        // line 1
        echo "<div>
<form action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_houseedit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["house"]) || array_key_exists("house", $context) ? $context["house"] : (function () { throw new Twig_Error_Runtime('Variable "house" does not exist.', 2, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" method=\"post\">

";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'errors');
        echo "

<div class=\"input-group\">
\t<div class=\"form-group\">
\t  ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), "address1", array()), 'label', array("label" => "Address 1"));
        echo "
\t  ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "address1", array()), 'errors');
        echo "
\t  ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "address1", array()), 'widget');
        echo "
\t</div>
\t<div class=\"form-group\">
\t  ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), "address2", array()), 'label', array("label" => "Address 2"));
        echo "
\t  ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "address2", array()), 'errors');
        echo "
\t  ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "address2", array()), 'widget');
        echo "
\t</div>
\t<div class=\"form-group\">
\t  ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "postcode", array()), 'label', array("label" => "Postal code"));
        echo "
\t  ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), "postcode", array()), 'errors');
        echo "
\t  ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), "postcode", array()), 'widget');
        echo "
\t</div>
\t<div class=\"form-group\">
\t  ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), "city", array()), 'label', array("label" => "City"));
        echo "
\t  ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), "city", array()), 'errors');
        echo "
\t  ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "city", array()), 'widget');
        echo "
\t</div>
\t<div class=\"form-group\">
\t  ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), "country", array()), 'label', array("label" => "Country"));
        echo "
\t  ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), "country", array()), 'errors');
        echo "
\t  ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), "country", array()), 'widget');
        echo "
\t</div>
\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), 'rest');
        echo "

\t<div>
\t  <input type=\"submit\" class=\"btn btn-primary\" />
\t</div>
</div>

</form>
</div>
";
        
        $__internal_4dc7240d4c9d16591e4ab17ce44da5863c409e60ef784d3b0bf5e760bd7c8098->leave($__internal_4dc7240d4c9d16591e4ab17ce44da5863c409e60ef784d3b0bf5e760bd7c8098_prof);

        
        $__internal_e1ae1946d3a2ff9932bb5ed8b736bbea018a8c5e67d30d667cd148d6c6a415a7->leave($__internal_e1ae1946d3a2ff9932bb5ed8b736bbea018a8c5e67d30d667cd148d6c6a415a7_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:House:houseeditform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 32,  104 => 30,  100 => 29,  96 => 28,  90 => 25,  86 => 24,  82 => 23,  76 => 20,  72 => 19,  68 => 18,  62 => 15,  58 => 14,  54 => 13,  48 => 10,  44 => 9,  40 => 8,  33 => 4,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
<form action=\"{{ path('home_houseedit', {'id': house.id}) }}\" method=\"post\">

{{ form_errors(form) }}

<div class=\"input-group\">
\t<div class=\"form-group\">
\t  {{ form_label(form.address1, \"Address 1\") }}
\t  {{ form_errors(form.address1) }}
\t  {{ form_widget(form.address1) }}
\t</div>
\t<div class=\"form-group\">
\t  {{ form_label(form.address2, \"Address 2\") }}
\t  {{ form_errors(form.address2) }}
\t  {{ form_widget(form.address2) }}
\t</div>
\t<div class=\"form-group\">
\t  {{ form_label(form.postcode, \"Postal code\") }}
\t  {{ form_errors(form.postcode) }}
\t  {{ form_widget(form.postcode) }}
\t</div>
\t<div class=\"form-group\">
\t  {{ form_label(form.city, \"City\") }}
\t  {{ form_errors(form.city) }}
\t  {{ form_widget(form.city) }}
\t</div>
\t<div class=\"form-group\">
\t  {{ form_label(form.country, \"Country\") }}
\t  {{ form_errors(form.country) }}
\t  {{ form_widget(form.country) }}
\t</div>
\t{{ form_rest(form) }}

\t<div>
\t  <input type=\"submit\" class=\"btn btn-primary\" />
\t</div>
</div>

</form>
</div>
", "LljmHomeBundle:House:houseeditform.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/House/houseeditform.html.twig");
    }
}
