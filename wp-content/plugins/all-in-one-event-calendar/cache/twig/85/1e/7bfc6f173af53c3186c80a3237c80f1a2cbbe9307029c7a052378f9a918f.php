<?php

/* stream.twig */
class __TwigTemplate_851e7bfc6f173af53c3186c80a3237c80f1a2cbbe9307029c7a052378f9a918f extends Twig_Template
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
        echo (isset($context["navigation"]) ? $context["navigation"] : null);
        echo "

<div class=\"ai1ec-stream-view\">
\t";
        // line 4
        if (twig_test_empty((isset($context["dates"]) ? $context["dates"] : null))) {
            // line 5
            echo "\t\t<p class=\"ai1ec-no-results\">
\t\t\t";
            // line 6
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("There are no upcoming events to display at this time."), "html", null, true);
            echo "
\t\t</p>
\t";
        } else {
            // line 9
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) ? $context["dates"] : null));
            foreach ($context['_seq'] as $context["date"] => $context["date_info"]) {
                // line 10
                echo "\t\t\t<div class=\"ai1ec-date ";
                if ($this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "today")) {
                    echo "ai1ec-today";
                }
                echo "\">
\t\t\t\t<div class=\"ai1ec-date-title\">
\t\t\t\t\t<a class=\"ai1ec-load-view\" href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "href"), "html_attr");
                echo "\"
\t\t\t\t\t\t";
                // line 13
                echo (isset($context["data_type"]) ? $context["data_type"] : null);
                echo ">
\t\t\t\t\t\t";
                // line 14
                if ((isset($context["show_year_in_agenda_dates"]) ? $context["show_year_in_agenda_dates"] : null)) {
                    // line 15
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->date_i18n((isset($context["date"]) ? $context["date"] : null), "F j, Y (l)"), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 17
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->date_i18n((isset($context["date"]) ? $context["date"] : null), "F j (l)"), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                }
                // line 19
                echo "\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<div class=\"ai1ec-date-events\">
\t\t\t\t\t";
                // line 23
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "events"));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 24
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["category"]) ? $context["category"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                        // line 25
                        echo "\t\t\t\t\t\t\t<div class=\"ai1ec-clearfix ai1ec-event
\t\t\t\t\t\t\t\tai1ec-event-id-";
                        // line 26
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "post_id"), "method"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\tai1ec-event-instance-id-";
                        // line 27
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "instance_id"), "method"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t";
                        // line 28
                        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_allday")) {
                            echo "ai1ec-allday";
                        }
                        echo "\">

\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-inner ai1ec-clearfix\">

\t\t\t\t\t\t\t\t\t";
                        // line 32
                        $context["edit_post_link"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "edit_post_link"), "method");
                        // line 33
                        echo "\t\t\t\t\t\t\t\t\t";
                        if ((!twig_test_empty((isset($context["edit_post_link"]) ? $context["edit_post_link"] : null)))) {
                            // line 34
                            echo "\t\t\t\t\t\t\t\t\t\t<a class=\"post-edit-link\" href=\"";
                            echo (isset($context["edit_post_link"]) ? $context["edit_post_link"] : null);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-pencil\"></i> ";
                            // line 35
                            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Edit"), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 38
                        echo "
\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-title\">
\t\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-load-event\"
\t\t\t\t\t\t\t\t\t\t\thref=\"";
                        // line 41
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "instance_permalink"), "method"), "html_attr");
                        echo "\"
\t\t\t\t\t\t\t\t\t\t  ";
                        // line 42
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "category_text_color"), "method");
                        echo "
\t\t\t\t\t\t\t\t\t\t  ";
                        // line 43
                        echo (isset($context["data_type_events"]) ? $context["data_type_events"] : null);
                        echo "
\t\t\t\t\t\t\t\t\t\t  title=\"";
                        // line 44
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "filtered_title"), "method");
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 45
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "filtered_title"), "method");
                        echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                        // line 47
                        if (((isset($context["show_location_in_title"]) ? $context["show_location_in_title"] : null) && (!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "venue"), "method"))))) {
                            // line 48
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-location\"
\t\t\t\t\t\t\t\t\t\t\t\t>";
                            // line 49
                            echo twig_escape_filter($this->env, sprintf(Ai1ec_I18n::__("@ %s"), $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "venue"), "method")), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 51
                        echo "\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-avatar-wrap ai1ec-pull-left\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 54
                        echo $this->env->getExtension('ai1ec')->avatar((isset($context["event"]) ? $context["event"] : null), array(0 => "post_thumbnail", 1 => "content_img", 2 => "category_avatar", 3 => "default_avatar"));
                        // line 59
                        echo "
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-meta\">
\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-time\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 65
                        echo $this->env->getExtension('ai1ec')->timespan((isset($context["event"]) ? $context["event"] : null), "short");
                        echo "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                        // line 67
                        $context["categories"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "categories_html"), "method");
                        // line 69
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        $context["tags"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "tags_html"), "method");
                        // line 71
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if ((!twig_test_empty((isset($context["categories"]) ? $context["categories"] : null)))) {
                            // line 72
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-categories ai1ec-meta-divide\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 73
                            echo (isset($context["categories"]) ? $context["categories"] : null);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 76
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if ((!twig_test_empty((isset($context["tags"]) ? $context["tags"] : null)))) {
                            // line 77
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-tags ai1ec-meta-divide\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 78
                            echo (isset($context["tags"]) ? $context["tags"] : null);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 81
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-description\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 83
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "post_excerpt"), "method");
                        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 87
                    echo " ";
                    // line 88
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " ";
                // line 89
                echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['date'], $context['date_info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo " ";
            // line 92
            echo "\t";
        }
        echo " ";
        // line 93
        echo "</div>

<div class=\"ai1ec-pull-right\">";
        // line 95
        echo (isset($context["pagination_links"]) ? $context["pagination_links"] : null);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "stream.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 95,  245 => 93,  231 => 89,  224 => 88,  222 => 87,  211 => 83,  207 => 81,  201 => 78,  198 => 77,  195 => 76,  189 => 73,  186 => 72,  180 => 69,  178 => 67,  173 => 65,  165 => 59,  163 => 54,  158 => 51,  153 => 49,  150 => 48,  148 => 47,  143 => 45,  116 => 35,  111 => 34,  108 => 33,  106 => 32,  97 => 28,  93 => 27,  86 => 25,  81 => 24,  53 => 13,  82 => 21,  73 => 18,  64 => 15,  61 => 14,  70 => 17,  67 => 23,  26 => 4,  21 => 2,  617 => 344,  609 => 338,  602 => 334,  597 => 332,  593 => 331,  590 => 330,  587 => 329,  584 => 327,  575 => 321,  566 => 315,  560 => 312,  551 => 306,  542 => 300,  537 => 297,  534 => 296,  527 => 290,  521 => 288,  514 => 285,  512 => 284,  506 => 280,  500 => 278,  493 => 275,  491 => 274,  486 => 271,  478 => 265,  470 => 260,  456 => 249,  450 => 245,  444 => 243,  441 => 242,  433 => 237,  426 => 232,  424 => 231,  418 => 227,  412 => 225,  405 => 222,  403 => 221,  397 => 217,  391 => 215,  384 => 212,  382 => 211,  377 => 208,  371 => 203,  365 => 201,  358 => 198,  356 => 197,  351 => 194,  346 => 190,  340 => 187,  337 => 186,  331 => 183,  325 => 180,  322 => 179,  320 => 178,  316 => 176,  313 => 174,  307 => 170,  304 => 169,  296 => 163,  293 => 162,  289 => 160,  287 => 159,  280 => 154,  274 => 152,  267 => 149,  265 => 148,  260 => 145,  254 => 140,  248 => 138,  241 => 92,  239 => 91,  234 => 131,  225 => 124,  219 => 121,  212 => 116,  204 => 110,  197 => 106,  193 => 105,  183 => 71,  176 => 94,  172 => 93,  166 => 89,  157 => 82,  118 => 59,  100 => 48,  95 => 45,  92 => 43,  78 => 34,  76 => 32,  71 => 19,  69 => 28,  65 => 17,  59 => 15,  56 => 19,  54 => 17,  49 => 12,  46 => 8,  35 => 9,  30 => 6,  40 => 11,  32 => 4,  22 => 2,  164 => 83,  156 => 77,  151 => 78,  145 => 74,  139 => 44,  135 => 43,  131 => 42,  123 => 64,  117 => 61,  104 => 52,  89 => 26,  84 => 40,  80 => 39,  60 => 28,  52 => 11,  43 => 12,  34 => 11,  27 => 5,  48 => 9,  41 => 10,  33 => 7,  28 => 3,  24 => 3,  25 => 4,  36 => 9,  155 => 53,  149 => 51,  147 => 50,  144 => 49,  138 => 47,  136 => 46,  133 => 45,  127 => 41,  125 => 63,  122 => 38,  114 => 58,  112 => 38,  109 => 55,  101 => 35,  99 => 34,  96 => 46,  90 => 31,  88 => 30,  85 => 39,  79 => 27,  77 => 23,  74 => 37,  68 => 33,  66 => 23,  63 => 21,  57 => 14,  55 => 12,  50 => 15,  44 => 13,  42 => 12,  37 => 6,  31 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }
}
