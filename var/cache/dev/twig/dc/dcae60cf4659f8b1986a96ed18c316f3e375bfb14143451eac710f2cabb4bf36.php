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
        $__internal_fa89be1cd7987bf772fa998ee3646b21bfc575b5e7a8f2cf7e3bb1de55058371 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa89be1cd7987bf772fa998ee3646b21bfc575b5e7a8f2cf7e3bb1de55058371->enter($__internal_fa89be1cd7987bf772fa998ee3646b21bfc575b5e7a8f2cf7e3bb1de55058371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_cb24e4fa6ea3c88cf9880e8a49c9c08c136a04e7b6d0e1884e7c233ac1dcbfdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb24e4fa6ea3c88cf9880e8a49c9c08c136a04e7b6d0e1884e7c233ac1dcbfdb->enter($__internal_cb24e4fa6ea3c88cf9880e8a49c9c08c136a04e7b6d0e1884e7c233ac1dcbfdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "        ";
        $this->displayBlock('post_javascripts', $context, $blocks);
        // line 40
        echo "    </body>
</html>
";
        
        $__internal_fa89be1cd7987bf772fa998ee3646b21bfc575b5e7a8f2cf7e3bb1de55058371->leave($__internal_fa89be1cd7987bf772fa998ee3646b21bfc575b5e7a8f2cf7e3bb1de55058371_prof);

        
        $__internal_cb24e4fa6ea3c88cf9880e8a49c9c08c136a04e7b6d0e1884e7c233ac1dcbfdb->leave($__internal_cb24e4fa6ea3c88cf9880e8a49c9c08c136a04e7b6d0e1884e7c233ac1dcbfdb_prof);

    }

    // line 31
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba837ed5e66ce4a7e210e76547cf27cf206d757f1d1598039f36e478bd818312 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba837ed5e66ce4a7e210e76547cf27cf206d757f1d1598039f36e478bd818312->enter($__internal_ba837ed5e66ce4a7e210e76547cf27cf206d757f1d1598039f36e478bd818312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_70f082db58a3f99815a03aebcee6c305e3296e9a183dc65f2a8c14c6baf6914c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70f082db58a3f99815a03aebcee6c305e3296e9a183dc65f2a8c14c6baf6914c->enter($__internal_70f082db58a3f99815a03aebcee6c305e3296e9a183dc65f2a8c14c6baf6914c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_70f082db58a3f99815a03aebcee6c305e3296e9a183dc65f2a8c14c6baf6914c->leave($__internal_70f082db58a3f99815a03aebcee6c305e3296e9a183dc65f2a8c14c6baf6914c_prof);

        
        $__internal_ba837ed5e66ce4a7e210e76547cf27cf206d757f1d1598039f36e478bd818312->leave($__internal_ba837ed5e66ce4a7e210e76547cf27cf206d757f1d1598039f36e478bd818312_prof);

    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bc5d13ba9ff4cb27dfb8c3a5a072e489e953a8911309f59fef808fbd32e89d5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc5d13ba9ff4cb27dfb8c3a5a072e489e953a8911309f59fef808fbd32e89d5c->enter($__internal_bc5d13ba9ff4cb27dfb8c3a5a072e489e953a8911309f59fef808fbd32e89d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bbc066f6accbf605ad0c6c65e35b1ff6530d6b7f9f23a53fffc382d3ecaa2ba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbc066f6accbf605ad0c6c65e35b1ff6530d6b7f9f23a53fffc382d3ecaa2ba1->enter($__internal_bbc066f6accbf605ad0c6c65e35b1ff6530d6b7f9f23a53fffc382d3ecaa2ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bbc066f6accbf605ad0c6c65e35b1ff6530d6b7f9f23a53fffc382d3ecaa2ba1->leave($__internal_bbc066f6accbf605ad0c6c65e35b1ff6530d6b7f9f23a53fffc382d3ecaa2ba1_prof);

        
        $__internal_bc5d13ba9ff4cb27dfb8c3a5a072e489e953a8911309f59fef808fbd32e89d5c->leave($__internal_bc5d13ba9ff4cb27dfb8c3a5a072e489e953a8911309f59fef808fbd32e89d5c_prof);

    }

    // line 33
    public function block_pre_javascripts($context, array $blocks = array())
    {
        $__internal_cc5f990eaca21c271b9af8457a6391e3a2a63d611c3490b604de256e58eb1275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc5f990eaca21c271b9af8457a6391e3a2a63d611c3490b604de256e58eb1275->enter($__internal_cc5f990eaca21c271b9af8457a6391e3a2a63d611c3490b604de256e58eb1275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_javascripts"));

        $__internal_4b88773e64d6b0afb43cfdc91969bc45decb46ed6ce54d0881fb0c4014610cd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b88773e64d6b0afb43cfdc91969bc45decb46ed6ce54d0881fb0c4014610cd4->enter($__internal_4b88773e64d6b0afb43cfdc91969bc45decb46ed6ce54d0881fb0c4014610cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_javascripts"));

        
        $__internal_4b88773e64d6b0afb43cfdc91969bc45decb46ed6ce54d0881fb0c4014610cd4->leave($__internal_4b88773e64d6b0afb43cfdc91969bc45decb46ed6ce54d0881fb0c4014610cd4_prof);

        
        $__internal_cc5f990eaca21c271b9af8457a6391e3a2a63d611c3490b604de256e58eb1275->leave($__internal_cc5f990eaca21c271b9af8457a6391e3a2a63d611c3490b604de256e58eb1275_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e3c3e2a5150f5c9b5fc45771c8435d7a8e140839f85df9414fc0e9275f1fb4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e3c3e2a5150f5c9b5fc45771c8435d7a8e140839f85df9414fc0e9275f1fb4a->enter($__internal_9e3c3e2a5150f5c9b5fc45771c8435d7a8e140839f85df9414fc0e9275f1fb4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5d3f41f5143cac1ef87733134aee436a87e205ab7b32dece89341131c34bb3fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d3f41f5143cac1ef87733134aee436a87e205ab7b32dece89341131c34bb3fd->enter($__internal_5d3f41f5143cac1ef87733134aee436a87e205ab7b32dece89341131c34bb3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5d3f41f5143cac1ef87733134aee436a87e205ab7b32dece89341131c34bb3fd->leave($__internal_5d3f41f5143cac1ef87733134aee436a87e205ab7b32dece89341131c34bb3fd_prof);

        
        $__internal_9e3c3e2a5150f5c9b5fc45771c8435d7a8e140839f85df9414fc0e9275f1fb4a->leave($__internal_9e3c3e2a5150f5c9b5fc45771c8435d7a8e140839f85df9414fc0e9275f1fb4a_prof);

    }

    // line 39
    public function block_post_javascripts($context, array $blocks = array())
    {
        $__internal_ea513fd8551d51bc7174a0e81c1e288481e3c731fcc5ac7821544e32bcd4d590 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea513fd8551d51bc7174a0e81c1e288481e3c731fcc5ac7821544e32bcd4d590->enter($__internal_ea513fd8551d51bc7174a0e81c1e288481e3c731fcc5ac7821544e32bcd4d590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_javascripts"));

        $__internal_29e3a3c5d9634c6bf077d69beec31172e828c8bab9c88714c11b25ae0d8a909d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e3a3c5d9634c6bf077d69beec31172e828c8bab9c88714c11b25ae0d8a909d->enter($__internal_29e3a3c5d9634c6bf077d69beec31172e828c8bab9c88714c11b25ae0d8a909d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_javascripts"));

        
        $__internal_29e3a3c5d9634c6bf077d69beec31172e828c8bab9c88714c11b25ae0d8a909d->leave($__internal_29e3a3c5d9634c6bf077d69beec31172e828c8bab9c88714c11b25ae0d8a909d_prof);

        
        $__internal_ea513fd8551d51bc7174a0e81c1e288481e3c731fcc5ac7821544e32bcd4d590->leave($__internal_ea513fd8551d51bc7174a0e81c1e288481e3c731fcc5ac7821544e32bcd4d590_prof);

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
        return array (  166 => 39,  149 => 38,  132 => 33,  115 => 32,  97 => 31,  85 => 40,  82 => 39,  80 => 38,  72 => 34,  69 => 33,  67 => 32,  63 => 31,  37 => 7,  30 => 1,);
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
