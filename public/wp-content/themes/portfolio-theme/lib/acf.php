<?php

add_filter('acf/settings/save_json', 'json_export');

  /**
   * Automatically export ACF field groups on save
   *
   * @link https://www.advancedcustomfields.com/resources/local-json/
   * @param string $acf_export_path
   * @return void
   */
    function json_export($acf_export_path) {
        // update path
        $acf_export_path = get_stylesheet_directory() . '/includes/acf-groups' ;

        // return
        return $acf_export_path;
    }

add_filter('acf/settings/load_json', 'json_import');

/**
 * Set ACF JSON Directory to automatically import exported json files
 *
 * @link https://www.advancedcustomfields.com/resources/local-json/
 * @param string $acf_export_paths
 * @return void
 */
  function json_import($acf_export_paths) {
      // remove original path (optional)
      unset($acf_export_paths[0]);

      // append path
      $acf_export_paths[] = get_stylesheet_directory() . '/includes/acf-groups';
      // return
      return $acf_export_paths;
  }

add_action('acf/init', 'my_acf_register_custom_blocks');
function my_acf_register_custom_blocks() {
    // Check function exists.
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type([
            'name'              => 'cta',
            'title'             => __('Call to Action'),
            'description'       => __('A custom CTA block.'),
            'render_template'   => 'components/blocks/cta.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => ['cta', 'call to action', 'action', 'row'],
        ]);
    }
}
