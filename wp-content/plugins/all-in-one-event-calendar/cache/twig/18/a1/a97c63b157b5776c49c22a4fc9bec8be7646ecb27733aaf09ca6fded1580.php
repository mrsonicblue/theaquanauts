<?php

/* create-event-form.twig */
class __TwigTemplate_18a1a97c63b157b5776c49c22a4fc9bec8be7646ecb27733aaf09ca6fded1580 extends Twig_Template
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
        echo "<div class=\"ai1ec-modal-header\">
\t<button type=\"button\" class=\"ai1ec-close\" data-dismiss=\"ai1ec-modal\">×</button>
\t<h2>";
        // line 3
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Post Your Event"), "html", null, true);
        echo "</h2>
</div>

<form class=\"ai1ec-create-event-form ai1ec-form-horizontal\" method=\"POST\"
\taction=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["form_action"]) ? $context["form_action"] : null), "html_attr");
        echo "\">

";
        // line 9
        echo (isset($context["nonce_field"]) ? $context["nonce_field"] : null);
        echo "
<input type=\"hidden\" name=\"ai1ec_start_time\" id=\"ai1ec-start-time\" />
<input type=\"hidden\" name=\"ai1ec_end_time\" id=\"ai1ec-end-time\" />
<input type=\"hidden\" name=\"ai1ec_all_day_event\" id=\"ai1ec-all-day-event\" />
<input type=\"hidden\" name=\"ai1ec_instant_event\" id=\"ai1ec-instant-event\" />

<div class=\"ai1ec-modal-body\">

\t";
        // line 18
        echo "\t<div class=\"ai1ec-alert ai1ec-alert-danger ai1ec-hide ai1ec-missing-field\">
\t\t";
        // line 19
        echo sprintf(Ai1ec_I18n::__("The %s field is required."), "<em></em>");
        echo "
\t</div>
\t";
        // line 21
        if ((isset($context["require_disclaimer"]) ? $context["require_disclaimer"] : null)) {
            // line 22
            echo "\t\t<div class=\"ai1ec-alert ai1ec-alert-danger ai1ec-hide ai1ec-required-disclaimer\">
\t\t\t";
            // line 23
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("You must check the checkbox stating you agree to the posting rules to submit the event."), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        // line 26
        echo "\t<div class=\"ai1ec-alert ai1ec-alert-danger ai1ec-hide ai1ec-submit-error\"></div>

\t";
        // line 28
        if ((isset($context["require_disclaimer"]) ? $context["require_disclaimer"] : null)) {
            // line 29
            echo "\t\t<div class=\"ai1ec-row\">
\t\t\t<label for=\"require_disclaimer\" class=\"ai1ec-checkbox\">
\t\t\t\t<input type=\"checkbox\" id=\"require_disclaimer\" value=\"1\" />
\t\t\t\t\t";
            // line 32
            echo twig_escape_filter($this->env, sprintf(Ai1ec_I18n::__("I have read and agreed that this event conforms to the <a %s>posting rules</a>"), "data-toggle=\"ai1ec-collapse\" data-target=\"#show_disclaimer\" class=\"ai1ec-collapsible-toggle\" id=\"open_require_disclaimer\""), "html", null, true);
            // line 34
            echo "
\t\t\t</label>
\t\t</div>
\t\t<div class=\"ai1ec-row ai1ec-collapse\" id=\"show_disclaimer\">
\t\t\t<div class=\"well well-small\">
\t\t\t\t";
            // line 39
            echo (isset($context["disclaimer"]) ? $context["disclaimer"] : null);
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 43
        echo "
\t";
        // line 45
        echo "\t<div class=\"ai1ec-form-group\">
\t\t<div class=\"ai1ec-col-sm-12\">
\t\t\t<input type=\"text\" id=\"ai1ec-event-title\" name=\"post_title\"
\t\t\t\tplaceholder=\"";
        // line 48
        echo twig_escape_filter($this->env, "Event Title", "html_attr");
        echo "\"
\t\t\t\trequired=\"true\" class=\"ai1ec-form-control\">
\t\t</div>
\t</div>

\t<div class=\"ai1ec-form-group\">
\t\t";
        // line 55
        echo "\t\t<div class=\"ai1ec-col-sm-6\">
\t\t\t<div class=\"ai1ec-form-group ai1ec-start-time\">
\t\t\t\t<div class=\"ai1ec-col-xs-6\">
\t\t\t\t\t<input data-date-format=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["date_format_pattern"]) ? $context["date_format_pattern"] : null), "html_attr");
        echo "\"
\t\t\t\t\t\tdata-date-weekstart=\"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["week_start_day"]) ? $context["week_start_day"] : null), "html_attr");
        echo "\"
\t\t\t\t\t\tid=\"ai1ec-start-date-input\" type=\"text\"
\t\t\t\t\t\trequired=\"true\" readonly=\"readonly\"
\t\t\t\t\t\tclass=\"ai1ec-form-control ai1ec-datepicker\"
\t\t\t\t\t\tplaceholder=\"";
        // line 63
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Date"), "html_attr");
        echo "\">
\t\t\t\t</div>

\t\t\t\t<div class=\"ai1ec-col-xs-6\">
\t\t\t\t\t<div id=\"ai1ec-start-time-input-wrap\"
\t\t\t\t\t\tclass=\"ai1ec-collapse bootstrap-timepicker\">
\t\t\t\t\t\t<input id=\"ai1ec-start-time-input\" type=\"text\"
\t\t\t\t\t\t\ttitle=\"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["timezone_expr"]) ? $context["timezone_expr"] : null), "html_attr");
        echo "\"
\t\t\t\t\t\t\tdata-show-meridian=\"";
        // line 71
        echo (((isset($context["input_24h_time"]) ? $context["input_24h_time"] : null)) ? ("false") : ("true"));
        echo "\"
\t\t\t\t\t\t\treadonly=\"readonly\" disabled=\"disabled\"
\t\t\t\t\t\t\tclass=\"ai1ec-form-control ai1ec-timepicker ai1ec-tooltip-trigger\"
\t\t\t\t\t\t\tplaceholder=\"";
        // line 74
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Time"), "html_attr");
        echo "\">
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 78
        echo "\t\t\t\t\t<label for=\"ai1ec-has-time\" class=\"ai1ec-checkbox\">
\t\t\t\t\t\t<input type=\"checkbox\" id=\"ai1ec-has-time\"
\t\t\t\t\t\t\tvalue=\"1\" disabled=\"disabled\" data-toggle=\"ai1ec-collapse\"
\t\t\t\t\t\t\tdata-target=\"#ai1ec-start-time-input-wrap\">
\t\t\t\t\t\t";
        // line 82
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Add time"), "html", null, true);
        echo "
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 89
        echo "\t\t<div class=\"ai1ec-col-sm-6\">
\t\t\t<div id=\"ai1ec-end-time-wrap\" class=\"ai1ec-collapse ai1ec-row\">
\t\t\t\t<div class=\"ai1ec-col-xs-6\">
\t\t\t\t\t<input
\t\t\t\t\t\tdata-date-format=\"";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["date_format_pattern"]) ? $context["date_format_pattern"] : null), "html_attr");
        echo "\"
\t\t\t\t\t\tdata-date-weekstart=\"";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["week_start_day"]) ? $context["week_start_day"] : null), "html_attr");
        echo "\"
\t\t\t\t\t\tid=\"ai1ec-end-date-input\" type=\"text\"
\t\t\t\t\t\treadonly=\"readonly\" disabled=\"disabled\"
\t\t\t\t\t\tclass=\"ai1ec-form-control ai1ec-datepicker\"
\t\t\t\t\t\tplaceholder=\"";
        // line 98
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("End date"), "html_attr");
        echo "\">
\t\t\t\t</div>

\t\t\t\t<div class=\"ai1ec-col-xs-6\">
\t\t\t\t\t<div id=\"ai1ec-end-time-input-wrap\"
\t\t\t\t\t\tclass=\"ai1ec-collapse bootstrap-timepicker\">
\t\t\t\t\t\t<input id=\"ai1ec-end-time-input\" type=\"text\"
\t\t\t\t\t\t\ttitle=\"";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["timezone_expr"]) ? $context["timezone_expr"] : null), "html_attr");
        echo "\"
\t\t\t\t\t\t\tdata-show-meridian=\"";
        // line 106
        echo (((isset($context["input_24h_time"]) ? $context["input_24h_time"] : null)) ? ("false") : ("true"));
        echo "\"
\t\t\t\t\t\t\tdata-alignment=\"right\"
\t\t\t\t\t\t\treadonly=\"readonly\" disabled=\"disabled\"
\t\t\t\t\t\t\tclass=\"ai1ec-form-control ai1ec-timepicker ai1ec-tooltip-trigger\"
\t\t\t\t\t\t\tplaceholder=\"";
        // line 110
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("End time"), "html_attr");
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 116
        echo "\t\t\t<label for=\"ai1ec-has-end-time\" class=\"ai1ec-checkbox\">
\t\t\t\t<input type=\"checkbox\" id=\"ai1ec-has-end-time\"
\t\t\t\t\tvalue=\"1\" disabled=\"disabled\" data-toggle=\"ai1ec-collapse\"
\t\t\t\t\tdata-target=\"#ai1ec-end-time-wrap\">
\t\t\t\t<span class=\"ai1ec-without-time\">
\t\t\t\t\t";
        // line 121
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Add end date"), "html", null, true);
        echo "
\t\t\t\t</span>
\t\t\t\t<span class=\"ai1ec-with-time\">
\t\t\t\t\t";
        // line 124
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Add end date/time"), "html", null, true);
        echo "
\t\t\t\t</span>
\t\t\t</label>
\t\t</div>
\t</div>

\t";
        // line 131
        echo "\t<div class=\"ai1ec-form-group\">
\t\t<div class=\"ai1ec-col-sm-12\">
\t\t\t<input type=\"text\" id=\"ai1ec_venue\" name=\"ai1ec_venue\"
\t\t\t\t";
        // line 134
        if ($this->getAttribute((isset($context["required_fields"]) ? $context["required_fields"] : null), "is_venue_required")) {
            // line 135
            echo "\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Venue name"), "html_attr");
            echo "\"
\t\t\t\t\trequired=\"true\"
\t\t\t\t";
        } else {
            // line 138
            echo "\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Venue name (optional)"), "html_attr");
            echo "\"
\t\t\t\t";
        }
        // line 140
        echo "\t\t\t\tclass=\"ai1ec-form-control\">
\t\t</div>
\t</div>

\t";
        // line 145
        echo "\t<div class=\"ai1ec-form-group\">
\t\t<div class=\"ai1ec-col-sm-9\">
\t\t\t<input type=\"text\" id=\"ai1ec_address\" name=\"ai1ec_address\"
\t\t\t\t";
        // line 148
        if ($this->getAttribute((isset($context["required_fields"]) ? $context["required_fields"] : null), "is_address_required")) {
            // line 149
            echo "\t\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Address"), "html_attr");
            echo "\"
\t\t\t\t\t\trequired=\"true\"
\t\t\t\t";
        } else {
            // line 152
            echo "\t\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Address (optional)"), "html_attr");
            echo "\"
\t\t\t\t";
        }
        // line 154
        echo "\t\t\t\tclass=\"ai1ec-form-control\">
\t\t</div>
\t\t<div class=\"ai1ec-col-sm-3\">
\t\t\t<label for=\"ai1ec-google-map\" class=\"ai1ec-checkbox\">
\t\t\t\t<input type=\"checkbox\" id=\"ai1ec-google-map\" name=\"ai1ec_google_map\"
\t\t\t\t\t";
        // line 159
        if ((isset($context["interactive_gmaps"]) ? $context["interactive_gmaps"] : null)) {
            // line 160
            echo "\t\t\t\t\t\tdata-toggle=\"ai1ec-collapse\" data-target=\"#ai1ec-map-wrap\"
\t\t\t\t\t";
        }
        // line 162
        echo "\t\t\t\t\tdisabled=\"disabled\">
\t\t\t\t";
        // line 163
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Include map"), "html", null, true);
        echo "
\t\t\t</label>
\t\t</div>
\t</div>

\t";
        // line 169
        echo "\t";
        if ((isset($context["interactive_gmaps"]) ? $context["interactive_gmaps"] : null)) {
            // line 170
            echo "\t\t<div id=\"ai1ec-map-wrap\" class=\"ai1ec-collapse\">
\t\t\t<div id=\"ai1ec_map_canvas\"></div>
\t\t</div>
\t";
        }
        // line 174
        echo "
\t";
        // line 176
        echo "\t<div class=\"ai1ec-form-group\">

\t\t";
        // line 178
        if ((!twig_test_empty((isset($context["cat_select"]) ? $context["cat_select"] : null)))) {
            // line 179
            echo "\t\t\t<div class=\"ai1ec-col-sm-6\">
\t\t\t\t";
            // line 180
            echo (isset($context["cat_select"]) ? $context["cat_select"] : null);
            echo "
\t\t\t</div>
\t\t\t<div class=\"ai1ec-col-sm-6\">
\t\t\t\t";
            // line 183
            echo (isset($context["tag_select"]) ? $context["tag_select"] : null);
            echo "
\t\t\t</div>
\t\t";
        } else {
            // line 186
            echo "\t\t\t<div class=\"ai1ec-col-sm-12\">
\t\t\t\t";
            // line 187
            echo (isset($context["tag_select"]) ? $context["tag_select"] : null);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 190
        echo "
\t</div>

\t";
        // line 194
        echo "\t<div class=\"ai1ec-form-group\">
\t\t<div class=\"ai1ec-col-sm-12\">
\t\t\t<textarea id=\"ai1ec-description\" name=\"post_content\" class=\"ai1ec-form-control\" rows=\"4\"
\t\t\t\t";
        // line 197
        if ($this->getAttribute((isset($context["required_fields"]) ? $context["required_fields"] : null), "is_description_required")) {
            // line 198
            echo "\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Description"), "html_attr");
            echo "\"
\t\t\t\t\trequired=\"true\"
\t\t\t\t";
        } else {
            // line 201
            echo "\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Description (optional)"), "html_attr");
            echo "\"
\t\t\t\t";
        }
        // line 203
        echo "\t\t\t\t></textarea>
\t\t</div>
\t</div>

\t";
        // line 208
        echo "\t<div class=\"ai1ec-form-group\">
\t\t<div class=\"ai1ec-col-sm-6\">
\t\t\t<input type=\"text\" id=\"ai1ec_contact_name\" name=\"ai1ec_contact_name\"
\t\t\t";
        // line 211
        if ($this->getAttribute((isset($context["required_fields"]) ? $context["required_fields"] : null), "is_organizer_name_required")) {
            // line 212
            echo "\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Organizer name"), "html_attr");
            echo "\"
\t\t\t\trequired=\"true\"
\t\t\t";
        } else {
            // line 215
            echo "\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Organizer name (optional)"), "html_attr");
            echo "\"
\t\t\t";
        }
        // line 217
        echo "\t\t\t\tclass=\"ai1ec-form-control\">
\t\t</div>
\t\t<div class=\"ai1ec-col-sm-6\">
\t\t\t<input type=\"text\" id=\"ai1ec_contact_email\" name=\"ai1ec_contact_email\"
\t\t\t\t";
        // line 221
        if ($this->getAttribute((isset($context["required_fields"]) ? $context["required_fields"] : null), "is_organizer_email_required")) {
            // line 222
            echo "\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Organizer email"), "html_attr");
            echo "\"
\t\t\t\t\trequired=\"true\"
\t\t\t\t";
        } else {
            // line 225
            echo "\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Organizer email (optional)"), "html_attr");
            echo "\"
\t\t\t\t";
        }
        // line 227
        echo "\t\t\t\tclass=\"ai1ec-form-control\">
\t\t</div>
\t</div>

\t";
        // line 231
        if ((isset($context["hide_additional_fields"]) ? $context["hide_additional_fields"] : null)) {
            // line 232
            echo "\t\t<div class=\"ai1ec-form-group\">
\t\t\t<div class=\"ai1ec-col-sm-12\">
\t\t\t\t<label for=\"ai1ec-extra-checkbox\" class=\"ai1ec-checkbox\">
\t\t\t\t\t<input type=\"checkbox\" id=\"ai1ec-extra-checkbox\"
\t\t\t\t\t\tdata-toggle=\"ai1ec-collapse\" data-target=\"#ai1ec-extra-fields\">
\t\t\t\t\t";
            // line 237
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Add additional details (cost, website URLs, etc.)"), "html", null, true);
            echo "
\t\t\t\t</label>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 242
        echo "
\t<div id=\"ai1ec-extra-fields\" class=\"";
        // line 243
        if ((isset($context["hide_additional_fields"]) ? $context["hide_additional_fields"] : null)) {
            echo "ai1ec-collapse";
        }
        echo "\">
\t\t";
        // line 245
        echo "\t\t<div class=\"ai1ec-form-group\">
\t\t\t<div class=\"ai1ec-col-sm-4\">
\t\t\t\t<div id=\"ai1ec_cost_wrap\" class=\"ai1ec-collapse\">
\t\t\t\t\t<input type=\"text\" id=\"ai1ec_cost\" name=\"ai1ec_cost\"
\t\t\t\t\t\tplaceholder=\"";
        // line 249
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Cost"), "html_attr");
        echo "\"
\t\t\t\t\t\tclass=\"ai1ec-form-control\">
\t\t\t\t</div>
\t\t\t\t<label for=\"ai1ec_is_free\" class=\"ai1ec-checkbox\">
\t\t\t\t\t<input type=\"checkbox\"
\t\t\t\t\t\tchecked=\"checked\"
\t\t\t\t\t\tname=\"ai1ec_is_free\"
\t\t\t\t\t\tdata-toggle=\"ai1ec-collapse\"
\t\t\t\t\t\tdata-target=\"#ai1ec_cost_wrap\"
\t\t\t\t\t\tid=\"ai1ec_is_free\"
\t\t\t\t\t\tvalue=\"1\">
\t\t\t\t\t";
        // line 260
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Free"), "html", null, true);
        echo "
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"ai1ec-col-sm-8\">
\t\t\t\t<input type=\"text\" id=\"ai1ec_ticket_url\" name=\"ai1ec_ticket_url\"
\t\t\t\t\tplaceholder=\"";
        // line 265
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Registration URL (optional)"), "html_attr");
        echo "\"
\t\t\t\t\tclass=\"ai1ec-form-control\">
\t\t\t</div>
\t\t</div>

\t\t";
        // line 271
        echo "\t\t<div class=\"ai1ec-form-group\">
\t\t\t<div class=\"ai1ec-col-sm-4\">
\t\t\t\t<input type=\"text\" id=\"ai1ec_contact_phone\" name=\"ai1ec_contact_phone\"
\t\t\t\t\t";
        // line 274
        if ($this->getAttribute((isset($context["required_fields"]) ? $context["required_fields"] : null), "is_phonenumber_required")) {
            // line 275
            echo "\t\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Phone number"), "html_attr");
            echo "\"
\t\t\t\t\t\trequired=\"true\"
\t\t\t\t\t";
        } else {
            // line 278
            echo "\t\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Phone number (optional)"), "html_attr");
            echo "\"
\t\t\t\t\t";
        }
        // line 280
        echo "\t\t\t\t\tclass=\"ai1ec-form-control\">
\t\t\t</div>
\t\t\t<div class=\"ai1ec-col-sm-8\">
\t\t\t\t<input type=\"text\" id=\"ai1ec_contact_url\" name=\"ai1ec_contact_url\"
\t\t\t\t\t";
        // line 284
        if ($this->getAttribute((isset($context["required_fields"]) ? $context["required_fields"] : null), "is_contact_required")) {
            // line 285
            echo "\t\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("External website URL"), "html_attr");
            echo "\"
\t\t\t\t\t\trequired=\"true\"
\t\t\t\t\t";
        } else {
            // line 288
            echo "\t\t\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("External website URL (optional)"), "html_attr");
            echo "\"
\t\t\t\t\t";
        }
        // line 290
        echo "\t\t\t\t\tclass=\"ai1ec-form-control\">
\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 296
        echo "\t";
        if ((isset($context["allow_uploads"]) ? $context["allow_uploads"] : null)) {
            // line 297
            echo "\t\t<div class=\"ai1ec-form-group\">
\t\t\t<div class=\"ai1ec-col-sm-3\">
\t\t\t\t<label for=\"ai1ec-image\" class=\"ai1ec-file-upload-label\">
\t\t\t\t\t";
            // line 300
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Image (optional):"), "html", null, true);
            echo "
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"ai1ec-col-sm-9\">
\t\t\t\t<div class=\"ai1ec-fileupload ai1ec-fileupload-new\" data-provides=\"fileupload\">
\t\t\t\t\t<div class=\"ai1ec-fileupload-new ai1ec-thumbnail\">
\t\t\t\t\t\t<img src=\"";
            // line 306
            echo twig_escape_filter($this->env, (isset($context["default_image"]) ? $context["default_image"] : null), "html_attr");
            echo "\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ai1ec-fileupload-preview ai1ec-fileupload-exists ai1ec-thumbnail\"></div>
\t\t\t\t\t<span class=\"ai1ec-btn ai1ec-btn-default ai1ec-btn-file\">
\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-picture-o ai1ec-fa-fw\"></i>
\t\t\t\t\t\t<span class=\"ai1ec-fileupload-new\">
\t\t\t\t\t\t\t";
            // line 312
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Select image"), "html", null, true);
            echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"ai1ec-fileupload-exists\">
\t\t\t\t\t\t\t";
            // line 315
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Change"), "html", null, true);
            echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<input type=\"file\" name=\"ai1ec_image\">
\t\t\t\t\t</span>
\t\t\t\t\t<a href=\"#\" class=\"ai1ec-btn ai1ec-btn-default ai1ec-text-danger ai1ec-fileupload-exists\" data-dismiss=\"fileupload\">
\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-times\"></i>
\t\t\t\t\t\t";
            // line 321
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Remove"), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 327
        echo "
\t";
        // line 329
        echo "\t";
        if ((isset($context["recaptcha_key"]) ? $context["recaptcha_key"] : null)) {
            // line 330
            echo "\t\t<div class=\"ai1ec-recaptcha\"
\t\t\tdata-placeholder=\"";
            // line 331
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Verification words"), "html_attr");
            echo "\"
\t\t\tdata-recaptcha-key=\"";
            // line 332
            echo twig_escape_filter($this->env, (isset($context["recaptcha_key"]) ? $context["recaptcha_key"] : null), "html_attr");
            echo "\">
\t\t\t<div class=\"ai1ec-initializing-message\">
\t\t\t\t";
            // line 334
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Loading reCAPTCHA..."), "html", null, true);
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 338
        echo "
</div>

<div class=\"ai1ec-modal-footer\">
\t<a href=\"#\" class=\"ai1ec-btn ai1ec-btn-lg ai1ec-btn-primary ai1ec-submit\">
\t\t<i class=\"ai1ec-fa ai1ec-fa-upload ai1ec-fa-fw\"></i>
\t\t";
        // line 344
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Submit Event"), "html", null, true);
        echo "
\t\t<i class=\"ai1ec-fa ai1ec-chevron-right\"></i>
\t</a>
</div>

</form>
";
    }

    public function getTemplateName()
    {
        return "create-event-form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  617 => 344,  609 => 338,  602 => 334,  597 => 332,  593 => 331,  590 => 330,  587 => 329,  584 => 327,  575 => 321,  566 => 315,  560 => 312,  551 => 306,  542 => 300,  537 => 297,  534 => 296,  527 => 290,  521 => 288,  514 => 285,  512 => 284,  506 => 280,  500 => 278,  493 => 275,  491 => 274,  486 => 271,  478 => 265,  470 => 260,  456 => 249,  450 => 245,  444 => 243,  441 => 242,  433 => 237,  426 => 232,  424 => 231,  418 => 227,  412 => 225,  405 => 222,  403 => 221,  397 => 217,  391 => 215,  384 => 212,  382 => 211,  377 => 208,  371 => 203,  365 => 201,  358 => 198,  356 => 197,  351 => 194,  346 => 190,  340 => 187,  337 => 186,  331 => 183,  325 => 180,  322 => 179,  320 => 178,  316 => 176,  313 => 174,  307 => 170,  304 => 169,  296 => 163,  293 => 162,  289 => 160,  287 => 159,  280 => 154,  274 => 152,  267 => 149,  265 => 148,  260 => 145,  254 => 140,  248 => 138,  241 => 135,  239 => 134,  234 => 131,  225 => 124,  219 => 121,  212 => 116,  204 => 110,  197 => 106,  193 => 105,  183 => 98,  176 => 94,  172 => 93,  166 => 89,  157 => 82,  118 => 59,  100 => 48,  95 => 45,  92 => 43,  78 => 34,  76 => 32,  71 => 29,  69 => 28,  65 => 26,  59 => 23,  56 => 22,  54 => 21,  49 => 19,  46 => 18,  35 => 9,  30 => 7,  40 => 6,  32 => 4,  22 => 2,  164 => 83,  156 => 77,  151 => 78,  145 => 74,  139 => 71,  135 => 70,  131 => 66,  123 => 64,  117 => 61,  104 => 52,  89 => 42,  84 => 40,  80 => 39,  60 => 28,  52 => 23,  43 => 17,  34 => 11,  27 => 7,  48 => 16,  41 => 12,  33 => 7,  28 => 3,  24 => 4,  25 => 3,  36 => 5,  155 => 53,  149 => 51,  147 => 50,  144 => 49,  138 => 47,  136 => 46,  133 => 45,  127 => 65,  125 => 63,  122 => 41,  114 => 58,  112 => 38,  109 => 55,  101 => 35,  99 => 34,  96 => 46,  90 => 31,  88 => 30,  85 => 39,  79 => 27,  77 => 38,  74 => 37,  68 => 33,  66 => 22,  63 => 21,  57 => 19,  55 => 18,  50 => 15,  44 => 13,  42 => 12,  37 => 9,  31 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }
}
