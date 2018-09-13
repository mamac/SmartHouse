<?php

/* LljmHomeBundle:House:houseedit.html.twig */
class __TwigTemplate_eb4cfdd1eb2be0c992a0045c9df13f4602b22856664b3a658e6b22e993199103 extends Twig_Template
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
        $__internal_e77d9d33d1ac47b0dd2148219a25dd82c29a6173dbb3be5be03642b2281b3f48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e77d9d33d1ac47b0dd2148219a25dd82c29a6173dbb3be5be03642b2281b3f48->enter($__internal_e77d9d33d1ac47b0dd2148219a25dd82c29a6173dbb3be5be03642b2281b3f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:House:houseedit.html.twig"));

        $__internal_de6926d4333b17cad92731d744cda0be2a5de8756ec907fe2b7a078d93359dd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de6926d4333b17cad92731d744cda0be2a5de8756ec907fe2b7a078d93359dd8->enter($__internal_de6926d4333b17cad92731d744cda0be2a5de8756ec907fe2b7a078d93359dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:House:houseedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e77d9d33d1ac47b0dd2148219a25dd82c29a6173dbb3be5be03642b2281b3f48->leave($__internal_e77d9d33d1ac47b0dd2148219a25dd82c29a6173dbb3be5be03642b2281b3f48_prof);

        
        $__internal_de6926d4333b17cad92731d744cda0be2a5de8756ec907fe2b7a078d93359dd8->leave($__internal_de6926d4333b17cad92731d744cda0be2a5de8756ec907fe2b7a078d93359dd8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d6508f22528cfd43027b1cb6327b188811fd817542a903dcf3f837aa20b9985 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d6508f22528cfd43027b1cb6327b188811fd817542a903dcf3f837aa20b9985->enter($__internal_5d6508f22528cfd43027b1cb6327b188811fd817542a903dcf3f837aa20b9985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f895a2e10219402f287411dbc8f5c4f4acde055d9b5440a2133412c93b2d5ec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f895a2e10219402f287411dbc8f5c4f4acde055d9b5440a2133412c93b2d5ec6->enter($__internal_f895a2e10219402f287411dbc8f5c4f4acde055d9b5440a2133412c93b2d5ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  House update - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f895a2e10219402f287411dbc8f5c4f4acde055d9b5440a2133412c93b2d5ec6->leave($__internal_f895a2e10219402f287411dbc8f5c4f4acde055d9b5440a2133412c93b2d5ec6_prof);

        
        $__internal_5d6508f22528cfd43027b1cb6327b188811fd817542a903dcf3f837aa20b9985->leave($__internal_5d6508f22528cfd43027b1cb6327b188811fd817542a903dcf3f837aa20b9985_prof);

    }

    // line 9
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_d2fc1077eb1a530db4b85b6001766a9d9f08b91091f9fc03ceb2b2148c33c7bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2fc1077eb1a530db4b85b6001766a9d9f08b91091f9fc03ceb2b2148c33c7bb->enter($__internal_d2fc1077eb1a530db4b85b6001766a9d9f08b91091f9fc03ceb2b2148c33c7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_ae4f73cfaf1006e11986c385324410de86bbfd99fe60c37bfa4ad2eae93f1b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae4f73cfaf1006e11986c385324410de86bbfd99fe60c37bfa4ad2eae93f1b27->enter($__internal_ae4f73cfaf1006e11986c385324410de86bbfd99fe60c37bfa4ad2eae93f1b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

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
        
        $__internal_ae4f73cfaf1006e11986c385324410de86bbfd99fe60c37bfa4ad2eae93f1b27->leave($__internal_ae4f73cfaf1006e11986c385324410de86bbfd99fe60c37bfa4ad2eae93f1b27_prof);

        
        $__internal_d2fc1077eb1a530db4b85b6001766a9d9f08b91091f9fc03ceb2b2148c33c7bb->leave($__internal_d2fc1077eb1a530db4b85b6001766a9d9f08b91091f9fc03ceb2b2148c33c7bb_prof);

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
