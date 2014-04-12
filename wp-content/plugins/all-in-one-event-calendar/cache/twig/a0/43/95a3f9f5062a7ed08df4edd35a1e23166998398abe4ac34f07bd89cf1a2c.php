<?php

/* contribution-buttons.twig */
class __TwigTemplate_a04395a3f9f5062a7ed08df4edd35a1e23166998398abe4ac34f07bd89cf1a2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (((isset($context["show_add_your_calendar"]) ? $context["show_add_your_calendar"] : null) || (isset($context["show_post_your_event"]) ? $context["show_post_your_event"] : null))) {
            // line 2
            echo "\t<div class=\"ai1ec-btn-group ai1ec-pull-right\">
\t\t";
            // line 3
            if ((isset($context["show_add_your_calendar"]) ? $context["show_add_your_calendar"] : null)) {
                // line 4
                echo "\t\t\t<a href=\"#ai1ec-submit-ics-modal\" class=\"ai1ec-btn ai1ec-btn-primary ai1ec-btn-xs\"
\t\t\t\tdata-toggle=\"ai1ec-modal\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-plus\"></i>
\t\t\t\t";
                // line 7
                echo twig_escape_filter($this->env, Ai1ec_I18n::__("Add Your Feed"), "html", null, true);
                echo "
\t\t\t</a>
\t\t";
            }
            // line 10
            echo "\t\t";
            if ((isset($context["show_post_your_event"]) ? $context["show_post_your_event"] : null)) {
                // line 11
                echo "\t\t\t";
                if ((isset($context["show_front_end_create_form"]) ? $context["show_front_end_create_form"] : null)) {
                    // line 12
                    echo "\t\t\t<a href=\"#ai1ec-create-event-modal\" class=\"ai1ec-btn ai1ec-btn-primary ai1ec-btn-xs\"
\t\t\t\tdata-toggle=\"ai1ec-modal\">
\t\t\t";
                } else {
                    // line 15
                    echo "\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["create_event_url"]) ? $context["create_event_url"] : null), "html_attr");
                    echo "\" class=\"ai1ec-btn ai1ec-btn-primary ai1ec-btn-xs\">
\t\t\t";
                }
                // line 17
                echo "\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-plus\"></i>
\t\t\t\t";
                // line 18
                echo twig_escape_filter($this->env, Ai1ec_I18n::__("Post Your Event"), "html", null, true);
                echo "
\t\t\t</a>
\t\t";
            }
            // line 21
            echo "\t</div>
";
        }
        // line 23
        echo "
";
        // line 24
        echo (isset($context["modals"]) ? $context["modals"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "contribution-buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 24,  67 => 23,  26 => 4,  21 => 2,  617 => 344,  609 => 338,  602 => 334,  597 => 332,  593 => 331,  590 => 330,  587 => 329,  584 => 327,  575 => 321,  566 => 315,  560 => 312,  551 => 306,  542 => 300,  537 => 297,  534 => 296,  527 => 290,  521 => 288,  514 => 285,  512 => 284,  506 => 280,  500 => 278,  493 => 275,  491 => 274,  486 => 271,  478 => 265,  470 => 260,  456 => 249,  450 => 245,  444 => 243,  441 => 242,  433 => 237,  426 => 232,  424 => 231,  418 => 227,  412 => 225,  405 => 222,  403 => 221,  397 => 217,  391 => 215,  384 => 212,  382 => 211,  377 => 208,  371 => 203,  365 => 201,  358 => 198,  356 => 197,  351 => 194,  346 => 190,  340 => 187,  337 => 186,  331 => 183,  325 => 180,  322 => 179,  320 => 178,  316 => 176,  313 => 174,  307 => 170,  304 => 169,  296 => 163,  293 => 162,  289 => 160,  287 => 159,  280 => 154,  274 => 152,  267 => 149,  265 => 148,  260 => 145,  254 => 140,  248 => 138,  241 => 135,  239 => 134,  234 => 131,  225 => 124,  219 => 121,  212 => 116,  204 => 110,  197 => 106,  193 => 105,  183 => 98,  176 => 94,  172 => 93,  166 => 89,  157 => 82,  118 => 59,  100 => 48,  95 => 45,  92 => 43,  78 => 34,  76 => 32,  71 => 29,  69 => 28,  65 => 26,  59 => 23,  56 => 22,  54 => 17,  49 => 19,  46 => 18,  35 => 9,  30 => 7,  40 => 11,  32 => 4,  22 => 2,  164 => 83,  156 => 77,  151 => 78,  145 => 74,  139 => 71,  135 => 70,  131 => 66,  123 => 64,  117 => 61,  104 => 52,  89 => 42,  84 => 40,  80 => 39,  60 => 28,  52 => 23,  43 => 12,  34 => 11,  27 => 7,  48 => 15,  41 => 12,  33 => 7,  28 => 3,  24 => 3,  25 => 3,  36 => 5,  155 => 53,  149 => 51,  147 => 50,  144 => 49,  138 => 47,  136 => 46,  133 => 45,  127 => 65,  125 => 63,  122 => 41,  114 => 58,  112 => 38,  109 => 55,  101 => 35,  99 => 34,  96 => 46,  90 => 31,  88 => 30,  85 => 39,  79 => 27,  77 => 38,  74 => 37,  68 => 33,  66 => 22,  63 => 21,  57 => 18,  55 => 18,  50 => 15,  44 => 13,  42 => 12,  37 => 10,  31 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }
}
