<?php

/* AppBundle:admin/config/federation:edit.html.twig */
class __TwigTemplate_7107a2654c94ad227683a2d9d263f6dac128c931316419f14a8508fed1a0aa60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:admin/config/federation:edit.html.twig", 1);
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
        $__internal_ef439d13be05fce34c05e1f2329f745051b0bc261ed52851f101a303aa8cdb02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef439d13be05fce34c05e1f2329f745051b0bc261ed52851f101a303aa8cdb02->enter($__internal_ef439d13be05fce34c05e1f2329f745051b0bc261ed52851f101a303aa8cdb02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:admin/config/federation:edit.html.twig"));

        $__internal_4bdd7a2f1e5343bfb8648e033da9b40b0bf270cb69c8f518ac743cc25aff6670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bdd7a2f1e5343bfb8648e033da9b40b0bf270cb69c8f518ac743cc25aff6670->enter($__internal_4bdd7a2f1e5343bfb8648e033da9b40b0bf270cb69c8f518ac743cc25aff6670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:admin/config/federation:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef439d13be05fce34c05e1f2329f745051b0bc261ed52851f101a303aa8cdb02->leave($__internal_ef439d13be05fce34c05e1f2329f745051b0bc261ed52851f101a303aa8cdb02_prof);

        
        $__internal_4bdd7a2f1e5343bfb8648e033da9b40b0bf270cb69c8f518ac743cc25aff6670->leave($__internal_4bdd7a2f1e5343bfb8648e033da9b40b0bf270cb69c8f518ac743cc25aff6670_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_844bf0bb21fcb873ba19515ec410354559f4d66fdce50ee8c0593d67793ef1ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_844bf0bb21fcb873ba19515ec410354559f4d66fdce50ee8c0593d67793ef1ce->enter($__internal_844bf0bb21fcb873ba19515ec410354559f4d66fdce50ee8c0593d67793ef1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3ef7659e832afa5584dd66cac122efa3d81835aaa49fd0854e6c64ecb6172802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ef7659e832afa5584dd66cac122efa3d81835aaa49fd0854e6c64ecb6172802->enter($__internal_3ef7659e832afa5584dd66cac122efa3d81835aaa49fd0854e6c64ecb6172802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Federations List</div>
        <div class=\"panel-body\">
            ";
        // line 7
        $this->displayBlock('form', $context, $blocks);
        // line 10
        echo "        </div> 
    </div>
";
        
        $__internal_3ef7659e832afa5584dd66cac122efa3d81835aaa49fd0854e6c64ecb6172802->leave($__internal_3ef7659e832afa5584dd66cac122efa3d81835aaa49fd0854e6c64ecb6172802_prof);

        
        $__internal_844bf0bb21fcb873ba19515ec410354559f4d66fdce50ee8c0593d67793ef1ce->leave($__internal_844bf0bb21fcb873ba19515ec410354559f4d66fdce50ee8c0593d67793ef1ce_prof);

    }

    // line 7
    public function block_form($context, array $blocks = array())
    {
        $__internal_7e74f2995aa28e527fbe65212850fd8b5308bb233c880e64b34c8cb277f20b3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e74f2995aa28e527fbe65212850fd8b5308bb233c880e64b34c8cb277f20b3f->enter($__internal_7e74f2995aa28e527fbe65212850fd8b5308bb233c880e64b34c8cb277f20b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_724391681b0a92d166c262b22194651de8dbf75afa89377f5c20f30ba40a8243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_724391681b0a92d166c262b22194651de8dbf75afa89377f5c20f30ba40a8243->enter($__internal_724391681b0a92d166c262b22194651de8dbf75afa89377f5c20f30ba40a8243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 8
        echo "                ";
        $this->loadTemplate("AppBundle:admin/config/federation:form.html.twig", "AppBundle:admin/config/federation:edit.html.twig", 8)->display($context);
        // line 9
        echo "            ";
        
        $__internal_724391681b0a92d166c262b22194651de8dbf75afa89377f5c20f30ba40a8243->leave($__internal_724391681b0a92d166c262b22194651de8dbf75afa89377f5c20f30ba40a8243_prof);

        
        $__internal_7e74f2995aa28e527fbe65212850fd8b5308bb233c880e64b34c8cb277f20b3f->leave($__internal_7e74f2995aa28e527fbe65212850fd8b5308bb233c880e64b34c8cb277f20b3f_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7f18ecc3bf92d2084afa430829c0cee964bac6b2074ba9ebcce8d9588ceee2e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f18ecc3bf92d2084afa430829c0cee964bac6b2074ba9ebcce8d9588ceee2e1->enter($__internal_7f18ecc3bf92d2084afa430829c0cee964bac6b2074ba9ebcce8d9588ceee2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_95ea700673cc67e952701ebd174552e54a0316b290cbbc8d7a98a9f0f742ca84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95ea700673cc67e952701ebd174552e54a0316b290cbbc8d7a98a9f0f742ca84->enter($__internal_95ea700673cc67e952701ebd174552e54a0316b290cbbc8d7a98a9f0f742ca84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_95ea700673cc67e952701ebd174552e54a0316b290cbbc8d7a98a9f0f742ca84->leave($__internal_95ea700673cc67e952701ebd174552e54a0316b290cbbc8d7a98a9f0f742ca84_prof);

        
        $__internal_7f18ecc3bf92d2084afa430829c0cee964bac6b2074ba9ebcce8d9588ceee2e1->leave($__internal_7f18ecc3bf92d2084afa430829c0cee964bac6b2074ba9ebcce8d9588ceee2e1_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:admin/config/federation:edit.html.twig";
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
        <div class=\"panel-heading\">Federations List</div>
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
", "AppBundle:admin/config/federation:edit.html.twig", "/Applications/MAMP/htdocs/TTPO/app/Resources/AppBundle/views/admin/config/federation/edit.html.twig");
    }
}
