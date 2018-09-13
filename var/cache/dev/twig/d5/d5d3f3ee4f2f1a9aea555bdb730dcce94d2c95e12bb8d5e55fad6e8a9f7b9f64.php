<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_1125f75fb029bb048161e5587fe5d97504a2b1f05676196341e3b91b892ae73b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b946ae2c1b5bb11d18a0beddf7d92bf43daee58875e0cfc72361dfa7ebef390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b946ae2c1b5bb11d18a0beddf7d92bf43daee58875e0cfc72361dfa7ebef390->enter($__internal_1b946ae2c1b5bb11d18a0beddf7d92bf43daee58875e0cfc72361dfa7ebef390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_535408a5976960b1d7ecc11a31a164f453e9bac8beddca28407ebb7ce58f7031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_535408a5976960b1d7ecc11a31a164f453e9bac8beddca28407ebb7ce58f7031->enter($__internal_535408a5976960b1d7ecc11a31a164f453e9bac8beddca28407ebb7ce58f7031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_1b946ae2c1b5bb11d18a0beddf7d92bf43daee58875e0cfc72361dfa7ebef390->leave($__internal_1b946ae2c1b5bb11d18a0beddf7d92bf43daee58875e0cfc72361dfa7ebef390_prof);

        
        $__internal_535408a5976960b1d7ecc11a31a164f453e9bac8beddca28407ebb7ce58f7031->leave($__internal_535408a5976960b1d7ecc11a31a164f453e9bac8beddca28407ebb7ce58f7031_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e69fbe97bec27788238d82765d6fd8c79baaaec6f6fe632292faaef20a8377dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e69fbe97bec27788238d82765d6fd8c79baaaec6f6fe632292faaef20a8377dc->enter($__internal_e69fbe97bec27788238d82765d6fd8c79baaaec6f6fe632292faaef20a8377dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_50449e34ed7872f096a2c8b20c225ef8d84617600b138940b630d44360693135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50449e34ed7872f096a2c8b20c225ef8d84617600b138940b630d44360693135->enter($__internal_50449e34ed7872f096a2c8b20c225ef8d84617600b138940b630d44360693135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_50449e34ed7872f096a2c8b20c225ef8d84617600b138940b630d44360693135->leave($__internal_50449e34ed7872f096a2c8b20c225ef8d84617600b138940b630d44360693135_prof);

        
        $__internal_e69fbe97bec27788238d82765d6fd8c79baaaec6f6fe632292faaef20a8377dc->leave($__internal_e69fbe97bec27788238d82765d6fd8c79baaaec6f6fe632292faaef20a8377dc_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3a1d68c6d6de9aa734ebba645e4d45ab76f569246ce357459ebb1ad544fdd11e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a1d68c6d6de9aa734ebba645e4d45ab76f569246ce357459ebb1ad544fdd11e->enter($__internal_3a1d68c6d6de9aa734ebba645e4d45ab76f569246ce357459ebb1ad544fdd11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e6351103238f170f9082ad9948ba94a450ef1a37a0a13df957b81467ecc95f95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6351103238f170f9082ad9948ba94a450ef1a37a0a13df957b81467ecc95f95->enter($__internal_e6351103238f170f9082ad9948ba94a450ef1a37a0a13df957b81467ecc95f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e6351103238f170f9082ad9948ba94a450ef1a37a0a13df957b81467ecc95f95->leave($__internal_e6351103238f170f9082ad9948ba94a450ef1a37a0a13df957b81467ecc95f95_prof);

        
        $__internal_3a1d68c6d6de9aa734ebba645e4d45ab76f569246ce357459ebb1ad544fdd11e->leave($__internal_3a1d68c6d6de9aa734ebba645e4d45ab76f569246ce357459ebb1ad544fdd11e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_54dfcfec7535cd23bdd6eed47227dab463bbaf355d71b2edccd580ac4ee00110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54dfcfec7535cd23bdd6eed47227dab463bbaf355d71b2edccd580ac4ee00110->enter($__internal_54dfcfec7535cd23bdd6eed47227dab463bbaf355d71b2edccd580ac4ee00110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e3e52dbdc7ce58617937e4deb47d6682d1428b792f924a7306c1f75f0848d456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3e52dbdc7ce58617937e4deb47d6682d1428b792f924a7306c1f75f0848d456->enter($__internal_e3e52dbdc7ce58617937e4deb47d6682d1428b792f924a7306c1f75f0848d456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e3e52dbdc7ce58617937e4deb47d6682d1428b792f924a7306c1f75f0848d456->leave($__internal_e3e52dbdc7ce58617937e4deb47d6682d1428b792f924a7306c1f75f0848d456_prof);

        
        $__internal_54dfcfec7535cd23bdd6eed47227dab463bbaf355d71b2edccd580ac4ee00110->leave($__internal_54dfcfec7535cd23bdd6eed47227dab463bbaf355d71b2edccd580ac4ee00110_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/lljm/web_symfony3/web/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
