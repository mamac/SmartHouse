<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8ad5036a0e7aaa2942d6fae9744f8bf0089408c73c5bfd44dd45c068bfc53b8a extends Twig_Template
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
        $__internal_ba8883eb3023df25f99675e0a1e6c7b7112e4ad12d6bdaf23053342a863b5a50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba8883eb3023df25f99675e0a1e6c7b7112e4ad12d6bdaf23053342a863b5a50->enter($__internal_ba8883eb3023df25f99675e0a1e6c7b7112e4ad12d6bdaf23053342a863b5a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d7651b2011f723cf01e88c3f65ddabb5f0e55e8cb9ac726657ba96316ba92835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7651b2011f723cf01e88c3f65ddabb5f0e55e8cb9ac726657ba96316ba92835->enter($__internal_d7651b2011f723cf01e88c3f65ddabb5f0e55e8cb9ac726657ba96316ba92835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba8883eb3023df25f99675e0a1e6c7b7112e4ad12d6bdaf23053342a863b5a50->leave($__internal_ba8883eb3023df25f99675e0a1e6c7b7112e4ad12d6bdaf23053342a863b5a50_prof);

        
        $__internal_d7651b2011f723cf01e88c3f65ddabb5f0e55e8cb9ac726657ba96316ba92835->leave($__internal_d7651b2011f723cf01e88c3f65ddabb5f0e55e8cb9ac726657ba96316ba92835_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1f14d83f695ad3681ca6074c70ee34bc96a56333e623210d4c2d6b4ab8347e66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f14d83f695ad3681ca6074c70ee34bc96a56333e623210d4c2d6b4ab8347e66->enter($__internal_1f14d83f695ad3681ca6074c70ee34bc96a56333e623210d4c2d6b4ab8347e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_befdabe9057ed4d775ef1a16b4f730ec6d3d2d4821ea91856dc9b3d59ef68002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_befdabe9057ed4d775ef1a16b4f730ec6d3d2d4821ea91856dc9b3d59ef68002->enter($__internal_befdabe9057ed4d775ef1a16b4f730ec6d3d2d4821ea91856dc9b3d59ef68002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_befdabe9057ed4d775ef1a16b4f730ec6d3d2d4821ea91856dc9b3d59ef68002->leave($__internal_befdabe9057ed4d775ef1a16b4f730ec6d3d2d4821ea91856dc9b3d59ef68002_prof);

        
        $__internal_1f14d83f695ad3681ca6074c70ee34bc96a56333e623210d4c2d6b4ab8347e66->leave($__internal_1f14d83f695ad3681ca6074c70ee34bc96a56333e623210d4c2d6b4ab8347e66_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d07b59d825926d222cf30c60e0ceff2837a8d0ce1de94fe005266da449082347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d07b59d825926d222cf30c60e0ceff2837a8d0ce1de94fe005266da449082347->enter($__internal_d07b59d825926d222cf30c60e0ceff2837a8d0ce1de94fe005266da449082347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d3fd4e5505e592b615ad3c02939067b1dfbe35c72904b1fed0123c66cce741a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3fd4e5505e592b615ad3c02939067b1dfbe35c72904b1fed0123c66cce741a3->enter($__internal_d3fd4e5505e592b615ad3c02939067b1dfbe35c72904b1fed0123c66cce741a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d3fd4e5505e592b615ad3c02939067b1dfbe35c72904b1fed0123c66cce741a3->leave($__internal_d3fd4e5505e592b615ad3c02939067b1dfbe35c72904b1fed0123c66cce741a3_prof);

        
        $__internal_d07b59d825926d222cf30c60e0ceff2837a8d0ce1de94fe005266da449082347->leave($__internal_d07b59d825926d222cf30c60e0ceff2837a8d0ce1de94fe005266da449082347_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bdb005580397f806060980de08bfa80232757c5628fa8854c21324387a7817b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdb005580397f806060980de08bfa80232757c5628fa8854c21324387a7817b2->enter($__internal_bdb005580397f806060980de08bfa80232757c5628fa8854c21324387a7817b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_117dd39ea279f7d985635526381458fc5af610747e2b71b2ecd20ccd90615520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_117dd39ea279f7d985635526381458fc5af610747e2b71b2ecd20ccd90615520->enter($__internal_117dd39ea279f7d985635526381458fc5af610747e2b71b2ecd20ccd90615520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_117dd39ea279f7d985635526381458fc5af610747e2b71b2ecd20ccd90615520->leave($__internal_117dd39ea279f7d985635526381458fc5af610747e2b71b2ecd20ccd90615520_prof);

        
        $__internal_bdb005580397f806060980de08bfa80232757c5628fa8854c21324387a7817b2->leave($__internal_bdb005580397f806060980de08bfa80232757c5628fa8854c21324387a7817b2_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/lljm/web/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
