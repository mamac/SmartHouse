<?php

/* LljmHomeBundle:Subzone:subzoneedit.html.twig */
class __TwigTemplate_b722008f20f875eed8a036c60132c8dc6b5c933e7fad485852eb370c3d66452f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Subzone:subzoneedit.html.twig", 2);
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
        $__internal_29d1c5113049a691d3d4f6e25ce62de1716fa1730a6ca869570240d2efb501ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29d1c5113049a691d3d4f6e25ce62de1716fa1730a6ca869570240d2efb501ce->enter($__internal_29d1c5113049a691d3d4f6e25ce62de1716fa1730a6ca869570240d2efb501ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Subzone:subzoneedit.html.twig"));

        $__internal_f7f32da27bffd0fdb74a4c17569038c2c0537cf1c71e2a2dff751fbf0b899606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7f32da27bffd0fdb74a4c17569038c2c0537cf1c71e2a2dff751fbf0b899606->enter($__internal_f7f32da27bffd0fdb74a4c17569038c2c0537cf1c71e2a2dff751fbf0b899606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Subzone:subzoneedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29d1c5113049a691d3d4f6e25ce62de1716fa1730a6ca869570240d2efb501ce->leave($__internal_29d1c5113049a691d3d4f6e25ce62de1716fa1730a6ca869570240d2efb501ce_prof);

        
        $__internal_f7f32da27bffd0fdb74a4c17569038c2c0537cf1c71e2a2dff751fbf0b899606->leave($__internal_f7f32da27bffd0fdb74a4c17569038c2c0537cf1c71e2a2dff751fbf0b899606_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d791fa1ab3bd35f39133b843396ebf0edbb4176ee6ec488141389057d21c5a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d791fa1ab3bd35f39133b843396ebf0edbb4176ee6ec488141389057d21c5a6->enter($__internal_9d791fa1ab3bd35f39133b843396ebf0edbb4176ee6ec488141389057d21c5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c32c41ad701160bb4cc08b711ac7e4e99d19bf3b23fb340a89f4c6a74a4cf3d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c32c41ad701160bb4cc08b711ac7e4e99d19bf3b23fb340a89f4c6a74a4cf3d1->enter($__internal_c32c41ad701160bb4cc08b711ac7e4e99d19bf3b23fb340a89f4c6a74a4cf3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Sub zone update - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c32c41ad701160bb4cc08b711ac7e4e99d19bf3b23fb340a89f4c6a74a4cf3d1->leave($__internal_c32c41ad701160bb4cc08b711ac7e4e99d19bf3b23fb340a89f4c6a74a4cf3d1_prof);

        
        $__internal_9d791fa1ab3bd35f39133b843396ebf0edbb4176ee6ec488141389057d21c5a6->leave($__internal_9d791fa1ab3bd35f39133b843396ebf0edbb4176ee6ec488141389057d21c5a6_prof);

    }

    // line 9
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_b7a656094592199ca2f4384c51181b3993964601ada5533e768c9cae5c638f20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7a656094592199ca2f4384c51181b3993964601ada5533e768c9cae5c638f20->enter($__internal_b7a656094592199ca2f4384c51181b3993964601ada5533e768c9cae5c638f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_15ef71f3cc5fc389052514e21169598649f051c4de74c09480fc0025fa2fb4ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15ef71f3cc5fc389052514e21169598649f051c4de74c09480fc0025fa2fb4ef->enter($__internal_15ef71f3cc5fc389052514e21169598649f051c4de74c09480fc0025fa2fb4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        // line 10
        echo "
  <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update sub zone"), "html", null, true);
        echo "</h2>
<ul>
  ";
        // line 13
        $this->loadTemplate("LljmHomeBundle:Subzone:subzoneeditform.html.twig", "LljmHomeBundle:Subzone:subzoneedit.html.twig", 13)->display($context);
        // line 14
        echo "</ul>
";
        
        $__internal_15ef71f3cc5fc389052514e21169598649f051c4de74c09480fc0025fa2fb4ef->leave($__internal_15ef71f3cc5fc389052514e21169598649f051c4de74c09480fc0025fa2fb4ef_prof);

        
        $__internal_b7a656094592199ca2f4384c51181b3993964601ada5533e768c9cae5c638f20->leave($__internal_b7a656094592199ca2f4384c51181b3993964601ada5533e768c9cae5c638f20_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Subzone:subzoneedit.html.twig";
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
  Sub zone update - {{ parent() }}
{% endblock %}

{% block lljm_home_body %}

  <h2>{{ 'Update sub zone' | trans }}</h2>
<ul>
  {% include \"LljmHomeBundle:Subzone:subzoneeditform.html.twig\" %}
</ul>
{% endblock %}

", "LljmHomeBundle:Subzone:subzoneedit.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Subzone/subzoneedit.html.twig");
    }
}
