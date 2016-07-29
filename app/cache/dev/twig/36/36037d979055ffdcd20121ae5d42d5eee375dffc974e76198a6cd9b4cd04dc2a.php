<?php

/* CEDeviceBundle:Marque:new.html.twig */
class __TwigTemplate_1160ac3de16b2c7cf57127d5a839ffa4f5dec6dde5bfe7eac0c3c76712f81274 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CECoreBundle::layout.html.twig", "CEDeviceBundle:Marque:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CECoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79065ebe9024f22857cbedf5d7f165ebb0a979742dee590797207dca62730c91 = $this->env->getExtension("native_profiler");
        $__internal_79065ebe9024f22857cbedf5d7f165ebb0a979742dee590797207dca62730c91->enter($__internal_79065ebe9024f22857cbedf5d7f165ebb0a979742dee590797207dca62730c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEDeviceBundle:Marque:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79065ebe9024f22857cbedf5d7f165ebb0a979742dee590797207dca62730c91->leave($__internal_79065ebe9024f22857cbedf5d7f165ebb0a979742dee590797207dca62730c91_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c691d0b9dc2ea59e454eb32add51847813daf92bf331643b39bf0672ea7f8d3a = $this->env->getExtension("native_profiler");
        $__internal_c691d0b9dc2ea59e454eb32add51847813daf92bf331643b39bf0672ea7f8d3a->enter($__internal_c691d0b9dc2ea59e454eb32add51847813daf92bf331643b39bf0672ea7f8d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "CEDeviceBundle:Marque:marqueForm.html.twig", array("titre" => "Enregistrer une marque ", "form" =>         // line 5
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "showDeleteButton" => false));
        echo "
";
        
        $__internal_c691d0b9dc2ea59e454eb32add51847813daf92bf331643b39bf0672ea7f8d3a->leave($__internal_c691d0b9dc2ea59e454eb32add51847813daf92bf331643b39bf0672ea7f8d3a_prof);

    }

    public function getTemplateName()
    {
        return "CEDeviceBundle:Marque:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "CECoreBundle::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/*     {{ include('CEDeviceBundle:Marque:marqueForm.html.twig',*/
/*     {'titre': 'Enregistrer une marque ', 'form': form, 'showDeleteButton': false}) }}*/
/* {% endblock %}*/
/* */
/* */
