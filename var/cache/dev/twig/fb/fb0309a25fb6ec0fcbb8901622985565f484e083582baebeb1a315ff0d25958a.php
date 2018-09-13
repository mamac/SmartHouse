<?php

/* LljmHomeBundle:Visualization:waterlogadd.html.twig */
class __TwigTemplate_b72fff77e9b8735660e700ce61fa1c90f6b3abc7e6ee8af49d83ced675ce4915 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Visualization:waterlogadd.html.twig", 2);
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
        $__internal_67115d13f0e134deff9e0921dfd395170758a810423e50f38dab9a720035142b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67115d13f0e134deff9e0921dfd395170758a810423e50f38dab9a720035142b->enter($__internal_67115d13f0e134deff9e0921dfd395170758a810423e50f38dab9a720035142b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:waterlogadd.html.twig"));

        $__internal_ea15f72aea21071cbc75932c2f4860627624e6d9b7f2cd042dfb06c1cfcf0040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea15f72aea21071cbc75932c2f4860627624e6d9b7f2cd042dfb06c1cfcf0040->enter($__internal_ea15f72aea21071cbc75932c2f4860627624e6d9b7f2cd042dfb06c1cfcf0040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:waterlogadd.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67115d13f0e134deff9e0921dfd395170758a810423e50f38dab9a720035142b->leave($__internal_67115d13f0e134deff9e0921dfd395170758a810423e50f38dab9a720035142b_prof);

        
        $__internal_ea15f72aea21071cbc75932c2f4860627624e6d9b7f2cd042dfb06c1cfcf0040->leave($__internal_ea15f72aea21071cbc75932c2f4860627624e6d9b7f2cd042dfb06c1cfcf0040_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eeafdb571ea7cd61154f915a2f347f6b3113021a888267c8e56449c81563e174 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeafdb571ea7cd61154f915a2f347f6b3113021a888267c8e56449c81563e174->enter($__internal_eeafdb571ea7cd61154f915a2f347f6b3113021a888267c8e56449c81563e174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_00a40ab49fad04da963d0c33c763c3bef4a4e2d7b65c7385e6db229b3e9cb73e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00a40ab49fad04da963d0c33c763c3bef4a4e2d7b65c7385e6db229b3e9cb73e->enter($__internal_00a40ab49fad04da963d0c33c763c3bef4a4e2d7b65c7385e6db229b3e9cb73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Water log - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_00a40ab49fad04da963d0c33c763c3bef4a4e2d7b65c7385e6db229b3e9cb73e->leave($__internal_00a40ab49fad04da963d0c33c763c3bef4a4e2d7b65c7385e6db229b3e9cb73e_prof);

        
        $__internal_eeafdb571ea7cd61154f915a2f347f6b3113021a888267c8e56449c81563e174->leave($__internal_eeafdb571ea7cd61154f915a2f347f6b3113021a888267c8e56449c81563e174_prof);

    }

    // line 9
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_de886f85c413794a5ec48906d2b87d9e862ae22f8b2576eda75c9479a5b226bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de886f85c413794a5ec48906d2b87d9e862ae22f8b2576eda75c9479a5b226bf->enter($__internal_de886f85c413794a5ec48906d2b87d9e862ae22f8b2576eda75c9479a5b226bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_26e4ffdadf7bef6ceda5d9565946880b7f6b059a29448f5f426ab14ffdd9c73f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e4ffdadf7bef6ceda5d9565946880b7f6b059a29448f5f426ab14ffdd9c73f->enter($__internal_26e4ffdadf7bef6ceda5d9565946880b7f6b059a29448f5f426ab14ffdd9c73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        // line 10
        echo "
  <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a record in the water log"), "html", null, true);
        echo "</h2>
<ul>
  ";
        // line 13
        $this->loadTemplate("LljmHomeBundle:Visualization:waterlogform.html.twig", "LljmHomeBundle:Visualization:waterlogadd.html.twig", 13)->display($context);
        // line 14
        echo "</ul>
";
        
        $__internal_26e4ffdadf7bef6ceda5d9565946880b7f6b059a29448f5f426ab14ffdd9c73f->leave($__internal_26e4ffdadf7bef6ceda5d9565946880b7f6b059a29448f5f426ab14ffdd9c73f_prof);

        
        $__internal_de886f85c413794a5ec48906d2b87d9e862ae22f8b2576eda75c9479a5b226bf->leave($__internal_de886f85c413794a5ec48906d2b87d9e862ae22f8b2576eda75c9479a5b226bf_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Visualization:waterlogadd.html.twig";
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
  Water log - {{ parent() }}
{% endblock %}

{% block lljm_home_body %}

  <h2>{{ 'Add a record in the water log' | trans }}</h2>
<ul>
  {% include \"LljmHomeBundle:Visualization:waterlogform.html.twig\" %}
</ul>
{% endblock %}

", "LljmHomeBundle:Visualization:waterlogadd.html.twig", "/home/lljm/web_symfony3/web/src/Lljm/HomeBundle/Resources/views/Visualization/waterlogadd.html.twig");
    }
}
