<?php

/* LljmHomeBundle:Visualization:eleclogadd.html.twig */
class __TwigTemplate_c786b200eb8ddc4493dfe946a14a2eef9b6697c015404d0edc061d9ff7b64c5c extends Twig_Template
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
        $__internal_6a6641993b1b954a4673b5b56444691eb0122d7c0b55ffb27934b8cf7118081e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a6641993b1b954a4673b5b56444691eb0122d7c0b55ffb27934b8cf7118081e->enter($__internal_6a6641993b1b954a4673b5b56444691eb0122d7c0b55ffb27934b8cf7118081e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:eleclogadd.html.twig"));

        $__internal_c3040d893e6398926c3787b8818923e9708643c8fb4d1f8778d4701ba6b9ba79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3040d893e6398926c3787b8818923e9708643c8fb4d1f8778d4701ba6b9ba79->enter($__internal_c3040d893e6398926c3787b8818923e9708643c8fb4d1f8778d4701ba6b9ba79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:eleclogadd.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a6641993b1b954a4673b5b56444691eb0122d7c0b55ffb27934b8cf7118081e->leave($__internal_6a6641993b1b954a4673b5b56444691eb0122d7c0b55ffb27934b8cf7118081e_prof);

        
        $__internal_c3040d893e6398926c3787b8818923e9708643c8fb4d1f8778d4701ba6b9ba79->leave($__internal_c3040d893e6398926c3787b8818923e9708643c8fb4d1f8778d4701ba6b9ba79_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_aec680474907f601cdc384897007be50f85756733ea4045e6553a8663e12cda5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aec680474907f601cdc384897007be50f85756733ea4045e6553a8663e12cda5->enter($__internal_aec680474907f601cdc384897007be50f85756733ea4045e6553a8663e12cda5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f72bcb12b0d08226eff8743d8f0c8c66cde5519de2fef32541e7d1c262c98a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f72bcb12b0d08226eff8743d8f0c8c66cde5519de2fef32541e7d1c262c98a7a->enter($__internal_f72bcb12b0d08226eff8743d8f0c8c66cde5519de2fef32541e7d1c262c98a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Elec log - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f72bcb12b0d08226eff8743d8f0c8c66cde5519de2fef32541e7d1c262c98a7a->leave($__internal_f72bcb12b0d08226eff8743d8f0c8c66cde5519de2fef32541e7d1c262c98a7a_prof);

        
        $__internal_aec680474907f601cdc384897007be50f85756733ea4045e6553a8663e12cda5->leave($__internal_aec680474907f601cdc384897007be50f85756733ea4045e6553a8663e12cda5_prof);

    }

    // line 9
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_bbea22999bb15b8f5f9b51a554f5c79c2eba7719803e5998449262cf4e1679f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbea22999bb15b8f5f9b51a554f5c79c2eba7719803e5998449262cf4e1679f7->enter($__internal_bbea22999bb15b8f5f9b51a554f5c79c2eba7719803e5998449262cf4e1679f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_f0031656695813b8eba03c3f36525f0522cfc6079caacd709fc9e0074d85e2b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0031656695813b8eba03c3f36525f0522cfc6079caacd709fc9e0074d85e2b4->enter($__internal_f0031656695813b8eba03c3f36525f0522cfc6079caacd709fc9e0074d85e2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

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
        
        $__internal_f0031656695813b8eba03c3f36525f0522cfc6079caacd709fc9e0074d85e2b4->leave($__internal_f0031656695813b8eba03c3f36525f0522cfc6079caacd709fc9e0074d85e2b4_prof);

        
        $__internal_bbea22999bb15b8f5f9b51a554f5c79c2eba7719803e5998449262cf4e1679f7->leave($__internal_bbea22999bb15b8f5f9b51a554f5c79c2eba7719803e5998449262cf4e1679f7_prof);

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

", "LljmHomeBundle:Visualization:eleclogadd.html.twig", "/home/lljm/web_symfony3/web/src/Lljm/HomeBundle/Resources/views/Visualization/eleclogadd.html.twig");
    }
}
