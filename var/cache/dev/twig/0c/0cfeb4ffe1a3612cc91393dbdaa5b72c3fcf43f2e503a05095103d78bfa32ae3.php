<?php

/* LljmHomeBundle:Default:index.html.twig */
class __TwigTemplate_4ae5fceb4ccac9ddb9b4ed2137b10f6c3a433b4a6ce785674dca9d05ded8a7a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LljmHomeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b3aab9c272a01595e15c838cba857d18a2f7869d77cc39d30bb46f6ace7fa89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b3aab9c272a01595e15c838cba857d18a2f7869d77cc39d30bb46f6ace7fa89->enter($__internal_8b3aab9c272a01595e15c838cba857d18a2f7869d77cc39d30bb46f6ace7fa89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Default:index.html.twig"));

        $__internal_b30c2b759c2c9ef62fa82846b0c1fe414b0a3186d9cd1a3d8503b190ec026662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b30c2b759c2c9ef62fa82846b0c1fe414b0a3186d9cd1a3d8503b190ec026662->enter($__internal_b30c2b759c2c9ef62fa82846b0c1fe414b0a3186d9cd1a3d8503b190ec026662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmHomeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b3aab9c272a01595e15c838cba857d18a2f7869d77cc39d30bb46f6ace7fa89->leave($__internal_8b3aab9c272a01595e15c838cba857d18a2f7869d77cc39d30bb46f6ace7fa89_prof);

        
        $__internal_b30c2b759c2c9ef62fa82846b0c1fe414b0a3186d9cd1a3d8503b190ec026662->leave($__internal_b30c2b759c2c9ef62fa82846b0c1fe414b0a3186d9cd1a3d8503b190ec026662_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1692ad918aa8501de0fc79bdc823dc9829c8b01d21030c92a0548e2c793055dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1692ad918aa8501de0fc79bdc823dc9829c8b01d21030c92a0548e2c793055dd->enter($__internal_1692ad918aa8501de0fc79bdc823dc9829c8b01d21030c92a0548e2c793055dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_caf40d926153341b3d9bc952c96746fb5a2977218169483bfdf21c7006325eab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf40d926153341b3d9bc952c96746fb5a2977218169483bfdf21c7006325eab->enter($__internal_caf40d926153341b3d9bc952c96746fb5a2977218169483bfdf21c7006325eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "      <div id=\"header\" class=\"hero-unit\">
        <h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Welcome"), "html", null, true);
        echo "</h1>

";
        // line 7
        if (twig_test_empty((isset($context["houses"]) || array_key_exists("houses", $context) ? $context["houses"] : (function () { throw new Twig_Error_Runtime('Variable "houses" does not exist.', 7, $this->getSourceContext()); })()))) {
            // line 8
            echo "
";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You should create a house in Housing/House."), "html", null, true);
            echo "

";
        } else {
            // line 12
            echo "
";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["houses"]) || array_key_exists("houses", $context) ? $context["houses"] : (function () { throw new Twig_Error_Runtime('Variable "houses" does not exist.', 13, $this->getSourceContext()); })()), 0, array()), "address1", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["houses"]) || array_key_exists("houses", $context) ? $context["houses"] : (function () { throw new Twig_Error_Runtime('Variable "houses" does not exist.', 13, $this->getSourceContext()); })()), 0, array()), "city", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["houses"]) || array_key_exists("houses", $context) ? $context["houses"] : (function () { throw new Twig_Error_Runtime('Variable "houses" does not exist.', 13, $this->getSourceContext()); })()), 0, array()), "country", array()), "html", null, true);
            echo "

";
        }
        // line 16
        echo "
      </div>
          ";
        
        $__internal_caf40d926153341b3d9bc952c96746fb5a2977218169483bfdf21c7006325eab->leave($__internal_caf40d926153341b3d9bc952c96746fb5a2977218169483bfdf21c7006325eab_prof);

        
        $__internal_1692ad918aa8501de0fc79bdc823dc9829c8b01d21030c92a0548e2c793055dd->leave($__internal_1692ad918aa8501de0fc79bdc823dc9829c8b01d21030c92a0548e2c793055dd_prof);

    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 16,  71 => 13,  68 => 12,  62 => 9,  59 => 8,  57 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"LljmHomeBundle::layout.html.twig\" %}

         {% block body %}
      <div id=\"header\" class=\"hero-unit\">
        <h1>{{'Welcome' | trans }}</h1>

{% if houses is empty %}

{{ 'You should create a house in Housing/House.' | trans }}

{% else %}

{{ houses.0.address1 }} - {{ houses.0.city }} - {{ houses.0.country }}

{% endif %}

      </div>
          {% endblock %}", "LljmHomeBundle:Default:index.html.twig", "/home/lljm/web_symfony3/web/src/Lljm/HomeBundle/Resources/views/Default/index.html.twig");
    }
}
