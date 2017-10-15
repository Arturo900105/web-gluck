<?php echo form_open('contacto', array('class' => 'w-100', 'id' => 'myform')); ?>
    <div class="form-group row">
        <label for="name" class="col-md-2 col-form-label font-weight-bold font-assassin text-uppercase">Nombre</label>
        <div class="col-md-10">
            <input type="text" name="control" class="form-control d-none" id="control">
            <input type="text" name="name" class="form-control" id="name">
            <?php echo form_error('name', '<div class="error">', '</div>'); ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-md-2 col-form-label font-weight-bold font-assassin text-uppercase">Mail</label>
        <div class="col-md-10">
            <input type="email" name="email" class="form-control" id="email">
            <?php echo form_error('email', '<div class="error">', '</div>'); ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="telephone"
               class="col-md-2 col-form-label font-weight-bold font-assassin text-uppercase">Tel&eacute;fono</label>
        <div class="col-md-10">
            <input type="tel" name="telephone" class="form-control" id="telephone">
            <?php echo form_error('telephone', '<div class="error">', '</div>'); ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="message"
               class="col-md-2 col-form-label font-weight-bold font-assassin text-uppercase">Mensaje</label>
        <div class="col-md-10">
            <textarea class="form-control" name="message" id="message" rows="5"></textarea>
            <?php echo form_error('message', '<div class="error">', '</div>'); ?>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-10 ml-auto text-right">
            <button type="submit" class="btn btn-primary bg-green-gluck">Enviar</button>
        </div>
    </div>
<?php echo form_close('<br />'); ?>
<?php if(isset($message)) { ?>
    <script type="text/javascript">
        window.onload = function () {
            alert('<?php echo $message; ?>');
        }
    </script>
<?php } ?>
