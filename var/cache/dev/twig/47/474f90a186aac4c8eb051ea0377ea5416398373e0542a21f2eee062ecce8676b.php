<?php

/* default/index.html.twig */
class __TwigTemplate_ea661da58b18b4e491173ad28d181a2a1b0a33526cc92af1df0577adb69550fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'pre_javascripts' => array($this, 'block_pre_javascripts'),
            'body' => array($this, 'block_body'),
            'post_javascripts' => array($this, 'block_post_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0169387882a09d558e1d5956f1eaa98a153a915b67fdf17451f3718d56450595 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0169387882a09d558e1d5956f1eaa98a153a915b67fdf17451f3718d56450595->enter($__internal_0169387882a09d558e1d5956f1eaa98a153a915b67fdf17451f3718d56450595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_49e07afb8d14ef8d38d1f249f41673b2232f619b84a909781acc3e417e90e409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49e07afb8d14ef8d38d1f249f41673b2232f619b84a909781acc3e417e90e409->enter($__internal_49e07afb8d14ef8d38d1f249f41673b2232f619b84a909781acc3e417e90e409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0169387882a09d558e1d5956f1eaa98a153a915b67fdf17451f3718d56450595->leave($__internal_0169387882a09d558e1d5956f1eaa98a153a915b67fdf17451f3718d56450595_prof);

        
        $__internal_49e07afb8d14ef8d38d1f249f41673b2232f619b84a909781acc3e417e90e409->leave($__internal_49e07afb8d14ef8d38d1f249f41673b2232f619b84a909781acc3e417e90e409_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ae59f8d6a2cafef9d7d53d43c72f21f1d1dca3eb95cdfbc9e9a286720143813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ae59f8d6a2cafef9d7d53d43c72f21f1d1dca3eb95cdfbc9e9a286720143813->enter($__internal_5ae59f8d6a2cafef9d7d53d43c72f21f1d1dca3eb95cdfbc9e9a286720143813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8e1e3d7f7612e156f751d530cb0473130200dfd41f985b91ef120210f081ddb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e1e3d7f7612e156f751d530cb0473130200dfd41f985b91ef120210f081ddb4->enter($__internal_8e1e3d7f7612e156f751d530cb0473130200dfd41f985b91ef120210f081ddb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "NTSS";
        
        $__internal_8e1e3d7f7612e156f751d530cb0473130200dfd41f985b91ef120210f081ddb4->leave($__internal_8e1e3d7f7612e156f751d530cb0473130200dfd41f985b91ef120210f081ddb4_prof);

        
        $__internal_5ae59f8d6a2cafef9d7d53d43c72f21f1d1dca3eb95cdfbc9e9a286720143813->leave($__internal_5ae59f8d6a2cafef9d7d53d43c72f21f1d1dca3eb95cdfbc9e9a286720143813_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8cd4bea18f0855207fd910c4afdc40a07c84eff60b1cecb0eb8ee90c3c31d798 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cd4bea18f0855207fd910c4afdc40a07c84eff60b1cecb0eb8ee90c3c31d798->enter($__internal_8cd4bea18f0855207fd910c4afdc40a07c84eff60b1cecb0eb8ee90c3c31d798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_504983f88b4052d376b9801da0c69aa9530e553b9eaf7833bb752374ad72448c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_504983f88b4052d376b9801da0c69aa9530e553b9eaf7833bb752374ad72448c->enter($__internal_504983f88b4052d376b9801da0c69aa9530e553b9eaf7833bb752374ad72448c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <!-- Bootstrap Core CSS -->
    <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
          rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href=\"vendor/magnific-popup/magnific-popup.css\" rel=\"stylesheet\">

    <!-- Theme CSS -->
    <link href=\"css/creative.min.css\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/creative.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_504983f88b4052d376b9801da0c69aa9530e553b9eaf7833bb752374ad72448c->leave($__internal_504983f88b4052d376b9801da0c69aa9530e553b9eaf7833bb752374ad72448c_prof);

        
        $__internal_8cd4bea18f0855207fd910c4afdc40a07c84eff60b1cecb0eb8ee90c3c31d798->leave($__internal_8cd4bea18f0855207fd910c4afdc40a07c84eff60b1cecb0eb8ee90c3c31d798_prof);

    }

    // line 28
    public function block_pre_javascripts($context, array $blocks = array())
    {
        $__internal_13a0ef2bb3614c3f6bf1d2cb075f25692a93895706074a03207a81da87320c38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13a0ef2bb3614c3f6bf1d2cb075f25692a93895706074a03207a81da87320c38->enter($__internal_13a0ef2bb3614c3f6bf1d2cb075f25692a93895706074a03207a81da87320c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_javascripts"));

        $__internal_b96ba60cc41f37c5fd787f12d312703c988a5fa027c622fbc8f87347670e9fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b96ba60cc41f37c5fd787f12d312703c988a5fa027c622fbc8f87347670e9fb1->enter($__internal_b96ba60cc41f37c5fd787f12d312703c988a5fa027c622fbc8f87347670e9fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_javascripts"));

        // line 29
        echo "    ";
        $this->displayParentBlock("pre_javascripts", $context, $blocks);
        echo "
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
";
        
        $__internal_b96ba60cc41f37c5fd787f12d312703c988a5fa027c622fbc8f87347670e9fb1->leave($__internal_b96ba60cc41f37c5fd787f12d312703c988a5fa027c622fbc8f87347670e9fb1_prof);

        
        $__internal_13a0ef2bb3614c3f6bf1d2cb075f25692a93895706074a03207a81da87320c38->leave($__internal_13a0ef2bb3614c3f6bf1d2cb075f25692a93895706074a03207a81da87320c38_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4d90cf87745ff792ffce7e88241b3a3801283be4655048217a5a7851dfbefcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4d90cf87745ff792ffce7e88241b3a3801283be4655048217a5a7851dfbefcc->enter($__internal_a4d90cf87745ff792ffce7e88241b3a3801283be4655048217a5a7851dfbefcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0fcb94c4382440e8eb0fe9cbdf86b580671b0bcf0ce86a912f99450066e763fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fcb94c4382440e8eb0fe9cbdf86b580671b0bcf0ce86a912f99450066e763fc->enter($__internal_0fcb94c4382440e8eb0fe9cbdf86b580671b0bcf0ce86a912f99450066e763fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "    <nav id=\"mainNav\" class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                        data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span> Menu <i class=\"fa fa-bars\"></i>
                </button>
                <a class=\"navbar-brand page-scroll hidden-md hidden-lg visible-xs-* visible-sm-*\"
                   href=\"#page-top\">NTSS</a>
                <a class=\"navbar-brand page-scroll hidden-xs hidden-sm visible-md-* visible-lg-*\" href=\"#page-top\">North
                    Texas Sleep Solutions</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a class=\"page-scroll\" href=\"#sleep\">Sleep Apnea</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#selfcheck\">Check yourself</a>
                    </li>
                    >
                    <li>
                        <a class=\"page-scroll\" href=\"#services\">Services</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#contact\">Contact</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#about\">About Us</a>
                    </li>
                    <li>
                        <a class=\"next-page\" href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("more");
        echo "\">More Info</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class=\"header-content\">
            <div class=\"header-content-inner header-custom\">
                <h1 id=\"homeHeading\">Welcome to<br>North Texas Sleep Solutions</h1>
                ";
        // line 89
        echo "                <h2>Tired of the Snoring?</h2>
                <h5>Solutions for a better Quality of Life</h5>
                <h2>Call us today<br><a class=\"phone phone-white\" href=\"tel:817-431-6764\"><i
                                class=\"fa fa-phone sr-icons\"></i> 817-431-6764</a></h2>

                ";
        // line 95
        echo "
            </div>
            <a style=\"margin-top:40px;\" href=\"#sleep\" class=\"btn btn-primary btn-xl page-scroll\">Find Out More about
                Sleep Apnea</a>
        </div>
    </header>


    <section class=\"bg-primary\" id=\"sleep\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                    <h1 class=\"section-heading\"><strong>Your Problem</strong></h1>
                    <hr class=\"light\">

                    <div class=\"text-left\">

                        <p>At least 40 million Americans suffer from chronic, long term sleep disorders each year.
                            The majority of these disorders can result in sleep deprivation which interferes with work,
                            driving, and school activites.
                        </p>

                        <h3 class=\"section-heading\">Signs of Sleep Apnea include</h3>
                        <hr class=\"light\">
                        <ul class=\"text-left\">
                            <li>Loud snoring that may be associated with breathing pauses or gasping for breath</li>
                            <li>Excessive sleepiness when awake or unintended episodes of falling asleep</li>
                            <li>Continuing to feel tired or fatigued no matter how long you sleep</li>
                        </ul>
                        <p>Untreated sleep disorders are directly linked to many chronic diseases, including obesity,
                            hypertension, diabetes, impotence, arrhythmia, and stroke.
                        </p>

                    </div>
                    <a href=\"#selfcheck\" class=\"page-scroll btn btn-default btn-xl sr-button\" style=\"margin-top:40px;\">Take
                        self check</a>
                </div>
            </div>
        </div>
    </section>

    <section id=\"selfcheck\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                    <h1 class=\"section-heading\"><strong>Quick Self Check</strong></h1>

                    <div class=\"text-left\">
                        <h2 class=\"section-heading\">Are you struggling to Breathe when you are sleeping?</h2>
                        <hr class=\"light\">


                        <h3 class=\"section-heading\">Even if you don't THINK you have a problem, take this quick self
                            check</h3>

                        <ul class=\"text-left\">
                            <li>Do you SNORE?</li>
                            <li>Are you TIRED during the day?</li>
                            <li>Has anyone seen you CHOKING or GASPING when you sleep?</li>
                            <li>Have you been told you have HIGH BLOOD PRESSURE?</li>
                            <li>Do you have ACID REFLUX?</li>
                            <li>Do you have DIABETES</li>
                        </ul>

                        <p>If you answered YES to more than TWO of the questions give us a call to inquire about home
                            sleep testing.
                        </p>

                        <br><br>

                        <div>
                            <table class=\"table\">
                                <caption>
                                    Epworth Sleepiness Scale
                                    <br><br>
                                    How likely are you to doze off or fall asleep in the following situations,
                                    in contrast to feeling just tired? This refers to your usual way of life in recent
                                    times. Even if you have not done some of these things recently try to work out how
                                    they would have affected you. Use the following scale to choose the most appropriate
                                    number for each situation:
                                </caption>
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Situation</th>
                                    <th>Chance of dozing</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope=\"row\">1</th>
                                    <td>Sitting and reading</td>
                                    <td>
                                        <div class=\"form-group\">
                                            <select class=\"form-control epworth\">
                                                <option value=\"0\">No chance of dozing</option>
                                                <option value=\"1\">Slight chance of dozing</option>
                                                <option value=\"2\">Moderate chance of dozing</option>
                                                <option value=\"3\">High chance of dozing</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope=\"row\">2</th>
                                    <td>Watching TV</td>
                                    <td>
                                        <div class=\"form-group\">
                                            <select class=\"form-control epworth\">
                                                <option value=\"0\">No chance of dozing</option>
                                                <option value=\"1\">Slight chance of dozing</option>
                                                <option value=\"2\">Moderate chance of dozing</option>
                                                <option value=\"3\">High chance of dozing</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope=\"row\">3</th>
                                    <td>Sitting inactive in a public place (e.g a theater or a meeting)</td>
                                    <td>
                                        <div class=\"form-group\">
                                            <select class=\"form-control epworth\">
                                                <option value=\"0\">No chance of dozing</option>
                                                <option value=\"1\">Slight chance of dozing</option>
                                                <option value=\"2\">Moderate chance of dozing</option>
                                                <option value=\"3\">High chance of dozing</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope=\"row\">4</th>
                                    <td>As a passenger in a car for an hour without a break</td>
                                    <td>
                                        <div class=\"form-group\">
                                            <select class=\"form-control epworth\">
                                                <option value=\"0\">No chance of dozing</option>
                                                <option value=\"1\">Slight chance of dozing</option>
                                                <option value=\"2\">Moderate chance of dozing</option>
                                                <option value=\"3\">High chance of dozing</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope=\"row\">5</th>
                                    <td>Lying down to rest in the afternoon when circumstances permit</td>
                                    <td>
                                        <div class=\"form-group\">
                                            <select class=\"form-control epworth\">
                                                <option value=\"0\">No chance of dozing</option>
                                                <option value=\"1\">Slight chance of dozing</option>
                                                <option value=\"2\">Moderate chance of dozing</option>
                                                <option value=\"3\">High chance of dozing</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope=\"row\">6</th>
                                    <td>Sitting and talking to someone</td>
                                    <td>
                                        <div class=\"form-group\">
                                            <select class=\"form-control epworth\">
                                                <option value=\"0\">No chance of dozing</option>
                                                <option value=\"1\">Slight chance of dozing</option>
                                                <option value=\"2\">Moderate chance of dozing</option>
                                                <option value=\"3\">High chance of dozing</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope=\"row\">7</th>
                                    <td>Sitting quietly after a lunch without alcohol</td>
                                    <td>
                                        <div class=\"form-group\">
                                            <select class=\"form-control epworth\">
                                                <option value=\"0\">No chance of dozing</option>
                                                <option value=\"1\">Slight chance of dozing</option>
                                                <option value=\"2\">Moderate chance of dozing</option>
                                                <option value=\"3\">High chance of dozing</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope=\"row\">8</th>
                                    <td>In a car, while stopped for a few minutes in traffic</td>
                                    <td>
                                        <div class=\"form-group\">
                                            <select class=\"form-control epworth\">
                                                <option value=\"0\">No chance of dozing</option>
                                                <option value=\"1\">Slight chance of dozing</option>
                                                <option value=\"2\">Moderate chance of dozing</option>
                                                <option value=\"3\">High chance of dozing</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <button onclick=\"BlueStoneApp.gradeEpworth()\" type=\"button\" class=\"btn btn-warning epworth-check\">
                        Check your
                        sleepiness score
                    </button>
                    <div id=\"epworth-success\" class=\"alert alert-success epworth-alert hide\" role=\"alert\">
                        Congratulations, you are getting enough sleep!
                    </div>
                    <div id=\"epworth-warning\" class=\"alert alert-warning epworth-alert hide\" role=\"alert\">Your score is
                        average
                    </div>
                    <div id=\"epworth-danger\" class=\"alert alert-danger  epworth-alert hide\" role=\"alert\">Seek the advice
                        of a sleep specialist without
                        delay
                    </div>
                    <br>
                    <br>
                    <h2>Call us today<br><a class=\"phone phone-black\" href=\"tel:817-431-6764\"><i
                                    class=\"fa fa-phone sr-icons\"></i> 817-431-6764</a></h2>
                    <a href=\"#services\" class=\"page-scroll btn btn-primary btn-xl sr-button\" style=\"margin-top:40px;\">Check
                        out our Services</a>
                </div>
            </div>
        </div>
    </section>

    <section class=\"bg-primary\" id=\"services\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2 class=\"section-heading\">Our Services</h2>
                    <hr class=\"light\">
                    <p>We have no bias towards a specific treatment.</p>
                    <p>We guide you to the appropriate treatment
                        recommended by the <br> American Academy of Sleep Medicine and fits into your life style.
                    </p>
                    <p>Our office works with the majority of medical insurances, including <strong>Medicare</strong>.
                    </p>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\" style=\"margin: auto;\">
                <div class=\"col-lg-4 col-md-6 text-center\">
                    <div class=\"service-box\">
                        ";
        // line 345
        echo "                        <h3>CPAP</h3>
                        <div class=\"text-left\">
                            <p>Continuous positive airway pressure therapy (CPAP ) uses a machine to help a person who
                                has
                                obstructive sleep apnea (OSA) breathe more easily during sleep. A CPAP machine increases
                                air pressure in your throat so that your airway doesn't collapse when you breathe
                                in.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 text-center\">
                    <div class=\"service-box\">
                        ";
        // line 358
        echo "                        <h3>Surgery</h3>
                        <div class=\"text-left\">
                            <p>It involves removing and repositioning excess tissue in the throat to make the airway
                                wider.
                                The surgeon can trim down your soft palate and uvula, remove your tonsils, and
                                reposition
                                some of the muscles of the soft palate. UPPP and other soft palate procedures are the
                                most
                                common type of surgery for sleep apne</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 text-center\">
                    <div class=\"service-box\">
                        ";
        // line 373
        echo "                        <h3>Oral Appliance Therapy</h3>
                        <div class=\"text-left\">
                            <p>Also called Jaw Advancing Device (JAD) or Mandibular Advancement Device (MAD), these
                                sleep apnea mouth pieces are custom made by dentists using a plastic-like mold to form
                                to the specific shape of the patients teeth and mouth. Not only do they work against
                                sleep
                                apnea, they are also effective to stop snoring.</p>
                        </div>

                    </div>
                </div>

                <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                    <a href=\"#contact\" class=\"page-scroll btn btn-default btn-xl sr-button\" style=\"margin-top:40px;\">Contact
                        Us</a>
                </div>
            </div>

        </div>
    </section>

    <section id=\"contact\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 text-center\">

                    <h2 class=\"section-heading\">Contact Us</h2>
                    <hr class=\"dark\">

                    <h1 class=\"section-heading\">We're here for you!</h1>
                    <h2><strong>North Texas Sleep Solutions</strong><br>Dr. Rebecca Lauck</h2>
                    <hr class=\"dark\">
                    <h4>1675 Keller Parkway<br>Suite 100<br>Keller, Texas 76248</h4>

                    <div class=\"col-lg-4 csol-lg-offset-1 text-center\">
                        <i class=\"fa fa-3x  fa-phone sr-icons\"></i>
                        <h4 style=\"margin-top:6px;\"><a style=\"color:#333;\" class=\"phone\" href=\"tel:817-431-6764\">
                                817-431-6764</a></h4>
                    </div>
                    <div class=\"col-lg-4 text-center\">
                        <i class=\"fa fa-3x fa-envelope-o sr-icons\"></i>
                        <h4 style=\"margin-top:6px;\"><a style=\"color:#333;\" class=\"phone\"
                                                       href=\"mailto:ntxsleepsolutions@gmail.com\">ntxsleepsolutions@gmail.com</a>
                        </h4>
                    </div>
                    <div class=\"col-lg-4 text-center\">
                        <a class=\"phone\" href=\"https://www.facebook.com/bluestonedentaltx/\">
                            <i class=\"fa fa-3x fa-facebook sr-icons\" style=\"color:#3B5998;\"></i>
                            <h4 style=\"margin-top:6px; color:#333;\">Connect with Us</h4>
                        </a>
                    </div>

                    <div class=\"col-lg-12 well\" style=\"height: 300px; background-color: rgba(22, 102, 161, 0.7);\">
                        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3348.6139696127607!2d-97.21530488424372!3d32.934795980924655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864dd6e645f479d5%3A0x3ac8250fcb25fdb8!2s1675+Keller+Pkwy+%23100%2C+Keller%2C+TX+76248!5e0!3m2!1sen!2sus!4v1483138439774\"
                                width=\"100%\" height=\"100%\" frameborder=\"0\" style=\"border:0\"></iframe>
                    </div>

                    <a style=\"margin-top:40px;\" href=\"#about\" class=\"page-scroll btn btn-primary btn-xl sr-button\">About
                        Us</a>
                </div>
            </div>
        </div>
    </section>

    <section class=\"bg-primary\" id=\"about\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                    <h1 class=\"section-heading\"><strong>About Us</strong></h1>
                    <hr class=\"light\">
                    <h2 class=\"section-heading\">Meet Dr. Rebecca Lauck</h2>

                    <img src=\"img/portfolio/lauck.jpg\" class=\"img-responsive img-round-50\" alt=\"Responsive image\">

                    <hr class=\"light\">
                    <div class=\"text-left\">
                        <p>After earning her Doctorate in Dental Surgery at Baylor College of Dentistry in Dallas, Dr.
                            Lauck
                            has completed over 2,500 hours of continued education and since 2001 has focused her studies
                            on
                            TMJ and Sleep Apnea treatments.
                        </p>
                        <p>She holds 2 diplomate degrees in Sleep Apnea Treatment, in addition to being a Medicare
                            provider
                            for Sleep Apnea. She has experience in different appliance designs that fit every individual
                            case.
                        </p>
                        <p>For your treatment, she uses only FDA approved appliances that are made in top labs in the
                            country.
                            Her practice, North Texas Sleep Solutions, is dedicated to treating patients with
                            Obstructive
                            Sleep Apnea and snoring.
                        </p>
                    </div>
                </div>
                <div class=\"col-lg-5 col-lg-offset-1 text-center\">
                    <i class=\"fa fa-3x  fa-phone sr-icons\"></i>
                    <h4 style=\"margin-top:6px;\"><a class=\"phone phone-white\" href=\"tel:817-431-6764\"> 817-431-6764</a>
                    </h4>
                </div>
                <div class=\"col-lg-5 text-center\">
                    <i class=\"fa fa-3x fa-envelope-o sr-icons\"></i>
                    <h4 style=\"margin-top:6px;\"><a class=\"phone phone-white\" href=\"mailto:ntxsleepsolutions@gmail.com\">ntxsleepsolutions@gmail.com</a>
                    </h4>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_0fcb94c4382440e8eb0fe9cbdf86b580671b0bcf0ce86a912f99450066e763fc->leave($__internal_0fcb94c4382440e8eb0fe9cbdf86b580671b0bcf0ce86a912f99450066e763fc_prof);

        
        $__internal_a4d90cf87745ff792ffce7e88241b3a3801283be4655048217a5a7851dfbefcc->leave($__internal_a4d90cf87745ff792ffce7e88241b3a3801283be4655048217a5a7851dfbefcc_prof);

    }

    // line 484
    public function block_post_javascripts($context, array $blocks = array())
    {
        $__internal_161b9330715f891e3c8e44951a91318c15b7d3ddd2634c6e60c6508fac13316d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_161b9330715f891e3c8e44951a91318c15b7d3ddd2634c6e60c6508fac13316d->enter($__internal_161b9330715f891e3c8e44951a91318c15b7d3ddd2634c6e60c6508fac13316d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_javascripts"));

        $__internal_0ad47a7b85700df7ee3414e4da21a1a9a73eee6fd278993fd08c3d195ac2ff8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad47a7b85700df7ee3414e4da21a1a9a73eee6fd278993fd08c3d195ac2ff8c->enter($__internal_0ad47a7b85700df7ee3414e4da21a1a9a73eee6fd278993fd08c3d195ac2ff8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_javascripts"));

        // line 485
        echo "    <!-- jQuery -->
    <script src=\"vendor/jquery/jquery.min.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"vendor/bootstrap/js/bootstrap.min.js\"></script>

    <!-- Plugin JavaScript -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>
    <script src=\"vendor/scrollreveal/scrollreveal.min.js\"></script>
    <script src=\"vendor/magnific-popup/jquery.magnific-popup.min.js\"></script>

    <!-- Theme JavaScript -->
    <script src=\"";
        // line 497
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/creative.min.js"), "html", null, true);
        echo "\"></script>


    <script type=\"text/javascript\">
        var BlueStoneApp = {

            gradeEpworth: function () {
                \$('.epworth-alert').addClass('hide');
                var scores = \$('.epworth :selected');
                var total = 0;
                \$.each(scores, function (index, score) {
                    total += parseInt(\$(score).val());
                });

                if (total < 7) {
                    \$('#epworth-success').removeClass('hide');
                } else if (total < 9) {
                    \$('#epworth-warning').removeClass('hide');
                } else {
                    \$('#epworth-danger').removeClass('hide');
                }
                console.log(total);
            }
        };
    </script>
";
        
        $__internal_0ad47a7b85700df7ee3414e4da21a1a9a73eee6fd278993fd08c3d195ac2ff8c->leave($__internal_0ad47a7b85700df7ee3414e4da21a1a9a73eee6fd278993fd08c3d195ac2ff8c_prof);

        
        $__internal_161b9330715f891e3c8e44951a91318c15b7d3ddd2634c6e60c6508fac13316d->leave($__internal_161b9330715f891e3c8e44951a91318c15b7d3ddd2634c6e60c6508fac13316d_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  626 => 497,  612 => 485,  603 => 484,  485 => 373,  469 => 358,  455 => 345,  204 => 95,  197 => 89,  181 => 75,  145 => 41,  136 => 40,  117 => 29,  108 => 28,  96 => 24,  92 => 23,  71 => 6,  62 => 5,  44 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}NTSS{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <!-- Bootstrap Core CSS -->
    <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
          rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href=\"vendor/magnific-popup/magnific-popup.css\" rel=\"stylesheet\">

    <!-- Theme CSS -->
    <link href=\"css/creative.min.css\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"{{ asset('css/creative.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('css/custom.css') }}\"/>
{% endblock %}


{% block pre_javascripts %}
    {{ parent() }}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
{% endblock %}



{% block body %}
    <nav id=\"mainNav\" class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                        data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span> Menu <i class=\"fa fa-bars\"></i>
                </button>
                <a class=\"navbar-brand page-scroll hidden-md hidden-lg visible-xs-* visible-sm-*\"
                   href=\"#page-top\">NTSS</a>
                <a class=\"navbar-brand page-scroll hidden-xs hidden-sm visible-md-* visible-lg-*\" href=\"#page-top\">North
                    Texas Sleep Solutions</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a class=\"page-scroll\" href=\"#sleep\">Sleep Apnea</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#selfcheck\">Check yourself</a>
                    </li>
                    >
                    <li>
                        <a class=\"page-scroll\" href=\"#services\">Services</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#contact\">Contact</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#about\">About Us</a>
                    </li>
                    <li>
                        <a class=\"next-page\" href=\"{{ path('more') }}\">More Info</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class=\"header-content\">
            <div class=\"header-content-inner header-custom\">
                <h1 id=\"homeHeading\">Welcome to<br>North Texas Sleep Solutions</h1>
                {#<hr>#}
                <h2>Tired of the Snoring?</h2>
                <h5>Solutions for a better Quality of Life</h5>
                <h2>Call us today<br><a class=\"phone phone-white\" href=\"tel:817-431-6764\"><i
                                class=\"fa fa-phone sr-icons\"></i> 817-431-6764</a></h2>

                {#<iframe src=\"https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fbluestonedentaltx%2F&width=63&layout=button&action=like&size=large&show_faces=true&share=false&height=65&appId\" width=\"63\" height=\"65\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\"></iframe>#}

            </div>
            <a style=\"margin-top:40px;\" href=\"#sleep\" class=\"btn btn-primary btn-xl page-scroll\">Find Out More about
                Sleep Apnea</a>
        </div>
    </header>


    <section class=\"bg-primary\" id=\"sleep\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                    <h1 class=\"section-heading\"><strong>Your Problem</strong></h1>
                    <hr class=\"light\">

                    <div class=\"text-left\">

                        <p>At least 40 million Americans suffer from chronic, long term sleep disorders each year.
                            The majority of these disorders can result in sleep deprivation which interferes with work,
                            driving, and school activites.
                        </p>

                        <h3 class=\"section-heading\">Signs of Sleep Apnea include</h3>
                        <hr class=\"light\">
                        <ul class=\"text-left\">
                            <li>Loud snoring that may be associated with breathing pauses or gasping for breath</li>
                            <li>Excessive sleepiness when awake or unintended episodes of falling asleep</li>
                            <li>Continuing to feel tired or fatigued no matter how long you sleep</li>
                        </ul>
                        <p>Untreated sleep disorders are directly linked to many chronic diseases, including obesity,
                            hypertension, diabetes, impotence, arrhythmia, and stroke.
                        </p>

                    </div>
                    <a href=\"#selfcheck\" class=\"page-scroll btn btn-default btn-xl sr-button\" style=\"margin-top:40px;\">Take
                        self check</a>
                </div>
            </div>
        </div>
    </section>

    <section id=\"selfcheck\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                    <h1 class=\"section-heading\"><strong>Quick Self Check</strong></h1>

                    <div class=\"text-left\">
                        <h2 class=\"section-heading\">Are you struggling to Breathe when you are sleeping?</h2>
                        <hr class=\"light\">


                        <h3 class=\"section-heading\">Even if you don't THINK you have a problem, take this quick self
                            check</h3>

                        <ul class=\"text-left\">
                            <li>Do you SNORE?</li>
                            <li>Are you TIRED during the day?</li>
                            <li>Has anyone seen you CHOKING or GASPING when you sleep?</li>
                            <li>Have you been told you have HIGH BLOOD PRESSURE?</li>
                            <li>Do you have ACID REFLUX?</li>
                            <li>Do you have DIABETES</li>
                        </ul>

                        <p>If you answered YES to more than TWO of the questions give us a call to inquire about home
                            sleep testing.
                        </p>

                        <br><br>

                        <div>
                            <table class=\"table\">
                                <caption>
                                    Epworth Sleepiness Scale
                                    <br><br>
                                    How likely are you to doze off or fall asleep in the following situations,
                                    in contrast to feeling just tired? This refers to your usual way of life in recent
                                    times. Even if you have not done some of these things recently try to work out how
                                    they would have affected you. Use the following scale to choose the most appropriate
                                    number for each situation:
                                </caption>
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Situation</th>
                                    <th>Chance of dozing</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope=\"row\">1</th>
                                    <td>Sitting and reading</td>
                                    <td>
                                        <div class=\"form-group\">
                                            <select class=\"form-control epworth\">
                                                <option value=\"0\">No chance of dozing</option>
                                                <option value=\"1\">Slight chance of dozing</option>
                                                <option value=\"2\">Moderate chance of dozing</option>
                                                <option value=\"3\">High chance of dozing</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope=\"row\">2</th>
                                    <td>Watching TV</td>
                                    <td>
                                        <div class=\"form-group\">
                                            <select class=\"form-control epworth\">
                                                <option value=\"0\">No chance of dozing</option>
                                                <option value=\"1\">Slight chance of dozing</option>
                                                <option value=\"2\">Moderate chance of dozing</option>
                                                <option value=\"3\">High chance of dozing</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope=\"row\">3</th>
                                    <td>Sitting inactive in a public place (e.g a theater or a meeting)</td>
                                    <td>
                                        <div class=\"form-group\">
                                            <select class=\"form-control epworth\">
                                                <option value=\"0\">No chance of dozing</option>
                                                <option value=\"1\">Slight chance of dozing</option>
                                                <option value=\"2\">Moderate chance of dozing</option>
                                                <option value=\"3\">High chance of dozing</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope=\"row\">4</th>
                                    <td>As a passenger in a car for an hour without a break</td>
                                    <td>
                                        <div class=\"form-group\">
                                            <select class=\"form-control epworth\">
                                                <option value=\"0\">No chance of dozing</option>
                                                <option value=\"1\">Slight chance of dozing</option>
                                                <option value=\"2\">Moderate chance of dozing</option>
                                                <option value=\"3\">High chance of dozing</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope=\"row\">5</th>
                                    <td>Lying down to rest in the afternoon when circumstances permit</td>
                                    <td>
                                        <div class=\"form-group\">
                                            <select class=\"form-control epworth\">
                                                <option value=\"0\">No chance of dozing</option>
                                                <option value=\"1\">Slight chance of dozing</option>
                                                <option value=\"2\">Moderate chance of dozing</option>
                                                <option value=\"3\">High chance of dozing</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope=\"row\">6</th>
                                    <td>Sitting and talking to someone</td>
                                    <td>
                                        <div class=\"form-group\">
                                            <select class=\"form-control epworth\">
                                                <option value=\"0\">No chance of dozing</option>
                                                <option value=\"1\">Slight chance of dozing</option>
                                                <option value=\"2\">Moderate chance of dozing</option>
                                                <option value=\"3\">High chance of dozing</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope=\"row\">7</th>
                                    <td>Sitting quietly after a lunch without alcohol</td>
                                    <td>
                                        <div class=\"form-group\">
                                            <select class=\"form-control epworth\">
                                                <option value=\"0\">No chance of dozing</option>
                                                <option value=\"1\">Slight chance of dozing</option>
                                                <option value=\"2\">Moderate chance of dozing</option>
                                                <option value=\"3\">High chance of dozing</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope=\"row\">8</th>
                                    <td>In a car, while stopped for a few minutes in traffic</td>
                                    <td>
                                        <div class=\"form-group\">
                                            <select class=\"form-control epworth\">
                                                <option value=\"0\">No chance of dozing</option>
                                                <option value=\"1\">Slight chance of dozing</option>
                                                <option value=\"2\">Moderate chance of dozing</option>
                                                <option value=\"3\">High chance of dozing</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <button onclick=\"BlueStoneApp.gradeEpworth()\" type=\"button\" class=\"btn btn-warning epworth-check\">
                        Check your
                        sleepiness score
                    </button>
                    <div id=\"epworth-success\" class=\"alert alert-success epworth-alert hide\" role=\"alert\">
                        Congratulations, you are getting enough sleep!
                    </div>
                    <div id=\"epworth-warning\" class=\"alert alert-warning epworth-alert hide\" role=\"alert\">Your score is
                        average
                    </div>
                    <div id=\"epworth-danger\" class=\"alert alert-danger  epworth-alert hide\" role=\"alert\">Seek the advice
                        of a sleep specialist without
                        delay
                    </div>
                    <br>
                    <br>
                    <h2>Call us today<br><a class=\"phone phone-black\" href=\"tel:817-431-6764\"><i
                                    class=\"fa fa-phone sr-icons\"></i> 817-431-6764</a></h2>
                    <a href=\"#services\" class=\"page-scroll btn btn-primary btn-xl sr-button\" style=\"margin-top:40px;\">Check
                        out our Services</a>
                </div>
            </div>
        </div>
    </section>

    <section class=\"bg-primary\" id=\"services\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2 class=\"section-heading\">Our Services</h2>
                    <hr class=\"light\">
                    <p>We have no bias towards a specific treatment.</p>
                    <p>We guide you to the appropriate treatment
                        recommended by the <br> American Academy of Sleep Medicine and fits into your life style.
                    </p>
                    <p>Our office works with the majority of medical insurances, including <strong>Medicare</strong>.
                    </p>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\" style=\"margin: auto;\">
                <div class=\"col-lg-4 col-md-6 text-center\">
                    <div class=\"service-box\">
                        {#<i class=\"fa fa-4x fa-diamond tesxt-primary sr-icons\"></i>#}
                        <h3>CPAP</h3>
                        <div class=\"text-left\">
                            <p>Continuous positive airway pressure therapy (CPAP ) uses a machine to help a person who
                                has
                                obstructive sleep apnea (OSA) breathe more easily during sleep. A CPAP machine increases
                                air pressure in your throat so that your airway doesn't collapse when you breathe
                                in.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 text-center\">
                    <div class=\"service-box\">
                        {#<i class=\"fa fa-4x fa-paper-plane tsext-primary sr-icons\"></i>#}
                        <h3>Surgery</h3>
                        <div class=\"text-left\">
                            <p>It involves removing and repositioning excess tissue in the throat to make the airway
                                wider.
                                The surgeon can trim down your soft palate and uvula, remove your tonsils, and
                                reposition
                                some of the muscles of the soft palate. UPPP and other soft palate procedures are the
                                most
                                common type of surgery for sleep apne</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 text-center\">
                    <div class=\"service-box\">
                        {#<i class=\"fa fa-4x fa-newspaper-o tsext-primary sr-icons\"></i>#}
                        <h3>Oral Appliance Therapy</h3>
                        <div class=\"text-left\">
                            <p>Also called Jaw Advancing Device (JAD) or Mandibular Advancement Device (MAD), these
                                sleep apnea mouth pieces are custom made by dentists using a plastic-like mold to form
                                to the specific shape of the patients teeth and mouth. Not only do they work against
                                sleep
                                apnea, they are also effective to stop snoring.</p>
                        </div>

                    </div>
                </div>

                <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                    <a href=\"#contact\" class=\"page-scroll btn btn-default btn-xl sr-button\" style=\"margin-top:40px;\">Contact
                        Us</a>
                </div>
            </div>

        </div>
    </section>

    <section id=\"contact\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 text-center\">

                    <h2 class=\"section-heading\">Contact Us</h2>
                    <hr class=\"dark\">

                    <h1 class=\"section-heading\">We're here for you!</h1>
                    <h2><strong>North Texas Sleep Solutions</strong><br>Dr. Rebecca Lauck</h2>
                    <hr class=\"dark\">
                    <h4>1675 Keller Parkway<br>Suite 100<br>Keller, Texas 76248</h4>

                    <div class=\"col-lg-4 csol-lg-offset-1 text-center\">
                        <i class=\"fa fa-3x  fa-phone sr-icons\"></i>
                        <h4 style=\"margin-top:6px;\"><a style=\"color:#333;\" class=\"phone\" href=\"tel:817-431-6764\">
                                817-431-6764</a></h4>
                    </div>
                    <div class=\"col-lg-4 text-center\">
                        <i class=\"fa fa-3x fa-envelope-o sr-icons\"></i>
                        <h4 style=\"margin-top:6px;\"><a style=\"color:#333;\" class=\"phone\"
                                                       href=\"mailto:ntxsleepsolutions@gmail.com\">ntxsleepsolutions@gmail.com</a>
                        </h4>
                    </div>
                    <div class=\"col-lg-4 text-center\">
                        <a class=\"phone\" href=\"https://www.facebook.com/bluestonedentaltx/\">
                            <i class=\"fa fa-3x fa-facebook sr-icons\" style=\"color:#3B5998;\"></i>
                            <h4 style=\"margin-top:6px; color:#333;\">Connect with Us</h4>
                        </a>
                    </div>

                    <div class=\"col-lg-12 well\" style=\"height: 300px; background-color: rgba(22, 102, 161, 0.7);\">
                        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3348.6139696127607!2d-97.21530488424372!3d32.934795980924655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864dd6e645f479d5%3A0x3ac8250fcb25fdb8!2s1675+Keller+Pkwy+%23100%2C+Keller%2C+TX+76248!5e0!3m2!1sen!2sus!4v1483138439774\"
                                width=\"100%\" height=\"100%\" frameborder=\"0\" style=\"border:0\"></iframe>
                    </div>

                    <a style=\"margin-top:40px;\" href=\"#about\" class=\"page-scroll btn btn-primary btn-xl sr-button\">About
                        Us</a>
                </div>
            </div>
        </div>
    </section>

    <section class=\"bg-primary\" id=\"about\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                    <h1 class=\"section-heading\"><strong>About Us</strong></h1>
                    <hr class=\"light\">
                    <h2 class=\"section-heading\">Meet Dr. Rebecca Lauck</h2>

                    <img src=\"img/portfolio/lauck.jpg\" class=\"img-responsive img-round-50\" alt=\"Responsive image\">

                    <hr class=\"light\">
                    <div class=\"text-left\">
                        <p>After earning her Doctorate in Dental Surgery at Baylor College of Dentistry in Dallas, Dr.
                            Lauck
                            has completed over 2,500 hours of continued education and since 2001 has focused her studies
                            on
                            TMJ and Sleep Apnea treatments.
                        </p>
                        <p>She holds 2 diplomate degrees in Sleep Apnea Treatment, in addition to being a Medicare
                            provider
                            for Sleep Apnea. She has experience in different appliance designs that fit every individual
                            case.
                        </p>
                        <p>For your treatment, she uses only FDA approved appliances that are made in top labs in the
                            country.
                            Her practice, North Texas Sleep Solutions, is dedicated to treating patients with
                            Obstructive
                            Sleep Apnea and snoring.
                        </p>
                    </div>
                </div>
                <div class=\"col-lg-5 col-lg-offset-1 text-center\">
                    <i class=\"fa fa-3x  fa-phone sr-icons\"></i>
                    <h4 style=\"margin-top:6px;\"><a class=\"phone phone-white\" href=\"tel:817-431-6764\"> 817-431-6764</a>
                    </h4>
                </div>
                <div class=\"col-lg-5 text-center\">
                    <i class=\"fa fa-3x fa-envelope-o sr-icons\"></i>
                    <h4 style=\"margin-top:6px;\"><a class=\"phone phone-white\" href=\"mailto:ntxsleepsolutions@gmail.com\">ntxsleepsolutions@gmail.com</a>
                    </h4>
                </div>
            </div>
        </div>
    </section>
{% endblock %}


{% block post_javascripts %}
    <!-- jQuery -->
    <script src=\"vendor/jquery/jquery.min.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"vendor/bootstrap/js/bootstrap.min.js\"></script>

    <!-- Plugin JavaScript -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>
    <script src=\"vendor/scrollreveal/scrollreveal.min.js\"></script>
    <script src=\"vendor/magnific-popup/jquery.magnific-popup.min.js\"></script>

    <!-- Theme JavaScript -->
    <script src=\"{{ asset('js/creative.min.js') }}\"></script>


    <script type=\"text/javascript\">
        var BlueStoneApp = {

            gradeEpworth: function () {
                \$('.epworth-alert').addClass('hide');
                var scores = \$('.epworth :selected');
                var total = 0;
                \$.each(scores, function (index, score) {
                    total += parseInt(\$(score).val());
                });

                if (total < 7) {
                    \$('#epworth-success').removeClass('hide');
                } else if (total < 9) {
                    \$('#epworth-warning').removeClass('hide');
                } else {
                    \$('#epworth-danger').removeClass('hide');
                }
                console.log(total);
            }
        };
    </script>
{% endblock %}", "default/index.html.twig", "/home/david/Code/bluestone/app/Resources/views/default/index.html.twig");
    }
}
