<?php

/* NestleWebBundle:Bowers:bowers.html.twig */
class __TwigTemplate_a783034801418bfeb31ac13ebd3f0877a19c13f697a0b21c07bf1fbeeaf76aec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NestleWebBundle::base.html.twig", "NestleWebBundle:Bowers:bowers.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 16
        $this->loadTemplate("NestleWebBundle:Misc:notifications.html.twig", "NestleWebBundle:Bowers:bowers.html.twig", 16)->display($context);
        // line 17
        echo "        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">

            <h1 class=\"modal-title\">BOWERS MANAGEMENT</h1>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div id=\"restos\" class=\"panel\">
                <div class=\"panel-body\" id=\"bowersTableHolder\">
                    <div class=\"tableButtons\"></div>
                    <table class=\"table table-striped table-responsive leadsTable\" id=\"bowerTable\">
                        <thead>
                        <tr>
                            <th>BowerID</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Distributor</th>
                            <th>Area</th>
                            <th>City</th>
                            <th>Region</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>BowerID</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Distributor</th>
                            <th>Area</th>
                            <th>City</th>
                            <th>Region</th>
                            <th>Status</th>
                        </tr>
                        </tfoot>

                        <tbody>

                            ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 61
            echo "                                <tr id=\"infoOpen\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "id", array()), "html", null, true);
            echo "\">
                                    <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "bowerId", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "username", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "lname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "fname", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "distributor", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "area", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "city", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "region", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "status", array()), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
        <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">IMPORT CSV</h4>
                </div>
                <form action=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("nestle_web_bower_import_data");
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
                    <div class=\"modal-body\">


                        <p>Select CSV file to import</p>
                        <input id=\"input-csv\" type=\"file\" class=\"file\" required=\"required\" name=\"bowersImport\">
                        <br>

                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-warning\" id=\"importBtn\">Import</button>
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

";
    }

    // line 108
    public function block_javascript($context, array $blocks = array())
    {
        // line 109
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jasny-bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/dataTables.colVis.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fileinput.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.table2excel.js"), "html", null, true);
        echo "\"></script>

    <script>

        function tableExport() {
            console.log('huhu');

            var today = new Date();
            today.toISOString().substring(0, 10);

            \$(\"#bowerTable\").table2excel({
                exclude: \".noExl\",
                name: \"BOW LIST\",
                filename: \"bow-list-\" + today.toISOString().substring(0, 10),
                fileext: \".xls\",
                exclude_img: true,
                exclude_links: true,
                exclude_inputs: true
            });
        }

        \$(\"#input-csv\").fileinput({
            'showUpload': true,
            'previewFileType': 'text',
            'allowedFileExtensions': ['csv'],
            'showPreview': false,
            'showRemove': true,
            'initialPreviewShowDelete': true
        });


            \$(document).ready(function () {
                \$('#bowerTable').DataTable({
                    oLanguage: {
                        sEmptyTable: \"No records found\",
                        sSearch: ''
                    },
                    oTableTools: {
                        \"sSwfPath\": \"/admin/swf/copy_csv_xls_pdf.swf\",
                        \"aButtons\": [\"csv\"]
                    },
                    iDisplayLength: 10,
                    aLengthMenu: [[25, 50, 100, 250], [25, 50, 100, 250]],
                    bPaginate: true,
                    bLengthChange: true,
                    aaSorting: [[0, 'desc']],
                    fnDrawCallback: function () {
                        \$('tr[id=\"infoOpen\"]').click(function () {
                            var id = \$(this).attr('data-id');

                            \$(this).unbind().click();
                            \$(this).bind().click();

                            window.location.href = \"bowers/profile/\" + id;

                            \$('tr').each(function () {
                                \$(this).unbind().click();
                            });
                        });


                        \$('button[id=importCsv]').click(function () {
                            \$('#myModal').modal('show');
                        });


                    },

                    initComplete: function () {
                        this.api().columns().every( function () {
                            var column = this;
                            var select = \$('<select class=\"form-control\"><option value=\"\">All</option></select>')
                                    .appendTo( \$(column.footer()).empty() )
                                    .on( 'change', function () {
                                        var val = \$.fn.dataTable.util.escapeRegex(
                                                \$(this).val()
                                        );

                                        column
                                                .search( val ? '^'+val+'\$' : '', true, false )
                                                .draw();
                                    } );

                            column.data().unique().sort().each( function ( d, j ) {
                                select.append( '<option value=\"'+d+'\">'+d+'</option>' )
                            } );
                        } );
                    }

                });


                // Custom Elements For Filter

                \$(\"div.tableButtons\").html('<a href=\"";
        // line 207
        echo $this->env->getExtension('routing')->getPath("nestle_web_bower_add");
        echo "\" class=\"btn btn-info\">ADD BOWER</a><button class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#myModal\">IMPORT CSV</button><button class=\"btn btn-info\" onclick=\"tableExport();\">EXPORT CSV</button><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("downloads/csv/bow-upload-template.csv"), "html", null, true);
        echo "\" download class=\"btn btn-info\" >DOWNLOAD IMPORT TEMPLATE</a>');
            });


    </script>
";
    }

    public function getTemplateName()
    {
        return "NestleWebBundle:Bowers:bowers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 207,  219 => 113,  215 => 112,  211 => 111,  207 => 110,  202 => 109,  199 => 108,  176 => 88,  158 => 72,  149 => 69,  145 => 68,  141 => 67,  137 => 66,  133 => 65,  127 => 64,  123 => 63,  119 => 62,  114 => 61,  110 => 60,  65 => 17,  63 => 16,  58 => 13,  55 => 12,  49 => 9,  45 => 8,  41 => 7,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
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
/*         <div class="col-md-12">*/
/* */
/*             <h1 class="modal-title">BOWERS MANAGEMENT</h1>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div id="restos" class="panel">*/
/*                 <div class="panel-body" id="bowersTableHolder">*/
/*                     <div class="tableButtons"></div>*/
/*                     <table class="table table-striped table-responsive leadsTable" id="bowerTable">*/
/*                         <thead>*/
/*                         <tr>*/
/*                             <th>BowerID</th>*/
/*                             <th>Username</th>*/
/*                             <th>Name</th>*/
/*                             <th>Distributor</th>*/
/*                             <th>Area</th>*/
/*                             <th>City</th>*/
/*                             <th>Region</th>*/
/*                             <th>Status</th>*/
/*                         </tr>*/
/*                         </thead>*/
/*                         <tfoot>*/
/*                         <tr>*/
/*                             <th>BowerID</th>*/
/*                             <th>Username</th>*/
/*                             <th>Name</th>*/
/*                             <th>Distributor</th>*/
/*                             <th>Area</th>*/
/*                             <th>City</th>*/
/*                             <th>Region</th>*/
/*                             <th>Status</th>*/
/*                         </tr>*/
/*                         </tfoot>*/
/* */
/*                         <tbody>*/
/* */
/*                             {% for d in data %}*/
/*                                 <tr id="infoOpen" data-id="{{ d.id }}">*/
/*                                     <td>{{ d.bowerId }}</td>*/
/*                                     <td>{{ d.username }}</td>*/
/*                                     <td>{{ d.lname }} {{ d.fname }}</td>*/
/*                                     <td>{{ d.distributor }}</td>*/
/*                                     <td>{{ d.area }}</td>*/
/*                                     <td>{{ d.city }}</td>*/
/*                                     <td>{{ d.region }}</td>*/
/*                                     <td>{{ d.status }}</td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/* */
/*                         </tbody>*/
/*                     </table>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="modal fade" id="myModal" role="dialog">*/
/*         <div class="modal-dialog modal-md">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*                     <h4 class="modal-title">IMPORT CSV</h4>*/
/*                 </div>*/
/*                 <form action="{{ path('nestle_web_bower_import_data') }}" method="POST" enctype="multipart/form-data">*/
/*                     <div class="modal-body">*/
/* */
/* */
/*                         <p>Select CSV file to import</p>*/
/*                         <input id="input-csv" type="file" class="file" required="required" name="bowersImport">*/
/*                         <br>*/
/* */
/*                     </div>*/
/*                     <div class="modal-footer">*/
/*                         <button type="submit" class="btn btn-warning" id="importBtn">Import</button>*/
/*                         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascript %}*/
/*     <script type="text/javascript" src="{{ asset('js/jasny-bootstrap.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/jquery.dataTables.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/dataTables.colVis.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/fileinput.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/jquery.table2excel.js') }}"></script>*/
/* */
/*     <script>*/
/* */
/*         function tableExport() {*/
/*             console.log('huhu');*/
/* */
/*             var today = new Date();*/
/*             today.toISOString().substring(0, 10);*/
/* */
/*             $("#bowerTable").table2excel({*/
/*                 exclude: ".noExl",*/
/*                 name: "BOW LIST",*/
/*                 filename: "bow-list-" + today.toISOString().substring(0, 10),*/
/*                 fileext: ".xls",*/
/*                 exclude_img: true,*/
/*                 exclude_links: true,*/
/*                 exclude_inputs: true*/
/*             });*/
/*         }*/
/* */
/*         $("#input-csv").fileinput({*/
/*             'showUpload': true,*/
/*             'previewFileType': 'text',*/
/*             'allowedFileExtensions': ['csv'],*/
/*             'showPreview': false,*/
/*             'showRemove': true,*/
/*             'initialPreviewShowDelete': true*/
/*         });*/
/* */
/* */
/*             $(document).ready(function () {*/
/*                 $('#bowerTable').DataTable({*/
/*                     oLanguage: {*/
/*                         sEmptyTable: "No records found",*/
/*                         sSearch: ''*/
/*                     },*/
/*                     oTableTools: {*/
/*                         "sSwfPath": "/admin/swf/copy_csv_xls_pdf.swf",*/
/*                         "aButtons": ["csv"]*/
/*                     },*/
/*                     iDisplayLength: 10,*/
/*                     aLengthMenu: [[25, 50, 100, 250], [25, 50, 100, 250]],*/
/*                     bPaginate: true,*/
/*                     bLengthChange: true,*/
/*                     aaSorting: [[0, 'desc']],*/
/*                     fnDrawCallback: function () {*/
/*                         $('tr[id="infoOpen"]').click(function () {*/
/*                             var id = $(this).attr('data-id');*/
/* */
/*                             $(this).unbind().click();*/
/*                             $(this).bind().click();*/
/* */
/*                             window.location.href = "bowers/profile/" + id;*/
/* */
/*                             $('tr').each(function () {*/
/*                                 $(this).unbind().click();*/
/*                             });*/
/*                         });*/
/* */
/* */
/*                         $('button[id=importCsv]').click(function () {*/
/*                             $('#myModal').modal('show');*/
/*                         });*/
/* */
/* */
/*                     },*/
/* */
/*                     initComplete: function () {*/
/*                         this.api().columns().every( function () {*/
/*                             var column = this;*/
/*                             var select = $('<select class="form-control"><option value="">All</option></select>')*/
/*                                     .appendTo( $(column.footer()).empty() )*/
/*                                     .on( 'change', function () {*/
/*                                         var val = $.fn.dataTable.util.escapeRegex(*/
/*                                                 $(this).val()*/
/*                                         );*/
/* */
/*                                         column*/
/*                                                 .search( val ? '^'+val+'$' : '', true, false )*/
/*                                                 .draw();*/
/*                                     } );*/
/* */
/*                             column.data().unique().sort().each( function ( d, j ) {*/
/*                                 select.append( '<option value="'+d+'">'+d+'</option>' )*/
/*                             } );*/
/*                         } );*/
/*                     }*/
/* */
/*                 });*/
/* */
/* */
/*                 // Custom Elements For Filter*/
/* */
/*                 $("div.tableButtons").html('<a href="{{ path('nestle_web_bower_add') }}" class="btn btn-info">ADD BOWER</a><button class="btn btn-info" data-toggle="modal" data-target="#myModal">IMPORT CSV</button><button class="btn btn-info" onclick="tableExport();">EXPORT CSV</button><a href="{{ asset("downloads/csv/bow-upload-template.csv") }}" download class="btn btn-info" >DOWNLOAD IMPORT TEMPLATE</a>');*/
/*             });*/
/* */
/* */
/*     </script>*/
/* {% endblock %}*/
