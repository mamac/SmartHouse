<?php

/* ::layout.html.twig */
class __TwigTemplate_98ee0dd14e2b48399a501e06ceee8b29dcf7ff550835c03df7b6c24c329c9347 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85296751a47af961951777da7dc36638def956146cd06cb7ae7b042124545c50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85296751a47af961951777da7dc36638def956146cd06cb7ae7b042124545c50->enter($__internal_85296751a47af961951777da7dc36638def956146cd06cb7ae7b042124545c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_ed5c1a3e60866341a2106590a224f646ad2b1b315fa0287678d19ac4f045a5e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed5c1a3e60866341a2106590a224f646ad2b1b315fa0287678d19ac4f045a5e4->enter($__internal_ed5c1a3e60866341a2106590a224f646ad2b1b315fa0287678d19ac4f045a5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 36
        echo "
  </head>

  <body>
    <!-- Fixed navbar -->
    <div class=\"navbar navbar-default\" role=\"navigation\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lljm_home_homepage");
        echo "\"><span class=\"glyphicon glyphicon-home\" /></a>
        </div>
        <div class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Housing"), "html", null, true);
        echo " <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                ";
        // line 57
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 58
            echo "                <li class=\"dropdown-header\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Settings"), "html", null, true);
            echo "</li>
                <li><a href=\"";
            // line 59
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_house");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("House"), "html", null, true);
            echo "</a></li>
                <li><a href=\"";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_zone");
            echo "\">Zones</a></li>
                <li><a href=\"";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_subzone");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sub zones"), "html", null, true);
            echo "</a></li>
                <li><a href=\"";
            // line 62
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_node");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nodes"), "html", null, true);
            echo "</a></li>
                <li><a href=\"";
            // line 63
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_meter");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Meters"), "html", null, true);
            echo "</a></li>
                <li class=\"divider\"></li>
                ";
        }
        // line 66
        echo "                <li class=\"dropdown-header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Action"), "html", null, true);
        echo "</li>
                <li><a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_action_light");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Light"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_action_heating");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Heating"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_action_ventilation");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ventilation"), "html", null, true);
        echo "</a></li>
                <li class=\"divider\"></li>
                <li class=\"dropdown-header\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Visualization"), "html", null, true);
        echo "</li>
                <li><a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_tempvisual");
        echo "\">Temperature</a></li>
                <li><a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_humidvisual");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Humidity"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_elecvisual_day_detail");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Electricity"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_watervisual_day_detail");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Water"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_gasvisual_day_detail");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gas"), "html", null, true);
        echo "</a></li>
              </ul>
            </li>
            ";
        // line 79
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 80
            echo "            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Health"), "html", null, true);
            echo " <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"";
            // line 83
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("health_weight");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Weight"), "html", null, true);
            echo "</a></li>
                <li><a href=\"";
            // line 84
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("health_height");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Height"), "html", null, true);
            echo "</a></li>
              </ul>
            </li>
            <li><a href=\"";
            // line 87
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("geolocation_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Geolocation"), "html", null, true);
            echo "</a></li>
            ";
        }
        // line 89
        echo "            ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 90
            echo "            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin"), "html", null, true);
            echo " <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"";
            // line 93
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Users"), "html", null, true);
            echo "</a></li>
              </ul>
            </li>
            ";
        }
        // line 97
        echo "            <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_about");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("About"), "html", null, true);
        echo "</a></li>
          </ul>
          <ul class=\"nav navbar-nav navbar-right\">
            ";
        // line 100
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 100, $this->getSourceContext()); })()), "user", array())) {
            // line 101
            echo "            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"glyphicon glyphicon-user\" /> ";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 102, $this->getSourceContext()); })()), "user", array()), "firstname", array()), "html", null, true);
            echo " <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a class=\"glyphicon glyphicon-log-out\" href=\"";
            // line 104
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Logout"), "html", null, true);
            echo "</a></li>
                </ul>
            </li>
            ";
        } else {
            // line 108
            echo "            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"glyphicon glyphicon-user\" /> ";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Anonymous"), "html", null, true);
            echo " <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a class=\"glyphicon glyphicon-log-in\" href=\"";
            // line 111
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Login"), "html", null, true);
            echo "</a></li>
                </ul>
            </li>
            ";
        }
        // line 115
        echo "            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"glyphicon glyphicon-book\" /> ";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Language"), "html", null, true);
        echo " [";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 116, $this->getSourceContext()); })()), "request", array()), "locale", array()), "html", null, true);
        echo "]<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                 <li><a href=\"";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lljm_home_homepage", array("_locale" => "en"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("English"), "html", null, true);
        echo "</a></li>
                  <li><a href=\"";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lljm_home_homepage", array("_locale" => "fr"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("French"), "html", null, true);
        echo "</a></li>
                </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

            <div class=\"container\">

      <div class=\"row\">
        <div id=\"content\" class=\"span9\">
          ";
        // line 131
        $this->displayBlock('body', $context, $blocks);
        // line 133
        echo "        </div>
      </div>

      <hr>

      <footer>
        <p><img src=\"/bundles/lljmhome/images/gentoo-badge3.png\"></p>
      </footer>
    </div>

  ";
        // line 143
        $this->displayBlock('javascripts', $context, $blocks);
        // line 151
        echo "
  </body>
</html>";
        
        $__internal_85296751a47af961951777da7dc36638def956146cd06cb7ae7b042124545c50->leave($__internal_85296751a47af961951777da7dc36638def956146cd06cb7ae7b042124545c50_prof);

        
        $__internal_ed5c1a3e60866341a2106590a224f646ad2b1b315fa0287678d19ac4f045a5e4->leave($__internal_ed5c1a3e60866341a2106590a224f646ad2b1b315fa0287678d19ac4f045a5e4_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4311a29499aa0fa2ab455abf74f35e885222eea147d8f98118795e2f623416a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4311a29499aa0fa2ab455abf74f35e885222eea147d8f98118795e2f623416a->enter($__internal_f4311a29499aa0fa2ab455abf74f35e885222eea147d8f98118795e2f623416a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b9a92062e82b156452174fd07619916547349db36f48ecff9e515981d01e3d66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9a92062e82b156452174fd07619916547349db36f48ecff9e515981d01e3d66->enter($__internal_b9a92062e82b156452174fd07619916547349db36f48ecff9e515981d01e3d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Smart House";
        
        $__internal_b9a92062e82b156452174fd07619916547349db36f48ecff9e515981d01e3d66->leave($__internal_b9a92062e82b156452174fd07619916547349db36f48ecff9e515981d01e3d66_prof);

        
        $__internal_f4311a29499aa0fa2ab455abf74f35e885222eea147d8f98118795e2f623416a->leave($__internal_f4311a29499aa0fa2ab455abf74f35e885222eea147d8f98118795e2f623416a_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_881d1639544f17e75c4b02b203ce9f32bcd77b0f143a5862fc8c4bf7e81530d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_881d1639544f17e75c4b02b203ce9f32bcd77b0f143a5862fc8c4bf7e81530d9->enter($__internal_881d1639544f17e75c4b02b203ce9f32bcd77b0f143a5862fc8c4bf7e81530d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f735d3d380a442b15c0c64ff4da5f36534cebd31a9ff8fb8b0b0c100e018abe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f735d3d380a442b15c0c64ff4da5f36534cebd31a9ff8fb8b0b0c100e018abe6->enter($__internal_f735d3d380a442b15c0c64ff4da5f36534cebd31a9ff8fb8b0b0c100e018abe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
      <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/epoch.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
      <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\" type=\"text/css\" />
      <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lljmgeolocation/css/ol.css"), "html", null, true);
        echo "\" type=\"text/css\" />

      <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>

      <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lljmhome/js/vscpwslib.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lljmhome/js/vscpsettings.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lljmhome/js/vscpmd5.js"), "html", null, true);
        echo "\"></script>

      <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lljmgeolocation/js/ol.js"), "html", null, true);
        echo "\"></script>

      <!-- D3 and Epoch JavaScript
      ================================================== -->
      <script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/d3.min.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/epoch.min.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/canvasjs.min.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_f735d3d380a442b15c0c64ff4da5f36534cebd31a9ff8fb8b0b0c100e018abe6->leave($__internal_f735d3d380a442b15c0c64ff4da5f36534cebd31a9ff8fb8b0b0c100e018abe6_prof);

        
        $__internal_881d1639544f17e75c4b02b203ce9f32bcd77b0f143a5862fc8c4bf7e81530d9->leave($__internal_881d1639544f17e75c4b02b203ce9f32bcd77b0f143a5862fc8c4bf7e81530d9_prof);

    }

    // line 131
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8ee92055e990c0daed58e527f7461c5396be8009d103666a396a98b1c26402d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8ee92055e990c0daed58e527f7461c5396be8009d103666a396a98b1c26402d->enter($__internal_b8ee92055e990c0daed58e527f7461c5396be8009d103666a396a98b1c26402d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f67d5dc6e09a5237c7429221112bf337904471c62fb388ab43d95b319270b1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f67d5dc6e09a5237c7429221112bf337904471c62fb388ab43d95b319270b1c->enter($__internal_2f67d5dc6e09a5237c7429221112bf337904471c62fb388ab43d95b319270b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 132
        echo "          ";
        
        $__internal_2f67d5dc6e09a5237c7429221112bf337904471c62fb388ab43d95b319270b1c->leave($__internal_2f67d5dc6e09a5237c7429221112bf337904471c62fb388ab43d95b319270b1c_prof);

        
        $__internal_b8ee92055e990c0daed58e527f7461c5396be8009d103666a396a98b1c26402d->leave($__internal_b8ee92055e990c0daed58e527f7461c5396be8009d103666a396a98b1c26402d_prof);

    }

    // line 143
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_68da3a9dfaebc8846dc900141b76df68dcc1f2db544f4d012495d15e90d39669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68da3a9dfaebc8846dc900141b76df68dcc1f2db544f4d012495d15e90d39669->enter($__internal_68da3a9dfaebc8846dc900141b76df68dcc1f2db544f4d012495d15e90d39669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cbce37a40eec736e3f001ee0c8c33bbad743ccc6ec78fc680e9a02c555c0409a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbce37a40eec736e3f001ee0c8c33bbad743ccc6ec78fc680e9a02c555c0409a->enter($__internal_cbce37a40eec736e3f001ee0c8c33bbad743ccc6ec78fc680e9a02c555c0409a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 144
        echo "    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type=\"text/javascript\" src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/core.js"), "html", null, true);
        echo "\"></script>

  ";
        
        $__internal_cbce37a40eec736e3f001ee0c8c33bbad743ccc6ec78fc680e9a02c555c0409a->leave($__internal_cbce37a40eec736e3f001ee0c8c33bbad743ccc6ec78fc680e9a02c555c0409a_prof);

        
        $__internal_68da3a9dfaebc8846dc900141b76df68dcc1f2db544f4d012495d15e90d39669->leave($__internal_68da3a9dfaebc8846dc900141b76df68dcc1f2db544f4d012495d15e90d39669_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  465 => 148,  461 => 147,  456 => 144,  447 => 143,  437 => 132,  428 => 131,  415 => 33,  411 => 32,  407 => 31,  400 => 27,  395 => 25,  391 => 24,  387 => 23,  382 => 21,  378 => 20,  374 => 19,  369 => 17,  365 => 16,  361 => 15,  356 => 14,  347 => 13,  329 => 11,  317 => 151,  315 => 143,  303 => 133,  301 => 131,  284 => 119,  278 => 118,  271 => 116,  268 => 115,  259 => 111,  254 => 109,  251 => 108,  242 => 104,  237 => 102,  234 => 101,  232 => 100,  223 => 97,  214 => 93,  209 => 91,  206 => 90,  203 => 89,  196 => 87,  188 => 84,  182 => 83,  177 => 81,  174 => 80,  172 => 79,  164 => 76,  158 => 75,  152 => 74,  146 => 73,  142 => 72,  138 => 71,  131 => 69,  125 => 68,  119 => 67,  114 => 66,  106 => 63,  100 => 62,  94 => 61,  90 => 60,  84 => 59,  79 => 58,  77 => 57,  72 => 55,  64 => 50,  48 => 36,  46 => 13,  41 => 11,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>{% block title %}Smart House{% endblock %}</title>

    {% block stylesheets %}
      <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\" type=\"text/css\" />
      <link rel=\"stylesheet\" href=\"{{ asset('css/epoch.min.css') }}\" type=\"text/css\" />
      <link rel=\"stylesheet\" href=\"{{ asset('css/jquery-ui.css') }}\" type=\"text/css\" />
      <link rel=\"stylesheet\" href=\"{{ asset('bundles/lljmgeolocation/css/ol.css') }}\" type=\"text/css\" />

      <script type=\"text/javascript\" src=\"{{ asset('js/jquery-1.11.1.min.js') }}\"></script>
      <script type=\"text/javascript\" src=\"{{ asset('js/jquery-ui.js') }}\"></script>
      <script type=\"text/javascript\" src=\"{{ asset('js/jquery-ui.min.js') }}\"></script>

      <script type=\"text/javascript\" src=\"{{ asset('bundles/lljmhome/js/vscpwslib.js') }}\"></script>
      <script type=\"text/javascript\" src=\"{{ asset('bundles/lljmhome/js/vscpsettings.js') }}\"></script>
      <script type=\"text/javascript\" src=\"{{ asset('bundles/lljmhome/js/vscpmd5.js') }}\"></script>

      <script type=\"text/javascript\" src=\"{{ asset('bundles/lljmgeolocation/js/ol.js') }}\"></script>

      <!-- D3 and Epoch JavaScript
      ================================================== -->
      <script type=\"text/javascript\" src=\"{{ asset('js/d3.min.js') }}\"></script>
      <script type=\"text/javascript\" src=\"{{ asset('js/epoch.min.js') }}\"></script>
      <script type=\"text/javascript\" src=\"{{ asset('js/canvasjs.min.js') }}\"></script>

    {% endblock %}

  </head>

  <body>
    <!-- Fixed navbar -->
    <div class=\"navbar navbar-default\" role=\"navigation\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"{{ path('lljm_home_homepage') }}\"><span class=\"glyphicon glyphicon-home\" /></a>
        </div>
        <div class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ 'Housing' | trans }} <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                {% if is_granted('ROLE_ADMIN') %}
                <li class=\"dropdown-header\">{{ 'Settings' | trans }}</li>
                <li><a href=\"{{ path('home_house') }}\">{{ 'House' | trans }}</a></li>
                <li><a href=\"{{ path('home_zone') }}\">Zones</a></li>
                <li><a href=\"{{ path('home_subzone') }}\">{{ 'Sub zones' | trans }}</a></li>
                <li><a href=\"{{ path('home_node') }}\">{{ 'Nodes' | trans }}</a></li>
                <li><a href=\"{{ path('home_meter') }}\">{{ 'Meters' | trans }}</a></li>
                <li class=\"divider\"></li>
                {% endif %}
                <li class=\"dropdown-header\">{{ 'Action' | trans }}</li>
                <li><a href=\"{{ path('home_action_light') }}\">{{ 'Light' | trans }}</a></li>
                <li><a href=\"{{ path('home_action_heating') }}\">{{ 'Heating' | trans }}</a></li>
                <li><a href=\"{{ path('home_action_ventilation') }}\">{{ 'Ventilation' | trans }}</a></li>
                <li class=\"divider\"></li>
                <li class=\"dropdown-header\">{{ 'Visualization' | trans }}</li>
                <li><a href=\"{{ path('home_tempvisual') }}\">Temperature</a></li>
                <li><a href=\"{{ path('home_humidvisual') }}\">{{ 'Humidity' | trans }}</a></li>
                <li><a href=\"{{ path('home_elecvisual_day_detail') }}\">{{ 'Electricity' | trans }}</a></li>
                <li><a href=\"{{ path('home_watervisual_day_detail') }}\">{{ 'Water' | trans }}</a></li>
                <li><a href=\"{{ path('home_gasvisual_day_detail') }}\">{{ 'Gas' | trans }}</a></li>
              </ul>
            </li>
            {% if is_granted('ROLE_USER') %}
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ 'Health' | trans }} <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"{{ path('health_weight') }}\">{{ 'Weight' |trans }}</a></li>
                <li><a href=\"{{ path('health_height') }}\">{{ 'Height' | trans }}</a></li>
              </ul>
            </li>
            <li><a href=\"{{ path('geolocation_index') }}\">{{ 'Geolocation' | trans }}</a></li>
            {% endif %}
            {% if is_granted('ROLE_ADMIN') %}
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ 'Admin' | trans }} <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"{{ path('admin_user') }}\">{{ 'Users' |trans }}</a></li>
              </ul>
            </li>
            {% endif %}
            <li><a href=\"{{ path('home_about') }}\">{{ 'About' | trans }}</a></li>
          </ul>
          <ul class=\"nav navbar-nav navbar-right\">
            {% if app.user %}
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"glyphicon glyphicon-user\" /> {{ app.user.firstname }} <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a class=\"glyphicon glyphicon-log-out\" href=\"{{ path('fos_user_security_logout') }}\"> {{ 'Logout' | trans }}</a></li>
                </ul>
            </li>
            {% else %}
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"glyphicon glyphicon-user\" /> {{ 'Anonymous' | trans }} <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a class=\"glyphicon glyphicon-log-in\" href=\"{{ path('fos_user_security_login') }}\"> {{ 'Login' | trans }}</a></li>
                </ul>
            </li>
            {% endif %}
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"glyphicon glyphicon-book\" /> {{ 'Language' | trans }} [{{ app.request.locale }}]<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                 <li><a href=\"{{ path('lljm_home_homepage', {'_locale':'en'}) }}\">{{ 'English' | trans }}</a></li>
                  <li><a href=\"{{ path('lljm_home_homepage', {'_locale':'fr'}) }}\">{{ 'French' | trans }}</a></li>
                </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

            <div class=\"container\">

      <div class=\"row\">
        <div id=\"content\" class=\"span9\">
          {% block body %}
          {% endblock %}
        </div>
      </div>

      <hr>

      <footer>
        <p><img src=\"/bundles/lljmhome/images/gentoo-badge3.png\"></p>
      </footer>
    </div>

  {% block javascripts %}
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type=\"text/javascript\" src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/core.js') }}\"></script>

  {% endblock %}

  </body>
</html>", "::layout.html.twig", "/home/lljm/web/app/Resources/views/layout.html.twig");
    }
}
