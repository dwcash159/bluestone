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
        $__internal_6c85b76b39a278eb6e5af8d2d372d7c2070db441e5d8dae3ddd6dbd8bc6f6d2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c85b76b39a278eb6e5af8d2d372d7c2070db441e5d8dae3ddd6dbd8bc6f6d2d->enter($__internal_6c85b76b39a278eb6e5af8d2d372d7c2070db441e5d8dae3ddd6dbd8bc6f6d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_3dff666346ca04af284cca050f8fee48f68392b6221d29629c747be0e2c34ecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dff666346ca04af284cca050f8fee48f68392b6221d29629c747be0e2c34ecc->enter($__internal_3dff666346ca04af284cca050f8fee48f68392b6221d29629c747be0e2c34ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_6c85b76b39a278eb6e5af8d2d372d7c2070db441e5d8dae3ddd6dbd8bc6f6d2d->leave($__internal_6c85b76b39a278eb6e5af8d2d372d7c2070db441e5d8dae3ddd6dbd8bc6f6d2d_prof);

        
        $__internal_3dff666346ca04af284cca050f8fee48f68392b6221d29629c747be0e2c34ecc->leave($__internal_3dff666346ca04af284cca050f8fee48f68392b6221d29629c747be0e2c34ecc_prof);

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
