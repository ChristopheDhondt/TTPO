<?php

/* index.html.twig */
class __TwigTemplate_b016f3d0f1d09fb61fd455a207cf792719bd231f415d3de0ddf0946069ed4a65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
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
        $__internal_fb31f11d7421802265a57e7bb5b745b8099326b0c0ee16f7ac7f28e7383255b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb31f11d7421802265a57e7bb5b745b8099326b0c0ee16f7ac7f28e7383255b8->enter($__internal_fb31f11d7421802265a57e7bb5b745b8099326b0c0ee16f7ac7f28e7383255b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_2ab97b495c738f6f5a7b6daa683d53de008aa7785acde0425e1628c4377e76cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ab97b495c738f6f5a7b6daa683d53de008aa7785acde0425e1628c4377e76cb->enter($__internal_2ab97b495c738f6f5a7b6daa683d53de008aa7785acde0425e1628c4377e76cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb31f11d7421802265a57e7bb5b745b8099326b0c0ee16f7ac7f28e7383255b8->leave($__internal_fb31f11d7421802265a57e7bb5b745b8099326b0c0ee16f7ac7f28e7383255b8_prof);

        
        $__internal_2ab97b495c738f6f5a7b6daa683d53de008aa7785acde0425e1628c4377e76cb->leave($__internal_2ab97b495c738f6f5a7b6daa683d53de008aa7785acde0425e1628c4377e76cb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e75cbc43ab25a79701ee083c308bfc7509f5389764feb6536356667c8158fde7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e75cbc43ab25a79701ee083c308bfc7509f5389764feb6536356667c8158fde7->enter($__internal_e75cbc43ab25a79701ee083c308bfc7509f5389764feb6536356667c8158fde7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5788ecb1ea567cc973428f8e2b869268ea9828a15ddfed79533d2466255f7597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5788ecb1ea567cc973428f8e2b869268ea9828a15ddfed79533d2466255f7597->enter($__internal_5788ecb1ea567cc973428f8e2b869268ea9828a15ddfed79533d2466255f7597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Test
";
        
        $__internal_5788ecb1ea567cc973428f8e2b869268ea9828a15ddfed79533d2466255f7597->leave($__internal_5788ecb1ea567cc973428f8e2b869268ea9828a15ddfed79533d2466255f7597_prof);

        
        $__internal_e75cbc43ab25a79701ee083c308bfc7509f5389764feb6536356667c8158fde7->leave($__internal_e75cbc43ab25a79701ee083c308bfc7509f5389764feb6536356667c8158fde7_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
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
", "index.html.twig", "/Applications/MAMP/htdocs/TTPO/app/Resources/views/index.html.twig");
    }
}
