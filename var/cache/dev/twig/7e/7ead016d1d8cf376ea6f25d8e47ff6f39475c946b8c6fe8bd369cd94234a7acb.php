<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_47b8f89df6aef189c313e3eb10320a4a5e8af49d1af77110ad1d0bf5ce82451c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05b8da395369b2c0688a5bb0ef2abec49719ddd62a65de5d31fd407f31a63eb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05b8da395369b2c0688a5bb0ef2abec49719ddd62a65de5d31fd407f31a63eb2->enter($__internal_05b8da395369b2c0688a5bb0ef2abec49719ddd62a65de5d31fd407f31a63eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_880d4250baeddb5d317af0732c0710a1d406a64ba07376bc8253978bade07bd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_880d4250baeddb5d317af0732c0710a1d406a64ba07376bc8253978bade07bd5->enter($__internal_880d4250baeddb5d317af0732c0710a1d406a64ba07376bc8253978bade07bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05b8da395369b2c0688a5bb0ef2abec49719ddd62a65de5d31fd407f31a63eb2->leave($__internal_05b8da395369b2c0688a5bb0ef2abec49719ddd62a65de5d31fd407f31a63eb2_prof);

        
        $__internal_880d4250baeddb5d317af0732c0710a1d406a64ba07376bc8253978bade07bd5->leave($__internal_880d4250baeddb5d317af0732c0710a1d406a64ba07376bc8253978bade07bd5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_edbedd74563a59df43b6291dc43faa5f34e1608a34b1bc93333f7303f975bc03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edbedd74563a59df43b6291dc43faa5f34e1608a34b1bc93333f7303f975bc03->enter($__internal_edbedd74563a59df43b6291dc43faa5f34e1608a34b1bc93333f7303f975bc03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_65d2cd9e73693c3652d7b94adfa2c5164e825d09603d9133a538b29e6f115db3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65d2cd9e73693c3652d7b94adfa2c5164e825d09603d9133a538b29e6f115db3->enter($__internal_65d2cd9e73693c3652d7b94adfa2c5164e825d09603d9133a538b29e6f115db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_65d2cd9e73693c3652d7b94adfa2c5164e825d09603d9133a538b29e6f115db3->leave($__internal_65d2cd9e73693c3652d7b94adfa2c5164e825d09603d9133a538b29e6f115db3_prof);

        
        $__internal_edbedd74563a59df43b6291dc43faa5f34e1608a34b1bc93333f7303f975bc03->leave($__internal_edbedd74563a59df43b6291dc43faa5f34e1608a34b1bc93333f7303f975bc03_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/lljm/web_symfony3/web/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
