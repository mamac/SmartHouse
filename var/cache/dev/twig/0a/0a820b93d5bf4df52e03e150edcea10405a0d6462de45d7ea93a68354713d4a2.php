<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_ddc7689e8cc813e2de16fcbb2514d3c85442ea636a52a87d423e875cd950a230 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7c18eb80d9df6132d2a271cee786824cc14c79fc72b15a35e3a20936adb597f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7c18eb80d9df6132d2a271cee786824cc14c79fc72b15a35e3a20936adb597f->enter($__internal_a7c18eb80d9df6132d2a271cee786824cc14c79fc72b15a35e3a20936adb597f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_6c9ed30cca9e7fea580e343a93f9425e35a1c335ab77fb35d85fd79de7785e27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c9ed30cca9e7fea580e343a93f9425e35a1c335ab77fb35d85fd79de7785e27->enter($__internal_6c9ed30cca9e7fea580e343a93f9425e35a1c335ab77fb35d85fd79de7785e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7c18eb80d9df6132d2a271cee786824cc14c79fc72b15a35e3a20936adb597f->leave($__internal_a7c18eb80d9df6132d2a271cee786824cc14c79fc72b15a35e3a20936adb597f_prof);

        
        $__internal_6c9ed30cca9e7fea580e343a93f9425e35a1c335ab77fb35d85fd79de7785e27->leave($__internal_6c9ed30cca9e7fea580e343a93f9425e35a1c335ab77fb35d85fd79de7785e27_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_53ca4c103c8711e543f7f5427202baab1a03c647a0662dbc3ecbd35acdfca14d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53ca4c103c8711e543f7f5427202baab1a03c647a0662dbc3ecbd35acdfca14d->enter($__internal_53ca4c103c8711e543f7f5427202baab1a03c647a0662dbc3ecbd35acdfca14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0dc0518c8fdf9004496028125de991dd333926666bbcbcc5aae8e9bf2ee2dd7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dc0518c8fdf9004496028125de991dd333926666bbcbcc5aae8e9bf2ee2dd7c->enter($__internal_0dc0518c8fdf9004496028125de991dd333926666bbcbcc5aae8e9bf2ee2dd7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_0dc0518c8fdf9004496028125de991dd333926666bbcbcc5aae8e9bf2ee2dd7c->leave($__internal_0dc0518c8fdf9004496028125de991dd333926666bbcbcc5aae8e9bf2ee2dd7c_prof);

        
        $__internal_53ca4c103c8711e543f7f5427202baab1a03c647a0662dbc3ecbd35acdfca14d->leave($__internal_53ca4c103c8711e543f7f5427202baab1a03c647a0662dbc3ecbd35acdfca14d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/lljm/web/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
