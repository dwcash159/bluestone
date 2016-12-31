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
        $__internal_43db903c3cdb752439ec6ce539bb96c835393917f3672edc1fa2429549819643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43db903c3cdb752439ec6ce539bb96c835393917f3672edc1fa2429549819643->enter($__internal_43db903c3cdb752439ec6ce539bb96c835393917f3672edc1fa2429549819643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_1a9ff47e47972bbc7e9895f6cec57680b04e3c9798c8c707963bbacf09b1586f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a9ff47e47972bbc7e9895f6cec57680b04e3c9798c8c707963bbacf09b1586f->enter($__internal_1a9ff47e47972bbc7e9895f6cec57680b04e3c9798c8c707963bbacf09b1586f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_43db903c3cdb752439ec6ce539bb96c835393917f3672edc1fa2429549819643->leave($__internal_43db903c3cdb752439ec6ce539bb96c835393917f3672edc1fa2429549819643_prof);

        
        $__internal_1a9ff47e47972bbc7e9895f6cec57680b04e3c9798c8c707963bbacf09b1586f->leave($__internal_1a9ff47e47972bbc7e9895f6cec57680b04e3c9798c8c707963bbacf09b1586f_prof);

    }

    // line 31
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e84bf9701e47ce615d26cca6346fe812b5278290ebf862bc7c140530a44e355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e84bf9701e47ce615d26cca6346fe812b5278290ebf862bc7c140530a44e355->enter($__internal_4e84bf9701e47ce615d26cca6346fe812b5278290ebf862bc7c140530a44e355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5ae88aac18e46ccb8e4655d8d3fc3b4fa5415c4cbcee85a92a9a4910e407462e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ae88aac18e46ccb8e4655d8d3fc3b4fa5415c4cbcee85a92a9a4910e407462e->enter($__internal_5ae88aac18e46ccb8e4655d8d3fc3b4fa5415c4cbcee85a92a9a4910e407462e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5ae88aac18e46ccb8e4655d8d3fc3b4fa5415c4cbcee85a92a9a4910e407462e->leave($__internal_5ae88aac18e46ccb8e4655d8d3fc3b4fa5415c4cbcee85a92a9a4910e407462e_prof);

        
        $__internal_4e84bf9701e47ce615d26cca6346fe812b5278290ebf862bc7c140530a44e355->leave($__internal_4e84bf9701e47ce615d26cca6346fe812b5278290ebf862bc7c140530a44e355_prof);

    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_00481dffb9eb3a0d427998124f17f38b9eb90546d84fef3e1d540261a2eef712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00481dffb9eb3a0d427998124f17f38b9eb90546d84fef3e1d540261a2eef712->enter($__internal_00481dffb9eb3a0d427998124f17f38b9eb90546d84fef3e1d540261a2eef712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e2553bc9d1a5921a210c232bedec1af52bc5580ad9148b9bcf39292f6faab755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2553bc9d1a5921a210c232bedec1af52bc5580ad9148b9bcf39292f6faab755->enter($__internal_e2553bc9d1a5921a210c232bedec1af52bc5580ad9148b9bcf39292f6faab755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e2553bc9d1a5921a210c232bedec1af52bc5580ad9148b9bcf39292f6faab755->leave($__internal_e2553bc9d1a5921a210c232bedec1af52bc5580ad9148b9bcf39292f6faab755_prof);

        
        $__internal_00481dffb9eb3a0d427998124f17f38b9eb90546d84fef3e1d540261a2eef712->leave($__internal_00481dffb9eb3a0d427998124f17f38b9eb90546d84fef3e1d540261a2eef712_prof);

    }

    // line 33
    public function block_pre_javascripts($context, array $blocks = array())
    {
        $__internal_753846e7f112d02b0fcea2489a3f17424e3fc6693b62fd6d886345c4f13433b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_753846e7f112d02b0fcea2489a3f17424e3fc6693b62fd6d886345c4f13433b9->enter($__internal_753846e7f112d02b0fcea2489a3f17424e3fc6693b62fd6d886345c4f13433b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_javascripts"));

        $__internal_2c96c3b9b42811b672f12da928dabbf71418ac20276bbe70c339179fe2c640ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c96c3b9b42811b672f12da928dabbf71418ac20276bbe70c339179fe2c640ae->enter($__internal_2c96c3b9b42811b672f12da928dabbf71418ac20276bbe70c339179fe2c640ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_javascripts"));

        
        $__internal_2c96c3b9b42811b672f12da928dabbf71418ac20276bbe70c339179fe2c640ae->leave($__internal_2c96c3b9b42811b672f12da928dabbf71418ac20276bbe70c339179fe2c640ae_prof);

        
        $__internal_753846e7f112d02b0fcea2489a3f17424e3fc6693b62fd6d886345c4f13433b9->leave($__internal_753846e7f112d02b0fcea2489a3f17424e3fc6693b62fd6d886345c4f13433b9_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_590bfa8b4a2742ec4fd914af6f712c05b52e227b10938319811781418c5bb3e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_590bfa8b4a2742ec4fd914af6f712c05b52e227b10938319811781418c5bb3e3->enter($__internal_590bfa8b4a2742ec4fd914af6f712c05b52e227b10938319811781418c5bb3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f403d620e78624876e24d67d573384ea777c9e1d416e21bc687d2ed6ff9c158c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f403d620e78624876e24d67d573384ea777c9e1d416e21bc687d2ed6ff9c158c->enter($__internal_f403d620e78624876e24d67d573384ea777c9e1d416e21bc687d2ed6ff9c158c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f403d620e78624876e24d67d573384ea777c9e1d416e21bc687d2ed6ff9c158c->leave($__internal_f403d620e78624876e24d67d573384ea777c9e1d416e21bc687d2ed6ff9c158c_prof);

        
        $__internal_590bfa8b4a2742ec4fd914af6f712c05b52e227b10938319811781418c5bb3e3->leave($__internal_590bfa8b4a2742ec4fd914af6f712c05b52e227b10938319811781418c5bb3e3_prof);

    }

    // line 38
    public function block_post_javascripts($context, array $blocks = array())
    {
        $__internal_b466d4fded09dbed559614a9e92ce75f804b54be4c2ffcc68d84063ad64229ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b466d4fded09dbed559614a9e92ce75f804b54be4c2ffcc68d84063ad64229ff->enter($__internal_b466d4fded09dbed559614a9e92ce75f804b54be4c2ffcc68d84063ad64229ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_javascripts"));

        $__internal_66227995113d510222c115382a839f0270da5759381cad608e09c1068aefb5e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66227995113d510222c115382a839f0270da5759381cad608e09c1068aefb5e5->enter($__internal_66227995113d510222c115382a839f0270da5759381cad608e09c1068aefb5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_javascripts"));

        
        $__internal_66227995113d510222c115382a839f0270da5759381cad608e09c1068aefb5e5->leave($__internal_66227995113d510222c115382a839f0270da5759381cad608e09c1068aefb5e5_prof);

        
        $__internal_b466d4fded09dbed559614a9e92ce75f804b54be4c2ffcc68d84063ad64229ff->leave($__internal_b466d4fded09dbed559614a9e92ce75f804b54be4c2ffcc68d84063ad64229ff_prof);

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
