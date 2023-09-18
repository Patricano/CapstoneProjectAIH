
<?php
if (isset($_SESSION["messages"]) && $_SESSION["messages"] != []) {

  foreach ($_SESSION["messages"] as $x => $msg) {
    ?>
        <script>
           toastr.options = {
      "closeButton": true,
      "debug": true,
      "newestOnTop": true,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "preventDuplicates": true,
      "showDuration": "200",
      "hideDuration": "1000",
      "timeOut": "10000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"

    }

    toastr["<?php echo $msg['color'] ?>"]("<?php echo $msg['message'] ?>");
         console.log("<?php echo $msg['color'] ?>")
        </script>
    <?php

  }
  $_SESSION["messages"] = [];
}

?>