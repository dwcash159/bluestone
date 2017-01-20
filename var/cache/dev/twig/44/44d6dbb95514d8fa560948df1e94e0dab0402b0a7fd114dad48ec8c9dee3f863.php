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
        $__internal_23bff65cebaaebb927de3f97f0bb03786eca97179058515e9e7953ee269cbecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23bff65cebaaebb927de3f97f0bb03786eca97179058515e9e7953ee269cbecf->enter($__internal_23bff65cebaaebb927de3f97f0bb03786eca97179058515e9e7953ee269cbecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_813300f472caef39de51f1afe1efebf31df4862cfb3c4935dca089987be79064 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_813300f472caef39de51f1afe1efebf31df4862cfb3c4935dca089987be79064->enter($__internal_813300f472caef39de51f1afe1efebf31df4862cfb3c4935dca089987be79064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_23bff65cebaaebb927de3f97f0bb03786eca97179058515e9e7953ee269cbecf->leave($__internal_23bff65cebaaebb927de3f97f0bb03786eca97179058515e9e7953ee269cbecf_prof);

        
        $__internal_813300f472caef39de51f1afe1efebf31df4862cfb3c4935dca089987be79064->leave($__internal_813300f472caef39de51f1afe1efebf31df4862cfb3c4935dca089987be79064_prof);

    }

    // line 31
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ac9a05ab7566271898051fc0d88fc212f7b41122f817d1d5e4e7db5cf0ac230 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ac9a05ab7566271898051fc0d88fc212f7b41122f817d1d5e4e7db5cf0ac230->enter($__internal_4ac9a05ab7566271898051fc0d88fc212f7b41122f817d1d5e4e7db5cf0ac230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2acdb4e577aee1ef3a804c28a49f90f78769adf7a38e7c94b337ddcf0ed2d0eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2acdb4e577aee1ef3a804c28a49f90f78769adf7a38e7c94b337ddcf0ed2d0eb->enter($__internal_2acdb4e577aee1ef3a804c28a49f90f78769adf7a38e7c94b337ddcf0ed2d0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2acdb4e577aee1ef3a804c28a49f90f78769adf7a38e7c94b337ddcf0ed2d0eb->leave($__internal_2acdb4e577aee1ef3a804c28a49f90f78769adf7a38e7c94b337ddcf0ed2d0eb_prof);

        
        $__internal_4ac9a05ab7566271898051fc0d88fc212f7b41122f817d1d5e4e7db5cf0ac230->leave($__internal_4ac9a05ab7566271898051fc0d88fc212f7b41122f817d1d5e4e7db5cf0ac230_prof);

    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ab96766971c9d8629c51daf49b8b0494a672e3b2613507ac97653be56cd9883f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab96766971c9d8629c51daf49b8b0494a672e3b2613507ac97653be56cd9883f->enter($__internal_ab96766971c9d8629c51daf49b8b0494a672e3b2613507ac97653be56cd9883f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_74ad7e79d74385e45665e9bc778ff7bde464f7a31ba8472abf975629869637c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74ad7e79d74385e45665e9bc778ff7bde464f7a31ba8472abf975629869637c6->enter($__internal_74ad7e79d74385e45665e9bc778ff7bde464f7a31ba8472abf975629869637c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_74ad7e79d74385e45665e9bc778ff7bde464f7a31ba8472abf975629869637c6->leave($__internal_74ad7e79d74385e45665e9bc778ff7bde464f7a31ba8472abf975629869637c6_prof);

        
        $__internal_ab96766971c9d8629c51daf49b8b0494a672e3b2613507ac97653be56cd9883f->leave($__internal_ab96766971c9d8629c51daf49b8b0494a672e3b2613507ac97653be56cd9883f_prof);

    }

    // line 33
    public function block_pre_javascripts($context, array $blocks = array())
    {
        $__internal_9ac96a3ae443322a064dec0fe0ae8b0e067308208036aad5403ac4319938505c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ac96a3ae443322a064dec0fe0ae8b0e067308208036aad5403ac4319938505c->enter($__internal_9ac96a3ae443322a064dec0fe0ae8b0e067308208036aad5403ac4319938505c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_javascripts"));

        $__internal_d24ea5c11638d120fbd76d35102c0afe4c2bdc89001b912d13b774fc0b7f6f64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d24ea5c11638d120fbd76d35102c0afe4c2bdc89001b912d13b774fc0b7f6f64->enter($__internal_d24ea5c11638d120fbd76d35102c0afe4c2bdc89001b912d13b774fc0b7f6f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_javascripts"));

        
        $__internal_d24ea5c11638d120fbd76d35102c0afe4c2bdc89001b912d13b774fc0b7f6f64->leave($__internal_d24ea5c11638d120fbd76d35102c0afe4c2bdc89001b912d13b774fc0b7f6f64_prof);

        
        $__internal_9ac96a3ae443322a064dec0fe0ae8b0e067308208036aad5403ac4319938505c->leave($__internal_9ac96a3ae443322a064dec0fe0ae8b0e067308208036aad5403ac4319938505c_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_d88954d0894d08adb9ac271991b6da932d4c5e19507be58910621687fbbddca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d88954d0894d08adb9ac271991b6da932d4c5e19507be58910621687fbbddca6->enter($__internal_d88954d0894d08adb9ac271991b6da932d4c5e19507be58910621687fbbddca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_84b463114d2bb9655701de051d2301416c90a79c98c8fb70119daec32767dffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84b463114d2bb9655701de051d2301416c90a79c98c8fb70119daec32767dffc->enter($__internal_84b463114d2bb9655701de051d2301416c90a79c98c8fb70119daec32767dffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_84b463114d2bb9655701de051d2301416c90a79c98c8fb70119daec32767dffc->leave($__internal_84b463114d2bb9655701de051d2301416c90a79c98c8fb70119daec32767dffc_prof);

        
        $__internal_d88954d0894d08adb9ac271991b6da932d4c5e19507be58910621687fbbddca6->leave($__internal_d88954d0894d08adb9ac271991b6da932d4c5e19507be58910621687fbbddca6_prof);

    }

    // line 38
    public function block_post_javascripts($context, array $blocks = array())
    {
        $__internal_6443011576415bec4ad5220f11eeae3cef1578706771a46302270ac4708da303 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6443011576415bec4ad5220f11eeae3cef1578706771a46302270ac4708da303->enter($__internal_6443011576415bec4ad5220f11eeae3cef1578706771a46302270ac4708da303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_javascripts"));

        $__internal_66887b51aec85a331766be1a432d0fc2c87e86e1c250dc612f9275eb99f857ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66887b51aec85a331766be1a432d0fc2c87e86e1c250dc612f9275eb99f857ef->enter($__internal_66887b51aec85a331766be1a432d0fc2c87e86e1c250dc612f9275eb99f857ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_javascripts"));

        
        $__internal_66887b51aec85a331766be1a432d0fc2c87e86e1c250dc612f9275eb99f857ef->leave($__internal_66887b51aec85a331766be1a432d0fc2c87e86e1c250dc612f9275eb99f857ef_prof);

        
        $__internal_6443011576415bec4ad5220f11eeae3cef1578706771a46302270ac4708da303->leave($__internal_6443011576415bec4ad5220f11eeae3cef1578706771a46302270ac4708da303_prof);

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
