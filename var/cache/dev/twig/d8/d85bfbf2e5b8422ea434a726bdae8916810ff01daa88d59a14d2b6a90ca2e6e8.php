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
        $__internal_a7d9cf0bfa045462cd99349bce6b46a4808119eb20517699878d352fa683b5ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7d9cf0bfa045462cd99349bce6b46a4808119eb20517699878d352fa683b5ce->enter($__internal_a7d9cf0bfa045462cd99349bce6b46a4808119eb20517699878d352fa683b5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_f7ade3e2cc76adfee11fab6efdcd81af0a3687f199ec942bc591a6e97c2afdcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ade3e2cc76adfee11fab6efdcd81af0a3687f199ec942bc591a6e97c2afdcf->enter($__internal_f7ade3e2cc76adfee11fab6efdcd81af0a3687f199ec942bc591a6e97c2afdcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_a7d9cf0bfa045462cd99349bce6b46a4808119eb20517699878d352fa683b5ce->leave($__internal_a7d9cf0bfa045462cd99349bce6b46a4808119eb20517699878d352fa683b5ce_prof);

        
        $__internal_f7ade3e2cc76adfee11fab6efdcd81af0a3687f199ec942bc591a6e97c2afdcf->leave($__internal_f7ade3e2cc76adfee11fab6efdcd81af0a3687f199ec942bc591a6e97c2afdcf_prof);

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
