<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Week 3</title>
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
          <p>Here is a program provided by QinHua:</p>
          <code class="prettyprint language-javascript">
<?php include("./content/discussions/3/p1.js"); ?>
          </code>
        </div>
      </div>

      <div class="card">
        <h4 class="card-header">Problem 2</h4>
        <div class="card-body">
          <code class="prettyprint language-javascript">
<?php include("./content/discussions/3/p2.js"); ?>
          </code>
          <p>Alternatively, here is a more sophisticated solution from Arsalan:</p>
          <code class="prettyprint language-javascript">
<?php include("./content/discussions/3/p2-alt.js"); ?>
          </code>
          <div class="card">
            <div class="card-header" role="tab" id="headingTwo">
              <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" href="#ArsalanRemark" aria-expanded="false" aria-controls="collapseTwo">
                  Remarks on Arsalan's solution
                </a>
              </h5>
            </div>
            <div id="ArsalanRemark" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                It could be hard to reason about the correctness of this solution. One way is to compare it with the standard solution. <br><br>
                If <tt>year</tt> is not divisible by 4, does this solution also return <tt>false</tt>? <br>
                If <tt>year</tt> is divisibile by 4 but not divisible by 100, does this solution also return <tt>true</tt>? <br>
                If <tt>year</tt> is divisiblle by 4 and 100 (essentially means divisible by 100) but not 400, does this solution also return <tt>false</tt>? <br>
                If all of the above is not applicable, does this solution return <tt>true</tt>? <br><br>

                If your answer to all 4 questions above is yes, then this solution is correct!
              </div>
            </div>
          </div>
        </div>
      </div>

      <h1>Order of Growth</h1>

      <div class="card">
        <h4 class="card-header">Problem 1</h4>
        <div class="card-body">
          <div class="row">
            <div class="col">
              <iframe src="https://www.desmos.com/calculator/a3wkvrhsjw?embed" width="500px" height="500px" style="border: 1px solid #ccc" frameborder=0></iframe>
            </div>
            <div class="col">
              <dl class="row">
                <dt class="col-sm-2" style="text-align: right">Red:</dt>
                <dd class="col-sm-10">\(r_1(n)=4n^2-n\)</dd>

                <dt class="col-sm-2" style="text-align: right">Green:</dt>
                <dd class="col-sm-10">\(8n^2\)</dd>

                <dt class="col-sm-2" style="text-align: right">Yellow:</dt>
                <dd class="col-sm-10">\(n^2\)</dd>
              </dl>
              <p>
                Notice how the red function always stay between the blue and green function for sufficiently large \(n\). This is the intuition we should have when we say \(r_1(n)\) has an order of growth \(\Theta(n^2)\) - it can be bound by two functions \(c_1n^2\) and \(c_2n^2\) where \(c_1, c_2\) are suitable coefficient.
              </p>
              <p>
                Having this diagram in mind, the definition of \(\Theta\) notation should be clearer:
              </p>
              <blockquote class="blockquote">
                We say \(f(n)\) has an order of growth of \(\Theta(g(n))\) if there exist \(k_1, k_2, n_0\) such that \(k_1g(n)\leq f(n) \leq k_2g(n)\) for \(n > n_0\).
              </blockquote>
              <p>
                In this case, \(f(n)=4n^2-n, g(n)=n^2, k_1=1, k_2=8\).
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="card">
        <h4 class="card-header">Problem 2</h4>
        <div class="card-body">
          <div class="row">
            <div class="col">
              <iframe src="https://www.desmos.com/calculator/s2g0wrczfa?embed" width="500px" height="500px" style="border: 1px solid #ccc" frameborder=0></iframe>
            </div>
            <div class="col">
              <dl class="row">
                <dt class="col-sm-2" style="text-align: right">Red:</dt>
                <dd class="col-sm-10">\(r_2(n)=10n\log n\)</dd>

                <dt class="col-sm-2" style="text-align: right">Blue:</dt>
                <dd class="col-sm-10">\(n^2\)</dd>
              </dl>
              <p>
                The red function always stay under the blue function for sufficiently large \(n\). Although there are some part where the blue function falls under the red function, it doesn't affect our conclusion. Remember, we only look at sufficiently large \(n\) without caring the details when \(n\) is small. As long as the blue function dominates the red function in the long run, we can say the red function has an order of growth of \(O(\text{blue function})\).
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="card">
        <h4 class="card-header">Problem 3</h4>
        <div class="card-body">
          <div class="row">
            <div class="col">
              <iframe src="https://www.desmos.com/calculator/vpbnzv4dlj?embed" width="500px" height="500px" style="border: 1px solid #ccc" frameborder=0></iframe>
            </div>
            <div class="col">
              <dl class="row">
                <dt class="col-sm-2" style="text-align: right">Red:</dt>
                <dd class="col-sm-10">\(r_3(n)=n^3\)</dd>

                <dt class="col-sm-2" style="text-align: right">Blue:</dt>
                <dd class="col-sm-10">\(2^n\)</dd>
              </dl>
              <p>
                What do you think is the answer?
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="card">
        <h4 class="card-header">Problem 4</h4>
        <div class="card-body">
          <ol class="list-inline">
            <li class="list-inline-item">\(\Theta(n^2)\)</li>
            <li class="list-inline-item">\(\Theta(n)\)</li>
            <li class="list-inline-item">\(\Theta(3^nn^2)\)</li>
          </ol>
          <p>
            The rule of thumb is to drop constants and coefficients. For sums, take the term with a larger order, ie. \(O(1) < O(\lg n) < O(n) < O(n\lg n) < O(n^2) < O(2^n)\)
          </p>
        </div>
      </div>

      <div class="card">
        <h4 class="card-header">Problem 5</h4>
        <div class="card-body">
          <dl class="row">
            <dt class="col-sm-2" style="text-align: right">Running time:</dt>
            <dd class="col-sm-10">\(\Theta(n)\)</dd>

            <dt class="col-sm-2" style="text-align: right">Space:</dt>
            <dd class="col-sm-10">\(\Theta(n)\)</dd>
          </dl>
        </div>
      </div>

      <div class="card">
        <h4 class="card-header">Problem 6</h4>
        <div class="card-body">
          <code class="prettyprint language-javascript">
<?php include("./content/discussions/3/p6.js"); ?>
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