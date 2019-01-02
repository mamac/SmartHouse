<?php

/* LljmAdminBundle:User:useredit.html.twig */
class __TwigTemplate_d6d28f7295342fd8211bc90376b9accf1e52669dce10ef953c679dfd4517fd23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LljmAdminBundle::layout.html.twig", "LljmAdminBundle:User:useredit.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'lljm_admin_body' => array($this, 'block_lljm_admin_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LljmAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c84ed467276d1549b5f8a7fc0adc17401f08220d5a459f2d4f7467aa283d8c60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c84ed467276d1549b5f8a7fc0adc17401f08220d5a459f2d4f7467aa283d8c60->enter($__internal_c84ed467276d1549b5f8a7fc0adc17401f08220d5a459f2d4f7467aa283d8c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmAdminBundle:User:useredit.html.twig"));

        $__internal_b4d4f09f04421cfd8cc145170dcf5a75005bfd4d7c9a7c39dfc334318291208a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4d4f09f04421cfd8cc145170dcf5a75005bfd4d7c9a7c39dfc334318291208a->enter($__internal_b4d4f09f04421cfd8cc145170dcf5a75005bfd4d7c9a7c39dfc334318291208a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmAdminBundle:User:useredit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c84ed467276d1549b5f8a7fc0adc17401f08220d5a459f2d4f7467aa283d8c60->leave($__internal_c84ed467276d1549b5f8a7fc0adc17401f08220d5a459f2d4f7467aa283d8c60_prof);

        
        $__internal_b4d4f09f04421cfd8cc145170dcf5a75005bfd4d7c9a7c39dfc334318291208a->leave($__internal_b4d4f09f04421cfd8cc145170dcf5a75005bfd4d7c9a7c39dfc334318291208a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f65cdf8bbfbe6d3b579522998a54b7c5c415fe6120e38d31c591a566a38df14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f65cdf8bbfbe6d3b579522998a54b7c5c415fe6120e38d31c591a566a38df14->enter($__internal_2f65cdf8bbfbe6d3b579522998a54b7c5c415fe6120e38d31c591a566a38df14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a7bef30c3e4c4fd005a0cbed36cce04c7fda731abecbe133a68ee7bb7d860f79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7bef30c3e4c4fd005a0cbed36cce04c7fda731abecbe133a68ee7bb7d860f79->enter($__internal_a7bef30c3e4c4fd005a0cbed36cce04c7fda731abecbe133a68ee7bb7d860f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  User update - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a7bef30c3e4c4fd005a0cbed36cce04c7fda731abecbe133a68ee7bb7d860f79->leave($__internal_a7bef30c3e4c4fd005a0cbed36cce04c7fda731abecbe133a68ee7bb7d860f79_prof);

        
        $__internal_2f65cdf8bbfbe6d3b579522998a54b7c5c415fe6120e38d31c591a566a38df14->leave($__internal_2f65cdf8bbfbe6d3b579522998a54b7c5c415fe6120e38d31c591a566a38df14_prof);

    }

    // line 9
    public function block_lljm_admin_body($context, array $blocks = array())
    {
        $__internal_5c6bc878007d9838b5aba9175779f753eb3c23e6c4db42ae517e507d5becac20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c6bc878007d9838b5aba9175779f753eb3c23e6c4db42ae517e507d5becac20->enter($__internal_5c6bc878007d9838b5aba9175779f753eb3c23e6c4db42ae517e507d5becac20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_admin_body"));

        $__internal_cc342ab743e0d65a6fd9c395778b141f761a486348740936fb6ee5591210ad83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc342ab743e0d65a6fd9c395778b141f761a486348740936fb6ee5591210ad83->enter($__internal_cc342ab743e0d65a6fd9c395778b141f761a486348740936fb6ee5591210ad83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_admin_body"));

        // line 10
        echo "
  <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update user"), "html", null, true);
        echo "</h2>
<ul>
  ";
        // line 13
        $this->loadTemplate("LljmAdminBundle:User:usereditform.html.twig", "LljmAdminBundle:User:useredit.html.twig", 13)->display($context);
        // line 14
        echo "</ul>
";
        
        $__internal_cc342ab743e0d65a6fd9c395778b141f761a486348740936fb6ee5591210ad83->leave($__internal_cc342ab743e0d65a6fd9c395778b141f761a486348740936fb6ee5591210ad83_prof);

        
        $__internal_5c6bc878007d9838b5aba9175779f753eb3c23e6c4db42ae517e507d5becac20->leave($__internal_5c6bc878007d9838b5aba9175779f753eb3c23e6c4db42ae517e507d5becac20_prof);

    }

    public function getTemplateName()
    {
        return "LljmAdminBundle:User:useredit.html.twig";
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
{% extends \"LljmAdminBundle::layout.html.twig\" %}


{% block title %}
  User update - {{ parent() }}
{% endblock %}

{% block lljm_admin_body %}

  <h2>{{ 'Update user' | trans }}</h2>
<ul>
  {% include \"LljmAdminBundle:User:usereditform.html.twig\" %}
</ul>
{% endblock %}

", "LljmAdminBundle:User:useredit.html.twig", "/home/lljm/web/src/Lljm/AdminBundle/Resources/views/User/useredit.html.twig");
    }
}
