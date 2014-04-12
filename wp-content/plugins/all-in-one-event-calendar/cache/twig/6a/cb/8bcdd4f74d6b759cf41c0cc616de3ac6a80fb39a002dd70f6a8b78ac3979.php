<?php

/* submit-ics-modal.twig */
class __TwigTemplate_6acb8bcdd4f74d6b759cf41c0cc616de3ac6a80fb39a002dd70f6a8b78ac3979 extends Twig_Template
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
        echo "<div class=\"timely ai1ec-modal ai1ec-fade\" id=\"ai1ec-submit-ics-modal\">
\t<div class=\"ai1ec-modal-dialog\">
\t\t<div class=\"ai1ec-modal-content\">
\t\t\t<div class=\"ai1ec-loading\"></div>
\t\t\t<div class=\"ai1ec-modal-header\">
\t\t\t\t<button type=\"button\" class=\"ai1ec-close\" data-dismiss=\"ai1ec-modal\">×</button>
\t\t\t\t<h2>";
        // line 7
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Add Your Calendar Feed"), "html", null, true);
        echo "</h2>
\t\t\t</div>
\t\t\t<form class=\"ai1ec-submit-ics-form ai1ec-form-horizontal\">
\t\t\t\t<span class=\"ai1ec-nonce-fields\">
\t\t\t\t\t";
        // line 11
        echo (isset($context["nonce_field"]) ? $context["nonce_field"] : null);
        echo "
\t\t\t\t</span>
\t\t\t\t<div class=\"ai1ec-modal-body\">
\t\t\t\t\t<div id=\"ai1ec-submission-pane\" class=\"ai1ec-collapse ai1ec-in\">
\t\t\t\t\t\t<div class=\"ai1ec-alerts\"></div>
\t\t\t\t\t\t<div class=\"ai1ec-prose\">
\t\t\t\t\t\t\t<p>";
        // line 17
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("If you know of an event feed you think belongs in this calendar, paste its iCalendar (.ics) feed’s URL below. If approved, its events will be added to this calendar."), "html", null, true);
        echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ai1ec-form-group\">
\t\t\t\t\t\t\t<div class=\"ai1ec-col-sm-12\">
\t\t\t\t\t\t\t\t<input class=\"ai1ec-form-control\" type=\"text\" value=\"\"
\t\t\t\t\t\t\t\t\tid=\"ai1ec_calendar_url\" name=\"ai1ec_calendar_url\"
\t\t\t\t\t\t\t\t\tplaceholder=\"";
        // line 23
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Paste your calendar’s iCalendar (.ics) feed URL"), "html_attr");
        echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ai1ec-form-group\">
\t\t\t\t\t\t\t<div class=\"ai1ec-col-sm-6\">
\t\t\t\t\t\t\t\t";
        // line 28
        echo (isset($context["categories"]) ? $context["categories"] : null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ai1ec-col-sm-6\">
\t\t\t\t\t\t\t\t<input class=\"ai1ec-form-control\" type=\"text\" value=\"\"
\t\t\t\t\t\t\t\t\tid=\"ai1ec_submitter_email\" name=\"ai1ec_submitter_email\"
\t\t\t\t\t\t\t\t\tplaceholder=\"";
        // line 33
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Enter your e-mail address"), "html_attr");
        echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 37
        echo "\t\t\t\t\t\t";
        if ((isset($context["recaptcha_key"]) ? $context["recaptcha_key"] : null)) {
            // line 38
            echo "\t\t\t\t\t\t\t<div class=\"ai1ec-recaptcha\"
\t\t\t\t\t\t\t\tdata-placeholder=\"";
            // line 39
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Verification words"), "html_attr");
            echo "\"
\t\t\t\t\t\t\t\tdata-recaptcha-key=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["recaptcha_key"]) ? $context["recaptcha_key"] : null), "html_attr");
            echo "\">
\t\t\t\t\t\t\t\t<div class=\"ai1ec-initializing-message\">
\t\t\t\t\t\t\t\t\t";
            // line 42
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Loading reCAPTCHA..."), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 46
        echo "\t\t\t\t\t</div>

\t\t\t\t\t<p class=\"ai1ec-centered\">
\t\t\t\t\t\t<a href=\"#ai1ec-submission-pane\" id=\"ai1ec-download-toggle\"
\t\t\t\t\t\t\tclass=\"ai1ec-btn ai1ec-btn-info ai1ec-btn-lg\" data-toggle=\"ai1ec-collapse\">
\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-download ai1ec-fa-lg\"></i>
\t\t\t\t\t\t\t";
        // line 52
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Get Your Own Calendar"), "html", null, true);
        echo "
\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-chevron-down\"></i>
\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-chevron-up ai1ec-hide\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</p>

\t\t\t\t\t<div id=\"ai1ec-info-pane\" class=\"ai1ec-collapse ai1ec-prose\">
\t\t\t\t\t\t";
        // line 60
        echo "\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 61
        echo Ai1ec_I18n::__("If you already have your own <a href=\"http://wordpress.org/\" target=\"_blank\">WordPress</a> website, it’s easy to install your own <strong>All-in-One Event Calendar from Timely</strong>:");
        echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t<li>";
        // line 64
        echo Ai1ec_I18n::__("Browse to <a href=\"http://time.ly/get-your-own-calendar\" target=\"_blank\">time.ly/get-your-own-calendar</a>.");
        echo "</li>
\t\t\t\t\t\t\t<li>";
        // line 65
        echo Ai1ec_I18n::__("Download the <em>free</em> <strong>All-in-One Event Calendar</strong> plugin.");
        echo "</li>
\t\t\t\t\t\t\t<li>";
        // line 66
        echo Ai1ec_I18n::__("Log into your WordPress dashboard.");
        echo "</li>
\t\t\t\t\t\t\t<li>";
        // line 67
        echo Ai1ec_I18n::__("Browse to <strong>Plugins</strong> &gt; <strong>Add New</strong> &gt; <strong>Upload</strong>.");
        echo "</li>
\t\t\t\t\t\t\t<li>";
        // line 68
        echo Ai1ec_I18n::__("Choose the .zip file you just downloaded, and click <strong>Install Now</strong>.");
        echo "</li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 71
        echo Ai1ec_I18n::__("That’s it! You’ll have your own <strong>All-in-One Calendar</strong> up and running within minutes.");
        echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 74
        echo Ai1ec_I18n::__("For help or for more information, please visit <a href=\"http://support.time.ly/\" target=\"_blank\">Timely Support</a>.");
        echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
        // line 77
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"ai1ec-modal-footer\">
\t\t\t\t\t<div class=\"ai1ec-collapse ai1ec-in ai1ec-pane\">
\t\t\t\t\t\t<button type=\"submit\"
\t\t\t\t\t\t\tclass=\"ai1ec-btn ai1ec-btn-lg ai1ec-btn-primary ai1ec-submit\">
\t\t\t\t\t\t\t";
        // line 83
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Submit for review"), "html", null, true);
        echo "
\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-chevron-right\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "submit-ics-modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 83,  156 => 77,  151 => 74,  145 => 71,  139 => 68,  135 => 67,  131 => 66,  123 => 64,  117 => 61,  104 => 52,  89 => 42,  84 => 40,  80 => 39,  60 => 28,  52 => 23,  43 => 17,  34 => 11,  27 => 7,  48 => 16,  41 => 12,  33 => 7,  28 => 5,  24 => 4,  25 => 3,  36 => 4,  155 => 53,  149 => 51,  147 => 50,  144 => 49,  138 => 47,  136 => 46,  133 => 45,  127 => 65,  125 => 42,  122 => 41,  114 => 60,  112 => 38,  109 => 37,  101 => 35,  99 => 34,  96 => 46,  90 => 31,  88 => 30,  85 => 29,  79 => 27,  77 => 38,  74 => 37,  68 => 33,  66 => 22,  63 => 21,  57 => 19,  55 => 18,  50 => 15,  44 => 13,  42 => 12,  37 => 9,  31 => 7,  29 => 6,  23 => 2,  19 => 1,);
    }
}
