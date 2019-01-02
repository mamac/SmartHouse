<?php

/* LljmTasksBundle:Default:taskform.html.twig */
class __TwigTemplate_01a8b0265e880a9355de72b754e70aa3dacce76cddc0e0684f1ac835af3b7c84 extends Twig_Template
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
        $__internal_4a98eeb82afd368facd8023db5cd4a698fb739d696f0ac65bd8b8a1f4f778482 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a98eeb82afd368facd8023db5cd4a698fb739d696f0ac65bd8b8a1f4f778482->enter($__internal_4a98eeb82afd368facd8023db5cd4a698fb739d696f0ac65bd8b8a1f4f778482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmTasksBundle:Default:taskform.html.twig"));

        $__internal_ef29a5e4ad56c455b681dd8572d2989199b978b0f7ac50da9fd05236fc373769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef29a5e4ad56c455b681dd8572d2989199b978b0f7ac50da9fd05236fc373769->enter($__internal_ef29a5e4ad56c455b681dd8572d2989199b978b0f7ac50da9fd05236fc373769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmTasksBundle:Default:taskform.html.twig"));

        // line 1
        echo "<div>
<form action=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tasks_taskadd");
        echo "\" method=\"post\">

";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'errors');
        echo "

<div class=\"input-group\">


\t<div class=\"form-group\">
\t  ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "taskdesc", array()), 'label', array("label" => "Description"));
        echo "
\t  ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "taskdesc", array()), 'errors');
        echo "
\t  ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), "taskdesc", array()), 'widget');
        echo "
\t</div>
\t<div class=\"form-group\">
\t  ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "dateStart", array()), 'label', array("label" => "Start date"));
        echo "
\t  ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "dateStart", array()), 'errors');
        echo "
\t  ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "dateStart", array()), 'widget');
        echo "
\t</div>
\t<div class=\"form-group\">
\t  ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), "dateEnd", array()), 'label', array("label" => "End date"));
        echo "
\t  ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "dateEnd", array()), 'errors');
        echo "
\t  ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), "dateEnd", array()), 'widget');
        echo "
\t</div>
\t<br>
\t<div class=\"form-group\">
\t  ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), "user", array()), 'label', array("label" => "Assignee"));
        echo "
\t  ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), "user", array()), 'errors');
        echo "
\t  ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), "user", array()), 'widget');
        echo "
\t</div>
\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'rest');
        echo "

\t<div>
\t  <input type=\"submit\" class=\"btn btn-primary\" />
\t</div>
</div>

</form>
</div>
";
        
        $__internal_4a98eeb82afd368facd8023db5cd4a698fb739d696f0ac65bd8b8a1f4f778482->leave($__internal_4a98eeb82afd368facd8023db5cd4a698fb739d696f0ac65bd8b8a1f4f778482_prof);

        
        $__internal_ef29a5e4ad56c455b681dd8572d2989199b978b0f7ac50da9fd05236fc373769->leave($__internal_ef29a5e4ad56c455b681dd8572d2989199b978b0f7ac50da9fd05236fc373769_prof);

    }

    public function getTemplateName()
    {
        return "LljmTasksBundle:Default:taskform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 30,  93 => 28,  89 => 27,  85 => 26,  78 => 22,  74 => 21,  70 => 20,  64 => 17,  60 => 16,  56 => 15,  50 => 12,  46 => 11,  42 => 10,  33 => 4,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
<form action=\"{{ path('tasks_taskadd') }}\" method=\"post\">

{{ form_errors(form) }}

<div class=\"input-group\">


\t<div class=\"form-group\">
\t  {{ form_label(form.taskdesc, \"Description\") }}
\t  {{ form_errors(form.taskdesc) }}
\t  {{ form_widget(form.taskdesc) }}
\t</div>
\t<div class=\"form-group\">
\t  {{ form_label(form.dateStart, \"Start date\") }}
\t  {{ form_errors(form.dateStart) }}
\t  {{ form_widget(form.dateStart) }}
\t</div>
\t<div class=\"form-group\">
\t  {{ form_label(form.dateEnd, \"End date\") }}
\t  {{ form_errors(form.dateEnd) }}
\t  {{ form_widget(form.dateEnd) }}
\t</div>
\t<br>
\t<div class=\"form-group\">
\t  {{ form_label(form.user, \"Assignee\") }}
\t  {{ form_errors(form.user) }}
\t  {{ form_widget(form.user) }}
\t</div>
\t{{ form_rest(form) }}

\t<div>
\t  <input type=\"submit\" class=\"btn btn-primary\" />
\t</div>
</div>

</form>
</div>
", "LljmTasksBundle:Default:taskform.html.twig", "/home/lljm/web/src/Lljm/TasksBundle/Resources/views/Default/taskform.html.twig");
    }
}
