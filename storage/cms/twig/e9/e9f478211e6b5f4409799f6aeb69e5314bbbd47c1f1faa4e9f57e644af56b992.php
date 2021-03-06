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

/* /Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/partials/footer.htm */
class __TwigTemplate_c14ad238c3a6e0d45d1caf567a17f4fb26ed7dcd583a460f80160d168fa952f1 extends \Twig\Template
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
        $tags = array();
        $filters = array("theme" => 1);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
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
        echo "<footer class=\"footer-area bg-img bg-overlay-2 section-padding-100-0\" style=\"background-image: url(";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/17.jpg");
        echo ");\">
    <!-- Main Footer Area -->
    <div class=\"main-footer-area\">
        <div class=\"container\">
            <div class=\"row justify-content-between\">

                <!-- Footer Widget Area -->
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <div class=\"single-footer-widget mb-80\">
                        <!-- Footer Logo -->
                        <a href=\"#\" class=\"footer-logo\"><img src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/core-img/logo-2.png");
        echo "\" alt=\"\"></a>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt.</p>
                        <!-- Social Info -->
                        <div class=\"social-info\">
                            <a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <div class=\"single-footer-widget mb-80\">
                        <!-- Widget Title -->
                        <h5 class=\"widget-title\">Get info</h5>

                        <!-- Contact Area -->
                        <div class=\"footer-contact\">
                            <p>Phone: <span>(12) 345 6789</span></p>
                            <p>Email: <span>colorlib.info@gmail.com</span></p>
                            <p>Address: <span>Iris Watson, Box 283 8562 Fusce Rd, NY</span></p>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <div class=\"single-footer-widget mb-80\">
                        <!-- Widget Title -->
                        <h5 class=\"widget-title\">Property Cities</h5>

                        <!-- Footer Nav -->
                        <ul class=\"footer-nav d-flex flex-wrap\">
                            <li><a href=\"#\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> Kalima</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> Austin</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> Mianma</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> Mahatan</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> Chicago</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> Mehico</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> Mahatan</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> New York</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <div class=\"single-footer-widget mb-80\">
                        <!-- Widget Title -->
                        <h5 class=\"widget-title\">Newsletter</h5>

                        <p>Subscribe our newsletter gor get notification about new updates, count, etc.</p>
                        <!-- Newsletter Form -->
                        <form action=\"index.html\" class=\"nl-form\">
                            <input type=\"email\" name=\"nl-email\" class=\"form-control\" placeholder=\"Enter your email...\">
                            <button type=\"submit\"><i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copywrite Area -->
    <div class=\"copywrite-content\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <!-- Copywrite Text -->
                <div class=\"col-12 col-sm-6\">
                    <div class=\"copywrite-text\">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script> All rights reserved | This
                            template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a
                                href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>

                <!-- Footer Menu -->
                <div class=\"col-12 col-sm-6\">
                    <div class=\"footer-menu\">
                        <ul class=\"nav\">
                            <li><a href=\"#\">Home</a></li>
                            <li><a href=\"#\">About us</a></li>
                            <li><a href=\"#\">Properties</a></li>
                            <li><a href=\"#\">Agents</a></li>
                            <li><a href=\"#\">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "/Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 11,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer-area bg-img bg-overlay-2 section-padding-100-0\" style=\"background-image: url({{ 'assets/img/bg-img/17.jpg'|theme }});\">
    <!-- Main Footer Area -->
    <div class=\"main-footer-area\">
        <div class=\"container\">
            <div class=\"row justify-content-between\">

                <!-- Footer Widget Area -->
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <div class=\"single-footer-widget mb-80\">
                        <!-- Footer Logo -->
                        <a href=\"#\" class=\"footer-logo\"><img src=\"{{ 'assets/img/core-img/logo-2.png'|theme }}\" alt=\"\"></a>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt.</p>
                        <!-- Social Info -->
                        <div class=\"social-info\">
                            <a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <div class=\"single-footer-widget mb-80\">
                        <!-- Widget Title -->
                        <h5 class=\"widget-title\">Get info</h5>

                        <!-- Contact Area -->
                        <div class=\"footer-contact\">
                            <p>Phone: <span>(12) 345 6789</span></p>
                            <p>Email: <span>colorlib.info@gmail.com</span></p>
                            <p>Address: <span>Iris Watson, Box 283 8562 Fusce Rd, NY</span></p>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <div class=\"single-footer-widget mb-80\">
                        <!-- Widget Title -->
                        <h5 class=\"widget-title\">Property Cities</h5>

                        <!-- Footer Nav -->
                        <ul class=\"footer-nav d-flex flex-wrap\">
                            <li><a href=\"#\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> Kalima</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> Austin</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> Mianma</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> Mahatan</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> Chicago</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> Mehico</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> Mahatan</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> New York</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <div class=\"single-footer-widget mb-80\">
                        <!-- Widget Title -->
                        <h5 class=\"widget-title\">Newsletter</h5>

                        <p>Subscribe our newsletter gor get notification about new updates, count, etc.</p>
                        <!-- Newsletter Form -->
                        <form action=\"index.html\" class=\"nl-form\">
                            <input type=\"email\" name=\"nl-email\" class=\"form-control\" placeholder=\"Enter your email...\">
                            <button type=\"submit\"><i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copywrite Area -->
    <div class=\"copywrite-content\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <!-- Copywrite Text -->
                <div class=\"col-12 col-sm-6\">
                    <div class=\"copywrite-text\">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script> All rights reserved | This
                            template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a
                                href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>

                <!-- Footer Menu -->
                <div class=\"col-12 col-sm-6\">
                    <div class=\"footer-menu\">
                        <ul class=\"nav\">
                            <li><a href=\"#\">Home</a></li>
                            <li><a href=\"#\">About us</a></li>
                            <li><a href=\"#\">Properties</a></li>
                            <li><a href=\"#\">Agents</a></li>
                            <li><a href=\"#\">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>", "/Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/partials/footer.htm", "");
    }
}
