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
        $__internal_ba93deb38347e9502f2cfd383a70409a265e5e7911df027ac21fe4eea7174eb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba93deb38347e9502f2cfd383a70409a265e5e7911df027ac21fe4eea7174eb3->enter($__internal_ba93deb38347e9502f2cfd383a70409a265e5e7911df027ac21fe4eea7174eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_887168bd1560d9e8cad8fa4f19b8d64d3b15b6c60dc40eabb6463bcc71cd0f48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_887168bd1560d9e8cad8fa4f19b8d64d3b15b6c60dc40eabb6463bcc71cd0f48->enter($__internal_887168bd1560d9e8cad8fa4f19b8d64d3b15b6c60dc40eabb6463bcc71cd0f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba93deb38347e9502f2cfd383a70409a265e5e7911df027ac21fe4eea7174eb3->leave($__internal_ba93deb38347e9502f2cfd383a70409a265e5e7911df027ac21fe4eea7174eb3_prof);

        
        $__internal_887168bd1560d9e8cad8fa4f19b8d64d3b15b6c60dc40eabb6463bcc71cd0f48->leave($__internal_887168bd1560d9e8cad8fa4f19b8d64d3b15b6c60dc40eabb6463bcc71cd0f48_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9e92c0343e84f33236122f592928a593c94c60dec6357380ae86cde8d98d2e52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e92c0343e84f33236122f592928a593c94c60dec6357380ae86cde8d98d2e52->enter($__internal_9e92c0343e84f33236122f592928a593c94c60dec6357380ae86cde8d98d2e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f00432179e986a013780cb21ebc540f4035fdad7b1e83026c9794540782759de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f00432179e986a013780cb21ebc540f4035fdad7b1e83026c9794540782759de->enter($__internal_f00432179e986a013780cb21ebc540f4035fdad7b1e83026c9794540782759de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f00432179e986a013780cb21ebc540f4035fdad7b1e83026c9794540782759de->leave($__internal_f00432179e986a013780cb21ebc540f4035fdad7b1e83026c9794540782759de_prof);

        
        $__internal_9e92c0343e84f33236122f592928a593c94c60dec6357380ae86cde8d98d2e52->leave($__internal_9e92c0343e84f33236122f592928a593c94c60dec6357380ae86cde8d98d2e52_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f56841935076afb3204fb5ab3dad3b8bb1ebcd62398abdac526abe27823dff30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f56841935076afb3204fb5ab3dad3b8bb1ebcd62398abdac526abe27823dff30->enter($__internal_f56841935076afb3204fb5ab3dad3b8bb1ebcd62398abdac526abe27823dff30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_87405b200877a618e9bebc630865d4e68a41dc8bb975ca77024b86f0acb9f02c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87405b200877a618e9bebc630865d4e68a41dc8bb975ca77024b86f0acb9f02c->enter($__internal_87405b200877a618e9bebc630865d4e68a41dc8bb975ca77024b86f0acb9f02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_87405b200877a618e9bebc630865d4e68a41dc8bb975ca77024b86f0acb9f02c->leave($__internal_87405b200877a618e9bebc630865d4e68a41dc8bb975ca77024b86f0acb9f02c_prof);

        
        $__internal_f56841935076afb3204fb5ab3dad3b8bb1ebcd62398abdac526abe27823dff30->leave($__internal_f56841935076afb3204fb5ab3dad3b8bb1ebcd62398abdac526abe27823dff30_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f559dcf32d37cc291eb512633701219330ba066da8d946fd21015bf92172d6ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f559dcf32d37cc291eb512633701219330ba066da8d946fd21015bf92172d6ed->enter($__internal_f559dcf32d37cc291eb512633701219330ba066da8d946fd21015bf92172d6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6120b39dc03a4d740d8f1a8930a30b8d1bb8ce154cbd29539d023939da0f9e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6120b39dc03a4d740d8f1a8930a30b8d1bb8ce154cbd29539d023939da0f9e21->enter($__internal_6120b39dc03a4d740d8f1a8930a30b8d1bb8ce154cbd29539d023939da0f9e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_6120b39dc03a4d740d8f1a8930a30b8d1bb8ce154cbd29539d023939da0f9e21->leave($__internal_6120b39dc03a4d740d8f1a8930a30b8d1bb8ce154cbd29539d023939da0f9e21_prof);

        
        $__internal_f559dcf32d37cc291eb512633701219330ba066da8d946fd21015bf92172d6ed->leave($__internal_f559dcf32d37cc291eb512633701219330ba066da8d946fd21015bf92172d6ed_prof);

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
