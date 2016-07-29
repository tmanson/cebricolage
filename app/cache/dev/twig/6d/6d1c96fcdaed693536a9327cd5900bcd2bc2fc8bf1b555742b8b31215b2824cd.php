<?php

/* CEUserBundle:Default:index.html.twig */
class __TwigTemplate_7cdf273a08aab70d80a7a807cf130dfec6224d46fe5614239d665afb9ff89058 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CECoreBundle::layout.html.twig", "CEUserBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CECoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_780af495ca7bc21c8ca3c1021ee9e215caaa30a841b1984c785ec5c014ce0cd7 = $this->env->getExtension("native_profiler");
        $__internal_780af495ca7bc21c8ca3c1021ee9e215caaa30a841b1984c785ec5c014ce0cd7->enter($__internal_780af495ca7bc21c8ca3c1021ee9e215caaa30a841b1984c785ec5c014ce0cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEUserBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_780af495ca7bc21c8ca3c1021ee9e215caaa30a841b1984c785ec5c014ce0cd7->leave($__internal_780af495ca7bc21c8ca3c1021ee9e215caaa30a841b1984c785ec5c014ce0cd7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3ea576dc01d5c215045ff5203f91b9988ad562e34ba50abfcc219eafa98b56f9 = $this->env->getExtension("native_profiler");
        $__internal_3ea576dc01d5c215045ff5203f91b9988ad562e34ba50abfcc219eafa98b56f9->enter($__internal_3ea576dc01d5c215045ff5203f91b9988ad562e34ba50abfcc219eafa98b56f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "

";
        
        $__internal_3ea576dc01d5c215045ff5203f91b9988ad562e34ba50abfcc219eafa98b56f9->leave($__internal_3ea576dc01d5c215045ff5203f91b9988ad562e34ba50abfcc219eafa98b56f9_prof);

    }

    public function getTemplateName()
    {
        return "CEUserBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'CECoreBundle::layout.html.twig' %}*/
/* */
/* {% block fos_user_content %}*/
/* */
/* */
/* {% endblock fos_user_content %}*/
