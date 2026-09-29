<?php
declare(strict_types=1);

/** Material adicional compartido por las páginas de teoría. */
return [
    1 => [
        'ideas' => [
            'PHP se ejecuta antes de enviar la respuesta: el navegador recibe el HTML resultante. Por eso el código fuente de la página no muestra las variables PHP.',
            'Concatenar con el punto une cadenas. Antes de colocar un dato variable dentro de HTML, conviértelo con htmlspecialchars() para que caracteres como < y & se vean como texto.',
        ],
        'codigo' => '$nombre = "<Ada>";\necho "<p>" . htmlspecialchars($nombre, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8") . "</p>";',
        'resultado' => 'El navegador muestra <Ada> como texto dentro del párrafo; no interpreta ese nombre como etiqueta.',
        'preguntas' => ['¿Qué recibe el navegador cuando PHP termina de ejecutar un archivo?', 'Si $nombre contiene <b>Ada</b>, ¿qué riesgo hay al imprimirlo sin escapar?', '¿Qué cambia si usas el punto para unir dos cadenas en vez de escribirlas por separado?'],
        'archivo' => 'crear-enlace.php', 'test' => 'EnlaceTest.php',
        'reto' => 'Construye un enlace HTML con URL y texto escapados; conserva las comillas dobles de los atributos.',
    ],
    2 => [
        'ideas' => [
            'Una variable guarda un valor y su tipo puede comprobarse con get_debug_type(). Con declare(strict_types=1), una llamada a una función tipada rechaza valores de otro tipo en vez de convertirlos silenciosamente.',
            'Una conversión explícita como (int) cambia el tipo, pero puede perder información. Para dinero, evita convertir decimales a enteros sin definir antes cómo redondear.',
        ],
        'codigo' => '$cantidad = 3;\n$precio = 2.50;\n$total = $cantidad * $precio;\necho get_debug_type($total); // double',
        'resultado' => 'Multiplicar un entero por un decimal produce un valor decimal: 7.5.',
        'preguntas' => ['¿Qué tipo devuelve la multiplicación del ejemplo?', '¿Qué perderías al convertir 7.5 a int?', '¿Cuándo conviene declarar bool en lugar de usar 0 y 1?'],
        'archivo' => 'resumir-compra.php', 'test' => 'ResumenCompraTest.php',
        'reto' => 'Devuelve una ficha con cantidad entera, precio decimal, total decimal y un booleano que indique si hay unidades.',
    ],
    3 => [
        'ideas' => [
            '=== compara valor y tipo; == permite conversiones que pueden sorprender. Una condición compuesta con && exige que ambas partes sean verdaderas.',
            'En una cadena if/elseif el orden importa: valida primero los datos fuera de rango y después clasifica los casos válidos. Usa límites inclusivos con <= y >= cuando corresponda.',
        ],
        'codigo' => '$edad = 18;\n$tienePermiso = true;\necho $edad >= 18 && $tienePermiso ? "Puede entrar" : "No puede entrar";',
        'resultado' => 'La salida es “Puede entrar” porque ambas condiciones se cumplen.',
        'preguntas' => ['¿Qué ocurre si $edad vale 17?', '¿Por qué 18 debe probarse como caso límite?', '¿Qué diferencia existe entre === y == al comparar 0 con "0"?'],
        'archivo' => 'calcular-envio.php', 'test' => 'EnvioTest.php',
        'reto' => 'Calcula el costo de envío: rechaza montos negativos; es gratis desde 100, cuesta 10 desde 50 y 20 por debajo.',
    ],
    4 => [
        'ideas' => [
            'Un array indexado representa una secuencia; uno asociativo relaciona claves con valores. foreach recorre ambos y permite leer la clave y el valor.',
            'Acceder a una clave inexistente genera avisos. El operador ?? permite definir un valor alternativo, mientras que array_key_exists() distingue una clave presente con null de una ausente.',
        ],
        'codigo' => '$producto = ["nombre" => "Lápiz", "stock" => 0];\necho $producto["stock"] ?? 10; // 0\necho array_key_exists("stock", $producto) ? " existe" : " falta";',
        'resultado' => 'La clave stock existe y vale 0; el valor alternativo no se utiliza.',
        'preguntas' => ['¿Por qué 0 no debe confundirse con una clave ausente?', '¿Qué devuelve count([])?', '¿Cuándo usarías un array asociativo para un producto?'],
        'archivo' => 'agrupar-cantidades.php', 'test' => 'AgruparCantidadesTest.php',
        'reto' => 'Agrupa líneas con nombre y cantidad; suma las cantidades de nombres repetidos y conserva el orden de aparición.',
    ],
    5 => [
        'ideas' => [
            'for sirve cuando conoces el contador; foreach es más claro para recorrer arrays. while repite hasta que la condición deja de cumplirse.',
            'Inicializa el acumulador antes del bucle. En problemas con duplicados, compara cada elemento con lo ya acumulado o utiliza una estructura por clave.',
        ],
        'codigo' => '$suma = 0;\nforeach ([2, 4, 6] as $numero) {\n    $suma += $numero;\n}\necho $suma; // 12',
        'resultado' => 'El acumulador empieza en 0 y termina en 12 después de tres iteraciones.',
        'preguntas' => ['¿Qué valor tiene $suma después de la segunda vuelta?', '¿Qué bucle elegirías para recorrer claves y valores?', '¿Qué puede causar un while sin actualización de su condición?'],
        'archivo' => 'tabla-frecuencias.php', 'test' => 'FrecuenciasTest.php',
        'reto' => 'Cuenta las apariciones de cada palabra usando un recorrido; conserva las palabras tal como llegan.',
    ],
    6 => [
        'ideas' => [
            'La firma de una función comunica qué recibe y qué devuelve. Un valor predeterminado convierte un parámetro en opcional y debe ir después de los obligatorios.',
            'return termina la ejecución de la función. Para separar responsabilidades, una función pequeña puede validar y otra transformar; no dependas de variables globales.',
        ],
        'codigo' => 'function porcentaje(float $parte, float $total): float\n{\n    return $total === 0.0 ? 0.0 : ($parte / $total) * 100;\n}\necho porcentaje(1, 4); // 25',
        'resultado' => 'La función devuelve 25 porque 1 representa un cuarto de 4.',
        'preguntas' => ['¿Por qué se comprueba el total antes de dividir?', '¿Qué valor devuelve la función si el total es 0?', '¿Cuál es la diferencia entre echo y return?'],
        'archivo' => 'aplicar-operacion.php', 'test' => 'OperacionTest.php',
        'reto' => 'Recibe dos números y una operación (sumar, restar o multiplicar); devuelve el resultado o null si la operación no existe.',
    ],
    7 => [
        'ideas' => [
            'Cada objeto tiene su propio estado. Dos instancias de la misma clase pueden contener valores distintos aunque compartan los mismos métodos.',
            'Las propiedades private se modifican desde métodos que hacen cumplir reglas. Un constructor puede establecer un estado inicial válido y evitar objetos incompletos.',
        ],
        'codigo' => 'final class Marcador {\n    public function __construct(private int $puntos = 0) {}\n    public function sumar(int $valor): void { $this->puntos += $valor; }\n    public function puntos(): int { return $this->puntos; }\n}',
        'resultado' => 'Cada Marcador creado con new conserva sus propios puntos.',
        'preguntas' => ['¿Por qué una propiedad private no debe cambiarse directamente desde fuera?', '¿Qué hace $this dentro de sumar()?', '¿Qué pasa si creas dos marcadores y cambias solo uno?'],
        'archivo' => 'Inventario.php', 'test' => 'InventarioTest.php',
        'reto' => 'Crea un inventario con stock inicial no negativo; permite añadir y retirar unidades sin dejar el stock bajo cero.',
    ],
    8 => [
        'ideas' => [
            'strlen() mide bytes, mientras que mb_strlen() mide caracteres Unicode. En UTF-8 una letra acentuada puede ocupar más de un byte.',
            'Una expresión regular sirve para validar una forma concreta. Ancla el principio y el final del texto cuando quieras validar toda la entrada, no solo un fragmento.',
        ],
        'codigo' => '$texto = "niñez";\necho mb_strlen($texto, "UTF-8"); // 5\necho preg_match("/^[\\p{L}]+$/u", $texto); // 1',
        'resultado' => 'El texto contiene cinco caracteres y solo letras Unicode.',
        'preguntas' => ['¿Por qué strlen() puede dar otro número?', '¿Qué significan ^ y $ en un patrón?', '¿Qué comprueba el modificador u?'],
        'archivo' => 'extraer-etiquetas.php', 'test' => 'EtiquetasTest.php',
        'reto' => 'Extrae etiquetas # de un texto Unicode, pásalas a minúsculas y elimina repeticiones manteniendo el orden.',
    ],
    9 => [
        'ideas' => [
            'DateTimeImmutable devuelve un objeto nuevo al modificar una fecha; conserva intacta la fecha original. DateInterval expresa un cambio de tiempo.',
            'La zona horaria influye en horas y cambios de día. Para fechas civiles, compara objetos creados con una zona explícita y valida el formato de entrada.',
        ],
        'codigo' => '$fecha = new DateTimeImmutable("2024-02-28", new DateTimeZone("UTC"));\necho $fecha->modify("+1 day")->format("Y-m-d"); // 2024-02-29',
        'resultado' => 'El año 2024 es bisiesto; sumar un día al 28 de febrero produce el 29.',
        'preguntas' => ['¿Cambia el objeto original tras modify()?', '¿Qué ocurre al sumar un día al 29 de febrero de 2024?', '¿Por qué conviene fijar la zona horaria?'],
        'archivo' => 'listar-dias.php', 'test' => 'ListarDiasTest.php',
        'reto' => 'Genera todas las fechas YYYY-MM-DD entre dos fechas inclusivas; devuelve [] si el inicio es posterior al fin.',
    ],
    10 => [
        'ideas' => [
            'Una interfaz define operaciones que otras clases prometen ofrecer. La composición permite que un objeto delegue una tarea a otro sin heredar toda su implementación.',
            'Las clases final evitan herencia cuando no necesitas variaciones por subclase. Los tipos de retorno y readonly aclaran qué partes del estado pueden cambiar.',
        ],
        'codigo' => 'interface Descuento { public function aplicar(float $monto): float; }\nfinal class SinDescuento implements Descuento {\n    public function aplicar(float $monto): float { return $monto; }\n}',
        'resultado' => 'Una clase que implementa Descuento debe definir aplicar() con el contrato indicado.',
        'preguntas' => ['¿Qué debe implementar una clase que declara implements Descuento?', '¿Qué ventaja aporta recibir una interfaz en un constructor?', '¿Qué restringe final?'],
        'archivo' => 'Factura.php', 'test' => 'FacturaTest.php',
        'reto' => 'Modela líneas de factura con precio y cantidad válidos; compón una factura que calcula subtotal e impuesto configurable.',
    ],
    11 => [
        'ideas' => [
            'Una excepción interrumpe el flujo normal cuando una operación no puede completarse. try/catch permite responder en un nivel capaz de decidir qué hacer.',
            'Lanza excepciones para entradas inválidas que el contrato no puede representar con un resultado normal. Captura el tipo concreto cuando sabes cómo recuperarte y deja que los demás errores se propaguen.',
        ],
        'codigo' => 'function edadValida(int $edad): int {\n    if ($edad < 0) { throw new InvalidArgumentException("Edad negativa"); }\n    return $edad;\n}',
        'resultado' => 'Una edad negativa produce InvalidArgumentException; las edades válidas se devuelven.',
        'preguntas' => ['¿En qué caso se ejecuta catch?', '¿Por qué una edad negativa no debería devolverse como edad válida?', '¿Qué hace finally aun si hay una excepción?'],
        'archivo' => 'procesar-lote.php', 'test' => 'ProcesarLoteTest.php',
        'reto' => 'Procesa una lista de divisiones: devuelve resultados y errores por posición sin detener todo el lote.',
    ],
    12 => [
        'ideas' => [
            'Un namespace agrupa nombres para evitar choques entre clases. Composer puede encontrar clases siguiendo PSR-4, que relaciona prefijos con carpetas.',
            'use crea un alias legible para una clase externa; no carga el archivo por sí solo. El autoloader generado por Composer se encarga de resolver la ruta.',
        ],
        'codigo' => 'namespace Curso\\Tema12;\nfinal class Etiqueta { public function __construct(public readonly string $texto) {} }',
        'resultado' => 'La clase Etiqueta pertenece a Curso\\Tema12 y puede cargarse desde la carpeta configurada en Composer.',
        'preguntas' => ['¿Qué ruta corresponde a Curso\\Tema12\\Etiqueta?', '¿Qué problema resuelve el namespace?', '¿Cuándo hay que regenerar el autoload de Composer?'],
        'archivo' => 'Etiqueta.php', 'test' => 'EtiquetaNamespaceTest.php',
        'reto' => 'Crea una clase Etiqueta en Curso\\Tema12 que recorte espacios del texto y devuelva una representación entre corchetes.',
    ],
    13 => [
        'ideas' => [
            'file_get_contents() y file_put_contents() trabajan con archivos completos. Comprueba el resultado porque false indica un fallo de lectura o escritura.',
            'json_decode() con JSON_THROW_ON_ERROR diferencia JSON inválido de un valor JSON válido igual a null. Para archivos grandes, procesa líneas en lugar de cargarlo todo en memoria.',
        ],
        'codigo' => '$datos = json_decode("{\\"activo\\":true}", true, 512, JSON_THROW_ON_ERROR);\necho $datos["activo"] ? "sí" : "no";',
        'resultado' => 'La cadena JSON se convierte en un array asociativo y activo vale true.',
        'preguntas' => ['¿Qué representa true en JSON al decodificarlo?', '¿Por qué JSON_THROW_ON_ERROR ayuda a detectar archivos dañados?', '¿Cuándo conviene leer línea por línea?'],
        'archivo' => 'contar-registros.php', 'test' => 'ContarRegistrosTest.php',
        'reto' => 'Lee un archivo JSONL, cuenta registros válidos por tipo y salta líneas vacías; informa líneas inválidas.',
    ],
    14 => [
        'ideas' => [
            'Una petición HTTP tiene método, ruta, encabezados y cuerpo. GET suele consultar; POST envía datos para procesar. Siempre valida los datos recibidos.',
            'La sesión conserva datos entre peticiones usando un identificador. session_start() debe ejecutarse antes de emitir HTML cuando la página usa la sesión.',
        ],
        'codigo' => '$metodo = "POST";\n$datos = ["nombre" => "Ada"];\necho $metodo === "POST" ? trim($datos["nombre"] ?? "") : "";',
        'resultado' => 'La petición simulada produce “Ada”; una entrada ausente se vuelve cadena vacía.',
        'preguntas' => ['¿Qué dato usarías para distinguir GET de POST?', '¿Por qué validar una entrada aunque el formulario tenga required?', '¿Cuándo debe iniciarse una sesión?'],
        'archivo' => 'procesar-peticion.php', 'test' => 'ProcesarPeticionTest.php',
        'reto' => 'Procesa un formulario POST simulado y devuelve 405 para otros métodos, 422 para datos inválidos o 200 con nombre limpio.',
    ],
    15 => [
        'ideas' => [
            'PDO conecta PHP con bases de datos mediante un objeto común. prepare() separa la consulta de los valores y evita tratar los datos como SQL.',
            'Una transacción agrupa cambios que deben completarse juntos. Si una operación falla, rollBack() restaura el estado anterior.',
        ],
        'codigo' => '$stmt = $pdo->prepare("SELECT correo FROM usuarios WHERE id = :id");\n$stmt->execute(["id" => 7]);\n$correo = $stmt->fetchColumn();',
        'resultado' => 'El valor 7 se envía como parámetro; no se concatena dentro del SQL.',
        'preguntas' => ['¿Qué parte del ejemplo es SQL y qué parte es dato?', '¿Qué devuelve fetchColumn() si no hay fila?', '¿Qué problema resuelve una transacción?'],
        'archivo' => 'contar-usuarios.php', 'test' => 'ContarUsuariosTest.php',
        'reto' => 'Cuenta usuarios con un dominio de correo recibido mediante un parámetro preparado; trata % y _ como texto literal.',
    ],
    16 => [
        'ideas' => [
            'Escapar HTML protege la salida en el navegador; las consultas preparadas protegen SQL. Cada contexto necesita su tratamiento correcto.',
            'password_hash() guarda un hash, no la contraseña original; password_verify() comprueba una candidata. Para formularios con sesión, un token CSRF une la petición al usuario esperado.',
        ],
        'codigo' => '$texto = "<script>";\necho htmlspecialchars($texto, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");',
        'resultado' => 'La etiqueta aparece como texto en la página en vez de ejecutarse.',
        'preguntas' => ['¿Por qué no basta con escapar HTML para proteger SQL?', '¿Qué guardas en la base de datos al usar password_hash()?', '¿Qué debe compararse al validar un token CSRF?'],
        'archivo' => 'validar-perfil.php', 'test' => 'ValidarPerfilTest.php',
        'reto' => 'Valida un perfil con nombre y correo; devuelve errores por campo y una vista HTML escapada si todo es válido.',
    ],
    17 => [
        'ideas' => [
            'match compara de forma estricta y devuelve un valor; debes cubrir todos los casos o definir default. Un enum impide estados fuera del conjunto declarado.',
            'Un generador con yield entrega elementos uno a uno cuando se itera. Es útil para flujos grandes o cuando quieres detener el procesamiento temprano.',
        ],
        'codigo' => '$tipo = match (true) {\n    200 >= 200 && 200 < 300 => "éxito",\n    default => "otro",\n};\necho $tipo;',
        'resultado' => 'La rama booleana coincide y devuelve “éxito”.',
        'preguntas' => ['¿Qué ocurre si match no encuentra rama ni default?', '¿Cuándo produce valores un generador?', '¿Qué asegura un enum respecto a los estados posibles?'],
        'archivo' => 'filtrar-eventos.php', 'test' => 'FiltrarEventosTest.php',
        'reto' => 'Devuelve un generador que filtra eventos por estado y transforma cada evento con un callable al iterar.',
    ],
    18 => [
        'ideas' => [
            'Un comando CLI recibe argumentos en $argv. El primer elemento es el nombre del script; los demás pueden contener opciones o valores posicionales.',
            'La configuración del entorno permite cambiar el comportamiento sin editar código. Un comando debe producir una salida predecible y señalar claramente las opciones inválidas.',
        ],
        'codigo' => '$argv = ["reporte.php", "--formato=csv"];\n$opcion = explode("=", $argv[1], 2);\necho $opcion[1]; // csv',
        'resultado' => 'El segundo argumento aporta el valor csv para la opción formato.',
        'preguntas' => ['¿Qué contiene $argv[0]?', '¿Por qué limitar explode() a dos partes?', '¿Cómo elegirías un valor predeterminado para una variable de entorno ausente?'],
        'archivo' => 'generar-reporte.php', 'test' => 'GenerarReporteTest.php',
        'reto' => 'Genera un reporte de texto o CSV desde registros y una opción de formato; rechaza formatos desconocidos.',
    ],
];
