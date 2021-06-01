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

/* /Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/partials/sections/latest-showcase.htm */
class __TwigTemplate_1fcecd0d8baa82cd35fd8f84ecb8be9fdb733c804fdbda6c99d6101ea3cd6ae2 extends \Twig\Template
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
        $filters = array("theme" => 16);
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
        echo "<section class=\"rehome-house-sale-area section-padding-100-60\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"section-heading text-center wow fadeInUp\" data-wow-delay=\"200ms\">
                    <h2>Top New In <span>NewYork</span></h2>
                    <p>These are the best deals and deals. All in New York City and nearby area</p>
                </div>
            </div>

            <!-- Single Property Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-property-area wow fadeInUp\" data-wow-delay=\"200ms\">
                    <!-- Property Thumb -->
                    <div class=\"property-thumb\">
                        <img src=\"";
        // line 16
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
                        <p class=\"badge-rent\">For Rent</p>
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
        // line 56
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
                        <p class=\"badge-sale\">For Rent</p>
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
        // line 95
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
                        <p class=\"badge-rent\">For Rent</p>
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
        // line 135
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
                        <p class=\"badge-sale\">For Rent</p>
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
        // line 174
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
                        <p class=\"badge-sale\">For Rent</p>
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
        // line 214
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
                        <p class=\"badge-rent\">For Rent</p>
                        <p class=\"price\">\$1,599/month</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/partials/sections/latest-showcase.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 214,  249 => 174,  207 => 135,  164 => 95,  122 => 56,  79 => 16,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"rehome-house-sale-area section-padding-100-60\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"section-heading text-center wow fadeInUp\" data-wow-delay=\"200ms\">
                    <h2>Top New In <span>NewYork</span></h2>
                    <p>These are the best deals and deals. All in New York City and nearby area</p>
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
                        <p class=\"badge-rent\">For Rent</p>
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
                        <p class=\"badge-sale\">For Rent</p>
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
                        <p class=\"badge-rent\">For Rent</p>
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
                        <p class=\"badge-sale\">For Rent</p>
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
                        <p class=\"badge-sale\">For Rent</p>
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
                        <p class=\"badge-rent\">For Rent</p>
                        <p class=\"price\">\$1,599/month</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>", "/Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/partials/sections/latest-showcase.htm", "");
    }
}
