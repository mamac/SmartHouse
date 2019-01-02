<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_9b329706f8f6e4ae15e92372efccdbb719956ed3743767ea8f81f35d0c7653c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64f21296f6f03927003e8bbf0af7eaf2ab6b750739bbfe389dc14cf8485e1924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64f21296f6f03927003e8bbf0af7eaf2ab6b750739bbfe389dc14cf8485e1924->enter($__internal_64f21296f6f03927003e8bbf0af7eaf2ab6b750739bbfe389dc14cf8485e1924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_673fb5063b6e70e5b4f3a72669751611c968a272cebf2fe46a6eabafd9e6fab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_673fb5063b6e70e5b4f3a72669751611c968a272cebf2fe46a6eabafd9e6fab3->enter($__internal_673fb5063b6e70e5b4f3a72669751611c968a272cebf2fe46a6eabafd9e6fab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64f21296f6f03927003e8bbf0af7eaf2ab6b750739bbfe389dc14cf8485e1924->leave($__internal_64f21296f6f03927003e8bbf0af7eaf2ab6b750739bbfe389dc14cf8485e1924_prof);

        
        $__internal_673fb5063b6e70e5b4f3a72669751611c968a272cebf2fe46a6eabafd9e6fab3->leave($__internal_673fb5063b6e70e5b4f3a72669751611c968a272cebf2fe46a6eabafd9e6fab3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6ae6d5affe818401aeffa2a1d0e06e6d15330c1437eaa9e6cd35fb708688f965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ae6d5affe818401aeffa2a1d0e06e6d15330c1437eaa9e6cd35fb708688f965->enter($__internal_6ae6d5affe818401aeffa2a1d0e06e6d15330c1437eaa9e6cd35fb708688f965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0cb32e6cef7a0badf6f2f6815de784c6728e95a7fbde503f4922928b586c10b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb32e6cef7a0badf6f2f6815de784c6728e95a7fbde503f4922928b586c10b4->enter($__internal_0cb32e6cef7a0badf6f2f6815de784c6728e95a7fbde503f4922928b586c10b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_0cb32e6cef7a0badf6f2f6815de784c6728e95a7fbde503f4922928b586c10b4->leave($__internal_0cb32e6cef7a0badf6f2f6815de784c6728e95a7fbde503f4922928b586c10b4_prof);

        
        $__internal_6ae6d5affe818401aeffa2a1d0e06e6d15330c1437eaa9e6cd35fb708688f965->leave($__internal_6ae6d5affe818401aeffa2a1d0e06e6d15330c1437eaa9e6cd35fb708688f965_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/lljm/web/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
