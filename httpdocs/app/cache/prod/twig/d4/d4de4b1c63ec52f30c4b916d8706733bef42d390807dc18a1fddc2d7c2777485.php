<?php

/* NestleWebBundle::base.html.twig */
class __TwigTemplate_6677d9dd503a1353eb2fcb53a9ee2390ca24967e3ad1e596e81ca4b4f515775a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>Transactions Report</title>
\t<meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/metisMenu.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/linear-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/Pe-icon-7-stroke.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jasny-bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fontello.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/summernote.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/ammap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fileinput.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>

    ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.11.0.min.js"), "html", null, true);
        echo "\"></script>
</head>

<body>
\t<div id=\"wrapper\">

\t\t";
        // line 33
        $this->displayBlock('sidebar', $context, $blocks);
        // line 36
        echo "
\t\t<div id=\"page-wrapper\">
\t\t\t";
        // line 38
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "\t\t</div>

\t</div>
    
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/metisMenu.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/equalheight.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/summernote.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-colorpicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fileinput.min.js"), "html", null, true);
        echo "\"></script>

    <script>
        \$('.dropdown').click(function() {
          \$('.dropdown-menu', this).slideToggle(200);
        });

    </script>

    ";
        // line 62
        $this->displayBlock('javascript', $context, $blocks);
        // line 65
        echo "</body>
</html>";
    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 23
        echo "
\t";
    }

    // line 33
    public function block_sidebar($context, array $blocks = array())
    {
        // line 34
        echo "\t\t\t";
        $this->loadTemplate("NestleWebBundle::sidebar.html.twig", "NestleWebBundle::base.html.twig", 34)->display($context);
        // line 35
        echo "\t\t";
    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        // line 39
        echo "\t\t\t\t
\t\t\t";
    }

    // line 62
    public function block_javascript($context, array $blocks = array())
    {
        // line 63
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "NestleWebBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 63,  188 => 62,  183 => 39,  180 => 38,  176 => 35,  173 => 34,  170 => 33,  165 => 23,  162 => 22,  157 => 65,  155 => 62,  143 => 53,  139 => 52,  135 => 51,  130 => 49,  126 => 48,  122 => 47,  118 => 46,  114 => 45,  108 => 41,  106 => 38,  102 => 36,  100 => 33,  91 => 27,  87 => 26,  84 => 25,  82 => 22,  77 => 20,  73 => 19,  69 => 18,  65 => 17,  61 => 16,  57 => 15,  53 => 14,  49 => 13,  45 => 12,  41 => 11,  37 => 10,  33 => 9,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* 	<title>Transactions Report</title>*/
/* 	<meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*     <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />*/
/*     <link href="{{ asset('css/metisMenu.min.css') }}" rel="stylesheet" type="text/css" media="all" />*/
/*     <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />*/
/*     <link href="{{ asset('css/linear-icons.css') }}" rel="stylesheet" type="text/css" media="all" />*/
/*     <link href="{{ asset('css/Pe-icon-7-stroke.css') }}" rel="stylesheet" type="text/css" media="all" />*/
/*     <link href="{{ asset('css/jasny-bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />*/
/*     <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet" type="text/css" media="all" />*/
/*     <link href="{{ asset('css/fontello.css') }}" rel="stylesheet" type="text/css" media="all" />*/
/*     <link href="{{ asset('css/summernote.css') }}" rel="stylesheet" type="text/css" media="all" />*/
/*     <link href="{{ asset('css/ammap.css') }}" rel="stylesheet" type="text/css" media="all" />*/
/*     <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" media="all" />*/
/*     <link href="{{ asset('css/fileinput.css') }}" rel="stylesheet" type="text/css" media="all"/>*/
/* */
/*     {% block stylesheets %}*/
/* */
/* 	{% endblock %}*/
/* */
/*     <script type="text/javascript" src="{{ asset('js/jquery1.11.1.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/jquery-ui-1.11.0.min.js') }}"></script>*/
/* </head>*/
/* */
/* <body>*/
/* 	<div id="wrapper">*/
/* */
/* 		{% block sidebar %}*/
/* 			{% include 'NestleWebBundle::sidebar.html.twig' %}*/
/* 		{% endblock %}*/
/* */
/* 		<div id="page-wrapper">*/
/* 			{% block content %}*/
/* 				*/
/* 			{% endblock %}*/
/* 		</div>*/
/* */
/* 	</div>*/
/*     */
/*     <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*     <script src="{{ asset('js/metisMenu.min.js') }}"></script>*/
/*     <script src="{{ asset('js/sb-admin-2.js') }}"></script>*/
/*     <script src="{{ asset('js/equalheight.js') }}"></script>*/
/*     <script src="{{ asset('js/summernote.js') }}"></script>*/
/* */
/*     <script src="{{ asset('js/bootstrap-colorpicker.js') }}"></script>*/
/*     <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/fileinput.min.js') }}"></script>*/
/* */
/*     <script>*/
/*         $('.dropdown').click(function() {*/
/*           $('.dropdown-menu', this).slideToggle(200);*/
/*         });*/
/* */
/*     </script>*/
/* */
/*     {% block javascript %}*/
/* */
/*     {% endblock %}*/
/* </body>*/
/* </html>*/
