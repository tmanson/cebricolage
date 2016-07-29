<?php

/* CEReservationBundle:Reservation:list.html.twig */
class __TwigTemplate_5e5cba43254fb604d237d488b5eba47ecf71c6e0bbd96ac0b414e85efa07a89a extends Twig_Template
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
        $__internal_b43ce140afb7334832094284047108258f9dfd3d2eaccc280633f050aa1be97d = $this->env->getExtension("native_profiler");
        $__internal_b43ce140afb7334832094284047108258f9dfd3d2eaccc280633f050aa1be97d->enter($__internal_b43ce140afb7334832094284047108258f9dfd3d2eaccc280633f050aa1be97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEReservationBundle:Reservation:list.html.twig"));

        // line 1
        echo "<div class=\"col-md-6\">
    <div class=\"table-responsive panel panel-default \">
        <div class=\"panel-heading\">";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
        echo "</div>
        <table class=\"table\">
            <thead>
            <tr>
                <th class=\"col-md-1\">Matériel</th>
                <th class=\"col-md-2\">Utilisateur</th>
                <th class=\"col-md-1\">Début</th>
                <th class=\"col-md-1\">Fin</th>
                ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_CRUD_RESERVATION")) {
            // line 12
            echo "                <th class=\"col-md-1\">
                    <a class=\"btn btn-sm btn-success\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reservation_new", array("statusCode" => (isset($context["statusCode"]) ? $context["statusCode"] : $this->getContext($context, "statusCode")))), "html", null, true);
            echo "\">+ Ajouter</a>
                </th>
                ";
        }
        // line 16
        echo "            </tr>
            </thead>
            <tbody id=\"list_emprunt\">
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 20
            echo "                <tr onMouseOver=\"this.className='bg-info'\" onMouseOut=\"this.className=''\" id=\"";
            if ($this->getAttribute($context["entity"], "id", array())) {
                echo "restitue_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            }
            echo "\">
                    <td>";
            // line 21
            if ($this->getAttribute($context["entity"], "device", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "device", array()), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 22
            if ($this->getAttribute($context["entity"], "user", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "user", array()), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 23
            if ($this->getAttribute($context["entity"], "startDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "startDate", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 24
            if ($this->getAttribute($context["entity"], "endDate", array())) {
                // line 25
                echo "                            ";
                if (((twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "endDate", array()), "d/m/Y") >= twig_date_format_filter($this->env, twig_date_converter($this->env, "-1 day"), "d/m/Y")) && ($this->getAttribute($this->getAttribute($context["entity"], "status", array()), "getId", array(), "method") == 2))) {
                    // line 26
                    echo "                                <font color=\"red\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "endDate", array()), "d/m/Y"), "html", null, true);
                    echo "</font>
                            ";
                } else {
                    // line 28
                    echo "                                <font color=\"black\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "endDate", array()), "d/m/Y"), "html", null, true);
                    echo "</font>
                            ";
                }
                // line 30
                echo "                        ";
            }
            echo "</td>
                    ";
            // line 31
            if ($this->env->getExtension('security')->isGranted("ROLE_CRUD_RESERVATION")) {
                // line 32
                echo "                    <td class=\"btn-group btn-group-xs\" role=\"group\">
                            <a class=\"btn btn-default\" href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reservation_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                            <a class=\"btn btn-danger\" data-on-click-href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reservation_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" onclick=\"return confirm('Voulez vous vraiment supprimer cette réservation ?');\" data-on-success-action=\"";
                echo twig_escape_filter($this->env, (isset($context["jsReloadAction"]) ? $context["jsReloadAction"] : $this->getContext($context, "jsReloadAction")), "html", null, true);
                echo "\" title=\"Supprimer\"><span class=\"glyphicon glyphicon-remove delete\"></span></a>
                            <a class=\"btn btn-success\" onclick=\"";
                // line 35
                echo twig_escape_filter($this->env, (isset($context["jsActionFunction"]) ? $context["jsActionFunction"] : $this->getContext($context, "jsActionFunction")), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo ");\" class=\"btn btn-warning\" href=\"#\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-check\"></span></a>
                    </td>
                    ";
            }
            // line 38
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </tbody>
        </table>
    </div>
</div>
";
        
        $__internal_b43ce140afb7334832094284047108258f9dfd3d2eaccc280633f050aa1be97d->leave($__internal_b43ce140afb7334832094284047108258f9dfd3d2eaccc280633f050aa1be97d_prof);

    }

    public function getTemplateName()
    {
        return "CEReservationBundle:Reservation:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 40,  130 => 38,  120 => 35,  114 => 34,  110 => 33,  107 => 32,  105 => 31,  100 => 30,  94 => 28,  88 => 26,  85 => 25,  83 => 24,  77 => 23,  71 => 22,  65 => 21,  57 => 20,  53 => 19,  48 => 16,  42 => 13,  39 => 12,  37 => 11,  26 => 3,  22 => 1,);
    }
}
/* <div class="col-md-6">*/
/*     <div class="table-responsive panel panel-default ">*/
/*         <div class="panel-heading">{{ titre }}</div>*/
/*         <table class="table">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th class="col-md-1">Matériel</th>*/
/*                 <th class="col-md-2">Utilisateur</th>*/
/*                 <th class="col-md-1">Début</th>*/
/*                 <th class="col-md-1">Fin</th>*/
/*                 {%  if is_granted('ROLE_CRUD_RESERVATION') %}*/
/*                 <th class="col-md-1">*/
/*                     <a class="btn btn-sm btn-success" href="{{ path('reservation_new', {'statusCode': statusCode})}}">+ Ajouter</a>*/
/*                 </th>*/
/*                 {% endif %}*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody id="list_emprunt">*/
/*             {% for entity in entities %}*/
/*                 <tr onMouseOver="this.className='bg-info'" onMouseOut="this.className=''" id="{% if entity.id %}restitue_{{ entity.id }}{% endif %}">*/
/*                     <td>{% if entity.device %}{{ entity.device }}{% endif %}</td>*/
/*                     <td>{% if entity.user %}{{ entity.user }}{% endif %}</td>*/
/*                     <td>{% if entity.startDate %}{{ entity.startDate|date('d/m/Y') }}{% endif %}</td>*/
/*                     <td>{% if entity.endDate %}*/
/*                             {% if entity.endDate|date('d/m/Y') >= date("-1 day")|date('d/m/Y') and  entity.status.getId() == 2%}*/
/*                                 <font color="red">{{ entity.endDate|date('d/m/Y') }}</font>*/
/*                             {% else %}*/
/*                                 <font color="black">{{ entity.endDate|date('d/m/Y') }}</font>*/
/*                             {% endif %}*/
/*                         {% endif %}</td>*/
/*                     {%  if is_granted('ROLE_CRUD_RESERVATION') %}*/
/*                     <td class="btn-group btn-group-xs" role="group">*/
/*                             <a class="btn btn-default" href="{{ path('reservation_edit', { 'id': entity.id }) }}"><span class="glyphicon glyphicon-edit"></span></a>*/
/*                             <a class="btn btn-danger" data-on-click-href="{{ path('reservation_delete', { 'id': entity.id }) }}" onclick="return confirm('Voulez vous vraiment supprimer cette réservation ?');" data-on-success-action="{{ jsReloadAction }}" title="Supprimer"><span class="glyphicon glyphicon-remove delete"></span></a>*/
/*                             <a class="btn btn-success" onclick="{{ jsActionFunction }}({{ entity.id }});" class="btn btn-warning" href="#" title="{{ action }}"><span class="glyphicon glyphicon-check"></span></a>*/
/*                     </td>*/
/*                     {% endif %}*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* </div>*/
/* */
