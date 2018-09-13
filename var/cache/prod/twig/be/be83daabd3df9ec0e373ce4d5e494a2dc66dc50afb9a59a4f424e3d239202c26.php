<?php

/* LljmHomeBundle:Heating:index.html.twig */
class __TwigTemplate_fe39081b042687db5098076541402c57a527bfc2f6be8d9da92012c5751d82bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LljmHomeBundle::layout.html.twig", "LljmHomeBundle:Heating:index.html.twig", 1);
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
        echo "  Heating - ";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Heating"), "html", null, true);
        echo "</h2>

        <div>
          <p><h3>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Outside temperature"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["outsidetemp"] ?? null), 0, array()), "currenttemp", array()), "html", null, true);
        echo "&deg;C</h3></p>
        </div>
        <div>
          ";
        // line 15
        if ( !twig_test_empty(($context["boilerzone"] ?? null))) {
            // line 16
            echo "          <h3>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Boiler status"), "html", null, true);
            echo " :
          ";
            // line 17
            if ( !twig_test_empty(($context["heatinglog"] ?? null))) {
                // line 18
                echo "            ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["heatinglog"] ?? null), 0, array()), "boilerstatus", array()) == 1)) {
                    // line 19
                    echo "              <img src=\"/bundles/lljmhome/images/widgets/button/on-button.png\" style=\"width:25px;height:25px;\">
            ";
                } else {
                    // line 21
                    echo "              <img src=\"/bundles/lljmhome/images/widgets/button/off-button.png\" style=\"width:25px;height:25px;\">
            ";
                }
                // line 22
                echo "</h3>
          ";
            } else {
                // line 24
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Boiler status not available"), "html", null, true);
                echo "
          ";
            }
            // line 26
            echo "          ";
        }
        // line 27
        echo "          <button type=\"submit\" class=\"btn glyphicon glyphicon-asterisk\" onclick=\"location.href = '";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_zoneheatingmodeupdate");
        echo "/3'\"></button>
          <button type=\"submit\" class=\"btn glyphicon glyphicon-leaf\" onclick=\"location.href = '";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_zoneheatingmodeupdate");
        echo "/2'\"></button>
          <button type=\"submit\" class=\"btn glyphicon glyphicon-fire\" onclick=\"location.href = '";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_zoneheatingmodeupdate");
        echo "/1'\"></button>
          <button type=\"submit\" class=\"btn glyphicon glyphicon-time\" onclick=\"location.href = '";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_zoneheatingmodeupdate");
        echo "/4'\"></button>
        </div>
        <div>
          <div class=\"table-responsive\">
            <table class=\"table table-striped\">
              <thead>
                <tr>
                  <th>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Zone name"), "html", null, true);
        echo "</th>
                  <th>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Eco"), "html", null, true);
        echo "</th>
                  <th>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Comfort"), "html", null, true);
        echo "</th>
                  <th>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Current"), "html", null, true);
        echo "</th>
                  <th>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mode"), "html", null, true);
        echo "</th>
                  <th>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Heating status"), "html", null, true);
        echo "</th>
                  <th>&nbsp;</th>
                </tr>
              </thead>
              <tbody>
\t\t\t  ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["zoneheatings"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["zoneheating"]) {
            // line 48
            echo "                <tr>
                  <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["zoneheating"], "zonename", array())), "html", null, true);
            echo "</td>
                  <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["zoneheating"], "tempeco", array())), "html", null, true);
            echo "&deg;C</td>
                  <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["zoneheating"], "tempcomfort", array())), "html", null, true);
            echo "&deg;C</td>
                  <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["zoneheating"], "currenttemp", array())), "html", null, true);
            echo "&deg;C</td>
                  <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["zoneheating"], "modedesc", array())), "html", null, true);
            echo "</td>
                  <td>";
            // line 54
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["zoneheating"], "heatingstatus", array()) == 1)) {
                // line 55
                echo "                      <img src=\"/bundles/lljmhome/images/widgets/button/on-button.png\" style=\"width:25px;height:25px;\">
                      ";
            } else {
                // line 57
                echo "                      <img src=\"/bundles/lljmhome/images/widgets/button/off-button.png\" style=\"width:25px;height:25px;\">
                      ";
            }
            // line 58
            echo "</td>
                  <td>
                    <button type=\"submit\" class=\"btn glyphicon glyphicon-asterisk\" onclick=\"location.href = '";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_onezoneheatingmodeupdate", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["zoneheating"], "id", array()), "heatingmode" => "3")), "html", null, true);
            echo "'\"></button>
                    <button type=\"submit\" class=\"btn glyphicon glyphicon-leaf\" onclick=\"location.href = '";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_onezoneheatingmodeupdate", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["zoneheating"], "id", array()), "heatingmode" => "2")), "html", null, true);
            echo "'\"></button>
                    <button type=\"submit\" class=\"btn glyphicon glyphicon-fire\" onclick=\"location.href = '";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_onezoneheatingmodeupdate", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["zoneheating"], "id", array()), "heatingmode" => "1")), "html", null, true);
            echo "'\"></button>
                    <button type=\"submit\" class=\"btn glyphicon glyphicon-time\" onclick=\"location.href = '";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_onezoneheatingmodeupdate", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["zoneheating"], "id", array()), "heatingmode" => "4")), "html", null, true);
            echo "'\"></button>
                    <button type=\"submit\" class=\"btn glyphicon glyphicon-pencil\" onclick=\"location.href = '";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_action_heatingedit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["zoneheating"], "id", array()))), "html", null, true);
            echo "'\"></button>
                  </td>
                </tr>
\t\t\t  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 68
            echo "\t\t\t    <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No record in this table"), "html", null, true);
            echo ".</p>
\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zoneheating'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "              </tbody>
            </table>
          </div>
      </div>
<div class=\"panel-group\" id=\"accordion\" role=\"tablist\">
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\" role=\"tab\" id=\"headingHelp\">
            <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#help\" aria-expanded=\"true\"
               aria-controls=\"help\">
                <span class=\"glyphicon glyphicon-question-sign\"></span>
                Log
            </a>
        </div>
        <div id=\"help\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingHelp\"
             aria-expanded=\"false\">
            <div class=\"panel-body\">
          ";
        // line 86
        if ( !twig_test_empty(($context["heatinglog"] ?? null))) {
            // line 87
            echo "              ";
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["heatinglog"] ?? null), 0, array()), "textlog", array()), "html", null, true));
            echo "
          ";
        } else {
            // line 89
            echo "              ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Heating log is empty"), "html", null, true);
            echo "
          ";
        }
        // line 90
        echo "          
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "LljmHomeBundle:Heating:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 90,  245 => 89,  239 => 87,  237 => 86,  219 => 70,  210 => 68,  201 => 64,  197 => 63,  193 => 62,  189 => 61,  185 => 60,  181 => 58,  177 => 57,  173 => 55,  171 => 54,  167 => 53,  163 => 52,  159 => 51,  155 => 50,  151 => 49,  148 => 48,  143 => 47,  135 => 42,  131 => 41,  127 => 40,  123 => 39,  119 => 38,  115 => 37,  105 => 30,  101 => 29,  97 => 28,  92 => 27,  89 => 26,  83 => 24,  79 => 22,  75 => 21,  71 => 19,  68 => 18,  66 => 17,  61 => 16,  59 => 15,  51 => 12,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "LljmHomeBundle:Heating:index.html.twig", "/home/lljm/web/src/Lljm/HomeBundle/Resources/views/Heating/index.html.twig");
    }
}
