<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_d0c09842da775628f8152e5cc7c034cb8f11d33d347b4875a6f47c74a1fd3f48 extends Twig_Template
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
        $__internal_5494d27351bf218c771eb77a9d3346bb00acdbe41ed4c22ab71fb4cfe32aaa98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5494d27351bf218c771eb77a9d3346bb00acdbe41ed4c22ab71fb4cfe32aaa98->enter($__internal_5494d27351bf218c771eb77a9d3346bb00acdbe41ed4c22ab71fb4cfe32aaa98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_066b828d0cf23f5a8ade0b600b64f5a25c0910adeb3640017e1daa553fcae1a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_066b828d0cf23f5a8ade0b600b64f5a25c0910adeb3640017e1daa553fcae1a8->enter($__internal_066b828d0cf23f5a8ade0b600b64f5a25c0910adeb3640017e1daa553fcae1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_5494d27351bf218c771eb77a9d3346bb00acdbe41ed4c22ab71fb4cfe32aaa98->leave($__internal_5494d27351bf218c771eb77a9d3346bb00acdbe41ed4c22ab71fb4cfe32aaa98_prof);

        
        $__internal_066b828d0cf23f5a8ade0b600b64f5a25c0910adeb3640017e1daa553fcae1a8->leave($__internal_066b828d0cf23f5a8ade0b600b64f5a25c0910adeb3640017e1daa553fcae1a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
