<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_03fef32c53d4e92a415dc542c62096036fc6c7f1e924dbc699ce6eafadea034a extends Twig_Template
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
        $__internal_229b0b77b3471ff6ebf387c358209e1aeb0d4dbacf142a75be8516cb21a4c0ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_229b0b77b3471ff6ebf387c358209e1aeb0d4dbacf142a75be8516cb21a4c0ff->enter($__internal_229b0b77b3471ff6ebf387c358209e1aeb0d4dbacf142a75be8516cb21a4c0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_c77ebac6a5a10cb5d1a74018e983df18e560e91809e6516ce1c33058213d6771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c77ebac6a5a10cb5d1a74018e983df18e560e91809e6516ce1c33058213d6771->enter($__internal_c77ebac6a5a10cb5d1a74018e983df18e560e91809e6516ce1c33058213d6771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_229b0b77b3471ff6ebf387c358209e1aeb0d4dbacf142a75be8516cb21a4c0ff->leave($__internal_229b0b77b3471ff6ebf387c358209e1aeb0d4dbacf142a75be8516cb21a4c0ff_prof);

        
        $__internal_c77ebac6a5a10cb5d1a74018e983df18e560e91809e6516ce1c33058213d6771->leave($__internal_c77ebac6a5a10cb5d1a74018e983df18e560e91809e6516ce1c33058213d6771_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_37260be4695901c8ed3989361985ff3c51ec272ae921e54b077c11c263cc5e9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37260be4695901c8ed3989361985ff3c51ec272ae921e54b077c11c263cc5e9e->enter($__internal_37260be4695901c8ed3989361985ff3c51ec272ae921e54b077c11c263cc5e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_83c54a65c623366d66a60e4a665989ba822c8d242dd6857947ebe72965344202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83c54a65c623366d66a60e4a665989ba822c8d242dd6857947ebe72965344202->enter($__internal_83c54a65c623366d66a60e4a665989ba822c8d242dd6857947ebe72965344202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_83c54a65c623366d66a60e4a665989ba822c8d242dd6857947ebe72965344202->leave($__internal_83c54a65c623366d66a60e4a665989ba822c8d242dd6857947ebe72965344202_prof);

        
        $__internal_37260be4695901c8ed3989361985ff3c51ec272ae921e54b077c11c263cc5e9e->leave($__internal_37260be4695901c8ed3989361985ff3c51ec272ae921e54b077c11c263cc5e9e_prof);

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
