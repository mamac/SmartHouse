<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_14e9743635fa2eb585ef660a372f3a16b78951958b67c97cf45dfa8d6efe1e18 extends Twig_Template
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
        $__internal_3826d2409bb556a1153e1471aa337565f3b6e08021f097a9386536c16ffe9454 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3826d2409bb556a1153e1471aa337565f3b6e08021f097a9386536c16ffe9454->enter($__internal_3826d2409bb556a1153e1471aa337565f3b6e08021f097a9386536c16ffe9454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c11b5ab00350adf2e85172e883f2d20823510f4109044287dfc0a011d0ff47f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c11b5ab00350adf2e85172e883f2d20823510f4109044287dfc0a011d0ff47f8->enter($__internal_c11b5ab00350adf2e85172e883f2d20823510f4109044287dfc0a011d0ff47f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3826d2409bb556a1153e1471aa337565f3b6e08021f097a9386536c16ffe9454->leave($__internal_3826d2409bb556a1153e1471aa337565f3b6e08021f097a9386536c16ffe9454_prof);

        
        $__internal_c11b5ab00350adf2e85172e883f2d20823510f4109044287dfc0a011d0ff47f8->leave($__internal_c11b5ab00350adf2e85172e883f2d20823510f4109044287dfc0a011d0ff47f8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f1750584e4c269d82721849a557a65f348a3e2bbe9acdc24740012fe1d10c2da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1750584e4c269d82721849a557a65f348a3e2bbe9acdc24740012fe1d10c2da->enter($__internal_f1750584e4c269d82721849a557a65f348a3e2bbe9acdc24740012fe1d10c2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8acdf249ee0dc58ed3c491a2c808c856f6ef61fb2a5d5a5dfc7a6d318fe0a39d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8acdf249ee0dc58ed3c491a2c808c856f6ef61fb2a5d5a5dfc7a6d318fe0a39d->enter($__internal_8acdf249ee0dc58ed3c491a2c808c856f6ef61fb2a5d5a5dfc7a6d318fe0a39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8acdf249ee0dc58ed3c491a2c808c856f6ef61fb2a5d5a5dfc7a6d318fe0a39d->leave($__internal_8acdf249ee0dc58ed3c491a2c808c856f6ef61fb2a5d5a5dfc7a6d318fe0a39d_prof);

        
        $__internal_f1750584e4c269d82721849a557a65f348a3e2bbe9acdc24740012fe1d10c2da->leave($__internal_f1750584e4c269d82721849a557a65f348a3e2bbe9acdc24740012fe1d10c2da_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5516501a364f4f770783aa074d9b852695420207b9c09d57f752b4698da10033 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5516501a364f4f770783aa074d9b852695420207b9c09d57f752b4698da10033->enter($__internal_5516501a364f4f770783aa074d9b852695420207b9c09d57f752b4698da10033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f1f3fdf03b41f18a17d4df3cf9f2f8351fd3aee32ed5352f2d62ca4a70720134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1f3fdf03b41f18a17d4df3cf9f2f8351fd3aee32ed5352f2d62ca4a70720134->enter($__internal_f1f3fdf03b41f18a17d4df3cf9f2f8351fd3aee32ed5352f2d62ca4a70720134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f1f3fdf03b41f18a17d4df3cf9f2f8351fd3aee32ed5352f2d62ca4a70720134->leave($__internal_f1f3fdf03b41f18a17d4df3cf9f2f8351fd3aee32ed5352f2d62ca4a70720134_prof);

        
        $__internal_5516501a364f4f770783aa074d9b852695420207b9c09d57f752b4698da10033->leave($__internal_5516501a364f4f770783aa074d9b852695420207b9c09d57f752b4698da10033_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6b3c84695480ddc25ae9b4bdad9c5b7d3cca41c1b10e593b69bb375c62ee9c70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b3c84695480ddc25ae9b4bdad9c5b7d3cca41c1b10e593b69bb375c62ee9c70->enter($__internal_6b3c84695480ddc25ae9b4bdad9c5b7d3cca41c1b10e593b69bb375c62ee9c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9485f0750a1e905c24bcdd341f4f3ab0c269c55f596b8c2d41d5af797679d063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9485f0750a1e905c24bcdd341f4f3ab0c269c55f596b8c2d41d5af797679d063->enter($__internal_9485f0750a1e905c24bcdd341f4f3ab0c269c55f596b8c2d41d5af797679d063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_9485f0750a1e905c24bcdd341f4f3ab0c269c55f596b8c2d41d5af797679d063->leave($__internal_9485f0750a1e905c24bcdd341f4f3ab0c269c55f596b8c2d41d5af797679d063_prof);

        
        $__internal_6b3c84695480ddc25ae9b4bdad9c5b7d3cca41c1b10e593b69bb375c62ee9c70->leave($__internal_6b3c84695480ddc25ae9b4bdad9c5b7d3cca41c1b10e593b69bb375c62ee9c70_prof);

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
