<!-- parsley js cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>

<script>
    $(document).ready(function() {

        var parsleyConfig = {
            errorsContainer: function(parsleyField) {
                var $err = parsleyField.$element.siblings('#error');
                return $err;
            }
        }

        $('#form-add').parsley(parsleyConfig);

        $('#form-add').submit(function(e) {
            e.preventDefault();

            $('#nm_kelp').attr('required', 'required');
            $('#almt_kelp').attr('required', 'required');
            $('#notelp_kelp').attr('required', 'required');
            $('#status_kelp').attr('required', 'required');
            $('#status_bantuan').attr('required', 'required');
            $('#sistem_pemelihara').attr('required', 'required');
            $('#plyn_kesehatan').attr('required', 'required');

            if ($('#form-add').parsley().isValid() == true) {
                $.ajax({
                    method: 'POST',
                    url: $(this).attr('action'),
                    data: new FormData(this),
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        $('#add').attr('disabled', 'disabled');
                        $('#add').val('Waiting...');
                    },
                    success: function(data) {
                        console.log(data);

                        if (data.type == 'validasi') {
                            $.each(data.error, function(index, value) {
                                $('#' + value + '').attr('required', 'required');
                            });
                        }

                        $('#form-add')[0].reset();
                        $('#add').removeAttr('disabled');
                        $('#add').val('Add');
                    }
                })
            }
        });

    });
</script>