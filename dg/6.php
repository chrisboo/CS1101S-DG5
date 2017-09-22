    <?php include($_SERVER['DOCUMENT_ROOT']."/cs1101s/layout/header.php");?>
    <div class="container">
      <!-- Main content here -->
      <h1>
        Discussion Group Exercises
      </h1>

      <div class="alert alert-info" role="alert">
        <h4 class="alert-heading">Wishful Thinking</h4>
        <p>
          This week, problems are focused on recursion and higher-order functions. The most efficient way to tackle these questions is wishful thinking. It is not a hard concept, but a good programmer trust and follow it to its full extent, and so should you.
        </p>
        <p>
          I often hear the phrase, "and then it recursively solve the tail, then tail again, ... until when we reach an empty list." There is nothing wrong with this methodology, but it wouldn't get you far, especially when the function gets complicated. In the solutions below, I will add the way I approaches the problem, and hopefully convince you with the strength of Wishful Thinking.
        </p>
      </div> 

      <div class="card">
        <h4 class="card-header">Problem 1</h4>
        <div class="card-body">
          <p>This is the solution provided by Arsalan and Wai Lun.</p>
          <code class="prettyprint language-javascript">
<?php include($_SERVER['DOCUMENT_ROOT']."/cs1101s/programs/6/p1-a.js"); ?>
          </code>
          <p>The idea is to remove duplicates and <tt>head(lst)</tt> from <tt>tail(lst)</tt>. Then, add <tt>head(lst)</tt> to it.</p>
          <p>Another way is to use accumulate.</p>
          <code class="prettyprint language-javascript">
<?php include($_SERVER['DOCUMENT_ROOT']."/cs1101s/programs/6/p1-b.js"); ?>
          </code>
        </div>
      </div>

      <div class="card">
        <h4 class="card-header">Problem 2</h4>
        <div class="card-body">
          <code class="prettyprint language-javascript">
<?php include($_SERVER['DOCUMENT_ROOT']."/cs1101s/programs/6/p2.js"); ?>
          </code>
          <p>
            One of you asked a very good question: Why is it the case when <tt>x</tt> equals to 0, we return a list containing an empty list, instead of just an empty list?
          </p>
          <p>
            Think again what is the definition of the <tt>makeup_amount</tt>: it returns a list of lists, such that each sub-list of the result contains a valid combination to make up <tt>x</tt>. In other words, we return a list of combinations, where each combination is represented as a list. Following this definition, what should we return when there is nothing to make up for? The first question to think is, are there any valid combinations? Yes, there's one - using no coins to make up the amount 0 - which is represented as an empty list. Then, the definition of the function is to return a list that contains all possible combination, hence it's <tt>list([])</tt>.
          </p>
        </div>
      </div>

      <div class="card">
        <h4 class="card-header">Problem 3</h4>
        <div class="card-body">
          <code class="prettyprint language-javascript">
<?php include($_SERVER['DOCUMENT_ROOT']."/cs1101s/programs/6/p3.js"); ?>
          </code>
        </div>
      </div>

      <div class="card">
        <h4 class="card-header">Problem 5</h4>
        <div class="card-body">
          <p>First, let's look at how normal permutation function works.</p>
          <code class="prettyprint language-javascript">
<?php include($_SERVER['DOCUMENT_ROOT']."/cs1101s/programs/6/p5-ref.js"); ?>
          </code>
          <p>
            For each element in the list, you take it out. Then, permutate the rest of the list (Wishful Thinking: our <tt>permutations</tt> works!). After that, insert the removed element as the head of the list. After doing these for all the elements in the list, you have all permutations. This is a high-level idea - I never mentioned anything about <tt>map</tt> or <tt>accumulate</tt>. It is important to see the big picture first, then only figure out the implementation details. Think more, less code.
          </p>
          <p>
            For the tutorial question.
          </p>
          <code class="prettyprint language-javascript">
<?php include($_SERVER['DOCUMENT_ROOT']."/cs1101s/programs/6/p5.js"); ?>
          </code>
          <p>Can you spot what assumption has been made in the function above?</p>
        </div>
      </div>
    </div>

    <?php include($_SERVER['DOCUMENT_ROOT']."/cs1101s/layout/footer.php");?>