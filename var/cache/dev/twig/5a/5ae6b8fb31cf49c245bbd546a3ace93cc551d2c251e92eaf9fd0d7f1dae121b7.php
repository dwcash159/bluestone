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
        $__internal_2098df7b035ccc1a7b3055d4f1dbe749d24138dcb23335c6fad55c0eaeb263a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2098df7b035ccc1a7b3055d4f1dbe749d24138dcb23335c6fad55c0eaeb263a4->enter($__internal_2098df7b035ccc1a7b3055d4f1dbe749d24138dcb23335c6fad55c0eaeb263a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_30e8307445cd28943994c4e3b677345e61436c0e73b3f1cdedf7ab24afb7d517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30e8307445cd28943994c4e3b677345e61436c0e73b3f1cdedf7ab24afb7d517->enter($__internal_30e8307445cd28943994c4e3b677345e61436c0e73b3f1cdedf7ab24afb7d517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_2098df7b035ccc1a7b3055d4f1dbe749d24138dcb23335c6fad55c0eaeb263a4->leave($__internal_2098df7b035ccc1a7b3055d4f1dbe749d24138dcb23335c6fad55c0eaeb263a4_prof);

        
        $__internal_30e8307445cd28943994c4e3b677345e61436c0e73b3f1cdedf7ab24afb7d517->leave($__internal_30e8307445cd28943994c4e3b677345e61436c0e73b3f1cdedf7ab24afb7d517_prof);

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
