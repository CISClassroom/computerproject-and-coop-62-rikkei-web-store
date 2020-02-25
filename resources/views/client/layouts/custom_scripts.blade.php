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



<script>

    $('#btnAddAddressAjax').click(function (e) {
        // Get the form data have id = formNewAddressAjax
        let formAjax = $('#formNewAddressAjax');
        // GEt all the item in form
        let itemInForm = formAjax.find('input[type="text"]');

            let arr = [];

            for (let i = 0; i< itemInForm.length - 1; i++) {
                // Add all the value in form to array
                arr.push({
                    name: $(itemInForm[i]).attr('name'),
                    value: $(itemInForm[i]).val()
                })
            }


            // Set the json data for post to controller
            let data = {
                name: arr[0].value,
                addressline1: arr[1].value,
                addressline2: arr[2].value,
                city: arr[3].value,
                country: arr[4].value
            }
            // Set the json data for post to controller
            data.zipcode = $('#zipcode').val();
            data.user_id = $('input[name="user_id"]').val();
            data._token =  '{{ csrf_token() }}'
            data.phonenumber = $('#phonenumber').val();
            data.count = $('input[name="count"]').val() + 1;

            // Call the ajax
            $.ajax({
                url: '{{ route("storeAjax") }}',
                method: "POST",
                data: data,
                success: function (response) {
                    console.log(response)
                    // When success then append new product to bottom
                    $('#tbody_delivery').append(response.view)
                }, err (response) {
                    // Show the err
                }
            });
        });
    </script>
