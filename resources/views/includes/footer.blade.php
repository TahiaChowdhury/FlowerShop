 <footer>
    <div class="content">
      <div class="top">
        <div class="logo-details">
          <i class="fab fa-slack"></i>
        </div>

      </div>
      <center>
      <div class="bottom-details">
        <div class="bottom_text">
          <span class="copyright_text">Copyright © 2022 <a href="#">Flower Shop.</a>All rights reserved</span>
          <span class="policy_terms">
            <a href="#">Privacy policy</a>
            <a href="#">Terms & condition</a>
          </span>
        </div>
      </div>
      </center>
  </footer>



 <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

     <script src="{{asset('backend/lib/jquery/jquery.min.js')}}"></script>

    <!-- Toastr plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Toastr Alert Type Design start -->
    <script type="text/javascript">
        @if( Session::has('message'))
            var type ="{{Session::get('alert-type', 'info') }}";

            switch(type){
                case 'info':
                    toastr.info("{{Session::get('message') }}");
                break;
                case 'warning':
                toastr.warning("{{Session::get('message') }}");
                break;
                case 'success':
                toastr.success("{{Session::get('message') }}");
                break;
                case 'error':
                toastr.error("{{Session::get('message') }}");
                break;

            }
        @endif
    </script>
    <!-- Toster Alert Type Design end -->
    <script type="text/javascript">

        toastr.options = {
          "closeButton": true,
          "debug": false,
          "newestOnTop": false,
          "progressBar": true,
          "positionClass": "toast-bottom-right",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
}
    </script>
    <!-- Delete Alert start -->
    <script>
      function myFunction() {
          if(!confirm("Are You Sure to delete this? "))
          event.preventDefault();
      }
     </script>
    <!-- Delete Alert end -->