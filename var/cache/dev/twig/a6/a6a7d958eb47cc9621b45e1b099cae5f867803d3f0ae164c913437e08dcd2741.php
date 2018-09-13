<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_4d2e9c1f76c0449b984d27bd2413a39359b650564eb4bbfa9d49d19c4bf3a1f6 extends Twig_Template
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
        $__internal_0e765d6aa41fa97274496e9da992f5109197c3c61810ca7451e03829c1645339 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e765d6aa41fa97274496e9da992f5109197c3c61810ca7451e03829c1645339->enter($__internal_0e765d6aa41fa97274496e9da992f5109197c3c61810ca7451e03829c1645339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_33eb9e19a23e0f75a1bf70a3a51468d33cad2bb6106587483224c4f326cb8675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33eb9e19a23e0f75a1bf70a3a51468d33cad2bb6106587483224c4f326cb8675->enter($__internal_33eb9e19a23e0f75a1bf70a3a51468d33cad2bb6106587483224c4f326cb8675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e765d6aa41fa97274496e9da992f5109197c3c61810ca7451e03829c1645339->leave($__internal_0e765d6aa41fa97274496e9da992f5109197c3c61810ca7451e03829c1645339_prof);

        
        $__internal_33eb9e19a23e0f75a1bf70a3a51468d33cad2bb6106587483224c4f326cb8675->leave($__internal_33eb9e19a23e0f75a1bf70a3a51468d33cad2bb6106587483224c4f326cb8675_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ac041f0de242ea2a198e3eff36da675ee5c1bf85ad48794578e2911301615d8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac041f0de242ea2a198e3eff36da675ee5c1bf85ad48794578e2911301615d8d->enter($__internal_ac041f0de242ea2a198e3eff36da675ee5c1bf85ad48794578e2911301615d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bced4817da59594b3c5cf650c2805136ba7ba090f767c9e488b84afc0b824bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bced4817da59594b3c5cf650c2805136ba7ba090f767c9e488b84afc0b824bc2->enter($__internal_bced4817da59594b3c5cf650c2805136ba7ba090f767c9e488b84afc0b824bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_bced4817da59594b3c5cf650c2805136ba7ba090f767c9e488b84afc0b824bc2->leave($__internal_bced4817da59594b3c5cf650c2805136ba7ba090f767c9e488b84afc0b824bc2_prof);

        
        $__internal_ac041f0de242ea2a198e3eff36da675ee5c1bf85ad48794578e2911301615d8d->leave($__internal_ac041f0de242ea2a198e3eff36da675ee5c1bf85ad48794578e2911301615d8d_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/home/lljm/web_symfony3/web/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
