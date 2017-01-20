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
        $__internal_bf011855a6a407f99bdc60341edb5f57288c7bead72e85fc0e38e0ad6f61a286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf011855a6a407f99bdc60341edb5f57288c7bead72e85fc0e38e0ad6f61a286->enter($__internal_bf011855a6a407f99bdc60341edb5f57288c7bead72e85fc0e38e0ad6f61a286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b7a78b613868657e00fa688635cbf16f0549a015acf610a93851d3df2d094d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7a78b613868657e00fa688635cbf16f0549a015acf610a93851d3df2d094d85->enter($__internal_b7a78b613868657e00fa688635cbf16f0549a015acf610a93851d3df2d094d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_bf011855a6a407f99bdc60341edb5f57288c7bead72e85fc0e38e0ad6f61a286->leave($__internal_bf011855a6a407f99bdc60341edb5f57288c7bead72e85fc0e38e0ad6f61a286_prof);

        
        $__internal_b7a78b613868657e00fa688635cbf16f0549a015acf610a93851d3df2d094d85->leave($__internal_b7a78b613868657e00fa688635cbf16f0549a015acf610a93851d3df2d094d85_prof);

    }

    // line 31
    public function block_title($context, array $blocks = array())
    {
        $__internal_523a6ce89abb9394ca1293f1256566e00aa765166397e21935616c8ab9737b4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_523a6ce89abb9394ca1293f1256566e00aa765166397e21935616c8ab9737b4e->enter($__internal_523a6ce89abb9394ca1293f1256566e00aa765166397e21935616c8ab9737b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6df1315b1d3f6ce264ec0a11b44cff2d7063bc1da2a1b45077691391d8aba514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6df1315b1d3f6ce264ec0a11b44cff2d7063bc1da2a1b45077691391d8aba514->enter($__internal_6df1315b1d3f6ce264ec0a11b44cff2d7063bc1da2a1b45077691391d8aba514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6df1315b1d3f6ce264ec0a11b44cff2d7063bc1da2a1b45077691391d8aba514->leave($__internal_6df1315b1d3f6ce264ec0a11b44cff2d7063bc1da2a1b45077691391d8aba514_prof);

        
        $__internal_523a6ce89abb9394ca1293f1256566e00aa765166397e21935616c8ab9737b4e->leave($__internal_523a6ce89abb9394ca1293f1256566e00aa765166397e21935616c8ab9737b4e_prof);

    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5c7a92fdc138163bc6fa2d7769d29210f8310f537d45cbea92a66d5b7d90b669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c7a92fdc138163bc6fa2d7769d29210f8310f537d45cbea92a66d5b7d90b669->enter($__internal_5c7a92fdc138163bc6fa2d7769d29210f8310f537d45cbea92a66d5b7d90b669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_482df2eb3a2990f7f8607e5e6a30ba7bbb0a49e90e9e827443e3e3604033a560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_482df2eb3a2990f7f8607e5e6a30ba7bbb0a49e90e9e827443e3e3604033a560->enter($__internal_482df2eb3a2990f7f8607e5e6a30ba7bbb0a49e90e9e827443e3e3604033a560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_482df2eb3a2990f7f8607e5e6a30ba7bbb0a49e90e9e827443e3e3604033a560->leave($__internal_482df2eb3a2990f7f8607e5e6a30ba7bbb0a49e90e9e827443e3e3604033a560_prof);

        
        $__internal_5c7a92fdc138163bc6fa2d7769d29210f8310f537d45cbea92a66d5b7d90b669->leave($__internal_5c7a92fdc138163bc6fa2d7769d29210f8310f537d45cbea92a66d5b7d90b669_prof);

    }

    // line 33
    public function block_pre_javascripts($context, array $blocks = array())
    {
        $__internal_4485fa9c860b1480610e4d6a7bcb787063a50dc50c192a596b68c087ae2e7a70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4485fa9c860b1480610e4d6a7bcb787063a50dc50c192a596b68c087ae2e7a70->enter($__internal_4485fa9c860b1480610e4d6a7bcb787063a50dc50c192a596b68c087ae2e7a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_javascripts"));

        $__internal_5b9bcc6ad4d9020769a75411a15ec5a7c147e50f35a342a9b68ed94cc36d60cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b9bcc6ad4d9020769a75411a15ec5a7c147e50f35a342a9b68ed94cc36d60cd->enter($__internal_5b9bcc6ad4d9020769a75411a15ec5a7c147e50f35a342a9b68ed94cc36d60cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_javascripts"));

        
        $__internal_5b9bcc6ad4d9020769a75411a15ec5a7c147e50f35a342a9b68ed94cc36d60cd->leave($__internal_5b9bcc6ad4d9020769a75411a15ec5a7c147e50f35a342a9b68ed94cc36d60cd_prof);

        
        $__internal_4485fa9c860b1480610e4d6a7bcb787063a50dc50c192a596b68c087ae2e7a70->leave($__internal_4485fa9c860b1480610e4d6a7bcb787063a50dc50c192a596b68c087ae2e7a70_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_91c3234caef23e02871ab6d449a26cb4076c439632bdd211dd112c374aa76670 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91c3234caef23e02871ab6d449a26cb4076c439632bdd211dd112c374aa76670->enter($__internal_91c3234caef23e02871ab6d449a26cb4076c439632bdd211dd112c374aa76670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c451dc6ed9d2de5f0c818eebbc44e10c657ab46c8c31376395c40b54d5fb6700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c451dc6ed9d2de5f0c818eebbc44e10c657ab46c8c31376395c40b54d5fb6700->enter($__internal_c451dc6ed9d2de5f0c818eebbc44e10c657ab46c8c31376395c40b54d5fb6700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c451dc6ed9d2de5f0c818eebbc44e10c657ab46c8c31376395c40b54d5fb6700->leave($__internal_c451dc6ed9d2de5f0c818eebbc44e10c657ab46c8c31376395c40b54d5fb6700_prof);

        
        $__internal_91c3234caef23e02871ab6d449a26cb4076c439632bdd211dd112c374aa76670->leave($__internal_91c3234caef23e02871ab6d449a26cb4076c439632bdd211dd112c374aa76670_prof);

    }

    // line 38
    public function block_post_javascripts($context, array $blocks = array())
    {
        $__internal_f173629c520856767b468b8aeab287707600b88f4198a4f3a529caa81e47c3e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f173629c520856767b468b8aeab287707600b88f4198a4f3a529caa81e47c3e8->enter($__internal_f173629c520856767b468b8aeab287707600b88f4198a4f3a529caa81e47c3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_javascripts"));

        $__internal_ec9801b5e7c044ffda0392252171eb3f5f0db303cf8eb96134a01b0475b96c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec9801b5e7c044ffda0392252171eb3f5f0db303cf8eb96134a01b0475b96c69->enter($__internal_ec9801b5e7c044ffda0392252171eb3f5f0db303cf8eb96134a01b0475b96c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_javascripts"));

        
        $__internal_ec9801b5e7c044ffda0392252171eb3f5f0db303cf8eb96134a01b0475b96c69->leave($__internal_ec9801b5e7c044ffda0392252171eb3f5f0db303cf8eb96134a01b0475b96c69_prof);

        
        $__internal_f173629c520856767b468b8aeab287707600b88f4198a4f3a529caa81e47c3e8->leave($__internal_f173629c520856767b468b8aeab287707600b88f4198a4f3a529caa81e47c3e8_prof);

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
