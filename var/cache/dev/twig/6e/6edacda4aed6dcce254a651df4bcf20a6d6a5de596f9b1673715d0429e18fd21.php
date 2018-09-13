<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_52478f8ffc2bda80f1b68fd46c7423fc4945c514c3fd07b6eea7a9b0bcd8b909 extends Twig_Template
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
        $__internal_4afc1313fd855fe329dcf8b0fa48f497f5702156e8955a2daeacbf6a2e513688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4afc1313fd855fe329dcf8b0fa48f497f5702156e8955a2daeacbf6a2e513688->enter($__internal_4afc1313fd855fe329dcf8b0fa48f497f5702156e8955a2daeacbf6a2e513688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_b8c6473f63b57a06875ab45304cada452b233a1aa78ce8e43ee3f084ffc4c9c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8c6473f63b57a06875ab45304cada452b233a1aa78ce8e43ee3f084ffc4c9c7->enter($__internal_b8c6473f63b57a06875ab45304cada452b233a1aa78ce8e43ee3f084ffc4c9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_4afc1313fd855fe329dcf8b0fa48f497f5702156e8955a2daeacbf6a2e513688->leave($__internal_4afc1313fd855fe329dcf8b0fa48f497f5702156e8955a2daeacbf6a2e513688_prof);

        
        $__internal_b8c6473f63b57a06875ab45304cada452b233a1aa78ce8e43ee3f084ffc4c9c7->leave($__internal_b8c6473f63b57a06875ab45304cada452b233a1aa78ce8e43ee3f084ffc4c9c7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/lljm/web/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
