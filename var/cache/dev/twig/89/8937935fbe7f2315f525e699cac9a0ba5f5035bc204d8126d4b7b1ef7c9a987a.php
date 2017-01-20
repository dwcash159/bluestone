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
        $__internal_7108d807f3d9ee43c0e1e6f1710b73f79646b57af09699bd2d2020dbe77ba85e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7108d807f3d9ee43c0e1e6f1710b73f79646b57af09699bd2d2020dbe77ba85e->enter($__internal_7108d807f3d9ee43c0e1e6f1710b73f79646b57af09699bd2d2020dbe77ba85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_134b70b261f127009846237aa3fd64386ddbc2f6c2d76a30786ddb2a9cc4ce36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_134b70b261f127009846237aa3fd64386ddbc2f6c2d76a30786ddb2a9cc4ce36->enter($__internal_134b70b261f127009846237aa3fd64386ddbc2f6c2d76a30786ddb2a9cc4ce36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_7108d807f3d9ee43c0e1e6f1710b73f79646b57af09699bd2d2020dbe77ba85e->leave($__internal_7108d807f3d9ee43c0e1e6f1710b73f79646b57af09699bd2d2020dbe77ba85e_prof);

        
        $__internal_134b70b261f127009846237aa3fd64386ddbc2f6c2d76a30786ddb2a9cc4ce36->leave($__internal_134b70b261f127009846237aa3fd64386ddbc2f6c2d76a30786ddb2a9cc4ce36_prof);

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
