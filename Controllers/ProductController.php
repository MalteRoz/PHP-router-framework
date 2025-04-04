<?php
class ProductController
{
    public function show($params)
    {
        if (isset($params['id'])) {
            $productId = htmlspecialchars($params['id']); // Skydda mot XSS
            echo "Visar produkt med ID: " . $productId;
        } else {
            echo "Ingen produkt-ID angiven.";
        }
    }
}
