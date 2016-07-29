<?php

/* CEDeviceBundle:Default:create.html.twig */
class __TwigTemplate_49677f4f556e2dd215ae6eb6057865546c55771c923e1f83362890ada8a9df7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CECoreBundle::layout.html.twig", "CEDeviceBundle:Default:create.html.twig", 1);
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
        $__internal_3714335b87f56d71e4751b4e18064ead75c6ad2ada039f736d07207e14dc87d3 = $this->env->getExtension("native_profiler");
        $__internal_3714335b87f56d71e4751b4e18064ead75c6ad2ada039f736d07207e14dc87d3->enter($__internal_3714335b87f56d71e4751b4e18064ead75c6ad2ada039f736d07207e14dc87d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEDeviceBundle:Default:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3714335b87f56d71e4751b4e18064ead75c6ad2ada039f736d07207e14dc87d3->leave($__internal_3714335b87f56d71e4751b4e18064ead75c6ad2ada039f736d07207e14dc87d3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e79eaed413226d701f54b9e1a7b7e1b1280f93ddc69e09d3dc22f2606cf5dec = $this->env->getExtension("native_profiler");
        $__internal_4e79eaed413226d701f54b9e1a7b7e1b1280f93ddc69e09d3dc22f2606cf5dec->enter($__internal_4e79eaed413226d701f54b9e1a7b7e1b1280f93ddc69e09d3dc22f2606cf5dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "CEDeviceBundle:Default:deviceForm.html.twig", array("titre" => "Enregistrer un matériel ", "form" =>         // line 5
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "edit" => false));
        echo "
";
        
        $__internal_4e79eaed413226d701f54b9e1a7b7e1b1280f93ddc69e09d3dc22f2606cf5dec->leave($__internal_4e79eaed413226d701f54b9e1a7b7e1b1280f93ddc69e09d3dc22f2606cf5dec_prof);

    }

    public function getTemplateName()
    {
        return "CEDeviceBundle:Default:create.html.twig";
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
/*     {{ include('CEDeviceBundle:Default:deviceForm.html.twig',*/
/*     {'titre': 'Enregistrer un matériel ', 'form': form, 'edit': false}) }}*/
/* {% endblock %}*/
/* */
/* */
