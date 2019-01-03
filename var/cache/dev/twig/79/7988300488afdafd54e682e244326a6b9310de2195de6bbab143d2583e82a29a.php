<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a99f106a4276e7a07c3b3d62a4660a7a1d578f0875742fb683ba405525c95390 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff65af2f512463098c21bb7c61d795e29a398999245498decd234472acba27f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff65af2f512463098c21bb7c61d795e29a398999245498decd234472acba27f1->enter($__internal_ff65af2f512463098c21bb7c61d795e29a398999245498decd234472acba27f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_027de9bca163a81243c8bd7f1f3d550d48a1c406a59293e5e7e21353e1f791ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_027de9bca163a81243c8bd7f1f3d550d48a1c406a59293e5e7e21353e1f791ed->enter($__internal_027de9bca163a81243c8bd7f1f3d550d48a1c406a59293e5e7e21353e1f791ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff65af2f512463098c21bb7c61d795e29a398999245498decd234472acba27f1->leave($__internal_ff65af2f512463098c21bb7c61d795e29a398999245498decd234472acba27f1_prof);

        
        $__internal_027de9bca163a81243c8bd7f1f3d550d48a1c406a59293e5e7e21353e1f791ed->leave($__internal_027de9bca163a81243c8bd7f1f3d550d48a1c406a59293e5e7e21353e1f791ed_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0187856c813a7628c0420e26fa65928d8c31d23c764d908fa33d4a02eeb8ecb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0187856c813a7628c0420e26fa65928d8c31d23c764d908fa33d4a02eeb8ecb7->enter($__internal_0187856c813a7628c0420e26fa65928d8c31d23c764d908fa33d4a02eeb8ecb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7495641910e3753db46131a766322b5d69f84465cfe692e13381856019013cf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7495641910e3753db46131a766322b5d69f84465cfe692e13381856019013cf1->enter($__internal_7495641910e3753db46131a766322b5d69f84465cfe692e13381856019013cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7495641910e3753db46131a766322b5d69f84465cfe692e13381856019013cf1->leave($__internal_7495641910e3753db46131a766322b5d69f84465cfe692e13381856019013cf1_prof);

        
        $__internal_0187856c813a7628c0420e26fa65928d8c31d23c764d908fa33d4a02eeb8ecb7->leave($__internal_0187856c813a7628c0420e26fa65928d8c31d23c764d908fa33d4a02eeb8ecb7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b41b179280d17fea660f8a84e4bbe72a82cb18e2653c5bf9ec9978c3842623e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b41b179280d17fea660f8a84e4bbe72a82cb18e2653c5bf9ec9978c3842623e4->enter($__internal_b41b179280d17fea660f8a84e4bbe72a82cb18e2653c5bf9ec9978c3842623e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cef416c075f70e70c0d875d591ba6b408360926b7ad6ccca447fda7331a4564c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cef416c075f70e70c0d875d591ba6b408360926b7ad6ccca447fda7331a4564c->enter($__internal_cef416c075f70e70c0d875d591ba6b408360926b7ad6ccca447fda7331a4564c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_cef416c075f70e70c0d875d591ba6b408360926b7ad6ccca447fda7331a4564c->leave($__internal_cef416c075f70e70c0d875d591ba6b408360926b7ad6ccca447fda7331a4564c_prof);

        
        $__internal_b41b179280d17fea660f8a84e4bbe72a82cb18e2653c5bf9ec9978c3842623e4->leave($__internal_b41b179280d17fea660f8a84e4bbe72a82cb18e2653c5bf9ec9978c3842623e4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4cbaa88f875396a5febf44e4c7d9cde6451222fbbc0b2656319a397a0dd0e6f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cbaa88f875396a5febf44e4c7d9cde6451222fbbc0b2656319a397a0dd0e6f8->enter($__internal_4cbaa88f875396a5febf44e4c7d9cde6451222fbbc0b2656319a397a0dd0e6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c36f0a696be0c728f0cdb772b098dc351c6959544629a20e18d74d2163230bb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c36f0a696be0c728f0cdb772b098dc351c6959544629a20e18d74d2163230bb5->enter($__internal_c36f0a696be0c728f0cdb772b098dc351c6959544629a20e18d74d2163230bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_c36f0a696be0c728f0cdb772b098dc351c6959544629a20e18d74d2163230bb5->leave($__internal_c36f0a696be0c728f0cdb772b098dc351c6959544629a20e18d74d2163230bb5_prof);

        
        $__internal_4cbaa88f875396a5febf44e4c7d9cde6451222fbbc0b2656319a397a0dd0e6f8->leave($__internal_4cbaa88f875396a5febf44e4c7d9cde6451222fbbc0b2656319a397a0dd0e6f8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/lljm/web/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
