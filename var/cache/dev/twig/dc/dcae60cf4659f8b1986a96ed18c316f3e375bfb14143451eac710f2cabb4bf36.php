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
        $__internal_bf11a4fa02193da8a666119074fd713cf95e710a316f0ef426d8a6db69a98136 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf11a4fa02193da8a666119074fd713cf95e710a316f0ef426d8a6db69a98136->enter($__internal_bf11a4fa02193da8a666119074fd713cf95e710a316f0ef426d8a6db69a98136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_dca2c5cd338deb85d8c04a63e514bb27fc54d0868b09bc8610eb58956a17997c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dca2c5cd338deb85d8c04a63e514bb27fc54d0868b09bc8610eb58956a17997c->enter($__internal_dca2c5cd338deb85d8c04a63e514bb27fc54d0868b09bc8610eb58956a17997c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_bf11a4fa02193da8a666119074fd713cf95e710a316f0ef426d8a6db69a98136->leave($__internal_bf11a4fa02193da8a666119074fd713cf95e710a316f0ef426d8a6db69a98136_prof);

        
        $__internal_dca2c5cd338deb85d8c04a63e514bb27fc54d0868b09bc8610eb58956a17997c->leave($__internal_dca2c5cd338deb85d8c04a63e514bb27fc54d0868b09bc8610eb58956a17997c_prof);

    }

    // line 31
    public function block_title($context, array $blocks = array())
    {
        $__internal_a762c9cb748f130b3abe681a7f8054f0bc9c53dd8763e29aef5df488a8b4721d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a762c9cb748f130b3abe681a7f8054f0bc9c53dd8763e29aef5df488a8b4721d->enter($__internal_a762c9cb748f130b3abe681a7f8054f0bc9c53dd8763e29aef5df488a8b4721d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e369f51f00b359cc50b08bcd4ea9457870a473fc4a7fa36f0e1b196bc5e64161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e369f51f00b359cc50b08bcd4ea9457870a473fc4a7fa36f0e1b196bc5e64161->enter($__internal_e369f51f00b359cc50b08bcd4ea9457870a473fc4a7fa36f0e1b196bc5e64161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e369f51f00b359cc50b08bcd4ea9457870a473fc4a7fa36f0e1b196bc5e64161->leave($__internal_e369f51f00b359cc50b08bcd4ea9457870a473fc4a7fa36f0e1b196bc5e64161_prof);

        
        $__internal_a762c9cb748f130b3abe681a7f8054f0bc9c53dd8763e29aef5df488a8b4721d->leave($__internal_a762c9cb748f130b3abe681a7f8054f0bc9c53dd8763e29aef5df488a8b4721d_prof);

    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_81821fba5e04764e32d90dc844dc20e7f7f224758fac327710987b67e655cc23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81821fba5e04764e32d90dc844dc20e7f7f224758fac327710987b67e655cc23->enter($__internal_81821fba5e04764e32d90dc844dc20e7f7f224758fac327710987b67e655cc23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0d1bdf38abf3164740e8096eec5f5fb7b7418b81654f03abf6ff97222785e817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d1bdf38abf3164740e8096eec5f5fb7b7418b81654f03abf6ff97222785e817->enter($__internal_0d1bdf38abf3164740e8096eec5f5fb7b7418b81654f03abf6ff97222785e817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0d1bdf38abf3164740e8096eec5f5fb7b7418b81654f03abf6ff97222785e817->leave($__internal_0d1bdf38abf3164740e8096eec5f5fb7b7418b81654f03abf6ff97222785e817_prof);

        
        $__internal_81821fba5e04764e32d90dc844dc20e7f7f224758fac327710987b67e655cc23->leave($__internal_81821fba5e04764e32d90dc844dc20e7f7f224758fac327710987b67e655cc23_prof);

    }

    // line 33
    public function block_pre_javascripts($context, array $blocks = array())
    {
        $__internal_8b476548560b831d26e525820daff03809c426e6bd39a67bc0d4c84d1609a03a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b476548560b831d26e525820daff03809c426e6bd39a67bc0d4c84d1609a03a->enter($__internal_8b476548560b831d26e525820daff03809c426e6bd39a67bc0d4c84d1609a03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_javascripts"));

        $__internal_0b8154dc2a1d450d5b67c4658a574bfc3486ff4b8507b44dc30735969263ea39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b8154dc2a1d450d5b67c4658a574bfc3486ff4b8507b44dc30735969263ea39->enter($__internal_0b8154dc2a1d450d5b67c4658a574bfc3486ff4b8507b44dc30735969263ea39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_javascripts"));

        
        $__internal_0b8154dc2a1d450d5b67c4658a574bfc3486ff4b8507b44dc30735969263ea39->leave($__internal_0b8154dc2a1d450d5b67c4658a574bfc3486ff4b8507b44dc30735969263ea39_prof);

        
        $__internal_8b476548560b831d26e525820daff03809c426e6bd39a67bc0d4c84d1609a03a->leave($__internal_8b476548560b831d26e525820daff03809c426e6bd39a67bc0d4c84d1609a03a_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_4767b26460f92604f947da858fe2a28a4898cfe231bbdcdad8e399ab27f3341d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4767b26460f92604f947da858fe2a28a4898cfe231bbdcdad8e399ab27f3341d->enter($__internal_4767b26460f92604f947da858fe2a28a4898cfe231bbdcdad8e399ab27f3341d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4df34d99a42ad2912bba3120cd18544623a1e7d2ba28e8a41f5df2b8816c63c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4df34d99a42ad2912bba3120cd18544623a1e7d2ba28e8a41f5df2b8816c63c6->enter($__internal_4df34d99a42ad2912bba3120cd18544623a1e7d2ba28e8a41f5df2b8816c63c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4df34d99a42ad2912bba3120cd18544623a1e7d2ba28e8a41f5df2b8816c63c6->leave($__internal_4df34d99a42ad2912bba3120cd18544623a1e7d2ba28e8a41f5df2b8816c63c6_prof);

        
        $__internal_4767b26460f92604f947da858fe2a28a4898cfe231bbdcdad8e399ab27f3341d->leave($__internal_4767b26460f92604f947da858fe2a28a4898cfe231bbdcdad8e399ab27f3341d_prof);

    }

    // line 38
    public function block_post_javascripts($context, array $blocks = array())
    {
        $__internal_3e56a671e7757c8055b0b4e0e187c39126595abaf3c1bcb77d8d6b3aaaf3c5b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e56a671e7757c8055b0b4e0e187c39126595abaf3c1bcb77d8d6b3aaaf3c5b5->enter($__internal_3e56a671e7757c8055b0b4e0e187c39126595abaf3c1bcb77d8d6b3aaaf3c5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_javascripts"));

        $__internal_9bb4306851de57c652eeb72db789ee1148d11fd2c3405b8a361dc59865fe2b96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bb4306851de57c652eeb72db789ee1148d11fd2c3405b8a361dc59865fe2b96->enter($__internal_9bb4306851de57c652eeb72db789ee1148d11fd2c3405b8a361dc59865fe2b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_javascripts"));

        
        $__internal_9bb4306851de57c652eeb72db789ee1148d11fd2c3405b8a361dc59865fe2b96->leave($__internal_9bb4306851de57c652eeb72db789ee1148d11fd2c3405b8a361dc59865fe2b96_prof);

        
        $__internal_3e56a671e7757c8055b0b4e0e187c39126595abaf3c1bcb77d8d6b3aaaf3c5b5->leave($__internal_3e56a671e7757c8055b0b4e0e187c39126595abaf3c1bcb77d8d6b3aaaf3c5b5_prof);

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
