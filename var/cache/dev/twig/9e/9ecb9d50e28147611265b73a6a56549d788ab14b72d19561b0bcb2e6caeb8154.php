<?php

/* AppBundle:admin/config/federation:form.html.twig */
class __TwigTemplate_92b6840584978bb86fc516b9fa2a35c6abac0af65355a636428bfc62d31b97bc extends Twig_Template
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
        $__internal_15c2206698191f68f8d234c872352ea9ef4edeced9d30a151d2b7caaa83f3bdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15c2206698191f68f8d234c872352ea9ef4edeced9d30a151d2b7caaa83f3bdd->enter($__internal_15c2206698191f68f8d234c872352ea9ef4edeced9d30a151d2b7caaa83f3bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:admin/config/federation:form.html.twig"));

        $__internal_e0f5edb2904d43ad4fe72dda8e44ab9fb7ed51b77f2d69500c0f48d2fa63cb44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0f5edb2904d43ad4fe72dda8e44ab9fb7ed51b77f2d69500c0f48d2fa63cb44->enter($__internal_e0f5edb2904d43ad4fe72dda8e44ab9fb7ed51b77f2d69500c0f48d2fa63cb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:admin/config/federation:form.html.twig"));

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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nameFr", array()), 'label');
        echo "
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nameFr", array()), 'errors');
        echo "
            ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nameFr", array()), 'widget');
        echo "
        </div>
        <div class=\"col-lg-3 col-sm-4\">
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nameNl", array()), 'label');
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nameNl", array()), 'errors');
        echo "
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nameNl", array()), 'widget');
        echo "
        </div>
        <div class=\"col-lg-3 col-sm-4\">
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nameDe", array()), 'label');
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nameDe", array()), 'errors');
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nameDe", array()), 'widget');
        echo "
        </div>
    </div>
    ";
        // line 20
        $context["adress"] = $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "officialAdress", array());
        // line 21
        echo "    ";
        $this->loadTemplate("AppBundle:common/form:adress.html.twig", "AppBundle:admin/config/federation:form.html.twig", 21)->display($context);
        echo "    
    ";
        // line 22
        $context["adress"] = $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "postalAdress", array());
        // line 23
        echo "    ";
        $this->loadTemplate("AppBundle:common/form:adress.html.twig", "AppBundle:admin/config/federation:form.html.twig", 23)->display($context);
        echo "    
";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_15c2206698191f68f8d234c872352ea9ef4edeced9d30a151d2b7caaa83f3bdd->leave($__internal_15c2206698191f68f8d234c872352ea9ef4edeced9d30a151d2b7caaa83f3bdd_prof);

        
        $__internal_e0f5edb2904d43ad4fe72dda8e44ab9fb7ed51b77f2d69500c0f48d2fa63cb44->leave($__internal_e0f5edb2904d43ad4fe72dda8e44ab9fb7ed51b77f2d69500c0f48d2fa63cb44_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:admin/config/federation:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 24,  86 => 23,  84 => 22,  79 => 21,  77 => 20,  71 => 17,  67 => 16,  63 => 15,  57 => 12,  53 => 11,  49 => 10,  43 => 7,  39 => 6,  35 => 5,  29 => 2,  25 => 1,);
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
            {{ form_label(form.nameFr) }}
            {{ form_errors(form.nameFr) }}
            {{ form_widget(form.nameFr) }}
        </div>
        <div class=\"col-lg-3 col-sm-4\">
            {{ form_label(form.nameNl) }}
            {{ form_errors(form.nameNl) }}
            {{ form_widget(form.nameNl) }}
        </div>
        <div class=\"col-lg-3 col-sm-4\">
            {{ form_label(form.nameDe) }}
            {{ form_errors(form.nameDe) }}
            {{ form_widget(form.nameDe) }}
        </div>
    </div>
    {% set adress = form.officialAdress%}
    {% include('AppBundle:common/form:adress.html.twig') %}    
    {% set adress = form.postalAdress%}
    {% include('AppBundle:common/form:adress.html.twig') %}    
{{ form_end(form) }}
", "AppBundle:admin/config/federation:form.html.twig", "/Applications/MAMP/htdocs/TTPO/app/Resources/AppBundle/views/admin/config/federation/form.html.twig");
    }
}
