    <?php include($_SERVER['DOCUMENT_ROOT']."/cs1101s/layout/header.php");?>
    <div class="container">
      <!-- Main content here -->
      <h1>
        Discussion Group Exercises
      </h1>

      <div class="card">
        <h4 class="card-header">Problem 4</h4>
        <div class="card-body">
          <code class="prettyprint language-javascript">
<?php include($_SERVER['DOCUMENT_ROOT']."/cs1101s/programs/5/p4.js"); ?>
          </code>
        </div>
      </div>

      <div class="card">
        <h4 class="card-header">Problem 5</h4>
        <div class="card-body">
          <code class="prettyprint language-javascript">
<?php include($_SERVER['DOCUMENT_ROOT']."/cs1101s/programs/5/p5.js"); ?>
          </code>
        </div>
      </div>

      <div class="card">
        <h4 class="card-header">Problem 6</h4>
        <div class="card-body">
          <p>We will implement queue with a list. The head of the list will be the earliest element enqueued.</p>
          <code class="prettyprint language-javascript">
<?php include($_SERVER['DOCUMENT_ROOT']."/cs1101s/programs/5/p6-b.js"); ?>
          </code>
          <p>To enqueue an element <tt>x</tt> into our queue <tt>q</tt>, we add it to the end of the list. Since we have to traverse and rebuild the entire list, the order of growth in both time and space is \(O(n)\).</p>
          <code class="prettyprint language-javascript">
<?php include($_SERVER['DOCUMENT_ROOT']."/cs1101s/programs/5/p6-c.js"); ?>
          </code>
          <p>Dequeing is relatively easier, we can return the tail to remove the head. The order of growth in time is \(O(1)\). For space, it is also \(O(1)\) because we <strong>do not create extra memory</strong>.</p>
          <code class="prettyprint language-javascript">
<?php include($_SERVER['DOCUMENT_ROOT']."/cs1101s/programs/5/p6-d.js"); ?>
          </code>
          <p><tt>qhead</tt> has the same behavior as <tt>deque</tt> in terms of the order of growth in time and space.</p>
          <code class="prettyprint language-javascript">
<?php include($_SERVER['DOCUMENT_ROOT']."/cs1101s/programs/5/p6-e.js"); ?>
          </code>
          <p>What if we implement queue in a way such that the head of the list is the latest element enqueued? What are the changes in order of growth of each function?</p>
        </div>
      </div>
    </div>

    <?php include($_SERVER['DOCUMENT_ROOT']."/cs1101s/layout/footer.php");?>