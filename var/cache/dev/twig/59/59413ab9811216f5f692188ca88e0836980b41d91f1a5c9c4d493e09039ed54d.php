<?php

/* LljmAdminBundle:User:userdel.html.twig */
class __TwigTemplate_844eb18fdf5d71426b0de051bf71d54050958b50d62bbc1009e54e8409ab5379 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LljmAdminBundle::layout.html.twig", "LljmAdminBundle:User:userdel.html.twig", 2);
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
        $__internal_e5798b92ee4e82d84d75db55a6084c37bd3c534b931f35aada8c703e89fd89f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5798b92ee4e82d84d75db55a6084c37bd3c534b931f35aada8c703e89fd89f6->enter($__internal_e5798b92ee4e82d84d75db55a6084c37bd3c534b931f35aada8c703e89fd89f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmAdminBundle:User:userdel.html.twig"));

        $__internal_fd259d8477fb0d3a75e68b7221b94621f3f203a8831c89084f915d4fce63624c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd259d8477fb0d3a75e68b7221b94621f3f203a8831c89084f915d4fce63624c->enter($__internal_fd259d8477fb0d3a75e68b7221b94621f3f203a8831c89084f915d4fce63624c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmAdminBundle:User:userdel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5798b92ee4e82d84d75db55a6084c37bd3c534b931f35aada8c703e89fd89f6->leave($__internal_e5798b92ee4e82d84d75db55a6084c37bd3c534b931f35aada8c703e89fd89f6_prof);

        
        $__internal_fd259d8477fb0d3a75e68b7221b94621f3f203a8831c89084f915d4fce63624c->leave($__internal_fd259d8477fb0d3a75e68b7221b94621f3f203a8831c89084f915d4fce63624c_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f10997e981acc5cb0d8f7b12b61b460f1b74725c819a6d55583cf25402857de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f10997e981acc5cb0d8f7b12b61b460f1b74725c819a6d55583cf25402857de->enter($__internal_5f10997e981acc5cb0d8f7b12b61b460f1b74725c819a6d55583cf25402857de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_37f6da033e26166a503d2797ec814db3edfbb89f64b2545883835be78039e3c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37f6da033e26166a503d2797ec814db3edfbb89f64b2545883835be78039e3c0->enter($__internal_37f6da033e26166a503d2797ec814db3edfbb89f64b2545883835be78039e3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Delete user - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_37f6da033e26166a503d2797ec814db3edfbb89f64b2545883835be78039e3c0->leave($__internal_37f6da033e26166a503d2797ec814db3edfbb89f64b2545883835be78039e3c0_prof);

        
        $__internal_5f10997e981acc5cb0d8f7b12b61b460f1b74725c819a6d55583cf25402857de->leave($__internal_5f10997e981acc5cb0d8f7b12b61b460f1b74725c819a6d55583cf25402857de_prof);

    }

    // line 8
    public function block_lljm_admin_body($context, array $blocks = array())
    {
        $__internal_a2c0e61355e89fc45f3d54dd03afa66dab305a9d3c4cc51a5647c0908672dbe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2c0e61355e89fc45f3d54dd03afa66dab305a9d3c4cc51a5647c0908672dbe5->enter($__internal_a2c0e61355e89fc45f3d54dd03afa66dab305a9d3c4cc51a5647c0908672dbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_admin_body"));

        $__internal_afb58926d3e72904620c65e5804c9d09a99a2767db28fa63f68f6034fdaee568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afb58926d3e72904620c65e5804c9d09a99a2767db28fa63f68f6034fdaee568->enter($__internal_afb58926d3e72904620c65e5804c9d09a99a2767db28fa63f68f6034fdaee568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lljm_admin_body"));

        // line 9
        echo "
  <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete a user"), "html", null, true);
        echo "</h2>

  <p>
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Confirm you want to delete user"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 13, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "
  </p>

  <form action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_userdel", array("username" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 16, $this->getSourceContext()); })()), "username", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user");
        echo "\" class=\"btn btn-default glyphicon glyphicon-chevron-left\">
      Back
    </a>
    <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger\" />
    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), 'rest');
        echo "
  </form>

";
        
        $__internal_afb58926d3e72904620c65e5804c9d09a99a2767db28fa63f68f6034fdaee568->leave($__internal_afb58926d3e72904620c65e5804c9d09a99a2767db28fa63f68f6034fdaee568_prof);

        
        $__internal_a2c0e61355e89fc45f3d54dd03afa66dab305a9d3c4cc51a5647c0908672dbe5->leave($__internal_a2c0e61355e89fc45f3d54dd03afa66dab305a9d3c4cc51a5647c0908672dbe5_prof);

    }

    public function getTemplateName()
    {
        return "LljmAdminBundle:User:userdel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 21,  93 => 17,  89 => 16,  81 => 13,  75 => 10,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"LljmAdminBundle::layout.html.twig\" %}

{% block title %}
  Delete user - {{ parent() }}
{% endblock %}

{% block lljm_admin_body %}

  <h2>{{ 'Delete a user' | trans }}</h2>

  <p>
    {{ 'Confirm you want to delete user' | trans }} : {{ user.username }}
  </p>

  <form action=\"{{ path('admin_userdel', {'username': user.username}) }}\" method=\"post\">
    <a href=\"{{ path('admin_user')}}\" class=\"btn btn-default glyphicon glyphicon-chevron-left\">
      Back
    </a>
    <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger\" />
    {{ form_rest(form) }}
  </form>

{% endblock %}", "LljmAdminBundle:User:userdel.html.twig", "/home/lljm/web_symfony3/web/src/Lljm/AdminBundle/Resources/views/User/userdel.html.twig");
    }
}
