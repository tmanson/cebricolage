<?php

/* CEUserBundle:User:new.html.twig */
class __TwigTemplate_dadcb6f92d75493768809c02335ec7d09e17e23a9719856649053e6173d27ed4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CECoreBundle::layout.html.twig", "CEUserBundle:User:new.html.twig", 1);
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
        $__internal_6ed520403160e598c53ab1244e4d6302e3334cf738360d1a7b2a3602a2db1bc6 = $this->env->getExtension("native_profiler");
        $__internal_6ed520403160e598c53ab1244e4d6302e3334cf738360d1a7b2a3602a2db1bc6->enter($__internal_6ed520403160e598c53ab1244e4d6302e3334cf738360d1a7b2a3602a2db1bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEUserBundle:User:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ed520403160e598c53ab1244e4d6302e3334cf738360d1a7b2a3602a2db1bc6->leave($__internal_6ed520403160e598c53ab1244e4d6302e3334cf738360d1a7b2a3602a2db1bc6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_388058a4e2232e2d116a93ba081cf742e7ab2d33519ca5447ee720d00e1a7f8c = $this->env->getExtension("native_profiler");
        $__internal_388058a4e2232e2d116a93ba081cf742e7ab2d33519ca5447ee720d00e1a7f8c->enter($__internal_388058a4e2232e2d116a93ba081cf742e7ab2d33519ca5447ee720d00e1a7f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        echo twig_include($this->env, $context, "CEUserBundle:User:userForm.html.twig", array("titre" => "Création d'un utilisateur ", "form" =>         // line 6
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "showDeleteButton" => false));
        echo "
";
        
        $__internal_388058a4e2232e2d116a93ba081cf742e7ab2d33519ca5447ee720d00e1a7f8c->leave($__internal_388058a4e2232e2d116a93ba081cf742e7ab2d33519ca5447ee720d00e1a7f8c_prof);

    }

    public function getTemplateName()
    {
        return "CEUserBundle:User:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "CECoreBundle::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*     {{ include('CEUserBundle:User:userForm.html.twig',*/
/*     {'titre': 'Création d\'un utilisateur ', 'form': form, 'showDeleteButton': false}) }}*/
/* {% endblock %}*/
/* */
