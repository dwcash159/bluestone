<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_6458bd02750f3483ff300a2c93556bc0ac5d1b5c63b42fd8f6e23ee26258760a extends Twig_Template
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
        $__internal_863811566831984e23adf02abe21e50302991890affeafbecdf54f7c9e814bcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_863811566831984e23adf02abe21e50302991890affeafbecdf54f7c9e814bcc->enter($__internal_863811566831984e23adf02abe21e50302991890affeafbecdf54f7c9e814bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_04f869cf36e15f6f85080be6d003e9aae6bfc439b91e1fdcb68de980e6971055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04f869cf36e15f6f85080be6d003e9aae6bfc439b91e1fdcb68de980e6971055->enter($__internal_04f869cf36e15f6f85080be6d003e9aae6bfc439b91e1fdcb68de980e6971055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_863811566831984e23adf02abe21e50302991890affeafbecdf54f7c9e814bcc->leave($__internal_863811566831984e23adf02abe21e50302991890affeafbecdf54f7c9e814bcc_prof);

        
        $__internal_04f869cf36e15f6f85080be6d003e9aae6bfc439b91e1fdcb68de980e6971055->leave($__internal_04f869cf36e15f6f85080be6d003e9aae6bfc439b91e1fdcb68de980e6971055_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
