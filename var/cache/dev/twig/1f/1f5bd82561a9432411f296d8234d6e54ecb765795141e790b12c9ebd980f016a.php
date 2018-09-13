<?php

/* LljmAdminBundle:User:useredit.html.twig */
class __TwigTemplate_c9251fccef09c90b86b0927cfe36446cfaf5bad2b694e19bdfb59c37179c4247 extends Twig_Template
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
        $__internal_b556fe3af4ec251d4def348432b0e2723804ba6048df76abbd871b65890e6803 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b556fe3af4ec251d4def348432b0e2723804ba6048df76abbd871b65890e6803->enter($__internal_b556fe3af4ec251d4def348432b0e2723804ba6048df76abbd871b65890e6803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmAdminBundle:User:useredit.html.twig"));

        $__internal_98646ad1954ff7e51af1b4c03acbec83c09036441db0cd631a1fe5bb5c987155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98646ad1954ff7e51af1b4c03acbec83c09036441db0cd631a1fe5bb5c987155->enter($__internal_98646ad1954ff7e51af1b4c03acbec83c09036441db0cd631a1fe5bb5c987155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmAdminBundle:User:useredit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b556fe3af4ec251d4def348432b0e2723804ba6048df76abbd871b65890e6803->leave($__internal_b556fe3af4ec251d4def348432b0e2723804ba6048df76abbd871b65890e6803_prof);

        
        $__internal_98646ad1954ff7e51af1b4c03acbec83c09036441db0cd631a1fe5bb5c987155->leave($__internal_98646ad1954ff7e51af1b4c03acbec83c09036441db0cd631a1fe5bb5c987155_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9cf7f0a23df8146e0aab35c0671e15e632fc921ba627eaefccdbbb6d4e17ea1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cf7f0a23df8146e0aab35c0671e15e632fc921ba627eaefccdbbb6d4e17ea1f->enter($__internal_9cf7f0a23df8146e0aab35c0671e15e632fc921ba627eaefccdbbb6d4e17ea1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5a00e4537bc0cd9a580d12bd3960fdc1442ef67c335bc525bfbaea261cfa12d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a00e4537bc0cd9a580d12bd3960fdc1442ef67c335bc525bfbaea261cfa12d7->enter($__internal_5a00e4537bc0cd9a580d12bd3960fdc1442ef67c335bc525bfbaea261cfa12d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  User update - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5a00e4537bc0cd9a580d12bd3960fdc1442ef67c335bc525bfbaea261cfa12d7->leave($__internal_5a00e4537bc0cd9a580d12bd3960fdc1442ef67c335bc525bfbaea261cfa12d7_prof);

        
        $__internal_9cf7f0a23df8146e0aab35c0671e15e632fc921ba627eaefccdbbb6d4e17ea1f->leave($__internal_9cf7f0a23df8146e0aab35c0671e15e632fc921ba627eaefccdbbb6d4e17ea1f_prof);

    }

    // line 9
    public function block_lljm_admin_body($context, array $blocks = array())
    {
        $__internal_d67333eb231f28182c53a63213476e66969c816407690838e1b08536e58018d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d67333eb231f28182c53a63213476e66969c816407690838e1b08536e58018d4->enter($__internal_d67333eb231f28182c53a63213476e66969c816407690838e1b08536e58018d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_admin_body"));

        $__internal_e197d68835c45239333b3670f0d3eceaa8aefc63c25120e9a346bd4be183b29d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e197d68835c45239333b3670f0d3eceaa8aefc63c25120e9a346bd4be183b29d->enter($__internal_e197d68835c45239333b3670f0d3eceaa8aefc63c25120e9a346bd4be183b29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_admin_body"));

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
        
        $__internal_e197d68835c45239333b3670f0d3eceaa8aefc63c25120e9a346bd4be183b29d->leave($__internal_e197d68835c45239333b3670f0d3eceaa8aefc63c25120e9a346bd4be183b29d_prof);

        
        $__internal_d67333eb231f28182c53a63213476e66969c816407690838e1b08536e58018d4->leave($__internal_d67333eb231f28182c53a63213476e66969c816407690838e1b08536e58018d4_prof);

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

", "LljmAdminBundle:User:useredit.html.twig", "/home/lljm/web_symfony3/web/src/Lljm/AdminBundle/Resources/views/User/useredit.html.twig");
    }
}
