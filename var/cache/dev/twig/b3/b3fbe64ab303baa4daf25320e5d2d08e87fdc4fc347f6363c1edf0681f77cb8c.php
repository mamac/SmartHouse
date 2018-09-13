<?php

/* LljmHomeBundle:Subzone:subzoneform.html.twig */
class __TwigTemplate_d63b05af0a0e4fbd44de9acbb8213ce0972f7dc7f2bd5b5fefe0913e7e9ef310 extends Twig_Template
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
        $__internal_554551389358652b540b4d09f80d07f1efe88454a3c7bf002db07f0b946726a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_554551389358652b540b4d09f80d07f1efe88454a3c7bf002db07f0b946726a3->enter($__internal_554551389358652b540b4d09f80d07f1efe88454a3c7bf002db07f0b946726a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Subzone:subzoneform.html.twig"));

        $__internal_42b25b7afb0c264967506ba2be62aafaa32a311e96a1e90938d1f841ae0349ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42b25b7afb0c264967506ba2be62aafaa32a311e96a1e90938d1f841ae0349ba->enter($__internal_42b25b7afb0c264967506ba2be62aafaa32a311e96a1e90938d1f841ae0349ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Subzone:subzoneform.html.twig"));

        // line 1
        echo "<div>
<form action=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_subzoneadd");
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
        
        $__internal_554551389358652b540b4d09f80d07f1efe88454a3c7bf002db07f0b946726a3->leave($__internal_554551389358652b540b4d09f80d07f1efe88454a3c7bf002db07f0b946726a3_prof);

        
        $__internal_42b25b7afb0c264967506ba2be62aafaa32a311e96a1e90938d1f841ae0349ba->leave($__internal_42b25b7afb0c264967506ba2be62aafaa32a311e96a1e90938d1f841ae0349ba_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Subzone:subzoneform.html.twig";
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
<form action=\"{{ path('home_subzoneadd') }}\" method=\"post\">

{{ form_errors(form) }}

<div class=\"input-group\">
\t<div class=\"form-group\">
\t  {{ form_label(form.subzonename, \"Sub zone name\") }}
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
", "LljmHomeBundle:Subzone:subzoneform.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Subzone/subzoneform.html.twig");
    }
}
