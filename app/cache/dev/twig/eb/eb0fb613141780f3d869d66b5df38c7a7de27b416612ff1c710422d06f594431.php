<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_06b5395c89bf83196c63d29eb7db176aeb322fce643b45de89df5b09d190ab02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2dfd49582401d566205bd19d9d806a6f74767ddb3d8944a06de7850bf149d889 = $this->env->getExtension("native_profiler");
        $__internal_2dfd49582401d566205bd19d9d806a6f74767ddb3d8944a06de7850bf149d889->enter($__internal_2dfd49582401d566205bd19d9d806a6f74767ddb3d8944a06de7850bf149d889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dfd49582401d566205bd19d9d806a6f74767ddb3d8944a06de7850bf149d889->leave($__internal_2dfd49582401d566205bd19d9d806a6f74767ddb3d8944a06de7850bf149d889_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4dc6ad0f3b9f7e5c1b4ef7d66a033e78a6d734a830c009d0c3ce1637e0eb8bdd = $this->env->getExtension("native_profiler");
        $__internal_4dc6ad0f3b9f7e5c1b4ef7d66a033e78a6d734a830c009d0c3ce1637e0eb8bdd->enter($__internal_4dc6ad0f3b9f7e5c1b4ef7d66a033e78a6d734a830c009d0c3ce1637e0eb8bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4dc6ad0f3b9f7e5c1b4ef7d66a033e78a6d734a830c009d0c3ce1637e0eb8bdd->leave($__internal_4dc6ad0f3b9f7e5c1b4ef7d66a033e78a6d734a830c009d0c3ce1637e0eb8bdd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0dff01ef38bc5c4f38d1b1f482848664ca533e0ebe6806b8e1ff083a5e91a86b = $this->env->getExtension("native_profiler");
        $__internal_0dff01ef38bc5c4f38d1b1f482848664ca533e0ebe6806b8e1ff083a5e91a86b->enter($__internal_0dff01ef38bc5c4f38d1b1f482848664ca533e0ebe6806b8e1ff083a5e91a86b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0dff01ef38bc5c4f38d1b1f482848664ca533e0ebe6806b8e1ff083a5e91a86b->leave($__internal_0dff01ef38bc5c4f38d1b1f482848664ca533e0ebe6806b8e1ff083a5e91a86b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_05b5623102953a7f8b88a007cd0407fc9869fe1a33d7bda3ff464f551126ae91 = $this->env->getExtension("native_profiler");
        $__internal_05b5623102953a7f8b88a007cd0407fc9869fe1a33d7bda3ff464f551126ae91->enter($__internal_05b5623102953a7f8b88a007cd0407fc9869fe1a33d7bda3ff464f551126ae91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_05b5623102953a7f8b88a007cd0407fc9869fe1a33d7bda3ff464f551126ae91->leave($__internal_05b5623102953a7f8b88a007cd0407fc9869fe1a33d7bda3ff464f551126ae91_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
