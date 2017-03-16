<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ce5bf4899c6eb9d569b0d64371087905d29a205298d10465f89f099107a81659 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bcb81d4f042431070cd2e30ee1254268ea120bac927231cfcdd74121f0b2657c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcb81d4f042431070cd2e30ee1254268ea120bac927231cfcdd74121f0b2657c->enter($__internal_bcb81d4f042431070cd2e30ee1254268ea120bac927231cfcdd74121f0b2657c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c634092cb7a4e8e0f0ae277d1151f86b1e5b47ff94ac8ada0ef320f7e7b67b0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c634092cb7a4e8e0f0ae277d1151f86b1e5b47ff94ac8ada0ef320f7e7b67b0a->enter($__internal_c634092cb7a4e8e0f0ae277d1151f86b1e5b47ff94ac8ada0ef320f7e7b67b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcb81d4f042431070cd2e30ee1254268ea120bac927231cfcdd74121f0b2657c->leave($__internal_bcb81d4f042431070cd2e30ee1254268ea120bac927231cfcdd74121f0b2657c_prof);

        
        $__internal_c634092cb7a4e8e0f0ae277d1151f86b1e5b47ff94ac8ada0ef320f7e7b67b0a->leave($__internal_c634092cb7a4e8e0f0ae277d1151f86b1e5b47ff94ac8ada0ef320f7e7b67b0a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_43c2cb02fd5572e6093ed1d633b651c33987b1bf6c7670d495610fffcfabb483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43c2cb02fd5572e6093ed1d633b651c33987b1bf6c7670d495610fffcfabb483->enter($__internal_43c2cb02fd5572e6093ed1d633b651c33987b1bf6c7670d495610fffcfabb483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_24bc26dccebce31c1460be5433f8f8e19202c4993bdf35c6ca8fb6fd7059778a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24bc26dccebce31c1460be5433f8f8e19202c4993bdf35c6ca8fb6fd7059778a->enter($__internal_24bc26dccebce31c1460be5433f8f8e19202c4993bdf35c6ca8fb6fd7059778a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_24bc26dccebce31c1460be5433f8f8e19202c4993bdf35c6ca8fb6fd7059778a->leave($__internal_24bc26dccebce31c1460be5433f8f8e19202c4993bdf35c6ca8fb6fd7059778a_prof);

        
        $__internal_43c2cb02fd5572e6093ed1d633b651c33987b1bf6c7670d495610fffcfabb483->leave($__internal_43c2cb02fd5572e6093ed1d633b651c33987b1bf6c7670d495610fffcfabb483_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7e92680df922375c1139fea436e61fb4baa6085f954f93f8732ed30c366c42e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e92680df922375c1139fea436e61fb4baa6085f954f93f8732ed30c366c42e0->enter($__internal_7e92680df922375c1139fea436e61fb4baa6085f954f93f8732ed30c366c42e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_51017f0ffe9c270ad2d1373cb080c97350d7925ccceaec3860b6bff0cebd4864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51017f0ffe9c270ad2d1373cb080c97350d7925ccceaec3860b6bff0cebd4864->enter($__internal_51017f0ffe9c270ad2d1373cb080c97350d7925ccceaec3860b6bff0cebd4864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_51017f0ffe9c270ad2d1373cb080c97350d7925ccceaec3860b6bff0cebd4864->leave($__internal_51017f0ffe9c270ad2d1373cb080c97350d7925ccceaec3860b6bff0cebd4864_prof);

        
        $__internal_7e92680df922375c1139fea436e61fb4baa6085f954f93f8732ed30c366c42e0->leave($__internal_7e92680df922375c1139fea436e61fb4baa6085f954f93f8732ed30c366c42e0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_71bec9896ea0221c27f370c850b3c750ef2860c3e25c783c9e0b63b02031fa16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71bec9896ea0221c27f370c850b3c750ef2860c3e25c783c9e0b63b02031fa16->enter($__internal_71bec9896ea0221c27f370c850b3c750ef2860c3e25c783c9e0b63b02031fa16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f4ac9dfca06315c1264e118bd4a01fe1803c320075f95c89a48182f853d39bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4ac9dfca06315c1264e118bd4a01fe1803c320075f95c89a48182f853d39bec->enter($__internal_f4ac9dfca06315c1264e118bd4a01fe1803c320075f95c89a48182f853d39bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f4ac9dfca06315c1264e118bd4a01fe1803c320075f95c89a48182f853d39bec->leave($__internal_f4ac9dfca06315c1264e118bd4a01fe1803c320075f95c89a48182f853d39bec_prof);

        
        $__internal_71bec9896ea0221c27f370c850b3c750ef2860c3e25c783c9e0b63b02031fa16->leave($__internal_71bec9896ea0221c27f370c850b3c750ef2860c3e25c783c9e0b63b02031fa16_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/TTPO/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
