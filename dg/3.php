    <?php include($_SERVER['DOCUMENT_ROOT']."/cs1101s/layout/header.php");?>
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
<?php include($_SERVER['DOCUMENT_ROOT']."/cs1101s/programs/3/p1.js"); ?>
          </code>
        </div>
      </div>

      <div class="card">
        <h4 class="card-header">Problem 2</h4>
        <div class="card-body">
          <code class="prettyprint language-javascript">
<?php include($_SERVER['DOCUMENT_ROOT']."/cs1101s/programs/3/p2.js"); ?>
          </code>
          <p>Alternatively, here is a more sophisticated solution from Arsalan:</p>
          <code class="prettyprint language-javascript">
<?php include($_SERVER['DOCUMENT_ROOT']."/cs1101s/programs/3/p2-alt.js"); ?>
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
<?php include($_SERVER['DOCUMENT_ROOT']."/cs1101s/programs/3/p6.js"); ?>
          </code>
        </div>
      </div>
    </div>

    <?php include($_SERVER['DOCUMENT_ROOT']."/cs1101s/layout/footer.php");?>