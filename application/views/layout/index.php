<!DOCTYPE html>
<html class="no-js">
<head>
    <title><?php echo isset($titulo) ? $titulo : ''; ?></title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo base_url(); ?>assets/img/logo-inei.png" rel="shortcut icon" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/demo.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/jquery.mmenu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap-endes.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap-multiselect.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/select2.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/datatable.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/material.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/kybarg/mdl-selectfield/mdl-menu-implementation/mdl-selectfield.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script defer src="https://cdn.rawgit.com/kybarg/mdl-selectfield/mdl-menu-implementation/mdl-selectfield.min.js"></script>
    <?php if (isset($_layoutParams['css']) && count($_layoutParams['css'])): ?>
        <?php foreach ($_layoutParams['css'] as $layout): ?>
            <link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/css/$layout.css"; ?>">
        <?php endforeach; ?>
    <?php endif; ?>
</head>
<body>
<div id="page">
    <?php if ($header) echo $header; ?>
    <main class="mdl-layout__content">
        <div class="page-content">
            <?php if ($middle) echo $middle; ?>
        </div>
    </main>
    <?php if ($footer) echo $footer; ?>
    <?php echo '</div>'; ?>
</div>
</body>
</html>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.mmenu.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/utilidades.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/select2.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/datatable.js"></script>

<script type="text/javascript">
    $.extend(jQuery.validator.messages, {
        required: "Error: Debe existir información",
        // remote: "Please fix this field.",
        email: "Ingrese un email válido",
        url: "Ingrese una URL válida",
        date: "Ingrese una fecha válida",
        // dateISO: "Please enter a valid date (ISO).",
        number: "Solo se permiten números enteros",
        digits: "Solo se permiten números enteros",
        range: jQuery.validator.format("Por favor ingrese un valor  entre {0} y {1}."),
        // creditcard: "Please enter a valid credit card number.",
        // equalTo: "Please enter the same value again.",
        // accept: "Please enter a value with a valid extension.",
        maxlength: jQuery.validator.format("Por favor ingrese a lo más {0} caracteres."),
        minlength: jQuery.validator.format("Por favor ingrese por lo menos {0} carateres."),
        rangelength: jQuery.validator.format("Por favor ingrese un valor entre {0} y {1} caracteres de largo."),
        max: jQuery.validator.format("Por favor ingrese un valor menor o igual a {0}."),
        min: jQuery.validator.format("Por favor ingrese un valor mayor o igual a {0}.")
    });
    var base_url = '<?php echo base_url(); ?>';
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/base.js"></script>
<?php if (isset($_layoutParams['js']) && count($_layoutParams['js'])): ?>
    <?php foreach ($_layoutParams['js'] as $layout): ?>
        <script src="<?php echo base_url() . "assets/js/$layout.js"; ?>" type="text/javascript"></script>
    <?php endforeach; ?>
    <?php
endif;
?>
<script type="text/javascript">
    function _fn_observe() {
        $('#' + formObserve).on('change', function (e) {
            var func = window[functionObserveCallback];
            if (func && typeof func === "function") {
                func(e);
            }
        });
    }
    $(function () {
        if (typeof formObserve !== 'undefined') {
            _fn_observe();
        }

    });
    mayusculas();

</script>