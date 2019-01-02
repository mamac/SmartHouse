<?php

/* LljmTasksBundle:Default:taskadd.html.twig */
class __TwigTemplate_3ca7f533ab22c8b51693c101590e68dfe6dab57f87f115adbf3df52b2655628d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LljmTasksBundle::layout.html.twig", "LljmTasksBundle:Default:taskadd.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'lljm_tasks_body' => array($this, 'block_lljm_tasks_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LljmTasksBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9daff271900e484c8b51b21d81a14a9488793389e2aa7bc498a750326cc444d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9daff271900e484c8b51b21d81a14a9488793389e2aa7bc498a750326cc444d8->enter($__internal_9daff271900e484c8b51b21d81a14a9488793389e2aa7bc498a750326cc444d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmTasksBundle:Default:taskadd.html.twig"));

        $__internal_8e3fd37c74bf718fed0412b975b75b59ebdb3f2cea5a547d503b137399ffef3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e3fd37c74bf718fed0412b975b75b59ebdb3f2cea5a547d503b137399ffef3f->enter($__internal_8e3fd37c74bf718fed0412b975b75b59ebdb3f2cea5a547d503b137399ffef3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmTasksBundle:Default:taskadd.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9daff271900e484c8b51b21d81a14a9488793389e2aa7bc498a750326cc444d8->leave($__internal_9daff271900e484c8b51b21d81a14a9488793389e2aa7bc498a750326cc444d8_prof);

        
        $__internal_8e3fd37c74bf718fed0412b975b75b59ebdb3f2cea5a547d503b137399ffef3f->leave($__internal_8e3fd37c74bf718fed0412b975b75b59ebdb3f2cea5a547d503b137399ffef3f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_71e77ed184d5bb85927f3f2d8f5d07d897c3dc9dce640cc366ec63e5fbcb2412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71e77ed184d5bb85927f3f2d8f5d07d897c3dc9dce640cc366ec63e5fbcb2412->enter($__internal_71e77ed184d5bb85927f3f2d8f5d07d897c3dc9dce640cc366ec63e5fbcb2412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b4fab5676e65998b33039c37cb8be2a31dc88143bc284521a2768737d5dc6d3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4fab5676e65998b33039c37cb8be2a31dc88143bc284521a2768737d5dc6d3f->enter($__internal_b4fab5676e65998b33039c37cb8be2a31dc88143bc284521a2768737d5dc6d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Task Management - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b4fab5676e65998b33039c37cb8be2a31dc88143bc284521a2768737d5dc6d3f->leave($__internal_b4fab5676e65998b33039c37cb8be2a31dc88143bc284521a2768737d5dc6d3f_prof);

        
        $__internal_71e77ed184d5bb85927f3f2d8f5d07d897c3dc9dce640cc366ec63e5fbcb2412->leave($__internal_71e77ed184d5bb85927f3f2d8f5d07d897c3dc9dce640cc366ec63e5fbcb2412_prof);

    }

    // line 9
    public function block_lljm_tasks_body($context, array $blocks = array())
    {
        $__internal_5b1fafc96f68c71d63de2fae4d2bb3b23daac7da1d96f62c9c35fa3a29d93892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b1fafc96f68c71d63de2fae4d2bb3b23daac7da1d96f62c9c35fa3a29d93892->enter($__internal_5b1fafc96f68c71d63de2fae4d2bb3b23daac7da1d96f62c9c35fa3a29d93892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_tasks_body"));

        $__internal_22bb4b900341e676f7e48a27cbf0fa81e61083fd4cfc943d0bfe9d78963da614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22bb4b900341e676f7e48a27cbf0fa81e61083fd4cfc943d0bfe9d78963da614->enter($__internal_22bb4b900341e676f7e48a27cbf0fa81e61083fd4cfc943d0bfe9d78963da614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_tasks_body"));

        // line 10
        echo "
  <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a task"), "html", null, true);
        echo "</h2>
<ul>
  ";
        // line 13
        $this->loadTemplate("LljmTasksBundle:Default:taskform.html.twig", "LljmTasksBundle:Default:taskadd.html.twig", 13)->display($context);
        // line 14
        echo "</ul>
";
        
        $__internal_22bb4b900341e676f7e48a27cbf0fa81e61083fd4cfc943d0bfe9d78963da614->leave($__internal_22bb4b900341e676f7e48a27cbf0fa81e61083fd4cfc943d0bfe9d78963da614_prof);

        
        $__internal_5b1fafc96f68c71d63de2fae4d2bb3b23daac7da1d96f62c9c35fa3a29d93892->leave($__internal_5b1fafc96f68c71d63de2fae4d2bb3b23daac7da1d96f62c9c35fa3a29d93892_prof);

    }

    public function getTemplateName()
    {
        return "LljmTasksBundle:Default:taskadd.html.twig";
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
{% extends \"LljmTasksBundle::layout.html.twig\" %}


{% block title %}
  Task Management - {{ parent() }}
{% endblock %}

{% block lljm_tasks_body %}

  <h2>{{ 'Add a task' | trans }}</h2>
<ul>
  {% include \"LljmTasksBundle:Default:taskform.html.twig\" %}
</ul>
{% endblock %}

", "LljmTasksBundle:Default:taskadd.html.twig", "/home/lljm/web/src/Lljm/TasksBundle/Resources/views/Default/taskadd.html.twig");
    }
}
