<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8c9f850aaeabd0c9bea1e87c2a6b93063b4f9dd616eb482ac319009749a9a7c6 extends Twig_Template
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
        $__internal_4a95cefd1af4587cae01cb8402167253585c61ee54ad7044744477d025e39d55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a95cefd1af4587cae01cb8402167253585c61ee54ad7044744477d025e39d55->enter($__internal_4a95cefd1af4587cae01cb8402167253585c61ee54ad7044744477d025e39d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_cbdfea8c174b04cdbc9c9fabb257e60d9609f2a9c57c6919d15dcc4660e05b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbdfea8c174b04cdbc9c9fabb257e60d9609f2a9c57c6919d15dcc4660e05b24->enter($__internal_cbdfea8c174b04cdbc9c9fabb257e60d9609f2a9c57c6919d15dcc4660e05b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_4a95cefd1af4587cae01cb8402167253585c61ee54ad7044744477d025e39d55->leave($__internal_4a95cefd1af4587cae01cb8402167253585c61ee54ad7044744477d025e39d55_prof);

        
        $__internal_cbdfea8c174b04cdbc9c9fabb257e60d9609f2a9c57c6919d15dcc4660e05b24->leave($__internal_cbdfea8c174b04cdbc9c9fabb257e60d9609f2a9c57c6919d15dcc4660e05b24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
