<?php

/* AppBundle:common/form:adress.html.twig */
class __TwigTemplate_3ac31e64b97cb0209c31d2b460254bfdfa4b9caf4447a4a444c892f313d1eb9b extends Twig_Template
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
        $__internal_3851a0ffb513133b4ae06b4a34ddf5e7bad4febb1b140280139c72b6663823c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3851a0ffb513133b4ae06b4a34ddf5e7bad4febb1b140280139c72b6663823c9->enter($__internal_3851a0ffb513133b4ae06b4a34ddf5e7bad4febb1b140280139c72b6663823c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:common/form:adress.html.twig"));

        $__internal_24fb557417b2aa4c3253c3a37766da5c530b4450a2f30b5a789e2ffab79e2050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24fb557417b2aa4c3253c3a37766da5c530b4450a2f30b5a789e2ffab79e2050->enter($__internal_24fb557417b2aa4c3253c3a37766da5c530b4450a2f30b5a789e2ffab79e2050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:common/form:adress.html.twig"));

        // line 1
        echo "    <div class=\"row\"><div class=\"col-lg-12\"><h5>";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["adress"] ?? $this->getContext($context, "adress")), 'label');
        echo "</h5></div></div>
    <div class=\"row\">
        <div class=\"col-lg-3 col-sm-4\">
            ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["adress"] ?? $this->getContext($context, "adress")), "street", array()), 'label');
        echo "
            ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["adress"] ?? $this->getContext($context, "adress")), "street", array()), 'errors');
        echo "
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["adress"] ?? $this->getContext($context, "adress")), "street", array()), 'widget');
        echo "
        </div>
        <div class=\"col-lg-3 col-sm-4\">
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["adress"] ?? $this->getContext($context, "adress")), "postNumber", array()), 'label');
        echo "
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["adress"] ?? $this->getContext($context, "adress")), "postNumber", array()), 'errors');
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["adress"] ?? $this->getContext($context, "adress")), "postNumber", array()), 'widget');
        echo "
        </div>
       <div class=\"col-lg-3 col-sm-4\">
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["adress"] ?? $this->getContext($context, "adress")), "postBox", array()), 'label');
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["adress"] ?? $this->getContext($context, "adress")), "postBox", array()), 'errors');
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["adress"] ?? $this->getContext($context, "adress")), "postBox", array()), 'widget');
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-3 col-sm-4\">
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["adress"] ?? $this->getContext($context, "adress")), "postCode", array()), 'label');
        echo "
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["adress"] ?? $this->getContext($context, "adress")), "postCode", array()), 'errors');
        echo "
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["adress"] ?? $this->getContext($context, "adress")), "postCode", array()), 'widget');
        echo "
        </div>
        <div class=\"col-lg-3 col-sm-4\">
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["adress"] ?? $this->getContext($context, "adress")), "city", array()), 'label');
        echo "
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["adress"] ?? $this->getContext($context, "adress")), "city", array()), 'errors');
        echo "
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["adress"] ?? $this->getContext($context, "adress")), "city", array()), 'widget');
        echo "
        </div>
       <div class=\"col-lg-3 col-sm-4\">
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["adress"] ?? $this->getContext($context, "adress")), "country", array()), 'label');
        echo "
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["adress"] ?? $this->getContext($context, "adress")), "country", array()), 'errors');
        echo "
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["adress"] ?? $this->getContext($context, "adress")), "country", array()), 'widget');
        echo "
        </div>
    </div>";
        
        $__internal_3851a0ffb513133b4ae06b4a34ddf5e7bad4febb1b140280139c72b6663823c9->leave($__internal_3851a0ffb513133b4ae06b4a34ddf5e7bad4febb1b140280139c72b6663823c9_prof);

        
        $__internal_24fb557417b2aa4c3253c3a37766da5c530b4450a2f30b5a789e2ffab79e2050->leave($__internal_24fb557417b2aa4c3253c3a37766da5c530b4450a2f30b5a789e2ffab79e2050_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:common/form:adress.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 33,  108 => 32,  104 => 31,  98 => 28,  94 => 27,  90 => 26,  84 => 23,  80 => 22,  76 => 21,  68 => 16,  64 => 15,  60 => 14,  54 => 11,  50 => 10,  46 => 9,  40 => 6,  36 => 5,  32 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    <div class=\"row\"><div class=\"col-lg-12\"><h5>{{ form_label(adress) }}</h5></div></div>
    <div class=\"row\">
        <div class=\"col-lg-3 col-sm-4\">
            {{ form_label(adress.street) }}
            {{ form_errors(adress.street) }}
            {{ form_widget(adress.street) }}
        </div>
        <div class=\"col-lg-3 col-sm-4\">
            {{ form_label(adress.postNumber) }}
            {{ form_errors(adress.postNumber) }}
            {{ form_widget(adress.postNumber) }}
        </div>
       <div class=\"col-lg-3 col-sm-4\">
            {{ form_label(adress.postBox) }}
            {{ form_errors(adress.postBox) }}
            {{ form_widget(adress.postBox) }}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-3 col-sm-4\">
            {{ form_label(adress.postCode) }}
            {{ form_errors(adress.postCode) }}
            {{ form_widget(adress.postCode) }}
        </div>
        <div class=\"col-lg-3 col-sm-4\">
            {{ form_label(adress.city) }}
            {{ form_errors(adress.city) }}
            {{ form_widget(adress.city) }}
        </div>
       <div class=\"col-lg-3 col-sm-4\">
            {{ form_label(adress.country) }}
            {{ form_errors(adress.country) }}
            {{ form_widget(adress.country) }}
        </div>
    </div>", "AppBundle:common/form:adress.html.twig", "/Applications/MAMP/htdocs/TTPO/app/Resources/AppBundle/views/common/form/adress.html.twig");
    }
}
