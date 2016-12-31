<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_ca898f63c5019cdda760af94e65a25410f06d02b886701c8a5dac3d1acbb163e extends Twig_Template
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
        $__internal_ce28cdf18f409d3a85a29c6895b1a971e7a80fd7513f092600bb0d7bdc25eab7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce28cdf18f409d3a85a29c6895b1a971e7a80fd7513f092600bb0d7bdc25eab7->enter($__internal_ce28cdf18f409d3a85a29c6895b1a971e7a80fd7513f092600bb0d7bdc25eab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_3e767f9e26a1f5de0e8af9ab05fe5bf2503a52c3b6278b6e18b26b4306bd539e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e767f9e26a1f5de0e8af9ab05fe5bf2503a52c3b6278b6e18b26b4306bd539e->enter($__internal_3e767f9e26a1f5de0e8af9ab05fe5bf2503a52c3b6278b6e18b26b4306bd539e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_ce28cdf18f409d3a85a29c6895b1a971e7a80fd7513f092600bb0d7bdc25eab7->leave($__internal_ce28cdf18f409d3a85a29c6895b1a971e7a80fd7513f092600bb0d7bdc25eab7_prof);

        
        $__internal_3e767f9e26a1f5de0e8af9ab05fe5bf2503a52c3b6278b6e18b26b4306bd539e->leave($__internal_3e767f9e26a1f5de0e8af9ab05fe5bf2503a52c3b6278b6e18b26b4306bd539e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
