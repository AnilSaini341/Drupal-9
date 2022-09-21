<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/elearning/templates/page.html.twig */
class __TwigTemplate_737a10cf9ec495b6d1690b49794d020494932816b6dbf0f4d2e953050c8e3aa9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
   
    <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
        <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div>

    <!-- Navbar Start -->

     <nav class=\"navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0\">
        <a href=\"/\" class=\"navbar-brand d-flex align-items-center px-4 px-lg-5\">
            <h2 class=\"m-0 text-primary\"><i class=\"fa fa-book me-3\"></i>eLEARNING</h2>
        </a>
        <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
                <a href=\"/\" class=\"nav-item nav-link active\">Home</a>
                <a href=\"about.html\" class=\"nav-item nav-link\">About</a>
                <a href=\"courses.html\" class=\"nav-item nav-link\">Courses</a>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
                    <div class=\"dropdown-menu fade-down m-0\">
                        <a href=\"team.html\" class=\"dropdown-item\">Our Team</a>
                        <a href=\"testimonial.html\" class=\"dropdown-item\">Testimonial</a>
                        <a href=\"404.html\" class=\"dropdown-item\">404 Page</a>
                    </div>
                </div>
                <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
            </div>
            <a href=\"\" class=\"btn btn-primary py-4 px-lg-5 d-none d-lg-block\">Join Now<i class=\"fa fa-arrow-right ms-3\"></i></a>
        </div>
    </nav> 
    ";
        // line 37
        echo "    <!-- Navbar End -->


    <!-- Carousel Start -->
     <div class=\"container-fluid p-0 mb-5\">
        <div class=\"owl-carousel header-carousel position-relative\">
            <div class=\"owl-carousel-item position-relative\">
                <img class=\"img-fluid\" src=\"";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 44, $this->source), "html", null, true);
        echo "/img/carousel-1.jpg\" alt=\"\">
                <div class=\"position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center\" style=\"background: rgba(24, 29, 56, .7);\">
                    <div class=\"container\">
                        <div class=\"row justify-content-start\">
                            <div class=\"col-sm-10 col-lg-8\">
                                <h5 class=\"text-primary text-uppercase mb-3 animated slideInDown\">Best Online Courses</h5>
                                <h1 class=\"display-3 text-white animated slideInDown\">The Best Online Learning Platform</h1>
                                <p class=\"fs-5 text-white mb-4 pb-2\">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus eirmod elitr.</p>
                                <a href=\"\" class=\"btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft\">Read More</a>
                                <a href=\"\" class=\"btn btn-light py-md-3 px-md-5 animated slideInRight\">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"owl-carousel-item position-relative\">
                <img class=\"img-fluid\" src=\"";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 60, $this->source), "html", null, true);
        echo "/img/carousel-2.jpg\" alt=\"\">
                <div class=\"position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center\" style=\"background: rgba(24, 29, 56, .7);\">
                    <div class=\"container\">
                        <div class=\"row justify-content-start\">
                            <div class=\"col-sm-10 col-lg-8\">
                                <h5 class=\"text-primary text-uppercase mb-3 animated slideInDown\">Best Online Courses</h5>
                                <h1 class=\"display-3 text-white animated slideInDown\">Get Educated Online From Your Home</h1>
                                <p class=\"fs-5 text-white mb-4 pb-2\">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus eirmod elitr.</p>
                                <a href=\"\" class=\"btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft\">Read More</a>
                                <a href=\"\" class=\"btn btn-light py-md-3 px-md-5 animated slideInRight\">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 78
        echo "    <!-- Carousel End -->


    <!-- Service Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"row g-4\">
                <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"service-item text-center pt-3\">
                        <div class=\"p-4\">
                            <i class=\"fa fa-3x fa-graduation-cap text-primary mb-4\"></i>
                            <h5 class=\"mb-3\">Skilled Instructors</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"service-item text-center pt-3\">
                        <div class=\"p-4\">
                            <i class=\"fa fa-3x fa-globe text-primary mb-4\"></i>
                            <h5 class=\"mb-3\">Online Classes</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"service-item text-center pt-3\">
                        <div class=\"p-4\">
                            <i class=\"fa fa-3x fa-home text-primary mb-4\"></i>
                            <h5 class=\"mb-3\">Home Projects</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                    <div class=\"service-item text-center pt-3\">
                        <div class=\"p-4\">
                            <i class=\"fa fa-3x fa-book-open text-primary mb-4\"></i>
                            <h5 class=\"mb-3\">Book Library</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"row g-5\">
                <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"min-height: 400px;\">
                    <div class=\"position-relative h-100\">
                        <img class=\"img-fluid position-absolute w-100 h-100\" src=\"";
        // line 133
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 133, $this->source), "html", null, true);
        echo "/img/about.jpg\" alt=\"\" style=\"object-fit: cover;\">
                    </div>
                </div>
                <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <h6 class=\"section-title bg-white text-start text-primary pe-3\">About Us</h6>
                    <h1 class=\"mb-4\">Welcome to eLEARNING</h1>
                    <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class=\"row gy-2 gx-4 mb-4\">
                        <div class=\"col-sm-6\">
                            <p class=\"mb-0\"><i class=\"fa fa-arrow-right text-primary me-2\"></i>Skilled Instructors</p>
                        </div>
                        <div class=\"col-sm-6\">
                            <p class=\"mb-0\"><i class=\"fa fa-arrow-right text-primary me-2\"></i>Online Classes</p>
                        </div>
                        <div class=\"col-sm-6\">
                            <p class=\"mb-0\"><i class=\"fa fa-arrow-right text-primary me-2\"></i>International Certificate</p>
                        </div>
                        <div class=\"col-sm-6\">
                            <p class=\"mb-0\"><i class=\"fa fa-arrow-right text-primary me-2\"></i>Skilled Instructors</p>
                        </div>
                        <div class=\"col-sm-6\">
                            <p class=\"mb-0\"><i class=\"fa fa-arrow-right text-primary me-2\"></i>Online Classes</p>
                        </div>
                        <div class=\"col-sm-6\">
                            <p class=\"mb-0\"><i class=\"fa fa-arrow-right text-primary me-2\"></i>International Certificate</p>
                        </div>
                    </div>
                    <a class=\"btn btn-primary py-3 px-5 mt-2\" href=\"\">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Categories Start -->
    <div class=\"container-xxl py-5 category\">
        <div class=\"container\">
            <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                <h6 class=\"section-title bg-white text-center text-primary px-3\">Categories</h6>
                <h1 class=\"mb-5\">Courses Categories</h1>
            </div>
            <div class=\"row g-3\">
                <div class=\"col-lg-7 col-md-6\">
                    <div class=\"row g-3\">
                        <div class=\"col-lg-12 col-md-12 wow zoomIn\" data-wow-delay=\"0.1s\">
                            <a class=\"position-relative d-block overflow-hidden\" href=\"\">
                                <img class=\"img-fluid\" src=\"";
        // line 181
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 181, $this->source), "html", null, true);
        echo "/img/cat-1.jpg\" alt=\"\">
                                <div class=\"bg-white text-center position-absolute bottom-0 end-0 py-2 px-3\" style=\"margin: 1px;\">
                                    <h5 class=\"m-0\">Web Design</h5>
                                    <small class=\"text-primary\">49 Courses</small>
                                </div>
                            </a>
                        </div>
                        <div class=\"col-lg-6 col-md-12 wow zoomIn\" data-wow-delay=\"0.3s\">
                            <a class=\"position-relative d-block overflow-hidden\" href=\"\">
                                <img class=\"img-fluid\" src=\"";
        // line 190
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 190, $this->source), "html", null, true);
        echo "/img/cat-2.jpg\" alt=\"\">
                                <div class=\"bg-white text-center position-absolute bottom-0 end-0 py-2 px-3\" style=\"margin: 1px;\">
                                    <h5 class=\"m-0\">Graphic Design</h5>
                                    <small class=\"text-primary\">49 Courses</small>
                                </div>
                            </a>
                        </div>
                        <div class=\"col-lg-6 col-md-12 wow zoomIn\" data-wow-delay=\"0.5s\">
                            <a class=\"position-relative d-block overflow-hidden\" href=\"\">
                                <img class=\"img-fluid\" src=\"";
        // line 199
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 199, $this->source), "html", null, true);
        echo "/img/cat-3.jpg\" alt=\"\">
                                <div class=\"bg-white text-center position-absolute bottom-0 end-0 py-2 px-3\" style=\"margin: 1px;\">
                                    <h5 class=\"m-0\">Video Editing</h5>
                                    <small class=\"text-primary\">49 Courses</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-5 col-md-6 wow zoomIn\" data-wow-delay=\"0.7s\" style=\"min-height: 350px;\">
                    <a class=\"position-relative d-block h-100 overflow-hidden\" href=\"\">
                        <img class=\"img-fluid position-absolute w-100 h-100\" src=\"";
        // line 210
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 210, $this->source), "html", null, true);
        echo "/img/cat-4.jpg\" alt=\"\" style=\"object-fit: cover;\">
                        <div class=\"bg-white text-center position-absolute bottom-0 end-0 py-2 px-3\" style=\"margin:  1px;\">
                            <h5 class=\"m-0\">Online Marketing</h5>
                            <small class=\"text-primary\">49 Courses</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Start -->


    <!-- Courses Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                <h6 class=\"section-title bg-white text-center text-primary px-3\">Courses</h6>
                <h1 class=\"mb-5\">Popular Courses</h1>
            </div>
            <div class=\"row g-4 justify-content-center\">
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"course-item bg-light\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid\" src=\"";
        // line 234
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 234, $this->source), "html", null, true);
        echo "/img/course-1.jpg\" alt=\"\">
                            <div class=\"w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4\">
                                <a href=\"#\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3 border-end\" style=\"border-radius: 30px 0 0 30px;\">Read More</a>
                                <a href=\"#\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3\" style=\"border-radius: 0 30px 30px 0;\">Join Now</a>
                            </div>
                        </div>
                        <div class=\"text-center p-4 pb-0\">
                            <h3 class=\"mb-0\">\$149.00</h3>
                            <div class=\"mb-3\">
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class=\"mb-4\">Web Design & Development Course for Beginners</h5>
                        </div>
                        <div class=\"d-flex border-top\">
                            <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-user-tie text-primary me-2\"></i>John Doe</small>
                            <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-clock text-primary me-2\"></i>1.49 Hrs</small>
                            <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-user text-primary me-2\"></i>30 Students</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"course-item bg-light\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid\" src=\"";
        // line 262
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 262, $this->source), "html", null, true);
        echo "/img/course-2.jpg\" alt=\"\">
                            <div class=\"w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4\">
                                <a href=\"#\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3 border-end\" style=\"border-radius: 30px 0 0 30px;\">Read More</a>
                                <a href=\"#\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3\" style=\"border-radius: 0 30px 30px 0;\">Join Now</a>
                            </div>
                        </div>
                        <div class=\"text-center p-4 pb-0\">
                            <h3 class=\"mb-0\">\$149.00</h3>
                            <div class=\"mb-3\">
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class=\"mb-4\">Web Design & Development Course for Beginners</h5>
                        </div>
                        <div class=\"d-flex border-top\">
                            <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-user-tie text-primary me-2\"></i>John Doe</small>
                            <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-clock text-primary me-2\"></i>1.49 Hrs</small>
                            <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-user text-primary me-2\"></i>30 Students</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"course-item bg-light\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid\" src=\"";
        // line 290
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 290, $this->source), "html", null, true);
        echo "/img/course-3.jpg\" alt=\"\">
                            <div class=\"w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4\">
                                <a href=\"#\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3 border-end\" style=\"border-radius: 30px 0 0 30px;\">Read More</a>
                                <a href=\"#\" class=\"flex-shrink-0 btn btn-sm btn-primary px-3\" style=\"border-radius: 0 30px 30px 0;\">Join Now</a>
                            </div>
                        </div>
                        <div class=\"text-center p-4 pb-0\">
                            <h3 class=\"mb-0\">\$149.00</h3>
                            <div class=\"mb-3\">
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class=\"mb-4\">Web Design & Development Course for Beginners</h5>
                        </div>
                        <div class=\"d-flex border-top\">
                            <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-user-tie text-primary me-2\"></i>John Doe</small>
                            <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-clock text-primary me-2\"></i>1.49 Hrs</small>
                            <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-user text-primary me-2\"></i>30 Students</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->


    <!-- Team Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                <h6 class=\"section-title bg-white text-center text-primary px-3\">Instructors</h6>
                <h1 class=\"mb-5\">Expert Instructors</h1>
            </div>
            <div class=\"row g-4\">
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"team-item bg-light\">
                        <div class=\"overflow-hidden\">
                            <img class=\"img-fluid\" src=\"";
        // line 332
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 332, $this->source), "html", null, true);
        echo "/img/team-1.jpg\" alt=\"\">
                        </div>
                        <div class=\"position-relative d-flex justify-content-center\" style=\"margin-top: -23px;\">
                            <div class=\"bg-light d-flex justify-content-center pt-2 px-1\">
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"text-center p-4\">
                            <h5 class=\"mb-0\">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"team-item bg-light\">
                        <div class=\"overflow-hidden\">
                            <img class=\"img-fluid\" src=\"";
        // line 350
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 350, $this->source), "html", null, true);
        echo "/img/team-2.jpg\" alt=\"\">
                        </div>
                        <div class=\"position-relative d-flex justify-content-center\" style=\"margin-top: -23px;\">
                            <div class=\"bg-light d-flex justify-content-center pt-2 px-1\">
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"text-center p-4\">
                            <h5 class=\"mb-0\">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"team-item bg-light\">
                        <div class=\"overflow-hidden\">
                            <img class=\"img-fluid\" src=\"";
        // line 368
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 368, $this->source), "html", null, true);
        echo "/img/team-3.jpg\" alt=\"\">
                        </div>
                        <div class=\"position-relative d-flex justify-content-center\" style=\"margin-top: -23px;\">
                            <div class=\"bg-light d-flex justify-content-center pt-2 px-1\">
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"text-center p-4\">
                            <h5 class=\"mb-0\">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                    <div class=\"team-item bg-light\">
                        <div class=\"overflow-hidden\">
                            <img class=\"img-fluid\" src=\"";
        // line 386
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 386, $this->source), "html", null, true);
        echo "/img/team-4.jpg\" alt=\"\">
                        </div>
                        <div class=\"position-relative d-flex justify-content-center\" style=\"margin-top: -23px;\">
                            <div class=\"bg-light d-flex justify-content-center pt-2 px-1\">
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-sm-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"text-center p-4\">
                            <h5 class=\"mb-0\">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class=\"container-xxl py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
        <div class=\"container\">
            <div class=\"text-center\">
                <h6 class=\"section-title bg-white text-center text-primary px-3\">Testimonial</h6>
                <h1 class=\"mb-5\">Our Students Say!</h1>
            </div>
            <div class=\"owl-carousel testimonial-carousel position-relative\">
                <div class=\"testimonial-item text-center\">
                    <img class=\"border rounded-circle p-2 mx-auto mb-3\" src=\"";
        // line 416
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 416, $this->source), "html", null, true);
        echo "/img/testimonial-1.jpg\" style=\"width: 80px; height: 80px;\">
                    <h5 class=\"mb-0\">Client Name</h5>
                    <p>Profession</p>
                    <div class=\"testimonial-text bg-light text-center p-4\">
                    <p class=\"mb-0\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class=\"testimonial-item text-center\">
                    <img class=\"border rounded-circle p-2 mx-auto mb-3\" src=\"";
        // line 424
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 424, $this->source), "html", null, true);
        echo "/img/testimonial-2.jpg\" style=\"width: 80px; height: 80px;\">
                    <h5 class=\"mb-0\">Client Name</h5>
                    <p>Profession</p>
                    <div class=\"testimonial-text bg-light text-center p-4\">
                    <p class=\"mb-0\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class=\"testimonial-item text-center\">
                    <img class=\"border rounded-circle p-2 mx-auto mb-3\" src=\"";
        // line 432
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 432, $this->source), "html", null, true);
        echo "/img/testimonial-3.jpg\" style=\"width: 80px; height: 80px;\">
                    <h5 class=\"mb-0\">Client Name</h5>
                    <p>Profession</p>
                    <div class=\"testimonial-text bg-light text-center p-4\">
                    <p class=\"mb-0\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class=\"testimonial-item text-center\">
                    <img class=\"border rounded-circle p-2 mx-auto mb-3\" src=\"";
        // line 440
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 440, $this->source), "html", null, true);
        echo "/img/testimonial-4.jpg\" style=\"width: 80px; height: 80px;\">
                    <h5 class=\"mb-0\">Client Name</h5>
                    <p>Profession</p>
                    <div class=\"testimonial-text bg-light text-center p-4\">
                    <p class=\"mb-0\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
        

    <!-- Footer Start -->
    <div class=\"container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn\" data-wow-delay=\"0.1s\">
        <div class=\"container py-5\">
            <div class=\"row g-5\">
                <div class=\"col-lg-3 col-md-6\">
                    ";
        // line 464
        echo "                    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_1", [], "any", false, false, true, 464), 464, $this->source), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    ";
        // line 477
        echo "                    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_2", [], "any", false, false, true, 477), 477, $this->source), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    ";
        // line 501
        echo "                    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_3", [], "any", false, false, true, 501), 501, $this->source), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    ";
        // line 510
        echo "                    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_4", [], "any", false, false, true, 510), 510, $this->source), "html", null, true);
        echo "
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"copyright\">
                <div class=\"row\">
                    <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                         ";
        // line 518
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_copywrite", [], "any", false, false, true, 518), 518, $this->source), "html", null, true);
        echo "
                    </div>
                    <div class=\"col-md-6 text-center text-md-end\">
                        ";
        // line 527
        echo "                        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 527), 527, $this->source), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>
    
<!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">
";
    }

    public function getTemplateName()
    {
        return "themes/elearning/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  593 => 527,  587 => 518,  575 => 510,  568 => 501,  561 => 477,  554 => 464,  533 => 440,  522 => 432,  511 => 424,  500 => 416,  467 => 386,  446 => 368,  425 => 350,  404 => 332,  359 => 290,  328 => 262,  297 => 234,  270 => 210,  256 => 199,  244 => 190,  232 => 181,  181 => 133,  124 => 78,  104 => 60,  85 => 44,  76 => 37,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/elearning/templates/page.html.twig", "C:\\xampp\\htdocs\\drupal_9\\themes\\elearning\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 44);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
