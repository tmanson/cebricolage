<?php

/* CEDeviceBundle:Default:deviceForm.html.twig */
class __TwigTemplate_cb9e9ed0248873ccbab253e932462f4b9d5d28f671e846742a46001f2c9f0a20 extends Twig_Template
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
        $__internal_f499174e6b5e122c1bce612f72a24889fc887c851d96dc5379e4e6966b8f48d7 = $this->env->getExtension("native_profiler");
        $__internal_f499174e6b5e122c1bce612f72a24889fc887c851d96dc5379e4e6966b8f48d7->enter($__internal_f499174e6b5e122c1bce612f72a24889fc887c851d96dc5379e4e6966b8f48d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEDeviceBundle:Default:deviceForm.html.twig"));

        // line 1
        if ((isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit"))) {
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
        echo $this->env->getExtension('routing')->getPath("device_management");
        echo "\" class=\"btn btn-sm btn-primary\">Retour</a>
            ";
        // line 14
        if ((isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit"))) {
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
                <th class=\"col-xs-2 col-md-1\">Référence</th>
                <td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reference", array()), 'errors');
        echo "
                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reference", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
            <tr>
                <th class=\"col-xs-2 col-md-1\">Libellé</th>
                <td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'errors');
        echo "
                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <th class=\"col-xs-2 col-md-1\">Marque</th>
                <td>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marque", array()), 'errors');
        echo "
                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marque", array()), 'widget');
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-xs-2 col-md-1\">Modèle</th>
                <td>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "modele", array()), 'errors');
        echo "
                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "modele", array()), 'widget');
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-xs-2 col-md-1\">Commentaire</th>
                <td>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'errors');
        echo "
                    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'widget');
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-xs-2 col-md-1\">Date d'achat</th>
                <td>";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateAchat", array()), 'errors');
        echo "
                    ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateAchat", array()), 'widget');
        echo "</td>

            </tr>


            <tr>

                <th class=\"col-xs-2 col-md-1\">Image</th>
                <td>

                ";
        // line 65
        if (((isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")) &&  !(null === $this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "image", array())))) {
            // line 66
            echo "                    <div class=\"clearfix content-heading\">
                        <img
                        src=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((($this->getAttribute($this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "image", array()), "uploadDir", array()) . "/") . $this->getAttribute($this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "image", array()), "url", array()))), "html", null, true);
            echo "\"
                        alt=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "image", array()), "alt", array()), "html", null, true);
            echo "\"
                        class=\"col-xs-4 col-md-2 img-thumbnail img-responsive clear\"
                        />
                    </div>
                    Remplacer image :
                ";
        }
        // line 75
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'errors');
        echo "
                    ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'widget');
        echo "

                </td>
            </tr>
            ";
        // line 80
        if ((isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit"))) {
            // line 81
            echo "            <tr>
                <th class=\"col-xs-2 col-md-1\">Disponibilité</th>
                <td>";
            // line 83
            if ( !$this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "disponible", array())) {
                // line 84
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "disponibleLib", array()), "html", null, true);
                echo "
                    ";
            } else {
                // line 86
                echo "                        Le matériel est disponible.
                    ";
            }
            // line 87
            echo "</td>
            </tr>
            ";
        }
        // line 90
        echo "
            </tbody>
        </table>
    </div>
</div>
";
        // line 95
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_f499174e6b5e122c1bce612f72a24889fc887c851d96dc5379e4e6966b8f48d7->leave($__internal_f499174e6b5e122c1bce612f72a24889fc887c851d96dc5379e4e6966b8f48d7_prof);

    }

    public function getTemplateName()
    {
        return "CEDeviceBundle:Default:deviceForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 95,  203 => 90,  198 => 87,  194 => 86,  188 => 84,  186 => 83,  182 => 81,  180 => 80,  173 => 76,  168 => 75,  159 => 69,  155 => 68,  151 => 66,  149 => 65,  136 => 55,  132 => 54,  125 => 50,  121 => 49,  114 => 45,  110 => 44,  103 => 40,  99 => 39,  91 => 34,  87 => 33,  78 => 27,  74 => 26,  66 => 21,  58 => 17,  54 => 15,  52 => 14,  48 => 13,  43 => 11,  36 => 7,  33 => 6,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if edit %}*/
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
/*             <a href="{{ path('device_management') }}" class="btn btn-sm btn-primary">Retour</a>*/
/*             {% if edit %}*/
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
/*                 <th class="col-xs-2 col-md-1">Référence</th>*/
/*                 <td>{{ form_errors(form.reference) }}*/
/*                     {{ form_widget(form.reference) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*             <tr>*/
/*                 <th class="col-xs-2 col-md-1">Libellé</th>*/
/*                 <td>{{ form_errors(form.libelle) }}*/
/*                     {{ form_widget(form.libelle) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th class="col-xs-2 col-md-1">Marque</th>*/
/*                 <td>{{ form_errors(form.marque) }}*/
/*                     {{ form_widget(form.marque) }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th class="col-xs-2 col-md-1">Modèle</th>*/
/*                 <td>{{ form_errors(form.modele) }}*/
/*                     {{ form_widget(form.modele) }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th class="col-xs-2 col-md-1">Commentaire</th>*/
/*                 <td>{{ form_errors(form.commentaire) }}*/
/*                     {{ form_widget(form.commentaire) }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th class="col-xs-2 col-md-1">Date d'achat</th>*/
/*                 <td>{{ form_errors(form.dateAchat) }}*/
/*                     {{ form_widget(form.dateAchat) }}</td>*/
/* */
/*             </tr>*/
/* */
/* */
/*             <tr>*/
/* */
/*                 <th class="col-xs-2 col-md-1">Image</th>*/
/*                 <td>*/
/* */
/*                 {% if edit and device.image is not null %}*/
/*                     <div class="clearfix content-heading">*/
/*                         <img*/
/*                         src="{{ asset(device.image.uploadDir ~ '/' ~ device.image.url) }}"*/
/*                         alt="{{ device.image.alt }}"*/
/*                         class="col-xs-4 col-md-2 img-thumbnail img-responsive clear"*/
/*                         />*/
/*                     </div>*/
/*                     Remplacer image :*/
/*                 {% endif %}*/
/*                     {{ form_errors(form.image) }}*/
/*                     {{ form_widget(form.image) }}*/
/* */
/*                 </td>*/
/*             </tr>*/
/*             {% if edit %}*/
/*             <tr>*/
/*                 <th class="col-xs-2 col-md-1">Disponibilité</th>*/
/*                 <td>{% if not device.disponible %}*/
/*                         {{ device.disponibleLib }}*/
/*                     {%  else %}*/
/*                         Le matériel est disponible.*/
/*                     {%  endif %}</td>*/
/*             </tr>*/
/*             {% endif %}*/
/* */
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* </div>*/
/* {{ form_end(form) }}*/
/* */
