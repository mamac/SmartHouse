<?php

/* LljmTasksBundle:Default:index.html.twig */
class __TwigTemplate_b3b6142f3fc0e504b0cd49773ee5b7553bb6565c53875457f00661f9b79a8f6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LljmTasksBundle::layout.html.twig", "LljmTasksBundle:Default:index.html.twig", 1);
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
        $__internal_91666882639dfcc62d380e72407f4a51e091062a54ef0d7975c0aeb0eb18af70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91666882639dfcc62d380e72407f4a51e091062a54ef0d7975c0aeb0eb18af70->enter($__internal_91666882639dfcc62d380e72407f4a51e091062a54ef0d7975c0aeb0eb18af70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmTasksBundle:Default:index.html.twig"));

        $__internal_b2d8c080b2c81d05ea189c2ad8980aa6ff6d8c30f50432ce6e2476441de85935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2d8c080b2c81d05ea189c2ad8980aa6ff6d8c30f50432ce6e2476441de85935->enter($__internal_b2d8c080b2c81d05ea189c2ad8980aa6ff6d8c30f50432ce6e2476441de85935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmTasksBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91666882639dfcc62d380e72407f4a51e091062a54ef0d7975c0aeb0eb18af70->leave($__internal_91666882639dfcc62d380e72407f4a51e091062a54ef0d7975c0aeb0eb18af70_prof);

        
        $__internal_b2d8c080b2c81d05ea189c2ad8980aa6ff6d8c30f50432ce6e2476441de85935->leave($__internal_b2d8c080b2c81d05ea189c2ad8980aa6ff6d8c30f50432ce6e2476441de85935_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca9225f5112c673d568bb893ba51d10e461eacb200a151047fd46f9618fd2ec3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca9225f5112c673d568bb893ba51d10e461eacb200a151047fd46f9618fd2ec3->enter($__internal_ca9225f5112c673d568bb893ba51d10e461eacb200a151047fd46f9618fd2ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_677e167dcd7db9bd7c42e2bc2aac44e8ae37d0f0fb4bea262573dfb2ad42c047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_677e167dcd7db9bd7c42e2bc2aac44e8ae37d0f0fb4bea262573dfb2ad42c047->enter($__internal_677e167dcd7db9bd7c42e2bc2aac44e8ae37d0f0fb4bea262573dfb2ad42c047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Task Management - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_677e167dcd7db9bd7c42e2bc2aac44e8ae37d0f0fb4bea262573dfb2ad42c047->leave($__internal_677e167dcd7db9bd7c42e2bc2aac44e8ae37d0f0fb4bea262573dfb2ad42c047_prof);

        
        $__internal_ca9225f5112c673d568bb893ba51d10e461eacb200a151047fd46f9618fd2ec3->leave($__internal_ca9225f5112c673d568bb893ba51d10e461eacb200a151047fd46f9618fd2ec3_prof);

    }

    // line 7
    public function block_lljm_tasks_body($context, array $blocks = array())
    {
        $__internal_30b2ecdd313d8e299a230051da9becfb4c21fac4aa37944e977f76b027ae74d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30b2ecdd313d8e299a230051da9becfb4c21fac4aa37944e977f76b027ae74d7->enter($__internal_30b2ecdd313d8e299a230051da9becfb4c21fac4aa37944e977f76b027ae74d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_tasks_body"));

        $__internal_be0243ef334470a685b931f27f3305ee35fb27a8a07168bad4e79a47a12afda4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be0243ef334470a685b931f27f3305ee35fb27a8a07168bad4e79a47a12afda4->enter($__internal_be0243ef334470a685b931f27f3305ee35fb27a8a07168bad4e79a47a12afda4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_tasks_body"));

        // line 8
        echo "
<h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Task Management"), "html", null, true);
        echo "</h2>

<div>
  <a class=\"btn btn-default btn-sm glyphicon glyphicon-plus\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tasks_taskadd");
        echo "\">
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
        echo "
  </a>


</div>

<div>


    <div class=\"table-responsive\">

      <table class=\"table table-striped\">
        <thead>
          <tr>
            <th>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
        echo "</th>
            <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Start date"), "html", null, true);
        echo "</th>
            <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("End date"), "html", null, true);
        echo "</th>
            <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Assignee"), "html", null, true);
        echo "</th>
            <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Completed"), "html", null, true);
        echo "</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
  ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taskrecords"]) || array_key_exists("taskrecords", $context) ? $context["taskrecords"] : (function () { throw new Twig_Error_Runtime('Variable "taskrecords" does not exist.', 36, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["taskrecord"]) {
            // line 37
            echo "          <tr>
            <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["taskrecord"], "taskdesc", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["taskrecord"], "dateStart", array()), "Y-m-d"), "html", null, true);
            echo "</td>
            <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["taskrecord"], "dateEnd", array()), "Y-m-d"), "html", null, true);
            echo "</td>
            <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["taskrecord"], "username", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 42
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["taskrecord"], "completed", array()) == true)) {
                echo " <span class=\"btn glyphicon glyphicon-check\"> ";
            }
            echo "</td>
            <td>
              <a class=\"btn glyphicon glyphicon-pencil red\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tasks_taskedit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["taskrecord"], "id", array()))), "html", null, true);
            echo "\">
              <a class=\"btn glyphicon glyphicon-trash red \" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tasks_taskdel", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["taskrecord"], "id", array()))), "html", null, true);
            echo "\">
            </td>
          </tr>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            echo "    <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No record in this table"), "html", null, true);
            echo ".</p>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taskrecord'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
      </table>
    </div>
</div>

";
        
        $__internal_be0243ef334470a685b931f27f3305ee35fb27a8a07168bad4e79a47a12afda4->leave($__internal_be0243ef334470a685b931f27f3305ee35fb27a8a07168bad4e79a47a12afda4_prof);

        
        $__internal_30b2ecdd313d8e299a230051da9becfb4c21fac4aa37944e977f76b027ae74d7->leave($__internal_30b2ecdd313d8e299a230051da9becfb4c21fac4aa37944e977f76b027ae74d7_prof);

    }

    public function getTemplateName()
    {
        return "LljmTasksBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 51,  170 => 49,  161 => 45,  157 => 44,  150 => 42,  146 => 41,  142 => 40,  138 => 39,  134 => 38,  131 => 37,  126 => 36,  118 => 31,  114 => 30,  110 => 29,  106 => 28,  102 => 27,  85 => 13,  81 => 12,  75 => 9,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"LljmTasksBundle::layout.html.twig\" %}

{% block title %}
  Task Management - {{ parent() }}
{% endblock %}

{% block lljm_tasks_body %}

<h2>{{ 'Task Management' | trans }}</h2>

<div>
  <a class=\"btn btn-default btn-sm glyphicon glyphicon-plus\" href=\"{{ path('tasks_taskadd') }}\">
    {{ 'Add' | trans }}
  </a>


</div>

<div>


    <div class=\"table-responsive\">

      <table class=\"table table-striped\">
        <thead>
          <tr>
            <th>{{ 'Description' | trans }}</th>
            <th>{{ 'Start date' | trans }}</th>
            <th>{{ 'End date' | trans }}</th>
            <th>{{ 'Assignee' | trans }}</th>
            <th>{{ 'Completed' | trans }}</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
  {% for taskrecord in taskrecords %}
          <tr>
            <td>{{ taskrecord.taskdesc }}</td>
            <td>{{ taskrecord.dateStart | date(\"Y-m-d\")}}</td>
            <td>{{ taskrecord.dateEnd | date(\"Y-m-d\")}}</td>
            <td>{{ taskrecord.username }}</td>
            <td>{% if taskrecord.completed == true %} <span class=\"btn glyphicon glyphicon-check\"> {% endif %}</td>
            <td>
              <a class=\"btn glyphicon glyphicon-pencil red\" href=\"{{ path('tasks_taskedit', {'id': taskrecord.id}) }}\">
              <a class=\"btn glyphicon glyphicon-trash red \" href=\"{{ path('tasks_taskdel', {'id': taskrecord.id}) }}\">
            </td>
          </tr>
  {% else %}
    <p>{{ 'No record in this table' | trans }}.</p>
  {% endfor %}
        </tbody>
      </table>
    </div>
</div>

{% endblock %}", "LljmTasksBundle:Default:index.html.twig", "/home/lljm/web/src/Lljm/TasksBundle/Resources/views/Default/index.html.twig");
    }
}
