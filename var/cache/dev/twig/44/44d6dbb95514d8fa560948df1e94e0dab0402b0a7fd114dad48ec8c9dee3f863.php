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
        $__internal_2bd55e4df0ec6492b533d8c9ff27e1f60529fe5f0bdb9af50bf5e7c95f68a95c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bd55e4df0ec6492b533d8c9ff27e1f60529fe5f0bdb9af50bf5e7c95f68a95c->enter($__internal_2bd55e4df0ec6492b533d8c9ff27e1f60529fe5f0bdb9af50bf5e7c95f68a95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a3b97c710e26ad5139043c1787bdbff9518bf62f5d7b1243bcf43d10563f5f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3b97c710e26ad5139043c1787bdbff9518bf62f5d7b1243bcf43d10563f5f9f->enter($__internal_a3b97c710e26ad5139043c1787bdbff9518bf62f5d7b1243bcf43d10563f5f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_2bd55e4df0ec6492b533d8c9ff27e1f60529fe5f0bdb9af50bf5e7c95f68a95c->leave($__internal_2bd55e4df0ec6492b533d8c9ff27e1f60529fe5f0bdb9af50bf5e7c95f68a95c_prof);

        
        $__internal_a3b97c710e26ad5139043c1787bdbff9518bf62f5d7b1243bcf43d10563f5f9f->leave($__internal_a3b97c710e26ad5139043c1787bdbff9518bf62f5d7b1243bcf43d10563f5f9f_prof);

    }

    // line 31
    public function block_title($context, array $blocks = array())
    {
        $__internal_1564f6ad3505d3971ed5b328f35599bf97b58fe75e57148c8d90179a553b78f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1564f6ad3505d3971ed5b328f35599bf97b58fe75e57148c8d90179a553b78f5->enter($__internal_1564f6ad3505d3971ed5b328f35599bf97b58fe75e57148c8d90179a553b78f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_068867ead3b91a0d5b4f9b2684fc8b8bb223d12a77da86958d380f1286b60e91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_068867ead3b91a0d5b4f9b2684fc8b8bb223d12a77da86958d380f1286b60e91->enter($__internal_068867ead3b91a0d5b4f9b2684fc8b8bb223d12a77da86958d380f1286b60e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_068867ead3b91a0d5b4f9b2684fc8b8bb223d12a77da86958d380f1286b60e91->leave($__internal_068867ead3b91a0d5b4f9b2684fc8b8bb223d12a77da86958d380f1286b60e91_prof);

        
        $__internal_1564f6ad3505d3971ed5b328f35599bf97b58fe75e57148c8d90179a553b78f5->leave($__internal_1564f6ad3505d3971ed5b328f35599bf97b58fe75e57148c8d90179a553b78f5_prof);

    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ec2ea8db9b6ef7958f9f7eeaf00d06413edc0735b9da42a48bd80a0c28758c0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec2ea8db9b6ef7958f9f7eeaf00d06413edc0735b9da42a48bd80a0c28758c0d->enter($__internal_ec2ea8db9b6ef7958f9f7eeaf00d06413edc0735b9da42a48bd80a0c28758c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_27d691dda358ffc6329d6cce6be6c98047ba9597504b7ed66c309690d0cb21b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d691dda358ffc6329d6cce6be6c98047ba9597504b7ed66c309690d0cb21b3->enter($__internal_27d691dda358ffc6329d6cce6be6c98047ba9597504b7ed66c309690d0cb21b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_27d691dda358ffc6329d6cce6be6c98047ba9597504b7ed66c309690d0cb21b3->leave($__internal_27d691dda358ffc6329d6cce6be6c98047ba9597504b7ed66c309690d0cb21b3_prof);

        
        $__internal_ec2ea8db9b6ef7958f9f7eeaf00d06413edc0735b9da42a48bd80a0c28758c0d->leave($__internal_ec2ea8db9b6ef7958f9f7eeaf00d06413edc0735b9da42a48bd80a0c28758c0d_prof);

    }

    // line 33
    public function block_pre_javascripts($context, array $blocks = array())
    {
        $__internal_cae2c7817d3a4c07dd6b17d2acdcc798b610d889f9c139575421a166685c4dfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cae2c7817d3a4c07dd6b17d2acdcc798b610d889f9c139575421a166685c4dfc->enter($__internal_cae2c7817d3a4c07dd6b17d2acdcc798b610d889f9c139575421a166685c4dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_javascripts"));

        $__internal_6c437d423194414f9a3431475e2e63e25af83e68718277448824ce3e04817ccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c437d423194414f9a3431475e2e63e25af83e68718277448824ce3e04817ccf->enter($__internal_6c437d423194414f9a3431475e2e63e25af83e68718277448824ce3e04817ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_javascripts"));

        
        $__internal_6c437d423194414f9a3431475e2e63e25af83e68718277448824ce3e04817ccf->leave($__internal_6c437d423194414f9a3431475e2e63e25af83e68718277448824ce3e04817ccf_prof);

        
        $__internal_cae2c7817d3a4c07dd6b17d2acdcc798b610d889f9c139575421a166685c4dfc->leave($__internal_cae2c7817d3a4c07dd6b17d2acdcc798b610d889f9c139575421a166685c4dfc_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc6498d77fb82fb7f18d08002f3d1ffaaa8d9d15270a4a67df0a658b64f3b5a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc6498d77fb82fb7f18d08002f3d1ffaaa8d9d15270a4a67df0a658b64f3b5a6->enter($__internal_fc6498d77fb82fb7f18d08002f3d1ffaaa8d9d15270a4a67df0a658b64f3b5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_27961dd07ea4602b8cd63275571d51bbbcdc4dbaed68fab470fa058c5117629a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27961dd07ea4602b8cd63275571d51bbbcdc4dbaed68fab470fa058c5117629a->enter($__internal_27961dd07ea4602b8cd63275571d51bbbcdc4dbaed68fab470fa058c5117629a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_27961dd07ea4602b8cd63275571d51bbbcdc4dbaed68fab470fa058c5117629a->leave($__internal_27961dd07ea4602b8cd63275571d51bbbcdc4dbaed68fab470fa058c5117629a_prof);

        
        $__internal_fc6498d77fb82fb7f18d08002f3d1ffaaa8d9d15270a4a67df0a658b64f3b5a6->leave($__internal_fc6498d77fb82fb7f18d08002f3d1ffaaa8d9d15270a4a67df0a658b64f3b5a6_prof);

    }

    // line 38
    public function block_post_javascripts($context, array $blocks = array())
    {
        $__internal_18522c695eaa06db593a989d5d7ce442a65272fd6aec7149fcb3a5378e6325c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18522c695eaa06db593a989d5d7ce442a65272fd6aec7149fcb3a5378e6325c0->enter($__internal_18522c695eaa06db593a989d5d7ce442a65272fd6aec7149fcb3a5378e6325c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_javascripts"));

        $__internal_d4eb99b7f56ad39fc244065d878edcf162c655a48c2ce27ad59c1504abee8854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4eb99b7f56ad39fc244065d878edcf162c655a48c2ce27ad59c1504abee8854->enter($__internal_d4eb99b7f56ad39fc244065d878edcf162c655a48c2ce27ad59c1504abee8854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_javascripts"));

        
        $__internal_d4eb99b7f56ad39fc244065d878edcf162c655a48c2ce27ad59c1504abee8854->leave($__internal_d4eb99b7f56ad39fc244065d878edcf162c655a48c2ce27ad59c1504abee8854_prof);

        
        $__internal_18522c695eaa06db593a989d5d7ce442a65272fd6aec7149fcb3a5378e6325c0->leave($__internal_18522c695eaa06db593a989d5d7ce442a65272fd6aec7149fcb3a5378e6325c0_prof);

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
