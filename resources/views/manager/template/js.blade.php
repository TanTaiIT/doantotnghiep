<script src="{!! asset('layout_admin/admin/vendors/jquery/dist/jquery.min.js')!!}"></script>

    <!-- Bootstrap -->
    <script src="{!! asset('layout_admin/admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')!!}"></script>
    <!-- FastClick -->
    <script src="{!! asset('layout_admin/admin/vendors/fastclick/lib/fastclick.js')!!}"></script>
    <script src="{!! asset('layout_admin/admin/vendors/select2/dist/js/select2.full.min.js')!!}"></script>
    <!-- NProgress -->
    <script src="{!! asset('layout_admin/admin/vendors/nprogress/nprogress.js')!!}"></script>
    <!-- Chart.js -->
    <script src="{!! asset('layout_admin/admin/vendors/Chart.js/dist/Chart.min.js')!!}"></script>
    <!-- gauge.js -->
    <script src="{!! asset('layout_admin/admin/vendors/gauge.js/dist/gauge.min.js')!!}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{!! asset('layout_admin/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')!!}"></script>
    <!-- iCheck -->
    <script src="{!! asset('layout_admin/admin/vendors/iCheck/icheck.min.js')!!}"></script>
    <!-- Skycons -->
    <script src="{!! asset('layout_admin/admin/vendors/skycons/skycons.js')!!}"></script>
    <!-- Flot -->
    <script src="{!! asset('layout_admin/admin/vendors/Flot/jquery.flot.js')!!}"></script>
    <script src="{!! asset('layout_admin/admin/vendors/Flot/jquery.flot.pie.js')!!}"></script>
    <script src="{!! asset('layout_admin/admin/vendors/Flot/jquery.flot.time.js')!!}"></script>
    <script src="{!! asset('layout_admin/admin/vendors/Flot/jquery.flot.stack.js')!!}"></script>
    <script src="{!! asset('layout_admin/admin/vendors/Flot/jquery.flot.resize.js')!!}"></script>
    <!-- Flot plugins -->
    <script src="{!! asset('layout_admin/admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js')!!}"></script>
    <script src="{!! asset('layout_admin/admin/vendors/flot-spline/js/jquery.flot.spline.min.js')!!}"></script>
    <script src="{!! asset('layout_admin/admin/vendors/flot.curvedlines/curvedLines.js')!!}"></script>
    <!-- DateJS -->
    <script src="{!! asset('layout_admin/admin/vendors/DateJS/build/date.js')!!}"></script>



    <!-- JQVMap -->
<!--     <script src="{!! asset('layout_admin/admin/vendors/jqvmap/dist/jquery.vmap.js')!!}"></script>
    <script src="{!! asset('layout_admin/admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js')!!}"></script>
    <script src="{!! asset('layout_admin/admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')!!}"></script> -->
    <!-- bootstrap-daterangepicker -->
    <script src="{!! asset('layout_admin/admin/vendors/moment/min/moment.min.js')!!}"></script>
    <script src="{!! asset('layout_admin/admin/vendors/bootstrap-daterangepicker/daterangepicker.js')!!}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{!! asset('layout_admin/admin/build/js/custom.min.js')!!}"></script>

    <script src="{!!asset('layout_admin/ckeditor/ckeditor.js')!!}"></script>
<!--     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
    <script src="{!! asset('layout_admin/js/simple.money.format.js')!!}"></script>
    <!-- <script src="{!! asset('layout_admin/admin/vendors/morris.js/morris.min.js')!!}"></script> -->
    <script src="{!! asset('layout_admin/admin/vendors/raphael/raphael.min.js')!!}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<!--     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script> -->




    <script src="{!! asset('layout_admin/admin/vendors/jszip/dist/jszip.min.js')!!}"></script>
    <script src="{!! asset('layout_admin/admin/vendors/pdfmake/build/pdfmake.min.js')!!}"></script>
    <script src="{!! asset('layout_admin/admin/vendors/pdfmake/build/vfs_fonts.js')!!}"></script>
<!--     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
    <script src="{!! asset('layout_admin/admin/vendors/validator/multifield.js')!!}"></script>
    <script src="{!! asset('layout_admin/admin/vendors/validator/validator.js')!!}"></script>




<!--     <script src="{!! asset('layout_admin/admin/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')!!}"></script> -->





    <!-- <script src="{!! asset('layout_admin/admin/vendors/jquery/dist/jquery.min.js')!!}"></script> -->
    <!-- Bootstrap -->
   <script src="{!! asset('layout_admin/admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')!!}"></script>
    <!-- FastClick -->
    <script src="{!! asset('layout_admin/admin/vendors/fastclick/lib/fastclick.js')!!}"></script>
    <!-- NProgress -->
    <script src="{!! asset('layout_admin/admin/vendors/nprogress/nprogress.js')!!}"></script>

   <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
   <script src="{!! asset('layout_admin/admin/build/js/custom.min.js')!!}"></script>
   <script src="{!! asset('layout_admin/js/jquery.min.js')!!}"></script>
    <!-- Custom Theme Scripts -->
    @yield('ui')

    <!--  -->



  <!--   <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript" charset="utf-8" async defer></script>
  
  @yield('script')

  @yield('morris')
  @yield('paginate')

<script>
      
        $('.chitiet').click(function(){
        var id=$(this).data("id");
        var _token =$('input[name="_token"]').val();
        $.ajax({
            url:"view-order/"+id,
            method:"POST",
            dataType:"JSON",
            data:{id:id,_token:_token},
            success:function(data){
                $('#kh').html(data.kh);
                $('#ship').html(data.ship);
                $('#detail').html(data.detail);
                $('#in').html(data.in);
                $('#print').html(data.print);
            }
        });
    });
     
        
    </script>
   

   
<script>
        $('.nhan').on('click',function(){
            var value=$('input:checkbox:checked').map(function(){
            return this.value;
        }).get().join(",");

            var _token = $('input[name="_token"]').val();
        if(value==''){
            toastr.warning('ch???n s???n ph???m c???n x??a');
        }else{
        $.ajax({
            url:"{{url('/xoanhieu')}}",
            method:"POST",
            data:{value:value,_token:_token},
            success:function(data){
                window.location.reload();
            }
        });
    }

        });
        
    </script>

   
    
    <script>
        function hideshow(){
            var password = document.getElementById("password1");
            var slash = document.getElementById("slash");
            var eye = document.getElementById("eye");
            
            if(password.type === 'password'){
                password.type = "text";
                slash.style.display = "block";
                eye.style.display = "none";
            }
            else{
                password.type = "password";
                slash.style.display = "none";
                eye.style.display = "block";
            }

        }
    </script>

    <script>
        // initialize a validator instance from the "FormValidator" constructor.
        // A "<form>" element is optionally passed as an argument, but is not a must
        var validator = new FormValidator({
            "events": ['blur', 'input', 'change']
        }, document.forms[0]);
        // on form "submit" event
        document.forms[0].onsubmit = function(e) {
            var submit = true,
                validatorResult = validator.checkAll(this);
            console.log(validatorResult);
            return !!validatorResult.valid;
        };
        // on form "reset" event
        document.forms[0].onreset = function(e) {
            validator.reset();
        };
        // stuff related ONLY for this demo page:
        $('.toggleValidationTooltips').change(function() {
            validator.settings.alerts = !this.checked;
            if (this.checked)
                $('form .alert').remove();
        }).prop('checked', false);

    </script>









    <script type="text/javascript">
            $('#search').on('keyup',function(){
                var value = $(this).val();
                $.ajax({
                    type: 'get',
                    url:'{{url('/product/search')}}',
                    data: {
                        search: value
                    },
                    success:function(data){
                        $('#list').html(data);
                    }
                });
            })
            $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
        </script>

<!-- coupon -->
<script type="text/javascript">
   
  $( function() {
    $( "#start_coupon" ).datepicker({
        prevText:"Th??ng tr?????c",
        nextText:"Th??ng sau",
        dateFormat:"yy/mm/dd",
        dayNamesMin: [ "Th??? 2", "Th??? 3", "Th??? 4", "Th??? 5", "Th??? 6", "Th??? 7", "Ch??? nh???t" ],
        duration: "slow"
    });
    $( "#end_coupon" ).datepicker({
        prevText:"Th??ng tr?????c",
        nextText:"Th??ng sau",
        dateFormat:"yy/mm/dd",
        dayNamesMin: [ "Th??? 2", "Th??? 3", "Th??? 4", "Th??? 5", "Th??? 6", "Th??? 7", "Ch??? nh???t" ],
        duration: "slow"
    });
  } );
 
</script>
<!-- end coupon  -->
<script type="text/javascript">
 
    function ChangeToSlug()
        {
            var slug;
         
            //L???y text t??? th??? input title 
            slug = document.getElementById("slug").value;
            slug = slug.toLowerCase();
            //?????i k?? t??? c?? d???u th??nh kh??ng d???u
                slug = slug.replace(/??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'a');
                slug = slug.replace(/??|??|???|???|???|??|???|???|???|???|???/gi, 'e');
                slug = slug.replace(/i|??|??|???|??|???/gi, 'i');
                slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'o');
                slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???/gi, 'u');
                slug = slug.replace(/??|???|???|???|???/gi, 'y');
                slug = slug.replace(/??/gi, 'd');
                //X??a c??c k?? t??? ?????t bi???t
                slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
                //?????i kho???ng tr???ng th??nh k?? t??? g???ch ngang
                slug = slug.replace(/ /gi, "-");
                //?????i nhi???u k?? t??? g???ch ngang li??n ti???p th??nh 1 k?? t??? g???ch ngang
                //Ph??ng tr?????ng h???p ng?????i nh???p v??o qu?? nhi???u k?? t??? tr???ng
                slug = slug.replace(/\-\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-/gi, '-');
                slug = slug.replace(/\-\-/gi, '-');
                //X??a c??c k?? t??? g???ch ngang ??? ?????u v?? cu???i
                slug = '@' + slug + '@';
                slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                //In slug ra textbox c?? id ???slug???
            document.getElementById('convert_slug').value = slug;
        }
</script>
    <script src="{!! asset('layout_admin/js/bootstrap.min.js')!!}"></script>
    









<script src="{!! asset('layout_admin/js/validate.js')!!}"></script>
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script> -->
<script type="text/javascript">
        $.validate({
            
        });
</script>   

    <script type="text/javascript">
   
  $( function() {
    $( "#datepicker" ).datepicker({
        prevText:"Th??ng tr?????c",
        nextText:"Th??ng sau",
        dateFormat:"yy-mm-dd",
        dayNamesMin: [ "Th??? 2", "Th??? 3", "Th??? 4", "Th??? 5", "Th??? 6", "Th??? 7", "Ch??? nh???t" ],
        duration: "slow"
    });
    $( "#datepicker2" ).datepicker({
        prevText:"Th??ng tr?????c",
        nextText:"Th??ng sau",
        dateFormat:"yy-mm-dd",
        dayNamesMin: [ "Th??? 2", "Th??? 3", "Th??? 4", "Th??? 5", "Th??? 6", "Th??? 7", "Ch??? nh???t" ],
        duration: "slow"
    });
  } );
 
</script>


    <script type="text/javascript">
    $('.update_quantity_order').click(function(){
        var order_product_id = $(this).data('product_id');
        var order_qty = $('.order_qty_'+order_product_id).val();
        var order_code = $('.order_code').val();
        var _token = $('input[name="_token"]').val();
        // alert(order_product_id);
        // alert(order_qty);
        // alert(order_code);
        $.ajax({
                url : '{{url('/update-qty')}}',

                method: 'POST',

                data:{_token:_token, order_product_id:order_product_id ,order_qty:order_qty ,order_code:order_code},
                // dataType:"JSON",
                success:function(data){

                    alert('C???p nh???t s??? l?????ng th??nh c??ng');
                 
                   location.reload();
                    
              
                    

                }
        });

    });
</script>
    <script type="text/javascript">
    $('.order_details').change(function(){
        var order_status = $(this).val();
        var order_id = $(this).children(":selected").attr("id");
        var _token = $('input[name="_token"]').val();

        //lay ra so luong
        quantity = [];
        $("input[name='product_sales_quantity']").each(function(){
            quantity.push($(this).val());
        });
        //lay ra product id
        order_product_id = [];
        $("input[name='order_product_id']").each(function(){
            order_product_id.push($(this).val());
        });
        j = 0;
        for(i=0;i<order_product_id.length;i++){
            //so luong khach dat
            var order_qty = $('.order_qty_' + order_product_id[i]).val();
            //so luong ton kho
            var order_qty_storage = $('.order_qty_storage_' + order_product_id[i]).val();

            if(parseInt(order_qty)>parseInt(order_qty_storage)){
                j = j + 1;
                if(j==1){
                    alert('S??? l?????ng b??n trong kho kh??ng ?????');
                }
                $('.color_qty_'+order_product_id[i]).css('background','#000');
            }
        }
        
        if(j==0){
          
                $.ajax({
                        url : '{{url('/update-order-qty')}}',
                            method: 'POST',
                            data:{_token:_token, order_status:order_status ,order_id:order_id ,quantity:quantity, order_product_id:order_product_id},
                            success:function(data){
                                alert('????n h??ng ???? ???????c x??? l??');
                                location.reload();
                            }
                });
            
        }

    });
</script>

<script type="text/javascript">
    $('.comment_duyet_btn').click(function(){
        var comment_status = $(this).data('comment_status');

        var comment_id = $(this).data('comment_id');
        var comment_product_id = $(this).attr('id');
        if(comment_status==0){
            var alert = 'Thay ?????i th??nh duy???t th??nh c??ng';
        }else{
            var alert = 'Thay ?????i th??nh kh??ng duy???t th??nh c??ng';
        }
          $.ajax({
                url:"{{url('/allow-comment')}}",
                method:"POST",

                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:{comment_status:comment_status,comment_id:comment_id,comment_product_id:comment_product_id},
                success:function(data){
                    location.reload();
                   $('#notify_comment').html('<span class="text text-alert">'+alert+'</span>');

                }
            });


    });
    $('.btn-reply-comment').click(function(){
        var comment_id = $(this).data('comment_id');

        var comment = $('.reply_comment_'+comment_id).val();

        

        var comment_product_id = $(this).data('product_id');
          $.ajax({
                url:"{{url('/reply-comment')}}",
                method:"POST",

                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:{comment:comment,comment_id:comment_id,comment_product_id:comment_product_id},
                success:function(data){
                    $('.reply_comment_'+comment_id).val('');
                    window.location.reload();
                   // $('#notify_comment').html('<span class="text text-alert">Tr??? l???i b??nh lu???n th??nh c??ng</span>');
                   

                }
            });


    });
</script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(imgPre).attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $('#ful').change(function () {
            readURL(this, '#imgPre');
        });
    </script>
 


 <script  type="text/javascript">
       // Replace the <textarea id="editor1"> with a CKEditor
       // instance, using default configuration.
  
        // CKEDITOR.replace('ckeditor');
        CKEDITOR.replace('ckeditor',{

            filebrowserImageUploadUrl : "{{ url('uploads-ckeditor?_token='.csrf_token()) }}",
            filebrowserBrowseUrl : "{{ url('file-browser?_token='.csrf_token()) }}",
            filebrowserUploadMethod: 'form'

        });
        CKEDITOR.replace('ckeditor1', {

            filebrowserImageUploadUrl : "{{ url('uploads-ckeditor?_token='.csrf_token()) }}",
            filebrowserBrowseUrl : "{{ url('file-browser?_token='.csrf_token()) }}",
            filebrowserUploadMethod: 'form'

        });

        

     
    
</script>


