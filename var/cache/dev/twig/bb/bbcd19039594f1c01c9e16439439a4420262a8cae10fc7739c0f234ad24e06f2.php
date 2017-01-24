<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_71aea15600858ff939ba81b62f78a5c2df768d43c4cf9e358bef4c3ab7a62e92 extends Twig_Template
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
        $__internal_d4e663e8a122391c9791faa350a68cf76cd483d64d78448ba7e55f04044f2724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4e663e8a122391c9791faa350a68cf76cd483d64d78448ba7e55f04044f2724->enter($__internal_d4e663e8a122391c9791faa350a68cf76cd483d64d78448ba7e55f04044f2724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_deea580eaa63b1e44c63a1760fc8ee224ac826d493bb09430cc7b91775ef017b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deea580eaa63b1e44c63a1760fc8ee224ac826d493bb09430cc7b91775ef017b->enter($__internal_deea580eaa63b1e44c63a1760fc8ee224ac826d493bb09430cc7b91775ef017b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_d4e663e8a122391c9791faa350a68cf76cd483d64d78448ba7e55f04044f2724->leave($__internal_d4e663e8a122391c9791faa350a68cf76cd483d64d78448ba7e55f04044f2724_prof);

        
        $__internal_deea580eaa63b1e44c63a1760fc8ee224ac826d493bb09430cc7b91775ef017b->leave($__internal_deea580eaa63b1e44c63a1760fc8ee224ac826d493bb09430cc7b91775ef017b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
