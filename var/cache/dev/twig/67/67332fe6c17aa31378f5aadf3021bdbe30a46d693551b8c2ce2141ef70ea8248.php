<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_5fb76f7143302be2893059efd686f121de99b6487fa006b57096bf9ddd1906f0 extends Twig_Template
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
        $__internal_e51effa4a8da787e34f96d7b93f81c40b7d43ed30be015c283d2ddae36d837a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e51effa4a8da787e34f96d7b93f81c40b7d43ed30be015c283d2ddae36d837a5->enter($__internal_e51effa4a8da787e34f96d7b93f81c40b7d43ed30be015c283d2ddae36d837a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_eb531ff0fb86ded98a3ac32a02c66ae02ded5f7819264a64bfb3370b75dc5829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb531ff0fb86ded98a3ac32a02c66ae02ded5f7819264a64bfb3370b75dc5829->enter($__internal_eb531ff0fb86ded98a3ac32a02c66ae02ded5f7819264a64bfb3370b75dc5829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e51effa4a8da787e34f96d7b93f81c40b7d43ed30be015c283d2ddae36d837a5->leave($__internal_e51effa4a8da787e34f96d7b93f81c40b7d43ed30be015c283d2ddae36d837a5_prof);

        
        $__internal_eb531ff0fb86ded98a3ac32a02c66ae02ded5f7819264a64bfb3370b75dc5829->leave($__internal_eb531ff0fb86ded98a3ac32a02c66ae02ded5f7819264a64bfb3370b75dc5829_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c10e5f8610aad2bfb1d2851bc3795abbaf701e1b44eea246c06028091a4be4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c10e5f8610aad2bfb1d2851bc3795abbaf701e1b44eea246c06028091a4be4c->enter($__internal_5c10e5f8610aad2bfb1d2851bc3795abbaf701e1b44eea246c06028091a4be4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_07daf63f0cf3ae0602391d8648687db31753e0c8f7a65a986f3d0304beae234d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07daf63f0cf3ae0602391d8648687db31753e0c8f7a65a986f3d0304beae234d->enter($__internal_07daf63f0cf3ae0602391d8648687db31753e0c8f7a65a986f3d0304beae234d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_07daf63f0cf3ae0602391d8648687db31753e0c8f7a65a986f3d0304beae234d->leave($__internal_07daf63f0cf3ae0602391d8648687db31753e0c8f7a65a986f3d0304beae234d_prof);

        
        $__internal_5c10e5f8610aad2bfb1d2851bc3795abbaf701e1b44eea246c06028091a4be4c->leave($__internal_5c10e5f8610aad2bfb1d2851bc3795abbaf701e1b44eea246c06028091a4be4c_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_589b5af8d0ffc86a8eb9816963a3082fd0a6864d2f7d771718502b68aeae6266 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_589b5af8d0ffc86a8eb9816963a3082fd0a6864d2f7d771718502b68aeae6266->enter($__internal_589b5af8d0ffc86a8eb9816963a3082fd0a6864d2f7d771718502b68aeae6266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a0494e8a15f27ba96eb2fdfb979a656bb8ad6e22dc873ca698bbd8d308d6dba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0494e8a15f27ba96eb2fdfb979a656bb8ad6e22dc873ca698bbd8d308d6dba9->enter($__internal_a0494e8a15f27ba96eb2fdfb979a656bb8ad6e22dc873ca698bbd8d308d6dba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "  ";
        
        $__internal_a0494e8a15f27ba96eb2fdfb979a656bb8ad6e22dc873ca698bbd8d308d6dba9->leave($__internal_a0494e8a15f27ba96eb2fdfb979a656bb8ad6e22dc873ca698bbd8d308d6dba9_prof);

        
        $__internal_589b5af8d0ffc86a8eb9816963a3082fd0a6864d2f7d771718502b68aeae6266->leave($__internal_589b5af8d0ffc86a8eb9816963a3082fd0a6864d2f7d771718502b68aeae6266_prof);

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

{% endblock %}", "@FOSUser/layout.html.twig", "/home/lljm/web_symfony3/web/src/Lljm/UserBundle/Resources/views/layout.html.twig");
    }
}
