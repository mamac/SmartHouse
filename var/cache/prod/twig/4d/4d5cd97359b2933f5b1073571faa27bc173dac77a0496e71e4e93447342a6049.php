<?php

/* LljmTasksBundle::layout.html.twig */
class __TwigTemplate_9d4b36ed71c7a5a6cf7d151f04025e2ccb2410be3f294d1a9cb6475022a790ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "LljmTasksBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'lljm_tasks_body' => array($this, 'block_lljm_tasks_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        $this->displayBlock('lljm_tasks_body', $context, $blocks);
        // line 6
        echo "
";
    }

    // line 4
    public function block_lljm_tasks_body($context, array $blocks = array())
    {
        // line 5
        echo "  ";
    }

    public function getTemplateName()
    {
        return "LljmTasksBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  35 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "LljmTasksBundle::layout.html.twig", "/home/lljm/web/src/Lljm/TasksBundle/Resources/views/layout.html.twig");
    }
}
