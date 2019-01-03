<?php

/* LljmHomeBundle:Visualization:gaslogdel.html.twig */
class __TwigTemplate_3e403a297d3406b3ebcfa2c0913d8aa31d43a3b7c08a77bd8e0d7a07631fd973 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Visualization:gaslogdel.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'lljm_home_body' => array($this, 'block_lljm_home_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LljmHomeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "  Delete Gas log - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_lljm_home_body($context, array $blocks = array())
    {
        // line 9
        echo "
  <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete a record in the gas log"), "html", null, true);
        echo "</h2>

  <p>
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Confirm you want to delete the record below"), "html", null, true);
        echo ":
    <br>
    - ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["gaslog"] ?? null), "id", array()), "html", null, true);
        echo "<br>
    - ";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["gaslog"] ?? null), "daterx", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "<br>
    - ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["gaslog"] ?? null), "metervalue", array()), "html", null, true);
        echo "<br>
    - ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["gaslog"] ?? null), "meterid", array()), "metername", array()), "html", null, true);
        echo "<br>
  </p>

  <form action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_gaslogdel", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["gaslog"] ?? null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_gasvisual");
        echo "\" class=\"btn btn-default glyphicon glyphicon-chevron-left\">
      Back
    </a>
    <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger\" />
    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
  </form>

";
    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Visualization:gaslogdel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 26,  78 => 22,  74 => 21,  68 => 18,  64 => 17,  60 => 16,  56 => 15,  51 => 13,  45 => 10,  42 => 9,  39 => 8,  32 => 5,  29 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "LljmHomeBundle:Visualization:gaslogdel.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Visualization/gaslogdel.html.twig");
    }
}
