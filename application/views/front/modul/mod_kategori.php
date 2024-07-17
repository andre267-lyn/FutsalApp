<div class="bs-callout bs-callout-primary" style="background-image: linear-gradient(to right, #FCF481, #67E4EE);">
  <h4><i class="fa fa-tags"></i> Kategori</h4>
</div>
<ul class="list-group">
  <?php
  foreach ($kategori_sidebar as $kategori_sidebar) {
  ?>
    <li class="list-group-item">
      <span class="badge"></span>
      <i class="fa fa-tag"></i> <?php echo anchor('event/kategori/' . $kategori_sidebar->slug_kat . '', '' . $kategori_sidebar->nama_kategori . '') ?>
    </li>
  <?php } ?>
</ul>