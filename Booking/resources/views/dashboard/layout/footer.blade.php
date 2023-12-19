 <!-- BEGIN FOOTER -->
 <div class="page-footer">
    <div class="page-footer-inner"> 2014 &copy; Metronic by keenthemes.
        <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->
 <!-- BEGIN CORE PLUGINS -->
 <script src="{{ asset('dashboard') }}/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
 <script src="{{ asset('dashboard') }}/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
 <script src="{{ asset('dashboard') }}/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
 <script src="{{ asset('dashboard') }}/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
 <script src="{{ asset('dashboard') }}/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
 <script src="{{ asset('dashboard') }}/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
 <script src="{{ asset('dashboard') }}/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
 <!-- END CORE PLUGINS -->
 <!-- BEGIN PAGE LEVEL PLUGINS -->
 <script src="{{ asset('dashboard') }}/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
 <script src="{{ asset('dashboard') }}/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
 <script src="{{ asset('dashboard') }}/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
 <script src="{{ asset('dashboard') }}/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
 <script src="{{ asset('dashboard') }}/assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
 <script src="{{ asset('dashboard') }}/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
 <script src="{{ asset('dashboard') }}/assets/global/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
 <script src="{{ asset('dashboard') }}/assets/global/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>
 <script src="{{ asset('dashboard') }}/assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
 <!-- END PAGE LEVEL PLUGINS -->
 <!-- BEGIN THEME GLOBAL SCRIPTS -->
 <script src="{{ asset('dashboard') }}/assets/global/scripts/app.min.js" type="text/javascript"></script>
 <!-- END THEME GLOBAL SCRIPTS -->
 <!-- BEGIN PAGE LEVEL SCRIPTS -->
 <script src="{{ asset('dashboard') }}/assets/pages/scripts/form-validation.min.js" type="text/javascript"></script>
 <!-- END PAGE LEVEL SCRIPTS -->
 <!-- BEGIN THEME LAYOUT SCRIPTS -->
 <script src="{{ asset('dashboard') }}/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
 <script src="{{ asset('dashboard') }}/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
 <script src="{{ asset('dashboard') }}/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
 <!-- END THEME LAYOUT SCRIPTS -->
 <script>
$(document).ready(function () {
    function fetchNotifications() {
        $('#notification-icon-counter')
        $.ajax({
            url: '{{ route("notifications") }}', // Change this URL to your Laravel route
            type: 'POST',
            data:{
                '_token': '{{csrf_token()}}' ,
                'old_counter':$('#notifications_counter_js').val()
            },
            dataType: 'json',
            success: function (data) {
                if(data.status == 1){
                    $('#notification-icon-counter').text(data.counter);
                    $('#notifications_counter_js').val(data.counter);
                    $('#notifications-content').html(data.content);
                }
            },
            error: function (xhr, status, error) {
            }
        });
    }
    fetchNotifications();
    setInterval(fetchNotifications, 3000);
});
</script>

</body>

</html>
