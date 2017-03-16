<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_58ae275da014868c29e1209e51ff8d7e621e0865f1eb3e436e0963d7ad4565dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_3cdb9a0797cd46ae2875bcf2c0ed449f6b4e6b834ade4982187e601aa13d6f16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cdb9a0797cd46ae2875bcf2c0ed449f6b4e6b834ade4982187e601aa13d6f16->enter($__internal_3cdb9a0797cd46ae2875bcf2c0ed449f6b4e6b834ade4982187e601aa13d6f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1f262ae6e58c8fed6bd7d8badbaaea83a88d7b0c02a624ca5a7312fea4d3df90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f262ae6e58c8fed6bd7d8badbaaea83a88d7b0c02a624ca5a7312fea4d3df90->enter($__internal_1f262ae6e58c8fed6bd7d8badbaaea83a88d7b0c02a624ca5a7312fea4d3df90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cdb9a0797cd46ae2875bcf2c0ed449f6b4e6b834ade4982187e601aa13d6f16->leave($__internal_3cdb9a0797cd46ae2875bcf2c0ed449f6b4e6b834ade4982187e601aa13d6f16_prof);

        
        $__internal_1f262ae6e58c8fed6bd7d8badbaaea83a88d7b0c02a624ca5a7312fea4d3df90->leave($__internal_1f262ae6e58c8fed6bd7d8badbaaea83a88d7b0c02a624ca5a7312fea4d3df90_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8c0258b61dca1561899a9ce3eaa36c357c588a827f307498ce6dc7078766f515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c0258b61dca1561899a9ce3eaa36c357c588a827f307498ce6dc7078766f515->enter($__internal_8c0258b61dca1561899a9ce3eaa36c357c588a827f307498ce6dc7078766f515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ad0b63d6a24017173e2c3d06338e2fbd857252c44375c71560b292e9545add29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad0b63d6a24017173e2c3d06338e2fbd857252c44375c71560b292e9545add29->enter($__internal_ad0b63d6a24017173e2c3d06338e2fbd857252c44375c71560b292e9545add29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ad0b63d6a24017173e2c3d06338e2fbd857252c44375c71560b292e9545add29->leave($__internal_ad0b63d6a24017173e2c3d06338e2fbd857252c44375c71560b292e9545add29_prof);

        
        $__internal_8c0258b61dca1561899a9ce3eaa36c357c588a827f307498ce6dc7078766f515->leave($__internal_8c0258b61dca1561899a9ce3eaa36c357c588a827f307498ce6dc7078766f515_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d05b500f55f636a852365fbe7e7239e318a09a5dba3d8ecfa6e543b8febee2e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d05b500f55f636a852365fbe7e7239e318a09a5dba3d8ecfa6e543b8febee2e3->enter($__internal_d05b500f55f636a852365fbe7e7239e318a09a5dba3d8ecfa6e543b8febee2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6d9f03b0309c94a5143a4037512a0d941e596e1d0f63fb00255bf037a49d586a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d9f03b0309c94a5143a4037512a0d941e596e1d0f63fb00255bf037a49d586a->enter($__internal_6d9f03b0309c94a5143a4037512a0d941e596e1d0f63fb00255bf037a49d586a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_6d9f03b0309c94a5143a4037512a0d941e596e1d0f63fb00255bf037a49d586a->leave($__internal_6d9f03b0309c94a5143a4037512a0d941e596e1d0f63fb00255bf037a49d586a_prof);

        
        $__internal_d05b500f55f636a852365fbe7e7239e318a09a5dba3d8ecfa6e543b8febee2e3->leave($__internal_d05b500f55f636a852365fbe7e7239e318a09a5dba3d8ecfa6e543b8febee2e3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2c2b458cdbe0910e9b49236a2d225b17d6254365a6e62135576a6168d2f83a49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c2b458cdbe0910e9b49236a2d225b17d6254365a6e62135576a6168d2f83a49->enter($__internal_2c2b458cdbe0910e9b49236a2d225b17d6254365a6e62135576a6168d2f83a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_36ba3957c4708da3742cdfe4cae4b76d6027a6ad57994b792f3c65708ee74a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36ba3957c4708da3742cdfe4cae4b76d6027a6ad57994b792f3c65708ee74a99->enter($__internal_36ba3957c4708da3742cdfe4cae4b76d6027a6ad57994b792f3c65708ee74a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_36ba3957c4708da3742cdfe4cae4b76d6027a6ad57994b792f3c65708ee74a99->leave($__internal_36ba3957c4708da3742cdfe4cae4b76d6027a6ad57994b792f3c65708ee74a99_prof);

        
        $__internal_2c2b458cdbe0910e9b49236a2d225b17d6254365a6e62135576a6168d2f83a49->leave($__internal_2c2b458cdbe0910e9b49236a2d225b17d6254365a6e62135576a6168d2f83a49_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/TTPO/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
