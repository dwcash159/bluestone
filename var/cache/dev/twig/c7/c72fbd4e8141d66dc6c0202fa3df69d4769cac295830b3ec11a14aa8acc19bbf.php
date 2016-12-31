<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_96b6b5bcfab8ec658afa5ecd858af602d56ad62db80abd00703e436c50852399 extends Twig_Template
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
        $__internal_f875e8bdf5f2ceeca05f30a06bf2a9954cfa8345e6b0cc83de0993016fc999fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f875e8bdf5f2ceeca05f30a06bf2a9954cfa8345e6b0cc83de0993016fc999fe->enter($__internal_f875e8bdf5f2ceeca05f30a06bf2a9954cfa8345e6b0cc83de0993016fc999fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_c4e238160a3ac40a0e30901c4d230d8a23ba582e023038b8e6507dd9f3a5a7fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e238160a3ac40a0e30901c4d230d8a23ba582e023038b8e6507dd9f3a5a7fa->enter($__internal_c4e238160a3ac40a0e30901c4d230d8a23ba582e023038b8e6507dd9f3a5a7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_f875e8bdf5f2ceeca05f30a06bf2a9954cfa8345e6b0cc83de0993016fc999fe->leave($__internal_f875e8bdf5f2ceeca05f30a06bf2a9954cfa8345e6b0cc83de0993016fc999fe_prof);

        
        $__internal_c4e238160a3ac40a0e30901c4d230d8a23ba582e023038b8e6507dd9f3a5a7fa->leave($__internal_c4e238160a3ac40a0e30901c4d230d8a23ba582e023038b8e6507dd9f3a5a7fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
