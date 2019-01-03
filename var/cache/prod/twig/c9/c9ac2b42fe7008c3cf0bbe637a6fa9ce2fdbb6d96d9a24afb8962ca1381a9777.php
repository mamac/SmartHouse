<?php

/* LljmGeolocationBundle:Remotelog:logrecord.html.twig */
class __TwigTemplate_9c04ec977b583dbb800a7011f5c9898b25687677347010045076c2dfe09e5994 extends Twig_Template
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
        // line 1
        echo "Record saved for ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["geoloclog"] ?? null), "userid", array()), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "LljmGeolocationBundle:Remotelog:logrecord.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "LljmGeolocationBundle:Remotelog:logrecord.html.twig", "/home/lljm/web/src/Lljm/GeolocationBundle/Resources/views/Remotelog/logrecord.html.twig");
    }
}
