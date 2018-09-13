<?php

/* LljmHomeBundle:Visualization:gaslogdel.html.twig */
class __TwigTemplate_5d4467a7c78844be8fe4b6f96434bb374a0c5cdb53377334f24391afc75fcec5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Visualization:gaslogdel.html.twig", 2);
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
        $__internal_a03a244ab4c0f592f1a82a430f68f65b2761f3c19c630e8999bfd80878ee7f64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a03a244ab4c0f592f1a82a430f68f65b2761f3c19c630e8999bfd80878ee7f64->enter($__internal_a03a244ab4c0f592f1a82a430f68f65b2761f3c19c630e8999bfd80878ee7f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:gaslogdel.html.twig"));

        $__internal_dbc8403a2f2d2d88d9d8cf09671b1d47b55ec4c90931edb38e80c57af3df4080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbc8403a2f2d2d88d9d8cf09671b1d47b55ec4c90931edb38e80c57af3df4080->enter($__internal_dbc8403a2f2d2d88d9d8cf09671b1d47b55ec4c90931edb38e80c57af3df4080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:gaslogdel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a03a244ab4c0f592f1a82a430f68f65b2761f3c19c630e8999bfd80878ee7f64->leave($__internal_a03a244ab4c0f592f1a82a430f68f65b2761f3c19c630e8999bfd80878ee7f64_prof);

        
        $__internal_dbc8403a2f2d2d88d9d8cf09671b1d47b55ec4c90931edb38e80c57af3df4080->leave($__internal_dbc8403a2f2d2d88d9d8cf09671b1d47b55ec4c90931edb38e80c57af3df4080_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_15b7e06f56e738e87f8735f89bb6dbbc5611f3dcad08a7112d2a3a57b09c106e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15b7e06f56e738e87f8735f89bb6dbbc5611f3dcad08a7112d2a3a57b09c106e->enter($__internal_15b7e06f56e738e87f8735f89bb6dbbc5611f3dcad08a7112d2a3a57b09c106e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_434d9ac1e49c3613a45e09936f4611b4c1f9bd267af494e822f8da824b2726c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_434d9ac1e49c3613a45e09936f4611b4c1f9bd267af494e822f8da824b2726c5->enter($__internal_434d9ac1e49c3613a45e09936f4611b4c1f9bd267af494e822f8da824b2726c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Delete Gas log - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_434d9ac1e49c3613a45e09936f4611b4c1f9bd267af494e822f8da824b2726c5->leave($__internal_434d9ac1e49c3613a45e09936f4611b4c1f9bd267af494e822f8da824b2726c5_prof);

        
        $__internal_15b7e06f56e738e87f8735f89bb6dbbc5611f3dcad08a7112d2a3a57b09c106e->leave($__internal_15b7e06f56e738e87f8735f89bb6dbbc5611f3dcad08a7112d2a3a57b09c106e_prof);

    }

    // line 8
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_1e31cd4efe9b31b175de4312623306366950be8f81caa4188db1cb64ebd64a02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e31cd4efe9b31b175de4312623306366950be8f81caa4188db1cb64ebd64a02->enter($__internal_1e31cd4efe9b31b175de4312623306366950be8f81caa4188db1cb64ebd64a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_f035667fb76ff0eef802c2c01a75e798a04b1ec7cd0b5f0930cfe000a14d5889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f035667fb76ff0eef802c2c01a75e798a04b1ec7cd0b5f0930cfe000a14d5889->enter($__internal_f035667fb76ff0eef802c2c01a75e798a04b1ec7cd0b5f0930cfe000a14d5889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        // line 9
        echo "
  <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete a record in the gas log"), "html", null, true);
        echo "</h2>

  <p>
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Confirm you want to delete the record below"), "html", null, true);
        echo ":
    <br>
    - ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["gaslog"]) || array_key_exists("gaslog", $context) ? $context["gaslog"] : (function () { throw new Twig_Error_Runtime('Variable "gaslog" does not exist.', 15, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "<br>
    - ";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["gaslog"]) || array_key_exists("gaslog", $context) ? $context["gaslog"] : (function () { throw new Twig_Error_Runtime('Variable "gaslog" does not exist.', 16, $this->getSourceContext()); })()), "daterx", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "<br>
    - ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["gaslog"]) || array_key_exists("gaslog", $context) ? $context["gaslog"] : (function () { throw new Twig_Error_Runtime('Variable "gaslog" does not exist.', 17, $this->getSourceContext()); })()), "metervalue", array()), "html", null, true);
        echo "<br>
    - ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["gaslog"]) || array_key_exists("gaslog", $context) ? $context["gaslog"] : (function () { throw new Twig_Error_Runtime('Variable "gaslog" does not exist.', 18, $this->getSourceContext()); })()), "meterid", array()), "metername", array()), "html", null, true);
        echo "<br>
  </p>

  <form action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_gaslogdel", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["gaslog"]) || array_key_exists("gaslog", $context) ? $context["gaslog"] : (function () { throw new Twig_Error_Runtime('Variable "gaslog" does not exist.', 21, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_gasvisual");
        echo "\" class=\"btn btn-default glyphicon glyphicon-chevron-left\">
      Back
    </a>
    <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger\" />
    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), 'rest');
        echo "
  </form>

";
        
        $__internal_f035667fb76ff0eef802c2c01a75e798a04b1ec7cd0b5f0930cfe000a14d5889->leave($__internal_f035667fb76ff0eef802c2c01a75e798a04b1ec7cd0b5f0930cfe000a14d5889_prof);

        
        $__internal_1e31cd4efe9b31b175de4312623306366950be8f81caa4188db1cb64ebd64a02->leave($__internal_1e31cd4efe9b31b175de4312623306366950be8f81caa4188db1cb64ebd64a02_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Visualization:gaslogdel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 26,  108 => 22,  104 => 21,  98 => 18,  94 => 17,  90 => 16,  86 => 15,  81 => 13,  75 => 10,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"LljmHomeBundle::layout.html.twig\" %}

{% block title %}
  Delete Gas log - {{ parent() }}
{% endblock %}

{% block lljm_home_body %}

  <h2>{{ 'Delete a record in the gas log' | trans }}</h2>

  <p>
    {{ 'Confirm you want to delete the record below' | trans }}:
    <br>
    - {{ gaslog.id }}<br>
    - {{ gaslog.daterx | date(\"Y-m-d H:i:s\") }}<br>
    - {{ gaslog.metervalue }}<br>
    - {{ gaslog.meterid.metername }}<br>
  </p>

  <form action=\"{{ path('home_gaslogdel', {'id': gaslog.id}) }}\" method=\"post\">
    <a href=\"{{ path('home_gasvisual')}}\" class=\"btn btn-default glyphicon glyphicon-chevron-left\">
      Back
    </a>
    <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger\" />
    {{ form_rest(form) }}
  </form>

{% endblock %}", "LljmHomeBundle:Visualization:gaslogdel.html.twig", "/home/lljm/web_symfony3/web/src/Lljm/HomeBundle/Resources/views/Visualization/gaslogdel.html.twig");
    }
}
