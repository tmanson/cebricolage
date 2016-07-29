<?php

/* CEDeviceBundle:Default:deviceManagement.html.twig */
class __TwigTemplate_67ade54bc2f28d76516fba28b94ac03d7362b02efee6c7b73b13a4727304274b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CECoreBundle::layout.html.twig", "CEDeviceBundle:Default:deviceManagement.html.twig", 1);
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
        $__internal_6c8050809da932357b7477e07940cbf69f316d3a04604f52c9ab397009798ff4 = $this->env->getExtension("native_profiler");
        $__internal_6c8050809da932357b7477e07940cbf69f316d3a04604f52c9ab397009798ff4->enter($__internal_6c8050809da932357b7477e07940cbf69f316d3a04604f52c9ab397009798ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEDeviceBundle:Default:deviceManagement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c8050809da932357b7477e07940cbf69f316d3a04604f52c9ab397009798ff4->leave($__internal_6c8050809da932357b7477e07940cbf69f316d3a04604f52c9ab397009798ff4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_65cf8bae11fa5163bac48ab46760987f0a25892c96134c01cc973cc07978d9f3 = $this->env->getExtension("native_profiler");
        $__internal_65cf8bae11fa5163bac48ab46760987f0a25892c96134c01cc973cc07978d9f3->enter($__internal_65cf8bae11fa5163bac48ab46760987f0a25892c96134c01cc973cc07978d9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"table-responsive panel panel-default\">
        <div class=\"panel-heading\">Liste du matériel</div>
        <table class=\"table\">
            <thead>
            <th class=\"col-xs-4 col-md-2\">Image</th>
            <th class=\"col-xs-4 col-md-2\">Référence</th>
            <th class=\"col-xs-4 col-md-2\">Désignation</th>
            <th class=\"col-xs-2 col-md-1\">Marque</th>
            <th class=\"col-xs-2 col-md-1\">Modèle</th>
            <th class=\"col-xs-4 col-md-2\">Commentaire</th>
            <th class=\"col-xs-4 col-md-2\">Disponibilité</th>
            <th class=\"col-xs-2 col-md-1\">Date d'achat</th>
            ";
        // line 17
        if ($this->env->getExtension('security')->isGranted("ROLE_CRUD_DEVICE")) {
            // line 18
            echo "            <th class=\"col-xs-2 col-md-1\">
                    <a class=\"btn btn-sm btn-success\" href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("device_create");
            echo "\">+ Ajouter</a>
            </th>
            ";
        }
        // line 22
        echo "            </thead>
            <tbody id=\"devices\">
                ";
        // line 24
        echo twig_include($this->env, $context, "CEDeviceBundle:Default:list.html.twig", array("devices" => (isset($context["devices"]) ? $context["devices"] : $this->getContext($context, "devices"))));
        echo "
            </tbody>
        </table>
    </div>
    <!-- Modal -->
    <div class=\"modal fade\" role=\"dialog\" id=\"disponibleModal\">
        <div class=\"modal-dialog\" >
            <!-- Modal content-->
            <div class=\"modal-content\" >
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\" id=\"modalTitle\">Inactivation du materiel</h4>
                </div>
                <div class=\"modal-body\">
                    <p>Le matériel suivant va être désactivé</p>
                    <form class=\"form form-horizontal\" data-toggle=\"validator\" role=\"form\" id=\"deactivateForm\">
                        <input type=\"hidden\" id=\"deviceReference\" name=\"deviceReference\" value=\"\" >
                        <div class=\"form-group form-group-sm\">
                            <label class=\"col-sm-2 control-label\">Référence</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" id=\"deviceReference\" name=\"deviceReference\" value=\"\" disabled class=\"form-control disabled\">
                            </div>
                        </div>
                        <div class=\"form-group form-group-sm\">
                            <label class=\"col-sm-2 control-label\">Désignation</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" id=\"deviceLabel\" name=\"deviceLabel\" value=\"\" disabled class=\"form-control disabled\">
                            </div>
                        </div>
                        <div class=\"form-group form-group-sm\">
                            <label class=\"col-sm-2 control-label\">Marque</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" id=\"deviceMarque\" name=\"deviceMarque\" value=\"\" disabled class=\"form-control disabled\">
                            </div>
                        </div>
                        <div class=\"form-group form-group-sm\">
                            <label class=\"col-sm-2 control-label\">Modèle</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" id=\"deviceModèle\" name=\"deviceModèle\" value=\"\" disabled class=\"form-control disabled\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-12 control-label\" for=\"inactivationComment\">Veuillez saisir la raison de l'inactivation de ce matériel.</label>
                            <div class=\"col-sm-12\">
                                <input type=\"text\" id=\"inactivationComment\" name=\"commentaire\" class=\"form-control\" required data-error=\"La raison de l'inactivation est obligatoire.\"/>
                                <div class=\"help-block with-errors\"></div>
                            </div>
                        </div>
                        <div class=\"form-group \">
                            <div class=\"col-sm-12\">
                                <button type=\"submit\" class=\"btn btn-sm btn-danger pull-right\" data-dismiss=\"modal\" onclick=\"deactivateAction()\">Désactiver</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>

        //triggered when modal is about to be shown
        \$('#disponibleModal').on('shown.bs.modal', function(e) {
            //get data-id attribute of the clicked element
            var deviceId = \$(e.relatedTarget).data('id');
            var deviceLabel = \$(e.relatedTarget).data('label');
            var deviceMarque = \$(e.relatedTarget).data('marque');
            var deviceModèle = \$(e.relatedTarget).data('modele');
            //populate the textbox
            \$(\".modal-body #deviceId\").val(deviceId);
            \$(\".modal-body #deviceLabel\").val(deviceLabel);
            \$(\".modal-body #deviceMarque\").val(deviceMarque);
            \$(\".modal-body #deviceModèle\").val(deviceModèle);
            \$(\".modal-body #inactivationComment\").focusout();
            \$(\".modal-body #inactivationComment\").focus();

        });
        function deactivateAction() {
            var deviceID = \$(\".modal-body #deviceId\").val();
            var comment = \$(\".modal-body #inactivationComment\").val();
            deactivate(deviceID, comment);
        }


        function deactivate(id, commentaire) {
            \$.ajax({
                type: \"POST\",
                url: '";
        // line 110
        echo $this->env->getExtension('routing')->getPath("device_deactivate");
        echo "',
                data: {id: id, commentaire: commentaire},
                cache: false,
                success: reloadDevices
            });
        }
        function activate(id) {
            \$.ajax({
                type: \"POST\",
                url: '";
        // line 119
        echo $this->env->getExtension('routing')->getPath("device_activate");
        echo "',
                data: {id: id},
                cache: false,
                success: reloadDevices
            });
        }
        function reloadDevices(){
            \$.ajax({
                type: \"GET\",
                url: '";
        // line 128
        echo $this->env->getExtension('routing')->getPath("device_get_devices");
        echo "',
                cache: false,
                success: function (data) {
                    \$('#devices').html(data);
                }
            });
        }

    </script>

";
        
        $__internal_65cf8bae11fa5163bac48ab46760987f0a25892c96134c01cc973cc07978d9f3->leave($__internal_65cf8bae11fa5163bac48ab46760987f0a25892c96134c01cc973cc07978d9f3_prof);

    }

    public function getTemplateName()
    {
        return "CEDeviceBundle:Default:deviceManagement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 128,  171 => 119,  159 => 110,  70 => 24,  66 => 22,  60 => 19,  57 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "CECoreBundle::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="table-responsive panel panel-default">*/
/*         <div class="panel-heading">Liste du matériel</div>*/
/*         <table class="table">*/
/*             <thead>*/
/*             <th class="col-xs-4 col-md-2">Image</th>*/
/*             <th class="col-xs-4 col-md-2">Référence</th>*/
/*             <th class="col-xs-4 col-md-2">Désignation</th>*/
/*             <th class="col-xs-2 col-md-1">Marque</th>*/
/*             <th class="col-xs-2 col-md-1">Modèle</th>*/
/*             <th class="col-xs-4 col-md-2">Commentaire</th>*/
/*             <th class="col-xs-4 col-md-2">Disponibilité</th>*/
/*             <th class="col-xs-2 col-md-1">Date d'achat</th>*/
/*             {%  if is_granted('ROLE_CRUD_DEVICE') %}*/
/*             <th class="col-xs-2 col-md-1">*/
/*                     <a class="btn btn-sm btn-success" href="{{ path('device_create') }}">+ Ajouter</a>*/
/*             </th>*/
/*             {% endif %}*/
/*             </thead>*/
/*             <tbody id="devices">*/
/*                 {{ include('CEDeviceBundle:Default:list.html.twig', {'devices':devices}) }}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/*     <!-- Modal -->*/
/*     <div class="modal fade" role="dialog" id="disponibleModal">*/
/*         <div class="modal-dialog" >*/
/*             <!-- Modal content-->*/
/*             <div class="modal-content" >*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*                     <h4 class="modal-title" id="modalTitle">Inactivation du materiel</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     <p>Le matériel suivant va être désactivé</p>*/
/*                     <form class="form form-horizontal" data-toggle="validator" role="form" id="deactivateForm">*/
/*                         <input type="hidden" id="deviceReference" name="deviceReference" value="" >*/
/*                         <div class="form-group form-group-sm">*/
/*                             <label class="col-sm-2 control-label">Référence</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input type="text" id="deviceReference" name="deviceReference" value="" disabled class="form-control disabled">*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group form-group-sm">*/
/*                             <label class="col-sm-2 control-label">Désignation</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input type="text" id="deviceLabel" name="deviceLabel" value="" disabled class="form-control disabled">*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group form-group-sm">*/
/*                             <label class="col-sm-2 control-label">Marque</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input type="text" id="deviceMarque" name="deviceMarque" value="" disabled class="form-control disabled">*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group form-group-sm">*/
/*                             <label class="col-sm-2 control-label">Modèle</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input type="text" id="deviceModèle" name="deviceModèle" value="" disabled class="form-control disabled">*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-12 control-label" for="inactivationComment">Veuillez saisir la raison de l'inactivation de ce matériel.</label>*/
/*                             <div class="col-sm-12">*/
/*                                 <input type="text" id="inactivationComment" name="commentaire" class="form-control" required data-error="La raison de l'inactivation est obligatoire."/>*/
/*                                 <div class="help-block with-errors"></div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group ">*/
/*                             <div class="col-sm-12">*/
/*                                 <button type="submit" class="btn btn-sm btn-danger pull-right" data-dismiss="modal" onclick="deactivateAction()">Désactiver</button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <script>*/
/* */
/*         //triggered when modal is about to be shown*/
/*         $('#disponibleModal').on('shown.bs.modal', function(e) {*/
/*             //get data-id attribute of the clicked element*/
/*             var deviceId = $(e.relatedTarget).data('id');*/
/*             var deviceLabel = $(e.relatedTarget).data('label');*/
/*             var deviceMarque = $(e.relatedTarget).data('marque');*/
/*             var deviceModèle = $(e.relatedTarget).data('modele');*/
/*             //populate the textbox*/
/*             $(".modal-body #deviceId").val(deviceId);*/
/*             $(".modal-body #deviceLabel").val(deviceLabel);*/
/*             $(".modal-body #deviceMarque").val(deviceMarque);*/
/*             $(".modal-body #deviceModèle").val(deviceModèle);*/
/*             $(".modal-body #inactivationComment").focusout();*/
/*             $(".modal-body #inactivationComment").focus();*/
/* */
/*         });*/
/*         function deactivateAction() {*/
/*             var deviceID = $(".modal-body #deviceId").val();*/
/*             var comment = $(".modal-body #inactivationComment").val();*/
/*             deactivate(deviceID, comment);*/
/*         }*/
/* */
/* */
/*         function deactivate(id, commentaire) {*/
/*             $.ajax({*/
/*                 type: "POST",*/
/*                 url: '{{ path('device_deactivate') }}',*/
/*                 data: {id: id, commentaire: commentaire},*/
/*                 cache: false,*/
/*                 success: reloadDevices*/
/*             });*/
/*         }*/
/*         function activate(id) {*/
/*             $.ajax({*/
/*                 type: "POST",*/
/*                 url: '{{ path('device_activate') }}',*/
/*                 data: {id: id},*/
/*                 cache: false,*/
/*                 success: reloadDevices*/
/*             });*/
/*         }*/
/*         function reloadDevices(){*/
/*             $.ajax({*/
/*                 type: "GET",*/
/*                 url: '{{ path('device_get_devices')}}',*/
/*                 cache: false,*/
/*                 success: function (data) {*/
/*                     $('#devices').html(data);*/
/*                 }*/
/*             });*/
/*         }*/
/* */
/*     </script>*/
/* */
/* {% endblock body %}*/
/* */
