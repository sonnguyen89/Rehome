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

/* /Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/layouts/default.htm */
class __TwigTemplate_b0159eacc0b22591cf982e69af8c84731d9b77f569a08381d73ca073c37ecc5a extends \Twig\Template
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
        $tags = array("if" => 5, "styles" => 32, "partial" => 48, "page" => 53, "framework" => 70, "scripts" => 71);
        $filters = array("escape" => 2, "theme" => 16);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'styles', 'partial', 'page', 'framework', 'scripts'],
                ['escape', 'theme'],
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
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 2), "site_locale", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "\">

<head>
    <title>";
        // line 5
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 5), "title", [], "any", false, false, true, 5)) {
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 5), "title", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
            echo " &#124; ";
        }
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 5), "site_title", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</title>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "meta_description", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 8), "meta_title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"SingDisain\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"generator\" content=\"OctoberCMS\">

    <!-- Favicon -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/favicon.ico\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"/favicon.ico\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/core-img/favicon.png");
        echo "\">

    <!-- Stylesheet -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700", 1 => "assets/css/bootstrap.min.css", 2 => "assets/css/font-awesome.min.css", 3 => "assets/css/magnific-popup.css", 4 => "assets/css/animate.css", 5 => "assets/css/default-assets/classy-nav.css", 6 => "assets/css/owl.carousel.min.css", 7 => "assets/css/nice-select.css", 8 => "assets/css/style.css", 9 => "assets/css/jquery-ui.min.css", 10 => "assets/css/main.css"]);
        // line 31
        echo "\">
    ";
        // line 32
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 33
        echo "    
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
        
</head>

<body>
    <!-- Preloader -->
    <div id=\"preloader\">
        <div class=\"loader\"></div>
    </div>

    <!-- **** Header Area Start **** -->
    ";
        // line 48
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 49
        echo "    <!-- **** Header Area End **** -->

    <!-- Content -->
    <main>
        ";
        // line 53
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 54
        echo "    </main>
    <!-- **** Footer Area Start **** -->
    ";
        // line 56
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 57
        echo "    <!-- **** Footer Area End **** -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/js/jquery.min.js", 1 => "assets/js/popper.min.js", 2 => "assets/js/bootstrap.min.js", 3 => "assets/js/rehomes.bundle.js", 4 => "assets/js/default-assets/active.js"]);
        // line 67
        echo "\">
    </script>

    ";
        // line 70
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 71
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 72
        echo "
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "/Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 72,  170 => 71,  159 => 70,  154 => 67,  152 => 61,  146 => 57,  142 => 56,  138 => 54,  136 => 53,  130 => 49,  126 => 48,  109 => 33,  106 => 32,  103 => 31,  101 => 19,  95 => 16,  84 => 8,  80 => 7,  71 => 5,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ this.theme.site_locale }}\">

<head>
    <title>{% if this.page.title %}{{ this.page.title}} &#124; {% endif %}{{ this.theme.site_title }}</title>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
    <meta name=\"author\" content=\"SingDisain\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"generator\" content=\"OctoberCMS\">

    <!-- Favicon -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/favicon.ico\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"/favicon.ico\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/img/core-img/favicon.png'|theme }}\">

    <!-- Stylesheet -->
    <link rel=\"stylesheet\" href=\"{{ [
        'https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700',
        'assets/css/bootstrap.min.css',
        'assets/css/font-awesome.min.css',
        'assets/css/magnific-popup.css',
        'assets/css/animate.css',
        'assets/css/default-assets/classy-nav.css',
        'assets/css/owl.carousel.min.css',
        'assets/css/nice-select.css',
        'assets/css/style.css',
        'assets/css/jquery-ui.min.css',
        'assets/css/main.css'
        ]|theme }}\">
    {% styles %}
    
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
        
</head>

<body>
    <!-- Preloader -->
    <div id=\"preloader\">
        <div class=\"loader\"></div>
    </div>

    <!-- **** Header Area Start **** -->
    {% partial 'header' %}
    <!-- **** Header Area End **** -->

    <!-- Content -->
    <main>
        {% page %}
    </main>
    <!-- **** Footer Area Start **** -->
    {% partial \"footer\" %}
    <!-- **** Footer Area End **** -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src=\"{{ [
        'assets/js/jquery.min.js',
        'assets/js/popper.min.js',
        'assets/js/bootstrap.min.js',
        'assets/js/rehomes.bundle.js',
        'assets/js/default-assets/active.js'
        ]|theme }}\">
    </script>

    {% framework extras %}
    {% scripts %}

</body>

</html>", "/Users/sonnguyen/repo/rehome/themes/dodojayaraditya-rehomes-singdisain/layouts/default.htm", "");
    }
}
