<?php

/* base.html.twig */
class __TwigTemplate_5f636d84497f4c15dd364cbc3f8627b9126f4eb336a4969309fd8e18dd7fb075 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'pre_javascripts' => array($this, 'block_pre_javascripts'),
            'body' => array($this, 'block_body'),
            'post_javascripts' => array($this, 'block_post_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f0871cced34fc2ea43c0cdb12e01b0c2b98b11594ef31891fb4d8b8023861aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f0871cced34fc2ea43c0cdb12e01b0c2b98b11594ef31891fb4d8b8023861aa->enter($__internal_2f0871cced34fc2ea43c0cdb12e01b0c2b98b11594ef31891fb4d8b8023861aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_58467380303683f86b5b69738f1e5b7e051976d930d0e37513cd4d64a17cb169 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58467380303683f86b5b69738f1e5b7e051976d930d0e37513cd4d64a17cb169->enter($__internal_58467380303683f86b5b69738f1e5b7e051976d930d0e37513cd4d64a17cb169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        ";
        // line 7
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1\" />
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\" />
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"/apple-icon-57x57.png\">
        <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"/apple-icon-60x60.png\">
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"/apple-icon-72x72.png\">
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"/apple-icon-76x76.png\">
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"/apple-icon-114x114.png\">
        <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"/apple-icon-120x120.png\">
        <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"/apple-icon-144x144.png\">
        <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"/apple-icon-152x152.png\">
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/apple-icon-180x180.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\"  href=\"/android-icon-192x192.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"/favicon-32x32.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"/favicon-96x96.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"/favicon-16x16.png\">
        <link rel=\"manifest\" href=\"/manifest.json\">
        <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
        <meta name=\"msapplication-TileImage\" content=\"/ms-icon-144x144.png\">
        <meta name=\"theme-color\" content=\"#ffffff\">

        <title>";
        // line 31
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 32
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "        ";
        $this->displayBlock('pre_javascripts', $context, $blocks);
        // line 34
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body id=\"page-top\">
        ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "        ";
        $this->displayBlock('post_javascripts', $context, $blocks);
        // line 39
        echo "    </body>
</html>
";
        
        $__internal_2f0871cced34fc2ea43c0cdb12e01b0c2b98b11594ef31891fb4d8b8023861aa->leave($__internal_2f0871cced34fc2ea43c0cdb12e01b0c2b98b11594ef31891fb4d8b8023861aa_prof);

        
        $__internal_58467380303683f86b5b69738f1e5b7e051976d930d0e37513cd4d64a17cb169->leave($__internal_58467380303683f86b5b69738f1e5b7e051976d930d0e37513cd4d64a17cb169_prof);

    }

    // line 31
    public function block_title($context, array $blocks = array())
    {
        $__internal_26b2a266bbf8c9199c2ea4078e4084da9035d9f9dc94ee435e017e1d5185bd8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26b2a266bbf8c9199c2ea4078e4084da9035d9f9dc94ee435e017e1d5185bd8d->enter($__internal_26b2a266bbf8c9199c2ea4078e4084da9035d9f9dc94ee435e017e1d5185bd8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f34ab8c66f6f14973eaef5d2a197c9a18ca7a062aaf14db2d2f618a1fd2f07a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f34ab8c66f6f14973eaef5d2a197c9a18ca7a062aaf14db2d2f618a1fd2f07a4->enter($__internal_f34ab8c66f6f14973eaef5d2a197c9a18ca7a062aaf14db2d2f618a1fd2f07a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f34ab8c66f6f14973eaef5d2a197c9a18ca7a062aaf14db2d2f618a1fd2f07a4->leave($__internal_f34ab8c66f6f14973eaef5d2a197c9a18ca7a062aaf14db2d2f618a1fd2f07a4_prof);

        
        $__internal_26b2a266bbf8c9199c2ea4078e4084da9035d9f9dc94ee435e017e1d5185bd8d->leave($__internal_26b2a266bbf8c9199c2ea4078e4084da9035d9f9dc94ee435e017e1d5185bd8d_prof);

    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0cd2356503593a47d177c31ec65bd489d730814a1e011617e94216a20ddfe20c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cd2356503593a47d177c31ec65bd489d730814a1e011617e94216a20ddfe20c->enter($__internal_0cd2356503593a47d177c31ec65bd489d730814a1e011617e94216a20ddfe20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6a59230edc08580373935d79585e0de6a90622f30a0014b73c3643cc02168625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a59230edc08580373935d79585e0de6a90622f30a0014b73c3643cc02168625->enter($__internal_6a59230edc08580373935d79585e0de6a90622f30a0014b73c3643cc02168625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6a59230edc08580373935d79585e0de6a90622f30a0014b73c3643cc02168625->leave($__internal_6a59230edc08580373935d79585e0de6a90622f30a0014b73c3643cc02168625_prof);

        
        $__internal_0cd2356503593a47d177c31ec65bd489d730814a1e011617e94216a20ddfe20c->leave($__internal_0cd2356503593a47d177c31ec65bd489d730814a1e011617e94216a20ddfe20c_prof);

    }

    // line 33
    public function block_pre_javascripts($context, array $blocks = array())
    {
        $__internal_819b8f4b70b743bdca179c1730a9798cc7cee4f4fe7d43244e246b01e9c6d2ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_819b8f4b70b743bdca179c1730a9798cc7cee4f4fe7d43244e246b01e9c6d2ea->enter($__internal_819b8f4b70b743bdca179c1730a9798cc7cee4f4fe7d43244e246b01e9c6d2ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_javascripts"));

        $__internal_927debc09aa05b661f3227d5c94c8bd2acc542cb8b834449c2fb8f42422bd891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_927debc09aa05b661f3227d5c94c8bd2acc542cb8b834449c2fb8f42422bd891->enter($__internal_927debc09aa05b661f3227d5c94c8bd2acc542cb8b834449c2fb8f42422bd891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_javascripts"));

        
        $__internal_927debc09aa05b661f3227d5c94c8bd2acc542cb8b834449c2fb8f42422bd891->leave($__internal_927debc09aa05b661f3227d5c94c8bd2acc542cb8b834449c2fb8f42422bd891_prof);

        
        $__internal_819b8f4b70b743bdca179c1730a9798cc7cee4f4fe7d43244e246b01e9c6d2ea->leave($__internal_819b8f4b70b743bdca179c1730a9798cc7cee4f4fe7d43244e246b01e9c6d2ea_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_c83ee96c4b223358f56c75507a0ca66b6b8b3608da4569a5cdcec4f37eee0344 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c83ee96c4b223358f56c75507a0ca66b6b8b3608da4569a5cdcec4f37eee0344->enter($__internal_c83ee96c4b223358f56c75507a0ca66b6b8b3608da4569a5cdcec4f37eee0344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_edeac3552b54a820366da8b828671aa58a4cb424a0f7467a88ccdaef088a7c47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edeac3552b54a820366da8b828671aa58a4cb424a0f7467a88ccdaef088a7c47->enter($__internal_edeac3552b54a820366da8b828671aa58a4cb424a0f7467a88ccdaef088a7c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_edeac3552b54a820366da8b828671aa58a4cb424a0f7467a88ccdaef088a7c47->leave($__internal_edeac3552b54a820366da8b828671aa58a4cb424a0f7467a88ccdaef088a7c47_prof);

        
        $__internal_c83ee96c4b223358f56c75507a0ca66b6b8b3608da4569a5cdcec4f37eee0344->leave($__internal_c83ee96c4b223358f56c75507a0ca66b6b8b3608da4569a5cdcec4f37eee0344_prof);

    }

    // line 38
    public function block_post_javascripts($context, array $blocks = array())
    {
        $__internal_976608803b1f62dc42f427056de98f13db9464ece4dc0c679fc52869426c4b46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_976608803b1f62dc42f427056de98f13db9464ece4dc0c679fc52869426c4b46->enter($__internal_976608803b1f62dc42f427056de98f13db9464ece4dc0c679fc52869426c4b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_javascripts"));

        $__internal_2edd991a5c74e304cdef82ca9f0167c8f77765a922e4a4c896b9be260e57d2ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2edd991a5c74e304cdef82ca9f0167c8f77765a922e4a4c896b9be260e57d2ca->enter($__internal_2edd991a5c74e304cdef82ca9f0167c8f77765a922e4a4c896b9be260e57d2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_javascripts"));

        
        $__internal_2edd991a5c74e304cdef82ca9f0167c8f77765a922e4a4c896b9be260e57d2ca->leave($__internal_2edd991a5c74e304cdef82ca9f0167c8f77765a922e4a4c896b9be260e57d2ca_prof);

        
        $__internal_976608803b1f62dc42f427056de98f13db9464ece4dc0c679fc52869426c4b46->leave($__internal_976608803b1f62dc42f427056de98f13db9464ece4dc0c679fc52869426c4b46_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 38,  148 => 37,  131 => 33,  114 => 32,  96 => 31,  84 => 39,  81 => 38,  79 => 37,  72 => 34,  69 => 33,  67 => 32,  63 => 31,  37 => 7,  30 => 1,);
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
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        {#<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">#}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1\" />
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\" />
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"/apple-icon-57x57.png\">
        <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"/apple-icon-60x60.png\">
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"/apple-icon-72x72.png\">
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"/apple-icon-76x76.png\">
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"/apple-icon-114x114.png\">
        <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"/apple-icon-120x120.png\">
        <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"/apple-icon-144x144.png\">
        <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"/apple-icon-152x152.png\">
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/apple-icon-180x180.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\"  href=\"/android-icon-192x192.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"/favicon-32x32.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"/favicon-96x96.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"/favicon-16x16.png\">
        <link rel=\"manifest\" href=\"/manifest.json\">
        <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
        <meta name=\"msapplication-TileImage\" content=\"/ms-icon-144x144.png\">
        <meta name=\"theme-color\" content=\"#ffffff\">

        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        {% block pre_javascripts %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body id=\"page-top\">
        {% block body %}{% endblock %}
        {% block post_javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/david/Code/bluestone/app/Resources/views/base.html.twig");
    }
}
