<?php

/* LljmGeolocationBundle:Remotelog:logrecord.html.twig */
class __TwigTemplate_aefe21605609317d51beff379e0bd071e3aaaabfffb2d6d49abbc2a9b5f124c4 extends Twig_Template
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
