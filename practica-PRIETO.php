<?php
/**
 * Script de ejemplo para la práctica de documentación
 *
 * Este script demuestra el uso de docblocks para documentación
 *
 * @author Alba Prieto
 * @version 1.0
 * @package practica-PRIETO
 */

/**
 * Calcula el área de un rectángulo
 *
 * Esta función calcula el área de un rectángulo dado su largo y ancho.
 * Es un ejemplo básico de cómo documentar funciones.
 *
 * @param float $largo El largo del rectángulo
 * @param float $ancho El ancho del rectángulo
 * @return float El área del rectángulo
 */
function calcularAreaRectangulo(float $largo, float $ancho): float {
    return $largo * $ancho;
}

/**
 * Convierte grados Celsius a Fahrenheit
 *
 * Esta función realiza la conversión de temperatura de Celsius a Fahrenheit.
 * Es un ejemplo más complejo que incluye validación de datos.
 *
 * @param float $celsius La temperatura en grados Celsius
 * @return float La temperatura equivalente en Fahrenheit
 * @throws InvalidArgumentException Si la temperatura es menor que el cero absoluto
 */
function celsiusAFahrenheit(float $celsius): float {
    if ($celsius < -273.15) {
        throw new InvalidArgumentException("La temperatura no puede ser menor que el cero absoluto");
    }
    return ($celsius * 9/5) + 32;
}

// Ejemplo de uso
try {
    $area = calcularAreaRectangulo(5, 3);
    echo "El área del rectángulo es: $area metros cuadrados\n";
    
    $tempF = celsiusAFahrenheit(25);
    echo "25°C equivalen a $tempF°F\n";
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
?>