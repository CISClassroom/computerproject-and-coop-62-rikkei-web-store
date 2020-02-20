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

{{-- script --}}
<script src="{{ asset('js/app.js') }}" defer></script>

{{-- Ajax CDN --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

{{-- Gijgo DatePicker --}}
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/js/swiper.js"></script>
<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>


<!-- Custom script section -->
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 1,
    freeMode: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
  });
</script>

<script>
    // $('#recipeCarousel').carousel({
//   interval: 10000
// })

$('.carousel .carousel-item').each(function(){
    var minPerSlide = 3;
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    for (var i=0;i<minPerSlide;i++) {
        next=next.next();
        if (!next.length) {
        	next = $(this).siblings(':first');
      	}

        next.children(':first-child').clone().appendTo($(this));
      }
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
</script>

    <script type="text/javascript">
        $('.txt-quantity').change(function () {
        let dataUrl = $(this).closest('tr').find('button').attr('data-url');
        let dataOldUrl = $(this).closest('tr').find('button').attr('data-old-url');
        let quantity = $(this).val();
        let newUrl = dataOldUrl + '?quantity=' + $(this).val();
        $(this).closest('tr').find('button').attr('data-url', newUrl);
    });

    $(".update-cart").click(function (e) {
       e.preventDefault();

       var ele = $(this);

        $.ajax({
           url: ele.attr("data-url"),
           method: "patch",
           data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
           success: function (response) {
               window.location.reload();
           }
        });
    });

    $(".remove-from-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Are you sure to remove this item?")) {
            $.ajax({
                url: ele.attr("data-url"),
                method: "DELETE",
                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
    </script>
