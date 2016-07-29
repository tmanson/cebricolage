<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_419709d3676bc4b3a0dc7d6036ab9e83aa8a0e4b66e9d687e2090db18c0ad258 extends Twig_Template
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
        $__internal_c90861703cfacabdcc185c15cbf5e3202bc7c4a0e4cfbb6c45c074de654da9f5 = $this->env->getExtension("native_profiler");
        $__internal_c90861703cfacabdcc185c15cbf5e3202bc7c4a0e4cfbb6c45c074de654da9f5->enter($__internal_c90861703cfacabdcc185c15cbf5e3202bc7c4a0e4cfbb6c45c074de654da9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_c90861703cfacabdcc185c15cbf5e3202bc7c4a0e4cfbb6c45c074de654da9f5->leave($__internal_c90861703cfacabdcc185c15cbf5e3202bc7c4a0e4cfbb6c45c074de654da9f5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
