<?php

/* CECoreBundle:Default:navbar.html.twig */
class __TwigTemplate_1bcb8d3dcee4c4e8ead28c7962d7d71c9457f591476c40599c3e2a606c407057 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'Emprunt' => array($this, 'block_Emprunt'),
            'Materiel' => array($this, 'block_Materiel'),
            'Utilisateur' => array($this, 'block_Utilisateur'),
            'Groupes' => array($this, 'block_Groupes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d3b8b83e115792bfd1de79e005e1fa947077965e620e8a6f01b6a18548c564c = $this->env->getExtension("native_profiler");
        $__internal_2d3b8b83e115792bfd1de79e005e1fa947077965e620e8a6f01b6a18548c564c->enter($__internal_2d3b8b83e115792bfd1de79e005e1fa947077965e620e8a6f01b6a18548c564c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CECoreBundle:Default:navbar.html.twig"));

        // line 1
        echo "<script>
    \$(function () { \$('.popover-toggle-login').popover('hide');});
</script>
<nav class=\"navbar navbar-inverse\" role=\"navigation\">
    <div class=\"container-fluid\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"#\">CE Bricolage</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                ";
        // line 13
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 14
            echo "                    ";
            if ($this->env->getExtension('security')->isGranted("ROLE_READ_RESERVATION")) {
                // line 15
                echo "                        <li class=\"";
                $this->displayBlock('Emprunt', $context, $blocks);
                echo "\"><a href=\"";
                echo $this->env->getExtension('routing')->getPath("reservation");
                echo "\">Emprunt</a></li>
                    ";
            }
            // line 17
            echo "                ";
            if ($this->env->getExtension('security')->isGranted("ROLE_READ_DEVICE")) {
                // line 18
                echo "                    <li class=\"";
                $this->displayBlock('Materiel', $context, $blocks);
                echo " dropdown\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Matériel <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"";
                // line 21
                echo $this->env->getExtension('routing')->getPath("device_management");
                echo "\">Gestion Matériel</a></li>
                            <li><a href=\"";
                // line 22
                echo $this->env->getExtension('routing')->getPath("brand");
                echo "\">Gestion Marques</a></li>
                        </ul>
                    </li>
                ";
            }
            // line 26
            echo "                ";
            if ($this->env->getExtension('security')->isGranted("ROLE_READ_USER")) {
                // line 27
                echo "                    <li class=\"";
                $this->displayBlock('Utilisateur', $context, $blocks);
                echo "\"><a href=\"";
                echo $this->env->getExtension('routing')->getPath("user");
                echo "\">Utilisateurs</a></li>
                ";
            }
            // line 29
            echo "                ";
            if ($this->env->getExtension('security')->isGranted("ROLE_READ_GROUP")) {
                // line 30
                echo "                    <li class=\"";
                $this->displayBlock('Groupes', $context, $blocks);
                echo "\"><a href=\"";
                echo $this->env->getExtension('routing')->getPath("fos_user_group_list");
                echo "\">Groupes</a></li>
                ";
            }
            // line 32
            echo "                ";
        }
        // line 33
        echo "            </ul>
            <ul class=\"nav navbar-nav navbar-right btn-group btn-group-xs\">
                <li class=\"dropdown\">
                ";
        // line 36
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 37
            echo "                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=\"#\">Action</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Se déconnecter</a></li>
                    </ul>
                ";
        } else {
            // line 44
            echo "                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Connexion <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dLabel\">
                            ";
            // line 46
            $this->loadTemplate("CEUserBundle:Security:login.html.twig", "CECoreBundle:Default:navbar.html.twig", 46)->display($context);
            // line 47
            echo "                        </ul>
                ";
        }
        // line 49
        echo "                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>";
        
        $__internal_2d3b8b83e115792bfd1de79e005e1fa947077965e620e8a6f01b6a18548c564c->leave($__internal_2d3b8b83e115792bfd1de79e005e1fa947077965e620e8a6f01b6a18548c564c_prof);

    }

    // line 15
    public function block_Emprunt($context, array $blocks = array())
    {
        $__internal_a8610c55ca474b481cb957e801d4624842fcca570671cd6212e493309f46c5df = $this->env->getExtension("native_profiler");
        $__internal_a8610c55ca474b481cb957e801d4624842fcca570671cd6212e493309f46c5df->enter($__internal_a8610c55ca474b481cb957e801d4624842fcca570671cd6212e493309f46c5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Emprunt"));

        
        $__internal_a8610c55ca474b481cb957e801d4624842fcca570671cd6212e493309f46c5df->leave($__internal_a8610c55ca474b481cb957e801d4624842fcca570671cd6212e493309f46c5df_prof);

    }

    // line 18
    public function block_Materiel($context, array $blocks = array())
    {
        $__internal_3edb11bc33ffba940bb9444c2d635f57fde7ac448af5a78e2ae868a15c3c54cb = $this->env->getExtension("native_profiler");
        $__internal_3edb11bc33ffba940bb9444c2d635f57fde7ac448af5a78e2ae868a15c3c54cb->enter($__internal_3edb11bc33ffba940bb9444c2d635f57fde7ac448af5a78e2ae868a15c3c54cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Materiel"));

        
        $__internal_3edb11bc33ffba940bb9444c2d635f57fde7ac448af5a78e2ae868a15c3c54cb->leave($__internal_3edb11bc33ffba940bb9444c2d635f57fde7ac448af5a78e2ae868a15c3c54cb_prof);

    }

    // line 27
    public function block_Utilisateur($context, array $blocks = array())
    {
        $__internal_54b13caedd2ce7e153b55098ef36767855431718f15cff40f7fe53249c11eca2 = $this->env->getExtension("native_profiler");
        $__internal_54b13caedd2ce7e153b55098ef36767855431718f15cff40f7fe53249c11eca2->enter($__internal_54b13caedd2ce7e153b55098ef36767855431718f15cff40f7fe53249c11eca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Utilisateur"));

        
        $__internal_54b13caedd2ce7e153b55098ef36767855431718f15cff40f7fe53249c11eca2->leave($__internal_54b13caedd2ce7e153b55098ef36767855431718f15cff40f7fe53249c11eca2_prof);

    }

    // line 30
    public function block_Groupes($context, array $blocks = array())
    {
        $__internal_5402d31010c7a2646c4f581d0ebbe86f5f8b347afd216a025324b72d6b3b2601 = $this->env->getExtension("native_profiler");
        $__internal_5402d31010c7a2646c4f581d0ebbe86f5f8b347afd216a025324b72d6b3b2601->enter($__internal_5402d31010c7a2646c4f581d0ebbe86f5f8b347afd216a025324b72d6b3b2601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Groupes"));

        
        $__internal_5402d31010c7a2646c4f581d0ebbe86f5f8b347afd216a025324b72d6b3b2601->leave($__internal_5402d31010c7a2646c4f581d0ebbe86f5f8b347afd216a025324b72d6b3b2601_prof);

    }

    public function getTemplateName()
    {
        return "CECoreBundle:Default:navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 30,  163 => 27,  152 => 18,  141 => 15,  130 => 49,  126 => 47,  124 => 46,  120 => 44,  114 => 41,  106 => 37,  104 => 36,  99 => 33,  96 => 32,  88 => 30,  85 => 29,  77 => 27,  74 => 26,  67 => 22,  63 => 21,  56 => 18,  53 => 17,  45 => 15,  42 => 14,  40 => 13,  26 => 1,);
    }
}
/* <script>*/
/*     $(function () { $('.popover-toggle-login').popover('hide');});*/
/* </script>*/
/* <nav class="navbar navbar-inverse" role="navigation">*/
/*     <div class="container-fluid">*/
/*         <!-- Brand and toggle get grouped for better mobile display -->*/
/*         <div class="navbar-header">*/
/*             <a class="navbar-brand" href="#">CE Bricolage</a>*/
/*         </div>*/
/*         <!-- Collect the nav links, forms, and other content for toggling -->*/
/*         <div class="collapse navbar-collapse">*/
/*             <ul class="nav navbar-nav">*/
/*                 {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                     {% if is_granted("ROLE_READ_RESERVATION") %}*/
/*                         <li class="{% block Emprunt %}{% endblock %}"><a href="{{ path('reservation') }}">Emprunt</a></li>*/
/*                     {% endif %}*/
/*                 {% if is_granted("ROLE_READ_DEVICE") %}*/
/*                     <li class="{% block Materiel %}{% endblock %} dropdown">*/
/*                         <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Matériel <span class="caret"></span></a>*/
/*                         <ul class="dropdown-menu" role="menu">*/
/*                             <li><a href="{{ path("device_management") }}">Gestion Matériel</a></li>*/
/*                             <li><a href="{{ path("brand") }}">Gestion Marques</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 {% endif %}*/
/*                 {% if is_granted("ROLE_READ_USER") %}*/
/*                     <li class="{% block Utilisateur %}{% endblock %}"><a href="{{ path('user') }}">Utilisateurs</a></li>*/
/*                 {% endif %}*/
/*                 {% if is_granted("ROLE_READ_GROUP") %}*/
/*                     <li class="{% block Groupes %}{% endblock %}"><a href="{{ path('fos_user_group_list') }}">Groupes</a></li>*/
/*                 {% endif %}*/
/*                 {% endif %}*/
/*             </ul>*/
/*             <ul class="nav navbar-nav navbar-right btn-group btn-group-xs">*/
/*                 <li class="dropdown">*/
/*                 {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                     <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ app.user.username }} <span class="caret"></span></a>*/
/*                     <ul class="dropdown-menu" role="menu">*/
/*                         <li><a href="#">Action</a></li>*/
/*                         <li class="divider"></li>*/
/*                         <li><a href="{{ path('fos_user_security_logout') }}">Se déconnecter</a></li>*/
/*                     </ul>*/
/*                 {% else %}*/
/*                     <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Connexion <span class="caret"></span></a>*/
/*                         <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">*/
/*                             {% include "CEUserBundle:Security:login.html.twig" %}*/
/*                         </ul>*/
/*                 {% endif %}*/
/*                 </li>*/
/*             </ul>*/
/*         </div><!-- /.navbar-collapse -->*/
/*     </div><!-- /.container-fluid -->*/
/* </nav>*/
