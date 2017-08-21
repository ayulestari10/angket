<div class="container">
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		<?php foreach ($kategori as $k): ?>
			<div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="heading<?= $k->kategori ?>">
			      <h4 class="panel-title">
			        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $k->kategori ?>" aria-expanded="false" aria-controls="collapse<?= $k->kategori ?>">
			          <?= $k->kategori ?>
			        </a>
			      </h4>
			    </div>
			    <div id="collapse<?= $k->kategori ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?= $k->kategori ?>">
			      <div class="panel-body">
			        <ul>
			        	<?php foreach ($pernyataan as $row): ?>
			        		<?php if ($row->kategori == $k->kategori): ?>
			        			<li><a href="<?= base_url('angket/detail/'.$row->id) ?>"><?= $row->pernyataan ?></a></li>
			        		<?php endif; ?>
			        	<?php endforeach; ?>
			        </ul>
			      </div>
			    </div>
			  </div>		
		<?php endforeach; ?>
	</div>
</div>