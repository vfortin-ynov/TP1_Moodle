<?php

namespace App\Services;

/**
 * Service DiscountService
 * @class DiscountService
 * @readonly
 * @final
 *
 * @description
 * Service de gestion des remises
 *
 * @category Service
 * @package App\Services
 * @version 1.0.0
 *
 * @author Valentin FORTIN <contact@valentin-fortin.pro>
 */
final readonly class DiscountService
{
  //#region Méthodes
  /**
   * Méthode applyDiscount
   * @static
   *
   * @description
   * Applique une remise sur un total
   *
   * @access public
   * @since 1.0.0
   *
   * @param float $total Total à remiser
   * @param float $rate Taux de remise
   *
   * @return float Total remisé
   */
  public static function applyDiscount(
    float $total,
    float $rate
  ): float {
    return $total - ($total * $rate / 100);
  }
  //#endregion
}
