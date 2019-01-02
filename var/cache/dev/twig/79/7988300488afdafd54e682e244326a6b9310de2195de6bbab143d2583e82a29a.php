<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a99f106a4276e7a07c3b3d62a4660a7a1d578f0875742fb683ba405525c95390 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0bec1a618966158ae90e0cbdd0768f70d0d1a84d99e18137e724b9015f8aa296 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bec1a618966158ae90e0cbdd0768f70d0d1a84d99e18137e724b9015f8aa296->enter($__internal_0bec1a618966158ae90e0cbdd0768f70d0d1a84d99e18137e724b9015f8aa296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e80cf633a52da3a3c9ee7bf433f46fc2b4e96ed47730a193c7f7ebbba7bd1c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e80cf633a52da3a3c9ee7bf433f46fc2b4e96ed47730a193c7f7ebbba7bd1c5f->enter($__internal_e80cf633a52da3a3c9ee7bf433f46fc2b4e96ed47730a193c7f7ebbba7bd1c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bec1a618966158ae90e0cbdd0768f70d0d1a84d99e18137e724b9015f8aa296->leave($__internal_0bec1a618966158ae90e0cbdd0768f70d0d1a84d99e18137e724b9015f8aa296_prof);

        
        $__internal_e80cf633a52da3a3c9ee7bf433f46fc2b4e96ed47730a193c7f7ebbba7bd1c5f->leave($__internal_e80cf633a52da3a3c9ee7bf433f46fc2b4e96ed47730a193c7f7ebbba7bd1c5f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_86ebcbf587966cee65fb18ed72993ef1f8139faa1fbca8c68ccb677b16fa39c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86ebcbf587966cee65fb18ed72993ef1f8139faa1fbca8c68ccb677b16fa39c2->enter($__internal_86ebcbf587966cee65fb18ed72993ef1f8139faa1fbca8c68ccb677b16fa39c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8bb53bb19ec91bd90b096bacfa34348ce3435ad144370cf4a7ebd7cb522c6da0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb53bb19ec91bd90b096bacfa34348ce3435ad144370cf4a7ebd7cb522c6da0->enter($__internal_8bb53bb19ec91bd90b096bacfa34348ce3435ad144370cf4a7ebd7cb522c6da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8bb53bb19ec91bd90b096bacfa34348ce3435ad144370cf4a7ebd7cb522c6da0->leave($__internal_8bb53bb19ec91bd90b096bacfa34348ce3435ad144370cf4a7ebd7cb522c6da0_prof);

        
        $__internal_86ebcbf587966cee65fb18ed72993ef1f8139faa1fbca8c68ccb677b16fa39c2->leave($__internal_86ebcbf587966cee65fb18ed72993ef1f8139faa1fbca8c68ccb677b16fa39c2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3e0ef5b09960710abc01644b1109bfba7c1e06b35d4d1cd9e1b1fba16bb96d18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e0ef5b09960710abc01644b1109bfba7c1e06b35d4d1cd9e1b1fba16bb96d18->enter($__internal_3e0ef5b09960710abc01644b1109bfba7c1e06b35d4d1cd9e1b1fba16bb96d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d63a87aed9ef16227cd4817a7e82316daaac763dac994db51935dcb9b493ec7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d63a87aed9ef16227cd4817a7e82316daaac763dac994db51935dcb9b493ec7f->enter($__internal_d63a87aed9ef16227cd4817a7e82316daaac763dac994db51935dcb9b493ec7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d63a87aed9ef16227cd4817a7e82316daaac763dac994db51935dcb9b493ec7f->leave($__internal_d63a87aed9ef16227cd4817a7e82316daaac763dac994db51935dcb9b493ec7f_prof);

        
        $__internal_3e0ef5b09960710abc01644b1109bfba7c1e06b35d4d1cd9e1b1fba16bb96d18->leave($__internal_3e0ef5b09960710abc01644b1109bfba7c1e06b35d4d1cd9e1b1fba16bb96d18_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_178733a3c1bf02379a7e5c25132ae4cb313b5e3fd980fcd249cbebb58cdf5a62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_178733a3c1bf02379a7e5c25132ae4cb313b5e3fd980fcd249cbebb58cdf5a62->enter($__internal_178733a3c1bf02379a7e5c25132ae4cb313b5e3fd980fcd249cbebb58cdf5a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f3603520f34d98bcbcb8c54fee80d147af58c35b3abe30fb0632b4b685dfa95d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3603520f34d98bcbcb8c54fee80d147af58c35b3abe30fb0632b4b685dfa95d->enter($__internal_f3603520f34d98bcbcb8c54fee80d147af58c35b3abe30fb0632b4b685dfa95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_f3603520f34d98bcbcb8c54fee80d147af58c35b3abe30fb0632b4b685dfa95d->leave($__internal_f3603520f34d98bcbcb8c54fee80d147af58c35b3abe30fb0632b4b685dfa95d_prof);

        
        $__internal_178733a3c1bf02379a7e5c25132ae4cb313b5e3fd980fcd249cbebb58cdf5a62->leave($__internal_178733a3c1bf02379a7e5c25132ae4cb313b5e3fd980fcd249cbebb58cdf5a62_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/lljm/web/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
