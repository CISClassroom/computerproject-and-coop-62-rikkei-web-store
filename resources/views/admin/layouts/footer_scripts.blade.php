<!-- Bootstrap core JavaScript -->
<!-- Bootstrap Scripts -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

{{-- Gijgo DatePicker --}}
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

<script src="{{ asset('js/app.js') }}">
</script>
<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
</script>

<script>
    $('.circle').click(function() {
        $('#rotate').toggleClass('rotated');
    });
</script>

<script>
    $('.datepicker').datepicker({
        uiLibrary: 'bootstrap4',
        format: "yyyy-mm-dd",
        startView: 2,
        autoclose: true,
        todayHighlight: true,
        orientation: "top auto",
    });
</script><script>
    $('.datepicker2').datepicker({
        uiLibrary: 'bootstrap4',
        format: "yyyy-mm-dd",
        startView: 2,
        autoclose: true,
        todayHighlight: true,
        orientation: "top auto",
    });
</script>
