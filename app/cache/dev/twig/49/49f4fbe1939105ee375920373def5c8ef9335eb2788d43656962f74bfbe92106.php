<?php

/* :product:new.html.twig */
class __TwigTemplate_d25cafd0fb21196dd1b7bc490f5b3f23e7e1f027faad59affc1e9ded504cd35e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":product:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8c99c3f9533832d3db015df458a56a15ae0952218756cc52bf82a6f1104e4f3 = $this->env->getExtension("native_profiler");
        $__internal_f8c99c3f9533832d3db015df458a56a15ae0952218756cc52bf82a6f1104e4f3->enter($__internal_f8c99c3f9533832d3db015df458a56a15ae0952218756cc52bf82a6f1104e4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":product:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8c99c3f9533832d3db015df458a56a15ae0952218756cc52bf82a6f1104e4f3->leave($__internal_f8c99c3f9533832d3db015df458a56a15ae0952218756cc52bf82a6f1104e4f3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e36ea7707489179aeae8c55a42274285af59f2c5f4529230e3e5d27464f77eb = $this->env->getExtension("native_profiler");
        $__internal_9e36ea7707489179aeae8c55a42274285af59f2c5f4529230e3e5d27464f77eb->enter($__internal_9e36ea7707489179aeae8c55a42274285af59f2c5f4529230e3e5d27464f77eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Product creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("product_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_9e36ea7707489179aeae8c55a42274285af59f2c5f4529230e3e5d27464f77eb->leave($__internal_9e36ea7707489179aeae8c55a42274285af59f2c5f4529230e3e5d27464f77eb_prof);

    }

    public function getTemplateName()
    {
        return ":product:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Product creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('product_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
