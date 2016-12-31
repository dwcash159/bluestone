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
        $__internal_4b7edd1fc1ba83162f67540d69698df9b012f74f3575e7194bd3c68ac42329c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b7edd1fc1ba83162f67540d69698df9b012f74f3575e7194bd3c68ac42329c9->enter($__internal_4b7edd1fc1ba83162f67540d69698df9b012f74f3575e7194bd3c68ac42329c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_ad0bf4621e293b6fd284ff6725503e32e64805beaca016434a8ff8189b72a1f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad0bf4621e293b6fd284ff6725503e32e64805beaca016434a8ff8189b72a1f1->enter($__internal_ad0bf4621e293b6fd284ff6725503e32e64805beaca016434a8ff8189b72a1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_4b7edd1fc1ba83162f67540d69698df9b012f74f3575e7194bd3c68ac42329c9->leave($__internal_4b7edd1fc1ba83162f67540d69698df9b012f74f3575e7194bd3c68ac42329c9_prof);

        
        $__internal_ad0bf4621e293b6fd284ff6725503e32e64805beaca016434a8ff8189b72a1f1->leave($__internal_ad0bf4621e293b6fd284ff6725503e32e64805beaca016434a8ff8189b72a1f1_prof);

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
