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
        $__internal_89b17baf5a935be02d865a20438a6718475433b8f3fff65d57f6bf951115596f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89b17baf5a935be02d865a20438a6718475433b8f3fff65d57f6bf951115596f->enter($__internal_89b17baf5a935be02d865a20438a6718475433b8f3fff65d57f6bf951115596f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmTasksBundle:Default:index.html.twig"));

        $__internal_14858e04d987422eee1003abcc11d2f042e712820a9800f48d95a33f35192c8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14858e04d987422eee1003abcc11d2f042e712820a9800f48d95a33f35192c8a->enter($__internal_14858e04d987422eee1003abcc11d2f042e712820a9800f48d95a33f35192c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmTasksBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89b17baf5a935be02d865a20438a6718475433b8f3fff65d57f6bf951115596f->leave($__internal_89b17baf5a935be02d865a20438a6718475433b8f3fff65d57f6bf951115596f_prof);

        
        $__internal_14858e04d987422eee1003abcc11d2f042e712820a9800f48d95a33f35192c8a->leave($__internal_14858e04d987422eee1003abcc11d2f042e712820a9800f48d95a33f35192c8a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_40e36d40762aadb37a82c98b9730289605f61983a539bba6aa511c3eb861f4d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40e36d40762aadb37a82c98b9730289605f61983a539bba6aa511c3eb861f4d6->enter($__internal_40e36d40762aadb37a82c98b9730289605f61983a539bba6aa511c3eb861f4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f406a37bbf8462d7b218c3db80255b4934a96813933488679274dd962ac7b4b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f406a37bbf8462d7b218c3db80255b4934a96813933488679274dd962ac7b4b8->enter($__internal_f406a37bbf8462d7b218c3db80255b4934a96813933488679274dd962ac7b4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Task Management - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f406a37bbf8462d7b218c3db80255b4934a96813933488679274dd962ac7b4b8->leave($__internal_f406a37bbf8462d7b218c3db80255b4934a96813933488679274dd962ac7b4b8_prof);

        
        $__internal_40e36d40762aadb37a82c98b9730289605f61983a539bba6aa511c3eb861f4d6->leave($__internal_40e36d40762aadb37a82c98b9730289605f61983a539bba6aa511c3eb861f4d6_prof);

    }

    // line 7
    public function block_lljm_tasks_body($context, array $blocks = array())
    {
        $__internal_69b7bd072a9d981a6a48dd4e3b66da69d5887b4c82a7160dadf58ff9110201b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69b7bd072a9d981a6a48dd4e3b66da69d5887b4c82a7160dadf58ff9110201b9->enter($__internal_69b7bd072a9d981a6a48dd4e3b66da69d5887b4c82a7160dadf58ff9110201b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_tasks_body"));

        $__internal_1faf92dcca0139f10da7c9009622f1c0ca01ffcb0554e683a841d6fa0c4ab4ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1faf92dcca0139f10da7c9009622f1c0ca01ffcb0554e683a841d6fa0c4ab4ef->enter($__internal_1faf92dcca0139f10da7c9009622f1c0ca01ffcb0554e683a841d6fa0c4ab4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_tasks_body"));

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
        
        $__internal_1faf92dcca0139f10da7c9009622f1c0ca01ffcb0554e683a841d6fa0c4ab4ef->leave($__internal_1faf92dcca0139f10da7c9009622f1c0ca01ffcb0554e683a841d6fa0c4ab4ef_prof);

        
        $__internal_69b7bd072a9d981a6a48dd4e3b66da69d5887b4c82a7160dadf58ff9110201b9->leave($__internal_69b7bd072a9d981a6a48dd4e3b66da69d5887b4c82a7160dadf58ff9110201b9_prof);

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
