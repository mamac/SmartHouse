<?php

/* LljmHomeBundle:Visualization:eleclogadd.html.twig */
class __TwigTemplate_9d06c24960f2e5c6875775bed3fd65574d4afbc4f463fc6db876da5c0fdbabad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Visualization:eleclogadd.html.twig", 2);
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
        $__internal_eda6bb25c11fe2737cc7df3a0d9f0510b3efaae2ee90b5b4864f4a3b39cc69e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eda6bb25c11fe2737cc7df3a0d9f0510b3efaae2ee90b5b4864f4a3b39cc69e4->enter($__internal_eda6bb25c11fe2737cc7df3a0d9f0510b3efaae2ee90b5b4864f4a3b39cc69e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:eleclogadd.html.twig"));

        $__internal_4515c60b4a3e0157cefe72c9d5a981fd4af1c562afffeff2291cca70511669c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4515c60b4a3e0157cefe72c9d5a981fd4af1c562afffeff2291cca70511669c7->enter($__internal_4515c60b4a3e0157cefe72c9d5a981fd4af1c562afffeff2291cca70511669c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:eleclogadd.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eda6bb25c11fe2737cc7df3a0d9f0510b3efaae2ee90b5b4864f4a3b39cc69e4->leave($__internal_eda6bb25c11fe2737cc7df3a0d9f0510b3efaae2ee90b5b4864f4a3b39cc69e4_prof);

        
        $__internal_4515c60b4a3e0157cefe72c9d5a981fd4af1c562afffeff2291cca70511669c7->leave($__internal_4515c60b4a3e0157cefe72c9d5a981fd4af1c562afffeff2291cca70511669c7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_92c5dc7a2b6c0e1d30f3523f72a58b64ea9b00d94857dea2d8f2992cb2fb7752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92c5dc7a2b6c0e1d30f3523f72a58b64ea9b00d94857dea2d8f2992cb2fb7752->enter($__internal_92c5dc7a2b6c0e1d30f3523f72a58b64ea9b00d94857dea2d8f2992cb2fb7752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c0ed9317eec539dcdfd03a15b153006537189a9ee498b649397ad26382dab5fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0ed9317eec539dcdfd03a15b153006537189a9ee498b649397ad26382dab5fd->enter($__internal_c0ed9317eec539dcdfd03a15b153006537189a9ee498b649397ad26382dab5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Elec log - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c0ed9317eec539dcdfd03a15b153006537189a9ee498b649397ad26382dab5fd->leave($__internal_c0ed9317eec539dcdfd03a15b153006537189a9ee498b649397ad26382dab5fd_prof);

        
        $__internal_92c5dc7a2b6c0e1d30f3523f72a58b64ea9b00d94857dea2d8f2992cb2fb7752->leave($__internal_92c5dc7a2b6c0e1d30f3523f72a58b64ea9b00d94857dea2d8f2992cb2fb7752_prof);

    }

    // line 9
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_5e6bd8552da06ee1431d64f266c38016e841f51e4211adfb26fa69dcca795680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e6bd8552da06ee1431d64f266c38016e841f51e4211adfb26fa69dcca795680->enter($__internal_5e6bd8552da06ee1431d64f266c38016e841f51e4211adfb26fa69dcca795680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_f614b5050ab9e25e6df6b387ad50015406011b332258dc75a10404d00c261043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f614b5050ab9e25e6df6b387ad50015406011b332258dc75a10404d00c261043->enter($__internal_f614b5050ab9e25e6df6b387ad50015406011b332258dc75a10404d00c261043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        // line 10
        echo "
  <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a record in the electricity log"), "html", null, true);
        echo "</h2>
<ul>
  ";
        // line 13
        $this->loadTemplate("LljmHomeBundle:Visualization:eleclogform.html.twig", "LljmHomeBundle:Visualization:eleclogadd.html.twig", 13)->display($context);
        // line 14
        echo "</ul>
";
        
        $__internal_f614b5050ab9e25e6df6b387ad50015406011b332258dc75a10404d00c261043->leave($__internal_f614b5050ab9e25e6df6b387ad50015406011b332258dc75a10404d00c261043_prof);

        
        $__internal_5e6bd8552da06ee1431d64f266c38016e841f51e4211adfb26fa69dcca795680->leave($__internal_5e6bd8552da06ee1431d64f266c38016e841f51e4211adfb26fa69dcca795680_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Visualization:eleclogadd.html.twig";
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
  Elec log - {{ parent() }}
{% endblock %}

{% block lljm_home_body %}

  <h2>{{ 'Add a record in the electricity log' | trans }}</h2>
<ul>
  {% include \"LljmHomeBundle:Visualization:eleclogform.html.twig\" %}
</ul>
{% endblock %}

", "LljmHomeBundle:Visualization:eleclogadd.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Visualization/eleclogadd.html.twig");
    }
}
