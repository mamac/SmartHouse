<?php

/* LljmHealthBundle:Weight:weightadd.html.twig */
class __TwigTemplate_9394f90df744e39b4fca4ed5cb91d12792580dd97d746c41eb27bdbd934976ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LljmHealthBundle::layout.html.twig", "LljmHealthBundle:Weight:weightadd.html.twig", 2);
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
        $__internal_107330a806c170c358f985d74a3957b07776f69fec0e127214f67dde2d3f482f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_107330a806c170c358f985d74a3957b07776f69fec0e127214f67dde2d3f482f->enter($__internal_107330a806c170c358f985d74a3957b07776f69fec0e127214f67dde2d3f482f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHealthBundle:Weight:weightadd.html.twig"));

        $__internal_061030ef5ea1f4ad062fab65acdd86dbec313f62a36f06a9bf5c5968e6350889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_061030ef5ea1f4ad062fab65acdd86dbec313f62a36f06a9bf5c5968e6350889->enter($__internal_061030ef5ea1f4ad062fab65acdd86dbec313f62a36f06a9bf5c5968e6350889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHealthBundle:Weight:weightadd.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_107330a806c170c358f985d74a3957b07776f69fec0e127214f67dde2d3f482f->leave($__internal_107330a806c170c358f985d74a3957b07776f69fec0e127214f67dde2d3f482f_prof);

        
        $__internal_061030ef5ea1f4ad062fab65acdd86dbec313f62a36f06a9bf5c5968e6350889->leave($__internal_061030ef5ea1f4ad062fab65acdd86dbec313f62a36f06a9bf5c5968e6350889_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ca2dade4c4d79605d444bf3ac0ad77b8fd43fc3a2c418048112de1234aeb030 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ca2dade4c4d79605d444bf3ac0ad77b8fd43fc3a2c418048112de1234aeb030->enter($__internal_0ca2dade4c4d79605d444bf3ac0ad77b8fd43fc3a2c418048112de1234aeb030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e702480c6997f6761e06fd899a4c3bceee5321e49f40ceac5c34d3181ba77c85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e702480c6997f6761e06fd899a4c3bceee5321e49f40ceac5c34d3181ba77c85->enter($__internal_e702480c6997f6761e06fd899a4c3bceee5321e49f40ceac5c34d3181ba77c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Weight - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e702480c6997f6761e06fd899a4c3bceee5321e49f40ceac5c34d3181ba77c85->leave($__internal_e702480c6997f6761e06fd899a4c3bceee5321e49f40ceac5c34d3181ba77c85_prof);

        
        $__internal_0ca2dade4c4d79605d444bf3ac0ad77b8fd43fc3a2c418048112de1234aeb030->leave($__internal_0ca2dade4c4d79605d444bf3ac0ad77b8fd43fc3a2c418048112de1234aeb030_prof);

    }

    // line 9
    public function block_lljm_health_body($context, array $blocks = array())
    {
        $__internal_dc57302dfe56e7f9931df0a95c185ca2ac4bd3f95d7e8c0e4e2d5953ff72c847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc57302dfe56e7f9931df0a95c185ca2ac4bd3f95d7e8c0e4e2d5953ff72c847->enter($__internal_dc57302dfe56e7f9931df0a95c185ca2ac4bd3f95d7e8c0e4e2d5953ff72c847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_health_body"));

        $__internal_837ca7d6006bc4e57aa969229a5169e9b2e62b8964ffc052dd7094abdd77829f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_837ca7d6006bc4e57aa969229a5169e9b2e62b8964ffc052dd7094abdd77829f->enter($__internal_837ca7d6006bc4e57aa969229a5169e9b2e62b8964ffc052dd7094abdd77829f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_health_body"));

        // line 10
        echo "
  <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a weight reading"), "html", null, true);
        echo "</h2>
<ul>
  ";
        // line 13
        $this->loadTemplate("LljmHealthBundle:Weight:weightform.html.twig", "LljmHealthBundle:Weight:weightadd.html.twig", 13)->display($context);
        // line 14
        echo "</ul>
";
        
        $__internal_837ca7d6006bc4e57aa969229a5169e9b2e62b8964ffc052dd7094abdd77829f->leave($__internal_837ca7d6006bc4e57aa969229a5169e9b2e62b8964ffc052dd7094abdd77829f_prof);

        
        $__internal_dc57302dfe56e7f9931df0a95c185ca2ac4bd3f95d7e8c0e4e2d5953ff72c847->leave($__internal_dc57302dfe56e7f9931df0a95c185ca2ac4bd3f95d7e8c0e4e2d5953ff72c847_prof);

    }

    public function getTemplateName()
    {
        return "LljmHealthBundle:Weight:weightadd.html.twig";
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
  Weight - {{ parent() }}
{% endblock %}

{% block lljm_health_body %}

  <h2>{{ 'Add a weight reading' | trans }}</h2>
<ul>
  {% include \"LljmHealthBundle:Weight:weightform.html.twig\" %}
</ul>
{% endblock %}

", "LljmHealthBundle:Weight:weightadd.html.twig", "/home/lljm/web/src/Lljm/HealthBundle/Resources/views/Weight/weightadd.html.twig");
    }
}
