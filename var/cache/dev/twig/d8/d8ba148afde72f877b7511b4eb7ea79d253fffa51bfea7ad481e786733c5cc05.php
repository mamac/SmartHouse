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
        $__internal_692327a1a16d618ef4cbb4f8bfca0c36343d92d4b24ff46efbb57fd41eb6a1d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_692327a1a16d618ef4cbb4f8bfca0c36343d92d4b24ff46efbb57fd41eb6a1d4->enter($__internal_692327a1a16d618ef4cbb4f8bfca0c36343d92d4b24ff46efbb57fd41eb6a1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_031447e89ef6f368b6f78835236774100812f76880d35e870e777e781015eb2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_031447e89ef6f368b6f78835236774100812f76880d35e870e777e781015eb2a->enter($__internal_031447e89ef6f368b6f78835236774100812f76880d35e870e777e781015eb2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_692327a1a16d618ef4cbb4f8bfca0c36343d92d4b24ff46efbb57fd41eb6a1d4->leave($__internal_692327a1a16d618ef4cbb4f8bfca0c36343d92d4b24ff46efbb57fd41eb6a1d4_prof);

        
        $__internal_031447e89ef6f368b6f78835236774100812f76880d35e870e777e781015eb2a->leave($__internal_031447e89ef6f368b6f78835236774100812f76880d35e870e777e781015eb2a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6e80d1edbd6294fea95d31e8277707ee81289ca4bfaa8f254ee92e901ffcb12e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e80d1edbd6294fea95d31e8277707ee81289ca4bfaa8f254ee92e901ffcb12e->enter($__internal_6e80d1edbd6294fea95d31e8277707ee81289ca4bfaa8f254ee92e901ffcb12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_62d71916a316f37927f3c9b0b572cbe8403983114623aa0624a5dbf10b373466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62d71916a316f37927f3c9b0b572cbe8403983114623aa0624a5dbf10b373466->enter($__internal_62d71916a316f37927f3c9b0b572cbe8403983114623aa0624a5dbf10b373466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_62d71916a316f37927f3c9b0b572cbe8403983114623aa0624a5dbf10b373466->leave($__internal_62d71916a316f37927f3c9b0b572cbe8403983114623aa0624a5dbf10b373466_prof);

        
        $__internal_6e80d1edbd6294fea95d31e8277707ee81289ca4bfaa8f254ee92e901ffcb12e->leave($__internal_6e80d1edbd6294fea95d31e8277707ee81289ca4bfaa8f254ee92e901ffcb12e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_15fe1596bc4919fda08815cfbb673a5cb99abb409e3bb1b70abb0c981085d1b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15fe1596bc4919fda08815cfbb673a5cb99abb409e3bb1b70abb0c981085d1b2->enter($__internal_15fe1596bc4919fda08815cfbb673a5cb99abb409e3bb1b70abb0c981085d1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1af1f99ef87e81561337dac996e0d33648e07f6cd99b006da90dd43e52d81c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1af1f99ef87e81561337dac996e0d33648e07f6cd99b006da90dd43e52d81c66->enter($__internal_1af1f99ef87e81561337dac996e0d33648e07f6cd99b006da90dd43e52d81c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_1af1f99ef87e81561337dac996e0d33648e07f6cd99b006da90dd43e52d81c66->leave($__internal_1af1f99ef87e81561337dac996e0d33648e07f6cd99b006da90dd43e52d81c66_prof);

        
        $__internal_15fe1596bc4919fda08815cfbb673a5cb99abb409e3bb1b70abb0c981085d1b2->leave($__internal_15fe1596bc4919fda08815cfbb673a5cb99abb409e3bb1b70abb0c981085d1b2_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c06a215e00735929018c90b99693be23d8d133eed5858bd9e37eb039409e1e49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c06a215e00735929018c90b99693be23d8d133eed5858bd9e37eb039409e1e49->enter($__internal_c06a215e00735929018c90b99693be23d8d133eed5858bd9e37eb039409e1e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_deb95231818ec8d40425af9f13dfb15478d19209eee85a77374e25b39615a419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deb95231818ec8d40425af9f13dfb15478d19209eee85a77374e25b39615a419->enter($__internal_deb95231818ec8d40425af9f13dfb15478d19209eee85a77374e25b39615a419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_deb95231818ec8d40425af9f13dfb15478d19209eee85a77374e25b39615a419->leave($__internal_deb95231818ec8d40425af9f13dfb15478d19209eee85a77374e25b39615a419_prof);

        
        $__internal_c06a215e00735929018c90b99693be23d8d133eed5858bd9e37eb039409e1e49->leave($__internal_c06a215e00735929018c90b99693be23d8d133eed5858bd9e37eb039409e1e49_prof);

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
