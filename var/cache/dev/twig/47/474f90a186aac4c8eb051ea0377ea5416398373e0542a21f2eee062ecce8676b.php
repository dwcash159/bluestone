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
        $__internal_c6cae3e52d71423667c87d4d7380193f51f862509b9d17328ceb747fd9eeefd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6cae3e52d71423667c87d4d7380193f51f862509b9d17328ceb747fd9eeefd3->enter($__internal_c6cae3e52d71423667c87d4d7380193f51f862509b9d17328ceb747fd9eeefd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_e1afa12b12cda5d8c69d79c80a9cfdfa810fe10d2a505c2011c4c6cefa846bf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1afa12b12cda5d8c69d79c80a9cfdfa810fe10d2a505c2011c4c6cefa846bf1->enter($__internal_e1afa12b12cda5d8c69d79c80a9cfdfa810fe10d2a505c2011c4c6cefa846bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6cae3e52d71423667c87d4d7380193f51f862509b9d17328ceb747fd9eeefd3->leave($__internal_c6cae3e52d71423667c87d4d7380193f51f862509b9d17328ceb747fd9eeefd3_prof);

        
        $__internal_e1afa12b12cda5d8c69d79c80a9cfdfa810fe10d2a505c2011c4c6cefa846bf1->leave($__internal_e1afa12b12cda5d8c69d79c80a9cfdfa810fe10d2a505c2011c4c6cefa846bf1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f9ca05e71d37068ae9dff78a5b4063a6537795615528d9f1ada231f9c9ac792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f9ca05e71d37068ae9dff78a5b4063a6537795615528d9f1ada231f9c9ac792->enter($__internal_3f9ca05e71d37068ae9dff78a5b4063a6537795615528d9f1ada231f9c9ac792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_21cf0270a49a8ffc0faab417d3ac52b45607f01972abd68becd5c5ac60dfef64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21cf0270a49a8ffc0faab417d3ac52b45607f01972abd68becd5c5ac60dfef64->enter($__internal_21cf0270a49a8ffc0faab417d3ac52b45607f01972abd68becd5c5ac60dfef64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "NTSS";
        
        $__internal_21cf0270a49a8ffc0faab417d3ac52b45607f01972abd68becd5c5ac60dfef64->leave($__internal_21cf0270a49a8ffc0faab417d3ac52b45607f01972abd68becd5c5ac60dfef64_prof);

        
        $__internal_3f9ca05e71d37068ae9dff78a5b4063a6537795615528d9f1ada231f9c9ac792->leave($__internal_3f9ca05e71d37068ae9dff78a5b4063a6537795615528d9f1ada231f9c9ac792_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_67d7dcaf37d02ec4b3556e30f01937a4bd14f1720e69227ce02801bb33bbe09b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67d7dcaf37d02ec4b3556e30f01937a4bd14f1720e69227ce02801bb33bbe09b->enter($__internal_67d7dcaf37d02ec4b3556e30f01937a4bd14f1720e69227ce02801bb33bbe09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_19752499db72f5000f08bf993101c50b6a13199c829636bcaad0047a9a903cdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19752499db72f5000f08bf993101c50b6a13199c829636bcaad0047a9a903cdc->enter($__internal_19752499db72f5000f08bf993101c50b6a13199c829636bcaad0047a9a903cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_19752499db72f5000f08bf993101c50b6a13199c829636bcaad0047a9a903cdc->leave($__internal_19752499db72f5000f08bf993101c50b6a13199c829636bcaad0047a9a903cdc_prof);

        
        $__internal_67d7dcaf37d02ec4b3556e30f01937a4bd14f1720e69227ce02801bb33bbe09b->leave($__internal_67d7dcaf37d02ec4b3556e30f01937a4bd14f1720e69227ce02801bb33bbe09b_prof);

    }

    // line 28
    public function block_pre_javascripts($context, array $blocks = array())
    {
        $__internal_0f774aaa9a990a1c55b3806bdca1b0801a93dc7de85451101f0776b34b889627 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f774aaa9a990a1c55b3806bdca1b0801a93dc7de85451101f0776b34b889627->enter($__internal_0f774aaa9a990a1c55b3806bdca1b0801a93dc7de85451101f0776b34b889627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_javascripts"));

        $__internal_e348f1d731ccc3a31e49657342cac61d013e436226b7466116f9ca5aff5fed51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e348f1d731ccc3a31e49657342cac61d013e436226b7466116f9ca5aff5fed51->enter($__internal_e348f1d731ccc3a31e49657342cac61d013e436226b7466116f9ca5aff5fed51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_javascripts"));

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
        
        $__internal_e348f1d731ccc3a31e49657342cac61d013e436226b7466116f9ca5aff5fed51->leave($__internal_e348f1d731ccc3a31e49657342cac61d013e436226b7466116f9ca5aff5fed51_prof);

        
        $__internal_0f774aaa9a990a1c55b3806bdca1b0801a93dc7de85451101f0776b34b889627->leave($__internal_0f774aaa9a990a1c55b3806bdca1b0801a93dc7de85451101f0776b34b889627_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_0051f74f99f99a80a0908b1f0b9594913e67e18af41aa5ee7dec232f5110afa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0051f74f99f99a80a0908b1f0b9594913e67e18af41aa5ee7dec232f5110afa9->enter($__internal_0051f74f99f99a80a0908b1f0b9594913e67e18af41aa5ee7dec232f5110afa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_469118975a4bf1230fb67759912a41dccb0b07abc3a2500a975381c6be57fee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_469118975a4bf1230fb67759912a41dccb0b07abc3a2500a975381c6be57fee5->enter($__internal_469118975a4bf1230fb67759912a41dccb0b07abc3a2500a975381c6be57fee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

                    <li>
                        <a class=\"page-scroll\" href=\"#services\">Services</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#oral-appliances\">Oral Appliances</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#about\">About Us</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#testimonials\">Testimonials</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#forms\">Forms</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#contact\">Contact</a>
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
        // line 95
        echo "                <h2>Tired of the Snoring?</h2>
                <h5>Solutions for a better Quality of Life</h5>
                <h2>Call us today<br><a class=\"phone phone-white\" href=\"tel:817-431-6764\"><i
                                class=\"fa fa-phone sr-icons\"></i> 817-431-6764</a></h2>

                ";
        // line 101
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
                            driving, and school activities.
                        </p>
                        <h3 class=\"section-heading\">What is Sleep Apnea</h3>
                        <div class=\"text-left\">

                            Sleep apnea (AP-ne-ah) is a common disorder in which you have one or more pauses in breathing or
                            shallow breaths while you sleep.
                            <br><br>
                            Breathing pauses can last from a few seconds to minutes. They may occur 30 times or more an
                            hour. Typically, normal breathing then starts again, sometimes with a loud snort or choking
                            sound.
                            <br><br>
                            Sleep apnea usually is a chronic (ongoing) condition that disrupts your sleep. When your
                            breathing pauses or becomes shallow, you’ll often move out of deep sleep and into light sleep.
                            <br><br>
                            As a result, the quality of your sleep is poor, which makes you tired during the day. Sleep
                            apnea is a leading cause of excessive daytime sleepiness.
                            <br>
                            <a style=\"font-size: 10px;\" class=\"phone phone-white\"
                               href=\"https://www.nhlbi.nih.gov/health/health-topics/topics/sleepapnea\">Source - National
                                Heart, Lung, and Blood Institute</a>
                        </div>
                        <br>
                        <h3 class=\"section-heading\">Signs of Sleep Apnea include</h3>

                        <ul class=\"text-left\">
                            <li>Loud snoring that may be associated with breathing pauses or gasping for breath</li>
                            <li>Excessive sleepiness when awake or unintended episodes of falling asleep</li>
                            <li>Continuing to feel tired or fatigued no matter how long you sleep</li>
                        </ul>
                        <img style=\"margin:auto;\" src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/fullsize/sleepApnea.jpg"), "html", null, true);
        echo "\"
                             class=\"img-responsive\" alt=\"\">
                        <br>
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
                        <hr class=\"dark\">

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
                        <hr class=\"dark\">
                        <h3>Use the Epworth Sleepiness Scale</h3>
                        <div>
                            <table class=\"table\">
                                <caption>
                                    What does Epworth Sleepiness Scale?
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
        // line 372
        echo "                        <h3>CPAP</h3>
                        <div class=\"text-left\">
                            <p>Continuous positive airway pressure therapy (CPAP) uses a machine to help a person who
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
        // line 385
        echo "                        <h3>Surgery</h3>
                        <div class=\"text-left\">
                            <p>It involves removing and repositioning excess tissue in the throat to make the airway
                                wider.
                                The surgeon can trim down your soft palate and uvula, remove your tonsils, and
                                reposition
                                some of the muscles of the soft palate. UPPP and other soft palate procedures are the
                                most
                                common type of surgery for sleep apnea</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 text-center\">
                    <div class=\"service-box\">
                        ";
        // line 400
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
                    <a href=\"#oral-appliances\" class=\"page-scroll btn btn-default btn-xl sr-button\" style=\"margin-top:40px;\">Oral Appliances</a>
                </div>
            </div>

        </div>
    </section>

    <section id=\"oral-appliances\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                    <h1 class=\"section-heading\"><strong>Oral Appliances</strong></h1>
                    <hr class=\"light\">
                    <div class=\"text-left\">
                        <h2>Thornton Adjustable Positioner (TAP)</h2>
                        <div>
                            <img src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/fullsize/tap.png"), "html", null, true);
        echo "\"
                                 class=\"img-responsive hidden-xs hidden-sm visible-md-* visible-lg-*\" alt=\"\"
                                 style=\"float:right; margin:auto; max-width:250px;\"/>

                            The TAP is the only mandibular advancement device that can be adjusted easily by the patient
                            or practitioner while in the mouth. This feature allows the patient to always be in control
                            of their treatment.
                            <br><br>
                            The unique design also allows the patient to fine-tune their treatment
                            position at home to achieve maximum results.
                            <br><br>
                            <strong>Features</strong>

                            <ul class=\"text-left\">
                                <li>Patient-friendly</li>
                                <li>Superior results</li>
                                <li>Easy to fit</li>
                                <li>Infinitely adjustable</li>
                                <li>Precise control of advancement</li>
                                <li>Interchangeable hooks</li>
                                <li>Freedom for lateral movement</li>
                                <li>More room for tongue</li>
                                <li>Allows lips to close</li>
                            </ul>
                            <br><br>
                            <strong>The TAP® can help prevent conditions linked to sleep apnea:</strong>
                            <ul class=\"text-left\">
                                <li>Chronic daytime sleepiness</li>
                                <li>Heart attack</li>
                                <li>Stroke</li>
                                <li>Heartburn, reflux</li>

                                <li>Morning headaches</li>
                                <li>Depression</li>
                            </ul>
                            <div class=\" hidden-md hidden-lg visible-xs-* visible-sm-*\">
                                <img src=\"";
        // line 465
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/fullsize/tap.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"
                                     style=\"margin:auto; max-width:250px;\"/>
                                <br>
                            </div>
                            <a style=\"font-size: 10px;\"
                               href=\"https://www.sleepassociation.org/thornton-adjustable-positioner-tap/\">Source -
                                American Sleep Association</a>
                        </div>
                        <hr class=\"light\">
                        <h2>Somnomed appliance</h2>
                        <div>
                            <img src=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/fullsize/somnomedAcrylic-seperate-pieces-new-logo.jpg"), "html", null, true);
        echo "\"
                                 class=\"img-responsive hidden-xs hidden-sm visible-md-* visible-lg-*\" alt=\"\"
                                 style=\"float:right; margin:auto; max-width:250px;\"/>

                            <h3>Sleep Apnea Oral Appliance: SomnoDent</h3>

                            A SomnoDent sleep apnea oral appliance is a premium, custom-fitted dental device developed
                            for the treatment of snoring and obstructive sleep apnea. It is an effective, comfortable,
                            and durable alternative to CPAP therapy or corrective surgery. By simply wearing a SomnoDent
                            while sleeping, your lower jaw (mandible) will be moved forward into a comfortable position,
                            allowing relaxation of the tissues at the back of your throat and ensuring the base of your
                            tongue does not collapse and block your airway, giving you a safe and soundless sleep
                        </div>
                        <hr class=\"light\">
                        <h2>Herbst Appliance</h2>
                        <div>
                            <img src=\"";
        // line 492
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/fullsize/herbst.png"), "html", null, true);
        echo "\"
                                 class=\"img-responsive hidden-xs hidden-sm visible-md-* visible-lg-*\" alt=\"\"
                                 style=\"float:right; margin:auto; max-width:250px;\"/>

                            <h3>The Herbst for Snoring and Obstructive Sleep Apnea (OSA)</h3>

                            The Herbst appliance has been used for many years in the treatment of Class II malocclusions
                            in children. With minor modifications, the Herbst appliance has been proven to be effective
                            in the treatment of snoring and mild to moderate OSA. \"Adjustability\" is the primary
                            advantage of the Herbst appliance in snoring and OSA cases. The post and sleeve mechanism
                            advances the jaw into a forward position. If desired relief is not immediately achieved,
                            this unique appliance design allows for additional forward movement of the mandible
                        </div>

                    </div>

                    <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                        <h2>Call us today<br><a class=\"phone phone-black\" href=\"tel:817-431-6764\"><i
                                        class=\"fa fa-phone sr-icons\"></i> 817-431-6764</a></h2>
                        <a href=\"#about\" class=\"page-scroll btn btn-primary btn-xl sr-button\"
                           style=\"margin-top:40px;\">About Us</a>
                    </div>
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
                    <h4 style=\"margin-top:6px;\">
                        <a class=\"phone phone-white\" href=\"mailto:ntxsleepsolutions@gmail.com\">ntxsleepsolutions@gmail.com</a>
                    </h4>
                </div>
                <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                    <a href=\"#testimonials\" class=\"page-scroll btn btn-default btn-xl sr-button\" style=\"margin-top:40px;\">Testimonials</a>
                </div>
            </div>
        </div>
    </section>

    <section id=\"testimonials\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                    <h2 class=\"section-heading\">Testimonials</h2>
                    <hr class=\"dark\">


                    <div class=\"text-left\">
                        <h3>
                            <strong>Dana W.</strong>
                        </h3>
                        I am very happy with my oral appliance.  I've felt so much better since I've started using it!
                        The team here has done an amazing job with throughout the entire process.  From my first visit
                        through the followups, they were friendly, professional, and really took the time to explain
                        things to me.  I highly recommend North Texas Sleep Solutions if you are looking for sleep
                        solutions!
                    </div>
                    <br>
                    <div class=\"text-left\">
                        <h3>
                            <strong>Randy J.</strong>
                        </h3>
                        Before I got the Somnomed I had the TAP's device which worked for my snoring
                        but was very uncomfortable and constrictive, because I couldn't move my jaw.
                        In itself it woke me up every night because it felt like someone was holding my mouth shut.
                        But with the Somnomed, I am able to get all the benefits with the reduction of my snoring
                        as well as the frequent movement, it's more natural, I don't feel as constricted and I sleep
                        better.
                    </div>
                    ";
        // line 599
        echo "                    ";
        // line 600
        echo "                        ";
        // line 601
        echo "                            ";
        // line 602
        echo "                        ";
        // line 603
        echo "                        ";
        // line 604
        echo "                        ";
        // line 605
        echo "                        ";
        // line 606
        echo "                        ";
        // line 607
        echo "                        ";
        // line 608
        echo "                        ";
        // line 609
        echo "                        ";
        // line 610
        echo "                    ";
        // line 611
        echo "
                </div>
                <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                    <h2>Call us today<br><a class=\"phone phone-black\" href=\"tel:817-431-6764\"><i
                                    class=\"fa fa-phone sr-icons\"></i> 817-431-6764</a></h2>
                    <a href=\"#contact\" class=\"page-scroll btn btn-primary btn-xl sr-button\"
                       style=\"margin-top:40px;\">Contact Us</a>

                </div>
            </div>
        </div>
    </section>
    <section class=\"bg-primary\" id=\"forms\" style=\"padding:50px 0;\">

        <div class=\"container\">
            <div class=\"row\" style=\"margin: auto;\">
                <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                    <h2 class=\"section-heading\">Forms</h2>
                    <hr class=\"light\">

                    <ul class=\"text-left\" style=\"list-style-type:none; font-size: 17px;\">
                        <li><i class=\"fa fa-file-pdf-o\"></i> <a class=\"phone phone-white\" href=\"";
        // line 632
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("forms/img01022017_0002.pdf"), "html", null, true);
        echo "\" target=\"_blank\">New Patient</a></li>
                        <li><i class=\"fa fa-file-pdf-o\"></i> <a class=\"phone phone-white\" href=\"";
        // line 633
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("forms/img01022017_0003.pdf"), "html", null, true);
        echo "\" target=\"_blank\">Health History</a></li>
                        <li><i class=\"fa fa-file-pdf-o\"></i> <a class=\"phone phone-white\"  href=\"";
        // line 634
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("forms/img01022017_0004.pdf"), "html", null, true);
        echo "\" target=\"_blank\">Affidavit For Intolerance to CPAP</a></li>
                        <li><i class=\"fa fa-file-pdf-o\"></i> <a class=\"phone phone-white\"  href=\"";
        // line 635
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("forms/img01022017_0005.pdf"), "html", null, true);
        echo "\" target=\"_blank\">PatientMedical Record Release</a></li>
                        <li><i class=\"fa fa-file-pdf-o\"></i> <a class=\"phone phone-white\"  href=\"";
        // line 636
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("forms/img01022017_0006.pdf"), "html", null, true);
        echo "\" target=\"_blank\">Medical Release</a></li>
                        <li><i class=\"fa fa-file-pdf-o\"></i> <a class=\"phone phone-white\"  href=\"";
        // line 637
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("forms/img01022017_0007.pdf"), "html", null, true);
        echo "\" target=\"_blank\">Informed Consent</a></li>
                    </ul>


                    <div style=\"margin-top:40px;\">
                        <img src=\"";
        // line 642
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/fullsize/forms2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-round-20\" alt=\"\" />
                        <br>
                    </div>

                    <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                        <h2>Call us today<br><a class=\"phone phone-white\" href=\"tel:817-431-6764\"><i
                                        class=\"fa fa-phone sr-icons\"></i> 817-431-6764</a></h2>
                        <a href=\"#contact\" class=\"page-scroll btn btn-default btn-xl sr-button\"
                           style=\"margin-top:40px;\">Contact Us</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class=\"bg-primaryx\" id=\"contact\">
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
                        <a class=\"phone\" href=\"https://www.facebook.com/North-Texas-Sleep-Solutions-500699783443680/\">
                            <i class=\"fa fa-3x fa-facebook sr-icons\" style=\"color:#3B5998;\"></i>
                            <h4 style=\"margin-top:6px; color:#333;\">Connect with Us</h4>
                        </a>
                    </div>

                    <div class=\"col-lg-12 well\" style=\"height: 300px; background-color: rgba(22, 102, 161, 0.7);\">
                        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3348.6139696127607!2d-97.21530488424372!3d32.934795980924655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864dd6e645f479d5%3A0x3ac8250fcb25fdb8!2s1675+Keller+Pkwy+%23100%2C+Keller%2C+TX+76248!5e0!3m2!1sen!2sus!4v1483138439774\"
                                width=\"100%\" height=\"100%\" frameborder=\"0\" style=\"border:0\"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

";
        
        $__internal_469118975a4bf1230fb67759912a41dccb0b07abc3a2500a975381c6be57fee5->leave($__internal_469118975a4bf1230fb67759912a41dccb0b07abc3a2500a975381c6be57fee5_prof);

        
        $__internal_0051f74f99f99a80a0908b1f0b9594913e67e18af41aa5ee7dec232f5110afa9->leave($__internal_0051f74f99f99a80a0908b1f0b9594913e67e18af41aa5ee7dec232f5110afa9_prof);

    }

    // line 700
    public function block_post_javascripts($context, array $blocks = array())
    {
        $__internal_140410382d1635b711e39d7c20c58b078a8c39141e972bb3d01c940173af23d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_140410382d1635b711e39d7c20c58b078a8c39141e972bb3d01c940173af23d2->enter($__internal_140410382d1635b711e39d7c20c58b078a8c39141e972bb3d01c940173af23d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_javascripts"));

        $__internal_a93f9bd75ba90138e0773c411339dea5ba2d8c358dbbd39bf16535b142beaa6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a93f9bd75ba90138e0773c411339dea5ba2d8c358dbbd39bf16535b142beaa6f->enter($__internal_a93f9bd75ba90138e0773c411339dea5ba2d8c358dbbd39bf16535b142beaa6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_javascripts"));

        // line 701
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
        // line 713
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
            }
        };
    </script>
";
        
        $__internal_a93f9bd75ba90138e0773c411339dea5ba2d8c358dbbd39bf16535b142beaa6f->leave($__internal_a93f9bd75ba90138e0773c411339dea5ba2d8c358dbbd39bf16535b142beaa6f_prof);

        
        $__internal_140410382d1635b711e39d7c20c58b078a8c39141e972bb3d01c940173af23d2->leave($__internal_140410382d1635b711e39d7c20c58b078a8c39141e972bb3d01c940173af23d2_prof);

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
        return array (  888 => 713,  874 => 701,  865 => 700,  799 => 642,  791 => 637,  787 => 636,  783 => 635,  779 => 634,  775 => 633,  771 => 632,  748 => 611,  746 => 610,  744 => 609,  742 => 608,  740 => 607,  738 => 606,  736 => 605,  734 => 604,  732 => 603,  730 => 602,  728 => 601,  726 => 600,  724 => 599,  615 => 492,  596 => 476,  582 => 465,  543 => 429,  512 => 400,  496 => 385,  482 => 372,  258 => 150,  207 => 101,  200 => 95,  145 => 41,  136 => 40,  117 => 29,  108 => 28,  96 => 24,  92 => 23,  71 => 6,  62 => 5,  44 => 3,  11 => 1,);
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

                    <li>
                        <a class=\"page-scroll\" href=\"#services\">Services</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#oral-appliances\">Oral Appliances</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#about\">About Us</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#testimonials\">Testimonials</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#forms\">Forms</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#contact\">Contact</a>
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
                            driving, and school activities.
                        </p>
                        <h3 class=\"section-heading\">What is Sleep Apnea</h3>
                        <div class=\"text-left\">

                            Sleep apnea (AP-ne-ah) is a common disorder in which you have one or more pauses in breathing or
                            shallow breaths while you sleep.
                            <br><br>
                            Breathing pauses can last from a few seconds to minutes. They may occur 30 times or more an
                            hour. Typically, normal breathing then starts again, sometimes with a loud snort or choking
                            sound.
                            <br><br>
                            Sleep apnea usually is a chronic (ongoing) condition that disrupts your sleep. When your
                            breathing pauses or becomes shallow, you’ll often move out of deep sleep and into light sleep.
                            <br><br>
                            As a result, the quality of your sleep is poor, which makes you tired during the day. Sleep
                            apnea is a leading cause of excessive daytime sleepiness.
                            <br>
                            <a style=\"font-size: 10px;\" class=\"phone phone-white\"
                               href=\"https://www.nhlbi.nih.gov/health/health-topics/topics/sleepapnea\">Source - National
                                Heart, Lung, and Blood Institute</a>
                        </div>
                        <br>
                        <h3 class=\"section-heading\">Signs of Sleep Apnea include</h3>

                        <ul class=\"text-left\">
                            <li>Loud snoring that may be associated with breathing pauses or gasping for breath</li>
                            <li>Excessive sleepiness when awake or unintended episodes of falling asleep</li>
                            <li>Continuing to feel tired or fatigued no matter how long you sleep</li>
                        </ul>
                        <img style=\"margin:auto;\" src=\"{{ asset('img/portfolio/fullsize/sleepApnea.jpg') }}\"
                             class=\"img-responsive\" alt=\"\">
                        <br>
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
                        <hr class=\"dark\">

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
                        <hr class=\"dark\">
                        <h3>Use the Epworth Sleepiness Scale</h3>
                        <div>
                            <table class=\"table\">
                                <caption>
                                    What does Epworth Sleepiness Scale?
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
                            <p>Continuous positive airway pressure therapy (CPAP) uses a machine to help a person who
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
                                common type of surgery for sleep apnea</p>
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
                    <a href=\"#oral-appliances\" class=\"page-scroll btn btn-default btn-xl sr-button\" style=\"margin-top:40px;\">Oral Appliances</a>
                </div>
            </div>

        </div>
    </section>

    <section id=\"oral-appliances\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                    <h1 class=\"section-heading\"><strong>Oral Appliances</strong></h1>
                    <hr class=\"light\">
                    <div class=\"text-left\">
                        <h2>Thornton Adjustable Positioner (TAP)</h2>
                        <div>
                            <img src=\"{{ asset('img/portfolio/fullsize/tap.png') }}\"
                                 class=\"img-responsive hidden-xs hidden-sm visible-md-* visible-lg-*\" alt=\"\"
                                 style=\"float:right; margin:auto; max-width:250px;\"/>

                            The TAP is the only mandibular advancement device that can be adjusted easily by the patient
                            or practitioner while in the mouth. This feature allows the patient to always be in control
                            of their treatment.
                            <br><br>
                            The unique design also allows the patient to fine-tune their treatment
                            position at home to achieve maximum results.
                            <br><br>
                            <strong>Features</strong>

                            <ul class=\"text-left\">
                                <li>Patient-friendly</li>
                                <li>Superior results</li>
                                <li>Easy to fit</li>
                                <li>Infinitely adjustable</li>
                                <li>Precise control of advancement</li>
                                <li>Interchangeable hooks</li>
                                <li>Freedom for lateral movement</li>
                                <li>More room for tongue</li>
                                <li>Allows lips to close</li>
                            </ul>
                            <br><br>
                            <strong>The TAP® can help prevent conditions linked to sleep apnea:</strong>
                            <ul class=\"text-left\">
                                <li>Chronic daytime sleepiness</li>
                                <li>Heart attack</li>
                                <li>Stroke</li>
                                <li>Heartburn, reflux</li>

                                <li>Morning headaches</li>
                                <li>Depression</li>
                            </ul>
                            <div class=\" hidden-md hidden-lg visible-xs-* visible-sm-*\">
                                <img src=\"{{ asset('img/portfolio/fullsize/tap.png') }}\" class=\"img-responsive\" alt=\"\"
                                     style=\"margin:auto; max-width:250px;\"/>
                                <br>
                            </div>
                            <a style=\"font-size: 10px;\"
                               href=\"https://www.sleepassociation.org/thornton-adjustable-positioner-tap/\">Source -
                                American Sleep Association</a>
                        </div>
                        <hr class=\"light\">
                        <h2>Somnomed appliance</h2>
                        <div>
                            <img src=\"{{ asset('img/portfolio/fullsize/somnomedAcrylic-seperate-pieces-new-logo.jpg') }}\"
                                 class=\"img-responsive hidden-xs hidden-sm visible-md-* visible-lg-*\" alt=\"\"
                                 style=\"float:right; margin:auto; max-width:250px;\"/>

                            <h3>Sleep Apnea Oral Appliance: SomnoDent</h3>

                            A SomnoDent sleep apnea oral appliance is a premium, custom-fitted dental device developed
                            for the treatment of snoring and obstructive sleep apnea. It is an effective, comfortable,
                            and durable alternative to CPAP therapy or corrective surgery. By simply wearing a SomnoDent
                            while sleeping, your lower jaw (mandible) will be moved forward into a comfortable position,
                            allowing relaxation of the tissues at the back of your throat and ensuring the base of your
                            tongue does not collapse and block your airway, giving you a safe and soundless sleep
                        </div>
                        <hr class=\"light\">
                        <h2>Herbst Appliance</h2>
                        <div>
                            <img src=\"{{ asset('img/portfolio/fullsize/herbst.png') }}\"
                                 class=\"img-responsive hidden-xs hidden-sm visible-md-* visible-lg-*\" alt=\"\"
                                 style=\"float:right; margin:auto; max-width:250px;\"/>

                            <h3>The Herbst for Snoring and Obstructive Sleep Apnea (OSA)</h3>

                            The Herbst appliance has been used for many years in the treatment of Class II malocclusions
                            in children. With minor modifications, the Herbst appliance has been proven to be effective
                            in the treatment of snoring and mild to moderate OSA. \"Adjustability\" is the primary
                            advantage of the Herbst appliance in snoring and OSA cases. The post and sleeve mechanism
                            advances the jaw into a forward position. If desired relief is not immediately achieved,
                            this unique appliance design allows for additional forward movement of the mandible
                        </div>

                    </div>

                    <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                        <h2>Call us today<br><a class=\"phone phone-black\" href=\"tel:817-431-6764\"><i
                                        class=\"fa fa-phone sr-icons\"></i> 817-431-6764</a></h2>
                        <a href=\"#about\" class=\"page-scroll btn btn-primary btn-xl sr-button\"
                           style=\"margin-top:40px;\">About Us</a>
                    </div>
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
                    <h4 style=\"margin-top:6px;\">
                        <a class=\"phone phone-white\" href=\"mailto:ntxsleepsolutions@gmail.com\">ntxsleepsolutions@gmail.com</a>
                    </h4>
                </div>
                <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                    <a href=\"#testimonials\" class=\"page-scroll btn btn-default btn-xl sr-button\" style=\"margin-top:40px;\">Testimonials</a>
                </div>
            </div>
        </div>
    </section>

    <section id=\"testimonials\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                    <h2 class=\"section-heading\">Testimonials</h2>
                    <hr class=\"dark\">


                    <div class=\"text-left\">
                        <h3>
                            <strong>Dana W.</strong>
                        </h3>
                        I am very happy with my oral appliance.  I've felt so much better since I've started using it!
                        The team here has done an amazing job with throughout the entire process.  From my first visit
                        through the followups, they were friendly, professional, and really took the time to explain
                        things to me.  I highly recommend North Texas Sleep Solutions if you are looking for sleep
                        solutions!
                    </div>
                    <br>
                    <div class=\"text-left\">
                        <h3>
                            <strong>Randy J.</strong>
                        </h3>
                        Before I got the Somnomed I had the TAP's device which worked for my snoring
                        but was very uncomfortable and constrictive, because I couldn't move my jaw.
                        In itself it woke me up every night because it felt like someone was holding my mouth shut.
                        But with the Somnomed, I am able to get all the benefits with the reduction of my snoring
                        as well as the frequent movement, it's more natural, I don't feel as constricted and I sleep
                        better.
                    </div>
                    {#<br>#}
                    {#<div class=\"text-left\">#}
                        {#<h3>#}
                            {#<strong>A+ Recommended - Sophie Barks, October 2016</strong>#}
                        {#</h3>#}
                        {#Sed egestas risus at lacus pretium viverra ut ut odio. Nam eu dictum odio.#}
                        {#Ut in venenatis felis. Praesent non mauris ac tellus venenatis dignissim quis ut urna.#}
                        {#Aenean vitae rutrum magna. Quisque purus nisl, commodo quis congue at, facilisis sit amet ex.#}
                        {#Nam velit erat, aliquam sit amet sapien nec, ultrices accumsan nunc. Nam eleifend in leo nec#}
                        {#consequat. Nullam sodales nunc nec dolor consequat faucibus. Mauris semper hendrerit elit.#}
                        {#Donec tincidunt velit neque, ut pretium purus iaculis eu. Phasellus fermentum in tortor ac#}
                        {#scelerisque. Nulla facilisi. Vestibulum venenatis condimentum tellus laoreet porttitor.#}
                    {#</div>#}

                </div>
                <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                    <h2>Call us today<br><a class=\"phone phone-black\" href=\"tel:817-431-6764\"><i
                                    class=\"fa fa-phone sr-icons\"></i> 817-431-6764</a></h2>
                    <a href=\"#contact\" class=\"page-scroll btn btn-primary btn-xl sr-button\"
                       style=\"margin-top:40px;\">Contact Us</a>

                </div>
            </div>
        </div>
    </section>
    <section class=\"bg-primary\" id=\"forms\" style=\"padding:50px 0;\">

        <div class=\"container\">
            <div class=\"row\" style=\"margin: auto;\">
                <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                    <h2 class=\"section-heading\">Forms</h2>
                    <hr class=\"light\">

                    <ul class=\"text-left\" style=\"list-style-type:none; font-size: 17px;\">
                        <li><i class=\"fa fa-file-pdf-o\"></i> <a class=\"phone phone-white\" href=\"{{ asset('forms/img01022017_0002.pdf') }}\" target=\"_blank\">New Patient</a></li>
                        <li><i class=\"fa fa-file-pdf-o\"></i> <a class=\"phone phone-white\" href=\"{{ asset('forms/img01022017_0003.pdf') }}\" target=\"_blank\">Health History</a></li>
                        <li><i class=\"fa fa-file-pdf-o\"></i> <a class=\"phone phone-white\"  href=\"{{ asset('forms/img01022017_0004.pdf') }}\" target=\"_blank\">Affidavit For Intolerance to CPAP</a></li>
                        <li><i class=\"fa fa-file-pdf-o\"></i> <a class=\"phone phone-white\"  href=\"{{ asset('forms/img01022017_0005.pdf') }}\" target=\"_blank\">PatientMedical Record Release</a></li>
                        <li><i class=\"fa fa-file-pdf-o\"></i> <a class=\"phone phone-white\"  href=\"{{ asset('forms/img01022017_0006.pdf') }}\" target=\"_blank\">Medical Release</a></li>
                        <li><i class=\"fa fa-file-pdf-o\"></i> <a class=\"phone phone-white\"  href=\"{{ asset('forms/img01022017_0007.pdf') }}\" target=\"_blank\">Informed Consent</a></li>
                    </ul>


                    <div style=\"margin-top:40px;\">
                        <img src=\"{{ asset('img/portfolio/fullsize/forms2.jpg') }}\" class=\"img-responsive img-round-20\" alt=\"\" />
                        <br>
                    </div>

                    <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                        <h2>Call us today<br><a class=\"phone phone-white\" href=\"tel:817-431-6764\"><i
                                        class=\"fa fa-phone sr-icons\"></i> 817-431-6764</a></h2>
                        <a href=\"#contact\" class=\"page-scroll btn btn-default btn-xl sr-button\"
                           style=\"margin-top:40px;\">Contact Us</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class=\"bg-primaryx\" id=\"contact\">
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
                        <a class=\"phone\" href=\"https://www.facebook.com/North-Texas-Sleep-Solutions-500699783443680/\">
                            <i class=\"fa fa-3x fa-facebook sr-icons\" style=\"color:#3B5998;\"></i>
                            <h4 style=\"margin-top:6px; color:#333;\">Connect with Us</h4>
                        </a>
                    </div>

                    <div class=\"col-lg-12 well\" style=\"height: 300px; background-color: rgba(22, 102, 161, 0.7);\">
                        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3348.6139696127607!2d-97.21530488424372!3d32.934795980924655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864dd6e645f479d5%3A0x3ac8250fcb25fdb8!2s1675+Keller+Pkwy+%23100%2C+Keller%2C+TX+76248!5e0!3m2!1sen!2sus!4v1483138439774\"
                                width=\"100%\" height=\"100%\" frameborder=\"0\" style=\"border:0\"></iframe>
                    </div>
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
            }
        };
    </script>
{% endblock %}", "default/index.html.twig", "/home/david/Code/bluestone/app/Resources/views/default/index.html.twig");
    }
}
