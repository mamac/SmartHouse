<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8ad5036a0e7aaa2942d6fae9744f8bf0089408c73c5bfd44dd45c068bfc53b8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_86cdbc272717bda6f6b93534776e0d058903243e5fb080ae16788c6a0c0f57f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86cdbc272717bda6f6b93534776e0d058903243e5fb080ae16788c6a0c0f57f1->enter($__internal_86cdbc272717bda6f6b93534776e0d058903243e5fb080ae16788c6a0c0f57f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9d4ed3930cc788d7586419d55e04a40e56c6840b12a8d1fdc9036f5c162d3389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d4ed3930cc788d7586419d55e04a40e56c6840b12a8d1fdc9036f5c162d3389->enter($__internal_9d4ed3930cc788d7586419d55e04a40e56c6840b12a8d1fdc9036f5c162d3389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86cdbc272717bda6f6b93534776e0d058903243e5fb080ae16788c6a0c0f57f1->leave($__internal_86cdbc272717bda6f6b93534776e0d058903243e5fb080ae16788c6a0c0f57f1_prof);

        
        $__internal_9d4ed3930cc788d7586419d55e04a40e56c6840b12a8d1fdc9036f5c162d3389->leave($__internal_9d4ed3930cc788d7586419d55e04a40e56c6840b12a8d1fdc9036f5c162d3389_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d35089252b4ec1222bb56f06bccde406f0c23d29fe4afa084e16a95f77537d43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d35089252b4ec1222bb56f06bccde406f0c23d29fe4afa084e16a95f77537d43->enter($__internal_d35089252b4ec1222bb56f06bccde406f0c23d29fe4afa084e16a95f77537d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a6d998951216d1586c9b693399afa71f5c9a80cc871ace2893d7add83847110d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6d998951216d1586c9b693399afa71f5c9a80cc871ace2893d7add83847110d->enter($__internal_a6d998951216d1586c9b693399afa71f5c9a80cc871ace2893d7add83847110d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a6d998951216d1586c9b693399afa71f5c9a80cc871ace2893d7add83847110d->leave($__internal_a6d998951216d1586c9b693399afa71f5c9a80cc871ace2893d7add83847110d_prof);

        
        $__internal_d35089252b4ec1222bb56f06bccde406f0c23d29fe4afa084e16a95f77537d43->leave($__internal_d35089252b4ec1222bb56f06bccde406f0c23d29fe4afa084e16a95f77537d43_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f6e6a5a4d93845514e607e0f63cd38f73fcd09a5d7b28d1f07f554a5bea0a3ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6e6a5a4d93845514e607e0f63cd38f73fcd09a5d7b28d1f07f554a5bea0a3ad->enter($__internal_f6e6a5a4d93845514e607e0f63cd38f73fcd09a5d7b28d1f07f554a5bea0a3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d4745593fbd923833699ccefd48ace9ddf2dfcbc825100eb4a9f34f52f563d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4745593fbd923833699ccefd48ace9ddf2dfcbc825100eb4a9f34f52f563d6a->enter($__internal_d4745593fbd923833699ccefd48ace9ddf2dfcbc825100eb4a9f34f52f563d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d4745593fbd923833699ccefd48ace9ddf2dfcbc825100eb4a9f34f52f563d6a->leave($__internal_d4745593fbd923833699ccefd48ace9ddf2dfcbc825100eb4a9f34f52f563d6a_prof);

        
        $__internal_f6e6a5a4d93845514e607e0f63cd38f73fcd09a5d7b28d1f07f554a5bea0a3ad->leave($__internal_f6e6a5a4d93845514e607e0f63cd38f73fcd09a5d7b28d1f07f554a5bea0a3ad_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f2a0c0232365bc53e37ca0b9d8e908cf4ecd9d2628c9ddda02b896568557c8ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2a0c0232365bc53e37ca0b9d8e908cf4ecd9d2628c9ddda02b896568557c8ca->enter($__internal_f2a0c0232365bc53e37ca0b9d8e908cf4ecd9d2628c9ddda02b896568557c8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8a9857ac9785e496bbb1666139f16998294f84dcb0761d72d4d1e7a667bc4a7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a9857ac9785e496bbb1666139f16998294f84dcb0761d72d4d1e7a667bc4a7e->enter($__internal_8a9857ac9785e496bbb1666139f16998294f84dcb0761d72d4d1e7a667bc4a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_8a9857ac9785e496bbb1666139f16998294f84dcb0761d72d4d1e7a667bc4a7e->leave($__internal_8a9857ac9785e496bbb1666139f16998294f84dcb0761d72d4d1e7a667bc4a7e_prof);

        
        $__internal_f2a0c0232365bc53e37ca0b9d8e908cf4ecd9d2628c9ddda02b896568557c8ca->leave($__internal_f2a0c0232365bc53e37ca0b9d8e908cf4ecd9d2628c9ddda02b896568557c8ca_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/lljm/web/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
