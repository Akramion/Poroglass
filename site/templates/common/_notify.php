<?php namespace Processwire; ?>

<?php if($notify) : ?>
  <script>
    $(document).ready(function() {
    <?php foreach ($notify as $n) : ?>
      UIkit.notify("<?= $n['text']; ?>", {
        pos: 'bottom-center',
        status: "<?= $n['status']; ?>",
        timeout: 0
      });
    <?php endforeach; ?>
    })
  </script>
<?php endif; ?>
