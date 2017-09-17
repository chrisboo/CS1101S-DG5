    <?php include($_SERVER['DOCUMENT_ROOT']."/cs1101s/layout/header.php");?>
    <div class="container">
      <!-- Main content here -->
      <h1>
        Discussion Group Exercises
      </h1>

      <div class="card">
        <h4 class="card-header">Problem 1</h4>
        <div class="card-body">
          <code class="prettyprint language-javascript">
<?php include($_SERVER['DOCUMENT_ROOT']."/cs1101s/programs/2/p1.js"); ?>
          </code>

          <p>An alternative solution that uses conditional statements:</p>

          <code class="prettyprint language-javascript">
<?php include($_SERVER['DOCUMENT_ROOT']."/cs1101s/programs/2/p1-alt.js"); ?>
          </code>
        </div>
      </div>

      <div class="card">
        <h4 class="card-header">Problem 2</h4>
        <div class="card-body">
          <code class="prettyprint language-javascript">
<?php include($_SERVER['DOCUMENT_ROOT']."/cs1101s/programs/2/p2.js"); ?>
          </code>
        </div>
      </div>

      <div class="card">
        <h4 class="card-header">Problem 3</h4>
        <div class="card-body">
          <code class="prettyprint language-javascript">
<?php include($_SERVER['DOCUMENT_ROOT']."/cs1101s/programs/2/p3.js"); ?>
          </code>
        </div>
      </div>

      <div class="card">
        <h4 class="card-header">Problem 4</h4>
        <div class="card-body">
          <p>Remember to make use of abstractions, ie. apply the functions defined previously. This makes the program more readable.</p>
          <code class="prettyprint language-javascript">
<?php include($_SERVER['DOCUMENT_ROOT']."/cs1101s/programs/2/p4.js"); ?>
          </code>
        </div>
      </div>

      <div class="card">
        <h4 class="card-header">Problem 5</h4>
        <div class="card-body">
          <code class="prettyprint language-javascript">
<?php include($_SERVER['DOCUMENT_ROOT']."/cs1101s/programs/2/p5.js"); ?>
          </code>
        </div>
      </div>

      <div class="card">
        <h4 class="card-header">Problem 6</h4>
        <div class="card-body">
          <code class="prettyprint language-javascript">
<?php include($_SERVER['DOCUMENT_ROOT']."/cs1101s/programs/2/p6.js"); ?>
          </code>
        </div>
      </div>

      <div class="card">
        <h4 class="card-header">Problem 7</h4>
        <div class="card-body">
          <code class="prettyprint language-javascript">
<?php include($_SERVER['DOCUMENT_ROOT']."/cs1101s/programs/2/p7.js"); ?>
          </code>
        </div>
      </div>

      <div class="card">
        <h4 class="card-header">Problem 8</h4>
        <div class="card-body">
          <code class="prettyprint language-javascript">
<?php include($_SERVER['DOCUMENT_ROOT']."/cs1101s/programs/2/p8.js"); ?>
          </code>
        </div>
      </div>

      <div class="alert alert-info" role="alert">
        <h4 class="alert-heading">Error Checking</h4>
        <p>The provided solutions do not include error checking. It is good to do additionals checks, but I am fine if you ignore them.</p>
      </div>

      <h1>Expressions and Statements</h1>

      <div class="card">
        <h4 class="card-header">Expressions</h4>
        <div class="card-body">
          <p>An expression evaluates to a single value. The value may be a number, logical value or a function value.</p>
          <div class="row">
            <div class="col-4">
              <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-primitive-list" data-toggle="list" href="#list-primitive" role="tab" aria-controls="primitive">Primitive Expressions</a>
                <a class="list-group-item list-group-item-action" id="list-function-list" data-toggle="list" href="#list-function" role="tab" aria-controls="function">Function Expressions</a>
                <a class="list-group-item list-group-item-action" id="list-conditional-list" data-toggle="list" href="#list-conditional" role="tab" aria-controls="conditional">Conditional Expressions</a>
              </div>
            </div>
            <div class="col-8">
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-primitive" role="tabpanel" aria-labelledby="list-primitive-list">
                  <p>Primitive expressions are the simplest entities JavaScript is concerned with. One simple kind of expression is a number. For example, <tt>382</tt> and <tt>74 + 43</tt> are both primitive expressions.</p>
                </div>
                <div class="tab-pane fade" id="list-function" role="tabpanel" aria-labelledby="list-function-list">
                  <p>Function expressions has the form</p>
                  <code class="prettyprint language-javascript">
function (&ltformal parameters&gt) {&ltbody&gt}
                  </code>
                </div>
                <div class="tab-pane fade" id="list-conditional" role="tabpanel" aria-labelledby="list-conditional-list">
                  <p>Conditional expressions has the form</p>
                  <code class="prettyprint language-javascript">
&ltpredicate&gt ? &ltconsequent-expression&gt : &ltalternative-expression&gt
                  </code>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card">
        <h4 class="card-header">Statements</h4>
        <div class="card-body">
          <p>JavaScript programs are called statements.</p>
          <div class="row">
            <div class="col-4">
              <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-exp-list" data-toggle="list" href="#list-exp" role="tab" aria-controls="exp">Expression Statement</a>
                <a class="list-group-item list-group-item-action" id="list-var-list" data-toggle="list" href="#list-var" role="tab" aria-controls="var">Variable Statement</a>
                <a class="list-group-item list-group-item-action" id="list-fun-list" data-toggle="list" href="#list-fun" role="tab" aria-controls="fun">Function Definition Statement</a>
                <a class="list-group-item list-group-item-action" id="list-con-list" data-toggle="list" href="#list-con" role="tab" aria-controls="con">Conditional Statement</a>
              </div>
            </div>
            <div class="col-8">
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-exp" role="tabpanel" aria-labelledby="list-exp-list">
                  <p>Expression statements consists of an expression that is followed by a semicolon. For example</p>
                  <code class="prettyprint language-javascript">
382;
74 + 43;
                  </code>
                  <p>are all expression statements</p>
                </div>
                <div class="tab-pane fade" id="list-var" role="tabpanel" aria-labelledby="list-var-list">
                  <p>Variable statement has the form</p>
                  <code class="prettyprint language-javascript">
var &ltname&gt = &ltexpression&gt
                  </code>
                </div>
                <div class="tab-pane fade" id="list-fun" role="tabpanel" aria-labelledby="list-fun-list">
                  <p>Function definition statement has the form</p>
                  <code class="prettyprint language-javascript">
function &ltname&gt (&ltformal parameters&gt) {&ltbody&gt}
                  </code>
                </div>
                <div class="tab-pane fade" id="list-con" role="tabpanel" aria-labelledby="list-con-list">
                  <p>Conditional statement has the form</p>
                  <code class="prettyprint language-javascript">
if (&ltpredicate&gt)
  &ltconsequent-expressions&gt
else
  &ltalternative-expressions&gt
                  </code>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include($_SERVER['DOCUMENT_ROOT']."/cs1101s/layout/footer.php");?>