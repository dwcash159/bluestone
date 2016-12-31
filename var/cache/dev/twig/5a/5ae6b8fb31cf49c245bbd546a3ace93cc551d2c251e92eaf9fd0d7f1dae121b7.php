<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_e67c6123f6f54c14b0aa61ec9eb4357fd2972e509d877156f1fa45e94efd583d extends Twig_Template
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
        $__internal_989fb9fb6d19a1a1a5401a8deaef64a8d8020ef68ae279ff3ad92a15c602b888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_989fb9fb6d19a1a1a5401a8deaef64a8d8020ef68ae279ff3ad92a15c602b888->enter($__internal_989fb9fb6d19a1a1a5401a8deaef64a8d8020ef68ae279ff3ad92a15c602b888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_16082a5a7c5495155d795a22f4ea435a62ebb93c20f336c286913d8c4d562563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16082a5a7c5495155d795a22f4ea435a62ebb93c20f336c286913d8c4d562563->enter($__internal_16082a5a7c5495155d795a22f4ea435a62ebb93c20f336c286913d8c4d562563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_989fb9fb6d19a1a1a5401a8deaef64a8d8020ef68ae279ff3ad92a15c602b888->leave($__internal_989fb9fb6d19a1a1a5401a8deaef64a8d8020ef68ae279ff3ad92a15c602b888_prof);

        
        $__internal_16082a5a7c5495155d795a22f4ea435a62ebb93c20f336c286913d8c4d562563->leave($__internal_16082a5a7c5495155d795a22f4ea435a62ebb93c20f336c286913d8c4d562563_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
