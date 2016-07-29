<?php

/* CEReservationBundle:Reservation:reservationForm.html.twig */
class __TwigTemplate_ce509703da608f96d992a9a2b38fed0561113fd71c3e57078218944060fc249c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_8ef61b999dd3ca048cf558ba4fd94c2035ce3c88c3d954e706e6e5eef94d20e5' => array($this, 'block___internal_8ef61b999dd3ca048cf558ba4fd94c2035ce3c88c3d954e706e6e5eef94d20e5'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_397c566e4c88d4925cf55237dbe83962a5e186284401dd184ea5f919176fd868 = $this->env->getExtension("native_profiler");
        $__internal_397c566e4c88d4925cf55237dbe83962a5e186284401dd184ea5f919176fd868->enter($__internal_397c566e4c88d4925cf55237dbe83962a5e186284401dd184ea5f919176fd868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEReservationBundle:Reservation:reservationForm.html.twig"));

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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
<div class=\"table-responsive panel panel-default\" class=\"form-group form-group-sm\">

    <div class=\"container-fluid panel-heading\">
        <div class=\"pull-left \"><h4>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
        echo "</h4></div>
        <div class=\"btn-group pull-right\">
            <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("reservation");
        echo "\" class=\"btn btn-sm btn-primary\">Retour</a>
            ";
        // line 13
        if ((isset($context["showDeleteButton"]) ? $context["showDeleteButton"] : $this->getContext($context, "showDeleteButton"))) {
            // line 14
            echo "                <a onclick=\"document.getElementById('delete_form').submit();\" href='#' class=\"btn btn-sm btn-warning\">Supprimer</a>
            ";
        }
        // line 16
        echo "            <input type=\"submit\" value=\"Enregistrer\"  class=\"btn btn-sm btn-success\"/>

        </div>
    </div>
    <div >
        <input hidden=\"hidden\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "html", null, true);
        echo "\" id=\"status\" name=\"status\">
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 23
        if ((isset($context["editionMode"]) ? $context["editionMode"] : $this->getContext($context, "editionMode"))) {
            // line 24
            echo "            <table class=\"record_properties\">
                <tbody>
                <tr>
                ";
            // line 27
            echo twig_include($this->env, $context, "CEReservationBundle:Reservation:reservationPrototype.html.twig", array("item" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))));
            echo "
                </tr>
                </tbody>
            </table>
        ";
        } else {
            // line 32
            echo "            <table class=\"record_properties\">
                <thead>
                <tr>
                    <th>Matériel</th>
                    <th>Date de début</th>
                    <th>Date de fin</th>
                    <th>Emprunteur</th>
                    <th></th>
                </tr>
                </thead>
                <tbody class=\"reservations\" id=\"reservationList\" data-prototype=\"";
            // line 42
            echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_8ef61b999dd3ca048cf558ba4fd94c2035ce3c88c3d954e706e6e5eef94d20e5", $context, $blocks));
            echo "\">
                    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reservations", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 44
                echo "                    <tr>
                    ";
                // line 45
                echo twig_include($this->env, $context, "CEReservationBundle:Reservation:reservationPrototype.html.twig", array("item" => $context["item"]));
                echo "
                    </tr>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                </tbody>
            </table>
        ";
        }
        // line 51
        echo "    </div>
   ";
        // line 52
        if ( !(isset($context["editionMode"]) ? $context["editionMode"] : $this->getContext($context, "editionMode"))) {
            // line 53
            echo "        <div class=\"container-fluid panel-footer\">
            <a href=\"#\" class=\"add_resa_link btn btn-sm btn-success pull-left\">+ Ajouter</a>
        </div>
   ";
        }
        // line 57
        echo "</div>
";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

<script>

    var periodArray = [];
    var startDateParams = {
        dateFormat: \"dd-mm-yy\",
        firstDay: 1,
        minDate: new Date(),
        onSelect: function (dateText, inst) {
            var endId = '#' + inst.id.replace(/startDate/g, 'endDate');
            \$(endId).datepicker(endDateParams);
            \$(endId).removeAttr('disabled');
            \$(endId).attr('readonly','true');
            enableSubmitBtn();
        },
        beforeShowDay: function (date) {
            var endId = '#' + this.id.replace(/startDate/g, 'endDate');
            var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
            var enable = true;
            var endDateVal=\$(endId).value;
            if(endDateVal === undefined) {
                endDateVal=\$(endId)[0].value;
            }
            endDateVal=endDateVal.split(\"-\");
            var endDate = new Date(endDateVal[2]+\"-\"+endDateVal[1]+\"-\"+endDateVal[0]).getTime();
            ";
        // line 85
        if ( !(isset($context["editionMode"]) ? $context["editionMode"] : $this->getContext($context, "editionMode"))) {
            // line 86
            echo "            if(date >= endDate)// La date de début ne doit pas être supérieur à la date de fin
            {
                return [false];
            }
            ";
        }
        // line 91
        echo "            for (var period in periodArray) {
                var d1 = new Date(periodArray[period][0] * 1000);
                var d2 = new Date(periodArray[period][1] * 1000);

                if (d1 <= date && date <= d2) // Pas de date de début dans une période réservée
                {
                    enable = false;
                    break;
                }
            }
            return [enable];
        }
    };
    var endDateParams = {
        dateFormat: \"dd-mm-yy\",
        firstDay: 1,
        minDate: new Date(),
        beforeShowDay: function (date) {
            var enable = true;
            var startId = '#' + this.id.replace(/endDate/g, 'startDate');
            var startDateVal=\$(startId).value;
            if(startDateVal === undefined) {
                startDateVal=\$(startId)[0].value;
            }
            startDateVal=startDateVal.split(\"-\");
            var startDate = new Date(startDateVal[2]+\"-\"+startDateVal[1]+\"-\"+startDateVal[0]).getTime();
            if(date <= startDate)// La date de fin ne doit pas être inférieur à la date de début
            {
                return [false];
            }
            for (var period in periodArray) {
                var d1 = new Date(periodArray[period][0] * 1000);
                var d2 = new Date(periodArray[period][1] * 1000);
                if ((d1 <= date && date <= d2) // Pas de date de fin dans une période réservée
                        || (startDate <= d1 && d2 <= date)
                ) {
                    enable = false;
                    break;
                }
            }


            return [enable];
        }
    }


    \$(function() {
        \$('.loading').hide();
        ";
        // line 140
        if ((isset($context["editionMode"]) ? $context["editionMode"] : $this->getContext($context, "editionMode"))) {
            // line 141
            echo "        doGetDeviceReservedPeriod(\$('#ce_reservationbundle_reservation_device')[0]);
        ";
        }
        // line 143
        echo "        // On bind la récupération des periode reservé sur le changement de materiel
        \$('#reservationList').on('change','.onChangeDevice', getDeviceReservedPeriod);
        // On bind la récupération des periode reservé sur le changement de materiel
        \$('#reservationList').on('change','.enableSubmit',  enableSubmitBtn);

        // Paramétrage des datePickers
        ";
        // line 149
        if ((isset($context["editionMode"]) ? $context["editionMode"] : $this->getContext($context, "editionMode"))) {
            // line 150
            echo "        \$(\".startDate\").on('change', function(){
            \$(\".endDate\")[0].value = null;
        });

        ";
        }
        // line 155
        echo "    });

    // Récupère le div qui contient la collection de tags
    var collectionHolder = \$('tbody.reservations');
    var \$newResaLine = \$('.reservations');
    jQuery(document).ready(function() {
        // ajoute l'ancre « ajouter un tag » et li à la balise ul
        collectionHolder.append(\$newResaLine);
        // add a delete link to all of the existing tag form li elements
        collectionHolder.children().each(function() {
            addResaFormDeleteLink(\$(this));
        });
        \$('.add_resa_link').on('click', function(e) {
            // empêche le lien de créer un « # » dans l'URL
            e.preventDefault();
            // ajoute un nouveau formulaire tag (voir le prochain bloc de code)
            addResaForm(collectionHolder, \$newResaLine);
        });
    });
    function addResaFormDeleteLink(\$tagFormLi) {
        var \$removeFormA = \$('<a class=\"btn btn-sm btn-danger del_resa_link\" title=\"Supprimer\"><span class=\"glyphicon glyphicon-remove\"></span></a>');
        \$tagFormLi.append(\$removeFormA);

        \$removeFormA.on('click', function(e) {
            // prevent the link from creating a \"#\" on the URL
            e.preventDefault();

            // remove the li for the tag form
            \$tagFormLi.remove();
        });
    }

    function addResaForm(collectionHolder, \$newLinkLi) {
        // Récupère l'élément ayant l'attribut data-prototype comme expliqué plus tôt
        var prototype = collectionHolder.attr('data-prototype');

        // Remplace '__name__' dans le HTML du prototype par un nombre basé sur
        // la longueur de la collection courante
        var newForm = prototype.replace(/__name__/g, collectionHolder.children().length);

        // Affiche le formulaire dans la page dans un li, avant le lien \"ajouter un tag\"
        var \$newFormLi = \$('<tr></tr>').append(newForm);

        // On désactive le champs startDate
        \$newFormLi.find('.startDate').datepicker(startDateParams);
        \$newFormLi.find('.startDate').attr('disabled','');

        // On désactive le champs endDate
        \$newFormLi.find('.endDate').datepicker(endDateParams);
        \$newFormLi.find('.endDate').attr('disabled','');

        addResaFormDeleteLink(\$newFormLi);
        \$newLinkLi.append(\$newFormLi);
        \$('.loading').hide();
    }

    function getDeviceReservedPeriod() {
        doGetDeviceReservedPeriod(this);
    }
    function doGetDeviceReservedPeriod(inst) {
        var deviceId = inst.value;

        var startId = '#' + inst.id.replace(/device/g, 'startDate');
        var endId = '#' + inst.id.replace(/device/g, 'endDate');
        var loadId = '.' + inst.id.replace(/device/g, 'loading');
        \$(startId).datepicker('disable');
        \$(startId).attr('disabled','');
        \$(startId).removeAttr('readonly');
        \$(endId).datepicker('disable');
        \$(endId).attr('disabled','');
        \$(endId).removeAttr('readonly');
        ";
        // line 226
        if ( !(isset($context["editionMode"]) ? $context["editionMode"] : $this->getContext($context, "editionMode"))) {
            // line 227
            echo "        \$(startId)[0].value = null;
        \$(endId)[0].value = null;
        ";
        }
        // line 230
        echo "        if(deviceId==null || deviceId==\"\"){
            return;
        }
        \$(loadId).show();

        var route = \"";
        // line 235
        echo $this->env->getExtension('routing')->getPath("reservation_get_reserved_period", array("deviceId" => "DEVICE_ID"));
        echo "\";
        route = route.replace(\"DEVICE_ID\", deviceId);
        \$.ajax({
            type: 'GET',
            url: route,
            success: function (json) {
                var periodArray = json;
                \$(loadId).hide();
                \$(startId).datepicker(startDateParams);
                \$(startId).removeAttr('disabled');
                \$(startId).attr('readonly','true');
                ";
        // line 246
        if ((isset($context["editionMode"]) ? $context["editionMode"] : $this->getContext($context, "editionMode"))) {
            // line 247
            echo "                // On supprime la période actuelle
                var endDateVal = \$(endId).value;
                if (endDateVal === undefined) {
                    endDateVal = \$(endId)[0].value;
                }
                endDateVal=endDateVal.split(\"-\");
                var endDate = new Date(endDateVal[0]+\"/\"+endDateVal[1]+\"/\"+endDateVal[2]).getTime();
                var startDateVal = \$(startId).value;
                if (startDateVal === undefined) {
                    startDateVal = \$(startId)[0].value;
                }
                startDateVal=startDateVal.split(\"-\");
                var startDate = new Date(startDateVal[0]+\"/\"+startDateVal[1]+\"/\"+startDateVal[2]).getTime();
                for (var period in periodArray) {
                    var d1 = periodArray[period][0] * 1000;
                    var d2 = periodArray[period][1] * 1000;
                    if ((d1 == startDate && d2 == endDate)) {
                        periodArray.splice(period, 1)
                        break;
                    }
                }
                ";
        }
        // line 269
        echo "            },
            error: function () {
                \$(loadId).hide();
            }
        });
        return false;
    }
    function enableSubmitBtn(){
        var inputs, index, enableSubmit;
        enableSubmit = true;

        // Find its child `input` elements
        inputs = \$('form[name=\"ce_reservationbundle_list_reservation\"] :input');
        for (index = 0; index < inputs.length; ++index) {
            // deal with inputs[index] element.
            if(inputs[index].value==null || inputs[index].value==''){
                enableSubmit = false;
            }
        }
        if (enableSubmit){
            \$(\"input[type=submit]\").removeAttr('disabled');
        } else {
            \$(\"input[type=submit]\").attr('disabled','');

        }
    }
</script>";
        
        $__internal_397c566e4c88d4925cf55237dbe83962a5e186284401dd184ea5f919176fd868->leave($__internal_397c566e4c88d4925cf55237dbe83962a5e186284401dd184ea5f919176fd868_prof);

    }

    // line 42
    public function block___internal_8ef61b999dd3ca048cf558ba4fd94c2035ce3c88c3d954e706e6e5eef94d20e5($context, array $blocks = array())
    {
        $__internal_0f86e83f0f745cd245c08b891fabba1401babede54c0f53be294001edbcf6a61 = $this->env->getExtension("native_profiler");
        $__internal_0f86e83f0f745cd245c08b891fabba1401babede54c0f53be294001edbcf6a61->enter($__internal_0f86e83f0f745cd245c08b891fabba1401babede54c0f53be294001edbcf6a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_8ef61b999dd3ca048cf558ba4fd94c2035ce3c88c3d954e706e6e5eef94d20e5"));

        echo twig_include($this->env, $context, "CEReservationBundle:Reservation:reservationPrototype.html.twig", array("item" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reservations", array()), "vars", array()), "prototype", array())));
        
        $__internal_0f86e83f0f745cd245c08b891fabba1401babede54c0f53be294001edbcf6a61->leave($__internal_0f86e83f0f745cd245c08b891fabba1401babede54c0f53be294001edbcf6a61_prof);

    }

    public function getTemplateName()
    {
        return "CEReservationBundle:Reservation:reservationForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 42,  401 => 269,  377 => 247,  375 => 246,  361 => 235,  354 => 230,  349 => 227,  347 => 226,  274 => 155,  267 => 150,  265 => 149,  257 => 143,  253 => 141,  251 => 140,  200 => 91,  193 => 86,  191 => 85,  162 => 59,  158 => 58,  155 => 57,  149 => 53,  147 => 52,  144 => 51,  139 => 48,  122 => 45,  119 => 44,  102 => 43,  98 => 42,  86 => 32,  78 => 27,  73 => 24,  71 => 23,  67 => 22,  63 => 21,  56 => 16,  52 => 14,  50 => 13,  46 => 12,  41 => 10,  34 => 6,  28 => 3,  25 => 2,  23 => 1,);
    }
}
/* {% if showDeleteButton %}*/
/*     <div class="hidden">*/
/*         {{ form(delete_form, {'attr': {'id': 'delete_form', 'class': 'hidden'}}) }}*/
/*     </div>*/
/* {% endif %}*/
/* {{ form_start(form)}}*/
/* <div class="table-responsive panel panel-default" class="form-group form-group-sm">*/
/* */
/*     <div class="container-fluid panel-heading">*/
/*         <div class="pull-left "><h4>{{ titre }}</h4></div>*/
/*         <div class="btn-group pull-right">*/
/*             <a href="{{ path('reservation') }}" class="btn btn-sm btn-primary">Retour</a>*/
/*             {% if showDeleteButton %}*/
/*                 <a onclick="document.getElementById('delete_form').submit();" href='#' class="btn btn-sm btn-warning">Supprimer</a>*/
/*             {% endif %}*/
/*             <input type="submit" value="Enregistrer"  class="btn btn-sm btn-success"/>*/
/* */
/*         </div>*/
/*     </div>*/
/*     <div >*/
/*         <input hidden="hidden" value="{{ status }}" id="status" name="status">*/
/*         {{ form_errors(form) }}*/
/*         {% if editionMode %}*/
/*             <table class="record_properties">*/
/*                 <tbody>*/
/*                 <tr>*/
/*                 {{ include('CEReservationBundle:Reservation:reservationPrototype.html.twig', {'item': form }) }}*/
/*                 </tr>*/
/*                 </tbody>*/
/*             </table>*/
/*         {% else %}*/
/*             <table class="record_properties">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>Matériel</th>*/
/*                     <th>Date de début</th>*/
/*                     <th>Date de fin</th>*/
/*                     <th>Emprunteur</th>*/
/*                     <th></th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody class="reservations" id="reservationList" data-prototype="{% filter escape %}{{ include('CEReservationBundle:Reservation:reservationPrototype.html.twig', {'item': form.reservations.vars.prototype }) }}{% endfilter %}">*/
/*                     {% for item in form.reservations %}*/
/*                     <tr>*/
/*                     {{ include('CEReservationBundle:Reservation:reservationPrototype.html.twig', {'item': item }) }}*/
/*                     </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         {% endif %}*/
/*     </div>*/
/*    {% if not editionMode %}*/
/*         <div class="container-fluid panel-footer">*/
/*             <a href="#" class="add_resa_link btn btn-sm btn-success pull-left">+ Ajouter</a>*/
/*         </div>*/
/*    {% endif %}*/
/* </div>*/
/* {{ form_rest(form) }}*/
/* {{ form_end(form) }}*/
/* */
/* <script>*/
/* */
/*     var periodArray = [];*/
/*     var startDateParams = {*/
/*         dateFormat: "dd-mm-yy",*/
/*         firstDay: 1,*/
/*         minDate: new Date(),*/
/*         onSelect: function (dateText, inst) {*/
/*             var endId = '#' + inst.id.replace(/startDate/g, 'endDate');*/
/*             $(endId).datepicker(endDateParams);*/
/*             $(endId).removeAttr('disabled');*/
/*             $(endId).attr('readonly','true');*/
/*             enableSubmitBtn();*/
/*         },*/
/*         beforeShowDay: function (date) {*/
/*             var endId = '#' + this.id.replace(/startDate/g, 'endDate');*/
/*             var string = jQuery.datepicker.formatDate('yy-mm-dd', date);*/
/*             var enable = true;*/
/*             var endDateVal=$(endId).value;*/
/*             if(endDateVal === undefined) {*/
/*                 endDateVal=$(endId)[0].value;*/
/*             }*/
/*             endDateVal=endDateVal.split("-");*/
/*             var endDate = new Date(endDateVal[2]+"-"+endDateVal[1]+"-"+endDateVal[0]).getTime();*/
/*             {% if not editionMode %}*/
/*             if(date >= endDate)// La date de début ne doit pas être supérieur à la date de fin*/
/*             {*/
/*                 return [false];*/
/*             }*/
/*             {% endif %}*/
/*             for (var period in periodArray) {*/
/*                 var d1 = new Date(periodArray[period][0] * 1000);*/
/*                 var d2 = new Date(periodArray[period][1] * 1000);*/
/* */
/*                 if (d1 <= date && date <= d2) // Pas de date de début dans une période réservée*/
/*                 {*/
/*                     enable = false;*/
/*                     break;*/
/*                 }*/
/*             }*/
/*             return [enable];*/
/*         }*/
/*     };*/
/*     var endDateParams = {*/
/*         dateFormat: "dd-mm-yy",*/
/*         firstDay: 1,*/
/*         minDate: new Date(),*/
/*         beforeShowDay: function (date) {*/
/*             var enable = true;*/
/*             var startId = '#' + this.id.replace(/endDate/g, 'startDate');*/
/*             var startDateVal=$(startId).value;*/
/*             if(startDateVal === undefined) {*/
/*                 startDateVal=$(startId)[0].value;*/
/*             }*/
/*             startDateVal=startDateVal.split("-");*/
/*             var startDate = new Date(startDateVal[2]+"-"+startDateVal[1]+"-"+startDateVal[0]).getTime();*/
/*             if(date <= startDate)// La date de fin ne doit pas être inférieur à la date de début*/
/*             {*/
/*                 return [false];*/
/*             }*/
/*             for (var period in periodArray) {*/
/*                 var d1 = new Date(periodArray[period][0] * 1000);*/
/*                 var d2 = new Date(periodArray[period][1] * 1000);*/
/*                 if ((d1 <= date && date <= d2) // Pas de date de fin dans une période réservée*/
/*                         || (startDate <= d1 && d2 <= date)*/
/*                 ) {*/
/*                     enable = false;*/
/*                     break;*/
/*                 }*/
/*             }*/
/* */
/* */
/*             return [enable];*/
/*         }*/
/*     }*/
/* */
/* */
/*     $(function() {*/
/*         $('.loading').hide();*/
/*         {% if editionMode %}*/
/*         doGetDeviceReservedPeriod($('#ce_reservationbundle_reservation_device')[0]);*/
/*         {% endif %}*/
/*         // On bind la récupération des periode reservé sur le changement de materiel*/
/*         $('#reservationList').on('change','.onChangeDevice', getDeviceReservedPeriod);*/
/*         // On bind la récupération des periode reservé sur le changement de materiel*/
/*         $('#reservationList').on('change','.enableSubmit',  enableSubmitBtn);*/
/* */
/*         // Paramétrage des datePickers*/
/*         {% if editionMode %}*/
/*         $(".startDate").on('change', function(){*/
/*             $(".endDate")[0].value = null;*/
/*         });*/
/* */
/*         {%  endif %}*/
/*     });*/
/* */
/*     // Récupère le div qui contient la collection de tags*/
/*     var collectionHolder = $('tbody.reservations');*/
/*     var $newResaLine = $('.reservations');*/
/*     jQuery(document).ready(function() {*/
/*         // ajoute l'ancre « ajouter un tag » et li à la balise ul*/
/*         collectionHolder.append($newResaLine);*/
/*         // add a delete link to all of the existing tag form li elements*/
/*         collectionHolder.children().each(function() {*/
/*             addResaFormDeleteLink($(this));*/
/*         });*/
/*         $('.add_resa_link').on('click', function(e) {*/
/*             // empêche le lien de créer un « # » dans l'URL*/
/*             e.preventDefault();*/
/*             // ajoute un nouveau formulaire tag (voir le prochain bloc de code)*/
/*             addResaForm(collectionHolder, $newResaLine);*/
/*         });*/
/*     });*/
/*     function addResaFormDeleteLink($tagFormLi) {*/
/*         var $removeFormA = $('<a class="btn btn-sm btn-danger del_resa_link" title="Supprimer"><span class="glyphicon glyphicon-remove"></span></a>');*/
/*         $tagFormLi.append($removeFormA);*/
/* */
/*         $removeFormA.on('click', function(e) {*/
/*             // prevent the link from creating a "#" on the URL*/
/*             e.preventDefault();*/
/* */
/*             // remove the li for the tag form*/
/*             $tagFormLi.remove();*/
/*         });*/
/*     }*/
/* */
/*     function addResaForm(collectionHolder, $newLinkLi) {*/
/*         // Récupère l'élément ayant l'attribut data-prototype comme expliqué plus tôt*/
/*         var prototype = collectionHolder.attr('data-prototype');*/
/* */
/*         // Remplace '__name__' dans le HTML du prototype par un nombre basé sur*/
/*         // la longueur de la collection courante*/
/*         var newForm = prototype.replace(/__name__/g, collectionHolder.children().length);*/
/* */
/*         // Affiche le formulaire dans la page dans un li, avant le lien "ajouter un tag"*/
/*         var $newFormLi = $('<tr></tr>').append(newForm);*/
/* */
/*         // On désactive le champs startDate*/
/*         $newFormLi.find('.startDate').datepicker(startDateParams);*/
/*         $newFormLi.find('.startDate').attr('disabled','');*/
/* */
/*         // On désactive le champs endDate*/
/*         $newFormLi.find('.endDate').datepicker(endDateParams);*/
/*         $newFormLi.find('.endDate').attr('disabled','');*/
/* */
/*         addResaFormDeleteLink($newFormLi);*/
/*         $newLinkLi.append($newFormLi);*/
/*         $('.loading').hide();*/
/*     }*/
/* */
/*     function getDeviceReservedPeriod() {*/
/*         doGetDeviceReservedPeriod(this);*/
/*     }*/
/*     function doGetDeviceReservedPeriod(inst) {*/
/*         var deviceId = inst.value;*/
/* */
/*         var startId = '#' + inst.id.replace(/device/g, 'startDate');*/
/*         var endId = '#' + inst.id.replace(/device/g, 'endDate');*/
/*         var loadId = '.' + inst.id.replace(/device/g, 'loading');*/
/*         $(startId).datepicker('disable');*/
/*         $(startId).attr('disabled','');*/
/*         $(startId).removeAttr('readonly');*/
/*         $(endId).datepicker('disable');*/
/*         $(endId).attr('disabled','');*/
/*         $(endId).removeAttr('readonly');*/
/*         {% if not editionMode %}*/
/*         $(startId)[0].value = null;*/
/*         $(endId)[0].value = null;*/
/*         {% endif %}*/
/*         if(deviceId==null || deviceId==""){*/
/*             return;*/
/*         }*/
/*         $(loadId).show();*/
/* */
/*         var route = "{{ path('reservation_get_reserved_period', { 'deviceId': "DEVICE_ID" }) }}";*/
/*         route = route.replace("DEVICE_ID", deviceId);*/
/*         $.ajax({*/
/*             type: 'GET',*/
/*             url: route,*/
/*             success: function (json) {*/
/*                 var periodArray = json;*/
/*                 $(loadId).hide();*/
/*                 $(startId).datepicker(startDateParams);*/
/*                 $(startId).removeAttr('disabled');*/
/*                 $(startId).attr('readonly','true');*/
/*                 {% if editionMode %}*/
/*                 // On supprime la période actuelle*/
/*                 var endDateVal = $(endId).value;*/
/*                 if (endDateVal === undefined) {*/
/*                     endDateVal = $(endId)[0].value;*/
/*                 }*/
/*                 endDateVal=endDateVal.split("-");*/
/*                 var endDate = new Date(endDateVal[0]+"/"+endDateVal[1]+"/"+endDateVal[2]).getTime();*/
/*                 var startDateVal = $(startId).value;*/
/*                 if (startDateVal === undefined) {*/
/*                     startDateVal = $(startId)[0].value;*/
/*                 }*/
/*                 startDateVal=startDateVal.split("-");*/
/*                 var startDate = new Date(startDateVal[0]+"/"+startDateVal[1]+"/"+startDateVal[2]).getTime();*/
/*                 for (var period in periodArray) {*/
/*                     var d1 = periodArray[period][0] * 1000;*/
/*                     var d2 = periodArray[period][1] * 1000;*/
/*                     if ((d1 == startDate && d2 == endDate)) {*/
/*                         periodArray.splice(period, 1)*/
/*                         break;*/
/*                     }*/
/*                 }*/
/*                 {% endif %}*/
/*             },*/
/*             error: function () {*/
/*                 $(loadId).hide();*/
/*             }*/
/*         });*/
/*         return false;*/
/*     }*/
/*     function enableSubmitBtn(){*/
/*         var inputs, index, enableSubmit;*/
/*         enableSubmit = true;*/
/* */
/*         // Find its child `input` elements*/
/*         inputs = $('form[name="ce_reservationbundle_list_reservation"] :input');*/
/*         for (index = 0; index < inputs.length; ++index) {*/
/*             // deal with inputs[index] element.*/
/*             if(inputs[index].value==null || inputs[index].value==''){*/
/*                 enableSubmit = false;*/
/*             }*/
/*         }*/
/*         if (enableSubmit){*/
/*             $("input[type=submit]").removeAttr('disabled');*/
/*         } else {*/
/*             $("input[type=submit]").attr('disabled','');*/
/* */
/*         }*/
/*     }*/
/* </script>*/
