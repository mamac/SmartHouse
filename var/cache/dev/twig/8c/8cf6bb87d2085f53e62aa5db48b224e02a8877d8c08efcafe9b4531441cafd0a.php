<?php

/* LljmHomeBundle:Zone:zoneedit.html.twig */
class __TwigTemplate_7abc4616213107066e9525b250370af807742d11eb8d3da172af769f56041626 extends Twig_Template
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
        $__internal_047e87aa509a6ab04c26cd5fb46ea4c93b5eb7cd4654b27e93d28f284e64e6a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_047e87aa509a6ab04c26cd5fb46ea4c93b5eb7cd4654b27e93d28f284e64e6a4->enter($__internal_047e87aa509a6ab04c26cd5fb46ea4c93b5eb7cd4654b27e93d28f284e64e6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Zone:zoneedit.html.twig"));

        $__internal_a2246050a5e660fe2e72a334073f35fd3f5b288649476a4e93fae039112fe69b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2246050a5e660fe2e72a334073f35fd3f5b288649476a4e93fae039112fe69b->enter($__internal_a2246050a5e660fe2e72a334073f35fd3f5b288649476a4e93fae039112fe69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Zone:zoneedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_047e87aa509a6ab04c26cd5fb46ea4c93b5eb7cd4654b27e93d28f284e64e6a4->leave($__internal_047e87aa509a6ab04c26cd5fb46ea4c93b5eb7cd4654b27e93d28f284e64e6a4_prof);

        
        $__internal_a2246050a5e660fe2e72a334073f35fd3f5b288649476a4e93fae039112fe69b->leave($__internal_a2246050a5e660fe2e72a334073f35fd3f5b288649476a4e93fae039112fe69b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ccf857ebf042fb0792ed542ced0c48fd557563435d595970270720e8cf037e71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccf857ebf042fb0792ed542ced0c48fd557563435d595970270720e8cf037e71->enter($__internal_ccf857ebf042fb0792ed542ced0c48fd557563435d595970270720e8cf037e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_29667b729650dd58e4b4095da89da6c9fed96e2065dcba65d449b9551427d425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29667b729650dd58e4b4095da89da6c9fed96e2065dcba65d449b9551427d425->enter($__internal_29667b729650dd58e4b4095da89da6c9fed96e2065dcba65d449b9551427d425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Zone update - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_29667b729650dd58e4b4095da89da6c9fed96e2065dcba65d449b9551427d425->leave($__internal_29667b729650dd58e4b4095da89da6c9fed96e2065dcba65d449b9551427d425_prof);

        
        $__internal_ccf857ebf042fb0792ed542ced0c48fd557563435d595970270720e8cf037e71->leave($__internal_ccf857ebf042fb0792ed542ced0c48fd557563435d595970270720e8cf037e71_prof);

    }

    // line 9
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_e44cbaa847daec2cb74aee344cddf83a0e997a7bc99a7d5b5df94d031d7bf948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e44cbaa847daec2cb74aee344cddf83a0e997a7bc99a7d5b5df94d031d7bf948->enter($__internal_e44cbaa847daec2cb74aee344cddf83a0e997a7bc99a7d5b5df94d031d7bf948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_c817ee213be402e7a057018a22a2ded9e98245524ee8e5766785c51ed22e4ee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c817ee213be402e7a057018a22a2ded9e98245524ee8e5766785c51ed22e4ee3->enter($__internal_c817ee213be402e7a057018a22a2ded9e98245524ee8e5766785c51ed22e4ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

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
        
        $__internal_c817ee213be402e7a057018a22a2ded9e98245524ee8e5766785c51ed22e4ee3->leave($__internal_c817ee213be402e7a057018a22a2ded9e98245524ee8e5766785c51ed22e4ee3_prof);

        
        $__internal_e44cbaa847daec2cb74aee344cddf83a0e997a7bc99a7d5b5df94d031d7bf948->leave($__internal_e44cbaa847daec2cb74aee344cddf83a0e997a7bc99a7d5b5df94d031d7bf948_prof);

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
