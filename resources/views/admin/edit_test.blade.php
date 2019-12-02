<!DOCTYPE html>
<html>
 <head>
  <title>Upload Image in Laravel using Ajax</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <div class="container">
   <h3 align="center">Upload Image in Laravel using Ajax</h3>
   <br />
   <div class="alert" id="message" style="display: none"></div>
   <form method="post" id="upload_form" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" />
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" />
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" />
        </div>
        <div class='file-input px-0 mb-3'>
                <input type="file" name="select_file" id="select_file" />
                <span class='button'>เลือกไฟล์</span>
                <span class='label' data-js-label>ยังไม่ได้เลือกไฟล์</label>
            </div>
        <p>
            <input type="submit" value="Send" />
        </p>
    </form>
   <br />
   <span id="uploaded_image"></span>
  </div>
 </body>
</html>

<script>
    $(document).ready(function(){
        (function ($) {
            $.fn.serializeFormJSON = function () {

                var o = {};
                var a = this.serializeArray();
                $.each(a, function () {
                    if (o[this.name]) {
                        if (!o[this.name].push) {
                            o[this.name] = [o[this.name]];
                        }
                        o[this.name].push(this.value || '');
                    } else {
                        o[this.name] = this.value || '';
                    }
                });
                return o;
            };
        })(jQuery);

        $('form').submit(function (e) {
            e.preventDefault();
            var data = $(this).serializeFormJSON();
            console.log(data);

            $.ajax({
                url:"{{ route('ajaxupload.action') }}",
                method:"POST",
                data:
                data
                ,
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success:function(data)
                {
                    console.log(data.news_id);
                    $('#message').css('display', 'block');
                    $('#message').html(data.message);
                    $('#message').addClass(data.class_name);
                    $('#blah').html(data.uploaded_image);
                }
            })
        });
    });
</script>
