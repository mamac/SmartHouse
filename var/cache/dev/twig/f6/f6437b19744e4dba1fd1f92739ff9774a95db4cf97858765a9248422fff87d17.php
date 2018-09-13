<?php

/* LljmHomeBundle:Visualization:gaslogadd.html.twig */
class __TwigTemplate_5b776fe74f4dfdd2ecdaaf8348a4858572a1bd840f52cfb48e47570d09ed6080 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Visualization:gaslogadd.html.twig", 2);
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
        $__internal_f56327bc955b2be85bb3791dddd0ac781272a9b10224f3dc67f91b10ac55a9e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f56327bc955b2be85bb3791dddd0ac781272a9b10224f3dc67f91b10ac55a9e7->enter($__internal_f56327bc955b2be85bb3791dddd0ac781272a9b10224f3dc67f91b10ac55a9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:gaslogadd.html.twig"));

        $__internal_6d0ccdc02f21112c34aa8395c47c62d1f01144f88da9a01256287c73c83f0c5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d0ccdc02f21112c34aa8395c47c62d1f01144f88da9a01256287c73c83f0c5c->enter($__internal_6d0ccdc02f21112c34aa8395c47c62d1f01144f88da9a01256287c73c83f0c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:gaslogadd.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f56327bc955b2be85bb3791dddd0ac781272a9b10224f3dc67f91b10ac55a9e7->leave($__internal_f56327bc955b2be85bb3791dddd0ac781272a9b10224f3dc67f91b10ac55a9e7_prof);

        
        $__internal_6d0ccdc02f21112c34aa8395c47c62d1f01144f88da9a01256287c73c83f0c5c->leave($__internal_6d0ccdc02f21112c34aa8395c47c62d1f01144f88da9a01256287c73c83f0c5c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_665d2b87f470f2b905d8dc59472f34723848058987771c454938af4c4bfe5fe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_665d2b87f470f2b905d8dc59472f34723848058987771c454938af4c4bfe5fe9->enter($__internal_665d2b87f470f2b905d8dc59472f34723848058987771c454938af4c4bfe5fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_866897771502fed57a68cbe58324c15bf3081436972f499de8b29b610e4527b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_866897771502fed57a68cbe58324c15bf3081436972f499de8b29b610e4527b8->enter($__internal_866897771502fed57a68cbe58324c15bf3081436972f499de8b29b610e4527b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Gas log - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_866897771502fed57a68cbe58324c15bf3081436972f499de8b29b610e4527b8->leave($__internal_866897771502fed57a68cbe58324c15bf3081436972f499de8b29b610e4527b8_prof);

        
        $__internal_665d2b87f470f2b905d8dc59472f34723848058987771c454938af4c4bfe5fe9->leave($__internal_665d2b87f470f2b905d8dc59472f34723848058987771c454938af4c4bfe5fe9_prof);

    }

    // line 9
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_7578fcf9c8b1e9446bc35daa89b1717895b917d40d537724a71122f0b460d2ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7578fcf9c8b1e9446bc35daa89b1717895b917d40d537724a71122f0b460d2ab->enter($__internal_7578fcf9c8b1e9446bc35daa89b1717895b917d40d537724a71122f0b460d2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_a04f847fe06c8e3535ee730f7e89140ce6afc46128ff88725ecad16df9d32ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a04f847fe06c8e3535ee730f7e89140ce6afc46128ff88725ecad16df9d32ee0->enter($__internal_a04f847fe06c8e3535ee730f7e89140ce6afc46128ff88725ecad16df9d32ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        // line 10
        echo "
  <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a record in the gas log"), "html", null, true);
        echo "</h2>
<ul>
  ";
        // line 13
        $this->loadTemplate("LljmHomeBundle:Visualization:gaslogform.html.twig", "LljmHomeBundle:Visualization:gaslogadd.html.twig", 13)->display($context);
        // line 14
        echo "</ul>
";
        
        $__internal_a04f847fe06c8e3535ee730f7e89140ce6afc46128ff88725ecad16df9d32ee0->leave($__internal_a04f847fe06c8e3535ee730f7e89140ce6afc46128ff88725ecad16df9d32ee0_prof);

        
        $__internal_7578fcf9c8b1e9446bc35daa89b1717895b917d40d537724a71122f0b460d2ab->leave($__internal_7578fcf9c8b1e9446bc35daa89b1717895b917d40d537724a71122f0b460d2ab_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Visualization:gaslogadd.html.twig";
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
  Gas log - {{ parent() }}
{% endblock %}

{% block lljm_home_body %}

  <h2>{{ 'Add a record in the gas log' | trans }}</h2>
<ul>
  {% include \"LljmHomeBundle:Visualization:gaslogform.html.twig\" %}
</ul>
{% endblock %}

", "LljmHomeBundle:Visualization:gaslogadd.html.twig", "/home/lljm/web_symfony3/web/src/Lljm/HomeBundle/Resources/views/Visualization/gaslogadd.html.twig");
    }
}
