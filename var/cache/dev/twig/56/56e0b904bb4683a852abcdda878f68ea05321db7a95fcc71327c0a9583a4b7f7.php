<?php

/* LljmHomeBundle:Node:nodeadd.html.twig */
class __TwigTemplate_1d261f90c3aaf2570d7ecb64250afb9c93615abe52e0c9c4ee34927b787d3857 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Node:nodeadd.html.twig", 2);
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
        $__internal_0d31b1f589d5cf45afe685d88c172710bfcb4992d26253497d5403c020c4fbda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d31b1f589d5cf45afe685d88c172710bfcb4992d26253497d5403c020c4fbda->enter($__internal_0d31b1f589d5cf45afe685d88c172710bfcb4992d26253497d5403c020c4fbda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Node:nodeadd.html.twig"));

        $__internal_0225e112b6c78ede1d538a02abc123fd4fd6fe9d4866006983a6c8b8ba889855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0225e112b6c78ede1d538a02abc123fd4fd6fe9d4866006983a6c8b8ba889855->enter($__internal_0225e112b6c78ede1d538a02abc123fd4fd6fe9d4866006983a6c8b8ba889855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Node:nodeadd.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d31b1f589d5cf45afe685d88c172710bfcb4992d26253497d5403c020c4fbda->leave($__internal_0d31b1f589d5cf45afe685d88c172710bfcb4992d26253497d5403c020c4fbda_prof);

        
        $__internal_0225e112b6c78ede1d538a02abc123fd4fd6fe9d4866006983a6c8b8ba889855->leave($__internal_0225e112b6c78ede1d538a02abc123fd4fd6fe9d4866006983a6c8b8ba889855_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_23fea989db7f1a1310374b50d339b9472c8e9afd77c8d66fe741017d2204d4ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23fea989db7f1a1310374b50d339b9472c8e9afd77c8d66fe741017d2204d4ad->enter($__internal_23fea989db7f1a1310374b50d339b9472c8e9afd77c8d66fe741017d2204d4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5d391f68e1c1a3cecc247fc47d69db27c4b50707208bcd57fe5a86e10e1b92d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d391f68e1c1a3cecc247fc47d69db27c4b50707208bcd57fe5a86e10e1b92d5->enter($__internal_5d391f68e1c1a3cecc247fc47d69db27c4b50707208bcd57fe5a86e10e1b92d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Nodes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5d391f68e1c1a3cecc247fc47d69db27c4b50707208bcd57fe5a86e10e1b92d5->leave($__internal_5d391f68e1c1a3cecc247fc47d69db27c4b50707208bcd57fe5a86e10e1b92d5_prof);

        
        $__internal_23fea989db7f1a1310374b50d339b9472c8e9afd77c8d66fe741017d2204d4ad->leave($__internal_23fea989db7f1a1310374b50d339b9472c8e9afd77c8d66fe741017d2204d4ad_prof);

    }

    // line 9
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_5adc881eacff5161c2f26883e81b81f9b28a12e21d96ba8d41f7ebc42e8da249 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5adc881eacff5161c2f26883e81b81f9b28a12e21d96ba8d41f7ebc42e8da249->enter($__internal_5adc881eacff5161c2f26883e81b81f9b28a12e21d96ba8d41f7ebc42e8da249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_d6095981a1797d038349562eee2eae94b71e7e9a50748c0d94f836e92d9bd4c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6095981a1797d038349562eee2eae94b71e7e9a50748c0d94f836e92d9bd4c8->enter($__internal_d6095981a1797d038349562eee2eae94b71e7e9a50748c0d94f836e92d9bd4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        // line 10
        echo "
  <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a node"), "html", null, true);
        echo "</h2>
<ul>
  ";
        // line 13
        $this->loadTemplate("LljmHomeBundle:Node:nodeform.html.twig", "LljmHomeBundle:Node:nodeadd.html.twig", 13)->display($context);
        // line 14
        echo "</ul>
";
        
        $__internal_d6095981a1797d038349562eee2eae94b71e7e9a50748c0d94f836e92d9bd4c8->leave($__internal_d6095981a1797d038349562eee2eae94b71e7e9a50748c0d94f836e92d9bd4c8_prof);

        
        $__internal_5adc881eacff5161c2f26883e81b81f9b28a12e21d96ba8d41f7ebc42e8da249->leave($__internal_5adc881eacff5161c2f26883e81b81f9b28a12e21d96ba8d41f7ebc42e8da249_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Node:nodeadd.html.twig";
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
  Nodes - {{ parent() }}
{% endblock %}

{% block lljm_home_body %}

  <h2>{{ 'Add a node' | trans }}</h2>
<ul>
  {% include \"LljmHomeBundle:Node:nodeform.html.twig\" %}
</ul>
{% endblock %}

", "LljmHomeBundle:Node:nodeadd.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Node/nodeadd.html.twig");
    }
}
