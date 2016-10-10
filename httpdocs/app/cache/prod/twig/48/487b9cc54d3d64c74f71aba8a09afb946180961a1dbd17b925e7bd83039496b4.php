<?php

/* NestleWebBundle:Misc:notifications.html.twig */
class __TwigTemplate_430ebf40f597bd8d8e855dc74619c9f4e0f1c67b3730381ad34d10ac086c7c10 extends Twig_Template
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
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 3
            echo "    <div id=\"flashNotif\" style=\"cursor:pointer;\" class=\"alert alert-danger\">
        ";
            // line 4
            echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 8
            echo "    <div id=\"flashNotif\" style=\"cursor:pointer;\" class=\"alert alert-success\">
        ";
            // line 9
            echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "NestleWebBundle:Misc:notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  42 => 8,  38 => 7,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {% for flash in app.session.flashbag.get('error') %}*/
/*     <div id="flashNotif" style="cursor:pointer;" class="alert alert-danger">*/
/*         {{ flash }}*/
/*     </div>*/
/* {% endfor %}*/
/* {% for flash in app.session.flashbag.get('notice') %}*/
/*     <div id="flashNotif" style="cursor:pointer;" class="alert alert-success">*/
/*         {{ flash }}*/
/*     </div>*/
/* {% endfor %}*/
