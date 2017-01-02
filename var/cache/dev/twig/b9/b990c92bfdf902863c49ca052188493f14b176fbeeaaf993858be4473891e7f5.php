<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_49f0e2b35aa9bb69d26a34473a6ef9a041a3a6dd9672e769a4a295cadd999eb8 extends Twig_Template
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
        $__internal_6f34e270e52923f7d0c18e8cfa674079d8eb7204329006476d59efde460838d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f34e270e52923f7d0c18e8cfa674079d8eb7204329006476d59efde460838d0->enter($__internal_6f34e270e52923f7d0c18e8cfa674079d8eb7204329006476d59efde460838d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_2317a269d1a38a42a25f7525e553c92bd3779b31ba4abe4ce4424af63dedfc5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2317a269d1a38a42a25f7525e553c92bd3779b31ba4abe4ce4424af63dedfc5e->enter($__internal_2317a269d1a38a42a25f7525e553c92bd3779b31ba4abe4ce4424af63dedfc5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_6f34e270e52923f7d0c18e8cfa674079d8eb7204329006476d59efde460838d0->leave($__internal_6f34e270e52923f7d0c18e8cfa674079d8eb7204329006476d59efde460838d0_prof);

        
        $__internal_2317a269d1a38a42a25f7525e553c92bd3779b31ba4abe4ce4424af63dedfc5e->leave($__internal_2317a269d1a38a42a25f7525e553c92bd3779b31ba4abe4ce4424af63dedfc5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
