<?php

class Fraction {
    protected $numerator;
    protected $denominator;

    public function __construct($numerator, $denominator) {
        $this->numerator = $numerator;
        $this->denominator = $denominator;
    }

    public function add(Fraction $fraction) {
        $resultNumerator = ($this->numerator * $fraction->denominator) + ($fraction->numerator * $this->denominator);
        $resultDenominator = $this->denominator * $fraction->denominator;

        return new Fraction($resultNumerator, $resultDenominator);
    }

    public function subtract(Fraction $fraction) {
        $resultNumerator = ($this->numerator * $fraction->denominator) - ($fraction->numerator * $this->denominator);
        $resultDenominator = $this->denominator * $fraction->denominator;

        return new Fraction($resultNumerator, $resultDenominator);
    }

    public function multiply(Fraction $fraction) {
        $resultNumerator = $this->numerator * $fraction->numerator;
        $resultDenominator = $this->denominator * $fraction->denominator;

        return new Fraction($resultNumerator, $resultDenominator);
    }

    public function divide(Fraction $fraction) {
        $resultNumerator = $this->numerator * $fraction->denominator;
        $resultDenominator = $this->denominator * $fraction->numerator;

        return new Fraction($resultNumerator, $resultDenominator);
    }

    public function displayFraction() {
        $fraction = "{$this->numerator}/{$this->denominator}";
        print $fraction;
    }
}

// Create two Fraction objects
$fraction1 = new Fraction(1, 2);
$fraction2 = new Fraction(3, 4);

// Perform addition
$sum = $fraction1->add($fraction2);
print "Sum: ";
$sum->displayFraction();
print "\n";

// Perform subtraction
$difference = $fraction1->subtract($fraction2);
print "Difference: ";
$difference->displayFraction();
print "\n";

// Perform multiplication
$product = $fraction1->multiply($fraction2);
print "Product: ";
$product->displayFraction();
print "\n";

// Perform division
$quotient = $fraction1->divide($fraction2);
print "Quotient: ";
$quotient->displayFraction();
print "\n";

?>
