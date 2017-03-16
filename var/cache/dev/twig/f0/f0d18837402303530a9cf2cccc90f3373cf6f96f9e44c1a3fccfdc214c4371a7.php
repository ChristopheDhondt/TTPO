<?php

/* AppBundle:admin/config/federation:index.html.twig */
class __TwigTemplate_b4ac62a4c8eac4af590b39eda1ee599b3c7ea9e85f1ad381c2091f0b876e5807 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:admin/config/federation:index.html.twig", 1);
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
        $__internal_bebd221a1400a1d671d36819fe90ffcfa26a9fc4f4a14e5940dc96493b81a888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bebd221a1400a1d671d36819fe90ffcfa26a9fc4f4a14e5940dc96493b81a888->enter($__internal_bebd221a1400a1d671d36819fe90ffcfa26a9fc4f4a14e5940dc96493b81a888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:admin/config/federation:index.html.twig"));

        $__internal_46b4c57889d45dbd516889a0b6c6a36b2b3938e9699dc88b174599d8772260c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46b4c57889d45dbd516889a0b6c6a36b2b3938e9699dc88b174599d8772260c1->enter($__internal_46b4c57889d45dbd516889a0b6c6a36b2b3938e9699dc88b174599d8772260c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:admin/config/federation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bebd221a1400a1d671d36819fe90ffcfa26a9fc4f4a14e5940dc96493b81a888->leave($__internal_bebd221a1400a1d671d36819fe90ffcfa26a9fc4f4a14e5940dc96493b81a888_prof);

        
        $__internal_46b4c57889d45dbd516889a0b6c6a36b2b3938e9699dc88b174599d8772260c1->leave($__internal_46b4c57889d45dbd516889a0b6c6a36b2b3938e9699dc88b174599d8772260c1_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_d964b7bcfa048e461a3d238d66a8a2b4f5dd3da12103a878296bda60ad2c92af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d964b7bcfa048e461a3d238d66a8a2b4f5dd3da12103a878296bda60ad2c92af->enter($__internal_d964b7bcfa048e461a3d238d66a8a2b4f5dd3da12103a878296bda60ad2c92af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e73dbf56c9535d2ccf385c2c0bb022d6d33598199eb152955acc563d7c5e62c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e73dbf56c9535d2ccf385c2c0bb022d6d33598199eb152955acc563d7c5e62c9->enter($__internal_e73dbf56c9535d2ccf385c2c0bb022d6d33598199eb152955acc563d7c5e62c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Federations List</div>
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
        $context['_seq'] = twig_ensure_traversable(($context["federations"] ?? $this->getContext($context, "federations")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["federation"]) {
            // line 16
            echo "                        <tr>
                            <th scope=\"row\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</th>
                            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["federation"], "getName", array(0 => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array())), "method"), "html", null, true);
            echo "</td>
                            <td>
                                <a class=\"btn btn-primary\" role=\"button\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("federation_edit", array("federation" => $this->getAttribute($context["federation"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                                <a class=\"btn btn-danger\" role=\"button\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("federation_delete", array("federation" => $this->getAttribute($context["federation"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['federation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                </tbody>
            </table>
            <div class=\"row\">
                <div class=\"col-lg-3\"><a class=\"btn btn-primary\" role=\"button\" href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("federation_add");
        echo "\">Add</a></div>
            </div>
        </div> 
    </div>
";
        
        $__internal_e73dbf56c9535d2ccf385c2c0bb022d6d33598199eb152955acc563d7c5e62c9->leave($__internal_e73dbf56c9535d2ccf385c2c0bb022d6d33598199eb152955acc563d7c5e62c9_prof);

        
        $__internal_d964b7bcfa048e461a3d238d66a8a2b4f5dd3da12103a878296bda60ad2c92af->leave($__internal_d964b7bcfa048e461a3d238d66a8a2b4f5dd3da12103a878296bda60ad2c92af_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5ac705d6a358fd28364aa55983b4f8c8d8aa382df2566a240deea8dd647b74fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ac705d6a358fd28364aa55983b4f8c8d8aa382df2566a240deea8dd647b74fa->enter($__internal_5ac705d6a358fd28364aa55983b4f8c8d8aa382df2566a240deea8dd647b74fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7126da224c3a9f489ca0a899c85a833e9a704edc9c99696d0f4e3730d4f92745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7126da224c3a9f489ca0a899c85a833e9a704edc9c99696d0f4e3730d4f92745->enter($__internal_7126da224c3a9f489ca0a899c85a833e9a704edc9c99696d0f4e3730d4f92745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_7126da224c3a9f489ca0a899c85a833e9a704edc9c99696d0f4e3730d4f92745->leave($__internal_7126da224c3a9f489ca0a899c85a833e9a704edc9c99696d0f4e3730d4f92745_prof);

        
        $__internal_5ac705d6a358fd28364aa55983b4f8c8d8aa382df2566a240deea8dd647b74fa->leave($__internal_5ac705d6a358fd28364aa55983b4f8c8d8aa382df2566a240deea8dd647b74fa_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:admin/config/federation:index.html.twig";
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
        <div class=\"panel-heading\">Federations List</div>
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
                    {% for federation in federations %}
                        <tr>
                            <th scope=\"row\">{{ loop.index }}</th>
                            <td>{{federation.getName(app.request.locale)}}</td>
                            <td>
                                <a class=\"btn btn-primary\" role=\"button\" href=\"{{path('federation_edit',{'federation': federation.id})}}\">Edit</a>
                                <a class=\"btn btn-danger\" role=\"button\" href=\"{{path('federation_delete',{'federation': federation.id})}}\">Delete</a>
                            </td>
                        </tr>
                    {% endfor%}
                </tbody>
            </table>
            <div class=\"row\">
                <div class=\"col-lg-3\"><a class=\"btn btn-primary\" role=\"button\" href=\"{{path('federation_add')}}\">Add</a></div>
            </div>
        </div> 
    </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
{% endblock %}
", "AppBundle:admin/config/federation:index.html.twig", "/Applications/MAMP/htdocs/TTPO/app/Resources/AppBundle/views/admin/config/federation/index.html.twig");
    }
}
