<?php

/* LljmHealthBundle::layout.html.twig */
class __TwigTemplate_0d654f650bb59738503af1dafbd13f96bc796ce7b47a08aa3956c7177e14d997 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "LljmHealthBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'lljm_health_body' => array($this, 'block_lljm_health_body'),
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
        $this->displayBlock('lljm_health_body', $context, $blocks);
        // line 6
        echo "
";
    }

    // line 4
    public function block_lljm_health_body($context, array $blocks = array())
    {
        // line 5
        echo "  ";
    }

    public function getTemplateName()
    {
        return "LljmHealthBundle::layout.html.twig";
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
        return new Twig_Source("", "LljmHealthBundle::layout.html.twig", "/home/lljm/web/src/Lljm/HealthBundle/Resources/views/layout.html.twig");
    }
}
