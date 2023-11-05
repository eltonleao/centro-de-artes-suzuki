/**
 * Do's and don'ts block.
 *
 * @package
 */

/**
 * Internal dependencies.
 */
import Edit from "./edit";

/**
 * WordPress Dependencies.
 */
import { __ } from "@wordpress/i18n";
import { registerBlockType } from "@wordpress/blocks";
import { InnerBlocks } from "@wordpress/block-editor";

/**
 * Register block type.
 */
registerBlockType("suzuki-blocks/dos-and-donts", {
  /**
   * Block title.
   *
   * @type {string}
   */
  title: __("Dos and dont's", "suzuki"),

  /**
   * Block icon.
   *
   * @type {string}
   */
  icon: "editor-table",

  /**
   * Block description.
   *
   * @type {string}
   */
  description: __("Add headings and text", "suzuki"),

  /**
   * Block category.
   *
   * @type {string}
   */
  category: "suzuki",

  edit: Edit,

  /**
   * Save
   *
   * @return {Object} Save content.
   */
  save() {
    return (
      <div className="suzuki-dos-and-donts">
        <InnerBlocks.Content />
      </div>
    );
  },
});
