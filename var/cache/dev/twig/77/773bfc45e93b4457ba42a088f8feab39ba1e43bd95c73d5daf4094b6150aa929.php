<?php

/* LljmAdminBundle:User:usereditform.html.twig */
class __TwigTemplate_26e6fdb7b38450175fcb22d5e3d8c2f45765ac68661c9a9a4d7828202a81f62d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d996960a26193244904709cfcdf9aa7da45fd1928003802bc8c34a2cb738651 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d996960a26193244904709cfcdf9aa7da45fd1928003802bc8c34a2cb738651->enter($__internal_9d996960a26193244904709cfcdf9aa7da45fd1928003802bc8c34a2cb738651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmAdminBundle:User:usereditform.html.twig"));

        $__internal_bb68522fd2f04abb2326846dcfb9b05f3f2b055ae390d99ac863d041b9eece38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb68522fd2f04abb2326846dcfb9b05f3f2b055ae390d99ac863d041b9eece38->enter($__internal_bb68522fd2f04abb2326846dcfb9b05f3f2b055ae390d99ac863d041b9eece38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmAdminBundle:User:usereditform.html.twig"));

        // line 1
        echo "<div>

<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_useredit", array("username" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 3, $this->getSourceContext()); })()), "username", array()))), "html", null, true);
        echo "\" method=\"post\">

";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'errors');
        echo "

<div class=\"input-group\">
\t<div class=\"form-group\">
\t  ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "username", array()), 'label', array("label" => "User name"));
        echo "
\t  ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), 'errors');
        echo "
\t  ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "username", array()), 'widget');
        echo "
\t</div>
\t<div class=\"form-group\">
\t  ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "firstname", array()), 'label', array("label" => "First name"));
        echo "
\t  ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "firstname", array()), 'errors');
        echo "
\t  ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "firstname", array()), 'widget');
        echo "
\t</div>
\t<div class=\"form-group\">
\t  ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), "lastname", array()), 'label', array("label" => "Last name"));
        echo "
\t  ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), "lastname", array()), 'errors');
        echo "
\t  ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "lastname", array()), 'widget');
        echo "
\t</div>
\t<div class=\"form-group\">
\t  ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), "email", array()), 'label', array("label" => "Email"));
        echo "
\t  ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "email", array()), 'errors');
        echo "
\t  ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), "email", array()), 'widget');
        echo "
\t</div>
\t<div class=\"form-group\">
\t  ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), "password", array()), 'label', array("label" => "Password"));
        echo "
\t  ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), "password", array()), 'errors');
        echo "
\t  ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), "password", array()), 'widget');
        echo "
\t</div>
\t<div class=\"form-group\">
\t  ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "enabled", array()), 'label', array("label" => "Enabled"));
        echo "
\t  ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), "enabled", array()), 'errors');
        echo "
\t  ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), "enabled", array()), 'widget');
        echo "
\t</div>
\t<div class=\"form-group\">
\t  ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), "roles", array()), 'label', array("label" => "Roles"));
        echo "
\t  ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), "roles", array()), 'errors');
        echo "
\t  ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->getSourceContext()); })()), "roles", array()), 'widget');
        echo "
\t</div>
\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), 'rest');
        echo "

\t<div>
\t  <input type=\"submit\" class=\"btn btn-primary\" />
\t</div>
</div>

</form>
</div>
";
        
        $__internal_9d996960a26193244904709cfcdf9aa7da45fd1928003802bc8c34a2cb738651->leave($__internal_9d996960a26193244904709cfcdf9aa7da45fd1928003802bc8c34a2cb738651_prof);

        
        $__internal_bb68522fd2f04abb2326846dcfb9b05f3f2b055ae390d99ac863d041b9eece38->leave($__internal_bb68522fd2f04abb2326846dcfb9b05f3f2b055ae390d99ac863d041b9eece38_prof);

    }

    public function getTemplateName()
    {
        return "LljmAdminBundle:User:usereditform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 43,  133 => 41,  129 => 40,  125 => 39,  119 => 36,  115 => 35,  111 => 34,  105 => 31,  101 => 30,  97 => 29,  91 => 26,  87 => 25,  83 => 24,  77 => 21,  73 => 20,  69 => 19,  63 => 16,  59 => 15,  55 => 14,  49 => 11,  45 => 10,  41 => 9,  34 => 5,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>

<form action=\"{{ path('admin_useredit', {'username': user.username}) }}\" method=\"post\">

{{ form_errors(form) }}

<div class=\"input-group\">
\t<div class=\"form-group\">
\t  {{ form_label(form.username, \"User name\") }}
\t  {{ form_errors(form.username) }}
\t  {{ form_widget(form.username) }}
\t</div>
\t<div class=\"form-group\">
\t  {{ form_label(form.firstname, \"First name\") }}
\t  {{ form_errors(form.firstname) }}
\t  {{ form_widget(form.firstname) }}
\t</div>
\t<div class=\"form-group\">
\t  {{ form_label(form.lastname, \"Last name\") }}
\t  {{ form_errors(form.lastname) }}
\t  {{ form_widget(form.lastname) }}
\t</div>
\t<div class=\"form-group\">
\t  {{ form_label(form.email, \"Email\") }}
\t  {{ form_errors(form.email) }}
\t  {{ form_widget(form.email) }}
\t</div>
\t<div class=\"form-group\">
\t  {{ form_label(form.password, \"Password\") }}
\t  {{ form_errors(form.password) }}
\t  {{ form_widget(form.password) }}
\t</div>
\t<div class=\"form-group\">
\t  {{ form_label(form.enabled, \"Enabled\") }}
\t  {{ form_errors(form.enabled) }}
\t  {{ form_widget(form.enabled) }}
\t</div>
\t<div class=\"form-group\">
\t  {{ form_label(form.roles, \"Roles\") }}
\t  {{ form_errors(form.roles) }}
\t  {{ form_widget(form.roles) }}
\t</div>
\t{{ form_rest(form) }}

\t<div>
\t  <input type=\"submit\" class=\"btn btn-primary\" />
\t</div>
</div>

</form>
</div>
", "LljmAdminBundle:User:usereditform.html.twig", "/home/lljm/web/src/Lljm/AdminBundle/Resources/views/User/usereditform.html.twig");
    }
}
