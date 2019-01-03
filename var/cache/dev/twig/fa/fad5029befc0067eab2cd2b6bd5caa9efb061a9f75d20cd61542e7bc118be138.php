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
        $__internal_c32b676945cb3d5ae83c9b849bd79c82fcfb518f25affc0d9cc08f1bda6002d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c32b676945cb3d5ae83c9b849bd79c82fcfb518f25affc0d9cc08f1bda6002d5->enter($__internal_c32b676945cb3d5ae83c9b849bd79c82fcfb518f25affc0d9cc08f1bda6002d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_25ea5346c46c139c31ac012bcdb49573e464a425fd74ed8f6488bbab9dc7471d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ea5346c46c139c31ac012bcdb49573e464a425fd74ed8f6488bbab9dc7471d->enter($__internal_25ea5346c46c139c31ac012bcdb49573e464a425fd74ed8f6488bbab9dc7471d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c32b676945cb3d5ae83c9b849bd79c82fcfb518f25affc0d9cc08f1bda6002d5->leave($__internal_c32b676945cb3d5ae83c9b849bd79c82fcfb518f25affc0d9cc08f1bda6002d5_prof);

        
        $__internal_25ea5346c46c139c31ac012bcdb49573e464a425fd74ed8f6488bbab9dc7471d->leave($__internal_25ea5346c46c139c31ac012bcdb49573e464a425fd74ed8f6488bbab9dc7471d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_49d970d8470fc727a9e12a95b9d226f45caaa443ae618524bd6843621463047d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49d970d8470fc727a9e12a95b9d226f45caaa443ae618524bd6843621463047d->enter($__internal_49d970d8470fc727a9e12a95b9d226f45caaa443ae618524bd6843621463047d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ca75eba76631ddfd6b05bcd86efd7fb316ce14667ecfb39c21b234cd5357c8bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca75eba76631ddfd6b05bcd86efd7fb316ce14667ecfb39c21b234cd5357c8bb->enter($__internal_ca75eba76631ddfd6b05bcd86efd7fb316ce14667ecfb39c21b234cd5357c8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_ca75eba76631ddfd6b05bcd86efd7fb316ce14667ecfb39c21b234cd5357c8bb->leave($__internal_ca75eba76631ddfd6b05bcd86efd7fb316ce14667ecfb39c21b234cd5357c8bb_prof);

        
        $__internal_49d970d8470fc727a9e12a95b9d226f45caaa443ae618524bd6843621463047d->leave($__internal_49d970d8470fc727a9e12a95b9d226f45caaa443ae618524bd6843621463047d_prof);

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
