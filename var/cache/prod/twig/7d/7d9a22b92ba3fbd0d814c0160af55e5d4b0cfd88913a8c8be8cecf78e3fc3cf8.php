<?php

/* LljmAdminBundle::layout.html.twig */
class __TwigTemplate_310f9a4d1bc5e36d08087a01dbd7d8bd8dd37fd750ac93b08b51f493c9165ead extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "LljmAdminBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'lljm_admin_body' => array($this, 'block_lljm_admin_body'),
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
        $this->displayBlock('lljm_admin_body', $context, $blocks);
        // line 6
        echo "
";
    }

    // line 4
    public function block_lljm_admin_body($context, array $blocks = array())
    {
        // line 5
        echo "  ";
    }

    public function getTemplateName()
    {
        return "LljmAdminBundle::layout.html.twig";
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
        return new Twig_Source("", "LljmAdminBundle::layout.html.twig", "/home/lljm/web/src/Lljm/AdminBundle/Resources/views/layout.html.twig");
    }
}
