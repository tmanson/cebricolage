<?php

/* CEUserBundle:User:userForm.html.twig */
class __TwigTemplate_0b9e3e02954cb69f1f22afd920b02f663c952512260da22cce605dd0884a64c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d170487885982f4c20ac4d22579cf1c77eb76001e6b3f1db71af8f77abfda14 = $this->env->getExtension("native_profiler");
        $__internal_2d170487885982f4c20ac4d22579cf1c77eb76001e6b3f1db71af8f77abfda14->enter($__internal_2d170487885982f4c20ac4d22579cf1c77eb76001e6b3f1db71af8f77abfda14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEUserBundle:User:userForm.html.twig"));

        // line 1
        if ((isset($context["showDeleteButton"]) ? $context["showDeleteButton"] : $this->getContext($context, "showDeleteButton"))) {
            // line 2
            echo "<div class=\"hidden\">
    ";
            // line 3
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form', array("attr" => array("id" => "delete_form", "class" => "hidden")));
            echo "
</div>
";
        }
        // line 6
        echo "
";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
<div class=\"table-responsive panel panel-default\">

    <div class=\"container-fluid panel-heading\">
        <div class=\"pull-left \"><h4>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
        echo "</h4></div>
        <div class=\"btn-group pull-right\">
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\" class=\"btn btn-sm btn-primary\">Retour</a>
            ";
        // line 14
        if ((isset($context["showDeleteButton"]) ? $context["showDeleteButton"] : $this->getContext($context, "showDeleteButton"))) {
            // line 15
            echo "                <a onclick=\"document.getElementById('delete_form').submit();\" href='#' class=\"btn btn-sm btn-warning\">Supprimer</a>
            ";
        }
        // line 17
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
        echo "
        </div>
    </div>
    <div>
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        <table class=\"record_properties\">
            <tbody>
            <tr>
                <th class=\"col-xs-2 col-md-1\">Identifiant</th>
                <td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "identifiant", array()), 'errors');
        echo "
                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "identifiant", array()), 'widget');
        echo "

                </td>
            </tr>
            <tr>
                <th class=\"col-xs-2 col-md-1\">Nom</th>
                <td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-xs-2 col-md-1\">Prénom</th>
                <td>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'errors');
        echo "
                    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'widget');
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-xs-2 col-md-1\">Email</th>
                <td>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-xs-2 col-md-1\">Téléphone</th>
                <td>";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phoneNumber", array()), 'errors');
        echo "
                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phoneNumber", array()), 'widget');
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-xs-2 col-md-1\">Groupe</th>
                <td>";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "groups", array()), 'errors');
        echo "
                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "groups", array()), 'widget');
        echo "</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
";
        // line 60
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_2d170487885982f4c20ac4d22579cf1c77eb76001e6b3f1db71af8f77abfda14->leave($__internal_2d170487885982f4c20ac4d22579cf1c77eb76001e6b3f1db71af8f77abfda14_prof);

    }

    public function getTemplateName()
    {
        return "CEUserBundle:User:userForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 60,  135 => 54,  131 => 53,  124 => 49,  120 => 48,  113 => 44,  109 => 43,  102 => 39,  98 => 38,  91 => 34,  87 => 33,  78 => 27,  74 => 26,  66 => 21,  58 => 17,  54 => 15,  52 => 14,  48 => 13,  43 => 11,  36 => 7,  33 => 6,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if showDeleteButton %}*/
/* <div class="hidden">*/
/*     {{ form(delete_form, {'attr': {'id': 'delete_form', 'class': 'hidden'}}) }}*/
/* </div>*/
/* {% endif %}*/
/* */
/* {{ form_start(form)}}*/
/* <div class="table-responsive panel panel-default">*/
/* */
/*     <div class="container-fluid panel-heading">*/
/*         <div class="pull-left "><h4>{{ titre }}</h4></div>*/
/*         <div class="btn-group pull-right">*/
/*             <a href="{{ path('user') }}" class="btn btn-sm btn-primary">Retour</a>*/
/*             {% if showDeleteButton %}*/
/*                 <a onclick="document.getElementById('delete_form').submit();" href='#' class="btn btn-sm btn-warning">Supprimer</a>*/
/*             {% endif %}*/
/*             {{ form_widget(form.submit) }}*/
/*         </div>*/
/*     </div>*/
/*     <div>*/
/*         {{ form_errors(form) }}*/
/*         <table class="record_properties">*/
/*             <tbody>*/
/*             <tr>*/
/*                 <th class="col-xs-2 col-md-1">Identifiant</th>*/
/*                 <td>{{ form_errors(form.identifiant) }}*/
/*                     {{ form_widget(form.identifiant) }}*/
/* */
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th class="col-xs-2 col-md-1">Nom</th>*/
/*                 <td>{{ form_errors(form.username) }}*/
/*                     {{ form_widget(form.username) }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th class="col-xs-2 col-md-1">Prénom</th>*/
/*                 <td>{{ form_errors(form.firstname) }}*/
/*                     {{ form_widget(form.firstname) }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th class="col-xs-2 col-md-1">Email</th>*/
/*                 <td>{{ form_errors(form.email) }}*/
/*                     {{ form_widget(form.email) }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th class="col-xs-2 col-md-1">Téléphone</th>*/
/*                 <td>{{ form_errors(form.phoneNumber) }}*/
/*                     {{ form_widget(form.phoneNumber) }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th class="col-xs-2 col-md-1">Groupe</th>*/
/*                 <td>{{ form_errors(form.groups) }}*/
/*                     {{ form_widget(form.groups) }}</td>*/
/*             </tr>*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* </div>*/
/* {{ form_end(form) }}*/
