<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_6d608d61bbd904ceaa533265000687aca34bf735062e9b339d2639f6e567ecb1 extends Twig_Template
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
        $__internal_e70a37a9cfab469a374a9397ae4175580aad79f9c9a73cae76c079eb2e13cb3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e70a37a9cfab469a374a9397ae4175580aad79f9c9a73cae76c079eb2e13cb3c->enter($__internal_e70a37a9cfab469a374a9397ae4175580aad79f9c9a73cae76c079eb2e13cb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_a0285e94453383574ff9ffbe5b736653d0aa0145ab2f47d39dcd0fdee4df1e7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0285e94453383574ff9ffbe5b736653d0aa0145ab2f47d39dcd0fdee4df1e7d->enter($__internal_a0285e94453383574ff9ffbe5b736653d0aa0145ab2f47d39dcd0fdee4df1e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e70a37a9cfab469a374a9397ae4175580aad79f9c9a73cae76c079eb2e13cb3c->leave($__internal_e70a37a9cfab469a374a9397ae4175580aad79f9c9a73cae76c079eb2e13cb3c_prof);

        
        $__internal_a0285e94453383574ff9ffbe5b736653d0aa0145ab2f47d39dcd0fdee4df1e7d->leave($__internal_a0285e94453383574ff9ffbe5b736653d0aa0145ab2f47d39dcd0fdee4df1e7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
