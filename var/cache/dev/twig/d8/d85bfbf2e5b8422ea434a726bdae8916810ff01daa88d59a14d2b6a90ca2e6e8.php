<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_4b3cbd3ae86ada776cf4766a55bb32f5277455c8db5310ccb1c64e9e2755e09c extends Twig_Template
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
        $__internal_24f28751fdf4e693c1808ff6d8bc4df2d9cf681e7000bf48b3b6683217fd3fb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24f28751fdf4e693c1808ff6d8bc4df2d9cf681e7000bf48b3b6683217fd3fb9->enter($__internal_24f28751fdf4e693c1808ff6d8bc4df2d9cf681e7000bf48b3b6683217fd3fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_3c4f8ec7ceb038cb25d922dfb2ac60129affc651f97e4657a09b84f0f95e4bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c4f8ec7ceb038cb25d922dfb2ac60129affc651f97e4657a09b84f0f95e4bca->enter($__internal_3c4f8ec7ceb038cb25d922dfb2ac60129affc651f97e4657a09b84f0f95e4bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_24f28751fdf4e693c1808ff6d8bc4df2d9cf681e7000bf48b3b6683217fd3fb9->leave($__internal_24f28751fdf4e693c1808ff6d8bc4df2d9cf681e7000bf48b3b6683217fd3fb9_prof);

        
        $__internal_3c4f8ec7ceb038cb25d922dfb2ac60129affc651f97e4657a09b84f0f95e4bca->leave($__internal_3c4f8ec7ceb038cb25d922dfb2ac60129affc651f97e4657a09b84f0f95e4bca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
