<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_a6f3caae244258fc49cf361366d780f21bc37b49ea7a03c98cec00df65b9b9e3 extends Twig_Template
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
        $__internal_01aafa9c08303688b881917dd5948e180d8ad8a4b235975962828c3d4153a86f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01aafa9c08303688b881917dd5948e180d8ad8a4b235975962828c3d4153a86f->enter($__internal_01aafa9c08303688b881917dd5948e180d8ad8a4b235975962828c3d4153a86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_4ee31329aa42a0793f1b4dffd7a477c6d7adf5309569669c10ce6d872ce0f1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ee31329aa42a0793f1b4dffd7a477c6d7adf5309569669c10ce6d872ce0f1b0->enter($__internal_4ee31329aa42a0793f1b4dffd7a477c6d7adf5309569669c10ce6d872ce0f1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_01aafa9c08303688b881917dd5948e180d8ad8a4b235975962828c3d4153a86f->leave($__internal_01aafa9c08303688b881917dd5948e180d8ad8a4b235975962828c3d4153a86f_prof);

        
        $__internal_4ee31329aa42a0793f1b4dffd7a477c6d7adf5309569669c10ce6d872ce0f1b0->leave($__internal_4ee31329aa42a0793f1b4dffd7a477c6d7adf5309569669c10ce6d872ce0f1b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
