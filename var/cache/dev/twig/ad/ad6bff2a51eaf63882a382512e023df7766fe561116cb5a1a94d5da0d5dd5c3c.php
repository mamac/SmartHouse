<?php

/* LljmHomeBundle:Zone:zonedel.html.twig */
class __TwigTemplate_a46d506b2b15525ef50cb7a5ac3df23e0e07720d7e8d312ff0e951903c38e643 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Zone:zonedel.html.twig", 2);
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
        $__internal_db7bf67c814f7e11cb5e117e5b4743ca010a92a7118c7f86c23fbecb4567b248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db7bf67c814f7e11cb5e117e5b4743ca010a92a7118c7f86c23fbecb4567b248->enter($__internal_db7bf67c814f7e11cb5e117e5b4743ca010a92a7118c7f86c23fbecb4567b248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Zone:zonedel.html.twig"));

        $__internal_bf3cfa2a50028b980f6f29aaf91d4e13dc5f4d0be2d61f6d6b1e91cda190e832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf3cfa2a50028b980f6f29aaf91d4e13dc5f4d0be2d61f6d6b1e91cda190e832->enter($__internal_bf3cfa2a50028b980f6f29aaf91d4e13dc5f4d0be2d61f6d6b1e91cda190e832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Zone:zonedel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db7bf67c814f7e11cb5e117e5b4743ca010a92a7118c7f86c23fbecb4567b248->leave($__internal_db7bf67c814f7e11cb5e117e5b4743ca010a92a7118c7f86c23fbecb4567b248_prof);

        
        $__internal_bf3cfa2a50028b980f6f29aaf91d4e13dc5f4d0be2d61f6d6b1e91cda190e832->leave($__internal_bf3cfa2a50028b980f6f29aaf91d4e13dc5f4d0be2d61f6d6b1e91cda190e832_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_348ac4f68fd741e4e87032a449add9b18962b1a939205fb7d0758dc43da51257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_348ac4f68fd741e4e87032a449add9b18962b1a939205fb7d0758dc43da51257->enter($__internal_348ac4f68fd741e4e87032a449add9b18962b1a939205fb7d0758dc43da51257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e0aee4def9e194d603d2c81bf9437ab74237558d77d2a769f234704e6f0c1494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0aee4def9e194d603d2c81bf9437ab74237558d77d2a769f234704e6f0c1494->enter($__internal_e0aee4def9e194d603d2c81bf9437ab74237558d77d2a769f234704e6f0c1494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Delete zone - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e0aee4def9e194d603d2c81bf9437ab74237558d77d2a769f234704e6f0c1494->leave($__internal_e0aee4def9e194d603d2c81bf9437ab74237558d77d2a769f234704e6f0c1494_prof);

        
        $__internal_348ac4f68fd741e4e87032a449add9b18962b1a939205fb7d0758dc43da51257->leave($__internal_348ac4f68fd741e4e87032a449add9b18962b1a939205fb7d0758dc43da51257_prof);

    }

    // line 8
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_c0cd41f37b591e8da5dcce8d20adc385922b7328dd1a986d09ed6ee9130c1ac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0cd41f37b591e8da5dcce8d20adc385922b7328dd1a986d09ed6ee9130c1ac2->enter($__internal_c0cd41f37b591e8da5dcce8d20adc385922b7328dd1a986d09ed6ee9130c1ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_cc527eb7dd3124c56e65fc7d2fd6fd39535e950582e3c3e7b021e078b7cdf68e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc527eb7dd3124c56e65fc7d2fd6fd39535e950582e3c3e7b021e078b7cdf68e->enter($__internal_cc527eb7dd3124c56e65fc7d2fd6fd39535e950582e3c3e7b021e078b7cdf68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        // line 9
        echo "
  <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete a zone"), "html", null, true);
        echo "</h2>

  <p>
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Confirm you want to delete zone"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["zone"]) || array_key_exists("zone", $context) ? $context["zone"] : (function () { throw new Twig_Error_Runtime('Variable "zone" does not exist.', 13, $this->getSourceContext()); })()), "zonename", array()), "html", null, true);
        echo ".
  </p>

  <form action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_zonedel", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["zone"]) || array_key_exists("zone", $context) ? $context["zone"] : (function () { throw new Twig_Error_Runtime('Variable "zone" does not exist.', 16, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_zone");
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
        
        $__internal_cc527eb7dd3124c56e65fc7d2fd6fd39535e950582e3c3e7b021e078b7cdf68e->leave($__internal_cc527eb7dd3124c56e65fc7d2fd6fd39535e950582e3c3e7b021e078b7cdf68e_prof);

        
        $__internal_c0cd41f37b591e8da5dcce8d20adc385922b7328dd1a986d09ed6ee9130c1ac2->leave($__internal_c0cd41f37b591e8da5dcce8d20adc385922b7328dd1a986d09ed6ee9130c1ac2_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Zone:zonedel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 21,  93 => 17,  89 => 16,  81 => 13,  75 => 10,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"LljmHomeBundle::layout.html.twig\" %}

{% block title %}
  Delete zone - {{ parent() }}
{% endblock %}

{% block lljm_home_body %}

  <h2>{{ 'Delete a zone' | trans }}</h2>

  <p>
    {{ 'Confirm you want to delete zone' | trans }} : {{ zone.zonename }}.
  </p>

  <form action=\"{{ path('home_zonedel', {'id': zone.id}) }}\" method=\"post\">
    <a href=\"{{ path('home_zone')}}\" class=\"btn btn-default glyphicon glyphicon-chevron-left\">
      Back
    </a>
    <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger\" />
    {{ form_rest(form) }}
  </form>

{% endblock %}", "LljmHomeBundle:Zone:zonedel.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Zone/zonedel.html.twig");
    }
}
