<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_52c9bcba44d84826f7fbea5318f28857becaf385698ba46c55319735196dd4db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6bfc90cf5c61c037eee21d5995e1a4248fa6cc1d6271b00e3e9cf31e66f5e62d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bfc90cf5c61c037eee21d5995e1a4248fa6cc1d6271b00e3e9cf31e66f5e62d->enter($__internal_6bfc90cf5c61c037eee21d5995e1a4248fa6cc1d6271b00e3e9cf31e66f5e62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_8cb3d56dbb5f21448889408979ff097c0824e26d1443ff31ce78ff377ba9cc1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cb3d56dbb5f21448889408979ff097c0824e26d1443ff31ce78ff377ba9cc1f->enter($__internal_8cb3d56dbb5f21448889408979ff097c0824e26d1443ff31ce78ff377ba9cc1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_6bfc90cf5c61c037eee21d5995e1a4248fa6cc1d6271b00e3e9cf31e66f5e62d->leave($__internal_6bfc90cf5c61c037eee21d5995e1a4248fa6cc1d6271b00e3e9cf31e66f5e62d_prof);

        
        $__internal_8cb3d56dbb5f21448889408979ff097c0824e26d1443ff31ce78ff377ba9cc1f->leave($__internal_8cb3d56dbb5f21448889408979ff097c0824e26d1443ff31ce78ff377ba9cc1f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
