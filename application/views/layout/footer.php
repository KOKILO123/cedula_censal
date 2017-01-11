<footer id="my-footer" class="mdl-mini-footer">
    <div class="mdl-mini-footer__left-section">
        <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" id="btnanterior_id" name="btnanterior"
           href="<?php echo base_url() . 'index.php/' . (isset($anterior) ? $anterior : ''); ?>">Anterior</a>
    </div>
    <div class="mdl-mini-footer__right-section">
        <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" id="btnsiguiente_id" name="btnsiguiente">Siguiente</button>
    </div>
</footer>
<?php if (isset($form)): ?>
    <?php echo $form->close_tag(); ?>
    <script type="text/javascript"> var rules =<?php echo $form->getJsonValidate(); ?>;</script>
<?php endif; ?>
<!--<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>-->