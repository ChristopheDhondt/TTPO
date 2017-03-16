<?php

/* AppBundle:common/form:person.html.twig */
class __TwigTemplate_574b6c666112bbf15dc8921b2db1a292cecfab595e75f5b4578e96a447aa4799 extends Twig_Template
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
        $__internal_f84694d7d2f4f4edc67150c6aaaca2de97834d5cdbdd8550cce8677fe571f447 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f84694d7d2f4f4edc67150c6aaaca2de97834d5cdbdd8550cce8677fe571f447->enter($__internal_f84694d7d2f4f4edc67150c6aaaca2de97834d5cdbdd8550cce8677fe571f447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:common/form:person.html.twig"));

        $__internal_ade4f42747afb398924e44cbe784055b6fc2e7eafb360da044f21eec8b172d5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade4f42747afb398924e44cbe784055b6fc2e7eafb360da044f21eec8b172d5d->enter($__internal_ade4f42747afb398924e44cbe784055b6fc2e7eafb360da044f21eec8b172d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:common/form:person.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"row\"><div class=\"col-lg-12\"><h5>";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "</h5></div></div>
    <div class=\"row\">
        <div class=\"col-lg-3 col-sm-4\">
            ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", array()), 'label');
        echo "
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", array()), 'errors');
        echo "
            ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", array()), 'widget');
        echo "
        </div>
        <div class=\"col-lg-3 col-sm-4\">
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastname", array()), 'label');
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastname", array()), 'errors');
        echo "
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastname", array()), 'widget');
        echo "
        </div>
        <div class=\"col-lg-3 col-sm-4\">
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "emailAdress", array()), 'label');
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "emailAdress", array()), 'errors');
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "emailAdress", array()), 'widget');
        echo "
        </div>
        <div class=\"col-lg-3 col-sm-4\">
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'label');
        echo "
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'errors');
        echo "
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'widget');
        echo "
        </div>
    </div>
    ";
        // line 25
        $context["adress"] = $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "officialAdress", array());
        // line 26
        echo "    ";
        $this->loadTemplate("AppBundle:common/form:adress.html.twig", "AppBundle:common/form:person.html.twig", 26)->display($context);
        echo "    
    ";
        // line 27
        $context["adress"] = $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "postalAdress", array());
        // line 28
        echo "    ";
        $this->loadTemplate("AppBundle:common/form:adress.html.twig", "AppBundle:common/form:person.html.twig", 28)->display($context);
        echo "    
";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo " ";
        
        $__internal_f84694d7d2f4f4edc67150c6aaaca2de97834d5cdbdd8550cce8677fe571f447->leave($__internal_f84694d7d2f4f4edc67150c6aaaca2de97834d5cdbdd8550cce8677fe571f447_prof);

        
        $__internal_ade4f42747afb398924e44cbe784055b6fc2e7eafb360da044f21eec8b172d5d->leave($__internal_ade4f42747afb398924e44cbe784055b6fc2e7eafb360da044f21eec8b172d5d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:common/form:person.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 29,  100 => 28,  98 => 27,  93 => 26,  91 => 25,  85 => 22,  81 => 21,  77 => 20,  71 => 17,  67 => 16,  63 => 15,  57 => 12,  53 => 11,  49 => 10,  43 => 7,  39 => 6,  35 => 5,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form) }}
    <div class=\"row\"><div class=\"col-lg-12\"><h5>{{ form_label(form) }}</h5></div></div>
    <div class=\"row\">
        <div class=\"col-lg-3 col-sm-4\">
            {{ form_label(form.firstName) }}
            {{ form_errors(form.firstName) }}
            {{ form_widget(form.firstName) }}
        </div>
        <div class=\"col-lg-3 col-sm-4\">
            {{ form_label(form.lastname) }}
            {{ form_errors(form.lastname) }}
            {{ form_widget(form.lastname) }}
        </div>
        <div class=\"col-lg-3 col-sm-4\">
            {{ form_label(form.emailAdress) }}
            {{ form_errors(form.emailAdress) }}
            {{ form_widget(form.emailAdress) }}
        </div>
        <div class=\"col-lg-3 col-sm-4\">
            {{ form_label(form.password) }}
            {{ form_errors(form.password) }}
            {{ form_widget(form.password) }}
        </div>
    </div>
    {% set adress = form.officialAdress%}
    {% include('AppBundle:common/form:adress.html.twig') %}    
    {% set adress = form.postalAdress%}
    {% include('AppBundle:common/form:adress.html.twig') %}    
{{ form_end(form) }} ", "AppBundle:common/form:person.html.twig", "/Applications/MAMP/htdocs/TTPO/app/Resources/AppBundle/views/common/form/person.html.twig");
    }
}
