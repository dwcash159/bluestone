<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_556e355c72ebc853d320ee94b3881a2777dbecaaf328b2333492f4cc55f4882b extends Twig_Template
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
        $__internal_013273f84f71da8dd41eb2fa742bfcea3b5274bc8d0ae208346ce152b2982006 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_013273f84f71da8dd41eb2fa742bfcea3b5274bc8d0ae208346ce152b2982006->enter($__internal_013273f84f71da8dd41eb2fa742bfcea3b5274bc8d0ae208346ce152b2982006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_e991ec3d9ac5c2313c1d635d09169c9bcd887c124e546df5da4a8989f04593d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e991ec3d9ac5c2313c1d635d09169c9bcd887c124e546df5da4a8989f04593d9->enter($__internal_e991ec3d9ac5c2313c1d635d09169c9bcd887c124e546df5da4a8989f04593d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_013273f84f71da8dd41eb2fa742bfcea3b5274bc8d0ae208346ce152b2982006->leave($__internal_013273f84f71da8dd41eb2fa742bfcea3b5274bc8d0ae208346ce152b2982006_prof);

        
        $__internal_e991ec3d9ac5c2313c1d635d09169c9bcd887c124e546df5da4a8989f04593d9->leave($__internal_e991ec3d9ac5c2313c1d635d09169c9bcd887c124e546df5da4a8989f04593d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
