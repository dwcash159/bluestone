<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8c9f850aaeabd0c9bea1e87c2a6b93063b4f9dd616eb482ac319009749a9a7c6 extends Twig_Template
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
        $__internal_6c48aaaa1c6ba9b950a644727c54c3a649ba18727dd7439ea0345d808a8686fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c48aaaa1c6ba9b950a644727c54c3a649ba18727dd7439ea0345d808a8686fd->enter($__internal_6c48aaaa1c6ba9b950a644727c54c3a649ba18727dd7439ea0345d808a8686fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_c840d1ddf75a80e4f70c6a9577e95266df82eb7c7d8053704b5a9e409d91de71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c840d1ddf75a80e4f70c6a9577e95266df82eb7c7d8053704b5a9e409d91de71->enter($__internal_c840d1ddf75a80e4f70c6a9577e95266df82eb7c7d8053704b5a9e409d91de71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_6c48aaaa1c6ba9b950a644727c54c3a649ba18727dd7439ea0345d808a8686fd->leave($__internal_6c48aaaa1c6ba9b950a644727c54c3a649ba18727dd7439ea0345d808a8686fd_prof);

        
        $__internal_c840d1ddf75a80e4f70c6a9577e95266df82eb7c7d8053704b5a9e409d91de71->leave($__internal_c840d1ddf75a80e4f70c6a9577e95266df82eb7c7d8053704b5a9e409d91de71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
