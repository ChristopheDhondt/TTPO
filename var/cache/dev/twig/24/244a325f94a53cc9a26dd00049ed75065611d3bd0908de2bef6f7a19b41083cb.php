<?php

/* AppBundle:admin:index.html.twig */
class __TwigTemplate_c88a4932ef9557be8437a5418f452f718132ef07159aba754c7ec26f8a233e43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "AppBundle:admin:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63c62e21670baaa5bcdd6f6b72ec812be6af38dfda8b44cc717e0d2261c178ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63c62e21670baaa5bcdd6f6b72ec812be6af38dfda8b44cc717e0d2261c178ef->enter($__internal_63c62e21670baaa5bcdd6f6b72ec812be6af38dfda8b44cc717e0d2261c178ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:admin:index.html.twig"));

        $__internal_4172e129d533bf04a477f3487b4a3b10f3b03f47792a232cf174a002c164a7f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4172e129d533bf04a477f3487b4a3b10f3b03f47792a232cf174a002c164a7f6->enter($__internal_4172e129d533bf04a477f3487b4a3b10f3b03f47792a232cf174a002c164a7f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63c62e21670baaa5bcdd6f6b72ec812be6af38dfda8b44cc717e0d2261c178ef->leave($__internal_63c62e21670baaa5bcdd6f6b72ec812be6af38dfda8b44cc717e0d2261c178ef_prof);

        
        $__internal_4172e129d533bf04a477f3487b4a3b10f3b03f47792a232cf174a002c164a7f6->leave($__internal_4172e129d533bf04a477f3487b4a3b10f3b03f47792a232cf174a002c164a7f6_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1ffa7b8927debbfbc93a2dfb530ee892a146b3e07fde8bdb2daec825b189466d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ffa7b8927debbfbc93a2dfb530ee892a146b3e07fde8bdb2daec825b189466d->enter($__internal_1ffa7b8927debbfbc93a2dfb530ee892a146b3e07fde8bdb2daec825b189466d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3aeb56423c5e030e7ddf3b4762acd4905ded4475dc1aa94a602899648ff9d82d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aeb56423c5e030e7ddf3b4762acd4905ded4475dc1aa94a602899648ff9d82d->enter($__internal_3aeb56423c5e030e7ddf3b4762acd4905ded4475dc1aa94a602899648ff9d82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    Test
";
        
        $__internal_3aeb56423c5e030e7ddf3b4762acd4905ded4475dc1aa94a602899648ff9d82d->leave($__internal_3aeb56423c5e030e7ddf3b4762acd4905ded4475dc1aa94a602899648ff9d82d_prof);

        
        $__internal_1ffa7b8927debbfbc93a2dfb530ee892a146b3e07fde8bdb2daec825b189466d->leave($__internal_1ffa7b8927debbfbc93a2dfb530ee892a146b3e07fde8bdb2daec825b189466d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:admin:index.html.twig";
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
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block content %}
    Test
{% endblock %}
", "AppBundle:admin:index.html.twig", "/Applications/MAMP/htdocs/TTPO/app/Resources/AppBundle/views/admin/index.html.twig");
    }
}
