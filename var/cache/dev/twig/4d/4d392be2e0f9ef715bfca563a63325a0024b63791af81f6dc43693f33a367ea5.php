<?php

/* LljmHealthBundle:Height:heightadd.html.twig */
class __TwigTemplate_ca9e93a58de5a70f53833b504fac17d382ae551ef9a2ce4e6a0e7456cca3af10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LljmHealthBundle::layout.html.twig", "LljmHealthBundle:Height:heightadd.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'lljm_health_body' => array($this, 'block_lljm_health_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LljmHealthBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_895a00297960f52b3958891951fdac4de9a377e46d8ed4dd85e411808eab1001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_895a00297960f52b3958891951fdac4de9a377e46d8ed4dd85e411808eab1001->enter($__internal_895a00297960f52b3958891951fdac4de9a377e46d8ed4dd85e411808eab1001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHealthBundle:Height:heightadd.html.twig"));

        $__internal_84717207cede893866cddb51c60a4ef98a8ee7a04d6b37247fa3232e031f44b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84717207cede893866cddb51c60a4ef98a8ee7a04d6b37247fa3232e031f44b2->enter($__internal_84717207cede893866cddb51c60a4ef98a8ee7a04d6b37247fa3232e031f44b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHealthBundle:Height:heightadd.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_895a00297960f52b3958891951fdac4de9a377e46d8ed4dd85e411808eab1001->leave($__internal_895a00297960f52b3958891951fdac4de9a377e46d8ed4dd85e411808eab1001_prof);

        
        $__internal_84717207cede893866cddb51c60a4ef98a8ee7a04d6b37247fa3232e031f44b2->leave($__internal_84717207cede893866cddb51c60a4ef98a8ee7a04d6b37247fa3232e031f44b2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb985a084d2d05764f3701dbeef412a36c6daadf9f34cb956ee8909aa72c7f32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb985a084d2d05764f3701dbeef412a36c6daadf9f34cb956ee8909aa72c7f32->enter($__internal_cb985a084d2d05764f3701dbeef412a36c6daadf9f34cb956ee8909aa72c7f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_59b528a0e7696f4767328c176f09cfa1164272c0b220ee8ee571bd58fa7ae1ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b528a0e7696f4767328c176f09cfa1164272c0b220ee8ee571bd58fa7ae1ee->enter($__internal_59b528a0e7696f4767328c176f09cfa1164272c0b220ee8ee571bd58fa7ae1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Height - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_59b528a0e7696f4767328c176f09cfa1164272c0b220ee8ee571bd58fa7ae1ee->leave($__internal_59b528a0e7696f4767328c176f09cfa1164272c0b220ee8ee571bd58fa7ae1ee_prof);

        
        $__internal_cb985a084d2d05764f3701dbeef412a36c6daadf9f34cb956ee8909aa72c7f32->leave($__internal_cb985a084d2d05764f3701dbeef412a36c6daadf9f34cb956ee8909aa72c7f32_prof);

    }

    // line 9
    public function block_lljm_health_body($context, array $blocks = array())
    {
        $__internal_c81bddecdfd29335ec6e4d046ba65464ad85679d4b8dbb8171427d7bd173b361 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c81bddecdfd29335ec6e4d046ba65464ad85679d4b8dbb8171427d7bd173b361->enter($__internal_c81bddecdfd29335ec6e4d046ba65464ad85679d4b8dbb8171427d7bd173b361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_health_body"));

        $__internal_7ec91ad87849d3db525477d1b39cdbd52cffa7d2ca30e24190d9cbaa21d7e847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ec91ad87849d3db525477d1b39cdbd52cffa7d2ca30e24190d9cbaa21d7e847->enter($__internal_7ec91ad87849d3db525477d1b39cdbd52cffa7d2ca30e24190d9cbaa21d7e847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_health_body"));

        // line 10
        echo "
  <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a height reading"), "html", null, true);
        echo "</h2>
<ul>
  ";
        // line 13
        $this->loadTemplate("LljmHealthBundle:Height:heightform.html.twig", "LljmHealthBundle:Height:heightadd.html.twig", 13)->display($context);
        // line 14
        echo "</ul>
";
        
        $__internal_7ec91ad87849d3db525477d1b39cdbd52cffa7d2ca30e24190d9cbaa21d7e847->leave($__internal_7ec91ad87849d3db525477d1b39cdbd52cffa7d2ca30e24190d9cbaa21d7e847_prof);

        
        $__internal_c81bddecdfd29335ec6e4d046ba65464ad85679d4b8dbb8171427d7bd173b361->leave($__internal_c81bddecdfd29335ec6e4d046ba65464ad85679d4b8dbb8171427d7bd173b361_prof);

    }

    public function getTemplateName()
    {
        return "LljmHealthBundle:Height:heightadd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 14,  80 => 13,  75 => 11,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"LljmHealthBundle::layout.html.twig\" %}


{% block title %}
  Height - {{ parent() }}
{% endblock %}

{% block lljm_health_body %}

  <h2>{{ 'Add a height reading' | trans }}</h2>
<ul>
  {% include \"LljmHealthBundle:Height:heightform.html.twig\" %}
</ul>
{% endblock %}

", "LljmHealthBundle:Height:heightadd.html.twig", "/home/lljm/web/src/Lljm/HealthBundle/Resources/views/Height/heightadd.html.twig");
    }
}
