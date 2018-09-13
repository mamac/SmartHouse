<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_aab0db8e17ccb9596e669d66df258b132c418a6aef4e5d9e110a3b5f0649581e extends Twig_Template
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
        $__internal_41971fe839203281a999c87a7ae0a8533f33f5edd442d4860069090ada332b8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41971fe839203281a999c87a7ae0a8533f33f5edd442d4860069090ada332b8a->enter($__internal_41971fe839203281a999c87a7ae0a8533f33f5edd442d4860069090ada332b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7b1bb795e97ee61bc57d1634f0109d59e2937c8704bb32112bf828efca27808b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b1bb795e97ee61bc57d1634f0109d59e2937c8704bb32112bf828efca27808b->enter($__internal_7b1bb795e97ee61bc57d1634f0109d59e2937c8704bb32112bf828efca27808b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41971fe839203281a999c87a7ae0a8533f33f5edd442d4860069090ada332b8a->leave($__internal_41971fe839203281a999c87a7ae0a8533f33f5edd442d4860069090ada332b8a_prof);

        
        $__internal_7b1bb795e97ee61bc57d1634f0109d59e2937c8704bb32112bf828efca27808b->leave($__internal_7b1bb795e97ee61bc57d1634f0109d59e2937c8704bb32112bf828efca27808b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5616aa31fe7e26abcc4cba2a3fc4eefe40c09acd2e7b3230e59a1eeef95d3128 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5616aa31fe7e26abcc4cba2a3fc4eefe40c09acd2e7b3230e59a1eeef95d3128->enter($__internal_5616aa31fe7e26abcc4cba2a3fc4eefe40c09acd2e7b3230e59a1eeef95d3128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2a31a3504074f3e3bb0ae489fe7a18eb2b8ab07c2a96f7ce3d4425a68a0a2168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a31a3504074f3e3bb0ae489fe7a18eb2b8ab07c2a96f7ce3d4425a68a0a2168->enter($__internal_2a31a3504074f3e3bb0ae489fe7a18eb2b8ab07c2a96f7ce3d4425a68a0a2168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2a31a3504074f3e3bb0ae489fe7a18eb2b8ab07c2a96f7ce3d4425a68a0a2168->leave($__internal_2a31a3504074f3e3bb0ae489fe7a18eb2b8ab07c2a96f7ce3d4425a68a0a2168_prof);

        
        $__internal_5616aa31fe7e26abcc4cba2a3fc4eefe40c09acd2e7b3230e59a1eeef95d3128->leave($__internal_5616aa31fe7e26abcc4cba2a3fc4eefe40c09acd2e7b3230e59a1eeef95d3128_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_18b6d8c09843cefc8889767f49c03e2b5fc984aca253bc4c873731846bbab67b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18b6d8c09843cefc8889767f49c03e2b5fc984aca253bc4c873731846bbab67b->enter($__internal_18b6d8c09843cefc8889767f49c03e2b5fc984aca253bc4c873731846bbab67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dc8279c416ee6788f08a04728a0a5e5414b21e16bba535b9b26ab673757cff8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc8279c416ee6788f08a04728a0a5e5414b21e16bba535b9b26ab673757cff8e->enter($__internal_dc8279c416ee6788f08a04728a0a5e5414b21e16bba535b9b26ab673757cff8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_dc8279c416ee6788f08a04728a0a5e5414b21e16bba535b9b26ab673757cff8e->leave($__internal_dc8279c416ee6788f08a04728a0a5e5414b21e16bba535b9b26ab673757cff8e_prof);

        
        $__internal_18b6d8c09843cefc8889767f49c03e2b5fc984aca253bc4c873731846bbab67b->leave($__internal_18b6d8c09843cefc8889767f49c03e2b5fc984aca253bc4c873731846bbab67b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_27b80990d409725873273ff718fee64b4592e54d5a0b9565a81aa0d0016968d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27b80990d409725873273ff718fee64b4592e54d5a0b9565a81aa0d0016968d9->enter($__internal_27b80990d409725873273ff718fee64b4592e54d5a0b9565a81aa0d0016968d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0c4b5d88b39a367cc711a8c2c90000922f45c6b69f38938eb5e268cb4af3245b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c4b5d88b39a367cc711a8c2c90000922f45c6b69f38938eb5e268cb4af3245b->enter($__internal_0c4b5d88b39a367cc711a8c2c90000922f45c6b69f38938eb5e268cb4af3245b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_0c4b5d88b39a367cc711a8c2c90000922f45c6b69f38938eb5e268cb4af3245b->leave($__internal_0c4b5d88b39a367cc711a8c2c90000922f45c6b69f38938eb5e268cb4af3245b_prof);

        
        $__internal_27b80990d409725873273ff718fee64b4592e54d5a0b9565a81aa0d0016968d9->leave($__internal_27b80990d409725873273ff718fee64b4592e54d5a0b9565a81aa0d0016968d9_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/lljm/web_symfony3/web/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
