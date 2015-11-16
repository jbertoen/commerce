<?php

/**
 * @file
 * Contains \Drupal\commerce_product\Entity\ProductVariationType.
 */

namespace Drupal\commerce_product\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;

/**
 * Defines the Product Variation Type entity.
 *
 * @ConfigEntityType(
 *   id = "commerce_product_variation_type",
 *   label = @Translation("Product variation type"),
 *   handlers = {
 *     "list_builder" = "Drupal\commerce_product\ProductVariationTypeListBuilder",
 *     "form" = {
 *       "add" = "Drupal\commerce_product\Form\ProductVariationTypeForm",
 *       "edit" = "Drupal\commerce_product\Form\ProductVariationTypeForm",
 *       "delete" = "Drupal\commerce_product\Form\ProductVariationTypeDeleteForm"
 *     }
 *   },
 *   config_prefix = "commerce_product_variation_type",
 *   admin_permission = "administer product types",
 *   bundle_of = "commerce_product_variation",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *   },
 *   links = {
 *     "edit-form" =   "/admin/commerce/config/product-variation-types/{commerce_product_variation_type}/edit",
 *     "delete-form" = "/admin/commerce/config/product-variation-types/{commerce_product_variation_type}/delete",
 *     "collection" =  "/admin/commerce/config/product-variation-types"
 *   }
 * )
 */
class ProductVariationType extends ConfigEntityBundleBase implements ProductVariationTypeInterface {

  /**
   * The product variation type id.
   *
   * @var string
   */
  protected $id;

}
