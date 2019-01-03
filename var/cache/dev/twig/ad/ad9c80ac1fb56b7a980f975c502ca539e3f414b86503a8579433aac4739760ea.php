<?php

/* ::layout.html.twig */
class __TwigTemplate_d6afd07f70fa176fe8741893e90e3f274df1afd950c4c6da9219f925059539f7 extends Twig_Template
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
        $__internal_c6248b411f47964eab77102b1e3c95fe4bbf0678917fe41914690cf4a5808dc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6248b411f47964eab77102b1e3c95fe4bbf0678917fe41914690cf4a5808dc6->enter($__internal_c6248b411f47964eab77102b1e3c95fe4bbf0678917fe41914690cf4a5808dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_281d21879a18e01863adb454aa7cedcc55aa3f41311e6082155f15385042128c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_281d21879a18e01863adb454aa7cedcc55aa3f41311e6082155f15385042128c->enter($__internal_281d21879a18e01863adb454aa7cedcc55aa3f41311e6082155f15385042128c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        // line 46
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
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lljm_home_homepage");
        echo "\"><span class=\"glyphicon glyphicon-home\" /></a>
        </div>
        <div class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Housing"), "html", null, true);
        echo " <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                ";
        // line 67
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 68
            echo "                <li class=\"dropdown-header\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Settings"), "html", null, true);
            echo "</li>
                <li><a href=\"";
            // line 69
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_house");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("House"), "html", null, true);
            echo "</a></li>
                <li><a href=\"";
            // line 70
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_zone");
            echo "\">Zones</a></li>
                <li><a href=\"";
            // line 71
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_subzone");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sub zones"), "html", null, true);
            echo "</a></li>
                <li><a href=\"";
            // line 72
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_node");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nodes"), "html", null, true);
            echo "</a></li>
                <li><a href=\"";
            // line 73
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_meter");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Meters"), "html", null, true);
            echo "</a></li>
                <li class=\"divider\"></li>
                ";
        }
        // line 76
        echo "                <li class=\"dropdown-header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Action"), "html", null, true);
        echo "</li>
                <li><a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_action_light");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Light"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_action_heating");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Heating"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_action_ventilation");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ventilation"), "html", null, true);
        echo "</a></li>
                <li class=\"divider\"></li>
                <li class=\"dropdown-header\">";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Visualization"), "html", null, true);
        echo "</li>
                <li><a href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_tempvisual");
        echo "\">Temperature</a></li>
                <li><a href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_humidvisual");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Humidity"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_elecvisual");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Electricity"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_watervisual");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Water"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_gasvisual");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gas"), "html", null, true);
        echo "</a></li>
              </ul>
            </li>
            ";
        // line 89
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 90
            echo "            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tools"), "html", null, true);
            echo " <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"";
            // line 93
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("geolocation_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Geolocation"), "html", null, true);
            echo "</a></li>
                <li><a href=\"";
            // line 94
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("health_weight");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Health - Weight"), "html", null, true);
            echo "</a></li>
                <li><a href=\"";
            // line 95
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("health_height");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Health - Height"), "html", null, true);
            echo "</a></li>
                <li><a href=\"";
            // line 96
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tasks");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tasks"), "html", null, true);
            echo "</a></li>
              </ul>
            </li>
            ";
        }
        // line 100
        echo "            ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 101
            echo "            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin"), "html", null, true);
            echo " <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"";
            // line 104
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Users"), "html", null, true);
            echo "</a></li>
              </ul>
            </li>
            ";
        }
        // line 108
        echo "            <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_about");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("About"), "html", null, true);
        echo "</a></li>
          </ul>
          <ul class=\"nav navbar-nav navbar-right\">
            ";
        // line 111
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 111, $this->getSourceContext()); })()), "user", array())) {
            // line 112
            echo "            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"glyphicon glyphicon-user\" /> ";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 113, $this->getSourceContext()); })()), "user", array()), "firstname", array()), "html", null, true);
            echo " <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a class=\"glyphicon glyphicon-log-out\" href=\"";
            // line 115
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Logout"), "html", null, true);
            echo "</a></li>
                </ul>
            </li>
            ";
        } else {
            // line 119
            echo "            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"glyphicon glyphicon-user\" /> ";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Anonymous"), "html", null, true);
            echo " <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a class=\"glyphicon glyphicon-log-in\" href=\"";
            // line 122
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Login"), "html", null, true);
            echo "</a></li>
                </ul>
            </li>
            ";
        }
        // line 126
        echo "            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"glyphicon glyphicon-book\" /> ";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Language"), "html", null, true);
        echo " [";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 127, $this->getSourceContext()); })()), "request", array()), "locale", array()), "html", null, true);
        echo "]<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                 <li><a href=\"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lljm_home_homepage", array("_locale" => "en"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("English"), "html", null, true);
        echo "</a></li>
                  <li><a href=\"";
        // line 130
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
        // line 142
        $this->displayBlock('body', $context, $blocks);
        // line 144
        echo "        </div>
      </div>

      <hr>

      <footer>
        <p><img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lljmhome/images/gentoo-badge3.png"), "html", null, true);
        echo "\"></p>
      </footer>
    </div>

  ";
        // line 154
        $this->displayBlock('javascripts', $context, $blocks);
        // line 162
        echo "
  </body>
</html>";
        
        $__internal_c6248b411f47964eab77102b1e3c95fe4bbf0678917fe41914690cf4a5808dc6->leave($__internal_c6248b411f47964eab77102b1e3c95fe4bbf0678917fe41914690cf4a5808dc6_prof);

        
        $__internal_281d21879a18e01863adb454aa7cedcc55aa3f41311e6082155f15385042128c->leave($__internal_281d21879a18e01863adb454aa7cedcc55aa3f41311e6082155f15385042128c_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_66381c8d544133c5594cb60666c7b88c5345870bb9ba9e0cd62a1621f3294ca3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66381c8d544133c5594cb60666c7b88c5345870bb9ba9e0cd62a1621f3294ca3->enter($__internal_66381c8d544133c5594cb60666c7b88c5345870bb9ba9e0cd62a1621f3294ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_db0a51c37602b81aa0d5e0cd8a1ac991c25ee1a3f52d6ed42d200562625d3aa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db0a51c37602b81aa0d5e0cd8a1ac991c25ee1a3f52d6ed42d200562625d3aa8->enter($__internal_db0a51c37602b81aa0d5e0cd8a1ac991c25ee1a3f52d6ed42d200562625d3aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Smart House";
        
        $__internal_db0a51c37602b81aa0d5e0cd8a1ac991c25ee1a3f52d6ed42d200562625d3aa8->leave($__internal_db0a51c37602b81aa0d5e0cd8a1ac991c25ee1a3f52d6ed42d200562625d3aa8_prof);

        
        $__internal_66381c8d544133c5594cb60666c7b88c5345870bb9ba9e0cd62a1621f3294ca3->leave($__internal_66381c8d544133c5594cb60666c7b88c5345870bb9ba9e0cd62a1621f3294ca3_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ca4a7c8af5d8b6ec46d35afcad6603a83842264357b8dcf9a85ce6c44c658179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca4a7c8af5d8b6ec46d35afcad6603a83842264357b8dcf9a85ce6c44c658179->enter($__internal_ca4a7c8af5d8b6ec46d35afcad6603a83842264357b8dcf9a85ce6c44c658179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e22bacdca65c06c7ac3508a09ed94b745a0506f1c5776b9c522a0c42455bb229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e22bacdca65c06c7ac3508a09ed94b745a0506f1c5776b9c522a0c42455bb229->enter($__internal_e22bacdca65c06c7ac3508a09ed94b745a0506f1c5776b9c522a0c42455bb229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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

    <!-- VSCP encryption/decryption -->
      <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lljmhome/js/aes-js-3.1.0/index.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lljmhome/js/vscp.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lljmhome/js/settings.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lljmhome/js/vscpmd5.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lljmhome/js/moment.min.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lljmhome/js/Chart.js"), "html", null, true);
        echo "\"></script>

      <script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lljmgeolocation/js/ol.js"), "html", null, true);
        echo "\"></script>

    <!-- VSCP widget library, dependend on the VSCP websocket base library and jCanvas -->
      <script type=\"text/javascript\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lljmhome/js/vscpwidgets.js"), "html", null, true);
        echo "\"></script>

    <!-- jCanvas is a jQuery plugin that makes the HTML5 canvas easy to work with. -->
      <script type=\"text/javascript\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lljmhome/js/jcanvas/20.1.4/jcanvas.js"), "html", null, true);
        echo "\"></script>

      <!-- D3 and Epoch JavaScript
      <script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/d3.min.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/epoch.min.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/canvasjs.min.js"), "html", null, true);
        echo "\"></script>
      ================================================== -->

    ";
        
        $__internal_e22bacdca65c06c7ac3508a09ed94b745a0506f1c5776b9c522a0c42455bb229->leave($__internal_e22bacdca65c06c7ac3508a09ed94b745a0506f1c5776b9c522a0c42455bb229_prof);

        
        $__internal_ca4a7c8af5d8b6ec46d35afcad6603a83842264357b8dcf9a85ce6c44c658179->leave($__internal_ca4a7c8af5d8b6ec46d35afcad6603a83842264357b8dcf9a85ce6c44c658179_prof);

    }

    // line 142
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f246e099ff0208cbf1d38cd7110d0722031ec2b7af1c275d48c58ec9b5ef7cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f246e099ff0208cbf1d38cd7110d0722031ec2b7af1c275d48c58ec9b5ef7cb->enter($__internal_3f246e099ff0208cbf1d38cd7110d0722031ec2b7af1c275d48c58ec9b5ef7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_40d4bcb2814bfad23c30006cdd36f48af76e1b9beeb32f1329f35f3204053d47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40d4bcb2814bfad23c30006cdd36f48af76e1b9beeb32f1329f35f3204053d47->enter($__internal_40d4bcb2814bfad23c30006cdd36f48af76e1b9beeb32f1329f35f3204053d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 143
        echo "          ";
        
        $__internal_40d4bcb2814bfad23c30006cdd36f48af76e1b9beeb32f1329f35f3204053d47->leave($__internal_40d4bcb2814bfad23c30006cdd36f48af76e1b9beeb32f1329f35f3204053d47_prof);

        
        $__internal_3f246e099ff0208cbf1d38cd7110d0722031ec2b7af1c275d48c58ec9b5ef7cb->leave($__internal_3f246e099ff0208cbf1d38cd7110d0722031ec2b7af1c275d48c58ec9b5ef7cb_prof);

    }

    // line 154
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a9266509ea36220d92e74eba137aef1df83ca3b169563d3ea8c0665bd4f269e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9266509ea36220d92e74eba137aef1df83ca3b169563d3ea8c0665bd4f269e6->enter($__internal_a9266509ea36220d92e74eba137aef1df83ca3b169563d3ea8c0665bd4f269e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_67d15fcdaca7cf5a567283a8ec6210dfa668a1356ccec6960de6c8f7e9b2fcec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67d15fcdaca7cf5a567283a8ec6210dfa668a1356ccec6960de6c8f7e9b2fcec->enter($__internal_67d15fcdaca7cf5a567283a8ec6210dfa668a1356ccec6960de6c8f7e9b2fcec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 155
        echo "    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type=\"text/javascript\" src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/core.js"), "html", null, true);
        echo "\"></script>

  ";
        
        $__internal_67d15fcdaca7cf5a567283a8ec6210dfa668a1356ccec6960de6c8f7e9b2fcec->leave($__internal_67d15fcdaca7cf5a567283a8ec6210dfa668a1356ccec6960de6c8f7e9b2fcec_prof);

        
        $__internal_a9266509ea36220d92e74eba137aef1df83ca3b169563d3ea8c0665bd4f269e6->leave($__internal_a9266509ea36220d92e74eba137aef1df83ca3b169563d3ea8c0665bd4f269e6_prof);

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
        return array (  499 => 159,  495 => 158,  490 => 155,  481 => 154,  471 => 143,  462 => 142,  448 => 42,  444 => 41,  440 => 40,  434 => 37,  428 => 34,  422 => 31,  417 => 29,  413 => 28,  409 => 27,  405 => 26,  401 => 25,  397 => 24,  391 => 21,  387 => 20,  383 => 19,  378 => 17,  374 => 16,  370 => 15,  365 => 14,  356 => 13,  338 => 11,  326 => 162,  324 => 154,  317 => 150,  309 => 144,  307 => 142,  290 => 130,  284 => 129,  277 => 127,  274 => 126,  265 => 122,  260 => 120,  257 => 119,  248 => 115,  243 => 113,  240 => 112,  238 => 111,  229 => 108,  220 => 104,  215 => 102,  212 => 101,  209 => 100,  200 => 96,  194 => 95,  188 => 94,  182 => 93,  177 => 91,  174 => 90,  172 => 89,  164 => 86,  158 => 85,  152 => 84,  146 => 83,  142 => 82,  138 => 81,  131 => 79,  125 => 78,  119 => 77,  114 => 76,  106 => 73,  100 => 72,  94 => 71,  90 => 70,  84 => 69,  79 => 68,  77 => 67,  72 => 65,  64 => 60,  48 => 46,  46 => 13,  41 => 11,  29 => 1,);
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

    <!-- VSCP encryption/decryption -->
      <script type=\"text/javascript\" src=\"{{ asset('bundles/lljmhome/js/aes-js-3.1.0/index.js') }}\"></script>
      <script type=\"text/javascript\" src=\"{{ asset('bundles/lljmhome/js/vscp.js') }}\"></script>
      <script type=\"text/javascript\" src=\"{{ asset('bundles/lljmhome/js/settings.js') }}\"></script>
      <script type=\"text/javascript\" src=\"{{ asset('bundles/lljmhome/js/vscpmd5.js') }}\"></script>
      <script type=\"text/javascript\" src=\"{{ asset('bundles/lljmhome/js/moment.min.js') }}\"></script>
      <script type=\"text/javascript\" src=\"{{ asset('bundles/lljmhome/js/Chart.js') }}\"></script>

      <script type=\"text/javascript\" src=\"{{ asset('bundles/lljmgeolocation/js/ol.js') }}\"></script>

    <!-- VSCP widget library, dependend on the VSCP websocket base library and jCanvas -->
      <script type=\"text/javascript\" src=\"{{ asset('bundles/lljmhome/js/vscpwidgets.js') }}\"></script>

    <!-- jCanvas is a jQuery plugin that makes the HTML5 canvas easy to work with. -->
      <script type=\"text/javascript\" src=\"{{ asset('bundles/lljmhome/js/jcanvas/20.1.4/jcanvas.js') }}\"></script>

      <!-- D3 and Epoch JavaScript
      <script type=\"text/javascript\" src=\"{{ asset('js/d3.min.js') }}\"></script>
      <script type=\"text/javascript\" src=\"{{ asset('js/epoch.min.js') }}\"></script>
      <script type=\"text/javascript\" src=\"{{ asset('js/canvasjs.min.js') }}\"></script>
      ================================================== -->

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
                <li><a href=\"{{ path('home_elecvisual') }}\">{{ 'Electricity' | trans }}</a></li>
                <li><a href=\"{{ path('home_watervisual') }}\">{{ 'Water' | trans }}</a></li>
                <li><a href=\"{{ path('home_gasvisual') }}\">{{ 'Gas' | trans }}</a></li>
              </ul>
            </li>
            {% if is_granted('ROLE_USER') %}
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ 'Tools' | trans }} <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"{{ path('geolocation_index') }}\">{{ 'Geolocation' | trans }}</a></li>
                <li><a href=\"{{ path('health_weight') }}\">{{ 'Health - Weight' |trans }}</a></li>
                <li><a href=\"{{ path('health_height') }}\">{{ 'Health - Height' | trans }}</a></li>
                <li><a href=\"{{ path('tasks') }}\">{{ 'Tasks' | trans }}</a></li>
              </ul>
            </li>
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
        <p><img src=\"{{ asset('bundles/lljmhome/images/gentoo-badge3.png') }}\"></p>
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
