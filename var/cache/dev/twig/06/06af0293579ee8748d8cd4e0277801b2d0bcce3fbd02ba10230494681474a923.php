<?php

/* LljmHomeBundle:House:houseedit.html.twig */
class __TwigTemplate_b2b7b169fc88d08f6f5017bd6666dad6510be0e4e48005f42fbb6cacd3e74763 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:House:houseedit.html.twig", 2);
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
        $__internal_c8b4f7a8e682b562123944ee0589891af477b6f3cd357e03e48f69bac49802ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8b4f7a8e682b562123944ee0589891af477b6f3cd357e03e48f69bac49802ad->enter($__internal_c8b4f7a8e682b562123944ee0589891af477b6f3cd357e03e48f69bac49802ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:House:houseedit.html.twig"));

        $__internal_c5eae34c7ae54f94fb3894837a88e106bce11739f3189252071d9a34319ec667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5eae34c7ae54f94fb3894837a88e106bce11739f3189252071d9a34319ec667->enter($__internal_c5eae34c7ae54f94fb3894837a88e106bce11739f3189252071d9a34319ec667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:House:houseedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8b4f7a8e682b562123944ee0589891af477b6f3cd357e03e48f69bac49802ad->leave($__internal_c8b4f7a8e682b562123944ee0589891af477b6f3cd357e03e48f69bac49802ad_prof);

        
        $__internal_c5eae34c7ae54f94fb3894837a88e106bce11739f3189252071d9a34319ec667->leave($__internal_c5eae34c7ae54f94fb3894837a88e106bce11739f3189252071d9a34319ec667_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc4396db856b8ae678c7d89c1852a2d4ebf14cb1c54a9da3ccb053320488263e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc4396db856b8ae678c7d89c1852a2d4ebf14cb1c54a9da3ccb053320488263e->enter($__internal_dc4396db856b8ae678c7d89c1852a2d4ebf14cb1c54a9da3ccb053320488263e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ceb47b16542e3576ac32a13077354f3956cf79fca88ca11ad2c024536b6fe27b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb47b16542e3576ac32a13077354f3956cf79fca88ca11ad2c024536b6fe27b->enter($__internal_ceb47b16542e3576ac32a13077354f3956cf79fca88ca11ad2c024536b6fe27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  House update - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ceb47b16542e3576ac32a13077354f3956cf79fca88ca11ad2c024536b6fe27b->leave($__internal_ceb47b16542e3576ac32a13077354f3956cf79fca88ca11ad2c024536b6fe27b_prof);

        
        $__internal_dc4396db856b8ae678c7d89c1852a2d4ebf14cb1c54a9da3ccb053320488263e->leave($__internal_dc4396db856b8ae678c7d89c1852a2d4ebf14cb1c54a9da3ccb053320488263e_prof);

    }

    // line 9
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_ec4cb311c972608f41b3474e88e01942812207dcd334068b331fdf75b0146bf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec4cb311c972608f41b3474e88e01942812207dcd334068b331fdf75b0146bf6->enter($__internal_ec4cb311c972608f41b3474e88e01942812207dcd334068b331fdf75b0146bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_bdc94f135f93ed1ff492c0ddc56a9479bb44034238acc95ab9d6be9ff76f28fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdc94f135f93ed1ff492c0ddc56a9479bb44034238acc95ab9d6be9ff76f28fa->enter($__internal_bdc94f135f93ed1ff492c0ddc56a9479bb44034238acc95ab9d6be9ff76f28fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        // line 10
        echo "
  <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update house"), "html", null, true);
        echo "</h2>
<ul>
  ";
        // line 13
        $this->loadTemplate("LljmHomeBundle:House:houseeditform.html.twig", "LljmHomeBundle:House:houseedit.html.twig", 13)->display($context);
        // line 14
        echo "</ul>
";
        
        $__internal_bdc94f135f93ed1ff492c0ddc56a9479bb44034238acc95ab9d6be9ff76f28fa->leave($__internal_bdc94f135f93ed1ff492c0ddc56a9479bb44034238acc95ab9d6be9ff76f28fa_prof);

        
        $__internal_ec4cb311c972608f41b3474e88e01942812207dcd334068b331fdf75b0146bf6->leave($__internal_ec4cb311c972608f41b3474e88e01942812207dcd334068b331fdf75b0146bf6_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:House:houseedit.html.twig";
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
  House update - {{ parent() }}
{% endblock %}

{% block lljm_home_body %}

  <h2>{{ 'Update house' | trans }}</h2>
<ul>
  {% include \"LljmHomeBundle:House:houseeditform.html.twig\" %}
</ul>
{% endblock %}

", "LljmHomeBundle:House:houseedit.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/House/houseedit.html.twig");
    }
}
