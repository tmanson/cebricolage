<?php

/* CEDeviceBundle:Marque:index.html.twig */
class __TwigTemplate_bdb4ff7698be77ab693377f65738f6b1980c2ca7d911aa0cdc8140cb1a49e444 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CECoreBundle::layout.html.twig", "CEDeviceBundle:Marque:index.html.twig", 1);
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
        $__internal_8fe0f18c67c8a985f5314ff2fc8ec3b49dd097188210094af760099df4197ee6 = $this->env->getExtension("native_profiler");
        $__internal_8fe0f18c67c8a985f5314ff2fc8ec3b49dd097188210094af760099df4197ee6->enter($__internal_8fe0f18c67c8a985f5314ff2fc8ec3b49dd097188210094af760099df4197ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEDeviceBundle:Marque:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fe0f18c67c8a985f5314ff2fc8ec3b49dd097188210094af760099df4197ee6->leave($__internal_8fe0f18c67c8a985f5314ff2fc8ec3b49dd097188210094af760099df4197ee6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9ce4a42393ab92c343026be78ebaa2ced1123774ba641b2f60a2c125a501246f = $this->env->getExtension("native_profiler");
        $__internal_9ce4a42393ab92c343026be78ebaa2ced1123774ba641b2f60a2c125a501246f->enter($__internal_9ce4a42393ab92c343026be78ebaa2ced1123774ba641b2f60a2c125a501246f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "    ";
        
        $__internal_9ce4a42393ab92c343026be78ebaa2ced1123774ba641b2f60a2c125a501246f->leave($__internal_9ce4a42393ab92c343026be78ebaa2ced1123774ba641b2f60a2c125a501246f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_434146a9394e11c29978b21f61131de8aafb9a09dc7e40f4ee57320281740608 = $this->env->getExtension("native_profiler");
        $__internal_434146a9394e11c29978b21f61131de8aafb9a09dc7e40f4ee57320281740608->enter($__internal_434146a9394e11c29978b21f61131de8aafb9a09dc7e40f4ee57320281740608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"table-responsive panel panel-default\">
    <div class=\"panel-heading\">Liste des marques</div>
    <table class=\"table\">
        <thead>
        <tr>
            <th class=\"col-xs-2 col-md-1\">Nom</th>
            <th class=\"col-xs-2 col-md-1\">
                ";
        // line 12
        if ($this->env->getExtension('security')->isGranted("ROLE_CRUD_DEVICE")) {
            // line 13
            echo "                    <a class=\"btn btn-sm btn-success\" href=\"";
            echo $this->env->getExtension('routing')->getPath("brand_new");
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
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "            <tr onMouseOver=\"this.className='bg-info'\" onMouseOut=\"this.className=''\">
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelle", array()), "html", null, true);
            echo "</td>
                <td  class=\"btn-group btn-group-xs\" role=\"group\">
                    ";
            // line 24
            if ($this->env->getExtension('security')->isGranted("ROLE_CRUD_DEVICE")) {
                // line 25
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("brand_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                    ";
            }
            // line 27
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("brand_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-user\"></span></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    ";
        
        $__internal_434146a9394e11c29978b21f61131de8aafb9a09dc7e40f4ee57320281740608->leave($__internal_434146a9394e11c29978b21f61131de8aafb9a09dc7e40f4ee57320281740608_prof);

    }

    public function getTemplateName()
    {
        return "CEDeviceBundle:Marque:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 31,  100 => 27,  94 => 25,  92 => 24,  87 => 22,  84 => 21,  80 => 20,  73 => 15,  67 => 13,  65 => 12,  56 => 5,  50 => 4,  43 => 35,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "CECoreBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% block body %}*/
/* <div class="table-responsive panel panel-default">*/
/*     <div class="panel-heading">Liste des marques</div>*/
/*     <table class="table">*/
/*         <thead>*/
/*         <tr>*/
/*             <th class="col-xs-2 col-md-1">Nom</th>*/
/*             <th class="col-xs-2 col-md-1">*/
/*                 {%  if is_granted('ROLE_CRUD_DEVICE') %}*/
/*                     <a class="btn btn-sm btn-success" href="{{ path('brand_new') }}">+ Ajouter</a>*/
/*                 {% endif %}*/
/*             </th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* */
/*         {% for entity in entities %}*/
/*             <tr onMouseOver="this.className='bg-info'" onMouseOut="this.className=''">*/
/*                 <td>{{ entity.libelle }}</td>*/
/*                 <td  class="btn-group btn-group-xs" role="group">*/
/*                     {%  if is_granted('ROLE_CRUD_DEVICE') %}*/
/*                         <a href="{{ path('brand_edit', { 'id': entity.id }) }}" class="btn btn-default"><span class="glyphicon glyphicon-edit"></span></a>*/
/*                     {% endif %}*/
/*                     <a href="{{ path('brand_show', { 'id': entity.id }) }}" class="btn btn-default"><span class="glyphicon glyphicon-user"></span></a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     {% endblock %}*/
/*     {% endblock fos_user_content %}*/
