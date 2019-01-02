<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_4dd5137b7e37a7e9798313ae9428d9e32c53e4b3c2920133cd7d3f4b2564b60b extends Twig_Template
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
        $__internal_95de183c513697e2273c921d1b47e4b9a90be527de9bdea7243470baca0424bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95de183c513697e2273c921d1b47e4b9a90be527de9bdea7243470baca0424bc->enter($__internal_95de183c513697e2273c921d1b47e4b9a90be527de9bdea7243470baca0424bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_fa25e421707340432c6344595000d7efdbfa8e3d23df04a60a273a1e51dd7c82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa25e421707340432c6344595000d7efdbfa8e3d23df04a60a273a1e51dd7c82->enter($__internal_fa25e421707340432c6344595000d7efdbfa8e3d23df04a60a273a1e51dd7c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_95de183c513697e2273c921d1b47e4b9a90be527de9bdea7243470baca0424bc->leave($__internal_95de183c513697e2273c921d1b47e4b9a90be527de9bdea7243470baca0424bc_prof);

        
        $__internal_fa25e421707340432c6344595000d7efdbfa8e3d23df04a60a273a1e51dd7c82->leave($__internal_fa25e421707340432c6344595000d7efdbfa8e3d23df04a60a273a1e51dd7c82_prof);

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
