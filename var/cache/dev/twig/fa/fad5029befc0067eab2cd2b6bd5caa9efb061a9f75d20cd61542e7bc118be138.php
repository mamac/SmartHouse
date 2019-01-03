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
        $__internal_83323b29579677e573a037ba2f0750922bd696f7d1e99fb0871c091e83610ca8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83323b29579677e573a037ba2f0750922bd696f7d1e99fb0871c091e83610ca8->enter($__internal_83323b29579677e573a037ba2f0750922bd696f7d1e99fb0871c091e83610ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_bf613cffd2e4f688b7b5bea8414ceede601cbf48c811f147660489c2d79c0c87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf613cffd2e4f688b7b5bea8414ceede601cbf48c811f147660489c2d79c0c87->enter($__internal_bf613cffd2e4f688b7b5bea8414ceede601cbf48c811f147660489c2d79c0c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83323b29579677e573a037ba2f0750922bd696f7d1e99fb0871c091e83610ca8->leave($__internal_83323b29579677e573a037ba2f0750922bd696f7d1e99fb0871c091e83610ca8_prof);

        
        $__internal_bf613cffd2e4f688b7b5bea8414ceede601cbf48c811f147660489c2d79c0c87->leave($__internal_bf613cffd2e4f688b7b5bea8414ceede601cbf48c811f147660489c2d79c0c87_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a6cc2fba9cab2c664415860059f88bc4d9ddf03bf9711bc7c746f40906447219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6cc2fba9cab2c664415860059f88bc4d9ddf03bf9711bc7c746f40906447219->enter($__internal_a6cc2fba9cab2c664415860059f88bc4d9ddf03bf9711bc7c746f40906447219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_134256fa1e2b0c45360b1bdbbc16214d4efe3d513f7f450b65a5f5b199f16f5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_134256fa1e2b0c45360b1bdbbc16214d4efe3d513f7f450b65a5f5b199f16f5b->enter($__internal_134256fa1e2b0c45360b1bdbbc16214d4efe3d513f7f450b65a5f5b199f16f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_134256fa1e2b0c45360b1bdbbc16214d4efe3d513f7f450b65a5f5b199f16f5b->leave($__internal_134256fa1e2b0c45360b1bdbbc16214d4efe3d513f7f450b65a5f5b199f16f5b_prof);

        
        $__internal_a6cc2fba9cab2c664415860059f88bc4d9ddf03bf9711bc7c746f40906447219->leave($__internal_a6cc2fba9cab2c664415860059f88bc4d9ddf03bf9711bc7c746f40906447219_prof);

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
