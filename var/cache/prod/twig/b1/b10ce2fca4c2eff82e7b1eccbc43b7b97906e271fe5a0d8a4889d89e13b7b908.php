<?php

/* LljmHomeBundle:Zone:zone.html.twig */
class __TwigTemplate_cd7ce9e01f3e6ad3bdafc3f36009c619a29c41d286ab6cd17f56e6afe97b8f1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Zone:zone.html.twig", 1);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Zones - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_lljm_home_body($context, array $blocks = array())
    {
        // line 8
        echo "
  <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Zones"), "html", null, true);
        echo "</h2>

        <div>
          <a class=\"btn btn-default btn-sm glyphicon glyphicon-plus\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_zoneadd");
        echo "\">
            ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
        echo "
          </a>
        </div>

        <div>
          <div class=\"table-responsive\">
            <table class=\"table table-striped\">
              <thead>
                <tr>
                  <th>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID"), "html", null, true);
        echo "</th>
                  <th>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Zone name"), "html", null, true);
        echo "</th>
                  <th>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Heated zone"), "html", null, true);
        echo "</th>
                  <th>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Current temperature"), "html", null, true);
        echo "</th>
                  <th>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Heating status"), "html", null, true);
        echo "</th>
                  <th colspan = 2>&nbsp;</th>
                </tr>
              </thead>
              <tbody>
\t\t\t  ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["zones"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["zone"]) {
            // line 32
            echo "                <tr>
                  <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["zone"], "id", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["zone"], "zonename", array())), "html", null, true);
            echo "</td>
                  <td>";
            // line 35
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["zone"], "heatingenabled", array()) == 1)) {
                // line 36
                echo "                      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes"), "html", null, true);
                echo "
                      ";
            }
            // line 37
            echo "</td>
                  <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["zone"], "currenttemp", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 39
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["zone"], "heatingstatus", array()) == 1)) {
                // line 40
                echo "                      ";
                echo "On";
                echo "
                      ";
            } else {
                // line 42
                echo "                      ";
                echo "Off";
                echo "
                      ";
            }
            // line 43
            echo "</td>
                  <td>
                    <a class=\"btn glyphicon glyphicon-pencil red\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_zoneedit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["zone"], "id", array()))), "html", null, true);
            echo "\">
                    <a class=\"btn glyphicon glyphicon-trash red \" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_zonedel", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["zone"], "id", array()))), "html", null, true);
            echo "\">
                   </td>
                </tr>
\t\t\t  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 50
            echo "\t\t\t    <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No record in this table"), "html", null, true);
            echo ".</p>
\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "              </tbody>
            </table>
          </div>
      </div>

";
    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Zone:zone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 52,  153 => 50,  144 => 46,  140 => 45,  136 => 43,  130 => 42,  124 => 40,  122 => 39,  118 => 38,  115 => 37,  109 => 36,  107 => 35,  103 => 34,  99 => 33,  96 => 32,  91 => 31,  83 => 26,  79 => 25,  75 => 24,  71 => 23,  67 => 22,  55 => 13,  51 => 12,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "LljmHomeBundle:Zone:zone.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Zone/zone.html.twig");
    }
}
