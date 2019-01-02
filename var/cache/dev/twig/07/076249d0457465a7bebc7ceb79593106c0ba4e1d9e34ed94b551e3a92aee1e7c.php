<?php

/* LljmTasksBundle:Default:taskedit.html.twig */
class __TwigTemplate_251eb423828d8669d43d4855b0082af378f3fef06e7f3494cf19a707fe9c9b57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LljmTasksBundle::layout.html.twig", "LljmTasksBundle:Default:taskedit.html.twig", 2);
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
        $__internal_2021f45dd84fb06df2fe9a202f60d0e0a7416abc00481070f27edaa4af51444c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2021f45dd84fb06df2fe9a202f60d0e0a7416abc00481070f27edaa4af51444c->enter($__internal_2021f45dd84fb06df2fe9a202f60d0e0a7416abc00481070f27edaa4af51444c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmTasksBundle:Default:taskedit.html.twig"));

        $__internal_b9ab8d95430bad5dbcd66f4784beac4b33f90cc807575b1a718646ae6ffb6178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9ab8d95430bad5dbcd66f4784beac4b33f90cc807575b1a718646ae6ffb6178->enter($__internal_b9ab8d95430bad5dbcd66f4784beac4b33f90cc807575b1a718646ae6ffb6178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmTasksBundle:Default:taskedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2021f45dd84fb06df2fe9a202f60d0e0a7416abc00481070f27edaa4af51444c->leave($__internal_2021f45dd84fb06df2fe9a202f60d0e0a7416abc00481070f27edaa4af51444c_prof);

        
        $__internal_b9ab8d95430bad5dbcd66f4784beac4b33f90cc807575b1a718646ae6ffb6178->leave($__internal_b9ab8d95430bad5dbcd66f4784beac4b33f90cc807575b1a718646ae6ffb6178_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_16a7f05f7e10086bc707b3e224d83aabd2b684c505bd0fe4a815acdfba8d4204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16a7f05f7e10086bc707b3e224d83aabd2b684c505bd0fe4a815acdfba8d4204->enter($__internal_16a7f05f7e10086bc707b3e224d83aabd2b684c505bd0fe4a815acdfba8d4204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3511bc14096034d279b8c18b35c9b48ec3c11c123057bfa0a163e8bbfdedf6a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3511bc14096034d279b8c18b35c9b48ec3c11c123057bfa0a163e8bbfdedf6a0->enter($__internal_3511bc14096034d279b8c18b35c9b48ec3c11c123057bfa0a163e8bbfdedf6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Task Management - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3511bc14096034d279b8c18b35c9b48ec3c11c123057bfa0a163e8bbfdedf6a0->leave($__internal_3511bc14096034d279b8c18b35c9b48ec3c11c123057bfa0a163e8bbfdedf6a0_prof);

        
        $__internal_16a7f05f7e10086bc707b3e224d83aabd2b684c505bd0fe4a815acdfba8d4204->leave($__internal_16a7f05f7e10086bc707b3e224d83aabd2b684c505bd0fe4a815acdfba8d4204_prof);

    }

    // line 9
    public function block_lljm_tasks_body($context, array $blocks = array())
    {
        $__internal_7bfd0aedd191c47f836eac329253d902885a51a96947ab8cc3483b9defe61032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bfd0aedd191c47f836eac329253d902885a51a96947ab8cc3483b9defe61032->enter($__internal_7bfd0aedd191c47f836eac329253d902885a51a96947ab8cc3483b9defe61032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_tasks_body"));

        $__internal_b334e01bd940fb6bb01a33e6a6f2531c7faab2c6f288cbbfb6bc90ca3e06ec5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b334e01bd940fb6bb01a33e6a6f2531c7faab2c6f288cbbfb6bc90ca3e06ec5c->enter($__internal_b334e01bd940fb6bb01a33e6a6f2531c7faab2c6f288cbbfb6bc90ca3e06ec5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_tasks_body"));

        // line 10
        echo "
  <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update a task"), "html", null, true);
        echo "</h2>
<ul>
  ";
        // line 13
        $this->loadTemplate("LljmTasksBundle:Default:taskeditform.html.twig", "LljmTasksBundle:Default:taskedit.html.twig", 13)->display($context);
        // line 14
        echo "</ul>
";
        
        $__internal_b334e01bd940fb6bb01a33e6a6f2531c7faab2c6f288cbbfb6bc90ca3e06ec5c->leave($__internal_b334e01bd940fb6bb01a33e6a6f2531c7faab2c6f288cbbfb6bc90ca3e06ec5c_prof);

        
        $__internal_7bfd0aedd191c47f836eac329253d902885a51a96947ab8cc3483b9defe61032->leave($__internal_7bfd0aedd191c47f836eac329253d902885a51a96947ab8cc3483b9defe61032_prof);

    }

    public function getTemplateName()
    {
        return "LljmTasksBundle:Default:taskedit.html.twig";
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

  <h2>{{ 'Update a task' | trans }}</h2>
<ul>
  {% include \"LljmTasksBundle:Default:taskeditform.html.twig\" %}
</ul>
{% endblock %}

", "LljmTasksBundle:Default:taskedit.html.twig", "/home/lljm/web/src/Lljm/TasksBundle/Resources/views/Default/taskedit.html.twig");
    }
}
