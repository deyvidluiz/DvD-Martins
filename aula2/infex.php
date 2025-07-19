<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Mousepad PHP - Consulta Rápida</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 0; display: flex; }
    nav { background: #222; color: white; width: 250px; height: 100vh; padding: 20px; overflow-y: auto; }
    nav a { display: block; color: #ddd; margin-bottom: 10px; text-decoration: none; }
    nav a:hover { color: #0ff; }
    main { padding: 20px; flex: 1; background: #f4f4f4; overflow-y: auto; }
    section { margin-bottom: 40px; }
    code, pre { background: #eee; padding: 10px; display: block; border-left: 3px solid #999; }
    h2 { border-bottom: 1px solid #ccc; padding-bottom: 5px; }
  </style>
</head>
<body>

  <nav>
    <h2>🖱 Mousepad PHP</h2>
    <a href="#sintaxe">1. Sintaxe</a>
    <a href="#variaveis">2. Variáveis</a>
    <a href="#arrays">3. Arrays</a>
    <a href="#funcoes">4. Funções</a>
    <a href="#condicoes">5. Condições</a>
    <a href="#loops">6. Loops</a>
    <a href="#objetos">7. POO</a>
    <a href="#pdo">8. PDO</a>
    <a href="#seguranca">9. Segurança</a>
    <a href="#superglobais">10. Superglobais</a>
  </nav>

  <main>
    <section id="sintaxe">
      <h2>1. Sintaxe Básica</h2>
      <pre><code>&lt;?php
echo "Olá, mundo!";
?&gt;</code></pre>
    </section>

    <section id="variaveis">
      <h2>2. Variáveis</h2>
      <pre><code>$nome = "Deyvid";
$idade = 25;</code></pre>
    </section>

    <section id="arrays">
      <h2>3. Arrays</h2>
      <pre><code>$frutas = ["maçã", "banana"];
$pessoa = ["nome" => "Deyvid", "idade" => 25];</code></pre>
    </section>

    <section id="funcoes">
      <h2>4. Funções</h2>
      <pre><code>function saudacao($nome) {
  return "Olá, $nome!";
}</code></pre>
    </section>

    <section id="condicoes">
      <h2>5. Condições</h2>
      <pre><code>if ($idade >= 18) {
  echo "Adulto";
} else {
  echo "Menor de idade";
}</code></pre>
    </section>

    <section id="loops">
      <h2>6. Loops</h2>
      <pre><code>for ($i = 0; $i &lt; 5; $i++) {
  echo $i;
}</code></pre>
    </section>

    <section id="objetos">
      <h2>7. Programação Orientada a Objetos</h2>
      <pre><code>class Pessoa {
  public $nome;
  function __construct($nome) {
    $this->nome = $nome;
  }
  function falar() {
    return "Olá, $this->nome";
  }
}</code></pre>
    </section>

    <section id="pdo">
      <h2>8. Conexão com MySQL (PDO)</h2>
      <pre><code>$pdo = new PDO("mysql:host=localhost;dbname=teste", "root", "");
$stmt = $pdo-&gt;prepare("SELECT * FROM usuarios");
$stmt-&gt;execute();
$resultados = $stmt-&gt;fetchAll();</code></pre>
    </section>

    <section id="seguranca">
      <h2>9. Segurança</h2>
      <pre><code>$input = htmlspecialchars($_POST["nome"]);
$email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);</code></pre>
    </section>

    <section id="superglobais">
      <h2>10. Superglobais</h2>
      <pre><code>$_GET, $_POST, $_SESSION, $_COOKIE, $_SERVER</code></pre>
    </section>
  </main>

</body>
</html>
