<?php

/* LljmGeolocationBundle:Default:index.html.twig */
class __TwigTemplate_a2ce86612b31d68be1829176161faa66bce62c5d8ab5aa10df0ab7eda92f1221 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "  <h2>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Geolocation"), "html", null, true);
        echo "</h2>

<script type=\"text/javascript\">

    function display() {

      dst = \"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"));
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
        echo twig_escape_filter($this->env, ($context["datefrom"] ?? null), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date from"), "html", null, true);
        echo "\">
    <input type=\"text\" id=\"dateto\" class=\"form-control datepicker\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["dateto"] ?? null), "html", null, true);
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
            if ((($context["userid"] ?? null) == twig_get_attribute($this->env, $this->getSourceContext(), $context["users"], "id", array()))) {
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
            echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
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
            $context["i"] = (($context["i"] ?? null) + 1);
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
        return array (  347 => 168,  338 => 166,  330 => 163,  326 => 162,  322 => 161,  318 => 160,  314 => 159,  310 => 158,  306 => 157,  302 => 156,  299 => 155,  294 => 154,  287 => 150,  283 => 149,  279 => 148,  275 => 147,  271 => 146,  267 => 145,  263 => 144,  259 => 143,  225 => 111,  218 => 109,  216 => 108,  209 => 104,  198 => 96,  192 => 93,  187 => 91,  180 => 87,  176 => 86,  173 => 85,  169 => 84,  166 => 83,  164 => 82,  140 => 60,  131 => 57,  127 => 56,  124 => 55,  120 => 54,  98 => 35,  94 => 33,  79 => 30,  76 => 29,  72 => 28,  64 => 25,  58 => 24,  41 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "LljmGeolocationBundle:Default:index.html.twig", "/home/lljm/web/src/Lljm/GeolocationBundle/Resources/views/Default/index.html.twig");
    }
}
