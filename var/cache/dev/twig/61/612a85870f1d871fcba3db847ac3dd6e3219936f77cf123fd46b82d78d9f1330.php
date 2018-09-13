<?php

/* LljmHomeBundle:Subzone:subzoneadd.html.twig */
class __TwigTemplate_e580f6aa8f116b0d162cddd89426847767a8855f341d40ba43142823bf2dae76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Subzone:subzoneadd.html.twig", 2);
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
        $__internal_d5ad2a4fc65ffcddf693c93b442e4d71c67f72ff6cd9856286a189feb13cc264 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5ad2a4fc65ffcddf693c93b442e4d71c67f72ff6cd9856286a189feb13cc264->enter($__internal_d5ad2a4fc65ffcddf693c93b442e4d71c67f72ff6cd9856286a189feb13cc264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Subzone:subzoneadd.html.twig"));

        $__internal_e6c51497f25ca15978314b9ffefdca5bc47b2b29813851eee1e210bc952f4c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6c51497f25ca15978314b9ffefdca5bc47b2b29813851eee1e210bc952f4c34->enter($__internal_e6c51497f25ca15978314b9ffefdca5bc47b2b29813851eee1e210bc952f4c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Subzone:subzoneadd.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5ad2a4fc65ffcddf693c93b442e4d71c67f72ff6cd9856286a189feb13cc264->leave($__internal_d5ad2a4fc65ffcddf693c93b442e4d71c67f72ff6cd9856286a189feb13cc264_prof);

        
        $__internal_e6c51497f25ca15978314b9ffefdca5bc47b2b29813851eee1e210bc952f4c34->leave($__internal_e6c51497f25ca15978314b9ffefdca5bc47b2b29813851eee1e210bc952f4c34_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_deee138d92be8263e6bb23a82e9d92f810d5607a4341aa6f450aecbeda8ae9b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deee138d92be8263e6bb23a82e9d92f810d5607a4341aa6f450aecbeda8ae9b7->enter($__internal_deee138d92be8263e6bb23a82e9d92f810d5607a4341aa6f450aecbeda8ae9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d1ca15c83084999279082d1765669003f3cd95a49209161ce83ac9c0a0f2e5ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ca15c83084999279082d1765669003f3cd95a49209161ce83ac9c0a0f2e5ee->enter($__internal_d1ca15c83084999279082d1765669003f3cd95a49209161ce83ac9c0a0f2e5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Sub zones - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d1ca15c83084999279082d1765669003f3cd95a49209161ce83ac9c0a0f2e5ee->leave($__internal_d1ca15c83084999279082d1765669003f3cd95a49209161ce83ac9c0a0f2e5ee_prof);

        
        $__internal_deee138d92be8263e6bb23a82e9d92f810d5607a4341aa6f450aecbeda8ae9b7->leave($__internal_deee138d92be8263e6bb23a82e9d92f810d5607a4341aa6f450aecbeda8ae9b7_prof);

    }

    // line 9
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_0999a295ebd4767e05590626cc4047c7ddd0f3cd66354ac81ad122695fc3f6dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0999a295ebd4767e05590626cc4047c7ddd0f3cd66354ac81ad122695fc3f6dd->enter($__internal_0999a295ebd4767e05590626cc4047c7ddd0f3cd66354ac81ad122695fc3f6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_f3431c8c7b5429e565a7e6495e0240684ca465f7d13f84740f5ad8cfe22de808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3431c8c7b5429e565a7e6495e0240684ca465f7d13f84740f5ad8cfe22de808->enter($__internal_f3431c8c7b5429e565a7e6495e0240684ca465f7d13f84740f5ad8cfe22de808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        // line 10
        echo "
  <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a sub zone"), "html", null, true);
        echo "</h2>
<ul>
  ";
        // line 13
        $this->loadTemplate("LljmHomeBundle:Subzone:subzoneform.html.twig", "LljmHomeBundle:Subzone:subzoneadd.html.twig", 13)->display($context);
        // line 14
        echo "</ul>
";
        
        $__internal_f3431c8c7b5429e565a7e6495e0240684ca465f7d13f84740f5ad8cfe22de808->leave($__internal_f3431c8c7b5429e565a7e6495e0240684ca465f7d13f84740f5ad8cfe22de808_prof);

        
        $__internal_0999a295ebd4767e05590626cc4047c7ddd0f3cd66354ac81ad122695fc3f6dd->leave($__internal_0999a295ebd4767e05590626cc4047c7ddd0f3cd66354ac81ad122695fc3f6dd_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Subzone:subzoneadd.html.twig";
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
  Sub zones - {{ parent() }}
{% endblock %}

{% block lljm_home_body %}

  <h2>{{ 'Add a sub zone' | trans }}</h2>
<ul>
  {% include \"LljmHomeBundle:Subzone:subzoneform.html.twig\" %}
</ul>
{% endblock %}

", "LljmHomeBundle:Subzone:subzoneadd.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Subzone/subzoneadd.html.twig");
    }
}
