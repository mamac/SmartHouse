<?php

/* LljmHomeBundle:Node:nodeedit.html.twig */
class __TwigTemplate_e72114e22957317707d86683ec6e99cbc15f599d06afd06fc87b97d563514455 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Node:nodeedit.html.twig", 2);
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
        $__internal_917be2ea1c8b9786b05bdaa1064187d7fdcf7b537a0a9cecb0942779766f2e6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_917be2ea1c8b9786b05bdaa1064187d7fdcf7b537a0a9cecb0942779766f2e6e->enter($__internal_917be2ea1c8b9786b05bdaa1064187d7fdcf7b537a0a9cecb0942779766f2e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Node:nodeedit.html.twig"));

        $__internal_07cfa48e9e8e791ff9e1f947677f7a5a38444c7eed3d1cc51b9a3056a9e136ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07cfa48e9e8e791ff9e1f947677f7a5a38444c7eed3d1cc51b9a3056a9e136ab->enter($__internal_07cfa48e9e8e791ff9e1f947677f7a5a38444c7eed3d1cc51b9a3056a9e136ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Node:nodeedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_917be2ea1c8b9786b05bdaa1064187d7fdcf7b537a0a9cecb0942779766f2e6e->leave($__internal_917be2ea1c8b9786b05bdaa1064187d7fdcf7b537a0a9cecb0942779766f2e6e_prof);

        
        $__internal_07cfa48e9e8e791ff9e1f947677f7a5a38444c7eed3d1cc51b9a3056a9e136ab->leave($__internal_07cfa48e9e8e791ff9e1f947677f7a5a38444c7eed3d1cc51b9a3056a9e136ab_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_393a4d09b480aa8d1b606ecf6ab97a356ba0f8d5099f819f3353600b8b9d0055 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_393a4d09b480aa8d1b606ecf6ab97a356ba0f8d5099f819f3353600b8b9d0055->enter($__internal_393a4d09b480aa8d1b606ecf6ab97a356ba0f8d5099f819f3353600b8b9d0055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4c37e658f5963d5acb5d93c476c38f7d00097a98734be1206b26fabf1f49d1a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c37e658f5963d5acb5d93c476c38f7d00097a98734be1206b26fabf1f49d1a1->enter($__internal_4c37e658f5963d5acb5d93c476c38f7d00097a98734be1206b26fabf1f49d1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Node update - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4c37e658f5963d5acb5d93c476c38f7d00097a98734be1206b26fabf1f49d1a1->leave($__internal_4c37e658f5963d5acb5d93c476c38f7d00097a98734be1206b26fabf1f49d1a1_prof);

        
        $__internal_393a4d09b480aa8d1b606ecf6ab97a356ba0f8d5099f819f3353600b8b9d0055->leave($__internal_393a4d09b480aa8d1b606ecf6ab97a356ba0f8d5099f819f3353600b8b9d0055_prof);

    }

    // line 9
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_e5fd5c83e0de3ceaa61294d774a11d38a9ea1f4a7970c2e882a4b83262918c9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5fd5c83e0de3ceaa61294d774a11d38a9ea1f4a7970c2e882a4b83262918c9a->enter($__internal_e5fd5c83e0de3ceaa61294d774a11d38a9ea1f4a7970c2e882a4b83262918c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_8742f491e50e464bb4ed80249890cec0cf7cffb3580ae6d85e6d2e802922c01c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8742f491e50e464bb4ed80249890cec0cf7cffb3580ae6d85e6d2e802922c01c->enter($__internal_8742f491e50e464bb4ed80249890cec0cf7cffb3580ae6d85e6d2e802922c01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        // line 10
        echo "
  <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update a node"), "html", null, true);
        echo "</h2>
<ul>
  ";
        // line 13
        $this->loadTemplate("LljmHomeBundle:Node:nodeeditform.html.twig", "LljmHomeBundle:Node:nodeedit.html.twig", 13)->display($context);
        // line 14
        echo "</ul>
";
        
        $__internal_8742f491e50e464bb4ed80249890cec0cf7cffb3580ae6d85e6d2e802922c01c->leave($__internal_8742f491e50e464bb4ed80249890cec0cf7cffb3580ae6d85e6d2e802922c01c_prof);

        
        $__internal_e5fd5c83e0de3ceaa61294d774a11d38a9ea1f4a7970c2e882a4b83262918c9a->leave($__internal_e5fd5c83e0de3ceaa61294d774a11d38a9ea1f4a7970c2e882a4b83262918c9a_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Node:nodeedit.html.twig";
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
  Node update - {{ parent() }}
{% endblock %}

{% block lljm_home_body %}

  <h2>{{ 'Update a node' | trans }}</h2>
<ul>
  {% include \"LljmHomeBundle:Node:nodeeditform.html.twig\" %}
</ul>
{% endblock %}

", "LljmHomeBundle:Node:nodeedit.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Node/nodeedit.html.twig");
    }
}
