<?php

/* LljmHomeBundle:Subzone:subzoneadd.html.twig */
class __TwigTemplate_009bf10ad3da902440693b4b6d2bdc7b61caa6fe2ff1d3a7b01dce5c4c52bf19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Subzone:subzoneadd.html.twig", 2);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Sub zones - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_lljm_home_body($context, array $blocks = array())
    {
        // line 10
        echo "
  <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a sub zone"), "html", null, true);
        echo "</h2>
<ul>
  ";
        // line 13
        $this->loadTemplate("LljmHomeBundle:Subzone:subzoneform.html.twig", "LljmHomeBundle:Subzone:subzoneadd.html.twig", 13)->display($context);
        // line 14
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Subzone:subzoneadd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  50 => 13,  45 => 11,  42 => 10,  39 => 9,  32 => 6,  29 => 5,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "LljmHomeBundle:Subzone:subzoneadd.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Subzone/subzoneadd.html.twig");
    }
}
