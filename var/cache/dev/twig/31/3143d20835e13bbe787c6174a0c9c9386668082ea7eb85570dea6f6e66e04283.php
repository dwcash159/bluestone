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
        $__internal_298116554dd293a7c1ff644fc1e14d4f6542f965f96010fefa5b70ebcd446d4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_298116554dd293a7c1ff644fc1e14d4f6542f965f96010fefa5b70ebcd446d4b->enter($__internal_298116554dd293a7c1ff644fc1e14d4f6542f965f96010fefa5b70ebcd446d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_2de798c9e48544f1d2062443f3659ada49dc73d9f93ca9ed17d0258931ae9e17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de798c9e48544f1d2062443f3659ada49dc73d9f93ca9ed17d0258931ae9e17->enter($__internal_2de798c9e48544f1d2062443f3659ada49dc73d9f93ca9ed17d0258931ae9e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_298116554dd293a7c1ff644fc1e14d4f6542f965f96010fefa5b70ebcd446d4b->leave($__internal_298116554dd293a7c1ff644fc1e14d4f6542f965f96010fefa5b70ebcd446d4b_prof);

        
        $__internal_2de798c9e48544f1d2062443f3659ada49dc73d9f93ca9ed17d0258931ae9e17->leave($__internal_2de798c9e48544f1d2062443f3659ada49dc73d9f93ca9ed17d0258931ae9e17_prof);

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
