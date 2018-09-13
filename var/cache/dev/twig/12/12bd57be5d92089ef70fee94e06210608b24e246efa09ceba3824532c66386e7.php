<?php

/* LljmGeolocationBundle:Default:index.html.twig */
class __TwigTemplate_8da25a3a745821cc35b8aeb68b90cb32179d4ccc8099aec53cd0c5f7013ee2c8 extends Twig_Template
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
        $__internal_59b2ae401977abe82e5c6d503578ebaf90a880aa645c94d156551768f0232a97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59b2ae401977abe82e5c6d503578ebaf90a880aa645c94d156551768f0232a97->enter($__internal_59b2ae401977abe82e5c6d503578ebaf90a880aa645c94d156551768f0232a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmGeolocationBundle:Default:index.html.twig"));

        $__internal_ecad48ce75f125ce2fff669c053533d59e52b74c042b0a29721640c671cb4dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecad48ce75f125ce2fff669c053533d59e52b74c042b0a29721640c671cb4dd5->enter($__internal_ecad48ce75f125ce2fff669c053533d59e52b74c042b0a29721640c671cb4dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LljmGeolocationBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59b2ae401977abe82e5c6d503578ebaf90a880aa645c94d156551768f0232a97->leave($__internal_59b2ae401977abe82e5c6d503578ebaf90a880aa645c94d156551768f0232a97_prof);

        
        $__internal_ecad48ce75f125ce2fff669c053533d59e52b74c042b0a29721640c671cb4dd5->leave($__internal_ecad48ce75f125ce2fff669c053533d59e52b74c042b0a29721640c671cb4dd5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7252c27e1726665b59773826ae5e8615a1de1e9c5dbed2f220af772a16fb2621 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7252c27e1726665b59773826ae5e8615a1de1e9c5dbed2f220af772a16fb2621->enter($__internal_7252c27e1726665b59773826ae5e8615a1de1e9c5dbed2f220af772a16fb2621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ce83598024680524a089dc1b04664e52e04bb2665735f4ee48dcc958ae98d82a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce83598024680524a089dc1b04664e52e04bb2665735f4ee48dcc958ae98d82a->enter($__internal_ce83598024680524a089dc1b04664e52e04bb2665735f4ee48dcc958ae98d82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    map = new OpenLayers.Map(\"geolocMap\");
    map.addLayer(new OpenLayers.Layer.OSM());
    map.zoomToMaxExtent();

//  map = new ol.Map({
//  target: 'map',
//  layers: [
//    new ol.layer.Tile({
//      source: new ol.source.MapQuest({layer: 'osm'})
//    })
//  ],
//  view: new ol.View({
//    center: ol.proj.transform([x, y], 'EPSG:4326', 'EPSG:3857'),
//    zoom: 15
//  })
//});

//    var vectorSource = new ol.source.Vector({
        //create empty vector
//    });

//    var markers = []; 

//    function AddMarkers() {

";
        // line 86
        $context["i"] = 0;
        // line 87
        echo "
";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["geoloclogs"]);
        foreach ($context['_seq'] as $context["_key"] => $context["geoloclogs"]) {
            // line 89
            echo "
//            var x= ";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["geoloclogs"], "longitude", array()), "html", null, true);
            echo ";
//            var y= ";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["geoloclogs"], "latitude", array()), "html", null, true);
            echo ";

//            var iconFeature = new ol.Feature({
//                geometry: new ol.geom.Point(ol.proj.transform([x,y], 'EPSG:4326',   'EPSG:3857')),
//                name: 'Marker ";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["geoloclogs"], "id", array()), "html", null, true);
            echo "'
//            });
//            markers[";
            // line 97
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 97, $this->getSourceContext()); })()), "html", null, true);
            echo "]=  ol.proj.transform([x,y], 'EPSG:4326',   'EPSG:3857');
//            vectorSource.addFeature(iconFeature);

//            var rotation= ";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["geoloclogs"], "direction", array()), "html", null, true);
            echo " * Math.PI / 180;

//          iconFeature.setStyle(new ol.style.Style({
//                image: new ol.style.Icon( /** @type {olx.style.IconOptions} */ ({
//                    anchor: [0.5, 0.5],
//                    rotation: rotation,
//                    anchorXUnits: 'fraction',
//                    anchorYUnits: 'fraction',
//                    src: '";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lljmgeolocation/images/arrow_alt_up.png"), "html", null, true);
            echo "'
//                }))
//            }));

//";
            // line 112
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 112, $this->getSourceContext()); })()) + 1);
            // line 113
            echo "
//";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geoloclogs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "  

        //add the vector feature to the layer vector
//        var vectorLayer = new ol.layer.Vector({
//            source: vectorSource
//        });
//        return vectorLayer;
//    }


//    var layerMarkers = AddMarkers();

//var layerLines = new ol.layer.Vector({
//    source: new ol.source.Vector({
//        features: [new ol.Feature({
//            geometry: new ol.geom.LineString(markers, 'XY'),
//            name: 'Line'
//        })]
//    })
//});

//    map.addLayer(layerMarkers);
//    map.addLayer(layerLines);
//    console.log(layerLines.getSource());


</script>

    <div class=\"table-responsive\">
      <table class=\"table table-striped\">
        <thead>
          <tr>
            <th>";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("User"), "html", null, true);
        echo "</th>
            <th>";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Latitude"), "html", null, true);
        echo "</th>
            <th>";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Longitude"), "html", null, true);
        echo "</th>
            <th>";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Altitude"), "html", null, true);
        echo "</th>
            <th>";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Speed"), "html", null, true);
        echo " (km/h)</th>
            <th>";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Direction"), "html", null, true);
        echo " (Deg.)</th>
            <th>";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Battery"), "html", null, true);
        echo "</th>
            <th>";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date"), "html", null, true);
        echo " (UTC)</th>
          </tr>
        </thead>
        <tbody>
  ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["geoloclogs"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["geoloclogs"]) {
            // line 159
            echo "          <tr>
            <td>";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["geoloclogs"], "firstname", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["geoloclogs"], "latitude", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["geoloclogs"], "longitude", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 163
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["geoloclogs"], "altitude", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 164
            echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["geoloclogs"], "speed", array()) * 3600) / 1000)), "html", null, true);
            echo "</td>
            <td>";
            // line 165
            echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->getSourceContext(), $context["geoloclogs"], "direction", array())), "html", null, true);
            echo "</td>
            <td>";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["geoloclogs"], "battery", array()), "html", null, true);
            echo "%</td>
            <td>";
            // line 167
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["geoloclogs"], "logdate", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
          </tr>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 170
            echo "    <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No record in this table"), "html", null, true);
            echo ".</p>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geoloclogs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "        </tbody>
      </table>
    </div>

          ";
        
        $__internal_ce83598024680524a089dc1b04664e52e04bb2665735f4ee48dcc958ae98d82a->leave($__internal_ce83598024680524a089dc1b04664e52e04bb2665735f4ee48dcc958ae98d82a_prof);

        
        $__internal_7252c27e1726665b59773826ae5e8615a1de1e9c5dbed2f220af772a16fb2621->leave($__internal_7252c27e1726665b59773826ae5e8615a1de1e9c5dbed2f220af772a16fb2621_prof);

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
        return array (  369 => 172,  360 => 170,  352 => 167,  348 => 166,  344 => 165,  340 => 164,  336 => 163,  332 => 162,  328 => 161,  324 => 160,  321 => 159,  316 => 158,  309 => 154,  305 => 153,  301 => 152,  297 => 151,  293 => 150,  289 => 149,  285 => 148,  281 => 147,  247 => 115,  240 => 113,  238 => 112,  231 => 108,  220 => 100,  214 => 97,  209 => 95,  202 => 91,  198 => 90,  195 => 89,  191 => 88,  188 => 87,  186 => 86,  158 => 60,  149 => 57,  145 => 56,  142 => 55,  138 => 54,  116 => 35,  112 => 33,  97 => 30,  94 => 29,  90 => 28,  82 => 25,  76 => 24,  59 => 10,  49 => 4,  40 => 3,  11 => 1,);
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

    map = new OpenLayers.Map(\"geolocMap\");
    map.addLayer(new OpenLayers.Layer.OSM());
    map.zoomToMaxExtent();

//  map = new ol.Map({
//  target: 'map',
//  layers: [
//    new ol.layer.Tile({
//      source: new ol.source.MapQuest({layer: 'osm'})
//    })
//  ],
//  view: new ol.View({
//    center: ol.proj.transform([x, y], 'EPSG:4326', 'EPSG:3857'),
//    zoom: 15
//  })
//});

//    var vectorSource = new ol.source.Vector({
        //create empty vector
//    });

//    var markers = []; 

//    function AddMarkers() {

{% set i = 0 %}

{% for geoloclogs in geoloclogs %}

//            var x= {{ geoloclogs.longitude }};
//            var y= {{ geoloclogs.latitude }};

//            var iconFeature = new ol.Feature({
//                geometry: new ol.geom.Point(ol.proj.transform([x,y], 'EPSG:4326',   'EPSG:3857')),
//                name: 'Marker {{ geoloclogs.id }}'
//            });
//            markers[{{ i }}]=  ol.proj.transform([x,y], 'EPSG:4326',   'EPSG:3857');
//            vectorSource.addFeature(iconFeature);

//            var rotation= {{ geoloclogs.direction }} * Math.PI / 180;

//          iconFeature.setStyle(new ol.style.Style({
//                image: new ol.style.Icon( /** @type {olx.style.IconOptions} */ ({
//                    anchor: [0.5, 0.5],
//                    rotation: rotation,
//                    anchorXUnits: 'fraction',
//                    anchorYUnits: 'fraction',
//                    src: '{{ asset('bundles/lljmgeolocation/images/arrow_alt_up.png') }}'
//                }))
//            }));

//{% set i = i + 1 %}

//{% endfor %}
  

        //add the vector feature to the layer vector
//        var vectorLayer = new ol.layer.Vector({
//            source: vectorSource
//        });
//        return vectorLayer;
//    }


//    var layerMarkers = AddMarkers();

//var layerLines = new ol.layer.Vector({
//    source: new ol.source.Vector({
//        features: [new ol.Feature({
//            geometry: new ol.geom.LineString(markers, 'XY'),
//            name: 'Line'
//        })]
//    })
//});

//    map.addLayer(layerMarkers);
//    map.addLayer(layerLines);
//    console.log(layerLines.getSource());


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
