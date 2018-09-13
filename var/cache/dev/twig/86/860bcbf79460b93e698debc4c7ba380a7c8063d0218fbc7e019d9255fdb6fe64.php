<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_7a53e10277949d0eae9ec42950f8ddb4150512313440d36616d703ad31297f82 extends Twig_Template
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
        $__internal_aedc1f1164a7832981a13cb2ade0ecc416ccb91c0760f7391e62db0f112f580d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aedc1f1164a7832981a13cb2ade0ecc416ccb91c0760f7391e62db0f112f580d->enter($__internal_aedc1f1164a7832981a13cb2ade0ecc416ccb91c0760f7391e62db0f112f580d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_6cbb4968f4e769fb7c14bc7d83d7ef88b72aad058eb8fe05bb63ec43ec252a41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cbb4968f4e769fb7c14bc7d83d7ef88b72aad058eb8fe05bb63ec43ec252a41->enter($__internal_6cbb4968f4e769fb7c14bc7d83d7ef88b72aad058eb8fe05bb63ec43ec252a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_aedc1f1164a7832981a13cb2ade0ecc416ccb91c0760f7391e62db0f112f580d->leave($__internal_aedc1f1164a7832981a13cb2ade0ecc416ccb91c0760f7391e62db0f112f580d_prof);

        
        $__internal_6cbb4968f4e769fb7c14bc7d83d7ef88b72aad058eb8fe05bb63ec43ec252a41->leave($__internal_6cbb4968f4e769fb7c14bc7d83d7ef88b72aad058eb8fe05bb63ec43ec252a41_prof);

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
