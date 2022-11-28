<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?    
    if(isset($_SESSION['status']) && $_SESSION['status'] !='')
    {
        ?>
        <script>
            Swal.fire
            ({
               title: "<?= $_SESSION['status'];?>",
               text: "<?= $_SESSION['status_text'];?>",
               icon: "<?= $_SESSION['status_icon'];?>",
            });   
        </script>

        <?
        unset($_SESSION['status']);
        unset($_SESSION['status_text']);
        unset($_SESSION['status_icon']);    
    }

?>

