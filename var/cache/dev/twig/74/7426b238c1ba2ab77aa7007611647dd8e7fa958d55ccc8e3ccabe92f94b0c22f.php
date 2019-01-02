<?php

/* LljmAdminBundle:User:index.html.twig */
class __TwigTemplate_e545f1c24fbe1bab3d70dd48336e3ec153d8ae472468cc2664842d126fb9bf22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LljmAdminBundle::layout.html.twig", "LljmAdminBundle:User:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LljmAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ef0ec56272d3e47af675e3bec21ad0b681981c411499f8c18ece1a3c7bba89b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ef0ec56272d3e47af675e3bec21ad0b681981c411499f8c18ece1a3c7bba89b->enter($__internal_6ef0ec56272d3e47af675e3bec21ad0b681981c411499f8c18ece1a3c7bba89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmAdminBundle:User:index.html.twig"));

        $__internal_26a6a09ab335fa0fe800c0ec33a4dd04afbacf20b390d73b297cc0097619e8f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a6a09ab335fa0fe800c0ec33a4dd04afbacf20b390d73b297cc0097619e8f6->enter($__internal_26a6a09ab335fa0fe800c0ec33a4dd04afbacf20b390d73b297cc0097619e8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmAdminBundle:User:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ef0ec56272d3e47af675e3bec21ad0b681981c411499f8c18ece1a3c7bba89b->leave($__internal_6ef0ec56272d3e47af675e3bec21ad0b681981c411499f8c18ece1a3c7bba89b_prof);

        
        $__internal_26a6a09ab335fa0fe800c0ec33a4dd04afbacf20b390d73b297cc0097619e8f6->leave($__internal_26a6a09ab335fa0fe800c0ec33a4dd04afbacf20b390d73b297cc0097619e8f6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a75a1ca91cb6c2e9f196d9e0c986d9c8e0795aa4d3f2cfcd7343493cc0135119 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a75a1ca91cb6c2e9f196d9e0c986d9c8e0795aa4d3f2cfcd7343493cc0135119->enter($__internal_a75a1ca91cb6c2e9f196d9e0c986d9c8e0795aa4d3f2cfcd7343493cc0135119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e4386fc1aa06d18dadb4304e0205c25368b4655197283c2fcee405cae2c0db45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4386fc1aa06d18dadb4304e0205c25368b4655197283c2fcee405cae2c0db45->enter($__internal_e4386fc1aa06d18dadb4304e0205c25368b4655197283c2fcee405cae2c0db45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  <h2>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Users profiles administration"), "html", null, true);
        echo "</h2>

        <div>
          <a class=\"btn btn-default btn-sm glyphicon glyphicon-plus\" href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_useradd");
        echo "\">
            ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
        echo "
          </a>
        </div>

        <div>
          <div class=\"table-responsive\">
            <table class=\"table table-striped\">
              <thead>
                <tr>
                  <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID"), "html", null, true);
        echo "</th>
                  <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("User name"), "html", null, true);
        echo "</th>
                  <th>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email"), "html", null, true);
        echo "</th>
                  <th>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last login"), "html", null, true);
        echo "</th>
                  <th>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enabled"), "html", null, true);
        echo "</th>
                  <th>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Roles"), "html", null, true);
        echo "</th>
                  <th>&nbsp;</th>
                </tr>
              </thead>
              <tbody>
\t\t\t  ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 28, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 29
            echo "                <tr>
                  <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "username", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lastLogin", array())), "html", null, true);
            echo "</td>
                  <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "enabled", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "roles", array()), 0, array()), "html", null, true);
            echo "</td>
                  <td>
                    <a class=\"btn glyphicon glyphicon-pencil red\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_useredit", array("username" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "username", array()))), "html", null, true);
            echo "\">
                    <a class=\"btn glyphicon glyphicon-trash red \" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_userdel", array("username" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "username", array()))), "html", null, true);
            echo "\">

                  </td>
                </tr>
\t\t\t  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 43
            echo "\t\t\t    <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No record in this table"), "html", null, true);
            echo ".</p>
\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "              </tbody>
            </table>
          </div>
      </div>

";
        
        $__internal_e4386fc1aa06d18dadb4304e0205c25368b4655197283c2fcee405cae2c0db45->leave($__internal_e4386fc1aa06d18dadb4304e0205c25368b4655197283c2fcee405cae2c0db45_prof);

        
        $__internal_a75a1ca91cb6c2e9f196d9e0c986d9c8e0795aa4d3f2cfcd7343493cc0135119->leave($__internal_a75a1ca91cb6c2e9f196d9e0c986d9c8e0795aa4d3f2cfcd7343493cc0135119_prof);

    }

    public function getTemplateName()
    {
        return "LljmAdminBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 45,  149 => 43,  139 => 38,  135 => 37,  130 => 35,  126 => 34,  122 => 33,  118 => 32,  114 => 31,  110 => 30,  107 => 29,  102 => 28,  94 => 23,  90 => 22,  86 => 21,  82 => 20,  78 => 19,  74 => 18,  62 => 9,  58 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"LljmAdminBundle::layout.html.twig\" %}

{% block body %}

  <h2>{{ 'Users profiles administration' | trans }}</h2>

        <div>
          <a class=\"btn btn-default btn-sm glyphicon glyphicon-plus\" href=\"{{ path('admin_useradd') }}\">
            {{ 'Add' | trans }}
          </a>
        </div>

        <div>
          <div class=\"table-responsive\">
            <table class=\"table table-striped\">
              <thead>
                <tr>
                  <th>{{ 'ID' | trans }}</th>
                  <th>{{ 'User name' | trans }}</th>
                  <th>{{ 'Email' | trans }}</th>
                  <th>{{ 'Last login' | trans }}</th>
                  <th>{{ 'Enabled' | trans }}</th>
                  <th>{{ 'Roles' | trans }}</th>
                  <th>&nbsp;</th>
                </tr>
              </thead>
              <tbody>
\t\t\t  {% for user in users %}
                <tr>
                  <td>{{ user.id }}</td>
                  <td>{{ user.username }}</td>
                  <td>{{ user.email }}</td>
                  <td>{{ user.lastLogin | date}}</td>
                  <td>{{ user.enabled }}</td>
                  <td>{{ user.roles.0 }}</td>
                  <td>
                    <a class=\"btn glyphicon glyphicon-pencil red\" href=\"{{ path('admin_useredit', {'username': user.username}) }}\">
                    <a class=\"btn glyphicon glyphicon-trash red \" href=\"{{ path('admin_userdel', {'username': user.username}) }}\">

                  </td>
                </tr>
\t\t\t  {% else %}
\t\t\t    <p>{{ 'No record in this table' | trans }}.</p>
\t\t\t  {% endfor %}
              </tbody>
            </table>
          </div>
      </div>

{% endblock %}", "LljmAdminBundle:User:index.html.twig", "/home/lljm/web/src/Lljm/AdminBundle/Resources/views/User/index.html.twig");
    }
}
