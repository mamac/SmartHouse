<?php

/* ::layout.html.twig */
class __TwigTemplate_49c6a92a177911cb3bb2ecea79d68e299f53f1c1f0b4e0aaff03576b261ef5c9 extends Twig_Template
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
        $__internal_bebf9a57fd76784c047104fd4be1eb9b2d5b02d4690f94b5778b782e1a154d8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bebf9a57fd76784c047104fd4be1eb9b2d5b02d4690f94b5778b782e1a154d8f->enter($__internal_bebf9a57fd76784c047104fd4be1eb9b2d5b02d4690f94b5778b782e1a154d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_e7f852b3e700345681a8e723a7276396e313ab165afb7a40ad945728931d88cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f852b3e700345681a8e723a7276396e313ab165afb7a40ad945728931d88cb->enter($__internal_e7f852b3e700345681a8e723a7276396e313ab165afb7a40ad945728931d88cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Health"), "html", null, true);
            echo " <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"";
            // line 93
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("health_weight");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Weight"), "html", null, true);
            echo "</a></li>
                <li><a href=\"";
            // line 94
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("health_height");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Height"), "html", null, true);
            echo "</a></li>
              </ul>
            </li>
            <li><a href=\"";
            // line 97
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("geolocation_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Geolocation"), "html", null, true);
            echo "</a></li>
            ";
        }
        // line 99
        echo "            ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 100
            echo "            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin"), "html", null, true);
            echo " <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"";
            // line 103
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Users"), "html", null, true);
            echo "</a></li>
              </ul>
            </li>
            ";
        }
        // line 107
        echo "            <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_about");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("About"), "html", null, true);
        echo "</a></li>
          </ul>
          <ul class=\"nav navbar-nav navbar-right\">
            ";
        // line 110
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 110, $this->getSourceContext()); })()), "user", array())) {
            // line 111
            echo "            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"glyphicon glyphicon-user\" /> ";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 112, $this->getSourceContext()); })()), "user", array()), "firstname", array()), "html", null, true);
            echo " <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a class=\"glyphicon glyphicon-log-out\" href=\"";
            // line 114
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Logout"), "html", null, true);
            echo "</a></li>
                </ul>
            </li>
            ";
        } else {
            // line 118
            echo "            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"glyphicon glyphicon-user\" /> ";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Anonymous"), "html", null, true);
            echo " <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a class=\"glyphicon glyphicon-log-in\" href=\"";
            // line 121
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Login"), "html", null, true);
            echo "</a></li>
                </ul>
            </li>
            ";
        }
        // line 125
        echo "            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"glyphicon glyphicon-book\" /> ";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Language"), "html", null, true);
        echo " [";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 126, $this->getSourceContext()); })()), "request", array()), "locale", array()), "html", null, true);
        echo "]<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                 <li><a href=\"";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lljm_home_homepage", array("_locale" => "en"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("English"), "html", null, true);
        echo "</a></li>
                  <li><a href=\"";
        // line 129
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
        // line 141
        $this->displayBlock('body', $context, $blocks);
        // line 143
        echo "        </div>
      </div>

      <hr>

      <footer>
        <p><img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lljmhome/images/gentoo-badge3.png"), "html", null, true);
        echo "\"></p>
      </footer>
    </div>

  ";
        // line 153
        $this->displayBlock('javascripts', $context, $blocks);
        // line 161
        echo "
  </body>
</html>";
        
        $__internal_bebf9a57fd76784c047104fd4be1eb9b2d5b02d4690f94b5778b782e1a154d8f->leave($__internal_bebf9a57fd76784c047104fd4be1eb9b2d5b02d4690f94b5778b782e1a154d8f_prof);

        
        $__internal_e7f852b3e700345681a8e723a7276396e313ab165afb7a40ad945728931d88cb->leave($__internal_e7f852b3e700345681a8e723a7276396e313ab165afb7a40ad945728931d88cb_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_388fe62a658ace34e04fae8c9744f0842708738c49435d3a16320eb5c2f1838d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_388fe62a658ace34e04fae8c9744f0842708738c49435d3a16320eb5c2f1838d->enter($__internal_388fe62a658ace34e04fae8c9744f0842708738c49435d3a16320eb5c2f1838d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_48e5e2cd688e974e3fa3680c3a52319d9e653db09a55c2d088c17ecf7f9ca930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48e5e2cd688e974e3fa3680c3a52319d9e653db09a55c2d088c17ecf7f9ca930->enter($__internal_48e5e2cd688e974e3fa3680c3a52319d9e653db09a55c2d088c17ecf7f9ca930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Smart House";
        
        $__internal_48e5e2cd688e974e3fa3680c3a52319d9e653db09a55c2d088c17ecf7f9ca930->leave($__internal_48e5e2cd688e974e3fa3680c3a52319d9e653db09a55c2d088c17ecf7f9ca930_prof);

        
        $__internal_388fe62a658ace34e04fae8c9744f0842708738c49435d3a16320eb5c2f1838d->leave($__internal_388fe62a658ace34e04fae8c9744f0842708738c49435d3a16320eb5c2f1838d_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0a0f2f1ab9430c955979a6b047f48f77c41a21727fcbc2ac8afe812fcbd6311e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a0f2f1ab9430c955979a6b047f48f77c41a21727fcbc2ac8afe812fcbd6311e->enter($__internal_0a0f2f1ab9430c955979a6b047f48f77c41a21727fcbc2ac8afe812fcbd6311e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4aa8ae1c567ab6ca37b8b158fe1bec5c6d0592b9bf5c17b85454f9c3582f5047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aa8ae1c567ab6ca37b8b158fe1bec5c6d0592b9bf5c17b85454f9c3582f5047->enter($__internal_4aa8ae1c567ab6ca37b8b158fe1bec5c6d0592b9bf5c17b85454f9c3582f5047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_4aa8ae1c567ab6ca37b8b158fe1bec5c6d0592b9bf5c17b85454f9c3582f5047->leave($__internal_4aa8ae1c567ab6ca37b8b158fe1bec5c6d0592b9bf5c17b85454f9c3582f5047_prof);

        
        $__internal_0a0f2f1ab9430c955979a6b047f48f77c41a21727fcbc2ac8afe812fcbd6311e->leave($__internal_0a0f2f1ab9430c955979a6b047f48f77c41a21727fcbc2ac8afe812fcbd6311e_prof);

    }

    // line 141
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a15323bdada92da1f48388d775c0635969744378fc8a1531ca5623783534f17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a15323bdada92da1f48388d775c0635969744378fc8a1531ca5623783534f17->enter($__internal_9a15323bdada92da1f48388d775c0635969744378fc8a1531ca5623783534f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_99c45a73701ad6b3d323f30a7da525b9d7ad25ea847bea953acdaf13aaeefbbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99c45a73701ad6b3d323f30a7da525b9d7ad25ea847bea953acdaf13aaeefbbd->enter($__internal_99c45a73701ad6b3d323f30a7da525b9d7ad25ea847bea953acdaf13aaeefbbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 142
        echo "          ";
        
        $__internal_99c45a73701ad6b3d323f30a7da525b9d7ad25ea847bea953acdaf13aaeefbbd->leave($__internal_99c45a73701ad6b3d323f30a7da525b9d7ad25ea847bea953acdaf13aaeefbbd_prof);

        
        $__internal_9a15323bdada92da1f48388d775c0635969744378fc8a1531ca5623783534f17->leave($__internal_9a15323bdada92da1f48388d775c0635969744378fc8a1531ca5623783534f17_prof);

    }

    // line 153
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3b56a829e67b06793e6fe3a3c8b1e4ff37bfa0baf4d7f9b7c46721f67aff975b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b56a829e67b06793e6fe3a3c8b1e4ff37bfa0baf4d7f9b7c46721f67aff975b->enter($__internal_3b56a829e67b06793e6fe3a3c8b1e4ff37bfa0baf4d7f9b7c46721f67aff975b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_039a3e06bc896a0eb351be8d5b4280aeace28f138f3add93f5ad53a8905255d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_039a3e06bc896a0eb351be8d5b4280aeace28f138f3add93f5ad53a8905255d1->enter($__internal_039a3e06bc896a0eb351be8d5b4280aeace28f138f3add93f5ad53a8905255d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 154
        echo "    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type=\"text/javascript\" src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/core.js"), "html", null, true);
        echo "\"></script>

  ";
        
        $__internal_039a3e06bc896a0eb351be8d5b4280aeace28f138f3add93f5ad53a8905255d1->leave($__internal_039a3e06bc896a0eb351be8d5b4280aeace28f138f3add93f5ad53a8905255d1_prof);

        
        $__internal_3b56a829e67b06793e6fe3a3c8b1e4ff37bfa0baf4d7f9b7c46721f67aff975b->leave($__internal_3b56a829e67b06793e6fe3a3c8b1e4ff37bfa0baf4d7f9b7c46721f67aff975b_prof);

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
        return array (  493 => 158,  489 => 157,  484 => 154,  475 => 153,  465 => 142,  456 => 141,  442 => 42,  438 => 41,  434 => 40,  428 => 37,  422 => 34,  416 => 31,  411 => 29,  407 => 28,  403 => 27,  399 => 26,  395 => 25,  391 => 24,  385 => 21,  381 => 20,  377 => 19,  372 => 17,  368 => 16,  364 => 15,  359 => 14,  350 => 13,  332 => 11,  320 => 161,  318 => 153,  311 => 149,  303 => 143,  301 => 141,  284 => 129,  278 => 128,  271 => 126,  268 => 125,  259 => 121,  254 => 119,  251 => 118,  242 => 114,  237 => 112,  234 => 111,  232 => 110,  223 => 107,  214 => 103,  209 => 101,  206 => 100,  203 => 99,  196 => 97,  188 => 94,  182 => 93,  177 => 91,  174 => 90,  172 => 89,  164 => 86,  158 => 85,  152 => 84,  146 => 83,  142 => 82,  138 => 81,  131 => 79,  125 => 78,  119 => 77,  114 => 76,  106 => 73,  100 => 72,  94 => 71,  90 => 70,  84 => 69,  79 => 68,  77 => 67,  72 => 65,  64 => 60,  48 => 46,  46 => 13,  41 => 11,  29 => 1,);
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
