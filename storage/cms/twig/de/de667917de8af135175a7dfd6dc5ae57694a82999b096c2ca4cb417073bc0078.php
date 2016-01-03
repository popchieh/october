<?php

/* /var/www/html/movier.co/october/themes/demo/pages/home.htm */
class __TwigTemplate_57e04409a41529445c15f54387997a76c99e17d1681af18d92b82354c6cc4d08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_74b44dd1fb4b731adf747bae58ea995d22c93ffe0e6d05f00a8bf77ed702b020' => array($this, 'block___internal_74b44dd1fb4b731adf747bae58ea995d22c93ffe0e6d05f00a8bf77ed702b020'),
            '__internal_a41190d0ec2898a895fb712af5fc138e82da112669ed6b0d6eeae4949ddc7264' => array($this, 'block___internal_a41190d0ec2898a895fb712af5fc138e82da112669ed6b0d6eeae4949ddc7264'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"jumbotron\">
    <div class=\"container\">
        ";
        // line 3
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("welcome.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 4
        echo "    </div>
</div>

<div class=\"container\">

    <div class=\"page-header\">
        <h2>Overview <small>Basic concepts</small></h2>
    </div>
    <p>
        This page demonstrates the basic CMS features.
        Usually each page built with October is a combination of a layout, page, partials and content blocks,
        although in simple cases you can just use a page without anything else.
    </p>

    <!-- Layouts -->
    <h3>Layouts</h3>
    <p class=\"lead\">
        <i class=\"icon-th-large\"></i> &nbsp; Layouts define the page scaffold.
    </p>
    <p>
        The layout file <code>layouts/default.htm</code> defines the page scaffold &mdash;
        everything that repeats on each page, such as the HTML, HEAD and BODY tags, StyleSheet and JavaScript references.
    </p>
    <p>
        The page menu and footer in the Demo theme are defined in the layout as well.
    </p>

    <hr />

    <!-- Pages -->
    <h3>Pages</h3>
    <p class=\"lead\">
        <i class=\"icon-copy\"></i> &nbsp; Pages hold the content for each URL.
    </p>
    <p>
        The page file <code>pages/home.htm</code> defines the page URL (<code>/</code> for this page) and the page content.
        Pages are rendered inside layouts with this function that should be called in the layout code:
        <pre>";
        // line 41
        echo "{% page %}";
        echo "</pre>
        Using a layout for pages is optional &mdash; you can define everything right in the page file.
    </p>

    <hr />

    <!-- Partials -->
    <h3>Partials</h3>
    <p class=\"lead\">
        <i class=\"icon-tags\"></i> &nbsp; Partials contain reusable chunks of HTML markup.
    </p>
    <p>
        Partials are chunks of HTML defined in separate files which can be included anywhere.
        In this example we placed the footer content to the <code>partials/footer.htm</code> partial.
        Partials are rendered with:
        <pre>";
        // line 56
        echo "{% partial \"partial-name\" %}";
        echo "</pre> 
        It can be used inside pages, templates or other partials.
    </p>

    <hr />

    <!-- Content blocks -->
    <h3>Content blocks</h3>
    <p class=\"lead\">
        <i class=\"icon-font\"></i> &nbsp; Content blocks are text or HTML blocks that can be edited separately from the page or layout.
    </p>
    <p>
        The introductory text used on this page is defined in the <code>content/welcome.htm</code> file.
        Content blocks are defined and rendered with: 
        <pre>";
        // line 70
        echo "{% content \"content-name.htm\" %}";
        echo "</pre>
    </p>

    <hr />

    <!-- Placeholders -->
    <h3>Placeholders</h3>
    <p class=\"lead\">
        <i class=\"icon-bookmark\"></i> &nbsp; Placeholders allow pages to inject content to a layout.
    </p>
    <p>
        The common use is injecting page-specific links to StyleSheet or JavaScript files to the HEAD tag defined in the layout.
        Placeholders are defined in the layout file and they have names so that they can be referred in the page.
        Example:
    </p>
    <div class=\"row\">
        <div class=\"col-md-6\">
            Layout file:
            <pre>";
        // line 88
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_74b44dd1fb4b731adf747bae58ea995d22c93ffe0e6d05f00a8bf77ed702b020", $context, $blocks));
        echo "</pre>
        </div>
        <div class=\"col-md-6\">
            Page file:
            <pre>";
        // line 92
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_a41190d0ec2898a895fb712af5fc138e82da112669ed6b0d6eeae4949ddc7264", $context, $blocks));
        echo "</pre>
        </div>
    </div>

    <hr />

    <!-- Assets -->
    <h3>Assets</h3>
    <p class=\"lead\">
        <i class=\"icon-picture\"></i> &nbsp; Assets are resource files like images and stylesheets.
    </p>
    <p>This theme stores its asset files (JavaScript, StyleSheet, images, fonts, etc) in the <code>themes/demo/assets</code> directory. This theme is also packaged with these useful 3rd party tools:</p>
    <ul class=\"list-inline\">
        <li><a target=\"_blank\" href=\"http://getbootstrap.com/\">Twitter Bootstrap</a></li>
        <li><a target=\"_blank\" href=\"http://fontawesome.io/3.2.1/\">Font Awesome</a></li>
        <li><a target=\"_blank\" href=\"http://www.google.com/fonts/specimen/Lato\">Lato webfont</a></li>
    </ul>
    <p>You might prefer to remove them for your website implementation.</p>

    <br />

    <div class=\"text-center\">
        <p><a href=\"";
        // line 114
        echo $this->env->getExtension('CMS')->pageFilter("ajax");
        echo "\" class=\"btn btn-lg btn-default\">Continue to AJAX framework</a></p>
    </div>

</div>";
    }

    // line 88
    public function block___internal_74b44dd1fb4b731adf747bae58ea995d22c93ffe0e6d05f00a8bf77ed702b020($context, array $blocks = array())
    {
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("placeholder/layout.txt"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
    }

    // line 92
    public function block___internal_a41190d0ec2898a895fb712af5fc138e82da112669ed6b0d6eeae4949ddc7264($context, array $blocks = array())
    {
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("placeholder/page.txt"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/movier.co/october/themes/demo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 92,  164 => 88,  156 => 114,  131 => 92,  124 => 88,  103 => 70,  86 => 56,  68 => 41,  29 => 4,  25 => 3,  21 => 1,);
    }
}
/* <div class="jumbotron">*/
/*     <div class="container">*/
/*         {% content "welcome.htm" %}*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="container">*/
/* */
/*     <div class="page-header">*/
/*         <h2>Overview <small>Basic concepts</small></h2>*/
/*     </div>*/
/*     <p>*/
/*         This page demonstrates the basic CMS features.*/
/*         Usually each page built with October is a combination of a layout, page, partials and content blocks,*/
/*         although in simple cases you can just use a page without anything else.*/
/*     </p>*/
/* */
/*     <!-- Layouts -->*/
/*     <h3>Layouts</h3>*/
/*     <p class="lead">*/
/*         <i class="icon-th-large"></i> &nbsp; Layouts define the page scaffold.*/
/*     </p>*/
/*     <p>*/
/*         The layout file <code>layouts/default.htm</code> defines the page scaffold &mdash;*/
/*         everything that repeats on each page, such as the HTML, HEAD and BODY tags, StyleSheet and JavaScript references.*/
/*     </p>*/
/*     <p>*/
/*         The page menu and footer in the Demo theme are defined in the layout as well.*/
/*     </p>*/
/* */
/*     <hr />*/
/* */
/*     <!-- Pages -->*/
/*     <h3>Pages</h3>*/
/*     <p class="lead">*/
/*         <i class="icon-copy"></i> &nbsp; Pages hold the content for each URL.*/
/*     </p>*/
/*     <p>*/
/*         The page file <code>pages/home.htm</code> defines the page URL (<code>/</code> for this page) and the page content.*/
/*         Pages are rendered inside layouts with this function that should be called in the layout code:*/
/*         <pre>{{ "{% page %}" }}</pre>*/
/*         Using a layout for pages is optional &mdash; you can define everything right in the page file.*/
/*     </p>*/
/* */
/*     <hr />*/
/* */
/*     <!-- Partials -->*/
/*     <h3>Partials</h3>*/
/*     <p class="lead">*/
/*         <i class="icon-tags"></i> &nbsp; Partials contain reusable chunks of HTML markup.*/
/*     </p>*/
/*     <p>*/
/*         Partials are chunks of HTML defined in separate files which can be included anywhere.*/
/*         In this example we placed the footer content to the <code>partials/footer.htm</code> partial.*/
/*         Partials are rendered with:*/
/*         <pre>{{ "{% partial \"partial-name\" %}" }}</pre> */
/*         It can be used inside pages, templates or other partials.*/
/*     </p>*/
/* */
/*     <hr />*/
/* */
/*     <!-- Content blocks -->*/
/*     <h3>Content blocks</h3>*/
/*     <p class="lead">*/
/*         <i class="icon-font"></i> &nbsp; Content blocks are text or HTML blocks that can be edited separately from the page or layout.*/
/*     </p>*/
/*     <p>*/
/*         The introductory text used on this page is defined in the <code>content/welcome.htm</code> file.*/
/*         Content blocks are defined and rendered with: */
/*         <pre>{{ "{% content \"content-name.htm\" %}" }}</pre>*/
/*     </p>*/
/* */
/*     <hr />*/
/* */
/*     <!-- Placeholders -->*/
/*     <h3>Placeholders</h3>*/
/*     <p class="lead">*/
/*         <i class="icon-bookmark"></i> &nbsp; Placeholders allow pages to inject content to a layout.*/
/*     </p>*/
/*     <p>*/
/*         The common use is injecting page-specific links to StyleSheet or JavaScript files to the HEAD tag defined in the layout.*/
/*         Placeholders are defined in the layout file and they have names so that they can be referred in the page.*/
/*         Example:*/
/*     </p>*/
/*     <div class="row">*/
/*         <div class="col-md-6">*/
/*             Layout file:*/
/*             <pre>{% filter escape %}{% content "placeholder/layout.txt" %}{% endfilter %}</pre>*/
/*         </div>*/
/*         <div class="col-md-6">*/
/*             Page file:*/
/*             <pre>{% filter escape %}{% content "placeholder/page.txt" %}{% endfilter %}</pre>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <hr />*/
/* */
/*     <!-- Assets -->*/
/*     <h3>Assets</h3>*/
/*     <p class="lead">*/
/*         <i class="icon-picture"></i> &nbsp; Assets are resource files like images and stylesheets.*/
/*     </p>*/
/*     <p>This theme stores its asset files (JavaScript, StyleSheet, images, fonts, etc) in the <code>themes/demo/assets</code> directory. This theme is also packaged with these useful 3rd party tools:</p>*/
/*     <ul class="list-inline">*/
/*         <li><a target="_blank" href="http://getbootstrap.com/">Twitter Bootstrap</a></li>*/
/*         <li><a target="_blank" href="http://fontawesome.io/3.2.1/">Font Awesome</a></li>*/
/*         <li><a target="_blank" href="http://www.google.com/fonts/specimen/Lato">Lato webfont</a></li>*/
/*     </ul>*/
/*     <p>You might prefer to remove them for your website implementation.</p>*/
/* */
/*     <br />*/
/* */
/*     <div class="text-center">*/
/*         <p><a href="{{ 'ajax'|page }}" class="btn btn-lg btn-default">Continue to AJAX framework</a></p>*/
/*     </div>*/
/* */
/* </div>*/
