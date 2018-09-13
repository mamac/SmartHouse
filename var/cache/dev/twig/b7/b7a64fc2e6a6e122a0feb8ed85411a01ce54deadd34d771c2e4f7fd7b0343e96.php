<?php

/* LljmHomeBundle:Zone:zoneeditform.html.twig */
class __TwigTemplate_9d3251a35d8638c58223155ed9794d1ffbc7c8193788909c6be1473d8b64d514 extends Twig_Template
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
        $__internal_c6a5dbf7ae62e64657e70893bda5c86d571967b051becd05bace97b2ea4f31c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6a5dbf7ae62e64657e70893bda5c86d571967b051becd05bace97b2ea4f31c2->enter($__internal_c6a5dbf7ae62e64657e70893bda5c86d571967b051becd05bace97b2ea4f31c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Zone:zoneeditform.html.twig"));

        $__internal_c73043cd3a2f38bcde9f693a02b3294f41dc1be0abc68bf96e8909605e834b39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c73043cd3a2f38bcde9f693a02b3294f41dc1be0abc68bf96e8909605e834b39->enter($__internal_c73043cd3a2f38bcde9f693a02b3294f41dc1be0abc68bf96e8909605e834b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Zone:zoneeditform.html.twig"));

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
        
        $__internal_c6a5dbf7ae62e64657e70893bda5c86d571967b051becd05bace97b2ea4f31c2->leave($__internal_c6a5dbf7ae62e64657e70893bda5c86d571967b051becd05bace97b2ea4f31c2_prof);

        
        $__internal_c73043cd3a2f38bcde9f693a02b3294f41dc1be0abc68bf96e8909605e834b39->leave($__internal_c73043cd3a2f38bcde9f693a02b3294f41dc1be0abc68bf96e8909605e834b39_prof);

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
