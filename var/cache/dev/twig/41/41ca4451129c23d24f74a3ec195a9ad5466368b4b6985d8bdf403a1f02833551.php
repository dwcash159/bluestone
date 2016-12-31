<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_6f65ba6cbd334586800cca9f69f38849ea51aaa9ecf655adbae06865a4eef7d5 extends Twig_Template
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
        $__internal_d120eed55986ea666e3c3c21060b90d75c33e2cff4e71c73d71ac67d69058e08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d120eed55986ea666e3c3c21060b90d75c33e2cff4e71c73d71ac67d69058e08->enter($__internal_d120eed55986ea666e3c3c21060b90d75c33e2cff4e71c73d71ac67d69058e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_8151cfbbf2c5b5b45584e16633872933414ed388062552ecf2bba0edc6e345dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8151cfbbf2c5b5b45584e16633872933414ed388062552ecf2bba0edc6e345dd->enter($__internal_8151cfbbf2c5b5b45584e16633872933414ed388062552ecf2bba0edc6e345dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_d120eed55986ea666e3c3c21060b90d75c33e2cff4e71c73d71ac67d69058e08->leave($__internal_d120eed55986ea666e3c3c21060b90d75c33e2cff4e71c73d71ac67d69058e08_prof);

        
        $__internal_8151cfbbf2c5b5b45584e16633872933414ed388062552ecf2bba0edc6e345dd->leave($__internal_8151cfbbf2c5b5b45584e16633872933414ed388062552ecf2bba0edc6e345dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
