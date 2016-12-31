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
        $__internal_3d4c020aab1ab0bafbe5f3d051d81db652252b6dd61624dc2ced6ba16e0571fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d4c020aab1ab0bafbe5f3d051d81db652252b6dd61624dc2ced6ba16e0571fe->enter($__internal_3d4c020aab1ab0bafbe5f3d051d81db652252b6dd61624dc2ced6ba16e0571fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_7aff4a476413d74c751f42a2cdcbf9e356dd257a19e2ecb27a97a13573e1eda0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aff4a476413d74c751f42a2cdcbf9e356dd257a19e2ecb27a97a13573e1eda0->enter($__internal_7aff4a476413d74c751f42a2cdcbf9e356dd257a19e2ecb27a97a13573e1eda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_3d4c020aab1ab0bafbe5f3d051d81db652252b6dd61624dc2ced6ba16e0571fe->leave($__internal_3d4c020aab1ab0bafbe5f3d051d81db652252b6dd61624dc2ced6ba16e0571fe_prof);

        
        $__internal_7aff4a476413d74c751f42a2cdcbf9e356dd257a19e2ecb27a97a13573e1eda0->leave($__internal_7aff4a476413d74c751f42a2cdcbf9e356dd257a19e2ecb27a97a13573e1eda0_prof);

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
