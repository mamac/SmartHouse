<?php

/* LljmHomeBundle:Zone:zoneedit.html.twig */
class __TwigTemplate_93b34034896a4a915eb9668cc68276b64267e8f5f13f837ff34f0e9866ecb97b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Zone:zoneedit.html.twig", 2);
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
        $__internal_63e50f5a03c709628ea0d192c1b119ad775bd08b1d2ceb8d4ac03b38fc5cdbb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63e50f5a03c709628ea0d192c1b119ad775bd08b1d2ceb8d4ac03b38fc5cdbb4->enter($__internal_63e50f5a03c709628ea0d192c1b119ad775bd08b1d2ceb8d4ac03b38fc5cdbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Zone:zoneedit.html.twig"));

        $__internal_ae387c316f8d4e2352809f0ae59ea505446fc2f62c990f4f25f4146b73de1c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae387c316f8d4e2352809f0ae59ea505446fc2f62c990f4f25f4146b73de1c92->enter($__internal_ae387c316f8d4e2352809f0ae59ea505446fc2f62c990f4f25f4146b73de1c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Zone:zoneedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63e50f5a03c709628ea0d192c1b119ad775bd08b1d2ceb8d4ac03b38fc5cdbb4->leave($__internal_63e50f5a03c709628ea0d192c1b119ad775bd08b1d2ceb8d4ac03b38fc5cdbb4_prof);

        
        $__internal_ae387c316f8d4e2352809f0ae59ea505446fc2f62c990f4f25f4146b73de1c92->leave($__internal_ae387c316f8d4e2352809f0ae59ea505446fc2f62c990f4f25f4146b73de1c92_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c605455fe226304067ebb0ff3a7345e67b50b57c8795216efbc3441bfa86359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c605455fe226304067ebb0ff3a7345e67b50b57c8795216efbc3441bfa86359->enter($__internal_5c605455fe226304067ebb0ff3a7345e67b50b57c8795216efbc3441bfa86359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1e0f2d57f6dfbe652f1099bda39c4dc845fd987ff6f46be40dcf9bec587a91f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e0f2d57f6dfbe652f1099bda39c4dc845fd987ff6f46be40dcf9bec587a91f0->enter($__internal_1e0f2d57f6dfbe652f1099bda39c4dc845fd987ff6f46be40dcf9bec587a91f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Zone update - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1e0f2d57f6dfbe652f1099bda39c4dc845fd987ff6f46be40dcf9bec587a91f0->leave($__internal_1e0f2d57f6dfbe652f1099bda39c4dc845fd987ff6f46be40dcf9bec587a91f0_prof);

        
        $__internal_5c605455fe226304067ebb0ff3a7345e67b50b57c8795216efbc3441bfa86359->leave($__internal_5c605455fe226304067ebb0ff3a7345e67b50b57c8795216efbc3441bfa86359_prof);

    }

    // line 9
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_9ba1a32c8b4ca3b744294b02bb0b0be089c4d4c37131a146dfa7823797b445bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ba1a32c8b4ca3b744294b02bb0b0be089c4d4c37131a146dfa7823797b445bb->enter($__internal_9ba1a32c8b4ca3b744294b02bb0b0be089c4d4c37131a146dfa7823797b445bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_98cdaf040ed173c164af2f32f89f410026ab31bc20edf147c35e8500a03de4ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98cdaf040ed173c164af2f32f89f410026ab31bc20edf147c35e8500a03de4ef->enter($__internal_98cdaf040ed173c164af2f32f89f410026ab31bc20edf147c35e8500a03de4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        // line 10
        echo "
  <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update zone"), "html", null, true);
        echo "</h2>
<ul>
  ";
        // line 13
        $this->loadTemplate("LljmHomeBundle:Zone:zoneeditform.html.twig", "LljmHomeBundle:Zone:zoneedit.html.twig", 13)->display($context);
        // line 14
        echo "</ul>
";
        
        $__internal_98cdaf040ed173c164af2f32f89f410026ab31bc20edf147c35e8500a03de4ef->leave($__internal_98cdaf040ed173c164af2f32f89f410026ab31bc20edf147c35e8500a03de4ef_prof);

        
        $__internal_9ba1a32c8b4ca3b744294b02bb0b0be089c4d4c37131a146dfa7823797b445bb->leave($__internal_9ba1a32c8b4ca3b744294b02bb0b0be089c4d4c37131a146dfa7823797b445bb_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Zone:zoneedit.html.twig";
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
  Zone update - {{ parent() }}
{% endblock %}

{% block lljm_home_body %}

  <h2>{{ 'Update zone' | trans }}</h2>
<ul>
  {% include \"LljmHomeBundle:Zone:zoneeditform.html.twig\" %}
</ul>
{% endblock %}

", "LljmHomeBundle:Zone:zoneedit.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Zone/zoneedit.html.twig");
    }
}
