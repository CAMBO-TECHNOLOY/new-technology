@extends('admin_layouts.master')

@section('content')

    <div id="con_top">
        <div class="msg-ok">
            <div class="msg_ok_text"><div class="icon_succes"></div>succesifully!</div>
        </div>
        <div class="msg-error">
            <div class="msg_error_text"><div class="icon_error"></div>false!</div>
        </div>
    </div>
    <div id="content">
        <!--product add-->
        <div class="content_left">
            <form method="post" enctype="multipart/form-data">
                <table cellspacing="10px">
                    <tr>
                        <td>Product Name:</td>
                        <td><input type="text" name="pro_name" required tabindex="1"></td>
                    </tr>
                    <tr>
                        <td>Product Photo:</td>
                        <td><input type="file" name="pro_img" tabindex="2" id="imgInp"></td>
                    </tr>
                    <tr>
                        <td>Product URL:</td>
                        <td><input type="text" name="pro_url" tabindex="3"></td>
                    </tr>
                    <tr>
                        <td>Product Description:</td>
                        <td><textarea name="pro_desc" tabindex="4"></textarea></td>
                    </tr>
                    <tr>
                        <td>Man Categories:</td>
                        <td><select name="pro_man_cat_id" tabindex="5"></select></td>
                    </tr>
                    <tr>
                        <td>Categories:</td>
                        <td><select name="pro_cat_id" tabindex="6"></select></td>
                    </tr>
                    <tr>
                        <td>Sub Categories:</td>
                        <td><select name="pro_sub_cat_id" tabindex="7"></select></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td align="right"><input type="submit" name="btnadd" value="Save" tabindex="8"></td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="content_right">
            <img src="" width="200px" height="200px" id="blah">
        </div>
        <!--end product add-->
    </div>
@stop

@section('script')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function(){
            readURL(this);
        });
    </script>
@stop

