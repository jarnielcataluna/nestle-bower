<?php

/* NestleWebBundle::sidebar.html.twig */
class __TwigTemplate_df4c5ed404a2543bc59d6ae342bcb7e6746283db4c0a1429f484f29854fbc375 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"\" class=\"navmenu navmenu-fixed-left offcanvas\">
    <nav id=\"desktopNav\" class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
        <div id=\"sideMenu\" class=\"navbar-default sidebar\" role=\"navigation\">

            <div class=\"sidebar-nav\">

                <div id=\"logo\" style=\"background: none;\">
                    <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/bower_logo.png"), "html", null, true);
        echo "\" alt=\"\" style=\"max-width: 60%;\">

                    <h3 style=\"color: #FFFFFF;\">Nestle BOW App</h3>
                </div>

                <ul class=\"nav\" id=\"side-menu\" style=\"margin-top: 30px;\">
                    <li>
                        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("nestle_web_homepage");
        echo "\"><i class=\"fa fa-home fa-fw\"></i> BOW Sales</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("nestle_web_account_leads");
        echo "\"><i class=\"fa fa-users\"></i> BOW Accounts</a>
                    </li>
                    ";
        // line 20
        if (((isset($context["user_role"]) ? $context["user_role"] : $this->getContext($context, "user_role")) == "ADMIN")) {
            // line 21
            echo "                        <li>
                            <a href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("nestle_web_products");
            echo "\"><i class=\"fa fa-dashboard fa-fw\"></i> BOW
                                Products</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("nestle_web_promo");
            echo "\"><i class=\"fa fa-star fa-fw\"></i> BOW Promo</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("nestle_web_cycle_plan");
            echo "\"><i class=\"fa fa-star fa-fw\"></i> BOW Cycle
                                Plan</a>
                        </li>
                    ";
        }
        // line 33
        echo "                    <li>
                        <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("nestle_web_bower");
        echo "\"><i class=\"fa fa-users\"></i> BOW Users</a>
                    </li>


                    <li>
                        <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/uploads/bowerapp-pilot.apk"), "html", null, true);
        echo "\" download><i class=\"fa fa-download\"></i> BOW
                            App Download</a>
                    </li>

                    <li>
                        <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\"><i class=\"fa fa-sign-out fa-fw\"></i> Logout</a></a>
                    </li>
                </ul>

            </div>

        </div>
    </nav>
</div>

<div class=\"navbar navbar-default navbar-fixed-top\">

    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"offcanvas\" data-target=\".navmenu\" data-canvas=\"body\">
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
    </button>

    <img src=\"\" alt=\"\" class=\"logo logoSmall\">

</div>";
    }

    public function getTemplateName()
    {
        return "NestleWebBundle::sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 44,  85 => 39,  77 => 34,  74 => 33,  67 => 29,  61 => 26,  54 => 22,  51 => 21,  49 => 20,  44 => 18,  38 => 15,  28 => 8,  19 => 1,);
    }
}
/* <div id="" class="navmenu navmenu-fixed-left offcanvas">*/
/*     <nav id="desktopNav" class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">*/
/*         <div id="sideMenu" class="navbar-default sidebar" role="navigation">*/
/* */
/*             <div class="sidebar-nav">*/
/* */
/*                 <div id="logo" style="background: none;">*/
/*                     <img src="{{ asset('img/bower_logo.png') }}" alt="" style="max-width: 60%;">*/
/* */
/*                     <h3 style="color: #FFFFFF;">Nestle BOW App</h3>*/
/*                 </div>*/
/* */
/*                 <ul class="nav" id="side-menu" style="margin-top: 30px;">*/
/*                     <li>*/
/*                         <a href="{{ path('nestle_web_homepage') }}"><i class="fa fa-home fa-fw"></i> BOW Sales</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('nestle_web_account_leads') }}"><i class="fa fa-users"></i> BOW Accounts</a>*/
/*                     </li>*/
/*                     {% if user_role == 'ADMIN' %}*/
/*                         <li>*/
/*                             <a href="{{ path('nestle_web_products') }}"><i class="fa fa-dashboard fa-fw"></i> BOW*/
/*                                 Products</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('nestle_web_promo') }}"><i class="fa fa-star fa-fw"></i> BOW Promo</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('nestle_web_cycle_plan') }}"><i class="fa fa-star fa-fw"></i> BOW Cycle*/
/*                                 Plan</a>*/
/*                         </li>*/
/*                     {% endif %}*/
/*                     <li>*/
/*                         <a href="{{ path('nestle_web_bower') }}"><i class="fa fa-users"></i> BOW Users</a>*/
/*                     </li>*/
/* */
/* */
/*                     <li>*/
/*                         <a href="{{ asset('/uploads/bowerapp-pilot.apk') }}" download><i class="fa fa-download"></i> BOW*/
/*                             App Download</a>*/
/*                     </li>*/
/* */
/*                     <li>*/
/*                         <a href="{{ path('logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a></a>*/
/*                     </li>*/
/*                 </ul>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/*     </nav>*/
/* </div>*/
/* */
/* <div class="navbar navbar-default navbar-fixed-top">*/
/* */
/*     <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body">*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*     </button>*/
/* */
/*     <img src="" alt="" class="logo logoSmall">*/
/* */
/* </div>*/
