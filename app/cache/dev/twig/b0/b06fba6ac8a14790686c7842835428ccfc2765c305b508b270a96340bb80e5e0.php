<?php

/* CEUserBundle:Security:login.html.twig */
class __TwigTemplate_dc351464408747f094b2c3f44cc5e3745f36d89fdebb7a3a306db6aee86faf39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8403c7d938cf6586f981187fac3de5afa2577113cc3ca82d87246cbc168e851 = $this->env->getExtension("native_profiler");
        $__internal_b8403c7d938cf6586f981187fac3de5afa2577113cc3ca82d87246cbc168e851->enter($__internal_b8403c7d938cf6586f981187fac3de5afa2577113cc3ca82d87246cbc168e851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEUserBundle:Security:login.html.twig"));

        // line 1
        echo "

";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_b8403c7d938cf6586f981187fac3de5afa2577113cc3ca82d87246cbc168e851->leave($__internal_b8403c7d938cf6586f981187fac3de5afa2577113cc3ca82d87246cbc168e851_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6b978a749935f1a2de304e5ce7f0d4a565ec3a4351df6c9788c3db84efc6c407 = $this->env->getExtension("native_profiler");
        $__internal_6b978a749935f1a2de304e5ce7f0d4a565ec3a4351df6c9788c3db84efc6c407->enter($__internal_6b978a749935f1a2de304e5ce7f0d4a565ec3a4351df6c9788c3db84efc6c407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    ";
        if ((array_key_exists("error", $context) && (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")))) {
            // line 7
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
        <!-- On ouvre la popup -->
        <script language=\"JavaScript\">\$(\".dropdown\").addClass('open');</script>
    ";
        }
        // line 11
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" id=\"login_form\">

        <label for=\"username\">Identifiant</label>
        <input type=\"text\" id=\"username\" name=\"_username\" required=\"required\" size=\"100\" />

        <label for=\"password\">Mot de passe</label>
        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

        <span>
            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
            <label for=\"remember_me\">Se souvenir</label>
        </span>

        <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-xs btn-info\" value=\"Se connecter\" />
        <a href=";
        // line 25
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "> S'enregistrer </a>
    </form>
";
        
        $__internal_6b978a749935f1a2de304e5ce7f0d4a565ec3a4351df6c9788c3db84efc6c407->leave($__internal_6b978a749935f1a2de304e5ce7f0d4a565ec3a4351df6c9788c3db84efc6c407_prof);

    }

    public function getTemplateName()
    {
        return "CEUserBundle:Security:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  71 => 25,  53 => 11,  45 => 7,  42 => 6,  30 => 5,  27 => 4,  23 => 1,);
    }
}
/* */
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     {% if error is defined and error %}*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*         <!-- On ouvre la popup -->*/
/*         <script language="JavaScript">$(".dropdown").addClass('open');</script>*/
/*     {% endif %}*/
/*     <form action="{{ path("fos_user_security_check") }}" method="post" id="login_form">*/
/* */
/*         <label for="username">Identifiant</label>*/
/*         <input type="text" id="username" name="_username" required="required" size="100" />*/
/* */
/*         <label for="password">Mot de passe</label>*/
/*         <input type="password" id="password" name="_password" required="required" />*/
/* */
/*         <span>*/
/*             <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*             <label for="remember_me">Se souvenir</label>*/
/*         </span>*/
/* */
/*         <input type="submit" id="_submit" name="_submit" class="btn btn-xs btn-info" value="Se connecter" />*/
/*         <a href={{ path("fos_user_registration_register") }}> S'enregistrer </a>*/
/*     </form>*/
/* {% endblock fos_user_content %}*/
/* */
