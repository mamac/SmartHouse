<?php

/* LljmTasksBundle:Default:index.html.twig */
class __TwigTemplate_9053c351f0d6638a95b36555f39ddd6e59a6675a3fccecff242462b2c4f3f72c extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Task Management - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_lljm_tasks_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["taskrecords"] ?? null));
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
        return array (  149 => 51,  140 => 49,  131 => 45,  127 => 44,  120 => 42,  116 => 41,  112 => 40,  108 => 39,  104 => 38,  101 => 37,  96 => 36,  88 => 31,  84 => 30,  80 => 29,  76 => 28,  72 => 27,  55 => 13,  51 => 12,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "LljmTasksBundle:Default:index.html.twig", "/home/lljm/web/src/Lljm/TasksBundle/Resources/views/Default/index.html.twig");
    }
}
