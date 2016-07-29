<?php

/* CEReservationBundle:Reservation:new.html.twig */
class __TwigTemplate_bef228c971233f8f1580a6e6e8382752466dbb45d906842292b12c0596b9fc9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CECoreBundle::layout.html.twig", "CEReservationBundle:Reservation:new.html.twig", 1);
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
        $__internal_371b1d019cd9e6581b9ac109635aa274f7a4c3beede0840c09321506986f2f5a = $this->env->getExtension("native_profiler");
        $__internal_371b1d019cd9e6581b9ac109635aa274f7a4c3beede0840c09321506986f2f5a->enter($__internal_371b1d019cd9e6581b9ac109635aa274f7a4c3beede0840c09321506986f2f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEReservationBundle:Reservation:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_371b1d019cd9e6581b9ac109635aa274f7a4c3beede0840c09321506986f2f5a->leave($__internal_371b1d019cd9e6581b9ac109635aa274f7a4c3beede0840c09321506986f2f5a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_09c1e6be32205efcb487e83b1ee5f130135545875a63b68e351ad12796251966 = $this->env->getExtension("native_profiler");
        $__internal_09c1e6be32205efcb487e83b1ee5f130135545875a63b68e351ad12796251966->enter($__internal_09c1e6be32205efcb487e83b1ee5f130135545875a63b68e351ad12796251966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo twig_include($this->env, $context, "CEReservationBundle:Reservation:reservationForm.html.twig", array("titre" => "Création d'une réservation ", "form" =>         // line 5
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "showDeleteButton" => false, "editionMode" => false));
        echo "
";
        
        $__internal_09c1e6be32205efcb487e83b1ee5f130135545875a63b68e351ad12796251966->leave($__internal_09c1e6be32205efcb487e83b1ee5f130135545875a63b68e351ad12796251966_prof);

    }

    public function getTemplateName()
    {
        return "CEReservationBundle:Reservation:new.html.twig";
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
/*     {'titre': 'Création d\'une réservation ', 'form': form, 'showDeleteButton': false, 'editionMode': false}) }}*/
/* {% endblock %}*/
/* */
