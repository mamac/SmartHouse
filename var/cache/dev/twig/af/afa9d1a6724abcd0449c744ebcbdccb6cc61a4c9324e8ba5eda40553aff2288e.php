<?php

/* LljmHomeBundle:Heating:zoneheatingedit.html.twig */
class __TwigTemplate_3be6b458a506f7e10a4ec56172d82994571ea155c3626abf051f0929128d9b32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Heating:zoneheatingedit.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'lljm_home_body' => array($this, 'block_lljm_home_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LljmHomeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7e396fa74001e18f8e91b98b8f0c3e0cdebf622e1c8c259365cef58aef48a8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7e396fa74001e18f8e91b98b8f0c3e0cdebf622e1c8c259365cef58aef48a8c->enter($__internal_c7e396fa74001e18f8e91b98b8f0c3e0cdebf622e1c8c259365cef58aef48a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Heating:zoneheatingedit.html.twig"));

        $__internal_467affa4e6e061be79accc3a979f4789ee623cc3a0516206b8ef49fe77a1a95c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_467affa4e6e061be79accc3a979f4789ee623cc3a0516206b8ef49fe77a1a95c->enter($__internal_467affa4e6e061be79accc3a979f4789ee623cc3a0516206b8ef49fe77a1a95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Heating:zoneheatingedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7e396fa74001e18f8e91b98b8f0c3e0cdebf622e1c8c259365cef58aef48a8c->leave($__internal_c7e396fa74001e18f8e91b98b8f0c3e0cdebf622e1c8c259365cef58aef48a8c_prof);

        
        $__internal_467affa4e6e061be79accc3a979f4789ee623cc3a0516206b8ef49fe77a1a95c->leave($__internal_467affa4e6e061be79accc3a979f4789ee623cc3a0516206b8ef49fe77a1a95c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad6777aaa6e70d44a01c917c6aaa8ab1ae093f7e3679d4537a2e6fe6bc1ae8e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad6777aaa6e70d44a01c917c6aaa8ab1ae093f7e3679d4537a2e6fe6bc1ae8e0->enter($__internal_ad6777aaa6e70d44a01c917c6aaa8ab1ae093f7e3679d4537a2e6fe6bc1ae8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_11bd7dccb7c9321360a9e1e44cddb98e4b785867b2537b8df8c2f5572ce55ea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11bd7dccb7c9321360a9e1e44cddb98e4b785867b2537b8df8c2f5572ce55ea0->enter($__internal_11bd7dccb7c9321360a9e1e44cddb98e4b785867b2537b8df8c2f5572ce55ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Heating update - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_11bd7dccb7c9321360a9e1e44cddb98e4b785867b2537b8df8c2f5572ce55ea0->leave($__internal_11bd7dccb7c9321360a9e1e44cddb98e4b785867b2537b8df8c2f5572ce55ea0_prof);

        
        $__internal_ad6777aaa6e70d44a01c917c6aaa8ab1ae093f7e3679d4537a2e6fe6bc1ae8e0->leave($__internal_ad6777aaa6e70d44a01c917c6aaa8ab1ae093f7e3679d4537a2e6fe6bc1ae8e0_prof);

    }

    // line 9
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_2b23cb7ede8090a5df278657e370105c722341d395c8018a43c1f62c06505100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b23cb7ede8090a5df278657e370105c722341d395c8018a43c1f62c06505100->enter($__internal_2b23cb7ede8090a5df278657e370105c722341d395c8018a43c1f62c06505100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_112337b276a8e49ec8668504fef97fe81cfed5cf0506272f3fd5109c9c72ad4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_112337b276a8e49ec8668504fef97fe81cfed5cf0506272f3fd5109c9c72ad4a->enter($__internal_112337b276a8e49ec8668504fef97fe81cfed5cf0506272f3fd5109c9c72ad4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        // line 10
        echo "
  <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update heating zone settings"), "html", null, true);
        echo "</h2>
<ul>
  ";
        // line 13
        $this->loadTemplate("LljmHomeBundle:Heating:zoneheatingeditform.html.twig", "LljmHomeBundle:Heating:zoneheatingedit.html.twig", 13)->display($context);
        // line 14
        echo "</ul>
";
        
        $__internal_112337b276a8e49ec8668504fef97fe81cfed5cf0506272f3fd5109c9c72ad4a->leave($__internal_112337b276a8e49ec8668504fef97fe81cfed5cf0506272f3fd5109c9c72ad4a_prof);

        
        $__internal_2b23cb7ede8090a5df278657e370105c722341d395c8018a43c1f62c06505100->leave($__internal_2b23cb7ede8090a5df278657e370105c722341d395c8018a43c1f62c06505100_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Heating:zoneheatingedit.html.twig";
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
{% extends \"LljmHomeBundle::layout.html.twig\" %}


{% block title %}
  Heating update - {{ parent() }}
{% endblock %}

{% block lljm_home_body %}

  <h2>{{ 'Update heating zone settings' | trans }}</h2>
<ul>
  {% include \"LljmHomeBundle:Heating:zoneheatingeditform.html.twig\" %}
</ul>
{% endblock %}

", "LljmHomeBundle:Heating:zoneheatingedit.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Heating/zoneheatingedit.html.twig");
    }
}
