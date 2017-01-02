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
        $__internal_606159f9a16cf3c8ef55eb4d335cc9aa69855340205b3d7c92714b25fecc88a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_606159f9a16cf3c8ef55eb4d335cc9aa69855340205b3d7c92714b25fecc88a4->enter($__internal_606159f9a16cf3c8ef55eb4d335cc9aa69855340205b3d7c92714b25fecc88a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_effc6d6935b7b79a090ab4d1826b8061b83edf10ce35a567ec0d365a16e00f9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_effc6d6935b7b79a090ab4d1826b8061b83edf10ce35a567ec0d365a16e00f9a->enter($__internal_effc6d6935b7b79a090ab4d1826b8061b83edf10ce35a567ec0d365a16e00f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_606159f9a16cf3c8ef55eb4d335cc9aa69855340205b3d7c92714b25fecc88a4->leave($__internal_606159f9a16cf3c8ef55eb4d335cc9aa69855340205b3d7c92714b25fecc88a4_prof);

        
        $__internal_effc6d6935b7b79a090ab4d1826b8061b83edf10ce35a567ec0d365a16e00f9a->leave($__internal_effc6d6935b7b79a090ab4d1826b8061b83edf10ce35a567ec0d365a16e00f9a_prof);

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
