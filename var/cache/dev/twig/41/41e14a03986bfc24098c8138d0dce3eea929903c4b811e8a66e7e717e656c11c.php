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
        $__internal_8e42b812ead1c0899066b3d6fceacfdba9c124cee6c852c615ea4329116781ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e42b812ead1c0899066b3d6fceacfdba9c124cee6c852c615ea4329116781ca->enter($__internal_8e42b812ead1c0899066b3d6fceacfdba9c124cee6c852c615ea4329116781ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_8bd3e697ef5d2da701d0bdcabd60efbf651fbfddd40d1fe6e88968d8caf36185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bd3e697ef5d2da701d0bdcabd60efbf651fbfddd40d1fe6e88968d8caf36185->enter($__internal_8bd3e697ef5d2da701d0bdcabd60efbf651fbfddd40d1fe6e88968d8caf36185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_8e42b812ead1c0899066b3d6fceacfdba9c124cee6c852c615ea4329116781ca->leave($__internal_8e42b812ead1c0899066b3d6fceacfdba9c124cee6c852c615ea4329116781ca_prof);

        
        $__internal_8bd3e697ef5d2da701d0bdcabd60efbf651fbfddd40d1fe6e88968d8caf36185->leave($__internal_8bd3e697ef5d2da701d0bdcabd60efbf651fbfddd40d1fe6e88968d8caf36185_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_10dd3a4daea7a30cd79d66f59e7266867bc36a2870a96fe43f1b17807aafb2b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10dd3a4daea7a30cd79d66f59e7266867bc36a2870a96fe43f1b17807aafb2b4->enter($__internal_10dd3a4daea7a30cd79d66f59e7266867bc36a2870a96fe43f1b17807aafb2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2b415f6d0a323df898d931cf6b4e7b814c4051a7bc0e92db2c359fefdf4213da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b415f6d0a323df898d931cf6b4e7b814c4051a7bc0e92db2c359fefdf4213da->enter($__internal_2b415f6d0a323df898d931cf6b4e7b814c4051a7bc0e92db2c359fefdf4213da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2b415f6d0a323df898d931cf6b4e7b814c4051a7bc0e92db2c359fefdf4213da->leave($__internal_2b415f6d0a323df898d931cf6b4e7b814c4051a7bc0e92db2c359fefdf4213da_prof);

        
        $__internal_10dd3a4daea7a30cd79d66f59e7266867bc36a2870a96fe43f1b17807aafb2b4->leave($__internal_10dd3a4daea7a30cd79d66f59e7266867bc36a2870a96fe43f1b17807aafb2b4_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_2b0d243297d4f234df2d82a43f873dc683b3ec8569802395067145917de63f8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b0d243297d4f234df2d82a43f873dc683b3ec8569802395067145917de63f8f->enter($__internal_2b0d243297d4f234df2d82a43f873dc683b3ec8569802395067145917de63f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3de8394ec501b978d6176cebd0f4f9728ed0fa4ac2cfe79feb341d489c05c763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3de8394ec501b978d6176cebd0f4f9728ed0fa4ac2cfe79feb341d489c05c763->enter($__internal_3de8394ec501b978d6176cebd0f4f9728ed0fa4ac2cfe79feb341d489c05c763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_3de8394ec501b978d6176cebd0f4f9728ed0fa4ac2cfe79feb341d489c05c763->leave($__internal_3de8394ec501b978d6176cebd0f4f9728ed0fa4ac2cfe79feb341d489c05c763_prof);

        
        $__internal_2b0d243297d4f234df2d82a43f873dc683b3ec8569802395067145917de63f8f->leave($__internal_2b0d243297d4f234df2d82a43f873dc683b3ec8569802395067145917de63f8f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_284773aab94904bb825965f621376242f93f17997650fe7d8a36207402d4962f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_284773aab94904bb825965f621376242f93f17997650fe7d8a36207402d4962f->enter($__internal_284773aab94904bb825965f621376242f93f17997650fe7d8a36207402d4962f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_93e0d5194042093f981d3b2d888c57098d5b4be9fbb5c21545dc4b3a4dbe7e28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93e0d5194042093f981d3b2d888c57098d5b4be9fbb5c21545dc4b3a4dbe7e28->enter($__internal_93e0d5194042093f981d3b2d888c57098d5b4be9fbb5c21545dc4b3a4dbe7e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_93e0d5194042093f981d3b2d888c57098d5b4be9fbb5c21545dc4b3a4dbe7e28->leave($__internal_93e0d5194042093f981d3b2d888c57098d5b4be9fbb5c21545dc4b3a4dbe7e28_prof);

        
        $__internal_284773aab94904bb825965f621376242f93f17997650fe7d8a36207402d4962f->leave($__internal_284773aab94904bb825965f621376242f93f17997650fe7d8a36207402d4962f_prof);

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
