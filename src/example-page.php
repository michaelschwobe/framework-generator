<?php $page_title  = 'Example Page'; require_once '_includes/app-head.php'; ?>

<p>Example <strong>page</strong> with <?php require '_patterns/example-pattern.php' ?></p>
<pre><code><?php echo htmlentities( file_get_contents( '_patterns/example-pattern.php' ) ); ?></code></pre>

<?php require_once '_includes/app-foot.php'; ?>
