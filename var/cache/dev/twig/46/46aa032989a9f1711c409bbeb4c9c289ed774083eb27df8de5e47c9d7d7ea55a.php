<?php

/* AppBundle:admin/config/federation:add.html.twig */
class __TwigTemplate_42054baf25983ef2c4bb8fcc9b99ba2155bdfeb891ddccbb6664e2dbc413e0ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:admin/config/federation:add.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'form' => array($this, 'block_form'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bead9632519678f69a23b5a677f535f30aedb4558eafdbe1572de550dc41e415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bead9632519678f69a23b5a677f535f30aedb4558eafdbe1572de550dc41e415->enter($__internal_bead9632519678f69a23b5a677f535f30aedb4558eafdbe1572de550dc41e415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:admin/config/federation:add.html.twig"));

        $__internal_7f29492fb478d9fcb101835e73e111c2795894b43b7584ab5a292f758c1603f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f29492fb478d9fcb101835e73e111c2795894b43b7584ab5a292f758c1603f5->enter($__internal_7f29492fb478d9fcb101835e73e111c2795894b43b7584ab5a292f758c1603f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:admin/config/federation:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bead9632519678f69a23b5a677f535f30aedb4558eafdbe1572de550dc41e415->leave($__internal_bead9632519678f69a23b5a677f535f30aedb4558eafdbe1572de550dc41e415_prof);

        
        $__internal_7f29492fb478d9fcb101835e73e111c2795894b43b7584ab5a292f758c1603f5->leave($__internal_7f29492fb478d9fcb101835e73e111c2795894b43b7584ab5a292f758c1603f5_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_50bfc0383e0a40b8c56ea2fab44c170d1dc7beb9c7f287cb0e871d414734ef6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50bfc0383e0a40b8c56ea2fab44c170d1dc7beb9c7f287cb0e871d414734ef6a->enter($__internal_50bfc0383e0a40b8c56ea2fab44c170d1dc7beb9c7f287cb0e871d414734ef6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7fcdaa6261fc4ebe422bb6a30ceb059aacd270bb313162645f6142c826fd0c88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fcdaa6261fc4ebe422bb6a30ceb059aacd270bb313162645f6142c826fd0c88->enter($__internal_7fcdaa6261fc4ebe422bb6a30ceb059aacd270bb313162645f6142c826fd0c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Add Federation</div>
        <div class=\"panel-body\">
            ";
        // line 7
        $this->displayBlock('form', $context, $blocks);
        // line 10
        echo "        </div> 
    </div>
";
        
        $__internal_7fcdaa6261fc4ebe422bb6a30ceb059aacd270bb313162645f6142c826fd0c88->leave($__internal_7fcdaa6261fc4ebe422bb6a30ceb059aacd270bb313162645f6142c826fd0c88_prof);

        
        $__internal_50bfc0383e0a40b8c56ea2fab44c170d1dc7beb9c7f287cb0e871d414734ef6a->leave($__internal_50bfc0383e0a40b8c56ea2fab44c170d1dc7beb9c7f287cb0e871d414734ef6a_prof);

    }

    // line 7
    public function block_form($context, array $blocks = array())
    {
        $__internal_5ff9adbc46832ae960811c87d25ec70f7c0cf89c72b2159e68df89f5ec4697d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ff9adbc46832ae960811c87d25ec70f7c0cf89c72b2159e68df89f5ec4697d2->enter($__internal_5ff9adbc46832ae960811c87d25ec70f7c0cf89c72b2159e68df89f5ec4697d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_71ed919194b5c598f9ba3053b63c80215f6bbec1772de0416938f4f4d0d084e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71ed919194b5c598f9ba3053b63c80215f6bbec1772de0416938f4f4d0d084e5->enter($__internal_71ed919194b5c598f9ba3053b63c80215f6bbec1772de0416938f4f4d0d084e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 8
        echo "                ";
        $this->loadTemplate("AppBundle:admin/config/federation:form.html.twig", "AppBundle:admin/config/federation:add.html.twig", 8)->display($context);
        // line 9
        echo "            ";
        
        $__internal_71ed919194b5c598f9ba3053b63c80215f6bbec1772de0416938f4f4d0d084e5->leave($__internal_71ed919194b5c598f9ba3053b63c80215f6bbec1772de0416938f4f4d0d084e5_prof);

        
        $__internal_5ff9adbc46832ae960811c87d25ec70f7c0cf89c72b2159e68df89f5ec4697d2->leave($__internal_5ff9adbc46832ae960811c87d25ec70f7c0cf89c72b2159e68df89f5ec4697d2_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e05387704e29a0c37d5a5dc91aa276c0e4b35bb648234a2f7ca7c813aaa52a7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e05387704e29a0c37d5a5dc91aa276c0e4b35bb648234a2f7ca7c813aaa52a7a->enter($__internal_e05387704e29a0c37d5a5dc91aa276c0e4b35bb648234a2f7ca7c813aaa52a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_00920417ef32adec976a7f89e3505c69e44c04649084aea857417ba859c893d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00920417ef32adec976a7f89e3505c69e44c04649084aea857417ba859c893d7->enter($__internal_00920417ef32adec976a7f89e3505c69e44c04649084aea857417ba859c893d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_00920417ef32adec976a7f89e3505c69e44c04649084aea857417ba859c893d7->leave($__internal_00920417ef32adec976a7f89e3505c69e44c04649084aea857417ba859c893d7_prof);

        
        $__internal_e05387704e29a0c37d5a5dc91aa276c0e4b35bb648234a2f7ca7c813aaa52a7a->leave($__internal_e05387704e29a0c37d5a5dc91aa276c0e4b35bb648234a2f7ca7c813aaa52a7a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:admin/config/federation:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 14,  92 => 13,  82 => 9,  79 => 8,  70 => 7,  58 => 10,  56 => 7,  51 => 4,  42 => 3,  11 => 1,);
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

{% block content %}
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Add Federation</div>
        <div class=\"panel-body\">
            {% block form %}
                {% include('AppBundle:admin/config/federation:form.html.twig') %}
            {% endblock%}
        </div> 
    </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
{% endblock %}
", "AppBundle:admin/config/federation:add.html.twig", "/Applications/MAMP/htdocs/TTPO/app/Resources/AppBundle/views/admin/config/federation/add.html.twig");
    }
}
