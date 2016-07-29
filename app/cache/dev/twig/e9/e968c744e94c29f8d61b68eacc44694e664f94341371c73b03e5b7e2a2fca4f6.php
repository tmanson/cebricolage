<?php

/* CEDeviceBundle:Marque:marqueForm.html.twig */
class __TwigTemplate_d225af285ef9ed956a2dfa8c1bde8106593308ce88bf945835017c6d936d7254 extends Twig_Template
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
        $__internal_c64fc0a38a20dbe7aae6c982b1f623111a2ce143f6cd20c91317bb69c1156b52 = $this->env->getExtension("native_profiler");
        $__internal_c64fc0a38a20dbe7aae6c982b1f623111a2ce143f6cd20c91317bb69c1156b52->enter($__internal_c64fc0a38a20dbe7aae6c982b1f623111a2ce143f6cd20c91317bb69c1156b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEDeviceBundle:Marque:marqueForm.html.twig"));

        // line 1
        if ((isset($context["showDeleteButton"]) ? $context["showDeleteButton"] : $this->getContext($context, "showDeleteButton"))) {
            // line 2
            echo "    <div class=\"hidden\">
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
        echo $this->env->getExtension('routing')->getPath("brand");
        echo "\" class=\"btn btn-sm btn-primary\">Retour</a>
            ";
        // line 14
        if ((isset($context["showDeleteButton"]) ? $context["showDeleteButton"] : $this->getContext($context, "showDeleteButton"))) {
            // line 15
            echo "                <a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("brand_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "' class=\"btn btn-sm btn-warning\">Supprimer</a>
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
                <th class=\"col-xs-2 col-md-1\">Libellé</th>
                <td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'errors');
        echo "
                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'widget');
        echo "
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_c64fc0a38a20dbe7aae6c982b1f623111a2ce143f6cd20c91317bb69c1156b52->leave($__internal_c64fc0a38a20dbe7aae6c982b1f623111a2ce143f6cd20c91317bb69c1156b52_prof);

    }

    public function getTemplateName()
    {
        return "CEDeviceBundle:Marque:marqueForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 34,  80 => 27,  76 => 26,  68 => 21,  60 => 17,  54 => 15,  52 => 14,  48 => 13,  43 => 11,  36 => 7,  33 => 6,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if showDeleteButton %}*/
/*     <div class="hidden">*/
/*         {{ form(delete_form, {'attr': {'id': 'delete_form', 'class': 'hidden'}}) }}*/
/*     </div>*/
/* {% endif %}*/
/* */
/* {{ form_start(form)}}*/
/* <div class="table-responsive panel panel-default">*/
/* */
/*     <div class="container-fluid panel-heading">*/
/*         <div class="pull-left "><h4>{{ titre }}</h4></div>*/
/*         <div class="btn-group pull-right">*/
/*             <a href="{{ path('brand') }}" class="btn btn-sm btn-primary">Retour</a>*/
/*             {% if showDeleteButton %}*/
/*                 <a href='{{ path('brand_delete', { 'id': entity.id }) }}' class="btn btn-sm btn-warning">Supprimer</a>*/
/*             {% endif %}*/
/*             {{ form_widget(form.submit) }}*/
/*         </div>*/
/*     </div>*/
/*     <div>*/
/*         {{ form_errors(form) }}*/
/*         <table class="record_properties">*/
/*             <tbody>*/
/*             <tr>*/
/*                 <th class="col-xs-2 col-md-1">Libellé</th>*/
/*                 <td>{{ form_errors(form.libelle) }}*/
/*                     {{ form_widget(form.libelle) }}*/
/*                 </td>*/
/*             </tr>*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* </div>*/
/* {{ form_end(form) }}*/
/* */
