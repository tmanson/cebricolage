<?php

/* CEUserBundle:User:show.html.twig */
class __TwigTemplate_c0800403a94e1c7c271e43b3e8169eacc85ae21e4e932dade39416d3f0450393 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CECoreBundle::layout.html.twig", "CEUserBundle:User:show.html.twig", 1);
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
        $__internal_0257d2f80ebbbcbe655754cb921b294a47b8a488d9a98415245350b281244227 = $this->env->getExtension("native_profiler");
        $__internal_0257d2f80ebbbcbe655754cb921b294a47b8a488d9a98415245350b281244227->enter($__internal_0257d2f80ebbbcbe655754cb921b294a47b8a488d9a98415245350b281244227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEUserBundle:User:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0257d2f80ebbbcbe655754cb921b294a47b8a488d9a98415245350b281244227->leave($__internal_0257d2f80ebbbcbe655754cb921b294a47b8a488d9a98415245350b281244227_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9665193f8ed874063f95ef99bdf17fc560c090ec87b4d3845569cd151d18dd7f = $this->env->getExtension("native_profiler");
        $__internal_9665193f8ed874063f95ef99bdf17fc560c090ec87b4d3845569cd151d18dd7f->enter($__internal_9665193f8ed874063f95ef99bdf17fc560c090ec87b4d3845569cd151d18dd7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"hidden\">
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form', array("attr" => array("id" => "delete_form", "class" => "hidden")));
        echo "
</div>
<div class=\"table-responsive panel panel-default\">
    <div class=\"container-fluid panel-heading\">
        <div class=\"pull-left \"><h4>";
        // line 10
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "firstname", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username", array())), "html", null, true);
        echo "</h4></div>
        <div class=\"btn-group pull-right\">
            <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\" class=\"btn btn-primary\">Retour</a>
        ";
        // line 13
        if ($this->env->getExtension('security')->isGranted("ROLE_CRUD_USER")) {
            // line 14
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\">Modifier</a>
            <a onclick=\"document.getElementById('delete_form').submit();\" href='#' class=\"btn btn-warning\">Supprimer</a>
        ";
        }
        // line 17
        echo "        </div>
    </div>
    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th class=\"col-xs-2 col-md-1\">Identifiant</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "identifiant", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-xs-2 col-md-1\">Nom</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-xs-2 col-md-1\">Prénom</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "firstname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-xs-2 col-md-1\">Email</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-xs-2 col-md-1\">Téléphone</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "phoneNumber", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

</div>
";
        
        $__internal_9665193f8ed874063f95ef99bdf17fc560c090ec87b4d3845569cd151d18dd7f->leave($__internal_9665193f8ed874063f95ef99bdf17fc560c090ec87b4d3845569cd151d18dd7f_prof);

    }

    public function getTemplateName()
    {
        return "CEUserBundle:User:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 39,  100 => 35,  93 => 31,  86 => 27,  79 => 23,  71 => 17,  64 => 14,  62 => 13,  58 => 12,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "CECoreBundle::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="hidden">*/
/*     {{ form(delete_form, {'attr': {'id': 'delete_form', 'class': 'hidden'}}) }}*/
/* </div>*/
/* <div class="table-responsive panel panel-default">*/
/*     <div class="container-fluid panel-heading">*/
/*         <div class="pull-left "><h4>{{ entity.firstname | capitalize }} {{ entity.username | upper}}</h4></div>*/
/*         <div class="btn-group pull-right">*/
/*             <a href="{{ path('user') }}" class="btn btn-primary">Retour</a>*/
/*         {%  if is_granted('ROLE_CRUD_USER') %}*/
/*             <a href="{{ path('user_edit', { 'id': entity.id }) }}" class="btn btn-success">Modifier</a>*/
/*             <a onclick="document.getElementById('delete_form').submit();" href='#' class="btn btn-warning">Supprimer</a>*/
/*         {%  endif %}*/
/*         </div>*/
/*     </div>*/
/*     <table class="record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th class="col-xs-2 col-md-1">Identifiant</th>*/
/*                 <td>{{ entity.identifiant }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th class="col-xs-2 col-md-1">Nom</th>*/
/*                 <td>{{ entity.username }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th class="col-xs-2 col-md-1">Prénom</th>*/
/*                 <td>{{ entity.firstname }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th class="col-xs-2 col-md-1">Email</th>*/
/*                 <td>{{ entity.email }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th class="col-xs-2 col-md-1">Téléphone</th>*/
/*                 <td>{{ entity.phoneNumber }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/* </div>*/
/* {% endblock %}*/
