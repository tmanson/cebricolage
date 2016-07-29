<?php

/* CEReservationBundle:Reservation:edit.html.twig */
class __TwigTemplate_012dd2f1e735a751a0fb87b006c63123358f93038451394892b6cf1f01eb98f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CECoreBundle::layout.html.twig", "CEReservationBundle:Reservation:edit.html.twig", 1);
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
        $__internal_c029b2eaa9942bdfb2508b431f1e26ee2ff7b75721b631a4829d20d5a928fc70 = $this->env->getExtension("native_profiler");
        $__internal_c029b2eaa9942bdfb2508b431f1e26ee2ff7b75721b631a4829d20d5a928fc70->enter($__internal_c029b2eaa9942bdfb2508b431f1e26ee2ff7b75721b631a4829d20d5a928fc70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEReservationBundle:Reservation:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c029b2eaa9942bdfb2508b431f1e26ee2ff7b75721b631a4829d20d5a928fc70->leave($__internal_c029b2eaa9942bdfb2508b431f1e26ee2ff7b75721b631a4829d20d5a928fc70_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8d7628edfe6042f333de5c8cfe4a5dc834ac1a12d2da422d644d063d4d2f0bd = $this->env->getExtension("native_profiler");
        $__internal_d8d7628edfe6042f333de5c8cfe4a5dc834ac1a12d2da422d644d063d4d2f0bd->enter($__internal_d8d7628edfe6042f333de5c8cfe4a5dc834ac1a12d2da422d644d063d4d2f0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo twig_include($this->env, $context, "CEReservationBundle:Reservation:reservationForm.html.twig", array("titre" => "Modification d'une réservation ", "form" =>         // line 5
(isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "showDeleteButton" => true, "editionMode" => true));
        echo "
";
        
        $__internal_d8d7628edfe6042f333de5c8cfe4a5dc834ac1a12d2da422d644d063d4d2f0bd->leave($__internal_d8d7628edfe6042f333de5c8cfe4a5dc834ac1a12d2da422d644d063d4d2f0bd_prof);

    }

    public function getTemplateName()
    {
        return "CEReservationBundle:Reservation:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "CECoreBundle::layout.html.twig" %}*/
/* */
/* {% block body -%}*/
/*     {{ include('CEReservationBundle:Reservation:reservationForm.html.twig',*/
/*     {'titre': 'Modification d\'une réservation ', 'form': edit_form, 'showDeleteButton': true, 'editionMode': true}) }}*/
/* {% endblock %}*/
/* */
