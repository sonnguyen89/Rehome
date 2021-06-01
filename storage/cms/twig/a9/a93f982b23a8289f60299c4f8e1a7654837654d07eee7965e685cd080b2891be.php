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

/* /Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/pages/property-details.htm */
class __TwigTemplate_93cfb1ce0394a9dae4bd34738fad2c51ed616ea278c53db573c239e31f671f62 extends \Twig\Template
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
        $filters = array("theme" => 8, "page" => 359);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
        echo "<!-- **** Properties Hero Area Start **** -->
<div class=\"properties-hero-area d-flex flex-wrap align-items-center mb-80\">
    <div class=\"properties-slide\">
        <!-- Properties Slider -->
        <div id=\"property-thumb-silde\" class=\"carousel slide wow fadeInUp\" data-wow-delay=\"200ms\" data-ride=\"carousel\">
            <ol class=\"carousel-indicators\">
                <li data-target=\"#property-thumb-silde\" data-slide-to=\"0\" class=\"active\"
                    style=\"background-image: url(";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/64.jpg");
        echo ");\"></li>
                <li data-target=\"#property-thumb-silde\" data-slide-to=\"1\"
                    style=\"background-image: url(";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/65.jpg");
        echo ");\"></li>
                <li data-target=\"#property-thumb-silde\" data-slide-to=\"2\"
                    style=\"background-image: url(";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/66.jpg");
        echo ");\"></li>
                <li data-target=\"#property-thumb-silde\" data-slide-to=\"3\"
                    style=\"background-image: url(";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/67.jpg");
        echo ");\"></li>
            </ol>

            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/64.jpg");
        echo "\" class=\"d-block w-100\" alt=\"...\">
                </div>
                <div class=\"carousel-item\">
                    <img src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/65.jpg");
        echo "\" class=\"d-block w-100\" alt=\"...\">
                </div>
                <div class=\"carousel-item\">
                    <img src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/66.jpg");
        echo "\" class=\"d-block w-100\" alt=\"...\">
                </div>
                <div class=\"carousel-item\">
                    <img src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/67.jpg");
        echo "\" class=\"d-block w-100\" alt=\"...\">
                </div>
            </div>
        </div>
    </div>

    <!-- Properties Content Area -->
    <div class=\"properties-content-area wow fadeInUp\" data-wow-delay=\"200ms\">
        <div class=\"properties-content-info\">
            <h2>Huge Sunny Villa</h2>
            <div class=\"properties-location\">
                <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> 180 York Road, London, UK</p>
                <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> Villa</p>
            </div>
            <h4 class=\"properties-rate\">\$5400 <span>/ month</span></h4>
            <p>Buy Confidence, Sell With Success! Our storied approach to real estate development and maximization.</p>
            <!-- Properties Info -->
            <div class=\"properties-info\">
                <p>Sqft: <span>1.200 m2</span></p>
                <p>Beds: <span>04</span></p>
                <p>Baths: <span>03</span></p>
                <p>Garages: <span>02</span></p>
            </div>
        </div>
    </div>
</div>
<!-- **** Properties Hero Area End **** -->

<!-- **** Properties-area Start **** -->
<div class=\"rehomes-properties-area\">
    <div class=\"container\">
        <div class=\"row justify-content-between\">
            <div class=\"col-12 col-lg-8\">
                <!-- Information Area -->
                <div class=\"information-area mb-80 wow fadeInUp\" data-wow-delay=\"200ms\">
                    <h4 class=\"mb-30\">Infomation</h4>

                    <!--Information Content -->
                    <div class=\"information-content\">
                        <ul class=\"d-flex flex-wrap\">
                            <li><span>Price</span> <span>\$ 138,000</span></li>
                            <li><span>Property Type</span> <span>\$ 138,000</span></li>
                            <li><span>Year Built</span> <span>\$ 138,000</span></li>
                            <li><span>Bathrooms</span> <span>\$ 138,000</span></li>
                            <li><span>Rooms</span> <span>\$ 138,000</span></li>
                            <li><span>Parking lots</span> <span>\$ 138,000</span></li>
                            <li><span>Lot area</span> <span>\$ 138,000</span></li>
                            <li><span>Agent</span> <span>Anthony Noah</span></li>
                            <li><span>Reference</span> <span>#219</span></li>
                            <li><span>Contract type</span> <span>Sale</span></li>
                            <li><span>Beds</span> <span>4</span></li>
                            <li><span>Garages</span> <span>2</span></li>
                            <li><span>Home area</span> <span>1200 sqft</span></li>
                            <li><span>Lot dimensions</span> <span>20x30x40x50</span></li>
                        </ul>
                    </div>
                </div>

                <!-- Floor Thumb Content -->
                <div class=\"floor-thumb-content mb-80 wow fadeInUp\" data-wow-delay=\"200ms\">
                    <h4 class=\"mb-30\">Floor Plans</h4>

                    <!-- Floor Thumb -->
                    <div class=\"floor-thumb\">
                        <img src=\"";
        // line 92
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/68.jpg");
        echo "\" alt=\"\">
                    </div>
                </div>

                <!-- Search Location Area -->
                <div class=\"search-location-area mb-80 wow fadeInUp\" data-wow-delay=\"200ms\">
                    <h4 class=\"mb-30\">Near By Place</h4>

                    <!-- Location Maps -->
                    <div class=\"loction-map\">
                        <iframe
                            src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19892.026971487212!2d-0.19247374135275525!3d51.4489138369289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2sbd!4v1551753138954\"
                            allowfullscreen></iframe>
                    </div>

                    <!-- Single Location Content -->
                    <div class=\"single-location-content d-flex align-items-center justify-content-between\">
                        <!-- Location Thumb And Info -->
                        <div class=\"location-thumb-info d-flex align-items-center\">
                            <!-- Location Thumb -->
                            <div class=\"location-thumb\">
                                <img src=\"";
        // line 113
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/69.jpg");
        echo "\" alt=\"\">
                            </div>
                            <!-- Location Info -->
                            <div class=\"location-info\">
                                <h5>Hospital</h5>
                                <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> 801 Rowan Parkways Apt. 974</p>
                                <p><i class=\"fa fa-location-arrow\" aria-hidden=\"true\"></i> 5 km</p>
                            </div>
                        </div>

                        <!-- Contact Location -->
                        <div class=\"contact-location-btn\">
                            <!-- Phone -->
                            <a class=\"phone\" href=\"#\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i></a>
                            <!-- Share -->
                            <a class=\"share\" href=\"#\"><i class=\"fa fa-share\" aria-hidden=\"true\"></i></a>
                        </div>
                    </div>

                    <!-- Single Location Content -->
                    <div class=\"single-location-content d-flex align-items-center justify-content-between\">
                        <!-- Location Thumb And Info -->
                        <div class=\"location-thumb-info  d-flex align-items-center\">
                            <!-- Location Thumb -->
                            <div class=\"location-thumb\">
                                <img src=\"";
        // line 138
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/70.jpg");
        echo "\" alt=\"\">
                            </div>
                            <!-- Location Info -->
                            <div class=\"location-info\">
                                <h5>Hospital</h5>
                                <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> 801 Rowan Parkways Apt. 974</p>
                                <p><i class=\"fa fa-location-arrow\" aria-hidden=\"true\"></i> 5 km</p>
                            </div>
                        </div>

                        <!-- Contact Location -->
                        <div class=\"contact-location-btn\">
                            <!-- Phone -->
                            <a class=\"phone\" href=\"#\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i></a>
                            <!-- Share -->
                            <a class=\"share\" href=\"#\"><i class=\"fa fa-share\" aria-hidden=\"true\"></i></a>
                        </div>
                    </div>

                    <!-- Single Location Content -->
                    <div class=\"single-location-content d-flex align-items-center justify-content-between\">
                        <!-- Location Thumb And Info -->
                        <div class=\"location-thumb-info  d-flex align-items-center\">
                            <!-- Location Thumb -->
                            <div class=\"location-thumb\">
                                <img src=\"";
        // line 163
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/71.jpg");
        echo "\" alt=\"\">
                            </div>
                            <!-- Location Info -->
                            <div class=\"location-info\">
                                <h5>Hospital</h5>
                                <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> 801 Rowan Parkways Apt. 974</p>
                                <p><i class=\"fa fa-location-arrow\" aria-hidden=\"true\"></i> 5 km</p>
                            </div>
                        </div>

                        <!-- Contact Location -->
                        <div class=\"contact-location-btn\">
                            <!-- Phone -->
                            <a class=\"phone\" href=\"#\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i></a>
                            <!-- Share -->
                            <a class=\"share\" href=\"#\"><i class=\"fa fa-share\" aria-hidden=\"true\"></i></a>
                        </div>
                    </div>

                    <!-- More Location Btn -->
                    <button class=\"btn more-location-btn\"><i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i></button>
                </div>

                <!-- Agent Information -->
                <div class=\"agent-information-area mb-80 wow fadeInUp\" data-wow-delay=\"200ms\">
                    <h4 class=\"mb-30\">Agent Infomation</h4>

                    <!-- Agent Information Info -->
                    <div class=\"agent-information-info d-flex align-items-center\">
                        <!-- Agent Thumb -->
                        <div class=\"agent-thumb\">
                            <img src=\"";
        // line 194
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/72.jpg");
        echo "\" alt=\"\">
                        </div>
                        <!-- Agent Info -->
                        <div class=\"agent-info\">
                            <h4>Jason Johnson</h4>
                            <!-- Agent Contact -->
                            <div class=\"agent-contact d-flex justify-content-between\">
                                <p>Phone: <span>(12) 456-7890</span></p>
                                <p>Email: <span>info.colorlib@gmail.com</span></p>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Risus commodo viverra maecenas accumsan lacus vel
                                facilisis. </p>
                            <a class=\"btn rehomes-btn mt-10\" href=\"#\">Contact us</a>
                        </div>
                    </div>
                </div>

                <!-- Leave A Reply -->
                <div class=\"rehomes-comment-form mb-80 wow fadeInUp\" data-wow-delay=\"200ms\">
                    <h4 class=\"mb-30\">Leave A Comment</h4>

                    <!-- Form -->
                    <form class=\"#\" method=\"post\">
                        <div class=\"row\">
                            <div class=\"col-12 col-lg-4\">
                                <input type=\"text\" name=\"message-name\" class=\"form-control mb-30\" placeholder=\"Name\">
                            </div>
                            <div class=\"col-12 col-lg-4\">
                                <input type=\"text\" name=\"phone\" class=\"form-control mb-30\" placeholder=\"Number\">
                            </div>
                            <div class=\"col-12 col-lg-4\">
                                <input type=\"email\" name=\"message-email\" class=\"form-control mb-30\" placeholder=\"Email\">
                            </div>
                            <div class=\"col-12\">
                                <textarea name=\"message\" class=\"form-control mb-30\" placeholder=\"Messages\"></textarea>
                            </div>
                            <div class=\"col-12\">
                                <button type=\"submit\" class=\"btn rehomes-btn mt-15\">Send Messages</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Sidebar Area -->
            <div class=\"col-12 col-md-6 col-lg-4 col-xl-3\">
                <div class=\"rehomes-property-sidebar-area\">

                    <!-- Property Search Form -->
                    <div class=\"property-search-form-area mb-80 wow fadeInUp\" data-wow-delay=\"200ms\">
                        <h4 class=\"mb-30\">Search Properties</h4>

                        <form action=\"#\" method=\"get\">
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <!-- Search Btn -->
                                    <div class=\"search-property-btn\">
                                        <fieldset class=\"form-group\">
                                            <div class=\"form-check\">
                                                <input class=\"form-check-input\" type=\"radio\" name=\"rehomesbuy\" id=\"buy\"
                                                    value=\"buy\" checked>
                                                <label class=\"form-check-label\" for=\"buy\">Buy</label>
                                            </div>
                                            <div class=\"form-check\">
                                                <input class=\"form-check-input\" type=\"radio\" name=\"rehomesbuy\" id=\"rent\"
                                                    value=\"rent\">
                                                <label class=\"form-check-label\" for=\"rent\">Rent</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <select name=\"location\" id=\"location\" class=\"form-control\">
                                        <option value=\"01\">Location</option>
                                        <option value=\"02\">Armenia</option>
                                        <option value=\"03\">Argentina</option>
                                        <option value=\"04\">Australia</option>
                                        <option value=\"05\">Belgium</option>
                                        <option value=\"06\">Botswana</option>
                                    </select>
                                </div>
                                <div class=\"col-12\">
                                    <select name=\"status\" id=\"status\" class=\"form-control\">
                                        <option value=\"01\">Status</option>
                                        <option value=\"02\">Commercial</option>
                                        <option value=\"03\">Office</option>
                                        <option value=\"04\">Villa</option>
                                        <option value=\"05\">Apartment</option>
                                        <option value=\"06\">Condominium</option>
                                    </select>
                                </div>
                                <div class=\"col-12\">
                                    <select name=\"bedroom\" id=\"bedroom\" class=\"form-control\">
                                        <option value=\"01\">No of Bedroom</option>
                                        <option value=\"02\">02</option>
                                        <option value=\"03\">03</option>
                                        <option value=\"04\">04</option>
                                        <option value=\"05\">05</option>
                                        <option value=\"06\">06</option>
                                    </select>
                                </div>
                                <div class=\"col-12\">
                                    <select name=\"bathroom\" id=\"bathroom\" class=\"form-control\">
                                        <option value=\"01\">No of Bathroom</option>
                                        <option value=\"02\">02</option>
                                        <option value=\"03\">03</option>
                                        <option value=\"04\">04</option>
                                        <option value=\"05\">05</option>
                                        <option value=\"06\">06</option>
                                    </select>
                                </div>
                                <div class=\"col-12\">
                                    <select name=\"guest\" id=\"guest\" class=\"form-control\">
                                        <option value=\"01\">No of Guest</option>
                                        <option value=\"02\">02</option>
                                        <option value=\"03\">03</option>
                                        <option value=\"04\">04</option>
                                        <option value=\"05\">05</option>
                                        <option value=\"06\">06</option>
                                    </select>
                                </div>
                                <div class=\"col-12\">
                                    <div class=\"slider-range mb-15\">
                                        <div class=\"range-price mb-2\">Price [30000 - 150000]\$</div>
                                        <div class=\"slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all\"
                                            data-min=\"0\" data-max=\"200000\" data-unit=\"\$\" data-value-min=\"30000\"
                                            data-value-max=\"150000\" data-label-result=\"Price\">
                                            <div class=\"ui-slider-range ui-widget-header ui-corner-all\"></div>
                                            <span class=\"ui-slider-handle ui-state-default ui-corner-all\"
                                                tabindex=\"0\"></span>
                                            <span class=\"ui-slider-handle ui-state-default ui-corner-all\"
                                                tabindex=\"0\"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <div class=\"slider-range mb-15\">
                                        <div class=\"range-size mb-2\">Size [9762 - 72063]sqFt</div>
                                        <div data-min=\"0\" data-max=\"98623\" data-unit=\"sqFt\"
                                            class=\"slider-range-size ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all\"
                                            data-value-min=\"9762\" data-value-max=\"72063\" data-label-result=\"Size\">
                                            <div class=\"ui-slider-range ui-widget-header ui-corner-all\"></div>
                                            <span class=\"ui-slider-handle ui-state-default ui-corner-all\"
                                                tabindex=\"0\"></span>
                                            <span class=\"ui-slider-handle ui-state-default ui-corner-all\"
                                                tabindex=\"0\"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <button type=\"submit\" class=\"btn rehomes-btn mt-15 w-100\">Search Property</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Single Properties Widget Area -->
                    <div class=\"properties-single-widget-area mb-80 wow fadeInUp\" data-wow-delay=\"200ms\">
                        <h4 class=\"widget-title mb-30\">Recent Properties</h4>

                        <!-- Single Recent Post -->
                        <div class=\"single-recent-post d-flex align-items-center\">
                            <!-- Thumb -->
                            <div class=\"properties-post-thumb\">
                                <a href=\"";
        // line 359
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("property-details");
        echo "\"><img
                                        src=\"";
        // line 360
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/45.jpg");
        echo "\" alt=\"\"></a>
                            </div>
                            <!-- Post Content -->
                            <div class=\"post-content\">
                                <a href=\"";
        // line 364
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("property-details");
        echo "\" class=\"post-title\">Kennedy Suite</a>
                                <p class=\"properties--location\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> GA
                                    125, Newyork</p>
                                <p class=\"properties--rent\">Rent: <span>\$7.770.000</span></p>
                            </div>
                        </div>

                        <!-- Single Recent Post -->
                        <div class=\"single-recent-post d-flex align-items-center\">
                            <!-- Thumb -->
                            <div class=\"properties-post-thumb\">
                                <a href=\"";
        // line 375
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("property-details");
        echo "\"><img
                                        src=\"";
        // line 376
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/46.jpg");
        echo "\" alt=\"\"></a>
                            </div>
                            <!-- Post Content -->
                            <div class=\"post-content\">
                                <a href=\"";
        // line 380
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("property-details");
        echo "\" class=\"post-title\">Roob Viaduct</a>
                                <p class=\"properties--location\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> GA
                                    125, Newyork</p>
                                <p class=\"properties--rent\">Rent: <span>\$7.770.000</span></p>
                            </div>
                        </div>

                        <!-- Single Recent Post -->
                        <div class=\"single-recent-post d-flex align-items-center\">
                            <!-- Thumb -->
                            <div class=\"properties-post-thumb\">
                                <a href=\"";
        // line 391
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("property-details");
        echo "\"><img
                                        src=\"";
        // line 392
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/47.jpg");
        echo "\" alt=\"\"></a>
                            </div>
                            <!-- Post Content -->
                            <div class=\"post-content\">
                                <a href=\"";
        // line 396
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("property-details");
        echo "\" class=\"post-title\">Glover Plains</a>
                                <p class=\"properties--location\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> GA
                                    125, Newyork</p>
                                <p class=\"properties--rent\">Rent: <span>\$7.770.000</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- **** Properties-area End **** -->

<!-- **** Partner Area Start **** -->
<div class=\"partner-area wow fadeInUp\" data-wow-delay=\"200ms\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"partner-logo-slide owl-carousel\">
                    <!-- Single Partner Logo -->
                    <a href=\"#\" class=\"partner-logo wow fadeInUp\" data-wow-delay=\"100ms\"><img
                            src=\"";
        // line 418
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/core-img/1.png");
        echo "\" alt=\"\"></a>
                    <!-- Single Partner Logo -->
                    <a href=\"#\" class=\"partner-logo wow fadeInUp\" data-wow-delay=\"300ms\"><img
                            src=\"";
        // line 421
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/core-img/2.png");
        echo "\" alt=\"\"></a>
                    <!-- Single Partner Logo -->
                    <a href=\"#\" class=\"partner-logo wow fadeInUp\" data-wow-delay=\"500ms\"><img
                            src=\"";
        // line 424
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/core-img/3.png");
        echo "\" alt=\"\"></a>
                    <!-- Single Partner Logo -->
                    <a href=\"#\" class=\"partner-logo wow fadeInUp\" data-wow-delay=\"700ms\"><img
                            src=\"";
        // line 427
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/core-img/4.png");
        echo "\" alt=\"\"></a>
                    <!-- Single Partner Logo -->
                    <a href=\"#\" class=\"partner-logo wow fadeInUp\" data-wow-delay=\"900ms\"><img
                            src=\"";
        // line 430
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/core-img/5.png");
        echo "\" alt=\"\"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- **** Partner Area End **** -->";
    }

    public function getTemplateName()
    {
        return "/Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/pages/property-details.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  571 => 430,  565 => 427,  559 => 424,  553 => 421,  547 => 418,  522 => 396,  515 => 392,  511 => 391,  497 => 380,  490 => 376,  486 => 375,  472 => 364,  465 => 360,  461 => 359,  293 => 194,  259 => 163,  231 => 138,  203 => 113,  179 => 92,  112 => 28,  106 => 25,  100 => 22,  94 => 19,  86 => 14,  81 => 12,  76 => 10,  71 => 8,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- **** Properties Hero Area Start **** -->
<div class=\"properties-hero-area d-flex flex-wrap align-items-center mb-80\">
    <div class=\"properties-slide\">
        <!-- Properties Slider -->
        <div id=\"property-thumb-silde\" class=\"carousel slide wow fadeInUp\" data-wow-delay=\"200ms\" data-ride=\"carousel\">
            <ol class=\"carousel-indicators\">
                <li data-target=\"#property-thumb-silde\" data-slide-to=\"0\" class=\"active\"
                    style=\"background-image: url({{ 'assets/img/bg-img/64.jpg'|theme }});\"></li>
                <li data-target=\"#property-thumb-silde\" data-slide-to=\"1\"
                    style=\"background-image: url({{ 'assets/img/bg-img/65.jpg'|theme }});\"></li>
                <li data-target=\"#property-thumb-silde\" data-slide-to=\"2\"
                    style=\"background-image: url({{ 'assets/img/bg-img/66.jpg'|theme }});\"></li>
                <li data-target=\"#property-thumb-silde\" data-slide-to=\"3\"
                    style=\"background-image: url({{ 'assets/img/bg-img/67.jpg'|theme }});\"></li>
            </ol>

            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img src=\"{{ 'assets/img/bg-img/64.jpg'|theme }}\" class=\"d-block w-100\" alt=\"...\">
                </div>
                <div class=\"carousel-item\">
                    <img src=\"{{ 'assets/img/bg-img/65.jpg'|theme }}\" class=\"d-block w-100\" alt=\"...\">
                </div>
                <div class=\"carousel-item\">
                    <img src=\"{{ 'assets/img/bg-img/66.jpg'|theme }}\" class=\"d-block w-100\" alt=\"...\">
                </div>
                <div class=\"carousel-item\">
                    <img src=\"{{ 'assets/img/bg-img/67.jpg'|theme }}\" class=\"d-block w-100\" alt=\"...\">
                </div>
            </div>
        </div>
    </div>

    <!-- Properties Content Area -->
    <div class=\"properties-content-area wow fadeInUp\" data-wow-delay=\"200ms\">
        <div class=\"properties-content-info\">
            <h2>Huge Sunny Villa</h2>
            <div class=\"properties-location\">
                <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> 180 York Road, London, UK</p>
                <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> Villa</p>
            </div>
            <h4 class=\"properties-rate\">\$5400 <span>/ month</span></h4>
            <p>Buy Confidence, Sell With Success! Our storied approach to real estate development and maximization.</p>
            <!-- Properties Info -->
            <div class=\"properties-info\">
                <p>Sqft: <span>1.200 m2</span></p>
                <p>Beds: <span>04</span></p>
                <p>Baths: <span>03</span></p>
                <p>Garages: <span>02</span></p>
            </div>
        </div>
    </div>
</div>
<!-- **** Properties Hero Area End **** -->

<!-- **** Properties-area Start **** -->
<div class=\"rehomes-properties-area\">
    <div class=\"container\">
        <div class=\"row justify-content-between\">
            <div class=\"col-12 col-lg-8\">
                <!-- Information Area -->
                <div class=\"information-area mb-80 wow fadeInUp\" data-wow-delay=\"200ms\">
                    <h4 class=\"mb-30\">Infomation</h4>

                    <!--Information Content -->
                    <div class=\"information-content\">
                        <ul class=\"d-flex flex-wrap\">
                            <li><span>Price</span> <span>\$ 138,000</span></li>
                            <li><span>Property Type</span> <span>\$ 138,000</span></li>
                            <li><span>Year Built</span> <span>\$ 138,000</span></li>
                            <li><span>Bathrooms</span> <span>\$ 138,000</span></li>
                            <li><span>Rooms</span> <span>\$ 138,000</span></li>
                            <li><span>Parking lots</span> <span>\$ 138,000</span></li>
                            <li><span>Lot area</span> <span>\$ 138,000</span></li>
                            <li><span>Agent</span> <span>Anthony Noah</span></li>
                            <li><span>Reference</span> <span>#219</span></li>
                            <li><span>Contract type</span> <span>Sale</span></li>
                            <li><span>Beds</span> <span>4</span></li>
                            <li><span>Garages</span> <span>2</span></li>
                            <li><span>Home area</span> <span>1200 sqft</span></li>
                            <li><span>Lot dimensions</span> <span>20x30x40x50</span></li>
                        </ul>
                    </div>
                </div>

                <!-- Floor Thumb Content -->
                <div class=\"floor-thumb-content mb-80 wow fadeInUp\" data-wow-delay=\"200ms\">
                    <h4 class=\"mb-30\">Floor Plans</h4>

                    <!-- Floor Thumb -->
                    <div class=\"floor-thumb\">
                        <img src=\"{{ 'assets/img/bg-img/68.jpg'|theme }}\" alt=\"\">
                    </div>
                </div>

                <!-- Search Location Area -->
                <div class=\"search-location-area mb-80 wow fadeInUp\" data-wow-delay=\"200ms\">
                    <h4 class=\"mb-30\">Near By Place</h4>

                    <!-- Location Maps -->
                    <div class=\"loction-map\">
                        <iframe
                            src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19892.026971487212!2d-0.19247374135275525!3d51.4489138369289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2sbd!4v1551753138954\"
                            allowfullscreen></iframe>
                    </div>

                    <!-- Single Location Content -->
                    <div class=\"single-location-content d-flex align-items-center justify-content-between\">
                        <!-- Location Thumb And Info -->
                        <div class=\"location-thumb-info d-flex align-items-center\">
                            <!-- Location Thumb -->
                            <div class=\"location-thumb\">
                                <img src=\"{{ 'assets/img/bg-img/69.jpg'|theme }}\" alt=\"\">
                            </div>
                            <!-- Location Info -->
                            <div class=\"location-info\">
                                <h5>Hospital</h5>
                                <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> 801 Rowan Parkways Apt. 974</p>
                                <p><i class=\"fa fa-location-arrow\" aria-hidden=\"true\"></i> 5 km</p>
                            </div>
                        </div>

                        <!-- Contact Location -->
                        <div class=\"contact-location-btn\">
                            <!-- Phone -->
                            <a class=\"phone\" href=\"#\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i></a>
                            <!-- Share -->
                            <a class=\"share\" href=\"#\"><i class=\"fa fa-share\" aria-hidden=\"true\"></i></a>
                        </div>
                    </div>

                    <!-- Single Location Content -->
                    <div class=\"single-location-content d-flex align-items-center justify-content-between\">
                        <!-- Location Thumb And Info -->
                        <div class=\"location-thumb-info  d-flex align-items-center\">
                            <!-- Location Thumb -->
                            <div class=\"location-thumb\">
                                <img src=\"{{ 'assets/img/bg-img/70.jpg'|theme }}\" alt=\"\">
                            </div>
                            <!-- Location Info -->
                            <div class=\"location-info\">
                                <h5>Hospital</h5>
                                <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> 801 Rowan Parkways Apt. 974</p>
                                <p><i class=\"fa fa-location-arrow\" aria-hidden=\"true\"></i> 5 km</p>
                            </div>
                        </div>

                        <!-- Contact Location -->
                        <div class=\"contact-location-btn\">
                            <!-- Phone -->
                            <a class=\"phone\" href=\"#\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i></a>
                            <!-- Share -->
                            <a class=\"share\" href=\"#\"><i class=\"fa fa-share\" aria-hidden=\"true\"></i></a>
                        </div>
                    </div>

                    <!-- Single Location Content -->
                    <div class=\"single-location-content d-flex align-items-center justify-content-between\">
                        <!-- Location Thumb And Info -->
                        <div class=\"location-thumb-info  d-flex align-items-center\">
                            <!-- Location Thumb -->
                            <div class=\"location-thumb\">
                                <img src=\"{{ 'assets/img/bg-img/71.jpg'|theme }}\" alt=\"\">
                            </div>
                            <!-- Location Info -->
                            <div class=\"location-info\">
                                <h5>Hospital</h5>
                                <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> 801 Rowan Parkways Apt. 974</p>
                                <p><i class=\"fa fa-location-arrow\" aria-hidden=\"true\"></i> 5 km</p>
                            </div>
                        </div>

                        <!-- Contact Location -->
                        <div class=\"contact-location-btn\">
                            <!-- Phone -->
                            <a class=\"phone\" href=\"#\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i></a>
                            <!-- Share -->
                            <a class=\"share\" href=\"#\"><i class=\"fa fa-share\" aria-hidden=\"true\"></i></a>
                        </div>
                    </div>

                    <!-- More Location Btn -->
                    <button class=\"btn more-location-btn\"><i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i></button>
                </div>

                <!-- Agent Information -->
                <div class=\"agent-information-area mb-80 wow fadeInUp\" data-wow-delay=\"200ms\">
                    <h4 class=\"mb-30\">Agent Infomation</h4>

                    <!-- Agent Information Info -->
                    <div class=\"agent-information-info d-flex align-items-center\">
                        <!-- Agent Thumb -->
                        <div class=\"agent-thumb\">
                            <img src=\"{{ 'assets/img/bg-img/72.jpg'|theme }}\" alt=\"\">
                        </div>
                        <!-- Agent Info -->
                        <div class=\"agent-info\">
                            <h4>Jason Johnson</h4>
                            <!-- Agent Contact -->
                            <div class=\"agent-contact d-flex justify-content-between\">
                                <p>Phone: <span>(12) 456-7890</span></p>
                                <p>Email: <span>info.colorlib@gmail.com</span></p>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Risus commodo viverra maecenas accumsan lacus vel
                                facilisis. </p>
                            <a class=\"btn rehomes-btn mt-10\" href=\"#\">Contact us</a>
                        </div>
                    </div>
                </div>

                <!-- Leave A Reply -->
                <div class=\"rehomes-comment-form mb-80 wow fadeInUp\" data-wow-delay=\"200ms\">
                    <h4 class=\"mb-30\">Leave A Comment</h4>

                    <!-- Form -->
                    <form class=\"#\" method=\"post\">
                        <div class=\"row\">
                            <div class=\"col-12 col-lg-4\">
                                <input type=\"text\" name=\"message-name\" class=\"form-control mb-30\" placeholder=\"Name\">
                            </div>
                            <div class=\"col-12 col-lg-4\">
                                <input type=\"text\" name=\"phone\" class=\"form-control mb-30\" placeholder=\"Number\">
                            </div>
                            <div class=\"col-12 col-lg-4\">
                                <input type=\"email\" name=\"message-email\" class=\"form-control mb-30\" placeholder=\"Email\">
                            </div>
                            <div class=\"col-12\">
                                <textarea name=\"message\" class=\"form-control mb-30\" placeholder=\"Messages\"></textarea>
                            </div>
                            <div class=\"col-12\">
                                <button type=\"submit\" class=\"btn rehomes-btn mt-15\">Send Messages</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Sidebar Area -->
            <div class=\"col-12 col-md-6 col-lg-4 col-xl-3\">
                <div class=\"rehomes-property-sidebar-area\">

                    <!-- Property Search Form -->
                    <div class=\"property-search-form-area mb-80 wow fadeInUp\" data-wow-delay=\"200ms\">
                        <h4 class=\"mb-30\">Search Properties</h4>

                        <form action=\"#\" method=\"get\">
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <!-- Search Btn -->
                                    <div class=\"search-property-btn\">
                                        <fieldset class=\"form-group\">
                                            <div class=\"form-check\">
                                                <input class=\"form-check-input\" type=\"radio\" name=\"rehomesbuy\" id=\"buy\"
                                                    value=\"buy\" checked>
                                                <label class=\"form-check-label\" for=\"buy\">Buy</label>
                                            </div>
                                            <div class=\"form-check\">
                                                <input class=\"form-check-input\" type=\"radio\" name=\"rehomesbuy\" id=\"rent\"
                                                    value=\"rent\">
                                                <label class=\"form-check-label\" for=\"rent\">Rent</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <select name=\"location\" id=\"location\" class=\"form-control\">
                                        <option value=\"01\">Location</option>
                                        <option value=\"02\">Armenia</option>
                                        <option value=\"03\">Argentina</option>
                                        <option value=\"04\">Australia</option>
                                        <option value=\"05\">Belgium</option>
                                        <option value=\"06\">Botswana</option>
                                    </select>
                                </div>
                                <div class=\"col-12\">
                                    <select name=\"status\" id=\"status\" class=\"form-control\">
                                        <option value=\"01\">Status</option>
                                        <option value=\"02\">Commercial</option>
                                        <option value=\"03\">Office</option>
                                        <option value=\"04\">Villa</option>
                                        <option value=\"05\">Apartment</option>
                                        <option value=\"06\">Condominium</option>
                                    </select>
                                </div>
                                <div class=\"col-12\">
                                    <select name=\"bedroom\" id=\"bedroom\" class=\"form-control\">
                                        <option value=\"01\">No of Bedroom</option>
                                        <option value=\"02\">02</option>
                                        <option value=\"03\">03</option>
                                        <option value=\"04\">04</option>
                                        <option value=\"05\">05</option>
                                        <option value=\"06\">06</option>
                                    </select>
                                </div>
                                <div class=\"col-12\">
                                    <select name=\"bathroom\" id=\"bathroom\" class=\"form-control\">
                                        <option value=\"01\">No of Bathroom</option>
                                        <option value=\"02\">02</option>
                                        <option value=\"03\">03</option>
                                        <option value=\"04\">04</option>
                                        <option value=\"05\">05</option>
                                        <option value=\"06\">06</option>
                                    </select>
                                </div>
                                <div class=\"col-12\">
                                    <select name=\"guest\" id=\"guest\" class=\"form-control\">
                                        <option value=\"01\">No of Guest</option>
                                        <option value=\"02\">02</option>
                                        <option value=\"03\">03</option>
                                        <option value=\"04\">04</option>
                                        <option value=\"05\">05</option>
                                        <option value=\"06\">06</option>
                                    </select>
                                </div>
                                <div class=\"col-12\">
                                    <div class=\"slider-range mb-15\">
                                        <div class=\"range-price mb-2\">Price [30000 - 150000]\$</div>
                                        <div class=\"slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all\"
                                            data-min=\"0\" data-max=\"200000\" data-unit=\"\$\" data-value-min=\"30000\"
                                            data-value-max=\"150000\" data-label-result=\"Price\">
                                            <div class=\"ui-slider-range ui-widget-header ui-corner-all\"></div>
                                            <span class=\"ui-slider-handle ui-state-default ui-corner-all\"
                                                tabindex=\"0\"></span>
                                            <span class=\"ui-slider-handle ui-state-default ui-corner-all\"
                                                tabindex=\"0\"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <div class=\"slider-range mb-15\">
                                        <div class=\"range-size mb-2\">Size [9762 - 72063]sqFt</div>
                                        <div data-min=\"0\" data-max=\"98623\" data-unit=\"sqFt\"
                                            class=\"slider-range-size ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all\"
                                            data-value-min=\"9762\" data-value-max=\"72063\" data-label-result=\"Size\">
                                            <div class=\"ui-slider-range ui-widget-header ui-corner-all\"></div>
                                            <span class=\"ui-slider-handle ui-state-default ui-corner-all\"
                                                tabindex=\"0\"></span>
                                            <span class=\"ui-slider-handle ui-state-default ui-corner-all\"
                                                tabindex=\"0\"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <button type=\"submit\" class=\"btn rehomes-btn mt-15 w-100\">Search Property</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Single Properties Widget Area -->
                    <div class=\"properties-single-widget-area mb-80 wow fadeInUp\" data-wow-delay=\"200ms\">
                        <h4 class=\"widget-title mb-30\">Recent Properties</h4>

                        <!-- Single Recent Post -->
                        <div class=\"single-recent-post d-flex align-items-center\">
                            <!-- Thumb -->
                            <div class=\"properties-post-thumb\">
                                <a href=\"{{ 'property-details'|page }}\"><img
                                        src=\"{{ 'assets/img/bg-img/45.jpg'|theme }}\" alt=\"\"></a>
                            </div>
                            <!-- Post Content -->
                            <div class=\"post-content\">
                                <a href=\"{{ 'property-details'|page }}\" class=\"post-title\">Kennedy Suite</a>
                                <p class=\"properties--location\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> GA
                                    125, Newyork</p>
                                <p class=\"properties--rent\">Rent: <span>\$7.770.000</span></p>
                            </div>
                        </div>

                        <!-- Single Recent Post -->
                        <div class=\"single-recent-post d-flex align-items-center\">
                            <!-- Thumb -->
                            <div class=\"properties-post-thumb\">
                                <a href=\"{{ 'property-details'|page }}\"><img
                                        src=\"{{ 'assets/img/bg-img/46.jpg'|theme }}\" alt=\"\"></a>
                            </div>
                            <!-- Post Content -->
                            <div class=\"post-content\">
                                <a href=\"{{ 'property-details'|page }}\" class=\"post-title\">Roob Viaduct</a>
                                <p class=\"properties--location\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> GA
                                    125, Newyork</p>
                                <p class=\"properties--rent\">Rent: <span>\$7.770.000</span></p>
                            </div>
                        </div>

                        <!-- Single Recent Post -->
                        <div class=\"single-recent-post d-flex align-items-center\">
                            <!-- Thumb -->
                            <div class=\"properties-post-thumb\">
                                <a href=\"{{ 'property-details'|page }}\"><img
                                        src=\"{{ 'assets/img/bg-img/47.jpg'|theme }}\" alt=\"\"></a>
                            </div>
                            <!-- Post Content -->
                            <div class=\"post-content\">
                                <a href=\"{{ 'property-details'|page }}\" class=\"post-title\">Glover Plains</a>
                                <p class=\"properties--location\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> GA
                                    125, Newyork</p>
                                <p class=\"properties--rent\">Rent: <span>\$7.770.000</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- **** Properties-area End **** -->

<!-- **** Partner Area Start **** -->
<div class=\"partner-area wow fadeInUp\" data-wow-delay=\"200ms\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"partner-logo-slide owl-carousel\">
                    <!-- Single Partner Logo -->
                    <a href=\"#\" class=\"partner-logo wow fadeInUp\" data-wow-delay=\"100ms\"><img
                            src=\"{{ 'assets/img/core-img/1.png'|theme }}\" alt=\"\"></a>
                    <!-- Single Partner Logo -->
                    <a href=\"#\" class=\"partner-logo wow fadeInUp\" data-wow-delay=\"300ms\"><img
                            src=\"{{ 'assets/img/core-img/2.png'|theme }}\" alt=\"\"></a>
                    <!-- Single Partner Logo -->
                    <a href=\"#\" class=\"partner-logo wow fadeInUp\" data-wow-delay=\"500ms\"><img
                            src=\"{{ 'assets/img/core-img/3.png'|theme }}\" alt=\"\"></a>
                    <!-- Single Partner Logo -->
                    <a href=\"#\" class=\"partner-logo wow fadeInUp\" data-wow-delay=\"700ms\"><img
                            src=\"{{ 'assets/img/core-img/4.png'|theme }}\" alt=\"\"></a>
                    <!-- Single Partner Logo -->
                    <a href=\"#\" class=\"partner-logo wow fadeInUp\" data-wow-delay=\"900ms\"><img
                            src=\"{{ 'assets/img/core-img/5.png'|theme }}\" alt=\"\"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- **** Partner Area End **** -->", "/Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/pages/property-details.htm", "");
    }
}
