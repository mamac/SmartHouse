<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0b8a23b4fb6eba00e4be70d0c309ab2df869d62b2f19a986d7d23e801f28e912 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_b8d7fd55f0e4906a88d52ede59abc8f1402891a773f85cca75caf303013338b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8d7fd55f0e4906a88d52ede59abc8f1402891a773f85cca75caf303013338b1->enter($__internal_b8d7fd55f0e4906a88d52ede59abc8f1402891a773f85cca75caf303013338b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ec1fff27c09c47ca44eed447cd5f6e15fa54031816035ca1d4e66c559091188d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec1fff27c09c47ca44eed447cd5f6e15fa54031816035ca1d4e66c559091188d->enter($__internal_ec1fff27c09c47ca44eed447cd5f6e15fa54031816035ca1d4e66c559091188d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8d7fd55f0e4906a88d52ede59abc8f1402891a773f85cca75caf303013338b1->leave($__internal_b8d7fd55f0e4906a88d52ede59abc8f1402891a773f85cca75caf303013338b1_prof);

        
        $__internal_ec1fff27c09c47ca44eed447cd5f6e15fa54031816035ca1d4e66c559091188d->leave($__internal_ec1fff27c09c47ca44eed447cd5f6e15fa54031816035ca1d4e66c559091188d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_00da694c7a215390890c9d456e03a36b7e52706628ac48a1a4dd261787d6122d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00da694c7a215390890c9d456e03a36b7e52706628ac48a1a4dd261787d6122d->enter($__internal_00da694c7a215390890c9d456e03a36b7e52706628ac48a1a4dd261787d6122d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b4ed859615b5ce355c91b431ecbce91c1a5e0606c0945ac492c55718af8b0908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ed859615b5ce355c91b431ecbce91c1a5e0606c0945ac492c55718af8b0908->enter($__internal_b4ed859615b5ce355c91b431ecbce91c1a5e0606c0945ac492c55718af8b0908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b4ed859615b5ce355c91b431ecbce91c1a5e0606c0945ac492c55718af8b0908->leave($__internal_b4ed859615b5ce355c91b431ecbce91c1a5e0606c0945ac492c55718af8b0908_prof);

        
        $__internal_00da694c7a215390890c9d456e03a36b7e52706628ac48a1a4dd261787d6122d->leave($__internal_00da694c7a215390890c9d456e03a36b7e52706628ac48a1a4dd261787d6122d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_afe47d65602e6d2a83989ae6625d4bdc2167ae0aef2a3677ce473b14223b585e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afe47d65602e6d2a83989ae6625d4bdc2167ae0aef2a3677ce473b14223b585e->enter($__internal_afe47d65602e6d2a83989ae6625d4bdc2167ae0aef2a3677ce473b14223b585e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9707d15a3ac4d537c74d79e3c20fa69fe7e4cbaa4b64ae3baf41197961a0b6cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9707d15a3ac4d537c74d79e3c20fa69fe7e4cbaa4b64ae3baf41197961a0b6cc->enter($__internal_9707d15a3ac4d537c74d79e3c20fa69fe7e4cbaa4b64ae3baf41197961a0b6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9707d15a3ac4d537c74d79e3c20fa69fe7e4cbaa4b64ae3baf41197961a0b6cc->leave($__internal_9707d15a3ac4d537c74d79e3c20fa69fe7e4cbaa4b64ae3baf41197961a0b6cc_prof);

        
        $__internal_afe47d65602e6d2a83989ae6625d4bdc2167ae0aef2a3677ce473b14223b585e->leave($__internal_afe47d65602e6d2a83989ae6625d4bdc2167ae0aef2a3677ce473b14223b585e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_29ec5199c74ed7a02defb9f77441fe6f858108205df6ebf6c0c385fbe167ee23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29ec5199c74ed7a02defb9f77441fe6f858108205df6ebf6c0c385fbe167ee23->enter($__internal_29ec5199c74ed7a02defb9f77441fe6f858108205df6ebf6c0c385fbe167ee23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a0569077b79d7b83ede3c7d76bca3cdc503a3ce27cd963ab45c86d352b87456c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0569077b79d7b83ede3c7d76bca3cdc503a3ce27cd963ab45c86d352b87456c->enter($__internal_a0569077b79d7b83ede3c7d76bca3cdc503a3ce27cd963ab45c86d352b87456c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_a0569077b79d7b83ede3c7d76bca3cdc503a3ce27cd963ab45c86d352b87456c->leave($__internal_a0569077b79d7b83ede3c7d76bca3cdc503a3ce27cd963ab45c86d352b87456c_prof);

        
        $__internal_29ec5199c74ed7a02defb9f77441fe6f858108205df6ebf6c0c385fbe167ee23->leave($__internal_29ec5199c74ed7a02defb9f77441fe6f858108205df6ebf6c0c385fbe167ee23_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/lljm/web_symfony3/web/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
