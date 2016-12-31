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
        $__internal_c11439763816eb11eaba562babb3829da3ce4199394f764fafccbc05be737655 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c11439763816eb11eaba562babb3829da3ce4199394f764fafccbc05be737655->enter($__internal_c11439763816eb11eaba562babb3829da3ce4199394f764fafccbc05be737655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_d4106b1c7d58b7f4e220af3abb86c3f38719491b90cb87e9c1e622abde1d7f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4106b1c7d58b7f4e220af3abb86c3f38719491b90cb87e9c1e622abde1d7f2a->enter($__internal_d4106b1c7d58b7f4e220af3abb86c3f38719491b90cb87e9c1e622abde1d7f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_c11439763816eb11eaba562babb3829da3ce4199394f764fafccbc05be737655->leave($__internal_c11439763816eb11eaba562babb3829da3ce4199394f764fafccbc05be737655_prof);

        
        $__internal_d4106b1c7d58b7f4e220af3abb86c3f38719491b90cb87e9c1e622abde1d7f2a->leave($__internal_d4106b1c7d58b7f4e220af3abb86c3f38719491b90cb87e9c1e622abde1d7f2a_prof);

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
