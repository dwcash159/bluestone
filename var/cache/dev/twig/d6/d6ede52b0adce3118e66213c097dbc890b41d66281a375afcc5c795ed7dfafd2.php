<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_dd8d53c04a2f9be7ca9ea478ed56fef27450d676d2145dde6bb64a3e0f10a554 extends Twig_Template
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
        $__internal_df500785458bf762335f3bddf4f03657209ec4311695998155e5c4ebef01ba2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df500785458bf762335f3bddf4f03657209ec4311695998155e5c4ebef01ba2c->enter($__internal_df500785458bf762335f3bddf4f03657209ec4311695998155e5c4ebef01ba2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_814e3e5013e874be756ba4d6c2e37828e300b0038204e3067ee7045089da6607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_814e3e5013e874be756ba4d6c2e37828e300b0038204e3067ee7045089da6607->enter($__internal_814e3e5013e874be756ba4d6c2e37828e300b0038204e3067ee7045089da6607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_df500785458bf762335f3bddf4f03657209ec4311695998155e5c4ebef01ba2c->leave($__internal_df500785458bf762335f3bddf4f03657209ec4311695998155e5c4ebef01ba2c_prof);

        
        $__internal_814e3e5013e874be756ba4d6c2e37828e300b0038204e3067ee7045089da6607->leave($__internal_814e3e5013e874be756ba4d6c2e37828e300b0038204e3067ee7045089da6607_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
