<?php

/* LljmGeolocationBundle:Default:index.html.twig */
class __TwigTemplate_511c541011469cc79c3af8ad79793f0e14f4462cce1be718082b46530bd967e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LljmGeolocationBundle::layout.html.twig", "LljmGeolocationBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LljmGeolocationBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_307f8170e9a6daf16186dab05f4d13bf94fa37a7b685403b78f5666797925273 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_307f8170e9a6daf16186dab05f4d13bf94fa37a7b685403b78f5666797925273->enter($__internal_307f8170e9a6daf16186dab05f4d13bf94fa37a7b685403b78f5666797925273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmGeolocationBundle:Default:index.html.twig"));

        $__internal_593c65a0ba0ecc7e1f67eab0a2f8c16b431bad0dc34df97e62d405119a38e598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_593c65a0ba0ecc7e1f67eab0a2f8c16b431bad0dc34df97e62d405119a38e598->enter($__internal_593c65a0ba0ecc7e1f67eab0a2f8c16b431bad0dc34df97e62d405119a38e598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmGeolocationBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_307f8170e9a6daf16186dab05f4d13bf94fa37a7b685403b78f5666797925273->leave($__internal_307f8170e9a6daf16186dab05f4d13bf94fa37a7b685403b78f5666797925273_prof);

        
        $__internal_593c65a0ba0ecc7e1f67eab0a2f8c16b431bad0dc34df97e62d405119a38e598->leave($__internal_593c65a0ba0ecc7e1f67eab0a2f8c16b431bad0dc34df97e62d405119a38e598_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8a5f085e7bc9567885bf3836a3c8eaa0912778d130c4e63772cdce7cf7b2840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8a5f085e7bc9567885bf3836a3c8eaa0912778d130c4e63772cdce7cf7b2840->enter($__internal_f8a5f085e7bc9567885bf3836a3c8eaa0912778d130c4e63772cdce7cf7b2840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fd9456053f2fa1bf9ce6e97982220f04174b9da3faf0fe640682a75d2ed31bbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd9456053f2fa1bf9ce6e97982220f04174b9da3faf0fe640682a75d2ed31bbc->enter($__internal_fd9456053f2fa1bf9ce6e97982220f04174b9da3faf0fe640682a75d2ed31bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <h2>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Geolocation"), "html", null, true);
        echo "</h2>

<script type=\"text/javascript\">

    function display() {

      dst = \"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"));
        echo "\" + '/';
      dst += document.getElementById(\"datefrom\").value + ',';
      dst += document.getElementById(\"dateto\").value + ',';
      dst += document.getElementById(\"userlist\").value;
      
      location.href = dst;
  
    }

</script>

<div>
    <form class=\"form-inline\" role=\"form\" onsubmit=\"return false;\">

    <input type=\"text\" id=\"datefrom\" class=\"form-control datepicker\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["datefrom"]) || array_key_exists("datefrom", $context) ? $context["datefrom"] : (function () { throw new Twig_Error_Runtime('Variable "datefrom" does not exist.', 24, $this->getSourceContext()); })()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date from"), "html", null, true);
        echo "\">
    <input type=\"text\" id=\"dateto\" class=\"form-control datepicker\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["dateto"]) || array_key_exists("dateto", $context) ? $context["dateto"] : (function () { throw new Twig_Error_Runtime('Variable "dateto" does not exist.', 25, $this->getSourceContext()); })()), "html", null, true);
        echo "\"  placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date to"), "html", null, true);
        echo "\">

    <select id=\"userlist\" class=\"form-control\">
      ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["users"]);
        foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
            // line 29
            echo "
      <option value=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["users"], "id", array()), "html", null, true);
            echo "\" ";
            if (((isset($context["userid"]) || array_key_exists("userid", $context) ? $context["userid"] : (function () { throw new Twig_Error_Runtime('Variable "userid" does not exist.', 30, $this->getSourceContext()); })()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["users"], "id", array()))) {
                echo " selected ";
            }
            echo " >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["users"], "firstname", array()), "html", null, true);
            echo "</option>

      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </select>

    <button type=\"submit\" class = \"btn btn-default\" onclick=\"return display()\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search"), "html", null, true);
        echo "</button>

    </form>
</div>
<br>
<br>

<div class=\"container-fluid\">

<div class=\"row-fluid\">

<div id=\"geolocMap\" style=\"height:350px\"></div>

</div>
</div>

<script src=\"OpenLayers.js\"></script>
<script>

";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["geoloclogs"]);
        foreach ($context['_seq'] as $context["_key"] => $context["geoloclogs"]) {
            // line 55
            echo "
  var x= ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["geoloclogs"], "longitude", array()), "html", null, true);
            echo ";
  var y= ";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["geoloclogs"], "latitude", array()), "html", null, true);
            echo ";

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geoloclogs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "
  var map = new ol.Map({
  target: 'geolocMap',
  layers: [
    new ol.layer.Tile({
      source: new ol.source.OSM()
    })
  ],
  view: new ol.View({
    center: ol.proj.transform([x, y], 'EPSG:4326', 'EPSG:3857'),
    zoom: 15
  })
});

    var vectorSource = new ol.source.Vector({
        //create empty vector
    });

    var markers = []; 

    function AddMarkers() {

";
        // line 82
        $context["i"] = 0;
        // line 83
        echo "
";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["geoloclogs"]);
        foreach ($context['_seq'] as $context["_key"] => $context["geoloclogs"]) {
            // line 85
            echo "
            var x= ";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["geoloclogs"], "longitude", array()), "html", null, true);
            echo ";
            var y= ";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["geoloclogs"], "latitude", array()), "html", null, true);
            echo ";

            var iconFeature = new ol.Feature({
                geometry: new ol.geom.Point(ol.proj.transform([x,y], 'EPSG:4326',   'EPSG:3857')),
                name: 'Marker ";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["geoloclogs"], "id", array()), "html", null, true);
            echo "'
            });
            markers[";
            // line 93
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 93, $this->getSourceContext()); })()), "html", null, true);
            echo "]=  ol.proj.transform([x,y], 'EPSG:4326',   'EPSG:3857');
            vectorSource.addFeature(iconFeature);

            var rotation= ";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["geoloclogs"], "direction", array()), "html", null, true);
            echo " * Math.PI / 180;

          iconFeature.setStyle(new ol.style.Style({
                image: new ol.style.Icon( /** @type {olx.style.IconOptions} */ ({
                    anchor: [0.5, 0.5],
                    rotation: rotation,
                    anchorXUnits: 'fraction',
                    anchorYUnits: 'fraction',
                    src: '";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lljmgeolocation/images/arrow_alt_up.png"), "html", null, true);
            echo "'
                }))
            }));

";
            // line 108
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 108, $this->getSourceContext()); })()) + 1);
            // line 109
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geoloclogs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "  

        //add the vector feature to the layer vector
        var vectorLayer = new ol.layer.Vector({
            source: vectorSource
        });
        return vectorLayer;
    }


    var layerMarkers = AddMarkers();

var layerLines = new ol.layer.Vector({
    source: new ol.source.Vector({
        features: [new ol.Feature({
            geometry: new ol.geom.LineString(markers, 'XY'),
            name: 'Line'
        })]
    })
});

    map.addLayer(layerMarkers);
    map.addLayer(layerLines);
    console.log(layerLines.getSource());


</script>

    <div class=\"table-responsive\">
      <table class=\"table table-striped\">
        <thead>
          <tr>
            <th>";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("User"), "html", null, true);
        echo "</th>
            <th>";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Latitude"), "html", null, true);
        echo "</th>
            <th>";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Longitude"), "html", null, true);
        echo "</th>
            <th>";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Altitude"), "html", null, true);
        echo "</th>
            <th>";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Speed"), "html", null, true);
        echo " (km/h)</th>
            <th>";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Direction"), "html", null, true);
        echo " (Deg.)</th>
            <th>";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Battery"), "html", null, true);
        echo "</th>
            <th>";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date"), "html", null, true);
        echo " (UTC)</th>
          </tr>
        </thead>
        <tbody>
  ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["geoloclogs"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["geoloclogs"]) {
            // line 155
            echo "          <tr>
            <td>";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["geoloclogs"], "firstname", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["geoloclogs"], "latitude", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["geoloclogs"], "longitude", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["geoloclogs"], "altitude", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 160
            echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["geoloclogs"], "speed", array()) * 3600) / 1000)), "html", null, true);
            echo "</td>
            <td>";
            // line 161
            echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->getSourceContext(), $context["geoloclogs"], "direction", array())), "html", null, true);
            echo "</td>
            <td>";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["geoloclogs"], "battery", array()), "html", null, true);
            echo "%</td>
            <td>";
            // line 163
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["geoloclogs"], "logdate", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
          </tr>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 166
            echo "    <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No record in this table"), "html", null, true);
            echo ".</p>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geoloclogs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "        </tbody>
      </table>
    </div>

          ";
        
        $__internal_fd9456053f2fa1bf9ce6e97982220f04174b9da3faf0fe640682a75d2ed31bbc->leave($__internal_fd9456053f2fa1bf9ce6e97982220f04174b9da3faf0fe640682a75d2ed31bbc_prof);

        
        $__internal_f8a5f085e7bc9567885bf3836a3c8eaa0912778d130c4e63772cdce7cf7b2840->leave($__internal_f8a5f085e7bc9567885bf3836a3c8eaa0912778d130c4e63772cdce7cf7b2840_prof);

    }

    public function getTemplateName()
    {
        return "LljmGeolocationBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 168,  356 => 166,  348 => 163,  344 => 162,  340 => 161,  336 => 160,  332 => 159,  328 => 158,  324 => 157,  320 => 156,  317 => 155,  312 => 154,  305 => 150,  301 => 149,  297 => 148,  293 => 147,  289 => 146,  285 => 145,  281 => 144,  277 => 143,  243 => 111,  236 => 109,  234 => 108,  227 => 104,  216 => 96,  210 => 93,  205 => 91,  198 => 87,  194 => 86,  191 => 85,  187 => 84,  184 => 83,  182 => 82,  158 => 60,  149 => 57,  145 => 56,  142 => 55,  138 => 54,  116 => 35,  112 => 33,  97 => 30,  94 => 29,  90 => 28,  82 => 25,  76 => 24,  59 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"LljmGeolocationBundle::layout.html.twig\" %}

         {% block body %}
  <h2>{{ 'Geolocation' | trans }}</h2>

<script type=\"text/javascript\">

    function display() {

      dst = \"{{ path(app.request.attributes.get('_route')) }}\" + '/';
      dst += document.getElementById(\"datefrom\").value + ',';
      dst += document.getElementById(\"dateto\").value + ',';
      dst += document.getElementById(\"userlist\").value;
      
      location.href = dst;
  
    }

</script>

<div>
    <form class=\"form-inline\" role=\"form\" onsubmit=\"return false;\">

    <input type=\"text\" id=\"datefrom\" class=\"form-control datepicker\" value=\"{{ datefrom }}\" placeholder=\"{{ 'date from' | trans}}\">
    <input type=\"text\" id=\"dateto\" class=\"form-control datepicker\" value=\"{{ dateto }}\"  placeholder=\"{{ 'date to' | trans}}\">

    <select id=\"userlist\" class=\"form-control\">
      {% for users in users %}

      <option value=\"{{ users.id }}\" {% if userid == users.id %} selected {% endif %} >{{ users.firstname }}</option>

      {% endfor %}
    </select>

    <button type=\"submit\" class = \"btn btn-default\" onclick=\"return display()\">{{ \"Search\" | trans }}</button>

    </form>
</div>
<br>
<br>

<div class=\"container-fluid\">

<div class=\"row-fluid\">

<div id=\"geolocMap\" style=\"height:350px\"></div>

</div>
</div>

<script src=\"OpenLayers.js\"></script>
<script>

{% for geoloclogs in geoloclogs %}

  var x= {{ geoloclogs.longitude }};
  var y= {{ geoloclogs.latitude }};

{% endfor %}

  var map = new ol.Map({
  target: 'geolocMap',
  layers: [
    new ol.layer.Tile({
      source: new ol.source.OSM()
    })
  ],
  view: new ol.View({
    center: ol.proj.transform([x, y], 'EPSG:4326', 'EPSG:3857'),
    zoom: 15
  })
});

    var vectorSource = new ol.source.Vector({
        //create empty vector
    });

    var markers = []; 

    function AddMarkers() {

{% set i = 0 %}

{% for geoloclogs in geoloclogs %}

            var x= {{ geoloclogs.longitude }};
            var y= {{ geoloclogs.latitude }};

            var iconFeature = new ol.Feature({
                geometry: new ol.geom.Point(ol.proj.transform([x,y], 'EPSG:4326',   'EPSG:3857')),
                name: 'Marker {{ geoloclogs.id }}'
            });
            markers[{{ i }}]=  ol.proj.transform([x,y], 'EPSG:4326',   'EPSG:3857');
            vectorSource.addFeature(iconFeature);

            var rotation= {{ geoloclogs.direction }} * Math.PI / 180;

          iconFeature.setStyle(new ol.style.Style({
                image: new ol.style.Icon( /** @type {olx.style.IconOptions} */ ({
                    anchor: [0.5, 0.5],
                    rotation: rotation,
                    anchorXUnits: 'fraction',
                    anchorYUnits: 'fraction',
                    src: '{{ asset('bundles/lljmgeolocation/images/arrow_alt_up.png') }}'
                }))
            }));

{% set i = i + 1 %}

{% endfor %}
  

        //add the vector feature to the layer vector
        var vectorLayer = new ol.layer.Vector({
            source: vectorSource
        });
        return vectorLayer;
    }


    var layerMarkers = AddMarkers();

var layerLines = new ol.layer.Vector({
    source: new ol.source.Vector({
        features: [new ol.Feature({
            geometry: new ol.geom.LineString(markers, 'XY'),
            name: 'Line'
        })]
    })
});

    map.addLayer(layerMarkers);
    map.addLayer(layerLines);
    console.log(layerLines.getSource());


</script>

    <div class=\"table-responsive\">
      <table class=\"table table-striped\">
        <thead>
          <tr>
            <th>{{ 'User' | trans }}</th>
            <th>{{ 'Latitude' | trans }}</th>
            <th>{{ 'Longitude' | trans }}</th>
            <th>{{ 'Altitude' | trans }}</th>
            <th>{{ 'Speed' | trans }} (km/h)</th>
            <th>{{ 'Direction' | trans }} (Deg.)</th>
            <th>{{ 'Battery' | trans }}</th>
            <th>{{ 'Date' | trans }} (UTC)</th>
          </tr>
        </thead>
        <tbody>
  {% for geoloclogs in geoloclogs %}
          <tr>
            <td>{{ geoloclogs.firstname }}</td>
            <td>{{ geoloclogs.latitude }}</td>
            <td>{{ geoloclogs.longitude }}</td>
            <td>{{ geoloclogs.altitude }}</td>
            <td>{{ (geoloclogs.speed * 3600 / 1000) | round }}</td>
            <td>{{ geoloclogs.direction | round }}</td>
            <td>{{ geoloclogs.battery }}%</td>
            <td>{{ geoloclogs.logdate | date(\"Y-m-d H:i:s\") }}</td>
          </tr>
  {% else %}
    <p>{{ 'No record in this table' | trans }}.</p>
  {% endfor %}
        </tbody>
      </table>
    </div>

          {% endblock %}", "LljmGeolocationBundle:Default:index.html.twig", "/home/lljm/web/src/Lljm/GeolocationBundle/Resources/views/Default/index.html.twig");
    }
}
