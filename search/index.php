<?php
define('TITLE', "search");
require( $_SERVER['DOCUMENT_ROOT'].'/file_dir_config.php' );
include( VIEW_HEADER );

require_once( DIR_SEARCH.'core/Handler.php' );
require_once( DIR_SEARCH.'core/Config.php' );
use AjaxLiveSearch\core\Config;
use AjaxLiveSearch\core\Handler;

if (session_id() == '') {
    session_start();
}

    $handler = new Handler();
    $handler->getJavascriptAntiBot();

$search_question = $_POST['q'];
echo '<input type="hidden" name="question" class="search" value="'.$search_question.'">' ;
echo "
<script>
jQuery(document).ready(function(){
    jQuery(".search").ajaxlivesearch({";
        loaded_at: <?php echo time(); ?>,
        token: <?php echo "'" . $handler->getToken() . "'"; ?>,
        max_input: <?php echo Config::getConfig('maxInputLength'); ?>,
        onResultClick: function(e, data) {
            // get the index 0 (first column) value
            var selectedOne = jQuery(data.selected).find('td').eq('0').text();

            // set the input value
            jQuery('#ls_query').val(selectedOne);

            // hide the result
            jQuery("#ls_query").trigger('ajaxlivesearch:hide_result');
        },
        onResultEnter: function(e, data) {
            // do whatever you want
            // jQuery("#ls_query").trigger('ajaxlivesearch:search', {query: 'test'});
        },
        onAjaxComplete: function(e, data) {

        }
    });
})
</script>

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">


    <link rel="stylesheet" href="/assets/vendor/ajax-live-search/css/animation.css">
    <link rel="stylesheet" href="/assets/vendor/ajax-live-search/css/fontello.css">
    <link rel="stylesheet" type="text/css" href="/assets/vendor/ajax-live-search/css/ajaxlivesearch.css">


</head>

<body>
    <div class="container pb-5 pt-5" style="padding-right: 5;padding-left: 5;padding-top: 105px;margin-top: 100px;margin-bottom: 200px;">
        <div class="col-md-9 col-xl-8 ml-auto mr-auto" style="margin-right: 40;margin-left: 40;padding: 5;padding-right: 5;padding-left: 5;">
            <form>
                <div class="form-row">
                    <div class="col-9 col-sm-10 col-md-10 col-lg-10 col-xl-10" style="padding-left: 0;padding-right: 0;margin-right: 10px;">
                        <div class="form-group col-sm" style="padding-right: 0;padding-left: 0;">
                          <input class="form-control" type="search"  id="ls_query" autofocus="" name="q" style="margin-right: 10px;"></div>
                    </div>
                    <div class="col-2 col-sm-1 col-md-1 col-lg-1 col-xl-1" style="padding-left: 5px;padding-right: px;margin-right: 0px;">
                        <div class="form-group col-sm-auto text-right" style="padding-right: 0;padding-left: 0;"><button class="btn btn-primary btn-block" type="submit" style="text-align: center;border-radius: 40px;font-family: Poppins;background: #f08b33;font-family: Poppins;font-style: normal;font-weight: 600;font-size: 14px;line-height: 24px;align-items: center;text-align: center;letter-spacing: 0.75px;color: #ffffff;width: 60px;height: 40px;"><i class="fa fa-search"></i></button></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="/assets/js/SBWP-Search-Bar-With-Parameters.js"></script>
    <script src="/assets/vendor/ajax-live-search/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/assets/vendor/ajax-live-search/js/ajaxlivesearch.js"></script>
    <script>
    jQuery(document).ready(function(){
        jQuery(".form-control").ajaxlivesearch({
            loaded_at: <?php echo time(); ?>,
            token: <?php echo "'" . $handler->getToken() . "'"; ?>,
            max_input: <?php echo Config::getConfig('maxInputLength'); ?>,
            onResultClick: function(e, data) {
                // get the index 0 (first column) value
                var selectedOne = jQuery(data.selected).find('td').eq('0').text();

                // set the input value
                jQuery('#ls_query').val(selectedOne);

                // hide the result
                jQuery("#ls_query").trigger('ajaxlivesearch:hide_result');
                window.location.href="../resume/?id="+selectedOne;
            },
            onResultEnter: function(e, data) {
                // do whatever you want
                // jQuery("#ls_query").trigger('ajaxlivesearch:search', {query: 'test'});
            },
            onAjaxComplete: function(e, data) {

            }
        });
    })
    </script>
</body>

</html>

<?php
include( VIEW_FOOTER );

?>
