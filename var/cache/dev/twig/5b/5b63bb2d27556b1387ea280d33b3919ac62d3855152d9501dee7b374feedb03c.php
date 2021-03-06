<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_ab3f46b518a1436d6b67b55cd00da986ea39fb35074722fdc93046e9d57fbe7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c84447a7caae530d08ef9d0cd910e01fd01ca809afef5ba23def1a3b02acf4ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c84447a7caae530d08ef9d0cd910e01fd01ca809afef5ba23def1a3b02acf4ef->enter($__internal_c84447a7caae530d08ef9d0cd910e01fd01ca809afef5ba23def1a3b02acf4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f6f763e83d2b77b588b5bf2472246a76b17145e546ef1216333084525f5f771d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6f763e83d2b77b588b5bf2472246a76b17145e546ef1216333084525f5f771d->enter($__internal_f6f763e83d2b77b588b5bf2472246a76b17145e546ef1216333084525f5f771d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c84447a7caae530d08ef9d0cd910e01fd01ca809afef5ba23def1a3b02acf4ef->leave($__internal_c84447a7caae530d08ef9d0cd910e01fd01ca809afef5ba23def1a3b02acf4ef_prof);

        
        $__internal_f6f763e83d2b77b588b5bf2472246a76b17145e546ef1216333084525f5f771d->leave($__internal_f6f763e83d2b77b588b5bf2472246a76b17145e546ef1216333084525f5f771d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_02005bec4e41fd06eb1003fceaf0e6f8e0d7eb0d188f07b5adfc35989ea513a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02005bec4e41fd06eb1003fceaf0e6f8e0d7eb0d188f07b5adfc35989ea513a7->enter($__internal_02005bec4e41fd06eb1003fceaf0e6f8e0d7eb0d188f07b5adfc35989ea513a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_620498cbea772bce2542989001f31a7d9f40720cee66dc554525a8411985064b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_620498cbea772bce2542989001f31a7d9f40720cee66dc554525a8411985064b->enter($__internal_620498cbea772bce2542989001f31a7d9f40720cee66dc554525a8411985064b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_620498cbea772bce2542989001f31a7d9f40720cee66dc554525a8411985064b->leave($__internal_620498cbea772bce2542989001f31a7d9f40720cee66dc554525a8411985064b_prof);

        
        $__internal_02005bec4e41fd06eb1003fceaf0e6f8e0d7eb0d188f07b5adfc35989ea513a7->leave($__internal_02005bec4e41fd06eb1003fceaf0e6f8e0d7eb0d188f07b5adfc35989ea513a7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/MAMP/htdocs/TTPO/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
