<?php

/* CECoreBundle::layout.html.twig */
class __TwigTemplate_3dfd30c5698692127e85813e5df22657167deb35f2c793cec7a6ff9e189d58c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripttop' => array($this, 'block_javascripttop'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ec578e283266a9fdd8ffc14b863b3d009fdfcf30b8a0050aaa4eb3cbef5c6df = $this->env->getExtension("native_profiler");
        $__internal_4ec578e283266a9fdd8ffc14b863b3d009fdfcf30b8a0050aaa4eb3cbef5c6df->enter($__internal_4ec578e283266a9fdd8ffc14b863b3d009fdfcf30b8a0050aaa4eb3cbef5c6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CECoreBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />

    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/simplex.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-toggle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\">
    ";
        // line 10
        $this->displayBlock('javascripttop', $context, $blocks);
        // line 19
        echo "</head>
<body>

";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 23
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 24
                echo "        <div class=\"flash-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
            ";
                // line 25
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
<div class=\"container\">

    ";
        // line 32
        $this->loadTemplate("CECoreBundle:Default:navbar.html.twig", "CECoreBundle::layout.html.twig", 32)->display($context);
        // line 33
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "
</div>
</body>
</html>
";
        
        $__internal_4ec578e283266a9fdd8ffc14b863b3d009fdfcf30b8a0050aaa4eb3cbef5c6df->leave($__internal_4ec578e283266a9fdd8ffc14b863b3d009fdfcf30b8a0050aaa4eb3cbef5c6df_prof);

    }

    // line 10
    public function block_javascripttop($context, array $blocks = array())
    {
        $__internal_7adbbd17fce6f771b164d7b1a7b21ed4f7a5498fc01a2209bf03be41e562b1fe = $this->env->getExtension("native_profiler");
        $__internal_7adbbd17fce6f771b164d7b1a7b21ed4f7a5498fc01a2209bf03be41e562b1fe->enter($__internal_7adbbd17fce6f771b164d7b1a7b21ed4f7a5498fc01a2209bf03be41e562b1fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripttop"));

        // line 11
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-toggle.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/validator.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/delete.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_7adbbd17fce6f771b164d7b1a7b21ed4f7a5498fc01a2209bf03be41e562b1fe->leave($__internal_7adbbd17fce6f771b164d7b1a7b21ed4f7a5498fc01a2209bf03be41e562b1fe_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_36213c534123dade585f7cdeac9ca29456ac4de48513abaee2b1515422724ad4 = $this->env->getExtension("native_profiler");
        $__internal_36213c534123dade585f7cdeac9ca29456ac4de48513abaee2b1515422724ad4->enter($__internal_36213c534123dade585f7cdeac9ca29456ac4de48513abaee2b1515422724ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 34
        echo "    ";
        
        $__internal_36213c534123dade585f7cdeac9ca29456ac4de48513abaee2b1515422724ad4->leave($__internal_36213c534123dade585f7cdeac9ca29456ac4de48513abaee2b1515422724ad4_prof);

    }

    public function getTemplateName()
    {
        return "CECoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 34,  139 => 33,  129 => 16,  125 => 15,  121 => 14,  117 => 13,  113 => 12,  108 => 11,  102 => 10,  91 => 35,  88 => 33,  86 => 32,  81 => 29,  68 => 25,  63 => 24,  58 => 23,  54 => 22,  49 => 19,  47 => 10,  43 => 9,  39 => 8,  35 => 7,  31 => 6,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/* */
/*     <link href="{{ asset('css/simplex.bootstrap.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('css/bootstrap-toggle.min.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('css/style.css') }}" rel="stylesheet">*/
/*     <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">*/
/*     {% block javascripttop %}*/
/*         <script src="{{ asset('js/jquery.min.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery-ui.min.js') }}"></script>*/
/*         <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*         <script src="{{ asset('js/bootstrap-toggle.min.js') }}"></script>*/
/*         <script src="{{ asset('js/validator.js') }}"></script>*/
/*         <script src="{{ asset('js/delete.js') }}"></script>*/
/* */
/*     {% endblock javascripttop %}*/
/* </head>*/
/* <body>*/
/* */
/* {% for type, messages in app.session.flashbag.all() %}*/
/*     {% for message in messages %}*/
/*         <div class="flash-{{ type }}">*/
/*             {{ message }}*/
/*         </div>*/
/*     {% endfor %}*/
/* {% endfor %}*/
/* */
/* <div class="container">*/
/* */
/*     {%  include 'CECoreBundle:Default:navbar.html.twig' %}*/
/*     {% block body %}*/
/*     {% endblock body %}*/
/* */
/* </div>*/
/* </body>*/
/* </html>*/
/* */
