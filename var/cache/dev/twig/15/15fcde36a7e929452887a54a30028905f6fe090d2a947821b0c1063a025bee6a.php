<?php

/* AppBundle:admin/config/person:index.html.twig */
class __TwigTemplate_14d1f1884ad983ff49ff4efdda254217eae56127fe2d6ca359e334e8cc76b689 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:admin/config/person:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b2287604514ba332c00650dc1a270c4dfe4ca48cf84d079d62c61c9a395afdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b2287604514ba332c00650dc1a270c4dfe4ca48cf84d079d62c61c9a395afdf->enter($__internal_1b2287604514ba332c00650dc1a270c4dfe4ca48cf84d079d62c61c9a395afdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:admin/config/person:index.html.twig"));

        $__internal_eb8066fafbea7646d549fb28e7f0321791d817cf4d133eb12b82772a35ba3c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb8066fafbea7646d549fb28e7f0321791d817cf4d133eb12b82772a35ba3c43->enter($__internal_eb8066fafbea7646d549fb28e7f0321791d817cf4d133eb12b82772a35ba3c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:admin/config/person:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b2287604514ba332c00650dc1a270c4dfe4ca48cf84d079d62c61c9a395afdf->leave($__internal_1b2287604514ba332c00650dc1a270c4dfe4ca48cf84d079d62c61c9a395afdf_prof);

        
        $__internal_eb8066fafbea7646d549fb28e7f0321791d817cf4d133eb12b82772a35ba3c43->leave($__internal_eb8066fafbea7646d549fb28e7f0321791d817cf4d133eb12b82772a35ba3c43_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_183a4230e0830109c91a742c5f677abb5be3dae105820cf5ad91fda2d601c218 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_183a4230e0830109c91a742c5f677abb5be3dae105820cf5ad91fda2d601c218->enter($__internal_183a4230e0830109c91a742c5f677abb5be3dae105820cf5ad91fda2d601c218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d38ec5a2f6e994b783a3afac0dabd4c7b94e4f58d739f796332f4e9066a08456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d38ec5a2f6e994b783a3afac0dabd4c7b94e4f58d739f796332f4e9066a08456->enter($__internal_d38ec5a2f6e994b783a3afac0dabd4c7b94e4f58d739f796332f4e9066a08456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Person List</div>
        <div class=\"panel-body\">
            <table class=\"table table-responsive\">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["persons"] ?? $this->getContext($context, "persons")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 16
            echo "                        <tr>
                            <th scope=\"row\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</th>
                            <td>";
            // line 18
            echo twig_escape_filter($this->env, $context["person"], "html", null, true);
            echo "</td>
                            <td>
                                <a class=\"btn btn-primary\" role=\"button\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("person_edit", array("person" => $this->getAttribute($context["person"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                                <a class=\"btn btn-danger\" role=\"button\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("person_delete", array("person" => $this->getAttribute($context["person"], "id", array()))), "html", null, true);
            echo "\">Delete</a>
                            </td>
                        </tr>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                </tbody>
            </table>
            <div class=\"row\">
                <div class=\"col-lg-3\"><a class=\"btn btn-primary\" role=\"button\" href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("person_add");
        echo "\">Add</a></div>
            </div>
        </div> 
    </div>
";
        
        $__internal_d38ec5a2f6e994b783a3afac0dabd4c7b94e4f58d739f796332f4e9066a08456->leave($__internal_d38ec5a2f6e994b783a3afac0dabd4c7b94e4f58d739f796332f4e9066a08456_prof);

        
        $__internal_183a4230e0830109c91a742c5f677abb5be3dae105820cf5ad91fda2d601c218->leave($__internal_183a4230e0830109c91a742c5f677abb5be3dae105820cf5ad91fda2d601c218_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_63933d8cf2c5fd477d61046c691b768f605c90c4f51abaf1b24f6ca9218ffc7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63933d8cf2c5fd477d61046c691b768f605c90c4f51abaf1b24f6ca9218ffc7e->enter($__internal_63933d8cf2c5fd477d61046c691b768f605c90c4f51abaf1b24f6ca9218ffc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_103eb244b1a73e37a8168c87a132a635acfe7eda1a11a9b4c77e72850eca9256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103eb244b1a73e37a8168c87a132a635acfe7eda1a11a9b4c77e72850eca9256->enter($__internal_103eb244b1a73e37a8168c87a132a635acfe7eda1a11a9b4c77e72850eca9256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_103eb244b1a73e37a8168c87a132a635acfe7eda1a11a9b4c77e72850eca9256->leave($__internal_103eb244b1a73e37a8168c87a132a635acfe7eda1a11a9b4c77e72850eca9256_prof);

        
        $__internal_63933d8cf2c5fd477d61046c691b768f605c90c4f51abaf1b24f6ca9218ffc7e->leave($__internal_63933d8cf2c5fd477d61046c691b768f605c90c4f51abaf1b24f6ca9218ffc7e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:admin/config/person:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 34,  135 => 33,  120 => 28,  115 => 25,  97 => 21,  93 => 20,  88 => 18,  84 => 17,  81 => 16,  64 => 15,  50 => 3,  41 => 2,  11 => 1,);
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
        <div class=\"panel-heading\">Person List</div>
        <div class=\"panel-body\">
            <table class=\"table table-responsive\">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for person in persons %}
                        <tr>
                            <th scope=\"row\">{{ loop.index }}</th>
                            <td>{{person}}</td>
                            <td>
                                <a class=\"btn btn-primary\" role=\"button\" href=\"{{path('person_edit',{'person': person.id})}}\">Edit</a>
                                <a class=\"btn btn-danger\" role=\"button\" href=\"{{path('person_delete',{'person': person.id})}}\">Delete</a>
                            </td>
                        </tr>
                    {% endfor%}
                </tbody>
            </table>
            <div class=\"row\">
                <div class=\"col-lg-3\"><a class=\"btn btn-primary\" role=\"button\" href=\"{{path('person_add')}}\">Add</a></div>
            </div>
        </div> 
    </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
{% endblock %}
", "AppBundle:admin/config/person:index.html.twig", "/Applications/MAMP/htdocs/TTPO/app/Resources/AppBundle/views/admin/config/person/index.html.twig");
    }
}
