<?php extend_template('default-nav'); ?>

<div class="col w-12 last">
	<ul class="breadcrumb">
		<li><a href="<?=cp_url('utilities/import_converter')?>"><?=lang('import_converter')?></a></li>
		<li class="last"><?=$cp_page_title?></li>
	</ul>
	<div class="box">
		<h1><?=$cp_page_title?></h1>
		<form class="settings">
			<fieldset class="col-group last">
				<div class="setting-txt col w-16">
					<em>Generated from file: <i>(<?=$generated?> by <?=$username?>)</i></em>
				</div>
				<div class="setting-field col w-16 last">
					<textarea class="template-edit" cols="" rows="">
<?=$code?>
					</textarea>
				</div>
			</fieldset>
			<fieldset class="form-ctrls">
				<input class="btn" type="submit" value="<?=lang('btn_download_file')?>">
				<a class="btn action" href=""><?=lang('btn_copy_to_clipboard')?></a>
			</fieldset>
		</form>

	</div>
</div>