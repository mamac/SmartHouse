<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_201942aaef6a87a7983667ddc363de19dfd5e2d57632e6d2ac2b1cab85147ca2 extends Twig_Template
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
        $__internal_4111568af8b7a749cbde1c0c049502bb74064ca7f8801d4580949dadc264212b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4111568af8b7a749cbde1c0c049502bb74064ca7f8801d4580949dadc264212b->enter($__internal_4111568af8b7a749cbde1c0c049502bb74064ca7f8801d4580949dadc264212b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_f402c08e5c73574a1c2ba9c93f6347bceea55f214d6e91d6a4c3d8e74ef9b89d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f402c08e5c73574a1c2ba9c93f6347bceea55f214d6e91d6a4c3d8e74ef9b89d->enter($__internal_f402c08e5c73574a1c2ba9c93f6347bceea55f214d6e91d6a4c3d8e74ef9b89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4111568af8b7a749cbde1c0c049502bb74064ca7f8801d4580949dadc264212b->leave($__internal_4111568af8b7a749cbde1c0c049502bb74064ca7f8801d4580949dadc264212b_prof);

        
        $__internal_f402c08e5c73574a1c2ba9c93f6347bceea55f214d6e91d6a4c3d8e74ef9b89d->leave($__internal_f402c08e5c73574a1c2ba9c93f6347bceea55f214d6e91d6a4c3d8e74ef9b89d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d54fe289521218878f4ea2d7f90d95e3f454d9da13e19a24431d146fa2ab0764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d54fe289521218878f4ea2d7f90d95e3f454d9da13e19a24431d146fa2ab0764->enter($__internal_d54fe289521218878f4ea2d7f90d95e3f454d9da13e19a24431d146fa2ab0764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_aa06ffb852a2bd5a9de27382a90ce8393e8a36d6b499c8671696fcf62825f3ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa06ffb852a2bd5a9de27382a90ce8393e8a36d6b499c8671696fcf62825f3ca->enter($__internal_aa06ffb852a2bd5a9de27382a90ce8393e8a36d6b499c8671696fcf62825f3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_aa06ffb852a2bd5a9de27382a90ce8393e8a36d6b499c8671696fcf62825f3ca->leave($__internal_aa06ffb852a2bd5a9de27382a90ce8393e8a36d6b499c8671696fcf62825f3ca_prof);

        
        $__internal_d54fe289521218878f4ea2d7f90d95e3f454d9da13e19a24431d146fa2ab0764->leave($__internal_d54fe289521218878f4ea2d7f90d95e3f454d9da13e19a24431d146fa2ab0764_prof);

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
