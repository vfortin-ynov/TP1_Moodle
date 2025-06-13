import { applyDiscount } from './discount.js';

describe('applyDiscount', () => {
  // Tests de cas normaux
  test('applique une remise de 10% à 100', () => {
    expect(applyDiscount(100, 10)).toBe(90);
  });

  test('applique une remise de 0% à 50', () => {
    expect(applyDiscount(50, 0)).toBe(50);
  });

  test('applique une remise de 100%', () => {
    expect(applyDiscount(200, 100)).toBe(0);
  });

  test('arrondit le résultat à 2 décimales', () => {
    expect(applyDiscount(100.567, 33.333)).toBe(67.05);
  });

  // Tests de validation des entrées
  test('lance une erreur si le total n\'est pas un nombre', () => {
    expect(() => applyDiscount('cent', 10)).toThrow('Le montant total doit être un nombre valide');
    expect(() => applyDiscount(null, 10)).toThrow('Le montant total doit être un nombre valide');
    expect(() => applyDiscount(undefined, 10)).toThrow('Le montant total doit être un nombre valide');
  });

  test('lance une erreur si le taux n\'est pas un nombre', () => {
    expect(() => applyDiscount(100, 'dix')).toThrow('Le taux de remise doit être un nombre valide');
    expect(() => applyDiscount(100, null)).toThrow('Le taux de remise doit être un nombre valide');
  });

  test('lance une erreur si le total est négatif', () => {
    expect(() => applyDiscount(-100, 10)).toThrow('Le montant total ne peut pas être négatif');
  });

  test('lance une erreur si le taux est hors limites', () => {
    expect(() => applyDiscount(100, -10)).toThrow('Le taux de remise doit être compris entre 0 et 100');
    expect(() => applyDiscount(100, 150)).toThrow('Le taux de remise doit être compris entre 0 et 100');
  });

  // Tests supplémentaires
  test('gère correctement les valeurs décimales', () => {
    expect(applyDiscount(149.99, 33.33)).toBe(100);
  });

  test('retourne 0 si le montant est 0', () => {
    expect(applyDiscount(0, 10)).toBe(0);
  });
});
