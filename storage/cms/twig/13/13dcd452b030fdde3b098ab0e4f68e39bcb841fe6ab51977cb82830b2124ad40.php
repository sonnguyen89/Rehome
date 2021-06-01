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

/* /Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/pages/sales.htm */
class __TwigTemplate_7b8f5d3c9aaf725bd4c5168eae043e882df3c9d01690a2ad7fa0c593b7b0fa98 extends \Twig\Template
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
        $tags = array("partial" => 2);
        $filters = array("page" => 17, "theme" => 38);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                ['page', 'theme'],
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
        echo "<!-- **** Welcome Maps Area Start **** -->
";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/welcome"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "<!-- **** Welcome Maps Area End **** -->

<!-- **** Location Search Form Area **** -->
";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/search"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "<!-- **** Location Search Form Area **** -->

<!-- **** Breadcrumb Area Start **** -->
<div class=\"breadcrumb-area-two mt-50 wow fadeInUp\" data-wow-delay=\"200ms\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"breadcrumb-content-two\">
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home</a></li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Property</li>
                        </ol>
                    </nav>
                    <h2 class=\"page-title\">For Sale</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- **** Breadcrumb Area End **** -->

<!-- **** Sale area Start **** -->
<section class=\"rehome-house-sale-area section-padding-80\">
    <div class=\"container\">
        <div class=\"row\">
            <!-- Single Property Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-property-area wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Property Thumb -->
                    <div class=\"property-thumb\">
                        <img src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/1.jpg");
        echo "\" alt=\"\">
                    </div>

                    <!-- Property Description -->
                    <div class=\"property-desc-area\">
                        <!-- Property Title & Seller -->
                        <div class=\"property-title-seller d-flex justify-content-between\">
                            <!-- Title -->
                            <div class=\"property-title\">
                                <h4>7660 Nikolaus Burg</h4>
                                <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> GA 125, Newyork</p>
                            </div>
                            <!-- Seller -->
                            <div class=\"property-seller\">
                                <p>Seller:</p>
                                <h6>Alex Cross</h6>
                            </div>
                        </div>
                        <!-- Property Info -->
                        <div class=\"property-info-area d-flex flex-wrap\">
                            <p>Sqft: <span>1420 m2</span></p>
                            <p>Garage: <span>2</span></p>
                            <p>Baths: <span>05</span></p>
                            <p>Baths: <span>06</span></p>
                        </div>
                    </div>

                    <!-- Property Price -->
                    <div class=\"property-price\">
                        <p class=\"badge-rent\">For Sale</p>
                        <p class=\"price\">\$1,599/month</p>
                    </div>
                </div>
            </div>

            <!-- Single Property Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-property-area wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Property Thumb -->
                    <div class=\"property-thumb\">
                        <img src=\"";
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/2.jpg");
        echo "\" alt=\"\">
                    </div>
                    <!-- Property Description -->
                    <div class=\"property-desc-area\">
                        <!-- Property Title & Seller -->
                        <div class=\"property-title-seller d-flex justify-content-between\">
                            <!-- Title -->
                            <div class=\"property-title\">
                                <h4>736 Hauck Alley</h4>
                                <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> GA 125, Newyork</p>
                            </div>
                            <!-- Seller -->
                            <div class=\"property-seller\">
                                <p>Seller:</p>
                                <h6>Alex Cross</h6>
                            </div>
                        </div>
                        <!-- Property Info -->
                        <div class=\"property-info-area d-flex flex-wrap\">
                            <p>Sqft: <span>1420 m2</span></p>
                            <p>Garage: <span>2</span></p>
                            <p>Baths: <span>05</span></p>
                            <p>Baths: <span>06</span></p>
                        </div>
                    </div>

                    <!-- Property Price -->
                    <div class=\"property-price\">
                        <p class=\"badge-sale\">For Sale</p>
                        <p class=\"price\">\$2,120.000</p>
                    </div>
                </div>
            </div>

            <!-- Single Property Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-property-area wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Property Thumb -->
                    <div class=\"property-thumb\">
                        <img src=\"";
        // line 117
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/3.jpg");
        echo "\" alt=\"\">
                    </div>

                    <!-- Property Description -->
                    <div class=\"property-desc-area\">
                        <!-- Property Title & Seller -->
                        <div class=\"property-title-seller d-flex justify-content-between\">
                            <!-- Title -->
                            <div class=\"property-title\">
                                <h4>170 Center Park</h4>
                                <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> GA 125, Newyork</p>
                            </div>
                            <!-- Seller -->
                            <div class=\"property-seller\">
                                <p>Seller:</p>
                                <h6>Alex Cross</h6>
                            </div>
                        </div>
                        <!-- Property Info -->
                        <div class=\"property-info-area d-flex flex-wrap\">
                            <p>Sqft: <span>1420 m2</span></p>
                            <p>Garage: <span>2</span></p>
                            <p>Baths: <span>05</span></p>
                            <p>Baths: <span>06</span></p>
                        </div>
                    </div>

                    <!-- Property Price -->
                    <div class=\"property-price\">
                        <p class=\"badge-rent\">For Sale</p>
                        <p class=\"price\">\$1,599/month</p>
                    </div>
                </div>
            </div>

            <!-- Single Property Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-property-area wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Property Thumb -->
                    <div class=\"property-thumb\">
                        <img src=\"";
        // line 157
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/4.jpg");
        echo "\" alt=\"\">
                    </div>
                    <!-- Property Description -->
                    <div class=\"property-desc-area\">
                        <!-- Property Title & Seller -->
                        <div class=\"property-title-seller d-flex justify-content-between\">
                            <!-- Title -->
                            <div class=\"property-title\">
                                <h4>58 Treutel Shores</h4>
                                <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> GA 125, Newyork</p>
                            </div>
                            <!-- Seller -->
                            <div class=\"property-seller\">
                                <p>Seller:</p>
                                <h6>Alex Cross</h6>
                            </div>
                        </div>
                        <!-- Property Info -->
                        <div class=\"property-info-area d-flex flex-wrap\">
                            <p>Sqft: <span>1420 m2</span></p>
                            <p>Garage: <span>2</span></p>
                            <p>Baths: <span>05</span></p>
                            <p>Baths: <span>06</span></p>
                        </div>
                    </div>

                    <!-- Property Price -->
                    <div class=\"property-price\">
                        <p class=\"badge-sale\">For Sale</p>
                        <p class=\"price\">\$2,120.000</p>
                    </div>
                </div>
            </div>

            <!-- Single Property Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-property-area wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Property Thumb -->
                    <div class=\"property-thumb\">
                        <img src=\"";
        // line 196
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/5.jpg");
        echo "\" alt=\"\">
                    </div>

                    <!-- Property Description -->
                    <div class=\"property-desc-area\">
                        <!-- Property Title & Seller -->
                        <div class=\"property-title-seller d-flex justify-content-between\">
                            <!-- Title -->
                            <div class=\"property-title\">
                                <h4>8332 Ramiro Village</h4>
                                <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> GA 125, Newyork</p>
                            </div>
                            <!-- Seller -->
                            <div class=\"property-seller\">
                                <p>Seller:</p>
                                <h6>Alex Cross</h6>
                            </div>
                        </div>
                        <!-- Property Info -->
                        <div class=\"property-info-area d-flex flex-wrap\">
                            <p>Sqft: <span>1420 m2</span></p>
                            <p>Garage: <span>2</span></p>
                            <p>Baths: <span>05</span></p>
                            <p>Baths: <span>06</span></p>
                        </div>
                    </div>

                    <!-- Property Price -->
                    <div class=\"property-price\">
                        <p class=\"badge-sale\">For Sale</p>
                        <p class=\"price\">\$2,120.000</p>
                    </div>
                </div>
            </div>

            <!-- Single Property Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-property-area wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Property Thumb -->
                    <div class=\"property-thumb\">
                        <img src=\"";
        // line 236
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/6.jpg");
        echo "\" alt=\"\">
                    </div>

                    <!-- Property Description -->
                    <div class=\"property-desc-area\">
                        <!-- Property Title & Seller -->
                        <div class=\"property-title-seller d-flex justify-content-between\">
                            <!-- Title -->
                            <div class=\"property-title\">
                                <h4>221 Leann Suite 473</h4>
                                <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> GA 125, Newyork</p>
                            </div>
                            <!-- Seller -->
                            <div class=\"property-seller\">
                                <p>Seller:</p>
                                <h6>Alex Cross</h6>
                            </div>
                        </div>
                        <!-- Property Info -->
                        <div class=\"property-info-area d-flex flex-wrap\">
                            <p>Sqft: <span>1420 m2</span></p>
                            <p>Garage: <span>2</span></p>
                            <p>Baths: <span>05</span></p>
                            <p>Baths: <span>06</span></p>
                        </div>
                    </div>

                    <!-- Property Price -->
                    <div class=\"property-price\">
                        <p class=\"badge-rent\">For Sale</p>
                        <p class=\"price\">\$1,599/month</p>
                    </div>
                </div>
            </div>

            <!-- Single Property Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-property-area wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Property Thumb -->
                    <div class=\"property-thumb\">
                        <img src=\"";
        // line 276
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/1.jpg");
        echo "\" alt=\"\">
                    </div>

                    <!-- Property Description -->
                    <div class=\"property-desc-area\">
                        <!-- Property Title & Seller -->
                        <div class=\"property-title-seller d-flex justify-content-between\">
                            <!-- Title -->
                            <div class=\"property-title\">
                                <h4>7660 Nikolaus Burg</h4>
                                <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> GA 125, Newyork</p>
                            </div>
                            <!-- Seller -->
                            <div class=\"property-seller\">
                                <p>Seller:</p>
                                <h6>Alex Cross</h6>
                            </div>
                        </div>
                        <!-- Property Info -->
                        <div class=\"property-info-area d-flex flex-wrap\">
                            <p>Sqft: <span>1420 m2</span></p>
                            <p>Garage: <span>2</span></p>
                            <p>Baths: <span>05</span></p>
                            <p>Baths: <span>06</span></p>
                        </div>
                    </div>

                    <!-- Property Price -->
                    <div class=\"property-price\">
                        <p class=\"badge-rent\">For Sale</p>
                        <p class=\"price\">\$1,599/month</p>
                    </div>
                </div>
            </div>

            <!-- Single Property Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-property-area wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Property Thumb -->
                    <div class=\"property-thumb\">
                        <img src=\"";
        // line 316
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/2.jpg");
        echo "\" alt=\"\">
                    </div>
                    <!-- Property Description -->
                    <div class=\"property-desc-area\">
                        <!-- Property Title & Seller -->
                        <div class=\"property-title-seller d-flex justify-content-between\">
                            <!-- Title -->
                            <div class=\"property-title\">
                                <h4>736 Hauck Alley</h4>
                                <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> GA 125, Newyork</p>
                            </div>
                            <!-- Seller -->
                            <div class=\"property-seller\">
                                <p>Seller:</p>
                                <h6>Alex Cross</h6>
                            </div>
                        </div>
                        <!-- Property Info -->
                        <div class=\"property-info-area d-flex flex-wrap\">
                            <p>Sqft: <span>1420 m2</span></p>
                            <p>Garage: <span>2</span></p>
                            <p>Baths: <span>05</span></p>
                            <p>Baths: <span>06</span></p>
                        </div>
                    </div>

                    <!-- Property Price -->
                    <div class=\"property-price\">
                        <p class=\"badge-sale\">For Sale</p>
                        <p class=\"price\">\$2,120.000</p>
                    </div>
                </div>
            </div>

            <!-- Single Property Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-property-area wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Property Thumb -->
                    <div class=\"property-thumb\">
                        <img src=\"";
        // line 355
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/3.jpg");
        echo "\" alt=\"\">
                    </div>

                    <!-- Property Description -->
                    <div class=\"property-desc-area\">
                        <!-- Property Title & Seller -->
                        <div class=\"property-title-seller d-flex justify-content-between\">
                            <!-- Title -->
                            <div class=\"property-title\">
                                <h4>170 Center Park</h4>
                                <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> GA 125, Newyork</p>
                            </div>
                            <!-- Seller -->
                            <div class=\"property-seller\">
                                <p>Seller:</p>
                                <h6>Alex Cross</h6>
                            </div>
                        </div>
                        <!-- Property Info -->
                        <div class=\"property-info-area d-flex flex-wrap\">
                            <p>Sqft: <span>1420 m2</span></p>
                            <p>Garage: <span>2</span></p>
                            <p>Baths: <span>05</span></p>
                            <p>Baths: <span>06</span></p>
                        </div>
                    </div>

                    <!-- Property Price -->
                    <div class=\"property-price\">
                        <p class=\"badge-rent\">For Sale</p>
                        <p class=\"price\">\$1,599/month</p>
                    </div>
                </div>
            </div>

            <!-- Single Property Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-property-area wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Property Thumb -->
                    <div class=\"property-thumb\">
                        <img src=\"";
        // line 395
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/4.jpg");
        echo "\" alt=\"\">
                    </div>
                    <!-- Property Description -->
                    <div class=\"property-desc-area\">
                        <!-- Property Title & Seller -->
                        <div class=\"property-title-seller d-flex justify-content-between\">
                            <!-- Title -->
                            <div class=\"property-title\">
                                <h4>58 Treutel Shores</h4>
                                <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> GA 125, Newyork</p>
                            </div>
                            <!-- Seller -->
                            <div class=\"property-seller\">
                                <p>Seller:</p>
                                <h6>Alex Cross</h6>
                            </div>
                        </div>
                        <!-- Property Info -->
                        <div class=\"property-info-area d-flex flex-wrap\">
                            <p>Sqft: <span>1420 m2</span></p>
                            <p>Garage: <span>2</span></p>
                            <p>Baths: <span>05</span></p>
                            <p>Baths: <span>06</span></p>
                        </div>
                    </div>

                    <!-- Property Price -->
                    <div class=\"property-price\">
                        <p class=\"badge-sale\">For Sale</p>
                        <p class=\"price\">\$2,120.000</p>
                    </div>
                </div>
            </div>

            <!-- Single Property Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-property-area wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Property Thumb -->
                    <div class=\"property-thumb\">
                        <img src=\"";
        // line 434
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/5.jpg");
        echo "\" alt=\"\">
                    </div>

                    <!-- Property Description -->
                    <div class=\"property-desc-area\">
                        <!-- Property Title & Seller -->
                        <div class=\"property-title-seller d-flex justify-content-between\">
                            <!-- Title -->
                            <div class=\"property-title\">
                                <h4>8332 Ramiro Village</h4>
                                <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> GA 125, Newyork</p>
                            </div>
                            <!-- Seller -->
                            <div class=\"property-seller\">
                                <p>Seller:</p>
                                <h6>Alex Cross</h6>
                            </div>
                        </div>
                        <!-- Property Info -->
                        <div class=\"property-info-area d-flex flex-wrap\">
                            <p>Sqft: <span>1420 m2</span></p>
                            <p>Garage: <span>2</span></p>
                            <p>Baths: <span>05</span></p>
                            <p>Baths: <span>06</span></p>
                        </div>
                    </div>

                    <!-- Property Price -->
                    <div class=\"property-price\">
                        <p class=\"badge-sale\">For Sale</p>
                        <p class=\"price\">\$2,120.000</p>
                    </div>
                </div>
            </div>

            <!-- Single Property Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-property-area wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Property Thumb -->
                    <div class=\"property-thumb\">
                        <img src=\"";
        // line 474
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-img/6.jpg");
        echo "\" alt=\"\">
                    </div>

                    <!-- Property Description -->
                    <div class=\"property-desc-area\">
                        <!-- Property Title & Seller -->
                        <div class=\"property-title-seller d-flex justify-content-between\">
                            <!-- Title -->
                            <div class=\"property-title\">
                                <h4>221 Leann Suite 473</h4>
                                <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> GA 125, Newyork</p>
                            </div>
                            <!-- Seller -->
                            <div class=\"property-seller\">
                                <p>Seller:</p>
                                <h6>Alex Cross</h6>
                            </div>
                        </div>
                        <!-- Property Info -->
                        <div class=\"property-info-area d-flex flex-wrap\">
                            <p>Sqft: <span>1420 m2</span></p>
                            <p>Garage: <span>2</span></p>
                            <p>Baths: <span>05</span></p>
                            <p>Baths: <span>06</span></p>
                        </div>
                    </div>

                    <!-- Property Price -->
                    <div class=\"property-price\">
                        <p class=\"badge-rent\">For Sale</p>
                        <p class=\"price\">\$1,599/month</p>
                    </div>
                </div>
            </div>

        </div>

        <div class=\"row\">
            <!-- Pagination and Page Counter Area -->
            <div class=\"col-12\">
                <div class=\"rehomes-pagination-counter mt-15 d-flex flex-wrap justify-content-between align-items-center wow fadeInUp\"
                    data-wow-delay=\"200ms\">
                    <!-- Pagination -->
                    <nav class=\"rehomes-pagination\">
                        <ul class=\"pagination\">
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
                            <li class=\"page-item\"><a class=\"page-link active\" href=\"#\">2</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">Next <i class=\"fa fa-angle-double-right\"
                                        aria-hidden=\"true\"></i></a></li>
                        </ul>
                    </nav>

                    <!-- Page Counter -->
                    <div class=\"page-counter\">
                        <p>Page <span>1</span> of <span>60</span> results</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- **** Sale Area End **** -->

<!-- **** Partner Area Start **** -->
";
        // line 539
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/partner-logo"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 540
        echo "<!-- **** Partner Area End **** -->";
    }

    public function getTemplateName()
    {
        return "/Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/pages/sales.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  655 => 540,  651 => 539,  583 => 474,  540 => 434,  498 => 395,  455 => 355,  413 => 316,  370 => 276,  327 => 236,  284 => 196,  242 => 157,  199 => 117,  157 => 78,  114 => 38,  90 => 17,  78 => 7,  74 => 6,  69 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- **** Welcome Maps Area Start **** -->
{% partial 'sections/welcome' %}
<!-- **** Welcome Maps Area End **** -->

<!-- **** Location Search Form Area **** -->
{% partial 'sections/search' %}
<!-- **** Location Search Form Area **** -->

<!-- **** Breadcrumb Area Start **** -->
<div class=\"breadcrumb-area-two mt-50 wow fadeInUp\" data-wow-delay=\"200ms\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"breadcrumb-content-two\">
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"{{ 'home'|page }}\">Home</a></li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Property</li>
                        </ol>
                    </nav>
                    <h2 class=\"page-title\">For Sale</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- **** Breadcrumb Area End **** -->

<!-- **** Sale area Start **** -->
<section class=\"rehome-house-sale-area section-padding-80\">
    <div class=\"container\">
        <div class=\"row\">
            <!-- Single Property Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-property-area wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Property Thumb -->
                    <div class=\"property-thumb\">
                        <img src=\"{{ 'assets/img/bg-img/1.jpg'|theme }}\" alt=\"\">
                    </div>

                    <!-- Property Description -->
                    <div class=\"property-desc-area\">
                        <!-- Property Title & Seller -->
                        <div class=\"property-title-seller d-flex justify-content-between\">
                            <!-- Title -->
                            <div class=\"property-title\">
                                <h4>7660 Nikolaus Burg</h4>
                                <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> GA 125, Newyork</p>
                            </div>
                            <!-- Seller -->
                            <div class=\"property-seller\">
                                <p>Seller:</p>
                                <h6>Alex Cross</h6>
                            </div>
                        </div>
                        <!-- Property Info -->
                        <div class=\"property-info-area d-flex flex-wrap\">
                            <p>Sqft: <span>1420 m2</span></p>
                            <p>Garage: <span>2</span></p>
                            <p>Baths: <span>05</span></p>
                            <p>Baths: <span>06</span></p>
                        </div>
                    </div>

                    <!-- Property Price -->
                    <div class=\"property-price\">
                        <p class=\"badge-rent\">For Sale</p>
                        <p class=\"price\">\$1,599/month</p>
                    </div>
                </div>
            </div>

            <!-- Single Property Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-property-area wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Property Thumb -->
                    <div class=\"property-thumb\">
                        <img src=\"{{ 'assets/img/bg-img/2.jpg'|theme }}\" alt=\"\">
                    </div>
                    <!-- Property Description -->
                    <div class=\"property-desc-area\">
                        <!-- Property Title & Seller -->
                        <div class=\"property-title-seller d-flex justify-content-between\">
                            <!-- Title -->
                            <div class=\"property-title\">
                                <h4>736 Hauck Alley</h4>
                                <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> GA 125, Newyork</p>
                            </div>
                            <!-- Seller -->
                            <div class=\"property-seller\">
                                <p>Seller:</p>
                                <h6>Alex Cross</h6>
                            </div>
                        </div>
                        <!-- Property Info -->
                        <div class=\"property-info-area d-flex flex-wrap\">
                            <p>Sqft: <span>1420 m2</span></p>
                            <p>Garage: <span>2</span></p>
                            <p>Baths: <span>05</span></p>
                            <p>Baths: <span>06</span></p>
                        </div>
                    </div>

                    <!-- Property Price -->
                    <div class=\"property-price\">
                        <p class=\"badge-sale\">For Sale</p>
                        <p class=\"price\">\$2,120.000</p>
                    </div>
                </div>
            </div>

            <!-- Single Property Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-property-area wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Property Thumb -->
                    <div class=\"property-thumb\">
                        <img src=\"{{ 'assets/img/bg-img/3.jpg'|theme }}\" alt=\"\">
                    </div>

                    <!-- Property Description -->
                    <div class=\"property-desc-area\">
                        <!-- Property Title & Seller -->
                        <div class=\"property-title-seller d-flex justify-content-between\">
                            <!-- Title -->
                            <div class=\"property-title\">
                                <h4>170 Center Park</h4>
                                <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> GA 125, Newyork</p>
                            </div>
                            <!-- Seller -->
                            <div class=\"property-seller\">
                                <p>Seller:</p>
                                <h6>Alex Cross</h6>
                            </div>
                        </div>
                        <!-- Property Info -->
                        <div class=\"property-info-area d-flex flex-wrap\">
                            <p>Sqft: <span>1420 m2</span></p>
                            <p>Garage: <span>2</span></p>
                            <p>Baths: <span>05</span></p>
                            <p>Baths: <span>06</span></p>
                        </div>
                    </div>

                    <!-- Property Price -->
                    <div class=\"property-price\">
                        <p class=\"badge-rent\">For Sale</p>
                        <p class=\"price\">\$1,599/month</p>
                    </div>
                </div>
            </div>

            <!-- Single Property Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-property-area wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Property Thumb -->
                    <div class=\"property-thumb\">
                        <img src=\"{{ 'assets/img/bg-img/4.jpg'|theme }}\" alt=\"\">
                    </div>
                    <!-- Property Description -->
                    <div class=\"property-desc-area\">
                        <!-- Property Title & Seller -->
                        <div class=\"property-title-seller d-flex justify-content-between\">
                            <!-- Title -->
                            <div class=\"property-title\">
                                <h4>58 Treutel Shores</h4>
                                <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> GA 125, Newyork</p>
                            </div>
                            <!-- Seller -->
                            <div class=\"property-seller\">
                                <p>Seller:</p>
                                <h6>Alex Cross</h6>
                            </div>
                        </div>
                        <!-- Property Info -->
                        <div class=\"property-info-area d-flex flex-wrap\">
                            <p>Sqft: <span>1420 m2</span></p>
                            <p>Garage: <span>2</span></p>
                            <p>Baths: <span>05</span></p>
                            <p>Baths: <span>06</span></p>
                        </div>
                    </div>

                    <!-- Property Price -->
                    <div class=\"property-price\">
                        <p class=\"badge-sale\">For Sale</p>
                        <p class=\"price\">\$2,120.000</p>
                    </div>
                </div>
            </div>

            <!-- Single Property Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-property-area wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Property Thumb -->
                    <div class=\"property-thumb\">
                        <img src=\"{{ 'assets/img/bg-img/5.jpg'|theme }}\" alt=\"\">
                    </div>

                    <!-- Property Description -->
                    <div class=\"property-desc-area\">
                        <!-- Property Title & Seller -->
                        <div class=\"property-title-seller d-flex justify-content-between\">
                            <!-- Title -->
                            <div class=\"property-title\">
                                <h4>8332 Ramiro Village</h4>
                                <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> GA 125, Newyork</p>
                            </div>
                            <!-- Seller -->
                            <div class=\"property-seller\">
                                <p>Seller:</p>
                                <h6>Alex Cross</h6>
                            </div>
                        </div>
                        <!-- Property Info -->
                        <div class=\"property-info-area d-flex flex-wrap\">
                            <p>Sqft: <span>1420 m2</span></p>
                            <p>Garage: <span>2</span></p>
                            <p>Baths: <span>05</span></p>
                            <p>Baths: <span>06</span></p>
                        </div>
                    </div>

                    <!-- Property Price -->
                    <div class=\"property-price\">
                        <p class=\"badge-sale\">For Sale</p>
                        <p class=\"price\">\$2,120.000</p>
                    </div>
                </div>
            </div>

            <!-- Single Property Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-property-area wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Property Thumb -->
                    <div class=\"property-thumb\">
                        <img src=\"{{ 'assets/img/bg-img/6.jpg'|theme }}\" alt=\"\">
                    </div>

                    <!-- Property Description -->
                    <div class=\"property-desc-area\">
                        <!-- Property Title & Seller -->
                        <div class=\"property-title-seller d-flex justify-content-between\">
                            <!-- Title -->
                            <div class=\"property-title\">
                                <h4>221 Leann Suite 473</h4>
                                <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> GA 125, Newyork</p>
                            </div>
                            <!-- Seller -->
                            <div class=\"property-seller\">
                                <p>Seller:</p>
                                <h6>Alex Cross</h6>
                            </div>
                        </div>
                        <!-- Property Info -->
                        <div class=\"property-info-area d-flex flex-wrap\">
                            <p>Sqft: <span>1420 m2</span></p>
                            <p>Garage: <span>2</span></p>
                            <p>Baths: <span>05</span></p>
                            <p>Baths: <span>06</span></p>
                        </div>
                    </div>

                    <!-- Property Price -->
                    <div class=\"property-price\">
                        <p class=\"badge-rent\">For Sale</p>
                        <p class=\"price\">\$1,599/month</p>
                    </div>
                </div>
            </div>

            <!-- Single Property Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-property-area wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Property Thumb -->
                    <div class=\"property-thumb\">
                        <img src=\"{{ 'assets/img/bg-img/1.jpg'|theme }}\" alt=\"\">
                    </div>

                    <!-- Property Description -->
                    <div class=\"property-desc-area\">
                        <!-- Property Title & Seller -->
                        <div class=\"property-title-seller d-flex justify-content-between\">
                            <!-- Title -->
                            <div class=\"property-title\">
                                <h4>7660 Nikolaus Burg</h4>
                                <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> GA 125, Newyork</p>
                            </div>
                            <!-- Seller -->
                            <div class=\"property-seller\">
                                <p>Seller:</p>
                                <h6>Alex Cross</h6>
                            </div>
                        </div>
                        <!-- Property Info -->
                        <div class=\"property-info-area d-flex flex-wrap\">
                            <p>Sqft: <span>1420 m2</span></p>
                            <p>Garage: <span>2</span></p>
                            <p>Baths: <span>05</span></p>
                            <p>Baths: <span>06</span></p>
                        </div>
                    </div>

                    <!-- Property Price -->
                    <div class=\"property-price\">
                        <p class=\"badge-rent\">For Sale</p>
                        <p class=\"price\">\$1,599/month</p>
                    </div>
                </div>
            </div>

            <!-- Single Property Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-property-area wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Property Thumb -->
                    <div class=\"property-thumb\">
                        <img src=\"{{ 'assets/img/bg-img/2.jpg'|theme }}\" alt=\"\">
                    </div>
                    <!-- Property Description -->
                    <div class=\"property-desc-area\">
                        <!-- Property Title & Seller -->
                        <div class=\"property-title-seller d-flex justify-content-between\">
                            <!-- Title -->
                            <div class=\"property-title\">
                                <h4>736 Hauck Alley</h4>
                                <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> GA 125, Newyork</p>
                            </div>
                            <!-- Seller -->
                            <div class=\"property-seller\">
                                <p>Seller:</p>
                                <h6>Alex Cross</h6>
                            </div>
                        </div>
                        <!-- Property Info -->
                        <div class=\"property-info-area d-flex flex-wrap\">
                            <p>Sqft: <span>1420 m2</span></p>
                            <p>Garage: <span>2</span></p>
                            <p>Baths: <span>05</span></p>
                            <p>Baths: <span>06</span></p>
                        </div>
                    </div>

                    <!-- Property Price -->
                    <div class=\"property-price\">
                        <p class=\"badge-sale\">For Sale</p>
                        <p class=\"price\">\$2,120.000</p>
                    </div>
                </div>
            </div>

            <!-- Single Property Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-property-area wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Property Thumb -->
                    <div class=\"property-thumb\">
                        <img src=\"{{ 'assets/img/bg-img/3.jpg'|theme }}\" alt=\"\">
                    </div>

                    <!-- Property Description -->
                    <div class=\"property-desc-area\">
                        <!-- Property Title & Seller -->
                        <div class=\"property-title-seller d-flex justify-content-between\">
                            <!-- Title -->
                            <div class=\"property-title\">
                                <h4>170 Center Park</h4>
                                <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> GA 125, Newyork</p>
                            </div>
                            <!-- Seller -->
                            <div class=\"property-seller\">
                                <p>Seller:</p>
                                <h6>Alex Cross</h6>
                            </div>
                        </div>
                        <!-- Property Info -->
                        <div class=\"property-info-area d-flex flex-wrap\">
                            <p>Sqft: <span>1420 m2</span></p>
                            <p>Garage: <span>2</span></p>
                            <p>Baths: <span>05</span></p>
                            <p>Baths: <span>06</span></p>
                        </div>
                    </div>

                    <!-- Property Price -->
                    <div class=\"property-price\">
                        <p class=\"badge-rent\">For Sale</p>
                        <p class=\"price\">\$1,599/month</p>
                    </div>
                </div>
            </div>

            <!-- Single Property Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-property-area wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Property Thumb -->
                    <div class=\"property-thumb\">
                        <img src=\"{{ 'assets/img/bg-img/4.jpg'|theme }}\" alt=\"\">
                    </div>
                    <!-- Property Description -->
                    <div class=\"property-desc-area\">
                        <!-- Property Title & Seller -->
                        <div class=\"property-title-seller d-flex justify-content-between\">
                            <!-- Title -->
                            <div class=\"property-title\">
                                <h4>58 Treutel Shores</h4>
                                <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> GA 125, Newyork</p>
                            </div>
                            <!-- Seller -->
                            <div class=\"property-seller\">
                                <p>Seller:</p>
                                <h6>Alex Cross</h6>
                            </div>
                        </div>
                        <!-- Property Info -->
                        <div class=\"property-info-area d-flex flex-wrap\">
                            <p>Sqft: <span>1420 m2</span></p>
                            <p>Garage: <span>2</span></p>
                            <p>Baths: <span>05</span></p>
                            <p>Baths: <span>06</span></p>
                        </div>
                    </div>

                    <!-- Property Price -->
                    <div class=\"property-price\">
                        <p class=\"badge-sale\">For Sale</p>
                        <p class=\"price\">\$2,120.000</p>
                    </div>
                </div>
            </div>

            <!-- Single Property Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-property-area wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Property Thumb -->
                    <div class=\"property-thumb\">
                        <img src=\"{{ 'assets/img/bg-img/5.jpg'|theme }}\" alt=\"\">
                    </div>

                    <!-- Property Description -->
                    <div class=\"property-desc-area\">
                        <!-- Property Title & Seller -->
                        <div class=\"property-title-seller d-flex justify-content-between\">
                            <!-- Title -->
                            <div class=\"property-title\">
                                <h4>8332 Ramiro Village</h4>
                                <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> GA 125, Newyork</p>
                            </div>
                            <!-- Seller -->
                            <div class=\"property-seller\">
                                <p>Seller:</p>
                                <h6>Alex Cross</h6>
                            </div>
                        </div>
                        <!-- Property Info -->
                        <div class=\"property-info-area d-flex flex-wrap\">
                            <p>Sqft: <span>1420 m2</span></p>
                            <p>Garage: <span>2</span></p>
                            <p>Baths: <span>05</span></p>
                            <p>Baths: <span>06</span></p>
                        </div>
                    </div>

                    <!-- Property Price -->
                    <div class=\"property-price\">
                        <p class=\"badge-sale\">For Sale</p>
                        <p class=\"price\">\$2,120.000</p>
                    </div>
                </div>
            </div>

            <!-- Single Property Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-property-area wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Property Thumb -->
                    <div class=\"property-thumb\">
                        <img src=\"{{ 'assets/img/bg-img/6.jpg'|theme }}\" alt=\"\">
                    </div>

                    <!-- Property Description -->
                    <div class=\"property-desc-area\">
                        <!-- Property Title & Seller -->
                        <div class=\"property-title-seller d-flex justify-content-between\">
                            <!-- Title -->
                            <div class=\"property-title\">
                                <h4>221 Leann Suite 473</h4>
                                <p><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> GA 125, Newyork</p>
                            </div>
                            <!-- Seller -->
                            <div class=\"property-seller\">
                                <p>Seller:</p>
                                <h6>Alex Cross</h6>
                            </div>
                        </div>
                        <!-- Property Info -->
                        <div class=\"property-info-area d-flex flex-wrap\">
                            <p>Sqft: <span>1420 m2</span></p>
                            <p>Garage: <span>2</span></p>
                            <p>Baths: <span>05</span></p>
                            <p>Baths: <span>06</span></p>
                        </div>
                    </div>

                    <!-- Property Price -->
                    <div class=\"property-price\">
                        <p class=\"badge-rent\">For Sale</p>
                        <p class=\"price\">\$1,599/month</p>
                    </div>
                </div>
            </div>

        </div>

        <div class=\"row\">
            <!-- Pagination and Page Counter Area -->
            <div class=\"col-12\">
                <div class=\"rehomes-pagination-counter mt-15 d-flex flex-wrap justify-content-between align-items-center wow fadeInUp\"
                    data-wow-delay=\"200ms\">
                    <!-- Pagination -->
                    <nav class=\"rehomes-pagination\">
                        <ul class=\"pagination\">
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
                            <li class=\"page-item\"><a class=\"page-link active\" href=\"#\">2</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">Next <i class=\"fa fa-angle-double-right\"
                                        aria-hidden=\"true\"></i></a></li>
                        </ul>
                    </nav>

                    <!-- Page Counter -->
                    <div class=\"page-counter\">
                        <p>Page <span>1</span> of <span>60</span> results</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- **** Sale Area End **** -->

<!-- **** Partner Area Start **** -->
{% partial 'sections/partner-logo' %}
<!-- **** Partner Area End **** -->", "/Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/pages/sales.htm", "");
    }
}
