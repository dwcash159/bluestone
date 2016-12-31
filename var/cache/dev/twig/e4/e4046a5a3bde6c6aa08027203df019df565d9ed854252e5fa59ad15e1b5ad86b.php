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
        $__internal_adbb6b29423cda73bfa2bd7673ecd3a5d808d77dd4ca2cf64762b2d6925dba89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adbb6b29423cda73bfa2bd7673ecd3a5d808d77dd4ca2cf64762b2d6925dba89->enter($__internal_adbb6b29423cda73bfa2bd7673ecd3a5d808d77dd4ca2cf64762b2d6925dba89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_5b6fcb22629a46f7aee1c39185f63ab7d3e687c01b543faf4686d44843e0ee8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b6fcb22629a46f7aee1c39185f63ab7d3e687c01b543faf4686d44843e0ee8c->enter($__internal_5b6fcb22629a46f7aee1c39185f63ab7d3e687c01b543faf4686d44843e0ee8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_adbb6b29423cda73bfa2bd7673ecd3a5d808d77dd4ca2cf64762b2d6925dba89->leave($__internal_adbb6b29423cda73bfa2bd7673ecd3a5d808d77dd4ca2cf64762b2d6925dba89_prof);

        
        $__internal_5b6fcb22629a46f7aee1c39185f63ab7d3e687c01b543faf4686d44843e0ee8c->leave($__internal_5b6fcb22629a46f7aee1c39185f63ab7d3e687c01b543faf4686d44843e0ee8c_prof);

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
