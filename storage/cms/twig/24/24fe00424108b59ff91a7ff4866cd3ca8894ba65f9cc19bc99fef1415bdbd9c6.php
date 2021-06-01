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

/* /Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/pages/about.htm */
class __TwigTemplate_2938e4f15678428c74f013058f974e1301a769afc64a2c66b9f2951d7ca3632a extends \Twig\Template
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
        $tags = array("partial" => 141);
        $filters = array("theme" => 3, "page" => 10);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                ['theme', 'page'],
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- **** Breadcrumb Area Start **** -->
<div class=\"breadcrumb-area bg-img bg-overlay-3 wow fadeInUp\" data-wow-delay=\"200ms\"
    style=\"background-image: url(";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/30.jpg");
        echo ");\">
    <div class=\"container h-100\">
        <div class=\"row h-100 align-items-center\">
            <div class=\"col-12\">
                <div class=\"breadcrumb-content\">
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home</a></li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">About</li>
                        </ol>
                    </nav>
                    <h2 class=\"page-title\">About Us</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- **** Breadcrumb Area End **** -->

<!-- **** About Us Area Start **** -->
<section class=\"about-us-area section-padding-100-60\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"about-us-title mb-40 wow fadeInUp\" data-wow-delay=\"200ms\">
                    <h2>Hello! Welcome to Re<span>home.</span></h2>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                        veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
            </div>

            <!-- Single About Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-about-content wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Thumb -->
                    <div class=\"single-about-thumb\">
                        <img src=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/31.jpg");
        echo "\" alt=\"\">
                    </div>
                    <h4>Our Company</h4>
                    <p>Donec enim ipsum porta justo integer at velna vitae auctor integer congue magna at risus auctor
                        purus unt pretium ligula rutrum integer sapien ultrice ligula luctus undo magna risus</p>
                </div>
            </div>

            <!-- Single About Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-about-content wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Thumb -->
                    <div class=\"single-about-thumb\">
                        <img src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/32.jpg");
        echo "\" alt=\"\">
                    </div>
                    <h4>Our Vision</h4>
                    <p>Donec enim ipsum porta justo integer at velna vitae auctor integer congue magna at risus auctor
                        purus unt pretium ligula rutrum integer sapien ultrice ligula luctus undo magna risus</p>
                </div>
            </div>

            <!-- Single About Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-about-content wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Thumb -->
                    <div class=\"single-about-thumb\">
                        <img src=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/33.jpg");
        echo "\" alt=\"\">
                    </div>
                    <h4>Our Quality</h4>
                    <p>Donec enim ipsum porta justo integer at velna vitae auctor integer congue magna at risus auctor
                        purus unt pretium ligula rutrum integer sapien ultrice ligula luctus undo magna risus</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- **** About Us Area End **** -->

<!-- **** Testimonials Area Start **** -->
<section class=\"rehomes-testimonial-area bg-img bg-overlay-4 jarallax section-padding-80\"
    style=\"background-image: url(";
        // line 82
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/34.jpg");
        echo ");\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-10 col-lg-8\">
                <!-- Testimonial-area Slider -->
                <div class=\"testimonial-area owl-carousel wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Single Testimonial Slider -->
                    <div class=\"single-testimonial-content text-center\">
                        <!-- Icon -->
                        <div class=\"testimonial-icon\">
                            <img src=\"";
        // line 92
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/core-img/quote.png");
        echo "\" alt=\"\">
                        </div>
                        <h5>“I am so happy because I found this Real Estata, and it just made my life easier. Thanks so
                            much for sharing.”</h5>
                        <!-- Testimonial-Meta -->
                        <div class=\"testimonial-meta\">
                            <h5>Mister Stock</h5>
                            <p>CEO google.com</p>
                        </div>
                    </div>

                    <!-- Single Testimonial Slider -->
                    <div class=\"single-testimonial-content text-center\">
                        <!-- Icon -->
                        <div class=\"testimonial-icon\">
                            <img src=\"";
        // line 107
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/core-img/quote.png");
        echo "\" alt=\"\">
                        </div>
                        <h5>“I am so happy because I found this Real Estata, and it just made my life easier. Thanks so
                            much for sharing.”</h5>
                        <!-- Testimonial-Meta -->
                        <div class=\"testimonial-meta\">
                            <h5>Nazrul Islam</h5>
                            <p>Developer</p>
                        </div>
                    </div>

                    <!-- Single Testimonial Slider -->
                    <div class=\"single-testimonial-content text-center\">
                        <!-- Icon -->
                        <div class=\"testimonial-icon\">
                            <img src=\"";
        // line 122
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/core-img/quote.png");
        echo "\" alt=\"\">
                        </div>
                        <h5>“I am so happy because I found this Real Estata, and it just made my life easier. Thanks so
                            much for sharing.”</h5>
                        <!-- Testimonial-Meta -->
                        <div class=\"testimonial-meta\">
                            <h5>Ajoy Das</h5>
                            <p>Developer</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- **** Testimonials Area End **** -->

<!-- **** Choose Us Area Start **** -->
";
        // line 141
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/why-choose-us"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 142
        echo "<!-- **** Choose Us Area End **** -->

<!-- **** Partner Area Start **** -->
";
        // line 145
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/partner-logo"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 146
        echo "<!-- **** Partner Area End **** -->";
    }

    public function getTemplateName()
    {
        return "/Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 146,  240 => 145,  235 => 142,  231 => 141,  209 => 122,  191 => 107,  173 => 92,  160 => 82,  143 => 68,  127 => 55,  111 => 42,  76 => 10,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- **** Breadcrumb Area Start **** -->
<div class=\"breadcrumb-area bg-img bg-overlay-3 wow fadeInUp\" data-wow-delay=\"200ms\"
    style=\"background-image: url({{ 'assets/img/bg-img/30.jpg'|theme }});\">
    <div class=\"container h-100\">
        <div class=\"row h-100 align-items-center\">
            <div class=\"col-12\">
                <div class=\"breadcrumb-content\">
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"{{ 'home'|page }}\">Home</a></li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">About</li>
                        </ol>
                    </nav>
                    <h2 class=\"page-title\">About Us</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- **** Breadcrumb Area End **** -->

<!-- **** About Us Area Start **** -->
<section class=\"about-us-area section-padding-100-60\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"about-us-title mb-40 wow fadeInUp\" data-wow-delay=\"200ms\">
                    <h2>Hello! Welcome to Re<span>home.</span></h2>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                        veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
            </div>

            <!-- Single About Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-about-content wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Thumb -->
                    <div class=\"single-about-thumb\">
                        <img src=\"{{ 'assets/img/bg-img/31.jpg'|theme }}\" alt=\"\">
                    </div>
                    <h4>Our Company</h4>
                    <p>Donec enim ipsum porta justo integer at velna vitae auctor integer congue magna at risus auctor
                        purus unt pretium ligula rutrum integer sapien ultrice ligula luctus undo magna risus</p>
                </div>
            </div>

            <!-- Single About Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-about-content wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Thumb -->
                    <div class=\"single-about-thumb\">
                        <img src=\"{{ 'assets/img/bg-img/32.jpg'|theme }}\" alt=\"\">
                    </div>
                    <h4>Our Vision</h4>
                    <p>Donec enim ipsum porta justo integer at velna vitae auctor integer congue magna at risus auctor
                        purus unt pretium ligula rutrum integer sapien ultrice ligula luctus undo magna risus</p>
                </div>
            </div>

            <!-- Single About Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-about-content wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Thumb -->
                    <div class=\"single-about-thumb\">
                        <img src=\"{{ 'assets/img/bg-img/33.jpg'|theme }}\" alt=\"\">
                    </div>
                    <h4>Our Quality</h4>
                    <p>Donec enim ipsum porta justo integer at velna vitae auctor integer congue magna at risus auctor
                        purus unt pretium ligula rutrum integer sapien ultrice ligula luctus undo magna risus</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- **** About Us Area End **** -->

<!-- **** Testimonials Area Start **** -->
<section class=\"rehomes-testimonial-area bg-img bg-overlay-4 jarallax section-padding-80\"
    style=\"background-image: url({{ 'assets/img/bg-img/34.jpg'|theme }});\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-10 col-lg-8\">
                <!-- Testimonial-area Slider -->
                <div class=\"testimonial-area owl-carousel wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Single Testimonial Slider -->
                    <div class=\"single-testimonial-content text-center\">
                        <!-- Icon -->
                        <div class=\"testimonial-icon\">
                            <img src=\"{{ 'assets/img/core-img/quote.png'|theme }}\" alt=\"\">
                        </div>
                        <h5>“I am so happy because I found this Real Estata, and it just made my life easier. Thanks so
                            much for sharing.”</h5>
                        <!-- Testimonial-Meta -->
                        <div class=\"testimonial-meta\">
                            <h5>Mister Stock</h5>
                            <p>CEO google.com</p>
                        </div>
                    </div>

                    <!-- Single Testimonial Slider -->
                    <div class=\"single-testimonial-content text-center\">
                        <!-- Icon -->
                        <div class=\"testimonial-icon\">
                            <img src=\"{{ 'assets/img/core-img/quote.png'|theme }}\" alt=\"\">
                        </div>
                        <h5>“I am so happy because I found this Real Estata, and it just made my life easier. Thanks so
                            much for sharing.”</h5>
                        <!-- Testimonial-Meta -->
                        <div class=\"testimonial-meta\">
                            <h5>Nazrul Islam</h5>
                            <p>Developer</p>
                        </div>
                    </div>

                    <!-- Single Testimonial Slider -->
                    <div class=\"single-testimonial-content text-center\">
                        <!-- Icon -->
                        <div class=\"testimonial-icon\">
                            <img src=\"{{ 'assets/img/core-img/quote.png'|theme }}\" alt=\"\">
                        </div>
                        <h5>“I am so happy because I found this Real Estata, and it just made my life easier. Thanks so
                            much for sharing.”</h5>
                        <!-- Testimonial-Meta -->
                        <div class=\"testimonial-meta\">
                            <h5>Ajoy Das</h5>
                            <p>Developer</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- **** Testimonials Area End **** -->

<!-- **** Choose Us Area Start **** -->
{% partial 'sections/why-choose-us' %}
<!-- **** Choose Us Area End **** -->

<!-- **** Partner Area Start **** -->
{% partial 'sections/partner-logo' %}
<!-- **** Partner Area End **** -->", "/Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/pages/about.htm", "");
    }
}
