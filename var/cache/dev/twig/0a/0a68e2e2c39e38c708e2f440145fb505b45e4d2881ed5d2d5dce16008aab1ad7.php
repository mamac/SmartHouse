<?php

/* LljmHomeBundle:Visualization:waterlogdel.html.twig */
class __TwigTemplate_6282df5397404604a7d08f5e21fd50cdb962649186a471d28a77fab812cbc203 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Visualization:waterlogdel.html.twig", 2);
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
        $__internal_1e69ed5714a98472c4e023315a36cdea234102786e049b02171c77de53790c04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e69ed5714a98472c4e023315a36cdea234102786e049b02171c77de53790c04->enter($__internal_1e69ed5714a98472c4e023315a36cdea234102786e049b02171c77de53790c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:waterlogdel.html.twig"));

        $__internal_c330ccbfe0ea948eec3c1af3c7b6cd515a017f0996a6748af8ce2ba4693dc50a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c330ccbfe0ea948eec3c1af3c7b6cd515a017f0996a6748af8ce2ba4693dc50a->enter($__internal_c330ccbfe0ea948eec3c1af3c7b6cd515a017f0996a6748af8ce2ba4693dc50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Visualization:waterlogdel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e69ed5714a98472c4e023315a36cdea234102786e049b02171c77de53790c04->leave($__internal_1e69ed5714a98472c4e023315a36cdea234102786e049b02171c77de53790c04_prof);

        
        $__internal_c330ccbfe0ea948eec3c1af3c7b6cd515a017f0996a6748af8ce2ba4693dc50a->leave($__internal_c330ccbfe0ea948eec3c1af3c7b6cd515a017f0996a6748af8ce2ba4693dc50a_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_28140968212a15561621adb8b903db40c85da9a48660289062a31489bf2a433f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28140968212a15561621adb8b903db40c85da9a48660289062a31489bf2a433f->enter($__internal_28140968212a15561621adb8b903db40c85da9a48660289062a31489bf2a433f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2557298084236c08c8e45111dd5f0b8816d4293db04b2ee129a8b60a61f3a75e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2557298084236c08c8e45111dd5f0b8816d4293db04b2ee129a8b60a61f3a75e->enter($__internal_2557298084236c08c8e45111dd5f0b8816d4293db04b2ee129a8b60a61f3a75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Delete Water log - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2557298084236c08c8e45111dd5f0b8816d4293db04b2ee129a8b60a61f3a75e->leave($__internal_2557298084236c08c8e45111dd5f0b8816d4293db04b2ee129a8b60a61f3a75e_prof);

        
        $__internal_28140968212a15561621adb8b903db40c85da9a48660289062a31489bf2a433f->leave($__internal_28140968212a15561621adb8b903db40c85da9a48660289062a31489bf2a433f_prof);

    }

    // line 8
    public function block_lljm_home_body($context, array $blocks = array())
    {
        $__internal_0dc9b979a632ea5a2617205232500f3feb52f0614c22b029e67f8f26e9a0df32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dc9b979a632ea5a2617205232500f3feb52f0614c22b029e67f8f26e9a0df32->enter($__internal_0dc9b979a632ea5a2617205232500f3feb52f0614c22b029e67f8f26e9a0df32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        $__internal_96696e45efc452bacfbd38626c6a5c846656f5bd4394d6fb7b18c18f657c27a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96696e45efc452bacfbd38626c6a5c846656f5bd4394d6fb7b18c18f657c27a9->enter($__internal_96696e45efc452bacfbd38626c6a5c846656f5bd4394d6fb7b18c18f657c27a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_home_body"));

        // line 9
        echo "
  <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete a record in the water log"), "html", null, true);
        echo "</h2>

  <p>
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Confirm you want to delete the record below"), "html", null, true);
        echo ":
    <br>
    - ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["waterlog"]) || array_key_exists("waterlog", $context) ? $context["waterlog"] : (function () { throw new Twig_Error_Runtime('Variable "waterlog" does not exist.', 15, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "<br>
    - ";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["waterlog"]) || array_key_exists("waterlog", $context) ? $context["waterlog"] : (function () { throw new Twig_Error_Runtime('Variable "waterlog" does not exist.', 16, $this->getSourceContext()); })()), "daterx", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "<br>
    - ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["waterlog"]) || array_key_exists("waterlog", $context) ? $context["waterlog"] : (function () { throw new Twig_Error_Runtime('Variable "waterlog" does not exist.', 17, $this->getSourceContext()); })()), "metervalue", array()), "html", null, true);
        echo "<br>
    - ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["waterlog"]) || array_key_exists("waterlog", $context) ? $context["waterlog"] : (function () { throw new Twig_Error_Runtime('Variable "waterlog" does not exist.', 18, $this->getSourceContext()); })()), "meterid", array()), "metername", array()), "html", null, true);
        echo "<br>
  </p>

  <form action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_waterlogdel", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["waterlog"]) || array_key_exists("waterlog", $context) ? $context["waterlog"] : (function () { throw new Twig_Error_Runtime('Variable "waterlog" does not exist.', 21, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_watervisual");
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
        
        $__internal_96696e45efc452bacfbd38626c6a5c846656f5bd4394d6fb7b18c18f657c27a9->leave($__internal_96696e45efc452bacfbd38626c6a5c846656f5bd4394d6fb7b18c18f657c27a9_prof);

        
        $__internal_0dc9b979a632ea5a2617205232500f3feb52f0614c22b029e67f8f26e9a0df32->leave($__internal_0dc9b979a632ea5a2617205232500f3feb52f0614c22b029e67f8f26e9a0df32_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Visualization:waterlogdel.html.twig";
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
  Delete Water log - {{ parent() }}
{% endblock %}

{% block lljm_home_body %}

  <h2>{{ 'Delete a record in the water log' | trans }}</h2>

  <p>
    {{ 'Confirm you want to delete the record below' | trans }}:
    <br>
    - {{ waterlog.id }}<br>
    - {{ waterlog.daterx | date(\"Y-m-d H:i:s\") }}<br>
    - {{ waterlog.metervalue }}<br>
    - {{ waterlog.meterid.metername }}<br>
  </p>

  <form action=\"{{ path('home_waterlogdel', {'id': waterlog.id}) }}\" method=\"post\">
    <a href=\"{{ path('home_watervisual')}}\" class=\"btn btn-default glyphicon glyphicon-chevron-left\">
      Back
    </a>
    <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger\" />
    {{ form_rest(form) }}
  </form>

{% endblock %}", "LljmHomeBundle:Visualization:waterlogdel.html.twig", "/home/lljm/web_symfony3/web/src/Lljm/HomeBundle/Resources/views/Visualization/waterlogdel.html.twig");
    }
}
