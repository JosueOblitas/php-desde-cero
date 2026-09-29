<?php
declare(strict_types=1);

$json = <<<'JSON'
{
  "numero": 10,
  "carpeta": "10-poo-avanzada",
  "titulo": "POO avanzada",
  "categoria": "diseño",
  "descripcion": "Conecta objetos mediante interfaces, herencia y composición para modelar reglas reales.",
  "subtitulo": "Contratos, especialización y colaboración",
  "conceptos": [
    "Una interfaz define métodos que una clase debe ofrecer.",
    "Una clase abstracta comparte comportamiento y deja métodos pendientes a sus hijas.",
    "La composición reúne objetos para que colaboren sin crear una jerarquía innecesaria.",
    "El polimorfismo permite trabajar con objetos distintos a través de un mismo contrato."
  ],
  "codigo": "<?php\ninterface AreaCalculable { public function area(): float; }\nfinal class Cuadrado implements AreaCalculable {\n    public function __construct(private float $lado) {}\n    public function area(): float { return $this->lado * $this->lado; }\n}\necho (new Cuadrado(3.0))->area(); // 9",
  "explicacion_resultado": "El objeto cumple el contrato del área y calcula 3 × 3.",
  "nota": "El reto avanzado reúne varias líneas de pedido sin acoplar el cálculo a un solo producto.",
  "siguiente": "Sigue con errores y excepciones",
  "ejercicios": [
    {
      "nivel": "basico",
      "archivo": "Rectangulo.php",
      "test": "RectanguloTest.php",
      "descripcion": "implementa una interfaz que exige calcular el área."
    },
    {
      "nivel": "intermedio",
      "archivo": "Vendedor.php",
      "test": "VendedorTest.php",
      "descripcion": "extiende una clase abstracta y calcula sueldo base más comisión."
    },
    {
      "nivel": "avanzado",
      "archivo": "Pedido.php",
      "test": "PedidoTest.php",
      "descripcion": "compone líneas de pedido y obtiene el total sin perder cantidades ni precios."
    }
  ]
}
JSON;
$lesson = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
$lesson['resultado'] = (string) (3.0 * 3.0) . ' unidades cuadradas';
require __DIR__ . '/../../includes/teoria-template.php';
