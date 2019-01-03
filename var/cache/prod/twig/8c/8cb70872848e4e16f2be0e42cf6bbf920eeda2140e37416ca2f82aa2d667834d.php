<?php

/* LljmUserBundle::layout.html.twig */
class __TwigTemplate_85c97392ad99fe6bfa5efde597f7ca61d1e596107a5c4b8fe6f6cd8bbbffeb1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "

  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 8
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
      ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
            echo "
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "

  ";
        // line 14
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 16
        echo "
";
    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 15
        echo "  ";
    }

    public function getTemplateName()
    {
        return "LljmUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 15,  65 => 14,  60 => 16,  58 => 14,  54 => 12,  45 => 9,  40 => 8,  36 => 7,  32 => 5,  29 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "LljmUserBundle::layout.html.twig", "/home/lljm/web/src/Lljm/UserBundle/Resources/views/layout.html.twig");
    }
}
