<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_b8258b527b9fe5a2085b588d42ad7ed7afa0595d1092ad6e2990c5014edcc307 extends Twig_Template
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
        $__internal_e9de567a868716b3cb331745552ed185a5ca82286ac4999fc5c7b95afe1e2790 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9de567a868716b3cb331745552ed185a5ca82286ac4999fc5c7b95afe1e2790->enter($__internal_e9de567a868716b3cb331745552ed185a5ca82286ac4999fc5c7b95afe1e2790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_0f50d0467e0c32d4fc18712d09856d3da65473059eac17a47248ff5db0b9bd29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f50d0467e0c32d4fc18712d09856d3da65473059eac17a47248ff5db0b9bd29->enter($__internal_0f50d0467e0c32d4fc18712d09856d3da65473059eac17a47248ff5db0b9bd29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_e9de567a868716b3cb331745552ed185a5ca82286ac4999fc5c7b95afe1e2790->leave($__internal_e9de567a868716b3cb331745552ed185a5ca82286ac4999fc5c7b95afe1e2790_prof);

        
        $__internal_0f50d0467e0c32d4fc18712d09856d3da65473059eac17a47248ff5db0b9bd29->leave($__internal_0f50d0467e0c32d4fc18712d09856d3da65473059eac17a47248ff5db0b9bd29_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c25ad9065336afbe8c605aed96da171daa0da6c8a306332d58f67d9ecb862c98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c25ad9065336afbe8c605aed96da171daa0da6c8a306332d58f67d9ecb862c98->enter($__internal_c25ad9065336afbe8c605aed96da171daa0da6c8a306332d58f67d9ecb862c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_01113e8ada0e92fc4cbc3d5636547f68a0a03aca2f92f8669efc21a30b9fb181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01113e8ada0e92fc4cbc3d5636547f68a0a03aca2f92f8669efc21a30b9fb181->enter($__internal_01113e8ada0e92fc4cbc3d5636547f68a0a03aca2f92f8669efc21a30b9fb181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_01113e8ada0e92fc4cbc3d5636547f68a0a03aca2f92f8669efc21a30b9fb181->leave($__internal_01113e8ada0e92fc4cbc3d5636547f68a0a03aca2f92f8669efc21a30b9fb181_prof);

        
        $__internal_c25ad9065336afbe8c605aed96da171daa0da6c8a306332d58f67d9ecb862c98->leave($__internal_c25ad9065336afbe8c605aed96da171daa0da6c8a306332d58f67d9ecb862c98_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_40502f4f231cb512b91604644c38b70bb07cb97de7695bfa046879be5a9ff075 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40502f4f231cb512b91604644c38b70bb07cb97de7695bfa046879be5a9ff075->enter($__internal_40502f4f231cb512b91604644c38b70bb07cb97de7695bfa046879be5a9ff075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_494dacbebbce1fcbe937176e71ae8a08ef48d06f4b87085a69cbf4172d71821f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_494dacbebbce1fcbe937176e71ae8a08ef48d06f4b87085a69cbf4172d71821f->enter($__internal_494dacbebbce1fcbe937176e71ae8a08ef48d06f4b87085a69cbf4172d71821f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_494dacbebbce1fcbe937176e71ae8a08ef48d06f4b87085a69cbf4172d71821f->leave($__internal_494dacbebbce1fcbe937176e71ae8a08ef48d06f4b87085a69cbf4172d71821f_prof);

        
        $__internal_40502f4f231cb512b91604644c38b70bb07cb97de7695bfa046879be5a9ff075->leave($__internal_40502f4f231cb512b91604644c38b70bb07cb97de7695bfa046879be5a9ff075_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e082bd193101717e99e4460fd70113fa23b63a54574f11b2cd0c5fb6cd67d18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e082bd193101717e99e4460fd70113fa23b63a54574f11b2cd0c5fb6cd67d18->enter($__internal_3e082bd193101717e99e4460fd70113fa23b63a54574f11b2cd0c5fb6cd67d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7561411eb133ec272a8a108c33bbbb2f4fb152269d78029acfb2ec32c771a1b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7561411eb133ec272a8a108c33bbbb2f4fb152269d78029acfb2ec32c771a1b2->enter($__internal_7561411eb133ec272a8a108c33bbbb2f4fb152269d78029acfb2ec32c771a1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7561411eb133ec272a8a108c33bbbb2f4fb152269d78029acfb2ec32c771a1b2->leave($__internal_7561411eb133ec272a8a108c33bbbb2f4fb152269d78029acfb2ec32c771a1b2_prof);

        
        $__internal_3e082bd193101717e99e4460fd70113fa23b63a54574f11b2cd0c5fb6cd67d18->leave($__internal_3e082bd193101717e99e4460fd70113fa23b63a54574f11b2cd0c5fb6cd67d18_prof);

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
", "@Twig/layout.html.twig", "/home/lljm/web/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
