<?php

/* NestleWebBundle:Bowers:bowerProfile.html.twig */
class __TwigTemplate_6ceed9b74e52f719f57e34d644936b306a1e3981252bec753612ea1557b530ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NestleWebBundle::base.html.twig", "NestleWebBundle:Bowers:bowerProfile.html.twig", 1);
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
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 14
        $this->loadTemplate("NestleWebBundle:Misc:notifications.html.twig", "NestleWebBundle:Bowers:bowerProfile.html.twig", 14)->display($context);
        // line 15
        echo "        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1\">
            <div class=\"panel\">
                <div class=\"panel-body\">

                    <ol class=\"breadcrumb\">
                        <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("nestle_web_bower");
        echo "\">Bower</a></li>
                        <li class=\"active\">Profile</li>
                    </ol>

                    <div class=\"modal-header\" id=\"addProfile\">
                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <label for=\"fname\">First Name:</label>
                                    <span>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bower"]) ? $context["bower"] : $this->getContext($context, "bower")), "fname", array()), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col-sm-6\">
                                    <label for=\"lname\">Last Name:</label>
                                    <span>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bower"]) ? $context["bower"] : $this->getContext($context, "bower")), "lname", array()), "html", null, true);
        echo "</span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class=\"modal-body restaurantProfile\" id=\"addProfile\">

                            <div class=\"row\">

                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <label for=\"status\">Status:</label>
                                        <span>
                                            ";
        // line 52
        if (($this->getAttribute((isset($context["bower"]) ? $context["bower"] : $this->getContext($context, "bower")), "status", array()) == 1)) {
            // line 53
            echo "                                                Active
                                            ";
        } elseif (($this->getAttribute(        // line 54
(isset($context["bower"]) ? $context["bower"] : $this->getContext($context, "bower")), "status", array()) == 0)) {
            // line 55
            echo "                                                Inactive
                                            ";
        }
        // line 57
        echo "                                        </span>
                                    </div>
                                </div>

                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <label for=\"status\">Bower Id:</label>
                                        <span>
                                            ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bower"]) ? $context["bower"] : $this->getContext($context, "bower")), "bowerId", array()), "html", null, true);
        echo "
                                        </span>
                                    </div>
                                </div>

                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <label for=\"username\">Username:</label>
                                        <span>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bower"]) ? $context["bower"] : $this->getContext($context, "bower")), "username", array()), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <label for=\"password\">Password</label>
                                        <span>";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bower"]) ? $context["bower"] : $this->getContext($context, "bower")), "password", array()), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <label for=\"bdate\">Birthdate:</label>
                                        <span>";
        // line 89
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["bower"]) ? $context["bower"] : $this->getContext($context, "bower")), "bdate", array()), "m/d/Y"), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <label for=\"contact\">Contact No.:</label>
                                        <span>";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bower"]) ? $context["bower"] : $this->getContext($context, "bower")), "contactnumber", array()), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                            </div>

                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label for=\"distributor\">Distributor:</label>
                                    <span>";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bower"]) ? $context["bower"] : $this->getContext($context, "bower")), "distributor", array()), "html", null, true);
        echo "</span>
                                </div>
                            </div>

                        </div>

                            <hr>
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <label for=\"region\">Region:</label>
                                        <span>";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), "region", array()), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <label for=\"province\">Province:</label>
                                        <span>";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["province"]) ? $context["province"] : $this->getContext($context, "province")), "province", array()), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <label for=\"city\">City:</label>
                                        <span>";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "city", array()), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <label for=\"area\">Area:</label>
                                        <span>";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "area", array()), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                            </div>


                            <hr>

                        <div class=\"form-footer\">
                            <a href=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nestle_web_bower_edit", array("id" => $this->getAttribute((isset($context["bower"]) ? $context["bower"] : $this->getContext($context, "bower")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-warning\">Edit</a>
                            <button class=\"btn btn-danger\" data-toggle=\"modal\"  data-target=\"#myModal\" onclick=\"\">Delete</button>
                        </div>
                        <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
                            <div class=\"modal-dialog modal-md\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                        <h4 class=\"modal-title\">DELETE ACCOUNT</h4>
                                    </div>
                                    <div class=\"modal-body\">
                                        <p>Are you sure you want to delete ";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bower"]) ? $context["bower"] : $this->getContext($context, "bower")), "fname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bower"]) ? $context["bower"] : $this->getContext($context, "bower")), "lname", array()), "html", null, true);
        echo "  record from the list of bower?</p>
                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nestle_web_bower_delete", array("id" => $this->getAttribute((isset($context["bower"]) ? $context["bower"] : $this->getContext($context, "bower")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">Delete</a>
                                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


";
    }

    // line 174
    public function block_javascript($context, array $blocks = array())
    {
        // line 175
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jasny-bootstrap.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "NestleWebBundle:Bowers:bowerProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 175,  276 => 174,  258 => 159,  250 => 156,  236 => 145,  224 => 136,  215 => 130,  203 => 121,  194 => 115,  180 => 104,  168 => 95,  159 => 89,  148 => 81,  139 => 75,  126 => 65,  116 => 57,  112 => 55,  110 => 54,  107 => 53,  105 => 52,  87 => 37,  80 => 33,  68 => 24,  57 => 15,  55 => 14,  50 => 11,  47 => 10,  41 => 7,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'NestleWebBundle::base.html.twig' %}*/
/* */
/* {% set user_role = user.level %}*/
/* */
/* {% block stylesheets %}*/
/*     <link href="{{ asset('css/jasny-bootstrap.css') }}" rel="stylesheet" type="text/css" media="all"/>*/
/*     <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" media="all"/>*/
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
/*                         <li class="active">Profile</li>*/
/*                     </ol>*/
/* */
/*                     <div class="modal-header" id="addProfile">*/
/*                         <div class="form-group">*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-6">*/
/*                                     <label for="fname">First Name:</label>*/
/*                                     <span>{{ bower.fname }}</span>*/
/*                                 </div>*/
/*                                 <div class="col-sm-6">*/
/*                                     <label for="lname">Last Name:</label>*/
/*                                     <span>{{ bower.lname }}</span>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="modal-body restaurantProfile" id="addProfile">*/
/* */
/*                             <div class="row">*/
/* */
/*                                 <div class="col-sm-6">*/
/*                                     <div class="form-group">*/
/*                                         <label for="status">Status:</label>*/
/*                                         <span>*/
/*                                             {% if bower.status == 1 %}*/
/*                                                 Active*/
/*                                             {% elseif bower.status == 0 %}*/
/*                                                 Inactive*/
/*                                             {% endif %}*/
/*                                         </span>*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                                 <div class="col-sm-6">*/
/*                                     <div class="form-group">*/
/*                                         <label for="status">Bower Id:</label>*/
/*                                         <span>*/
/*                                             {{ bower.bowerId }}*/
/*                                         </span>*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                             </div>*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-6">*/
/*                                     <div class="form-group">*/
/*                                         <label for="username">Username:</label>*/
/*                                         <span>{{ bower.username }}</span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-sm-6">*/
/*                                     <div class="form-group">*/
/*                                         <label for="password">Password</label>*/
/*                                         <span>{{ bower.password }}</span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-6">*/
/*                                     <div class="form-group">*/
/*                                         <label for="bdate">Birthdate:</label>*/
/*                                         <span>{{ bower.bdate|date("m/d/Y") }}</span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-sm-6">*/
/*                                     <div class="form-group">*/
/*                                         <label for="contact">Contact No.:</label>*/
/*                                         <span>{{ bower.contactnumber }}</span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         <div class="row">*/
/*                             <div class="col-sm-6">*/
/*                                 <div class="form-group">*/
/*                                     <label for="distributor">Distributor:</label>*/
/*                                     <span>{{ bower.distributor }}</span>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/* */
/*                             <hr>*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-6">*/
/*                                     <div class="form-group">*/
/*                                         <label for="region">Region:</label>*/
/*                                         <span>{{ region.region }}</span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-sm-6">*/
/*                                     <div class="form-group">*/
/*                                         <label for="province">Province:</label>*/
/*                                         <span>{{ province.province }}</span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="row">*/
/*                                 <div class="col-sm-6">*/
/*                                     <div class="form-group">*/
/*                                         <label for="city">City:</label>*/
/*                                         <span>{{ city.city }}</span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-sm-6">*/
/*                                     <div class="form-group">*/
/*                                         <label for="area">Area:</label>*/
/*                                         <span>{{ area.area }}</span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/* */
/*                             <hr>*/
/* */
/*                         <div class="form-footer">*/
/*                             <a href="{{ path('nestle_web_bower_edit', {'id':  bower.id }) }}" class="btn btn-warning">Edit</a>*/
/*                             <button class="btn btn-danger" data-toggle="modal"  data-target="#myModal" onclick="">Delete</button>*/
/*                         </div>*/
/*                         <div class="modal fade" id="myModal" role="dialog">*/
/*                             <div class="modal-dialog modal-md">*/
/*                                 <div class="modal-content">*/
/*                                     <div class="modal-header">*/
/*                                         <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*                                         <h4 class="modal-title">DELETE ACCOUNT</h4>*/
/*                                     </div>*/
/*                                     <div class="modal-body">*/
/*                                         <p>Are you sure you want to delete {{ bower.fname }} {{ bower.lname }}  record from the list of bower?</p>*/
/*                                     </div>*/
/*                                     <div class="modal-footer">*/
/*                                         <a href="{{ path('nestle_web_bower_delete', {'id': bower.id}) }}" class="btn btn-danger">Delete</a>*/
/*                                         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block javascript %}*/
/*     <script type="text/javascript" src="{{ asset('js/jasny-bootstrap.js') }}"></script>*/
/* */
/* {% endblock %}*/
/* */
/* */
