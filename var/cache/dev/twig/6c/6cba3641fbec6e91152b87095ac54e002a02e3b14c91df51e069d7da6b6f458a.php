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
        $__internal_98aaf559ef4dce22fc1e0db0bd85f3b42486cfeee687df2856ceb1b6baf89d86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98aaf559ef4dce22fc1e0db0bd85f3b42486cfeee687df2856ceb1b6baf89d86->enter($__internal_98aaf559ef4dce22fc1e0db0bd85f3b42486cfeee687df2856ceb1b6baf89d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_528f2cb5f2298170db79f6b9555f75d991be419aaa6410e30c85f98b8e7cc13a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_528f2cb5f2298170db79f6b9555f75d991be419aaa6410e30c85f98b8e7cc13a->enter($__internal_528f2cb5f2298170db79f6b9555f75d991be419aaa6410e30c85f98b8e7cc13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_98aaf559ef4dce22fc1e0db0bd85f3b42486cfeee687df2856ceb1b6baf89d86->leave($__internal_98aaf559ef4dce22fc1e0db0bd85f3b42486cfeee687df2856ceb1b6baf89d86_prof);

        
        $__internal_528f2cb5f2298170db79f6b9555f75d991be419aaa6410e30c85f98b8e7cc13a->leave($__internal_528f2cb5f2298170db79f6b9555f75d991be419aaa6410e30c85f98b8e7cc13a_prof);

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
