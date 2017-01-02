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
        $__internal_5f75e77ef218083207576ad321ef59695418225630d5cf08417021eb9dbb63ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f75e77ef218083207576ad321ef59695418225630d5cf08417021eb9dbb63ae->enter($__internal_5f75e77ef218083207576ad321ef59695418225630d5cf08417021eb9dbb63ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_fa98b815e8dbdf879bb93d970b243a4574b903f6ef4867627137b9ec9f90841c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa98b815e8dbdf879bb93d970b243a4574b903f6ef4867627137b9ec9f90841c->enter($__internal_fa98b815e8dbdf879bb93d970b243a4574b903f6ef4867627137b9ec9f90841c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_5f75e77ef218083207576ad321ef59695418225630d5cf08417021eb9dbb63ae->leave($__internal_5f75e77ef218083207576ad321ef59695418225630d5cf08417021eb9dbb63ae_prof);

        
        $__internal_fa98b815e8dbdf879bb93d970b243a4574b903f6ef4867627137b9ec9f90841c->leave($__internal_fa98b815e8dbdf879bb93d970b243a4574b903f6ef4867627137b9ec9f90841c_prof);

    }

    // line 31
    public function block_title($context, array $blocks = array())
    {
        $__internal_fae90b12fcd9577cae406c786d104688d0d091f958a30a5e1b3dd2969b7c91f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fae90b12fcd9577cae406c786d104688d0d091f958a30a5e1b3dd2969b7c91f7->enter($__internal_fae90b12fcd9577cae406c786d104688d0d091f958a30a5e1b3dd2969b7c91f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e58e1bd90fe1945ec9beb2a350c0655d97a4055e0420fcc17546abb86d864732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e58e1bd90fe1945ec9beb2a350c0655d97a4055e0420fcc17546abb86d864732->enter($__internal_e58e1bd90fe1945ec9beb2a350c0655d97a4055e0420fcc17546abb86d864732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e58e1bd90fe1945ec9beb2a350c0655d97a4055e0420fcc17546abb86d864732->leave($__internal_e58e1bd90fe1945ec9beb2a350c0655d97a4055e0420fcc17546abb86d864732_prof);

        
        $__internal_fae90b12fcd9577cae406c786d104688d0d091f958a30a5e1b3dd2969b7c91f7->leave($__internal_fae90b12fcd9577cae406c786d104688d0d091f958a30a5e1b3dd2969b7c91f7_prof);

    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f864473cc8fcb47ac3bb788e11393b4df153d7688fdd68dbbf1e7501172e4c15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f864473cc8fcb47ac3bb788e11393b4df153d7688fdd68dbbf1e7501172e4c15->enter($__internal_f864473cc8fcb47ac3bb788e11393b4df153d7688fdd68dbbf1e7501172e4c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_622676d520d31ac5f76bf3bf733b493d19ed6a5b8807096beb2a690432a74dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_622676d520d31ac5f76bf3bf733b493d19ed6a5b8807096beb2a690432a74dfd->enter($__internal_622676d520d31ac5f76bf3bf733b493d19ed6a5b8807096beb2a690432a74dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_622676d520d31ac5f76bf3bf733b493d19ed6a5b8807096beb2a690432a74dfd->leave($__internal_622676d520d31ac5f76bf3bf733b493d19ed6a5b8807096beb2a690432a74dfd_prof);

        
        $__internal_f864473cc8fcb47ac3bb788e11393b4df153d7688fdd68dbbf1e7501172e4c15->leave($__internal_f864473cc8fcb47ac3bb788e11393b4df153d7688fdd68dbbf1e7501172e4c15_prof);

    }

    // line 33
    public function block_pre_javascripts($context, array $blocks = array())
    {
        $__internal_ebfb801e3e24d51aae8856c1059e00dbce73b830d7daa12a5d565faec0e8213b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebfb801e3e24d51aae8856c1059e00dbce73b830d7daa12a5d565faec0e8213b->enter($__internal_ebfb801e3e24d51aae8856c1059e00dbce73b830d7daa12a5d565faec0e8213b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_javascripts"));

        $__internal_58773085969914f9d00f8a3287e99bc057bbb090e273c168906d20f74ac0d195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58773085969914f9d00f8a3287e99bc057bbb090e273c168906d20f74ac0d195->enter($__internal_58773085969914f9d00f8a3287e99bc057bbb090e273c168906d20f74ac0d195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_javascripts"));

        
        $__internal_58773085969914f9d00f8a3287e99bc057bbb090e273c168906d20f74ac0d195->leave($__internal_58773085969914f9d00f8a3287e99bc057bbb090e273c168906d20f74ac0d195_prof);

        
        $__internal_ebfb801e3e24d51aae8856c1059e00dbce73b830d7daa12a5d565faec0e8213b->leave($__internal_ebfb801e3e24d51aae8856c1059e00dbce73b830d7daa12a5d565faec0e8213b_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_e17c5e780e5ae2ad3d30bb4738a9136af63fd136ac732d8a8023220a275b8665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e17c5e780e5ae2ad3d30bb4738a9136af63fd136ac732d8a8023220a275b8665->enter($__internal_e17c5e780e5ae2ad3d30bb4738a9136af63fd136ac732d8a8023220a275b8665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_568f5c6961059165dff3093c097b06cd1d0ed3020fafd4d1d0109245709c52ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_568f5c6961059165dff3093c097b06cd1d0ed3020fafd4d1d0109245709c52ab->enter($__internal_568f5c6961059165dff3093c097b06cd1d0ed3020fafd4d1d0109245709c52ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_568f5c6961059165dff3093c097b06cd1d0ed3020fafd4d1d0109245709c52ab->leave($__internal_568f5c6961059165dff3093c097b06cd1d0ed3020fafd4d1d0109245709c52ab_prof);

        
        $__internal_e17c5e780e5ae2ad3d30bb4738a9136af63fd136ac732d8a8023220a275b8665->leave($__internal_e17c5e780e5ae2ad3d30bb4738a9136af63fd136ac732d8a8023220a275b8665_prof);

    }

    // line 38
    public function block_post_javascripts($context, array $blocks = array())
    {
        $__internal_9ef58b6a11802db8dc26b90bd313ee217279315b5eab4fc98b28654a29623f9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ef58b6a11802db8dc26b90bd313ee217279315b5eab4fc98b28654a29623f9f->enter($__internal_9ef58b6a11802db8dc26b90bd313ee217279315b5eab4fc98b28654a29623f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_javascripts"));

        $__internal_ed96b3f33171c0ae3b3d06fbc230649b80609ce63cac9e13a3a5e9139fa4ef47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed96b3f33171c0ae3b3d06fbc230649b80609ce63cac9e13a3a5e9139fa4ef47->enter($__internal_ed96b3f33171c0ae3b3d06fbc230649b80609ce63cac9e13a3a5e9139fa4ef47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_javascripts"));

        
        $__internal_ed96b3f33171c0ae3b3d06fbc230649b80609ce63cac9e13a3a5e9139fa4ef47->leave($__internal_ed96b3f33171c0ae3b3d06fbc230649b80609ce63cac9e13a3a5e9139fa4ef47_prof);

        
        $__internal_9ef58b6a11802db8dc26b90bd313ee217279315b5eab4fc98b28654a29623f9f->leave($__internal_9ef58b6a11802db8dc26b90bd313ee217279315b5eab4fc98b28654a29623f9f_prof);

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
