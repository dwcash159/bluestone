<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_1920e96498a3c169f977e2197f130d2961dfb5f804c708222b8a97d99118f58a extends Twig_Template
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
        $__internal_8b8589d6e1ecdf8d3175e64c3099d01f5d40ebe4623f487df716a89178bad378 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b8589d6e1ecdf8d3175e64c3099d01f5d40ebe4623f487df716a89178bad378->enter($__internal_8b8589d6e1ecdf8d3175e64c3099d01f5d40ebe4623f487df716a89178bad378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_cdbb0da9059e41af06a2a4ca1c2b0b13f4046a791bf37f3113b970aaa0369ab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdbb0da9059e41af06a2a4ca1c2b0b13f4046a791bf37f3113b970aaa0369ab5->enter($__internal_cdbb0da9059e41af06a2a4ca1c2b0b13f4046a791bf37f3113b970aaa0369ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_8b8589d6e1ecdf8d3175e64c3099d01f5d40ebe4623f487df716a89178bad378->leave($__internal_8b8589d6e1ecdf8d3175e64c3099d01f5d40ebe4623f487df716a89178bad378_prof);

        
        $__internal_cdbb0da9059e41af06a2a4ca1c2b0b13f4046a791bf37f3113b970aaa0369ab5->leave($__internal_cdbb0da9059e41af06a2a4ca1c2b0b13f4046a791bf37f3113b970aaa0369ab5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
