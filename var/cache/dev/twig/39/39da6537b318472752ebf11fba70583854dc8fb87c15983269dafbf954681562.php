<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_e341ca7cce7f6b4175686adf985c678070491accde3e9b8e17d8d06e4f30681d extends Twig_Template
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
        $__internal_4bc0c0bee576b2f72e76866ed2211cd5260146d55d8250b24ec1aca2d1ac05ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bc0c0bee576b2f72e76866ed2211cd5260146d55d8250b24ec1aca2d1ac05ac->enter($__internal_4bc0c0bee576b2f72e76866ed2211cd5260146d55d8250b24ec1aca2d1ac05ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4dede49566686e73937146c0c40c70c9c003522c7e5fa01c431e7797082041b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dede49566686e73937146c0c40c70c9c003522c7e5fa01c431e7797082041b3->enter($__internal_4dede49566686e73937146c0c40c70c9c003522c7e5fa01c431e7797082041b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bc0c0bee576b2f72e76866ed2211cd5260146d55d8250b24ec1aca2d1ac05ac->leave($__internal_4bc0c0bee576b2f72e76866ed2211cd5260146d55d8250b24ec1aca2d1ac05ac_prof);

        
        $__internal_4dede49566686e73937146c0c40c70c9c003522c7e5fa01c431e7797082041b3->leave($__internal_4dede49566686e73937146c0c40c70c9c003522c7e5fa01c431e7797082041b3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2d813b8a15025a41beffe20bca57a7ca8d9dfc69e4894e8dc2bf3fd8bc284e12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d813b8a15025a41beffe20bca57a7ca8d9dfc69e4894e8dc2bf3fd8bc284e12->enter($__internal_2d813b8a15025a41beffe20bca57a7ca8d9dfc69e4894e8dc2bf3fd8bc284e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bc95e7a6546b50c6397daddfe86921a5fae1837f54ae44d72f30cf2d691734ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc95e7a6546b50c6397daddfe86921a5fae1837f54ae44d72f30cf2d691734ee->enter($__internal_bc95e7a6546b50c6397daddfe86921a5fae1837f54ae44d72f30cf2d691734ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_bc95e7a6546b50c6397daddfe86921a5fae1837f54ae44d72f30cf2d691734ee->leave($__internal_bc95e7a6546b50c6397daddfe86921a5fae1837f54ae44d72f30cf2d691734ee_prof);

        
        $__internal_2d813b8a15025a41beffe20bca57a7ca8d9dfc69e4894e8dc2bf3fd8bc284e12->leave($__internal_2d813b8a15025a41beffe20bca57a7ca8d9dfc69e4894e8dc2bf3fd8bc284e12_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9d2cac9a6189bbd5638864e31099df17516f15f23d83ab5e04201d2a605d84e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d2cac9a6189bbd5638864e31099df17516f15f23d83ab5e04201d2a605d84e9->enter($__internal_9d2cac9a6189bbd5638864e31099df17516f15f23d83ab5e04201d2a605d84e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_accc3e9b5bae13300d799192fdc18973b9f19efe8c25a2b0f32997a609620644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_accc3e9b5bae13300d799192fdc18973b9f19efe8c25a2b0f32997a609620644->enter($__internal_accc3e9b5bae13300d799192fdc18973b9f19efe8c25a2b0f32997a609620644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_accc3e9b5bae13300d799192fdc18973b9f19efe8c25a2b0f32997a609620644->leave($__internal_accc3e9b5bae13300d799192fdc18973b9f19efe8c25a2b0f32997a609620644_prof);

        
        $__internal_9d2cac9a6189bbd5638864e31099df17516f15f23d83ab5e04201d2a605d84e9->leave($__internal_9d2cac9a6189bbd5638864e31099df17516f15f23d83ab5e04201d2a605d84e9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_31c9f49a14db84300112dc784cf182a40ce1f0463985f11f6a73fa70e8bd254c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31c9f49a14db84300112dc784cf182a40ce1f0463985f11f6a73fa70e8bd254c->enter($__internal_31c9f49a14db84300112dc784cf182a40ce1f0463985f11f6a73fa70e8bd254c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_261ddb0fcab5a5d1f89912f42c3f0ae3dbb832f16411e1fc100e55a50ef07d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_261ddb0fcab5a5d1f89912f42c3f0ae3dbb832f16411e1fc100e55a50ef07d80->enter($__internal_261ddb0fcab5a5d1f89912f42c3f0ae3dbb832f16411e1fc100e55a50ef07d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_261ddb0fcab5a5d1f89912f42c3f0ae3dbb832f16411e1fc100e55a50ef07d80->leave($__internal_261ddb0fcab5a5d1f89912f42c3f0ae3dbb832f16411e1fc100e55a50ef07d80_prof);

        
        $__internal_31c9f49a14db84300112dc784cf182a40ce1f0463985f11f6a73fa70e8bd254c->leave($__internal_31c9f49a14db84300112dc784cf182a40ce1f0463985f11f6a73fa70e8bd254c_prof);

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
