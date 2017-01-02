<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_e3bcb6526f794aa83b95019bb890a2987df7050a487b335ad25c31eb56a02cbf extends Twig_Template
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
        $__internal_97170d36271972b95fc09bff5fe217a0256020d7a8b8d084ede053c5c7204baa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97170d36271972b95fc09bff5fe217a0256020d7a8b8d084ede053c5c7204baa->enter($__internal_97170d36271972b95fc09bff5fe217a0256020d7a8b8d084ede053c5c7204baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_59b0f3d7d119710a0640496be2885371fb5214df6c614ce5e6be93fc92201dee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b0f3d7d119710a0640496be2885371fb5214df6c614ce5e6be93fc92201dee->enter($__internal_59b0f3d7d119710a0640496be2885371fb5214df6c614ce5e6be93fc92201dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_97170d36271972b95fc09bff5fe217a0256020d7a8b8d084ede053c5c7204baa->leave($__internal_97170d36271972b95fc09bff5fe217a0256020d7a8b8d084ede053c5c7204baa_prof);

        
        $__internal_59b0f3d7d119710a0640496be2885371fb5214df6c614ce5e6be93fc92201dee->leave($__internal_59b0f3d7d119710a0640496be2885371fb5214df6c614ce5e6be93fc92201dee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
