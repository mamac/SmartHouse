<?php

/* LljmTasksBundle:Default:taskdel.html.twig */
class __TwigTemplate_a7dab7bec87ac6a11cb74c5e803a1a18791615d39e8d24b5d0f159da5515bb37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LljmTasksBundle::layout.html.twig", "LljmTasksBundle:Default:taskdel.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'lljm_tasks_body' => array($this, 'block_lljm_tasks_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LljmTasksBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f99823fd25eacaec25bd720a6b23b97fc390968ed290a684088345671c7b6d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f99823fd25eacaec25bd720a6b23b97fc390968ed290a684088345671c7b6d5->enter($__internal_9f99823fd25eacaec25bd720a6b23b97fc390968ed290a684088345671c7b6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmTasksBundle:Default:taskdel.html.twig"));

        $__internal_ac78c24197b5c63944cba4333992c7d9233c8e510a628a9e97964f8e34d92538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac78c24197b5c63944cba4333992c7d9233c8e510a628a9e97964f8e34d92538->enter($__internal_ac78c24197b5c63944cba4333992c7d9233c8e510a628a9e97964f8e34d92538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmTasksBundle:Default:taskdel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f99823fd25eacaec25bd720a6b23b97fc390968ed290a684088345671c7b6d5->leave($__internal_9f99823fd25eacaec25bd720a6b23b97fc390968ed290a684088345671c7b6d5_prof);

        
        $__internal_ac78c24197b5c63944cba4333992c7d9233c8e510a628a9e97964f8e34d92538->leave($__internal_ac78c24197b5c63944cba4333992c7d9233c8e510a628a9e97964f8e34d92538_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_34e7825edf7175cf44c677586020808792adf18a1b1a1c6be012dd8f9a14d575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34e7825edf7175cf44c677586020808792adf18a1b1a1c6be012dd8f9a14d575->enter($__internal_34e7825edf7175cf44c677586020808792adf18a1b1a1c6be012dd8f9a14d575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_284ed404d117d7e623dc0ab1a09f529c2c70ec7b15bf557f019cffa42a5bc402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_284ed404d117d7e623dc0ab1a09f529c2c70ec7b15bf557f019cffa42a5bc402->enter($__internal_284ed404d117d7e623dc0ab1a09f529c2c70ec7b15bf557f019cffa42a5bc402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Delete task - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_284ed404d117d7e623dc0ab1a09f529c2c70ec7b15bf557f019cffa42a5bc402->leave($__internal_284ed404d117d7e623dc0ab1a09f529c2c70ec7b15bf557f019cffa42a5bc402_prof);

        
        $__internal_34e7825edf7175cf44c677586020808792adf18a1b1a1c6be012dd8f9a14d575->leave($__internal_34e7825edf7175cf44c677586020808792adf18a1b1a1c6be012dd8f9a14d575_prof);

    }

    // line 8
    public function block_lljm_tasks_body($context, array $blocks = array())
    {
        $__internal_1d3e62283ba5f5692925d54011a9f25fa39d6f4971bb23a936355b5829654493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d3e62283ba5f5692925d54011a9f25fa39d6f4971bb23a936355b5829654493->enter($__internal_1d3e62283ba5f5692925d54011a9f25fa39d6f4971bb23a936355b5829654493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_tasks_body"));

        $__internal_c180eeffd84cd1adf9335a9b9fd6ee7124167decc05c16926f172d94db3bd3b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c180eeffd84cd1adf9335a9b9fd6ee7124167decc05c16926f172d94db3bd3b7->enter($__internal_c180eeffd84cd1adf9335a9b9fd6ee7124167decc05c16926f172d94db3bd3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_tasks_body"));

        // line 9
        echo "
  <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete a task"), "html", null, true);
        echo "</h2>

  <p>
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Confirm you want to delete the task below"), "html", null, true);
        echo ":
    <br>
    - ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new Twig_Error_Runtime('Variable "task" does not exist.', 15, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "<br>
    - ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new Twig_Error_Runtime('Variable "task" does not exist.', 16, $this->getSourceContext()); })()), "taskdesc", array()), "html", null, true);
        echo "<br>
    - ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new Twig_Error_Runtime('Variable "task" does not exist.', 17, $this->getSourceContext()); })()), "dateStart", array()), "Y-m-d"), "html", null, true);
        echo "<br>
    - ";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new Twig_Error_Runtime('Variable "task" does not exist.', 18, $this->getSourceContext()); })()), "dateEnd", array()), "Y-m-d"), "html", null, true);
        echo "<br>
  </p>

  <form action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tasks_taskdel", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new Twig_Error_Runtime('Variable "task" does not exist.', 21, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tasks");
        echo "\" class=\"btn btn-default glyphicon glyphicon-chevron-left\">
      Back
    </a>
    <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger\" />
    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), 'rest');
        echo "
  </form>

";
        
        $__internal_c180eeffd84cd1adf9335a9b9fd6ee7124167decc05c16926f172d94db3bd3b7->leave($__internal_c180eeffd84cd1adf9335a9b9fd6ee7124167decc05c16926f172d94db3bd3b7_prof);

        
        $__internal_1d3e62283ba5f5692925d54011a9f25fa39d6f4971bb23a936355b5829654493->leave($__internal_1d3e62283ba5f5692925d54011a9f25fa39d6f4971bb23a936355b5829654493_prof);

    }

    public function getTemplateName()
    {
        return "LljmTasksBundle:Default:taskdel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 26,  108 => 22,  104 => 21,  98 => 18,  94 => 17,  90 => 16,  86 => 15,  81 => 13,  75 => 10,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"LljmTasksBundle::layout.html.twig\" %}

{% block title %}
  Delete task - {{ parent() }}
{% endblock %}

{% block lljm_tasks_body %}

  <h2>{{ 'Delete a task' | trans }}</h2>

  <p>
    {{ 'Confirm you want to delete the task below' | trans }}:
    <br>
    - {{ task.id }}<br>
    - {{ task.taskdesc }}<br>
    - {{ task.dateStart | date(\"Y-m-d\") }}<br>
    - {{ task.dateEnd | date(\"Y-m-d\") }}<br>
  </p>

  <form action=\"{{ path('tasks_taskdel', {'id': task.id}) }}\" method=\"post\">
    <a href=\"{{ path('tasks')}}\" class=\"btn btn-default glyphicon glyphicon-chevron-left\">
      Back
    </a>
    <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger\" />
    {{ form_rest(form) }}
  </form>

{% endblock %}", "LljmTasksBundle:Default:taskdel.html.twig", "/home/lljm/web/src/Lljm/TasksBundle/Resources/views/Default/taskdel.html.twig");
    }
}
