<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Week 4</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/code.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/navbar.css">

    <!-- Mathjax -->
    <script type="text/javascript" async
      src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js?config=TeX-MML-AM_CHTML">
    </script>
  </head>
  <body>
    <?php include("./header.php"); ?>

    <div class="container">
      <!-- Main content here -->
      <h1>
        Discussion Group Exercises
      </h1>

      <div class="card">
        <h4 class="card-header">Problem 1</h4>
        <div class="card-body">
          <code class="prettyprint language-javascript">
<?php include("./content/discussions/4/p1.js"); ?>
          </code>
        </div>
      </div>

      <div class="card">
        <h4 class="card-header">Problem 2</h4>
        <div class="card-body">
          <p>
            The order of growth of the space and number of steps used by the process is \(O(2^k)\).
          </p>
        </div>
      </div>

      <div class="card">
        <h4 class="card-header">Problem 3</h4>
        <div class="card-body">
          <p>Recursive version:</p>
          <code class="prettyprint language-javascript">
<?php include("./content/discussions/4/p3-recursive.js"); ?>
          </code>
          <p>Iterative version:</p>
          <code class="prettyprint language-javascript">
<?php include("./content/discussions/4/p3-iterative.js"); ?>
          </code>
        </div>
      </div>

      <h1>Higher-Order Functions</h1>

      <div class="card">
        <h4 class="card-header">Function Type</h4>
        <div class="card-body">
          <p>
            The format for expressing a type is <tt>&ltfunction&gt : &ltargument-type&gt -> &ltreturn-type&gt</tt>
          </p>
        </div>
      </div>

      <div class="card">
        <h4 class="card-header">Example 1</h4>
        <div class="card-body">
          <code class="prettyprint language-javascript">
function square(x) {
    return x * x;
}
          </code>
          <p>This function has a type <tt>square : Number -> Number</tt></p>
        </div>
      </div>

      <div class="card">
        <h4 class="card-header">Example 2</h4>
        <div class="card-body">
          <code class="prettyprint language-javascript">
function h(x) {
    return function(y) {
               return x + y;
           };
}
          </code>
          <p>The function <tt>h</tt> returns a function of type <tt>Number -> Number</tt>. Hence, the function <tt>h</tt> has a type <tt>h : Number -> (Number -> Number)</tt></p>
        </div>
      </div>

      <div class="card">
        <h4 class="card-header">Example 3</h4>
        <div class="card-body">
          <code class="prettyprint language-javascript">
function f(x, y) {
    return function(z) {
               return x * y + square(z);
           };
}
          </code>
          <p>The function <tt>f</tt> takes in two numbers and returns a function of type <tt>Number -> Number</tt>. Hence, the function <tt>h</tt> has a type <tt>h : (Number, Number) -> (Number -> Number)</tt></p>
        </div>
      </div>

      <div class="card">
        <h4 class="card-header">Example 4</h4>
        <div class="card-body">
          <p>Here, <tt>f</tt> refers to the function in Example 3.</p>
          <code class="prettyprint language-javascript">
function g(x, y) {
    return f(x + y, x - y);
}
          </code>
          <p>The function <tt>g</tt> takes in two numbers and returns the evaluated result of function <tt>f</tt> with a return type <tt>Number -> Number</tt>. Hence, the function <tt>g</tt> has a type <tt>g : (Number, Number) -> (Number -> Number)</tt></p>
        </div>
      </div>

      <div class="card">
        <h4 class="card-header">Example 5</h4>
        <div class="card-body">
          <p>In this example, assume <tt>func</tt> is a function of type <tt>Number -> Number</tt>.</p>
          <code class="prettyprint language-javascript">
function apply_one_to(func) {
    return func(1);
}
          </code>
          <p>The function takes in an argument of type <tt>Number -> Number</tt>. Hence, the function <tt>apply_to_one</tt> has the type <tt>apply_one_to : (Number -> Number) -> Number</tt>.</p>
          <p>What is the result of this program?</p>
          <code class="prettyprint language-javascript">
apply_one_to(function(x) { return x + 1; });
          </code>
        </div>
      </div>

      <div class="card">
        <h4 class="card-header">Problem 4</h4>
        <div class="card-body">
          <p>Before we start working with the problems, we should simplify the <tt>thrice</tt> function. By the substitution model,</p>
          <code class="prettyprint language-javascript">
   thrice(f)
-> compose(compose(f, f), f)
-> compose(function(x) { return f(f(x)); }, f)
-> compose(g, f) where g = function(x) { return f(f(x)); }
-> function(x) { return g(f(x)); }
-> function(x) { return f(f(f(x))); }
          </code>
          <p>As you can see, thrice is just applying the same function for 3 times. Let's try (a):</p>
          <code class="prettyprint language-javascript">
   ((thrice(thrice))(add1))(6)
-> ((function(x) { return thrice(thrice(thrice(x))); })(add1))(6)
-> (thrice(thrice(thrice(add1))))(6)
-> (thrice(thrice(function(x) { return add1(add1(add1(x))); })))(6)
-> (thrice(thrice(add3)))(6) where add3 = function(x) { return add1(add1(add1(x))); }
-> (thrice(function(x) { return add3(add3(add3(x))); }))(6)
-> (thrice(add9))(6) where add9 = function(x) { return add3(add3(add3)); }
-> (function(x) { return add9(add9(add9(6))); })(6)
-> add27(6) where add27 = function(x) { return add9(add9(add9(6))); }
-> 33
          </code>
        </div>
      </div>

    </div>

    <footer class="bg-dark text-white mt-4">
      <div class="container py-3">
        <p>Contact: kaihsien.boo@u.nus.edu</p>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <!-- Code Prettify -->
    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
  </body>
</html>