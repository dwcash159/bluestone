<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_21efa291d45206a4b14384c8272d1e720cc1967cb7b8e640302031040eff3c5c extends Twig_Template
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
        $__internal_449b1bdaf601aa73518fdbe4e1e348772ca2d7ca734c4036f15c0a3213152011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_449b1bdaf601aa73518fdbe4e1e348772ca2d7ca734c4036f15c0a3213152011->enter($__internal_449b1bdaf601aa73518fdbe4e1e348772ca2d7ca734c4036f15c0a3213152011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_8a231100f11a875cf0aa3be40109fbc40735e559e22ffffe61bdb4e8edbb1bbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a231100f11a875cf0aa3be40109fbc40735e559e22ffffe61bdb4e8edbb1bbb->enter($__internal_8a231100f11a875cf0aa3be40109fbc40735e559e22ffffe61bdb4e8edbb1bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_449b1bdaf601aa73518fdbe4e1e348772ca2d7ca734c4036f15c0a3213152011->leave($__internal_449b1bdaf601aa73518fdbe4e1e348772ca2d7ca734c4036f15c0a3213152011_prof);

        
        $__internal_8a231100f11a875cf0aa3be40109fbc40735e559e22ffffe61bdb4e8edbb1bbb->leave($__internal_8a231100f11a875cf0aa3be40109fbc40735e559e22ffffe61bdb4e8edbb1bbb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
