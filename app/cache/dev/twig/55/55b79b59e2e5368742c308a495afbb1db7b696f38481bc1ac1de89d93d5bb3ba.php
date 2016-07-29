<?php

/* CEUserBundle:User:edit.html.twig */
class __TwigTemplate_70afcfc7ecd54a90ef08f0ce9676d153ccf4060a5e2ea12a255f21507ca7057e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CECoreBundle::layout.html.twig", "CEUserBundle:User:edit.html.twig", 1);
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
        $__internal_e4c7b57ae9ceaefafed7defc4985773818e727869dfe551a0a00fda920e9edc8 = $this->env->getExtension("native_profiler");
        $__internal_e4c7b57ae9ceaefafed7defc4985773818e727869dfe551a0a00fda920e9edc8->enter($__internal_e4c7b57ae9ceaefafed7defc4985773818e727869dfe551a0a00fda920e9edc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEUserBundle:User:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4c7b57ae9ceaefafed7defc4985773818e727869dfe551a0a00fda920e9edc8->leave($__internal_e4c7b57ae9ceaefafed7defc4985773818e727869dfe551a0a00fda920e9edc8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f656a3c7eb324b0049ccbfc3d10e16baef6bba190a1ae3d31b3675f2037b5a25 = $this->env->getExtension("native_profiler");
        $__internal_f656a3c7eb324b0049ccbfc3d10e16baef6bba190a1ae3d31b3675f2037b5a25->enter($__internal_f656a3c7eb324b0049ccbfc3d10e16baef6bba190a1ae3d31b3675f2037b5a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "CEUserBundle:User:userForm.html.twig", array("titre" => ((("Edition de l'utilisateur " . twig_capitalize_string_filter($this->env, $this->getAttribute(        // line 5
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "firstname", array()))) . " ") . twig_upper_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username", array()))), "form" => (isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "showDeleteButton" => true));
        echo "

";
        
        $__internal_f656a3c7eb324b0049ccbfc3d10e16baef6bba190a1ae3d31b3675f2037b5a25->leave($__internal_f656a3c7eb324b0049ccbfc3d10e16baef6bba190a1ae3d31b3675f2037b5a25_prof);

    }

    public function getTemplateName()
    {
        return "CEUserBundle:User:edit.html.twig";
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
/*     {{ include('CEUserBundle:User:userForm.html.twig',*/
/*     {'titre': 'Edition de l\'utilisateur ' ~ entity.firstname|capitalize ~ ' '~ entity.username|upper, 'form': edit_form, 'showDeleteButton': true}) }}*/
/* */
/* {% endblock %}*/
/* */
