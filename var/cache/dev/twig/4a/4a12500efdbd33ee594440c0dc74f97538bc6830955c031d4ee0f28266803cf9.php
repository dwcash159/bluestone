<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_d0c09842da775628f8152e5cc7c034cb8f11d33d347b4875a6f47c74a1fd3f48 extends Twig_Template
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
        $__internal_a5ea532b350cb898b52c6835e43e18336f3a55ab78b03515a64395741c6b1b04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5ea532b350cb898b52c6835e43e18336f3a55ab78b03515a64395741c6b1b04->enter($__internal_a5ea532b350cb898b52c6835e43e18336f3a55ab78b03515a64395741c6b1b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_7ded759cca6c63dc675523be365c53e2585bfc6aefd01d8b2819a732865c85c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ded759cca6c63dc675523be365c53e2585bfc6aefd01d8b2819a732865c85c9->enter($__internal_7ded759cca6c63dc675523be365c53e2585bfc6aefd01d8b2819a732865c85c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a5ea532b350cb898b52c6835e43e18336f3a55ab78b03515a64395741c6b1b04->leave($__internal_a5ea532b350cb898b52c6835e43e18336f3a55ab78b03515a64395741c6b1b04_prof);

        
        $__internal_7ded759cca6c63dc675523be365c53e2585bfc6aefd01d8b2819a732865c85c9->leave($__internal_7ded759cca6c63dc675523be365c53e2585bfc6aefd01d8b2819a732865c85c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
