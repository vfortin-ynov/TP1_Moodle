/**
 * Fonction applyDiscount
 * @function applyDiscount
 *
 * @description
 * Fonction qui calcule le total remisé
 *
 * @param {number} total - Total à remiser
 * @param {number} rate - Taux de remise
 *
 * @returns {number} Total remisé
 *
 * @throws {Error} Si les paramètres sont invalides
 */
export function applyDiscount(total, rate) {
  // Validation des entrées
  if (typeof total !== 'number' || isNaN(total)) {
    throw new Error('Le montant total doit être un nombre valide');
  }

  if (typeof rate !== 'number' || isNaN(rate)) {
    throw new Error('Le taux de remise doit être un nombre valide');
  }

  if (total < 0) {
    throw new Error('Le montant total ne peut pas être négatif');
  }

  if (rate < 0 || rate > 100) {
    throw new Error('Le taux de remise doit être compris entre 0 et 100');
  }

  // Calcul de la remise avec arrondi à 2 décimales
  const discountedAmount = total - (total * rate / 100);
  return Math.round(discountedAmount * 100) / 100;
}
