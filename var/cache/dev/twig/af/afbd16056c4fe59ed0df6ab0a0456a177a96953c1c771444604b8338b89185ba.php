<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_22ef5ffb85546d7fc4ab173c3f95b4428e280c4343d0cc0f3d6f3618c1cce76d extends Twig_Template
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
        $__internal_964551c218b9f918743f7c6b0ef8175d6e25dadc2169ba6c41df9f69b75c7cb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_964551c218b9f918743f7c6b0ef8175d6e25dadc2169ba6c41df9f69b75c7cb4->enter($__internal_964551c218b9f918743f7c6b0ef8175d6e25dadc2169ba6c41df9f69b75c7cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_94e74f559e621401aca3a267b4aed5d373d11c096171e2a47465ab38b13bb1de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e74f559e621401aca3a267b4aed5d373d11c096171e2a47465ab38b13bb1de->enter($__internal_94e74f559e621401aca3a267b4aed5d373d11c096171e2a47465ab38b13bb1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_964551c218b9f918743f7c6b0ef8175d6e25dadc2169ba6c41df9f69b75c7cb4->leave($__internal_964551c218b9f918743f7c6b0ef8175d6e25dadc2169ba6c41df9f69b75c7cb4_prof);

        
        $__internal_94e74f559e621401aca3a267b4aed5d373d11c096171e2a47465ab38b13bb1de->leave($__internal_94e74f559e621401aca3a267b4aed5d373d11c096171e2a47465ab38b13bb1de_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c1260504c924f7d3c3fb992a72bc883d55a963767267faa96faa1c7892b74edc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1260504c924f7d3c3fb992a72bc883d55a963767267faa96faa1c7892b74edc->enter($__internal_c1260504c924f7d3c3fb992a72bc883d55a963767267faa96faa1c7892b74edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1281af539886f11d48038a14a2bc7043141b141e41ae7504da726cc97e890b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1281af539886f11d48038a14a2bc7043141b141e41ae7504da726cc97e890b17->enter($__internal_1281af539886f11d48038a14a2bc7043141b141e41ae7504da726cc97e890b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1281af539886f11d48038a14a2bc7043141b141e41ae7504da726cc97e890b17->leave($__internal_1281af539886f11d48038a14a2bc7043141b141e41ae7504da726cc97e890b17_prof);

        
        $__internal_c1260504c924f7d3c3fb992a72bc883d55a963767267faa96faa1c7892b74edc->leave($__internal_c1260504c924f7d3c3fb992a72bc883d55a963767267faa96faa1c7892b74edc_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_dde8df6f7fb28739d10a8b1dfe7d55786c4f8354d121d73eeb23da214dbe7c85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dde8df6f7fb28739d10a8b1dfe7d55786c4f8354d121d73eeb23da214dbe7c85->enter($__internal_dde8df6f7fb28739d10a8b1dfe7d55786c4f8354d121d73eeb23da214dbe7c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f8f77f2db08fd6857a51dc7cc8a3a4cb5f6b7b98e731f99e4bc90ef896a6f608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8f77f2db08fd6857a51dc7cc8a3a4cb5f6b7b98e731f99e4bc90ef896a6f608->enter($__internal_f8f77f2db08fd6857a51dc7cc8a3a4cb5f6b7b98e731f99e4bc90ef896a6f608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_f8f77f2db08fd6857a51dc7cc8a3a4cb5f6b7b98e731f99e4bc90ef896a6f608->leave($__internal_f8f77f2db08fd6857a51dc7cc8a3a4cb5f6b7b98e731f99e4bc90ef896a6f608_prof);

        
        $__internal_dde8df6f7fb28739d10a8b1dfe7d55786c4f8354d121d73eeb23da214dbe7c85->leave($__internal_dde8df6f7fb28739d10a8b1dfe7d55786c4f8354d121d73eeb23da214dbe7c85_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab2eb4691d46bf1210eeba1298c144a5715f89dd33e078a2a284d4ec0cc6c38e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab2eb4691d46bf1210eeba1298c144a5715f89dd33e078a2a284d4ec0cc6c38e->enter($__internal_ab2eb4691d46bf1210eeba1298c144a5715f89dd33e078a2a284d4ec0cc6c38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d0a8b3c393ae859edd25860faa35dfb62a41fb243674c7c81066e9ff3d3810eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a8b3c393ae859edd25860faa35dfb62a41fb243674c7c81066e9ff3d3810eb->enter($__internal_d0a8b3c393ae859edd25860faa35dfb62a41fb243674c7c81066e9ff3d3810eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d0a8b3c393ae859edd25860faa35dfb62a41fb243674c7c81066e9ff3d3810eb->leave($__internal_d0a8b3c393ae859edd25860faa35dfb62a41fb243674c7c81066e9ff3d3810eb_prof);

        
        $__internal_ab2eb4691d46bf1210eeba1298c144a5715f89dd33e078a2a284d4ec0cc6c38e->leave($__internal_ab2eb4691d46bf1210eeba1298c144a5715f89dd33e078a2a284d4ec0cc6c38e_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/lljm/web_symfony3/web/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
