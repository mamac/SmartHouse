<?php

/* LljmTasksBundle:Default:taskeditform.html.twig */
class __TwigTemplate_6dfdec1d810ff228d0c4633a3b4facc7e38c2dc8d8d24605de45c75bfd482581 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tasks_taskedit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["task"] ?? null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">

";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "

<div class=\"input-group\">


\t<div class=\"form-group\">
\t  ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "taskdesc", array()), 'label', array("label" => "Description"));
        echo "
\t  ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "taskdesc", array()), 'errors');
        echo "
\t  ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "taskdesc", array()), 'widget');
        echo "
\t</div>
\t<div class=\"form-group\">
\t  ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "dateStart", array()), 'label', array("label" => "Start date"));
        echo "
\t  ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "dateStart", array()), 'errors');
        echo "
\t  ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "dateStart", array()), 'widget');
        echo "
\t</div>
\t<div class=\"form-group\">
\t  ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "dateEnd", array()), 'label', array("label" => "End date"));
        echo "
\t  ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "dateEnd", array()), 'errors');
        echo "
\t  ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "dateEnd", array()), 'widget');
        echo "
\t</div>
\t<br>
\t<div class=\"form-group\">
\t  ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "user", array()), 'label', array("label" => "Assignee"));
        echo "
\t  ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "user", array()), 'errors');
        echo "
\t  ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "user", array()), 'widget');
        echo "
\t</div>
\t";
        // line 30
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
        return "LljmTasksBundle:Default:taskeditform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 30,  87 => 28,  83 => 27,  79 => 26,  72 => 22,  68 => 21,  64 => 20,  58 => 17,  54 => 16,  50 => 15,  44 => 12,  40 => 11,  36 => 10,  27 => 4,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "LljmTasksBundle:Default:taskeditform.html.twig", "/home/lljm/web/src/Lljm/TasksBundle/Resources/views/Default/taskeditform.html.twig");
    }
}
