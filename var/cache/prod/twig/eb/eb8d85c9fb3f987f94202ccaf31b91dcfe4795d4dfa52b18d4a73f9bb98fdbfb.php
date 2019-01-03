<?php

/* LljmAdminBundle:User:useredit.html.twig */
class __TwigTemplate_455c9db50fa1655c9597da802f21f03085b6640fb66dff418c72902e77af9c45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LljmAdminBundle::layout.html.twig", "LljmAdminBundle:User:useredit.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'lljm_admin_body' => array($this, 'block_lljm_admin_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LljmAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  User update - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_lljm_admin_body($context, array $blocks = array())
    {
        // line 10
        echo "
  <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update user"), "html", null, true);
        echo "</h2>
<ul>
  ";
        // line 13
        $this->loadTemplate("LljmAdminBundle:User:usereditform.html.twig", "LljmAdminBundle:User:useredit.html.twig", 13)->display($context);
        // line 14
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "LljmAdminBundle:User:useredit.html.twig";
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
        return new Twig_Source("", "LljmAdminBundle:User:useredit.html.twig", "/home/lljm/web/src/Lljm/AdminBundle/Resources/views/User/useredit.html.twig");
    }
}
