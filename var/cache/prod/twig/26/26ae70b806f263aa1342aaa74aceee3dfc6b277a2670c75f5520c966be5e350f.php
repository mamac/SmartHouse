<?php

/* LljmHomeBundle:Meter:metereditform.html.twig */
class __TwigTemplate_e0013c8b4221e81eef3a951856190f50f07a8e7ee5a2b82bc8ccd76ae0bd10fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div>
<form action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_meteredit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["meter"] ?? null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">

";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "

<div class=\"input-group\">
\t<div class=\"form-group\">
\t  ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "metername", array()), 'label', array("label" => "Description"));
        echo "
\t  ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "metername", array()), 'errors');
        echo "
\t  ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "metername", array()), 'widget');
        echo "
\t</div>
\t<div class=\"form-group\">
\t  ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "resource", array()), 'label', array("label" => "Resource"));
        echo "
\t  ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "resource", array()), 'errors');
        echo "
\t  ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "resource", array()), 'widget');
        echo "
\t</div>
\t<div class=\"form-group\">
\t  ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "unit", array()), 'label', array("label" => "Unit"));
        echo "
\t  ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "unit", array()), 'errors');
        echo "
\t  ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "unit", array()), 'widget');
        echo "
\t</div>
\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "

\t<div>
\t  <input type=\"submit\" class=\"btn btn-primary\" />
\t</div>
</div>

</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Meter:metereditform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 22,  70 => 20,  66 => 19,  62 => 18,  56 => 15,  52 => 14,  48 => 13,  42 => 10,  38 => 9,  34 => 8,  27 => 4,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "LljmHomeBundle:Meter:metereditform.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Meter/metereditform.html.twig");
    }
}
