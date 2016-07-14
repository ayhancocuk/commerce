<?php

namespace Drupal\commerce_payment\Plugin\Commerce\PaymentGateway;

use Drupal\Component\Plugin\ConfigurablePluginInterface;
use Drupal\Component\Plugin\DerivativeInspectionInterface;
use Drupal\Component\Plugin\PluginInspectionInterface;
use Drupal\Core\Plugin\PluginFormInterface;

/**
 * Defines the base interface for payment gateways.
 */
interface PaymentGatewayInterface extends ConfigurablePluginInterface, PluginFormInterface, PluginInspectionInterface, DerivativeInspectionInterface {

  /**
   * Gets the payment gateway label.
   *
   * The label is admin-facing and usually includes the name of the used API.
   * For example: "Braintree (Hosted Fields)".
   *
   * @return mixed
   */
  public function getLabel();

  /**
   * Gets the payment gateway display label.
   *
   * The display label is customer-facing and more generic.
   * For example: "Braintree".
   *
   * @return string
   *   The payment gateway display label.
   */
  public function getDisplayLabel();

  /**
   * Gets the mode in which the payment gateway is operating.
   *
   * @return string
   *   The machine name of the mode.
   */
  public function getMode();

  /**
   * Gets the supported modes.
   *
   * @return string[]
   *   The mode labels keyed by machine name.
   */
  public function getSupportedModes();

  /**
   * Gets the payment type used by the payment gateway.
   *
   * @return \Drupal\commerce_payment\Plugin\Commerce\PaymentType\PaymentTypeInterface
   *   The payment type.
   */
  public function getPaymentType();

  /**
   * Gets the payment method types handled by the payment gateway.
   *
   * @return \Drupal\commerce_payment\Plugin\Commerce\PaymentMethodType\PaymentMethodTypeInterface[]
   *   The payment method types.
   */
  public function getPaymentMethodTypes();

  /**
   * Gets the plugin form with the given ID.
   *
   * @param string $form_id
   *   The form ID.
   *
   * @return \Drupal\commerce\Plugin\PluginFormInterface
   */
  public function getForm($form_id);

}
