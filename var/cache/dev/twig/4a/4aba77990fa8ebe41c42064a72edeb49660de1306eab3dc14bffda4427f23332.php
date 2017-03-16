<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_8d54eaea8db51ff74410888e6644cc957b5aa5b06bd8ab222e95fbfb21eb316e extends Twig_Template
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
        $__internal_79d8ab3508770a96ddfbf934167432146e4b9e8af85015f7562e53d612d0729d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79d8ab3508770a96ddfbf934167432146e4b9e8af85015f7562e53d612d0729d->enter($__internal_79d8ab3508770a96ddfbf934167432146e4b9e8af85015f7562e53d612d0729d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_f5201304169738d3f7441a7303779f1974f5d5f05d0f2d4ea6b19443596e547a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5201304169738d3f7441a7303779f1974f5d5f05d0f2d4ea6b19443596e547a->enter($__internal_f5201304169738d3f7441a7303779f1974f5d5f05d0f2d4ea6b19443596e547a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_79d8ab3508770a96ddfbf934167432146e4b9e8af85015f7562e53d612d0729d->leave($__internal_79d8ab3508770a96ddfbf934167432146e4b9e8af85015f7562e53d612d0729d_prof);

        
        $__internal_f5201304169738d3f7441a7303779f1974f5d5f05d0f2d4ea6b19443596e547a->leave($__internal_f5201304169738d3f7441a7303779f1974f5d5f05d0f2d4ea6b19443596e547a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Applications/MAMP/htdocs/TTPO/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
