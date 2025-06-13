# TP1 - Calcul de Remise

Implémentation d'une fonction de calcul de remise en JavaScript et PHP avec tests unitaires.

## Installation

### Prérequis
- Node.js 14+ (pour JavaScript)
- PHP 8.0+ (pour PHP)
- Composer (pour les dépendances PHP)

### JavaScript
```bash
cd JavaScript
npm install
```

### PHP
```bash
cd PHP
composer install
```

## Exécution des tests

### JavaScript
```bash
cd JavaScript
# Exécuter les tests
npm test

# Afficher la couverture de code
npm test -- --coverage
```

### PHP
```bash
cd PHP
# Exécuter les tests
./vendor/bin/phpunit tests/

# Afficher la couverture de code (si configuré)
./vendor/bin/phpunit --coverage-html coverage tests/
```

## Exemples d'utilisation

### JavaScript
```javascript
import { applyDiscount } from './discount.js';
const prixFinal = applyDiscount(100, 20); // 80
```

### PHP
```php
use App\Services\DiscountService;
$prixFinal = DiscountService::applyDiscount(100, 20); // 80.0
```

## Structure
```
TP1_Moodle/
├── JavaScript/      # Implémentation JavaScript + tests
└── PHP/             # Implémentation PHP + tests
```
