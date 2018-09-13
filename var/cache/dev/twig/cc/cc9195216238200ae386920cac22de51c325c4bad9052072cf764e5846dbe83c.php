<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a516d889bcf19d29ace9aad618dc121b702e6e4399c7fcd022875e20fef6ea35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6cc7c44afaa9625518570e9d420472c82e13a192231fd6af2ccfec996ae109fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cc7c44afaa9625518570e9d420472c82e13a192231fd6af2ccfec996ae109fa->enter($__internal_6cc7c44afaa9625518570e9d420472c82e13a192231fd6af2ccfec996ae109fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_988c315864e1d36483d6d4e8b4f12cea329e6a06e8c998889bcfe9428c00f892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_988c315864e1d36483d6d4e8b4f12cea329e6a06e8c998889bcfe9428c00f892->enter($__internal_988c315864e1d36483d6d4e8b4f12cea329e6a06e8c998889bcfe9428c00f892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cc7c44afaa9625518570e9d420472c82e13a192231fd6af2ccfec996ae109fa->leave($__internal_6cc7c44afaa9625518570e9d420472c82e13a192231fd6af2ccfec996ae109fa_prof);

        
        $__internal_988c315864e1d36483d6d4e8b4f12cea329e6a06e8c998889bcfe9428c00f892->leave($__internal_988c315864e1d36483d6d4e8b4f12cea329e6a06e8c998889bcfe9428c00f892_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8be2c02ab83886c00c2d8ee996ede30e9d6cfbd908eff355376e665cd0118dae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8be2c02ab83886c00c2d8ee996ede30e9d6cfbd908eff355376e665cd0118dae->enter($__internal_8be2c02ab83886c00c2d8ee996ede30e9d6cfbd908eff355376e665cd0118dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f7e5ebe2d7a40787e0dd5b3fea9412c6412f906f5c1501ebf7662aba301d8cef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e5ebe2d7a40787e0dd5b3fea9412c6412f906f5c1501ebf7662aba301d8cef->enter($__internal_f7e5ebe2d7a40787e0dd5b3fea9412c6412f906f5c1501ebf7662aba301d8cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_f7e5ebe2d7a40787e0dd5b3fea9412c6412f906f5c1501ebf7662aba301d8cef->leave($__internal_f7e5ebe2d7a40787e0dd5b3fea9412c6412f906f5c1501ebf7662aba301d8cef_prof);

        
        $__internal_8be2c02ab83886c00c2d8ee996ede30e9d6cfbd908eff355376e665cd0118dae->leave($__internal_8be2c02ab83886c00c2d8ee996ede30e9d6cfbd908eff355376e665cd0118dae_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_dff38893027ea03123308968372ea4766ed1cb4b91add4aef4d1a5dd40130556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dff38893027ea03123308968372ea4766ed1cb4b91add4aef4d1a5dd40130556->enter($__internal_dff38893027ea03123308968372ea4766ed1cb4b91add4aef4d1a5dd40130556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aaacf65197f9e3bb3846e9bbd645087f61c3d02de4728a2a057e4b0a0ef1468d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaacf65197f9e3bb3846e9bbd645087f61c3d02de4728a2a057e4b0a0ef1468d->enter($__internal_aaacf65197f9e3bb3846e9bbd645087f61c3d02de4728a2a057e4b0a0ef1468d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_aaacf65197f9e3bb3846e9bbd645087f61c3d02de4728a2a057e4b0a0ef1468d->leave($__internal_aaacf65197f9e3bb3846e9bbd645087f61c3d02de4728a2a057e4b0a0ef1468d_prof);

        
        $__internal_dff38893027ea03123308968372ea4766ed1cb4b91add4aef4d1a5dd40130556->leave($__internal_dff38893027ea03123308968372ea4766ed1cb4b91add4aef4d1a5dd40130556_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_570e3fd2941bd1eb7252818b029985ea248bc46e25822776fbdd14f0333b1109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_570e3fd2941bd1eb7252818b029985ea248bc46e25822776fbdd14f0333b1109->enter($__internal_570e3fd2941bd1eb7252818b029985ea248bc46e25822776fbdd14f0333b1109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8a7d56ec399af7765abf9632f5f39e233a93c8c1144f02334d59c51001026e8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a7d56ec399af7765abf9632f5f39e233a93c8c1144f02334d59c51001026e8b->enter($__internal_8a7d56ec399af7765abf9632f5f39e233a93c8c1144f02334d59c51001026e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_8a7d56ec399af7765abf9632f5f39e233a93c8c1144f02334d59c51001026e8b->leave($__internal_8a7d56ec399af7765abf9632f5f39e233a93c8c1144f02334d59c51001026e8b_prof);

        
        $__internal_570e3fd2941bd1eb7252818b029985ea248bc46e25822776fbdd14f0333b1109->leave($__internal_570e3fd2941bd1eb7252818b029985ea248bc46e25822776fbdd14f0333b1109_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/lljm/web/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
