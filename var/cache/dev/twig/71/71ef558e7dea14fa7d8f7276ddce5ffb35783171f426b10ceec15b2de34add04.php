<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_8dcd8744225ee74c61152363aad54a3876d4778b3f6ed2d35b1615d3cfb6b821 extends Twig_Template
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
        $__internal_99cfb4693c5d330f7b1c5c2813044eb2cf794bd4a4ab6f2129191e4ebf8f9daa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99cfb4693c5d330f7b1c5c2813044eb2cf794bd4a4ab6f2129191e4ebf8f9daa->enter($__internal_99cfb4693c5d330f7b1c5c2813044eb2cf794bd4a4ab6f2129191e4ebf8f9daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_5d3be6dca059607f9fba15ce7e3c2f9dfca2543686ef45667aa9c1cb49d0c5df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d3be6dca059607f9fba15ce7e3c2f9dfca2543686ef45667aa9c1cb49d0c5df->enter($__internal_5d3be6dca059607f9fba15ce7e3c2f9dfca2543686ef45667aa9c1cb49d0c5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_99cfb4693c5d330f7b1c5c2813044eb2cf794bd4a4ab6f2129191e4ebf8f9daa->leave($__internal_99cfb4693c5d330f7b1c5c2813044eb2cf794bd4a4ab6f2129191e4ebf8f9daa_prof);

        
        $__internal_5d3be6dca059607f9fba15ce7e3c2f9dfca2543686ef45667aa9c1cb49d0c5df->leave($__internal_5d3be6dca059607f9fba15ce7e3c2f9dfca2543686ef45667aa9c1cb49d0c5df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
