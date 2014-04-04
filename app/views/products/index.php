<div class="products">
  <?php foreach ($products as $product): ?>
    <div class="product">
      <?php echo $product[0]; ?>
      <span class="price"><?php echo $product[1]; ?></span>
    </div>
  <?php endforeach; ?>
</div>
