<?php

/* LljmHomeBundle:Default:index.html.twig */
class __TwigTemplate_535054d12496c4c2985595ec726730cf38cab1253803cdf2061676b3a68260b9 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "      <div id=\"header\" class=\"hero-unit\">
        <h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Welcome"), "html", null, true);
        echo "</h1>

";
        // line 7
        if (twig_test_empty(($context["houses"] ?? null))) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["houses"] ?? null), 0, array()), "address1", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["houses"] ?? null), 0, array()), "city", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["houses"] ?? null), 0, array()), "country", array()), "html", null, true);
            echo "

";
        }
        // line 16
        echo "
      </div>
          ";
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
        return array (  63 => 16,  53 => 13,  50 => 12,  44 => 9,  41 => 8,  39 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "LljmHomeBundle:Default:index.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Default/index.html.twig");
    }
}
