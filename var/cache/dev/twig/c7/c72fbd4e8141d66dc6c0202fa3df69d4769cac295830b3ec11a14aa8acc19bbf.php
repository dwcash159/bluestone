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
        $__internal_d1304a5a9f2790f95595e0fe550b961c4ac2790c0b59c6b7ac72d0d929d908ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1304a5a9f2790f95595e0fe550b961c4ac2790c0b59c6b7ac72d0d929d908ce->enter($__internal_d1304a5a9f2790f95595e0fe550b961c4ac2790c0b59c6b7ac72d0d929d908ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_622d6e416c759d5e8e104dcd710289c0dcf7922dc659fe35ad94f53697c21155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_622d6e416c759d5e8e104dcd710289c0dcf7922dc659fe35ad94f53697c21155->enter($__internal_622d6e416c759d5e8e104dcd710289c0dcf7922dc659fe35ad94f53697c21155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d1304a5a9f2790f95595e0fe550b961c4ac2790c0b59c6b7ac72d0d929d908ce->leave($__internal_d1304a5a9f2790f95595e0fe550b961c4ac2790c0b59c6b7ac72d0d929d908ce_prof);

        
        $__internal_622d6e416c759d5e8e104dcd710289c0dcf7922dc659fe35ad94f53697c21155->leave($__internal_622d6e416c759d5e8e104dcd710289c0dcf7922dc659fe35ad94f53697c21155_prof);

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
