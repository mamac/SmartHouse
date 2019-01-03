<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f68b24902c68b57dff0b62971ab153209ec8a86a8504461bf9a40c9456892f45 extends Twig_Template
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
        $__internal_9470bcc453898bada21179c610a974fe2825d111e07426b70139f55f47df49c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9470bcc453898bada21179c610a974fe2825d111e07426b70139f55f47df49c6->enter($__internal_9470bcc453898bada21179c610a974fe2825d111e07426b70139f55f47df49c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_75a7cc1a89f55aeede7dae6f8e0bd4a3f6b2951662ec8dcb217db52cdae8b4cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75a7cc1a89f55aeede7dae6f8e0bd4a3f6b2951662ec8dcb217db52cdae8b4cd->enter($__internal_75a7cc1a89f55aeede7dae6f8e0bd4a3f6b2951662ec8dcb217db52cdae8b4cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9470bcc453898bada21179c610a974fe2825d111e07426b70139f55f47df49c6->leave($__internal_9470bcc453898bada21179c610a974fe2825d111e07426b70139f55f47df49c6_prof);

        
        $__internal_75a7cc1a89f55aeede7dae6f8e0bd4a3f6b2951662ec8dcb217db52cdae8b4cd->leave($__internal_75a7cc1a89f55aeede7dae6f8e0bd4a3f6b2951662ec8dcb217db52cdae8b4cd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9815216f51e956fbd55a17fa5b92487ffeb421113311d8c491ffb4ea360e9a04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9815216f51e956fbd55a17fa5b92487ffeb421113311d8c491ffb4ea360e9a04->enter($__internal_9815216f51e956fbd55a17fa5b92487ffeb421113311d8c491ffb4ea360e9a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e527ac6764abd994f6ce00d3f0ef1ba45ea426b23cfb88be204ff8514add8bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e527ac6764abd994f6ce00d3f0ef1ba45ea426b23cfb88be204ff8514add8bf3->enter($__internal_e527ac6764abd994f6ce00d3f0ef1ba45ea426b23cfb88be204ff8514add8bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e527ac6764abd994f6ce00d3f0ef1ba45ea426b23cfb88be204ff8514add8bf3->leave($__internal_e527ac6764abd994f6ce00d3f0ef1ba45ea426b23cfb88be204ff8514add8bf3_prof);

        
        $__internal_9815216f51e956fbd55a17fa5b92487ffeb421113311d8c491ffb4ea360e9a04->leave($__internal_9815216f51e956fbd55a17fa5b92487ffeb421113311d8c491ffb4ea360e9a04_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d97c37f56c62ea7d1d9b4ca27250b4958e9734647b932ae401f40c04857da422 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d97c37f56c62ea7d1d9b4ca27250b4958e9734647b932ae401f40c04857da422->enter($__internal_d97c37f56c62ea7d1d9b4ca27250b4958e9734647b932ae401f40c04857da422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_243496d850428ddbb7c0d6f2e6805b00da9d69954e8cb10cb11b45033df1e4d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_243496d850428ddbb7c0d6f2e6805b00da9d69954e8cb10cb11b45033df1e4d4->enter($__internal_243496d850428ddbb7c0d6f2e6805b00da9d69954e8cb10cb11b45033df1e4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_243496d850428ddbb7c0d6f2e6805b00da9d69954e8cb10cb11b45033df1e4d4->leave($__internal_243496d850428ddbb7c0d6f2e6805b00da9d69954e8cb10cb11b45033df1e4d4_prof);

        
        $__internal_d97c37f56c62ea7d1d9b4ca27250b4958e9734647b932ae401f40c04857da422->leave($__internal_d97c37f56c62ea7d1d9b4ca27250b4958e9734647b932ae401f40c04857da422_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cfe16f827ae7e1cc1d4e5b41cee0ffbb81b2fbd8e58165de0b6d49dba76870b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cfe16f827ae7e1cc1d4e5b41cee0ffbb81b2fbd8e58165de0b6d49dba76870b->enter($__internal_3cfe16f827ae7e1cc1d4e5b41cee0ffbb81b2fbd8e58165de0b6d49dba76870b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ae2afadcec891a027d1be53f1a6c4df77ec5baf1ac7e6c61e2f0e53a95fa13f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae2afadcec891a027d1be53f1a6c4df77ec5baf1ac7e6c61e2f0e53a95fa13f0->enter($__internal_ae2afadcec891a027d1be53f1a6c4df77ec5baf1ac7e6c61e2f0e53a95fa13f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ae2afadcec891a027d1be53f1a6c4df77ec5baf1ac7e6c61e2f0e53a95fa13f0->leave($__internal_ae2afadcec891a027d1be53f1a6c4df77ec5baf1ac7e6c61e2f0e53a95fa13f0_prof);

        
        $__internal_3cfe16f827ae7e1cc1d4e5b41cee0ffbb81b2fbd8e58165de0b6d49dba76870b->leave($__internal_3cfe16f827ae7e1cc1d4e5b41cee0ffbb81b2fbd8e58165de0b6d49dba76870b_prof);

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
