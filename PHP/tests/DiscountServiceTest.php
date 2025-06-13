<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Services\DiscountService;

/**
 * Classe DiscountServiceTest
 * @class DiscountServiceTest
 *
 * @description
 * Classe de test pour DiscountService
 *
 * @category Test
 * @package Tests
 * @version 1.0.0
 *
 * @author Valentin FORTIN <contact@valentin-fortin.pro>
 */
final class DiscountServiceTest extends TestCase
{
  //#region Méthodes
  /**
   * Méthode testApplyDiscountWithZeroRate
   *
   * @description
   * Test avec un taux de remise de 0%
   *
   * @access public
   * @since 1.0.0
   *
   * @return void Ne retourne rien
   */
  public function testApplyDiscountWithZeroRate(): void
  {
    $result = DiscountService::applyDiscount(100, 0);
    $this->assertEquals(100, $result);
  }

  /**
   * Méthode testApplyDiscountWithFullDiscount
   *
   * @description
   * Test avec un taux de remise de 100%
   *
   * @access public
   * @since 1.0.0
   *
   * @return void Ne retourne rien
   */
  public function testApplyDiscountWithFullDiscount(): void
  {
    $result = DiscountService::applyDiscount(200, 100);
    $this->assertEquals(0, $result);
  }

  /**
   * Méthode testApplyDiscountWithFiftyPercent
   *
   * @description
   * Test avec un taux de remise de 50%
   *
   * @access public
   * @since 1.0.0
   *
   * @return void Ne retourne rien
   */
  public function testApplyDiscountWithFiftyPercent(): void
  {
    $result = DiscountService::applyDiscount(200, 50);
    $this->assertEquals(100, $result);
  }

  /**
   * Méthode testApplyDiscountWithZeroTotal
   *
   * @description
   * Test avec un total de 0
   *
   * @access public
   * @since 1.0.0
   *
   * @return void Ne retourne rien
   */
  public function testApplyDiscountWithZeroTotal(): void
  {
    $result = DiscountService::applyDiscount(0, 20);
    $this->assertEquals(0, $result);
  }

  /**
   * Méthode testApplyDiscountWithDecimalValues
   *
   * @description
   * Test avec des valeurs décimales
   *
   * @access public
   * @since 1.0.0
   *
   * @return void Ne retourne rien
   */
  public function testApplyDiscountWithDecimalValues(): void
  {
    $result = DiscountService::applyDiscount(149.99, 33.33);
    $this->assertEqualsWithDelta(100.00, $result, 0.01);
  }

  /**
   * Méthode testApplyDiscountWithNegativeValues
   *
   * @description
   * Test avec des valeurs négatives
   *
   * @access public
   * @since 1.0.0
   *
   * @return void Ne retourne rien
   */
  public function testApplyDiscountWithNegativeValues(): void
  {
    // Test avec un total négatif
    $result = DiscountService::applyDiscount(-100, 20);
    $this->assertEquals(-80, $result);

    // Test avec un taux négatif
    $result = DiscountService::applyDiscount(100, -20);
    $this->assertEquals(120, $result);

    // Test avec les deux valeurs négatives
    $result = DiscountService::applyDiscount(-100, -20);
    $this->assertEquals(-120, $result);
  }
  //#endregion
}
