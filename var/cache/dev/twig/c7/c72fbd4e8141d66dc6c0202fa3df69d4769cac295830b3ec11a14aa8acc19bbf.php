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
        $__internal_75c2cf578314295079476209ddd7229c65bbc5c8713fcc3eb6eb87e64e3a8b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75c2cf578314295079476209ddd7229c65bbc5c8713fcc3eb6eb87e64e3a8b80->enter($__internal_75c2cf578314295079476209ddd7229c65bbc5c8713fcc3eb6eb87e64e3a8b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_9de6a5b3d3175e4d3069dbf240ae323e1e46fa7894af5a81564b51ecc72587ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9de6a5b3d3175e4d3069dbf240ae323e1e46fa7894af5a81564b51ecc72587ab->enter($__internal_9de6a5b3d3175e4d3069dbf240ae323e1e46fa7894af5a81564b51ecc72587ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_75c2cf578314295079476209ddd7229c65bbc5c8713fcc3eb6eb87e64e3a8b80->leave($__internal_75c2cf578314295079476209ddd7229c65bbc5c8713fcc3eb6eb87e64e3a8b80_prof);

        
        $__internal_9de6a5b3d3175e4d3069dbf240ae323e1e46fa7894af5a81564b51ecc72587ab->leave($__internal_9de6a5b3d3175e4d3069dbf240ae323e1e46fa7894af5a81564b51ecc72587ab_prof);

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
