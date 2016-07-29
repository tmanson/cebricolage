<?php

/* CEReservationBundle:Reservation:index.html.twig */
class __TwigTemplate_fff481c70c00d908d3d80df625f04416e498d8009ab2d92f7a9a22c3a8c9e35f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CECoreBundle::layout.html.twig", "CEReservationBundle:Reservation:index.html.twig", 1);
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
        $__internal_da3100be1a471ee3ced5bc09eff022535d5e230052475992dd9ac5bc97e71f9d = $this->env->getExtension("native_profiler");
        $__internal_da3100be1a471ee3ced5bc09eff022535d5e230052475992dd9ac5bc97e71f9d->enter($__internal_da3100be1a471ee3ced5bc09eff022535d5e230052475992dd9ac5bc97e71f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEReservationBundle:Reservation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da3100be1a471ee3ced5bc09eff022535d5e230052475992dd9ac5bc97e71f9d->leave($__internal_da3100be1a471ee3ced5bc09eff022535d5e230052475992dd9ac5bc97e71f9d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3df3a366cd7e80b217069c334cac8dadfc1f3079b4ab1e1f32cb648122ecaf67 = $this->env->getExtension("native_profiler");
        $__internal_3df3a366cd7e80b217069c334cac8dadfc1f3079b4ab1e1f32cb648122ecaf67->enter($__internal_3df3a366cd7e80b217069c334cac8dadfc1f3079b4ab1e1f32cb648122ecaf67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "

    <div id=\"reservationList\" class=\"resList\">
    ";
        // line 6
        echo twig_include($this->env, $context, "CEReservationBundle:Reservation:list.html.twig", array("titre" => "Liste du matériel réservé", "action" => "Emprunté", "entities" =>         // line 7
(isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "jsActionFunction" => "emprunt", "jsReloadAction" => "restitue_reload", "statusCode" => "RESERVATION"));
        echo "
    </div>

    <div id=\"empruntList\" class=\"resList\">
    ";
        // line 11
        echo twig_include($this->env, $context, "CEReservationBundle:Reservation:list.html.twig", array("titre" => "Liste du matériel emprunté", "action" => "Restitué", "entities" =>         // line 12
(isset($context["emprunts"]) ? $context["emprunts"] : $this->getContext($context, "emprunts")), "jsActionFunction" => "restitue", "jsReloadAction" => "emprunt_reload", "statusCode" => "EMPRUNT"));
        echo "
    </div>
    <script>
        function emprunt(id) {
            \$.ajax({
                type: \"POST\",
                url: '";
        // line 18
        echo $this->env->getExtension('routing')->getPath("reservation_emprunt");
        echo "',
                data: {id: id},
                cache: false,
                success: function (data) {
                    emprunt_reload();
                    restitue_reload();
                }
            });
        }
        function restitue(id) {
            \$.ajax({
                type: \"POST\",
                url: '";
        // line 30
        echo $this->env->getExtension('routing')->getPath("reservation_restitue");
        echo "',
                data: {id: id},
                cache: false,
                success: function (data) {
                    emprunt_reload();
                }
            });
        }
        function emprunt_reload() {
            \$.ajax({
                type: \"GET\",
                url: '";
        // line 41
        echo $this->env->getExtension('routing')->getPath("reservation_get_emprunt");
        echo "',
                cache: false,
                success: function (data) {
                    \$('#empruntList').html(data);
                }
            });
        }
        function restitue_reload() {
            \$.ajax({
                type: \"GET\",
                url: '";
        // line 51
        echo $this->env->getExtension('routing')->getPath("reservation_get_reservation");
        echo "',
                cache: false,
                success: function (data) {
                    \$('#reservationList').html(data);
                }
            });
        }
        // Fonction apelée après la suppression d'un element
        function delete_callback(){
            emprunt_reload();
            restitue_reload();
        }
    </script>
";
        
        $__internal_3df3a366cd7e80b217069c334cac8dadfc1f3079b4ab1e1f32cb648122ecaf67->leave($__internal_3df3a366cd7e80b217069c334cac8dadfc1f3079b4ab1e1f32cb648122ecaf67_prof);

    }

    public function getTemplateName()
    {
        return "CEReservationBundle:Reservation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 51,  92 => 41,  78 => 30,  63 => 18,  54 => 12,  53 => 11,  46 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "CECoreBundle::layout.html.twig" %}*/
/* {% block body %}*/
/* */
/* */
/*     <div id="reservationList" class="resList">*/
/*     {{ include('CEReservationBundle:Reservation:list.html.twig',*/
/*         {'titre': 'Liste du matériel réservé','action':'Emprunté','entities':entities, 'jsActionFunction': 'emprunt', 'jsReloadAction': 'restitue_reload', 'statusCode': 'RESERVATION'}) }}*/
/*     </div>*/
/* */
/*     <div id="empruntList" class="resList">*/
/*     {{ include('CEReservationBundle:Reservation:list.html.twig',*/
/*         {'titre': 'Liste du matériel emprunté','action':'Restitué','entities':emprunts, 'jsActionFunction': 'restitue', 'jsReloadAction': 'emprunt_reload', 'statusCode': 'EMPRUNT'}) }}*/
/*     </div>*/
/*     <script>*/
/*         function emprunt(id) {*/
/*             $.ajax({*/
/*                 type: "POST",*/
/*                 url: '{{ path('reservation_emprunt')}}',*/
/*                 data: {id: id},*/
/*                 cache: false,*/
/*                 success: function (data) {*/
/*                     emprunt_reload();*/
/*                     restitue_reload();*/
/*                 }*/
/*             });*/
/*         }*/
/*         function restitue(id) {*/
/*             $.ajax({*/
/*                 type: "POST",*/
/*                 url: '{{ path('reservation_restitue')}}',*/
/*                 data: {id: id},*/
/*                 cache: false,*/
/*                 success: function (data) {*/
/*                     emprunt_reload();*/
/*                 }*/
/*             });*/
/*         }*/
/*         function emprunt_reload() {*/
/*             $.ajax({*/
/*                 type: "GET",*/
/*                 url: '{{ path('reservation_get_emprunt')}}',*/
/*                 cache: false,*/
/*                 success: function (data) {*/
/*                     $('#empruntList').html(data);*/
/*                 }*/
/*             });*/
/*         }*/
/*         function restitue_reload() {*/
/*             $.ajax({*/
/*                 type: "GET",*/
/*                 url: '{{ path('reservation_get_reservation')}}',*/
/*                 cache: false,*/
/*                 success: function (data) {*/
/*                     $('#reservationList').html(data);*/
/*                 }*/
/*             });*/
/*         }*/
/*         // Fonction apelée après la suppression d'un element*/
/*         function delete_callback(){*/
/*             emprunt_reload();*/
/*             restitue_reload();*/
/*         }*/
/*     </script>*/
/* {% endblock %}*/
/* */
