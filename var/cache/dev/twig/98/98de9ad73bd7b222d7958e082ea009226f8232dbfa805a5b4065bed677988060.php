<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_7c869a8616c1f3d210c6767e3caa2befe3907580dcba246b518e0677a0f5a1fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "@FOSUser/layout.html.twig", 1);
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
        $__internal_9093ac25d8b731afd312fef24d4996077cd38a729451781767e0419277e2773e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9093ac25d8b731afd312fef24d4996077cd38a729451781767e0419277e2773e->enter($__internal_9093ac25d8b731afd312fef24d4996077cd38a729451781767e0419277e2773e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_57cc97b2ac2af26344085ff81e9b544956d283c9421b8ad453e04b2e17dc2c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57cc97b2ac2af26344085ff81e9b544956d283c9421b8ad453e04b2e17dc2c41->enter($__internal_57cc97b2ac2af26344085ff81e9b544956d283c9421b8ad453e04b2e17dc2c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9093ac25d8b731afd312fef24d4996077cd38a729451781767e0419277e2773e->leave($__internal_9093ac25d8b731afd312fef24d4996077cd38a729451781767e0419277e2773e_prof);

        
        $__internal_57cc97b2ac2af26344085ff81e9b544956d283c9421b8ad453e04b2e17dc2c41->leave($__internal_57cc97b2ac2af26344085ff81e9b544956d283c9421b8ad453e04b2e17dc2c41_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_06d8732d6e79294ddaa48bcf69b4149d43fb991ea7cf397aa5e9c77e66e55d07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06d8732d6e79294ddaa48bcf69b4149d43fb991ea7cf397aa5e9c77e66e55d07->enter($__internal_06d8732d6e79294ddaa48bcf69b4149d43fb991ea7cf397aa5e9c77e66e55d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c08c729c3c8c9c2fb967231c9970a647732250d4ca160cc61bf400d8b50add0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c08c729c3c8c9c2fb967231c9970a647732250d4ca160cc61bf400d8b50add0c->enter($__internal_c08c729c3c8c9c2fb967231c9970a647732250d4ca160cc61bf400d8b50add0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "

  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
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
        
        $__internal_c08c729c3c8c9c2fb967231c9970a647732250d4ca160cc61bf400d8b50add0c->leave($__internal_c08c729c3c8c9c2fb967231c9970a647732250d4ca160cc61bf400d8b50add0c_prof);

        
        $__internal_06d8732d6e79294ddaa48bcf69b4149d43fb991ea7cf397aa5e9c77e66e55d07->leave($__internal_06d8732d6e79294ddaa48bcf69b4149d43fb991ea7cf397aa5e9c77e66e55d07_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9828e6fa948a49d667073f87163ccb53da1b5c4d171af138e8a96270e860aad1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9828e6fa948a49d667073f87163ccb53da1b5c4d171af138e8a96270e860aad1->enter($__internal_9828e6fa948a49d667073f87163ccb53da1b5c4d171af138e8a96270e860aad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b3adda254ea73b1963a0aff54f5b579d5fe9893fe4087ee0295d48f2d5605e93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3adda254ea73b1963a0aff54f5b579d5fe9893fe4087ee0295d48f2d5605e93->enter($__internal_b3adda254ea73b1963a0aff54f5b579d5fe9893fe4087ee0295d48f2d5605e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "  ";
        
        $__internal_b3adda254ea73b1963a0aff54f5b579d5fe9893fe4087ee0295d48f2d5605e93->leave($__internal_b3adda254ea73b1963a0aff54f5b579d5fe9893fe4087ee0295d48f2d5605e93_prof);

        
        $__internal_9828e6fa948a49d667073f87163ccb53da1b5c4d171af138e8a96270e860aad1->leave($__internal_9828e6fa948a49d667073f87163ccb53da1b5c4d171af138e8a96270e860aad1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 15,  89 => 14,  78 => 16,  76 => 14,  72 => 12,  63 => 9,  58 => 8,  54 => 7,  50 => 5,  41 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"LljmHomeBundle::layout.html.twig\" %}


{% block body %}


  {% for key, message in app.session.flashbag.all() %}
    <div class=\"alert alert-{{ key }}\">
      {{ message|trans({}, 'FOSUserBundle') }}
    </div>
  {% endfor %}


  {% block fos_user_content %}
  {% endblock fos_user_content %}

{% endblock %}", "@FOSUser/layout.html.twig", "/home/lljm/web/src/Lljm/UserBundle/Resources/views/layout.html.twig");
    }
}
