<?php

/* LljmHomeBundle:Meter:meterdel.html.twig */
class __TwigTemplate_040c6e50828bf4b5ebe0a0c52161e51bf1fd21ee3cbef9abd5040ab8926a182e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Meter:meterdel.html.twig", 2);
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
        $__internal_28370aa81768a68a7c8fd5f80897ffed84acf9240c7edd3aa4c869a91baeab75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28370aa81768a68a7c8fd5f80897ffed84acf9240c7edd3aa4c869a91baeab75->enter($__internal_28370aa81768a68a7c8fd5f80897ffed84acf9240c7edd3aa4c869a91baeab75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Meter:meterdel.html.twig"));

        $__internal_f8b4cfff43c8c89fdb59a1095508c3bfc1442e5acf77939d0d906658491b579d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8b4cfff43c8c89fdb59a1095508c3bfc1442e5acf77939d0d906658491b579d->enter($__internal_f8b4cfff43c8c89fdb59a1095508c3bfc1442e5acf77939d0d906658491b579d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Meter:meterdel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28370aa81768a68a7c8fd5f80897ffed84acf9240c7edd3aa4c869a91baeab75->leave($__internal_28370aa81768a68a7c8fd5f80897ffed84acf9240c7edd3aa4c869a91baeab75_prof);

        
        $__internal_f8b4cfff43c8c89fdb59a1095508c3bfc1442e5acf77939d0d906658491b579d->leave($__internal_f8b4cfff43c8c89fdb59a1095508c3bfc1442e5acf77939d0d906658491b579d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_f29a1589d8aa56042aa3c0c6ccb741f07cadd996c4936cab4c54eb45045ed511 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f29a1589d8aa56042aa3c0c6ccb741f07cadd996c4936cab4c54eb45045ed511->enter($__internal_f29a1589d8aa56042aa3c0c6ccb741f07cadd996c4936cab4c54eb45045ed511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_35a80033d37aaffd34cf5da81bb5f8f82a018f9ac8f0e228ed9f7daa8a054b64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35a80033d37aaffd34cf5da81bb5f8f82a018f9ac8f0e228ed9f7daa8a054b64->enter($__internal_35a80033d37aaffd34cf5da81bb5f8f82a018f9ac8f0e228ed9f7daa8a054b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Delete meter - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_35a80033d37aaffd34cf5da81bb5f8f82a018f9ac8f0e228ed9f7daa8a054b64->leave($__internal_35a80033d37aaffd34cf5da81bb5f8f82a018f9ac8f0e228ed9f7daa8a054b64_prof);

        
        $__internal_f29a1589d8aa56042aa3c0c6ccb741f07cadd996c4936cab4c54eb45045ed511->leave($__internal_f29a1589d8aa56042aa3c0c6ccb741f07cadd996c4936cab4c54eb45045ed511_prof);

    }

    // line 8
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_e84e10ddcbd3252b950b566b5c7e9b0d6470442712efb0732056dbf266a6bd73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e84e10ddcbd3252b950b566b5c7e9b0d6470442712efb0732056dbf266a6bd73->enter($__internal_e84e10ddcbd3252b950b566b5c7e9b0d6470442712efb0732056dbf266a6bd73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_60b00a6876dbee29661684410350b3316985af31b52a9209401e3e0ef878abae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b00a6876dbee29661684410350b3316985af31b52a9209401e3e0ef878abae->enter($__internal_60b00a6876dbee29661684410350b3316985af31b52a9209401e3e0ef878abae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        // line 9
        echo "
  <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete a meter"), "html", null, true);
        echo "</h2>

  <p>
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Confirm you want to delete meter below"), "html", null, true);
        echo ":
    <br>
    - ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["meter"]) || array_key_exists("meter", $context) ? $context["meter"] : (function () { throw new Twig_Error_Runtime('Variable "meter" does not exist.', 15, $this->getSourceContext()); })()), "metername", array()), "html", null, true);
        echo "<br>
    - ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["meter"]) || array_key_exists("meter", $context) ? $context["meter"] : (function () { throw new Twig_Error_Runtime('Variable "meter" does not exist.', 16, $this->getSourceContext()); })()), "resource", array()), "resourcename", array()), "html", null, true);
        echo "<br>
    - ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["meter"]) || array_key_exists("meter", $context) ? $context["meter"] : (function () { throw new Twig_Error_Runtime('Variable "meter" does not exist.', 17, $this->getSourceContext()); })()), "unit", array()), "unitname", array()), "html", null, true);
        echo "<br>
  </p>

  <form action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_meterdel", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["meter"]) || array_key_exists("meter", $context) ? $context["meter"] : (function () { throw new Twig_Error_Runtime('Variable "meter" does not exist.', 20, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_meter");
        echo "\" class=\"btn btn-default glyphicon glyphicon-chevron-left\">
      Back
    </a>
    <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger\" />
    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), 'rest');
        echo "
  </form>

";
        
        $__internal_60b00a6876dbee29661684410350b3316985af31b52a9209401e3e0ef878abae->leave($__internal_60b00a6876dbee29661684410350b3316985af31b52a9209401e3e0ef878abae_prof);

        
        $__internal_e84e10ddcbd3252b950b566b5c7e9b0d6470442712efb0732056dbf266a6bd73->leave($__internal_e84e10ddcbd3252b950b566b5c7e9b0d6470442712efb0732056dbf266a6bd73_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Meter:meterdel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 25,  104 => 21,  100 => 20,  94 => 17,  90 => 16,  86 => 15,  81 => 13,  75 => 10,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"LljmHomeBundle::layout.html.twig\" %}

{% block title %}
  Delete meter - {{ parent() }}
{% endblock %}

{% block lljm_home_body %}

  <h2>{{ 'Delete a meter' | trans }}</h2>

  <p>
    {{ 'Confirm you want to delete meter below' | trans }}:
    <br>
    - {{ meter.metername }}<br>
    - {{ meter.resource.resourcename }}<br>
    - {{ meter.unit.unitname }}<br>
  </p>

  <form action=\"{{ path('home_meterdel', {'id': meter.id}) }}\" method=\"post\">
    <a href=\"{{ path('home_meter')}}\" class=\"btn btn-default glyphicon glyphicon-chevron-left\">
      Back
    </a>
    <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger\" />
    {{ form_rest(form) }}
  </form>

{% endblock %}", "LljmHomeBundle:Meter:meterdel.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Meter/meterdel.html.twig");
    }
}
