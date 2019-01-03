<?php

/* LljmTasksBundle:Default:taskedit.html.twig */
class __TwigTemplate_e7713b0df2dbd4da2e3d96f9f3a4b043157a30d999328d951c95b71d050f3d62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LljmTasksBundle::layout.html.twig", "LljmTasksBundle:Default:taskedit.html.twig", 2);
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Task Management - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_lljm_tasks_body($context, array $blocks = array())
    {
        // line 10
        echo "
  <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update a task"), "html", null, true);
        echo "</h2>
<ul>
  ";
        // line 13
        $this->loadTemplate("LljmTasksBundle:Default:taskeditform.html.twig", "LljmTasksBundle:Default:taskedit.html.twig", 13)->display($context);
        // line 14
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "LljmTasksBundle:Default:taskedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  50 => 13,  45 => 11,  42 => 10,  39 => 9,  32 => 6,  29 => 5,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "LljmTasksBundle:Default:taskedit.html.twig", "/home/lljm/web/src/Lljm/TasksBundle/Resources/views/Default/taskedit.html.twig");
    }
}
