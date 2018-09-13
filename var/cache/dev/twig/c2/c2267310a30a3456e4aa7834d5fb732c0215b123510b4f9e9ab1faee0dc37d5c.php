<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_c81bea23aabd443c55bbca146d8cbdcc278e3af44ffeb406e330b395b92c1eed extends Twig_Template
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
        $__internal_afda425baecca9a74880efec2b1a35cfbf2b7d66ac34272a3390a41714936efa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afda425baecca9a74880efec2b1a35cfbf2b7d66ac34272a3390a41714936efa->enter($__internal_afda425baecca9a74880efec2b1a35cfbf2b7d66ac34272a3390a41714936efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b0f4a82b7e2b888a581fdce82b3d7c60a0dbc663f05a4e16f5b5ffc5f716dda7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0f4a82b7e2b888a581fdce82b3d7c60a0dbc663f05a4e16f5b5ffc5f716dda7->enter($__internal_b0f4a82b7e2b888a581fdce82b3d7c60a0dbc663f05a4e16f5b5ffc5f716dda7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_afda425baecca9a74880efec2b1a35cfbf2b7d66ac34272a3390a41714936efa->leave($__internal_afda425baecca9a74880efec2b1a35cfbf2b7d66ac34272a3390a41714936efa_prof);

        
        $__internal_b0f4a82b7e2b888a581fdce82b3d7c60a0dbc663f05a4e16f5b5ffc5f716dda7->leave($__internal_b0f4a82b7e2b888a581fdce82b3d7c60a0dbc663f05a4e16f5b5ffc5f716dda7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5627f7b171f49c1c143f8bee844f962f63a7d165fcbafd575f830ee12a750aaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5627f7b171f49c1c143f8bee844f962f63a7d165fcbafd575f830ee12a750aaf->enter($__internal_5627f7b171f49c1c143f8bee844f962f63a7d165fcbafd575f830ee12a750aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_48f2ac786eedeffd98498a20d276f26c18d54d5bbca04aa8a9cbba2f22b41a90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48f2ac786eedeffd98498a20d276f26c18d54d5bbca04aa8a9cbba2f22b41a90->enter($__internal_48f2ac786eedeffd98498a20d276f26c18d54d5bbca04aa8a9cbba2f22b41a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_48f2ac786eedeffd98498a20d276f26c18d54d5bbca04aa8a9cbba2f22b41a90->leave($__internal_48f2ac786eedeffd98498a20d276f26c18d54d5bbca04aa8a9cbba2f22b41a90_prof);

        
        $__internal_5627f7b171f49c1c143f8bee844f962f63a7d165fcbafd575f830ee12a750aaf->leave($__internal_5627f7b171f49c1c143f8bee844f962f63a7d165fcbafd575f830ee12a750aaf_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_57703f06ab6b40cfa0456a0faf7eb5259d02ffeb926b0c9914eb18f5f509089d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57703f06ab6b40cfa0456a0faf7eb5259d02ffeb926b0c9914eb18f5f509089d->enter($__internal_57703f06ab6b40cfa0456a0faf7eb5259d02ffeb926b0c9914eb18f5f509089d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ad4a4add0206f5128e1f2218f575f25e43dbc49916557cfa4b806b766a4effc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad4a4add0206f5128e1f2218f575f25e43dbc49916557cfa4b806b766a4effc1->enter($__internal_ad4a4add0206f5128e1f2218f575f25e43dbc49916557cfa4b806b766a4effc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ad4a4add0206f5128e1f2218f575f25e43dbc49916557cfa4b806b766a4effc1->leave($__internal_ad4a4add0206f5128e1f2218f575f25e43dbc49916557cfa4b806b766a4effc1_prof);

        
        $__internal_57703f06ab6b40cfa0456a0faf7eb5259d02ffeb926b0c9914eb18f5f509089d->leave($__internal_57703f06ab6b40cfa0456a0faf7eb5259d02ffeb926b0c9914eb18f5f509089d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_21b94322e110d8544fc5a6471cff1070fadf963b7719bc823c539d25c68534d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21b94322e110d8544fc5a6471cff1070fadf963b7719bc823c539d25c68534d3->enter($__internal_21b94322e110d8544fc5a6471cff1070fadf963b7719bc823c539d25c68534d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_26e4361b5eba20e51e89c0f5ca799676adf8ca9f9f5296f89a9c59f6c0edd79a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e4361b5eba20e51e89c0f5ca799676adf8ca9f9f5296f89a9c59f6c0edd79a->enter($__internal_26e4361b5eba20e51e89c0f5ca799676adf8ca9f9f5296f89a9c59f6c0edd79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_26e4361b5eba20e51e89c0f5ca799676adf8ca9f9f5296f89a9c59f6c0edd79a->leave($__internal_26e4361b5eba20e51e89c0f5ca799676adf8ca9f9f5296f89a9c59f6c0edd79a_prof);

        
        $__internal_21b94322e110d8544fc5a6471cff1070fadf963b7719bc823c539d25c68534d3->leave($__internal_21b94322e110d8544fc5a6471cff1070fadf963b7719bc823c539d25c68534d3_prof);

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
