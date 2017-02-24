<?php

/* base.html.twig */
class __TwigTemplate_889735b8b442c066a32c76a3b3e486255b65044e6e78106a9413a089964e6efa extends Twig_Template
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
        $__internal_09d2b77175aaa1f11c4838ba6d744aabe175dafa9326d6f6654930e20cd72aab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09d2b77175aaa1f11c4838ba6d744aabe175dafa9326d6f6654930e20cd72aab->enter($__internal_09d2b77175aaa1f11c4838ba6d744aabe175dafa9326d6f6654930e20cd72aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_701159cd0018fc7591cdeadd91765d06a7a33e11e0352ed38646baeac6d9b241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_701159cd0018fc7591cdeadd91765d06a7a33e11e0352ed38646baeac6d9b241->enter($__internal_701159cd0018fc7591cdeadd91765d06a7a33e11e0352ed38646baeac6d9b241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <meta name=\"author\" content=\"dwcash159\">

        <meta name=\"keywords\" content=\"North Texas Sleep Solutions, Keller, TX 76248, Sleep Apnea, Dr. Lauck, Dentist,
            Dentist in Keller, Southlake, Roanoke, Watauga, Oral Appliance for sleep apnea, Oral Appliances,
            loud snoring, excessive sleepiness, sleep physicians\" />
        <meta name=\"description\" content=\"We are your sleep apnea specialist.  Tired of the Snoring?  Solutions for a better Quality of Life.  Call us today at 817-431-6764\" />

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
        // line 35
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 36
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "        ";
        $this->displayBlock('pre_javascripts', $context, $blocks);
        // line 38
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body id=\"page-top\">

        ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "        ";
        $this->displayBlock('post_javascripts', $context, $blocks);
        // line 44
        echo "    </body>
</html>
";
        
        $__internal_09d2b77175aaa1f11c4838ba6d744aabe175dafa9326d6f6654930e20cd72aab->leave($__internal_09d2b77175aaa1f11c4838ba6d744aabe175dafa9326d6f6654930e20cd72aab_prof);

        
        $__internal_701159cd0018fc7591cdeadd91765d06a7a33e11e0352ed38646baeac6d9b241->leave($__internal_701159cd0018fc7591cdeadd91765d06a7a33e11e0352ed38646baeac6d9b241_prof);

    }

    // line 35
    public function block_title($context, array $blocks = array())
    {
        $__internal_01576d054dd3b56b6a72df80f14b102e965e1f0ef1ea96a2e1360c33d0a6e257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01576d054dd3b56b6a72df80f14b102e965e1f0ef1ea96a2e1360c33d0a6e257->enter($__internal_01576d054dd3b56b6a72df80f14b102e965e1f0ef1ea96a2e1360c33d0a6e257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ee208b2960cf1786c77032c9a0bc27ca9ffe3c7032523e36df9738e74f1b0655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee208b2960cf1786c77032c9a0bc27ca9ffe3c7032523e36df9738e74f1b0655->enter($__internal_ee208b2960cf1786c77032c9a0bc27ca9ffe3c7032523e36df9738e74f1b0655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ee208b2960cf1786c77032c9a0bc27ca9ffe3c7032523e36df9738e74f1b0655->leave($__internal_ee208b2960cf1786c77032c9a0bc27ca9ffe3c7032523e36df9738e74f1b0655_prof);

        
        $__internal_01576d054dd3b56b6a72df80f14b102e965e1f0ef1ea96a2e1360c33d0a6e257->leave($__internal_01576d054dd3b56b6a72df80f14b102e965e1f0ef1ea96a2e1360c33d0a6e257_prof);

    }

    // line 36
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e88c2a30769c3d9ba2730210157f64f2b4136e40f2e7be0b6e3bd1cfd0a3ef1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e88c2a30769c3d9ba2730210157f64f2b4136e40f2e7be0b6e3bd1cfd0a3ef1d->enter($__internal_e88c2a30769c3d9ba2730210157f64f2b4136e40f2e7be0b6e3bd1cfd0a3ef1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_afca9084967e3898dbb2529418b4264df612834b177cefcb0cbd46b3d3e900ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afca9084967e3898dbb2529418b4264df612834b177cefcb0cbd46b3d3e900ef->enter($__internal_afca9084967e3898dbb2529418b4264df612834b177cefcb0cbd46b3d3e900ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_afca9084967e3898dbb2529418b4264df612834b177cefcb0cbd46b3d3e900ef->leave($__internal_afca9084967e3898dbb2529418b4264df612834b177cefcb0cbd46b3d3e900ef_prof);

        
        $__internal_e88c2a30769c3d9ba2730210157f64f2b4136e40f2e7be0b6e3bd1cfd0a3ef1d->leave($__internal_e88c2a30769c3d9ba2730210157f64f2b4136e40f2e7be0b6e3bd1cfd0a3ef1d_prof);

    }

    // line 37
    public function block_pre_javascripts($context, array $blocks = array())
    {
        $__internal_44d27c96d99087ae18f5c56be1cd69fa98459f3831a91481160cef1f20da4ccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44d27c96d99087ae18f5c56be1cd69fa98459f3831a91481160cef1f20da4ccb->enter($__internal_44d27c96d99087ae18f5c56be1cd69fa98459f3831a91481160cef1f20da4ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_javascripts"));

        $__internal_643bba618f7d62163702baf0b4d686e9603431012934785d0eede224fad035fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_643bba618f7d62163702baf0b4d686e9603431012934785d0eede224fad035fa->enter($__internal_643bba618f7d62163702baf0b4d686e9603431012934785d0eede224fad035fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_javascripts"));

        
        $__internal_643bba618f7d62163702baf0b4d686e9603431012934785d0eede224fad035fa->leave($__internal_643bba618f7d62163702baf0b4d686e9603431012934785d0eede224fad035fa_prof);

        
        $__internal_44d27c96d99087ae18f5c56be1cd69fa98459f3831a91481160cef1f20da4ccb->leave($__internal_44d27c96d99087ae18f5c56be1cd69fa98459f3831a91481160cef1f20da4ccb_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_55514197e723d4cfd421863c2799c0a31505def2b064bd4f86a01e4db7161fe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55514197e723d4cfd421863c2799c0a31505def2b064bd4f86a01e4db7161fe0->enter($__internal_55514197e723d4cfd421863c2799c0a31505def2b064bd4f86a01e4db7161fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23e87fe7018f93e419532bc69f493832ceb98e9ad6e0af9022314406268b60cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23e87fe7018f93e419532bc69f493832ceb98e9ad6e0af9022314406268b60cf->enter($__internal_23e87fe7018f93e419532bc69f493832ceb98e9ad6e0af9022314406268b60cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_23e87fe7018f93e419532bc69f493832ceb98e9ad6e0af9022314406268b60cf->leave($__internal_23e87fe7018f93e419532bc69f493832ceb98e9ad6e0af9022314406268b60cf_prof);

        
        $__internal_55514197e723d4cfd421863c2799c0a31505def2b064bd4f86a01e4db7161fe0->leave($__internal_55514197e723d4cfd421863c2799c0a31505def2b064bd4f86a01e4db7161fe0_prof);

    }

    // line 43
    public function block_post_javascripts($context, array $blocks = array())
    {
        $__internal_22ecb49888d53072d9392c5ff93087b7905c1ef5aaf574facb0abae25256f200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22ecb49888d53072d9392c5ff93087b7905c1ef5aaf574facb0abae25256f200->enter($__internal_22ecb49888d53072d9392c5ff93087b7905c1ef5aaf574facb0abae25256f200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_javascripts"));

        $__internal_08fa208c9a32cc10efcdcfc58c75a6d77b23c13691c84fc70b64736537a6b962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08fa208c9a32cc10efcdcfc58c75a6d77b23c13691c84fc70b64736537a6b962->enter($__internal_08fa208c9a32cc10efcdcfc58c75a6d77b23c13691c84fc70b64736537a6b962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_javascripts"));

        
        $__internal_08fa208c9a32cc10efcdcfc58c75a6d77b23c13691c84fc70b64736537a6b962->leave($__internal_08fa208c9a32cc10efcdcfc58c75a6d77b23c13691c84fc70b64736537a6b962_prof);

        
        $__internal_22ecb49888d53072d9392c5ff93087b7905c1ef5aaf574facb0abae25256f200->leave($__internal_22ecb49888d53072d9392c5ff93087b7905c1ef5aaf574facb0abae25256f200_prof);

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
        return array (  170 => 43,  153 => 42,  136 => 37,  119 => 36,  101 => 35,  89 => 44,  86 => 43,  84 => 42,  76 => 38,  73 => 37,  71 => 36,  67 => 35,  37 => 7,  30 => 1,);
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
        <meta name=\"author\" content=\"dwcash159\">

        <meta name=\"keywords\" content=\"North Texas Sleep Solutions, Keller, TX 76248, Sleep Apnea, Dr. Lauck, Dentist,
            Dentist in Keller, Southlake, Roanoke, Watauga, Oral Appliance for sleep apnea, Oral Appliances,
            loud snoring, excessive sleepiness, sleep physicians\" />
        <meta name=\"description\" content=\"We are your sleep apnea specialist.  Tired of the Snoring?  Solutions for a better Quality of Life.  Call us today at 817-431-6764\" />

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
