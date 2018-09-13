<?php

/* LljmHomeBundle:Default:about.html.twig */
class __TwigTemplate_f2ef3eb99847b20e3b4e0a3e64233229b79c6b9b6d69d2a4b7ecdaa9eb312d05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Default:about.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("About this web site"), "html", null, true);
        echo "</h1>

        <p>
        ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This is a private web site used to share a few information with the internet."), "html", null, true);
        echo "
        <br>
        ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If you feel any interest in what you saw here don't hesitate to contact us."), "html", null, true);
        echo "
        </p>
      </div>
          ";
    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Default:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  40 => 8,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "LljmHomeBundle:Default:about.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Default/about.html.twig");
    }
}
