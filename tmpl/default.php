<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>

<table width="100%" border="0" cellspacing="5" cellpadding="1" align="center" class="poll<?php echo $params->get('moduleclass_sfx'); ?>">
			<?php for ($i = 0, $n = count($tesis); $i < $n; $i ++) : ?>
				<tr>
					<td>
						<?php echo $tesis[$i]->name_lecture; ?>
					</td>
					<td>
						<a href="index.php?option=com_conference&task=delete_tesis&tid=<?=$tesis[$i]->id?>"><?= JText::_( 'delete' )?></a>
						<a href="<?=$tesis[$i]->file_name?>"><?= JText::_( 'show' )?></a>
					</td>
				</tr>
			<?php endfor; ?>

</table>