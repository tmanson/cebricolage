<?php

/* CEDeviceBundle:Default:list.html.twig */
class __TwigTemplate_f7c0d8680c417d4424b04086f5591368c843d671953619f51a0c6366e83935c9 extends Twig_Template
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
        $__internal_31f0b6c14ac4b2fef0ff85b4c597ca015a647ce17cafb84b866e89ba6cc47046 = $this->env->getExtension("native_profiler");
        $__internal_31f0b6c14ac4b2fef0ff85b4c597ca015a647ce17cafb84b866e89ba6cc47046->enter($__internal_31f0b6c14ac4b2fef0ff85b4c597ca015a647ce17cafb84b866e89ba6cc47046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEDeviceBundle:Default:list.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["devices"]) ? $context["devices"] : $this->getContext($context, "devices")));
        foreach ($context['_seq'] as $context["_key"] => $context["device"]) {
            // line 2
            echo "    <tr onMouseOver=\"this.className='bg-info'\" onMouseOut=\"this.className=''\">
        <td>
        ";
            // line 4
            if ( !(null === $this->getAttribute($context["device"], "image", array()))) {
                // line 5
                echo "            <img
                    src=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((($this->getAttribute($this->getAttribute($context["device"], "image", array()), "uploadDir", array()) . "/") . $this->getAttribute($this->getAttribute($context["device"], "image", array()), "url", array()))), "html", null, true);
                echo "\"
                    width=\"100px\" height=\"100px\"
                    alt=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["device"], "image", array()), "alt", array()), "html", null, true);
                echo "\"
                    />
        ";
            }
            // line 11
            echo "        </td>
        <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "reference", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "libelle", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "marque", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "modele", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "commentaire", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 17
            if ($this->getAttribute($context["device"], "disponible", array())) {
                // line 18
                echo "                OK
            ";
            } else {
                // line 20
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "disponibleLib", array()), "html", null, true);
                echo "
            ";
            }
            // line 21
            echo "</td>
        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["device"], "dateAchat", array()), "d M Y"), "html", null, true);
            echo "</td>
        ";
            // line 23
            if ($this->env->getExtension('security')->isGranted("ROLE_CRUD_DEVICE")) {
                // line 24
                echo "            <td class=\"btn-group btn-group-xs\" role=\"group\">
                <a class=\"btn btn-xs btn-default\" href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("device_edit", array("id" => $this->getAttribute($context["device"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span></a>
                ";
                // line 26
                if ($this->getAttribute($context["device"], "disponible", array())) {
                    // line 27
                    echo "                    <a class=\"btn btn-xs btn-danger pull-left open-disponibleModal\" data-toggle=\"modal\" data-target=\"#disponibleModal\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "id", array()), "html", null, true);
                    echo "\" data-label=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "libelle", array()), "html", null, true);
                    echo "\" data-marque=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "marque", array()), "html", null, true);
                    echo "\" data-modele=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "modele", array()), "html", null, true);
                    echo "\">
                        <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>
                    </a>
                ";
                } else {
                    // line 31
                    echo "                    <a class=\"btn btn-xs btn-success pull-left\" onclick=\"activate(";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "id", array()), "html", null, true);
                    echo ");\"><span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span></a>
                ";
                }
                // line 33
                echo "            </td>
        ";
            }
            // line 35
            echo "    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['device'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_31f0b6c14ac4b2fef0ff85b4c597ca015a647ce17cafb84b866e89ba6cc47046->leave($__internal_31f0b6c14ac4b2fef0ff85b4c597ca015a647ce17cafb84b866e89ba6cc47046_prof);

    }

    public function getTemplateName()
    {
        return "CEDeviceBundle:Default:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 35,  119 => 33,  113 => 31,  99 => 27,  97 => 26,  93 => 25,  90 => 24,  88 => 23,  84 => 22,  81 => 21,  75 => 20,  71 => 18,  69 => 17,  65 => 16,  61 => 15,  57 => 14,  53 => 13,  49 => 12,  46 => 11,  40 => 8,  35 => 6,  32 => 5,  30 => 4,  26 => 2,  22 => 1,);
    }
}
/* {% for device in devices %}*/
/*     <tr onMouseOver="this.className='bg-info'" onMouseOut="this.className=''">*/
/*         <td>*/
/*         {% if device.image is not null %}*/
/*             <img*/
/*                     src="{{ asset(device.image.uploadDir ~ '/' ~ device.image.url)  }}"*/
/*                     width="100px" height="100px"*/
/*                     alt="{{ device.image.alt }}"*/
/*                     />*/
/*         {% endif %}*/
/*         </td>*/
/*         <td>{{ device.reference }}</td>*/
/*         <td>{{ device.libelle }}</td>*/
/*         <td>{{ device.marque }}</td>*/
/*         <td>{{ device.modele }}</td>*/
/*         <td>{{ device.commentaire }}</td>*/
/*         <td>{% if device.disponible %}*/
/*                 OK*/
/*             {%  else %}*/
/*                 {{ device.disponibleLib }}*/
/*             {%  endif %}</td>*/
/*         <td>{{ device.dateAchat | date('d M Y')}}</td>*/
/*         {%  if is_granted('ROLE_CRUD_DEVICE') %}*/
/*             <td class="btn-group btn-group-xs" role="group">*/
/*                 <a class="btn btn-xs btn-default" href="{{ path('device_edit', {"id":device.id}) }}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>*/
/*                 {% if device.disponible %}*/
/*                     <a class="btn btn-xs btn-danger pull-left open-disponibleModal" data-toggle="modal" data-target="#disponibleModal" data-id="{{ device.id }}" data-label="{{ device.libelle }}" data-marque="{{ device.marque }}" data-modele="{{ device.modele }}">*/
/*                         <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>*/
/*                     </a>*/
/*                 {%  else %}*/
/*                     <a class="btn btn-xs btn-success pull-left" onclick="activate({{ device.id }});"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>*/
/*                 {%  endif %}*/
/*             </td>*/
/*         {% endif %}*/
/*     </tr>*/
/* {% endfor %}*/
