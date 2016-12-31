<?php

/* default/index.html.twig */
class __TwigTemplate_95037066e25c238379d2683ef141d26d9c743b9e8fa6f9f69f4798984d6b1243 extends Twig_Template
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
        $__internal_f827796a6a506e14b575d0fa081f0cd3c2abf25b57ffe46defbe5807efdaf03b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f827796a6a506e14b575d0fa081f0cd3c2abf25b57ffe46defbe5807efdaf03b->enter($__internal_f827796a6a506e14b575d0fa081f0cd3c2abf25b57ffe46defbe5807efdaf03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_9547b3a64c631da862e1ed0a11ea475e77e118241d023ace3a3f2d27897c4417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9547b3a64c631da862e1ed0a11ea475e77e118241d023ace3a3f2d27897c4417->enter($__internal_9547b3a64c631da862e1ed0a11ea475e77e118241d023ace3a3f2d27897c4417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f827796a6a506e14b575d0fa081f0cd3c2abf25b57ffe46defbe5807efdaf03b->leave($__internal_f827796a6a506e14b575d0fa081f0cd3c2abf25b57ffe46defbe5807efdaf03b_prof);

        
        $__internal_9547b3a64c631da862e1ed0a11ea475e77e118241d023ace3a3f2d27897c4417->leave($__internal_9547b3a64c631da862e1ed0a11ea475e77e118241d023ace3a3f2d27897c4417_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fb625ee0f14af72e3f48030f823186ec8a8c887b1b2bbcbbbc2bcb058b9917a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fb625ee0f14af72e3f48030f823186ec8a8c887b1b2bbcbbbc2bcb058b9917a->enter($__internal_0fb625ee0f14af72e3f48030f823186ec8a8c887b1b2bbcbbbc2bcb058b9917a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7f4e67ef6cac648f8a4a68e34167d53d0587be208102bb079b26d7d37da2495c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f4e67ef6cac648f8a4a68e34167d53d0587be208102bb079b26d7d37da2495c->enter($__internal_7f4e67ef6cac648f8a4a68e34167d53d0587be208102bb079b26d7d37da2495c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "NTSS";
        
        $__internal_7f4e67ef6cac648f8a4a68e34167d53d0587be208102bb079b26d7d37da2495c->leave($__internal_7f4e67ef6cac648f8a4a68e34167d53d0587be208102bb079b26d7d37da2495c_prof);

        
        $__internal_0fb625ee0f14af72e3f48030f823186ec8a8c887b1b2bbcbbbc2bcb058b9917a->leave($__internal_0fb625ee0f14af72e3f48030f823186ec8a8c887b1b2bbcbbbc2bcb058b9917a_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cc3255fdb05aa118e97c84001a2f5dc8787b853d238e6a03a3955860e8ca6207 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc3255fdb05aa118e97c84001a2f5dc8787b853d238e6a03a3955860e8ca6207->enter($__internal_cc3255fdb05aa118e97c84001a2f5dc8787b853d238e6a03a3955860e8ca6207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_25cf5ac9fa0ce72099a67436f16cdff1238e2015c7fdcd693de8dd6c2dabd374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25cf5ac9fa0ce72099a67436f16cdff1238e2015c7fdcd693de8dd6c2dabd374->enter($__internal_25cf5ac9fa0ce72099a67436f16cdff1238e2015c7fdcd693de8dd6c2dabd374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <!-- Bootstrap Core CSS -->
    <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href=\"vendor/magnific-popup/magnific-popup.css\" rel=\"stylesheet\">

    <!-- Theme CSS -->
    <link href=\"css/creative.min.css\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/creative.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_25cf5ac9fa0ce72099a67436f16cdff1238e2015c7fdcd693de8dd6c2dabd374->leave($__internal_25cf5ac9fa0ce72099a67436f16cdff1238e2015c7fdcd693de8dd6c2dabd374_prof);

        
        $__internal_cc3255fdb05aa118e97c84001a2f5dc8787b853d238e6a03a3955860e8ca6207->leave($__internal_cc3255fdb05aa118e97c84001a2f5dc8787b853d238e6a03a3955860e8ca6207_prof);

    }

    // line 25
    public function block_pre_javascripts($context, array $blocks = array())
    {
        $__internal_76b89a95c4a28ef9b10697e22d19cf6f42d869f1d646b4cda8f9ad65ce69e590 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76b89a95c4a28ef9b10697e22d19cf6f42d869f1d646b4cda8f9ad65ce69e590->enter($__internal_76b89a95c4a28ef9b10697e22d19cf6f42d869f1d646b4cda8f9ad65ce69e590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_javascripts"));

        $__internal_7e6b434bb81c8de7f4f9d08717282d3f76cea768478da664b1d4427295faf21e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e6b434bb81c8de7f4f9d08717282d3f76cea768478da664b1d4427295faf21e->enter($__internal_7e6b434bb81c8de7f4f9d08717282d3f76cea768478da664b1d4427295faf21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_javascripts"));

        // line 26
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
        
        $__internal_7e6b434bb81c8de7f4f9d08717282d3f76cea768478da664b1d4427295faf21e->leave($__internal_7e6b434bb81c8de7f4f9d08717282d3f76cea768478da664b1d4427295faf21e_prof);

        
        $__internal_76b89a95c4a28ef9b10697e22d19cf6f42d869f1d646b4cda8f9ad65ce69e590->leave($__internal_76b89a95c4a28ef9b10697e22d19cf6f42d869f1d646b4cda8f9ad65ce69e590_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca3bde360fc41e47a082d77364a9f9fc3855ff093ee9cc5636d5b9e77263d888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca3bde360fc41e47a082d77364a9f9fc3855ff093ee9cc5636d5b9e77263d888->enter($__internal_ca3bde360fc41e47a082d77364a9f9fc3855ff093ee9cc5636d5b9e77263d888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_28530d9b80574da6f8e340c34d7042e97e9da56edcc6234cc762a7fee67924cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28530d9b80574da6f8e340c34d7042e97e9da56edcc6234cc762a7fee67924cf->enter($__internal_28530d9b80574da6f8e340c34d7042e97e9da56edcc6234cc762a7fee67924cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 38
        echo "    <nav id=\"mainNav\" class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span> Menu <i class=\"fa fa-bars\"></i>
                </button>
                <a class=\"navbar-brand page-scroll hidden-md hidden-lg visible-xs-* visible-sm-*\" href=\"#page-top\">NTSS</a>
                <a class=\"navbar-brand page-scroll hidden-xs hidden-sm visible-md-* visible-lg-*\" href=\"#page-top\">North Texas Sleep Solutions</a>
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
                        <a class=\"page-scroll\" href=\"#contact\">Contact</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#more\">More Info</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#about\">About Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class=\"header-content\">
            <div class=\"header-content-inner\"  style=\"color: #1666A1; text-shadowx: black 0px 0px 200px;\">
                <h1 id=\"homeHeading\">Welcome to<br>North Texas Sleep Solutions</h1>
                ";
        // line 82
        echo "                <h2>Tired of the Snoring?</h2>
                <h5>Solutions for a better Quality of Life</h5>
                <h2>Call us today<br><a class=\"phone\" href=\"tel:817-431-6764\"><i class=\"fa fa-phone sr-icons\"></i> 817-431-6764</a></h2>
                <a style=\"margin-top:40px;\" href=\"#sleep\" class=\"btn btn-primary btn-xl page-scroll\">Find Out More about Sleep Apnea</a>
            </div>
        </div>
    </header>


    <section class=\"bg-primary\" id=\"sleep\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                    <h1 class=\"section-heading\"><strong>Your Problem</strong></h1>
                    <hr class=\"light\">


                    <p>At least 40 million Americans suffer from chronic, long term sleep disorders each year.
                       The majority of these disorders can result in sleep deprivation which interferes with work,
                       driving, and school activites.
                    </p>

                    <h3 class=\"section-heading\">Signs of Sleep Apnea include</h3>
                    <hr class=\"light\">
                    <ul class=\"text-left\">
                        <li>Loud snoring that may be associated with breathing pauses or gasping for breath</li>
                        <li>Excessive sleeiness when awake or unintended episodes of falling asleep</li>
                        <li>Continuing to feel tired or fatiuged no matter how long you sleep</li>
                    </ul>
                    <p>Untreated sleep disorders are directly linked to many chronic diseases, including obesity,
                       hypertension, diabetes, impotence, arrhythmia, and stroke.
                    </p>


                    <a href=\"#selfcheck\" class=\"page-scroll btn btn-default btn-xl sr-button\" style=\"margin-top:40px;\">Take self check</a>
                </div>
            </div>
        </div>
    </section>


    <section id=\"selfcheck\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                    <h1 class=\"section-heading\"><strong>Quick Self Check</strong></h1>
                    <h2 class=\"section-heading\">Are you struggling to Breathe when you are sleeping?</h2>
                    <hr class=\"light\">


                    <h3 class=\"section-heading\">Even if you don't THINK you have a problem, take this quick self check</h3>

                    <ul class=\"text-left\">
                        <li>Do you SNORE?</li>
                        <li>Are you TIRED during the day?</li>
                        <li>Has anyone seen you CHOKING or GASPING when you sleep?</li>
                        <li>Have you been told you have HIGH BLOOD PRESSURE?</li>
                        <li>Do you have ACID REFLUX?</li>
                        <li>Do you have DIABETES</li>
                    </ul>

                    <p>If you answered YES to more than TWO of the questions give us a call to inquire about home sleep testing.
                    </p>
                    <h2>Call us today<br><a style=\"color:#333333;\" class=\"phone\" href=\"tel:817-431-6764\"><i class=\"fa fa-phone sr-icons\"></i> 817-431-6764</a></h2>
                    <a href=\"#services\" class=\"page-scroll btn btn-primary btn-xl sr-button\" style=\"margin-top:40px;\">Check out our Services</a>
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
                    <p>We guide you to the approriate treatment
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
        // line 172
        echo "                        <h3>CPAP</h3>
                        <p>Continuous positive airway pressure therapy (CPAP ) uses a machine to help a person who has
                            obstructive sleep apnea (OSA) breathe more easily during sleep. A CPAP machine increases
                            air pressure in your throat so that your airway doesn't collapse when you breathe in.</p>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 text-center\">
                    <div class=\"service-box\">
                        ";
        // line 181
        echo "                        <h3>Surgery</h3>
                        <p>It involves removing and repositioning excess tissue in the throat to make the airway wider.
                            The surgeon can trim down your soft palate and uvula, remove your tonsils, and reposition
                            some of the muscles of the soft palate. UPPP and other soft palate procedures are the most
                            common type of surgery for sleep apne</p>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 text-center\">
                    <div class=\"service-box\">
                        ";
        // line 191
        echo "                        <h3>Oral Appliance Therapy</h3>
                        <p >Also called Jaw Advancing Device (JAD) or Mandibular Advancement Device (MAD), these
                            sleep apnea mouth pieces are custom made by dentists using a plastic-like mold to form
                            to the specific shape of the patients teeth and mouth. Not only do they work against sleep
                            apnea, they are also effective to stop snoring.</p>
                    </div>
                </div>

                <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                    <a href=\"#contact\" class=\"page-scroll btn btn-default btn-xl sr-button\" style=\"margin-top:40px;\">Contact Us</a>
                </div>
            </div>

        </div>
    </section>

    <section class=\"bg-primaryx\" id=\"contact\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                    <h1 class=\"section-heading\">We're here for you!</h1>
                    <h2><strong>North Texas Sleep Solutions</strong><br>Dr. Rebecca Lauck</h2>
                    <hr class=\"dark\">
                    <h4>1675 Keller Parkway<br>Suite 100<br>Keller, Texas 76248</h4>

                    <div class=\"col-lg-5 col-lg-offset-1 text-center\">
                        <i class=\"fa fa-3x  fa-phone sr-icons\"></i>
                        <h4 style=\"margin-top:6px;\"><a style=\"color:#333;\" class=\"phone\" href=\"tel:817-431-6764\"> 817-431-6764</a></h4>
                    </div>
                    <div class=\"col-lg-5 text-center\">
                        <i class=\"fa fa-3x fa-envelope-o sr-icons\"></i>
                        <h4 style=\"margin-top:6px;\"><a style=\"color:#333;\" class=\"phone\" href=\"mailto:ntxsleepsolutions@gmail.com\">ntxsleepsolutions@gmail.com</a></h4>
                    </div>

                    <div class=\"col-lg-12 well\" style=\"height: 300px; background-color: rgba(22, 102, 161, 0.7);\">
                    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3348.6139696127607!2d-97.21530488424372!3d32.934795980924655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864dd6e645f479d5%3A0x3ac8250fcb25fdb8!2s1675+Keller+Pkwy+%23100%2C+Keller%2C+TX+76248!5e0!3m2!1sen!2sus!4v1483138439774\"
                            width=\"100%\" height=\"100%\" frameborder=\"0\" style=\"border:0\"></iframe>
                    </div>

                    <a style=\"margin-top:40px;\" href=\"#services\" class=\"page-scroll btn btn-primary btn-xl sr-button\">Check out our Services</a>
                </div>
            </div>
        </div>
    </section>

    <section class=\"bg-primary\" id=\"more\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2 class=\"section-heading\">More Information</h2>
                    <hr class=\"light\">
                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\" style=\"margin: auto;\">
                <div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
                            <h4 class=\"panel-title\">
                                <a class=\"collapsed more-info\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"false\" aria-controls=\"collapseOne\">
                                    Sleep Apnea
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapseOne\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                            <div class=\"panel-body panel-black\">
                                Sleep apnea (AP-ne-ah) is a common disorder in which you have one or more pauses in breathing or shallow breaths while you sleep.
                                <br><br>
                                Breathing pauses can last from a few seconds to minutes. They may occur 30 times or more an hour. Typically, normal breathing then starts again, sometimes with a loud snort or choking sound.
                                <br><br>
                                Sleep apnea usually is a chronic (ongoing) condition that disrupts your sleep. When your breathing pauses or becomes shallow, you’ll often move out of deep sleep and into light sleep.
                                <br><br>
                                As a result, the quality of your sleep is poor, which makes you tired during the day. Sleep apnea is a leading cause of excessive daytime sleepiness.
                                <br><br>
                                <img style=\"margin:auto;\" src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/fullsize/sleepApnea.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                                <br><br>
                                <a style=\"font-size: 10px;\" href=\"https://www.nhlbi.nih.gov/health/health-topics/topics/sleepapnea\">Source - National Heart, Lung, and Blood Institute</a>

                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">
                            <h4 class=\"panel-title\">
                                <a class=\"collapsed more-info\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                    Oral Appliances
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapseTwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
                            <div class=\"panel-body panel-black\">
                                <h2>Thornton Adjustable Positioner (TAP)</h2>
                                <div>
                                    <img src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/fullsize/tap.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" style=\"float:right; margin:auto; max-width:250px;\"/>
                                    The Thornton Adjustable Positioner (TAP) is a custom-made two piece adjustable appliance that is worn while sleeping. The trays of the appliance snap over the upper and lower teeth and hook together. The design is based on the same principle as cardiopulmonary resuscitation, CPR. The airway must be opened to allow air to pass through the throat. The TAP holds the lower jaw in a forward position so that it does not shift nor fall open during the night. This prevents the airway from collapsing. The more you pull your jaw forward, the more your airway will open.
                                    <br><br>
                                    The TAP is the only mandibular advancement device that can be adjusted easily by the patient or practitioner while in the mouth. This feature allows the patient to always be in control of their treatment. The unique design also allows the patient to fine-tune their treatment position at home to achieve maximum results.
                                    <br><br>
                                    Most patients experience relief the very first night they wear their TAP. Although it may take up to a week to get used to wearing a TAP appliance, this is a small hurdle for patients. Nine in ten patients wear the device all night, every night  making the TAP a highly effective solution for both snoring and sleep apnea.
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
                                    <a style=\"font-size: 10px;\" href=\"https://www.sleepassociation.org/thornton-adjustable-positioner-tap/\">Source - American Sleep Association</a>

                                </div>
                                <hr class=\"dark\">
                                <h2>Somnomed appliance</h2>
                                <div>
                                    <img src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/fullsize/somnomedAcrylic-seperate-pieces-new-logo.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" style=\"float:right; margin:auto; max-width:250px;\"/>

                                    <h3>Sleep Apnea Oral Appliance: SomnoDent</h3>

                                    A SomnoDent sleep apnea oral appliance is a premium, custom-fitted dental device
                                    developed for the treatment of snoring and obstructive sleep apnea. It is an
                                    effective, comfortable, and durable alternative to CPAP therapy or corrective
                                    surgery. By simply wearing a SomnoDent while sleeping, your lower jaw (mandible)
                                    will be moved forward into a comfortable position, allowing relaxation of the
                                    tissues at the back of your throat and ensuring the base of your tongue does not
                                    collapse and block your airway, giving you a safe and soundless sleep. Most patients
                                    and practitioners prefer oral appliance therapy for its comfort, convenience and
                                    effectiveness.

                                    <br><br>

                                    <h3>Is a SomnoDent Sleep Apnea Oral Appliance Right for Me?</h3>
                                    A growing number of men and women have discovered SomnoDent to be the perfect
                                    solution for ending snoring, treating sleep apnea and/or improving sleep quality.
                                    It is an ideal alternative treatment for patients who have been diagnosed with mild
                                    to moderate obstructive sleep apnea or for those who have severe OSA, yet are unable
                                    or unwilling to tolerate CPAP therapy and/or surgery.

                                    <br><br>

                                    <h3>SomnoDent Difference</h3>
                                    <ul class=\"text-left\">
                                        <li><strong>Effective:</strong> 91% of patients reported improvement in sleep quality with SomnoDent</li>
                                        <li><strong>Highest Quality:</strong> FDA 510K cleared , Class II Medical Devices, and manufactured at an ISO 13485 certified facility. Customized using the highest quality acrylic which does not discolor or attract odors.</li>
                                        <li><strong>Custom-fit:</strong> SomnoDent sleep apnea oral appliances are manufactured using dental impressions of your teeth, ensuring and effortless, custom-fit unique to your mouth</li>
                                        <li><strong>Non-Restrictive in Movement:</strong> While wearing a SomnoDent, you will be able to fully open and close your mouth, yawn, drink, take oral medication and even speak clearly, making it ideal for the patient who may be claustrophobic.</li>
                                        <li><strong>Easily Adjustable:</strong> SomnoDent is unlimited in protrusive advancement, meaning that you can advance your lower jaw as forward as possible when wearing the device.</li>
                                        <li><strong>Highly Adaptable:</strong> If you have missing teeth, crowns, bridge work or wear a full upper denture, a SomnoDent can be adapted to fit your mouth structure.</li>

                                        <li><strong>Patient Compliance:</strong> 88% of patients reported regular use of their SomnoDent device¹</li>
                                        <li><strong>Enduring Durability:</strong> A combination of premium materials and, for some models, inner cast framework, ensures that the SomnoDent oral device is one of the strongest appliances currently available, making it an ideal treatment option for all patients, especially teeth grinders (bruxers). 1 to 3 year warranty against manufacturing defects.</li>
                                        <li><strong>Clinically Proven:</strong> 15+ independent studies demonstrate the device’s significant clinical benefits</li>
                                        <li><strong>Combination Use:</strong> SomnoDent can conveniently be used as a companion to your CPAP for combination therapy, allowing simpler mask fitting, reduced CPAP pressure and a compact alternative for travelling.</li>
                                    </ul>
                                    <a style=\"font-size: 10px;\" href=\"https://somnomed.com/us/patients/somnodent-product-information-for-patients//\">Source - Somnomed</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingThree\">
                            <h4 class=\"panel-title\">
                                <a class=\"collapsed more-info\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                                    Forms
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapseThree\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree\">
                            <div class=\"panel-body panel-black\">
                                <ul class=\"text-left\">
                                    <li>New Patient</li>
                                    <li>Insurance Information</li>
                                    <li>Privacy Notice</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id=\"about\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                    <h2 class=\"section-heading\">Meet Dr. Rebecca Lauck</h2>

                    <img src=\"img/portfolio/lauck.jpg\" style=\"max-width: 400px; max-height: 400px; margin: auto;\" class=\"img-responsive\" alt=\"Responsive image\">

                    <hr class=\"dark\">
                    <p>After earning her Doctorate in Dental Surgery at Baylor College of Dentistry in Dallas, Dr. Lauck
                       has completed over 2,500 hours of continued education and since 2001 has focused her studies on
                        TMJ and Sleep Apnea treatments.
                    </p>
                    <p>She holds 2 diplomate degrees in Sleep Apnea Treatment, in addition to being a Medicare provider
                        for Sleep Apnea.  She has experience in different appliance designs that fit every individual case.
                    </p>
                    <p>For your treatment, she uses only FDA approved appliances that are made in top labs in the country.
                        Her practice, North Texas Sleep Solutions, is dedicated to treating patients with Obstructive
                        Sleep Apnea and snoring.
                    </p>
                </div>
                <div class=\"col-lg-5 col-lg-offset-1 text-center\">
                    <i class=\"fa fa-3x  fa-phone sr-icons\"></i>
                    <h4 style=\"margin-top:6px;\"><a style=\"color:#333;\" class=\"phone\" href=\"tel:817-431-6764\"> 817-431-6764</a></h4>
                </div>
                <div class=\"col-lg-5 text-center\">
                    <i class=\"fa fa-3x fa-envelope-o sr-icons\"></i>
                    <h4 style=\"margin-top:6px;\"><a style=\"color:#333;\" class=\"phone\" href=\"mailto:ntxsleepsolutions@gmail.com\">ntxsleepsolutions@gmail.com</a></h4>
                </div>
            </div>
        </div>
    </section>


    ";
        // line 427
        echo "    ";
        // line 428
        echo "        ";
        // line 429
        echo "            ";
        // line 430
        echo "                ";
        // line 431
        echo "                    ";
        // line 432
        echo "                    ";
        // line 433
        echo "                ";
        // line 434
        echo "                ";
        // line 435
        echo "                    ";
        // line 436
        echo "                    ";
        // line 437
        echo "                    ";
        // line 438
        echo "                    ";
        // line 439
        echo "                    ";
        // line 440
        echo "                    ";
        // line 441
        echo "                    ";
        // line 442
        echo "                ";
        // line 443
        echo "                ";
        // line 444
        echo "                    ";
        // line 445
        echo "                ";
        // line 446
        echo "            ";
        // line 447
        echo "        ";
        // line 448
        echo "    ";
        // line 449
        echo "
    ";
        // line 451
        echo "    ";
        // line 452
        echo "        ";
        // line 453
        echo "            ";
        // line 454
        echo "                ";
        // line 455
        echo "                    ";
        // line 456
        echo "                    ";
        // line 457
        echo "                ";
        // line 458
        echo "                ";
        // line 459
        echo "                    ";
        // line 460
        echo "                    ";
        // line 461
        echo "                    ";
        // line 462
        echo "
                ";
        // line 464
        echo "                ";
        // line 465
        echo "                    ";
        // line 466
        echo "                ";
        // line 467
        echo "            ";
        // line 468
        echo "        ";
        // line 469
        echo "    ";
        // line 470
        echo "

";
        
        $__internal_28530d9b80574da6f8e340c34d7042e97e9da56edcc6234cc762a7fee67924cf->leave($__internal_28530d9b80574da6f8e340c34d7042e97e9da56edcc6234cc762a7fee67924cf_prof);

        
        $__internal_ca3bde360fc41e47a082d77364a9f9fc3855ff093ee9cc5636d5b9e77263d888->leave($__internal_ca3bde360fc41e47a082d77364a9f9fc3855ff093ee9cc5636d5b9e77263d888_prof);

    }

    // line 477
    public function block_post_javascripts($context, array $blocks = array())
    {
        $__internal_a7d7ec19c66bdfc0835f99d8e6c8367688da0978fc9e5cf7e7f49cf42b3a1f00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7d7ec19c66bdfc0835f99d8e6c8367688da0978fc9e5cf7e7f49cf42b3a1f00->enter($__internal_a7d7ec19c66bdfc0835f99d8e6c8367688da0978fc9e5cf7e7f49cf42b3a1f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_javascripts"));

        $__internal_d95cbb2b208c47416ddc86fa9ae6d7cb032fac79820c8c769fcdc8f37185d0d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d95cbb2b208c47416ddc86fa9ae6d7cb032fac79820c8c769fcdc8f37185d0d4->enter($__internal_d95cbb2b208c47416ddc86fa9ae6d7cb032fac79820c8c769fcdc8f37185d0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_javascripts"));

        // line 478
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
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/creative.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_d95cbb2b208c47416ddc86fa9ae6d7cb032fac79820c8c769fcdc8f37185d0d4->leave($__internal_d95cbb2b208c47416ddc86fa9ae6d7cb032fac79820c8c769fcdc8f37185d0d4_prof);

        
        $__internal_a7d7ec19c66bdfc0835f99d8e6c8367688da0978fc9e5cf7e7f49cf42b3a1f00->leave($__internal_a7d7ec19c66bdfc0835f99d8e6c8367688da0978fc9e5cf7e7f49cf42b3a1f00_prof);

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
        return array (  661 => 490,  647 => 478,  638 => 477,  626 => 470,  624 => 469,  622 => 468,  620 => 467,  618 => 466,  616 => 465,  614 => 464,  611 => 462,  609 => 461,  607 => 460,  605 => 459,  603 => 458,  601 => 457,  599 => 456,  597 => 455,  595 => 454,  593 => 453,  591 => 452,  589 => 451,  586 => 449,  584 => 448,  582 => 447,  580 => 446,  578 => 445,  576 => 444,  574 => 443,  572 => 442,  570 => 441,  568 => 440,  566 => 439,  564 => 438,  562 => 437,  560 => 436,  558 => 435,  556 => 434,  554 => 433,  552 => 432,  550 => 431,  548 => 430,  546 => 429,  544 => 428,  542 => 427,  437 => 324,  397 => 287,  375 => 268,  296 => 191,  285 => 181,  275 => 172,  184 => 82,  139 => 38,  130 => 37,  111 => 26,  102 => 25,  90 => 21,  71 => 6,  62 => 5,  44 => 3,  11 => 1,);
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

{% block stylesheets%}
    {{ parent() }}
    <!-- Bootstrap Core CSS -->
    <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href=\"vendor/magnific-popup/magnific-popup.css\" rel=\"stylesheet\">

    <!-- Theme CSS -->
    <link href=\"css/creative.min.css\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"{{ asset('css/creative.css') }}\" />
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
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span> Menu <i class=\"fa fa-bars\"></i>
                </button>
                <a class=\"navbar-brand page-scroll hidden-md hidden-lg visible-xs-* visible-sm-*\" href=\"#page-top\">NTSS</a>
                <a class=\"navbar-brand page-scroll hidden-xs hidden-sm visible-md-* visible-lg-*\" href=\"#page-top\">North Texas Sleep Solutions</a>
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
                        <a class=\"page-scroll\" href=\"#contact\">Contact</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#more\">More Info</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#about\">About Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class=\"header-content\">
            <div class=\"header-content-inner\"  style=\"color: #1666A1; text-shadowx: black 0px 0px 200px;\">
                <h1 id=\"homeHeading\">Welcome to<br>North Texas Sleep Solutions</h1>
                {#<hr>#}
                <h2>Tired of the Snoring?</h2>
                <h5>Solutions for a better Quality of Life</h5>
                <h2>Call us today<br><a class=\"phone\" href=\"tel:817-431-6764\"><i class=\"fa fa-phone sr-icons\"></i> 817-431-6764</a></h2>
                <a style=\"margin-top:40px;\" href=\"#sleep\" class=\"btn btn-primary btn-xl page-scroll\">Find Out More about Sleep Apnea</a>
            </div>
        </div>
    </header>


    <section class=\"bg-primary\" id=\"sleep\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                    <h1 class=\"section-heading\"><strong>Your Problem</strong></h1>
                    <hr class=\"light\">


                    <p>At least 40 million Americans suffer from chronic, long term sleep disorders each year.
                       The majority of these disorders can result in sleep deprivation which interferes with work,
                       driving, and school activites.
                    </p>

                    <h3 class=\"section-heading\">Signs of Sleep Apnea include</h3>
                    <hr class=\"light\">
                    <ul class=\"text-left\">
                        <li>Loud snoring that may be associated with breathing pauses or gasping for breath</li>
                        <li>Excessive sleeiness when awake or unintended episodes of falling asleep</li>
                        <li>Continuing to feel tired or fatiuged no matter how long you sleep</li>
                    </ul>
                    <p>Untreated sleep disorders are directly linked to many chronic diseases, including obesity,
                       hypertension, diabetes, impotence, arrhythmia, and stroke.
                    </p>


                    <a href=\"#selfcheck\" class=\"page-scroll btn btn-default btn-xl sr-button\" style=\"margin-top:40px;\">Take self check</a>
                </div>
            </div>
        </div>
    </section>


    <section id=\"selfcheck\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                    <h1 class=\"section-heading\"><strong>Quick Self Check</strong></h1>
                    <h2 class=\"section-heading\">Are you struggling to Breathe when you are sleeping?</h2>
                    <hr class=\"light\">


                    <h3 class=\"section-heading\">Even if you don't THINK you have a problem, take this quick self check</h3>

                    <ul class=\"text-left\">
                        <li>Do you SNORE?</li>
                        <li>Are you TIRED during the day?</li>
                        <li>Has anyone seen you CHOKING or GASPING when you sleep?</li>
                        <li>Have you been told you have HIGH BLOOD PRESSURE?</li>
                        <li>Do you have ACID REFLUX?</li>
                        <li>Do you have DIABETES</li>
                    </ul>

                    <p>If you answered YES to more than TWO of the questions give us a call to inquire about home sleep testing.
                    </p>
                    <h2>Call us today<br><a style=\"color:#333333;\" class=\"phone\" href=\"tel:817-431-6764\"><i class=\"fa fa-phone sr-icons\"></i> 817-431-6764</a></h2>
                    <a href=\"#services\" class=\"page-scroll btn btn-primary btn-xl sr-button\" style=\"margin-top:40px;\">Check out our Services</a>
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
                    <p>We guide you to the approriate treatment
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
                        <p>Continuous positive airway pressure therapy (CPAP ) uses a machine to help a person who has
                            obstructive sleep apnea (OSA) breathe more easily during sleep. A CPAP machine increases
                            air pressure in your throat so that your airway doesn't collapse when you breathe in.</p>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 text-center\">
                    <div class=\"service-box\">
                        {#<i class=\"fa fa-4x fa-paper-plane tsext-primary sr-icons\"></i>#}
                        <h3>Surgery</h3>
                        <p>It involves removing and repositioning excess tissue in the throat to make the airway wider.
                            The surgeon can trim down your soft palate and uvula, remove your tonsils, and reposition
                            some of the muscles of the soft palate. UPPP and other soft palate procedures are the most
                            common type of surgery for sleep apne</p>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 text-center\">
                    <div class=\"service-box\">
                        {#<i class=\"fa fa-4x fa-newspaper-o tsext-primary sr-icons\"></i>#}
                        <h3>Oral Appliance Therapy</h3>
                        <p >Also called Jaw Advancing Device (JAD) or Mandibular Advancement Device (MAD), these
                            sleep apnea mouth pieces are custom made by dentists using a plastic-like mold to form
                            to the specific shape of the patients teeth and mouth. Not only do they work against sleep
                            apnea, they are also effective to stop snoring.</p>
                    </div>
                </div>

                <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                    <a href=\"#contact\" class=\"page-scroll btn btn-default btn-xl sr-button\" style=\"margin-top:40px;\">Contact Us</a>
                </div>
            </div>

        </div>
    </section>

    <section class=\"bg-primaryx\" id=\"contact\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                    <h1 class=\"section-heading\">We're here for you!</h1>
                    <h2><strong>North Texas Sleep Solutions</strong><br>Dr. Rebecca Lauck</h2>
                    <hr class=\"dark\">
                    <h4>1675 Keller Parkway<br>Suite 100<br>Keller, Texas 76248</h4>

                    <div class=\"col-lg-5 col-lg-offset-1 text-center\">
                        <i class=\"fa fa-3x  fa-phone sr-icons\"></i>
                        <h4 style=\"margin-top:6px;\"><a style=\"color:#333;\" class=\"phone\" href=\"tel:817-431-6764\"> 817-431-6764</a></h4>
                    </div>
                    <div class=\"col-lg-5 text-center\">
                        <i class=\"fa fa-3x fa-envelope-o sr-icons\"></i>
                        <h4 style=\"margin-top:6px;\"><a style=\"color:#333;\" class=\"phone\" href=\"mailto:ntxsleepsolutions@gmail.com\">ntxsleepsolutions@gmail.com</a></h4>
                    </div>

                    <div class=\"col-lg-12 well\" style=\"height: 300px; background-color: rgba(22, 102, 161, 0.7);\">
                    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3348.6139696127607!2d-97.21530488424372!3d32.934795980924655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864dd6e645f479d5%3A0x3ac8250fcb25fdb8!2s1675+Keller+Pkwy+%23100%2C+Keller%2C+TX+76248!5e0!3m2!1sen!2sus!4v1483138439774\"
                            width=\"100%\" height=\"100%\" frameborder=\"0\" style=\"border:0\"></iframe>
                    </div>

                    <a style=\"margin-top:40px;\" href=\"#services\" class=\"page-scroll btn btn-primary btn-xl sr-button\">Check out our Services</a>
                </div>
            </div>
        </div>
    </section>

    <section class=\"bg-primary\" id=\"more\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2 class=\"section-heading\">More Information</h2>
                    <hr class=\"light\">
                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\" style=\"margin: auto;\">
                <div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
                            <h4 class=\"panel-title\">
                                <a class=\"collapsed more-info\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"false\" aria-controls=\"collapseOne\">
                                    Sleep Apnea
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapseOne\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                            <div class=\"panel-body panel-black\">
                                Sleep apnea (AP-ne-ah) is a common disorder in which you have one or more pauses in breathing or shallow breaths while you sleep.
                                <br><br>
                                Breathing pauses can last from a few seconds to minutes. They may occur 30 times or more an hour. Typically, normal breathing then starts again, sometimes with a loud snort or choking sound.
                                <br><br>
                                Sleep apnea usually is a chronic (ongoing) condition that disrupts your sleep. When your breathing pauses or becomes shallow, you’ll often move out of deep sleep and into light sleep.
                                <br><br>
                                As a result, the quality of your sleep is poor, which makes you tired during the day. Sleep apnea is a leading cause of excessive daytime sleepiness.
                                <br><br>
                                <img style=\"margin:auto;\" src=\"{{ asset('img/portfolio/fullsize/sleepApnea.jpg') }}\" class=\"img-responsive\" alt=\"\">
                                <br><br>
                                <a style=\"font-size: 10px;\" href=\"https://www.nhlbi.nih.gov/health/health-topics/topics/sleepapnea\">Source - National Heart, Lung, and Blood Institute</a>

                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">
                            <h4 class=\"panel-title\">
                                <a class=\"collapsed more-info\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                    Oral Appliances
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapseTwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
                            <div class=\"panel-body panel-black\">
                                <h2>Thornton Adjustable Positioner (TAP)</h2>
                                <div>
                                    <img src=\"{{ asset('img/portfolio/fullsize/tap.png') }}\" class=\"img-responsive\" alt=\"\" style=\"float:right; margin:auto; max-width:250px;\"/>
                                    The Thornton Adjustable Positioner (TAP) is a custom-made two piece adjustable appliance that is worn while sleeping. The trays of the appliance snap over the upper and lower teeth and hook together. The design is based on the same principle as cardiopulmonary resuscitation, CPR. The airway must be opened to allow air to pass through the throat. The TAP holds the lower jaw in a forward position so that it does not shift nor fall open during the night. This prevents the airway from collapsing. The more you pull your jaw forward, the more your airway will open.
                                    <br><br>
                                    The TAP is the only mandibular advancement device that can be adjusted easily by the patient or practitioner while in the mouth. This feature allows the patient to always be in control of their treatment. The unique design also allows the patient to fine-tune their treatment position at home to achieve maximum results.
                                    <br><br>
                                    Most patients experience relief the very first night they wear their TAP. Although it may take up to a week to get used to wearing a TAP appliance, this is a small hurdle for patients. Nine in ten patients wear the device all night, every night  making the TAP a highly effective solution for both snoring and sleep apnea.
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
                                    <a style=\"font-size: 10px;\" href=\"https://www.sleepassociation.org/thornton-adjustable-positioner-tap/\">Source - American Sleep Association</a>

                                </div>
                                <hr class=\"dark\">
                                <h2>Somnomed appliance</h2>
                                <div>
                                    <img src=\"{{ asset('img/portfolio/fullsize/somnomedAcrylic-seperate-pieces-new-logo.jpg') }}\" class=\"img-responsive\" alt=\"\" style=\"float:right; margin:auto; max-width:250px;\"/>

                                    <h3>Sleep Apnea Oral Appliance: SomnoDent</h3>

                                    A SomnoDent sleep apnea oral appliance is a premium, custom-fitted dental device
                                    developed for the treatment of snoring and obstructive sleep apnea. It is an
                                    effective, comfortable, and durable alternative to CPAP therapy or corrective
                                    surgery. By simply wearing a SomnoDent while sleeping, your lower jaw (mandible)
                                    will be moved forward into a comfortable position, allowing relaxation of the
                                    tissues at the back of your throat and ensuring the base of your tongue does not
                                    collapse and block your airway, giving you a safe and soundless sleep. Most patients
                                    and practitioners prefer oral appliance therapy for its comfort, convenience and
                                    effectiveness.

                                    <br><br>

                                    <h3>Is a SomnoDent Sleep Apnea Oral Appliance Right for Me?</h3>
                                    A growing number of men and women have discovered SomnoDent to be the perfect
                                    solution for ending snoring, treating sleep apnea and/or improving sleep quality.
                                    It is an ideal alternative treatment for patients who have been diagnosed with mild
                                    to moderate obstructive sleep apnea or for those who have severe OSA, yet are unable
                                    or unwilling to tolerate CPAP therapy and/or surgery.

                                    <br><br>

                                    <h3>SomnoDent Difference</h3>
                                    <ul class=\"text-left\">
                                        <li><strong>Effective:</strong> 91% of patients reported improvement in sleep quality with SomnoDent</li>
                                        <li><strong>Highest Quality:</strong> FDA 510K cleared , Class II Medical Devices, and manufactured at an ISO 13485 certified facility. Customized using the highest quality acrylic which does not discolor or attract odors.</li>
                                        <li><strong>Custom-fit:</strong> SomnoDent sleep apnea oral appliances are manufactured using dental impressions of your teeth, ensuring and effortless, custom-fit unique to your mouth</li>
                                        <li><strong>Non-Restrictive in Movement:</strong> While wearing a SomnoDent, you will be able to fully open and close your mouth, yawn, drink, take oral medication and even speak clearly, making it ideal for the patient who may be claustrophobic.</li>
                                        <li><strong>Easily Adjustable:</strong> SomnoDent is unlimited in protrusive advancement, meaning that you can advance your lower jaw as forward as possible when wearing the device.</li>
                                        <li><strong>Highly Adaptable:</strong> If you have missing teeth, crowns, bridge work or wear a full upper denture, a SomnoDent can be adapted to fit your mouth structure.</li>

                                        <li><strong>Patient Compliance:</strong> 88% of patients reported regular use of their SomnoDent device¹</li>
                                        <li><strong>Enduring Durability:</strong> A combination of premium materials and, for some models, inner cast framework, ensures that the SomnoDent oral device is one of the strongest appliances currently available, making it an ideal treatment option for all patients, especially teeth grinders (bruxers). 1 to 3 year warranty against manufacturing defects.</li>
                                        <li><strong>Clinically Proven:</strong> 15+ independent studies demonstrate the device’s significant clinical benefits</li>
                                        <li><strong>Combination Use:</strong> SomnoDent can conveniently be used as a companion to your CPAP for combination therapy, allowing simpler mask fitting, reduced CPAP pressure and a compact alternative for travelling.</li>
                                    </ul>
                                    <a style=\"font-size: 10px;\" href=\"https://somnomed.com/us/patients/somnodent-product-information-for-patients//\">Source - Somnomed</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingThree\">
                            <h4 class=\"panel-title\">
                                <a class=\"collapsed more-info\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                                    Forms
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapseThree\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree\">
                            <div class=\"panel-body panel-black\">
                                <ul class=\"text-left\">
                                    <li>New Patient</li>
                                    <li>Insurance Information</li>
                                    <li>Privacy Notice</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id=\"about\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                    <h2 class=\"section-heading\">Meet Dr. Rebecca Lauck</h2>

                    <img src=\"img/portfolio/lauck.jpg\" style=\"max-width: 400px; max-height: 400px; margin: auto;\" class=\"img-responsive\" alt=\"Responsive image\">

                    <hr class=\"dark\">
                    <p>After earning her Doctorate in Dental Surgery at Baylor College of Dentistry in Dallas, Dr. Lauck
                       has completed over 2,500 hours of continued education and since 2001 has focused her studies on
                        TMJ and Sleep Apnea treatments.
                    </p>
                    <p>She holds 2 diplomate degrees in Sleep Apnea Treatment, in addition to being a Medicare provider
                        for Sleep Apnea.  She has experience in different appliance designs that fit every individual case.
                    </p>
                    <p>For your treatment, she uses only FDA approved appliances that are made in top labs in the country.
                        Her practice, North Texas Sleep Solutions, is dedicated to treating patients with Obstructive
                        Sleep Apnea and snoring.
                    </p>
                </div>
                <div class=\"col-lg-5 col-lg-offset-1 text-center\">
                    <i class=\"fa fa-3x  fa-phone sr-icons\"></i>
                    <h4 style=\"margin-top:6px;\"><a style=\"color:#333;\" class=\"phone\" href=\"tel:817-431-6764\"> 817-431-6764</a></h4>
                </div>
                <div class=\"col-lg-5 text-center\">
                    <i class=\"fa fa-3x fa-envelope-o sr-icons\"></i>
                    <h4 style=\"margin-top:6px;\"><a style=\"color:#333;\" class=\"phone\" href=\"mailto:ntxsleepsolutions@gmail.com\">ntxsleepsolutions@gmail.com</a></h4>
                </div>
            </div>
        </div>
    </section>


    {#<!-- Help Modal -->#}
    {#<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">#}
        {#<div class=\"modal-dialog\" role=\"document\">#}
            {#<div class=\"modal-content\">#}
                {#<div class=\"modal-header\" style=\"border-bottom: 1px solid #789FCA;\">#}
                    {#<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>#}
                    {#<h4 class=\"modal-title\" id=\"myModalLabel\">What is Sleep Apnea?</h4>#}
                {#</div>#}
                {#<div class=\"modal-body\">#}
                    {#Sleep apnea (AP-ne-ah) is a common disorder in which you have one or more pauses in breathing or shallow breaths while you sleep.#}
                    {#<br><br>#}
                    {#Breathing pauses can last from a few seconds to minutes. They may occur 30 times or more an hour. Typically, normal breathing then starts again, sometimes with a loud snort or choking sound.#}
                    {#<br><br>#}
                    {#Sleep apnea usually is a chronic (ongoing) condition that disrupts your sleep. When your breathing pauses or becomes shallow, you’ll often move out of deep sleep and into light sleep.#}
                    {#<br><br>#}
                    {#As a result, the quality of your sleep is poor, which makes you tired during the day. Sleep apnea is a leading cause of excessive daytime sleepiness.#}
                {#</div>#}
                {#<div class=\"modal-footer\">#}
                    {#<button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</button>#}
                {#</div>#}
            {#</div>#}
        {#</div>#}
    {#</div>#}

    {#<!-- New Patients Modal -->#}
    {#<div class=\"modal fade\" id=\"modalPatients\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">#}
        {#<div class=\"modal-dialog\" role=\"document\">#}
            {#<div class=\"modal-content\">#}
                {#<div class=\"modal-header\" style=\"border-bottom: 1px solid #789FCA;\">#}
                    {#<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>#}
                    {#<h4 class=\"modal-title\" id=\"myModalLabel\">New Patients</h4>#}
                {#</div>#}
                {#<div class=\"modal-body\">#}
                    {#Currently accepting new patients#}
                    {#<br><br>#}
                    {#Our office works with the majority of medical insurances, including Medicare.#}

                {#</div>#}
                {#<div class=\"modal-footer\">#}
                    {#<button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</button>#}
                {#</div>#}
            {#</div>#}
        {#</div>#}
    {#</div>#}


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
{% endblock %}", "default/index.html.twig", "/home/david/Code/bluestone/app/Resources/views/default/index.html.twig");
    }
}
