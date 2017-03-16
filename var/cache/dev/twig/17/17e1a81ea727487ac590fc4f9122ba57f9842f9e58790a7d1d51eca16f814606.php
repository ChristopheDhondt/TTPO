<?php

/* AppBundle:user/person:add.html.twig */
class __TwigTemplate_82195ec00226b1a1f2a6a82fe96386747df040b91e727b7f439bc9d1b78b12b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:user/person:add.html.twig", 1);
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
        $__internal_179692faee9b81b40ae31a203791374329ebdc4944be298d1f53d6a5bee6c40b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_179692faee9b81b40ae31a203791374329ebdc4944be298d1f53d6a5bee6c40b->enter($__internal_179692faee9b81b40ae31a203791374329ebdc4944be298d1f53d6a5bee6c40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user/person:add.html.twig"));

        $__internal_8a996f49aa8fcb79c1fc1382eb5c6e0a93fa9f14c710b8fe5eb81ca55fd3c018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a996f49aa8fcb79c1fc1382eb5c6e0a93fa9f14c710b8fe5eb81ca55fd3c018->enter($__internal_8a996f49aa8fcb79c1fc1382eb5c6e0a93fa9f14c710b8fe5eb81ca55fd3c018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user/person:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_179692faee9b81b40ae31a203791374329ebdc4944be298d1f53d6a5bee6c40b->leave($__internal_179692faee9b81b40ae31a203791374329ebdc4944be298d1f53d6a5bee6c40b_prof);

        
        $__internal_8a996f49aa8fcb79c1fc1382eb5c6e0a93fa9f14c710b8fe5eb81ca55fd3c018->leave($__internal_8a996f49aa8fcb79c1fc1382eb5c6e0a93fa9f14c710b8fe5eb81ca55fd3c018_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ed08e4d1c5c277299a0ae1f97611fcb8a8b09b01dc014d458f8bacbaf57fbfe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed08e4d1c5c277299a0ae1f97611fcb8a8b09b01dc014d458f8bacbaf57fbfe0->enter($__internal_ed08e4d1c5c277299a0ae1f97611fcb8a8b09b01dc014d458f8bacbaf57fbfe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d1fcd567c1bbf828fe74ba790d36d474ed6844e6ccc9c1d55925259c9b224e48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1fcd567c1bbf828fe74ba790d36d474ed6844e6ccc9c1d55925259c9b224e48->enter($__internal_d1fcd567c1bbf828fe74ba790d36d474ed6844e6ccc9c1d55925259c9b224e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Add Person</div>
        <div class=\"panel-body\">
            ";
        // line 7
        $this->displayBlock('form', $context, $blocks);
        // line 10
        echo "        </div> 
    </div>
";
        
        $__internal_d1fcd567c1bbf828fe74ba790d36d474ed6844e6ccc9c1d55925259c9b224e48->leave($__internal_d1fcd567c1bbf828fe74ba790d36d474ed6844e6ccc9c1d55925259c9b224e48_prof);

        
        $__internal_ed08e4d1c5c277299a0ae1f97611fcb8a8b09b01dc014d458f8bacbaf57fbfe0->leave($__internal_ed08e4d1c5c277299a0ae1f97611fcb8a8b09b01dc014d458f8bacbaf57fbfe0_prof);

    }

    // line 7
    public function block_form($context, array $blocks = array())
    {
        $__internal_1c60ba0bc8421cc21409fb95ab378fcc58672190e6a3dd473a9dc8579f21e131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c60ba0bc8421cc21409fb95ab378fcc58672190e6a3dd473a9dc8579f21e131->enter($__internal_1c60ba0bc8421cc21409fb95ab378fcc58672190e6a3dd473a9dc8579f21e131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_48f4bc08db1698b32f58a193b15edba28d80d37f5243e93ade0126b66c32b3a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48f4bc08db1698b32f58a193b15edba28d80d37f5243e93ade0126b66c32b3a7->enter($__internal_48f4bc08db1698b32f58a193b15edba28d80d37f5243e93ade0126b66c32b3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 8
        echo "                ";
        $this->loadTemplate("AppBundle:common/form:person.html.twig", "AppBundle:user/person:add.html.twig", 8)->display($context);
        // line 9
        echo "            ";
        
        $__internal_48f4bc08db1698b32f58a193b15edba28d80d37f5243e93ade0126b66c32b3a7->leave($__internal_48f4bc08db1698b32f58a193b15edba28d80d37f5243e93ade0126b66c32b3a7_prof);

        
        $__internal_1c60ba0bc8421cc21409fb95ab378fcc58672190e6a3dd473a9dc8579f21e131->leave($__internal_1c60ba0bc8421cc21409fb95ab378fcc58672190e6a3dd473a9dc8579f21e131_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_19403bbb6b1491550b929432b34d148e27a813e0f082b837c09c528d17bbb4fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19403bbb6b1491550b929432b34d148e27a813e0f082b837c09c528d17bbb4fe->enter($__internal_19403bbb6b1491550b929432b34d148e27a813e0f082b837c09c528d17bbb4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_995f8e7efcd56c56ec9803ddf7990e1ce91cf69b141ea8d96fb36baf63befdd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_995f8e7efcd56c56ec9803ddf7990e1ce91cf69b141ea8d96fb36baf63befdd7->enter($__internal_995f8e7efcd56c56ec9803ddf7990e1ce91cf69b141ea8d96fb36baf63befdd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_995f8e7efcd56c56ec9803ddf7990e1ce91cf69b141ea8d96fb36baf63befdd7->leave($__internal_995f8e7efcd56c56ec9803ddf7990e1ce91cf69b141ea8d96fb36baf63befdd7_prof);

        
        $__internal_19403bbb6b1491550b929432b34d148e27a813e0f082b837c09c528d17bbb4fe->leave($__internal_19403bbb6b1491550b929432b34d148e27a813e0f082b837c09c528d17bbb4fe_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:user/person:add.html.twig";
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
        <div class=\"panel-heading\">Add Person</div>
        <div class=\"panel-body\">
            {% block form %}
                {% include('AppBundle:common/form:person.html.twig') %}
            {% endblock%}
        </div> 
    </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
{% endblock %}
", "AppBundle:user/person:add.html.twig", "/Applications/MAMP/htdocs/TTPO/app/Resources/AppBundle/views/user/person/add.html.twig");
    }
}
