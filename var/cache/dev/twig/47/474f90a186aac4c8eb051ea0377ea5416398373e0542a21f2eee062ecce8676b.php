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
        $__internal_9cce52de8f68ddc5ba63da3493da7364ef4b7359ffabaa3170df2a68dbcbc63b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cce52de8f68ddc5ba63da3493da7364ef4b7359ffabaa3170df2a68dbcbc63b->enter($__internal_9cce52de8f68ddc5ba63da3493da7364ef4b7359ffabaa3170df2a68dbcbc63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_0fde16fbe0d3fc14371f0ea90903d6dd767489c5ef1b92c5d6c81cf1afb8d690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fde16fbe0d3fc14371f0ea90903d6dd767489c5ef1b92c5d6c81cf1afb8d690->enter($__internal_0fde16fbe0d3fc14371f0ea90903d6dd767489c5ef1b92c5d6c81cf1afb8d690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cce52de8f68ddc5ba63da3493da7364ef4b7359ffabaa3170df2a68dbcbc63b->leave($__internal_9cce52de8f68ddc5ba63da3493da7364ef4b7359ffabaa3170df2a68dbcbc63b_prof);

        
        $__internal_0fde16fbe0d3fc14371f0ea90903d6dd767489c5ef1b92c5d6c81cf1afb8d690->leave($__internal_0fde16fbe0d3fc14371f0ea90903d6dd767489c5ef1b92c5d6c81cf1afb8d690_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c937c3a494e0d626734f271169303d3fb8ff4b5c005b01227b6de375c78af37c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c937c3a494e0d626734f271169303d3fb8ff4b5c005b01227b6de375c78af37c->enter($__internal_c937c3a494e0d626734f271169303d3fb8ff4b5c005b01227b6de375c78af37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2f49ff2631ecc9c110e52e0e97053f3e06ff67c446292964ad9b2dbce88648d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f49ff2631ecc9c110e52e0e97053f3e06ff67c446292964ad9b2dbce88648d3->enter($__internal_2f49ff2631ecc9c110e52e0e97053f3e06ff67c446292964ad9b2dbce88648d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "NTSS";
        
        $__internal_2f49ff2631ecc9c110e52e0e97053f3e06ff67c446292964ad9b2dbce88648d3->leave($__internal_2f49ff2631ecc9c110e52e0e97053f3e06ff67c446292964ad9b2dbce88648d3_prof);

        
        $__internal_c937c3a494e0d626734f271169303d3fb8ff4b5c005b01227b6de375c78af37c->leave($__internal_c937c3a494e0d626734f271169303d3fb8ff4b5c005b01227b6de375c78af37c_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2d5ea507783d46988f5e8c71e375a1e5ab826ea1506004d1643500646d9da3e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d5ea507783d46988f5e8c71e375a1e5ab826ea1506004d1643500646d9da3e1->enter($__internal_2d5ea507783d46988f5e8c71e375a1e5ab826ea1506004d1643500646d9da3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a5e902b3e9e54d8f48469cbc38934f4268d115a0d0607e729b58a9d96ec9cc1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e902b3e9e54d8f48469cbc38934f4268d115a0d0607e729b58a9d96ec9cc1e->enter($__internal_a5e902b3e9e54d8f48469cbc38934f4268d115a0d0607e729b58a9d96ec9cc1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_a5e902b3e9e54d8f48469cbc38934f4268d115a0d0607e729b58a9d96ec9cc1e->leave($__internal_a5e902b3e9e54d8f48469cbc38934f4268d115a0d0607e729b58a9d96ec9cc1e_prof);

        
        $__internal_2d5ea507783d46988f5e8c71e375a1e5ab826ea1506004d1643500646d9da3e1->leave($__internal_2d5ea507783d46988f5e8c71e375a1e5ab826ea1506004d1643500646d9da3e1_prof);

    }

    // line 26
    public function block_pre_javascripts($context, array $blocks = array())
    {
        $__internal_dcb0f364eca8440910e07c0a551728ca863f57176edd897a0385250447d477e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcb0f364eca8440910e07c0a551728ca863f57176edd897a0385250447d477e3->enter($__internal_dcb0f364eca8440910e07c0a551728ca863f57176edd897a0385250447d477e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_javascripts"));

        $__internal_c89bfcaa03f56e9b0d56487910b13a541f7185f67955d48d43837931c9b6adde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c89bfcaa03f56e9b0d56487910b13a541f7185f67955d48d43837931c9b6adde->enter($__internal_c89bfcaa03f56e9b0d56487910b13a541f7185f67955d48d43837931c9b6adde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_javascripts"));

        // line 27
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
        
        $__internal_c89bfcaa03f56e9b0d56487910b13a541f7185f67955d48d43837931c9b6adde->leave($__internal_c89bfcaa03f56e9b0d56487910b13a541f7185f67955d48d43837931c9b6adde_prof);

        
        $__internal_dcb0f364eca8440910e07c0a551728ca863f57176edd897a0385250447d477e3->leave($__internal_dcb0f364eca8440910e07c0a551728ca863f57176edd897a0385250447d477e3_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_e38ce3c0e0c9ab27f03733342d494feefe544147081ac7a733a6e701efd2d446 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e38ce3c0e0c9ab27f03733342d494feefe544147081ac7a733a6e701efd2d446->enter($__internal_e38ce3c0e0c9ab27f03733342d494feefe544147081ac7a733a6e701efd2d446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_50956dee9b557b36bf20d6bfbbcd3352a7916b8f705f02a16910b32d462bb198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50956dee9b557b36bf20d6bfbbcd3352a7916b8f705f02a16910b32d462bb198->enter($__internal_50956dee9b557b36bf20d6bfbbcd3352a7916b8f705f02a16910b32d462bb198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 39
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
                        <a class=\"page-scroll\" href=\"#about\">About Us</a>
                    </li>
                    <li>
                        <a class=\"next-page\" href=\"";
        // line 69
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
        // line 83
        echo "                <h2>Tired of the Snoring?</h2>
                <h5>Solutions for a better Quality of Life</h5>
                <h2>Call us today<br><a class=\"phone phone-white\" href=\"tel:817-431-6764\"><i class=\"fa fa-phone sr-icons\"></i> 817-431-6764</a></h2>
            </div>
            <a style=\"margin-top:40px;\" href=\"#sleep\" class=\"btn btn-primary btn-xl page-scroll\">Find Out More about Sleep Apnea</a>
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
                        <li>Excessive sleepiness when awake or unintended episodes of falling asleep</li>
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
                    <h2>Call us today<br><a class=\"phone phone-black\" href=\"tel:817-431-6764\"><i class=\"fa fa-phone sr-icons\"></i> 817-431-6764</a></h2>
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
        // line 173
        echo "                        <h3>CPAP</h3>
                        <p>Continuous positive airway pressure therapy (CPAP ) uses a machine to help a person who has
                            obstructive sleep apnea (OSA) breathe more easily during sleep. A CPAP machine increases
                            air pressure in your throat so that your airway doesn't collapse when you breathe in.</p>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 text-center\">
                    <div class=\"service-box\">
                        ";
        // line 182
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
        // line 192
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

    <section id=\"contact\">
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

                    <a style=\"margin-top:40px;\" href=\"#more\" class=\"page-scroll btn btn-primary btn-xl sr-button\">More Information</a>
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

                    <img src=\"img/portfolio/lauck.jpg\" class=\"img-responsive about-us\" alt=\"Responsive image\">

                    <hr class=\"light\">
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
                    <h4 style=\"margin-top:6px;\"><a class=\"phone phone-white\" href=\"tel:817-431-6764\"> 817-431-6764</a></h4>
                </div>
                <div class=\"col-lg-5 text-center\">
                    <i class=\"fa fa-3x fa-envelope-o sr-icons\"></i>
                    <h4 style=\"margin-top:6px;\"><a class=\"phone phone-white\" href=\"mailto:ntxsleepsolutions@gmail.com\">ntxsleepsolutions@gmail.com</a></h4>
                </div>
            </div>
        </div>
    </section>


    ";
        // line 274
        echo "    ";
        // line 275
        echo "        ";
        // line 276
        echo "            ";
        // line 277
        echo "                ";
        // line 278
        echo "                    ";
        // line 279
        echo "                    ";
        // line 280
        echo "                ";
        // line 281
        echo "                ";
        // line 282
        echo "                    ";
        // line 283
        echo "                    ";
        // line 284
        echo "                    ";
        // line 285
        echo "                    ";
        // line 286
        echo "                    ";
        // line 287
        echo "                    ";
        // line 288
        echo "                    ";
        // line 289
        echo "                ";
        // line 290
        echo "                ";
        // line 291
        echo "                    ";
        // line 292
        echo "                ";
        // line 293
        echo "            ";
        // line 294
        echo "        ";
        // line 295
        echo "    ";
        // line 296
        echo "
    ";
        // line 298
        echo "    ";
        // line 299
        echo "        ";
        // line 300
        echo "            ";
        // line 301
        echo "                ";
        // line 302
        echo "                    ";
        // line 303
        echo "                    ";
        // line 304
        echo "                ";
        // line 305
        echo "                ";
        // line 306
        echo "                    ";
        // line 307
        echo "                    ";
        // line 308
        echo "                    ";
        // line 309
        echo "
                ";
        // line 311
        echo "                ";
        // line 312
        echo "                    ";
        // line 313
        echo "                ";
        // line 314
        echo "            ";
        // line 315
        echo "        ";
        // line 316
        echo "    ";
        // line 317
        echo "

";
        
        $__internal_50956dee9b557b36bf20d6bfbbcd3352a7916b8f705f02a16910b32d462bb198->leave($__internal_50956dee9b557b36bf20d6bfbbcd3352a7916b8f705f02a16910b32d462bb198_prof);

        
        $__internal_e38ce3c0e0c9ab27f03733342d494feefe544147081ac7a733a6e701efd2d446->leave($__internal_e38ce3c0e0c9ab27f03733342d494feefe544147081ac7a733a6e701efd2d446_prof);

    }

    // line 324
    public function block_post_javascripts($context, array $blocks = array())
    {
        $__internal_210dd5d4dd516a42646a7ec45ab88bef76cdf14a78d321a6dd072eab62c1a714 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_210dd5d4dd516a42646a7ec45ab88bef76cdf14a78d321a6dd072eab62c1a714->enter($__internal_210dd5d4dd516a42646a7ec45ab88bef76cdf14a78d321a6dd072eab62c1a714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_javascripts"));

        $__internal_afd31f2cde04ea585e6b4899c788474cbab6ac98de188faf0aad73b0ac013b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afd31f2cde04ea585e6b4899c788474cbab6ac98de188faf0aad73b0ac013b7b->enter($__internal_afd31f2cde04ea585e6b4899c788474cbab6ac98de188faf0aad73b0ac013b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_javascripts"));

        // line 325
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
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/creative.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_afd31f2cde04ea585e6b4899c788474cbab6ac98de188faf0aad73b0ac013b7b->leave($__internal_afd31f2cde04ea585e6b4899c788474cbab6ac98de188faf0aad73b0ac013b7b_prof);

        
        $__internal_210dd5d4dd516a42646a7ec45ab88bef76cdf14a78d321a6dd072eab62c1a714->leave($__internal_210dd5d4dd516a42646a7ec45ab88bef76cdf14a78d321a6dd072eab62c1a714_prof);

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
        return array (  505 => 337,  491 => 325,  482 => 324,  470 => 317,  468 => 316,  466 => 315,  464 => 314,  462 => 313,  460 => 312,  458 => 311,  455 => 309,  453 => 308,  451 => 307,  449 => 306,  447 => 305,  445 => 304,  443 => 303,  441 => 302,  439 => 301,  437 => 300,  435 => 299,  433 => 298,  430 => 296,  428 => 295,  426 => 294,  424 => 293,  422 => 292,  420 => 291,  418 => 290,  416 => 289,  414 => 288,  412 => 287,  410 => 286,  408 => 285,  406 => 284,  404 => 283,  402 => 282,  400 => 281,  398 => 280,  396 => 279,  394 => 278,  392 => 277,  390 => 276,  388 => 275,  386 => 274,  303 => 192,  292 => 182,  282 => 173,  191 => 83,  175 => 69,  143 => 39,  134 => 38,  115 => 27,  106 => 26,  94 => 22,  90 => 21,  71 => 6,  62 => 5,  44 => 3,  11 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('css/custom.css') }}\" />
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
                <h2>Call us today<br><a class=\"phone phone-white\" href=\"tel:817-431-6764\"><i class=\"fa fa-phone sr-icons\"></i> 817-431-6764</a></h2>
            </div>
            <a style=\"margin-top:40px;\" href=\"#sleep\" class=\"btn btn-primary btn-xl page-scroll\">Find Out More about Sleep Apnea</a>
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
                        <li>Excessive sleepiness when awake or unintended episodes of falling asleep</li>
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
                    <h2>Call us today<br><a class=\"phone phone-black\" href=\"tel:817-431-6764\"><i class=\"fa fa-phone sr-icons\"></i> 817-431-6764</a></h2>
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

    <section id=\"contact\">
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

                    <a style=\"margin-top:40px;\" href=\"#more\" class=\"page-scroll btn btn-primary btn-xl sr-button\">More Information</a>
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

                    <img src=\"img/portfolio/lauck.jpg\" class=\"img-responsive about-us\" alt=\"Responsive image\">

                    <hr class=\"light\">
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
                    <h4 style=\"margin-top:6px;\"><a class=\"phone phone-white\" href=\"tel:817-431-6764\"> 817-431-6764</a></h4>
                </div>
                <div class=\"col-lg-5 text-center\">
                    <i class=\"fa fa-3x fa-envelope-o sr-icons\"></i>
                    <h4 style=\"margin-top:6px;\"><a class=\"phone phone-white\" href=\"mailto:ntxsleepsolutions@gmail.com\">ntxsleepsolutions@gmail.com</a></h4>
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
