<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_5f562ad9d3df6584582699adea1cfe6dd771e1d8728aae90ae8af10d851fa849 extends Twig_Template
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
        $__internal_6e89c25048558e875914a26089a6a0d6404c1fa915d0ddd5e3f45efd61607067 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e89c25048558e875914a26089a6a0d6404c1fa915d0ddd5e3f45efd61607067->enter($__internal_6e89c25048558e875914a26089a6a0d6404c1fa915d0ddd5e3f45efd61607067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_20a194b66de1e0f2a9a8d38b863a4997c2cb4717846c373e9f41559afff8a33f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20a194b66de1e0f2a9a8d38b863a4997c2cb4717846c373e9f41559afff8a33f->enter($__internal_20a194b66de1e0f2a9a8d38b863a4997c2cb4717846c373e9f41559afff8a33f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_6e89c25048558e875914a26089a6a0d6404c1fa915d0ddd5e3f45efd61607067->leave($__internal_6e89c25048558e875914a26089a6a0d6404c1fa915d0ddd5e3f45efd61607067_prof);

        
        $__internal_20a194b66de1e0f2a9a8d38b863a4997c2cb4717846c373e9f41559afff8a33f->leave($__internal_20a194b66de1e0f2a9a8d38b863a4997c2cb4717846c373e9f41559afff8a33f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
