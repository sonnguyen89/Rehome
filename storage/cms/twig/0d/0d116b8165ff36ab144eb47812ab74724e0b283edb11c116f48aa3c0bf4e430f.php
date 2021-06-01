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

/* /Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/partials/header.htm */
class __TwigTemplate_ad9e962d00ad4921d24af0cedd9011a5001538eb9413e47bb2f5879ff88a5633 extends \Twig\Template
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
        $filters = array("page" => 36, "theme" => 36);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
        echo "<header class=\"header-area\">
    <!-- Top Header Area Start -->
    <div class=\"top-header-area\">
        <div class=\"container h-100\">
            <div class=\"row h-100 align-items-center\">
                <div class=\"col-6\">
                    <div class=\"top-header-content\">
                        <a href=\"#\"><i class=\"icon_mail\"></i> <span>info.colorlib@gmail.com</span></a>
                        <a href=\"#\"><i class=\"icon_phone\"></i> <span>(12) 345 6789</span></a>
                    </div>
                </div>
                <div class=\"col-6\">
                    <div class=\"top-header-content\">
                        <!-- Top Social Area -->
                        <div class=\"top-social-area ml-auto\">
                            <a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Header Area End -->

    <!-- Main Header Start -->
    <div class=\"main-header-area animated\">
        <div class=\"classy-nav-container breakpoint-off\">
            <div class=\"container\">
                <!-- Classy Menu -->
                <nav class=\"classy-navbar justify-content-between\" id=\"rehomesNav\">

                    <!-- Logo -->
                    <a class=\"nav-brand\" href=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/core-img/logo.png");
        echo "\" alt=\"\"></a>

                    <!-- Navbar Toggler -->
                    <div class=\"classy-navbar-toggler\">
                        <span class=\"navbarToggler\"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class=\"classy-menu\">
                        <!-- Menu Close Button -->
                        <div class=\"classycloseIcon\">
                            <div class=\"cross-wrap\"><span class=\"top\"></span><span class=\"bottom\"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class=\"classynav\">
                            <ul id=\"nav\">
                                <li class=\"active\"><a href=\"";
        // line 52
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home</a></li>
                                <li><a href=\"#\">Pages</a>
                                    <ul class=\"dropdown\">
                                        <li class=\"active\"><a href=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home</a></li>
                                        <li><a href=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">About</a></li>
                                        <li><a href=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("agents");
        echo "\">Agent</a></li>
                                        <li><a href=\"";
        // line 58
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("rent");
        echo "\">Rent</a></li>
                                        <li><a href=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("property-details");
        echo "\">Property Details</a></li>
                                        <li><a href=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("news");
        echo "\">News</a></li>
                                        <li><a href=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("news-detail");
        echo "\">News Detail</a></li>
                                        <li><a href=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact</a></li>
                                        <li><a href=\"#\">Dropdown</a>
                                            <ul class=\"dropdown\">
                                                <li><a href=\"#\">- Dropdown Item</a></li>
                                                <li><a href=\"#\">- Dropdown Item</a></li>
                                                <li><a href=\"#\">- Dropdown Item</a></li>
                                                <li><a href=\"#\">- Dropdown Item</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("sales");
        echo "\">Sales</a></li>
                                <li><a href=\"";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("rent");
        echo "\">Rent</a></li>
                                <li><a href=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("agents");
        echo "\">Agents</a></li>
                                <li><a href=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">About</a></li>
                                <li><a href=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("news");
        echo "\">News</a></li>
                            </ul>

                            <!-- Contact btn -->
                            <div class=\"contact-btn mt-3 mt-lg-0 ml-3 ml-lg-5\">
                                <a href=\"";
        // line 82
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact Us</a>
                            </div>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "/Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 82,  184 => 77,  180 => 76,  176 => 75,  172 => 74,  168 => 73,  154 => 62,  150 => 61,  146 => 60,  142 => 59,  138 => 58,  134 => 57,  130 => 56,  126 => 55,  120 => 52,  99 => 36,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"header-area\">
    <!-- Top Header Area Start -->
    <div class=\"top-header-area\">
        <div class=\"container h-100\">
            <div class=\"row h-100 align-items-center\">
                <div class=\"col-6\">
                    <div class=\"top-header-content\">
                        <a href=\"#\"><i class=\"icon_mail\"></i> <span>info.colorlib@gmail.com</span></a>
                        <a href=\"#\"><i class=\"icon_phone\"></i> <span>(12) 345 6789</span></a>
                    </div>
                </div>
                <div class=\"col-6\">
                    <div class=\"top-header-content\">
                        <!-- Top Social Area -->
                        <div class=\"top-social-area ml-auto\">
                            <a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Header Area End -->

    <!-- Main Header Start -->
    <div class=\"main-header-area animated\">
        <div class=\"classy-nav-container breakpoint-off\">
            <div class=\"container\">
                <!-- Classy Menu -->
                <nav class=\"classy-navbar justify-content-between\" id=\"rehomesNav\">

                    <!-- Logo -->
                    <a class=\"nav-brand\" href=\"{{ 'home'|page }}\"><img src=\"{{ 'assets/img/core-img/logo.png'|theme }}\" alt=\"\"></a>

                    <!-- Navbar Toggler -->
                    <div class=\"classy-navbar-toggler\">
                        <span class=\"navbarToggler\"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class=\"classy-menu\">
                        <!-- Menu Close Button -->
                        <div class=\"classycloseIcon\">
                            <div class=\"cross-wrap\"><span class=\"top\"></span><span class=\"bottom\"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class=\"classynav\">
                            <ul id=\"nav\">
                                <li class=\"active\"><a href=\"{{ 'home'|page }}\">Home</a></li>
                                <li><a href=\"#\">Pages</a>
                                    <ul class=\"dropdown\">
                                        <li class=\"active\"><a href=\"{{ 'home'|page }}\">Home</a></li>
                                        <li><a href=\"{{ 'about'|page }}\">About</a></li>
                                        <li><a href=\"{{ 'agents'|page }}\">Agent</a></li>
                                        <li><a href=\"{{ 'rent'|page }}\">Rent</a></li>
                                        <li><a href=\"{{ 'property-details'|page }}\">Property Details</a></li>
                                        <li><a href=\"{{ 'news'|page }}\">News</a></li>
                                        <li><a href=\"{{ 'news-detail'|page }}\">News Detail</a></li>
                                        <li><a href=\"{{ 'contact'|page }}\">Contact</a></li>
                                        <li><a href=\"#\">Dropdown</a>
                                            <ul class=\"dropdown\">
                                                <li><a href=\"#\">- Dropdown Item</a></li>
                                                <li><a href=\"#\">- Dropdown Item</a></li>
                                                <li><a href=\"#\">- Dropdown Item</a></li>
                                                <li><a href=\"#\">- Dropdown Item</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href=\"{{ 'sales'|page }}\">Sales</a></li>
                                <li><a href=\"{{ 'rent'|page }}\">Rent</a></li>
                                <li><a href=\"{{ 'agents'|page }}\">Agents</a></li>
                                <li><a href=\"{{ 'about'|page }}\">About</a></li>
                                <li><a href=\"{{ 'news'|page }}\">News</a></li>
                            </ul>

                            <!-- Contact btn -->
                            <div class=\"contact-btn mt-3 mt-lg-0 ml-3 ml-lg-5\">
                                <a href=\"{{ 'contact'|page }}\">Contact Us</a>
                            </div>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>", "/Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/partials/header.htm", "");
    }
}
