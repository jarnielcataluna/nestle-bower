<?php

/* NestleWebBundle:Bowers:bowerEdit.html.twig */
class __TwigTemplate_6056ade6017ffa519f39e9502229317f0e5ba28f56fe6741b8df1105ed35e8a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NestleWebBundle::base.html.twig", "NestleWebBundle:Bowers:bowerEdit.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NestleWebBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["user_role"] = $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "level", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jasny-bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.dataTables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/dataTables.colVis.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 17
        $this->loadTemplate("NestleWebBundle:Misc:notifications.html.twig", "NestleWebBundle:Bowers:bowerEdit.html.twig", 17)->display($context);
        // line 18
        echo "        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1\">
            <div class=\"panel\">
                <div class=\"panel-body\">

                    <ol class=\"breadcrumb\">
                        <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("nestle_web_bower");
        echo "\">Bower</a></li>
                        <li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nestle_web_bower_profile", array("id" => $this->getAttribute((isset($context["bower"]) ? $context["bower"] : $this->getContext($context, "bower")), "id", array()))), "html", null, true);
        echo "\">Profile</a></li>
                        <li class=\"active\">Edit</li>
                    </ol>
                    <form role=\"form\" method=\"POST\">
                        <div class=\"modal-header\" id=\"addProfile\">
                            <div class=\"form-group\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <label for=\"fname\">First Name:</label>
                                        <input type=\"text\" class=\"form-control input-lg\" id=\"fname\" name=\"fname\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bower"]) ? $context["bower"] : $this->getContext($context, "bower")), "fname", array()), "html", null, true);
        echo "\">
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <label for=\"lname\">Last Name:</label>
                                        <input type=\"text\" class=\"form-control input-lg\" id=\"lname\" name=\"lname\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bower"]) ? $context["bower"] : $this->getContext($context, "bower")), "lname", array()), "html", null, true);
        echo "\">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class=\"modal-body restaurantProfile\" id=\"addProfile\">

                            <div class=\"row\">

                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <label for=\"status\">Status:</label>
                                        <select name=\"status\" class=\"form-control\">
                                            <option value=\"1\" ";
        // line 56
        if (($this->getAttribute((isset($context["bower"]) ? $context["bower"] : $this->getContext($context, "bower")), "status", array()) == 1)) {
            echo " selected ";
        }
        echo ">Active</option>
                                            <option value=\"0\" ";
        // line 57
        if (($this->getAttribute((isset($context["bower"]) ? $context["bower"] : $this->getContext($context, "bower")), "status", array()) == 0)) {
            echo " selected ";
        }
        echo ">Inactive</option>
                                        </select>
                                    </div>
                                </div>


                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <label for=\"status\">Bower ID:</label>
                                        <input type=\"text\" name=\"bowerId\" class=\"form-control\" id=\"bowerId\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bower"]) ? $context["bower"] : $this->getContext($context, "bower")), "bowerId", array()), "html", null, true);
        echo "\" disabled>
                                    </div>
                                </div>


                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <label for=\"username\">Username:</label>
                                        <input type=\"text\" class=\"form-control\" name=\"username\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bower"]) ? $context["bower"] : $this->getContext($context, "bower")), "username", array()), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <label for=\"password\">Password</label>
                                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bower"]) ? $context["bower"] : $this->getContext($context, "bower")), "password", array()), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <label for=\"bdate\">Birthdate:</label>
                                        <input type=\"date\" class=\"form-control\" id=\"bdate\" name=\"bdate\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bower"]) ? $context["bower"] : $this->getContext($context, "bower")), "bdate", array()), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <label for=\"contact\">Contact No.:</label>
                                        <input type=\"text\" class=\"form-control\" id=\"contact\" name=\"contact\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bower"]) ? $context["bower"] : $this->getContext($context, "bower")), "contactnumber", array()), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <label for=\"distributor\">Distributor:</label>
                                        <input type=\"text\" class=\"form-control\" id=\"distributor\" name=\"distributor\" required=\"required\">
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <label for=\"area\">Nestle Region</label>
                                        <select class=\"form-control\" name=\"nestle_region\">
                                            <option value=\"1\">GMA 1</option>
                                            <option value=\"2\">GMA2</option>
                                            <option value=\"3\">North Luzon</option>
                                            <option value=\"4\">Central luzon</option>
                                            <option value=\"5\">South Luzon</option>
                                            <option value=\"6\">Visayaz</option>
                                            <option value=\"7\"> Mindanao</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <label for=\"region\">Region:</label>
                                        <select class=\"form-control\" name=\"region\" id=\"region\">
                                            ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allRegions"]) ? $context["allRegions"] : $this->getContext($context, "allRegions")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 131
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "region", array()), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "                                        </select>
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <label for=\"province\">Province:</label>
                                        <select class=\"form-control\" id=\"province\" name=\"province\">
                                            ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allProvinces"]) ? $context["allProvinces"] : $this->getContext($context, "allProvinces")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 141
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "province", array()), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <label for=\"city\">City:</label>
                                        <select class=\"form-control\" id=\"city\" name=\"city\">
                                            ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allCities"]) ? $context["allCities"] : $this->getContext($context, "allCities")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 154
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "city", array()), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "                                        </select>
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <label for=\"area\">Area:</label>
                                        <select class=\"form-control\" id=\"area\" name=\"area\">
                                            ";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allAreas"]) ? $context["allAreas"] : $this->getContext($context, "allAreas")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 164
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "area", array()), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\" id=\"new-area-container\" style=\"display:none\">
                                <div class=\"col-sm-12\">
                                    <div class=\"form-group\">
                                        <label for=\"pwd\">New Area:</label>
                                        <input type=\"text\" name=\"new_area\" class=\"form-control\" id=\"new_area\" required=\"required\">
                                    </div>
                                </div>
                            </div>


                            <hr>

                            <button type=\"submit\" class=\"btn btn-warning pull-right\">Submit</button>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


";
    }

    // line 196
    public function block_javascript($context, array $blocks = array())
    {
        // line 197
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jasny-bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/dataTables.colVis.min.js"), "html", null, true);
        echo "\"></script>

    <script>

        var cities = [];
        var provinces = [];
        var areas = [];




        ";
        // line 210
        if ((isset($context["allCities"]) ? $context["allCities"] : $this->getContext($context, "allCities"))) {
            // line 211
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allCities"]) ? $context["allCities"] : $this->getContext($context, "allCities")));
            foreach ($context['_seq'] as $context["_key"] => $context["ac"]) {
                // line 212
                echo "        var city = {\"city\": \"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ac"], "city", array()), "html", null, true);
                echo "\", \"province_id\": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ac"], "provinceId", array()), "html", null, true);
                echo ", \"id\": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ac"], "id", array()), "html", null, true);
                echo " };
        cities.push(city);
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ac'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            echo "        ";
        }
        // line 216
        echo "
        ";
        // line 217
        if ((isset($context["allProvinces"]) ? $context["allProvinces"] : $this->getContext($context, "allProvinces"))) {
            // line 218
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allProvinces"]) ? $context["allProvinces"] : $this->getContext($context, "allProvinces")));
            foreach ($context['_seq'] as $context["_key"] => $context["ap"]) {
                // line 219
                echo "        var province = {\"province\": \"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ap"], "province", array()), "html", null, true);
                echo "\", \"region_id\": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ap"], "regionId", array()), "html", null, true);
                echo ", \"id\": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ap"], "id", array()), "html", null, true);
                echo " };
        provinces.push(province);
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ap'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            echo "        ";
        }
        // line 223
        echo "
        ";
        // line 224
        if ((isset($context["allProvinces"]) ? $context["allProvinces"] : $this->getContext($context, "allProvinces"))) {
            // line 225
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allAreas"]) ? $context["allAreas"] : $this->getContext($context, "allAreas")));
            foreach ($context['_seq'] as $context["_key"] => $context["ar"]) {
                // line 226
                echo "        var area = {\"area\": \"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "area", array()), "html", null, true);
                echo "\", \"city_id\": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "cityId", array()), "html", null, true);
                echo ", \"id\": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "id", array()), "html", null, true);
                echo " };
        areas.push(area);
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ar'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 229
            echo "        ";
        }
        // line 230
        echo "
        \$('document').ready(function(){
            changeProvince();
            changeCity();
            changeArea();
            addNewArea();
        });


        \$('#region').change(function(){
            changeProvince();
            changeCity();
            changeArea();
            addNewArea();
        });


        \$('#province').change(function(){
            changeCity();
            changeArea();
            addNewArea();
        });

        \$('#city').change(function(){
            changeArea();
            addNewArea();
        });

        \$('#area').change(function(){
            addNewArea();
        });


        function changeArea(){
            \$(\"#area\").find('option').remove().end();
            for(var x = 0; x < areas.length; x++){
                if(\$('#city').val() == areas[x][\"city_id\"]){
                    \$('<option>').val(areas[x][\"id\"]).text(areas[x][\"area\"]).appendTo('#area');
                }

            }

            \$('<option>').val(0).text('Add New Area').appendTo('#area');
        }

        function changeCity(){
            \$(\"#city\").find('option').remove().end();
            for(var x = 0; x < cities.length; x++){
                if(\$('#province').val() == cities[x][\"province_id\"]){
                    \$('<option>').val(cities[x][\"id\"]).text(cities[x][\"city\"]).appendTo('#city');
                }

            }
        }

        function changeProvince(){
            \$(\"#province\").find('option').remove().end();
            for(var x = 0; x < provinces.length; x++){
                if(\$('#region').val() == provinces[x][\"region_id\"]){
                    \$('<option>').val(provinces[x][\"id\"]).text(provinces[x][\"province\"]).appendTo('#province');
                }

            }
        }

        function addNewArea(){
            if(\$('#area').val() != 0){
                \$('#new-area-container').hide();
                \$('#new_area').removeAttr('required');
            }else{
                \$('#new-area-container').show();
                \$('#new_area').attr('required');
            }
        }
    </script>

    <script>
        \$('#flashNotif').fadeOut(5000);
    </script>
";
    }

    public function getTemplateName()
    {
        return "NestleWebBundle:Bowers:bowerEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  446 => 230,  443 => 229,  429 => 226,  424 => 225,  422 => 224,  419 => 223,  416 => 222,  402 => 219,  397 => 218,  395 => 217,  392 => 216,  389 => 215,  375 => 212,  370 => 211,  368 => 210,  354 => 199,  350 => 198,  345 => 197,  342 => 196,  310 => 166,  299 => 164,  295 => 163,  286 => 156,  275 => 154,  271 => 153,  259 => 143,  248 => 141,  244 => 140,  235 => 133,  224 => 131,  220 => 130,  183 => 96,  174 => 90,  163 => 82,  154 => 76,  141 => 66,  127 => 57,  121 => 56,  103 => 41,  96 => 37,  84 => 28,  80 => 27,  69 => 18,  67 => 17,  62 => 14,  59 => 13,  53 => 10,  49 => 9,  45 => 8,  41 => 7,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'NestleWebBundle::base.html.twig' %}*/
/* */
/* {% set user_role = user.level %}*/
/* */
/* {% block stylesheets %}*/
/*     <link href="{{ asset('css/jasny-bootstrap.css') }}" rel="stylesheet" type="text/css" media="all"/>*/
/*     <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" media="all"/>*/
/*     <link href="{{ asset('css/jquery.dataTables.css') }}" rel="stylesheet" type="text/css" media="all"/>*/
/*     <link href="{{ asset('css/dataTables.colVis.css') }}" rel="stylesheet" type="text/css" media="all"/>*/
/*     <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet" type="text/css" media="all"/>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             {% include 'NestleWebBundle:Misc:notifications.html.twig' %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">*/
/*             <div class="panel">*/
/*                 <div class="panel-body">*/
/* */
/*                     <ol class="breadcrumb">*/
/*                         <li><a href="{{ path('nestle_web_bower') }}">Bower</a></li>*/
/*                         <li><a href="{{ path('nestle_web_bower_profile', {'id': bower.id}) }}">Profile</a></li>*/
/*                         <li class="active">Edit</li>*/
/*                     </ol>*/
/*                     <form role="form" method="POST">*/
/*                         <div class="modal-header" id="addProfile">*/
/*                             <div class="form-group">*/
/*                                 <div class="row">*/
/*                                     <div class="col-sm-6">*/
/*                                         <label for="fname">First Name:</label>*/
/*                                         <input type="text" class="form-control input-lg" id="fname" name="fname" value="{{ bower.fname }}">*/
/*                                     </div>*/
/*                                     <div class="col-sm-6">*/
/*                                         <label for="lname">Last Name:</label>*/
/*                                         <input type="text" class="form-control input-lg" id="lname" name="lname" value="{{ bower.lname }}">*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="modal-body restaurantProfile" id="addProfile">*/
/* */
/*                             <div class="row">*/
/* */
/*                                 <div class="col-sm-6">*/
/*                                     <div class="form-group">*/
/*                                         <label for="status">Status:</label>*/
/*                                         <select name="status" class="form-control">*/
/*                                             <option value="1" {% if bower.status == 1 %} selected {% endif %}>Active</option>*/
/*                                             <option value="0" {% if bower.status == 0 %} selected {% endif %}>Inactive</option>*/
/*                                         </select>*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/* */
/*                                 <div class="col-sm-6">*/
/*                                     <div class="form-group">*/
/*                                         <label for="status">Bower ID:</label>*/
/*                                         <input type="text" name="bowerId" class="form-control" id="bowerId" value="{{ bower.bowerId }}" disabled>*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/* */
/*                             </div>*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-6">*/
/*                                     <div class="form-group">*/
/*                                         <label for="username">Username:</label>*/
/*                                         <input type="text" class="form-control" name="username" value="{{ bower.username }}">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-sm-6">*/
/*                                     <div class="form-group">*/
/*                                         <label for="password">Password</label>*/
/*                                         <input type="password" class="form-control" id="password" name="password" value="{{ bower.password }}">*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-6">*/
/*                                     <div class="form-group">*/
/*                                         <label for="bdate">Birthdate:</label>*/
/*                                         <input type="date" class="form-control" id="bdate" name="bdate" value="{{ bower.bdate }}">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-sm-6">*/
/*                                     <div class="form-group">*/
/*                                         <label for="contact">Contact No.:</label>*/
/*                                         <input type="text" class="form-control" id="contact" name="contact" value="{{ bower.contactnumber }}">*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="row">*/
/*                                 <div class="col-sm-6">*/
/*                                     <div class="form-group">*/
/*                                         <label for="distributor">Distributor:</label>*/
/*                                         <input type="text" class="form-control" id="distributor" name="distributor" required="required">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-sm-6">*/
/*                                     <div class="form-group">*/
/*                                         <label for="area">Nestle Region</label>*/
/*                                         <select class="form-control" name="nestle_region">*/
/*                                             <option value="1">GMA 1</option>*/
/*                                             <option value="2">GMA2</option>*/
/*                                             <option value="3">North Luzon</option>*/
/*                                             <option value="4">Central luzon</option>*/
/*                                             <option value="5">South Luzon</option>*/
/*                                             <option value="6">Visayaz</option>*/
/*                                             <option value="7"> Mindanao</option>*/
/*                                         </select>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <hr>*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-6">*/
/*                                     <div class="form-group">*/
/*                                         <label for="region">Region:</label>*/
/*                                         <select class="form-control" name="region" id="region">*/
/*                                             {% for r in allRegions %}*/
/*                                                 <option value="{{ r.id }}">{{ r.region }}</option>*/
/*                                             {% endfor %}*/
/*                                         </select>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-sm-6">*/
/*                                     <div class="form-group">*/
/*                                         <label for="province">Province:</label>*/
/*                                         <select class="form-control" id="province" name="province">*/
/*                                             {% for p in allProvinces %}*/
/*                                                 <option value="{{ p.id }}">{{ p.province }}</option>*/
/*                                             {% endfor %}*/
/*                                         </select>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="row">*/
/*                                 <div class="col-sm-6">*/
/*                                     <div class="form-group">*/
/*                                         <label for="city">City:</label>*/
/*                                         <select class="form-control" id="city" name="city">*/
/*                                             {% for c in allCities %}*/
/*                                                 <option value="{{ c.id }}">{{ c.city }}</option>*/
/*                                             {% endfor %}*/
/*                                         </select>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-sm-6">*/
/*                                     <div class="form-group">*/
/*                                         <label for="area">Area:</label>*/
/*                                         <select class="form-control" id="area" name="area">*/
/*                                             {% for a in allAreas %}*/
/*                                                 <option value="{{ a.id }}">{{ a.area }}</option>*/
/*                                             {% endfor %}*/
/*                                         </select>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="row" id="new-area-container" style="display:none">*/
/*                                 <div class="col-sm-12">*/
/*                                     <div class="form-group">*/
/*                                         <label for="pwd">New Area:</label>*/
/*                                         <input type="text" name="new_area" class="form-control" id="new_area" required="required">*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/* */
/*                             <hr>*/
/* */
/*                             <button type="submit" class="btn btn-warning pull-right">Submit</button>*/
/* */
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block javascript %}*/
/*     <script type="text/javascript" src="{{ asset('js/jasny-bootstrap.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/jquery.dataTables.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/dataTables.colVis.min.js') }}"></script>*/
/* */
/*     <script>*/
/* */
/*         var cities = [];*/
/*         var provinces = [];*/
/*         var areas = [];*/
/* */
/* */
/* */
/* */
/*         {% if allCities %}*/
/*         {% for ac in allCities %}*/
/*         var city = {"city": "{{ ac.city}}", "province_id": {{ ac.provinceId }}, "id": {{ ac.id }} };*/
/*         cities.push(city);*/
/*         {% endfor %}*/
/*         {% endif %}*/
/* */
/*         {% if allProvinces %}*/
/*         {% for ap in allProvinces %}*/
/*         var province = {"province": "{{ ap.province}}", "region_id": {{ ap.regionId }}, "id": {{ ap.id }} };*/
/*         provinces.push(province);*/
/*         {% endfor %}*/
/*         {% endif %}*/
/* */
/*         {% if allProvinces %}*/
/*         {% for ar in allAreas %}*/
/*         var area = {"area": "{{ ar.area}}", "city_id": {{ ar.cityId }}, "id": {{ ar.id }} };*/
/*         areas.push(area);*/
/*         {% endfor %}*/
/*         {% endif %}*/
/* */
/*         $('document').ready(function(){*/
/*             changeProvince();*/
/*             changeCity();*/
/*             changeArea();*/
/*             addNewArea();*/
/*         });*/
/* */
/* */
/*         $('#region').change(function(){*/
/*             changeProvince();*/
/*             changeCity();*/
/*             changeArea();*/
/*             addNewArea();*/
/*         });*/
/* */
/* */
/*         $('#province').change(function(){*/
/*             changeCity();*/
/*             changeArea();*/
/*             addNewArea();*/
/*         });*/
/* */
/*         $('#city').change(function(){*/
/*             changeArea();*/
/*             addNewArea();*/
/*         });*/
/* */
/*         $('#area').change(function(){*/
/*             addNewArea();*/
/*         });*/
/* */
/* */
/*         function changeArea(){*/
/*             $("#area").find('option').remove().end();*/
/*             for(var x = 0; x < areas.length; x++){*/
/*                 if($('#city').val() == areas[x]["city_id"]){*/
/*                     $('<option>').val(areas[x]["id"]).text(areas[x]["area"]).appendTo('#area');*/
/*                 }*/
/* */
/*             }*/
/* */
/*             $('<option>').val(0).text('Add New Area').appendTo('#area');*/
/*         }*/
/* */
/*         function changeCity(){*/
/*             $("#city").find('option').remove().end();*/
/*             for(var x = 0; x < cities.length; x++){*/
/*                 if($('#province').val() == cities[x]["province_id"]){*/
/*                     $('<option>').val(cities[x]["id"]).text(cities[x]["city"]).appendTo('#city');*/
/*                 }*/
/* */
/*             }*/
/*         }*/
/* */
/*         function changeProvince(){*/
/*             $("#province").find('option').remove().end();*/
/*             for(var x = 0; x < provinces.length; x++){*/
/*                 if($('#region').val() == provinces[x]["region_id"]){*/
/*                     $('<option>').val(provinces[x]["id"]).text(provinces[x]["province"]).appendTo('#province');*/
/*                 }*/
/* */
/*             }*/
/*         }*/
/* */
/*         function addNewArea(){*/
/*             if($('#area').val() != 0){*/
/*                 $('#new-area-container').hide();*/
/*                 $('#new_area').removeAttr('required');*/
/*             }else{*/
/*                 $('#new-area-container').show();*/
/*                 $('#new_area').attr('required');*/
/*             }*/
/*         }*/
/*     </script>*/
/* */
/*     <script>*/
/*         $('#flashNotif').fadeOut(5000);*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* */
