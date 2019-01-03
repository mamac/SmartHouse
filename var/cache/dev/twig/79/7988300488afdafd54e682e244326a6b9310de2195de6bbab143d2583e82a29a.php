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
        $__internal_1e11f00728514794f4537f5c79d2918d4e4218c2ee9973ed4ec6d4b993fd7796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e11f00728514794f4537f5c79d2918d4e4218c2ee9973ed4ec6d4b993fd7796->enter($__internal_1e11f00728514794f4537f5c79d2918d4e4218c2ee9973ed4ec6d4b993fd7796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a63918ea452cb0bbe45d8271fd17d7871592b056c779c3cb81e13d6a5cbba069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a63918ea452cb0bbe45d8271fd17d7871592b056c779c3cb81e13d6a5cbba069->enter($__internal_a63918ea452cb0bbe45d8271fd17d7871592b056c779c3cb81e13d6a5cbba069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e11f00728514794f4537f5c79d2918d4e4218c2ee9973ed4ec6d4b993fd7796->leave($__internal_1e11f00728514794f4537f5c79d2918d4e4218c2ee9973ed4ec6d4b993fd7796_prof);

        
        $__internal_a63918ea452cb0bbe45d8271fd17d7871592b056c779c3cb81e13d6a5cbba069->leave($__internal_a63918ea452cb0bbe45d8271fd17d7871592b056c779c3cb81e13d6a5cbba069_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d1aeebb876b2183705b6b3183433fb4079d0ebcb38bccaba43b890af529fd643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1aeebb876b2183705b6b3183433fb4079d0ebcb38bccaba43b890af529fd643->enter($__internal_d1aeebb876b2183705b6b3183433fb4079d0ebcb38bccaba43b890af529fd643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e488dc0fd9b43c7d25e29a4595009b79e7883175296ff8bda11ca34da3b2489a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e488dc0fd9b43c7d25e29a4595009b79e7883175296ff8bda11ca34da3b2489a->enter($__internal_e488dc0fd9b43c7d25e29a4595009b79e7883175296ff8bda11ca34da3b2489a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e488dc0fd9b43c7d25e29a4595009b79e7883175296ff8bda11ca34da3b2489a->leave($__internal_e488dc0fd9b43c7d25e29a4595009b79e7883175296ff8bda11ca34da3b2489a_prof);

        
        $__internal_d1aeebb876b2183705b6b3183433fb4079d0ebcb38bccaba43b890af529fd643->leave($__internal_d1aeebb876b2183705b6b3183433fb4079d0ebcb38bccaba43b890af529fd643_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_73a687e8928fffa3290bd3e800f6e296f229b03042c0fa5d7abccc07b04619a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73a687e8928fffa3290bd3e800f6e296f229b03042c0fa5d7abccc07b04619a7->enter($__internal_73a687e8928fffa3290bd3e800f6e296f229b03042c0fa5d7abccc07b04619a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c9a12cfcadac3a1959077d07825d2270b48878e7d1d035a23fc9d1d6660039c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9a12cfcadac3a1959077d07825d2270b48878e7d1d035a23fc9d1d6660039c2->enter($__internal_c9a12cfcadac3a1959077d07825d2270b48878e7d1d035a23fc9d1d6660039c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c9a12cfcadac3a1959077d07825d2270b48878e7d1d035a23fc9d1d6660039c2->leave($__internal_c9a12cfcadac3a1959077d07825d2270b48878e7d1d035a23fc9d1d6660039c2_prof);

        
        $__internal_73a687e8928fffa3290bd3e800f6e296f229b03042c0fa5d7abccc07b04619a7->leave($__internal_73a687e8928fffa3290bd3e800f6e296f229b03042c0fa5d7abccc07b04619a7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_38976297735d8c7c6b1d65fe3df3af7410c69d9da4138a3a2052ee9fa1bfc4c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38976297735d8c7c6b1d65fe3df3af7410c69d9da4138a3a2052ee9fa1bfc4c4->enter($__internal_38976297735d8c7c6b1d65fe3df3af7410c69d9da4138a3a2052ee9fa1bfc4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a6a6b248506cf19a359a4925f8eb61d5bb07fabf9832907d8b082e9031b6dba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6a6b248506cf19a359a4925f8eb61d5bb07fabf9832907d8b082e9031b6dba2->enter($__internal_a6a6b248506cf19a359a4925f8eb61d5bb07fabf9832907d8b082e9031b6dba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a6a6b248506cf19a359a4925f8eb61d5bb07fabf9832907d8b082e9031b6dba2->leave($__internal_a6a6b248506cf19a359a4925f8eb61d5bb07fabf9832907d8b082e9031b6dba2_prof);

        
        $__internal_38976297735d8c7c6b1d65fe3df3af7410c69d9da4138a3a2052ee9fa1bfc4c4->leave($__internal_38976297735d8c7c6b1d65fe3df3af7410c69d9da4138a3a2052ee9fa1bfc4c4_prof);

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
