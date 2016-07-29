<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_35db27164d7d99cb6f2cf73c373515e6c20e5dda65a103b35f511d24a214564c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18631991f2d5501af4c02e8db9a2f389c9aedd22f3a6ca18c4ee3fb401ac4135 = $this->env->getExtension("native_profiler");
        $__internal_18631991f2d5501af4c02e8db9a2f389c9aedd22f3a6ca18c4ee3fb401ac4135->enter($__internal_18631991f2d5501af4c02e8db9a2f389c9aedd22f3a6ca18c4ee3fb401ac4135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18631991f2d5501af4c02e8db9a2f389c9aedd22f3a6ca18c4ee3fb401ac4135->leave($__internal_18631991f2d5501af4c02e8db9a2f389c9aedd22f3a6ca18c4ee3fb401ac4135_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cec017ed95c2eaec1b309a793ef412409236b3ce45c629c8535ac686b768a018 = $this->env->getExtension("native_profiler");
        $__internal_cec017ed95c2eaec1b309a793ef412409236b3ce45c629c8535ac686b768a018->enter($__internal_cec017ed95c2eaec1b309a793ef412409236b3ce45c629c8535ac686b768a018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cec017ed95c2eaec1b309a793ef412409236b3ce45c629c8535ac686b768a018->leave($__internal_cec017ed95c2eaec1b309a793ef412409236b3ce45c629c8535ac686b768a018_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1a615d2386fef7c633104f22137b167e40474673f0563183221ad9d7a5e1a3d4 = $this->env->getExtension("native_profiler");
        $__internal_1a615d2386fef7c633104f22137b167e40474673f0563183221ad9d7a5e1a3d4->enter($__internal_1a615d2386fef7c633104f22137b167e40474673f0563183221ad9d7a5e1a3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1a615d2386fef7c633104f22137b167e40474673f0563183221ad9d7a5e1a3d4->leave($__internal_1a615d2386fef7c633104f22137b167e40474673f0563183221ad9d7a5e1a3d4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6134d082b8af74b0fcedcd9cd8749f56d8e5cd3dfd0269f654d37bc38cf0e74a = $this->env->getExtension("native_profiler");
        $__internal_6134d082b8af74b0fcedcd9cd8749f56d8e5cd3dfd0269f654d37bc38cf0e74a->enter($__internal_6134d082b8af74b0fcedcd9cd8749f56d8e5cd3dfd0269f654d37bc38cf0e74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6134d082b8af74b0fcedcd9cd8749f56d8e5cd3dfd0269f654d37bc38cf0e74a->leave($__internal_6134d082b8af74b0fcedcd9cd8749f56d8e5cd3dfd0269f654d37bc38cf0e74a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
