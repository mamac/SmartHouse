<?php

/* LljmGeolocationBundle::layout.html.twig */
class __TwigTemplate_f18f349deb1421da699f2bfc9910babc9b0749e2badc833b4bf5677610c3186a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "LljmGeolocationBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'lljm_geolocation_body' => array($this, 'block_lljm_geolocation_body'),
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
        $this->displayBlock('lljm_geolocation_body', $context, $blocks);
        // line 6
        echo "
";
    }

    // line 4
    public function block_lljm_geolocation_body($context, array $blocks = array())
    {
        // line 5
        echo "  ";
    }

    public function getTemplateName()
    {
        return "LljmGeolocationBundle::layout.html.twig";
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
        return new Twig_Source("", "LljmGeolocationBundle::layout.html.twig", "/home/lljm/web/src/Lljm/GeolocationBundle/Resources/views/layout.html.twig");
    }
}
