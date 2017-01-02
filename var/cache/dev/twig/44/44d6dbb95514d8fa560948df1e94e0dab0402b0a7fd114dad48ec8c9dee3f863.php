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
        $__internal_3583585bf8aa8c99dbd7b0c3e243dfabbb3382fe3eb4061ed1be6c882711a414 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3583585bf8aa8c99dbd7b0c3e243dfabbb3382fe3eb4061ed1be6c882711a414->enter($__internal_3583585bf8aa8c99dbd7b0c3e243dfabbb3382fe3eb4061ed1be6c882711a414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_bbde088b3f5997cec01efae0bf2eb23fb5ad5f128cb6748a6a5be4e125d1d937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbde088b3f5997cec01efae0bf2eb23fb5ad5f128cb6748a6a5be4e125d1d937->enter($__internal_bbde088b3f5997cec01efae0bf2eb23fb5ad5f128cb6748a6a5be4e125d1d937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3583585bf8aa8c99dbd7b0c3e243dfabbb3382fe3eb4061ed1be6c882711a414->leave($__internal_3583585bf8aa8c99dbd7b0c3e243dfabbb3382fe3eb4061ed1be6c882711a414_prof);

        
        $__internal_bbde088b3f5997cec01efae0bf2eb23fb5ad5f128cb6748a6a5be4e125d1d937->leave($__internal_bbde088b3f5997cec01efae0bf2eb23fb5ad5f128cb6748a6a5be4e125d1d937_prof);

    }

    // line 31
    public function block_title($context, array $blocks = array())
    {
        $__internal_1407960da5b91a6d9d2a8e482d23e2c95b352722158ad719b6a7d74efa1259c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1407960da5b91a6d9d2a8e482d23e2c95b352722158ad719b6a7d74efa1259c4->enter($__internal_1407960da5b91a6d9d2a8e482d23e2c95b352722158ad719b6a7d74efa1259c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aa0f2ae34d477dd7819d7666217b4448de096b9fb68bb113202314bcfd206643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa0f2ae34d477dd7819d7666217b4448de096b9fb68bb113202314bcfd206643->enter($__internal_aa0f2ae34d477dd7819d7666217b4448de096b9fb68bb113202314bcfd206643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_aa0f2ae34d477dd7819d7666217b4448de096b9fb68bb113202314bcfd206643->leave($__internal_aa0f2ae34d477dd7819d7666217b4448de096b9fb68bb113202314bcfd206643_prof);

        
        $__internal_1407960da5b91a6d9d2a8e482d23e2c95b352722158ad719b6a7d74efa1259c4->leave($__internal_1407960da5b91a6d9d2a8e482d23e2c95b352722158ad719b6a7d74efa1259c4_prof);

    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_35d6d129bd7942da85960cc43b58a92dac1444242d430a7ca6865228dbee85ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35d6d129bd7942da85960cc43b58a92dac1444242d430a7ca6865228dbee85ce->enter($__internal_35d6d129bd7942da85960cc43b58a92dac1444242d430a7ca6865228dbee85ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_18fcf575c98144ebffd71f4c63bacce30d2da4860b774bbb72f5343c2551a4dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18fcf575c98144ebffd71f4c63bacce30d2da4860b774bbb72f5343c2551a4dd->enter($__internal_18fcf575c98144ebffd71f4c63bacce30d2da4860b774bbb72f5343c2551a4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_18fcf575c98144ebffd71f4c63bacce30d2da4860b774bbb72f5343c2551a4dd->leave($__internal_18fcf575c98144ebffd71f4c63bacce30d2da4860b774bbb72f5343c2551a4dd_prof);

        
        $__internal_35d6d129bd7942da85960cc43b58a92dac1444242d430a7ca6865228dbee85ce->leave($__internal_35d6d129bd7942da85960cc43b58a92dac1444242d430a7ca6865228dbee85ce_prof);

    }

    // line 33
    public function block_pre_javascripts($context, array $blocks = array())
    {
        $__internal_5ae15e7c92857c2315672239fa61a9002090af63495e9e842c78e126c3f3da40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ae15e7c92857c2315672239fa61a9002090af63495e9e842c78e126c3f3da40->enter($__internal_5ae15e7c92857c2315672239fa61a9002090af63495e9e842c78e126c3f3da40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_javascripts"));

        $__internal_66d79e53a72991f4bf08228c19de7e3333a4faebdcc527f9cdad52983665bc63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66d79e53a72991f4bf08228c19de7e3333a4faebdcc527f9cdad52983665bc63->enter($__internal_66d79e53a72991f4bf08228c19de7e3333a4faebdcc527f9cdad52983665bc63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_javascripts"));

        
        $__internal_66d79e53a72991f4bf08228c19de7e3333a4faebdcc527f9cdad52983665bc63->leave($__internal_66d79e53a72991f4bf08228c19de7e3333a4faebdcc527f9cdad52983665bc63_prof);

        
        $__internal_5ae15e7c92857c2315672239fa61a9002090af63495e9e842c78e126c3f3da40->leave($__internal_5ae15e7c92857c2315672239fa61a9002090af63495e9e842c78e126c3f3da40_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d4439e972686c917c976ca776e6b4ce4c0e9349d5f1f01cc97eb1c7132e5e9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d4439e972686c917c976ca776e6b4ce4c0e9349d5f1f01cc97eb1c7132e5e9b->enter($__internal_7d4439e972686c917c976ca776e6b4ce4c0e9349d5f1f01cc97eb1c7132e5e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c03022d753a82cd8d79ec105fb958828af30fcbcfe1b08a0e2f7e9ffcefb024c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c03022d753a82cd8d79ec105fb958828af30fcbcfe1b08a0e2f7e9ffcefb024c->enter($__internal_c03022d753a82cd8d79ec105fb958828af30fcbcfe1b08a0e2f7e9ffcefb024c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c03022d753a82cd8d79ec105fb958828af30fcbcfe1b08a0e2f7e9ffcefb024c->leave($__internal_c03022d753a82cd8d79ec105fb958828af30fcbcfe1b08a0e2f7e9ffcefb024c_prof);

        
        $__internal_7d4439e972686c917c976ca776e6b4ce4c0e9349d5f1f01cc97eb1c7132e5e9b->leave($__internal_7d4439e972686c917c976ca776e6b4ce4c0e9349d5f1f01cc97eb1c7132e5e9b_prof);

    }

    // line 38
    public function block_post_javascripts($context, array $blocks = array())
    {
        $__internal_b93bba1a6fa3d75fa8f3a34975092e887c2adc7ca44b88e06148c8dc9b6dbafc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b93bba1a6fa3d75fa8f3a34975092e887c2adc7ca44b88e06148c8dc9b6dbafc->enter($__internal_b93bba1a6fa3d75fa8f3a34975092e887c2adc7ca44b88e06148c8dc9b6dbafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_javascripts"));

        $__internal_7eac289b74fcc90facf1beaac7b75aa2a774b25bf969906d5af836097146f0a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eac289b74fcc90facf1beaac7b75aa2a774b25bf969906d5af836097146f0a2->enter($__internal_7eac289b74fcc90facf1beaac7b75aa2a774b25bf969906d5af836097146f0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_javascripts"));

        
        $__internal_7eac289b74fcc90facf1beaac7b75aa2a774b25bf969906d5af836097146f0a2->leave($__internal_7eac289b74fcc90facf1beaac7b75aa2a774b25bf969906d5af836097146f0a2_prof);

        
        $__internal_b93bba1a6fa3d75fa8f3a34975092e887c2adc7ca44b88e06148c8dc9b6dbafc->leave($__internal_b93bba1a6fa3d75fa8f3a34975092e887c2adc7ca44b88e06148c8dc9b6dbafc_prof);

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
