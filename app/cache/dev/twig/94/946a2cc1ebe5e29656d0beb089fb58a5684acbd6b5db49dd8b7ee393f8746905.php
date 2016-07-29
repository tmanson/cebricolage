<?php

/* CEReservationBundle:Reservation:reservationPrototype.html.twig */
class __TwigTemplate_6e58ffc7cff6e48bc5595431054530f9498474d6cdfc6b5679115217a2207392 extends Twig_Template
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
        $__internal_a90418b7efd384ff4404e2c9e3e45b27868daf78af4ea48c1b7dacb26aba06e8 = $this->env->getExtension("native_profiler");
        $__internal_a90418b7efd384ff4404e2c9e3e45b27868daf78af4ea48c1b7dacb26aba06e8->enter($__internal_a90418b7efd384ff4404e2c9e3e45b27868daf78af4ea48c1b7dacb26aba06e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEReservationBundle:Reservation:reservationPrototype.html.twig"));

        // line 1
        echo "<td class='col-md-4 '>
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "device", array()), 'errors');
        echo "
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "device", array()), 'widget', array("attr" => array("class" => "form-control input-sm onChangeDevice enableSubmit")));
        echo "
</td>
<td class='col-md-1'>
    <div class=\"inner-addon left-addon\">
    <i class=\"glyphicon glyphicon-refresh glyphicon-refresh-animate loading ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "vars", array()), "id", array()), "html", null, true);
        echo "_loading\" ></i>
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "startDate", array()), 'errors');
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "startDate", array()), 'widget', array("attr" => array("class" => "form-control input-sm enableSubmit", "disabled" => "disabled")));
        echo "
    </div>
</td>
<td class='col-md-1'>
    <div class=\"inner-addon left-addon\">
    <i class=\"glyphicon glyphicon-refresh glyphicon-refresh-animate loading ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "vars", array()), "id", array()), "html", null, true);
        echo "_loading\" ></i>
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "endDate", array()), 'errors');
        echo "
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "endDate", array()), 'widget', array("attr" => array("class" => "form-control input-sm enableSubmit", "disabled" => "disabled")));
        echo "
    </div>
</td>
<td class='col-md-4'>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "user", array()), 'errors');
        echo "
    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "user", array()), 'widget', array("attr" => array("class" => "form-control input-sm enableSubmit")));
        echo "
</td>
";
        
        $__internal_a90418b7efd384ff4404e2c9e3e45b27868daf78af4ea48c1b7dacb26aba06e8->leave($__internal_a90418b7efd384ff4404e2c9e3e45b27868daf78af4ea48c1b7dacb26aba06e8_prof);

    }

    public function getTemplateName()
    {
        return "CEReservationBundle:Reservation:reservationPrototype.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  66 => 19,  60 => 16,  56 => 15,  52 => 14,  44 => 9,  40 => 8,  36 => 7,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <td class='col-md-4 '>*/
/*     {{ form_errors(item.device) }}*/
/*     {{ form_widget(item.device, {'attr': {'class': 'form-control input-sm onChangeDevice enableSubmit'}}) }}*/
/* </td>*/
/* <td class='col-md-1'>*/
/*     <div class="inner-addon left-addon">*/
/*     <i class="glyphicon glyphicon-refresh glyphicon-refresh-animate loading {{ item.vars.id }}_loading" ></i>*/
/*     {{ form_errors(item.startDate) }}*/
/*     {{ form_widget(item.startDate, {'attr': {'class': 'form-control input-sm enableSubmit', 'disabled': 'disabled'}}) }}*/
/*     </div>*/
/* </td>*/
/* <td class='col-md-1'>*/
/*     <div class="inner-addon left-addon">*/
/*     <i class="glyphicon glyphicon-refresh glyphicon-refresh-animate loading {{ item.vars.id }}_loading" ></i>*/
/*     {{ form_errors(item.endDate) }}*/
/*     {{ form_widget(item.endDate, {'attr': {'class': 'form-control input-sm enableSubmit', 'disabled': 'disabled'}}) }}*/
/*     </div>*/
/* </td>*/
/* <td class='col-md-4'>{{ form_errors(item.user) }}*/
/*     {{ form_widget(item.user, {'attr': {'class': 'form-control input-sm enableSubmit'}}) }}*/
/* </td>*/
/* */
