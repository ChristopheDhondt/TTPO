<?php

/* AppBundle:federation:index.html.twig */
class __TwigTemplate_35d5c29631681622e7d78095a1978bd0dc2d984e781f5426414b44c122b0b78b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:federation:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efb4aab14c6ea0cf2d617f01c8e975101955286ac38b3328ca2f93ef3146122d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efb4aab14c6ea0cf2d617f01c8e975101955286ac38b3328ca2f93ef3146122d->enter($__internal_efb4aab14c6ea0cf2d617f01c8e975101955286ac38b3328ca2f93ef3146122d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:federation:index.html.twig"));

        $__internal_1cca55b158014d58eb5987f45195a2b3051c5ed6e79320cfb934149ca95cb0d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cca55b158014d58eb5987f45195a2b3051c5ed6e79320cfb934149ca95cb0d5->enter($__internal_1cca55b158014d58eb5987f45195a2b3051c5ed6e79320cfb934149ca95cb0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:federation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efb4aab14c6ea0cf2d617f01c8e975101955286ac38b3328ca2f93ef3146122d->leave($__internal_efb4aab14c6ea0cf2d617f01c8e975101955286ac38b3328ca2f93ef3146122d_prof);

        
        $__internal_1cca55b158014d58eb5987f45195a2b3051c5ed6e79320cfb934149ca95cb0d5->leave($__internal_1cca55b158014d58eb5987f45195a2b3051c5ed6e79320cfb934149ca95cb0d5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebd40605fd0136933cb7949689f0560314dda71029296f849932046d41ac47b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd40605fd0136933cb7949689f0560314dda71029296f849932046d41ac47b4->enter($__internal_ebd40605fd0136933cb7949689f0560314dda71029296f849932046d41ac47b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_697ef12f3bc6694dbd1280adc0973135012ec7f0a52bd335ef2aa151cd5c6d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_697ef12f3bc6694dbd1280adc0973135012ec7f0a52bd335ef2aa151cd5c6d94->enter($__internal_697ef12f3bc6694dbd1280adc0973135012ec7f0a52bd335ef2aa151cd5c6d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Test
";
        
        $__internal_697ef12f3bc6694dbd1280adc0973135012ec7f0a52bd335ef2aa151cd5c6d94->leave($__internal_697ef12f3bc6694dbd1280adc0973135012ec7f0a52bd335ef2aa151cd5c6d94_prof);

        
        $__internal_ebd40605fd0136933cb7949689f0560314dda71029296f849932046d41ac47b4->leave($__internal_ebd40605fd0136933cb7949689f0560314dda71029296f849932046d41ac47b4_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:federation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    Test
{% endblock %}
", "AppBundle:federation:index.html.twig", "/Applications/MAMP/htdocs/TTPO/app/Resources/AppBundle/views/federation/index.html.twig");
    }
}
