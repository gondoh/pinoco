<?php 
function tpl_4cb324a2_vardump__DrkT_o1QAoMTMPqE8MD0Vg_alltests(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
$ctx->setDocType('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">',true) ;
?>
<div>
        <?php /* tag "h2" from line 11 */; ?>
<h2>URL conversion</h2>
        <?php /* tag "ul" from line 12 */; ?>
<ul>
            <?php /* tag "li" from line 13 */; ?>
<li>url: subpage.html = <?php /* tag "span" from line 13 */; ?>
<span><?php echo phptal_escape($ctx->this->url('subpage.html')); ?>
</span></li>
            <?php /* tag "li" from line 14 */; ?>
<li>url: subdir/index.html = <?php /* tag "span" from line 14 */; ?>
<span><?php echo phptal_escape($ctx->this->url('subdir/index.html')); ?>
</span></li>
            <?php /* tag "li" from line 15 */; ?>
<li>url: /abspath/index.html = <?php /* tag "span" from line 15 */; ?>
<span><?php echo phptal_escape($ctx->this->url('/abspath/index.html')); ?>
</span></li>
            <?php /* tag "li" from line 16 */; ?>
<li>url: /media/images/existing.jpg = <?php /* tag "span" from line 16 */; ?>
<span><?php echo phptal_escape($ctx->this->url('/media/images/existing.jpg')); ?>
</span></li>
            <?php /* tag "li" from line 17 */; ?>
<li>url: /media/images/missing.jpg = <?php /* tag "span" from line 17 */; ?>
<span><?php echo phptal_escape($ctx->this->url('/media/images/missing.jpg')); ?>
</span></li>
            <?php /* tag "li" from line 18 */; ?>
<li>url: action.php?param=will_be_alive = <?php /* tag "span" from line 18 */; ?>
<span><?php echo phptal_escape($ctx->this->url('action.php?param=will_be_alive')); ?>
</span></li>
        </ul>
        
        <?php /* tag "h2" from line 21 */; ?>
<h2>Available variables of $this</h2>
        <?php /* tag "ul" from line 22 */; ?>
<ul>
            <?php 
/* tag "li" from line 23 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->item = new PHPTAL_RepeatController($ctx->this)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->item as $ctx->item): ;
?>
<li>$this-&gt;<?php /* tag "span" from line 23 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'item/key')); ?>
</span> = <?php /* tag "span" from line 23 */; ?>
<span><?php echo phptal_escape($ctx->item); ?>
</span></li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

        </ul>
	</div><?php 
}

 ?>
<?php 
function tpl_4cb324a2_vardump__DrkT_o1QAoMTMPqE8MD0Vg(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
$ctx->setDocType('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">',false) ;
?>

<?php /* tag "html" from line 4 */; ?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <?php /* tag "head" from line 5 */; ?>
<head>
        <?php /* tag "meta" from line 6 */; ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <?php /* tag "title" from line 7 */; ?>
<title>Pinoco Test asset</title>
    </head>
    <?php /* tag "body" from line 9 */; ?>
<body>
	<?php /* tag "div" from line 10 */; ?>

    </body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /Users/tanakahisateru/Sites/pinoco/test/www/basic/_vardump.html (edit that file instead) */; ?>