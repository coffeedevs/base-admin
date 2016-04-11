<script>
    $('.delete-form').submit(function (e) {
        var self = this;
        e.preventDefault();
        swal({
                    title: "Está seguro?",
                    text: "El modelo se eliminará definitivamente",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Si, borrarlo!",
                    cancelButtonText: "Cancelar",
                    closeOnConfirm: false
                },
                function () {
                    self.submit();
                });
    });
</script>