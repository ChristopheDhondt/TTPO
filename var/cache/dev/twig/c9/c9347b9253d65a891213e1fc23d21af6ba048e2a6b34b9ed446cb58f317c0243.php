<?php

/* base.html.twig */
class __TwigTemplate_bafb64054aee0017f1f1d2ee36bbe790d70b11dd9a8d3db12de8bef858c3757a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'mainMenu' => array($this, 'block_mainMenu'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9ed55cdd874ef0cbea3ca1db55430da50f95a3caa34ccec12d7697dbb8febb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9ed55cdd874ef0cbea3ca1db55430da50f95a3caa34ccec12d7697dbb8febb0->enter($__internal_f9ed55cdd874ef0cbea3ca1db55430da50f95a3caa34ccec12d7697dbb8febb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_8da1e131de476b02ce445f9b5b6fcf40e840a695584631aaa2336d236c406138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da1e131de476b02ce445f9b5b6fcf40e840a695584631aaa2336d236c406138->enter($__internal_8da1e131de476b02ce445f9b5b6fcf40e840a695584631aaa2336d236c406138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 15
        echo "    </head>
    <body>    
        <div class=\"container-fluid\">
            ";
        // line 18
        $this->displayBlock('header', $context, $blocks);
        // line 23
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "        
        </div>  
        ";
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "    </body>
</html>
";
        
        $__internal_f9ed55cdd874ef0cbea3ca1db55430da50f95a3caa34ccec12d7697dbb8febb0->leave($__internal_f9ed55cdd874ef0cbea3ca1db55430da50f95a3caa34ccec12d7697dbb8febb0_prof);

        
        $__internal_8da1e131de476b02ce445f9b5b6fcf40e840a695584631aaa2336d236c406138->leave($__internal_8da1e131de476b02ce445f9b5b6fcf40e840a695584631aaa2336d236c406138_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_1472b702989d1402bd1447fdcd4dd567e5f1f3d31bae6550daa3521ee6e624d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1472b702989d1402bd1447fdcd4dd567e5f1f3d31bae6550daa3521ee6e624d3->enter($__internal_1472b702989d1402bd1447fdcd4dd567e5f1f3d31bae6550daa3521ee6e624d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9e12c3994469bc1ca882b2618625f52899d21abea41c1be73d18fd32cec2426a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e12c3994469bc1ca882b2618625f52899d21abea41c1be73d18fd32cec2426a->enter($__internal_9e12c3994469bc1ca882b2618625f52899d21abea41c1be73d18fd32cec2426a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "            <meta charset=\"UTF-8\" />            
            <title>
                ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "            </title>            
            ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "            
            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />     
        ";
        
        $__internal_9e12c3994469bc1ca882b2618625f52899d21abea41c1be73d18fd32cec2426a->leave($__internal_9e12c3994469bc1ca882b2618625f52899d21abea41c1be73d18fd32cec2426a_prof);

        
        $__internal_1472b702989d1402bd1447fdcd4dd567e5f1f3d31bae6550daa3521ee6e624d3->leave($__internal_1472b702989d1402bd1447fdcd4dd567e5f1f3d31bae6550daa3521ee6e624d3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0af0fd4b6498bb7af7f989ddb74efa8f3f2ff5f575fd45e9ffa62fdeb457f921 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0af0fd4b6498bb7af7f989ddb74efa8f3f2ff5f575fd45e9ffa62fdeb457f921->enter($__internal_0af0fd4b6498bb7af7f989ddb74efa8f3f2ff5f575fd45e9ffa62fdeb457f921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d753be2bc5a566eaac29191daf01fcbd93005c268190c1c97a4ed1b8d14422af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d753be2bc5a566eaac29191daf01fcbd93005c268190c1c97a4ed1b8d14422af->enter($__internal_d753be2bc5a566eaac29191daf01fcbd93005c268190c1c97a4ed1b8d14422af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Taekwondo Tournament Online";
        
        $__internal_d753be2bc5a566eaac29191daf01fcbd93005c268190c1c97a4ed1b8d14422af->leave($__internal_d753be2bc5a566eaac29191daf01fcbd93005c268190c1c97a4ed1b8d14422af_prof);

        
        $__internal_0af0fd4b6498bb7af7f989ddb74efa8f3f2ff5f575fd45e9ffa62fdeb457f921->leave($__internal_0af0fd4b6498bb7af7f989ddb74efa8f3f2ff5f575fd45e9ffa62fdeb457f921_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cc16d413be29886b52f70b1fdeba7b9fb7d810305977f034a0a4e7f7811e5702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc16d413be29886b52f70b1fdeba7b9fb7d810305977f034a0a4e7f7811e5702->enter($__internal_cc16d413be29886b52f70b1fdeba7b9fb7d810305977f034a0a4e7f7811e5702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ba571c2e82e7a89f4c0a97dd2e6a4792d812f9184d959a94aa9d25082c77f3eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba571c2e82e7a89f4c0a97dd2e6a4792d812f9184d959a94aa9d25082c77f3eb->enter($__internal_ba571c2e82e7a89f4c0a97dd2e6a4792d812f9184d959a94aa9d25082c77f3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "                <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
                <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" />
            ";
        
        $__internal_ba571c2e82e7a89f4c0a97dd2e6a4792d812f9184d959a94aa9d25082c77f3eb->leave($__internal_ba571c2e82e7a89f4c0a97dd2e6a4792d812f9184d959a94aa9d25082c77f3eb_prof);

        
        $__internal_cc16d413be29886b52f70b1fdeba7b9fb7d810305977f034a0a4e7f7811e5702->leave($__internal_cc16d413be29886b52f70b1fdeba7b9fb7d810305977f034a0a4e7f7811e5702_prof);

    }

    // line 18
    public function block_header($context, array $blocks = array())
    {
        $__internal_f08fa3a25b4ee4f8ffb69feecb145ffc6f090e09de6100058a3379a565b79d6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f08fa3a25b4ee4f8ffb69feecb145ffc6f090e09de6100058a3379a565b79d6a->enter($__internal_f08fa3a25b4ee4f8ffb69feecb145ffc6f090e09de6100058a3379a565b79d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_36ebbc368c413181217848284b93ffbab07e940ff80d92cd91b4461792a66b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36ebbc368c413181217848284b93ffbab07e940ff80d92cd91b4461792a66b37->enter($__internal_36ebbc368c413181217848284b93ffbab07e940ff80d92cd91b4461792a66b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 19
        echo "                <div class=\"page-header\">
                    <h1>Taekwondo Tournament Online <small>a easy use to manage your competitions</small></h1>
                </div>
            ";
        
        $__internal_36ebbc368c413181217848284b93ffbab07e940ff80d92cd91b4461792a66b37->leave($__internal_36ebbc368c413181217848284b93ffbab07e940ff80d92cd91b4461792a66b37_prof);

        
        $__internal_f08fa3a25b4ee4f8ffb69feecb145ffc6f090e09de6100058a3379a565b79d6a->leave($__internal_f08fa3a25b4ee4f8ffb69feecb145ffc6f090e09de6100058a3379a565b79d6a_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c8c9bf03e100016a45baaa738a26445aed5166dba50ce4a3f758e32f1379330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c8c9bf03e100016a45baaa738a26445aed5166dba50ce4a3f758e32f1379330->enter($__internal_2c8c9bf03e100016a45baaa738a26445aed5166dba50ce4a3f758e32f1379330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fb2a7cc63acef55af256fd64ef5bf118932f57f22a9f40f3af2c35182998c814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb2a7cc63acef55af256fd64ef5bf118932f57f22a9f40f3af2c35182998c814->enter($__internal_fb2a7cc63acef55af256fd64ef5bf118932f57f22a9f40f3af2c35182998c814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "
                    ";
        // line 25
        $this->displayBlock('mainMenu', $context, $blocks);
        // line 49
        echo "                    ";
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "                    ";
        $this->displayBlock('footer', $context, $blocks);
        echo "                

            ";
        
        $__internal_fb2a7cc63acef55af256fd64ef5bf118932f57f22a9f40f3af2c35182998c814->leave($__internal_fb2a7cc63acef55af256fd64ef5bf118932f57f22a9f40f3af2c35182998c814_prof);

        
        $__internal_2c8c9bf03e100016a45baaa738a26445aed5166dba50ce4a3f758e32f1379330->leave($__internal_2c8c9bf03e100016a45baaa738a26445aed5166dba50ce4a3f758e32f1379330_prof);

    }

    // line 25
    public function block_mainMenu($context, array $blocks = array())
    {
        $__internal_356dbd7ea8da58060f312a1e09decd58b70b0064699e7cadc3443a05eab20c7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_356dbd7ea8da58060f312a1e09decd58b70b0064699e7cadc3443a05eab20c7f->enter($__internal_356dbd7ea8da58060f312a1e09decd58b70b0064699e7cadc3443a05eab20c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainMenu"));

        $__internal_a3c4726cb6ffd40fb438292c7a46cf912a996c55c302b664b54357f3f1df71a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c4726cb6ffd40fb438292c7a46cf912a996c55c302b664b54357f3f1df71a3->enter($__internal_a3c4726cb6ffd40fb438292c7a46cf912a996c55c302b664b54357f3f1df71a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainMenu"));

        // line 26
        echo "                        <div class=\"navbar navbar-default\">
                            <div class=\"navbar-header\">
                                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-expanded=\"false\">
                                    <span class=\"sr-only\">Toggle navigation</span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                </button>
                                <a class=\"navbar-brand\" href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">TTO</a>
                            </div>
                            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                                <ul class=\"nav navbar-nav\">
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Configuration<span class=\"caret\"></span></a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("federation_index");
        echo "\">Federation</a></li>
                                            <li><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("person_index");
        echo "\">Person</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    ";
        
        $__internal_a3c4726cb6ffd40fb438292c7a46cf912a996c55c302b664b54357f3f1df71a3->leave($__internal_a3c4726cb6ffd40fb438292c7a46cf912a996c55c302b664b54357f3f1df71a3_prof);

        
        $__internal_356dbd7ea8da58060f312a1e09decd58b70b0064699e7cadc3443a05eab20c7f->leave($__internal_356dbd7ea8da58060f312a1e09decd58b70b0064699e7cadc3443a05eab20c7f_prof);

    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
        $__internal_f4f93c1ae63adcd4f22c05ae64299c9e8be7f33e897b8a40d56525af42a579fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4f93c1ae63adcd4f22c05ae64299c9e8be7f33e897b8a40d56525af42a579fe->enter($__internal_f4f93c1ae63adcd4f22c05ae64299c9e8be7f33e897b8a40d56525af42a579fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f987da8fde54c9583f545b9d0a7962586bfed73c0969a279e8eb0d344e202385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f987da8fde54c9583f545b9d0a7962586bfed73c0969a279e8eb0d344e202385->enter($__internal_f987da8fde54c9583f545b9d0a7962586bfed73c0969a279e8eb0d344e202385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_f987da8fde54c9583f545b9d0a7962586bfed73c0969a279e8eb0d344e202385->leave($__internal_f987da8fde54c9583f545b9d0a7962586bfed73c0969a279e8eb0d344e202385_prof);

        
        $__internal_f4f93c1ae63adcd4f22c05ae64299c9e8be7f33e897b8a40d56525af42a579fe->leave($__internal_f4f93c1ae63adcd4f22c05ae64299c9e8be7f33e897b8a40d56525af42a579fe_prof);

    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        $__internal_61615640292bc0ebe6a6de20e7ae7b6b5bba717d87ebfe5ddb3b07877ddc538d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61615640292bc0ebe6a6de20e7ae7b6b5bba717d87ebfe5ddb3b07877ddc538d->enter($__internal_61615640292bc0ebe6a6de20e7ae7b6b5bba717d87ebfe5ddb3b07877ddc538d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_ab39b46df339b92f674fb1f59aebdfe8f47dc69bda9e41990a997d67579fcb07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab39b46df339b92f674fb1f59aebdfe8f47dc69bda9e41990a997d67579fcb07->enter($__internal_ab39b46df339b92f674fb1f59aebdfe8f47dc69bda9e41990a997d67579fcb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_ab39b46df339b92f674fb1f59aebdfe8f47dc69bda9e41990a997d67579fcb07->leave($__internal_ab39b46df339b92f674fb1f59aebdfe8f47dc69bda9e41990a997d67579fcb07_prof);

        
        $__internal_61615640292bc0ebe6a6de20e7ae7b6b5bba717d87ebfe5ddb3b07877ddc538d->leave($__internal_61615640292bc0ebe6a6de20e7ae7b6b5bba717d87ebfe5ddb3b07877ddc538d_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9c500b7f0d9bec71ac1bb448742a8c4ef0592d7a677ab3114473d5016e836d6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c500b7f0d9bec71ac1bb448742a8c4ef0592d7a677ab3114473d5016e836d6a->enter($__internal_9c500b7f0d9bec71ac1bb448742a8c4ef0592d7a677ab3114473d5016e836d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_03454f886ef0ae735eb858c456f972b50c0781e0f39b050bc48d9a15f79ea650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03454f886ef0ae735eb858c456f972b50c0781e0f39b050bc48d9a15f79ea650->enter($__internal_03454f886ef0ae735eb858c456f972b50c0781e0f39b050bc48d9a15f79ea650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_03454f886ef0ae735eb858c456f972b50c0781e0f39b050bc48d9a15f79ea650->leave($__internal_03454f886ef0ae735eb858c456f972b50c0781e0f39b050bc48d9a15f79ea650_prof);

        
        $__internal_9c500b7f0d9bec71ac1bb448742a8c4ef0592d7a677ab3114473d5016e836d6a->leave($__internal_9c500b7f0d9bec71ac1bb448742a8c4ef0592d7a677ab3114473d5016e836d6a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  299 => 56,  294 => 55,  285 => 54,  268 => 50,  251 => 49,  234 => 42,  230 => 41,  220 => 34,  210 => 26,  201 => 25,  187 => 50,  184 => 49,  182 => 25,  179 => 24,  170 => 23,  157 => 19,  148 => 18,  136 => 11,  131 => 10,  122 => 9,  104 => 7,  92 => 13,  89 => 12,  87 => 9,  84 => 8,  82 => 7,  78 => 5,  69 => 4,  57 => 58,  55 => 54,  51 => 52,  48 => 23,  46 => 18,  41 => 15,  39 => 4,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        {% block head %}
            <meta charset=\"UTF-8\" />            
            <title>
                {% block title %}Taekwondo Tournament Online{% endblock %}
            </title>            
            {% block stylesheets %}
                <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\" />
                <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-theme.min.css') }}\" />
            {% endblock %}            
            <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />     
        {% endblock %}
    </head>
    <body>    
        <div class=\"container-fluid\">
            {% block header %}
                <div class=\"page-header\">
                    <h1>Taekwondo Tournament Online <small>a easy use to manage your competitions</small></h1>
                </div>
            {% endblock %}
            {% block body %}

                    {% block mainMenu %}
                        <div class=\"navbar navbar-default\">
                            <div class=\"navbar-header\">
                                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-expanded=\"false\">
                                    <span class=\"sr-only\">Toggle navigation</span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                </button>
                                <a class=\"navbar-brand\" href=\"{{path('homepage')}}\">TTO</a>
                            </div>
                            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                                <ul class=\"nav navbar-nav\">
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Configuration<span class=\"caret\"></span></a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"{{path('federation_index')}}\">Federation</a></li>
                                            <li><a href=\"{{path('person_index')}}\">Person</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    {% endblock %}
                    {% block content %}{% endblock %}
                    {% block footer %}{% endblock %}                

            {% endblock %}        
        </div>  
        {% block javascripts %}
            <script src=\"{{ asset('js/jquery-3.1.1.min.js') }}\"></script>
            <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/TTPO/app/Resources/views/base.html.twig");
    }
}
