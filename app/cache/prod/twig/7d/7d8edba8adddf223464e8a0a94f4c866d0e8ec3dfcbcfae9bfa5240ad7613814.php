<?php

/* BraincraftedBootstrapBundle::flash.html.twig */
class __TwigTemplate_57dd572812628d8e2cd6f7631b94a34cc150adeadedfce5fb5e66a03694f1095 extends Twig_Template
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
        if ( !array_key_exists("translation_domain", $context)) {
            // line 2
            echo "    ";
            $context["translation_domain"] = null;
        }
        // line 4
        if ( !array_key_exists("close", $context)) {
            // line 5
            echo "    ";
            $context["close"] = false;
        }
        // line 7
        echo "
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "alert"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 9
            echo "    <div class=\"alert alert-warning";
            if ((isset($context["close"]) ? $context["close"] : null)) {
                echo " alert-dismissible";
            }
            echo "\">
        ";
            // line 10
            if ((isset($context["close"]) ? $context["close"] : null)) {
                echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
            }
            // line 11
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["flashMessage"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "danger"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "    <div class=\"alert alert-danger";
            if ((isset($context["close"]) ? $context["close"] : null)) {
                echo " alert-dismissible";
            }
            echo "\">
        ";
            // line 17
            if ((isset($context["close"]) ? $context["close"] : null)) {
                echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
            }
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["flashMessage"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 23
            echo "    <div class=\"alert alert-info";
            if ((isset($context["close"]) ? $context["close"] : null)) {
                echo " alert-dismissible";
            }
            echo "\">
        ";
            // line 24
            if ((isset($context["close"]) ? $context["close"] : null)) {
                echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
            }
            // line 25
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["flashMessage"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 30
            echo "    <div class=\"alert alert-success";
            if ((isset($context["close"]) ? $context["close"] : null)) {
                echo " alert-dismissible";
            }
            echo "\">
        ";
            // line 31
            if ((isset($context["close"]) ? $context["close"] : null)) {
                echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
            }
            // line 32
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["flashMessage"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "BraincraftedBootstrapBundle::flash.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 32,  129 => 31,  122 => 30,  118 => 29,  115 => 28,  105 => 25,  101 => 24,  94 => 23,  90 => 22,  87 => 21,  77 => 18,  73 => 17,  66 => 16,  62 => 15,  59 => 14,  49 => 11,  45 => 10,  38 => 9,  34 => 8,  31 => 7,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if translation_domain is not defined %}*/
/*     {% set translation_domain = null %}*/
/* {% endif %}*/
/* {% if close is not defined %}*/
/*     {% set close = false %}*/
/* {% endif %}*/
/* */
/* {% for flashMessage in app.session.flashbag.get('alert') %}*/
/*     <div class="alert alert-warning{% if close %} alert-dismissible{% endif %}">*/
/*         {% if close %}<button type="button" class="close" data-dismiss="alert">&times;</button>{% endif %}*/
/*         {{ flashMessage|trans({}, translation_domain) }}*/
/*     </div>*/
/* {% endfor %}*/
/* */
/* {% for flashMessage in app.session.flashbag.get('danger') %}*/
/*     <div class="alert alert-danger{% if close %} alert-dismissible{% endif %}">*/
/*         {% if close %}<button type="button" class="close" data-dismiss="alert">&times;</button>{% endif %}*/
/*         {{ flashMessage|trans({}, translation_domain) }}*/
/*     </div>*/
/* {% endfor %}*/
/* */
/* {% for flashMessage in app.session.flashbag.get('info') %}*/
/*     <div class="alert alert-info{% if close %} alert-dismissible{% endif %}">*/
/*         {% if close %}<button type="button" class="close" data-dismiss="alert">&times;</button>{% endif %}*/
/*         {{ flashMessage|trans({}, translation_domain) }}*/
/*     </div>*/
/* {% endfor %}*/
/* */
/* {% for flashMessage in app.session.flashbag.get('success') %}*/
/*     <div class="alert alert-success{% if close %} alert-dismissible{% endif %}">*/
/*         {% if close %}<button type="button" class="close" data-dismiss="alert">&times;</button>{% endif %}*/
/*         {{ flashMessage|trans({}, translation_domain) }}*/
/*     </div>*/
/* {% endfor %}*/
/* */
