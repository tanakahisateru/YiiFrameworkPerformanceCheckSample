<?php $post = $this->post; ?>
<dl>
  <dt>id</dt>
  <dd><?php echo htmlspecialchars($post->id); ?></dd>
  <dt>name</dt>
  <dd><?php echo htmlspecialchars($post->name); ?></dd>
  <dt>text</dt>
  <dd><?php echo nl2br(htmlspecialchars($post->text)); ?></dd>
  <dt>created</dt>
  <dd><?php echo htmlspecialchars($post->created); ?></dd>
  <dt>modiified</dt>
  <dd><?php echo htmlspecialchars($post->modified); ?></dd>
</dl>
