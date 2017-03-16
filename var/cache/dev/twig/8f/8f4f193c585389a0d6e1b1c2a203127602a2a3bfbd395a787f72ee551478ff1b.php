<?php

/* AppBundle:public:homepage.html.twig */
class __TwigTemplate_e8f6dbb666a1d74d88055d8f2d20f1d1cfe082b67d6ae4e86cf95d82ecce5353 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:public:homepage.html.twig", 1);
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
        $__internal_99c8ee98a3c802891ceac275308d08c673fab0909e78efe05554415ee3922b66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99c8ee98a3c802891ceac275308d08c673fab0909e78efe05554415ee3922b66->enter($__internal_99c8ee98a3c802891ceac275308d08c673fab0909e78efe05554415ee3922b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:public:homepage.html.twig"));

        $__internal_e66c2731b782d911e776fb9c2cb7b63d70c179b819d21815235720eee0ada618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e66c2731b782d911e776fb9c2cb7b63d70c179b819d21815235720eee0ada618->enter($__internal_e66c2731b782d911e776fb9c2cb7b63d70c179b819d21815235720eee0ada618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:public:homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99c8ee98a3c802891ceac275308d08c673fab0909e78efe05554415ee3922b66->leave($__internal_99c8ee98a3c802891ceac275308d08c673fab0909e78efe05554415ee3922b66_prof);

        
        $__internal_e66c2731b782d911e776fb9c2cb7b63d70c179b819d21815235720eee0ada618->leave($__internal_e66c2731b782d911e776fb9c2cb7b63d70c179b819d21815235720eee0ada618_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_d0c90915dd056ece7a2aa1035b43607dfec3d81f5a391e8dde514a60f8fca437 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0c90915dd056ece7a2aa1035b43607dfec3d81f5a391e8dde514a60f8fca437->enter($__internal_d0c90915dd056ece7a2aa1035b43607dfec3d81f5a391e8dde514a60f8fca437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_15e4854a38c7a3305af3cf0ea1b8857cfe3e6747ec50e33b10704106ad701562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15e4854a38c7a3305af3cf0ea1b8857cfe3e6747ec50e33b10704106ad701562->enter($__internal_15e4854a38c7a3305af3cf0ea1b8857cfe3e6747ec50e33b10704106ad701562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("person_add");
        echo "\">Inscrivez vous</a>
";
        
        $__internal_15e4854a38c7a3305af3cf0ea1b8857cfe3e6747ec50e33b10704106ad701562->leave($__internal_15e4854a38c7a3305af3cf0ea1b8857cfe3e6747ec50e33b10704106ad701562_prof);

        
        $__internal_d0c90915dd056ece7a2aa1035b43607dfec3d81f5a391e8dde514a60f8fca437->leave($__internal_d0c90915dd056ece7a2aa1035b43607dfec3d81f5a391e8dde514a60f8fca437_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9d5ffcbbde673ae492fdde645f2fb00ff7a685a4b633a565a1140d2de67145b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d5ffcbbde673ae492fdde645f2fb00ff7a685a4b633a565a1140d2de67145b4->enter($__internal_9d5ffcbbde673ae492fdde645f2fb00ff7a685a4b633a565a1140d2de67145b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f8815e822a72937cfb01267fd9ee56eef382dc51dd2c64857b29a091587a8589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8815e822a72937cfb01267fd9ee56eef382dc51dd2c64857b29a091587a8589->enter($__internal_f8815e822a72937cfb01267fd9ee56eef382dc51dd2c64857b29a091587a8589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_f8815e822a72937cfb01267fd9ee56eef382dc51dd2c64857b29a091587a8589->leave($__internal_f8815e822a72937cfb01267fd9ee56eef382dc51dd2c64857b29a091587a8589_prof);

        
        $__internal_9d5ffcbbde673ae492fdde645f2fb00ff7a685a4b633a565a1140d2de67145b4->leave($__internal_9d5ffcbbde673ae492fdde645f2fb00ff7a685a4b633a565a1140d2de67145b4_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:public:homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
    <a href=\"{{path('person_add')}}\">Inscrivez vous</a>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
{% endblock %}
", "AppBundle:public:homepage.html.twig", "/Applications/MAMP/htdocs/TTPO/app/Resources/AppBundle/views/public/homepage.html.twig");
    }
}
