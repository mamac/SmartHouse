<?php

/* LljmHomeBundle:Zone:zoneeditform.html.twig */
class __TwigTemplate_893ba288b42f26114105e021cfb685bd9fe8abd1aef7307a32682dcd14b17b4c extends Twig_Template
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
        $__internal_562b2ee5e5c8635c14e0e6b5b0fd7f3dfa93b5fdae2579af8bf0572b7100dd4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_562b2ee5e5c8635c14e0e6b5b0fd7f3dfa93b5fdae2579af8bf0572b7100dd4c->enter($__internal_562b2ee5e5c8635c14e0e6b5b0fd7f3dfa93b5fdae2579af8bf0572b7100dd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Zone:zoneeditform.html.twig"));

        $__internal_d93adcaa5435a4ef78741090941cadaf4b165d4cb9083e10bbb1e4e1e004e032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d93adcaa5435a4ef78741090941cadaf4b165d4cb9083e10bbb1e4e1e004e032->enter($__internal_d93adcaa5435a4ef78741090941cadaf4b165d4cb9083e10bbb1e4e1e004e032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Zone:zoneeditform.html.twig"));

        // line 1
        echo "<div>
<form action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_zoneedit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["zone"]) || array_key_exists("zone", $context) ? $context["zone"] : (function () { throw new Twig_Error_Runtime('Variable "zone" does not exist.', 2, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
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
\t<div class=\"form-group\">
\t  ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), "heatingenabled", array()), 'label', array("label" => "Heating"));
        echo "
\t  ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "heatingenabled", array()), 'errors');
        echo "
\t  ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "heatingenabled", array()), 'widget');
        echo "
\t</div>
\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), 'rest');
        echo "

\t<div>
\t  <input type=\"submit\" class=\"btn btn-primary\" />
\t</div>
</div>

</form>
</div>
";
        
        $__internal_562b2ee5e5c8635c14e0e6b5b0fd7f3dfa93b5fdae2579af8bf0572b7100dd4c->leave($__internal_562b2ee5e5c8635c14e0e6b5b0fd7f3dfa93b5fdae2579af8bf0572b7100dd4c_prof);

        
        $__internal_d93adcaa5435a4ef78741090941cadaf4b165d4cb9083e10bbb1e4e1e004e032->leave($__internal_d93adcaa5435a4ef78741090941cadaf4b165d4cb9083e10bbb1e4e1e004e032_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Zone:zoneeditform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 17,  62 => 15,  58 => 14,  54 => 13,  48 => 10,  44 => 9,  40 => 8,  33 => 4,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
<form action=\"{{ path('home_zoneedit', {'id': zone.id}) }}\" method=\"post\">

{{ form_errors(form) }}

<div class=\"input-group\">
\t<div class=\"form-group\">
\t  {{ form_label(form.zonename, \"Zone name\")}}
\t  {{ form_errors(form.zonename) }}
\t  {{ form_widget(form.zonename) }}
\t</div>
\t<div class=\"form-group\">
\t  {{ form_label(form.heatingenabled, \"Heating\")}}
\t  {{ form_errors(form.heatingenabled) }}
\t  {{ form_widget(form.heatingenabled) }}
\t</div>
\t{{ form_rest(form) }}

\t<div>
\t  <input type=\"submit\" class=\"btn btn-primary\" />
\t</div>
</div>

</form>
</div>
", "LljmHomeBundle:Zone:zoneeditform.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Zone/zoneeditform.html.twig");
    }
}
