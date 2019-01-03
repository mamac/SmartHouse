<?php

/* LljmHomeBundle:Heating:zoneheatingedit.html.twig */
class __TwigTemplate_b954f44a36a65721d02c914dd1fcaacf9987e9abcf0fb28a58a1580c00a768ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Heating:zoneheatingedit.html.twig", 2);
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
        echo "  Heating update - ";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update heating zone settings"), "html", null, true);
        echo "</h2>
<ul>
  ";
        // line 13
        $this->loadTemplate("LljmHomeBundle:Heating:zoneheatingeditform.html.twig", "LljmHomeBundle:Heating:zoneheatingedit.html.twig", 13)->display($context);
        // line 14
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Heating:zoneheatingedit.html.twig";
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
        return new Twig_Source("", "LljmHomeBundle:Heating:zoneheatingedit.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Heating/zoneheatingedit.html.twig");
    }
}
