<?php

/* LljmHomeBundle:Subzone:subzoneeditform.html.twig */
class __TwigTemplate_77d82224e49b25e4fb22c27391d3a9f992032599bf1454fad9932ad6ae08821b extends Twig_Template
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
        $__internal_5327c33f44c76f432c6d4ea0c699448bda971a3cf5c64f22a8ba90997fede554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5327c33f44c76f432c6d4ea0c699448bda971a3cf5c64f22a8ba90997fede554->enter($__internal_5327c33f44c76f432c6d4ea0c699448bda971a3cf5c64f22a8ba90997fede554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Subzone:subzoneeditform.html.twig"));

        $__internal_e7efb74848732b69ef13723f13fdcfafa9875ef7d7ce6e5fd713f2c91fbde464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7efb74848732b69ef13723f13fdcfafa9875ef7d7ce6e5fd713f2c91fbde464->enter($__internal_e7efb74848732b69ef13723f13fdcfafa9875ef7d7ce6e5fd713f2c91fbde464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Subzone:subzoneeditform.html.twig"));

        // line 1
        echo "<div>
<form action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_subzoneedit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["subzone"]) || array_key_exists("subzone", $context) ? $context["subzone"] : (function () { throw new Twig_Error_Runtime('Variable "subzone" does not exist.', 2, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" method=\"post\">

";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'errors');
        echo "

<div class=\"input-group\">
\t<div class=\"form-group\">
\t  ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), "subzonename", array()), 'label', array("label" => "Sub zone name"));
        echo "
\t  ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "subzonename", array()), 'errors');
        echo "
\t  ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "subzonename", array()), 'widget');
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
        
        $__internal_5327c33f44c76f432c6d4ea0c699448bda971a3cf5c64f22a8ba90997fede554->leave($__internal_5327c33f44c76f432c6d4ea0c699448bda971a3cf5c64f22a8ba90997fede554_prof);

        
        $__internal_e7efb74848732b69ef13723f13fdcfafa9875ef7d7ce6e5fd713f2c91fbde464->leave($__internal_e7efb74848732b69ef13723f13fdcfafa9875ef7d7ce6e5fd713f2c91fbde464_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Subzone:subzoneeditform.html.twig";
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
<form action=\"{{ path('home_subzoneedit', {'id': subzone.id}) }}\" method=\"post\">

{{ form_errors(form) }}

<div class=\"input-group\">
\t<div class=\"form-group\">
\t  {{ form_label(form.subzonename, \"Sub zone name\")}}
\t  {{ form_errors(form.subzonename) }}
\t  {{ form_widget(form.subzonename) }}
\t</div>
\t{{ form_rest(form) }}

\t<div>
\t  <input type=\"submit\" class=\"btn btn-primary\" />
\t</div>
</div>

</form>
</div>
", "LljmHomeBundle:Subzone:subzoneeditform.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Subzone/subzoneeditform.html.twig");
    }
}
