<?php

// Loads in code
function miliband_scripts()
{
	wp_enqueue_style("style", get_template_directory_uri() . "/dist/main.css");
	wp_enqueue_script("code", get_template_directory_uri() . "/dist/main.js");
}

// Adds in attribution for images
function add_field($form_fields, $post)
{
	$field_value = get_post_meta($post->ID, "attribution", true);

	// Attribution Name
	$form_fields["attribution_name"] = [
		"label" => __("Attribution Name"),
		"input" => "text",
		"value" => $field_value ? $field_value : "",
		"helps" => __("Name of Artist"),
	];

	// Attribution Site
	$form_fields["attribution_site"] = [
		"label" => __("Attribution Site"),
		"input" => "text",
		"value" => $field_value ? $field_value : "",
		"helps" => __(
			"Optional: Name of Site, this is the site or company responsible for the picture."
		),
	];

	// Attribution Source
	$form_fields["attribution_source"] = [
		"label" => __("Attribution Source"),
		"input" => "text",
		"value" => $field_value ? $field_value : "",
		"helps" => __(
			"Name of Source. Typically this is the aggregator, such as Creative Commons or GettyPictures"
		),
	];

	return $form_fields;
}

// Assigns the posts meta value to attribute
function test_attachment($attachment_id, $attachment_attribute) {
	if (isset($_REQUEST["attachments"][$attachment_id][$attachment_attribute])) {
		$custom_media_style =
			$_REQUEST["attachments"][$attachment_id][$attachment_attribute];
		update_post_meta($attachment_id, $attachment_attribute, $custom_media_style);
	}
}

function save_attachment($attachment_id)
{	
	// Attribution Name
	test_attachment($attachment_id, "attribution_name");

	// Attribution Site
	test_attachment($attachment_id, "attribution_site");

	// Attribution Source
	test_attachment($attachment_id, "attribution_source");
}

// Adds attribution to pictures
add_filter("attachment_fields_to_edit", "add_field", null, 2);
add_action("edit_attachment", "save_attachment");

// Loads Scripts
add_action("wp_enqueue_scripts", "miliband_scripts");

// Adds in extra theme support
add_theme_support("title-tag");
add_theme_support("post-thumbnails");
