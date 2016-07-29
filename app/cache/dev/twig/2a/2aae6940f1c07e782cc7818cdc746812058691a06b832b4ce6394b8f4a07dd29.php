<?php

/* CEDeviceBundle:Default:edit.html.twig */
class __TwigTemplate_531603c09ab0d67ae7af9acda357e35fe8d7d6bd7641efda310d4f1f2999057a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CECoreBundle::layout.html.twig", "CEDeviceBundle:Default:edit.html.twig", 1);
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
        $__internal_3c0aadb69c522cbd975bbb78dce5fdb2934bb21fa01ae56e7d6c460a6750b8cc = $this->env->getExtension("native_profiler");
        $__internal_3c0aadb69c522cbd975bbb78dce5fdb2934bb21fa01ae56e7d6c460a6750b8cc->enter($__internal_3c0aadb69c522cbd975bbb78dce5fdb2934bb21fa01ae56e7d6c460a6750b8cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEDeviceBundle:Default:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c0aadb69c522cbd975bbb78dce5fdb2934bb21fa01ae56e7d6c460a6750b8cc->leave($__internal_3c0aadb69c522cbd975bbb78dce5fdb2934bb21fa01ae56e7d6c460a6750b8cc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a684f7e9d2f415dc45f263a6149e5a33f892a8cd1934a2420c3d21aa3ec4f92 = $this->env->getExtension("native_profiler");
        $__internal_6a684f7e9d2f415dc45f263a6149e5a33f892a8cd1934a2420c3d21aa3ec4f92->enter($__internal_6a684f7e9d2f415dc45f263a6149e5a33f892a8cd1934a2420c3d21aa3ec4f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "CEDeviceBundle:Default:deviceForm.html.twig", array("titre" => "Modifier un matériel ", "form" =>         // line 5
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "edit" => true));
        echo "
";
        
        $__internal_6a684f7e9d2f415dc45f263a6149e5a33f892a8cd1934a2420c3d21aa3ec4f92->leave($__internal_6a684f7e9d2f415dc45f263a6149e5a33f892a8cd1934a2420c3d21aa3ec4f92_prof);

    }

    public function getTemplateName()
    {
        return "CEDeviceBundle:Default:edit.html.twig";
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
/*     {'titre': 'Modifier un matériel ', 'form': form, 'edit': true}) }}*/
/* {% endblock %}*/
/* */
/* */
