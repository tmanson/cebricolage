<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_31d9720f661f94c1f4d5d4a4057ff6ac14516c1f79f6cad1812a2bf9c26c3bf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CECoreBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CECoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6321234169cdfbdc382247459058402fcbffd6beb48ffb433356252441fa0e7e = $this->env->getExtension("native_profiler");
        $__internal_6321234169cdfbdc382247459058402fcbffd6beb48ffb433356252441fa0e7e->enter($__internal_6321234169cdfbdc382247459058402fcbffd6beb48ffb433356252441fa0e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6321234169cdfbdc382247459058402fcbffd6beb48ffb433356252441fa0e7e->leave($__internal_6321234169cdfbdc382247459058402fcbffd6beb48ffb433356252441fa0e7e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f151edbbe7a693a724289f563a8b152dc3a316de4e7332879105e2fee6c93732 = $this->env->getExtension("native_profiler");
        $__internal_f151edbbe7a693a724289f563a8b152dc3a316de4e7332879105e2fee6c93732->enter($__internal_f151edbbe7a693a724289f563a8b152dc3a316de4e7332879105e2fee6c93732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_f151edbbe7a693a724289f563a8b152dc3a316de4e7332879105e2fee6c93732->leave($__internal_f151edbbe7a693a724289f563a8b152dc3a316de4e7332879105e2fee6c93732_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_16dd0e18461cb9d06569ef62047bfa9c74357b0b1f262bfc6a95b95befab77fb = $this->env->getExtension("native_profiler");
        $__internal_16dd0e18461cb9d06569ef62047bfa9c74357b0b1f262bfc6a95b95befab77fb->enter($__internal_16dd0e18461cb9d06569ef62047bfa9c74357b0b1f262bfc6a95b95befab77fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"table-responsive panel panel-default\">
    <div class=\"panel-heading\">Liste des groupes</div>
    <table class=\"table\">
        <thead>
        <tr>
            <th class=\"col-xs-2 col-md-1\">Nom</th>
            <th class=\"col-xs-2 col-md-1\">
                ";
        // line 12
        if ($this->env->getExtension('security')->isGranted("ROLE_CRUD_GROUP")) {
            // line 13
            echo "                <a class=\"btn btn-sm btn-success\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_group_new");
            echo "\">+ Ajouter</a>
                ";
        }
        // line 15
        echo "            </th>
        </tr>
        </thead>
        <tbody>

        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 21
            echo "            <tr onMouseOver=\"this.className='bg-info'\" onMouseOut=\"this.className=''\">
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "name", array()), "html", null, true);
            echo "</td>
                <td class=\"btn-group btn-group-xs\" role=\"group\">
                    ";
            // line 24
            if ($this->env->getExtension('security')->isGranted("ROLE_CRUD_GROUP")) {
                // line 25
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_edit", array("groupName" => $this->getAttribute($context["group"], "name", array()))), "html", null, true);
                echo "\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                    ";
            }
            // line 27
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "name", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-user\"></span></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    ";
        
        $__internal_16dd0e18461cb9d06569ef62047bfa9c74357b0b1f262bfc6a95b95befab77fb->leave($__internal_16dd0e18461cb9d06569ef62047bfa9c74357b0b1f262bfc6a95b95befab77fb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 31,  97 => 27,  91 => 25,  89 => 24,  84 => 22,  81 => 21,  77 => 20,  70 => 15,  64 => 13,  62 => 12,  53 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "CECoreBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% block body %}*/
/* <div class="table-responsive panel panel-default">*/
/*     <div class="panel-heading">Liste des groupes</div>*/
/*     <table class="table">*/
/*         <thead>*/
/*         <tr>*/
/*             <th class="col-xs-2 col-md-1">Nom</th>*/
/*             <th class="col-xs-2 col-md-1">*/
/*                 {%  if is_granted('ROLE_CRUD_GROUP') %}*/
/*                 <a class="btn btn-sm btn-success" href="{{ path('fos_user_group_new') }}">+ Ajouter</a>*/
/*                 {% endif %}*/
/*             </th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* */
/*         {% for group in groups %}*/
/*             <tr onMouseOver="this.className='bg-info'" onMouseOut="this.className=''">*/
/*                 <td>{{ group.name }}</td>*/
/*                 <td class="btn-group btn-group-xs" role="group">*/
/*                     {%  if is_granted('ROLE_CRUD_GROUP') %}*/
/*                         <a href="{{ path('fos_user_group_edit', { 'groupName': group.name }) }}" class="btn btn-default"><span class="glyphicon glyphicon-edit"></span></a>*/
/*                     {% endif %}*/
/*                     <a href="{{ path('fos_user_group_show', { 'groupName': group.name }) }}" class="btn btn-default"><span class="glyphicon glyphicon-user"></span></a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     {% endblock %}*/
/* {% endblock fos_user_content %}*/
/* */
