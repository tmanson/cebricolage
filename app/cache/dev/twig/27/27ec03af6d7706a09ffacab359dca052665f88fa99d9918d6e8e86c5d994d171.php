<?php

/* CEUserBundle:User:index.html.twig */
class __TwigTemplate_61cd9e551a49b2cf3855bf5f5b95fb2541db2a8f0193886449fb08e9dea70b33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CECoreBundle::layout.html.twig", "CEUserBundle:User:index.html.twig", 1);
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
        $__internal_de2fa5e061e665db764cf837f912fbbc0911dbca79e9687c2b9079ce8b9302cd = $this->env->getExtension("native_profiler");
        $__internal_de2fa5e061e665db764cf837f912fbbc0911dbca79e9687c2b9079ce8b9302cd->enter($__internal_de2fa5e061e665db764cf837f912fbbc0911dbca79e9687c2b9079ce8b9302cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEUserBundle:User:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de2fa5e061e665db764cf837f912fbbc0911dbca79e9687c2b9079ce8b9302cd->leave($__internal_de2fa5e061e665db764cf837f912fbbc0911dbca79e9687c2b9079ce8b9302cd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c8063eba53c0d7de954ca014b56a42900f6b13759d02d0b3847c99a6ba7eff3 = $this->env->getExtension("native_profiler");
        $__internal_7c8063eba53c0d7de954ca014b56a42900f6b13759d02d0b3847c99a6ba7eff3->enter($__internal_7c8063eba53c0d7de954ca014b56a42900f6b13759d02d0b3847c99a6ba7eff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"table-responsive panel panel-default\">
    <div class=\"panel-heading\">Liste des utilisateurs</div>
    <table class=\"table\">
        <thead>
        <tr>
            <th class=\"col-xs-2 col-md-1\">Identifiant</th>
            <th class=\"col-xs-2 col-md-1\">Nom</th>
            <th class=\"col-xs-2 col-md-1\">Prénom</th>
            <th class=\"col-xs-2 col-md-1\">Email</th>
            <th class=\"col-xs-2 col-md-1\">Teléphone</th>
            <th class=\"col-xs-2 col-md-1\">
                ";
        // line 15
        if ($this->env->getExtension('security')->isGranted("ROLE_CRUD_USER")) {
            // line 16
            echo "                <a class=\"btn btn-sm btn-success\" href=\"";
            echo $this->env->getExtension('routing')->getPath("user_new");
            echo "\">+ Ajouter</a>
                ";
        }
        // line 18
        echo "            </th>
        </tr>
        </thead>
        <tbody>

        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 24
            echo "            <tr onMouseOver=\"this.className='bg-info'\" onMouseOut=\"this.className=''\">
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "identifiant", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "firstname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "phoneNumber", array()), "html", null, true);
            echo "</td>
                <td class=\"btn-group btn-group-xs\" role=\"group\">
                    ";
            // line 31
            if ($this->env->getExtension('security')->isGranted("ROLE_CRUD_USER")) {
                // line 32
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                    ";
            }
            // line 34
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-user\"></span></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>

    ";
        
        $__internal_7c8063eba53c0d7de954ca014b56a42900f6b13759d02d0b3847c99a6ba7eff3->leave($__internal_7c8063eba53c0d7de954ca014b56a42900f6b13759d02d0b3847c99a6ba7eff3_prof);

    }

    public function getTemplateName()
    {
        return "CEUserBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 38,  104 => 34,  98 => 32,  96 => 31,  91 => 29,  87 => 28,  83 => 27,  79 => 26,  75 => 25,  72 => 24,  68 => 23,  61 => 18,  55 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "CECoreBundle::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* <div class="table-responsive panel panel-default">*/
/*     <div class="panel-heading">Liste des utilisateurs</div>*/
/*     <table class="table">*/
/*         <thead>*/
/*         <tr>*/
/*             <th class="col-xs-2 col-md-1">Identifiant</th>*/
/*             <th class="col-xs-2 col-md-1">Nom</th>*/
/*             <th class="col-xs-2 col-md-1">Prénom</th>*/
/*             <th class="col-xs-2 col-md-1">Email</th>*/
/*             <th class="col-xs-2 col-md-1">Teléphone</th>*/
/*             <th class="col-xs-2 col-md-1">*/
/*                 {%  if is_granted('ROLE_CRUD_USER') %}*/
/*                 <a class="btn btn-sm btn-success" href="{{ path('user_new') }}">+ Ajouter</a>*/
/*                 {%  endif %}*/
/*             </th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* */
/*         {% for entity in entities %}*/
/*             <tr onMouseOver="this.className='bg-info'" onMouseOut="this.className=''">*/
/*                 <td>{{ entity.identifiant }}</td>*/
/*                 <td>{{ entity.username }}</td>*/
/*                 <td>{{ entity.firstname }}</td>*/
/*                 <td>{{ entity.email }}</td>*/
/*                 <td>{{ entity.phoneNumber }}</td>*/
/*                 <td class="btn-group btn-group-xs" role="group">*/
/*                     {%  if is_granted('ROLE_CRUD_USER') %}*/
/*                         <a href="{{ path('user_edit', { 'id': entity.id }) }}" class="btn btn-default"><span class="glyphicon glyphicon-edit"></span></a>*/
/*                     {% endif %}*/
/*                     <a href="{{ path('user_show', { 'id': entity.id }) }}" class="btn btn-default"><span class="glyphicon glyphicon-user"></span></a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     {% endblock %}*/
/* */
