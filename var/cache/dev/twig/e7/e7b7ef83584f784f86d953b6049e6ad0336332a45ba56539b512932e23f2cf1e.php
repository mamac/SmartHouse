<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_10b13afe0d8b5c1216e37e213ded15b0b5f96458b9c670302b73c96a4aada714 extends Twig_Template
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
        $__internal_2ca500112903f5f484651857a3d7180ef60a384fadd68a279e5c50d6e56e9035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ca500112903f5f484651857a3d7180ef60a384fadd68a279e5c50d6e56e9035->enter($__internal_2ca500112903f5f484651857a3d7180ef60a384fadd68a279e5c50d6e56e9035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_9fd53b94ed144b93eafe7729d81c02403086ea3ece7218c03be103f2e64605f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fd53b94ed144b93eafe7729d81c02403086ea3ece7218c03be103f2e64605f2->enter($__internal_9fd53b94ed144b93eafe7729d81c02403086ea3ece7218c03be103f2e64605f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ca500112903f5f484651857a3d7180ef60a384fadd68a279e5c50d6e56e9035->leave($__internal_2ca500112903f5f484651857a3d7180ef60a384fadd68a279e5c50d6e56e9035_prof);

        
        $__internal_9fd53b94ed144b93eafe7729d81c02403086ea3ece7218c03be103f2e64605f2->leave($__internal_9fd53b94ed144b93eafe7729d81c02403086ea3ece7218c03be103f2e64605f2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8fa03720815504d6d9f7544c4e6db5d22df863338135b40c0caf5df1b2e51b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8fa03720815504d6d9f7544c4e6db5d22df863338135b40c0caf5df1b2e51b3->enter($__internal_f8fa03720815504d6d9f7544c4e6db5d22df863338135b40c0caf5df1b2e51b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b8d7be805147d27c1f0667fbe97a97f4509abb800a7573076d31e69629910bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8d7be805147d27c1f0667fbe97a97f4509abb800a7573076d31e69629910bd3->enter($__internal_b8d7be805147d27c1f0667fbe97a97f4509abb800a7573076d31e69629910bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b8d7be805147d27c1f0667fbe97a97f4509abb800a7573076d31e69629910bd3->leave($__internal_b8d7be805147d27c1f0667fbe97a97f4509abb800a7573076d31e69629910bd3_prof);

        
        $__internal_f8fa03720815504d6d9f7544c4e6db5d22df863338135b40c0caf5df1b2e51b3->leave($__internal_f8fa03720815504d6d9f7544c4e6db5d22df863338135b40c0caf5df1b2e51b3_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d8ef22b4416329d7308f90c5da33790f1f56fbfa3b53a6837bddf21d1eda20fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8ef22b4416329d7308f90c5da33790f1f56fbfa3b53a6837bddf21d1eda20fb->enter($__internal_d8ef22b4416329d7308f90c5da33790f1f56fbfa3b53a6837bddf21d1eda20fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_daa6ad3ddb56b4d606e53ca1b237fd94bc8bfae9294f21c03d56a5d69234c614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa6ad3ddb56b4d606e53ca1b237fd94bc8bfae9294f21c03d56a5d69234c614->enter($__internal_daa6ad3ddb56b4d606e53ca1b237fd94bc8bfae9294f21c03d56a5d69234c614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "  ";
        
        $__internal_daa6ad3ddb56b4d606e53ca1b237fd94bc8bfae9294f21c03d56a5d69234c614->leave($__internal_daa6ad3ddb56b4d606e53ca1b237fd94bc8bfae9294f21c03d56a5d69234c614_prof);

        
        $__internal_d8ef22b4416329d7308f90c5da33790f1f56fbfa3b53a6837bddf21d1eda20fb->leave($__internal_d8ef22b4416329d7308f90c5da33790f1f56fbfa3b53a6837bddf21d1eda20fb_prof);

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
