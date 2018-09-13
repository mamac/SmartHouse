<?php

/* LljmHomeBundle:House:housedel.html.twig */
class __TwigTemplate_0d4647d19c50d23bb5beec8c7398863cdcd6885f81986fb0ec20f8a75a092b06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:House:housedel.html.twig", 2);
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
        $__internal_afdb1a7168dad1204aba3c2d1cea1dc33d370f277a11e361778fab1b6a178f9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afdb1a7168dad1204aba3c2d1cea1dc33d370f277a11e361778fab1b6a178f9a->enter($__internal_afdb1a7168dad1204aba3c2d1cea1dc33d370f277a11e361778fab1b6a178f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:House:housedel.html.twig"));

        $__internal_8146c207761d026c2ab1f0a047b1c263a0a2fc6dc64ea11b1f1239b6c2df47a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8146c207761d026c2ab1f0a047b1c263a0a2fc6dc64ea11b1f1239b6c2df47a1->enter($__internal_8146c207761d026c2ab1f0a047b1c263a0a2fc6dc64ea11b1f1239b6c2df47a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:House:housedel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afdb1a7168dad1204aba3c2d1cea1dc33d370f277a11e361778fab1b6a178f9a->leave($__internal_afdb1a7168dad1204aba3c2d1cea1dc33d370f277a11e361778fab1b6a178f9a_prof);

        
        $__internal_8146c207761d026c2ab1f0a047b1c263a0a2fc6dc64ea11b1f1239b6c2df47a1->leave($__internal_8146c207761d026c2ab1f0a047b1c263a0a2fc6dc64ea11b1f1239b6c2df47a1_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b1e95171383d315730375964949c1ad1e007e9a174bdedf9ada8fb9cce323a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b1e95171383d315730375964949c1ad1e007e9a174bdedf9ada8fb9cce323a5->enter($__internal_7b1e95171383d315730375964949c1ad1e007e9a174bdedf9ada8fb9cce323a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bebc0a0b2abad81db9e941409e32033c1b03f8691c513d53769ff10267294998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bebc0a0b2abad81db9e941409e32033c1b03f8691c513d53769ff10267294998->enter($__internal_bebc0a0b2abad81db9e941409e32033c1b03f8691c513d53769ff10267294998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Delete house - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bebc0a0b2abad81db9e941409e32033c1b03f8691c513d53769ff10267294998->leave($__internal_bebc0a0b2abad81db9e941409e32033c1b03f8691c513d53769ff10267294998_prof);

        
        $__internal_7b1e95171383d315730375964949c1ad1e007e9a174bdedf9ada8fb9cce323a5->leave($__internal_7b1e95171383d315730375964949c1ad1e007e9a174bdedf9ada8fb9cce323a5_prof);

    }

    // line 8
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_db6729bcf31c67a77127eb3f0d083026e6944354b7eedfebcdaee8e1e3a52c8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db6729bcf31c67a77127eb3f0d083026e6944354b7eedfebcdaee8e1e3a52c8b->enter($__internal_db6729bcf31c67a77127eb3f0d083026e6944354b7eedfebcdaee8e1e3a52c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_9a74ef91a246d93d0d9d29b7886682edb205de0966bc07df3974bd7e941b43c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a74ef91a246d93d0d9d29b7886682edb205de0966bc07df3974bd7e941b43c2->enter($__internal_9a74ef91a246d93d0d9d29b7886682edb205de0966bc07df3974bd7e941b43c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        // line 9
        echo "
  <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete a house"), "html", null, true);
        echo "</h2>

  <p>
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Confirm you want to delete house"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["house"]) || array_key_exists("house", $context) ? $context["house"] : (function () { throw new Twig_Error_Runtime('Variable "house" does not exist.', 13, $this->getSourceContext()); })()), "address1", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["house"]) || array_key_exists("house", $context) ? $context["house"] : (function () { throw new Twig_Error_Runtime('Variable "house" does not exist.', 13, $this->getSourceContext()); })()), "city", array()), "html", null, true);
        echo ".
  </p>

  <form action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_housedel", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["house"]) || array_key_exists("house", $context) ? $context["house"] : (function () { throw new Twig_Error_Runtime('Variable "house" does not exist.', 16, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_house");
        echo "\" class=\"btn btn-default glyphicon glyphicon-chevron-left\">
      Back
    </a>
    <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger\" />
    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), 'rest');
        echo "
  </form>

";
        
        $__internal_9a74ef91a246d93d0d9d29b7886682edb205de0966bc07df3974bd7e941b43c2->leave($__internal_9a74ef91a246d93d0d9d29b7886682edb205de0966bc07df3974bd7e941b43c2_prof);

        
        $__internal_db6729bcf31c67a77127eb3f0d083026e6944354b7eedfebcdaee8e1e3a52c8b->leave($__internal_db6729bcf31c67a77127eb3f0d083026e6944354b7eedfebcdaee8e1e3a52c8b_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:House:housedel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 21,  95 => 17,  91 => 16,  81 => 13,  75 => 10,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"LljmHomeBundle::layout.html.twig\" %}

{% block title %}
  Delete house - {{ parent() }}
{% endblock %}

{% block lljm_home_body %}

  <h2>{{ 'Delete a house' | trans }}</h2>

  <p>
    {{ 'Confirm you want to delete house' | trans }} : {{ house.address1 }} - {{ house.city }}.
  </p>

  <form action=\"{{ path('home_housedel', {'id': house.id}) }}\" method=\"post\">
    <a href=\"{{ path('home_house')}}\" class=\"btn btn-default glyphicon glyphicon-chevron-left\">
      Back
    </a>
    <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger\" />
    {{ form_rest(form) }}
  </form>

{% endblock %}", "LljmHomeBundle:House:housedel.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/House/housedel.html.twig");
    }
}
