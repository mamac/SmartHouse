<?php

/* LljmHomeBundle:Subzone:subzoneedit.html.twig */
class __TwigTemplate_abf74cb74c43fd571e8be8d22d49a2ff07193f5df566d0d27a660d91f22ac14f extends Twig_Template
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
        $__internal_c9707ebf7ff1cbc046a026ee3dded40e370fc1cc7c408d9f7e727fb603640d66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9707ebf7ff1cbc046a026ee3dded40e370fc1cc7c408d9f7e727fb603640d66->enter($__internal_c9707ebf7ff1cbc046a026ee3dded40e370fc1cc7c408d9f7e727fb603640d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Subzone:subzoneedit.html.twig"));

        $__internal_73015ae8b97384d3afbf0aef49f2f19b4db1e84205fdb59b2d4e1d950dd6e674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73015ae8b97384d3afbf0aef49f2f19b4db1e84205fdb59b2d4e1d950dd6e674->enter($__internal_73015ae8b97384d3afbf0aef49f2f19b4db1e84205fdb59b2d4e1d950dd6e674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Subzone:subzoneedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9707ebf7ff1cbc046a026ee3dded40e370fc1cc7c408d9f7e727fb603640d66->leave($__internal_c9707ebf7ff1cbc046a026ee3dded40e370fc1cc7c408d9f7e727fb603640d66_prof);

        
        $__internal_73015ae8b97384d3afbf0aef49f2f19b4db1e84205fdb59b2d4e1d950dd6e674->leave($__internal_73015ae8b97384d3afbf0aef49f2f19b4db1e84205fdb59b2d4e1d950dd6e674_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3bbf296796f618e71f471c7433badd5d97a57e2ed101692828a8cecb89768d43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bbf296796f618e71f471c7433badd5d97a57e2ed101692828a8cecb89768d43->enter($__internal_3bbf296796f618e71f471c7433badd5d97a57e2ed101692828a8cecb89768d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_599acc5d06584da45cbe02aeb5731c66e787d785abddbf7a3f13ee9abdc59572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_599acc5d06584da45cbe02aeb5731c66e787d785abddbf7a3f13ee9abdc59572->enter($__internal_599acc5d06584da45cbe02aeb5731c66e787d785abddbf7a3f13ee9abdc59572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Sub zone update - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_599acc5d06584da45cbe02aeb5731c66e787d785abddbf7a3f13ee9abdc59572->leave($__internal_599acc5d06584da45cbe02aeb5731c66e787d785abddbf7a3f13ee9abdc59572_prof);

        
        $__internal_3bbf296796f618e71f471c7433badd5d97a57e2ed101692828a8cecb89768d43->leave($__internal_3bbf296796f618e71f471c7433badd5d97a57e2ed101692828a8cecb89768d43_prof);

    }

    // line 9
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_f2ae394a5fc5b41aaeb29b61ae3bba5bbf2634cabf21a40b849f1e690273c95d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2ae394a5fc5b41aaeb29b61ae3bba5bbf2634cabf21a40b849f1e690273c95d->enter($__internal_f2ae394a5fc5b41aaeb29b61ae3bba5bbf2634cabf21a40b849f1e690273c95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_16acc143bd857324766086a88e0d7c0f632641c0d4648711aebe3a164856c65a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16acc143bd857324766086a88e0d7c0f632641c0d4648711aebe3a164856c65a->enter($__internal_16acc143bd857324766086a88e0d7c0f632641c0d4648711aebe3a164856c65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

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
        
        $__internal_16acc143bd857324766086a88e0d7c0f632641c0d4648711aebe3a164856c65a->leave($__internal_16acc143bd857324766086a88e0d7c0f632641c0d4648711aebe3a164856c65a_prof);

        
        $__internal_f2ae394a5fc5b41aaeb29b61ae3bba5bbf2634cabf21a40b849f1e690273c95d->leave($__internal_f2ae394a5fc5b41aaeb29b61ae3bba5bbf2634cabf21a40b849f1e690273c95d_prof);

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
